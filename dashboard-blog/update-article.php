<?php
require "./articles.php";
if(isset($_POST)){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
    $date = $_POST['date'];

    if(empty($title) || empty($author) || empty($content)|| empty($date)){
        echo "10";
        die();
    }

    $article = new Articles();
    $results = $article->update($id,$title,$author,$content,$date);
    if($results){
        header('Location: ./index.php');
    }else{
        echo 0;
    }

}else{
    echo 0;
}