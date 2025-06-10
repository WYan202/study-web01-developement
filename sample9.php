if (isset($_POST['name'])) {
    echo '送信された値：' . htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
}

