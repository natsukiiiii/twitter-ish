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
$statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
//prepare安全性Up、memo=?の中身は以下に指定されている
$statement->execute(array($_POST['memo']));
echo 'register message!';
//postの指定先そのままではセキュリティ弱い、危険。SQｌ書き換えられDB盗まれる可能性がある
?>

</main>
</body>    
</html>