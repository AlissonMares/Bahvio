<?php
include('conexao/connect.php');



require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);  

 
    if (empty($email)) {
        $error_message = 'Por favor, insira o seu e-mail.';
    } else {
      
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $code = rand(100000, 999999); 
   
            $sql = "INSERT INTO verification_codes (email, code) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $email, $code);
            $stmt->execute();

    
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'bahviosa@gmail.com';
                $mail->Password = 'mlbk aqqx cbsq hvch';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                $mail->setFrom('bahviosa@gmail.com', 'Bahvio');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->CharSet = 'UTF-8';
                $mail->Subject = 'Código de Verificação';
                $mail->Body = "Seu código de verificação é: <strong>{$code}</strong>";
                $mail->AltBody = "Seu código de verificação é: {$code}";

                $mail->send();

              
                header("Location: verifica_codigo.php?email=" . urlencode($email));
                exit();
            } catch (Exception $e) {
                $error_message = "Erro ao enviar o e-mail. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            $error_message = 'O e-mail informado não foi encontrado.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Esqueceu a Senha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/passwordstyle.css">
    <?php include 'includes/logo-page.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<header class="header">
        <img src="assets/images/bahviologo.png" alt="logo" onclick="window.location.href='index.php'">
        <nav class="navlog">
            <a href="login.php">Home</a>
            <a href="#" class="popup-link" data-popup-text="No BAHVIO, oferecemos o melhor do entretenimento em um só lugar. Somos uma plataforma de streaming que conecta você a filmes, séries e documentários de todos os gêneros. Nosso objetivo é proporcionar uma experiência única, com conteúdos que emocionam, divertem e inspiram. Aqui, o entretenimento está sempre ao seu alcance.">Sobre</a>
            <a href="#" class="popup-link" data-popup-text="bahviostreaming@gmail.com 
            ou ligue 47 3030-0101">Contato</a>
        </nav>
    </header>
<div class="container">
    <h2>Recuperação de Senha</h2>
    <p>Por favor, informe seu email cadastrado. Enviaremos um link para redefinir sua senha. Verifique sua caixa de entrada e siga as instruções contidas no email para concluir o processo de alteração.</p>

    <?php if (!empty($error_message)): ?>
        <p class="error-message"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form method="POST">
        <div class="input-box">
            <span class="icon">
                <i class="fa-solid fa-envelope"></i>
            </span>
            <input type="email" required placeholder="" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            <label>Informe o seu Email</label>
        </div>

        <button type="submit" class="btn">
            <span>Continuar</span>  
        </button>
    </form>
</div>

<footer>
  <div class="footer-container">
    <div class="footer-column">
      <h3>Bahvio</h3>
      <p>Todos os direitos reservados ©.</p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
    <div class="footer-column">
      <h3>Link</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Preços</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h3>Suporte</h3>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Como Funciona</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h3>Contate-nos</h3>
      <ul>+55 47 9191-9191</ul>
      <p>bahviostreaming@gmail.com</p>
    </div>
  </div>
</footer>


</body>
</html>
