<?php

include_once('../classes_incs/dbh.class.php');

$dbh = New Dbh();

##-------------------Posts for Single Post--------------------------------------##
$selectPost = $dbh->connect()->prepare("SELECT * FROM posts WHERE post_id = ? ORDER BY date_created DESC");
if(!$selectPost ->execute(array($post_id))){
    echo 'Failed To Load Posts';
}else{
    $post_single = $selectPost->fetchAll(PDO::FETCH_ASSOC);
}
#//-------------------------------------------------------------------\\##

##-------------------Posts Comments --------------------------------------##
$selectComment = $dbh->connect()->prepare("SELECT * FROM comments WHERE post_id = ? ORDER BY date_created DESC");
if(!$selectComment->execute(array($post_id))){
    echo 'Failed To Load Posts';
}else{
    $post_comment = $selectComment->fetchAll(PDO::FETCH_ASSOC);
}
#//-------------------------------------------------------------------\\##