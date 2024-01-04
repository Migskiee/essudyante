<?php


include 'Functions/DBconnect.php';
include 'Functions/function.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registered Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
   <a href=admin_PANEL.php class="text-light"> <button class="btn btn-primary my-5">GO BACK</button></a>
      <a href=CRUD_add.php class="text-light">  <button class="btn btn-primary my-5">Add user</button></a>
        
    </div>



    <table class="table" >

  <thead>
    <tr>
        <!--HEADERS-->
        <th scope="col">USER_ID</th>
      <th scope="col">NAME</th>
      <th scope="col">STUDENT NUMBER</th>
      <th scope="col">PASSWORD</th>
    </tr>
  </thead>
  <tbody>

  <?php

$sql="Select * from `studentinfo`";
$result=mysqli_query($con,$sql);
if($result){
    while( $row=mysqli_fetch_assoc($result)){
      if($row['usertype'] == "user" ){
      $user_id=$row['user_id'];
        $name=$row['name'];
        $studentnum=$row['studentnum'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$user_id.'</th>
        <td>'.$name.'</td>
        <td>'.$studentnum.'</td>
        <td>'.$password.'</td>
      <td>
<a href="update.php?updateid='.$user_id.'" class="text-light"><button class="btn btn-primary">Update</button></a>
<a href="delete.php?deleteid='.$user_id.'" class="text-light"><button class="btn btn-danger">Delete</button></a>
</td>
</tr>';
        
    }
  }
    
} 


?>





  </tbody>
</table>


<style>
    .table{
        margin:40px;
        padding:40px;
        width: 1200px;
    }

</style>

  </body>

</html>