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
    <link rel="stylesheet" href="CSS files/Form2 output.css">
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
            <table>
                <form id="form">
                <div class="table">
                    <tr>
                <th colspan="4" class="head">Adding And Changing Form</th>
                    </tr>
                  
                    <tr><!--FIRST ROW-->
                          <!--NAME {id=Name}-->
                        <td colspan="2">
                            <label for="Name">Name: </label>
                            <div class="text-box">
                                <span id="Name"></span>
                        </div>
                        </td>

                        <!--SEMESTER {id=semester}-->
                        <td>
                            <label for="semester">
                                Semester:
                            </label>
                            <div class="text-box">
                                <span id="semester"></span>
                            </div>
                        </td>

                        <!--SCHOOL YEAR {id=SchoolYr}-->
                        <td>
                            <label for="SchoolYr">
                                School Year:
                            </label>
                            <div class="text-box">
                                <span id="SchoolYr"></span>                
                            </div>
                        </td>
                    </tr>


                    <tr><!--SECOND ROW-->

                        <td> <!--STUDENT NUMBER {id=StudentNum}-->
                        <label for="StudentNum">
                          Student Num:
                        </label>
                        <div class="text-box">
                            <span id="StudentNum"></span>
                        </div>
                    </td>
      
                    <td colspan="2"><!--COURSE {id=course}-->
                        <label for="course">
                        Course:
                    </label>
                    <div class="text-box">
                        <span id="course"></span>
                    </div>
                    </td>

                    <td><!--YEAR LEVEL {id=Year}-->
                        <label for="Year">
                            Year:
                        </label>
                        <div class="text-box">
                            <span id="Year"></span>
                        </div>
                    </td>
                    </tr>


                    <tr><!--THIRD ROW-->
                        <!--HEADERS-->
                        <th colspan="3">SUBJECT/S CANCELLED</th>
                        <th>UNIT/S</th>
                    </tr>

                    <tr><!--SUBJECT CANCELLED INPUT 1st row-->
                        <td colspan="3"><!--SC_1-->
                            <div class="text-box">
                                <span id="SC_1"></span>
                            </div>
                        </td>
                        <td><!--Unit_1-->
                            <div class="text-box">
                                <span id="Unit_1"></span>
                            </div>
                        </td>
                    </tr>

                    <tr><!--SUBJECT CANCELLED INPUT 2nd row-->
                        <td colspan="3"><!--SC_2-->
                            <div class="text-box">
                                <span id="SC_2"></span>
                            </div>
                        </td>
                        <td><!--Unit_2-->
                            <div class="text-box">
                                <span id="Unit_2"></span>
                        </div>
                        </td>
                    
                    </tr>

                    <tr><!--SUBJECT CANCELLED INPUT 3rd row-->
                        <div class="text-box">
                        <td colspan="3"><!--SC_3-->
                            <div class="text-box">
                                <span id="SC_3"></span>
                            </div>
                        </td>
                        <td><!--Unit_3-->
                            <div class="text-box">
                                <span id="Unit_3"></span>
                        </div>
                        </td>
                   
                    </tr>


                    <tr><!--SUBJECT CANCELLED INPUT 4th row-->
                        
                        <td colspan="3"><!--SC_4-->
                            <div class="text-box">
                        <span id="SC_4"></span>
                            </div>
                        </td>
                        <td><!--Unit_4-->
                            <div class="text-box">
                   <span id="Unit_4"></span>
                        </div>
                        </td>
                   
                    </tr>


                    
                    <!--4th ROW-->
                    <tr><!--SUBJECT AUTHORIZED-->
                        <!--HEADERS-->
                        <th colspan="3">SUBJECT/S AUTHORIZED</th>
                        <th>UNIT/S</th>
                    </tr>

                    <tr> <!--SUBJECT AUTHORIZED INPUT 1ST ROW-->            
                        <td colspan="3"><!--SA_1-->
                            <div class="text-box">
                                <SPAN id="SA_1"></SPAN>
                            </div>
                        </td>
                        <td><!--UnitA_1-->
                            <div class="text-box">
                            <SPAN id="UnitA_1"></SPAN>
                            </div>
                        </td>              
                    </tr>

                    <tr><!--SUBJECT AUTHORIZED INPUT 2nd ROW-->  
                        <td colspan="3"><!--SA_2-->
                            <div class="text-box">
                            <span id="SA_2"></span>
                            </div>
                        </td>
                        <td><!--UnitA_2-->
                            <div class="text-box">
                           <span id="UnitA_2"></span>
                            </div>
                        </td>
          
                    </tr>

                    <tr><!--SUBJECT AUTHORIZED INPUT 3rd ROW-->
               
                        <td colspan="3"><!--SA_3-->
                            <div class="text-box">
                            <span id="SA_3"></span>
                            </div>
                        </td>
                        <td><!--UnitA_3-->
                            <div class="text-box">
                            <span id="UnitA_3"></span>
                            </div>
                        </td>
          
                    </tr>

                    <tr><!--SUBJECT AUTHORIZED INPUT 4th ROW-->
                  
                        <td colspan="3"><!--SA_4-->
                            <div class="text-box">
                                <span id="SA_4"></span>
                            </div>
                        </td>
                        <td><!--UnitA_4-->
                            <div class="text-box">
                           <span id="UnitA_4"></span>
                            </div>
                        </td>
        
                    </tr>
    
                    

                </div>
            </form>
            </table>
        </div>
    </div>
    </center>
    <center>
        <div class="button-container">
            <button class="btn-done" onclick="generatePDF()">
                DOWNLOAD FILE
              </button></div>
            </center>

    <script>

//personal info
const form = sessionStorage.getItem('form');
const Name = sessionStorage.getItem('Name');
//const semester = sessionStorage.getItem('semester');
//const semester2 = sessionStorage.getItem('semester2');
const SchoolYr = sessionStorage.getItem('SchoolYr');
const StudentNum = sessionStorage.getItem('StudentNum');
const course = sessionStorage.getItem('course');
const Year = sessionStorage.getItem('Year');

//input subject cancelled
const SC_1 = sessionStorage.getItem('SC_1');
const Unit_1 = sessionStorage.getItem('Unit_1');
const SC_2 = sessionStorage.getItem('SC_2');
const Unit_2 = sessionStorage.getItem('Unit_2');
const SC_3 = sessionStorage.getItem('SC_3');
const Unit_3 = sessionStorage.getItem('Unit_3');
const SC_4 = sessionStorage.getItem('SC_4');
const Unit_4 = sessionStorage.getItem('Unit_4');

//input subject authorized 
const SA_1 = sessionStorage.getItem('SA_1');
const UnitA_1 = sessionStorage.getItem('UnitA_1');
const SA_2 = sessionStorage.getItem('SA_2');
const UnitA_2 = sessionStorage.getItem('UnitA_2');
const SA_3 = sessionStorage.getItem('SA_1');
const UnitA_3 = sessionStorage.getItem('UnitA_3');
const SA_4 = sessionStorage.getItem('SA_1');
const UnitA_4 = sessionStorage.getItem('UnitA_4');


//personal info
document.getElementById('Name').textContent = Name;
//document.getElementsByName('semester').textContent = semester;
//document.getElementById('semester2').textContent = semester2;
document.getElementById('SchoolYr').textContent = SchoolYr;
document.getElementById('StudentNum').textContent = StudentNum;
document.getElementById('course').textContent = course;
document.getElementById('Year').textContent = Year;

//subject cancelled
document.getElementById('SC_1').textContent = SC_1;
document.getElementById('SC_2').textContent = SC_2;
document.getElementById('SC_3').textContent = SC_3;
document.getElementById('SC_4').textContent = SC_4;
document.getElementById('Unit_1').textContent = Unit_1;
document.getElementById('Unit_2').textContent = Unit_2;
document.getElementById('Unit_3').textContent = Unit_3;
document.getElementById('Unit_4').textContent = Unit_4;

//subject authorized
document.getElementById('SA_1').textContent = SA_1;
document.getElementById('SA_2').textContent = SA_2;
document.getElementById('SA_3').textContent = SA_3;
document.getElementById('SA_4').textContent = SA_4;
document.getElementById('UnitA_1').textContent = UnitA_1;
document.getElementById('UnitA_2').textContent = UnitA_2;
document.getElementById('UnitA_3').textContent = UnitA_3;
document.getElementById('UnitA_4').textContent = UnitA_4;

const semesterValue = sessionStorage.getItem('semesterValue');


        document.getElementById('semester').textContent = semesterValue ? semesterValue : 'None';
     



        </script>

    </body>
</html>