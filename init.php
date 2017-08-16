  <?php
    header("Access-Control-Allow-Origin: *");

     
    // You can quickly bootup an expo instance
      $expo = \ExponentPhpSDK\Expo::normalSetup();

      
      $interest = (isset($_POST['username'])) ? $_POST['username'] : "toavina";
      $token = (isset($_POST['token'])) ? $_POST['token'] : "ExponentPushToken[5AQ172ILixXkR3_9oM9uTh";
      $interestDetails = [$interest, $token];      
      $expo->subscribe($interest, $token);
      $message = "Bienvenue sur l'application AriaryPro ".$interest." \n 
                une notification vous sera envoyée à chaque reception d'argent";
      // Build the notification data
      $notification = ['body' => $message];
      
      // Notify an interest with a notification
      $expo->notify($interest, $notification);

        
        

    