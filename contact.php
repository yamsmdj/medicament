<?php include 'header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $message_text = $_POST["message"];

    $message = "Nom: $nom\n";
    $message .= "Prénom: $prenom\n";
    $message .= "Téléphone: $telephone\n";
    $message .= "Email: $email\n";
    $message .= "Message: $message_text\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "MIME-Version: 1.0\r\n";

 

    if (mail($destinataire, $sujet, $message, $headers)) {
        echo "<p class='success'>E-mail envoyé avec succès !</p>";
    } else {
        echo "<p class='error'>Une erreur s'est produite lors de l'envoi de l'e-mail.</p>";
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
            margin: 0 auto; /* Cela centre horizontalement le bouton */
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
