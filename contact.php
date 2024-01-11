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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>Formulaire de Contact</title>

    <style>
body {
    background-color: #5F2B73;
    margin: 0;
    color : white;
    padding: 70px
}
.contact-container {
    display:flex;
    align-items: center;
    width: 100%;
    max-width: 1200px;
    margin: 150px auto;
    padding: 0px;
    box-sizing: border-box;
    
}

.TEXTE1 {
    text-align: right;
    vertical-align : center;
    align-items: center;
    position:relative;
    left:450px;
    justify-content:space-between
}

.H1 {
    font-size :large;

}

.fondue.img {

}

.contact-form {
    flex: 1;
    max-width: 600px;
    padding: 70px;
    box-sizing: border-box;
    position:relative;
    right:800px;
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

@media screen and (max-width: 768px) {
    .contact-container {
        flex-direction: column;
        align-items: stretch;
    }

   
}

    </style>
</head>
<body>
    <div class="contact-container">
<div class="TEXTE1">
            <h1> CONTACTEZ NOUS </h1>
               <div class="fondue"> <img src="image/chocolat.png" alt="chocolat fondu"> </div>
             <p> For questions, technical assistance,or collaboration opportunities via the contact information provided. </p>
                <i class="fa-brands fa-instagram"></i> <p> @wonka_official </p>
                <i class="fa-solid fa-phone"></i> <p> numéro de téléphone </p>
                <i class="fa-solid fa-building"></i> <p> Usine Wonka, 5 rue du Chocolat.
        </div>
    <form class="contact-form" action="traitement.php" method="post">
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
