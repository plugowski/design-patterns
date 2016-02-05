<?php
use plugowski\DesignPatterns\Observer\Observer;
use plugowski\DesignPatterns\Observer\Subject;

/**
 * Class ObserverTest
 */
class ObserverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldFiredObserverAndUpdateName()
    {
        $subject = new Subject('Subject1');
        $observer = new Observer();

        $this->assertNull($observer->getName());

        $subject->attach($observer);
        $subject->updateName('Subject2');

        $this->assertEquals('Subject2', $observer->getName());
    }
}