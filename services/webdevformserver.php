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
  $sql = "SELECT * FROM `webdevdetails` WHERE Mail='$mail'";
  $result = mysqli_query($con, $sql);
  $fatch = mysqli_fetch_assoc($result);

  $num = mysqli_num_rows($result);

  if ($num == 0) {
    $insert="INSERT INTO `webdevdetails`(`Name`, `Mail`, `Website Type`, `Web Style`, `Buisness info`, `Web Fetures`) VALUES ('$name','$mail','$webtype','$webstyle','$webtypeinfo','$websitedetails')";
    $run=mysqli_query($con,$insert);
    if($run == true){
?>
<script>alert('We Got your Words!We contact you on your mail! Also you can take apointment.');
window.location="webdevelopment.php";</script>
            <?php
    }else{
      ?>
<script>
  alert('Somthing went Wrong!');
</script>
<?php
    }
    }
    else{
     
     
      ?>
    <script>
      alert('User alrady Applied web devlopement Form! You can update it on services page!');
      window.location="webdevelopment.php";
    </script>
    
    <?php
    }
  } else {
            ?>
<script>alert('Enter required fields!');
window.location="developform.php";</script>
        <?php
  }


?>
<?php

?>