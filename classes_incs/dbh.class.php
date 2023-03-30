<?php
    class Dbh{
        public function connect(){
            try{
                $username = 'root';
                $password = '';
                $dbh = new PDO('mysql:host=localhost;dbname=campus crush',$username,$password);
            }catch(PDOException $e){
                print "Error".$e->getMessage()."<br/>";
                die();
            }
            return $dbh;
        }
    }
