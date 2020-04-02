<?php

session_start();
var_dump($_SESSION['id']);
try {

    $id = $_SESSION['id'];
    $delete_flag = $_SESSION['delete_flag'];
    if ($delete_flag==='0'){
        $delete_flag = 1;
    }

    mb_internal_encoding("UTF-8");

    $pdo = new PDO("mysql:dbname=lesson1; hostname=localhost8888;","root","root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE member SET delete_flag=$delete_flag WHERE id=$id";
    $stmt = $pdo->query($sql);

} catch (Exception $e) {
    echo "<span style=\"color:red\">エラーが発生したためアカウント削除できません。</br>". $e->getMessage()."</span>";
    exit();
}
session_destroy();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>アカウント削除完了</title>
<link rel="stylesheet" type="text/css" href="account.css">
</head>
    <body>
        <header>
            <h1>アカウント削除完了画面</h1>
        </header>
        <main>
            <div class="form">
                <p>アカウント削除完了画面</p>
                <div class="complete">
                    <p>削除完了しました</p>
                </div>
            
                <div  class="buttons">
                    <a href="d.i.blog.html">
                        <button type="button">TOPページへ戻る</button>
                    </a>
                </div>
            </div>
        </main>
    </body>
</html>