    <?php 
$page = 'profile';
include('../includes/headall.php'); ?>

<body>  
    <div class="main">
    <?php include('../includes/sidebarnav.php'); ?>
    <div class="main-content">
        <div class="nav">
            <h3>Profile</h3>
        </div>
        <?php $user_page = 'thrills'; 
    include('headProfilePage.php');
?>
<!--...............------------------- Now Posting --------------------------------------------------------------->

<?php foreach($posts_User_thrills as $post){ ?>
        
    
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
        <div class="react">
        <i class='fab fa-facebook'>R</i>
        </div>
         <div class="comment_in" >
            <input type="text" placeholder="Reply" id="commentBtn">
            <div class="reply-form" id="commentDiv">
                <span class="close-btn" id="close_comment">
                    X
                </span>
                <div><h2>Reply To Post</h2></div>
                <div class="input-reply">
                    <div>
                         <span>P</span>
                    </div>
                   <div>
                    <textarea name="reply-textarea" id="reply-textarea" placeholder="...wtf"></textarea>
                   </div>
                    <div>
                        <button>Reply</button>
                    </div>
                    
                </div>
            </div>
        </div> 
    </div>
        </div>
        <?php } ?> 
    </div>
    </div>

<?php include('../includes/leftbar.php') ;?>
 
    </div>
    <script src="./Js/script.js"></script>
</body>
</html>
