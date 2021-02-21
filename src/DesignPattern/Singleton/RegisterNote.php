<?php


namespace DesignPattern\Singleton;


final class RegisterNote
{
    private static ?RegisterNote $registerNote = null;
    private int $timestamp;

    /**
     * UserList constructor.
     */
    private function __construct()
    {
        $this->timestamp = time();
    }

    public static function getInstance(): RegisterNote
    {
        if (is_null(self::$registerNote)) {
            self::$registerNote = new self();
        }

        return self::$registerNote;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }
}
