<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recull les dades del formulari
    $name = $_POST['name'];
    $user_email = $_POST['user'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Correu electrònic de destinació
    $to = 'example@example.com';
    
    // Capçaleres
    $headers = "From: $user_email \r\n";
    $headers .= "Reply-To: $user_email \r\n";
    
    // Envia el correu electrònic
    mail($to, $subject, $message, $headers);
    
    // Redirigeix a una pàgina de confirmació
    header('Location: confirmation.html');
    exit;
}
?>
