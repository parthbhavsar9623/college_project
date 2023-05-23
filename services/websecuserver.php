<?php
session_start();
$con=mysqli_connect("localhost","root","","duowebizz");
$name=$_SESSION['name'];
$mail=$_SESSION['username'];
$webtype = $_POST['webtype'];
$frntend =$_POST['frntend'];
$backend=$_POST['backend'];
$temp=$_POST['temp'];
$aboutweb=$_POST['aboutweb'];

if ($webtype != "" && $frntend != "" && $backend != "" && $temp != "" && $aboutweb != "") {
    $sql = "SELECT * FROM `securityupdate` WHERE Mail='$mail'";
    $result = mysqli_query($con, $sql);
    $fatch = mysqli_fetch_assoc($result);
    $nums = mysqli_num_rows($result);
    if ($nums == 0) {

        $insert = "INSERT INTO `securityupdate`(`Name`, `Mail`, `Type of buisness`, `Frontendlang`, `Backendlang`, `templates`, `Website details`) VALUES ('$name','$mail','$webtype','$frntend','$backend','$temp','$aboutweb')";
        $run = mysqli_query($con, $insert);

        if ($run == true) {
?>
<script>
    alert('Your data reached to the serever ! Still you can take appointment.');
    window.location="/project22/services/sus.php";
</script>

<?php
        } else {

?>
       <script>
        alert('Something Went Wrong!');
       </script>
        <?php
        }
    } else {

  ?>
<script>alert('You Alrady Applied The Web Update Form! You can update it on services page!');
window.location="sus.php";</script>
  <?php
    }
}
   else{
   ?>

 
      <script>
        alert('Fill all required Fields!');
        window.location="/project22/services/susform.php";
    </script>
 
<?php
   }

?>