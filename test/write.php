<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>글쓰기</title>
    </head>

    <body>
        <h2>글쓰기</h2>
        <!-- post 방식으로 write.php에 넘김 -->
        <form action="write_action.php" method="post">
            <p>제목: <input type="text" name="title" placeholder="제목"></p>
            <p>내용: <input type="text" name="content" placeholder="내용"></p>
            <p><input type="submit" value="글 올리기"></p>
            <p><a href="index.php">뒤로가기</a></p>
        </form>
    </body>
</html>