<?php

/**
 * Created by PhpStorm.
 * User: Miorantsoa
 * Date: 03/07/2017
 * Time: 21:53
 */
header("Access-Control-Allow-Origin: *");
include_once '/SimpleRest.php';
class InitUser extends SimpleRest {

    public function goInit($username, $token){
        
        $statusCode = 200;
        $response = array('accountId'=>'azzresx');

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this ->setHttpHeaders($requestContentType, $statusCode);

        $response = $this->encodeJson($response);
        echo $response;
    }
}