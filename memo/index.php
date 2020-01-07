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
<?php 
require('dbconnect.php');
if(isset($_REQUEST['page'])&& is_numeric($_REQUEST['page'])){
  $page = $_REQUEST['page'];
}else{
  $page = 1;
}

$start = 5 * ($page - 1); 


$memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?, 3');
// ?dbのquery -> prepare changed why?
$memos->bindparam(1, $start, PDO::PARAM_INT);
// ↑ページネーション　数字パラメーターリンクを渡す
$memos->execute();
?>
<article>

<?php while ($memo = $memos->fetch()):?>
<p><a href="memo.php?id=<?php echo($memo['id']);?>"><?php print(mb_substr($memo['memo'], 0, 50));?></a></p>
<!-- mb_substrで表示文字数指定できる -->
<time><?php print($memo['created_at'])?></time>
<?php endwhile;?>
<br>
<?php if($page >=2):?>
<a href="index.php?page=<?php echo($page-1);?>">go to <?php echo($page-1);?> page</a>
<?php endif; ?>
|
<?php
$counts = $db->query('SELECT COUNT(*) as cnt FROM memos');
$count = $counts->fetch();
$max_page = ceil($count['cnt'] / 5);
if ($page < $max_page):
?>
<a href="index.php?page=<?php echo($page+1);?>">go to <?php echo($page+1);?> page</a>
<?php endif; ?>

</article>

</main>
</body>    
</html>