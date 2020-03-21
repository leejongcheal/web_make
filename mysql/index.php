<?php 
	require("../config/config.php");
	require("../lib/db.php");
	$conn = db_init($config['host'],$config["duser"],$config["dpw"],$config["dname"]);
	$result = mysqli_query($conn,"select * from topic"); // 쿼리문
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="http://localhost/mysql/style.css?after">
		  <!-- 부트스트랩 -->
		<link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body id="target">
		<div class = "container-fluid">
			<header class ="jumbotron text-center">
				<img id="logo" class = "img-circle" src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
				<h1><a href="http://localhost/mysql/index.php">JavaScript</a></h1>
			</header>
			<div class = "row">
				<nav class ="col-md-3">
					<ol class= "nav nav-pills nav-stacked">
						<?php
						while($row = mysqli_fetch_assoc($result)){//쿼리결과의 행을 순차적으로 가져옴
							echo "<li><a href=http://localhost/mysql/index.php?id=".$row['id'].">".htmlspecialchars($row['title'])."</a></li>\n";
						}
						?> 
					</ol>
				</nav>
				<div class ="col-md-9">
					<article>
						<?php 
							if(!empty($_GET['id'])){
								$sql = "select topic.id, title, author, user.name, description 
								from topic left join user on topic.author = user.id where topic.id = ".$_GET['id'];
								$result = mysqli_query($conn,$sql);
								$row = mysqli_fetch_assoc($result);
								echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
								echo "<p>author : ".htmlspecialchars($row['name'])."</p>";
								echo strip_tags($row['description'],"<a><h1><h2><h3><h4><h5>
								<ul><ol><li>");
							}
							else{
								echo "대문 입니다.";
							}
						?>
					</article>	
					<hr>		
					<div id ="control">
						<div class="btn-group">
						<input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default btn-lg"/>
						<input type="button" value="black" onclick="document.getElementById('target').className='black'"  class="btn btn-default btn-lg"/>
						</div>
						<a href="http://localhost/mysql/write.php" class="btn btn-success btn-lg">쓰기</a>
					</div>
				</div>
				
			</div>
		</div>
		
		<!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    	<!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    	<script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
	</body>
</html>
