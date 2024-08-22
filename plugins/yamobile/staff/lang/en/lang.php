<?php

return [
    'name' => 'Staff',
    'description' => 'Staff members managing system',
    'author' => 'Ya-mobile',
    'member' => [
        'name' => 'Staff members',
        'pages' => [
            'index' => [
                'title' => 'Staff members',
                'breadcrumb' => 'Staff members',
            ],
            'preview' => [
                'title' => 'Staff member preview',
                'breadcrumb' => 'Staff member preview',
            ],
            'create' => [
                'title' => 'Staff member add',
                'breadcrumb' => 'Staff member add',
            ],
            'update' => [
                'title' => 'Staff member update',
                'breadcrumb' => 'Staff member update',
            ],
            'reorder' => [
                'title' => 'Staff members reorder',
                'breadcrumb' => 'Staff members reorder',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Name',
                'comment' => 'Staff member full name',
                'placeholder' => 'Name Surname',
            ],
            'is_active' => [
                'label' => 'Active',
                'comment' => 'Inactive members will not be displayed',
            ],
            'photo' => [
                'label' => 'Photo',
                'comment' => 'Staff member photo',
            ],
            'description' => [
                'label' => 'Description',
                'comment' => 'Short description about staff member',
                'placeholder' => 'About staff member',
            ],
            'content' => [
                'label' => 'Content',
                'comment' => 'All staff member data',
            ],
            'slug' => [
                'label' => 'URL',
                'comment' => 'Slug parameter for staff member page',
                'placeholder' => 'name-surname',
            ],
            'positions' => [
                'label' => 'Positions',
                'comment' => 'Staff member positions, may be several',
            ],
            'positions' => [
                'label' => 'Categories',
                'comment' => 'Staff member categories, may be several',
            ],
            'meta_title' => [
                'label' => 'Title',
                'comment' => 'Used in the title meta tag on the staff member page',
                'placeholder' => 'Staff member page title',
            ],
            'meta_description' => [
                'label' => 'Description',
                'comment' => 'Used in the description meta tag on the staff member page',
                'placeholder' => 'Staff member page description.',
            ],
            'meta_keywords' => [
                'label' => 'Keywords',
                'comment' => 'Used in the keywords meta tag on the staff member page',
                'placeholder' => 'staff, member, page, keywords',
            ],
            'sort_order' => [
                'label' => 'Order',
            ],
            'created_at' => [
                'label' => 'Created at',
            ],
            'updated_at' => [
                'label' => 'Updated at',
            ],
        ],
        'permissions' => [
            'tab' => 'Staff',
            'access_members' => [
                'label' => 'Staff members managing',
            ],
        ],
    ],
    'position' => [
        'name' => 'Positions',
        'pages' => [
            'index' => [
                'title' => 'Positions',
                'breadcrumb' => 'Positions',
            ],
            'preview' => [
                'title' => 'Position preview',
                'breadcrumb' => 'Position preview',
            ],
            'create' => [
                'title' => 'Position add',
                'breadcrumb' => 'Position add',
            ],
            'update' => [
                'title' => 'Position update',
                'breadcrumb' => 'Position update',
            ],
            'reorder' => [
                'title' => 'Positions reorder',
                'breadcrumb' => 'Positions reorder',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Name',
                'comment' => 'Position name',
                'placeholder' => 'Position',
            ],
            'created_at' => [
                'label' => 'Created at',
            ],
            'updated_at' => [
                'label' => 'Updated at',
            ],
        ],
        'permissions' => [
            'tab' => 'Staff',
            'access_positions' => [
                'label' => 'Positions managing',
            ],
        ],
    ],
    'category' => [
        'name' => 'Categories',
        'pages' => [
            'index' => [
                'title' => 'Categories',
                'breadcrumb' => 'Categories',
            ],
            'preview' => [
                'title' => 'Category preview',
                'breadcrumb' => 'Category preview',
            ],
            'create' => [
                'title' => 'Category add',
                'breadcrumb' => 'Category add',
            ],
            'update' => [
                'title' => 'Category update',
                'breadcrumb' => 'Category update',
            ],
            'reorder' => [
                'title' => 'Categories reorder',
                'breadcrumb' => 'Categories reorder',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Name',
                'comment' => 'Category name',
                'placeholder' => 'Category',
            ],
            'created_at' => [
                'label' => 'Created at',
            ],
            'updated_at' => [
                'label' => 'Updated at',
            ],
        ],
        'permissions' => [
            'tab' => 'Staff',
            'access_categories' => [
                'label' => 'Categories managing',
            ],
        ],
    ],
    'components' => [
        'member' => [
            'name' => 'Member',
            'description' => 'Displays current staff member data',
            'properties' => [
                'slug' => [
                    'title' => 'slug',
                    'description' => 'URL parameter',
                ],
            ],
        ],
        'members' => [
            'name' => 'Members',
            'description' => 'Displays staff members',
            'properties' => [
                'membersPerPage' => [
                    'title' => 'Members per page',
                    'description' => 'Number of staff members in one page for paginatoion, leave the field blank for display all',
                ],
            ],
        ],
        'categories' => [
            'name' => 'Categories',
            'description' => 'Displays categories',
            'properties' => [
                'categoriesPerPage' => [
                    'title' => 'Categories per page',
                    'description' => 'Number of categories in one page for paginatoion, leave the field blank for display all',
                ],
            ],
        ],
        'settings' => [
            'name' => 'Settings',
            'description' => 'Displays settings data',
        ],
    ],
    'settings' => [
        'name' => 'Staff members page settings',
        'description' => 'Data for staff members page',
        'category' => 'Content',
        'fields' => [
            'heading' => [
                'label' => 'Heading',
                'comment' => 'On the staff members page',
                'placeholder' => 'Staff members',
            ],
            'image' => [
                'label' => 'Image',
                'comment' => 'On the staff members page',
            ],
            'description' => [
                'label' => 'Description',
                'comment' => 'On the staff members page',
                'placeholder' => 'Our staff members',
            ],
            'meta_title' => [
                'label' => 'Title',
                'comment' => 'Used in the title meta tag on the staff member page',
                'placeholder' => 'Staff members page title',
            ],
            'meta_description' => [
                'label' => 'Description',
                'comment' => 'Used in the description meta tag on the staff member page',
                'placeholder' => 'Staff members page description.',
            ],
            'meta_keywords' => [
                'label' => 'Keywords',
                'comment' => 'Used in the keywords meta tag on the staff member page',
                'placeholder' => 'staff, members, page, keywords',
            ],
        ],
    ],
];
