<?php      
        $host = "localhost";  
        $user = "root";  
        $dbpassword = '';  
        $db_name = "PVWA";  
          
        $con = mysqli_connect($host, $user, $dbpassword, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
        // else{
        //  echo "Connected";

        // }
    ?>  