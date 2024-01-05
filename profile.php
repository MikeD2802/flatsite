<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo htmlspecialchars($_SESSION['username']); ?>'s Profile</h1>
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
