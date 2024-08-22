<?php

namespace Yamobile\ThirdPartyCode\Models;

use Model;

/**
 * Model
 */
class Code extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_thirdpartycode_codes';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'is_enabled' => 'required',
        'code' => 'required',
        'target_id' => 'required',
    ];

    public $belongsTo = [
        'target' => \Yamobile\ThirdPartyCode\Models\Target::class,
    ];
}
