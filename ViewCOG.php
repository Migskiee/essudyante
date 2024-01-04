<?php

session_start();

include 'Functions/DBconnect.php';
include 'Functions/function.php';


$user_data = check_login($con); 

$user_id=$_GET['updateid'];

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ESSUDYANTE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS files/ViewCOG.css">
  </head>

  <header>
    <div class="menu-bar">
      <left><img src="images/ESSU Logo & text.png" style="height: 80px;"></left>
       <ul>
         <li><a href ="MainPage.php">Go Back<i class="fa-solid fa-right-from-bracket"></i></a></li> 
       </ul>
     </div>
  </header>
  
  <body background="images/ESSU entrance.jpg" style="background-size: cover;">

<div class="contentcontainer">

    <table class="table" >

        <table class="table" >

            <thead>
              <tr>
                  <!--HEADERS-->
                  <th scope="col">reference_id</th>
                <th scope="col">NAME</th>
                <th scope="col">SEMESTER</th>
                <th scope="col">PERIOD</th>
                <th scope="col">S.Y.</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
          
            <?php
            $reference_id = $_SESSION['user_id'];
          $sql="Select * from `applications_record` where reference_id = $reference_id ";
          $result=mysqli_query($con,$sql);
          if($result){
            
            if(mysqli_num_rows($result) > 0 ){
            $row=mysqli_fetch_assoc($result);
                $user_id=$row['reference_id'];
                  $name=$row['output_name'];
                  $year=$row['output_schoolyear'];
                  $period=$row['output_periods'];
                  $semester=$row['output_semester'];
                  echo '<tr>
                  <th scope="row">'.$user_id.'</th>
                  <td>'.$name.'</td>
                  <td>'.$semester.'</td>
                  <td>'.$period.'</td>
                  <td>'.$year.'</td>

                <td>
          <button class="btn btn-primary"><a href="COGDOWNLOAD.php?updateid='.$user_id.'" class="text-light">VIEW/DOWNLOAD</a></button>
          </td>
          </tr>';
                  
              }
              else{
                echo  "<td colspan=5>NO AVAILABLE DATA <td>";
              }
            }
            
          
          
          
          ?>
          
          
          
          



  </tbody>
</table>
</div>


  </body>

</html>