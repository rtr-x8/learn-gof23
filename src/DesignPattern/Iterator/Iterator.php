<?php


namespace DesignPattern\Iterator;


interface Iterator
{
    public function hasNext(): bool;

    public function next();
}
