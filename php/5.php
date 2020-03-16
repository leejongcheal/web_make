<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <a href="http://opentutorials.org/course/1">생활코딩</a> 
        <!-- 위의 자체를 출력 하고싶을땐 html entity검색후 <>에 대한 값을 알아온다. -->
        <!-- &lt;a&gt;  처럼 하면 <a>처럼 사용 가능-->
        <br>
        <?php
        echo htmlspecialchars('<a href="http://opentutorials.org/course/1">생활코딩</a>');
        //echo htmlspecialchars("<a>"); 위의 방법이 귀찮을땐 이처럼 쓰면 위의값으로 번역됨
        ?> -->
    </body>
</html>