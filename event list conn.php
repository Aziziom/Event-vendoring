
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body >

<?php
session_start();
$email = $_SESSION['email'];
//$v = $_GET['v'];

$con = mysqli_connect('localhost','root','','nairat');
if (!$con) {
    die('Could not connect: ');
}

//mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM events WHERE Customer_email = '".$email."'";
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0){
echo "<table>
<tr>
<th>event id</th>
<th>event type</th>
<th>invites</th>
<th>date of event</th>
<th>time of event</th>
<th>budget</th>
<th>customer email</th>
<th>client number</th>
<th>owner number</th>
<th>relative number</th>
<th>address</th>
<th>email</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Event_id'] . "</td>";
    echo "<td>" . $row['Event_type'] . "</td>";
    echo "<td>" . $row['Invites'] . "</td>";
    echo "<td>" . $row['Date_of_event'] . "</td>";
    echo "<td>" . $row['Time_of_event'] . "</td>";
    echo "<td>" . $row['Budget'] . "</td>";
    echo "<td>" . $row['Customer_email'] . "</td>";
    echo "<td>" . $row['Owner_number'] . "</td>";
    echo "<td>" . $row['Relative_number'] . "</td>";
    echo "<td>" . $row['Address'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
else{
  
    echo "sorry dear "." .$email. "." you entered incorect email please try again";
    echo "  OR you may not have an active event";
}
mysqli_close($con);
?>
</body>
</html>
