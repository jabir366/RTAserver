<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Traffic Details</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class ="header" align = "center">
            <h1>Realtime Trafic Analyzer</h1>
            <h3>Traffic Details</h3>
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
        <br>
           <div class="container"id ="centered" style="width:100%;" >
            <div id ="centered" style="float:right; width:80%;">
                <center>
         
        <?php
        // put your code here
        $con= mysqli_connect("localhost","root","santhosh","rtanalyzer");
        
       // if($con) echo working;
        if(mysqli_errno($con)) 
            echo 'error';
        
        $result = mysqli_query($con, "SELECT * from `journey_details`");
        echo "<table border = '1'>
            <tr>
            <th>ID </th>
            <th>user_id</th>
            <th> Date </th>
                <th> Time </th>
                <th> Route ID </th>
                <th> Source </th>
                <th> Destination </th>
                <th> Duration </th>
               
            </tr>";
        
        while($row = mysqli_fetch_array($result))
        {
           echo"<tr>";
           echo "<td>".$row['id']."</td>";
           echo "<td>".$row['user_id']."</td>";
           echo "<td>".$row['s_date']."</td>";
           echo "<td>".$row['s_time']."</td>";
           echo "<td>".$row['route_id']."</td>";
           echo "<td>".$row['source']."</td>";
           echo "<td>".$row['destination']."</td>";
           echo "<td>".$row['duration']."</td>";
           
           echo "</tr>";
        }
            
        echo "</table>";
        mysqli_close($con);
        ?>
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
                    
                    <li><a href = "Home.php"accesskey="2">Home</a></li>
                    <br>
                    <li><a href="activeusers.php"accesskey="1">Active Users</a></li>
                    <br>
                    
                    <li><a href = "routes.php"accesskey="3">Routes</a></li>
                    <br>
                    <li><a href = "aboutus.php"accesskey="5">About US</a></li>
                    
                    <br>
                    <br>
                    
                    
                </ul>
                
   
    
    </div>
    </div>
        
        <div id = "footer">
        <ul>
            <marquee direction ="left">
                <br>
                <br>
                <h5>BEAT THE JAM!</h5>
            </marquee>
        </ul>
        </div>
        <?php
        // put your code here
        
        ?>
    </body>
</html>
