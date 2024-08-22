<?php

namespace Yamobile\Staff;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'yamobile.staff::lang.name',
            'description' => 'yamobile.staff::lang.description',
            'author'      => 'yamobile.staff::lang.author',
            'icon'        => 'oc-icon-group',
            'homepage'    => 'https://github.com/ya-mobile-ru/oc-staff-plugin'
        ];
    }

    public function registerNavigation()
    {
        return [
            'staff' => [
                'label'       => 'yamobile.staff::lang.name',
                'url'         => Backend::url('yamobile/staff/members'),
                'icon'        => 'oc-icon-group',
                'permissions' => ['yamobile.staff.*'],
                'sideMenu' => [
                    'members' => [
                        'label'       => 'yamobile.staff::lang.member.name',
                        'icon'        => 'oc-icon-group',
                        'url'         => Backend::url('yamobile/staff/members'),
                        'permissions' => ['yamobile.staff.access_members']
                    ],
                    'positions' => [
                        'label'       => 'yamobile.staff::lang.position.name',
                        'icon'        => 'oc-icon-briefcase',
                        'url'         => Backend::url('yamobile/staff/positions'),
                        'permissions' => ['yamobile.staff.access_positions']
                    ],
                    'categories' => [
                        'label'       => 'yamobile.staff::lang.category.name',
                        'icon'        => 'oc-icon-th-list',
                        'url'         => Backend::url('yamobile/staff/categories'),
                        'permissions' => ['yamobile.staff.access_categories']
                    ],
                ]
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'yamobile.staff.access_members' => [
                'tab'   => 'yamobile.staff::lang.member.permissions.tab',
                'label' => 'yamobile.staff::lang.member.permissions.access_members.label',
            ],
            'yamobile.staff.access_positions' => [
                'tab'   => 'yamobile.staff::lang.position.permissions.tab',
                'label' => 'yamobile.staff::lang.position.permissions.access_positions.label',
            ],
            'yamobile.staff.access_categories' => [
                'tab'   => 'yamobile.staff::lang.category.permissions.tab',
                'label' => 'yamobile.staff::lang.category.permissions.access_categories.label',
            ],
        ];
    }

    public function registerComponents()
    {
        return [
            \Yamobile\Staff\Components\MemberComponent::class => 'Member',
            \Yamobile\Staff\Components\MembersComponent::class => 'Members',
            \Yamobile\Staff\Components\CategoriesComponent::class => 'Categories',
            \Yamobile\Staff\Components\SettingsComponent::class => 'Settings',
        ];

    }

    public function registerSettings()
    {
        return [
            'staff' => [
                'label' => 'yamobile.staff::lang.settings.name',
                'description' => 'yamobile.staff::lang.settings.description',
                'category' => 'yamobile.staff::lang.settings.category',
                'icon' => 'oc-icon-group',
                'class' => \Yamobile\Staff\Models\Settings::class,
                'order' => 500,
                'keywords' => 'staff members page settings'
            ]
        ];
    }
}
