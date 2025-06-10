<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>名前送信フォーム</title>
</head>
<body>

<?php
// 送信データがあるか確認
if (isset($_POST['name']) && $_POST['name'] !== '') {
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    echo "<h2>送信された値：{$name}</h2>";
}
?>

<form method="post" action="sample8.php">
    <label>名前：</label>
    <input type="text" name="name">
    <input type="submit" value="送信">
</form>

</body>
</html>
