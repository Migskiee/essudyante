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
    <link rel="stylesheet" href="CSS files/Form1.css">
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
  <div id="content">
  <div class="container">
  <table class="table-1">
    <form  id="form">
    <thead>
      <!--1st row-->
      <tr><!--table head-->
        <th class="head" colspan="2">PRELIMINARY REGISTRATION FORM</th>

        <!--STUDENT NUMBER--><!--id(Studentnum)-->
        <th> 
          <label for="Studentnum">STUDENT NUMBER:</label>
          <div class="input-box">
          <input type="text" id="Studentnum" required>   
          </div>
        </th>

        <!--SEMESTER--><!--id(semester)-->
        <th colspan="2"> 
          <labeL>SEMESTER:</label>
            <label for="1st">
          <input type="radio" name="sem" id="1st" value="1st Semester" required>1ST
          </label>
          <label for="2nd">
          <input type="radio" name="sem" id="2nd" value="2nd Semester" required>2ND
           </label>
         
           <br>
       <label for="summer">
        <input type="radio" name="sem" id="summer" value="summer" required>SUMMER   
      </label>  
      </th>

        <!--SCHOOL YEAR--><!--id(SchoolYR)-->
        <th> 
          <label for="SchoolYR">SCHOOLYEAR:</label>
          <div class="input-box">
          <input type="text" id="SchoolYR" placeholder="(XXXX - XXXX)" required>  
          </div> 
        </th>
      </tr>
    </thead>

    <tbody>
      <!--2nd Row--><!--id(name,email,Gender,contact)-->
      <tr>
        <td colspan="2">
            <Label for="name">NAME:</Label>
            <div class="input-box">
            <input type="text" id="name" placeholder="SURNAME / FIRST NAME / MIDDLE NAME" required>
          </div>
         </td>
        <td colspan="2">
          <div class="input-box">
            <label for="email">EMAIL ADDRESS:</label>
            <input type="email" id="email" placeholder="EMAIL ADDRESS" required>
        </div>
          </td>
        <td>
            <label>GENDER:</label>
            <label for="Male">
            <input type="radio" id="Male" name="Gender" value="Male" required> Male
          </label>
          <br>
          <label for="Female">
            <input type="radio" id="Female" name="Gender" value="Female" required> Female
            </label>
        </td>
        <td>
          <label for="contact">CONTACT NUMBER:</label>
          <div class="input-box">
          <input type="text" id="contact" placeholder="09*********" required>
        </div>
        </td>
      </tr> 

      <!--3rd Row--><!--id(course,year,section,scholar,nstp)-->
      <tr>
        <td>
          <label for="course">COURSE:</label>
          <div class="input-box">
          <input type="text" id="course" required>
          </div>
        </td>
        <td>
          <label for="year">YEAR:</label>
          <div class="input-box">
          <input type="text" id="year" required>
          </div>
        </td>
        <td>
          <label for="section">SECTION:</label>
          <div class="input-box">
          <input type="text" id="section" required>
          </div>
        </td>
        <td colspan="2">
          <label for="scholar">SCHOLARSHIP:</label>
          <div class="input-box">
          <input type="text" id="scholar" required>
          </div>
        </td>
        <td >
          <label>NSTP:</label>
          <label for="YES">
          <input type="radio" name="nstp" id="YES" value="YES" required>YES
        </label>
        <label for="NO">
          <input type="radio" name="nstp" id="NO" value="NO" required>NO
        </label>
        </td>
      </tr>

      <!--4th row--><!--id(status)-->
      <tr>
        <td colspan="6">
          <label>STATUS:</label>

          
          <input type="radio" name="status" id="NEW" value="NEW" required><label for="NEW">NEW</label>
          <input type="radio" name="status" id="OLD" value="OLD" required><label for="OLD">OLD</label>
          <input type="radio" name="status" id="TRANSFEREE" value="TRANSFEREE" required><LABEL for="TRANSFEREE">TRANSFEREE</LABEL>
          <input type="radio" name="status" id="RETURNEE" value="RETURNEE" required><label for="RETURNEE">RETURNEE</label>
          <input type="radio" name="status" id="SHIFTER" value="SHIFTER" required><label for="SHIFTER">SHIFTER</label>
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
          <div class="input-box">
        <input type="text" id="code_1">
        </div>
      </td>
      <td>
        <div class="input-box">
         <input type="text" id="course_1">
         </div>
      </td>
       <td colspan="3">
        <div class="input-box">
        <input type="text" id="SD_1">
        </div>
      </td>
      <td>
        <div class="input-box">
        <input type="number" id="unit_1">
        </div>
      </td>
      </tr>

      <!--2nd input--><!--id(code_2,course_2,SD_2,unit_2)-->
      <tr class="tr2">
        <td>
          <div class="input-box">
        <input type="text" id="code_2">
          </div>
      </td>
      <td>
        <div class="input-box">
         <input type="text" id="course_2">
         </div>
      </td>
       <td colspan="3">
        <div class="input-box">
        <input type="text" id="SD_2">
        </div>
      </td>
      <td>
        <div class="input-box">
        <input type="number" id="unit_2">
        </div>
      </td>
      </tr>

      <!--3rd input--><!--id(code_3,course_3,SD_3,unit_3)-->
      <tr class="tr2">
        <td>
          <div class="input-box">
        <input type="text" id="code_3">
        </div>
      </td>
      <td>
        <div class="input-box">
         <input type="text" id="course_3">
         </div>
      </td>
       <td colspan="3">
        <div class="input-box">
        <input type="text" id="SD_3">
        </div>
      </td>
      <td>
        <div class="input-box">
        <input type="number" id="unit_3">
        </div>
      </td>
      </tr>

      <!--4th input--><!--id(code_4,course_4,SD_4,unit_4)-->
      <tr class="tr2">
        <td>
          <div class="input-box">
        <input type="text" id="code_4">
        </div>
      </td>
      <td>
        <div class="input-box">
         <input type="text" id="course_4">
         </div>
      </td>
       <td colspan="3">
        <div class="input-box">
        <input type="text" id="SD_4">
        </div>
      </td>
      <td>
        <div class="input-box">
        <input type="number" id="unit_4">
        </div>
      </td>
      </tr>

      <!--5th input--><!--id(code_5,course_5,SD_5,unit_5)-->
      <tr class="tr2">
        <td>
          <div class="input-box">
        <input type="text" id="code_5">
        </div>
      </td>
      <td>
        <div class="input-box">
         <input type="text" id="course_5">
         </div>
      </td>
       <td colspan="3">
        <div class="input-box">
        <input type="text" id="SD_5">
        </div>
      </td>
      <td>
        <div class="input-box">
        <input type="number" id="unit_5" >
        </div>
      </td>
      </tr>

      <!--6th input--><!--id(code_6,course_6,SD_6,unit_6)-->
      <tr class="tr2">
        <td>
          <div class="input-box">
        <input type="text" id="code_6">
</div>
      </td>
      <td>
        <div class="input-box">
         <input type="text" id="course_6">
      </div>
        </td>
       <td colspan="3">
        <div class="input-box">
          <input type="text" id="SD_6">
      </div>
        </td>
      <td>
        <div class="input-box">
        <input type="number" id="unit_6">
        </div>
      </td>
      </tr>

      <!--7th input--><!--id(code_7,course_7,SD_7,unit_7)-->
      <tr class="tr2">
        <td>
          <div class="input-box">
        <input type="text" id="code_7">
        </div>
      </td>
      <td>
        <div class="input-box">
         <input type="text" id="course_7">
         </div>
      </td>
       <td colspan="3">
        <div class="input-box">
        <input type="text" id="SD_7">
        </div>
      </td>
      <td>
        <div class="input-box">
        <input type="number" id="unit_7">
        </div>
      </td>
      </tr>

      <!--8th input--><!--id(code_8,course_8,SD_8,unit_8)-->
      <tr class="tr2">
        <td>
          <div class="input-box">
        <input type="text" id="code_8">
        </div>
      </td>
      <td>
        <div class="input-box">
         <input type="text" id="course_8">
         </div>
      </td>
       <td colspan="3">
        <div class="input-box">
        <input type="text" id="SD_8">
        </div>
      </td>
      <td>
        <div class="input-box">
        <input type="number" id="unit_8">
        </div>
      </td>
      </tr>

      <!--9th input--><!--id(code_9,course_9,SD_9,unit_9)-->
      <tr class="tr2">
        <td>
          <div class="input-box">
        <input type="text" id="code_9" >
        </div>
      </td>
      <td>
        <div class="input-box">
         <input type="text" id="course_9" >
         </div>
      </td>
       <td colspan="3">
        <div class="input-box">
        <input type="text" id="SD_9" >
        </div>
      </td>
      <td>
        <div class="input-box">
        <input type="number" id="unit_9" >
        </div>
      </td>
      </tr>

      <!--10th input--><!--id(code_10,course_10,SD_10,unit_10)-->
      <tr class="tr2">
        <td>
          <div class="input-box">
        <input type="text" id="code_10">
        </div>
      </td>
      <td>
        <div class="input-box">
         <input type="text" id="course_10">
         </div>
      </td>
       <td colspan="3">
        <div class="input-box">
        <input type="text" id="SD_10">
        </div>
      </td>
      <td>
        <div class="input-box">
        <input type="number" id="unit_10">
        </div>
      </td>
      </tr>

      <!--11th input--><!--id(code_11,course_11,SD_11,unit_11)-->
      <tr class="tr2">
        <td>
          <div class="input-box">
        <input type="text" id="code_11">
        </div>
      </td>
      <td>
        <div class="input-box">
         <input type="text" id="course_11">
         </div>
      </td>
       <td colspan="3">
        <div class="input-box">
        <input type="text" id="SD_11">
        </div>
      </td>
      <td>
        <div class="input-box">
        <input type="number" id="unit_11">
        </div>
      </td>
      </tr>


      <!--total units--><!--id(tot_units)-->
      <!--last row-->
      <tr class="tr2">
        <td colspan="5"></td>
        <td>
          <label for="tot_units" id="tot_units">TOTAL UNITS:</label>
        </td>
      </tr>
      <tr>
        <td colspan="6">
<div class="button-container">
 <button class="btn-done" type="submit">SUBMIT</button>
</div>
        </td>
      </tr>
    </tbody>
 </div>
 
</form>


</table>



<!--Script-->
<script>



//personal info
const form = document.getElementById('form');
const Studentnum = document.getElementById('Studentnum');
//const semester = document.getElementById('semester');
const SchoolYR = document.getElementById('SchoolYR');
const name = document.getElementById('name');
const email = document.getElementById('email');
//const Gender = document.getElementById('Gender');
const contact = document.getElementById('contact');
const course = document.getElementById('course');
const year = document.getElementById('year');
const section = document.getElementById('section');
const scholar = document.getElementById('scholar');
//const nstp = document.getElementById('nstp');
//const status = document.getElementById('status');
const tot_units = document.getElementById('tot_units');

//1st input
const code_1 = document.getElementById('code_1');
const course_1 = document.getElementById('course_1');
const SD_1 = document.getElementById('SD_1');
const unit_1 = document.getElementById('unit_1');
//2nd input
const code_2 = document.getElementById('code_2');
const course_2 = document.getElementById('course_2');
const SD_2 = document.getElementById('SD_2');
const unit_2 = document.getElementById('unit_2');
//3rd input
const code_3 = document.getElementById('code_3');
const course_3 = document.getElementById('course_3');
const SD_3 = document.getElementById('SD_3');
const unit_3 = document.getElementById('unit_3');
//4th input
const code_4 = document.getElementById('code_4');
const course_4 = document.getElementById('course_4');
const SD_4 = document.getElementById('SD_4');
const unit_4 = document.getElementById('unit_4');
//5th input
const code_5 = document.getElementById('code_5');
const course_5 = document.getElementById('course_5');
const SD_5 = document.getElementById('SD_5');
const unit_5 = document.getElementById('unit_5');
//6th input
const code_6 = document.getElementById('code_6');
const course_6 = document.getElementById('course_6');
const SD_6 = document.getElementById('SD_6');
const unit_6 = document.getElementById('unit_6');
//7th input
const code_7 = document.getElementById('code_7');
const course_7 = document.getElementById('course_7');
const SD_7 = document.getElementById('SD_7');
const unit_7 = document.getElementById('unit_7');
//8th input
const code_8 = document.getElementById('code_8');
const course_8 = document.getElementById('course_8');
const SD_8 = document.getElementById('SD_8');
const unit_8 = document.getElementById('unit_8');
//9th input
const code_9 = document.getElementById('code_9');
const course_9 = document.getElementById('course_9');
const SD_9 = document.getElementById('SD_9');
const unit_9 = document.getElementById('unit_9');
//10th input
const code_10 = document.getElementById('code_10');
const course_10 = document.getElementById('course_10');
const SD_10 = document.getElementById('SD_10');
const unit_10 = document.getElementById('unit_10');
//11th input
const code_11 = document.getElementById('code_11');
const course_11 = document.getElementById('course_11');
const SD_11= document.getElementById('SD_11');
const unit_11 = document.getElementById('unit_11');

//function
form.addEventListener('submit', function (e){
  e.preventDefault();

  
  var num1 = parseFloat(document.getElementById("unit_1").value);
  var num2 = parseFloat(document.getElementById("unit_2").value);
  var num3 = parseFloat(document.getElementById("unit_3").value);
  var num4 = parseFloat(document.getElementById("unit_4").value);
  var num5 = parseFloat(document.getElementById("unit_5").value);
  var num6 = parseFloat(document.getElementById("unit_6").value);
  var num7 = parseFloat(document.getElementById("unit_7").value);
  var num8 = parseFloat(document.getElementById("unit_8").value);
  var num9 = parseFloat(document.getElementById("unit_9").value);
  var num10 = parseFloat(document.getElementById("unit_10").value);
  var num11 = parseFloat(document.getElementById("unit_11").value);


            // Check if the input is valid
            if (!isNaN(num1) && !isNaN(num2) && !isNaN(num3) && !isNaN(num4) && !isNaN(num5)  && !isNaN(num6) 
            && !isNaN(num7) && !isNaN(num8) && !isNaN(num9) && !isNaN(num10) && !isNaN(num11) ) {
                // Calculate the result
                var tot_units = num1 + num2 + num3 + num4 + num5 + num6 + num7 + num8 + num9 + num10 + num11;

                // Store the result in localStorage
                sessionStorage.setItem("tot_units", tot_units)};

  const StudentnumValue = Studentnum.value;
 // const semesterValue = semester.value;
  const SchoolYRValue = SchoolYR.value;
  const nameValue = name.value;
  const emailValue = email.value;
  //const GenderValue = Gender.value;
  const contactValue = contact.value;
  const courseValue = course.value;
  const yearValue = year.value;
  const sectionValue = section.value;
  const scholarValue = scholar.value;
  //const nstpValue =  nstp.value;
  //const statusValue = status.value;
  //const tot_unitsValue = tot_units.value;

  //1st input
  const code_1Value = code_1.value;
  const course_1Value = course_1.value;
  const SD_1Value = SD_1.value;
  const unit_1Value = unit_1.value;
  //2nd input
  const code_2Value = code_2.value;
  const course_2Value = course_2.value;
  const SD_2Value = SD_2.value;
  const unit_2Value = unit_2.value;
  //3rd input
  const code_3Value = code_3.value;
  const course_3Value = course_3.value;
  const SD_3Value = SD_3.value;
  const unit_3Value = unit_3.value;
  //4th input
  const code_4Value = code_4.value;
  const course_4Value = course_4.value;
  const SD_4Value = SD_4.value;
  const unit_4Value = unit_4.value;
  //5th input
  const code_5Value = code_5.value;
  const course_5Value = course_5.value;
  const SD_5Value = SD_5.value;
  const unit_5Value = unit_5.value;
  //6th input
  const code_6Value = code_6.value;
  const course_6Value = course_6.value;
  const SD_6Value = SD_6.value;
  const unit_6Value = unit_6.value;
  //7th input
  const code_7Value = code_7.value;
  const course_7Value = course_7.value;
  const SD_7Value = SD_7.value;
  const unit_7Value = unit_7.value;
  //8th input
  const code_8Value = code_8.value;
  const course_8Value = course_8.value;
  const SD_8Value = SD_8.value;
  const unit_8Value = unit_8.value;
  //9th input
  const code_9Value = code_9.value;
  const course_9Value = course_9.value;
  const SD_9Value = SD_9.value;
  const unit_9Value = unit_9.value;
  //10th input
  const code_10Value = code_10.value;
  const course_10Value = course_10.value;
  const SD_10Value = SD_10.value;
  const unit_10Value = unit_10.value;
  //11th input
  const code_11Value = code_11.value;
  const course_11Value = course_11.value;
  const SD_11Value = SD_11.value;
  const unit_11Value = unit_11.value;

  /*sessionStorage.setItem('input[name="sem"]:checked').value;
  sessionStorage.setItem('input[name="status"]:checked').value;
  sessionStorage.setItem('input[name="Gender"]:checked').value;
  sessionStorage.setItem('input[name="nstp"]:checked').value;*/
  
  const semValue = document.querySelector('input[name="sem"]:checked').value;
  const statusValue = document.querySelector('input[name="status"]:checked').value;
  const GenderValue = document.querySelector('input[name="Gender"]:checked').value;
  const nstpValue = document.querySelector('input[name="nstp"]:checked').value;

            sessionStorage.setItem('semValue', semValue);
            sessionStorage.setItem('statusValue', statusValue);
            sessionStorage.setItem('GenderValue', GenderValue);
            sessionStorage.setItem('nstpValue', nstpValue);



  sessionStorage.setItem('Studentnum', StudentnumValue);
  //sessionStorage.setItem('semester', semesterValue);
  sessionStorage.setItem('SchoolYR', SchoolYRValue);
  sessionStorage.setItem('course',courseValue);
  sessionStorage.setItem('name', nameValue);
  sessionStorage.setItem('email',emailValue);
  //sessionStorage.setItem('Gender',GenderValue);
  sessionStorage.setItem('contact',contactValue);
  sessionStorage.setItem('year',yearValue);
  sessionStorage.setItem('section',sectionValue);
  sessionStorage.setItem('scholar',scholarValue);
  //sessionStorage.setItem('nstp',nstpValue);
 // sessionStorage.setItem('status',statusValue);
  //sessionStorage.setItem('tot_units',tot_unitsValue);
//1st input
  sessionStorage.setItem('code_1',code_1Value);
  sessionStorage.setItem('course_1',course_1Value);
  sessionStorage.setItem('SD_1',SD_1Value);
  sessionStorage.setItem('unit_1',unit_1Value);
//2nd input
  sessionStorage.setItem('code_2',code_2Value);
  sessionStorage.setItem('course_2',course_2Value);
  sessionStorage.setItem('SD_2',SD_2Value);
  sessionStorage.setItem('unit_2',unit_2Value);
//3rd input
  sessionStorage.setItem('code_3',code_3Value);
  sessionStorage.setItem('course_3',course_3Value);
  sessionStorage.setItem('SD_3',SD_3Value);
  sessionStorage.setItem('unit_3',unit_3Value);
//4th input
  sessionStorage.setItem('code_4',code_4Value);
  sessionStorage.setItem('course_4',course_4Value);
  sessionStorage.setItem('SD_4',SD_4Value);
  sessionStorage.setItem('unit_4',unit_4Value);
//5th input
  sessionStorage.setItem('code_5',code_5Value);
  sessionStorage.setItem('course_5',course_5Value);
  sessionStorage.setItem('SD_5',SD_5Value);
  sessionStorage.setItem('unit_5',unit_5Value);
//6th input
  sessionStorage.setItem('code_6',code_6Value);
  sessionStorage.setItem('course_6',course_6Value);
  sessionStorage.setItem('SD_6',SD_6Value);
  sessionStorage.setItem('unit_6',unit_6Value);
//7th input
  sessionStorage.setItem('code_7',code_7Value);
  sessionStorage.setItem('course_7',course_7Value);
  sessionStorage.setItem('SD_7',SD_7Value);
  sessionStorage.setItem('unit_7',unit_7Value);
//8th input
  sessionStorage.setItem('code_8',code_8Value);
  sessionStorage.setItem('course_8',course_8Value);
  sessionStorage.setItem('SD_8',SD_8Value);
  sessionStorage.setItem('unit_8',unit_8Value);
//9th input
  sessionStorage.setItem('code_9',code_9Value);
  sessionStorage.setItem('course_9',course_9Value);
  sessionStorage.setItem('SD_9',SD_9Value);
  sessionStorage.setItem('unit_9',unit_9Value);
//10th input
  sessionStorage.setItem('code_10',code_10Value);
  sessionStorage.setItem('course_10',course_10Value);
  sessionStorage.setItem('SD_10',SD_10Value);
  sessionStorage.setItem('unit_10',unit_10Value);
//11th input
  sessionStorage.setItem('code_11',code_11Value);
  sessionStorage.setItem('course_11',course_11Value);
  sessionStorage.setItem('SD_11',SD_11Value);
  sessionStorage.setItem('unit_11',unit_11Value);


  location.href = "Form1 output.php";

})


  </script>

</body>

</html>