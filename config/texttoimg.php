<?
	# пример использования
	# <img alt="почта" class="mails" src="/config/texttoimg.php?first=recept&amp;sep=%40&amp;mid=frpp&amp;last=.ru" />

	header('Content-Type: image/png');

	/* Получаем email и устанавливаем размер шрифта */
	$email = $_GET['first'].$_GET['sep'].$_GET['mid'].$_GET['last'];
	$sizeFont = 10;

	/* Получаем длинну email */  
	$strlen = mb_strlen($email, 'utf8');

	/* Получаем ширину картинки */  
	$sizewidth = imagefontwidth($sizeFont);
	$size_width = $sizewidth * $strlen;

	/* Получаем высоту картинки */    
	$size_height = imagefontheight($sizeFont);

	/* Создаем изображение */  
	$im = @imagecreatefrompng($email);

	if(!$im) {
		# создаем пустое полноцветное изображение
		$im  = imagecreatetruecolor($size_width, $size_height);

		# указываем фон,цвет текста и шрифт
		$font = $_SERVER['DOCUMENT_ROOT'].'/templates/default/fonts/OpenSans-Regular.ttf';
		$bgc = imagecolorallocate($im, 255, 255, 255);
		$color  = imagecolorallocate($im, 92, 123, 182);

		# делаем фон прозрачный
		imagecolortransparent($im, $bgc);

		# рисуем закрашенный прямоугольник
		imagefilledrectangle($im, 0, 0, $size_width, $size_height, $bgc);

		# горизонтальное рисование строки
		imagettftext ($im, $sizeFont, 0, 2, $sizeFont, $color, $font, $email);
	}

	/* Записывает изображение на диск */  
	imagepng($im);

	/* освобождаем память, занятую изображением	*/  
	imagedestroy($im);
?>