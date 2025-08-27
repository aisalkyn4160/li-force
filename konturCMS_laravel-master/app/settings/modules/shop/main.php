<?php

use Illuminate\Support\Facades\Auth;

return [
    'name' => 'Основные',
    'data' => [
        'name' => [
            'name' => 'Название каталога',
            'placeholder' => 'Название каталога',
            'rules' => 'string|max:250',
        ],
        'currency' => [
            'name' => 'Валюта',
            'type' => 'select',
            'data' => function () {
                return [
                    [
                        'key' => '&#8381',
                        'value' => 'Рубль',
                    ],
                ];
            },
            'rules' => 'string|max:50',
        ],
        'with_trade_offers' => [
            'name' => 'Включить торговые предложения',
            'type' => 'checkbox',
            'rules' => 'boolean|nullable',
        ],
    ]
];
