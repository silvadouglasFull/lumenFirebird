<?php

return [

    'default' => 'firebird',

    'connections' => [

        'firebird' => [
            'driver'   => 'firebird',
            'host'     => 'viaconect.dyndns.org',
            'database' => '/home/SYS/TCCOM/Dados/TCCOM.FDB',
            'username' => 'SYSDBA',
            'password' => 'masterkey',
            'charset' => 'utf8',
            'collation' => 'PT_BR',
            'port'     => 3050,
            'collation' => 'PT_BR',
            'prefix' => '',
        ],

    ],

];
