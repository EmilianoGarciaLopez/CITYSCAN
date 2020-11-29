<?php

if($_POST["submit"]) {
    $recipient="emilianogarcialopez26@gmail.com";
    $subject="Form Submission";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <meta name="description" content="Contact us for more information">
    <meta name="keywords" content="Artificial Intelligence, Infrastructure, Business, Transportation, Concession">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <nav id="overlay">
        <img src="./images/close.svg" alt="close button" class="close-btn" id="close-menu">

        <ul>
            <li class= "lis">
                <a href="./index.html">About Us</a>
                <a href="./projects.html">Projects</a>
                <a href="./contact.php">Contact Us</a>
            </li>
        </ul>

    </nav>

    <header>
        <a href="./index.html"><img class="logo" src="./images/logo.svg" alt="Cityscan Logo"></a>

        <div><img class="menu-btn" src="./images/ham.svg" id="open-menu" alt="Menu Item"></div>
    </header>


    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>
    



    <footer>
        <h1>© Cityscan 2020</h1>
    </footer>



    

     

    <script>
        var overlay = document.getElementById('overlay');
        var closeMenu = document.getElementById('close-menu');

        document.getElementById('open-menu').addEventListener('click', function () {
            overlay.classList.add('show-menu');
        });

        document.getElementById('close-menu').addEventListener('click', function () {
            overlay.classList.remove('show-menu');
        });
    </script>
    
</body>
</html>