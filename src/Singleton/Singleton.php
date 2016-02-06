<?php
namespace plugowski\DesignPatterns\Singleton;

/**
 * Class Singleton
 * @package plugowski\DesignPatterns\Singleton
 */
class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * Protected constructor to prevent creating a new instance of the Singleton via the 'new' operator.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning Singleton instance.
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the Singleton instance.
     */
    private function __wakeup()
    {
    }
}