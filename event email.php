<?php 
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Events</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script src="jquery-3.7.0.min.js"></script>
    <style>
        body{background-color: goldenrod;}
        header,footer{color:brown;text-align: center;background-color: goldenrod;}    
    </style>
<script>
function showUser() {
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","event list conn.php?" ,true);
        xmlhttp.send();
    }

</script>
</head>
<body >
    <header>
        <p><marquee behavior="alternate"><i>Welcome</i></marquee></p>
    <h1><b><i>SHEREHESHA MAEVENT</i></b></h1>
    </header>
<hr>
<div style="text-align: center;">
    
 <!-- <script>
    function m(){
    var v= prompt("aaa".$email);
    showUser(v);
}
  </script> -->
  <?
  $email=$_SESSION['email'];
  ?>
  <input type="button" value="CLICK ME FOR EVENT LIST" class="button btn-warning btn-md" onclick="showUser()"/>

<br>
<div id="txtHint"><b>Events info will be listed here...</b></div>
</div>
<hr>
<footer>
    <div class="container">
    <table class="table table-hover table-striped table-bordered">
        <tr><th>Contact</th><th>Andress</th><th>About us</th></tr>
        <tr>
            <td>
                Email:aziziomar@gmail.com<br>
                Number:+255713685624
            </td>
            <td>
                Tanzania,Dodoma,Udom,CIVE
            </td>
            <td>
                <p>
                    kuna kitu kinahitajika
                </p>
            </td>
        </tr>
    </table>
    </div>
    <marquee><p copy &>SHEREHESHA MAEVENT</p></marquee>
</footer>
<script src="jquery-3.7.0.min.js"></script>  
    <script src="bootstrap.bundle.min.js"></script> 
</body>
</html>