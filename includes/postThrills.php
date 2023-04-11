<div class="posts">
    <div class="con_form">
        <?php if($userLogged){ ?>
    <div class="post_head">
            <div class="select-post-type">
                <p id="C_con">
                    What did you do?..                  
                    <button class="dot" id="CC_span"></button>                   
                </p>
                
                <div class="post_linkups" id="post_linkups">
                <form action="../classes_incs/posting.inc.php" method="post">
                    <div class="input-form">
                        <input type="hidden" name="user_id" value="<?= $user_id ?>">
                        <textarea name="post" placeholder="wtf did u do this time kkkkkkkk...."  id="textarea_Post"></textarea>
                        <div>
                        <input type="hidden" name="type_post" value="thrill">
                        <input type="hidden" name="page" value="thrill_page">
                        <input type="text" placeholder='#YourHashTag' name='topic'>
                        <input type="text" placeholder='@YourGeneralLocation' name='location'>                        
                        </div>
                        
                    </div>
                    <div>
                        <button type='submit' name='submit'>Post</button>
                    </div>
                    </form>
                </div>

            </div>   
            <small id='privacy_msg' class='privacy_msg'>Don Worry You got all the <a href="#" style="color:blueviolet"> privacy</a> YOU need...No one will ever know who post this</small> 
        </div>
        <?php } ?>
    </div>
   
<!--...............------------------- Now Posting --------------------------------------------------------------->

<?php foreach($posts_Thrills as $post){ ?>
        
    
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
    <div>
        <div class="react">
    <i class='fab fa-facebook'>R</i>
    </div>
    <div class="react-emojis">
        <div>like</div><div>love</div><div>funny</div><div>sad</div><div>fire</div>
    </div>
    </div>
         <div class="comment_in" >
            <input type="text" placeholder="Reply" id="commentBtn">
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

    //For the comment Section
const commentBtn = document.querySelector('#commentBtn');
const commentDiv = document.querySelector('#commentDiv');
const closebtn_Comment = document.querySelector("#close_comment");
const textarea_comment = document.querySelector('#reply-textarea');
const reply_form =document.querySelector(".reply-form");

commentBtn.addEventListener("click", function(){
    commentDiv.classList.toggle('reply-form-active');
    commentBtn.style.pointerEvents ='none';
})
closebtn_Comment.addEventListener('click', function(){
    commentDiv.classList.remove('reply-form-active');
    textarea_comment.value = '';
    commentBtn.value = '';
    textarea_comment.style.height = '40px';
    commentBtn.style.pointerEvents ='all';
})
const react =document.querySelector('.react');
  const react_emojis=document.querySelector('.react-emojis');
  react.addEventListener('click', () => {
    react_emojis.classList.toggle('react-emojis-active');
  })

</script>