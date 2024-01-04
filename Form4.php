<?php 

session_start();

include 'Functions/DBconnect.php';
include 'Functions/function.php';

$user_data = check_login($con);


if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $studentnum=$_POST['studentnum'];
  $schoolyear=$_POST['schoolyear'];
  $semester=$_POST['semester'];
  $period=$_POST['period'];
  $course=$_POST['course'];
  $section=$_POST['section'];

  $sql="Select * from `studentinfo`";
$result=mysqli_query($con,$sql);
if($result){
    if( $row=mysqli_fetch_assoc($result)){
      if($_SESSION['user_id'] == $user_data['user_id'] ){
      $user_id=$_SESSION['user_id'];
      }
    }
  }

  $reference_id= $user_id;

  $DC_1=$_POST['DC_1'];
  $DC_2=$_POST['DC_2'];
  $DC_3=$_POST['DC_3'];
  $DC_4=$_POST['DC_4'];
  $DC_5=$_POST['DC_5'];
  $DC_6=$_POST['DC_6'];
  $DC_7=$_POST['DC_7'];
  $DC_8=$_POST['DC_8'];
  $DC_9=$_POST['DC_9'];
  $DC_10=$_POST['DC_10'];
  $DC_11=$_POST['DC_11'];

  

$sql="insert into `applications`(
  reference_id,
  input_name,
  input_studentnum,
  input_schoolyear,
  input_semester,
  input_periods,
  input_course,
  input_section,
  DC_1,DC_2,DC_3,DC_4,DC_5,DC_6,DC_7,DC_8,DC_9,DC_10,DC_11

  ) 
  values(
    '$reference_id',
    '$name',
    '$studentnum',
    '$schoolyear',
    '$semester',
    '$period',
    '$course',
    '$section',
    '$DC_1','$DC_2','$DC_3','$DC_4','$DC_5','$DC_6','$DC_7','$DC_8','$DC_9','$DC_10','$DC_11'
    )";


$result=mysqli_query($con,$sql);
if($result){

  echo "Data inserted successfully";
  header("location: Form4 output.php");
}
else{
  die(mysqli_error($con));
}

}



?>


<!DOCTYPE html> 
<html>

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESSUDYANTE</title>

    <link rel="stylesheet" href="CSS files/Form4.css">
    <link rel="stylesheet" href="CSS Icons/all.css">



<header>
  <div class="menu-bar">
    <left><img src="images/ESSU Logo & text.png" style="height: 80px;"></left>
     <ul>
       <li><h1 style="color: white;font-family:Arial, Helvetica, sans-serif; letter-spacing: 1px; ">COLLEGE OF ENGINEERING PORTAL</h1></li>
       <li><a href ="MainPage.php">Go Back<i class="fa-solid fa-right-from-bracket"></i></a></li>
       
     </ul>
   </div>
</header>


<body>
  <center>
    <div class="content">
  <div class="container">
    <table>
      <form method="post">
        <div class="table">
          <th colspan="6">
            <div class="title">
            APPLICATION FOR CERTIFICATE OF GRADES
          </div>
          </th>
          <tr>
            <td colspan="4">
              <label for="name">
                NAME: 
              </label>
              <div class="input-box">
              <input  type="text" name="name" id="name" required> 
              </div>
            </td>
            <td>
              <label for="studentnum">
                STUDENT NUMBER:
              </label>
              <div class="input-box">
                <input type="text" name="studentnum" id="studentnum" required>
              </div>
            </td>
           
            <td>
              <label for="schoolyear">
                SCHOOL YEAR:
              </label>
              <div class="input-box">
              <input type="text" name="schoolyear" id="schoolyear" required>
            </div>
              </td>
              
              </tr>
          <tr>
            <td colspan="2">
              <label for="period">
                PERIOD:
              </label>
              <div class="input-box">
              <input type="text" name="period" id="period" placeholder="MIDTERMS/FINAL" required> 
</div>
            </td>
            <td colspan="2">
              <label for="course">
                COURSE:
              </label>
              <div class="input-box">
                <input type="text" name="course" id="course" required>
              </div>
            </td>
            <td>
              <label for="section">
                SECTION:
              </label>
              <div class="input-box">
                <input type="text" name="section" id="section" required>
              </div>
            </td>
            <td>
                <label for="semester">
              SEMESTER:
                </label>
                <div class="input-box">
                  <input type="text" name="semester" id="semester" required>
</div>   
 </td>
            </tr>

          <tr>
            <th colspan="6">
              <div class="title">
              SUBJECT DESCRIPTION
              </div>
            </th>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
              <input type="text" name="DC_1" id="DC_1">
            </div>
              </td> 
          </tr>
          <tr>
            <td colspan="6">
            <div class="input-box">
              <input type="text" name="DC_2" id="DC_2">
            </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" name="DC_3" id="DC_3">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" name="DC_4" id="DC_4">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" name="DC_5" id="DC_5">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" name="DC_6" id="DC_6">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" name="DC_7" id="DC_7">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" name="DC_8" id="DC_8">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" name="DC_9" id="DC_9">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" name="DC_10" id="DC_10">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" name="DC_11"  id="DC_11">
              </div>
            </td>
          </tr>
        </div>

  <tr>
  <td colspan="6">
    <center>
<div class="button-container">
  <button class="btn-done" name="submit" type="submit">SUBMIT APPLICATION</button>
</div>
</center>
<td>

</tr>


      </form>
    </table>
  </div>
    </div>
</center>


</body>





</html>