<?php include 'header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_STRING);
    $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_STRING);
    $telephone = filter_input(INPUT_POST, "telephone", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $message_text = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Nom: $nom\n";
        $message .= "Prénom: $prenom\n";
        $message .= "Téléphone: $telephone\n";
        $message .= "Email: $email\n";
        $message .= "Message: $message_text\n";

        $destinataire = 'yalic.lori@gmail.com';
        $sujet = 'Wonka Message';

        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $headers .= "MIME-Version: 1.0\r\n";

        if (mail($destinataire, $sujet, $message, $headers)) {
            echo "<p class='success'>E-mail envoyé avec succès !</p>";
        } else {
            echo "<p class='error'>Une erreur s'est produite lors de l'envoi de l'e-mail.</p>";
        }
    } else {
        echo "<p class='error'>L'adresse e-mail fournie n'est pas valide.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Formulaire de Contact</title>
    <style>
        body {
            background-color: #5F2B73;
            margin: 0;
        }

        .contact-form {
            width: 100%;
            max-width: 600px;
            margin: 150px auto;
            padding: 0 15px;
            box-sizing: border-box;
            border-left: 30px solid #5F2B73;
            color: white;
        }

        .contact-form fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }

        .contact-form label {
            display: block;
            margin-bottom: 5px;
        }

        .contact-form input[type="text"],
        .contact-form input[type="tel"],
        .contact-form input[type="message"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
        }

        .contact-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: gold;
            color: #5F2B73;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #45a049;
        }

        @media screen and (min-width: 768px) {
            .contact-form {
                margin: 150px auto;
            }
        }
    </style>
</head>
<body>

    <form class="contact-form" action="traitement.php" method="post">
        <h1> CONTACTEZ NOUS </h1>
        <fieldset>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="telephone">Téléphone :</label>
            <input type="tel" id="telephone" name="telephone" required><br>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>

            <input type="submit" value="Envoyer">
        </fieldset>
    </form>

</body>
</html>

<?php include 'footer.php'; ?>
