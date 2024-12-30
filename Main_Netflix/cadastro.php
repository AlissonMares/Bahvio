<?php include 'includes/logo-page.php'; ?>

<?php
include('conexao/connect.php');

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $senha = $_POST['senha'];
    $senha_confirmar = $_POST['senha_confirmar'];
    $tel = $_POST['tel'];
    $nome = $_POST['nome'];
    $nome_usuario = $_POST['nome_usuario'];
    $email = $_POST['email'];
    

    if (strlen($nome) < 3 || strlen($nome) > 24) {
        $errors['nome'] = "O nome deve ter entre 3 e 24 caracteres.";
    }
    if (strlen($nome_usuario) < 2 || strlen($nome_usuario) > 10) {
        $errors['nome_usuario'] = "O nome deve ter entre 2 e 10 caracteres.";
    }
    if (!preg_match('/^\(\d{2}\) 9 \d{4}-\d{4}$/', $tel)) {
        $errors['tel'] = "O telefone deve estar no formato (xx) 9 xxxx-xxxx.";
    }
    if (!preg_match('/^(?=.*[A-Z])(?=.*[0-9]).{8,}$/', $senha)) {
        $errors['senha'] = "A senha deve ter 8+ caracteres, com uma letra maiúscula e um número.";
    }
    if ($senha !== $senha_confirmar) {
        $errors['senha_confirmar'] = "As senhas não correspondem. Tente novamente.";
    }

 
    $sql_verifica_email = "SELECT * FROM usuarios WHERE email = ?";
    $stmt_verifica_email = $conn->prepare($sql_verifica_email);
    $stmt_verifica_email->bind_param("s", $email);
    $stmt_verifica_email->execute();
    $resultado = $stmt_verifica_email->get_result();
    
    if ($resultado->num_rows > 0) {
        $errors['email'] = "Este email já está cadastrado.";
    }

 
    if (empty($errors)) {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $sql_usuario = "INSERT INTO usuarios (nome, nome_usuario, email, tel, senha) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql_usuario);
        $stmt->bind_param("sssss", $nome, $nome_usuario, $email, $tel, $senha_hash);

        if ($stmt->execute()) {
            session_start();
            $_SESSION['id'] = $conn->insert_id; 
            $_SESSION['email'] = $email; 
            $_SESSION['nome'] = $nome; 
            header("Location: planos.php?id=" . $_SESSION['id']); 
            exit();
        } else {
            echo "Erro ao cadastrar usuário: " . $stmt->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/registerstyle.css">
    <title>Registro</title>
    <script>
        function formatarTelefone(event) {
            let input = event.target.value.replace(/\D/g, '');

            if (input.length > 11) {
                input = input.slice(0, 11);
            }

            if (input.length <= 2) {
                input = `(${input}`;
            } else if (input.length <= 7) {
                input = `(${input.slice(0, 2)}) ${input.slice(2, 3)} ${input.slice(3)}`;
            } else {
                input = `(${input.slice(0, 2)}) ${input.slice(2, 3)} ${input.slice(3, 7)}-${input.slice(7, 11)}`;
            }

            event.target.value = input;
        }
    </script>
</head>

<body>
    <div class="header"><img src="assets/images/bahviologo.png" alt="logo"></div>

    <div class="steps">
        <div class="step">
            <div class="circle active">1</div>
            <p>Dados Pessoais</p>
        </div>
        <div class="line"><span></span></div>
        <div class="step">
            <div class="circle">2</div>
            <p>Planos</p>
        </div>
        <div class="line"><span></span></div>
        <div class="step">
            <div class="circle">3</div>
            <p>Pagamento</p>
        </div>
    </div>

    <div class="container">
        <div class="title">Registro</div>
        <div class="content">
            <form method="POST" action="">
                <div class="user-details">
                    <div class="input-box">
                        <input type="text" required placeholder="" name="nome" value="<?php echo isset($nome) ? htmlspecialchars($nome) : ''; ?>" class="<?php echo isset($errors['nome']) ? 'error' : ''; ?>">
                        <label>Nome Completo</label>
                        <?php if (isset($errors['nome'])): ?>
                            <span class="error-message"><?php echo $errors['nome']; ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="input-box">
                        <input type="text" required placeholder="" name="nome_usuario" value="<?php echo isset($nome_usuario) ? htmlspecialchars($nome_usuario) : ''; ?>">
                        <label>Nome de Usuário</label>
                        <?php if (isset ($errors['nome_usuario'])): ?>
                            <span class="error-message"><?php echo $errors['nome_usuario']; ?></span>
                            <?php endif; ?>
                    </div>
                    <div class="input-box">
                        <input type="email" required placeholder="" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" class="<?php echo isset($errors['email']) ? 'error' : ''; ?>">
                        <label>Email</label>
                        <?php if (isset($errors['email'])): ?>
                            <span class="error-message"><?php echo $errors['email']; ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="input-box">
                        <input type="text" required placeholder="" name="tel" oninput="formatarTelefone(event)" maxlength="16" class="<?php echo isset($errors['tel']) ? 'error' : ''; ?>" value="<?php echo isset($tel) ? htmlspecialchars($tel) : ''; ?>">
                        <label>Telefone</label>
                        <?php if (isset($errors['tel'])): ?>
                            <span class="error-message"><?php echo $errors['tel']; ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="input-box">
                        <input type="password" required placeholder="" name="senha" class="<?php echo isset($errors['senha']) ? 'error' : ''; ?>">
                        <label>Senha</label>
                        <?php if (isset($errors['senha'])): ?>
                            <span class="error-message"><?php echo $errors['senha']; ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="input-box">
                        <input type="password" required placeholder="" name="senha_confirmar" class="<?php echo isset($errors['senha_confirmar']) ? 'error' : ''; ?>">
                        <label>Confirmar Senha</label>
                        <?php if (isset($errors['senha_confirmar'])): ?>
                            <span class="error-message"><?php echo $errors['senha_confirmar']; ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <button type="submit" class="btn"><span>Continuar</span></button>
                <div class="login">
                    <p>Já é assinante?<a href="login.php"> Entrar</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<script>
    var _lines = document.querySelectorAll('.line'),
        _line1 = _lines[0],
        _line2 = _lines[1];

    window.addEventListener('DOMContentLoaded', function() {
        _line1.classList.add('active');
    });

    document.querySelectorAll('.input-box input').forEach(input => {
        input.addEventListener('input', function() {
            if (this.classList.contains('error')) {
                this.classList.remove('error');
                const errorMessage = this.parentElement.querySelector('.error-message');
                if (errorMessage) {
                    errorMessage.remove();
                }
            }
        });
    });
</script>
