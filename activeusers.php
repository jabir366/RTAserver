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
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: captiontext;
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


         &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
         &nbsp; <a href="Login.php"><img src="index.jpeg" width="50" height="50"  alt="Flower" align = "right"></a>
        <br>
        <br>
        <br>    
        <br>
        <br>
        <div class="container"id ="centered" style="width:100%;" >
            <div id ="centered" style="float:right; width:80%;">
                <center>
                     <?php
        // put your code here
        $con= mysqli_connect("localhost","root","jabir123","rtanalyzer");
        
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
     
  
        <div class="vertical-menu" id = "centered" style="width: 264px;float:left;width: 20%">
            <a href="Home.php" accesskey="1">Home</a>
            <a href="activeusers.php"accesskey="2"class="active">Active Users</a>
            <a href="trafficdetails.php"accesskey="3">Traffic Details</a>
            <a href="routes.php"accesskey="4">Routes</a>
            <a href="aboutus.php"accesskey="5">About US</a>
            <br>
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
