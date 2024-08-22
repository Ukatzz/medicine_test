<?php

return [
    'name' => 'Сторонний код',
    'description' => 'Инструмент для управления сторонним кодом',
    'components' => [
        'codes' => [
            'name' => 'Код',
            'description' => 'Выводит код',
            'properties' => [
                'target' => [
                    'title' => 'Цель',
                    'description' => 'Значение цели, код которой нужно вывести',
                ],
            ],
        ],
    ],
    'code' => [
        'name' => 'Код',
        'pages' => [
            'index' => [
                'title' => 'Код',
                'breadcrumb' => 'Код',
            ],
            'preview' => [
                'title' => 'Просмотр кода',
                'breadcrumb' => 'Просмотр кода',
            ],
            'create' => [
                'title' => 'Создание кода',
                'breadcrumb' => 'Создание кода',
            ],
            'update' => [
                'title' => 'Обновление кода',
                'breadcrumb' => 'Обновление кода',
            ],
            'reorder' => [
                'title' => 'Сортировка кода',
                'breadcrumb' => 'Сортировка кода',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Название',
                'comment' => 'Отображается только в админ панели',
                'placeholder' => 'Сторонний сервис',
            ],
            'is_enabled' => [
                'label' => 'Включено',
                'comment' => 'Отображать код',
            ],
            'code' => [
                'label' => 'Код',
                'comment' => 'HTML-код',
            ],
            'created_at' => [
                'label' => 'Создано',
            ],
            'updated_at' => [
                'label' => 'Обновлено',
            ],
            'target' => [
                'label' => 'Цель',
                'comment' => 'В каких компонентах отображать код',
            ],
            'sort_order' => [
                'label' => 'Порядок',
            ],
        ],
    ],
    'target' => [
        'name' => 'Цели',
        'pages' => [
            'index' => [
                'title' => 'Цели',
                'breadcrumb' => 'Цели',
            ],
            'preview' => [
                'title' => 'Просмотр цели',
                'breadcrumb' => 'Просмотр цели',
            ],
            'create' => [
                'title' => 'Создание цели',
                'breadcrumb' => 'Создание цели',
            ],
            'update' => [
                'title' => 'Обновление цели',
                'breadcrumb' => 'Обновление цели',
            ],
            'reorder' => [
                'title' => 'Сортировка целей',
                'breadcrumb' => 'Сортировка целей',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Название',
                'comment' => 'Отображается только в админ панели',
                'placeholder' => 'До </body>',
            ],
            'value' => [
                'label' => 'Значение',
                'comment' => 'Для определения компонентов',
                'placeholder' => 'body_end',
            ],
            'is_enabled' => [
                'label' => 'Включено',
                'comment' => 'Отображать код из компонента',
            ],
            'created_at' => [
                'label' => 'Создано',
            ],
            'updated_at' => [
                'label' => 'Обновлено',
            ],
        ],
    ],
];
