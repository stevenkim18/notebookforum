<?php
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--제이쿼리 슬림 버전은 ajax가 포함이 안 되어 있음-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <script type="text/javascript" src="join/member_info_check.js"></script>

    <title>노트북 포럼:회원가입</title>

    <style>
        /*컨페이너 가로 길이를 줄이기 위해서 설정*/
        @media (min-width: 500px) {
            .container {
                max-width: 500px;
            }
        }
    </style>

</head>
<body>

    <div class="container">

        <h1 class="mt-5">회원가입</h1>

        <hr class="mt-2">

        <form action="join/join_action.php" method="post">
            <div class="form-group">
                <label>이메일(아이디)</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="이메일을 입력해주세요">
                <!--이메일 형식 검사를 위한 작은 텍스트-->
                <small id="email_comment" class="form-text"></small>
            </div>

            <div class="form-group">
                <label>닉네임</label>
                <input type="text" id="nickname" name="nickname" class="form-control" placeholder="닉네임을 입력해주세요">
                <small id="nickname_comment" class="form-text"></small>
            </div>

            <div class="form-group">
                <label>비밀번호</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="비밀번호를 입력해주세요">
                <small id="password_comment" class="form-text"></small>
            </div>
            <div class="form-group">
                <label>비밀번호 확인</label>
                <input type="password" id="password_check" class="form-control" placeholder="비밀번호를 확인해주세요">
                <small id="password_check_comment" class="form-text"></small>
            </div>
            <div class="form-group">
                <label>이름</label>
                <input type="text" name="name" class="form-control" placeholder="이름을 입력해주세요">
            </div>
            <div class="form-group">
                <label>휴대전화</label>
                <input type="tel" name="phone" class="form-control" placeholder="휴대전화 연락처를 입력해주세요">
            </div>
            <div class="form-group">
                <label>주소</label>
                <input type="text" name="address" class="form-control" placeholder="주소를 입력해주세요">
            </div>

            <input type="submit" class="btn btn-primary" value="회원가입">
        </form>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>

</body>
</html>
