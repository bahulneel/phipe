<?php

namespace Phipe\Gateway;

use Phipe\Message\Message;

/**
 * Message Gateway
 * 
 * @package Phipe
 * @subpackage Gateway
 */
interface Gateway
{
    /**
     * Send a message via the gateway
     * 
     * @param Message $message The message to send
     * 
     * @return void
     */
    public function send( Message $message );

    /**
     * Recieve a message from the gateway
     * 
     * @return Message The next message from the gateway
     */
    public function recv( );
}
