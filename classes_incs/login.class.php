<?php
    class Login extends Dbh{
        protected function getUser($email,$password){
            $stmt = $this->connect()->prepare('SELECT password FROM  users WHERE email = ?'); 
            if(!$stmt->execute(array($email))){
                $stmt = null;
                header("location ../index/index.php?error=error");
                exit();
            }
            if($stmt->rowCount()>0){
                $stmt = null;
                header("location: ../index/index.php?=usersNotFound");
            }
            $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPAss = password_verify($password,$pwdHashed[0]['password']);

            if($checkPAss == false){
                $stmt = null;
                header("location: ../index/index.php?=usersNotFound");
            }elseif($checkPAss == false){
                $stmt = $this->connect()->prepare('SELECT * FROM  users WHERE email = ? AND password = ?'); 
                if(!$stmt->execute(array($email,$password))){
                    $stmt = null;
                    header("location ../index/index.php");
                    exit();
                }
                if($stmt->rowCount()==0){
                    $stmt = null;
                    header("location: ../index/index.php?=usersNotFound");
                }
                $user =$stmt->fetchAll(PDO::FETCH_ASSOC);
                session_start();
                $_SESSION['user_id']=$user[0]['user_id'];
                $_SESSION['username']=$user[1]['username'];
            
            }

            $stmt = null;
        }   
       
        

    }

       