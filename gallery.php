<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Images</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="css/gallery.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
	<form class="admin" action="server.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="file">Загрузить изображение в галерею</label>
			<input type="file" class="form-control-file" name="file">
		</div>
		<div class="form-group">
			<input class="btn btn-primary" type="submit" value="Submit">
		</div>
		<div class="form-group">
			<div class="images">
			<?php
				$images = scandir("big");
				for($i = 2; $i < count($images); $i++) :?>
					<a href="increase.php?fileName=<?= $images[$i]?>" target="_blank">
						<img src="small/<?= $images[$i]?>" alt="" class="image">
					</a>
			<?php
				endfor;
			?>	
			</div>
		</div>
	</form>
</body>
</html>