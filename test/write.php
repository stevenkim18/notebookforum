<?php
    // DB 연결을 위한 변수들
    $server_name = "192.168.0.56";      //ip 주소
    $user_name = "a11882";              //db 아이디
    $password = "Rlatmddn18!";          //db 비번
    $db_name = "test";                  //사용하고자 하는 db 이름

    // DB에 저장하기 위한 변수들
    $title = $_POST['title'];
    $content = $_POST['content'];

    // DB 연결
    // <mysqli_connect 의 기능>
    // 1. mysql 를 monitor 로 들어 갈때 아이디와 비번 입력.
    // 2. 사용하고 싶은 데이터 베이스를 선택 ex) use database;
    $conn = mysqli_connect($server_name, $user_name, $password, $db_name);
    $insert_query = "INSERT INTO board (title, content, created_date) VALUES ($title, $content, NOW())";
    mysqli_connect($conn, $insert_query);

?>