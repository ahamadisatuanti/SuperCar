<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire et les valider
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $email = htmlspecialchars($_POST['email']);
    $commentaires = htmlspecialchars($_POST['commentaires']);

    // Définir les paramètres de l'email
    $to = "contact@supercar.com";
    $subject = "Nouveau message de $nom $prenom";
    $message = "Nom: $nom\nPrénom: $prenom\nAdresse: $adresse\nTéléphone: $telephone\nEmail: $email\n\nCommentaires:\n$commentaires";
    $headers = "From: $email";

    // Envoyer l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Échec de l'envoi du message.";
    }
} else {
    echo "Méthode de requête non valide.";
}
?>
