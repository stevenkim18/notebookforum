$(function () {
    let email = $('#email');                                    // 이메일
    let email_comment = $('#email_comment');                    // 이메일 확인
    let nickname = $('#nickname');                              // 닉네임
    let nickname_comment = $('#nickname_comment');              // 닉네임 확인
    let password = $('#password');                              // 비번
    let password_comment = $('#password_comment');              // 비번 확인
    let password_check = $('#password_check');                  // 비번 체크
    let password_check_comment = $('#password_check_comment');  // 비번 체크 확인


    // 이메일 형식 확인
    // .blur 입력 창에서 포커스 아웃 되어었을 때
    // .keyup 입력 창에 키가 올라갔을 때
    email.keyup(function () {

        // 이메일 검사 정규 표현식
        let regex=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;

        // 이메일 입력창에 아무 글도 없을 떄
        if(email.val().length == 0){
            email_comment.text('');
        }
        // 이메일 입력창에 글이 있을 때
        else{
            // 바른 이메일 형식이 아닐 때
            if(regex.test(email.val()) === false){
                // email_comment 의 class 값 중에 text-muted 를 해서 색상 적용이 안되었음
                // text-muted를 삭제 하니까 색상 가능
                //alert("성공");
                email_comment.css("color", 'red');
                email_comment.text('올바른 이메일 형식으로 입력해주세요!');

            }
            // 바른 이메일 형식 일때
            else {
                $.ajax({
                    type: 'post',
                    dataType:'text',
                    url:"/join/email_check.php",
                    data: {"email": email.val()},

                    success :function (text) {
                        console.log(text);
                        let json = JSON.parse(text);
                        console.log(json);

                        if(json.res =="good"){
                            email_comment.text("사용 가능한 이메일입니다");
                            email_comment.css("color", "blue");
                        }
                        else{
                            email_comment.text("이미 가입한 이메일입니다");
                            email_comment.css("color", "red");
                        }
                    },

                    error: function (json) {
                        //alert("실패"+json);
                        console.log(" ajax 실패");
                    }

                });

                email_comment.css("color", 'blue');
                email_comment.text("올바른 이메일 형식입니다!");
            }
        }

    });

    // 닉네임 중복 검사
    nickname.keyup(function () {

        // 닉네임이 빈칸 일떄
        if(nickname.val().length == 0){
            nickname_comment.text('');
        }
        // 빈칸이 아닐 떄
        else{
            // ajax 로 통신
            $.ajax({

                type: 'post',
                dataType:'text', //--> 이거를 지우니까 됬다..
                // dataType을 json 대신 text로 함(json 형식이 아니면 에러 발생)
                // text 로 받아와서 json 형식으로 바꿈

                //contentType: 'application/json; charset=utf-8', // json 형식으로 추가!
                url:"/join/nickname_check.php",
                data: {"nickname": nickname.val()},

                success :function (text) {
                    // text 로 받아온 값을 json 형식으로 바꿔줌.
                    console.log(text);
                    let json = JSON.parse(text);
                    console.log(json);

                    //key 값으로 value 값 확인
                    // 중복되는 닉네임이 없을 때
                    if(json.res === "good"){
                        nickname_comment.text('사용 가능한 닉네임입니다!');
                        nickname_comment.css("color", "blue");
                    }
                    // 중복되는 닉네임이 있을 때
                    else {
                        nickname_comment.text("이미 사용중인 닉네임입니다!");
                        nickname_comment.css("color", "red");
                    }

                },

                error: function (json) {
                    //alert("실패"+json);
                    console.log(" ajax 실패");
                }
            })

        }

    });

    // 비밀번호 형식 검사
    password.keyup(function () {

        // 8~16자리의 영문 대소문자, 숫자, 특수 기호 포함
        let regax = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,16}$/;
            
        //비밀번호 입력 창이 비어 있을 때
        if(password.val().length == 0){
            password_comment.text("");
        }
        // 비밀번호 입력 창에 비어 있지 않을 떄
        else {
            
            // 바른 비밀번호 형식이 아닐 때
            if(regax.test(password.val()) === false){
                password_comment.css("color", "red");
                password_comment.text("비밀번호는 영문 대소문자, 숫자, 특수기호가 포함되어야 합니다(8~16자리)");
            }
            else{
                password_comment.css("color", "blue");
                password_comment.text("사용 가능한 비밀번호 입니다.");
            }
            
        }
    });

    // 비밀번호 확인 검사(비밀번호와 일치 해야함)
    password_check.keyup(function () {

        if(password_check.val().length == 0){
            password_check_comment.text("");
        }
        else {
            // 비번과 비번 체크가 일치할때
            if(password.val() === password_check.val()){
                password_check_comment.css("color", "blue");
                password_check_comment.text("비밀번호가 일치합니다!");
            }
            else{
                password_check_comment.css("color", "red");
                password_check_comment.text("비밀번호가 일치하지 않습니다!");
            }
        }

    })
});