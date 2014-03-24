<?php
abstract class BaseAnimal
{
    function __construct($data)
    {
        foreach ($data as $key => $val) {
            $this->{$key} = $val;
        }
    }

    public abstract function getName();

    public abstract function getHabitat();
}

class Mammal extends BaseAnimal
{
    public function getName()
    {
        return $this->name;
    }

    public function getHabitat()
    {
        return $this->habitat;
    }
}

class Reptile extends BaseAnimal
{
    public function getName()
    {
        return $this->name;
    }

    public function getHabitat()
    {
        return $this->habitat;
    }
}