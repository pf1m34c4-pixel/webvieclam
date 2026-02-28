<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
<h1>Đăng nhập</h1>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (login($email, $password)) {
        header('Location: /');
        exit;
    } else {
        echo '<p style="color:red;">Sai email hoặc mật khẩu</p>';
    }
    ?>
<?php endif; ?>
<form method="post">
    <label>Email: <input type="email" name="email" required></label><br/>
    <label>Password: <input type="password" name="password" required></label><br/>
    <button type="submit">Đăng nhập</button>
</form>
</body>
</html>