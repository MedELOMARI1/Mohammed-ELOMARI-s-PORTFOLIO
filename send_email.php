<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecte des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Paramètres de l'e-mail
    $to = 'elomarimohammed111@gmail.com'; // Remplace par ton adresse e-mail
    $subject = 'Message de votre portfolio';

    // Corps du message
    $email_message = "Nom: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message\n";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi de l'e-mail
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Merci pour votre message. Nous vous répondrons bientôt.";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer.";
    }
} else {
    echo "Accès non autorisé.";
}
?>
