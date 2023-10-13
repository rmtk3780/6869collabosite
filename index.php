<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>

    <style>
        form div label {
            text-align: left;
            margin: 0;
        }
    </style>
    <link rel="stylesheet" href="./assets/css/survey.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/nittei.css">
    <link href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" rel="stylesheet">
</head>
<body>
    <h1>お問い合わせフォーム</h1>
    <form method="POST" action="./check.php">
        <div class="name">
            <p>名前</p>
            <input type="text" name="name" placeholder="山田 花子"  value=""
        </div>
        <div>
            <p>メールアドレス</p>
            <input type="email" name="email" placeholder="hanako@gmail.com" value=""
        </div>
        <div>
            <p>電話番号</p>
            <input type="tel" name="number" placeholder="09012345678" value=""
        </div>
        <div>
            <p>お問い合わせ内容</p>
            <textarea name="content"  cols="30" rows="10" placeholder="面談をご希望の方は希望日時を入力してください。"></textarea>
        </div>
        <div class="button-container">
            <input type="submit" value="送信">
        </div>
    </form>
</body>
</html>