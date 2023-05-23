<?php
$con=mysqli_connect("localhost","root","","duowebizz");
$mail=$_POST['mail'];
$pet=$_POST['nameofpet'];
$cpass=$_POST['cpass'];
$conpass=$_POST['conpass'];

if($mail != "" && $pet != "" && $cpass !="" && $conpass !=""){
  $sql="SELECT * FROM `register` WHERE Mail='$mail'";
  $result=mysqli_query($con,$sql);
  $fatch=mysqli_fetch_assoc($result);
  $num=mysqli_num_rows($result);
  if($num = 1){
     if($pet == $fatch['Name of pet']){
          if($cpass == $conpass){
      $update="UPDATE `register` SET `Password`='$cpass' WHERE Mail='$mail'";
      $up=mysqli_query($con,$update);
      if($up){
        ?>
<script>alert('Password updated!');
  window.location="/project22/loginpage.html";
</script>
        <?php
      }
      else{
        ?>
           <script>alert('Something went wrong!');
            window.location="/project22/resetpass.html";</script>
        <?php
      }
          }
          else{
            ?>
<script>
  alert('Password Does not macth!');
  window.location="/project22/resetpass.html";
</script>

<?php
          }
     }
     else{
      ?>
          <script>
            alert('Pet name or mail is wrong!');
            window.location="/project22/resetpass.html";
          </script>
      <?php
     }
  }
  else{
    ?>
<script>
  alert('This account is not registred yet!');
  window.location="/project22/resetpass.html";
</script>
    <?php
  }

}
else{
    ?>
    <script>
        alert("Fill required fields!");
        window.location="/project22/resetpass.html";
    </script>
    <?php
}

?>