<?php

	function resize($image, $ouput_file, $w_o = false, $h_o = false) {
		if ($w_o < 0 || $h_o < 0) {
		  echo "Некорректные входные параметры";
		  return false;
		}
		list($w_i, $h_i, $type) = getimagesize($image); // Получаем размеры и тип изображения (число)
		$types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
		$ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
		if ($ext) {
		  $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
		  $img_i = $func($image); // Создаём дескриптор для работы с исходным изображением
		} else {
		  echo 'Некорректное изображение'; // Выводим ошибку, если формат изображения недопустимый
		  return false;
		}
		/* Если указать только 1 параметр, то второй подстроится пропорционально */
		if (!$h_o) $h_o = $w_o / ($w_i / $h_i);
		if (!$w_o) $w_o = $h_o / ($h_i / $w_i);
		$img_o = imagecreatetruecolor($w_o, $h_o); // Создаём дескриптор для выходного изображения
		imagecopyresampled($img_o, $img_i, 0, 0, 0, 0, $w_o, $h_o, $w_i, $h_i); // Переносим изображение из исходного в выходное, масштабируя его
		$func = 'image'.$ext; // Получаем функция для сохранения результата
		return $func($img_o, $ouput_file); // Сохраняем изображение
	}
	
	//Сохраняем загруженное изображение в исходном размере
	$path = $_SERVER["DOCUMENT_ROOT"]."/big/".$_FILES['file']['name'];
	if(move_uploaded_file($_FILES['file']['tmp_name'], $path)){
		//Сохраненное изображение уменьшаем до ширины в 100 пикселей
		resize($path, $_SERVER["DOCUMENT_ROOT"]."/small/".$_FILES['file']['name'], 100);
		//Сохраняем информацию в БД
		include 'dataBaseConnect.php';
		$fileName = "'".$_FILES['file']['name']."'";
		$fileSize = (int)($_FILES['file']['size']);
		$sql = "INSERT INTO image (name, size) VALUES ($fileName, $fileSize)";
		if (mysqli_query($link, $sql)) {
			mysqli_close($link);
			//Возвращаемся на ту страницу, откуда был вызов
			$page = $_SERVER['HTTP_REFERER'];
			header("Location: $page");
		} else {
			echo "Error: ".$str."<br>".mysqli_error($link);
		}
	}
	else{
		echo "Ошибка при загрузке файла";
	}
	
?>