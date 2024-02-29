<!doctype HTML>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>お問合わせフォームを作る</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
    
        <h1>お問合わせフォーム</h1>
        <form method="post" action="mail_confirm.php">
            <div>
                <lavel>名前</lavel>
                <br>
                <input type="text" class="text"  size="35" name="name" value="<?php if(!empty($_POST['name'])){echo h($_POST['name']);} ?>">
            </div>
            
            <div>
                <lavel>メールアドレス</lavel>
                <br>
                <input type="text" class="text"  size="35" name="mail" value="<?php if(!empty($_POST['mail'])){echo h($_POST['mail']);} ?>">
            </div>
            
            <div>
                <lavel>年齢</lavel>
                <br>
                <select class="dropdown" name="age" value="<?php if(!empty($_POST['age'])){echo h($_POST['age']);} ?>">
                    <option>選択してください</option>
                    <script>
                        for (var i = 18; i <= 65; i++) {
                            document.write("<option value=" + i +">" +i + "歳</option>");
                        }
                    </script>
                </select>
            </div>
            
            <div>
                <lavel>コメント</lavel>
                <br>
                <textarea cols="35" rows="7" name="comments" value="<?php if(!empty($_POST['comments'])){echo h($_POST['comments']);} ?>"></textarea>
            </div>
            
            <div>
                <input type="submit" class="submit" value="送信する">
            </div>
        
        </form>
    
    </body>
    
</html>