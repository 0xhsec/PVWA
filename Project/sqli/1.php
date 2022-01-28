<html>
   
   <head>
      <title>SQLinjection</title>
   </head>
   
   <body>
<?php
         
         // define variables and set to empty values
         $name=filter_input(INPUT_POST, 'name');
         $pass=filter_input(INPUT_POST, 'pass');
     
         if( $name == 'ram' || $pass ) {
            echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <div class="container mt-5">
            <div class="toast show">
            <div class="toast-header">
            <strong class="me-auto">Login success</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
            <p>Welcome. user</p>
            </div>
            </div>
            </div>
            
            '; 
      
      exit();   
   }
            if($name || $pass){
               echo 'Try again';
            }
         
         
        
      ?>
   
      <h2>Login here</h2>
      
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table>
            <tr>
               <td>Name:</td> 
               <td><input type = "text" name = "name"></td>
            </tr>
            
            <tr>
               <td>password:</td>
               <td><input type = "text" name = "pass"></td>
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
         </table>
      </form>
      <h1>POC</h1>
      <h3>Try This in query<br><code>name = 1=1, pass= 1=1</code><br><br></h3>
      
      
</body>
</html> 
