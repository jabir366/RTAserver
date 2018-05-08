<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $connect = mysqli_connect("localhost", "root", "jabir123", "rtanalyzer"); 
 $uname=$_POST['username'];
 $date=$_POST['date'];
 if(mysqli_errno($con)) 
            echo 'error';
 $qry="SELECT * FROM `journey_details` WHERE user_id=(SELECT id FROM users where username='jab') AND s_date='2018-04-20'";
 $res=mysqli_query($connect,$qry);
 $arr=array();
 if(mysqli_num_rows($res)>0)
     $arr["status"][]=array("sts"=>yes);
// echo 'rows present';
  
 while($row = mysqli_fetch_assoc($res)){
     $arr["data"][]=$row;
 }
 echo json_encode($arr);