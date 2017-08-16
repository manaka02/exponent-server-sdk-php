  <?php

    if(isset($_POST['token'])){
      require_once __DIR__.'/vendor/autoload.php';
      $interestDetails = [$_POST['username'], $_POST['token']];
      
      // You can quickly bootup an expo instance
      $expo = \ExponentPhpSDK\Expo::normalSetup();
      
      // Subscribe the recipient to the server
      $expo->subscribe($interestDetails[0], $interestDetails[1]);
      $message = 'Bonjour '.$interestDetails[0]."\n on vous enverra désormais \n une notification sur ce mobile \n à chaque récéption d'argent";
      // Build the notification data
      $notification = ['body' => $message];
      
      // Notify an interest with a notification
      $expo->notify($interestDetails[0], $notification);
      echo json_encode($_POST);
    }else{
      echo('tsis inin le POST ah');
    }
    

        
        

    