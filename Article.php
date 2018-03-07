<?php

class Article extends Publication
{
    public $date;

    public function _construct()
    {
        $date = date('d.m.Y');
        $this->date = $date;
    }

    public function printer()
    {
        echo $this->title . "\n==============\n";
        echo $this->content . "\n";
        echo "Подготовил:" . $this->author . "\n";
        echo $this->date . ". \n";
    }
}