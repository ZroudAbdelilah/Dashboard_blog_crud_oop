<?php

// require connection file
require('./database.php');

class Login extends Connect {
// check is post data exist
public function login(){
if(isset($_POST)){
    // Select admin from data base
    $sql = "SELECT * FROM admin";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // convert $result to an associative array
        $row = mysqli_fetch_assoc($result);
        $logEmail = $row["email"];
        $logPassword = $row["password"];
    }else
    {
        echo "No user found!";
    }

    
    $email = $_POST['email'];
    $password = $_POST['password'];

    // check if email and password are not empty
    if($email != "" && $password != "" ){
        // check if given email is like user email
        if ($email == $logEmail){
            // check if password is same as user password
                if ($password == $logPassword){
                    // session
                    session_start(); 

                    // set login session
                    $_SESSION['login']=true;

                    // set cookies if remember me checked
                    if(isset($_POST['remember'])){
                        setcookie("login_email",$email, time() + (86400 * 30), "/");
                        setcookie("login_password",$password, time() + (86400 * 30), "/");
                    }
                    // go to home page
                    header('Location: ./index.php');
                }
            }else{
                echo "wrong email!";
            }
    }else{
        echo "Email or password is empty!";
    }
}else{
    // go back to login page
    header('location: ./login.html');
}
}
}