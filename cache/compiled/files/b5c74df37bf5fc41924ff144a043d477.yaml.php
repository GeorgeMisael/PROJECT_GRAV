<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/grav-admin/user/plugins/adsense/blueprints.yaml',
    'modified' => 1717608048,
    'size' => 13561,
    'data' => [
        'name' => 'Google AdSense',
        'version' => '2.0.0',
        'description' => 'This plugin enables to use AdSense inside a page content or modular page to be rendered by Grav.',
        'icon' => 'google',
        'author' => [
            'name' => 'clemdesign',
            'email' => 'contact@clemdesign.fr',
            'url' => 'https://www.clemdesign.fr'
        ],
        'homepage' => 'https://github.com/clemdesign/grav-plugin-adsense',
        'keywords' => [
            0 => 'adsense',
            1 => 'grav',
            2 => 'extension',
            3 => 'plugin',
            4 => 'google'
        ],
        'docs' => 'https://github.com/clemdesign/grav-plugin-adsense/blob/master/README.md',
        'bugs' => 'https://github.com/clemdesign/grav-plugin-adsense/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'global' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADSENSE.GLOBAL_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADSENSE.PLUGIN_STATUS',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'sandbox' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADSENSE.SANDBOX_STATUS',
                            'highlight' => 0,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'built_in_css' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADSENSE.BUILT_IN_CSS_LABEL',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'add_editor_button' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADSENSE.ADD_EDITOR_BUTTON.LABEL',
                            'help' => 'PLUGIN_ADSENSE.ADD_EDITOR_BUTTON.HELP',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'use_auto_ads' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADSENSE.AUTO_ADS.LABEL',
                            'help' => 'PLUGIN_ADSENSE.AUTO_ADS.HELP',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'default' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADSENSE.DEFAULT_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'options' => [
                            'type' => 'fieldset',
                            'collapsible' => false,
                            'icon' => 'gear',
                            'title' => 'PLUGIN_ADSENSE.OPTIONS_LABEL',
                            'fields' => [
                                'adsense.options.mode' => [
                                    'type' => 'select',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADSENSE.OPTIONS.MODE.LABEL',
                                    'help' => 'PLUGIN_ADSENSE.OPTIONS.MODE.HELP',
                                    'default' => 'async',
                                    'options' => [
                                        'async' => 'PLUGIN_ADSENSE.OPTIONS.MODE.ASYNC',
                                        'sync' => 'PLUGIN_ADSENSE.OPTIONS.MODE.SYNC'
                                    ]
                                ],
                                'adsense.options.position' => [
                                    'type' => 'select',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ADSENSE.OPTIONS.POSITION.LABEL',
                                    'default' => 'css',
                                    'options' => [
                                        'center' => 'PLUGIN_ADSENSE.OPTIONS.POSITION.CENTER',
                                        'right' => 'PLUGIN_ADSENSE.OPTIONS.POSITION.RIGHT',
                                        'left' => 'PLUGIN_ADSENSE.OPTIONS.POSITION.LEFT'
                                    ],
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'adsense.options.auto_ads_client' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADSENSE.OPTIONS.AUTO_ADS_CLIENT.LABEL',
                                    'placeholder' => 'PLUGIN_ADSENSE.OPTIONS.AUTO_ADS_CLIENT.PH',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'adsense.options.auto_ads_filter' => [
                                    'type' => 'selectize',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_ADSENSE.OPTIONS.AUTO_ADS_FILTER.LABEL',
                                    'placeholder' => 'PLUGIN_ADSENSE.OPTIONS.AUTO_ADS_FILTER.PH',
                                    'help' => 'PLUGIN_ADSENSE.OPTIONS.AUTO_ADS_FILTER.HELP',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ]
                            ]
                        ],
                        'modular_ads' => [
                            'type' => 'fieldset',
                            'collapsed' => false,
                            'collapsible' => true,
                            'icon' => 'th-large',
                            'title' => 'PLUGIN_ADSENSE.MODULAR_ADS.LABEL',
                            'help' => 'PLUGIN_ADSENSE.MODULAR_ADS.HELP',
                            'fields' => [
                                'horizontal' => [
                                    'type' => 'fieldset',
                                    'collapsible' => true,
                                    'icon' => 'mars-stroke-h',
                                    'title' => 'PLUGIN_ADSENSE.MODULAR_ADS.HORIZONTAL',
                                    'fields' => [
                                        'adsense.modular_ads.horizontal.client' => [
                                            'type' => 'text',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_ADSENSE.DATA.CLIENT',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.CLIENT_PH',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'adsense.modular_ads.horizontal.slot' => [
                                            'type' => 'text',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_ADSENSE.DATA.SLOT',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.SLOT_PH',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ],
                                        'adsense.modular_ads.horizontal.width' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_ADSENSE.DATA.WIDTH',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.WIDTH_PH',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ],
                                        'adsense.modular_ads.horizontal.height' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_ADSENSE.DATA.HEIGHT',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.HEIGHT_PH',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ]
                                    ]
                                ],
                                'vertical' => [
                                    'type' => 'fieldset',
                                    'collapsible' => true,
                                    'icon' => 'mars-stroke-v',
                                    'title' => 'PLUGIN_ADSENSE.MODULAR_ADS.VERTICAL',
                                    'fields' => [
                                        'adsense.modular_ads.vertical.client' => [
                                            'type' => 'text',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_ADSENSE.DATA.CLIENT',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.CLIENT_PH',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'adsense.modular_ads.vertical.slot' => [
                                            'type' => 'text',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_ADSENSE.DATA.SLOT',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.SLOT_PH',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ],
                                        'adsense.modular_ads.vertical.width' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_ADSENSE.DATA.WIDTH',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.WIDTH_PH',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ],
                                        'adsense.modular_ads.vertical.height' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_ADSENSE.DATA.HEIGHT',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.HEIGHT_PH',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ]
                                    ]
                                ],
                                'square' => [
                                    'type' => 'fieldset',
                                    'collapsible' => true,
                                    'icon' => 'square-o',
                                    'title' => 'PLUGIN_ADSENSE.MODULAR_ADS.SQUARE',
                                    'fields' => [
                                        'adsense.modular_ads.square.client' => [
                                            'type' => 'text',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_ADSENSE.DATA.CLIENT',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.CLIENT_PH',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'adsense.modular_ads.square.slot' => [
                                            'type' => 'text',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_ADSENSE.DATA.SLOT',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.SLOT_PH',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ],
                                        'adsense.modular_ads.square.width' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_ADSENSE.DATA.WIDTH',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.WIDTH_PH',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ],
                                        'adsense.modular_ads.square.height' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_ADSENSE.DATA.HEIGHT',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.HEIGHT_PH',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'page_ads' => [
                            'type' => 'fieldset',
                            'title' => 'PLUGIN_ADSENSE.PAGE_ADS.LABEL',
                            'help' => 'PLUGIN_ADSENSE.PAGE_ADS.HELP',
                            'collapsed' => true,
                            'icon' => 'list',
                            'fields' => [
                                'adsense.page_ads' => [
                                    'name' => 'data',
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'fields' => [
                                        '.id' => [
                                            'type' => 'text',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_ADSENSE.DATA.ID',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.ID_PH',
                                            'validate' => [
                                                'type' => 'slug'
                                            ]
                                        ],
                                        '.client' => [
                                            'type' => 'text',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_ADSENSE.DATA.CLIENT',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.CLIENT_PH',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        '.slot' => [
                                            'type' => 'text',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_ADSENSE.DATA.SLOT',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.SLOT_PH',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ],
                                        '.type' => [
                                            'type' => 'select',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_ADSENSE.DATA.TYPE.LABEL',
                                            'help' => 'PLUGIN_ADSENSE.DATA.TYPE.HELP',
                                            'default' => 'inarticle',
                                            'options' => [
                                                'inarticle' => 'PLUGIN_ADSENSE.DATA.TYPE.IN_ARTICLE',
                                                'normal' => 'PLUGIN_ADSENSE.DATA.TYPE.NORMAL'
                                            ]
                                        ],
                                        '.width' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_ADSENSE.DATA.WIDTH',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.WIDTH_PH',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ],
                                        '.height' => [
                                            'type' => 'text',
                                            'size' => 'small',
                                            'label' => 'PLUGIN_ADSENSE.DATA.HEIGHT',
                                            'placeholder' => 'PLUGIN_ADSENSE.DATA.HEIGHT_PH',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
