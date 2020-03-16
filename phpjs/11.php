<?php 
	$conn = mysqli_connect('localhost','root','a4850440');// DB에 접속
    mysqli_select_db($conn,'opentutorials'); // 데이터베이스 선택
    $name = mysqli_real_escape_string($conn,$_GET['name']);
    $password = mysqli_real_escape_string($conn,$_GET['password']);
    // mysql 에선 11'1 인경우 11\'1 로 써야 '을 넣어줄수 있다.
    // 위의 함수는 11'1이 두번째 인자인경우 11\'1 을 반환함 이를 이용해서 보안을 할수있음
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
            if($result->num_rows >= 1){
                echo $password." 는 비밀번호가 맞습니다.";
            }
            else{
                echo $password." 는 비밀번호가 아닙니다.";
            }
        ?>
    </body>
</html>