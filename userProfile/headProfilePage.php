<div class="posts">
    <div class="con_form">
    <div class="post_head">
            <div class="select-post-type">
                <p id="C_con">
                      Your Profile
                    <button class="dot" id="CC_span"></button> 
 
                </p>
                
                <div class="post_linkups" id="post_linkups">
                    <div>
                <p>@thatBoiGung</p>
                   <p>Full Name</p>
                   <p>0778776453</p>
                   <button></button>
                </div>
                </div>

            </div>   
            <small id='privacy_msg' class='privacy_msg'>
                Fell Free to say whats in your mind..Your <a href="#" style="color:blueviolet"> privacy</a> is all urs
            </small> 
            <div class="nav">
                <u class="nav-itemsPost">
                  <a href="profileUserCurrent.php">
                        <li 
                        <?php if ($user_page == 'all'){ echo 'class="li-active"';} ?>>All</li>  
                     </a>
                    <a href="thrillsPosts.php">
                    <li <?php if ($user_page == 'thrills'){ echo 'class="li-active"';} ?>>Thrills</li>    
                    </a>  
                    <a href="requests.php">
                        <li <?php if ($user_page == 'reqs'){ echo 'class="li-active"';} ?>>Requests</li>
                    </a>
                    
                </u>
            </div>
        </div>
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