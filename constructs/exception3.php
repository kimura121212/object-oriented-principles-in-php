<?php

class TeamException extends Exception
{
    public static function fromTooManyMembers(){
        return new static('You ');
    } 
}

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Team
{
    protected $members = [];

    public function add(Member $member)
    {
        if(count($this->members)==3){
            throw TeamException::fromTooManyMembers();
        }

        $this->members[] = $member;

    }

    public function members()
    {
        return $this->members;
    }
}

class TeamMembersController
{
    public function store()
    {

        $team = new Team;

        try{
            $team->add(new Member('Jane'));
            $team->add(new Member('Jane'));
            $team->add(new Member('Jane'));

            var_dump($team->members());
        }catch(TeamException $e){
            var_dump($e);
        }
        
    }
}

(new TeamMembersController())->store();