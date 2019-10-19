<!doctype html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">

        <title>노트북 포럼</title>
    </head>

    <body>
        <!--상단 네비게이션 바
        navbar : 네비게이션
        navbar-expand-lg : 반응형 웹 크기 / sm(스몰), me(미디엄), lg(라지)
        navbar-dark, bg-dark : 배경 색 / light(밝음) -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!--네비게이션 로고
            navbar-brand : 네비게이션 로고-->
            <a class="navbar-brand" href="">
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
                    <a class="nav-item nav-link" href="board.php">자유게시판</a>
                    <a class="nav-item nav-link" href="news.php">뉴스</a>
                    <a class="nav-item nav-link" href="#">오픈채팅</a>
                </div>

                <div class="navbar-nav ml-auto justify-content-end">
                    <a class="btn btn-primary" href="login.php">로그인</a>
                </div>

            </div>

        </nav>

        <img src="image/home.jpg" class="image-fluid" width="100%">

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