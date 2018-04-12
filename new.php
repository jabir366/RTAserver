<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
 $connect = mysqli_connect("localhost", "root", "jabir123", "rtanalyzer");
$uname=$_SESSION['username'];
echo $uname;
$uname=$_SESSION['username'];
   $qry="select id from users where username='$uname'";
   $result= mysqli_query($connect, $qry);
   // $result= mysqli_query($connect, $sql2);
  // $row="";
   while($r=mysqli_fetch_array($result)){
       $row= $r[0];
   }
   echo 'row='.$row;