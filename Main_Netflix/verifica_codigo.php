<?php
include('conexao/connect.php');

$error_message = '';
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = trim($_POST['codigo']);
    $email = $_GET['email']; 

 
    if (empty($codigo)) {
        $error_message = 'Por favor, insira o código de verificação.';
    } else {
      
        $sql = "SELECT * FROM verification_codes WHERE code = ? AND email = ? AND used = 0";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $codigo, $email);
        $stmt->execute();
        $result = $stmt->get_result();


        if ($result->num_rows > 0) {
            $update_sql = "UPDATE verification_codes SET used = 1 WHERE code = ? AND email = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("is", $codigo, $email);
            $update_stmt->execute();

            $success_message = "Código verificado com sucesso!";
            header("Location: mudar_senha.php?email=" . urlencode($email));
            exit();
        } else {
            $error_message = 'Código de verificação inválido.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Código</title>
    <?php include 'includes/logo-page.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/passwordstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<div class="header"><img src="assets/images/bahviologo.png" alt="logo"></div>

<div class="container">
    <h2>Verificação de Código</h2>
    <p>Um código de verificação foi enviado para o seu email. Por favor, verifique sua caixa de entrada e insira o código abaixo para prosseguir com a alteração.</p>

    <?php if (!empty($error_message)): ?>
        <p class="error-message"><?php echo $error_message; ?></p>
    <?php endif; ?>
    
    <?php if (!empty($success_message)): ?>
        <p class="success-message"><?php echo $success_message; ?></p>
    <?php endif; ?>

    <form method="POST">
        <div class="input-box">
            <span class="icon">
                <i class="fa-solid fa-asterisk"></i>
            </span>
            <input type="number" required placeholder="" name="codigo">
            <label>Informe o seu código</label>
        </div>
        
        <button type="submit" class="btn"><span>Continuar</span></button>
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
