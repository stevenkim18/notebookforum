<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>글쓰기</title>

        <link rel="stylesheet" type="text/css" href="../semantic/semantic.css">
        <script
                src="https://code.jquery.com/jquery-3.1.1.min.js"
                integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
                crossorigin="anonymous"></script>
        <script src="../semantic/semantic.js"></script>
    </head>

    <body>
        <h2>글쓰기</h2>
        <!-- post 방식으로 write.php에 넘김 -->
        <form class= "ui form" action="write_action.php" method="post">
            <p>제목: <input type="text" name="title" placeholder="제목"></p>
            <p>내용: <input type="text" name="content" placeholder="내용"></p>
            <p><input type="submit" value="글 올리기"></p>
            <p><a href="index.php">뒤로가기</a></p>
        </form>
    </body>
</html>