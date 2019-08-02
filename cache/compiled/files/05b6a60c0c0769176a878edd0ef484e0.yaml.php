<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/grav-admin-ea/user/themes/hola/blueprints/modular/testimonials.yaml',
    'modified' => 1558981784,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
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
                                'sectionBackground' => [
                                    'type' => 'section',
                                    'title' => 'Section Background',
                                    'underline' => true
                                ],
                                'header.sectionbackground' => [
                                    'type' => 'filepicker',
                                    'folder' => '@self',
                                    'label' => 'Select Section Background',
                                    'preview_images' => true,
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
                                'header.backgroundOverlay' => [
                                    'type' => 'text',
                                    'label' => 'Overlay Opacity',
                                    'description' => 'Please use value between 0 and 1.'
                                ],
                                'testimonialSection' => [
                                    'type' => 'section',
                                    'title' => 'Testimonials',
                                    'underline' => true,
                                    'fields' => [
                                        'header.testimonials' => [
                                            'type' => 'list',
                                            'label' => 'Testimonials',
                                            'fields' => [
                                                '.image' => [
                                                    'type' => 'filepicker',
                                                    'folder' => '@self',
                                                    'label' => 'Photo',
                                                    'preview_images' => true,
                                                    'accept' => [
                                                        0 => '.png',
                                                        1 => '.jpg'
                                                    ]
                                                ],
                                                '.clientName' => [
                                                    'type' => 'text',
                                                    'label' => 'Name'
                                                ],
                                                '.position' => [
                                                    'type' => 'text',
                                                    'label' => 'Position'
                                                ],
                                                '.description' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Content'
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
