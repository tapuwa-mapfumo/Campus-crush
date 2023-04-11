<div class="sidebar-nav">
        <nav>
            <ul>
                <div <?php if ($page == 'home'){ echo 'class="active"';} ?>> 
                    <a href="../index/index.php" class='nav-a'> <?php if ($page == 'home'){ echo '<span></span>';} ?>
                       <span></span><span></span>  <li>   Home</li>
                    </a>
                </div>
                <div <?php if ($page == 'linkups'){ echo 'class="active"';} ?>>
                    <a href="../linkups/linkups.php" class="nav-a"><?php if ($page == 'linkups'){ echo '<span></span>';} ?>
                        <span></span><span></span><li>Link Ups</li>
                    </a>
                </div>
                <div <?php if ($page == 'hot'){ echo 'class="active"';} ?>>
                    <a href="../Hot/hots.php" class="nav-a"><?php if ($page == 'hot'){ echo '<span></span>';} ?>
                        <span></span><span></span><li>Thrilling</li>
                    </a>
                </div>
                <div <?php if ($page == 'bookmarks'){ echo 'class="active"';} ?>>
                    <a href="../bookmarks/bookmarks.php" class="nav-a"><?php if ($page == 'bookmarks'){ echo '<span></span>';} ?>
                        <span></span><span></span><li>Bookmarks</li>
                    </a>
                </div>
                <div <?php if ($page == 'inbox'){ echo 'class="active"';} ?>>
                    <a href="../inbox/inbox.php" class="nav-a"><?php if ($page == 'bookmarks'){ echo '<span></span>';} ?>
                        <span></span><span></span><li>Inbox</li>
                    </a>
                </div>
                
             
            </ul>
        </nav>
                    <!-- When user is not signed in -->
                    <?php  
                if(!isset($_SESSION['user_id'])){ ?>
                    `<div class="icons"> 
                        <div class="profile" id='loginBtn'>
                            Log in
                        </div>
                            
        
                                
                        <div class="log-in-form" id = 'log_in'>
                            <form action="../classes_incs/login.inc.php" method='post'>
                                <div>
                                    <input type="text" name="username" placeholder="username">
                                </div>
                                <div>
                                    <input type="password" name='password' placeholder="enter your password">
                                </div>
                                <div>
                                    <button type='submit' name='submit'> Log In</button>
                                </div>
                                <small>If you have don't have an account you can <span id='span_signup'>Sign-up </span> </small>
                            </form>
                            <div class="footer">
                                <small>privacy . freedom </small>
                            </div>
                        </div>
        
        
                        <div class="settings" id='signupBtn'>
                            Sign Up
                        </div>
                        <div class="sign-up-form" id='sign_up'>
                            <form action="../classes_incs/signup.inc.php" method="post">
                                <div>
                                    <input type="text" placeholder="Name" name="name">
                                    <input type="text" placeholder='surname' name="surname">
                                </div>
                                <div>
                                    <input type="text" name='username' placeholder= 'Choose a username'>
                                </div>
                                <div>
                                    <input type="email" name="email" placeholder="enter your email">
                                </div>
        
                                <div>
                                    <input type="password" placeholder='Choose a password' name='password' id='password'>
                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password">
                                </div>
                                <div>
                                    <button type='submit' name='submit_log_in'> Log In</button>
                                </div>
                                <small>If you have an account you can <span id='span_login'>Log-in</span>  </small>
                                
                            </form>
                            <div class="footer">
                                <small>privacy . freedom </small>
                            </div>
                        </div>
                    </div><!-- // When user is not signed in -->
                    <div class='errormsg'>
                        <?php if(isset($_SESSION['error']) || isset($_SESSION['error_log'])){
                            echo  $_SESSION['error'] ;
                        }?>
                            <script >
          // Open and closimg Signup and Log_in form
  const signup_form = document.querySelector('.sign-up-form');
  const login_form = document.querySelector('#log_in');
  const signupBtn = document.querySelector('#signupBtn');
  const loginBtn = document.querySelector('#loginBtn');
  const signupBtn_span = document.querySelector('#span_signup');
  const loginBtn_span = document.querySelector('#span_login')

  signupBtn.addEventListener('click', function(){
    signup_form.classList.toggle('sign-up-form-active');
    login_form.classList.remove('log-in-form-active');
  })

  signupBtn_span.addEventListener('click', function(){
    signup_form.classList.toggle('sign-up-form-active');
    login_form.classList.remove('log-in-form-active');
  })

  loginBtn_span.addEventListener('click', function(){
    login_form.classList.toggle('log-in-form-active');
    signup_form.classList.remove('sign-up-form-active');
  })

  loginBtn.addEventListener('click', function(){
    login_form.classList.toggle('log-in-form-active');
    signup_form.classList.remove('sign-up-form-active');
  })

 
    </script>
                    </div>
                       <?php } 
                       else{ ?>
                             <!-- when user is signed in -->
                             <div class='icons'>
                             <div class="settings" id="prof_menuBtn">
                                 Profile
                             </div>
                             <div class="profile-menue" id ='prof_menu'>
                                
                             <?php if($userLogged){ ?>
                <div <?php if ($page == 'profile'){ echo 'class="active"';} ?>>
                    <a href="../userProfile/profileUserCurrent.php" class='nav-a'>
                    <span></span><span></span><li>Profile</li> <?php if ($page == 'profile'){ echo '<span></span>';} ?><?php if ($page == 'profile'){ echo '<span></span>';} ?>
                    </a>
                 </div>
                 <?php } ?>
                                 <div class='div'>
                                     Settings
                                 </div>
                                 <div class='div'>
                                     Log in to another account
                                 </div>
                                 <div class='div' id='logoutBtn'>
                                     Log out
                                 </div>
                                 <div class="logout_confirm">
                                    <p>Confirm LogOut</p>
                                    <div>
                                        <form action="../classes_incs/log-out.inc.php">
                                           <button class='yes'>Yes</button> 
                                        </form>
                                        <button class='no' id='noBtn'>No</button>
                                    </div>
                                 </div>
                             </div>
                          </div>
                      <?php } ?>
            
         
        <script>
             const prof_menuBtn = document.querySelector('#prof_menuBtn');
             const prof_menue = document.querySelector('#prof_menu');

             prof_menuBtn.addEventListener('click', function(){
              prof_menue.classList.toggle('profile-menue-active');
             })
             const logout_confirm =document.querySelector('.logout_confirm');
             const logoutBtn = document.querySelector('#logoutBtn');
             logoutBtn.addEventListener('click', function(){
                logout_confirm.classList.toggle('logout_confirm-active');
             })
             const noBtn = document.querySelector('#noBtn');
             noBtn.addEventListener('click', function(){
                logout_confirm.classList.remove('logout_confirm-active');
             })

        </script>
           
         <!-- //when user is signe in -->  
    </div>