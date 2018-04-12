 
           <?php   
           session_start();
           $connect = mysqli_connect("localhost", "root", "jabir123", "rtanalyzer");  
             
           $type="";
           $user=" ";
           $uname="";
           $newpwd="";
           if(isset($_POST['type'])){
                $type= $_POST['type'];
           }
  
           if($type=="0"){
                $sql = "SELECT route_name FROM route";  
                $result = mysqli_query($connect, $sql);
                $num=array("type"=>$type);
                while($row = mysqli_fetch_assoc($result))  
                {  
                     $json_array[place][] = $row;  
                }  
                $json_array[place][] = $num;
                $json_array[type][]=array("tp"=>"0");
               echo json_encode($json_array);  
           }
           else if($type=="1")
           {
               $uname=$_POST['uname'];
               $newpwd=$_POST['newpwd'];
               $pwdhash=md5($newpwd);
               $sql = "update users set password='$pwdhash'where username='$uname'";  
               $result = mysqli_query($connect, $sql);
               $json=array();
               $json["type"]=$type;
               if($result){
                    $json["message"]="Password changed successfully..";
               }
               else $json["message"]="could not change password";
               echo json_encode($json);
  
           }
           else if($type=="2")
           {   // session_start();
               // $_SESSION['uname']='elmy';
               $json=array();
               extract($_POST);
               $json["type"][]=array("tp"=>"2");
              // $start_time=$start_time+":00";
//               $uname=$_SESSION['username'];
//                $qry="select id from users where username='$uname'";
//                $res= mysqli_query($connect, $qry);
//                $id="";
//                while($row=mysqli_fetch_array($res)){
//                    $id=$row[0];
//                }
//                $connect = mysqli_connect("localhost", "root", "jabir123", "rtanalyzer");
                $user=$_POST['user'];
                //echo $uname;
//                $uname=$_SESSION['username'];
                $qry="select id from users where username='$user'";
                $result= mysqli_query($connect, $qry);
                while($r=mysqli_fetch_array($result)){
                    $id= $r[0];
                }
                 //  echo 'row='.$row;
                
                //$data= "id:".$id."source".$source."  destination:".$destination."  route".$selected_route." startdate:".$start_date." starttime:".$start_time."  duration".$duration;

               // $sql =" INSERT INTO `journey_details`(`user_id`, `s_date`, `route_id`, `source`, `destination`) VALUES (3,NOW(),1,'$source','$destination')";
               //$sql="INSERT INTO `journey_details`(`user_id`,`s_date`, `s_time`, `route_id`, `source`, `destination`,`duration`) VALUES ('$id','$start_date','$start_time','$source','$destination,'$duration')";
               $sql="INSERT INTO `journey_details`(`user_id`,`s_date`, `s_time`, `route_id`, `source`, `destination`,`duration`) VALUES ('$id','$start_date','$start_time','$selected_route','$source','$destination','$duration')";
             // $sql="INSERT INTO `journey_details`(`user_id`,`s_date`, `s_time`, `route_id`, `source`, `destination`,`duration`) VALUES ('3','2018-4-9','6:21','3','mmmmm','kottayam','2')";
                $result = mysqli_query($connect, $sql);
               if($result)
               {
                   $json["registration"][]=array("message"=>"Journey Registered successfully");
                   //$json["registration"][]=array("data"=>$data);
                   echo json_encode($json);
               }
               else
               {       
                   $json["registration"][]=array("message"=>"Error occured");
                  // $json["registration"][]=array("data"=>$data);
                   echo json_encode($json);
                }
           }
            