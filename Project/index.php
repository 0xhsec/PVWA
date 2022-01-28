<!DOCTYPE html>
<html lang="en">
<title>PVWA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:200px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h2 class="w3-padding-64"><b>PVWA<br></b></h2>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="sqli.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">SQL Injection</a> 
    <a href="xss.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">XSS</a> 
    <a href="csrf.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">CSRF</a> 
    <a href="ssrf.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">SSRF</a> 
    <a href="practice.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Practice</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>PVWA</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:200px;margin-right:40px">
<?php

if(isset($_COOKIE["user"])){
  $name=$_COOKIE["user"];
  echo '
  <h1 class="w3-xlarge w3-text-red"><b>Welcome to PVWA '.$name.'!</b></h1>
  <div class="w3-container">
 
  <a href="logout.php" class="w3-btn w3-red" style="position: fixed; right: 1rem;" >Logout</a>
</div>
';
  
}
else{

echo "
<div class=\"w3-container\">
 
  <a href=\"login.php\" class=\"w3-btn w3-red\" style=\"position: fixed; right: 1rem;\" >Login</a>
</div>
  <!-- Header -->
  <div class=\"w3-container\" style=\"margin-top:80px\" id=\"showcase\">
    <h1 class=\"w3-xxxlarge w3-text-red\"><b>Welcome to PHP vulnerable Web Application!</b></h1>
    <hr style=\"width:50px;border:5px solid red\" class=\"w3-round\">
    <p>PHP Vulnerable Web Application (PVWA) is a PHP/MySQL web application that is made for infosecurity beginner to practice&nbsp; web vulnerabilities. The aim of PVWA is to&nbsp;<em>practice some of the most common web vulnerabilities</em>, with&nbsp;<em>various levels of difficultly</em>, with a simple straightforward interface.</p><p>Its main goal is to be an aid for security professionals to test their skills and tools in a legal environment, help web developers better understand the processes of securing web applications and to aid both students &amp; teachers to learn about web application security in a controlled class room environment. With not only implemented problem but we have provided the solution to mitigate that level vulnerabilities.</p>
  <hr />
  <br />
  
  </div>
  
  <!-- Designers -->
  <div class=\"w3-container\" id=\"designers\" style=\"margin-top:75px\">
    <h1 class=\"w3-xxxlarge w3-text-red\"><b>Designers.</b></h1>
    <hr style=\"width:50px;border:5px solid red\" class=\"w3-round\">
    <h2>General Instructions</h2>
  <p>It is up to the user how they approach PVWA. Either by working through every module at a fixed level, or selecting any module and working up to reach the highest level they can before moving onto the next one.&nbsp;</p><p>There is not a fixed object to complete a module. To count the progress we have login option with user account.&nbsp;</p><p>However users should feel that they have successfully exploited the system as best as they possible could by using that particular vulnerability.</p>
  <p>PVWA also includes a Web Application Firewall (WAF), PHPIDS, which can be enabled at any stage to further increase the difficulty. This will demonstrate how adding another layer of security may block certain malicious actions. Note, there are also various public methods at bypassing these protections (so this can be seen as an extension for more advanced users)!</p><p>In future we will add help button at the bottom of each page, which allows you to view hints &amp; tips for that vulnerability. There are also additional links for further background reading, which relates to that security issue.</p><p><br></p>
  <hr>
  <br />
  </div>


  <!-- get started -->
  <div class=\"w3-container\" id=\"contact\" style=\"padding:75px \">
  <a href=\"Signup.php\" style=\"margin-left:350px\" class=\"w3-ripple w3-button w3-indigo w3-hover-green w3-border-green w3-round-large w3-xlarge\">Get Started</a>
  </div>
  <br><br><br>

<!-- End page content -->
</div>
";}
?>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

</script>

</body>
</html>
