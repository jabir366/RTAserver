<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$jjson=array();
//$json=array();
// $num=array("aaaa"=>"tysssp");
// $msg=array("message"=>"Password changed successfully");
// $json["registration"][]=$msg;
// $json["type"][]=array("tp"=>"1");
// echo json_encode($json);
session_start();
 $connect = mysqli_connect("localhost", "root", "jabir123", "rtanalyzer");
// if($connect) echo 'success';
echo 'session id:'.session_id();
$_SESSION['username']='elmy';
   //$sql2="INSERT INTO `journey_details`(`id`, `user_id`, `s_date`, `s_time`, `route_id`, `source`, `destination`, `duration`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])";
  // $sql2="INSERT INTO `journey_details`(`user_id`,`s_date`, `s_time`, `route_id`, `source`, `destination`,`duration`) VALUES ('3','2018-4-9','4:20','3','kozhikode','trivandrum','3')";
  // $sql="INSERT INTO `journey_details`(`user_id`,`s_date`, `s_time`, `route_id`, `source`, `destination`,`duration`) VALUES ('$id','$start_date','$start_time','$selected_route','$source','$destination',$duration')";
   //:"source  kozhikode  destination:trivandrum  route4 startdate:2018-4-9 starttime:4:20  duration9"
  // echo 'username:'.$uname."<br/>";
   
   //echo $row;
   header("location:new.php");
   //$res=mysqli_query($connect,$sql);
  // if($res) echo 'success';