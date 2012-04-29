<?php

namespace Phipe\Server;

use Phipe;

/**
 *
 * @package Phipe
 * @subpackage Server
 */
class Gateway implements Server
{

    /**
     *
     * @var Phipe\Gateway\Gateway
     */
    private $gateway;

    /**
     *
     * @var Phipe\Service\Service
     */
    private $service;

    public function __construct( Phipe\Gateway\Gateway $gateway, Phipe\Service\Service $service )
    {
        $this->gateway = $gateway;
        $this->service = $service;
    }

    public function run()
    {
        while ( $request = $this->gateway->recv() )
        {
            $response = $this->service->process( $request );
            $this->gateway->send( $response );
        }
    }

}

