Smartfocus PHP Client
==================

Client PHP for Smartfocus API using [Guzzle](https://github.com/guzzle/guzzle) and [Guzzle Service Description](https://github.com/guzzle/guzzle-services)

Usage
---------------
```
<?php

require_once 'vendor/autoload.php';

$smartfocusClient = new \Pascal76\Smartfocus\Client();

$openConnection = $smartfocusClient->openConnection([
  'username' => 'YOUR_SMARTFOCUS_USERNAME',
  'password' => 'YOUR_SMARTFOCUS_PASSWORD',
  'apiKey' => 'YOUR_SMARTFOCUS_APIKEY',
]);

$members = $smartfocusClient->getMembers([
  'memberUID' => 'EMAIL:member@mail.com',
  'token' => $openConnection['result'],
]);

$updateMember = $smartfocusClient->updateMember([
  'memberUID' => 'EMAIL:member@mail.com',
  'token' => $openConnection['result'],
  'dynContent' => [['key' => 'TITLE','value' => 'Mr.']]
]);
```

Please see "Operations" section in [smartfocus-api-description.php](src/resources/smartfocus-api-description.php) file for available operations and arguments.
