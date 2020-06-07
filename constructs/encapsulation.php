<?php

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job()
    {

    }

    public function favoriteTeam()
    {

    }

    public function thingsThatKeepUpAtNight()
    {
        return 'We are all going to die and that is terrifying';
    }
}

$person = new Person('Bob');

$person->name = null;

