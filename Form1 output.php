<?php


session_start();

include 'Functions/DBconnect.php';
include 'Functions/function.php';

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESSUDYANTE</title>

    <link rel="stylesheet" href="CSS files/Form1 output.css">
    <link rel="stylesheet" href="CSS Icons/all.css">
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script src="script/PDF.js"></script>


<header>
  <div class="menu-bar">
    <left><img src="images/ESSU Logo & text.png" style="height: 80px;"></left>
     <ul>
       <li><h1 style="color: white;font-family:Arial, Helvetica, sans-serif; letter-spacing: 1px; ">COLLEGE OF ENGINEERING PORTAL</h1></li>
       <li><a href ="MainPage.php">PROCEED<i class="fa-solid fa-right-from-bracket"></i></a></li>
       
     </ul>
   </div>
</header>


<body>
  <center>
<div id="content">
  <div class="container">
  <table class="table-1">
    <form id="form">
    <thead>
      <!--1st row-->
      <tr><!--table head-->
        <th class="head" colspan="2">PRELIMINARY REGISTRATION FORM</th>

        <!--STUDENT NUMBER--><!--id(Studentnum)-->
        <th> 
          <label for="Studentnum">STUDENT NUMBER:</label>
          <div class="text-box">
          <span id="Studentnum"></span>  
          </div>
        </th>

        <!--SEMESTER--><!--id(semester)-->
        <th colspan="2"> 
          <label for="sem">SEMESTER:</label>
          <div class="text-box">
            <span id="semester"></span>
          </div>
        </th>

        <!--SCHOOL YEAR--><!--id(SchoolYR)-->
        <th> 
          <label for="SchoolYR">SCHOOLYEAR:</label>
          <div class="text-box">
          <span id="SchoolYR"></span>
          </div> 
        </th>
      </tr>
    </thead>

    <tbody>
      <!--2nd Row--><!--id(name,email,Gender,contact)-->
      <tr>
        <td colspan="2">
            <Label for="name">NAME:</Label>
            <div class="text-box">
            <span id="name"></span>
          </div>
         </td>
        <td colspan="2">
          <div class="text-box">
            <label for="email">EMAIL ADDRESS:</label>
            <span id="email"></span>
        </div>
          </td>
        <td>
            <label for="Gender">GENDER:</label>
            <div class="text-box">
              <span id="Gender"></span>
            </div>
        </td>
        <td>
          <label for="contact">CONTACT NUMBER:</label>
          <div class="text-box">
          <span id="contact"></span>
        </div>
        </td>
      </tr> 

      <!--3rd Row--><!--id(course,year,section,scholar)-->
      <tr>
        <td>
          <label for="course">COURSE:</label>
          <div class="text-box">
          <span id="course"></span>
          </div>
        </td>
        <td>
          <label for="year">YEAR:</label>
          <div class="text-box">
          <span id="year"></span>
          </div>
        </td>
        <td>
          <label for="section">SECTION:</label>
          <div class="text-box">
          <span id="section"></span>
          </div>
        </td>
        <td colspan="2">
          <label for="scholar">SCHOLARSHIP:</label>
          <div class="text-box">
          <span id="scholar"></span>
          </div>
        </td>
        <td >
          <label for="nstp">NSTP:</label>
          <div class="text-box">
            <span id="nstp"></span>
          </div>
        </td>
      </tr>

      <!--4th row--><!--id(status)-->
      <tr>
        <td colspan="6">
          <label for="status">STATUS:</label>
          <div class="text-box">
            <span id="status"></span>
          </div>
        </td>
      </tr>
    </tbody>
 
  </div>

  <!--5th row-->
      <div class="container-2">
      <tbody>
        <!--Table Header-->
        <tr class="tr2">
        <th >CODE</th>
        <th >COURSE NO.</th>
        <th colspan="3">SUBJECT DESCRIPTION:</th>
        <th >UNITS</th>
      </tr>
      <!--1st input--><!--id(code_1,course_1,SD_1,unit_1)-->
      <tr class="tr2">
        <td>
          <div class="text-box">
        <span id="code_1"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="course_1"></span>
         </div>
      </td>
       <td colspan="3">
        <div class="text-box">
          <span id="SD_1"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="unit_1"></span>
        </div>
      </td>
      </tr>

      <!--2nd input--><!--id(code_2,course_2,SD_2,unit_2)-->
      <tr class="tr2">
        <td>
          <div class="text-box">
            <span id="code_2"></span>
          </div>
      </td>
      <td>
        <div class="text-box">
          <span id="course_2"></span>
         </div>
      </td>
       <td colspan="3">
        <div class="text-box">
          <span id="SD_2"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
        <span id="unit_2"></span>
        </div>
      </td>
      </tr>

      <!--3rd input--><!--id(code_3,course_3,SD_3,unit_3)-->
      <tr class="tr2">
        <td>
          <div class="text-box">
            <span id="code_3"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="course_3"></span>
         </div>
      </td>
       <td colspan="3">
        <div class="text-box">
          <span id="SD_3"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="unit_3"></span>
        </div>
      </td>
      </tr>

      <!--4th input--><!--id(code_4,course_4,SD_4,unit_4)-->
      <tr class="tr2">
        <td>
          <div class="text-box">
            <span id="code_4"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="course_4"></span>
         </div>
      </td>
       <td colspan="3">
        <div class="text-box">
          <span id="SD_4"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="unit_4"></span>
        </div>
      </td>
      </tr>

      <!--5th input--><!--id(code_5,course_5,SD_5,unit_5)-->
      <tr class="tr2">
        <td>
          <div class="text-box">
            <span id="code_5"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="course_5"></span>
         </div>
      </td>
       <td colspan="3">
        <div class="text-box">
          <span id="SD_5"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="unit_5"></span>
        </div>
      </td>
      </tr>

      <!--6th input--><!--id(code_6,course_6,SD_6,unit_6)-->
      <tr class="tr2">
        <td>
          <div class="text-box">
            <span id="code_6"></span>
</div>
      </td>
      <td>
        <div class="text-box">
          <span id="course_6"></span>
      </div>
        </td>
       <td colspan="3">
        <div class="text-box">
          <span id="SD_6"></span>
      </div>
        </td>
      <td>
        <div class="text-box">
          <span id="unit_6"></span>
        </div>
      </td>
      </tr>

      <!--7th input--><!--id(code_7,course_7,SD_7,unit_7)-->
      <tr class="tr2">
        <td>
          <div class="text-box">
            <span id="code_7"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="course_7"></span>
         </div>
      </td>
       <td colspan="3">
        <div class="text-box">
          <span id="SD_7"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="unit_7"></span>
        </div>
      </td>
    </tr>

      <!--8th input--><!--id(code_8,course_8,SD_8,unit_8)-->
      <tr class="tr2">
        <td>
          <div class="text-box">
            <span id="code_8"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="course_8"></span>
         </div>
      </td>
       <td colspan="3">
        <div class="text-box">
          <span id="SD_8"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="unit_8"></span>
        </div>
      </td>
      </tr>

      <!--9th input--><!--id(code_9,course_9,SD_9,unit_9)-->
      <tr class="tr2">
        <td>
          <div class="text-box">
            <span id="code_9"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="course_9"></span>
         </div>
      </td>
       <td colspan="3">
        <div class="text-box">
          <span id="SD_9"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="unit_9"></span>
        </div>
      </td>
      </tr>

      <!--10th input--><!--id(code_10,course_10,SD_10,unit_10)-->
      <tr class="tr2">
        <td>
          <div class="text-box">
            <span id="code_10"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="course_10"></span>
         </div>
      </td>
       <td colspan="3">
        <div class="text-box">
          <span id="SD_10"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="unit_10"></span>
        </div>
      </td>
      </tr>

      <!--11th input--><!--id(code_11,course_11,SD_11,unit_11)-->
      <tr class="tr2">
        <td>
          <div class="text-box">
            <span id="code_11"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="course_11"></span>
         </div>
      </td>
       <td colspan="3">
        <div class="text-box">
          <span id="SD_11"></span>
        </div>
      </td>
      <td>
        <div class="text-box">
          <span id="unit_11"></span>
        </div>
      </td>
      </tr>


      <!--total units--><!--id(tot_units)-->
      <!--last row-->
      <tr class="tr2">
        <td colspan="5"></td>
        <td>
          <label for="tot_units">TOTAL UNITS:</label>
          <div class="text-box">
            <span id="tot_units"></span>
          </div>
        </td>
      </tr>
    </tbody>
 </div>
</form>

</table>
</div>



</center>

</body>

<center>
  <div class="button-container">
<button class="btn-done" onclick="generatePDF()">
    DOWNLOAD FILE
  </button></div>
</center>
<script>



var tot_units = parseFloat(sessionStorage.getItem('tot_units'));

        // Check if the result is valid
        if (!isNaN(tot_units)) {
            // Display the result
            document.getElementById("tot_units").innerText = tot_units;}


  //personal info
const form = sessionStorage.getItem('form');
const Studentnum = sessionStorage.getItem('Studentnum');
//const semester = sessionStorage.getItem('semester');
const SchoolYR = sessionStorage.getItem('SchoolYR');
const name = sessionStorage.getItem('name');
const email = sessionStorage.getItem('email');
//const Gender = sessionStorage.getItem('Gender');
const contact = sessionStorage.getItem('contact');
const course = sessionStorage.getItem('course');
const year = sessionStorage.getItem('year');
const section = sessionStorage.getItem('section');
const scholar = sessionStorage.getItem('scholar');
//const nstp = sessionStorage.getItem('nstp');
//const status = sessionStorage.getItem('status');
//const tot_units = sessionStorage.getItem('tot_units');

//1st input
const code_1 = sessionStorage.getItem('code_1');
const course_1 = sessionStorage.getItem('course_1');
const SD_1 = sessionStorage.getItem('SD_1');
const unit_1 = sessionStorage.getItem('unit_1');
//2nd input
const code_2 = sessionStorage.getItem('code_2');
const course_2 = sessionStorage.getItem('course_2');
const SD_2 = sessionStorage.getItem('SD_2');
const unit_2 = sessionStorage.getItem('unit_2');
//3rd input
const code_3 = sessionStorage.getItem('code_3');
const course_3 = sessionStorage.getItem('course_3');
const SD_3 = sessionStorage.getItem('SD_3');
const unit_3 = sessionStorage.getItem('unit_3');
//4th input
const code_4 = sessionStorage.getItem('code_4');
const course_4 = sessionStorage.getItem('course_4');
const SD_4 = sessionStorage.getItem('SD_4');
const unit_4 = sessionStorage.getItem('unit_4');
//5th input
const code_5 = sessionStorage.getItem('code_5');
const course_5 = sessionStorage.getItem('course_5');
const SD_5 = sessionStorage.getItem('SD_5');
const unit_5 = sessionStorage.getItem('unit_5');
//6th input
const code_6 = sessionStorage.getItem('code_6');
const course_6 = sessionStorage.getItem('course_6');
const SD_6 = sessionStorage.getItem('SD_6');
const unit_6 = sessionStorage.getItem('unit_6');
//7th input
const code_7 = sessionStorage.getItem('code_7');
const course_7 = sessionStorage.getItem('course_7');
const SD_7 = sessionStorage.getItem('SD_7');
const unit_7 = sessionStorage.getItem('unit_7');
//8th input
const code_8 = sessionStorage.getItem('code_8');
const course_8 = sessionStorage.getItem('course_8');
const SD_8 = sessionStorage.getItem('SD_8');
const unit_8 = sessionStorage.getItem('unit_8');
//9th input
const code_9 = sessionStorage.getItem('code_9');
const course_9 = sessionStorage.getItem('course_9');
const SD_9 = sessionStorage.getItem('SD_9');
const unit_9 = sessionStorage.getItem('unit_9');
//10th input
const code_10 = sessionStorage.getItem('code_10');
const course_10 = sessionStorage.getItem('course_10');
const SD_10 = sessionStorage.getItem('SD_10');
const unit_10 = sessionStorage.getItem('unit_10');
//11th input
const code_11 = sessionStorage.getItem('code_11');
const course_11 = sessionStorage.getItem('course_11');
const SD_11= sessionStorage.getItem('SD_11');
const unit_11 = sessionStorage.getItem('unit_11');

//getting the values
const semValue = sessionStorage.getItem('semValue');
const statusValue = sessionStorage.getItem('statusValue');
const GenderValue = sessionStorage.getItem('GenderValue');
const nstpValue = sessionStorage.getItem('nstpValue');

        document.getElementById('semester').textContent = semValue ? semValue : 'None';
        document.getElementById('Gender').textContent = statusValue ? statusValue : 'None';
        document.getElementById('status').textContent = GenderValue ? GenderValue : 'None';
        document.getElementById('nstp').textContent = nstpValue ? nstpValue : 'None';

//personal info
document.getElementById('Studentnum').textContent = Studentnum;
//document.getElementById('semester').textContent = semester;  
document.getElementById('SchoolYR').textContent = SchoolYR;
document.getElementById('name').textContent = name;
document.getElementById('email').textContent = email;
//document.getElementById('Gender').textContent = Gender;
document.getElementById('contact').textContent = contact;
document.getElementById('course').textContent = course;
document.getElementById('year').textContent = year;
document.getElementById('section').textContent = section;
document.getElementById('scholar').textContent = scholar;
//document.getElementById('nstp').textContent = nstp;
//document.getElementById('status').textContent = status;
//document.getElementById('tot_units').textContent = tot_units;

//1st input
document.getElementById('code_1').textContent = code_1;
document.getElementById('course_1').textContent = course_2;
document.getElementById('SD_1').textContent = SD_1;
document.getElementById('unit_1').textContent = unit_1;
//2nd input
document.getElementById('code_2').textContent = code_2;
document.getElementById('course_2').textContent = course_2;
document.getElementById('SD_2').textContent = SD_2;
document.getElementById('unit_2').textContent = unit_2;
//3rd input
document.getElementById('code_3').textContent = code_3;
document.getElementById('course_3').textContent = course_3;
document.getElementById('SD_3').textContent = SD_3;
document.getElementById('unit_3').textContent = unit_3;
//4th input
document.getElementById('code_4').textContent = code_4;
document.getElementById('course_4').textContent = course_4;
document.getElementById('SD_4').textContent = SD_4;
document.getElementById('unit_4').textContent = unit_4;
//5th input
document.getElementById('code_5').textContent = code_5;
document.getElementById('course_5').textContent = course_5;
document.getElementById('SD_5').textContent = SD_5;
document.getElementById('unit_5').textContent = unit_5;
//6th input
document.getElementById('code_6').textContent = code_6;
document.getElementById('course_6').textContent = course_6;
document.getElementById('SD_6').textContent = SD_6;
document.getElementById('unit_6').textContent = unit_6;
//7th input
document.getElementById('code_7').textContent = code_7;
document.getElementById('course_7').textContent = course_7;
document.getElementById('SD_7').textContent = SD_7;
document.getElementById('unit_7').textContent = unit_7;
//8th input
document.getElementById('code_8').textContent = code_8;
document.getElementById('course_8').textContent = course_8;
document.getElementById('SD_8').textContent = SD_8;
document.getElementById('unit_8').textContent = unit_8;
//9th input
document.getElementById('code_9').textContent = code_9;
document.getElementById('course_9').textContent = course_9;
document.getElementById('SD_9').textContent = SD_9;
document.getElementById('unit_9').textContent = unit_9;
//10th input
document.getElementById('code_10').textContent = code_10;
document.getElementById('course_10').textContent = course_10;
document.getElementById('SD_10').textContent = SD_10;
document.getElementById('unit_10').textContent = unit_10;
//11th input
document.getElementById('code_11').textContent = code_11;
document.getElementById('course_11').textContent = course_11;
document.getElementById('SD_11').textContent = SD_11;
document.getElementById('unit_11').textContent = unit_11;



 

    


        // Display the value on the second page
     /*   document.getElementById('semester').textContent = ` ${semValue}`;
        document.getElementById('Gender').textContent = ` ${GenderValue}`;
        document.getElementById('nstp').textContent = ` ${nstpValue}`;
        document.getElementById('status').textContent = ` ${statusValue}`;*/
</script>

</html>