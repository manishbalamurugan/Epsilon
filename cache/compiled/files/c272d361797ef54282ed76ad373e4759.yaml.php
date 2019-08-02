<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/grav-admin-ea/user/themes/hola/blueprints/modular/works.yaml',
    'modified' => 1558981784,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'header.smallTitle' => [
                                    'type' => 'text',
                                    'autofocus' => true,
                                    'style' => 'vertical',
                                    'label' => 'Small Upper Title'
                                ]
                            ]
                        ],
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
                                'portfolioSection' => [
                                    'type' => 'section',
                                    'title' => 'Portfolio',
                                    'underline' => true,
                                    'fields' => [
                                        'header.portfolio' => [
                                            'type' => 'list',
                                            'style' => 'vertical',
                                            'label' => 'Portfolio',
                                            'fields' => [
                                                '.image' => [
                                                    'type' => 'filepicker',
                                                    'folder' => '@self',
                                                    'label' => 'Select portfolio file',
                                                    'preview_images' => true,
                                                    'accept' => [
                                                        0 => '.png',
                                                        1 => '.jpg'
                                                    ]
                                                ],
                                                '.title' => [
                                                    'type' => 'text',
                                                    'label' => 'Title'
                                                ],
                                                '.category' => [
                                                    'type' => 'selectize',
                                                    'label' => 'Category'
                                                ],
                                                '.link' => [
                                                    'type' => 'text',
                                                    'label' => 'Link'
                                                ],
                                                '.description' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Description'
                                                ],
                                                '.imageSize1' => [
                                                    'type' => 'filepicker',
                                                    'folder' => '@self',
                                                    'label' => 'Select first additional size of portfolio image',
                                                    'preview_images' => true,
                                                    'accept' => [
                                                        0 => '.png',
                                                        1 => '.jpg'
                                                    ]
                                                ],
                                                '.imageSize2' => [
                                                    'type' => 'filepicker',
                                                    'folder' => '@self',
                                                    'label' => 'Select second additional size of portfolio image',
                                                    'preview_images' => true,
                                                    'accept' => [
                                                        0 => '.png',
                                                        1 => '.jpg'
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
        ]
    ]
];
