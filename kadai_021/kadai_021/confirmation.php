<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <h2>入力内容をご確認ください。</h2>
    <p>お名前:<?php echo $_POST['user_name'];?></p>
    <p>性別:<?php echo $_POST['user_gender'];?></p>
    <p>メールアドレス:<?php echo $_POST['user_email'];?></p>
</body>
</html>