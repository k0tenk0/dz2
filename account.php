<?php
    $users = require 'storage.php';
    $count = isset($_GET['count']) ? (int)$_GET['count'] : null;
    $displayUsers = array_slice($users, 0, $count);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accounts</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="account">
    <h1>USER list <?php echo count($displayUsers);?></h1>
    <ol>
        <?php foreach ($displayUsers as $user): ?>
            <li><?php echo $user['login']; ?></li>
        <?php endforeach; ?>
    </ol> 
</body>
</html>