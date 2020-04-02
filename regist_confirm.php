<?php 
session_start();

$_POST = $_SESSION['member'];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>アカウント登録確認</title>
<link rel="stylesheet" type="text/css" href="account.css">
</head>
    <body>
        <header>
            <h1>アカウント登録確認画面</h1>
        </header>
        <main>
            <form action="regist_complete.php" method="POST" class="form">
                <p>アカウント登録確認画面</p>
                <table class="TableStyle">
                    <tr>
                        <td><label>名前（姓）</label></td>
                        <td><?php echo $_POST['family_name']; ?></td>
                    </tr>
                    <tr>
                        <td><label>名前（名）</label></td>
                        <td><?php echo $_POST['first_name']; ?></td>
                    </tr>
                    <tr>
                        <td><label>カナ（姓）</label></td>
                        <td><?php echo $_POST['family_name_kana']; ?></td>
                    </tr>
                    <tr>
                        <td><label>カナ（名）</label></td>
                        <td><?php echo $_POST['first_name_kana']; ?></td>
                    </tr>
                    <tr>
                        <td><label>メールアドレス</label></td>
                        <td><?php echo $_POST['mail']; ?></td>
                    </tr>
                        <td><label>パスワード</label></td>
                        <td><?php echo str_repeat("●", mb_strlen($_POST['password'], "UTF8"));?></td>
                    </tr>
                    <tr>
                        <td><label>性別</label></td>
                        <td><?php if ($_POST['gender']==="0") echo "男"; ?>
                            <?php if ($_POST['gender']==="1") echo "女"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>郵便番号（ハイフンなし）</label></td>
                        <td><?php echo $_POST['postal_code']; ?></td>
                    </tr>
                    <tr>
                        <td><label>住所（都道府県）</label></td>
                        <td><?php echo $_POST['prefecture']; ?></td>
                    <tr>
                        <td><label>住所（市区町村）</label></td>
                        <td><?php echo $_POST['address_1']; ?></td>
                    </tr>
                    <tr>
                        <td><label>住所（番地）</label></td>
                        <td><?php echo $_POST['address_2']; ?></td>
                    </tr>
                    <tr>
                        <td><label>アカウント権限</label></td>
                        <td><?php 
                            if ($_POST['authority'] === "0"){
                                echo "一般";
                            } else { echo "管理者";} ?>
                        </td>
                    </tr>
                </table>
                <div class="buttons">
                    <a href="regist.php">
                        <button type="button" class="btn">前に戻る</button>
                    </a>
                    <button type="submit" class="btn">登録する</button>
                </div>
            </form>
        </main>
    <footer></footer>
    </body>
</html>