<!DOCTYPE html>
<html>
<head>
<title>Enter OTP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
body {
  background-image: url("./assets/wpgif.gif") ;
  background-size: 3990px 2100px;
  background-repeat: no-repeat;
  background-position: center;
}
.btn {
  position: absolute;
  top: 5%;
  left: 5%;
/*  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);*/
  background-color: #2196F3;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  box-shadow: 0 9px #999;
}
.btn1 {
  position: absolute;
  top: 5%;
  left: 85%;
/*  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);*/
  background-color: #2196F3;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  box-shadow: 0 9px #999;
}

 .btn:hover,.btn1:hover {
  background-color: grey;
}
.btn:active, .btn1:active{
  background-color: #f1f1f1;
  box-shadow: 0 5px #666;
  transform: translateY(6px);
}

#snackbar, #snackbar2{
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show ,#snackbar2.show{
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
</head>
 <?php

// $name =filter_input(INPUT_POST, 'name');
$name =$_POST['name'];
// $email =filter_input(INPUT_POST, 'email');
// $password = filter_input(INPUT_POST, 'password'); 
$email =$_POST['email'];
$password =$_POST['password']; 

include('connection.php');  
$sql = "select email from Alogin where email = '$email'";
$result = $con->query($sql);
if($result->num_rows > 0)
    echo "<script>alert('You are already signed up')
   window.history.back();
   </script>";
else{
  $otp = rand(100000,999999);
  // $otp = 456;
    $subject = "Welcome_To_PVWA";
    $messagee="<h5>Hello_".$name.",</h5>Thank_you_for_registering_with_PVWA<br>".
              "For_Email_verification,_your_otp_is_<b>".$otp."</b><br>".
              "Your_login_details_are_as_follows:<br>".
              "Name:_".$name."<br>".
              "Email:_".$email."<br><br>".
              "Please_keep_this_information_safe_for_future_reference.<br><br>".
              "Thank_You,<br>".
              "PVWA";
    $command_exec = escapeshellcmd('py mail.py '.$email .' ' .$subject .' ' .$messagee);
    $str_output = shell_exec($command_exec);
    $otp=hash('md5', $otp);
  //   echo "<script>
  //   localStorage.setItem(\"otp\", ".$otp.");
  // </script>";  
}
 ?>
<body>
  <script src="http://www.myersdaily.org/joseph/javascript/md5.js"></script>
<script>
function validateForm() {
  var otpp = document.forms["myForm"]["uotp"].value;
  var otpp = md5(otpp);
  var otp = <?php echo $otp?>;
  if (otpp != otp) {
    var x = document.getElementById("snackbar");
 x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    return false;
  }
  else{
      var x = document.getElementById("snackbar2");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  }
}
</script>

	<div>&nbsp;</div><div>&nbsp;</div>
	<div>&nbsp;</div><div>&nbsp;</div>
<div style="margin:0 auto;width:500px;">
     <!-- <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-round-xxlarge w3-padding">Send OTP</button> -->
  <form name="myForm" onsubmit="return validateForm()" method="post" action="SignedSuccess.php" class="w3-container w3-round-xlarge w3-card-4 w3-light-grey">
  <h3 class="w3-center w3-text-blue">Enter OTP send on your email</h3>
  <div class="w3-col" style="width:20px">
  <i class='fas fa-caret-right' style="font-size:36px; color:#2196F3"></i></div>
  <div class="w3-rest">
  <input type="hidden" name="name" value="<?php echo $name ?>" />
  <input type="hidden" name="email" value="<?php echo $email ?>" />
  <input type="hidden" name="password" value="<?php echo $password ?>" />
  <input class="w3-input w3-border w3-animate-input w3-round-xxlarge" id="otpp" name="uotp" type="text" style="width:30%"></div>
  <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-round-xxlarge w3-padding">Verify</button>
  </form>
  <div id="snackbar"><h2 style=" color: red;">**OTP is wrong**</h2></div>
<div id="snackbar2"><h2 style=" color: greenyellow;">OTP is correct</h2></div>

    
</div>
<button onclick="document.getElementById('id01').style.display='block'" class="btn">Home</button>
<button onclick="document.getElementById('id02').style.display='block'" class="btn1">Go Back</button>
 <!-- model 1 -->
 <div id="id01" class="w3-modal">
<div class="w3-modal-content w3-animate-right" style="border-radius: 9px;">      
<header class="w3-container"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright w3-round-xlarge">&times;</span>
        <h2>Confirmation </h2>
      </header>
      <div class="w3-container w3-border w3-padding">
        <p>Do you want to exit</p>
        <p class="w3-warning">Your signup is not completed</p>
      </div>
      <footer class="w3-container w3-padding w3-animate-left" style="text-align: right;">
        <button class="w3-btn w3-white w3-border w3-round-large w3-margin-right" onclick="document.getElementById('id01').style.display='none'">Close</button><a href="./index.php"  class="w3-btn w3-blue w3-border w3-round-large w3-margin-left">Home</a>
      </footer>
    </div>
  </div>
</div>
<!-- model 2 -->
<div id="id02" class="w3-modal ">
<div class="w3-modal-content w3-animate-left" style="border-radius: 9px;">      
<header class="w3-container"> 
        <span onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright w3-round-xlarge">&times;</span>
        <h2>Confirmation </h2>
      </header>
      <div class="w3-container w3-border w3-padding">
        <p>Your signup will not be considered</p>
        <!-- <p>If you go back</p> -->
      </div>
      <footer class="w3-container w3-padding w3-animate-right">
        <button class="w3-btn w3-red w3-border w3-round-large w3-margin-right" onclick="goBack()">  <i style='font-size:24px' class='fas'>&#xf0a8;</i> back</button><button class="w3-btn w3-border w3-round-large w3-margin-left" onclick="document.getElementById('id02').style.display='none'">Close</button>
      </footer>
    </div>
  </div>
</div>
<script type="text/javascript">
 function goBack(){
window.history.back();
 }
</script>

    </body>
</html>