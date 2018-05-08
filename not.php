<?php

   $con= mysqli_connect("localhost","root","jabir123","rtanalyzer");
        
        if($con) echo 'working';
  //      if(mysqli_errno($con)) 
          //  echo 'error';
    //    else 'connected';
//        $qryfull="SELECT active_journey.`route_id`, journey_details.`user_id`, `s_date`, `s_time`,`source`, `destination`, `duration`,`roi_count`,`avg_count` ,`max_vcount` FROM `journey_details` ,`active_journey`,`route`,`users` WHERE journey_details.route_id = active_journey.route_id AND active_journey.route_id = route.route_id AND journey_details.user_id = users.id AND journey_details.route_id in(1,2,3,4) and `active_journey`.status='active' and (active_journey.avg_count>(.8* route.max_vcount) and active_journey.roi_count<active_journey.avg_count/4)";
        $qryuserid="SELECT DISTINCT user_id FROM `journey_details` ,`active_journey`,`route`,`users` WHERE journey_details.route_id = active_journey.route_id AND active_journey.route_id = route.route_id AND journey_details.user_id = users.id AND journey_details.route_id in(1,2,3,4) and `active_journey`.status='active' and (active_journey.avg_count>(.8* route.max_vcount) and journey_details.status='active' and active_journey.roi_count<active_journey.avg_count/4)";
        $res= mysqli_query($con,$qryuserid) ;
        
        while($row1 = mysqli_fetch_array($res)){
                $s= mysqli_query($con, "update active_journey set status='inactive' where status='active'");
               if($s) echo 'active journey data set inactive';
                $s=mysqli_query($con," INSERT INTO `block_record`( `user_id`, `date`,`status`) VALUES ('$row1[0]',NOW(),'active')");
               if($s) echo 'block_ record updated';
               $s=mysqli_query($con,"update journey_details set status = 'active' where s_date not like DATE(NOW())");
        }