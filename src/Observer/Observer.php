<?php
namespace plugowski\DesignPatterns\Observer;

/**
 * Class Observer
 * @package plugowski\DesignPatterns\Observer
 */
class Observer extends AbstractObserver
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param Subject $subject
     * @return mixed
     */
    public function update(Subject $subject)
    {
        $this->name = $subject->getName();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}