<?php

namespace Vobo\Kernel;


use Vobo\Kernel\Url;
use Vobo\Mode\Request;
use Vobo\Support\Support;

class Filter
{


    /**
     * Filter constructor.
     * @param null $Request
     */
    public function __construct($Request = null){

        self::__getSystem($Request);

    }

    /**
     * @param null $Request
     */
    protected static function __getSystem($Request = null){

        Url::getRouter() ? self::__getLoad($Request) : self::__notFound($Request);

    }

    /**
     * @param null $Request
     */
    protected static function __getLoad($Request = null){

        Url::getSystem($Request::__getLoad());

    }

    /**
     * @param null $Request
     */
    protected static function __notFound($Request = null){

        Request::__notFoundMode($Request::__notfound());

    }

    /**
     * @param null $Request
     * @return null
     */
    public static function __encodeSource($Request = null){

       return $Request;

    }


}