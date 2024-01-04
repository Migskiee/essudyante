<?php

function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from studentinfo where user_id = '$id' ";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: loginPage.php");
	die;

}

function random_num($length)
{


	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(1,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	
	}

	return $text;
    


}

function reference_num($leng)
{

	$reference = "";
	if($leng < 5)
	{
		$leng = 5;
	}

	$len = rand(4,$leng);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$reference .= rand(0,9);
	}

	return $reference;

}