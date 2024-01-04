<?php 


include 'Functions/DBconnect.php';


$reference_id=$_GET['updateid'];

$sql= "Select * from `applications` where reference_id=$reference_id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$input_name = $row['input_name'];
$input_studentnum = $row['input_studentnum'];
$input_schoolyear = $row['input_schoolyear'];
$input_semester = $row['input_semester'];
$input_periods = $row['input_periods'];
$input_course = $row['input_course'];
$input_section = $row['input_section'];
$iDC_1 = $row['DC_1'];
$iDC_2 = $row['DC_2'];
$iDC_3 = $row['DC_3'];
$iDC_4 = $row['DC_4'];
$iDC_5 = $row['DC_5'];
$iDC_6 = $row['DC_6'];
$iDC_7 = $row['DC_7'];
$iDC_8 = $row['DC_8'];
$iDC_9 = $row['DC_9'];
$iDC_10 = $row['DC_10'];
$iDC_11 = $row['DC_11'];

if(isset($_POST['submit'])){

   $output_name = $input_name;
    $output_studentnum = $input_studentnum;
    $output_schoolyear = $input_schoolyear;
    $output_semester = $input_semester;
    $output_periods = $input_periods;
    $output_course = $input_course;
    $output_section = $input_section;
    $DC_1 = $iDC_1;
    $DC_2 = $iDC_2;
    $DC_3 = $iDC_3;
    $DC_4 = $iDC_4;
    $DC_5 = $iDC_5;
    $DC_6 = $iDC_6;
    $DC_7 = $iDC_7;
    $DC_8 = $iDC_8;
    $DC_9 = $iDC_9;
    $DC_10 = $iDC_10;
    $DC_11 = $iDC_11;
    $G_1 = $_POST['G_1'];
    $G_2 = $_POST['G_2'];
    $G_3 = $_POST['G_3'];
    $G_4 = $_POST['G_4'];
    $G_5 = $_POST['G_5'];
    $G_6 = $_POST['G_6'];
    $G_7 = $_POST['G_7'];
    $G_8 = $_POST['G_8'];
    $G_9 = $_POST['G_9'];
    $G_10 = $_POST['G_10'];
    $G_11 = $_POST['G_11'];


$sql=" INSERT INTO `applications_record` (
    reference_id,
    output_name,
    output_studentnum,
    output_schoolyear,
    output_semester,
    output_periods,
    output_course,
    output_section,
    DC_1,
    DC_2,
    DC_3,
    DC_4,
    DC_5,
    DC_6,
    DC_7,
    DC_8,
    DC_9,
    DC_10,
    DC_11,
    G_1,
    G_2,
    G_3,
    G_4,
    G_5,
    G_6,
    G_7,
    G_8,
    G_9,
    G_10,
    G_11
)values(
    '$reference_id',
    '$output_name',
   '$output_studentnum',
    '$output_schoolyear',
    '$output_semester',
    '$output_periods',
    '$output_course',
    '$output_section',
    '$DC_1',
    '$DC_2',
    '$DC_3',
    '$DC_4',
    '$DC_5',
    '$DC_6',
    '$DC_7',
    '$DC_8',
    '$DC_9',
    '$DC_10',
    '$DC_11',
    '$G_1',
    '$G_2',
    '$G_3',
    '$G_4',
    '$G_5',
    '$G_6',
    '$G_7',
    '$G_8',
    '$G_9',
    '$G_10',
    '$G_11'
    )
     ";


$result=mysqli_query($con,$sql);
if($result){

   header ('location:applications_display.php');
   echo "Updated Successfully";
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
    <link rel="stylesheet" href="../CSS files/form4.css">
  </head>
  <body>
  <a href="application" class="text-light"><button class="btn btn-primary my-5">Go Back</button></a>
  <center>
    <div class="content">
  <div class="container">
    <table>
      <form method="post">
        <div class="table">
            <div class="title">
           CERTIFICATE OF GRADES
          </div>
        <div class="paragraph"> 
         <P>
            THIS IS TO CERTIFY THAT <?php echo $input_name?> HAS OBTAINED <BR>
            THE FOLLOWING GRADES FOR THE <?php echo $input_semester ?> <?php echo $input_periods?> PERIOD 
            FOR THE SCHOOL YEAR <?php echo $input_schoolyear ?> 
</P>
</div>
            <th colspan="6">
              <div class="title">
              SUBJECT DESCRIPTION
              </div>
            </th>
            <th>
              <div class="title">
              GRADES
              </div>
            </th>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
              <?php echo $iDC_1 ?>
            </div>
              </td> 
              <TD>
                <div class="input-box">
                    <input type="text" name="G_1" id="G_1" >
</div> 
          </tr>
          <tr>
            <td colspan="6">
            <div class="input-box">
              <?PHP echo $iDC_2 ?>
            </div>
            </td>
            <td>
            <div class="input-box">
              <input type="text" name="G_2" id="G_2" >
            </div>
            </td>
          </tr>
          <tr>
          <td colspan="6">
            <div class="input-box">
              <?PHP echo $iDC_3 ?>
            </div>
            </td>
            <td>
            <div class="input-box">
              <input type="text" name="G_3" id="G_3" >
            </div>
            </td>
          </tr>
          <tr>
          <td colspan="6">
            <div class="input-box">
              <?PHP echo $iDC_4 ?>
            </div>
            </td>
            <td>
            <div class="input-box">
              <input type="text" name="G_4" id="G_4" >
            </div>
            </td>
            </td>
          </tr>
          <tr>
          <td colspan="6">
            <div class="input-box">
              <?PHP echo $iDC_5 ?>
            </div>
            </td>
            <td>
            <div class="input-box">
              <input type="text" name="G_5" id="G_5" > 
            </div>
            </td>
          </tr>
          <tr>
          <td colspan="6">
            <div class="input-box">
              <?PHP echo $iDC_6 ?>
            </div>
            </td>
            <td>
            <div class="input-box">
              <input type="text" name="G_6" id="G_6" >
            </div>
            </td>
          </tr>
          <tr>
          <td colspan="6">
            <div class="input-box">
              <?PHP echo $iDC_7 ?>
            </div>
            </td>
            <td>
            <div class="input-box">
              <input type="text" name="G_7" id="G_7" >
            </div>
            </td>
          </tr>
         
          <tr>
          <td colspan="6">
            <div class="input-box">
              <?PHP echo $iDC_8 ?>
            </div>
            </td>
            <td>
            <div class="input-box">
              <input type="text" name="G_8" id="G_8">
            </div>
            </td>
          </tr>
          <tr>
          <td colspan="6">
            <div class="input-box">
              <?PHP echo $iDC_9 ?>
            </div>
            </td>
            <td>
            <div class="input-box">
              <input type="text" name="G_9" id="G_9" >
            </div>
            </td>
          </tr>
          <tr>
          <td colspan="6">
            <div class="input-box">
              <?PHP echo $iDC_10 ?>
            </div>
            </td>
            <td>
            <div class="input-box">
              <input type="text" name="G_10" id="G_10">
            </div>
            </td>
          </tr>
          <tr>
          <td colspan="6">
            <div class="input-box">
              <?PHP echo $iDC_11 ?>
            </div>
            </td>
            <td>
            <div class="input-box">
              <input type="text" name="G_11" id="G_11">
            </div>
            </td>
          </tr>
        </div>

  <tr>
  <td colspan="6">
    <center>
<div class="button-container">
  <button class="btn-done" name="submit" type="submit">SUBMIT COG</button>
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