<?php
session_start();
include 'admin_config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: admin_login.php');
    exit();
}

if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    header('Location: admin_login.php?error=3');
    exit();
}

unset($_SESSION['csrf_token']);

$user = trim($_POST['user'] ?? '');
$pass = trim($_POST['pass'] ?? '');

if ($user === '' || $pass === '') {
    header('Location: admin_login.php?error=1');
    exit();
}

$intentos = $_SESSION['login_intentos'] ?? 0;
$bloqueado_hasta = $_SESSION['bloqueado_hasta'] ?? 0;

if ($bloqueado_hasta > time()) {
    header('Location: admin_login.php?error=2');
    exit();
}

if ($intentos >= 5 && $bloqueado_hasta <= time()) {
    $_SESSION['login_intentos'] = 0;
    unset($_SESSION['bloqueado_hasta']);
    $intentos = 0;
}

if ($user === ADMIN_USER && $pass === ADMIN_PASS) {
    adminLogin($user);

    unset($_SESSION['login_intentos']);
    unset($_SESSION['bloqueado_hasta']);

    $redirect = $_POST['redirect'] ?? 'admin_dashboard.php';
    header('Location: ' . $redirect);
    exit();
}

$_SESSION['login_intentos'] = $intentos + 1;

if ($_SESSION['login_intentos'] >= 5) {
    $_SESSION['bloqueado_hasta'] = time() + (5 * 60);
    header('Location: admin_login.php?error=2');
    exit();
}

header('Location: admin_login.php?error=1');
exit();
?>