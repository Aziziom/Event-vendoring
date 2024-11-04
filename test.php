<?php 
$conn=mysqli_connect('localhost','root','','nairat');
if(!$conn){
    die("sorry not connected");
}
$a="create table Events(
    Event_id int auto_increment primary key,
    Event_type varchar(200),
    Invites varchar(100),
    Date_of_event date,
    Time_of_event time,
    Client_number varchar(20),
    Owner_number varchar(20),
    Relative_number varchar(20),
    Address varchar(200),
    email varchar(50),
    FOREIGN KEY (email) REFERENCES usajili(email) 
);";
    if($conn->query($a) === TRUE){
        echo "cretaed";
    }
   echo "not".mysqli_error($conn);
   
    $conn->close();
?>