<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>

<!-- preで囲むと吐き出されたデータが改行された状態で表示されるので見やすいのです。 -->
<pre>
<!-- ここにプログラムを記述します -->


<!-- ///date/// -->
<?php 
date_default_timezone_set('Asia/Tokyo');
echo (date('Y年m月d日 H時i分s秒'));
?>
<br>
<!-- ///date２/// -->
<?php 
$today = new DateTime();
//datetime オブジェクトの中にformat等のメソッドが入っている
echo($today->format('H時i分s秒'));
?>
</pre>
</main>
</body>    
</html>