<?php

session_start();
include_once 'cleansql.php';

if (isset($_SESSION['LAST_AUTH_ACTIVITY'])) {
    if ($_SESSION['LAST_AUTH_ACTIVITY'] - 300 > 0)
        session_unset();
}

if (!isset($_SESSION['trial'])) {
    $_SESSION['trial'] = 1;
    $_SESSION['LAST_AUTH_ACTIVITY'] = time();
} else {
    $_SESSION['trial'] ++;
    $_SESSION['LAST_AUTH_ACTIVITY'] = time();
    if ($_SESSION['trial'] > 4) {
        header('Location: index.php?limit=1');
    }
}

if (isset($_POST['submit'])) {

    if ($_POST['email'] != "" && $_POST['passwd'] != "") {

        $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $_POST['email'] = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

        $email = strtolower(clean($_POST['email']));
        $passwd = clean($_POST['passwd']);

        if ($_POST['email'] != "") {
            include_once 'db.php';

            $result = mysqli_query($connection, "SELECT * FROM user WHERE email = '$email' LIMIT 1");
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $verify = password_verify($_POST['passwd'], $row['password']);
                    if ($verify) {

                        $_SESSION['email'] = $email;
                        $_SESSION['usern'] = $row['name'];
                        $_SESSION['id'] = $row['id'];

                        
                        $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
                        header('Location: /w/n/index.php');
                    } else {
                        
                        header('Location: /w/n/index.php?loginMsg=1');
                    }
                } else {
                    //echo "Wrong details";
                    header('Location: /w/n/index.php?loginMsg=1');
                }
            } else {
                echo "Server error";
                header('Location: index.php?loginMsg=2');
            }
        }
    }
} else {
    header('Location: /error.php');
}
	