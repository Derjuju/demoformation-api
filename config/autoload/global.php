<?php
return array(
    'zf-mvc-auth' => array(
        'authentication' => array(
            'map' => array(
                'Example\\V1' => 'oauth',
            ),
        ),
    ),
    'router' => array(
        'routes' => array(
            'oauth' => array(
                'options' => array(
                    'spec' => '%oauth%',
                    'regex' => '(?P<oauth>(/oauth))',
                ),
                'type' => 'regex',
            ),
        ),
    ),
    'db' => array(
        'adapters' => array(
            'db_application' => array(
                'driver' => 'Pdo',
                'dsn' => 'mysql:dbname=apigility_test;host=localhost',
                'driver_options' => array(
                    1002 => 'SET NAMES \'UTF8\'',
                ),
                'options' => array(
                    'buffer_results' => true,
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            0 => 'Zend\\Db\\Adapter\\AdapterAbstractServiceFactory',
        ),
        'factories' => array(
            'Zend\\Db\\Adapter\\Adapter' => 'Zend\\Db\\Adapter\\AdapterServiceFactory',
        ),
    ),
);
