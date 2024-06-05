<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://adsense/adsense.yaml',
    'modified' => 1571100184,
    'size' => 2390,
    'data' => [
        'enabled' => true,
        'sandbox' => false,
        'built_in_css' => true,
        'add_editor_button' => true,
        'use_auto_ads' => false,
        'adsense' => [
            'options' => [
                'mode' => 'async',
                'position' => 'center',
                'auto_ads_client' => '',
                'auto_ads_filter' => [
                    0 => 'blog',
                    1 => 'portfolio'
                ]
            ],
            'page_ads' => [
                0 => [
                    'id' => 'unique-id',
                    'client' => '',
                    'slot' => 0,
                    'type' => 'inarticle',
                    'width' => 468,
                    'height' => 60
                ]
            ],
            'modular_ads' => [
                'horizontal' => [
                    'client' => '',
                    'slot' => 0,
                    'width' => 728,
                    'height' => 90
                ],
                'vertical' => [
                    'client' => '',
                    'slot' => 0,
                    'width' => 200,
                    'height' => 600
                ],
                'square' => [
                    'client' => '',
                    'slot' => 0,
                    'width' => 300,
                    'height' => 300
                ]
            ]
        ]
    ]
];
