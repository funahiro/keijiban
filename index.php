<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>プログラミングに役立つ掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <body>
        <div class="logo"><img src="4eachblog_logo.jpg"> </div>


<!--ヘッダー-->

        <header>

           <div class="head">

                 <ul>
                    <li><a href="http://localhost/4eachblog/index.html?" class="button">トップ</a></li>
                    <li><a href="http://localhost/register/login.php" class="button">プロフィール</a></li>
                    <li><a href="#" class="button">4eachについて</a></li>
                    <li><a href="http://localhost/register/register.php" class="button">登録フォーム</a></li>
                    <li><a href="http://localhost/contactform/index.html?" class="button">問い合わせ</a></li>
                    <li><a href="http://localhost/4each_keijiban/index.php" class="button">掲示板</a></li>  
                    <li><a href="#" class="button">その他</a></li>
                </ul>

            </div>

        </header>


<!--メイン-->


        <main>
            <div class="center">
                
<!--メイン左画面-->

                <div class="left">

                    <h1>プログラミングに役立つ掲示板</h1>

                    <form method="post" action="insert.php">
                        <h2>入力フォーム</h2>
                            <div>
                                <label>ハンドルネーム</label>
                                <br>
                                <input type="text" class="text" size="35" name="handlename">
                            </div>

                            <div>
                                <label>タイトル</label>
                                <br>
                                <input type="text" class="text" size="35" name="title">
                            </div>

                            <div>
                                <label>コメント</label>
                                <br>
                                <textarea cols="60" rows="7" name="comments"></textarea>
                            </div>

                            <div>
                                <input type="submit" class="submit" value="送信する">
                            </div>
                    </form>
                   
                        <?php 

                            mb_internal_encoding("utf8");
                            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
                            $stmt =$pdo->query("select *from 4each_keijiban");

                            while($row = $stmt->fetch()){
                                echo " <form>";
                                echo "<h4>".$row['title']."</h4>";
                                echo "<p>".$row['comments']."</p>";
                                echo "<p1>posted by  ".$row['handlename']."</p1>";
                                echo"</form>";
                            }
                        ?>
                    
                </div>
                    


<!--メイン右画面-->

                <div class="right">
                    <h3>人気の記事</h3>

                    <ul>
                        <li>PHP おススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ</li>
                        <li>HTMLの基礎</li>
                    </ul>

                    <h3>オススメリンク</h3>

                    <ul>
                        <li><a href="https://www.internous.co.jp/">インターノウス株式会社</a></li>
                        <li><a href="https://www.apachefriends.org/jp/index.html">XAMPPのダウンロード</a></li>
                        <li><a href="https://www.eclipse.org/downloads/">Eclipseのダウンロード</a></li>
                        <li><a href="https://brackets.io/">bracketsのダウンロード</a></li>
                    </ul>

                    <h3>カテゴリ</h3>

                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>

                </div>
            </div>
        </main>


<!--フッター-->


        <footer>
            <div class="bottom">copyright internous | 4each blog is the one which provides A to Z about programming.</div>
        </footer>

    </body>
</html>