<?php
 session_start();
 if($_SESSION['off1']==0){
  ?>
  <script>
    alert('You are not Supposed to be here...');
    window.location="/project22/services/services.php";
  </script>

<?php
 }
?>
<?php
$name=$_SESSION['username'];
$con=mysqli_connect("localhost","root","","duowebizz");
$sql="SELECT `Name`, `Mail`, `Website Type`, `Web Style`, `Buisness info`, `Web Fetures` FROM `webdevdetails` WHERE Mail = '$name'";
$result= mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
 $webtypeinfo=$row['Buisness info'];
 $websitedetails=$row['Web Fetures'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     *{
        margin: 0;
        padding: 0
     }
     body{
        background-color:#8f8a81;
        width: 100vw;
     }
     h2{
     font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
     color: white;
     text-shadow: 3px 3px 15px gray;
     }
     main{
        display: flex;
        justify-content: center;
        align-items: center;
        height:100vh;
        flex-direction: column;
     }
      #formdiv{
        margin-top: 10px;
      }
      form{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        font-weight: 600;
        flex-direction: column;
        justify-content: center;
        align-items: center; 
        width: 800px;
        background-color: #F8CBA6;
        padding: 1pc;
        border-radius: 10px;
        border: 2px solid black;
        background-color: white;
    }
      #txtbox{

        border-radius: 10px;
        border: 3px solid #F8CBA6;
      }
      .btns{
    background-color:#F8CBA6;
    padding: .5pc;
    border-radius: 10px;
    border: 2px solid black;
}
.btns:hover{
    background-color: white;
    cursor: pointer;
    transition: .6s;
}
.hadcon{
    background-color: #F8CBA6;
    height: 100px;
    width: 100vw;
    display: flex;
   display:flex;
    justify-content: center;
    align-items: center;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

    </style>
</head>
<body>
     <main>
        <div class="hadcon">
          <img src="/project22/icons/webdev.png" alt="">&nbsp;
            <h2 align="center">Update/Edit your Web Development Form</h2>
             </div>
                 

            <div id="formdiv">
                <form action="formupdate1.php" method="post">
                    <div>
                        Website type :
        <input type = "radio" name="webtype" value="For buisness" checked> For buisness
        <input type ="radio" name="webtype" value="For Blogs"> For Blogs
        <input type="radio" name="webtype" value="Other" id=""> Other
                      </div> <br>
                      <div>
                          Website Style Preferance :
              <input type = "radio" name="webstyle" value="Stylish with Unique heavy designs" checked>Stylish with Unique heavy designs
              <input type ="radio" name="webstyle" value="Simple but aesthatic"> Simple but aesthatic
              
                        </div>  <br>
                      
                      <div>
                        Buisness/Blog/Other type's information :
                    <textarea name="webtypeinfo" id="txtbox" cols="50" rows="10" placeholder="Insert details about your buisness type..." ><?php  echo $webtypeinfo ?></textarea>
                      </div>
        <br>
          <div>
            
            Write about your all recomended fetures:

            <textarea name="websitedetails" id="txtbox" cols="50" rows="10" placeholder="Write a wish of your website fetures... "><?php  echo $websitedetails ?></textarea>
                 
          </div><br>
          <div>
          <input type="submit" value="UPDATE" class="btns">
          <input type="reset" value="RESET" class="btns">
        </div>       
        </form>
            </div>
          
     </main>
   
</body>
</html>
<?php
 $usermail=$_SESSION['username'];
 if($usermail == false){
    ?>
    <script>
        window.location="/project22/loginpage.html";
    </script>
        <?php
 }
?>
<script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
<script>
    function loadGoogleTranslate(){
        new google.translate.TranslateElement("google_element");
    }
</script>