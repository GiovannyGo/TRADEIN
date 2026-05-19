<?php
/**
 * admin_config.php
 * Configuración y funciones para el panel de administración.
 */

define('ADMIN_USER', 'admin');
define('ADMIN_PASS', 'Tradein2026');
define('SESSION_TIMEOUT', 1800);

function isAdmin() {
    if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
        return false;
    }

    if (isset($_SESSION['admin_ip']) && $_SESSION['admin_ip'] !== $_SERVER['REMOTE_ADDR']) {
        return false;
    }

    if (isset($_SESSION['admin_user_agent']) && $_SESSION['admin_user_agent'] !== $_SERVER['HTTP_USER_AGENT']) {
        return false;
    }

    if (isset($_SESSION['admin_login_time']) && (time() - $_SESSION['admin_login_time']) > SESSION_TIMEOUT) {
        return false;
    }

    $_SESSION['admin_login_time'] = time();

    return true;
}

function adminLogin($user) {
    $_SESSION['admin_logged'] = true;
    $_SESSION['admin_user'] = $user;
    $_SESSION['admin_ip'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['admin_user_agent'] = $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['admin_login_time'] = time();
}

function adminLogout() {
    unset($_SESSION['admin_logged']);
    unset($_SESSION['admin_user']);
    unset($_SESSION['admin_ip']);
    unset($_SESSION['admin_user_agent']);
    unset($_SESSION['admin_login_time']);
}
?>