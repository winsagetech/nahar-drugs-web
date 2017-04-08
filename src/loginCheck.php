<?php

    $config = parse_ini_file('../configNahar.ini');
    $user = $config['admin'];
    $pwd = $config['adminpass'];

    $uname = trim($_POST['userName']);
    $password = trim($_POST['password']);

    if (($user == $uname) && ($pwd == $password)) {
        session_start();
        $_SESSION['user'] = $user;
        header("Location: admin/pages/index.php");
    } else {
        header("Location: login.php");
    }

?>