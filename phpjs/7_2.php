<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            $password = $_GET["password"];
            if($password == 1111){
                echo $password." 는 비밀번호가 맞습니다.";
            }
            else{
                echo $password." 는 비밀번호가 아닙니다.";
            }
        ?>
    </body>
</html>