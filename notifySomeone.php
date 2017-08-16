<?php 
    if(isset($_POST)){
        require_once __DIR__.'/vendor/autoload.php';
        // You can quickly bootup an expo instance
        try{
            $expo = \ExponentPhpSDK\Expo::normalSetup();
            $name = $_POST['username'];
            $message = $_POST['message'];
            
            $notification = ['body' => $message];
            $expo->notify($name, $notification);
        } catch(Exception $e){
            echo "le nom que vous avez mentionné n'existe pas encore dans le registre ou il a désactivé les notifications";
            var_dump($e);
        }
    }


?>