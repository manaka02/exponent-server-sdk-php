  <?php
    header("Access-Control-Allow-Origin: *");

    include_once '/initUser.php';
    $rest = new initUser();
    $rest->goInit($_POST['username'], $_POST['token']);
  //   // You can quickly bootup an expo instance
  //     $expo = \ExponentPhpSDK\Expo::normalSetup();

    
  //     // $interest = $_POST['username'];
  //     // $token = $_POST['token'];
  //     // $interestDetails = [$interest, $token]      
  //     // $expo->subscribe($interest, $token);
  //     // $message = "Bienvenue sur l'application AriaryPro ".$interest." \n 
  //     //           une notification vous sera envoyée à chaque reception d'argent";
  //     // // Build the notification data
  //     // $notification = ['body' => $message];
      
  //     // // Notify an interest with a notification
  //     // $expo->notify($interest, $notification);

        
        

    