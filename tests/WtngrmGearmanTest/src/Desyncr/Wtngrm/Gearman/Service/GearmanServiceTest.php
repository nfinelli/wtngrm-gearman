<?php
namespace Desyncr\Wtngrm\Gearman\Service;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-21 at 23:18:25.
 */
class GearmanServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GearmanService
     */
    protected $object;
    protected $mock;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->mock = $this->getMock('\GearmanClient');
        $this->mock->expects($this->any())
                    ->method('addServer');

       $this->object = new GearmanService;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Desyncr\Wtngrm\Gearman\Service\GearmanService::dispatch
     * @todo   Implement testDispatch().
     */
    public function testDispatch()
    {
        $key = 'test.job';
        $job = array('id' => $key);
        $this->object->add($key, $job);

        $this->mock->expects($this->once())
                    ->method('doBackground');

        $this->object->dispatch();

    }
}
