$(document).ready(function(){
    $("#login").click(function(){
        var action = $("#loginform").attr("action");
        var form_data = {
            Id : $("#inputLoginId").val(),
            Pw : $("#inputLoginPw").val(),
            is_ajax : 1
            //is_ajax의 의미
        };

        $.ajax({
            type : "POST",
            url : action,
            data : form_data,
            success : function(result){
                var data = result;
                if(data){
                    console.log(result);
                    $("#message").html("<p class='success'>로그인 성공</p><a href='./board_list.php'>확인</a>");
                    $("#loginform").slideUp('slow');
                    return;
                }
                else{
                    $("#message").html("<p class='error'>아이디 또는 비밀번호가 잘못되었습니다.</p>")
                }
            }
        });
        return false;
        //무슨의미?
    });
});