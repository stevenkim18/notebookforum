<?php
    // DB 연결을 위한 변수들
    $server_name = "192.168.0.56";      //ip 주소
    $user_name = "a11882";              //db 아이디
    $password = "Rlatmddn18!";          //db 비번
    $db_name = "test";                  //사용하고자 하는 db 이름

    // DB 연결
    $conn = mysqli_connect($server_name, $user_name, $password, $db_name);

    // 보안을 위해서 id값을 필터링 함.
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);

    // 쿼리문
    // get으로 받아온 id 값으로 db에서 데이터를 찾음.
    $select_query = "SELECT * FROM board WHERE id = {$filtered_id}";

    // 퀴리문 실행
    $result = mysqli_query($conn, $select_query);

    // 가지고 온 데이터를 저장
    $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>글수정</title>
    </head>

    <body>
        <h2>글수정</h2>

        <!-- post 방식으로 edit_action.php 에 넘김 -->
        <form action="edit_action.php" method="post">

        <!-- 수정 할 내용을 input 태그 값에 넣음   -->
        <p>제목: <input type="text" name="title" placeholder="제목" value="<?=$row['title']?>"></p>
        <p>내용: <input type="text" name="content" placeholder="내용" value="<?=$row['content']?>"></p>
            <input type="hidden" name="id" value="<?=$filtered_id?>">
        <p><input type="submit" value="글 수정하기"></p>
        <p><a href="post.php?id=<?=$filtered_id?>">뒤로가기</a></p>

        </form>
    </body>
</html>
