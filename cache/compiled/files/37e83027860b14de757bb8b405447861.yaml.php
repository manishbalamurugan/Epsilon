<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/grav-admin-ea/user/themes/hola/blueprints/modular/contact.yaml',
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
                                'sectionBackground' => [
                                    'type' => 'section',
                                    'title' => 'Section Background',
                                    'underline' => true
                                ],
                                'header.background' => [
                                    'type' => 'filepicker',
                                    'folder' => '@self',
                                    'label' => 'Select Background',
                                    'preview_images' => true,
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
                                'header.opacity' => [
                                    'type' => 'text',
                                    'label' => 'Overlay Opacity',
                                    'description' => 'Please use value between 0 and 1.'
                                ],
                                'phoneSection' => [
                                    'type' => 'section',
                                    'title' => 'Phone',
                                    'underline' => true
                                ],
                                'header.phoneTitle' => [
                                    'type' => 'text',
                                    'label' => 'Section Title'
                                ],
                                'header.phonePhone' => [
                                    'type' => 'text',
                                    'label' => 'Number'
                                ],
                                'header.phoneMobile' => [
                                    'type' => 'text',
                                    'label' => 'Mobile Number'
                                ],
                                'header.phoneFax' => [
                                    'type' => 'text',
                                    'label' => 'FAX Number'
                                ],
                                'header.emailTitle' => [
                                    'type' => 'text',
                                    'label' => 'Email Title'
                                ],
                                'header.emailAddress' => [
                                    'type' => 'selectize',
                                    'label' => 'Email Address',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'header.addressTitle' => [
                                    'type' => 'text',
                                    'label' => 'Address Section Title'
                                ],
                                'header.addressDetails' => [
                                    'type' => 'textarea',
                                    'label' => 'Address Details'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
