<?php
namespace UnitTestPhp;

class Box
{
    protected mixed $items =  [];


    public function __construct($items = [])
    {

        $this->items = $items;
    }

    public function has($items): bool
    {
        return  in_array($items, $this->items);
    }

    public function takeOne(): string
    {
        return array_shift($this->items);
    }
    public function startsWith($letter):array
    {
        return array_filter($this->items , function ($items) use ($letter)
        {
            return stripos($items , $letter) === 0;
        });
    }
}
