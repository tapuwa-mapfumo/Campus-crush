<div class="posts">
    <div class="con_form">
        <?php if($userLogged){ ?>
    <div class="post_head">
            <div class="select-post-type">
                <p id="C_con">
                  Link up?  
                    <button class="dot" id="CC_span"></button> 
                </p>
                
                <div class="post_linkups" id="post_linkups">
                <form action="../classes_incs/posting.inc.php" method="post">
                    <div class="input-form">
                    <input type="hidden" name="user_id" value="<?= $user_id ?>">
                        <textarea name="post" placeholder="what do you need...." id="textarea_Post" required></textarea>
                        <div>
                            <input type="hidden" name="type_post" value="linkup">
                            <input type="hidden" name="page" value="linkup_page">
                        <input type="text" placeholder='#YourType' name='topic'>
                        <input type="text" placeholder='@YourGeneralLocation' name='location'>                        
                        </div>
                    </div>
                    <div>
                        <button id="post_btn" type='submit' name='submit'>Post</button>
                    </div>
                </form>
                </div>

            </div>   
            <small id='privacy_msg' class='privacy_msg'>Don Worry You got all the <a href="#" style="color:blueviolet"> privacy</a> YOU need...No one will ever know who post this</small> 
        </div>
        <?php } ?>
    </div>
   
<!--...............------------------- Now Posting --------------------------------------------------------------->

<?php foreach($posts_links as $post){ ?>
        
    
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