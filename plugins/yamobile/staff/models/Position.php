<?php

namespace Yamobile\Staff\Models;

use Model;

/**
 * Model
 */
class Position extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_staff_positions';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];
}
