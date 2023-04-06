
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


textarea_comment.addEventListener('input', function() {
  textarea_comment.style.height = 'auto';
  textarea_comment.style.height = textarea_comment.scrollHeight + 'px';
  commentDiv.style.height = 'auto';
});
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
  
