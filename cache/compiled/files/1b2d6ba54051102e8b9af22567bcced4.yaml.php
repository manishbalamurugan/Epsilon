<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/grav-admin-ea/user/themes/twenty/blueprints.yaml',
    'modified' => 1558982015,
    'data' => [
        'name' => 'Twenty',
        'version' => '1.7.0',
        'description' => 'Twenty is a free and responsive theme for **Grav**. It\'s a port of **Twenty** template by HTML5 UP.',
        'icon' => 'group',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-twenty',
        'demo' => 'http://demo.getgrav.org/twenty-skeleton',
        'keywords' => 'twenty, theme, onepage, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-twenty/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.5.10'
            ],
            1 => [
                'name' => 'form',
                'version' => '>=2.0.2'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'color' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Color',
                    'default' => 'blue',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
