<?php
class Singleton
{
    /**
     * Storage of the single instance
     * The value stays until the request is finished
     *
     * @var $instance
     */
    protected static $instance;

    /**
     * Returns the stored instance in the static var
     * If instance not found, it will create a new instance and store it in the static var.
     *
     * @return mixed
     */
    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * Private constructor to prevent call from outside.
     */
    private function __construct()
    {
    }
}