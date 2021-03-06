<?php

namespace OPCache;
use OPCache\OPCache;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2015-03-12 at 16:17:49.
 */
class OPCacheTest extends \PHPUnit_Framework_TestCase
{

    protected $backupGlobals = FALSE;
    /**
     * @var OPCache
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
//      $this->object = $this->getMockBuilder('OPCache')
//                           ->getMock();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers OPCache\OPCache::cacheClear
     * @todo   Implement testCacheClear().
     */
    public function testCacheClear()
    {
      $opcache = new OPCache();
      $opcache->cacheClear();
    }

    /**
     * @covers OPCache::drushInvalidate
     * @todo   Implement testDrushInvalidate().
     */
    public function testDrushInvalidate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers OPCache::drushReset
     * @todo   Implement testDrushReset().
     */
    public function testDrushReset()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers OPCache::drushStatus
     * @todo   Implement testDrushStatus().
     */
    public function testDrushStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers OPCache::getToken
     * @todo   Implement testGetToken().
     */
    public function testGetToken()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers OPCache::isEnabled
     * @todo   Implement testIsEnabled().
     */
    public function testIsEnabled()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers OPCache::invalidate
     * @todo   Implement testInvalidate().
     */
    public function testInvalidate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers OPCache::reset
     * @todo   Implement testReset().
     */
    public function testReset()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers OPCache::status
     * @todo   Implement testStatus().
     */
    public function testStatus()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers OPCache::verifyToken
     * @todo   Implement testVerifyToken().
     */
    public function testVerifyToken()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
