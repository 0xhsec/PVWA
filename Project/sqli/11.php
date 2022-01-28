<?php
   $name=filter_input(INPUT_POST, 'name');
   $age=filter_input(INPUT_POST, 'age');

   if( $name || $age ) {
       echo "Welcome ". $name. "<br />";
      echo "You are ". $age. " years old.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      <h1>POC</h1>
      <h3>Try This in query<br><code><hr></code><br><br></h3>
      <input type="text" value="<hr><hr>" id="myInput">
      <button onclick="myFunction()">Copy text</button>

      <hr>
      
      <iframe src="poc2.txt">
      </iframe>
      <button class="a2">Copy text</button>

      <script>
      function myFunction() {
      /* Get the text field */
      var copyText = document.getElementById("myInput");

     /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /* For mobile devices */

      /* Copy the text inside the text field */
      navigator.clipboard.writeText(copyText.value);
      
      /* Alert the copied text */
      alert("Copied the text: " + copyText.value);
}
</script>
<script>
      let btn =document.querySelector(".a2");
      btn.addEventListener("click", function() {
        let ifm= document.querySelector("iframe")
         // let text=ifm.innerText;
         // setTimeout(() => {
         //    // console.log(ifm.value);            
         // }, 1000);
         navigator.clipboard.writeText(ifm);

      })
      </script>
   </body>
</html>


 


