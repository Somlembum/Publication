<?php

class News extends Publication
{
    static public $type = 'NEWS';    
    
    public function __construct($title = '',$content = '',$author = '',$date = '') 
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = date('d,m,Y');
    }
    
    public static function news5()
    {
        $news5 = [];
        for ($i==1; $i<6; $i++)
        {
            $news = new News('10 самых таинственных теорий заговоров!','Правительство использует для слежки насекомых, грызунов и дроны','Игорь Печкин');
            $news5[] = $news;
        }
        return $news5;
        var_dump($news5);
    }
}
//public function print()
//{
//    echo "{$this->date} : {$this->title} : {$this->content}";
//}
//public function __construct($n1 = '', $n2 = '', $n3 = '', $n4 = '', $n5 = '') 
//{
//    $this->n1 = $n1;
//     $this->n2 = $n2;
//    $this->n3 = $n3;
//    $this->n4 = $n4;
//    $this->n5 = $n5;
//}