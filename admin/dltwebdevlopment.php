<?php
$con=mysqli_connect("localhost","root","","duowebizz");
$Mail=$_GET['ID'];
                $sql="DELETE FROM `webdevdetails` WHERE Mail=$Mail";
                $result=mysqli_query($con,$sql);
                if($result == true){
                    ?>
                        <script>
                            alert('Row Deleted!');
                            window.location="webdevelopmentrequest.php";
                        </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                        alert('Something Went Wrong!');
                    </script>
                    <?php
                }

?>