<?php
  require_once __DIR__.'/vendor/autoload.php';
  
  $interestDetails = ['unique identifier', 'ExpoPushToken[unique]'];
  
  // You can quickly bootup an expo instance
  $expo = \ExponentPhpSDK\Expo::normalSetup();
  
  // Subscribe the recipient to the server
  $expo->subscribe($interestDetails[0], $interestDetails[1]);
  
  // Build the notification data
  $notification = ['body' => 'Hello World!'];
  
  // Notify an interest with a notification
  $expo->notify($interesDetails[0], $notification);
