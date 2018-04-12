    
      <?php
      session_start();
    require_once 'user.php';
    
    $username = "";
    
    $password = "";
    
    $email = "";
    $onmae="";
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
    if(isset($_POST['oname'])){
        
        $oname = $_POST['oname'];
        
    }
    if(isset($_POST['mobile'])){
        
        $mobile = $_POST['mobile'];
        
    }
    
    
    $userObject = new User();
    
    // Registration
    
    if(!empty($username) && !empty($password) && !empty($email)){
        
        $hashed_password = md5($password);
        
        $json_registration = $userObject->createNewRegisterUser($username, $hashed_password, $email,"$oname ","$mobile");
        
        echo json_encode($json_registration);
      
    }
   // $_SESSION['username']='elisa';
    // Login
    $_SESSION['username']='elisa';
    if(!empty($username) && !empty($password) && empty($email)){
        
        $hashed_password = md5($password);
        
        $json_array = $userObject->loginUsers($username, $hashed_password);
        
        echo json_encode($json_array);
        
    }
    