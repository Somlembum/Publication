<?php

class Publication 
{
    public $title;
    public $content;
    public $author;
    public $date;

    public function __construct($title = '',$content = '',$author = '',$date = '') 
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = $date;
    }

    public function printer() 
    {
        echo $this->title . "\n==============\n";
        echo $this->content . "\n";
        echo $this->date . '. ';
        echo $this->author . "\n";
    }
}