<?php
	//Задание 1
	$i = 0;
	while($i <= 100) {
		if($i % 3 == 0) {
			echo "$i<br/>";
		}
		$i++;
	}
	
	//Задание 2
	echo "<hr/>";
	$i = 0;
	do {
		if($i == 0) {
			echo "$i - это ноль.<br/>";
		} else if($i % 2 == 0) {
			echo "$i - это четное число.<br/>";
		} else {
			echo "$i - это нечетное число.<br/>";
		}
		$i++;
	} while($i <= 10);
	
	//Задание 3
	echo "<hr/>";
	$regions = ['Хабаровский край' => ['Хабаровск', 'Комсомольск-на-Амуре', 'Амурск'],
		'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
		'Ленинградская область' => ['Санкт-Петербург', 'Всеволжск', 'Павловск', 'Кронштадт']];
	foreach($regions as $region => $cities) {
		$str = implode(', ', $cities).".";
		echo "$region:<br/>$str<br/>";
	}
	
	//Задание 4
	echo "<hr/>";
	
	function translit($str) {
		$converter = [
			'а' => 'a',   'б' => 'b',   'в' => 'v',
			'г' => 'g',   'д' => 'd',   'е' => 'e',
			'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
			'и' => 'i',   'й' => 'y',   'к' => 'k',
			'л' => 'l',   'м' => 'm',   'н' => 'n',
			'о' => 'o',   'п' => 'p',   'р' => 'r',
			'с' => 's',   'т' => 't',   'у' => 'u',
			'ф' => 'f',   'х' => 'h',   'ц' => 'c',
			'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
			'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
			'э' => 'e',   'ю' => 'yu',  'я' => 'ya'];
		return strtr(mb_strtolower($str), $converter);	//Чтобы не делать большой массив, строку приводим к нижнему регистру
	}
	
	echo translit("Антон Юрьевич Лошманов");
	
	//Задание 5
	echo "<hr/>";
	
	function replaceSpacesWithUnderscore($str) {
		return str_replace(" ", "_", $str);
	}
	
	echo replaceSpacesWithUnderscore("Антон Юрьевич Лошманов");
	
	//Задание 6
	echo "<hr/>";
	$menu = ['Курсы' => ['Программирование' => 'https://geekbrains.ru/courses/14', 'Web-дизайн' => 'https://geekbrains.ru/courses/484'],
		'Вебинары' => ['Создание сайта за час' => 'https://geekbrains.ru/events/741', 'Создание игры на Android' => 'https://geekbrains.ru/events/682'],
		'Форум' => 'https://geekbrains.ru/topics'];
	$str = "<ul>";
	foreach($menu as $item => $subitem) {
		if(is_array($subitem)) {
			$str .= "<li>$item</li><ul>";
			foreach($subitem as $iitem => $ssubitem) {
				$str .= "<a href=$ssubitem><li>$iitem</li></a>";
			}
			$str .= "</ul>";
		} else {
			$str .= "<a href=$subitem><li>$item</li></a>";
		}
	}
	$str .= "</ul>";
	echo $str;
	
	//Задание 7
	echo "<hr/>";
	for($i = 0; $i < 10; print $i, $i++) {}
	
	//Задание 8
	echo "<hr/>";
	$str = "";
	foreach($regions as $region => $cities) {
		$str .= "$region:<br/>";
		foreach($cities as $city) {
			if(mb_substr($city, 0, 1) == "К") {
				$str .= "$city, ";
			}
		}
		$str = mb_substr($str, 0, mb_strlen($str) - 2);	//Уберем лишнюю запятую в конце строки
		$str .= ".<br/>";
	}
	echo $str;
	
	//Задание 9
	echo "<hr/>";
	
	function translitAndSpacesDel($str) {
		return replaceSpacesWithUnderscore(translit($str));
	}
	
	echo translitAndSpacesDel("Лошманов Антон Юрьевич");
?>