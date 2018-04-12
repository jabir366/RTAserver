<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Active Users</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class ="header" align = "center">
            <h1>Realtime Trafic Analyzer</h1>
            <h3>Active Users</h3>
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
                     <?php
        // put your code here
        $con= mysqli_connect("localhost","root","santhosh","rtanalyzer");
        
       // if($con) echo working;
        if(mysqli_errno($con)) 
            echo 'error';
        
        $result = mysqli_query($con, "SELECT * from `users`");
        echo "<table border = '1'>
            <tr>
            <th>User ID </th>
            <th>username</th>
            <th> password </th>
                <th> Email </th>
                <th> Created time </th>
                <th> Updated time </th>
                <th> Name </th>
                <th> Mobile </th>
                <th> Status </th>
            </tr>";
        
        while($row = mysqli_fetch_array($result))
        {
           echo"<tr>";
           echo "<td>".$row['id']."</td>";
           echo "<td>".$row['username']."</td>";
           echo "<td>".$row['password']."</td>";
           echo "<td>".$row['email']."</td>";
           echo "<td>".$row['created_at']."</td>";
           echo "<td>".$row['updated_at']."</td>";
           echo "<td>".$row['name']."</td>";
           echo "<td>".$row['mobile']."</td>";
           echo "<td>".$row['status']."</td>";
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
                    
         
                    <li><a href="Home.php"accesskey="1">Home</a></li>
                    <br>
                    <li><a href = "trafficdetails.php"accesskey="2">Traffic Details</a></li>
                    <br>
                    <li><a href = "routes.php"accesskey="3">Routes</a></li>
                    <br>
                    <li><a href = "aboutus.php"accesskey="5">About US</a></li>
                    
                     
                    
                    
                </ul>
                
   
    
    </div>
    </div>
        <br>
        <br>
       
       
       
            <br>
            <br>
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
    </body>
</html>
