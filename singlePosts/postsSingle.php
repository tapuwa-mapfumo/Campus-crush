<div class="posts">
    <div class="con_form">
    </div>
   
<!--...............------------------- Now Posting --------------------------------------------------------------->

<?php foreach($post_single as $post){ ?>
        
    
        <div class="post-container-comment">
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
    <div class="post-box" style='height:auto'>
        <a href="../singlePosts/singleposts.php">
       
          
        <p <?php if(strlen($post['post_body']) < 60){echo "style='font-size:48px'";}
                elseif(strlen($post['post_body']) <45){echo "style='font-size:58px'";}

            ?> style='height:auto'> <?= $post['post_body'] ?></p>
        </a>
    </div>
    
    <?php if($user_id!= '') { ?>
    <div class="comment">
    <div>
        <div class="react">
    <i class='fab fa-facebook'>R</i>
    </div>
    <form action="#">
        <input type="hidden" name='post_id' value='<?= $post['post_id'] ?>'>
        <input type="hidden" name="user_id" value='<?= $user_id ?>'>
       <div class="react-emojis">
        <div>like</div><div>love</div><div>funny</div><div>sad</div><div>fire</div>
    </div> 
    </form>
    
    </div>
        <form action="../classes_incs/postcomments.php" method="post" class='form-comment'>
         <div class="comment_in" >
                <textarea placeholder="Comment" class="textarea_reply" id="reply-textarea" name="comment"></textarea> 
                     <input type="hidden" name = 'post_id' value="<?= $post['post_id'] ?>">
                     <input type="hidden" name='user_id' value='<?= $user_id ?>'>
                     <input type="hidden" name='page' value='<?= $page ?>'>
        </div> 
        <button name='submit_comment'>Post</button>
        </form>
    </div>
    <?php }else{ ?>
            <div class="form-comment">
                <h4 style='text-align:center'>Sign in to comment</h4>
            </div>
        <?php } ?>
        <div class="loc-trend-spost">
        <a href="../Trends/trends.php?location=<?= $post['location'] ?>">     
                @<?= $post['location'] ?>
            </a> 
            <a href="../Trends/trends.php?trends=<?= $post['topic'] ?>">
                #<?= $post['topic']?>
            </a>
          </div>
        </div>
        <?php } ?> 

        <div class="reply-container">
            <h3>Comments</h3>
        <?php foreach($post_comment as $comment){ ?>
            <div class="comments_posts">
                <div class="comment-post">
                    <?= $comment['comment'] ?>
                    <div>
                        <small>@<?= $comment['username'] ?><span>like</span><span>reply</span> </small>
                    </div>
                    <div class='reply_comm'>
                        <textarea name="reply-comment" placeholder='reply comment'></textarea> <button>post</button>
                    </div>
                </div>
                <div class="comm_likNreply"> 
                    <div class="react-emojis">
                        <div>like</div><div>love</div><div>funny</div><div>sad</div><div>fire</div>
                    </div>
                </div>
            </div>
        <?php } ?>    
        </div>

</div>
<script>
    // when user wanna post somthing

    const commentDiv = document.querySelector('.post-container');
    const textarea_reply = document.querySelector('#reply-textarea');
    textarea_reply.addEventListener('input', function() {
  textarea_reply.style.height = '35px';
  textarea_reply.style.height = textarea_reply.scrollHeight + 'px';
  commentDiv.style.height = 'auto';
});

const react =document.querySelector('.react');
  const react_emojis=document.querySelector('.react-emojis');
  react.addEventListener('click', () => {
    react_emojis.classList.toggle('react-emojis-active');
  })
</script>