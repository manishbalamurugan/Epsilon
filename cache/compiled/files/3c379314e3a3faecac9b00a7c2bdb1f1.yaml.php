<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/grav-admin-ea/user/themes/hola/blueprints/modular/blog.yaml',
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
                                    'title' => 'Blog Section',
                                    'underline' => true,
                                    'fields' => [
                                        'header.blog' => [
                                            'type' => 'list',
                                            'label' => 'Blog Posts',
                                            'style' => 'vertical',
                                            'fields' => [
                                                '.date' => [
                                                    'type' => 'text',
                                                    'label' => 'Post Date'
                                                ],
                                                '.title' => [
                                                    'type' => 'text',
                                                    'label' => 'Post Title'
                                                ],
                                                '.description' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Post Description'
                                                ],
                                                '.link' => [
                                                    'type' => 'text',
                                                    'label' => 'Post URL'
                                                ],
                                                '.postCategory' => [
                                                    'type' => 'selectize',
                                                    'label' => 'Post Category',
                                                    'validate' => [
                                                        'type' => 'text'
                                                    ]
                                                ],
                                                '.categoryLink' => [
                                                    'type' => 'text',
                                                    'label' => 'Category Button Link'
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
