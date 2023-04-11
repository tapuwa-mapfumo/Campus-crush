<?php
 
 if(isset($_POST['bookmark'])){
    $post_id = $_POST['post_id'];
    $user_id = $_POST['user_id'];
    $page = $_POST['page'];

    include_once('dbh.class.php');
    $dbh = New Dbh();
    $sql = "INSERT INTO bookmarks(post_id,user_id) VALUES(?,?)";
        $result = $dbh->connect()->prepare($sql);
        if(!$result->execute(array($post_id,$user_id))){
            header('location: ../index/index.php?error=Failed');
        }else{
            if($page == 'home'){
                header("Location: ../index/index.php?secceeded,Page=$page");
            }elseif($page == 'thrill_page'){
                header("Location: ../Hot/hots.php?secceeded,Page=$page");
            }elseif($page == 'linkup_page'){
                header("Location: ../linkups/linkups.php?secceeded,Page=$page");
            }elseif($page == 'postSingle'){
            
                header("Location: ../singlePosts/singleposts.php?post_id=$post_id");
            }
            else{
                header("Location: ../index/index.php?secceeded,Page=$page");
            }

        }
 }else{
    echo 'error';
 }