<?php 

session_start();

include 'Functions/DBconnect.php';
include 'Functions/function.php';


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$studentnum = $_POST['studentnumber'];
		$password = $_POST['pass'];

		if(!empty($studentnum) && !empty($password))
		{

			//read from database
			$query = "select * from studentinfo where studentnum = '$studentnum' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password && $user_data['usertype'] == "user"  )
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: MainPage.php");
						die;
					}
          elseif($user_data['usertype'] == "admin"){
            $_SESSION["user_id"] = true;
            header("location: Admin page/admin_PANEL.php");
            die;
          }
				}
			}
			
			
		}else
		{
			echo "wrong studentnumber or password!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>ESSUDYANTE</title>

    <link rel="stylesheet" href="CSS files/LoginPage.css">
    <link rel="stylesheet" href="CSS icons/all.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body background="images/ESSU entrance.jpg" style="background-size: cover; background-repeat: no-repeat;">
  <div class="container">
    <div class="cover">
      <div class="front">
        <img src="images/ESSU campus.jpg">
        <div class="text">
          <span class="text-1">WELCOME TO ESSUDYANTE</span>
          <span class="text-2">An College Of Engineering Portal</span>
          <span class="text-2">Where You Can Apply For Your Documents</span>
          <span class="text-2">Hassle Free</span>
          <br>
          <br>
          <span class="text-2">NOTE : If you are still not registered</span>
          <span class="text-2">Please Proceed To The Registar To Register An Account</span>
          <span class="text-2">This Website is Exclusive For COE Students Only</span>
        </div>
      </div>
    </div>
    <img src="images/ESSUDYANTElogo.png">
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login Here</div>

            <!--Form-->

          <form method="post">
            <div class="input-boxes">
              <div class="input-box">
              <i class="fa-solid fa-user"></i>
                <input type="text" name="studentnumber" placeholder="Enter Your Student Number" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="pass" placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
        </form>
      </div>
    </div>
    </div>
    </div>
</body>
</html>
