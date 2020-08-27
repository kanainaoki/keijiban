<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>4eachblog 掲示板</title>
	<link rel="stylesheet" 　type="text/css" href="style.css">
</head>


<body>

	<?php
	
	mb_internal_encoding("utf8");
	$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
	$stmt = $pdo->query("select*from 4each_keijiban");
			
	?>

	<div class="logo"><img src="4eachblog_logo.jpg"></div>

	<header>
		<ul>
			<li>トップ</li>
			<li>プロフィール</li>
			<li>4eachについて</li>
			<li>登録フォーム</li>
			<li>問い合わせ</li>
			<li>その他</li>
		</ul>
	</header>

	<div class="left">
		<h1>プログラミングに役立つ掲示板</h1>

		<form method="post" action="insert.php">

			<h4>入力フォーム</h4>
			<br>
			<div>
				<label>ハンドルネーム</label>
				<br>
				<input type="text" name="handlename" size="40">
			</div>

			<div>
				<labele>タイトル</labele>
				<br>
				<input type="text" name="title" size="40">
			</div>

			<div>
				<label>コメント</label>
				<br>
				<textarea name="comments" rows="7" cols="60"></textarea>
			</div>

			<div>
				<input type="submit" class="submit" value="投稿する">
			</div>
		</form>	
			
		<?php
		
		while($row = $stmt->fetch()){
		
			echo"<div class='kiji'>";
			echo"<h3>".$row['title']."</h3>";
			echo"<div class='comments'>";
			echo $row['comments'];
			echo"<div class='handlename'>posted by".$row['handlename']."</div>";
			echo"</div>";
			echo"</div>";
		}
		?>

	</div>

	<main>

		<div class="right">
			<h3>人気の記事</h3>
			<ul>
				<li>PHPオススメ本</li>
				<li>PHP MyAminの使い方</li>
				<li>今人気のエディタ Top5</li>
				<li>HTMLの基礎</li>
			</ul>
			<h3>オススメリンク</h3>
			<ul>
				<li>インターノウス株式会社</li>
				<li>XAMPPのダウンロード</li>
				<li>Eclipseのダウンロード</li>
				<li>Bracketsのダウンロード</li>
			</ul>
			<h3>カテゴリ</h3>
			<ul>
				<li>HTMK</li>
				<li>PHP</li>
				<li>MySQL</li>
				<li>JavaScript</li>
			</ul>
		</div>
	</main>

	<footer>
		copyright©internous|4each blog the provides A to Z about programming.
	</footer>


</body>

</html>
