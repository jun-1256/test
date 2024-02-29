<!doctype HTML>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>diworksblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <?php
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
        $stmt = $pdo->query("select * from diworks_keijiban");
        
        ?>
        
    <header>
        <h1><img src="diblog_logo.jpg" alt="D.I.BLOG"></h1>
        
        <nav>
            <ul class="menu">
                <li><a href="index.php">トップ</a></li>
                <li><a href="index.php">プロフィール</a></li>
                <li><a href="index.php">D.I.Blogについて</a></li>
                <li><a href="index.php">登録フォーム</a></li>
                <li><a href="index.php">問い合わせ</a></li>
                <li><a href="index.php">その他</a></li>
            </ul>
        </nav>
    </header>
        
    <main>
        <div class="main-container">
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            
        <form method="post" action="insert.php">
            <h2>入力フォーム</h2>
            <div>
                <lavel>ハンドルネーム</lavel>
                <br>
                <input type="text" class="text"  size="35" name="handlename" required>
            </div>
            
            <div>
                <lavel>タイトル</lavel>
                <br>
                <input type="text" class="text"  size="35" name="title" required>
            </div>
            
            <div>
                <lavel>コメント</lavel>
                <br>
                <textarea cols="50" rows="7" name="comments" required></textarea>
            </div>
            
            <div>
                <input type="submit" class="submit" value="投稿する">
            </div>
        </form>
        
        <?php
        
        while ($row = $stmt->fetch()) {
            
            echo "<div class='kiji'>";
            echo "<h3>".$row['title']."</h3>";
            echo "<div class='contents'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";
        }
            
        ?>
        
        </div>
            
        <div class="right">
            <h2>人気の記事</h2>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタTops</li>
                    <li>HTMLの基礎</li>
                </ul>
            <h3>オススメリンク</h3>
                <ul>
                    <li>ディーアイワークス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Braketsのダウンロード</li>
                </ul>
            <h4>カテゴリ</h4>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
        </div> 
        </div>
    </main> 
        
    <footer>
        <h1>copyright diworks | diworks blog is the one which provides A to Z about programming</h1> 
    </footer>
    
    </body>

</html>