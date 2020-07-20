<?php

namespace App\Main\Model;


class cms {

    public static $API_ENDPOINT = "https://vobo.cloud/";

    public static $SECRET       = "930-3224-6230-9681";

    public static $TOKEN        = "8982-2407-2526-4420";


    /**
     * @param null $component
     * @param array $data
     * @return mixed
     */
    public static function insertRecord($component = null, array $data = [] ){

        return json_decode
        (
            self::postRequest(
                self::$API_ENDPOINT."/api/v1/insert/multiple/".$component."/".self::$SECRET."/".self::$TOKEN,
                $data
            )
        );

    }

    /**
     * @param null $component
     * @param null $uuid
     * @param array $data
     * @return mixed
     */
    public static function updateRecord($component = null, $uuid = null , array $data = [] ){

        return json_decode
        (
            self::postRequest
            (
                self::$API_ENDPOINT."/api/v1/update/multiple/{$component}/".self::$SECRET."/".self::$TOKEN."/".$uuid,
                $data
            )
        );

    }


    /**
     * @param null $component
     * @param null $uuid
     * @return mixed
     */
    public static function deleteRecord($component = null, $uuid = null){

        return json_decode
        (
            self::postRequest
            (
                self::$API_ENDPOINT."/api/v1/delete/multiple/{$component}/".self::$SECRET."/".self::$TOKEN."/".$uuid
            )
        );

    }


    /**
     * @param null $component
     * @return mixed
     */
    public static function getAllRecord($component = null,$orderBy = "DESC"){

        return json_decode
        (
            self::getRequest
            (
                self::$API_ENDPOINT."/api/v1/read/multiple/all/{$component}/".self::$SECRET."/".self::$TOKEN."?filterOrder=".$orderBy
            )
        );

    }

    /**
     * @return mixed
     */
    public static function getAllCategories(){

        return json_decode
        (
            self::getRequest
            (
                self::$API_ENDPOINT."/api/v1/get/all/categories/".self::$SECRET."/".self::$TOKEN
            )
        );

    }


    /**
     * @param null $component
     * @param null $uuid
     * @return mixed
     */
    public static function getOneRecordWithId($component = null, $uuid = null){

        return json_decode
        (
            self::getRequest
            (
                self::$API_ENDPOINT."/api/v1/read/multiple/one/uuid/{$component}/".self::$SECRET."/".self::$TOKEN."/".$uuid
            )
        );

    }

    /**
     * @param null $component
     * @param null $slug
     * @return mixed
     */
    public static function getOneRecordWithSlug($component = null, $slug = null){

        return json_decode
        (
            self::getRequest
            (
                self::$API_ENDPOINT."/api/v1/read/multiple/one/slug/{$component}/".self::$SECRET."/".self::$TOKEN."/".$slug
            )
        );

    }

    /**
     * @param null $component
     * @param int $page
     * @param string $orderBy
     * @param int $perPageLimit
     * @return mixed
     */
    public static function getOneRecordPagination($component = null, $page = 1, $orderBy = "DESC", $perPageLimit = 10){

        return json_decode
        (
            self::getRequest
            (
                self::$API_ENDPOINT."/api/v1/read/multiple/page/{$component}/".self::$SECRET."/".self::$TOKEN."/".$page."?filterOrder=".$orderBy."&filterLimit=".$perPageLimit
            )
        );

    }


    /**
     * @param null $component
     * @param array $data
     * @return mixed
     */
    public static function updatePage($component = null, array $data = [] ){

        return json_decode
        (
            self::postRequest
            (
                self::$API_ENDPOINT."/api/v1/update/single/{$component}/".self::$SECRET."/".self::$TOKEN,
                $data
            )
        );

    }

    /**
     * @param null $component
     * @return mixed
     */
    public static function getOnePage($component = null ){

        return json_decode
        (
            self::getRequest
            (
                self::$API_ENDPOINT."/api/v1/read/single/one/{$component}/".self::$SECRET."/".self::$TOKEN
            )
        );

    }

    /**
     * @param null $component
     * @return mixed
     */
    public static function getOneV2Page($component = null ){

        return json_decode
        (
            self::getRequest
            (
                self::$API_ENDPOINT."/api/v2/read/single/one/{$component}/".self::$SECRET."/".self::$TOKEN
            )
        );

    }


    /**
     * @param $requestUrl
     * @param array $data
     * @return mixed
     */
    private static function postRequest($requestUrl, array $data = [] ){

        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$requestUrl);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;

    }


    /**
     * @param $url
     * @return mixed
     */
    private static function getRequest($url){

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $output=curl_exec($ch);
        curl_close($ch);


        return $output;

    }


}