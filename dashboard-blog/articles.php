<?php
require "./database.php";

class Articles extends Connect {

    public function get(){
        $sql ="SELECT * FROM `articles` ORDER BY id DESC";
        $result = mysqli_query($this->conn,$sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($data,$row);
        }
        return $data;
    }

    public function find($id){
        $sql = "SELECT * FROM `articles` WHERE id =$id";
        $result = mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }

    public function update($id,$title,$author,$content,$date){
        $sql = "UPDATE `articles` SET title='$title',author='$author',content='$content',date='$date' WHERE id =$id";
        $result = mysqli_query($this->conn,$sql);
        if ($result){
            return true;
        }else{
            return false;
        }

    }
    public function delete($id){
        $sql = "DELETE FROM `articles` WHERE id =$id";
        $result = mysqli_query($this->conn,$sql);
        if ($result){
            return true;
        }else{
            return false;
        }
    }

    public function creat($title,$author,$content,$date){
        $sql = "INSERT INTO `articles` (`title`,`author`,`content`,`date`) VALUES ('$title','$author','$content','$date') ";

        $result = mysqli_query($this->conn,$sql);
        if ($result){
            return mysqli_insert_id($this->conn);
        }else{
            echo mysqli_error($this->conn);
            return 0;
        }
    }
}