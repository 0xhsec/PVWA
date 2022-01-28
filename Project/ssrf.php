<!DOCTYPE html>
<html lang="en">
<head>
  <title>SSRF</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h2>SSRF Server Side Request Forgerys</h2>
<p>
Server-side request forgery (SSRF) is an attack that allows attackers to send malicious requests to other systems via a vulnerable web server. Listed in the OWASP Top 10 as a major application security risk, SSRF vulnerabilities can lead to information exposure and open the way for far more dangerous attacks. This post shows how SSRF works and how you can identify and prevent SSRF vulnerabilities in your web applications.</p>
<br>
<br>

</p>
<img src="ssrf/11.png">

<?php 
// $json = file_get_contents('./pages.json');
// $json_data = json_decode($json,true);
$MPno=2;
$href='ssrf';

include('pagination.php');  

?>
</body>
</html>
