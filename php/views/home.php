<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Việc Làm</title>
</head>
<body>
<h1>Chào mừng tới Web Việc Làm</h1>
<?php if (currentUser()): ?>
    <p>Xin chào, <?= htmlspecialchars(currentUser()['name']) ?> (<a href="/logout">Đăng xuất</a>)</p>
<?php else: ?>
    <p><a href="/login">Đăng nhập</a></p>
<?php endif; ?>
<hr/>
<ul>
    <li><a href="/partner">Đối tác</a></li>
    <li><a href="/applicant">Ứng viên</a></li>
    <li><a href="/admin">Quản trị viên</a></li>
</ul>
</body>
</html>