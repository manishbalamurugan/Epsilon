<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/grav-admin-ea/user/themes/hola/blueprints/modular/home.yaml',
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
                                'bannerBackground' => [
                                    'type' => 'section',
                                    'title' => 'Banner Background',
                                    'underline' => true
                                ],
                                'header.background' => [
                                    'type' => 'filepicker',
                                    'folder' => '@self',
                                    'label' => 'Select Banner Background',
                                    'description' => 'Best Experience With Dimensions - 3000x2000px.',
                                    'preview_images' => true,
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
                                'header.bannerOpacity' => [
                                    'type' => 'text',
                                    'label' => 'Overlay Opacity',
                                    'description' => 'Please use value between 0 and 1.'
                                ],
                                'buttons' => [
                                    'type' => 'section',
                                    'title' => 'Buttons Section',
                                    'underline' => true
                                ],
                                'header.button1Text' => [
                                    'type' => 'text',
                                    'label' => 'First Button Text'
                                ],
                                'header.button1Link' => [
                                    'type' => 'text',
                                    'label' => 'First Button Link'
                                ],
                                'header.button2Text' => [
                                    'type' => 'text',
                                    'label' => 'Second Button Text'
                                ],
                                'header.button2Link' => [
                                    'type' => 'text',
                                    'label' => 'Second Button Text'
                                ],
                                'header.button3Text' => [
                                    'type' => 'text',
                                    'label' => 'Scroll Link Text'
                                ],
                                'header.button3Link' => [
                                    'type' => 'text',
                                    'label' => 'Scroll Link Text'
                                ],
                                'social' => [
                                    'type' => 'section',
                                    'title' => 'Social Icons',
                                    'text' => 'Enter Banner Social Icons',
                                    'underline' => true,
                                    'fields' => [
                                        'header.social' => [
                                            'type' => 'list',
                                            'label' => 'Social icons',
                                            'style' => 'vertical',
                                            'fields' => [
                                                '.socialIconClass' => [
                                                    'type' => 'iconpicker',
                                                    'label' => 'Icon Class'
                                                ],
                                                '.socialIconText' => [
                                                    'type' => 'text',
                                                    'label' => 'Icon Name'
                                                ],
                                                '.socialIconLink' => [
                                                    'type' => 'text',
                                                    'label' => 'Url'
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
