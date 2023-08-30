<?php

    include_once "./db.php";

    if (isset($_POST)){
        $stmt = $conn->prepare("INSERT INTO Portfolio_ContactForm (name, email, subject, content) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $content);

        $name=$_POST["name"];
        $email=$_POST["email"];
        $subject=$_POST["subject"];
        $content=$_POST["message"];
        $stmt->execute();
    }




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <meta http-equiv="refresh" content="2;url=../" />
    <title>Success</title>
</head>
<body>
    <div id="center">
        <lottie-player src="./contact_success_anim.json" background="transparent"  speed="1"  class="contact-anim" autoplay></lottie-player>
    </div>
<style>
    #center {
        width: 100%;
        height: 100vh;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contact-anim {
        width: 500px;
        height: 500px;
    }
</style>
</body>
</html>
