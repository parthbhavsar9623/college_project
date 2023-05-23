<?php
$con=mysqli_connect("localhost","root","","duowebizz");
$name=$_POST['name'];
$pet=$_POST['nameofpet'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$conpass=$_POST['conpassword'];
      if($name !="" && $pet !="" && $mail !="" && $password !="" && $conpass !="")
      {
        if($password == $conpass){
            $sql="SELECT * FROM `register` WHERE Mail='$mail'";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
            if($num != 1){
$sql="INSERT INTO `register`(`ID`, `Name`, `Name of pet`, `Mail`, `Password`) VALUES ('','$name','$pet','$mail','$password')";
$result=mysqli_query($con,$sql);

if($result){
    ?>
<script>alert('User registred! Now you can login! ');
window.location="/project22/loginpage.html";</script>
    <?php
}
else{
    ?>
    <script>
    window.location="/project22/loginpage.html"
    alert('User not registred!');
    </script>
    <?php
}
            }else{
                ?>

<script>
alert('This mail alrady registred!');
window.location="/project22/registration.html"
</script>
<?php
            }
}else{
    ?>
<script>alert('Password not macthed!');
window.location="/project22/registration.html";
</script>
    <?php
}
      }
      else{
        ?>
<script>alert('Enter required fields!');
window.location="/project22/registration.html";</script>
        <?php
      }
?>
