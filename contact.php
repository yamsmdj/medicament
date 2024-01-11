<?php include 'header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "destination@example.com";
    $subject = "Formulaire de contact";
    $body = http_build_query($_POST);
    $headers = "From: contact@example.com\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Le message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        body {
            background-color: #5F2B73;
            margin: 0;
            color: white;
            font-family: Arial, sans-serif;
        }
        h1 {
            border-bottom:20px;
        }

        .contact-container {
            display: flex;
            justify-content: center;
           
        }
        label {
            display:flex;
        }
        form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            padding: 20px;
            border-radius: 50px;
            background-color: #3a1d4f;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        textarea {
            margin-bottom: 30px;
            padding: 8px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            width: -webkit-fill-available;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #2f2f2f;
            color: white;
            cursor: pointer;
            margin: 0 auto; 
            display: block; 
        }

        input[type="submit"]:hover {
            background-color: gold;
        }

        .success,
        .error {
            margin-top: 20px;
            text-align: center;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }

    </style>
</head>
<body>
    <h1>CONTACTEZ NOUS</h1>
    <div class="contact-container">
        <form method="post" action="">
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
    </div>
</body>
</html>

<?php include 'footer.php'; ?>
