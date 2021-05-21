<?php

 
class User extends DB{
  
    public function check_login($email, $password){
        $sql = $this->conn->prepare("SELECT * FROM admin WHERE email=:email AND password=:password");
        $sql->bindParam(':email',$email,PDO::PARAM_STR);
        $sql->bindParam(':password',$password,PDO::PARAM_STR);
        if($sql->execute()){
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            return $row['id'];
        }else{
            return false;
        }
    }

    public function find($id){
        $sql = $this->conn->prepare("SELECT * FROM admin WHERE id =:id");
        $sql->bindParam(':id',$id,PDO::PARAM_INT);
        if($sql->execute()){
            return $sql->fetch(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }

}