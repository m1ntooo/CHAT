<html>
    <head>
		<metahttp-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<title>注意</title>
	</head>
    <body>
        <a href="index.php"><button>前のページへ戻る</button></a>
        <br>
        <h2>注意事項</h2>
        <p>
            文字を入力して送信する時、自動で&lt;p&gt;&lt;/p&gt;で覆われて表示されます。
        </p>
        <p>
            &lt;や&gt;、&quot;を入力したいときは以下の文字列を変わりに入力してください。
        </p>
        <table border="1">
            <tr>
                <th>表示させたい文字</th><th>代わりに打つ文字</th>
            </tr>
            <tr>
                <td>&amp;</td><td>&amp;mp;</td>
            </tr>
            <tr>
                <td>&lt;</td><td>&amp;lt;</td>
            </tr>
            <tr>
                <td>&gt;</td><td>&amp;gt;</td>
            </tr>
            <tr>
                <td>&quot;</td><td>&amp;uot;</td>
            </tr>
            <tr>
                <td>&apos;</td><td>&amp;apos;</td>
            </tr>
        </table>
        <p>悪意のあるコードや、重くなるスクリプト、HTML4で再生できないコンテンツは入れないでください。</p>
        <h2>ここにスクリプトを入力すれば、チャット欄に送信できます。</h2>
        <p>&lt;img src="./example.jpg" width=200px&gt;って感じで入れてください</p>
        <p>画像は横200pxまで</p>
        <form style="padding: 10px; border: solid 2px #000000;" action="inputscriptforpublic.php" method="post">
			<span>名前　　　 </span><input type="text" size="10" autocomplete="name" name="name" value="<?php ini_set('display_errors', 0); echo $_COOKIE['username']; ?>"><br>
			<span>スクリプト </span><input type="text" size="30" autocomplete="no" name="maintext">
			<input type="submit" value="送信" name="mode">
		</form>

        </form>
    </body>
</html>
<!--このチャットシステムは籘原梓 @Azusa468_Linuxが作成しました。-->