<?php

$servername="localhost";
$uname="root";
$pass="";
$db="secyear";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Bağlantı Başarısız");
}

$sql = "SELECT * FROM announce";
                $query = $conn->query($sql);

                echo "<h1>".$query->num_rows."</h1>";
?>