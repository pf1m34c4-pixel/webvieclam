<?php
// simple front controller
session_start();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/helpers.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($path) {
    case '/':
        require 'views/home.php';
        break;
    case '/login':
        require 'views/login.php';
        break;
    case '/logout':
        logout();
        header('Location: /');
        break;
    case '/partner':
        ensureRole('partner');
        require 'views/partner.php';
        break;
    case '/applicant':
        ensureRole('applicant');
        require 'views/applicant.php';
        break;
    case '/admin':
        ensureRole('admin');
        require 'views/admin.php';
        break;
    default:
        http_response_code(404);
        echo 'Page not found';
        break;
}
