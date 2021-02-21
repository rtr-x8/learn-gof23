<?php


namespace DesignPattern\FactoryMethod;


trait MediaFactory
{
    public function createMedia(): Media
    {
        return self::attachMediaFactory();
    }

    /**
     * @return Media
     */
    protected function attachMediaFactory()
    {
        //
    }
}
