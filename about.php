<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: index.php');
        exit;
    }
    $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="about">
    <h1>WELCOME, <?php echo $user['login']; ?></h1>
    <form action="account.php" target="_blank">
        <button class="button">View all users</button>
    </form>
    
    <pre><?php print_r($_SERVER); ?></pre>
</body>
</html>

