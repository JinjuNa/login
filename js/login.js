$(document).ready(function(){
    $("#login").click(function(){
        var action = $("#loginform").attr("action");
        var form_data = {
            Id : $("#inputLoginId").val(),
            Pw : $("#inputLoginPw").val(),
            is_ajax : 1
            //is_ajax의 의미
        };
        alert(form_data.Pw);
        $.ajax({
            type : "POST",
            url : action,
            data : form_data,
            success : function(response){
                if(response == 'success'){
                    $("#message").html("<p class='success'>로그인 성공</p>");
                    $("#loginform").slideUp('slow');
                }
                else{
                    $("#message").html("<p class='error'>아이디 또는 비밀번호가 잘못되었습니다.</p>")
                    console.log(response)
                }
            }
        });
        return false;
        //무슨의미?
    });
});