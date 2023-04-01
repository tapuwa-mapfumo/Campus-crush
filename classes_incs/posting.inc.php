<?php

    if(isset($_POST['submit'])){
        echo 'progress';
        $post = $_POST['post'];
        $topic = $_POST['topic'];
        $location = $_POST['location'];
        $user_id =$_POST['user_id'];
        $date = date('Y-m-d H:i:s');
        
        include_once('dbh.class.php');
        $dbh = New Dbh();
        $sql = "INSERT INTO posts(title,post_body,user_id,date_created) VALUES(?,?,?,?)";
        $result = $dbh->connect()->prepare($sql);
        if($result->execute(array($topic,$post,$user_id,$date))){
          header("Location: ../index/index.php?secceeded");
        }else{
            echo'not done';
        }
        

    }else{
        echo 'error';
    }