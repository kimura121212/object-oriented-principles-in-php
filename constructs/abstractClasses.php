<?php

abstract class AchivementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', '$0', $class));
    }

    public function icon()
    {
        return str_replace(' ','-', $this->name().'.png');
    }

    abstract public function qualifier($user)
}

class FirstThousandPoints extends AchivementType
{

    public function qualifier($user)
    {

    }
}


class ReachTop50 extends AchivementType
{

    public function qualifier($user)
    {

    }
}


class FirstBestAnswer extends AchivementType
{
    public function name()
    {
        return 'First Best Answer';
    }

    public function icon()
    {
        return 'first-best-answer.png';
    }

    public function qualifier($user)
    {

    }
}

