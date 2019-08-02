<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/grav-admin-ea/user/themes/hola/blueprints/modular/cta.yaml',
    'modified' => 1558981784,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'holaSetings' => [
                            'type' => 'tab',
                            'title' => 'Hola Settings',
                            'fields' => [
                                'background' => [
                                    'type' => 'section',
                                    'title' => 'Section Background Color',
                                    'underline' => true
                                ],
                                'header.sectionBackground' => [
                                    'type' => 'selectize',
                                    'label' => 'Additional Section Background Class',
                                    'description' => 'For Gray Background Please Use Class \'grey-section\' for White Background leave field empty.'
                                ],
                                'header.titleLink' => [
                                    'type' => 'text',
                                    'label' => 'Title Link'
                                ],
                                'header.buttonText' => [
                                    'type' => 'text',
                                    'label' => 'Button Text'
                                ],
                                'header.buttonLink' => [
                                    'type' => 'text',
                                    'label' => 'Button Link'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
