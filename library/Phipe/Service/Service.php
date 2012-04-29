<?php

namespace Phipe\Service;

use Phipe\Message\Message;

/**
 *
 * @package Phipe
 * @subpackage Service;
 */
interface Service
{
    public function process(Message $message);
}

