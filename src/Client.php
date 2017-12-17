<?php

namespace L0rD59\Smartfocus;

use GuzzleHttp\Command\Guzzle\GuzzleClient;

class Client extends GuzzleClient
{
    public function __construct()
    {
        $smartfocusApiDescription = include_once 'resources/smartfocus-api-description.php';

        $guzzleClient = new \GuzzleHttp\Client();

        parent::__construct($guzzleClient, $smartfocusApiDescription);
    }

}
