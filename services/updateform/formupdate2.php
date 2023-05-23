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
   
    

        $insert = "UPDATE `securityupdate` SET `Name`='$name',`Mail`='$mail',`Type of buisness`='$webtype',`Frontendlang`='$frntend',`Backendlang`='$backend',`templates`='$temp',`Website details`='$aboutweb' WHERE Mail= '$mail'";
        $run = mysqli_query($con, $insert);

        if ($run == true) {
?>
<script>
    alert('The Changes are sucssesfully Saved to your form!');
    window.location="/project22/services/services.php";
</script>

<?php
        } else {

?>
       <script>
        alert('Something Went Wrong!');
       </script>
        <?php
        }
    }
   else{
   ?>

 
      <script>
        alert('Fill all required Fields!');
        window.location="/project22/services/updateform/websecueditform.php";
    </script>
 
<?php
   }

?>