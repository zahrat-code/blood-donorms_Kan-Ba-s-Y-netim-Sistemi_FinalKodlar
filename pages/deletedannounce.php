<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'dbconnect.php';


$qry="delete from announce where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"SİLİNDİ";
    header('Location:deleteannouncement.php');
}else{
    echo"Hata!!";
}
}
?>