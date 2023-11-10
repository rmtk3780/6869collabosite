<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム | ENGrid</title>

    <link rel="stylesheet" href="./assets/css/survey.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" rel="stylesheet">
</head>

<header class="header">
    <div class="head-container">
        <a href="http://127.0.0.1:5500/index.html" class="head-site">
            <img src="./assets/img/header-logo.png">
            <div class="head-content">
                <p class="head-corp">ENGrid</p>
                <p class="head-desc">Engineering<br>x<br>English</p>
            </div>
        </a>

        <nav class="head-nav">
            <ul class="head-ul">
                <li><a href="http://127.0.0.1:5500/index.html"><i class="fa-solid fa-house"></i>ホーム</a></li>
                <li><a href="http://127.0.0.1:5500/information.html"><i class="fa-solid fa-pen"></i>会社概要</a></li>
                <li><a href="http://127.0.0.1:5500/curriculum.html"><i class="fa-solid fa-file-pen"></i>カリキュラム</a></li>
                <li><a href="http://127.0.0.1:5500/date$schedule.html"><i class="fa-solid fa-hand-holding-dollar"></i>日程・料金</a></li>
                <li><a href="http://127.0.0.1:5500/q&a.html"><i class="fas fa-question-circle"></i>受講までの流れ・Q&A</a></li>
                <li><a href="http://localhost/6869collabosite/"><i class="fa-solid fa-message"></i>お問い合わせ</a></li>
            </ul>
        </nav>
    </div>
</header>


<body>
    <div class="form-body">
        <h1>お問い合わせフォーム</h1>
        <form method="POST" action="./check.php">
            <div class="name">
                <p>名前</p>
                <input type="text" name="name" placeholder="山田 花子" value="">
            </div>
            <div>
                <p>メールアドレス</p>
                <input type="email" name="email" placeholder="hanako@gmail.com" value="">
            </div>
            <div>
                <p>電話番号</p>
                <input type="tel" name="number" placeholder="09012345678" value="">
            </div>
            <div>
                <p>お問い合わせ内容</p>
                <textarea name="content" cols="30" rows="10" placeholder="面談をご希望の方は希望日時を入力してください。 資料請求をご希望の方はその旨を入力してください。"></textarea>
            </div>
            <div class="button-container">
                <input type="submit" value="送信">
            </div>
        </form>
    </div>
</body>

</html>