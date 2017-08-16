  <?php
    header("Access-Control-Allow-Origin: *");
    var_dump($_POST);
    echo "eo ara oe";
  // header("Access-Control-Allow-Origin: *");
    require_once __DIR__.'/vendor/autoload.php';
    include_once '/SimpleRestHTTP.php';
    $statusCode = 200;
    $response = $_POST;

    $requestContentType = $_SERVER['HTTP_ACCEPT'];
    $this ->setHttpHeaders($requestContentType, $statusCode);

    $response = $this->encodeJson($response);
    echo($response)
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

        
        

    