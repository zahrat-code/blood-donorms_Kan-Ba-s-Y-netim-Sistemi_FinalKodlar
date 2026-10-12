<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'dbconnect.php';


$qry="delete from campaigndb where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"silindi";
    header('Location:deletedcampaign.php');
}else{
    echo"Hata!!";
}
}
?>