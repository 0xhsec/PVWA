<head>
<title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body>
    <?php

if(isset($_COOKIE["user"])){
  $name=$_COOKIE["user"];
  echo "
  <h1 class=\"w3-xlarge w3-text-red\"><b>Welcome to PVWA ".$name."!</b></h1>
  <button class=\"w3-button w3-block w3-section w3-blue w3-ripple w3-round-xxlarge w3-padding\"><a href=\"logout.php\">Log Out</a></button>

  <h3 class=\"w3-center w3-text-blue\"><a href=\"index.php\">Start Doing challenge.</a></h3>
  <br>
  <img src=\"working.png\">

";
  
}
else{
    echo "<script>alert(please Signup or login)</script>";
}
?>


</body>