<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$con= mysqli_connect("localhost","root","jabir123","rtanalyzer");
        
       // if($con) echo working;
        if(mysqli_errno($con)) 
            echo 'error';
        
        $res = mysqli_query($con, "SELECT * from `active_journey`");
          
        while($row1 = mysqli_fetch_array($res))
        {
            $routeid = $row1['route_id'];
            $res2 = mysqli_query($con, "SELECT  active_journey.`route_id`, journey_details.`user_id`, `s_date`, `s_time`,`source`, `destination`, `duration`,`roi_count`,`avg_count` ,`max_vcount` FROM `journey_details` ,`active_journey`,`route`,`users` WHERE journey_details.route_id = active_journey.route_id AND active_journey.route_id = route.route_id AND journey_details.user_id = users.id AND journey_details.route_id = '$routeid' and `active_journey`.status='active'");

            while($row2 = mysqli_fetch_array($res2))
            {
          
             $roicount = $row2['roi_count'];
             $bbcount = $row2['avg_count'];
             $maxcount = $row2['max_vcount'];
             $userid = $row2['user_id'];
             $date = $row2['s_date'];
            // $status = "no";
        if (($bbcount > (.8 * $maxcount)) && ($roicount < ($bbcount/4)) )
             {
               //  echo "Traffic Block for ";
               //  echo " User ID ";
              //   echo $userid;
               //  $status = "yes";
                 
                 mysqli_query($con," INSERT INTO `block_record`( `user_id`, `date`,`status`) VALUES ('$userid','$date','active')");
              }
            }
        }
       // $s= mysqli_query($con, "update active_journey set status='inactive' where status='active'");
        //if($s) echo 'updated';
        mysqli_close($con);
        ?>
