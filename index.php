<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Images</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="css/gallery.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="js/gallery_modal.js"></script>
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
					//Берем информацию о картинках из БД
					include 'dataBaseConnect.php';
					$sql = "SELECT id, name FROM image ORDER BY count DESC";
					$result = mysqli_query($link, $sql);
					while($data = mysqli_fetch_assoc($result)) :?>
						<a href="#" data-toggle="modal" data-target="#exampleModal" data-name="big/<?= $data['name']?>" data-id="<?= $data['id']?>" class="image_href">
							<img src="small/<?= $data['name']?>" alt="" class="image">
						</a>
				<?php
					endwhile;
					mysqli_close($link);
				?>
			</div>
		</div>
	</form>
	
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="" alt="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>