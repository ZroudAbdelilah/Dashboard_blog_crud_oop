<?php
require "./database.php";
require "./articles.php";
if(isset($_POST)){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = urlencode($_POST['content']);
    $date = $_POST['date'];
    if(empty($title) || empty($author) || empty($content)|| empty($date)){
        header('Location: ./add.php?msg=please fill all required fields!');
        die();
    }
    $article = new Articles();
    $results = $article->creat($title,$author,$content,$date);

    header('Location: ./index.php ');
}else{
    echo 0;
}