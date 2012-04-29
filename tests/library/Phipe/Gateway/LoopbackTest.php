<?php

namespace Phipe\Gateway;

class LoopbackTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Loopback
     */
    protected $gateway;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->gateway = new Loopback;
    }

    /**
     * @covers Phipe\Gateway\Loopback::recv
     */
    public function testRecv()
    {
        $this->assertNull($this->gateway->recv());
    }

    /**
     * @covers Phipe\Gateway\Loopback::send
     */
    public function testSend()
    {
        $message = $this->getMock('Phipe\Message\Message');
        $this->gateway->send( $message );
        $this->assertSame($message, $this->gateway->recv());
    }

}

