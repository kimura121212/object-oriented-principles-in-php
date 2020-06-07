<?php

class Team
{
    protected $name;

    protected $members = [];

    public function _construct($name, $members=[])
    {
        $this->name = $name;
        $this->members = $members;

    }

    public static function start(... $params)
    {
        return new static(... $params);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[]=$name;

    }

}

class Member{
    protected $name;

    public function _construct($name){
        $this->name = $name;
    }

    public function lastViewed(){

    }
}

$acme = Team::start('Acme',[
    new Member('Jpn'),
    new Member('Jon'),
]);



var_dump($acme->members());

