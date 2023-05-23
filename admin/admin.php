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
            background-color:white;
        }
        h1{
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            align-items: center;
            justify-content: center;
            display: flex;
        }
        header{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #F8CBA6;
            padding: 1pc;
        }
        .navbar{
            margin-top: 1pc;
        }
         ul{
            display: flex;
        }
         ul li{
            list-style: none;
            margin-left: 1pc;
        }
         ul li a{
            text-decoration: none;
            font-size: 1.1pc;
            color: black;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
      ul li a:hover{
            color: white;
            transition: .3s;
        }
        .f{
            display: flex;
            justify-content: center;
            align-items: center;
            border:2px solid black;
            background-color: black;
            color: white;
            padding: .5pc
        }
        .s{
            background-color: #F8CBA6;
            border: 2px solid black;
            padding: .5pc;
            color: black;
        }
        main{
            margin: 1pc;
            background-color: white;
            height: fit-content;
            border-radius:5px ;
        }
        .bar ul{
            display: flex;
            justify-content: center;
        
        }
        .bar{
            border: 1px solid black;
            background-color: #F8CBA6;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .bar ul li {
            padding: .6pc;
            
        }
        .bar ul li:hover{
            background-color: black;
            color: white;
            transition: .3s;
        }
        .maincontent{
            background-color: #F8CBA6;
            height: fit-content;
            border: 1px solid black;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .aboutus{
   
    background-color: black;
    color: aliceblue;
    height: 119px;
    width:fill;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
#dash{
    background-color: black;
    color: white;
}
#dash a{
    color: white;
} 
button{
    background-color: #F8CBA6;
    padding: .5pc;
    border-radius: 10px;
    border: 2px solid black;
    margin-top:1pc;
}
button:hover{
    background-color: white;
    cursor: pointer;
    transition: .6s;
}
table{
    border:2px solid black;
    padding:1pc;
    border-radius:10px;
    margin:2pc;
    background-color:white;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
th{
    background-color:white;
    border:2px solid black;
    
    padding:3px;
    border-radius:10px;

}
td{
    background-color:white;
    border:2px solid black;
    border-radius:10px;
    padding:3px;
}
.maincontent{
    display:flex;
    justify-content:center;
    align-items:center;
}
#dlt{
    display:flex;
    justify-content:center;
    align-items:center;
    background-color: #F8CBA6;
    padding: .5pc;
    border-radius: 10px;
    border: 2px solid black;
    margin-top:1pc;
}
#dlt:hover{
    background-color:red;
    color:white;
    cursor: pointer;
    transition: .6s;
}
#dlt a:hover{
    color: white;
}
a{
    text-decoration:none;
}
#dlt:hover{
    background-color:red;
    cursor: pointer;

    transition: .6s;
}
    </style>
</head>
<body>
    <header>
       
        <h1><div class="f">Admin</div> <div class="s">Control Panel</div></h1>
        <div class="navbar">
            <ul>
            <li><a href="/project22/index.html">Home</a></li>
                <li><a href="/project22/about.html">About</a></li>
                <li><a href="/project22/services/services.php">Services</a></li>
                <li><a href="/project22/contact.html">Contact</a></li>
                <li><a href="/project22/community.html">Community</a></li>
            </ul>
        </div>
       <a href="/project22/php/login/logout.php"> <button>LOGOUT</button></a>
    </header>
    <main>
     <div class="bar">
        <ul>
            <li id="dash"><a href="admin.php">Developer Requests</a></li>
            <li><a href="webdevelopmentrequest.php">Web Developement Requests </a></li>
            <li><a href="webupdaterequests.php">Web Updates Requests </a></li>
          
        </ul>
     </div>
     <div class="maincontent">
          <?php
               $con=mysqli_connect("localhost","root","","duowebizz");

               $sql="SELECT * FROM `devrequests`";
               $get=mysqli_query($con,$sql);

                $num=mysqli_num_rows($get);
            
                ?>
                <table >
                <tr>
                    <th>Id</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Gender</th><th>DOB</th><th>Work State</th><th>Field</th><th>Educational Quelification</th><th>Exeperince</th><th>Email</th><th>Mobile</th>
                <th>Delete</th>
                </tr>

                <?php
                if($num>0){
                    while($row=mysqli_fetch_assoc($get)){
                     
                    ?><tr>
                <?php     ?><td><?php echo $row['ID']?></td><td><?php echo $row['First Name']?></td>
                    <td><?php echo $row['Middle Name']?></td>
                    <td><?php echo $row['Last Name']?></td>
                    <td><?php echo $row['Gender']?></td>
                    <td><?php echo $row['DOB']?></td>
                    <td><?php echo $row['Work State']?></td>
                    <td><?php echo $row['Field']?></td>
                    <td><?php echo $row['Educationl Quelification']?></td>
                    <td><?php echo $row['Exeperiance']?></td>
                    <td><?php echo $row['E Mail']?></td>
                    <td><?php echo $row['Mobile']?></td>
                    <td> <a href="dlt.php?ID=<?php echo $row['ID'] ?>" > <button  id="dlt">Delete</button></a></td>
                </tr>
                <?php
                }
              
                }         
          ?></table>
     </div>
    </main>
    <footer>
        <div class="aboutus">
            &copy;2022 DUOWEBIZZ. All rights reserved.&nbsp; 
         This Web application has a best view in 1366*768 Scale.
        </div>
    </footer>
</body>
</html>
<?php
 $adminid=$_SESSION['adminid'];
 if($adminid == false){
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