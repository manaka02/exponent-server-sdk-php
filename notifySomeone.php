<?php 
    if(isset($_POST)){
        require_once __DIR__.'/vendor/autoload.php';
        // You can quickly bootup an expo instance
        var_dump($_POST);
        // try{
        //     $expo = \ExponentPhpSDK\Expo::normalSetup();
        //     $name = $_POST['username'];
        //     $message = $_POST['message'];
        //     $notification = ['body' => $message];
        //     $name=trim($name);
        //     $expo->notify($name, $notification);
        // } catch(Exception $e){
        //     var_dump($e)
        // }
    }
    echo('eto v')


?>