<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>About US</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div class ="header" align = "center">
            <h1>Realtime Trafic Analyzer</h1>
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
<div align = "left">
            <img src="aboutus.png" width ="140" height="140" />
        </div>
<br>
        <br>
        <br> 
        <div class="container"id ="centered" style="width:100%;" >
            <div id ="centered" style="float:right; width:80%;">
        
            <center>
                <img src="jam3.jpeg" alt="Avatar" class="image">
                <br>
                <br>
                <br>
                <br>
            </center>
            
</div>
        </div>
        <div id ="centered" style="background-color: burlywood; width:264px;float:left; width:20%;">
        <br>
         
        <ul class = "nav">
                    
                    <br>
                    
                    <br> 
                    <br>
                    <li><a href = "Home.php" accesskey="1">Home</a></li>
                    <br>
                    <li><a href="activeusers.php"accesskey="2">Active Users</a></li>
                    <br>
                    <li><a href = "trafficdetails.php"accesskey="3">Traffic Details</a></li>
                    <br>
                    <li><a href = "routes.php"accesskey="4">Routes</a></li>
                    
                    
                     <br>
                    <br> 
                    
                </ul>
                <br>
   
    
    </div>
        
       
        <?php
        // put your code here
        
        
        ?>
        
        <div style="font-style: italic" style = "font-family:courier" align = "center">
            <center>
            <br>
            <p class="description" align = "center">
                <br>
                <br>
                <br>
                <?php echo "Realtime Traffic Analyzer is a traffic monitoring and analysis tool. It provides real-time traffic jam estimates and traffic forecasts using cameras. Use it to plan your trip across your border! "?><br> <br>
               <?php echo"Main Features:"?><br><br>
                   <?php echo" * Real-time estimates of traffic"?><br>
<?php echo" * 24 Hour forecast of traffic trends using historical data"?><br>
    <?php echo" *  Real-time camera images obtained from government cctv surveillance"?><br><br>

<?php echo"These features allow you plan your trip across the border in advance, choosing to avoid the projected peak hours."?></p>
        </center>
        </div>
        
            <br>
            
        
            <div align = "right">
            <ul class="vcard">
                <?php echo "Real-time Traffic analyzer"?><br>
                <?php echo "CET Trivandrum"?><br>
                <?php echo "9995977089"?><br>
                <a href="Home.php">www.rtanalyzer.com</a>
            </ul>

        </div>

        
         <div id = "footer" >
        <ul>
            <marquee direction ="left">
                <h5>BEAT THE JAM!</h5>
            </marquee>
        </ul>
        </div>
    </body>
</html>
