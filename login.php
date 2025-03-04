<?php
session_start();

require_once './config/conn.php';

$_SESSION['user'] = "";
$_SESSION['usertype'] = "";
$_SESSION['error'] = "";



if ($_POST) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];


    $getcredentials = $conn->query("SELECT * FROM `admin` WHERE email = '$mail' AND password = '$password'");


    if ($getcredentials->num_rows == 1) {
        header('location: admin/index.php');
    } else {

        $_SESSION['error'] = "Wrong Credentials: Invalid Email or Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Portfolio" />
    <meta name="author" content="Cj Abarca" />
    <link rel="stylesheet" href="./public/css/reset.css" />
    <link rel="stylesheet" href="./public/css/fonts.css" />
    <link rel="stylesheet" href="./public/css/index.css" />
    <link rel="icon" type="image/x-icon" href="./public/uploads/favicon.svg" />
    <link rel="stylesheet" href="./public/css/cursor.css" />
    <link rel="stylesheet" href="./public/css/gsap.css" />
    <link rel="stylesheet" href="./public/css/progress.css" />
    <link rel="stylesheet" href="./public/css/textAnimation.css" />
    <link rel="stylesheet" href="./public/css/login.css" />
    <script src="./public/js/gsap.min.js"></script>
    <title>Login</title>
    <!-- Google tag (gtag.js) -->
    <script
        async
        src="https://www.googletagmanager.com/gtag/js?id=G-M1D7MCSGV6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-M1D7MCSGV6");
    </script>
</head>

<body>
    <main>
        <!-- Login Section -->
        <div class="admin-login">
            <h2>Login by Admin</h2>
            <form action="" method="POST">
                <div class="contact-section__column">
                    <div class="contact-section__form-inputfield">
                        <input
                            type="text"
                            name="mail"
                            id="mail"
                            class="input"
                            required />
                        <label for="mail">User Name</label>
                    </div>

                    <div class="contact-section__form-inputfield">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="input"
                            required />
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="contact-section__form-button">
                    <button type="submit" name="login" style="color: var(--accent);">Login</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>