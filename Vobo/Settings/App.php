<?php


namespace Vobo\Settings;

use Vobo\Support\Support;

class App
{

    const APP =
        [
            "www" => [
                "folder"                => "Main",
                "router"                => "Main",
                "assets"                => false,
                "https"                 => false,
                "maintenance"           => false,
                "maintenanceRouter"     =>
                    [
                        "/" =>
                            [
                                "0.0.0.0",
                                Support::GET,
                                    [
                                        "username" => "developer",
                                        "password" => "123"
                                    ]

                            ]
                    ],
                "autoLoadClass"         => [],
                "database"              =>
                    [
                        "driver"        => "mysql",
                        "host"          => "localhost",
                        "username"      => "",
                        "password"      => "",
                        "table"         => "",
                        "charset"       => "utf8",
                        "prefix"        => null
                    ]
            ]
        ];

}

