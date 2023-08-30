<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Valentijn van der Jagt</title>
    <link rel="stylesheet" href="Styles/Index.css">
    <link rel="stylesheet" href="Styles/Navigation.css">
    <link rel="stylesheet" href="Styles/Homepage.css">
    <link rel="stylesheet" href="Styles/AboutMe.css">
    <link rel="stylesheet" href="Styles/Projects.css">
    <link rel="stylesheet" href="Styles/Contact.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <?php
        include_once "Components/navigation.php";

        include_once "Pages/homepage.php";
        include_once "Pages/aboutme.php";
        include_once "Pages/projects.php";
        include_once "Pages/contact.php";
    ?>
</body>
</html>

