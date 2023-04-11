<div class="posts">
    <div class="con_form">
      <div class='conform_desgn_head'>
        <div>
            <button></button>
        </div>
        <div>
            <span>P</span>
        </div>
        <div>
            <button></button>
        </div>
      </div>
         
      <?Php if($userLogged){ ?>
      <button  id="post_choice">What's on Your Mind @<?= $username ?></button>
        <div class="post-choice-bg">
        <div class="post-choice">
            <h2>What do you wanna Post about</h2>
            <span class="close-btn"  id="closebtn_postchoice">X</span>
            <div class="select-post-type" >
               <p id="hot_con"> I got a HOT Conf <button class="dot" id="hotC_span"></button></p>
                <div id="post_formHC" class="post_formHC">
                    <form action="../classes_incs/posting.inc.php" method="post">
                    <div class="input-form">
                        <input type="hidden" name="user_id" value="<?= $user_id ?>">
                        <textarea name="post" placeholder="wtf did u do this time kkkkkkkk...."  id="textarea_Post"></textarea>
                        <div>
                        <input type="hidden" name="type_post" value="thrill">
                        <input type="hidden" name="page" value="home_page">
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
            <div class="select-post-type">
                <p id="C_con">
                   I want H & C <button class="dot" id="CC_span"></button> 
                </p>
                
                <div class="post_formHC" id="post_formCC">
                <form action="../classes_incs/posting.inc.php" method="post">
                    <div class="input-form">
                    <input type="hidden" name="user_id" value="<?= $user_id ?>">
                        <textarea name="post" placeholder="what do you need...." id="textarea_Post" required></textarea>
                        <div>
                            <input type="hidden" name="type_post" value="linkup">
                            <input type="hidden" name="page" value="home_page">
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
            <small>Don Worry You got all the <a href="#" style="color:blueviolet"> privacy</a> YOU need...No one will ever know who post this</small>
        </div>
        </div>
        
        <?php } ?>
    </div>

<!--...............------------------- Now Posting --------------------------------------------------------------->

    <?php foreach($posts as $post){ 
        ?>
        
    
    <div class="post-container">
        <div class="post-head">
            <div class="heading-post">
             <small>Anonymous . <span><?= $post['date_created'] ?></span> </small>   
            </div>
            <div class="head-dots">
                <div>
                  <small>.</small><small>.</small><small>.</small>   
                </div>
               <div class="head-menu">
               <form action="../classes_incs/bookmarks.inc.php" method='post'>
                <input type="hidden" name="post_id" value="<?= $post['post_id'] ?>">
                <input type="hidden" name='user_id' value='<?= $user_id ?>'>
               <button name="bookmark"> Bookmark Post</button>
               </form>
                  
                <p> Copy Link</p>
               </div>
            </div>
        </div>
<div class="post-box">
        <div class="location_div">
            <a href="../Trends/trends.php?location=<?= $post['location'] ?>">     
                @<?= $post['location'] ?>
            </a> 
            <a href="../Trends/trends.php?trends=<?= $post['topic'] ?>">
                #<?= $post['topic']?>
            </a>
            
        </div><a href="../singlePosts/singleposts.php?post_id=<?= $post['post_id'] ?>">
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
<?php if($post['post_type'] =='thrill'){ ?> 
<div class="comment">
    <div>
        <?php
            $post_id = $post['post_id'];
            $sql = "SELECT COUNT(*) as total FROM likes WHERE user_id = ? AND post_id = ?;";

            $result = $dbh->connect()->prepare($sql);
            if(!$result->execute(array($user_id,$post_id))){
                $result = null;
                header("location ../index/index.php?error=error");
                exit();
            }else{
                $results = $result->fetch(PDO::FETCH_ASSOC);
                if($results == 0) { ?>

                <div class="react">
                    <i class='fab fa-facebook'><?= $results['total'] ?></i>
                </div>
            <?php }else{?>
                <div class="react">
                <i class='fab fa-facebook'>R</i>
                </div>
                <?php }} ?>
   
    <div class="react-emojis">
        <div>
            <form action="../classes_incs/liking.inc.php" method='post'>
            <input type="hidden" name='post_id' value='<?= $post['post_id'] ?>'>
            <input type="hidden" name="user_id" value='<?= $user_id ?>'>
            <input type="hidden" name="type" value='like'>
            <button name='submit_like'>like</button>
            </form>
        </div>
        <div>
        <form action="../classes_incs/liking.inc.php" method='post'>
            <input type="hidden" name='post_id' value='<?= $post['post_id'] ?>'>
            <input type="hidden" name="user_id" value='<?= $user_id ?>'>
            <input type="hidden" name="type" value='love'>
            <input type="hidden" name="page" value='home'>
            <button name='submit_like'>love</button>
            </form>
        </div>
        <div>
        <form action="../classes_incs/liking.inc.php" method='post'>
            <input type="hidden" name='post_id' value='<?= $post['post_id'] ?>'>
            <input type="hidden" name="user_id" value='<?= $user_id ?>'>
            <input type="hidden" name="type" value='funny'>
            <input type="hidden" name="page" value='home'>
            <button name='submit_like'>funny</button>
            </form>
        </div>
        <div>
        <form action="../classes_incs/liking.inc.php" method='post'>
            <input type="hidden" name='post_id' value='<?= $post['post_id'] ?>'>
            <input type="hidden" name="user_id" value='<?= $user_id ?>'>
            <input type="hidden" name="type" value='sad'>
            <input type="hidden" name="page" value='home'>
            <button name='submit_like'>sad</button>
            </form>
        </div>
        <div>
        <form action="../classes_incs/liking.inc.php" method='post'>
            <input type="hidden" name='post_id' value='<?= $post['post_id'] ?>'>
            <input type="hidden" name="user_id" value='<?= $user_id ?>'>
            <input type="hidden" name="type" value='fire'>
            <input type="hidden" name="page" value='home'>
            <button name='submit_like'>fire</button>
            </form>
        </div>
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
        <input type="text" placeholder="Comment (<?= $total ?>)" id="commentBtn">
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
<?php } else {?>
    <div class="comment">
    <div>
        <div class="react">
    <i class='fab fa-facebook'>R</i>
    </div>
    <div class="react-emojis">
        <div>like</div><div>love</div><div>funny</div><div>sad</div><div>fire</div>
    </div>
    </div>
         <div class="comment_in">
         <button class='btn_reply' id="commentBtn" style="color:aliceblue">Lets Deal</button>
        </div> 
    </div>
    <div class="deal-input">
        <form action="#">
            <textarea type="text" name="deal" id="deal" placeholder='Are you/is this still available...'></textarea> <button>Send</button>
        </form>
    </div>

    <?php } ?>
    </div>
    <script >
    
//For The Post Head
const postChoice = document.querySelector('#post_choice');
const post_choice = document.querySelector('.post-choice-bg');
const closebtn_postchoice = document.querySelector('#closebtn_postchoice');
postChoice.addEventListener("click", function(){
    post_choice.classList.toggle('post-choice-active');
})
closebtn_postchoice.addEventListener('click', function(){
    post_choice.classList.remove('post-choice-active');
})
//Post head Ends

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


// textarea_comment.addEventListener('input', function() {
//   textarea_comment.style.height = '40px';
//   reply_form.style.maxheight = '';
//   textarea_comment.style.height = textarea_comment.scrollHeight + 'px';
// //   commentDiv.style.height = 'auto';
// });
//comment Section Ends

//post-choice for choosing type of post
const hot_conDiv = document.querySelector('#hot_con'); //div for selecting hot_C
const hotC_span = document.querySelector('#hotC_span');//hotC span
const post_formHC = document.querySelector('#post_formHC');//HotC form
const C_con= document.querySelector('#C_con')//div for selecting C_con
const CC_span = document.querySelector('#CC_span');//hotC span
const post_formCC = document.querySelector('#post_formCC');//HotC form
const textarea_Post = document.querySelector("#textarea_Post");
const post_btn = document.querySelector('#post_btn');

hot_conDiv.addEventListener('click',function(){
    post_formHC.classList.toggle('post_formHC-active');
    post_formCC.classList.remove('post_formHC-active');
    hotC_span.classList.toggle('dot-active');
    CC_span.classList.remove('dot-active');
})

C_con.addEventListener('click',function(){
    post_formCC.classList.toggle('post_formHC-active');
    post_formHC.classList.remove('post_formHC-active');
    CC_span.classList.toggle('dot-active');
    hotC_span.classList.remove('dot-active');
})

textarea_Post.addEventListener('input', function() {
    textarea_Post.style.height = 'auto';
    textarea_Post.style.height = textarea_Post.scrollHeight + 'px';
  
  });
  

  const react =document.querySelector('.react');
  const react_emojis=document.querySelector('.react-emojis');
  react.addEventListener('click', () => {
    react_emojis.classList.toggle('react-emojis-active');
  })

  const head_dots =document.querySelector('.head-dots');
  const head_menu =document.querySelector('.head-menu');
  head_dots.addEventListener('click',() =>{
    head_menu.classList.toggle('head-menu-active');
  })

</script>
    <?php } ?> 
    
</div>
