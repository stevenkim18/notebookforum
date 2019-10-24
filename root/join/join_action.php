<?php
    //db파일 연동
    include "../../db.php";

    $email = $_POST['email'];
    //echo $email;
    $nickname = $_POST['nickname'];
    //echo $nickname;
    // 비밀번호 암호화
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //echo $password;

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $insert_query = "INSERT INTO member (email, nickname, password, name, phone, address) VALUES ('$email', '$nickname', '$password', '$name', '$phone','$address')";
    // echo $insert_query;
    $sql = mq($insert_query);

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


    <title>Document</title>
</head>
<body>

    <!--다이얼로그-->
    <div class="modal fade" id="messageModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--모델 해더-->
                <div class="modal-header">
                    <h4 class="modal-title">회원가입 성공</h4>
                </div>
                <!--모델 바디-->
                <div class="modal-body">
                    <p>회원가입이 되었습니다. 로그인 후 서비스를 이용해주세요!</p>
                </div>
                <!--모델 하단-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="location.href='../login.php'">확인</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // 다이얼로그 배경 클릭시 다이얼로그 없어지는 것을 막음
        $('#messageModal').modal({backdrop: 'static', keyboard: false});
        $('#messageModal').modal("show");
    </script>

</body>
</html>

