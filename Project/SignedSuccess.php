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

 #snackbar2{
  visibility: hidden;
  min-width: 250px;
  margin-left: -315px;
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

#snackbar2.show{
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
<body>
<script>
function my(){
var x = document.getElementById("snackbar2");
x.className = "show";
setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
<?php
    $name =filter_input(INPUT_POST, 'name');
    $email =filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password'); 
    $username= 'null';
    $password=hash('sha256', $password);
    include('connection.php');  
      $sql = "SELECT id from Alogin";
      $result = $con->query($sql);
      if ($result->num_rows > 0) {
          $id=2;
          while($row = $result->fetch_assoc()) {
          $id=$row["id"];
      }
      }
      $id=$id+1;

      $sql = "INSERT INTO Alogin (ID, name, username, Email, passhash) VALUES ('$id', '$name','$username','$email','$password')";
  if ($con->query($sql) === TRUE) {
    echo '<script type="text/javascript">my();</script>';
    //  echo '<script type=\"text/javascript\">my();</script>';
    $cookie_name = "user";
    $cookie_value = $name;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

     $con->close();
   } 
  else {
     echo "Error: " . $sql . "<br>" . $con->error;
  }

?>
<div>&nbsp;</div><div>&nbsp;</div>
	<div>&nbsp;</div><div>&nbsp;</div>
<div style="margin:0 auto;width:500px;">
<button class="w3-button w3-block w3-section w3-blue w3-ripple w3-round-xxlarge w3-padding">Welcome <?php echo $name ?></button>
<h3 class="w3-center w3-text-blue"><a href="profile.php"><br><br>Continue to profile</a></h3><br>   
<h3 class="w3-center w3-text-blue"><a href="index.php">Start Doing challenge.</a></h3>
</div>
<div id="snackbar2"><h2 style=" color: greenyellow;">You are registered successfully</h2></div>
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