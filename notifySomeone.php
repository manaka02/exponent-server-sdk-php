<?php 
    if(isset($_POST)){
        header("Access-Control-Allow-Origin: *");
        require_once __DIR__.'/vendor/autoload.php';
        // You can quickly bootup an expo instance
        $expo = \ExponentPhpSDK\Expo::normalSetup();
        $name = $_POST['username'];
        $message = $_POST['message'];
        $notification = ['body' => $message];
        $name=trim($name);
        $expo->notify($name, $notification);
    }


?>