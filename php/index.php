<!DOCTYPE html>
<html>
	<head>
        <meta charset = "utf-8">
        <link rel="stylesheet" type="text/css" href="http://localhost/php/style.css?after">
	</head>
	<body id="target">
		<header>
			<img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
			<h1><a href="http://localhost/php/index.php">JavaScript</a></h1>
		</header>
		<nav>
			<ol>
				<?php
				echo file_get_contents("classlist.txt");
				?>
			</ol>
		</nav>
		<div>
		<?php
				echo file_get_contents("button_f.txt");
		?>
		</div>
		<article>
			<?php 
				if(!empty($_GET['id'])){
					echo file_get_contents($_GET['id'].".txt");
				}
				else{
					echo file_get_contents("00.txt");
				}
			?>
		</article>
	</body>
</html>
