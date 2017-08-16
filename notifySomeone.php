<?php 
    if(isset($_POST)){
        require_once __DIR__.'/vendor/autoload.php';
        // You can quickly bootup an expo instance
        try{
            $expo = \ExponentPhpSDK\Expo::normalSetup();
            $name = $_POST['username'];
            $listName = ['toavina', 'hasina'];
            $listToken = $expo->getMembers($listName);
            var_dump('fanavaozan'.$listToken);
            // $message = $_POST['message'];
            // // $interestDetails = ['toavina', 'ExponentPushToken[5AQ172ILixXkR3_9oM9uTh]'];
            // // $expo->unsubscribe('toavina');
            // // $expo->subscribe($interestDetails[0], $interestDetails[1]);
            // $notification = ['body' => $message];
            // $expo->notify($name, $notification);
        } catch(Exception $e){
            var_dump($e);
        }
    }


?>