<?php

return array (
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
);