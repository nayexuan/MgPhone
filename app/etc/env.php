<?php
return [
    'search' => [
        'engine' => 'opensearch',
        'opensearch' => [
            'servers' => [
                [
                    'host' => '172.29.128.2',
                    'port' => '9200',
                    'scheme' => 'http',
                    'username' => '',
                    'password' => '',
                    'timeout' => '15'
                ]
            ],
            'index_prefix' => 'magento2'
        ]
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'backend' => [
        'frontName' => 'admin_kmzvu7n'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'SaChYT8gRW1GWZcCMBQdLOUnBhkqWwW8'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '6b0_'
            ],
            'page_cache' => [
                'id_prefix' => '6b0_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'config' => [
        'async' => 0
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'base64mkgKLh2GwHJgSmtIEoT7aoWpaal9ERRpLWCvvsoLfpU='
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magento',
                'username' => 'nayexuan',
                'password' => 'yuexuan99',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'graphql_query_resolver_result' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'localhost'
    ],
    'install' => [
        'date' => 'Thu, 29 Jan 2026 09:44:20 +0000'
    ],





'system' => [
    'default' => [
        'system' => [
            'smtp' => [
                'host' => '127.0.0.1',   // Mailcatcher 运行的机器地址（本地为 127.0.0.1）
                'port' => '1080',        // Mailcatcher 默认监听的端口
                'auth' => '0',           // 0 表示不需要身份验证（Mailcatcher 不需要）
                // 'username' => '',    // 留空
                // 'password' => ''     // 留空
            ]
        ]
    ]
],

];
