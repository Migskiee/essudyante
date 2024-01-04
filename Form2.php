<?php


session_start();

include 'Functions/DBconnect.php';
include 'Functions/function.php';

$user_data = check_login($con);

?>


<!DOCTYPE html>
<html> 
<title>ESSUDYANTE</title>

    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS Icons/all.css">
    <link rel="icon" href="images/ESSU logo.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS files/Form2.css">

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
        <div class="container">
            <table>
                <form id="form">
                <div class="table">
                    <tr>
                <th colspan="4" class="head">Adding And Changing Form</th>
                    </tr>
                    <!--NAME {id=Name}-->
                    <tr>
                        <td colspan="3">
                            <label for="Name">Name: </label>
                            <div class="input-box">
                                <input type="text" id="Name" placeholder="SURNAME/FIRST NAME/MIDDLE NAME" required> 
                        </div>
                        </td>
                        <td colspan="2">
                            <label for="semester">
                                Semester:
                            </label>
                            <input type="radio" name="semester" id="sem1" value="1st semester" required><label for="sem1">1st semester</label>
                            <input type="radio" name="semester" id="sem2" value="2nd semester" required><label for="sem2">2nd semester</label>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <label for="SchoolYr">
                                School Year:
                            </label>
                            <div class="input-box">
                                <input type="text" id="SchoolYr" placeholder="20XX-20XX" required>
                            </div>
                        </td>
                        <td>
                        <label for="StudentNum">
                          Student Num:
                        </label>
                        <div class="input-box">
                            <input type="text" id="StudentNum" placeholder="XX-XXXXX" required>
                        </div>
                    </td>
                    <td colspan="2">
                        <label for="course">
                        Course:
                    </label>
                    <div class="input-box">
                        <input type="text" id="course" required>
                    </div>
                    </td>
                    <td>
                        <label for="Year">
                            Year:
                        </label>
                        <div class="input-box">
                            <input type="text" id="Year" required>
                        </div>
                    </td>
                    </tr>
                    <tr>
                        <th colspan="4">SUBJECT/S CANCELLED</th>
                        <th>UNIT/S</th>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="input-box">
                            <input type="text" id="SC_1">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="number" id="Unit_1">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="input-box">
                            <input type="text" id="SC_2">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="number" id="Unit_2">
                        </div>
                        </td>
                    
                    </tr>
                    <tr>
                        <div class="input-box">
                        <td colspan="4">
                            <div class="input-box">
                            <input type="text" id="SC_3">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="number" id="Unit_3"> 
                        </div>
                        </td>
                   
                    </tr>
                    <tr>
                        
                        <td colspan="4">
                            <div class="input-box">
                            <input type="text" id="SC_4">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="number" id="Unit_4"> 
                        </div>
                        </td>
                   
                    </tr>


            

                    <!--Subject Authorize-->
                    <tr>
                        <th colspan="4">SUBJECT/S AUTHORIZED</th>
                        <th>UNIT/S</th>
                    </tr>
                    <tr>             
                        <td colspan="4">
                            <div class="input-box">
                            <input type="text" id="SA_1">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="number" id="UnitA_1">
                            </div>
                        </td>              
                    </tr>
                    <tr>
            
                        <td colspan="4">
                            <div class="input-box">
                            <input type="text" id="SA_2">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="number" id="UnitA_2">
                            </div>
                        </td>
          
                    </tr>
                    <tr>
               
                        <td colspan="4">
                            <div class="input-box">
                            <input type="text" id="SA_3">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="number" id="UnitA_3">
                            </div>
                        </td>
          
                    </tr>
                    <tr>
                  
                        <td colspan="4">
                            <div class="input-box">
                            <input type="text" id="SA_4">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="number" id="UnitA_4">
                            </div>
                        </td>
        
                    </tr>
                    <tr>
                        <td colspan="6">
                <div class="button-container">
                 <button class="btn-done" type="submit">SUBMIT</button>
                </div>
                        </td>
                      </tr>
    
                    

                </div>
            </form>
            </table>
        </div>
    </center>

    <script>

      
//personal info
const form = document.getElementById('form');
const Name = document.getElementById('Name');
//const semester = document.getElementsByName('semester');
const SchoolYr = document.getElementById('SchoolYr');
const StudentNum = document.getElementById('StudentNum');
const course = document.getElementById('course');
const Year = document.getElementById('Year');

//input subject cancelled
const SC_1 = document.getElementById('SC_1');
const Unit_1 = document.getElementById('Unit_1');
const SC_2 = document.getElementById('SC_2');
const Unit_2 = document.getElementById('Unit_2');
const SC_3 = document.getElementById('SC_3');
const Unit_3 = document.getElementById('Unit_3');
const SC_4 = document.getElementById('SC_4');
const Unit_4 = document.getElementById('Unit_4');

//input subject authorized 
const SA_1 = document.getElementById('SA_1');
const UnitA_1 = document.getElementById('UnitA_1');
const SA_2 = document.getElementById('SA_2');
const UnitA_2 = document.getElementById('UnitA_2');
const SA_3 = document.getElementById('SA_1');
const UnitA_3 = document.getElementById('UnitA_3');
const SA_4 = document.getElementById('SA_1');
const UnitA_4 = document.getElementById('UnitA_4');

//function
form.addEventListener('submit', function(e){
    e.preventDefault();

    //personal info
const NameValue = Name.value;
//const semesterValue = semester.value;
//const semester2Value = semester2.value;
const SchoolYrValue = SchoolYr.value;
const StudentNumValue = StudentNum.value;
const courseValue = course.value;
const YearValue = Year.value;
        
//SUBJECT CANCELLED
const SC_1Value = SC_1.value;
const SC_2Value = SC_2.value;
const SC_3Value = SC_3.value;
const SC_4Value = SC_4.value;
//SUBJECT AUTHORIZED
const SA_1Value = SA_1.value;
const SA_2Value = SA_2.value;
const SA_3Value = SA_3.value;
const SA_4Value = SA_4.value;
//SUBJECT CANCELLED
const Unit_1Value = Unit_1.value;
const Unit_2Value = Unit_2.value;
const Unit_3Value = Unit_3.value;
const Unit_4Value = Unit_4.value;
//SUBJECT AUTHORIZED
const UnitA_1Value = UnitA_1.value;
const UnitA_2Value = UnitA_2.value;
const UnitA_3Value = UnitA_3.value;
const UnitA_4Value = UnitA_4.value;


//personal info
sessionStorage.setItem('Name',NameValue);
//sessionStorage.setItem('semester',semesterValue);
//sessionStorage.setItem('semester2',semester2Value);
sessionStorage.setItem('SchoolYr',SchoolYrValue);
sessionStorage.setItem('StudentNum',StudentNumValue);
sessionStorage.setItem('course',courseValue);
sessionStorage.setItem('Year',YearValue);

//subject cancelled
sessionStorage.setItem('SC_1',SC_1Value);
sessionStorage.setItem('SC_2',SC_2Value);
sessionStorage.setItem('SC_3',SC_3Value);
sessionStorage.setItem('SC_4',SC_4Value);
sessionStorage.setItem('Unit_1',Unit_1Value);
sessionStorage.setItem('Unit_2',Unit_2Value);
sessionStorage.setItem('Unit_3',Unit_3Value);
sessionStorage.setItem('Unit_4',Unit_4Value);
//subject authorized
sessionStorage.setItem('SA_1',SA_1Value);
sessionStorage.setItem('SA_2',SA_2Value);
sessionStorage.setItem('SA_3',SA_3Value);
sessionStorage.setItem('SA_4',SA_4Value);
sessionStorage.setItem('UnitA_1',UnitA_1Value);
sessionStorage.setItem('UnitA_2',UnitA_2Value);
sessionStorage.setItem('UnitA_3',UnitA_3Value);
sessionStorage.setItem('UnitA_4',UnitA_4Value);



const semesterValue = document.querySelector('input[name="semester"]:checked').value;


            sessionStorage.setItem('semesterValue', semesterValue);
            


 location.href = "Form2 output.php";


})

        </script>

    </body>
</html>