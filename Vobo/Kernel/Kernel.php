<?php

namespace Vobo\Kernel;


use Vobo\Kernel\Url;
use Vobo\Kernel\Filter;
use Vobo\Middleware\Middleware;
use Vobo\Support\Support;

class Kernel
{

    /**
     * Kernel constructor.
     */
    public function __construct($Request = null){

        // System Start Middleware
        Middleware::__start($Request);

        // System Starting
        new Filter(Support::class );

        // System Finished Middleware
        Middleware::__finish($Request);

    }

    public static function fix($Request = null){

        return self::class;

    }

}