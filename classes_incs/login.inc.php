<?php 
    if(isset($_POST["submit"])){
        session_start();
        //Grabbing data
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username) ||empty($password)){
            $error = 'Fill in all the require Fields';
            $_SESSION['error']= $error;
            header("location: ../index/index.php?error=$error");
            die();
        }
        // Instantiate SignUpContr class
        include_once('dbh.class.php');
        $dbh = new Dbh();

    // Prepare the SQL statement
    $sql = "SELECT * FROM users WHERE username = ?;";

    // Execute the SQL statement using your Dbh class
    $result = $dbh->connect()->prepare($sql);
        if(!$result->execute(array($username))){
            $result = null;
            header("location ../index/index.php?error=error");
            exit();
        }else{
            
            if(!$result->rowCount() == 1) {
                     $_SESSION['error_log']='No user found, Sign-up instaed';
                header("Location: ../index/index.php?error=No User Found, Signup instead");    
                die();      
              } else {
                $row = $result->fetch(PDO::FETCH_ASSOC);
                if(password_verify($password, $row['password'])) {
                    // Set the session variables
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['username'] = $row['username'];                  
                    // Redirect to dashboard
                    header("Location: ../index/index.php?log_inSuccessful");                   
             }
            }
        }

        
    }else{
        echo 'error';
    }