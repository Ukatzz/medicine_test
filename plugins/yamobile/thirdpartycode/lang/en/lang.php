<?php

return [
    'name' => 'Third Party Code',
    'description' => 'Third party code management tool',
    'components' => [
        'codes' => [
            'name' => 'Codes',
            'description' => 'Outputs codes',
            'properties' => [
                'target' => [
                    'title' => 'Target',
                    'description' => 'The value of the target which code needs to output',
                ],
            ],
        ],
    ],
    'code' => [
        'name' => 'Codes',
        'pages' => [
            'index' => [
                'title' => 'Codes',
                'breadcrumb' => 'Codes',
            ],
            'preview' => [
                'title' => 'Code preview',
                'breadcrumb' => 'Code preview',
            ],
            'create' => [
                'title' => 'Code create',
                'breadcrumb' => 'Code create',
            ],
            'update' => [
                'title' => 'Code update',
                'breadcrumb' => 'Code update',
            ],
            'reorder' => [
                'title' => 'Code reorder',
                'breadcrumb' => 'Code reorder',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Name',
                'comment' => 'Displays in admin panel only',
                'placeholder' => 'Third party service',
            ],
            'is_enabled' => [
                'label' => 'Enabled',
                'comment' => 'Output code',
            ],
            'code' => [
                'label' => 'Code',
                'comment' => 'HTML-code',
            ],
            'created_at' => [
                'label' => 'Created at',
            ],
            'updated_at' => [
                'label' => 'Updated at',
            ],
            'target' => [
                'label' => 'Target',
                'comment' => 'In which component to display the code',
            ],
            'sort_order' => [
                'label' => 'Order',
            ],
        ],
    ],
    'target' => [
        'name' => 'Targets',
        'pages' => [
            'index' => [
                'title' => 'Targets',
                'breadcrumb' => 'Targets',
            ],
            'preview' => [
                'title' => 'Target preview',
                'breadcrumb' => 'Target preview',
            ],
            'create' => [
                'title' => 'Target create',
                'breadcrumb' => 'Target create',
            ],
            'update' => [
                'title' => 'Target update',
                'breadcrumb' => 'Target update',
            ],
            'reorder' => [
                'title' => 'Target reorder',
                'breadcrumb' => 'Target reorder',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Name',
                'comment' => 'Displays in admin panel only',
                'placeholder' => 'Before </body>',
            ],
            'value' => [
                'label' => 'Value',
                'comment' => 'To identify components',
                'placeholder' => 'body_end',
            ],
            'is_enabled' => [
                'label' => 'Enabled',
                'comment' => 'Output component\'s code',
            ],
            'created_at' => [
                'label' => 'Created at',
            ],
            'updated_at' => [
                'label' => 'Updated at',
            ],
        ],
    ],
];
