<?php 

    class LoginContr extends Login{
        private $email;
        private $password;

        public function __construct($email,$password){
            $this-> email = $email;
            $this-> password = $password;
        }
        //sIGNING IN   the User
        public function LoginUser(){
       
           
           //echo InvalidEmails
           if($this->invalidEmail()==false){
            header("location: ../index/index.php?error-InvalidEmail");
           }
         
           $this->getUser($this->email,$this->password);

        }
        //Error Handlers
        private function emptyInput(){
            $result = true;
            if(empty($email) ||
            empty($password)){
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

     



    }