<?php
 session_start();
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
.list{
    margin-top: 2pc;
}

.container333{
    background-color: white;
    height: auto;
    width: 1100px;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    margin-left: 14PC;
   align-items: center;

}
.aboutus{
    margin-left: 200px;
    margin-top: 1pc;
    background-color: black;
    color: aliceblue;
    height: 119px;
    width: 1149px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.had{
    margin-top: 2pc;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    height: 130px;
    width: 1024px;
    padding: 1pc;
    border-radius: 5px;
    
    
}
p{
    margin-top: 2pc;
 
    font-size: 1.3pc;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
h1{
    display: flex;
    margin-bottom:2pc;
}
#f{
    color: white;
 padding: .5PC;
    background-color:black;
 
    border: 2px solid black;
}
#s{

   
   color: black;
   font-weight: 400;
   padding: .5pc;

   border: 2px solid black;
   background-color: #F8CBA6; 
}
.lines{
    display: flex;
    margin-top: 10px;
}
.line{
    display: flex;
    margin-left: 5px;
    justify-content: center;
    font-weight: 600;
    align-items: center;
    font-size: 1.3pc;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}
.linecon{
    display: flex;
    margin-bottom:5pc;
    margin-top: 8pc;
    

}
#webdevimg{
    margin-left: 2pc;
    margin-right: 2pc;
}
.left{
    width: 360px;
}
a{
    text-decoration:none;
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
h1{
    margin-top:2pc;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight:600;
}
.boxcon{
    display:flex;
    justify-content: center;
    align-items: center;
    margin-top: 2pc;
    margin-bottom:5pc;
}
.txt{
    margin-top:1pc;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

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
                
                <li >
                <a href="/project22/index.html"><img src="/project22/icons/house-fill.svg" alt="" srcset="">&nbsp; Home</a>
                </li>
                <li>
                  <a href="/project22/about.html">  <img src="/project22/icons/building.svg" alt="" srcset="">&nbsp; About</a>
                </li>
                <li id="dash">
                    <a href="/project22/services/services.php"><img src="/project22/icons/reception-4.svg" alt="" srcset="">&nbsp; Services</a>
                </li>
                <li>
                   <a href="/project22/contact.html"> <img src="/project22/icons/person-lines-fill.svg" alt="" srcset="">&nbsp; Contact</a>
                </li>
                <li>
                  <a href="/project22/community.html"> <img src="/project22/icons/people-fill.svg" alt="" srcset="">&nbsp; Community</a>
                </li><br>
              
            </div>
        </div>
        <div>

            <div class="container333">
                <div class="had">
                    <h1><div id="f"> Web</div> <div id="s"> Development</div></h1>
                    <p>"The intention of Web services is to pave the way for vision fulfillment of collaborative commerce by removing constraints to business imposed by IT in its present form .."</p>
                </div>
                
                <div class="linecon">
                    <img src="/project22/icons/webdevimg.png" alt="" id="webdevimg">
                    <div class="left">
                        <div class="lines">
                            <div class="imglogo"> <img src="/project22/icons/tick.png" alt=""></div> <div class="line">Web application and Website Developement</div>
                        </div>
                        <div class="lines">
                            <div class="imglogo"> <img src="/project22/icons/tick.png" alt=""></div> <div class="line">Social networking solutions</div>
                        </div>
                        <div class="lines">
                            <div class="imglogo"> <img src="/project22/icons/tick.png" alt=""></div> <div class="line">Custom CMS development and implementation</div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="lines">
                <div class="imglogo"> <img src="/project22/icons/tick.png" alt=""></div> <div class="line">Web-based enterprise portals</div>
            </div>
            <div class="lines">
                <div class="imglogo"> <img src="/project22/icons/tick.png" alt=""></div> <div class="line">E-commerce (web-shop) website development</div>
            </div>
            </div>
        </div>

         <h1>Let's Build your Website!</h1>
        <div class="boxcon">
        <a href="oops.html">
            <div class="box"><div class="logo"><img src="/project22/imgs/chatbot.png" alt=""></div>
               <div class="txt">CHAT WITH BOT</div></div>
            </a>

            <a href="oops.html">
            <div class="box"><div class="logo"><img src="/project22/imgs/callcenter.png" alt=""></div>
               <div class="txt">TALK WITH AGENT</div></div>
            </a>

            <a href="developform.php">
            <div class="box"><div class="logo"><img src="/project22/imgs/summaryreport.png" alt=""></div>
               <div class="txt">DEVELOPE VIA FORM</div></div>
            </a>
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