<?php


session_start();

include 'Functions/DBconnect.php';
include 'Functions/function.php';

$user_data = check_login($con);
$reference_id = $_SESSION['user_id'];

?>


<!DOCTYPE html>
<html>
<title>ESSUDYANTE</title>

    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS Icons/all.css">
<link rel="icon" href="images/ESSU logo.png" type="image/x-icon">
<link rel="stylesheet" href="CSS files/Form4 output.css">
<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
<script src="script/PDF.js"></script>

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
    <div class="content" id="content">
      <center>
    <P class="p">
DOWNLOAD AND PRESENT THIS REFERENCE NUMBER 
<BR>
TO THE ADMIN AND PROCEED FOR PAYMENT 
</p>
     <span class="id">
       REFERENCE NUMBER: <?php echo $reference_id ?>
     </span>
     </div>
     <center>

     <center>
        <div class="button-container">
            <button class="btn-done" type="submit" name="submit" onclick="generatePDF2()">
                DOWNLOAD REFERENCE NUMBER
              </button></div>
            </center>
     </center>


</body>
<style>
  .content{
    background-color: white;
    border-radius: 10px;
    width:max-content;
    padding: 10px;
    margin: 20px;
    align-items:center;
    justify-content: center ;
  }
.p{
  font-size: 15px;
  font-family:sans-serif;
  font-weight: bold;
  color: black;
}
.id{
  outline: black ;
  border-width: 2px;
  border-radius: 2px;
  border-style:solid;
  padding: 5px;
}
  </style>


</html>