<?php

require './login.php';

$db = new Database();
$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $is_admin = isset($_POST['is_admin']) ? true : false;

    if ($is_admin) {
        $result = $user->registerAdmin($username, $email, $password, $re_password);
        if ($result === true) {
            header('Location: login_form.php?message=' . urlencode('Admin successfully registered! You can now login!'));
        } else {
            header('Location: login_form.php?message=' . urlencode($result));
        }
   
}

$db->close();
?>
