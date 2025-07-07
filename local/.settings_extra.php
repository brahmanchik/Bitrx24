<?php

return array (
    'cache_flags' =>
        array (
            'value' =>
                array (
                    'config_options' => 3600.0,
                ),
            'readonly' => false,
        ),
    'cookies' =>
        array (
            'value' =>
                array (
                    'secure' => false,
                    'http_only' => true,
                ),
            'readonly' => false,
        ),
    'exception_handling' =>
        array (
            'value' =>
                array (
                    'debug' => true,
                    'handled_errors_types' => 4437,
                    'exception_errors_types' => 4437,
                    'ignore_silence' => false,
                    'assertion_throws_exception' => true,
                    'assertion_error_type' => 256,
                    'log' => array(
                        'class_name' => 'Otus\\Diagnostic\\OtusFileExceptionHandlerLog',
                        'required_file' => 'php_interface/Otus/Diagnostic/OtusFileExceptionHandlerLog.php',
                        'settings' => array(
                            'file' => 'local/logs/otus_exceptions.log',
                            'log_size' => 1000000,
                        ),
                    ),
                ),
            'readonly' => false,
        ),
    'connections' =>
        array (
            'value' =>
                array (
                    'default' =>
                        array (
                            'host' => 'mysql',
                            'database' => 'dev',
                            'login' => 'dev',
                            'password' => 'dev',
                            'options' => 2.0,
                            'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
                        ),
                ),
            'readonly' => true,
        ),
    'crypto' =>
        array (
            'value' =>
                array (
                    'crypto_key' => '87e913e7dab3aa6a28ea02f8a5d98751',
                ),
            'readonly' => true,
        ),
    'messenger' =>
        array (
            'value' =>
                array (
                    'run_mode' => NULL,
                    'brokers' =>
                        array (
                            'default' =>
                                array (
                                    'type' => 'db',
                                    'params' =>
                                        array (
                                            'table' => 'Bitrix\\Main\\Messenger\\Internals\\Storage\\Db\\Model\\MessengerMessageTable',
                                        ),
                                ),
                        ),
                    'queues' =>
                        array (
                        ),
                ),
            'readonly' => true,
        ),
);
