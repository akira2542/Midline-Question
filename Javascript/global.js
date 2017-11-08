$(function(){
     $('.child-comments').hide();
     $('a#children').on('click',function(){
     	let section = $(this).attr("name");
     	$("#C-" +section).toggle();
     });
     
     $('.form-submit').on('click',function(){
        let commentBox = $('#comment');
        let commentCheck = commentBox.val();
        if(commentCheck == '' || commentCheck == NULL){
            commentBox.addClass('form-text=error');
            return false;
        }
     });
     
     $('.form-reply').on('click',function(){
        let replyBox = $('#new-reply');
        let replyCheck = replyBox.val();
        if(replyCheck == '' || replyCheck == NULL){
            replyBox.addClass('form-text=error');
            return false;
        }
     });     
     
     $('a#reply').one('click',function(){
         let comCode = $(this).attr('name');
         let parent = $(this).parent();
         parent.append("<br /><form action='' method='post'><textarea class='form-text' name='new-reply' id='new-reply' required='required'></textarea><input type='hidden' name='code' value='"+comCode+"' /><input type='submit' class='form-submit' id='form-reply' name='new_reply' value='Reply' /></form>")
     });
})