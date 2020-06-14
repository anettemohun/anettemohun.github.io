<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>

<?php include'menu.php';?>

<img src="contact.jpg" alt="Contact US" width="1100" height="300">
<div class="container-fluid">
&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone" style="font-size:48px"> : 8630718315</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-envelope" style="font-size:48px"> : neha.stuart@gmail.com</i>
            </div>
<section class="my-5">
  
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
        <br>
        <br>
            <img src="contactInfo.jpg" class="img-fluid aboutimg">
            <br>
            <br>
            
            <h4>Schedule: Monday to Saturday </h4>
            <h4> Morning:10:00 am - 1:00 pm </h4>
            <h4> Evening: 6:00 pm - 9:00 pm</h4>

            
</div>
<div class="col-lg-6 col-md-6 col-12">
<h2 class="text-center">Make an appointment</h2>

<div >
<form action="userinfodetail.php" method="post" class="was-validated">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" autocomplete="off" class="form-control" required>
<div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
</div>
<div class="form-group">
<label>Email</label>
<input type="text" name="email" autocomplete="off" class="form-control" required>
<div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
</div>
<div class="form-group">
<label>Mobile</label>
<input type="text" name="mobile" autocomplete="off" class="form-control" required>
<div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
</div>

<div class="form-group">
<label>Hour Preference</label>
<span>
<select name="Pref">
<option value="1" autocomplete="off" class="form-control" placeholder="Hour Preference">Morning(10:00am - 2:00pm) </option>
<option value="2" autocomplete="off" class="form-control" >Evening(6:00pm - 9:00pm)</option>

</select></span> <br>
<br>
<label>Select Date</label>
  <input type="date"  name="date" placeholder="Select Date">
  
</div>
<div class="form-group">
<label>Comment</label>
<textarea class="form-control" name="comment">
</textarea><br>
<button type="submit" class="btn btn-success">Submit</button>
</div>

</form>
</div>
</div>
</div>
</section>




<section>

<div class="footer">

&copy; LORD'sDentalClinic | Designed & Developed by Anette Panzy Mohun.

</div>

</section>