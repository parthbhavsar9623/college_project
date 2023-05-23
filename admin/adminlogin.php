<?php
$con=mysqli_connect("localhost","root","","duowebizz");
$adminid=$_POST['adminid'];
$adminpassword=$_POST['adminpassword'];
session_start();

if($adminid !="" && $adminpassword !=""){
    $sql="SELECT * FROM `admin` WHERE ID='$adminid' AND Password='$adminpassword'";
    $result=mysqli_query($con,$sql);
      $fatch=mysqli_fetch_assoc($result);

      $num=mysqli_num_rows($result);

      if($num == 1){
        $_SESSION['adminid']=$adminid;
        $_SESSION['Name']=$fatch['Name'];
            ?>
<script>
                  alert("Login Sucsses!");

               window.location="/project22/admin/admin.php";
              
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