<html>
	<head>
		<metahttp-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<title>チャット</title>
	</head>
	<style>h1,h2,h3,p,a,span{color: white;}</style>
	<body style="background-color:black">
		<div style="margin-left: 2%;margin-right: 2%;margin-top: 3%;">
		<h2>チャットアーカイブ</h2>
        <a href="index.php"><button>チャットに戻る</button></a>
		<hr>
			<?php
				$fp = fopen('./date/loglog.txt','r');
				$maneof = 0;
				for($i = 0;!feof($fp);$i++)
				{
				$line[$i] = fgets($fp);
				$maneof++;
				}
				$maneof--;
				for(; $maneof >= 0; $maneof--) { 
					print $line[$maneof];
				}
			?>
	</body>
</html>
<!--このチャットシステムは籘原梓 @Azusa468_Linuxが作成しました。-->