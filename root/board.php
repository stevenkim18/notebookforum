<?php
    // include --> 외부에서 파일을 불러옴. 불러온 파일이 없어도 실행 (require : 파일이 없으면 에러)
    //
    include "../db.php";

    // 내림 차순으로 정렬(최신글이 맨 위로 가게 하기 위해서)
    $select_query = "SELECT * from board ORDER BY id DESC";
    $sql = mq($select_query);
    //echo $sql;

    $list = '';

    // db에 자료가 없을 때까지 while 문 실행
    // $board 에 연관 배열 형태로 db의 데이터들을 저장
    while ($board = $sql->fetch_array()){

        // echo $board; --> ArrayArrayArrayArrayArrayArrayArray

        // table에 뿌려줄 html 태그를 생성해서 list에 저장
        $list = $list."<tr>
                            <td>{$board['id']}</td>
                            <td>{$board['title']}</td>
                            <td>{$board['name']}</td>
                            <td>{$board['created_date']}</td>
                            <td>{$board['views']}</td>
                       </tr>";
    }

     // echo $list; id 제목 내용 날짜 조회수 순으로 데이터가 출력 됨.

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

    <title>노트북포럼:자유게시판</title>
</head>
<body>
    <!--상단 네비게이션 바
    navbar : 네비게이션
    navbar-expand-lg : 반응형 웹 크기 / sm(스몰), me(미디엄), lg(라지)
    navbar-dark, bg-dark : 배경 색 / light(밝음) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!--네비게이션 로고
        navbar-brand : 네비게이션 로고-->
        <a class="navbar-brand" href="index.php">
            <img src="image/laptop.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            노트북 포럼
        </a>

        <!--화면이 작아졌을 때 오른쪽 상단에 삼선 메뉴 버튼이 생기게 함.-->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#alt" aria-controls="alt" aria-expanded="false"
                aria-label="Toggle navigation">

            <!--navbar-toggler-icon : 삼선 메뉴 버튼-->
            <span class="navbar-toggler-icon"></span>

        </button>

        <!--메뉴들-->
        <div class="collapse navbar-collapse" id="alt">
            <div class="navbar-nav">
                <!--active : 메뉴 활성화-->
                <a class="nav-item nav-link" href="info.php">노트북 정보</a>
                <a class="nav-item nav-link" href="#">노트북 리뷰</a>
                <a class="nav-item nav-link" href="#">노트북 중고거래</a>
                <a class="nav-item nav-link active" href="">자유게시판</a>
                <a class="nav-item nav-link" href="news.php">뉴스</a>
                <a class="nav-item nav-link" href="#">오픈채팅</a>
            </div>

            <div class="navbar-nav ml-auto justify-content-end">
                <a class="btn btn-primary" href="login.php">로그인</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <!--제목-->
        <h1 class="mt-5">자유게시판</h1>

        <hr class="mt-2">

        <a href="write.php"><button type="button" class="btn btn-success float-right mb-2">글쓰기</button></a>

        <table class="table table-striped">
            <!--목차-->
            <thead>
            <tr>
                <th scope="col" style="width: 8%">#</th>
                <th scope="col" style="width: 55%">제목</th>
                <th scope="col" style="width: 15%">닉네임</th>
                <th scope="col" style="width: 15%">작성일</th>
                <th scope="col" style="width: 8%">조회수</th>
            </tr>
            </thead>
            <!--내용-->
            <tbody>
                <?= $list ?>
            </tbody>
        </table>

        <!--페이지-->
        <ul class="pagination justify-content-center my-4">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>



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
