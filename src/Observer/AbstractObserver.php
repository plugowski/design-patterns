<?php
namespace plugowski\DesignPatterns\Observer;

/**
 * Class AbstractObserver
 */
abstract class AbstractObserver
{
    /**
     * @param Subject $subject
     * @return mixed
     */
    abstract public function update(Subject $subject);
}