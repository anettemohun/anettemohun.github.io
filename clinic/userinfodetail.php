<?php
$con=mysqli_connect('localhost','root','',"clinic","3307");
if($con){

    echo "Connection sucessfull";

}
else{
    echo "NoConnection";
}

mysqli_select_db($con,'clinic');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$Pref=$_POST['Pref'];
$date=$_POST['date'];
$comment=$_POST['comment'];

if (!mysqli_query($con,"INSERT INTO userinfo (Name,Email,Mobile,Pref,date,Comment) VALUES ('$user','$email','$mobile','$Pref','$date','$comment')")) {
  echo("Error description: " . mysqli_error($con));
}

mysqli_close($con);

header('location:index.php');

  ?>