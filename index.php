<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Images</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="admin">
		<div class="images">
			<?php
				$images = scandir("images");
				for($i = 2; $i < count($images); $i++) :?>
					<a href="images/<?= $images[$i]?>" target="_blank">
						<img src="images/<?= $images[$i]?>" alt="" class="image">
					</a>
			<?php
				endfor;
			?>		
		</div>
	</div>
</body>
</html>