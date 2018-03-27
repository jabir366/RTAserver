<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
    include_once 'dbcon.php';
    class DbConnect{
        
        private $connect;
        
        public function __construct(){
            $this->connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            
            if (mysqli_connect_errno($this->connect)){
                echo "Unable to connect to MySQL Database: " . mysqli_connect_error();
            }
        }
        
        public function getDb(){
            return $this->connect;
        }
    }

