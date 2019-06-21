<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'SC Chat',
    'description' => 'Creates a very simple chat for frontend users in typo3',
    'category' => 'plugin',
    'author' => 'Sebastian Christoph',
    'author_email' => 'admin@sebastian-christoph.de',
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
