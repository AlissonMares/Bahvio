<?php
include('conexao/connect.php');

$error_message = '';

if (isset($_GET['email'])) {
    $email = $_GET['email'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $senha = $_POST['senha'];
        $confirma_senha = $_POST['confirma_senha'];

       
        if (strlen($senha) < 8) {
          $error_message = 'A senha deve ter pelo menos 8 caracteres.';
      } elseif (!preg_match('/[A-Z]/', $senha)) { // Verifica se tem pelo menos uma letra maiúscula
          $error_message = 'A senha deve conter pelo menos uma letra maiúscula.';
      } elseif (!preg_match('/[0-9]/', $senha)) { // Verifica se tem pelo menos um número
          $error_message = 'A senha deve conter pelo menos um número.';
      } elseif ($senha !== $confirma_senha) {
          $error_message = 'As senhas não correspondem. Tente novamente.';
      } else {
            $nova_senha = password_hash($senha, PASSWORD_DEFAULT);
            
            $sql = "UPDATE usuarios SET senha = ? WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $nova_senha, $email);
            $stmt->execute();
            echo "<script>alert('Senha alterada com sucesso!');</script>";
            header("Location: login.php");
            exit(); 
        }
    }
} else {
    echo "Email não fornecido.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudar Senha</title>
    <meta charset="UTF-8">
    <?php include 'includes/logo-page.php'; ?>
    <link rel="stylesheet" href="assets/css/passwordstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<div class="header"><img src="assets/images/bahviologo.png" alt="logo"></div>

<div class="container">
    <h2>Redefinição de senha</h2>
    <p>Faça a sua nova senha</p>

    <?php if (!empty($error_message)): ?>
        <p class="error-message"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form method="POST">
        <div class="input-box">
            <span class="icon">
                <i class="fa-solid fa-lock"></i>
            </span>
            <input type="password" required placeholder="" name="senha">
            <label>Nova senha</label>
        </div>

        <div class="input-box">
            <span class="icon">
                <i class="fa-solid fa-lock"></i>
            </span>
            <input type="password" required placeholder="" name="confirma_senha">
            <label>Confirme a senha</label>
        </div>

        <button type="submit" class="btn"><span>Alterar</span></button>        
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
