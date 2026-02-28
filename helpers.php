<?php
function login($email, $password) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        return true;
    }
    return false;
}

function logout() {
    session_unset();
    session_destroy();
}

function ensureRole($role) {
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== $role) {
        header('Location: /login');
        exit;
    }
}

function currentUser() {
    return $_SESSION['user'] ?? null;
}
