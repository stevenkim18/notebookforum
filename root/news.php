<?php
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

    <style>
        /*컨페이너 가로 길이를 줄이기 위해서 설정*/
        @media (min-width: 900px) {
            .container {
                max-width: 900px;
            }
        }

    </style>

    <title>노트북 포럼:뉴스</title>
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
                <a class="nav-item nav-link" href="board.php">자유게시판</a>
                <a class="nav-item nav-link active" href="">뉴스</a>
                <a class="nav-item nav-link" href="#">오픈채팅</a>
            </div>

            <div class="navbar-nav ml-auto justify-content-end">
                <?php
                    @session_start();
                    // 세션에 닉네임이 없을 때
                    if(!isset($_SESSION['nickname'])) {

                        ?>
                        <a class="btn btn-primary" href="login.php">로그인</a>
                        <?php
                    }
                    // 세션에 닉네임이 있을 때
                    else {
                        ?>
                        <div class="nav-item avatar dropdown">
                            <a class="nav-link dropdown-toggle" id="navbar_profile" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <img src="image/user_image.png" width="25px" class="rounded-circle z-depth-0"
                                     alt="avatar image">
                                <?= $_SESSION['nickname'] ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar_profile">
                                <a class="dropdown-item" href="login/logout_action.php">로그아웃</a>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </nav>

    <div class="container">
        <!--제목-->
        <h1 class="mt-5">노트북 뉴스</h1>

        <hr class="mt-2">

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-2">
                    <img src="http://www.noteforum.co.kr/trash/5it47uts6a5.jpg" class="card-img">
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title">한사랑씨앤씨, '삼성 노트북5 NT550EBZ-AD3A' 특가행사 진행</h5>
                        <p class="card-text">삼성전자 노트북5` NT550EBZ-AD3는 스타일리시한 퓨어 화이트 색상을
                                            적용한 모던 슬림 디자인으로 19.9mm의 슬림한 두께에 나사가 보이지 않게
                                            설계되었으며 노트북 하판 업그레이드 도어를 이용하면 누구나 쉽게 HDD 와
                                            메모리를 업그</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-2">
                    <img src="http://www.noteforum.co.kr/trash/5it47uts6a5.jpg" class="card-img">
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title">한사랑씨앤씨, '삼성 노트북5 NT550EBZ-AD3A' 특가행사 진행</h5>
                        <p class="card-text">삼성전자 노트북5` NT550EBZ-AD3는 스타일리시한 퓨어 화이트 색상을
                            적용한 모던 슬림 디자인으로 19.9mm의 슬림한 두께에 나사가 보이지 않게
                            설계되었으며 노트북 하판 업그레이드 도어를 이용하면 누구나 쉽게 HDD 와
                            메모리를 업그</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-2">
                    <img src="http://www.noteforum.co.kr/trash/5it47uts6a5.jpg" class="card-img">
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title">한사랑씨앤씨, '삼성 노트북5 NT550EBZ-AD3A' 특가행사 진행</h5>
                        <p class="card-text">삼성전자 노트북5` NT550EBZ-AD3는 스타일리시한 퓨어 화이트 색상을
                            적용한 모던 슬림 디자인으로 19.9mm의 슬림한 두께에 나사가 보이지 않게
                            설계되었으며 노트북 하판 업그레이드 도어를 이용하면 누구나 쉽게 HDD 와
                            메모리를 업그</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-2">
                    <img src="http://www.noteforum.co.kr/trash/5it47uts6a5.jpg" class="card-img">
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title">한사랑씨앤씨, '삼성 노트북5 NT550EBZ-AD3A' 특가행사 진행</h5>
                        <p class="card-text">삼성전자 노트북5` NT550EBZ-AD3는 스타일리시한 퓨어 화이트 색상을
                            적용한 모던 슬림 디자인으로 19.9mm의 슬림한 두께에 나사가 보이지 않게
                            설계되었으며 노트북 하판 업그레이드 도어를 이용하면 누구나 쉽게 HDD 와
                            메모리를 업그</p>
                    </div>
                </div>
            </div>
        </div>

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
