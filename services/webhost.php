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
        .container{
            display:flex;
            justify-content:center;
            height: 500px;
            align-items:center;
 padding:1pc;
background-color:#F8CBA6;
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
        .right{
            padding:1pc;
          
        }
     .left{
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight:300;    
    }
  #boxshad{
    box-shadow:50px 47px 1px yellow;
  }
  .plancon{
    margin:1pc;
  }
.economy{
    border:1px solid gray;
   display:flex;
   flex-direction:column;
   padding: 1pc;  
   font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
#sale{
    background-color:lightgreen;
}
.delux{
    border:1px solid gray;
   display:flex;
   flex-direction:column;
   padding: 1pc; 
   font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.ultimate{
    border:1px solid gray;
   display:flex;
   flex-direction:column;
   padding: 1pc; 
   font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.pcon{
    display:flex;
}
#hostfe{
    display:flex;
    justify-content:center;
    align-items:center;
    margin-top:3pc;
    margin-bottom:3pc;
}
.aboutus{
    
    background-color: black;
    color: aliceblue;
    height: 119px;
    width: fill;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
    </style>
</head>
<body>
    <div class="mcon">
         <div class="container">
             <div class="left">
                <h3>DuoWebizz Web Hosting</h4>
                <h1>Web hosting with a free domain.</h1><br>
                <h4>Plans as low as</h4>
                <h1>₹ 149.00/mo</h1><br>
                <a href="https://buy.stripe.com/28oeVY5FE3rngz63cc"> <button class="btns" href="">Buy Now</button></a><br> <br>
                <h4>Free domain for the 1st year.*</h4>
             </div>
             <div class="right">
                <img src="/project22/imgs/hostinfo.png" alt="" id="boxshad">
             </div>
         </div>
    </div>

    <div class="plancon">
        <div class="pcon">
            <div class="economy">
                  <h1>Economy</h1><br>
                  <h3>Includes a <a href=""> free domain, SSL and email </a>to match (with 12 mo. plan).</h3> <br>
                  <h4>As low as</h4>
                  <h1>₹ 149.00 /mo</h1><br>
                  <h3 id="sale">On sale - Save 66%</h3> <br>

                        <h4>₹ 449.00/mo when you renew</h4> <br>

                     <a href="https://buy.stripe.com/28oeVY5FE3rngz63cc">   <button class="btns">Buy Now</button></a><br><br>
                     <img src="/project22/imgs/economyimg.png" alt="">
            </div>
            <div class="delux">
         
                <h1>Deluxe</h1><br>
               
                  <h3>All features of Economy, plus <a href=""> 10 sites and 50 GB </a> storage.</h3> <br>
                  <h4>As low as</h4>
                  <h1>₹ 429.00 /mo</h1><br>
                  <h3 id="sale">On sale - Save 28%</h3> <br>

                        <h4>₹ 599.00/mo when you renew</h4> <br>

                      <a href="https://buy.stripe.com/28oaFI3xw4vr3MkfZ1">  <button class="btns">Buy Now</button></a><br><br>
                     <img src="/project22/imgs/deluxeimg.png" alt="">
            </div>
            <div class="ultimate">
            <h1>Ultimate</h1><br>
                  <h3>For high-traffic sites. Get <a href=""> 2x the CPU </a>for more power— and free SSL.</h3> <br>
                  <h4>As low as</h4>
                  <h1>₹ 699.00 /mo</h1><br>
                  <h3 id="sale">On sale - Save 30%</h3>  <br>

                        <h4>₹ 999.00/mo when you renew</h4> <br>

                      <a href="https://buy.stripe.com/cN2cNQ1po1jfciQ4gk">  <button class="btns">Buy Now</button></a><br><br>
                     <img src="/project22/imgs/ultimateimg.png" alt="">
            </div>
        </div>
    </div>

    <div id="hostfe">
        <img src="/project22/imgs/hostingfeture.png" alt="">
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