 <?php
        $connect = mysqli_connect("localhost", "root", "jabir123", "rtanalyzer");  
        // put your code here
       //echo 'hello';
        //$p=$_POST['php://input'];
            //print_r(json_decode($_POST['payload']));
        $postdata= file_get_contents('php://input');
        $xml=simplexml_load_string($postdata);
        echo 'hai'. $xml->bbcount;
        $routeid=$xml->routeid;
        $bbcount= $xml->bbcount;
        $avgbbcount= $xml->avgbbcount;
        $roicount= $xml->roicount;
        echo "routeid = ".$routeid." bbcount=".$bbcount." avgcount".$avgbbcount." roicount=".$roicount; 
        $qry="INSERT INTO `rtanalyzer`.`active_journey`(`route_id`, `date`, `roi_count`, `avg_count`, `status`) VALUES ($routeid,NOW(),$roicount,$avgbbcount,'active')";
       // $qry="INSERT INTO `rtanalyzer`.`active_journey`(`route_id`, `date`, `roi_count`, `avg_count`, `status`) VALUES (2,NOW(),3,4,'active')";
        $res=mysqli_query($connect,$qry);
        if($res) echo ' success';
else {
    echo 'not success';
}
        echo $bbcount.$avgbbcount.$roicount;
        //$connect.close();
 ?>