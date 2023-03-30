<?php
    class Signup extends Dbh{
        protected function setUser($name,$surname,$username,$email,$password){
            $stmt = $this->connect()->prepare('INSERT INTO users(name,surname,username,email,password) VALUES(?,?,?,?,?);'); 
            $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
            if(!$stmt->execute(array($name,$surname,$username,$email,$hashed_pwd))){
                $stmt = null;
                header("location ../index/index.php");
                exit();
            }
           $stmt = null;
        }   
        protected function checkUser($username,$email){
            $stmt = $this->connect()->prepare('SELECT username FROM users WHere username = ?or email = ?;'); 
            if(!$stmt->execute(array($username,$email))){
                $stmt = null;
                header("location ../index/index.php");
                exit();
            }
            $resultCheck = true;
            if($stmt->rowCount()>0){
                $resultCheck = false;
            }else
            {
                $resultCheck = true;
            }
            return $resultCheck;
        }
       

    }

       