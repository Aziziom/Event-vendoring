<?php
$etype=$_POST["etype"];
$ninvite=$_POST["ninvite"];
$devent=$_POST["devent"];
$tevent=$_POST["tevent"];
$budget=$_POST["budget"];
$email=$_POST["email"];
$pnc=$_POST["pnc"];
$pno=$_POST["pno"];
$pnr=$_POST["pnr"];
$address=$_POST["address"];
$conn=mysqli_connect('localhost','root','','nairat');
if(!$conn){
    die("sorry not connected");
}
$sql= "insert into events (Event_type,Invites,Date_of_event,Time_of_event,Budget,Customer_email,Client_number,Owner_number,Relative_number,Address) values (?,?,?,?,?,?,?,?,?,?)";
$st= $conn->prepare($sql);
$st->bind_param("ssssssssss",$etype,$ninvite,$devent,$tevent,$budget,$email,$pnc,$pno,$pnr,$address);
if($st->execute()){
    echo "<script>alert('data inserted');</script>";
    echo "<script>window.location.href = 'dashboard form.html';</script>";
}
else{
    echo "erroe: ".$sql."<br>".$conn->error;
}
$st->close();
$conn->close();
?>

