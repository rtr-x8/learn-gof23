<?php


namespace DesignPattern\Singleton;


trait Singleton
{
    private static ?self $instance = null;
    private int $timestamp;

    /**
     * Singleton constructor.
     */
    private final function __construct()
    {
        $this->timestamp = time();
    }

    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }
}
