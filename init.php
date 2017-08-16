  <?php
  require_once __DIR__.'/vendor/autoload.php';

    header("Access-Control-Allow-Origin: *");
    // You can quickly bootup an expo instance
      $expo = \ExponentPhpSDK\Expo::normalSetup();

    if(isset($_POST)){
      $interest = $_POST['username'];
      $token = $_POST['token'];
      $interestDetails = [$interest, $token];
      $message = '';
      try{
            $listName = [$interest];
            $listToken = $expo->getMembers($listName);
            $message="celà fait plaisir de vous revoir ".$interest;
      }catch(Exception $e){
           $expo->subscribe($interestDetails[0], $interestDetails[1]);
           $message = "Bienvenue sur l'application AriaryPro ".$interest." \n 
                      une notification vous sera envoyée à chaque reception d'argent";
      }
      // Build the notification data
      $notification = ['body' => $message];
      
      // Notify an interest with a notification
      $expo->notify($interestDetails[0], $notification);
    }

    