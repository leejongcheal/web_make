
<?php 
function db_init($host,$duser, $dpw,$dname){
    $conn = mysqli_connect($host,$duser,$dpw);// DB에 접속
    mysqli_select_db($conn,$dname); // 데이터베이스 선택
    return $conn;
}
?>