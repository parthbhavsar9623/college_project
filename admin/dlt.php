<?php
$con=mysqli_connect("localhost","root","","duowebizz");

$id=$_GET['ID'];
                $sqldlt="DELETE FROM `devrequests` WHERE ID=$id";
                $result=mysqli_query($con,$sqldlt);
                if($result == true){
                    ?>
                        <script>
                            alert('Row Deleted!');
                            window.location="admin.php";
                        </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert('Something Went Wrong!');
                    </script><?php
                }

?>