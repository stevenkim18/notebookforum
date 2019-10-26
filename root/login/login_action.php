<?php
    include "../../db.php";

    $email = $_POST['email'];
    //echo $email;
    $password = $_POST['password'];
    //echo $password;

    $select_query = "SELECT * FROM member WHERE email='{$email}'";

    $sql = mq($select_query);

    // 회원정보를 배열로 저장
    $member = $sql->fetch_array();

    // 암호와된 비번 저장
    $hash_password = $member['password'];

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

<!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#messageModal">Open Modal</button>-->

<body>

    <!--다이얼로그-->
    <div class="modal fade" id="messageModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">

                <?php
                    if(password_verify($password, $hash_password)) {

                        $_SESSION['email'] = $member["email"];
                        $_SESSION['nickname'] = $member['nickname'];

                        ?>
                        <!--모델 해더-->
                        <div class="modal-header">
                            <h4 class="modal-title">로그인 성공</h4>
                        </div>
                        <!--모델 바디-->
                        <div class="modal-body">
                            <p><?=$member['name']?>님 환영합니다</p>
                        </div>
                        <!--모델 하단-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="location.href='../index.php'">확인</button>
                        </div>
                        <?php
                    }
                    else {
                        ?>
                        <!--모델 해더-->
                        <div class="modal-header">
                            <h4 class="modal-title">로그인 실패</h4>
                        </div>
                        <!--모델 바디-->
                        <div class="modal-body">
                            <p>아이디와 비밀번호를 확인해주세요!</p>
                        </div>
                        <!--모델 하단-->
                        <div class="modal-footer">
                            <a href="../login.php">
                                <button type="button" class="btn btn-primary" onclick="location.href='../login.php'">확인</button>
                            </a>
                        </div>
                        <?php
                    }
                ?>

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
