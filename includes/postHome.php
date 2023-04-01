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
                    <div class="input-form">
                        <textarea name="post" placeholder="what do you need...." id="textarea_Post" required></textarea>
                        <div>
                        <input type="text" placeholder='#YourType' name='topic'>
                        <input type="text" placeholder='@YourGeneralLocation' name='location'>                        
                        </div>
                    </div>
                    <div>
                        <button id="post_btn" type='submit' name='submit'>Post</button>
                    </div>
                </div>
               
            </div>
            <small>Don Worry You got all the <a href="#" style="color:blueviolet"> privacy</a> YOU need...No one will ever know who post this</small>
        </div>
        <?php } ?>
    </div>
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
    'post-boxh
</div>
<div class="comment">
    <div class="react">
        R
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
    <div class="post-container">
        <div class="post-head">
            <small>head</small>
        </div>
<div class="post-box">
    'post-box
</div>
<div class="comment">
    <div class="react">
        R
    </div>
    <div class="comment_in">
        <input type="text" placeholder="Reply">
    </div>
</div>
    </div>
</div>