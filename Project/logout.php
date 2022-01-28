<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<html>
<body>
<script>
function my(){
         setTimeout(function(){
            window.location.href ='index.php';
         }, 3000);}
</script>
<?php
echo "<h2>Logged Out</h2>";
echo '<script type="text/javascript">my();</script>';
?>