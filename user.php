<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    include_once 'dbconnect.php';
    
    class User{
        
        private $db;
        
        private $db_table = "users";
        
        public function __construct(){
            $this->db = new DbConnect();
        }
        
        public function isLoginExist($username, $password){
            
            $query = "select * from ".$this->db_table." where username = '$username' AND password = '$password' Limit 1";
            
            $result = mysqli_query($this->db->getDb(), $query);
            
            if(mysqli_num_rows($result) > 0){
                
                mysqli_close($this->db->getDb());
                return true;
            }
            
            mysqli_close($this->db->getDb());
            
            return false;
            
        }
      
        public function isEmailUsernameExist($username, $email){
            
            $query = "select * from ".$this->db_table." where username = '$username' AND email = '$email'";
            
            $result = mysqli_query($this->db->getDb(), $query);
            
            if(mysqli_num_rows($result) > 0){
                
                mysqli_close($this->db->getDb());
                
                return true;
                
            }
               
            return false;
            
        }
        
        public function isValidEmail($email){
            return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
        }
        
        public function createNewRegisterUser($username, $password, $email,$OName,$mobile){
              
            $isExisting = $this->isEmailUsernameExist($username, $email);
            
            if($isExisting){
                
                $json['success'] = 0;
                $json['message'] = "Error in registering. Probably the username/email already exists";
                $json['action']="register";
            }
            
            else{
                
            $isValid = $this->isValidEmail($email);
                
                if($isValid)
                {
                $query = "insert into ".$this->db_table." (username, password, email, created_at, updated_at,name,mobile) values ('$username', '$password', '$email', NOW(), NOW(),'$OName','$mobile')";
                
                $inserted = mysqli_query($this->db->getDb(), $query);
                
                if($inserted == 1){
                    
                    $json['success'] = 1;
                    $json['message'] = "Successfully registered the user";
                    $json['action']="register";
                    
                }else{
                    
                    $json['success'] = 0;
                    $json['message'] = "Error in registering. Probably the username/email already exists";
                    $json['action']="login";                    
                }
                
                mysqli_close($this->db->getDb());
                }
                else{
                    $json['success'] = 0;
                    $json['message'] = "Error in registering. Email Address is not valid";
                    $json['action']="register";
                }
                
            }
            
            return $json;
       
        }
        
        public function loginUsers($username, $password){
            
            $json = array();
            
            $canUserLogin = $this->isLoginExist($username, $password);
            
            if($canUserLogin){
                
                $json['success'] = 1;
                $json['message'] = "Successfully logged in";
                $json['action']="login";
                
            }else{
                $json['success'] = 0;
                $json['message'] = "Incorrect details";
                $json['action']="login";
            }
            return $json;
        }
    }