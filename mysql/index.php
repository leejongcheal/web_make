<?php 
	$conn = mysqli_connect('localhost','root','a4850440');// DB에 접속
	// $conn = mysqli_connect('localhost','root',1234,"webmake_lifecoding",3307);// DB에 접속
	mysqli_select_db($conn,'opentutorials'); // 데이터베이스 선택
	$result = mysqli_query($conn,"select * from topic"); // 쿼리문
	// while($row = mysqli_fetch_assoc($result)){//쿼리결과의 행을 순차적으로 가져옴
	// 	echo $row['id'];
	// 	echo $row['title']."<br>";
	// }
	
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset = "utf-8">
        <link rel="stylesheet" type="text/css" href="http://localhost/mysql/style.css?after">
	</head>
	<body id="target">
		<header>
			<img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
			<h1><a href="http://localhost/mysql/index.php">JavaScript</a></h1>
		</header>
		<nav>
			<ol>
				 <?php
				// echo file_get_contents("classlist.txt");
				while($row = mysqli_fetch_assoc($result)){//쿼리결과의 행을 순차적으로 가져옴
					echo "<li><a href=http://localhost/mysql/index.php?id=".$row['id'].">".$row['title']."</a></li>\n";
				}
				?> 
			</ol>
		</nav>
		<div id ="control">
		<?php
				echo file_get_contents("button_f.txt");
		?>
			<a href="http://localhost/mysql/write.php">쓰기</a>
		</div>
		<article>
			<?php 
				// if(!empty($_GET['id'])){
				// 	echo file_get_contents($_GET['id'].".txt");
				// }
				// else{
				// 	echo file_get_contents("00.txt");
				// }
				if(!empty($_GET['id'])){
					$sql = "select * from topic where id=".$_GET['id'];
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($result);
					echo '<h2>'.$row['title'].'</h2>';
					echo "<p>".$row['author']."</p>";
					echo $row['description'];
				}
				else{
					echo "대문 입니다.";
				}
			?>
		</article>
	</body>
</html>
