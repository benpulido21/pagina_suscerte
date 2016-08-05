<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todos las noticias</title>
</head>
<body>
	<?php foreach ($news as $news): ?>
		<p>
			<?=$news['titule']?><?=$news['source']?><?=$news['content']?><?=$news['date']?>
			<br>
		</p>
	<?php endforeach ?>
</body>
</html>
