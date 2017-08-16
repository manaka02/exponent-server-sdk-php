  <?php
  require_once __DIR__.'/vendor/autoload.php';
  
    $interestDetails = ['toavina', 'ExponentPushToken[5AQ172ILixXkR3_9oM9uTh]'];
    
    // You can quickly bootup an expo instance
    $expo = \ExponentPhpSDK\Expo::normalSetup();
    
    // Subscribe the recipient to the server
    $expo->subscribe($interestDetails[0], $interestDetails[1]);
    
    // Build the notification data
    $notification = ['body' => "Bienvenue sur l'application AriaryPro"];
    
    // Notify an interest with a notification
    $expo->notify($interestDetails[0], $notification);