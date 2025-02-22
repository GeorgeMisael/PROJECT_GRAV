<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/grav-admin/user/plugins/adsense/languages.yaml',
    'modified' => 1717608048,
    'size' => 2082,
    'data' => [
        'en' => [
            'PLUGIN_ADSENSE' => [
                'GLOBAL_CONFIG' => 'Global Settings',
                'DEFAULT_CONFIG' => 'Default Configuration for AdSense',
                'SANDBOX_STATUS' => 'Sandbox',
                'SANDBOX_HELP' => 'Sandbox shows you demo ads for testing purposes',
                'PLUGIN_STATUS' => 'Plugin Status',
                'BUILT_IN_CSS_LABEL' => 'Use built in CSS',
                'ADD_EDITOR_BUTTON' => [
                    'LABEL' => 'Add editor button',
                    'HELP' => 'The editor button allows you to easily enter Adsense tag in the page content'
                ],
                'AUTO_ADS' => [
                    'LABEL' => 'Use Auto Ads',
                    'HELP' => 'Integrate Auto Ads in your page using machine learning to place Adsense bloc in free position.'
                ],
                'OPTIONS_LABEL' => 'Options',
                'OPTIONS' => [
                    'MODE' => [
                        'LABEL' => 'Code integration',
                        'ASYNC' => 'Asynchrone',
                        'SYNC' => 'Synchrone',
                        'HELP' => 'Load Adsence in asynchrone mode or synchrone mode.'
                    ],
                    'POSITION' => [
                        'LABEL' => 'Ad position',
                        'CENTER' => 'Center',
                        'LEFT' => 'Left',
                        'RIGHT' => 'Right'
                    ],
                    'AUTO_ADS_CLIENT' => [
                        'LABEL' => 'Auto Ads client ID',
                        'PH' => 'ca-pub-0000000000000000'
                    ],
                    'AUTO_ADS_FILTER' => [
                        'LABEL' => 'Apply Auto Ads to',
                        'PH' => 'All pages',
                        'HELP' => 'Filter of URN pages used to load Auto Ads.'
                    ]
                ],
                'MODULAR_ADS' => [
                    'LABEL' => 'Default Modular Ads',
                    'HELP' => 'List of default Adsense blocs which integrate in your modular page.',
                    'HORIZONTAL' => 'Horizontal Ad',
                    'VERTICAL' => 'Vertical Ad',
                    'SQUARE' => 'Square Ad'
                ],
                'PAGE_ADS' => [
                    'LABEL' => 'Page Ads',
                    'HELP' => 'List of Adsense blocs which integrate in your page content.'
                ],
                'DATA' => [
                    'ID' => 'Unique Id',
                    'ID_PH' => 'Slug format (Ex: my-ad-1)',
                    'CLIENT' => 'AdSense Client-ID',
                    'CLIENT_PH' => 'AdSense Client-ID (Ex: ca-pub-9783790291000000)',
                    'SLOT' => 'AdSense Slot-ID',
                    'SLOT_PH' => 'AdSense Slot-ID (Ex: 6252245400)',
                    'WIDTH' => 'Width',
                    'WIDTH_PH' => 'In pixels (Ex: 780)',
                    'HEIGHT' => 'Height',
                    'HEIGHT_PH' => 'In pixels (Ex: 90)',
                    'TYPE' => [
                        'LABEL' => 'Adsense type',
                        'HELP' => 'Type of Ad to display. Refer to Adsense documentation.',
                        'IN_ARTICLE' => 'InArticle Ad',
                        'NORMAL' => 'Normal Ad (Width and Height required)'
                    ]
                ]
            ]
        ]
    ]
];
