<?php

namespace  Yamobile\Services\Models;

use Backend\Models\ImportModel;

class PriceImport extends ImportModel
{

    public $table = 'yamobile_services_prices';


    protected $rules = [
        'name'    => 'required',
    ];

    public function importData($results, $sessionKey = null)
    {
        $firstRow = reset($results);

        foreach ($results as $row => $data) {

            try {

                $price = Price::find(array_get($data, 'id'));

                if (empty($price)) {

                    //  Если такого id не существует, то создать новое поле и записать данные

                    $price = Price::make();

                    $price->fill($data);


//                    $except = ['id'];
//
//                    foreach (array_except($data, $except) as $attribute => $value) {
//                        $price->{$attribute} = $value ?: null;
//                    }

                    $price->save();

                    $this->logCreated();

                }else{

                    $price = Price::find(array_get($data, 'id'));

                    $except = ['id'];

                    foreach (array_except($data, $except) as $attribute => $value) {
                        $price->update([$attribute => $value]);
                    }

                    $price->save();

                    $this->logUpdated();

                }


            }
            catch (\Exception $ex) {
                $this->logError($row, $ex);
            }

        }
    }
}

