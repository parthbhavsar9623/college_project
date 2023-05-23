<?php
 session_start();
$con=mysqli_connect("localhost","root","","duowebizz");
$name=$_SESSION['name'];
$mail=$_SESSION['username'];
$webtype=$_POST['webtype'];
$webstyle=$_POST['webstyle'];
$webtypeinfo=$_POST['webtypeinfo'];
$websitedetails=$_POST['websitedetails'];
if ($name != "" && $mail != "" && $webtype != "" && $webstyle != "" && $webtypeinfo != "" && $websitedetails != "") {

 
    $insert="UPDATE `webdevdetails` SET `Name`='$name',`Mail`='$mail',`Website Type`='$webtype',`Web Style`='$webstyle',`Buisness info`='$webtypeinfo',`Web Fetures`='$websitedetails'";
    $run=mysqli_query($con,$insert);
    if($run == true){
?>
<script>alert('The Changes are sucssesfully Saved to your form!');
window.location="/project22/services/services.php";</script>
            <?php
    }else{
      ?>
<script>
  alert('Somthing went Wrong!');
</script>
<?php
    }
  } else {
            ?>
<script>alert('Enter required fields!');
window.location="/project22/services/updateform/webdevelopmentupdateform.php";</script>
        <?php
  }


?>
