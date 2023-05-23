<?php

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
    background-color: #F8CBA6;
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
    display:flex;
    background-color: #F8CBA6;
    height: 100px;
    width: 100vw;
    display: flex;
    
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
           <IMG src="/project22/icons/secuweb.png"></IMG> <h2 align="center">YOUR WEBSITE IS ON RIGHT PATH TO THE SECURITIES...FILL ALL DETAILS</h2>
             </div>
                 

            <div id="formdiv">
                <form action="websecuserver.php" method="post">
                    <div>
                        Type of your website :
        <input type = "radio" name="webtype" value="For buisness" checked>  Buisness
        <input type ="radio" name="webtype" value="For Blogs">Blogs
        <input type="radio" name="webtype" value="Other" id=""> Other
                      </div> <br>
                      <div>
                      Front-end languages of your website : <input type="text" name="frntend" id="txtbox"  >
                        </div>  <br>
                      
                      <div>
                      Back-end languages of your website  : <input type="text" name="backend" id="txtbox">
                      </div>
        <br>
          <div>
            
          Your website based on templates?
          <input type = "radio" name="temp" value="Yes" checked>  Yes
        <input type ="radio" name="temp" value="No">No
          </div><br>
          <div>
          Tell about your website in details:
          <textarea name="aboutweb" id="txtbox" cols="50" rows="10"></textarea>
          </div><br>
          <div>
          <input type="submit" value="SEND" class="btns">
          <input type="reset" value="RESET" class="btns">
        </div>       
        </form>
            </div>
          
     </main>
</body>
</html>
<?php
session_start();
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