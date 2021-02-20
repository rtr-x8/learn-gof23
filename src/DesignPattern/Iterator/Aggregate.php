<?php


namespace DesignPattern\Iterator;


interface Aggregate
{
    public function iterator(): Iterator;
}
