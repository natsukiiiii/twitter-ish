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

<!-- 繰り返し処理 -->
<?php
$i = 1;
echo($i . "\n");

$i = $i+1;
echo($i . "\n");
?>

<?php
$i = 1;
while ($i <= 5){
    echo($i . "\n");
    $i = $i + 1;
}
?>

<?php
for($i=1; $i<=5; $i++){
  echo($i . "\n");
}
?>
<!-- 365日分の日付出力 -->
<?php
for($i=1; $i<=5;$i++){
  echo(date('m/d(D)' ,strtotime('+' . $i .'day')));
  echo "\n";
};
?>

<?php
$week_name = ['日','月','火','水','木','金','土'];
echo ($week_name[date('w')]);

foreach($week_name as $week){
    echo($week . "\n");
}
?>

<?php
if(date('G') < 14){
echo('※現在受付時間外です');
}else{
  if(date('G') >= 14){
    echo('※ようこそ');
  }
}
?>


<?php
$x = 'abc';
if ($x !== ''){
  echo('xには文字が入っています');
}
?>

<?php
$data = sprintf('%04d年 %02d月 %2d日', 2018, 12, 5, 'fri');
echo ($data);
?>

</pre>
</main>
</body>    
</html>