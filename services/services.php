    <?php
    session_start();
    $mail = $_SESSION['username'];
    $con=mysqli_connect("localhost","root","","duowebizz");
    $sql = "SELECT * FROM `webdevdetails` WHERE Mail='$mail'";
    $result = mysqli_query($con, $sql);
    $fatch = mysqli_fetch_assoc($result);
  
    $num = mysqli_num_rows($result);
    if($num == 1){
      $_SESSION['webdevelopmentformstatus']= true;
     }
     else{
      $_SESSION['webdevelopmentformstatus']= false;
     }




     $sql = "SELECT * FROM `securityupdate` WHERE Mail='$mail'";
     $result = mysqli_query($con, $sql);
     $fatch = mysqli_fetch_assoc($result);
     $nums = mysqli_num_rows($result);
     if($nums == 1){
        $_SESSION['websecu']= true;
       }
       else{
        $_SESSION['websecu']= false;
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
        padding: 0;
    }
    .banner{

        margin-left: 11pc;
        background-color: #bfadd0;
    }
    #bannerimg{
        height: 482px;
        width: 100%;
    }
    body{
        background-color: #8f8a81;
        
    
    }
    .container{
        background-color: #F8CBA6;
        width: 200px;
        height: 662px;
        display: flex;
        align-items: center;
        flex-direction: column;
        position: fixed;
    }
    li{
        list-style: none;
        margin-top: 2pc;
        padding: .5pc;
        padding-left: 33px;
        margin-left: 48px;
        height: 27px;
        width: 111px;
        display: flex;
        align-items: center;
        border-bottom-left-radius: 70px;
        border-top-left-radius: 70px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    li:hover{
        background-color: aliceblue;
        color: black;
        cursor: pointer;
        transition:.6s;
    }
    li a{
        text-decoration: none;
        color: black;
    }
    .logo{
        display: flex;
        align-items: center;
        margin-top: 1.7pc;
    }
    .list{
        margin-top: 1.52pc;
    }

    #fn{
        color: aliceblue;
        font-size: 2pc;
    Font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    #sn{
        font-size: 2pc;
        Font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    #dash{
        background-color:#8f8a81;
        color: black;
    }

    #button{
        background-color: #F8CBA6;
        padding: .3pc;
        border-radius: 10px;
        border: 2px solid black;
        font-weight:600;
    }
    #button:hover{
        background-color: white;
        cursor: pointer;
        transition: .6s;
    }
    .container33{
        width: 1149px;
        height: 277px;
        margin-left: 12.5pc;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    
    }
    .detail{
        margin-left:1pc;
    }
    .name{
        font-size:1.4pc;
        font-weight:600;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }
    .logmail{
        font-weight:600;
        
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }
    .accountdetail{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .acimg{
        height: 106px;
        width: 106px;
        border-radius: 100px;
        
    }
    #acimg{
        height: 106px;
        width: 106px;
    
    }
    #container333{
        background-color: white;
    margin: 1pc;
    
        height: 524px;
        width: 1100px;
        border-radius: 10px;
        display: flex;
        margin-left: 14PC;
        flex-direction:column;
        align-items: center;
        justify-content:center;
    
    }
    .boxcon{
        display:flex;
        justify-content: center;
        align-items: center;
        margin-top: 2pc;
    }

    #flexthebox{
        display:flex;
    }
    #hadtxt{
        margin:1pc;
    }
    .box{
        display:flex;
        justify-content:center;
        align-items:center;
        height:230px;
        width:230px;
        background-color:#F8CBA6;
        color:white;
        margin-left:1pc;
        flex-direction: column;
        border-radius:10px;
        font-size: 1.3pc;
    }
    .box:hover{
        background-color: lightgreen;
        transition: .6s;
        cursor: pointer;
        color: black;
    }
    .box1{
        display:flex;
        justify-content:center;
        align-items:center;
        height:230px;
        width:230px;
        background-color:#F8CBA6;
        color:white;
        margin-left:1pc;
        flex-direction: column;
        border-radius:10px;
        font-size: 1.3pc;
    }
    .box1:hover{
        background-color: lightgreen;
        transition: .6s;
        cursor: pointer;
        color: black;
    }
    .box2{
        display:flex;
        justify-content:center;
        align-items:center;
        height:230px;
        width:230px;
        background-color:#F8CBA6;
        color:white;
        margin-left:1pc;
        flex-direction: column;
        border-radius:10px;
        font-size: 1.3pc;
    }
    .box2:hover{
        background-color: lightgreen;
        transition: .6s;
        cursor: pointer;
        color: black;
    }
    #lastbox{
        margin-right:1pc;
    }
    .logo{
        margin-bottom: 7px;
    }
    .serhad{
        font-size: 2pc;
        font-weight: 600;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        
    }
    .aboutus{
        margin-left: 200px;
        background-color: black;
        color: aliceblue;
        height: 119px;
        width: 1149px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .logoutbtn{
        margin-top:5px;
    }
    a{
        text-decoration:none;
    }
    #txt{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }
    .updateform{
      
        background-color: white;
    margin: 1pc;
    
        height: 524px;
        width: 1100px;
        border-radius: 10px;
        display: flex;
        margin-left: 14PC;
        flex-direction:column;
        align-items: center;
        justify-content:center;
    }
 
    <?php
 $_SESSION['off1']=1;
 $_SESSION['off2']=1;
    if($_SESSION['webdevelopmentformstatus'] == false){
        ?>
    .box1{
        display:none;
        <?php
        $_SESSION['off1']=0;
        ?>
    }
    <?php
    }


    if(  $_SESSION['websecu'] == false){
        ?>
.box2{
    display:none;
    <?php
        $_SESSION['off2']=0;
        ?>
}
        <?php
    }
    ?>
<?php
if($_SESSION['off1']==0 && $_SESSION['off2'] == 0){
    ?>
.updateform{
    display:none;
}
    <?php
}
?>
#editimg{
    height:45px;
    width:45px;
}
        </style>
    </head>
    <body>
    
    <div class="container">
        <div class="logo">
        <div id="fn">DUO</div>
        <div id="sn">WEBIZZ</div>
        </div>
        <div class="list">
        <li>
            <a href="/project22/index.html"><img src="/project22/icons/house-fill.svg" alt="" srcset="">&nbsp; Home</a>
        </li>
        <li >
            <a href="/project22/about.html"> <img src="/project22/icons/building.svg" alt="" srcset="">&nbsp; About</a>
        </li>
        <li id="dash">
            <a href="/project22/services/services.php"><img src="/project22/icons/reception-4.svg" alt="" srcset="">&nbsp; Services</a>
        </li>
        <li>
            <a href="/project22/contact.html"> <img src="/project22/icons/person-lines-fill.svg" alt="" srcset="">&nbsp; Contact</a>
        </li>
        <li>
            <a href="/project22/community.html"> <img src="/project22/icons/people-fill.svg" alt="" srcset="">&nbsp; Community</a>
        </li>
        </div>
    </div>
            <div class="container33">
                <div class="accountdetail">
                    <div class="acimg">
                    <img src="/project22/imgs/logper.png" alt="" id="acimg">
                    </div>
                    <div class="detail">
                                <div class="name">Welcome! <?php echo $_SESSION['name'];  ?></div>
                                <div class="logmail"> <?php echo $_SESSION['username'];  ?></div>
                                <div class="logoutbtn">
                                <a href="/project22/php/login/logout.php"><button id="button">LOGOUT</button></a>
                                </div>
                    </div>
                </div>
                </div>
                

                <div id="container333">
                    <div class="serhad">Available Services!</div>
                    <div class="boxcon">
                    <a href="webdevelopment.php">  <div class="box">
                    <div class="logo"><img src="/project22/icons/webdev.png" alt=""></div>
                <div  id="txt"> Web Developement</div>
                
                </div></a>

                <a href="templates.php">
                <div class="box">
                <div class="logo"> <img src="/project22/icons/template.png" alt=""></div><div id="txt"> Website Templates</div></div>
        
    </a>
    <a href="sus.php">
            <div class="box"><div class="logo"><img src="/project22/icons/secuweb.png" alt=""></div>
                <div id="txt"> Security Update for Sites</div></div>
    </a>
    <a href="webhost.php">
                <div class="box"><div class="logo"><img src="/project22/icons/webspace.png" alt=""></div>
                <div id="txt"> Server/Host Space</div></div>
    </a>
            </div>
            
                </div>


                <div class="updateform">
                    <div class="serhad">Edit/Update Forms You Alrady filled!</div>
                    <div class="boxcon">
          <a href="/project22/services/updateform/webdevelopmentupdateform.php">      <div class="box1">
                    <div>
                <img src="/project22/icons/webdev.png" alt="">&nbsp;<img src="/project22/imgs/edit.png" alt="" id="editimg">
                </div>Web Development Form
                </div></a>
                <a href="/project22/services/updateform/websecueditform.php">
                <div class="box2">
                    <div>                <img src="/project22/icons/secuweb.png" alt="">&nbsp;<img src="/project22/imgs/edit.png" alt="" id="editimg">
                    </div></a>
 Website Update form
                </div>
                </div>
            
                </div>

            

                <div class="aboutus">
                    &copy;2022 DUOWEBIZZ. All rights reserved.&nbsp;
                    This Web application has a best view in 1366*768 Scale.
                </div>
    </body>
    </html>
    <?php
    $usermail=$_SESSION['username'];
    if($usermail == false){
        $adminid=$_SESSION['adminid'];
        if($adminid == true){
            ?>
            <script>
                window.location="/project22/admin/admin.php";
            </script>
        }
                <?php
        }else{
        ?>
        
        <script>
            window.location="/project22/loginpage.html";
        </script><?php
    }

    }
    
    ?>


    <script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
    <script>
        function loadGoogleTranslate(){
            new google.translate.TranslateElement("google_element");
        }
    </script>