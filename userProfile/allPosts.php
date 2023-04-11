<?php $user_page = 'all'; 
    include('headProfilePage.php');
?>
<!--...............------------------- Now Posting --------------------------------------------------------------->

<?php foreach($posts_User as $post){ ?>
        
    
        <div class="post-container">
            <div class="post-head">
                <div class="heading-post">
                 <small>head</small>   
                </div>
                <div class="head-dots">
                    <div>
                      <small>.</small><small>.</small><small>.</small>   
                    </div>
                   
                </div>
            </div>
    <div class="post-box">
        <a href="../singlePosts/singleposts.php">
        <div class="location_div">
                    @<?= $post['location'] ?>  #<?= $post['topic']?>
                </div>
            <?php if(strlen($post['post_body']) > 500){ ?>
                
            <div class='readmoreBtn'>
            <button> Read More</button>
            </div>
                <?php } ?>
        <p <?php if(strlen($post['post_body']) < 60){echo "style='font-size:48px'";}
                    elseif(strlen($post['post_body']) <45){echo "style='font-size:58px'";}
        
        ?>> <?= $post['post_body'] ?></p>
        </a>
    </div>
    <div class="comment">
    <div>
        <div class="react">
    <i class='fab fa-facebook'>R</i>
    </div>
    <div class="react-emojis">
        <div>like</div><div>love</div><div>funny</div><div>sad</div><div>fire</div>
    </div>
    </div>
     <div class="comment_in" >
        <?php 
        $post_id = $post['post_id'];
             #counting comments
    $countComments = $dbh->connect()->prepare("SELECT COUNT(*) as total from comments where post_id = ?");
    if(!$countComments ->execute(array($post_id))){
        echo 'Failed To Load Posts';
    }else{
         $result = $countComments->fetch(PDO::FETCH_ASSOC);
        $total = $result['total']; 
    
    }

        ?>
        <input type="text" placeholder="Reply(<?= $total ?>)" id="commentBtn">
       <div class='reply-form-bg'id="commentDiv">
       <div class="reply-form" >
            <span class="close-btn" id="close_comment">
                X
            </span>
            <div><h2>Reply To Post</h2></div>
            <div class="post-reply">
                <div>
                    <?=$post['post_body'] ?>
                </div>
                <div style='background:inherit'>
                @<?=$post['location'] ?> , #<?=$post['topic'] ?> 
                </div>
            </div>
            <form action="../classes_incs/postcomments.php" method='post'>
            <div class="input-reply">
                <div>
                     <span>P</span>
                </div>
               <div>
                <input type="hidden" name='post_id' value='<?= $post['post_id'] ?>'>
                <input type="hidden" name='user_id' value='<?= $post['user_id'] ?>'>
                <input type="hidden" name='page' value='<?= $page ?>'>
                <textarea name="comment" id="reply-textarea" placeholder="...whats your view"></textarea>
               </div>
                <div>
                    <button name="submit_comment">Reply</button>
                </div>            
            </div>
            </form>
        </div>
       </div>
       
    </div> 
</div>
        </div>
        <?php } ?> 
        </div>
  