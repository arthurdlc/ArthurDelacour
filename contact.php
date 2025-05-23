<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

require 'vendor/autoload.php'; // PHPMailer via Composer

$error = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = htmlspecialchars(trim($_POST["name"] ?? ''));
    $email   = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["message"] ?? ''));

    if (empty($name) || empty($email) || empty($message)) {
        $error = "Tous les champs sont obligatoires.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Adresse e-mail invalide.";
    } else {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'delacour.a1109@gmail.com';
            $mail->Password   = 'bvxx uaja gdsn ghur'; // Pense à sécuriser ça !
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom($email, $name);
            $mail->addAddress('delacour.a1109@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = "Nouveau message du formulaire";
            $mail->Body    = "
                <strong>Nom :</strong> {$name}<br>
                <strong>Email :</strong> {$email}<br><br>
                <strong>Message :</strong><br>" . nl2br($message);

            $mail->send();

            // Stocke le message succès dans la session puis redirige
            $_SESSION['success_message'] = "✅ Message envoyé avec succès !";
            header("Location: /index.php");
            exit;

        } catch (Exception $e) {
            $error = "Erreur lors de l'envoi : {$mail->ErrorInfo}";
        }
    }
}

$page_title = "Arthur Delacour | Contact";
include 'php/header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h1>📩 Contactez-moi</h1>

    <?php if ($error): ?>
        <div class="alert error">❌ <?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST" action="contact.php" novalidate>
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" required value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">

        <label for="email">Adresse Email</label>
        <input type="email" id="email" name="email" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="6" required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>

        <button type="submit">Envoyer le message</button>
    </form>
</div>

</body>
</html>

<?php include 'php/footer.php'; ?>
