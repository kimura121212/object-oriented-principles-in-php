<?php


class AchivementType
{

    public function name()
    {


    }

    public function difficulty()
    {
        return 'intermediate';
    }

    public function icon()
    {
        return '/'
    }

}

class FirstThousandPoints extends AchivementType
{
    

    public function qualifier($user)
    {
        
    }

    public function name()
    {
        return 'Welcome Aboard';
    }
}