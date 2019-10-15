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
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>게시글 보기</title>
</head>
<body>

    <h1>게시글 보기</h1>
    <h2>제목 : <?= $row['title']?></h2>
    <p>내용 :  <?= $row['content']?></p>
    <a href="edit.php?id=<?=$_GET['id']?>">수정</a>
    <a href="#">삭제</a> <br>
    <a href="index.php">뒤로가기</a>

</body>
</html>
