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
		<link rel="stylesheet" type="text/css" href="style.css?after">
		  <!-- 부트스트랩 -->
		<link href="http://192.168.43.181/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body id="target">
		<div class = "container-fluid">
			<header class ="jumbotron text-center">
				<!-- <img id="logo" class = "img-circle" src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩"> -->
				<h1><a href="http://192.168.43.181/mysql/index.php">JavaScript</a></h1>
			</header>
			<div class = "row">
				<nav class ="col-md-3">
					<ol class= "nav nav-pills nav-stacked">
						<?php
						while($row = mysqli_fetch_assoc($result)){//쿼리결과의 행을 순차적으로 가져옴
							echo "<li><a href=http://192.168.43.181/mysql/index.php?id=".$row['id'].">".htmlspecialchars($row['title'])."</a></li>\n";
						}
						?> 
					</ol>
				</nav>
				<div class="col-md-9">
 
					<article>
						<form action="process.php" method="post">
							<div class="form-group">
								<label for="form-title">제목</label>
								<input type="text" class="form-control" name="title" id="form-title" placeholder="제목을 적어주세요.">
							</div>
				
							<div class="form-group">
								<label for="form-author">작성자</label>
								<input type="text" class="form-control" name="author" id="form-author" placeholder="작성자를 적어주세요.">
							</div>
				
							<div class="form-group">
								<label for="form-description">본문</label>
								<textarea class="form-control" rows="10" name="description"  id="form-description" placeholder="본문을 적어주세요."></textarea>
							</div>
				
							<input type="submit" name="name" class="btn btn-default  btn-lg">
						</form>
					</article>
        			<hr>
					<div id="control">
						<div class="btn-group" role="group" aria-label="...">
							<input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default  btn-lg"/>
							<input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
						</div>
						<a href="http://192.168.43.181/write.php" class="btn btn-success  btn-lg">쓰기</a>
					</div>
    			</div>
    		</div>		
		</div>
		<!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    	<!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    	<script src="http://192.168.43.181/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
	</body>
</html>




