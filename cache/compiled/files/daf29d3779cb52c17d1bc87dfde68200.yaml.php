<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://aboutme/aboutme.yaml',
    'modified' => 1558917583,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'name' => 'Santa Claus',
        'title' => 'Present Giver',
        'show_title' => true,
        'description' => 'Santa Claus, Saint Nicholas, Saint Nick, Father Christmas, Kris Kringle, Santy, or simply Santa is a figure with legendary, historical and folkloric origins who, in many Western cultures, is said to bring gifts to the homes of good children on 24 December, the night before Christmas Day. The modern figure of Santa Claus is derived from the British figure of Father Christmas, the Dutch figure of Sinterklaas, and Saint Nicholas, the historical Greek bishop and gift-giver of Myra. During the Christianization of Germanic Europe, this figure may also have absorbed elements of the god Odin, who was associated with the Germanic pagan midwinter event of Yule and led the Wild Hunt, a ghostly procession through the sky',
        'picture_src' => [
            'user/plugins/aboutme/assets/avatars/santa.jpg' => [
                'name' => 'santa.jpg',
                'type' => 'image/jpeg',
                'size' => 43391,
                'path' => 'user/plugins/aboutme/assets/avatars/santa.jpg'
            ]
        ],
        'gravatar' => [
            'enabled' => false,
            'email' => 'example@test.com',
            'size' => 100
        ],
        'social_pages' => [
            'enabled' => true,
            'use_font_awesome' => false,
            'pages' => [
                'facebook' => [
                    'icon' => 'facebook-official',
                    'title' => 'Facebook',
                    'position' => 1
                ],
                'twitter' => [
                    'icon' => 'twitter',
                    'title' => 'Twitter',
                    'position' => 2
                ],
                'google_plus' => [
                    'icon' => 'google-plus-square',
                    'title' => 'Google+',
                    'position' => 3
                ],
                'github' => [
                    'icon' => 'github',
                    'title' => 'GitHub',
                    'position' => 4
                ],
                'linkedin' => [
                    'icon' => 'linkedin-square',
                    'title' => 'LinkedIn',
                    'position' => 5
                ],
                'instagram' => [
                    'icon' => 'instagram',
                    'title' => 'Instagram',
                    'position' => 6
                ]
            ]
        ]
    ]
];
