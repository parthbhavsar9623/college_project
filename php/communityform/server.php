<?php
$con=mysqli_connect("localhost","root","");

$fname=$_POST['fname'];
$sname=$_POST['sname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$ws=$_POST['workstate'];
$wf=$_POST['workfield'];
$equal=$_POST['eq'];
$xp=$_POST['xp'];
$mail=$_POST['mail'];
$mobile=$_POST['mobile'];


if($fname !="" && $sname !="" && $lname !="" && $gender !="" && $dob !="" && $ws !="" && $wf !="" && $equal !="" && $xp !="" && $mail !="" && $mobile !="")
{

$sql="INSERT INTO `duowebizz`.`devrequests`(`ID`, `First Name`, `Middle Name`, `Last Name`, `Gender`, `DOB`, `Work State`, `Field`, `Educationl Quelification`, `Exeperiance`, `E Mail`, `Mobile`) VALUES ('','$fname','$sname','$lname','$gender','$dob','$ws','$wf','$equal','$xp','$mail','$mobile')";

$sent=mysqli_query($con,$sql);

if($sent){
    ?>
    <script>
        alert("Data Successfully Reached to The Servers!");
        window.location="/project22/php/communityform/done.php";
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("Data Could not be sent!Something happend!);
        window.location="/project22/community.html";
    </script>
    <?php
}
}
else{
    ?>
<script>
alert("Fill all required fields!");
window.location="/project22/community.html";

</script>
<?php
}
?>
