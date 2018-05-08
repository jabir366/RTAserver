<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .vertical-menu {
    width: 200px;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: black;
    color: white;
}
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}



</style>
    
        
</head>
    
    <body>
        <div class ="container">
        <header>
        
            <h1>Realtime Traffic Analyzer</h1>
            </header>
        </div>
        
        <div Align ="right">
            <table border="0">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <h6> <?php echo date("D M d,Y G:i a");?> </h6> </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
<br>
<br>
<br>
         &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
         &nbsp; <a href="Login.php"><img src="index.jpeg" width="50" height="50"  alt="Flower" align = "right"></a>
        <br>
        <br>
        <br> 
        <div class="container"id ="centered" style="width:100%;" >
            <div id ="centered" style="float:right; width:80%;">
        
            <center>
                <img src="jamgood_1.jpg" alt="Avatar" class="image">
            </center>
            
</div>
        </div>
        
          
        <div class="vertical-menu" id = "centered" style="width: 264px;float:left;width: 20%">
            <a href="Home.php" accesskey="1"class="active">Home</a>
            <a href="activeusers.php"accesskey="2">Active Users</a>
            <a href="trafficdetails.php"accesskey="3">Traffic Details</a>
            <a href="routes.php"accesskey="4">Routes</a>
            <a href="aboutus.php"accesskey="5">About US</a>
</div>
     
        <br>
        <br>
    
         
        <?php
        // put your code here
        
        ?>
        <div id = "footer">
            
        <ul>
            <marquee direction ="left">
                <br>
                <br>
                <h5>BEAT THE JAM!</h5>
            </marquee>
        </ul>
        </div>
    </body>
</html>
