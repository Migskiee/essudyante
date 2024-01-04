<?php


session_start();

include 'Functions/DBconnect.php';
include 'Functions/function.php';

$user_data = check_login($con);

?>




<html lang="en">
<title>ESSUDYANTE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS Icons/all.css">
<link rel="icon" href="images/ESSU logo.png" type="image/x-icon">
<link rel="stylesheet" href="CSS files/Main.css" />
</HEAD>

<!--Background Image-->

<body class="bg" background="images/ESSU entrance.jpg"  ></body>

<body><!--menu bar-->
  <div class="menu-bar">
    <left><img src="images/ESSU Logo & text.png" style="height: 80px;"></left>
    <ul>
      <li>
        <h1 style="color: white;font-family:Arial, Helvetica, sans-serif; letter-spacing: 1px; ">COLLEGE OF ENGINEERING
          PORTAL</h1>
      </li>
      <li><a href="logout.php">Log out<i class="fa-solid fa-right-from-bracket"></i></a></li>

    </ul>
  </div>
</body>

<center>

  <body class="tabcontainer">
    <div class="container">
      <div class="topic"><img src="images/ESSUDYANTElogo.png" height="120vh"></div>
      <!--Choices of content-->
      <div class="content">
        <input type="radio" name="slider" checked id="Doc1" />
        <input type="radio" name="slider" id="Doc2" />
        <input type="radio" name="slider" id="Doc3" />
        <input type="radio" name="slider" id="Doc4" />
        <!--Label of contents-->
        
      <div class="list">
          <label for="Doc1" class="Doc1">
            <i class="far fa-envelope"></i>
            <span class="title">PRELIMINARY REGISTRATION FORM</span>
          </label>
          <label for="Doc2" class="Doc2">
            <span class="icon"><i class="fas fa-envelope"></i></span>
            <span class="title">ADDING AND CHANGING FORM</span>
          </label>
          <label for="Doc3" class="Doc3">
            <span class="icon"><i class="far fa-envelope"></i></span>
            <span class="title">DROPPING FORM</span>
          </label>
          <label for="Doc4" class="Doc4">
            <span class="icon"><i class="fas fa-envelope"></i></span>
            <span class="title">APPLY FOR COG</span>
          </label>
          <div class="slider"></div>
        </div>

        <!--Container for text content-->

        <!--FIRST FORM--><!--PRELIMINARY REGISTRATION FORM-->
<div class="text-content">
          <div class="Doc1 text">
            <div class="title">PRELIMINARY REGISTRATION FORM</div>
            <p>
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
          <div class="input-box">
          <input type="text" id="Studentnum">   
          </div>
        </th>

        <!--SEMESTER--><!--id(semester)-->
        <th colspan="2" class="input-radio"> 
          <label for="sem">SEMESTER:</label>
          <input type="radio" name="sem" id="semester">1ST
          <input type="radio" name="sem" id="semester">2ND
          <input type="radio" name="sem" id="semester">SUMMER   
        </th>

        <!--SCHOOL YEAR--><!--id(SchoolYR)-->
        <th> 
          <label for="SchoolYR">SCHOOLYEAR:</label>
          <div class="input-box">
          <input type="text" id="SchoolYR" placeholder="(XXXX - XXXX)">  
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
            <input type="text" id="name" placeholder="SURNAME / FIRST NAME / MIDDLE NAME" >
          </div>
         </td>
        <td colspan="2">
          <div class="input-box">
            <label for="email">EMAIL ADDRESS:</label>
            <input type="email" id="email" placeholder="EMAIL ADDRESS">
        </div>
          </td>
        <td class="input-radio">
            <label for="Gender">GENDER:</label>
            <input type="radio" id="Gender" name="Gender" value="Male"> Male
            <input type="radio" id="Gender" name="Gender" value="Female"> Female
        </td>
        <td>
          <label for="contact">CONTACT NUMBER:</label>
          <div class="input-box">
          <input type="text" id="contact" placeholder="09*********">
        </div>
        </td>
      </tr> 

      <!--3rd Row--><!--id(course,year,section,scholar)-->
      <tr>
        <td>
          <label for="course">COURSE:</label>
          <div class="input-box">
          <input type="text" id="course">
          </div>
        </td>
        <td>
          <label for="year">YEAR:</label>
          <div class="input-box">
          <input type="text" id="year">
          </div>
        </td>
        <td>
          <label for="section">SECTION:</label>
          <div class="input-box">
          <input type="text" id="section">
          </div>
        </td>
        <td colspan="2">
          <label for="scholar">SCHOLARSHIP:</label>
          <div class="input-box">
          <input type="text" id="scholar">
          </div>
        </td>
        <td class="input-radio">
          <label for="nstp">NSTP:</label>
          <input type="radio" name="nstp" id="NSTP" value="YES">YES
          <input type="radio" name="nstp" id="NSTP" value="NO">NO
        </td>
      </tr>

      <!--4th row--><!--id(status)-->
      <tr>
        <td colspan="6" class="input-radio">
          <label for="status">STATUS:</label>
          <input type="radio" name="status" id="status" value="new">NEW
          <input type="radio" name="status" id="status" value="old">OLD
          <input type="radio" name="status" id="status" value="Transferee">TRANSFEREE
          <input type="radio" name="status" id="status" value="Returnee">RETURNEE
          <input type="radio" name="status" id="status" value="Shifter">SHIFTER
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
        <input type="text" id="unit_1">
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
        <input type="text" id="unit_2">
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
        <input type="text" id="unit_3">
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
        <input type="text" id="unit_4">
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
        <input type="text" id="unit_5">
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
        <input type="text" id="unit_6">
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
        <input type="text" id="unit_7" value="">
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
        <input type="text" id="unit_8">
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
        <input type="text" id="unit_9" >
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
        <input type="text" id="unit_10">
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
        <input type="text" id="unit_11">
        </div>
      </td>
      </tr>


      <!--total units--><!--id(tot_units)-->
      <!--last row-->
      <tr class="tr2">
        <td colspan="5"></td>
        <td>
          <label for="tot_units">TOTAL UNITS:</label>
          <div class="input-box">
          <input type="text" id="tot_units">
          </div>
        </td>
      </tr>
    </tbody>
 </div>
</form>
</table>
</div>
            </p>

            <a href="Form1.php"><button class="button">FILL UP PRELIMINARY REGISTRATION FORM</button></a>
          </div>




<!--SECOND FORM--><!--ADDING AND CHANGING FORM-->
          <div class="Doc2 text">
            <div class="title">ADDING AND CHANGING FORM</div>
            <p>
            <center>
        <div class="container">
            <table>
                <form>
                <div class="table">
                    <tr>
                <th colspan="4" class="head">Adding And Changing Form</th>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>Name: </label>
                            <div class="input-box">
                                <input type="text" id="Name" placeholder="SURNAME/FIRST NAME/MIDDLE NAME"> 
                        </div>
                        </td>
                        <td>
                            <label>
                                Semester:
                            </label>
                            <div class="input-radio">
                            <input type="radio" name="semester" value="first">1st
                            <input type="radio" name="semester" value="second">2nd
                            </div>
                        </td>
                        <td>
                            <label>
                                School Year:
                            </label>
                            <div class="input-box">
                                <input type="text" id="SchoolYr" placeholder="20XX-20XX">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label>
                          Student Num:
                        </label>
                        <div class="input-box">
                            <input type="text" id="StudentNum" placeholder="XX-XXXXX">
                        </div>
                    </td>
                    <td colspan="2">
                        <label>
                        Course:
                    </label>
                    <div class="input-box">
                        <input type="text" id="course">
                    </div>
                    </td>
                    <td>
                        <label>
                            Year:
                        </label>
                        <div class="input-box">
                            <input type="text" id="Year">
                        </div>
                    </td>
                    </tr>
                    <tr class="tr2">
                        <th colspan="3">SUBJECT/S CANCELLED</th>
                        <th>UNIT/S</th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="input-box">
                            <input type="text" id="SC-1">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="text" id="Unit-1">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="input-box">
                            <input type="text" id="SC-2">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="text" id="Unit-2">
                        </div>
                        </td>
                    
                    </tr>
                    <tr>
                        <div class="input-box">
                        <td colspan="3">
                            <div class="input-box">
                            <input type="text" id="SC-3">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="text" id="Unit-3"> 
                        </div>
                        </td>
                   
                    </tr>
                    <tr>
                        
                        <td colspan="3">
                            <div class="input-box">
                            <input type="text" id="SC-4">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="text" id="Unit-4"> 
                        </div>
                        </td>
                   
                    </tr>


                    <!--Subject Authorize-->
                    <tr class="tr2">
                        <th colspan="3">SUBJECT/S AUTHORIZED</th>
                        <th>UNIT/S</th>
                    </tr>
                    <tr>             
                        <td colspan="3">
                            <div class="input-box">
                            <input type="text" id="SA-1">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="text" id="UnitA-1">
                            </div>
                        </td>              
                    </tr>
                    <tr>
            
                        <td colspan="3">
                            <div class="input-box">
                            <input type="text" id="SA-2">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="text" id="UnitA-2">
                            </div>
                        </td>
          
                    </tr>
                    <tr>
               
                        <td colspan="3">
                            <div class="input-box">
                            <input type="text" id="SA-3">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="text" id="UnitA-3">
                            </div>
                        </td>
          
                    </tr>
                    <tr>
                  
                        <td colspan="3">
                            <div class="input-box">
                            <input type="text" id="SA-4">
                            </div>
                        </td>
                        <td>
                            <div class="input-box">
                            <input type="text" id="UnitA-4">
                            </div>
                        </td>
        
                    </tr>
                    


                </div>
            </form>
            </table>
        </div>
    </center>
            </p>

            <a href="Form2.php"><button class="button">FILL UP ADDING AND CHANGING FORM</button></a>

          </div>




<!--THIRD FORM--><!--DROPPING FORM-->
          <div class="Doc3 text">
            <div class="title">DROPPING FORM</div>
            <p>
            <center>
            <div class="container">
                <table>
                    <form>
                    <div class="table">
                        <tr>
                    <th colspan="4" class="head">Dropping Form</th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>Name: </label>
                                <div class="input-box">
                                    <input type="text" id="NameD" placeholder="SURNAME/FIRST NAME/MIDDLE NAME"> 
                            </div>
                            </td>
                            <td>
                                <label>
                                    Semester:
                                </label>
                                <input type="radio" name="semester" id="semesterD" value="first">1st
                                <input type="radio" name="semester" id="semesterD" value="second">2nd
                            </td>
                            <td>
                                <label>
                                    School Year:
                                </label>
                                <div class="input-box">
                                    <input type="text" id="SchoolYrD" placeholder="20XX-20XX">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <label>
                              Student Num:
                            </label>
                            <div class="input-box">
                                <input type="text" id="StudentNumD" placeholder="XX-XXXXX">
                            </div>
                        </td>
                        <td>
                            <label>
                            Course:
                        </label>
                        <div class="input-box">
                            <input type="text" id="courseD">
                        </div>
                        </td>
                        <td>
                            <label>
                                Year:
                            </label>
                            <div class="input-box">
                                <input type="text" id="YearD">
                            </div>
                        </td>
                        </tr>
                        <tr class="tr2">
                            <th colspan="3">SUBJECT/S CANCELLED</th>
                            <th>UNIT/S</th>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="input-box">
                                <input type="text" id="SC-1">
                                </div>
                            </td>
                            <td>
                                <div class="input-box">
                                <input type="text" id="Unit-1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="input-box">
                                <input type="text" id="SCD-2">
                                </div>
                            </td>
                            <td>
                                <div class="input-box">
                                <input type="text" id="UnitD-2">
                            </div>
                            </td>
                        
                        </tr>
                        <tr>
                            <div class="input-box">
                            <td colspan="3">
                                <div class="input-box">
                                <input type="text" id="SCD-3">
                                </div>
                            </td>
                            <td>
                                <div class="input-box">
                                <input type="text" id="UnitD-3"> 
                            </div>
                            </td>
                       
                        </tr>
                        <tr>
                            
                            <td colspan="3">
                                <div class="input-box">
                                <input type="text" id="SCD-4">
                                </div>
                            </td>
                            <td>
                                <div class="input-box">
                                <input type="text" id="UnitD-4"> 
                            </div>
                            </td>
                       
                        </tr>
                    </div>
                </table>
                </div>
                </form>
            </center>
            </p>

            <a href="Form3.php"><button class="button">FILL UP DROPPING FORM</button></a>

          </div>



<!--FOURTH FORM--><!--CERTIFICATION OF GRADE / COG-->
          <div class="Doc4 text">
            <div class="title">CERTIFICATION OF GRADES FORM</div>
            <p>
            <div class="container">
    <table>
      <form>
        <div class="table">
          <th class="head" colspan="6">
            <div>
            APPLICATION FOR CERTIFICATE OF GRADES
          </div>
          </th>
          <tr>
            <td colspan="3">
              <label for="name">
                NAME: 
              </label>
              <div class="input-box">
              <input  type="text" id="name"> 
              </div>
            </td>
            <td colspan="2">
              <label for="studnetnum">
                STUDENT NUMBER:
              </label>
              <div class="input-box">
                <input type="text" id="studentnum">
              </div>
            </td>
           
            <td>
              <label for="schoolyear">
                SCHOOL YEAR:
              </label>
              <div class="input-box">
              <input type="text" id="schoolyear">
            </div>
              </td>
          </tr>
          <tr>
            <td colspan="3">
              <label for="period">
                PERIOD:
              </label>
              <input type="radio" name="period" id="periodm" value="MIDTERM PERIOD">
              <label for="periodm">
              MIDTERMS
            </label>
            <input type="radio" name="period" id="periodf" value="FINAL PERIOD">
            <label for="periodf">
              FINALS
            </label>
            </td>
            <td>
              <label for="course">
                COURSE:
              </label>
              <div class="input-box">
                <input type="text" id="course">
              </div>
            </td>
            <td>
              <label for="section">
                SECTION:
              </label>
              <div class="input-box">
                <input type="text" id="section">
              </div>
            </td>
            <td>
              <label for="semester">
                SEMESTER:
              </label>
              <div class="input-box">
                <input type="text" id="semester">
              </div>
            </td>
            </tr>

          <tr>
            <th class="head" colspan="5">
              <div>
              SUBJECT DESCRIPTION
              </div>
            </th>
            <th class="head">
              <div>
            GRADE
              </div>
            </th>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
              <input type="text" id="DC_1">
            </div>
              </td> 
          </tr>
          <tr>
            <td colspan="6">
            <div class="input-box">
              <input type="text" id="DC_2">
            </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" id="DC_3">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" id="DC_4">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" id="DC_5">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" id="DC_6">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" id="DC_7">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" id="DC_8">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" id="DC_9">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" id="DC_10">
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="6">
              <div class="input-box">
                <input type="text" id="DC_11">
              </div>
            </td>
          </tr>
        </div>
      </form>
    </table>
  </div>
            </p>

            <a href="Form4.php"><button class="button">APPLY FOR CERTIFICATE OF GRADES</button></a>
          </div>
        </div>
    </div>
  </body>
</center>


         
</body>
<br>
<br>
<br>
<!--footer / Content Below The Page-->
<footer class="footer"
  style="background-size:cover; background: url(images/header-bg.jpg); background-repeat: no-repeat; height: min-content;">
  <div class="footerlogo">
    <img src="images/ESSU logo.png" width="120px">
  </div>
  <div class="info">
    <b>
      <p class="footer-p">Eastern Samar State University - Borongan Campus </p>
    </b>
    <p class="footer-p">Brgy. Maypangdan, Borongan City, Eastern Samar, Philippines</p>
  </div>
  <div class="reqp">
    <a href="ViewCOG.php?updateid='.$user_id.'"><button class="button">View COG Applications</button></a>
  </div>
</footer>

</html>