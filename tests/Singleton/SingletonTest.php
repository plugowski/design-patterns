<?php
use plugowski\DesignPatterns\Singleton\Singleton;

/**
 * Class ObserverTest
 */
class SingletonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldAlwaysReturnTheSameInstance()
    {
        $obj = Singleton::getInstance();
        $this->assertEquals($obj, Singleton::getInstance());
    }
}