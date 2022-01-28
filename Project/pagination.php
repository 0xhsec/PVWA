<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  div {
   
    display: flex;
    justify-content: center;
  }
</style>
<body>

<div class="container mt-3" >
  <p></p>
  <ul class="pagination" >
  <!-- <li class="page-item disabled"><a class="page-link" href="">Previous</a></li> -->
  <?php  
        for ($Pno = 0; $Pno <= $MPno; $Pno++) { 
    echo "<li class=\"page-item\"><a class=\"page-link\" href=\"".$href."/".$Pno.".php\"> ".$Pno."</a></li>";
    }
    ?>
    <!-- <li class="page-item"><a class="page-link" href="xss/xss2.php">2</a></li> -->
    <!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
  </ul>
</div>

