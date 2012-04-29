<?php
namespace Phipe\Gateway;

use Phipe\Message\Message;

/**
 * Loopback Gateway
 * 
 * Returns any message sent to it in order
 * 
 * @package Phipe
 * @subpackage Gateway
 */
class Loopback implements Gateway
{
    private $messageQueue = array();
    
    public function recv()
    {
        return array_shift($this->messageQueue);
    }

    public function send(Message $message)
    {
        $this->messageQueue[] = $message;
    }
}

