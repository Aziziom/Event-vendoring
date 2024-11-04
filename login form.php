<?php 
session_start();
$pas=$_POST["pass"];
$email=$_POST["email"];

$conn= mysqli_connect('localhost','root','','nairat');
if(!$conn){
    die('not connected');
}
$sql= "select pass from usajili where email='$email'";
$result=$conn->query($sql);
if($result=== false){
    echo "error".$conn->error;
}
else{
if($result->num_rows > 0){
    $row=$result->fetch_assoc();
    $storedpass=$row['pass'];
    $storedemail=$row['email'];
  
    if($storedpass==$pas){
        $_SESSION['email'] = $email;
        header("Location: dashboard form.html");
        exit();
    }
    else {
        header("Location: login form.html?incorrect password or email!!!");
        exit();
    }
}
else {
    echo "<script>alert('user not found');</script>";
    echo "<script>window.location.href = 'login form.html';</script>";
    
        exit();
}
}
$conn->close();
?>