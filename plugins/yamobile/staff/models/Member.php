<?php

namespace Yamobile\Staff\Models;

use Model;

/**
 * Model
 */
class Member extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_staff_members';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required',
    ];
    

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'positions' => [
            \Yamobile\Staff\Models\Position::class,
            'table' => 'yamobile_staff_members_to_positions',
        ],
        'categories' => [
            \Yamobile\Staff\Models\Category::class,
            'table' => 'yamobile_staff_members_to_categories',
        ],
    ];

    public function scopeIsActive($query)
    {
        return $query->where('is_active', true)->orderBy('sort_order', 'asc');
    }
}
