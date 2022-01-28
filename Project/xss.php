<!DOCTYPE html>
<html lang="en">
<head>
  <title>XSS (Cross Site scripting)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<h2>What is Cross Site Scripting?</h2>
<p>
Cross-site scripting (also known as XSS) is a web security vulnerability that allows an attacker to
compromise the interactions that users have with a vulnerable application. Cross-site scripting
vulnerabilities normally allow an attacker to masquerade as a victim user, to carry out any
actions that the user is able to perform, and to access any of the user's data. If the victim user has
privileged access within the application, then the attacker might be able to gain full control over
all of the application's functionality and data.</p>
<h2>How does XSS work?</h2>
<p>Cross-site scripting works by manipulating a vulnerable website's source code/storage system so
that it returns malicious JavaScript to users. When the malicious code executes inside a victim's
browser, the attacker can fully compromise their interaction with the application by stealing
session cookies, user credentials, tokens, secrets, etc.</p>

<?php 
// $json = file_get_contents('./pages.json');
// $json_data = json_decode($json,true);
$MPno=2;
$href='xss';

include('pagination.php');  

?>
</body>
</html>
