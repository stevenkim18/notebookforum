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
                <a class="nav-item nav-link active" href="">노트북 정보</a>
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

    <div class="container">

        <h1 class="mt-5">노트북 정보</h1>

        <hr class="mt-2">

        <div class="card-deck mt-3">
            <div class="card">
                <!--카드 이미지-->
                <img class="card-img-top" src="image/msi_gs65_9sd.jpg">

                <div class="card-body">
                    <h4 class="card-title">MSI gs65 9sd</h4>
                    <p class="card-text">i7-9750H/16GB RAM/512GB SSD/15.6인치/1.9kg</p>
                    <a href="#" class="btn btn-primary">보러가기</a>
                </div>
            </div>
            <div class="card">
                <!--카드 이미지-->
                <img class="card-img-top" src="image/msi_gs65_9sd.jpg">

                <div class="card-body">
                    <h4 class="card-title">MSI gs65 9sd</h4>
                    <p class="card-text">i7-9750H/16GB RAM/512GB SSD/15.6인치/1.9kg</p>
                    <a href="#" class="btn btn-primary">보러가기</a>
                </div>
            </div>
            <div class="card">
                <!--카드 이미지-->
                <img class="card-img-top" src="image/msi_gs65_9sd.jpg">

                <div class="card-body">
                    <h4 class="card-title">MSI gs65 9sd</h4>
                    <p class="card-text">i7-9750H/16GB RAM/512GB SSD/15.6인치/1.9kg</p>
                    <a href="#" class="btn btn-primary">보러가기</a>
                </div>
            </div>
        </div>

        <div class="card-deck mt-3">
            <div class="card">
                <!--카드 이미지-->
                <img class="card-img-top" src="image/msi_gs65_9sd.jpg">

                <div class="card-body">
                    <h4 class="card-title">MSI gs65 9sd</h4>
                    <p class="card-text">i7-9750H/16GB RAM/512GB SSD/15.6인치/1.9kg</p>
                    <a href="#" class="btn btn-primary">보러가기</a>
                </div>
            </div>
            <div class="card">
                <!--카드 이미지-->
                <img class="card-img-top" src="image/msi_gs65_9sd.jpg">

                <div class="card-body">
                    <h4 class="card-title">MSI gs65 9sd</h4>
                    <p class="card-text">i7-9750H/16GB RAM/512GB SSD/15.6인치/1.9kg</p>
                    <a href="#" class="btn btn-primary">보러가기</a>
                </div>
            </div>
            <div class="card">
                <!--카드 이미지-->
                <img class="card-img-top" src="image/msi_gs65_9sd.jpg">

                <div class="card-body">
                    <h4 class="card-title">MSI gs65 9sd</h4>
                    <p class="card-text">i7-9750H/16GB RAM/512GB SSD/15.6인치/1.9kg</p>
                    <a href="#" class="btn btn-primary">보러가기</a>
                </div>
            </div>
        </div>

        <div class="card-deck mt-3">
            <div class="card">
                <!--카드 이미지-->
                <img class="card-img-top" src="image/msi_gs65_9sd.jpg">

                <div class="card-body">
                    <h4 class="card-title">MSI gs65 9sd</h4>
                    <p class="card-text">i7-9750H/16GB RAM/512GB SSD/15.6인치/1.9kg</p>
                    <a href="#" class="btn btn-primary">보러가기</a>
                </div>
            </div>
            <div class="card">
                <!--카드 이미지-->
                <img class="card-img-top" src="image/msi_gs65_9sd.jpg">

                <div class="card-body">
                    <h4 class="card-title">MSI gs65 9sd</h4>
                    <p class="card-text">i7-9750H/16GB RAM/512GB SSD/15.6인치/1.9kg</p>
                    <a href="#" class="btn btn-primary">보러가기</a>
                </div>
            </div>
            <div class="card">
                <!--카드 이미지-->
                <img class="card-img-top" src="image/msi_gs65_9sd.jpg">

                <div class="card-body">
                    <h4 class="card-title">MSI gs65 9sd</h4>
                    <p class="card-text">i7-9750H/16GB RAM/512GB SSD/15.6인치/1.9kg</p>
                    <a href="#" class="btn btn-primary">보러가기</a>
                </div>
            </div>
        </div>

        <!--페이지 숫자-->
        <div class="d-flex justify-content-center my-5">

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <!--왼쪽-->
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <!--페이지-->
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                    <!--오른쪽-->
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
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