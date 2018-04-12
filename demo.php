<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        $con= mysqli_connect("localhost","root","santhosh","rtanalyzer");

        echo 'haiii';
       
        if(mysqli_errno($con)) 
            echo 'error';
                 $qry="SELECT * FROM `login` WHERE `uname` ='admin' and `password` ='admin'";
       
        $result= mysqli_query($con,$qry);
        $rows = mysqli_num_rows($result);
        if($rows>0)
        {
            
            echo 'success';
            
        }
        
?>

