<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #2e2e2e;
    max-width: 1800px;
    margin-left: auto;
    margin-right: auto;
    color: white;
}
.nav-a{
   
    display: flex;
    min-width: 160px;
}
a{
     color: inherit;
    text-decoration: none;
}

/* Main things */
.main{height: 100vh;
    display: flex;
    justify-content: center;
}
/* Side-Bar */
.sidebar-nav{
   flex: 0.2;
  max-width: 20%;
    padding: 90px 40px;
    color: white;

}
.sidebar-nav ul{
    position: relative;
    top: 80px;
}
.sidebar-nav ul div{
    display: flex;
}
.sidebar-nav ul li{
    list-style: none;
    padding: 12px;
    margin-top: 20px;
    background-color: #ff9b05;
    border-radius: 42px;
    font-size: 18px;
    font-weight: 550;
    margin-right: 20px;
    cursor: pointer;
    width: 300px;
    box-shadow: 2px 6px 5px 0px rgb(29, 28, 28);
  
}
.sidebar-nav ul .active li{
    background-color: #1a1a1a;
    color: white;
    min-width: 100px;
    }
    .sidebar-nav ul .active span{
        background-color: #1a1a1a;
    color: white;
    animation: span 1s infinite linear;
    }
.sidebar-nav ul li:hover{
    transform: scale(1.1);
    transition: 0.3s ease;
    background-color: #1d1c1c;
    box-shadow: 0px 2px 3px 0px;
}
.sidebar-nav ul span:hover {
    transform: scale(1.2);
    transition: 0.3s ease;
}
.sidebar-nav ul span{
    background-color: #ff9b05;
    padding: 6px;
    border-radius: 30px;
    height: 4px;
    position:relative;
    top: 48px;
    margin-right: 10px;
    box-shadow: 2px 2px 3px 0px black;
    
}
@keyframes span{
    0% {
        transform: scale(1, 1);
      }
      25% {
        transform: scale(1, 1);
      }
      50% {
        transform: scale(1, 1.1);
      }
      75% {
        transform: scale(1, 1);
      }
      100% {
        transform: scale(1, 1);
      }
}
/* Sidebar Ends*/

/* Main Content */
.main-content{
    z-index: 100;
    width: 100%;
    text-align: center;
    justify-content: center;
    height: 100%;
    -ms-overflow-style: none;
  scrollbar-width: none;
    overflow-y: scroll; 
 justify-content: center;
}
.nav{
    backdrop-filter: blur(4px);
    z-index: 100;
    text-align: left;
    position: sticky;
    top: 0;
    padding: 10px;
    border-bottom: 2px solid darkorchid;
}
.posts{
    padding: 10px 20%; 
    width: 100%;  
   height: 91%;
  
}
.con_form{
    padding: 20px;
    background-color: #1d1c1c;
    max-width: 550px;
    margin-top: 10px;
    min-width: 260px;
    border-radius: 6px;
}
.con_form span{
    box-shadow: 1px 3px 3px 0px black;
    padding: 16px;
    border-radius: 54px;
    margin-right: 22px;
    background-color: #3a3938e1;
    cursor: pointer;
}
.con_form span:hover{
    box-shadow: 1px 3px 3px 0px #8b078b;
}
.con_form button{
    font-size: 20px;
    width:100%;
    padding: 8px;
    border-radius: 32px;
    border: none;
    background-color: #424242;
    cursor: pointer;
    outline: none;

}
.conform_desgn_head{
    display: grid;
    grid-template-columns: 45% 10% 45%;
}
.conform_desgn_head button{
    width: 100%;
    position: relative;
    top: -10px;
    padding: 2px;
    background-color: #fff;
    box-shadow: 0px 0px 3px 0px #8b078b;
}
.post-container{
    box-shadow: 2px 6px 10px 0px rgb(29, 28, 28);
    background-color: #201f1f;
    height: 410px;
    max-width: 550px;
    min-width: 260px;
    margin-top: 16px;
    border-radius: 8px;
  margin-bottom: 20px;
    text-align: left;
    
   }
.post-container:hover{
    box-shadow: 2px 6px 14px 0px rgb(29, 28, 18);
}
.post-box{
    background: #313131;
    padding: 12px;
    height: 300px;
    margin-bottom: 8px;
}
.post-head{
    padding: 12px;
    height: 40px;
    display: flex;
}
.post_head{
    padding: 12px;
    height: auto;
    display: block; 
}
.post_head div:hover{
    background-color: #242323;
    
}
.post_head .input-form-linkups input{
    padding: 12px;
    border-radius: 6px;
    outline: none;
    background-color:#2c2d2e ;
    border: none;
    margin-right: 10px;
    margin-top: 10px;
}
.heading-post{
    flex: 1;
}
.head-dots{
    display: block;
    cursor: pointer;
}
.head-dots small{
    
   margin-right: 4px;
    text-align: center;
    position: relative;
    top: -5px;
    background-color: #fff;
    border-radius: 43px;
    cursor: pointer;
    padding: 1px;
}
.head-dots:hover{
    transform: scale(1.1);
    transition: 0.3s ease;
}
.comment{
    display: flex;
    padding: 12px;
}
.react{
flex: 0.4;
text-align: center;
padding: 8px;
background-color: #342b36;
border-radius: 43px;
}
.comment_in input{
    padding: 8px;
    border-radius: 32px;
    border: none;
    outline: none;
    width: 90%;
    margin-left: 20px;
    font-weight: 600;
    cursor: pointer;
    
}
.reply-form{
    position: absolute;
    backdrop-filter: blur(30px);
    height: 0;
    width: 0;
    visibility: hidden;
    display: none;
    top: 200px;
    margin-left: -140px;
    border-radius: 8px;
    box-shadow: 0px 3px 3px 0px black;
    padding: 12px;
    text-align: center;
}
.reply-form-active{
    height: 250px;
    width: 600px;
    display: block;
    visibility: visible;
}
.post-choice{
    position: absolute;
    backdrop-filter: blur(30px);
    height: 0;
    width: 0;
    top: 100px;
    
    border-radius: 8px;
    box-shadow: 0px 3px 3px 0px black;
    padding: 12px;
    text-align: center;
    z-index: 100;
    left: 36%;
    display: none;
    visibility: hidden;
  
}
.post-choice-active{
    display: inline-block;
    visibility: visible;
    height: auto;
    width: 30%;
}
.input-form{
    padding: 12px;
}
.post-choice button{
    cursor: pointer;
    background: rgb(44, 42, 42);
    border: 1px solid rgb(5, 5, 5);
    padding: 8px;
    border-radius: 8px;
    width: 100%;
    color: white;
    font-weight: 600;
    
}
.post-choice button:hover{
    background-color: #640564;
    transition: 0.3s ease-in-out;
    transform: scale(1.02);
}.input-form input{
    padding: 12px;
    border-radius: 6px;
    outline: none;
    background-color:#2c2d2e ;
    border: none;
    margin-right: 10px;
    width: 100%;
}
.input-form textarea{
    border-radius: 6px;
    background-color: #2c2d2e;
    outline: none;
    border: 1px solid rgb(29, 29, 29);
    padding: 12px;
    resize: none;
    min-height: 80px;
    width: 100%;
    font-size: 22px;
    margin-bottom: 10px;
}
.input-form div{
    display: flex;
}
.post_formHC{
    display: none;
}
.post_formHC-active{
    display: block;
}
.post-choice .select-post-type, .select-post-type{
    padding: 12px;
    font-weight: 600;
    font-size: 20px;
    text-align: left;
    border-radius: 12px;
    border: 1px solid black;
    margin-bottom: 10px;
    cursor: pointer;
}
.post-choice .select-post-type:hover{
    background-color: #252323;
    
}
.post-choice small{
    margin-bottom: 10px;
}
.post-choice .dot{
    margin-top: 10px;
    padding:1px;
    border-radius: 43px;
    backdrop-filter: blur(4px);
    border: 1px solid rgb(20, 20, 20);
    box-shadow: 0px 1px 3px 0px blueviolet;
    background-color: #fff;
}
.post_head .dot{
    margin-top: 10px;
    padding:1px;
    width: 100%;
    border-radius: 43px;
    backdrop-filter: blur(4px);
    border: 1px solid rgb(20, 20, 20);
    box-shadow: 0px 1px 3px 0px blueviolet;
}
.dot-active{
    box-shadow:1px 3px 3px 0px rgb(19, 199, 19);
}
.close-btn{
    position: relative;
    left: 50%;
    top: -60px;
    padding: 18px;
    backdrop-filter: blur(42px);
    border-radius: 44px;
    cursor: pointer;
    box-shadow: 0px 3px 3px 0px black;
    color: #000;
    font-weight: 600;
}
.close-btn:hover{
    transform: scale(1.2);
    transition: 0.3s ease;
    background-color: #242323;
    color: floralwhite;
}
.input-reply{
    display: flex;
    margin-top: 50px;
    margin-left: 40px;
}
.input-reply span{
    margin-right: 14px;
    padding: 20px;
    background-color: #050505;
    border-radius: 43px;
}
.input-reply textarea{
    max-width: 360px;
    min-width: 360px;
    height: 40px;
    resize: none;
    position: relative;
    top: -12px;
    border-radius: 32px;
    background-color: #1f1d1d;
    border: none;
    margin-right: 15px;
    outline: none;
    padding: 4px;
    font-size: 18px;
    font-weight: 600;
    padding:5px 12px;
    color: white;
   
}
.input-reply button{
    padding: 10px;
    border: none;
    margin-top: -8px;
    background: #880281;
    border-radius: 12px;
    width: 70px;
    font-weight: 600;
    color: white;
    cursor: pointer;
    box-shadow: 2px 3px 4px 0px black;
}
/* Main things End */
/*Left bar*/
.leftbar{
    width: 450px;
    padding: 40px;
}
.leftbar .leftbar-container{
    position: relative;
    top: 100px;
}
.icons{
    position: relative;
    top:-120px;
    display: flex;
}
.profile, .settings{
    padding: 20px;
    cursor: pointer;
    background: #000;
    border-radius: 43px;
    margin-right: 12px;
    font-weight: 600;
    box-shadow: 2px 3px 3px 0px rgb(95, 44, 80)
}
.settings{
    background-color: #0e0d0d;
    
}
.settings:hover{
    background-color: #000000;
    box-shadow: 0px 2px 3px 0px;
}
.profile:hover{
    box-shadow: 0px 2px 3px 0px;
}
.leftbar-container h2{
    margin-left: 12px;
}
.logout_confirm{
    background-color: #0e0d0d;
    text-align: center;
    margin-top: 10px;
    display: none;
    border-radius: 8px;
    box-shadow: 0px 3px 5px 0px #050522;
}
.logout_confirm button{
    width: 100%;
    padding: 12px;
    margin-right: 10px;
    font-weight: 600;
    color: white;
    border-radius: 8px;
    border: none;
    cursor:pointer;

}
.logout_confirm-active{
    display: block;
}
.logout_confirm .yes{
    background-color: red;
}
.yes:hover,.no:hover{
    transform: scale(1.1);
    transition: 0.2s ease;
}
.logout_confirm .no{
    background-color: #313131;
}
.logout_confirm div{
    display: flex;

}

.trends{
    background-color: #292929;
    height: 400px;
    margin-top: 12px;
    border-radius: 8px;
    padding: 12px;
    font-size: 20px;
    
}
.trends p{
    padding: 8px;
    cursor: pointer;
    border-radius: 32px;
}
.trends p:hover{
    background-color: #383838;
}


.log-in-form{
    position: absolute;
    top: 120%;
    padding: 12px;
    left: -40%;
    background-color: #1a1a1a;
    border-radius: 6px;
    display: none;
}
.log-in-form div, .sign-up-form div{
    padding: 4px;
    display: flex;
}
.log-in-form  input, .sign-up-form input{
    padding: 4px;
    width: 100%;
    background-color: #fff;
    border-radius: 4px;
    outline: 1px solid #8b078b;
    margin-right: 10px;
}
.log-in-form button , .sign-up-form button{
    padding: 12px;
    width: 100%;
    font-weight: 600;
    background-color:#1a1a1a;
    color: white;
    border-radius: 8px;
    border: none;
}
.log-in-form button:hover , .sign-up-form button:hover{
    background-color: #8b078b;
    transition: 0.3s ease;
    transform: scale(1.01);
}
.log-in-form .footer ,.sign-up-form .footer{
    cursor: pointer;
    text-align: center;
    margin-top: 4px;
    border-top:1px solid #2e2e2e;
}
.sign-up-form{
    position: absolute;
    top: 120%;
    padding: 12px;
    left: -40%;
    background-color: #1a1a1a;
    border-radius: 6px;
    display: none;
}
.sign-up-form-active{
    display: block;
}
.log-in-form-active{
    display: block;
}
#span_signup, #span_login{
    color: #8b078b;
    cursor: pointer;
}
.profile-menue{
    position: absolute;
    top:120%;
    left:-50%;
    padding: 12px;
    background-color: #1a1a1a;
    border-radius: 6px;
    font-weight: 600;
    display: none;
}
.profile-menue div{
    padding: 8px;
    cursor: pointer;
}
.profile-menue .div:hover{
    background-color: #313131;
    border-radius: 9px;
    transition: 0.1s ease;
}
.profile-menue .profife_view{
    padding: 18px;
    display: flex;
    text-align: center;
}
.profile-menue .profife_view span{
    padding: 12px 16px;
    border-radius: 54px;
    background-color: orange;
    margin-right: 16px;
    position: relative;
}
.profile-menue .profife_view div{
    padding-bottom: 26px;
    border-bottom: 4px solid grey;
    border-radius: 0;
}
.profile-menue-active{
    display: block;
}
.errormsg{
    text-align: center;
    color: red;
    margin-top: -110px;
    position: absolute;
}
/* Responcive Design*/

/* Tablets */
@media only screen and (min-width: 768px) and (max-width: 1023px) {
    /* CSS styles here */
    .leftbar{
        display: none;
    }
    .sidebar-nav{
        width: 20%;
    }
  
  }

  /* Smartphones */
@media only screen and (max-width: 767px) {
    /* CSS styles here */
    .leftbar{
        display: none;
    }
    .sidebar-nav{
        display: none;
    }
    
    .post-choice-active{
        width: 60%;
        left: 20%;
       
    }
    .input-form textarea{
        min-width: 20px;
    }
    
    .post-choice .dot{
        left: 110%;
    }
    .reply-form-active{
        width: 100%;
        display:none;
        margin-top: -90px;
    }
    .con_form{
        left: 15%;
    }
  }
  </style>