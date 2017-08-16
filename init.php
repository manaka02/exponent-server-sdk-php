  <?php
  require_once __DIR__.'/vendor/autoload.php';
  require_once '/SimpleRestHTTP.php';

    header("Access-Control-Allow-Origin: *");
    // You can quickly bootup an expo instance
      $expo = \ExponentPhpSDK\Expo::normalSetup();

    if(isset($_POST)){
      $interest = $_POST['username'];
      $token = $_POST['token'];
      $interestDetails = [$interest, $token];
      
      $expo->subscribe($interestDetails[0], $interestDetails[1]);
      $message = "Bienvenue sur l'application AriaryPro ".$interest." \n 
                une notification vous sera envoyée à chaque reception d'argent";
      // Build the notification data
      $notification = ['body' => $message];
      
      // Notify an interest with a notification
      $expo->notify($interestDetails[0], $notification);

        $statusCode = 200;
        $response = array('accountId'=>5);

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this ->setHttpHeaders($requestContentType, $statusCode);

        $response = $this->encodeJson($response);
        echo $response;

    }

    