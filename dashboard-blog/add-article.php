<?php
require "./articles.php";
if(isset($_POST)){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    if(empty($title) || empty($author) || empty($content)|| empty($date)){
        echo "10";
        die();
    }
    $article = new Articles();
    $results = $article->creat($title,$author,$content,$date);
    $data = array(
        "id" => $results,
        "title" => $title,
        "author" => $author,
        "content" => $content,
        "date" => $date
    );
    // echo json_encode($data);
    header('Location: ./index.php ');
}else{
    echo 0;
}