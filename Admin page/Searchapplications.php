<?php


include 'Functions/DBconnect.php';
include 'Functions/function.php';


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registered Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
    <a href=applications_display.php class="text-light"><button class="btn btn-primary my-5">GO BACK</button></a>
    </div>

    <div class="container my-5">
        <form method="post">
<input type="text" placeholder="SEARCH ID" name="id">
<button class="btn btn-dark btn-sm" name="submit">SEARCH</button>
</form>
</div>

<DIV class="container my-5">
<table class="table" >
  <?php
if(isset($_POST['submit'])){
    $search=$_POST['id'];

    $sql="SELECT * from `applications_record` where reference_id = '$search'";
    $result=mysqli_query($con,$sql);
    if($result){
        if(mysqli_num_rows($result) > 0 ){
           echo '<tr>
            <th scope="row"></th>
            <td></td>
            </tr>';

        $row=mysqli_fetch_assoc($result);
        $user_id=$row['reference_id'];
        $name=$row['output_name'];
        echo '<tr>
        <th scope="row">'.$user_id.'</th>
        <td>'.$name.'</td>
      <td>
<a href="action.php?updateid='.$user_id.'" class="text-light"><button class="btn btn-primary">Update</button></a>
</td>
</tr>';
    }else{
        echo "<h2 class=text-danger> DATA NOT FOUND </h2> ";
    } 
}
   
}


  ?>

</table>
</div>



  </body>

</html>