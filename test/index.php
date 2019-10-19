<?php
    // DB 연결을 위한 변수들
    $server_name = "192.168.0.56";      //ip 주소
    $user_name = "a11882";              //db 아이디
    $password = "Rlatmddn18!";          //db 비번
    $db_name = "test";                  //사용하고자 하는 db 이름

    // DB 연결
    $conn = mysqli_connect($server_name, $user_name, $password, $db_name);

    // 쿼리문
    // * 은 db의 모든 것을 가지고 오는 것
    // 모든 데이터를 한꺼번에 불러오는 것은 위험함으로 뒤에 "limit 1000"를 써주는 것이 좋음.
    $select_query = "SELECT * FROM board";

    // 퀴리문 실행
    $result = mysqli_query($conn, $select_query);
    
    // db의 데이터를 담을 변수
    $list = '';

    // db의 첫줄 부터 데이터가 있는 지 검사
    // 있으면 true, 없으면 false --> while문 종료
    while ($row = mysqli_fetch_array($result)){

        // id 제목 내용 날짜 순으로 출력
//        echo $row['id'].$row['title'].$row['content'].$row['created_date']."<br>";
        // 리스트에 html 테이블에 담을 변수 저장
        // id / 제목 / 날짜
        $list = $list."<tr><td>{$row['id']}</td><td><a href='post.php?id={$row['id']}'>{$row['title']}</a></td><td>{$row['created_date']}</td></tr>";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>노트북포럼</title>
    <link rel="stylesheet" type="text/css" href="../semantic/semantic.css">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="../semantic/semantic.js"></script>

</head>
<body>
    <div class="ui container center aligned">
        <h2>자유게시판</h2>
    </div>
    <div class="ui container">
        <table class="ui celled table">
            <thead>
            <tr>
                <th>id</th>
                <th>제목</th>
                <th>날짜</th>
            </tr>
            </thead>
            <tbody>
            <?=$list?>
            </tbody>
        </table>
    </div>

    <a href="write.php">글쓰기</a>
</body>
</html>