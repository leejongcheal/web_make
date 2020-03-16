<?php 
	$conn = mysqli_connect('localhost','root','a4850440');// DB에 접속
    mysqli_select_db($conn,'opentutorials'); // 데이터베이스 선택
    $name = $_GET['name'];
    $password = $_GET['password'];
    $sql = "select * from user where name='".$name."' AND password='".$password."'";
    // 만약 공격자가 password= 1111' or '1'='1 이라고 한다면?
    // 모든 정보가 털림 --> 보안 필요
	$result = mysqli_query($conn,$sql); // 쿼리문
    // var_dump($result); //으로 오브젝트의 요소를 볼수있다. 중요
	
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            if($result->num_rows == 1){
                echo $password." 는 비밀번호가 맞습니다.";
            }
            else{
                echo $password." 는 비밀번호가 아닙니다.";
            }
        ?>
    </body>
</html>