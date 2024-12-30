<?php include 'includes/logo-page.php'; ?>

<?php
session_start(); // Iniciar a sessão para acessar os dados do usuário

// Verificar se o usuário está logado
if (!isset($_SESSION['id'])) {
    die("Acesso negado. Usuário não está logado.");
}

$id = $_SESSION['id'];

include 'conexao/connect.php';

// Puxar informações do usuário do banco de dados
$sql = "SELECT nome, nome_usuario, email, tel FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Erro na preparação da consulta: " . $conn->error);
}
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
} else {
    die("Usuário não encontrado.");
}

$message = ''; // Variável para armazenar a mensagem

// Verificar se o formulário foi enviado para atualização
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = !empty($_POST['nome']) ? $_POST['nome'] : $usuario['nome'];
    $nome_usuario = !empty($_POST['nome_usuario']) ? $_POST['nome_usuario'] : $usuario['nome_usuario'];
    $email = !empty($_POST['email']) ? $_POST['email'] : $usuario['email'];
    $tel = !empty($_POST['tel']) ? $_POST['tel'] : $usuario['tel'];
    $senha = !empty($_POST['senha']) ? password_hash($_POST['senha'], PASSWORD_BCRYPT) : '';

    // Atualizar as informações no banco de dados
    if ($senha) {
        $sql = "UPDATE usuarios SET nome = ?, email = ?, tel = ?, nome_usuario = ?, senha = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Erro na preparação da consulta: " . $conn->error);
        }
        $stmt->bind_param("sssssi", $nome, $email, $tel, $nome_usuario, $senha, $id);
    } else {
        $sql = "UPDATE usuarios SET nome = ?, email = ?, tel = ?, nome_usuario = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Erro na preparação da consulta: " . $conn->error);
        }
        $stmt->bind_param("ssssi", $nome, $email, $tel, $nome_usuario, $id);
    }

    if ($stmt->execute()) {
        $message = "Informações atualizadas com sucesso!";
        // Atualizar as informações na tela após submissão
        $usuario['nome'] = $nome;
        $usuario['nome_usuario'] = $nome_usuario;
        $usuario['email'] = $email;
        $usuario['tel'] = $tel;
    } else {
        $message = "Erro ao atualizar informações: " . $conn->error;
    }
}

//Mensagem foi desativada.

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/configs.css">
    <title>Gerenciar Usuário</title>
    <script>
function habilitarEdicao() {
    var inputs = document.querySelectorAll('input');
    inputs.forEach(input => {
        // Remover o readonly de todos os campos, exceto o e-mail
        if (input.name !== 'email') {
            input.removeAttribute('readonly');
        }
    });

    // Desbloquear o campo de senha
    document.getElementById('senha').removeAttribute('disabled');
    
    // Esconder o botão "Editar" e mostrar o botão "Salvar"
    document.getElementById('editarBtn').style.display = 'none';
    document.getElementById('salvarBtn').style.display = 'inline';
}


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
</head>

<body>
    <div class="header"><img src="assets/images/bahviologo.png" alt="logo"></div>

    <div class="container">
        <div class="back">
              <i class="fa-solid fa-arrow-left" onclick="window.location.href='tela_principal.php'"></i>
        </div>

        <form method="POST" action="">
            <div class="user-details"> 
            <h2>Informações do Usuário</h2>

                <div class="input-box">
                <input type="text" name="nome" placeholder="" value="<?php echo $usuario['nome']; ?>" readonly required><br><br>
                <label for="nome">Nome:</label>
                </div>

                <div class="input-box">
                <input type="text" name="nome_usuario" placeholder=""value = "<?php echo $usuario['nome_usuario']; ?>" readonly readonly><br><br>
                <label for="nome_usuario">Nome de Usuario:</label>
                </div>

                <div class="input-box">
                <input type="email" name="email" placeholder="" value="<?php echo $usuario['email']; ?>" readonly required><br><br>
                <label for="email">E-mail:</label>
                </div>

                <div class="input-box">
                <input type="text" name="tel" placeholder="" value="<?php echo $usuario['tel']; ?>" readonly required><br><br>
                <label for="tel">Telefone:</label>
                </div>

                <div class="input-box">
                <input type="password" placeholder="" name="senha" id="senha" disabled><br><br>
                <label for="senha">Nova Senha:</label>
                </div>

                <input type="button" id="editarBtn" value="Editar" onclick="habilitarEdicao()">
                <input type="submit" id="salvarBtn" value="Salvar" style="display: none;">

            </div>

        </form>
              
        </body>
        </div>
</html>