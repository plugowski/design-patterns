<?php
namespace plugowski\DesignPatterns\Observer;

/**
 * Class Subject
 * @package plugowski\DesignPatterns\Observer
 */
class Subject extends AbstractSubject
{
    /**
     * @var AbstractObserver[]
     */
    private $observers = [];
    /**
     * @var string
     */
    private $name;

    /**
     * Subject constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param AbstractObserver $observer
     * @return void
     */
    public function attach(AbstractObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param AbstractObserver $observer
     * @return void
     */
    public function detach(AbstractObserver $observer)
    {
        foreach($this->observers as $objKey => $objValue) {
            if ($objValue === $observer) {
                unset($this->observers[$objKey]);
            }
        }
    }

    /**
     * @return void
     */
    public function notify()
    {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @param string $name
     */
    public function updateName($name)
    {
        $this->name = $name;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}