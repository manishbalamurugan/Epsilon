<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/grav-admin-ea/user/config/site.yaml',
    'modified' => 1560442076,
    'data' => [
        'title' => 'Epsilon Academics',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Manish Balamurugan',
            'email' => 'manishbalamurugan@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'author'
        ],
        'metadata' => [
            'description' => 'We are an entirely student run educational nonprofit organization that promotes STEM initiative and learning to students in Northern Virginia and the Washington Metropolitan Area.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
