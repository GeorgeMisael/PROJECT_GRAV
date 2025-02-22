<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/plugins/github/blueprints.yaml',
    'modified' => 1544183770,
    'size' => 831,
    'data' => [
        'name' => 'GitHub',
        'version' => '2.0.0',
        'description' => 'This plugin wraps the [GitHub v3 API](https://developer.github.com/v3/) and is compatible with [GitHub v4 GraphQL API](https://developer.github.com/v4/). Under the hood it uses [php-github-api](https://github.com/KnpLabs/php-github-api/) library to add a nice GitHub touch to your Grav pages.',
        'icon' => 'github',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-github',
        'keywords' => 'github, plugin, api',
        'bugs' => 'https://github.com/getgrav/grav-plugin-github/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
