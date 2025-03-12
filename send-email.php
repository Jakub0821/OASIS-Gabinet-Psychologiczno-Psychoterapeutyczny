<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Twój adres e-mail (przekierowany na telefon)
    $to = "agnieszkazawistowska1@wp.pl";  // <-- Zmień na swój e-mail!
    
    $subject = "Nowa wiadomość od $name";
    $headers = "From: $email" . "\r\n" . "Reply-To: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Wiadomość wysłana!";
    } else {
        echo "Błąd wysyłania wiadomości.";
    }
}
?>
