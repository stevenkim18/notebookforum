<?php
    header("Location:/test/index.php");

    // DB 연결을 위한 변수들
    $server_name = "192.168.0.56";      //ip 주소
    $user_name = "a11882";              //db 아이디
    $password = "Rlatmddn18!";          //db 비번
    $db_name = "test";                  //사용하고자 하는 db 이름

    $conn = mysqli_connect($server_name, $user_name, $password, $db_name);

    $delete_query = "DELETE FROM board WHERE id={$_GET['id']}";

    $result = mysqli_query($conn, $delete_query);

    // db에 잘 저장되었는지 확인
    if($result === false){
        //echo "실패";
        error_log(mysqli_connect_error($conn));
    }
    else{
        //echo "성공";
    }

    // 종료
    exit;
?>
