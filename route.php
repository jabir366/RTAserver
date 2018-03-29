 
           <?php   
           $connect = mysqli_connect("localhost", "root", "jabir123", "rtanalyzer");  
           $sql = "SELECT route_name FROM route";  
           $result = mysqli_query($connect, $sql);  
           $route="";
                if(isset($_POST['route'])){
                $route = $_POST['route'];
                }
           
           $json_array = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $json_array[place][] = $row;  
           }  
           /*echo '<pre>';  
           print_r(json_encode($json_array));  
           echo '</pre>';*/  
           echo json_encode($json_array);  
           ?>  