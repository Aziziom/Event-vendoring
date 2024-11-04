<?php 
session_start();
function get_logged_in_user_id(){
    if(!isset($_SESSION['email'])){
        header("Location: login form.html");
        exit();
    }else{
         header("Location: dashboard form.html");
    }
}

?>