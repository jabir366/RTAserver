    
      <?php
    require_once 'user.php';
    
    $username = "";
    
    $password = "";
    
    $email = "";
    $ONmae="";
    $mobile="";
    if(isset($_POST['username'])){
        
        $username = $_POST['username'];
        
    }
    
    if(isset($_POST['password'])){
        
        $password = $_POST['password'];
        
    }
    
    if(isset($_POST['email'])){
        
        $email = $_POST['email'];
        
    }
    if(isset($_POST['OName'])){
        
        $OName = $_POST['OName'];
        
    }
    if(isset($_POST['mobile'])){
        
        $mobile = $_POST['mobile'];
        
    }
    
    
    $userObject = new User();
    
    // Registration
    
    if(!empty($username) && !empty($password) && !empty($email)){
        
        $hashed_password = md5($password);
        
        $json_registration = $userObject->createNewRegisterUser($username, $hashed_password, $email,"$ONama ","$mobile");
        
        echo json_encode($json_registration);
      
    }
    
    // Login
    
    if(!empty($username) && !empty($password) && empty($email)){
        
        $hashed_password = md5($password);
        
        $json_array = $userObject->loginUsers($username, $hashed_password);
        
        echo json_encode($json_array);
    }
    