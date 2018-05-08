<?php


//
$uname=$_POST['username'];
$connect = mysqli_connect("localhost", "root", "jabir123", "rtanalyzer");
//$uname=$_SESSION['username'];
$qry="select * from block_record where status='active' and user_id=(select id from users where username='$uname')";
$qry2="UPDATE block_record set status='inactive' where user_id =(select id from users where username='$uname')";
//$qry="select * from block_record where user_id=(select id from users where username='$uname')";
$result= mysqli_query($connect, $qry);
$s=mysqli_query($connect,$qry2);
// echo 'updation successfull';
if(mysqli_num_rows($result)>0)
    echo json_encode (array("message"=>block));
else  echo json_encode (array("message"=>no_block));