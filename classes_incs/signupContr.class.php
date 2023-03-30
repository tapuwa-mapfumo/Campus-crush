<?php 

    class SignupContr extends Signup{
        private $name;
        private $surname;
        private $username;
        private $email;
        private $password;
        private $password_conf;

        public function __construct($name, $surname,$username, $email,$password,$password_conf){
            $this-> name = $name;
            $this-> surname = $surname;
            $this-> username = $username;
            $this-> email = $email;
            $this-> password = $password;
            $this-> password_conf = $password_conf;
        }
        //sIGNING IN   the User
        public function signupUser(){
            //echo "empty inputs"
           if($this->emptyInput()==false){
            header("location: ../index/index.php?error-emptyinput");
           }
           //echo InvalidEmails
           if($this->invalidEmail()==false){
            header("location: ../index/index.php?error-InvalidEmail");
           }
           //echo invalid Names
           if($this->invalidNames()==false){
            header("location: ../index/index.php?error-user proper symbles");
           }
           //echo PSW_DOESNT MATCH
           if($this->Passmatch()==false){
            header("location: ../index/index.php?error-password doesnt match");
           }
           //echo USER MAtch
           if($this->usermatch()==false){
            header("location: ../index/index.php?error-userExits");
           }
           $this->setUser($this->name,$this->surname,$this->username,$this->email,$this->password);

        }
        //Error Handlers
        private function emptyInput(){
            $result = true;
            if(empty($name) || empty($surname) || empty($email) ||
            empty($password) ||
            empty($password_conf) ||
            empty($username)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }
        private function invalidNames(){
            $result = true;
            if(!preg_match("/^[a-z0-9]*$/", $this ->username)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }

        private function invalidEmail(){
            $result = true;
            if(!filter_var( $this ->email , FILTER_VALIDATE_EMAIL)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }

        private function Passmatch(){
            $result = true;
            if($this-> password !== $this->password_conf){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }

        private function usermatch(){
            $result = true;
            if(!$this-> checkUser($this->username, $this->email)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }




    }