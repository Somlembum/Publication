<?php

function my_autoload($className)
{
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    if (file_exists($file))
        include_once $file;
    else
        var_dump($className);
}
spl_autoload_register('my_autoload');



$n = News::news5();
foreach ($n as $new)
{
    $new->printer();
    echo "\n";
};
//foreach($publ1 as $n)
//{
//$n->printer();
//}

//$publ1 = new Article('10 самых таинственных теорий заговоров!','Правительство использует для слежки насекомых, грызунов и дроны','Игорь Печкин');
//$publ1->printer();

//$publ2 = new Publication();
//$publ2->title = 'Публикация 2';

//$publ2->printer();