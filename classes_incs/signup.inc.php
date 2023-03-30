<?php 
    if(isset($_POST["submit_log_in"])){
        session_start();
        //Grabbing data
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_conf = $_POST['confirm_password'];
        
        if(empty($name) || empty($surname) || empty($username) ||empty($email) ||empty($password) ||empty($password_conf)){
            $error = 'Fill in all the require Fields';
            $_SESSION['error']= $error;
            header("location: ../index/index.php?error=$error");
            die();
        }
        if($password != $password_conf  ){
            $error = 'Passwords don match';
            $_SESSION['error']= $error;
            header("location: ../index/index.php?error=$error");
            die();
        }
        // Instantiate SignUpContr class
        include_once('dbh.class.php');
        $dbh = new Dbh();

    // Prepare the SQL statement
    $sql = "SELECT COUNT(*) FROM users WHERE username = ? OR email = ?;";

    // Execute the SQL statement using your Dbh class
    $result = $dbh->connect()->prepare($sql);
        if(!$result->execute(array($username,$email))){
            $result = null;
            header("location ../index/index.php?error=error");
            exit();
        }else{
            $row =$result->fetchColumn();
            if($result > 0) {
                header("Location: ../index/index.php?error=Email is already registered");
              } else {
                // Hash the password
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
          
                // Insert the new user using your Dbh class
                $Insert_sql = "INSERT INTO users (name,surname,username,email,password) VALUES (?,?,?,?,?)";
                $Instert_result = $dbh->connect()->prepare($Insert_sql);
                if(!$Instert_result->execute(array($name,$surname,$username,$email,$hashed_password))){
                   
                    header("location ../index/index.php?error=error");
                    exit();
                }else{
                    // Redirect to sign-in page
                header("Location: ../index/index.php");
                }
                
                exit;
             }
            }

        
    }else{
        echo 'error';
    }