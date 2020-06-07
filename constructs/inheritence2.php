<?php

class Collection
{
    protected $items=[];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        // 
        return array_sum(array_column($this->items, $key));
    }


}

class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
       $this->title=$title;
       $this->length = $length;
    }
}

$collection = new VideosCollection([
    new Video('some video', 100),
    new Video('some video', 200),
    new Video('some video', 300)
]);

echo $collection->length();