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
    <link rel="stylesheet" href="CSS files/Form3.css">


    
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
                    <th colspan="6" class="head">Dropping Form</th>
                        </tr>

                        <!--FIRST ROW-->
                        <tr>
                            <td colspan="3"><!--NameD-->
                                <label for="NameD">Name: </label>
                                <div class="input-box">
                                    <input type="text" id="NameD" placeholder="SURNAME/FIRST NAME/MIDDLE NAME" required> 
                            </div>
                            </td>
                            <td>
                                <label for="semesterD"><!--semesterD-->
                                    Semester:
                                </label>
                                <input type="radio" name="semesterD" id="1st" value="first" required><label for="1st">1ST</label>
                                <input type="radio" name="semesterD" id="2nd" value="second" required><label for="2nd">2ND</label>
                            </td>
                            <td><!--SchoolYrD-->
                                <label for="SchoolYrD">
                                    School Year:
                                </label>
                                <div class="input-box">
                                    <input type="text" id="SchoolYrD" placeholder="20XX-20XX" required>
                                </div>
                            </td>
                        </tr>

                        <!--SECOND ROW-->
                        <tr>
                            <td><!--StudentNumD-->
                            <label for="StudentNumD">
                              Student Num:
                            </label>
                            <div class="input-box">
                                <input type="text" id="StudentNumD" placeholder="XX-XXXXX" required>
                            </div>
                        </td>
                        <td colspan="2"><!--courseD-->
                            <label for="courseD">
                            Course:
                        </label>
                        <div class="input-box">
                            <input type="text" id="courseD" required>
                        </div>
                        </td>
                        <td><!--YearD-->
                            <label for="YearD">
                                Year:
                            </label>
                            <div class="input-box">
                                <input type="text" id="YearD" required>
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
                                <div class="input-box">
                                <input type="text" id="SCD_1">
                                </div>
                            </td>
                            <td>
                                <div class="input-box"><!--UnitD_1-->
                                <input type="number" id="UnitD_1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="input-box"><!--SCD_2-->
                                <input type="text" id="SCD_2">
                                </div>
                            </td>
                            <td>
                                <div class="input-box"><!--UnitD_2-->
                                <input type="number" id="UnitD_2">
                            </div>
                            </td>
                        
                        </tr>
                        <tr>
                            <div class="input-box">
                            <td colspan="4">
                                <div class="input-box"><!--SCD_3-->
                                <input type="text" id="SCD_3">
                                </div>
                            </td>
                            <td>
                                <div class="input-box"><!--UnitD_3-->
                                <input type="number" id="UnitD_3"> 
                            </div>
                            </td>
                       
                        </tr>
                        <tr>
                            
                            <td colspan="4">
                                <div class="input-box"><!--SCD_4-->
                                <input type="text" id="SCD_4">
                                </div>
                            </td>
                            <td>
                                <div class="input-box"><!--UnitD_4-->
                                <input type="number" id="UnitD_4"> 
                            </div>
                            </td>
                       
                        </tr>
                    </div>
                    <tr>
                        <td colspan="6">
                <div class="button-container">
                 <button class="btn-done" type="submit">SUBMIT</button>
                </div>
                        </td>
                      </tr>
                </table>
                </div>
                </form>
            </center>
    </body>

    <script>

        //PERSONAL INFO
        const form = document.getElementById('form');
        const NameD = document.getElementById('NameD');
       // const semesterD = document.getElementById('semesterD');
        const SchoolYrD = document.getElementById('SchoolYrD');
        const StudentNumD = document.getElementById('StudentNumD');
        const courseD = document.getElementById('courseD');
        const YearD = document.getElementById('YearD');

        //INPUT SUBJECT DESCRIPTION
        const SCD_1 = document.getElementById('SCD_1');
        const SCD_2 = document.getElementById('SCD_2');
        const SCD_3 = document.getElementById('SCD_3');
        const SCD_4 = document.getElementById('SCD_4');

         //INPUT SUBJECT UNIT
         const UnitD_1 = document.getElementById('UnitD_1');
        const UnitD_2 = document.getElementById('UnitD_2');
        const UnitD_3 = document.getElementById('UnitD_3');
        const UnitD_4 = document.getElementById('UnitD_4');

        //FUNCTION
        form.addEventListener('submit', function(e)
        {
    e.preventDefault();

    //PERSONAL INFO
    const NameDValue = NameD.value;
    //const semesterDValue =  semesterD.value;
    const SchoolYrDValue = SchoolYrD.value;
    const StudentNumDValue = StudentNumD.value;
    const courseDValue = courseD.value;
    const YearDValue = YearD.value;

    //INPUT SUBJECT DESCRIPTION
    const SCD_1Value = SCD_1.value;
    const SCD_2Value = SCD_2.value;
    const SCD_3Value = SCD_3.value;
    const SCD_4Value = SCD_4.value;

    //INPUT SUBJECT UNIT
    const UnitD_1Value = UnitD_1.value;
    const UnitD_2Value = UnitD_2.value;
    const UnitD_3Value = UnitD_3.value;
    const UnitD_4Value = UnitD_4.value;

    //PERSONAL INFO
    sessionStorage.setItem('NameD',NameDValue);
    //sessionStorage.setItem('semesterD',semesterDValue);
    sessionStorage.setItem('SchoolYrD',SchoolYrDValue);
    sessionStorage.setItem('StudentNumD',StudentNumDValue);
    sessionStorage.setItem('courseD',courseDValue);
    sessionStorage.setItem('YearD',YearDValue);

    //INPUT SUBJECT DESCRIPTION
    sessionStorage.setItem('SCD_1',SCD_1Value);
    sessionStorage.setItem('SCD_2',SCD_2Value);
    sessionStorage.setItem('SCD_3',SCD_3Value);
    sessionStorage.setItem('SCD_4',SCD_4Value);
    
    //INPUT SUBJECT UNITS
    sessionStorage.setItem('UnitD_1',UnitD_1Value);
    sessionStorage.setItem('UnitD_2',UnitD_2Value);
    sessionStorage.setItem('UnitD_3',UnitD_3Value);
    sessionStorage.setItem('UnitD_4',UnitD_4Value);


    const semesterDValue = document.querySelector('input[name="semesterD"]:checked').value;


sessionStorage.setItem('semesterDValue', semesterDValue);

location.href = "Form3 output.php";

        })
        
    </script>

</html>