<?php 


include 'Functions/DBconnect.php';
include 'Functions/function.php';

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $studentnum=$_POST['studentnumber'];
  $password=$_POST['pass'];

  $user_id = random_num(20);
$sql="insert into `studentinfo`(user_id,name,studentnum,password,COGinput) values('$user_id','$name','$studentnum','$password','$COGinput')";
$result=mysqli_query($con,$sql);
if($result){



  echo "Data inserted successfully";
  header("location: CRUD_display.php");
}
else{
  die(mysqli_error($con));
}

}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS Icons/all.css">
  </head>
  <body>
 <a href="CRUD_display.php" class="text-light"> <button class="btn btn-primary my-5">Go Back</button></a>
    <div class="container">
    <form method="post">
      <!--name-->
  <div class="mb-3">
    <label class="form-label">name</label>
    <input class="form-control" type="text" placeholder="Enter Your name" name="name" autocomplete="off">
  </div>

<!--Student Number-->
  <div class="mb-3">
    <label class="form-label">STUDENT NUMBER</label>
    <input class="form-control" type="text" placeholder="Enter Your Student Number" name="studentnumber" autocomplete="off">
  </div>

  <!--Password-->
  <div class="mb-3">
    <label class="form-label">PASSWORD</label>
    <input class="form-control" type="text" placeholder="Enter Your password" name="pass" autocomplete="off">
  </div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>



   
  </body>
</html>