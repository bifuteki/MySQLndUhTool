<?php

namespace MySQLndUhTool\Event;

require_once dirname(__FILE__) . '/../../../../src/MySQLndUhTool/Event/Base.php';

/**
 * Test class for Base.
 * Generated by PHPUnit on 2011-09-15 at 10:36:18.
 */
class BaseTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Base
     */
    protected $object;

    /**
     * @var Proxy
     */
    protected $proxy;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $eventDispatcher = new \Symfony\Component\EventDispatcher\EventDispatcher;
        $this->proxy = new \MySQLndUhTool\Proxy($eventDispatcher);
        $this->object = $this->getMockForAbstractClass('MySQLndUhTool\Event\Base', array('resource #1', $this->proxy));
    }

    public function testResource() {
        $this->assertAttributeEquals('resource #1', 'resource', $this->object);
        $this->assertEquals('resource #1', $this->object->getResource());

        $this->object->setResource('resource #2');
        $this->assertAttributeEquals('resource #2', 'resource', $this->object);
        $this->assertEquals('resource #2', $this->object->getResource());
    }

    public function testProxy() {
        $this->assertAttributeInstanceOf('\MySQLndUhTool\Proxy', 'proxy', $this->object);
        $this->assertSame($this->proxy, $this->object->getProxy());

        $eventDispatcher = new \Symfony\Component\EventDispatcher\EventDispatcher;
        $proxy = new \MySQLndUhTool\Proxy($eventDispatcher);
        $this->object->setProxy($proxy);
        $this->assertAttributeSame($proxy, 'proxy', $this->object);
        $this->assertSame($proxy, $this->object->getProxy());
    }

}