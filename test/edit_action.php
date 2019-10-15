<?php
    // 다시 해당 게시물로 돌아감.
    header("Location:/test/post.php?id={$_POST['id']}");
    //echo $_POST['id']."<br>";

    // DB 연결을 위한 변수들
    $server_name = "192.168.0.56";      //ip 주소
    $user_name = "a11882";              //db 아이디
    $password = "Rlatmddn18!";          //db 비번
    $db_name = "test";                  //사용하고자 하는 db 이름

    $title = $_POST['title'];       //제목
    //echo $title."<br>";
    $content = $_POST['content'];   //내용
    //echo $content."<br>";

    $conn = mysqli_connect($server_name, $user_name, $password, $db_name);
    
    // 수정 쿼리문
    $update_query = "UPDATE board SET title='$title', content='$content' WHERE id={$_POST['id']}";

    //echo $update_query."<br>";

    // db에 update 쿼리문 실행
    $result = mysqli_query($conn, $update_query);

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