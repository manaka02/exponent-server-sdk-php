  <?php
  require_once __DIR__.'/vendor/autoload.php';

    header("Access-Control-Allow-Origin: *");
    if(isset($_POST)){
      $interest = $_POST['username'];
      $token = $_POST['token'];
      $interestDetails = [$interest, $token];

      // You can quickly bootup an expo instance
      $expo = \ExponentPhpSDK\Expo::normalSetup();
      
      // Subscribe the recipient to the server
      $expo->subscribe($interestDetails[0], $interestDetails[1]);
      
      // Build the notification data
      $notification = ['body' => "Bienvenue sur l'application AriaryPro ".$interest." \n 
       une notification vous sera envoyée à chaque reception d'argent"];
      
      // Notify an interest with a notification
      $expo->notify($interestDetails[0], $notification);
    }

    