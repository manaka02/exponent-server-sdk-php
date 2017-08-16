  <?php

    if(isset($_POST['username'])){
      require_once __DIR__.'/vendor/autoload.php';
      $username = [$_POST['username']];
      $expo = \ExponentPhpSDK\Expo::normalSetup();
      $expo->unsubscribe($username);
      echo(json_encode($_POST.'eto le post'));
    }else{
      echo('tsis inin le POST ah');
    }
    

        
        

    