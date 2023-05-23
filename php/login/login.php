<?php
   $con=mysqli_connect("localhost","root","","duowebizz");
   $mail=$_POST['mail'];
   $password=$_POST['password'];
   session_start();
   if($mail !="" && $password !=""){

       
      $sql="SELECT * FROM `register` WHERE Mail='$mail' AND Password='$password'";
      $result=mysqli_query($con,$sql);
      $fatch=mysqli_fetch_assoc($result);
    
      $num=mysqli_num_rows($result);


      if($num == 1){
         $_SESSION['username']=$mail;
         $_SESSION['name']=$fatch['Name'];
             ?>
<script>
                   alert("Login Sucsses!");

                window.location="/project22/services/services.php";
               
</script>
             <?php
      }
      else{
         ?>
           <script>
            alert('E-mail or Password Incorrect!');
            window.location="/project22/loginpage.html";
           </script>
         <?php
      }
   }
   else{
      ?>
        <script>
         alert('Enter required fields!');
         window.location="/project22/loginpage.html";
        </script>
      <?php
   }

?>