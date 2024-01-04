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
    <link rel="stylesheet" href="CSS files/Form3 output.css">
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
                    <form class="form">
                    <div class="table">
                        <tr>
                    <th colspan="6" class="head">Dropping Form</th>
                        </tr>

                        <!--FIRST ROW-->
                        <tr>
                            <td colspan="3"><!--NameD-->
                                <label for="NameD">Name: </label>
                                <div class="text-box">
                                    <span id="NameD"></span>
                            </div>
                            </td>
                            <td>
                                <label for="semesterD"><!--semesterD-->
                                    Semester:
                                </label>
                                <span id="semesterD"></span>
                            </td>
                            <td><!--SchoolYrD-->
                                <label for="SchoolYrD">
                                    School Year:
                                </label>
                                <div class="text-box">
                                    <span id="SchoolYrD"></span>
                                </div>
                            </td>
                        </tr>

                        <!--SECOND ROW-->
                        <tr>
                            <td><!--StudentNumD-->
                            <label for="StudentNumD">
                              Student Num:
                            </label>
                            <div class="text-box">
                                <span id="StudentNumD"></span>
                            </div>
                        </td>
                        <td colspan="2"><!--courseD-->
                            <label for="courseD">
                            Course:
                        </label>
                        <div class="text-box">
                            <span id="courseD"></span>
                        </div>
                        </td>
                        <td><!--YearD-->
                            <label for="YearD">
                                Year:
                            </label>
                            <div class="text-box">
                                <span id="YearD"></span>
                            </div>
                        </td>
                        </tr>

                        <!--THIRD ROW-->
                        <tr>
                            <th colspan="4">SUBJECT/S CANCELLED</th>
                            <th>UNIT/S</th>
                        </tr>
                        <tr>
                            <td colspan="4"><!--SCD_1-->
                                <div class="text-box">
                                    <span id="SCD_1"></span>
                                </div>
                            </td>
                            <td>
                                <div class="text-box"><!--UnitD_1-->
                                    <span id="UnitD_1"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="text-box"><!--SCD_2-->
                                    <span id="SCD_2"></span>
                                </div>
                            </td>
                            <td>
                                <div class="text-box"><!--UnitD_2-->
                                    <span id="UnitD_2"></span>
                            </div>
                            </td>
                        
                        </tr>
                        <tr>
                            <div class="text-box">
                            <td colspan="4">
                                <div class="text-box"><!--SCD_3-->
                                    <span id="SCD_3"></span>
                                </div>
                            </td>
                            <td>
                                <div class="text-box"><!--UnitD_3-->
                                    <span id="UnitD_3"></span>
                            </div>
                            </td>
                       
                        </tr>
                        <tr>
                            
                            <td colspan="4">
                                <div class="text-box"><!--SCD_4-->
                                    <span id="SCD_4"></span>
                                </div>
                            </td>
                            <td>
                                <div class="text-box"><!--UnitD_4-->
                                    <span id="UnitD_4"></span>
                            </div>
                            </td>
                       
                        </tr>
                    </table>
                </form>
            </div>
        </div>
            </center>

    

    </body>

    <CENTER>
    <div class="button-container">
        <button class="btn-done" onclick="generatePDF()">
        DOWNLOAD FILE
        </button>
    </div>
</CENTER>




<!--SCRIPT-->
    <script>

        //PERSONAL INFO
        const form = sessionStorage.getItem('form');
        const NameD = sessionStorage.getItem('NameD');
        const semesterD = sessionStorage.getItem('semesterD');
        const SchoolYrD = sessionStorage.getItem('SchoolYrD');
        const StudentNumD = sessionStorage.getItem('StudentNumD');
        const courseD = sessionStorage.getItem('courseD');
        const YearD = sessionStorage.getItem('YearD');

        //INPUT SUBJECT DESCRIPTION
        const SCD_1 = sessionStorage.getItem('SCD_1');
        const SCD_2 = sessionStorage.getItem('SCD_2');
        const SCD_3 = sessionStorage.getItem('SCD_3');
        const SCD_4 = sessionStorage.getItem('SCD_4');

         //INPUT SUBJECT UNIT
         const UnitD_1 = sessionStorage.getItem('UnitD_1');
        const UnitD_2 = sessionStorage.getItem('UnitD_2');
        const UnitD_3 = sessionStorage.getItem('UnitD_3');
        const UnitD_4 = sessionStorage.getItem('UnitD_4');


        
     //PERSONAL INFO   
       document.getElementById('NameD').textContent = NameD;
       document.getElementById('semesterD').textContent = semesterD;
       document.getElementById('SchoolYrD').textContent = SchoolYrD;
       document.getElementById('StudentNumD').textContent = StudentNumD;
       document.getElementById('courseD').textContent = courseD;
       document.getElementById('YearD').textContent = YearD;


//INPUT SUBJECT DESCRIPTION
       document.getElementById('SCD_1').textContent = SCD_1;
       document.getElementById('SCD_2').textContent = SCD_2;
       document.getElementById('SCD_3').textContent = SCD_3;
       document.getElementById('SCD_4').textContent = SCD_4;


  //INPUT SUBJECT UNIT
       document.getElementById('UnitD_1').textContent = UnitD_1;
       document.getElementById('UnitD_2').textContent = UnitD_2;
       document.getElementById('UnitD_3').textContent = UnitD_3;
       document.getElementById('UnitD_4').textContent = UnitD_4;






    </script>

</html>