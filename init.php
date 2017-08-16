  <?php

    if(isset($_POST['token'])){
      require_once __DIR__.'/vendor/autoload.php';
      $interestDetails = [$_POST['username'], $_POST['token']];
      
      // You can quickly bootup an expo instance
      $expo = \ExponentPhpSDK\Expo::normalSetup();
      $message = '';
      // Subscribe the recipient to the server
      try{
        $listName = [$interestDetails[0]];
        $tokens = $expo->getMembers($listName);
        $message = 'rebonjour '.$interestDetails[0];

      }catch(Exception $e){
        $message = 'Bonjour '.$interestDetails[0]."\n on vous enverra désormais \n une notification sur ce mobile \n à chaque récéption d'argent";
        $expo->subscribe($interestDetails[0], $interestDetails[1]);
      }
      $notification = ['body' => $message];
      $expo->notify($interestDetails[0], $notification);
        echo json_encode($notification);
    }else{
      echo('tsis inin le POST ah');
    }
    

        
        

    