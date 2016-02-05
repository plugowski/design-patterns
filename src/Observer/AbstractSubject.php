<?php
namespace plugowski\DesignPatterns\Observer;

/**
 * Class AbstractSubject
 * @package plugowski\DesignPatterns\Observer
 */
abstract class AbstractSubject
{
    /**
     * @param AbstractObserver $observer
     * @return void
     */
    abstract public function attach(AbstractObserver $observer);

    /**
     * @param AbstractObserver $observer
     * @return void
     */
    abstract public function detach(AbstractObserver $observer);

    /**
     * @return void
     */
    abstract public function notify();
}
