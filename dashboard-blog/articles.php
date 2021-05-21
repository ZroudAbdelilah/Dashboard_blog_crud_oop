<?php


class Articles extends DB {

    public function get(){
        $sql = $this->conn->prepare("SELECT * FROM `articles` ORDER BY id DESC");
        if($sql->execute()){
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else{
            return false;
        }
    }

    public function find($id){
        $sql = $this->conn->prepare("SELECT * FROM `articles` WHERE id=:id");
        $sql->bindParam(':id',$id,PDO::PARAM_INT);
        if($sql->execute()){
            $result = $sql->fetch(PDO::FETCH_ASSOC);
            return $result;
        }else{
            return false;
        }
    }

    public function update($id,$title,$author,$content,$date){
        $content = urlencode($content);
        $sql = $this->conn->prepare("UPDATE `articles` SET title=:title,author=:author,content=:content,date=:date WHERE id =:id ");
        $sql->bindParam(':title',$title,PDO::PARAM_STR);
        $sql->bindParam(':author',$author,PDO::PARAM_STR);
        $sql->bindParam(':content',$content,PDO::PARAM_STR);
        $sql->bindParam(':date',$date,PDO::PARAM_STR);
        $sql->bindParam(':id',$id,PDO::PARAM_INT);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }

    }
    public function delete($id){
        $sql = $this->conn->prepare("DELETE FROM `articles` WHERE id =:id");
        $sql->bindParam(':id',$id,PDO::PARAM_INT);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function creat($title,$author,$content,$date){
        $sql = $this->conn->prepare("INSERT INTO `articles` (`title`,`author`,`content`,`date`) VALUES (:title,:author,:content,:date)");

        $sql->bindParam(':title',$title,PDO::PARAM_STR);
        $sql->bindParam(':author',$author,PDO::PARAM_STR);
        $sql->bindParam(':content',$content,PDO::PARAM_STR);
        $sql->bindParam(':date',$date,PDO::PARAM_STR);
        
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }
}