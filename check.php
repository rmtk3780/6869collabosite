<?php

$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$number = htmlspecialchars($_POST['number'], ENT_QUOTES, 'UTF-8');
$content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');

if ($name === '') {
    $name_result = '入力されていません';
} else {
    $name_result = $name;
}
if ($email === '') {
    $email_result = '入力されていません';
} else {
    $email_result = $email;
}
if ($number === '') {
    $number_result = '入力されていません';
} else
    $number_result = $number;
if ($content === '') {
    $content_result = '入力されていません';
} else {
    $content_result = $content;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="./assets/css/check.css">
</head>

<body>
    <h1>お問い合わせ情報確認</h1>
    <p>この内容でよろしければ送信ボタンを押してください。<br><br></p>
    <p>名前:<?php echo $name_result; ?></p>
    <p>メールアドレス:<?php echo $email_result; ?></p>
    <p>電話番号:<?php echo $number_result; ?></p>
    <p>お問い合わせ内容:<?php echo $content_result; ?></p>

    <form method="POST" action="./thanks.php">
        <input type="hidden" name="name" value="<?php echo $name; ?> ">
        <input type="hidden" name="email" value="<?php echo $email; ?> ">
        <input type="hidden" name="number" value="<?php echo $number; ?> ">
        <input type="hidden" name="content" value="<?php echo $content; ?> ">

        <div class="big-container">
            <div class="button-container">
                <button type="button" onclick="history.back()">戻る</button>
            </div>

            <?php
            $buttonStyle = ($name !== '' && $email !== '' && $number !== '' && $content !== '') ? 'background-color: #ccc; color: white;' : 'background-color: #ccc; color: white; cursor: not-allowed;';
            ?>

            <?php if ($name !== '' && $email !== '' && $number !== '' && $content !== '') : ?>
                <div class="button-container">
                    <button type="submit" style="<?php echo $buttonStyle; ?>">送信</button>
                </div>
            <?php endif; ?>
        </div>

    </form>
</body>

</html>