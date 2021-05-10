<?php

    //remove session
    session_start();
    session_unset();
    session_destroy();

    // remove cookies
    setcookie("login_email",$email, time() - (86400 * 30), "/");
    setcookie("login_password",$password, time() - (86400 * 30), "/");

    header('location: login.html');
