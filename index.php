<?php
  require_once __DIR__.'/vendor/autoload.php';
  
  $interestDetails = ['unique identifier', 'ExpoPushToken[ejp4vuF52ZTNBKBvw53vys]'];
  
  // You can quickly bootup an expo instance
  $expo = \ExponentPhpSDK\Expo::normalSetup();
  
  // Build the notification data
  $notification = ['body' => 'Hello World!'];
  
  // Notify an interest with a notification
  $expo->notify($interesDetails[0], $notification);
