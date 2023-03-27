<div class="leftbar">
        <div class="leftbar-container">
            <!-- When user is not signed in -->
            <div class="icons" style="display:none"> 
                <div class="profile" id='loginBtn'>
                    Log in
                </div>


                <div class="log-in-form" id = 'log_in'>
                    <form action="#">
                        <div>
                            <input type="number" name="phone" placeholder="+260...||phone number">
                        </div>
                        <div>
                            <input type="password" name='password' placeholder="enter your password">
                        </div>
                        <div>
                            <button type='submit' name='submit_log_in'> Log In</button>
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
                    <form action="#">
                        <div>
                            <input type="text" placeholder="Name" name="name">
                            <input type="text" placeholder='Surname' name="name">
                        </div>
                        <div>
                            <input type="text" name='username' placeholder= 'Choose a username'>
                        </div>
                        <div>
                            <input type="number" name="phone" placeholder="+260...||phone number">
                        </div>
                        <div>
                            <input type="password" placeholder='Choose a password' name='password' id='password'>
                            <input type="password" name="password_confirm" id="confirm_pass" placeholder="Confirm password">
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
            </div>
         <!-- // When user is not signed in -->
         <!-- when user is signed in -->
            <div class='icons'>
            <div class="settings" id="prof_menuBtn">
                Profile
            </div>
            <div class="profile-menue" id ='prof_menu'>
               <a href="../userProfile/profileUserCurrent.php">
               <div class="profife_view">
                    <div>
                        <span>P </span> View Profile
                    </div>                 
                </div>
               </a>
                <div>
                    Settings
                </div>
                <div>
                    Log in to another account
                </div>
                <div>
                    Log out
                </div>
            </div>
         </div>
         <!-- //when user is signe in -->  
         <h2>
    Trends
</h2>   
<div class="trends">
    <p>#Trends</p>
</div>
        </div>

    </div>

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

  const prof_menuBtn = document.querySelector('#prof_menuBtn');
  const prof_menue = document.querySelector('#prof_menu');

  prof_menuBtn.addEventListener('click', function(){
    prof_menue.classList.toggle('profile-menue-active');
  })
    </script>