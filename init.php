  <?php

    if(isset($_POST['token'])){
      require_once __DIR__.'/vendor/autoload.php';
      $interestDetails = [$_POST['username'], $_POST['token']];
      
      // You can quickly bootup an expo instance
      $expo = \ExponentPhpSDK\Expo::normalSetup();
      
      // Subscribe the recipient to the server
      $expo->subscribe($interestDetails[0], $interestDetails[1]);
      $message = "Bonjour ".$interestDetails[0]."on vous enverra désormais une notification sur ce mobile à chaque reception d'argent";
      // Build the notification data
      $notification = ['body' => 'bonjour oh'];
      
      // Notify an interest with a notification
      $expo->notify($interestDetails[0], $notification);
    }
    

        
        

    