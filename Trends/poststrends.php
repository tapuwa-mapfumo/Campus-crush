<div class="posts">
    <div class="con_form">
    </div>
   
<!--...............------------------- Now Posting --------------------------------------------------------------->

<?php foreach($post_single as $post){ ?>
        
    
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
        <a href="../singlePosts/singleposts.php?post_id=<?= $post['post_id'] ?>">
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
            <a href="../singlePosts/singleposts.php?post_id=<?= $post['post_id'] ?>">
            <button placeholder="Reply" class="btn_reply" id="commentBtn">Reply</button></a>
        </div> 
    </div>
        </div>
        <?php } ?> 

</div>
<script>
    // when user wanna post somthing
    const openPostBtn = document.querySelector('#C_con');
    const post_Box = document.querySelector('#post_linkups');
    const privacy_msg = document.querySelector('#privacy_msg');
    const CC_span = document.querySelector('#CC_span');

    openPostBtn.addEventListener('click', function(){
        post_Box.classList.toggle('post_linkups_active');
        privacy_msg.classList.toggle('privacy_msg-active');
        CC_span.classList.toggle('dot-active');
    })
</script>