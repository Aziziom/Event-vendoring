<?php
session_start();
$opera=ope();
if($opera){
    header("Location:welcome page.html");
    exit();
} else{
    echo "operation failed"; 
}
function ope(){
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$pno=$_POST["pno"];
$pass=$_POST["pass"];
$conn = new mysqli('localhost','root','','nairat');
if($conn->connect_error){
    die("connection fairule: ".$conn->connect_error);
}
echo "connected succsessfully";
echo " ";
$sql=$conn->prepare("insert into usajili (firstname,lastname,email,phonenumber,pass)
values(?,?,?,?,?)");
$sql->bind_param("sssss",$fname,$lname,$email,$pno,$pass);
$sql->execute();
$_SESSION['email']=$email;
echo "registered";
$sql->close();
$conn->close();
return true;
}
?>