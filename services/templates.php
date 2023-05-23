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
   
    
        h2{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 600;
            margin: 2pc;
            color: #F8CBA6;
        }
        .tempimgs{
            height: 190px;
            width: 240px;
        }
        .templatescontainer{
            background-color: black;
            padding: 2pc;
            margin: 1pc;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .imgcontainer{
            display: flex;
            justify-content: center;
            
        }
        .imgcontainer img{
            margin-left: 1pc;
            border-radius: 10px;
            border: 2px solid black;
        }
        .imgcontainer img:hover{
            border: 2px solid #F8CBA6;
            transition: .5s;
            cursor: pointer;
    
        }
        .had{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 650;
            margin: 1pc; 
            color: #F8CBA6;
        }
        .aboutus{

    background-color: black;
    color: aliceblue;
    height: 119px;
    width: fit;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.navbar li{
    list-style: none;
 margin-left: 3pc;
 font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
 font-weight: 500;
}
.navbar li:hover{
    color: white ;
    cursor:pointer;
    transition: .6s;
}
.navbar{
    display: flex;
   justify-content: center;
   align-items: center;
    margin: 1pc;
    padding: 1pc;
    background-color: black;
    border-radius: 10px;
}
.navbar a{
    text-decoration: none;
    color:#F8CBA6;
}
.downcon{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.btns{
    margin-top: .5pc;
    background-color: #F8CBA6;
    padding: .5pc;
    border-radius: 10px;
    border: 2px solid black;
}
.btns:hover{
    background-color: black;
    color: aliceblue;
    border: 2px solid white;
    cursor: pointer;
    transition: .6s;
}
h1{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 84.3pc;
    height: 7pc;
    margin-top:2pc;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight:600;
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
body{
    background-color: #7d94a9;
}

header{
    background-color:#323030;
    padding:1pc;
}

    </style>
</head>
<body>
    
     
    <header><h1><div id="f"> Website</div> <div id="s"> Templates</div></h1>
<div class="navbar"> 
    <a href="/project22/index.html"><li>Home</li></a>
<a href="/project22/about.html"><li>About</li></a>
    <a href="/project22/services/services.php"><li>Services</li></a>
    <a href="/project22/contact.html"><li>Contact</li></a>
    <a href="/project22/community.html"><li>Community</li></a>
</div>
</header>
     
    <div class="templatescontainer">
        <div class="container">
            <div class="had">Themes</div>
            <div class="imgcontainer">
              <div class="downcon">  
               <a href="https://templatemo.com/live/templatemo_583_festava_live"> <img src="/project22/imgs/temp/templet.jpg" alt="" class="tempimgs"></a>
               <a href="https://templatemo.com/download/templatemo_583_festava_live">  <button  class="btns">Download</button></a>
               </div>
               <div class="downcon">
                <a href="https://templatemo.com/live/templatemo_578_first_portfolio"><img src="/project22/imgs/temp/templet1.jpg" alt="" class="tempimgs"></a>
                <a href="https://templatemo.com/download/templatemo_578_first_portfolio">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://templatemo.com/live/templatemo_579_cyborg_gaming"><img src="/project22/imgs/temp/templet2.jpg" alt="" class="tempimgs"></a>
                <a href="https://templatemo.com/download/templatemo_579_cyborg_gaming">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://templatemo.com/live/templatemo_582_tale_seo_agency"><img src="/project22/imgs/temp/templet3.jpg" alt="" class="tempimgs"></a>
                <a href="https://templatemo.com/download/templatemo_582_tale_seo_agency">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://www.tooplate.com/live/2129_crispy_kitchen"><img src="/project22/imgs/temp/templet4.jpg" alt="" class="tempimgs"></a>
          <a href="https://www.tooplate.com/download/2129_crispy_kitchen">  <button  class="btns">Download</button></a>
          </div>    
        </div>
        </div>
    </div>
  
    <div class="templatescontainer">
        <div class="container">
            <div class="had">Themes</div>
            <div class="imgcontainer">
              <div class="downcon">  
               <a href="https://www.tooplate.com/live/2132_clean_work"> <img src="/project22/imgs/temp/templet5.jpg" alt="" class="tempimgs"></a>
               <a href="https://www.tooplate.com/download/2132_clean_work">  <button  class="btns">Download</button></a>
               </div>
               <div class="downcon">
                <a href="https://www.tooplate.com/live/2128_tween_agency"><img src="/project22/imgs/temp/templet6.jpg" alt="" class="tempimgs"></a>
                <a href="https://www.tooplate.com/download/2128_tween_agency">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://www.tooplate.com/live/2127_little_fashion"><img src="/project22/imgs/temp/templet7.jpg" alt="" class="tempimgs"></a>
                <a href="https://www.tooplate.com/download/2127_little_fashion">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://www.tooplate.com/live/2125_artxibition"><img src="/project22/imgs/temp/templet8.jpg" alt="" class="tempimgs"></a>
                <a href="https://www.tooplate.com/download/2125_artxibition">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://www.tooplate.com/live/2124_vertex"><img src="/project22/imgs/temp/templet9.jpg" alt="" class="tempimgs"></a>
          <a href="https://www.tooplate.com/download/2124_vertex">  <button  class="btns">Download</button></a>
          </div>    
        </div>
        </div>
    </div>
  
  

    <div class="templatescontainer">
        <div class="container">
            <div class="had">Themes</div>
            <div class="imgcontainer">
              <div class="downcon">  
               <a href="https://www.tooplate.com/live/2092_shelf"> <img src="/project22/imgs/temp/templet.jpg" alt="" class="tempimgs"></a>
               <a href="https://www.tooplate.com/download/2092_shelf">  <button  class="btns">Download</button></a>
               </div>
               <div class="downcon">
                <a href="https://www.tooplate.com/live/2093_flight"><img src="/project22/imgs/temp/templet1.jpg" alt="" class="tempimgs"></a>
                <a href="https://www.tooplate.com/download/2093_flight">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://www.tooplate.com/live/2097_pop"><img src="/project22/imgs/temp/templet2.jpg" alt="" class="tempimgs"></a>
                <a href="https://www.tooplate.com/download/2097_pop">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://templatemo.com/live/templatemo_582_tale_seo_agency"><img src="/project22/imgs/temp/templet3.jpg" alt="" class="tempimgs"></a>
                <a href="https://templatemo.com/download/templatemo_582_tale_seo_agency">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://www.tooplate.com/live/2129_crispy_kitchen"><img src="/project22/imgs/temp/templet4.jpg" alt="" class="tempimgs"></a>
          <a href="https://www.tooplate.com/download/2129_crispy_kitchen">  <button  class="btns">Download</button></a>
          </div>    
        </div>
        </div>
    </div>
  
  

    <div class="templatescontainer">
        <div class="container">
            <div class="had">Themes</div>
            <div class="imgcontainer">
              <div class="downcon">  
               <a href="https://www.tooplate.com/live/2132_clean_work"> <img src="/project22/imgs/temp/templet5.jpg" alt="" class="tempimgs"></a>
               <a href="https://www.tooplate.com/download/2132_clean_work">  <button  class="btns">Download</button></a>
               </div>
               <div class="downcon">
                <a href="https://www.tooplate.com/live/2128_tween_agency"><img src="/project22/imgs/temp/templet6.jpg" alt="" class="tempimgs"></a>
                <a href="https://www.tooplate.com/download/2128_tween_agency">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://www.tooplate.com/live/2127_little_fashion"><img src="/project22/imgs/temp/templet7.jpg" alt="" class="tempimgs"></a>
                <a href="https://www.tooplate.com/download/2127_little_fashion">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://www.tooplate.com/live/2125_artxibition"><img src="/project22/imgs/temp/templet8.jpg" alt="" class="tempimgs"></a>
                <a href="https://www.tooplate.com/download/2125_artxibition">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://www.tooplate.com/live/2124_vertex"><img src="/project22/imgs/temp/templet9.jpg" alt="" class="tempimgs"></a>
          <a href="https://www.tooplate.com/download/2124_vertex">  <button  class="btns">Download</button></a>
          </div>    
        </div>
        </div>
    </div>
  
  

    <div class="templatescontainer">
        <div class="container">
            <div class="had">Themes</div>
            <div class="imgcontainer">
              <div class="downcon">  
               <a href="https://templatemo.com/live/templatemo_583_festava_live"> <img src="/project22/imgs/temp/templet.jpg" alt="" class="tempimgs"></a>
               <a href="https://templatemo.com/download/templatemo_583_festava_live">  <button  class="btns">Download</button></a>
               </div>
               <div class="downcon">
                <a href="https://templatemo.com/live/templatemo_578_first_portfolio"><img src="/project22/imgs/temp/templet1.jpg" alt="" class="tempimgs"></a>
                <a href="https://templatemo.com/download/templatemo_578_first_portfolio">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://templatemo.com/live/templatemo_579_cyborg_gaming"><img src="/project22/imgs/temp/templet2.jpg" alt="" class="tempimgs"></a>
                <a href="https://templatemo.com/download/templatemo_579_cyborg_gaming">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://templatemo.com/live/templatemo_582_tale_seo_agency"><img src="/project22/imgs/temp/templet3.jpg" alt="" class="tempimgs"></a>
                <a href="https://templatemo.com/download/templatemo_582_tale_seo_agency">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://www.tooplate.com/live/2129_crispy_kitchen"><img src="/project22/imgs/temp/templet4.jpg" alt="" class="tempimgs"></a>
          <a href="https://www.tooplate.com/download/2129_crispy_kitchen">  <button  class="btns">Download</button></a>
          </div>    
        </div>
        </div>
    </div>
  
  
    
    <div class="templatescontainer">
        <div class="container">
            <div class="had">Themes</div>
            <div class="imgcontainer">
              <div class="downcon">  
               <a href="https://templatemo.com/live/templatemo_583_festava_live"> <img src="/project22/imgs/temp/templet.jpg" alt="" class="tempimgs"></a>
               <a href="https://templatemo.com/download/templatemo_583_festava_live">  <button  class="btns">Download</button></a>
               </div>
               <div class="downcon">
                <a href="https://templatemo.com/live/templatemo_578_first_portfolio"><img src="/project22/imgs/temp/templet1.jpg" alt="" class="tempimgs"></a>
                <a href="https://templatemo.com/download/templatemo_578_first_portfolio">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://templatemo.com/live/templatemo_579_cyborg_gaming"><img src="/project22/imgs/temp/templet2.jpg" alt="" class="tempimgs"></a>
                <a href="https://templatemo.com/download/templatemo_579_cyborg_gaming">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://templatemo.com/live/templatemo_582_tale_seo_agency"><img src="/project22/imgs/temp/templet3.jpg" alt="" class="tempimgs"></a>
                <a href="https://templatemo.com/download/templatemo_582_tale_seo_agency">  <button  class="btns">Download</button></a>
                </div>
                <div class="downcon">
                <a href="https://www.tooplate.com/live/2129_crispy_kitchen"><img src="/project22/imgs/temp/templet4.jpg" alt="" class="tempimgs"></a>
          <a href="https://www.tooplate.com/download/2129_crispy_kitchen">  <button  class="btns">Download</button></a>
          </div>    
        </div>
        </div>
    </div>
  
  <footer>
  <div class="aboutus">
                &copy;2022 DUOWEBIZZ. All rights reserved.&nbsp; 
             This Web application has a best view in 1366*768 Scale.
            </div>
  </footer>
  
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