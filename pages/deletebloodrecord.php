<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'dbconnect.php';


$qry="delete from blood where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"SİLİNDİ";
    header('Location:deleteblood.php');
}else{
    echo"Hata!!";
}
}
?>