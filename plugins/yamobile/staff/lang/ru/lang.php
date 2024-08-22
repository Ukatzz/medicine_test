<?php

return [
    'name' => 'Сотрудники',
    'description' => 'Система управления персоналом',
    'author' => 'Ya-mobile',
    'member' => [
        'name' => 'Сотрудники',
        'pages' => [
            'index' => [
                'title' => 'Сотрудники',
                'breadcrumb' => 'Сотрудники',
            ],
            'preview' => [
                'title' => 'Просмотр сотрудника',
                'breadcrumb' => 'Просмотр сотрудника',
            ],
            'create' => [
                'title' => 'Добавление сотрудника',
                'breadcrumb' => 'Добавление сотрудника',
            ],
            'update' => [
                'title' => 'Обновление сотрудника',
                'breadcrumb' => 'Обновление сотрудника',
            ],
            'reorder' => [
                'title' => 'Сортировка сотрудников',
                'breadcrumb' => 'Сортировка сотрудников',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Имя',
                'comment' => 'Полное имя сотрудника',
                'placeholder' => 'Имя Фамилия',
            ],
            'is_active' => [
                'label' => 'Активно',
                'comment' => 'Неактивные сотрудники не будут показаны',
            ],
            'photo' => [
                'label' => 'Фото',
                'comment' => 'Фото сотрудника',
            ],
            'description' => [
                'label' => 'Описание',
                'comment' => 'Краткое описание сотрудника',
                'placeholder' => 'О сотруднике',
            ],
            'content' => [
                'label' => 'Содержание',
                'comment' => 'Полные данные сотрудника',
            ],
            'slug' => [
                'label' => 'URL',
                'comment' => 'Slug параметр для страницы сотрудника',
                'placeholder' => 'name-surname',
            ],
            'positions' => [
                'label' => 'Должности',
                'comment' => 'Должности сотрудника, может быть несколько',
            ],
            'categories' => [
                'label' => 'Категории',
                'comment' => 'Категории сотрудника, может быть несколько',
            ],
            'meta_title' => [
                'label' => 'Title',
                'comment' => 'Используется в мета-теге title на странице категории',
                'placeholder' => 'Title страницы сотрудника',
            ],
            'meta_description' => [
                'label' => 'Description',
                'comment' => 'Используется в мета-теге description на странице категории',
                'placeholder' => 'Description  страницы сотрудника.',
            ],
            'meta_keywords' => [
                'label' => 'Keywords',
                'comment' => 'Используется в мета-теге keywords на странице категории',
                'placeholder' => 'ключевые, слова, страницы, сотрудника',
            ],
            'sort_order' => [
                'label' => 'Порядок',
            ],
            'created_at' => [
                'label' => 'Создано',
            ],
            'updated_at' => [
                'label' => 'Обновлено',
            ],
        ],
        'permissions' => [
            'tab' => 'Сотрудники',
            'access_members' => [
                'label' => 'Управление сотрудниками',
            ],
        ],
    ],
    'position' => [
        'name' => 'Должности',
        'pages' => [
            'index' => [
                'title' => 'Должности',
                'breadcrumb' => 'Должности',
            ],
            'preview' => [
                'title' => 'Просмотр должности',
                'breadcrumb' => 'Просмотр должности',
            ],
            'create' => [
                'title' => 'Добавление должности',
                'breadcrumb' => 'Добавление должности',
            ],
            'update' => [
                'title' => 'Обновление должности',
                'breadcrumb' => 'Обновление должности',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Название',
                'comment' => 'Название должности',
                'placeholder' => 'Должность',
            ],
            'created_at' => [
                'label' => 'Создано',
            ],
            'updated_at' => [
                'label' => 'Обновлено',
            ],
        ],
        'permissions' => [
            'tab' => 'Сотрудники',
            'access_positions' => [
                'label' => 'Управление должностями',
            ],
        ],
    ],
    'category' => [
        'name' => 'Категории',
        'pages' => [
            'index' => [
                'title' => 'Категории',
                'breadcrumb' => 'Категории',
            ],
            'preview' => [
                'title' => 'Просмотр категории',
                'breadcrumb' => 'Просмотр категории',
            ],
            'create' => [
                'title' => 'Добавление категории',
                'breadcrumb' => 'Добавление категории',
            ],
            'update' => [
                'title' => 'Обновление категорий',
                'breadcrumb' => 'Обновление категорий',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Название',
                'comment' => 'Название категории',
                'placeholder' => 'Категория',
            ],
            'created_at' => [
                'label' => 'Создано',
            ],
            'updated_at' => [
                'label' => 'Обновлено',
            ],
        ],
        'permissions' => [
            'tab' => 'Сотрудники',
            'access_categories' => [
                'label' => 'Управление категориями',
            ],
        ],
    ],
    'components' => [
        'member' => [
            'name' => 'Сотрудник',
            'description' => 'Отображает данные конкретного сотрудника',
            'properties' => [
                'slug' => [
                    'title' => 'slug',
                    'description' => 'URL параметр',
                ],
            ],
        ],
        'members' => [
            'name' => 'Сотрудники',
            'description' => 'Выводит список сотрудников',
            'properties' => [
                'membersPerPage' => [
                    'title' => 'Количество на странице',
                    'description' => 'Количество сотрудников на одной странице для пагинации, оставьте поле пустым для вывода всех',
                ],
            ],
        ],
        'categories' => [
            'name' => 'Категории',
            'description' => 'Выводит категорий',
            'properties' => [
                'categoriesPerPage' => [
                    'title' => 'Количество на странице',
                    'description' => 'Количество категорий на одной странице для пагинации, оставьте поле пустым для вывода всех',
                ],
            ],
        ],
        'settings' => [
            'name' => 'Настройки',
            'description' => 'Выводит данные настроек',
        ],
    ],
    'settings' => [
        'name' => 'Настройки страницы сотрудников',
        'description' => 'Данные для страницы сотрудников',
        'category' => 'Содержание',
        'fields' => [
            'heading' => [
                'label' => 'Заголовок',
                'comment' => 'На странице сотрудников',
                'placeholder' => 'Сотрудники',
            ],
            'image' => [
                'label' => 'Изображение',
                'comment' => 'На странице сотрудников',
            ],
            'description' => [
                'label' => 'Описание',
                'comment' => 'На странице сотрудников',
                'placeholder' => 'Наши сотрудники',
            ],
            'meta_title' => [
                'label' => 'Title',
                'comment' => 'Используется в мета-теге title на странице сотрудников',
                'placeholder' => 'Title страницы сотрудника',
            ],
            'meta_description' => [
                'label' => 'Description',
                'comment' => 'Используется в мета-теге description на странице сотрудников',
                'placeholder' => 'Description  страницы сотрудника.',
            ],
            'meta_keywords' => [
                'label' => 'Keywords',
                'comment' => 'Используется в мета-теге keywords на странице сотрудников',
                'placeholder' => 'ключевые, слова, страницы, сотрудника',
            ],
        ],
    ],
];
