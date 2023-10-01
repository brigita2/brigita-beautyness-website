<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$service = trim($_POST['service']);
$message = trim($_POST['message']);

if (!empty($name) && !empty($email) && !empty($phone) && !empty($service) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        include 'db.php';
        $from = '$email';
        $to = 'brigita.gaubiene@gmail.com';
        $subject = "Nauja žinutė";
        $author = 'Nuo: ' . $name . ', ' . $email . ', ' . $phone . '. Dominanti paslauga: ' . $service;
        $message = htmlspecialchars($message);
        // mail($to, $subject, $author, $message, $from);
        // echo '<script>alert("Dėkojame, Jūsų užklausą gavome. Su Jumis susisieksime")</script>';
    }
}
