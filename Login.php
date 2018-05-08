<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
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

        <div id="main" align = "center">
<h2>Login Form</h2>
<div id="login" style="background-color: burlywood">

<br>
<br>
<br>
<br>
<br>
<form action="" method="post">
<table border="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label for = "username">Username</label>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type = "text" name = "username" id = "username"placeholder="username"/></td>
                    
                        </tr>
                        <tr>
                            <td><label for = "password">Password </label>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type = "password" name = "password" id = "password"placeholder="**********"/></td>
                            
                        </tr>
                        <tr>
                            
                            <td><br><input type = "submit" name="submit" id = "LOGIN" value = "LOGIN"/>&nbsp;&nbsp;&nbsp;</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><input type="reset" name = "reset" id = "CANCEL" value = "CANCEL"/>&nbsp;&nbsp;&nbsp;</td>
                        </tr>
</tbody>
                </table>
<span><?php echo $error; ?></span>
</form>
</div>
</div>
        <div id = "footer" style="background-color: cadetblue">
        <ul>
            <marquee direction ="left">
                <h5>BEAT THE JAM!</h5>
            </marquee>
        </ul>
        </div>
        <?php
        // put your code here
$con= mysqli_connect("localhost","root","jabir123","rtanalyzer");
        
       // if($con) echo working;
        if(mysqli_errno($con)) 
            echo 'error';
        if(isset($_POST['submit']))
        {
        
            $uname = $_POST['username'];
            $pword = $_POST['password'];
        
            $qry="SELECT * FROM `login` WHERE `uname` ='$uname' and `password` ='$pword'";
        
        $result= mysqli_query($con,$qry);
        $rows = mysqli_num_rows($result);
        if($rows == 1)
        {
            $_SESSION['username']=$uname;
            echo 'success';
            header("Location: Home.php");
        }
        
        else 
        {
	echo "<script type='text/javascript'>alert('INVALID USERNAME/PASSWORD')</script>";
        }
}
        ?>
    </body>
</html>
