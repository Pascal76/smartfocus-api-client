<?php

namespace L0rD59\Smartfocus;

use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Subscriber\Log\LogSubscriber;
use Psr\Log\LoggerInterface;

class Client extends GuzzleClient
{
    public function __construct(LoggerInterface $logger = null)
    {
        $smartfocusApiDescription = include_once 'resources/smartfocus-api-description.php';

        $guzzleClient = new \GuzzleHttp\Client();

        if (!is_null($logger)) {
            $guzzleClient->getEmitter()->attach(new LogSubscriber($logger));
        }

        parent::__construct($guzzleClient, $smartfocusApiDescription);
    }

}