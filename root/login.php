<?php
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">

    <style>
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
    </style>
    <!--placeholder를 위로 띄우러고 사용 적용 안됨-->
    <link href="../css/floating-labels.css" rel="stylesheet">

    <title>노트북 포럼:로그인</title>
</head>
<body class="text-center container">

    <form class="form-signin" action="login/login_action.php" method="post">
        <img class="mb-4" src="image/laptop.svg" alt width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">로그인</h1>
        <div class="form-label-group">
            <label for="inputEmail" class="sr-only">이메일</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="이메일" required autofocus>
        </div>
        <label for="inputPassword" class="sr-only">비밀번호</label>
            <input type="password" id="inputPassword" name="password"class="form-control" placeholder="비밀번호" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">로그인</button>
        <a href="join.php" class="btn btn-lg btn-success btn-block">회원가입</a>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>
</html>
