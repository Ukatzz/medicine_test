<?php

namespace Yamobile\Staff\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_staff_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'members' => [
            \Yamobile\Staff\Models\Member::class,
            'table' => 'yamobile_staff_members_to_categories',
            'scope' => 'isActive',
        ],
    ];
}
