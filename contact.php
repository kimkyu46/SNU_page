<?php

if($_POST["submit"]) {
    $recipient="km920725@gmail.com";
    $subject="message";
    $sender=$_POST["your_name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nemail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="your-name">

        <label>Email address:</label>
        <input name="email">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>