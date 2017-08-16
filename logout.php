  <?php

    if(isset($_POST['username'])){
      require_once __DIR__.'/vendor/autoload.php';
      $username = [$_POST['username']];
      
      // You can quickly bootup an expo instance
      $expo = \ExponentPhpSDK\Expo::normalSetup();
      
      
      $message = 'Bonjour '.$interestDetails[0]." ce mobile n'est plus synchronisé avec votre compte et ne recevra plus de notification";
      // Build the notification data
      $notification = ['body' => $message];
      
      // Notify an interest with a notification
      $expo->notify($interestDetails[0], $notification);

      // Subscribe the recipient to the server
      $expo->unsubscribe($username);
    }else{
      echo('tsis inin le POST ah');
    }
    

        
        

    