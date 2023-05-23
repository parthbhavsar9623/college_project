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
}
#bannerimg{
    height: 482px;
    width: 100%;
}
body{
    background-color:#8f8a81;
    
  
}
.container{
    background-color: F8CBA6;
    width: 200px;
    height: 658px;
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
    margin-top: 2pc;
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
    background-color:#8f8a70;
    color: black;
}
main{
    display: flex;
    
}
.container2{
    display: flex;
    justify-content: center;
    background-color: aliceblue;
    align-items: center;
    height: 566px;
    width: 1100px;
    margin-left: 14pc;
    margin-bottom:1pc;
    border-radius: 10px;
    flex-direction: column; 
}
h2{
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
     color: white;
     text-shadow: 3px 3px 15px gray;
}
.hadcon{
    background-color: F8CBA6;
    height: 100px;
    width: 1065px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
}
.btns{
    background-color: F8CBA6;
    padding: .5pc;
    border-radius: 10px;
    border: 2px solid black;
}
.btns:hover{
    background-color: white;
    cursor: pointer;
    transition: .6s;
}
#img{
    height:426px;
    width: 1058px;
    margin-top:1pc;
    border-radius:10px
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
            <li>
                <a href="/project22/services/services.php"><img src="/project22/icons/reception-4.svg" alt="" srcset="">&nbsp; Services</a>
            </li>
            <li>
               <a href="/project22/contact.html"> <img src="/project22/icons/person-lines-fill.svg" alt="" srcset="">&nbsp; Contact</a>
            </li>
            <li id="dash">
              <a href="/project22/community.html"> <img src="/project22/icons/people-fill.svg" alt="" srcset="">&nbsp; Community</a>
            </li>

        </div>
    </div>

  
    <div class="container2">
        <div class="hadcon">
        <h2 align="center">YOUR DETAILS HAS BEEN SENT!</h2>
        <h2>WE CONTACT YOU SOON!</h2>
      <a href="/project22/services/services.php">  <button class="btns"> MORE SERVICES</button></a>
    </div>
      
   <img src="done.jpg" alt="" id="img">
    </div>
    <div class="aboutus">
        &copy;2022 DUOWEBIZZ. All rights reserved.&nbsp; 
     This Web application has a best view in 1366*768 Scale.
    </div>
</body>
</html>
<script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
<script>
    function loadGoogleTranslate(){
        new google.translate.TranslateElement("google_element");
    }
</script>