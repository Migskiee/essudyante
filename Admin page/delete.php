<?php

include 'Functions/DBconnect.php';


if(isset($_GET['deleteid'])){
    $user_id=$_GET['deleteid'];

    $sql="delete from `studentinfo` where user_id = $user_id";
    $result=mysqli_query($con,$sql);
    if($result){
        $sql="delete from `applications` where reference_id = $user_id";
        $results=mysqli_query($con,$sql);
        if($results){
            $sql="delete from `applications_record` where reference_id = $user_id";
            $results2=mysqli_query($con,$sql);
        }
       header('location:CRUD_display.php');
    }
    else{
        die(mysqli_error($con));
    }




}

?>