<?php
$servername = "localhost";
$username = "root";
$password = "";
 $dbname = "practice";

 $connect =  mysqli_connect($servername, $username, $password, $dbname );

 if(!$connect){
     echo ' <h1 style="color:Red; text-align:center; margin: 20px 10px; text-transform: uppercase"> Connection Failed: Fixed your server hosting!!!!!! thank you! See you Again </h1>';
 }

?>
