<?php
require_once 'animal.php';

class AnimalFactory
{
    const TYPE_MAMMAL = 1;
    const TYPE_REPTILE = 2;

    public static function create($type, $data = array())
    {
        switch ($type) {
            case self::TYPE_MAMMAL:
                return new Mammal($data);
            case self::TYPE_REPTILE:
                return new Reptile($data);
            default:
                throw new Exception("Invalid animal type : {$type}");
        }
    }
}