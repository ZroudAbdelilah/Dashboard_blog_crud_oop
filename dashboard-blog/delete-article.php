<?php
require "./database.php";
require "./articles.php";
$article = new Articles();
if(isset($_POST['id'])){
    $id = $_POST['id'];
    if(!empty($id)){
        if($article->delete($id)){
            echo 1;
        }else{
            echo 0;
        }
    }
}