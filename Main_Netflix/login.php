<?php include 'includes/logo-page.php'; ?>

<?php
include('conexao/connect.php');
session_start();

$error_message = ''; 

if (isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];
    
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
   
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        header("Location: tela_principal.php"); 
        exit();
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

   
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
     
        $row = $result->fetch_assoc();

        if (password_verify($senha, $row['senha'])) {
            $_SESSION['id'] = $row['id'];

            if (isset($_POST['lembrar_me'])) {
                setcookie('email', $email, time() + (30 * 24 * 60 * 60), "/"); 
            }

            header("Location: tela_principal.php"); 
            exit();
        } else {
    
            $error_message = 'Senha incorreta. Tente novamente.';
        }
    } else {
   
        $error_message = 'O e-mail informado não está cadastrado.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylelogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login</title>
</head>

<body>
    <header class="header">
        <img src="assets/images/bahviologo.png" alt="logo" onclick="window.location.href='index.php'">
        <nav class="navlog">
            <a href="index.php">Home</a>
            <a href="#" class="popup-link" data-popup-text="No BAHVIO, oferecemos o melhor do entretenimento em um só lugar. Somos uma plataforma de streaming que conecta você a filmes, séries e documentários de todos os gêneros. Nosso objetivo é proporcionar uma experiência única, com conteúdos que emocionam, divertem e inspiram. Aqui, o entretenimento está sempre ao seu alcance.">Sobre</a>
            <a href="#" class="popup-link" data-popup-text="bahviostreaming@gmail.com 
            ou ligue 47 3030-0101">Contato</a>
        </nav>
    </header>

    <section class="home">
        <div class="content">
            <h2>BAHVIO — O melhor do entretenimento, ao seu alcance!</h2>
            <p>Entre e mergulhe no mundo do entretenimento. Todos os seus filmes e séries favoritos em um só lugar!</p>
        </div>
        <div class="login">
            <h2>Login</h2>

            <?php if (!empty($error_message)): ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>

            <form action="" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input type="email" required placeholder="" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                    <label>Entre com o seu email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                    <input type="password" id="senha" required placeholder="" name="senha">
                    <i class="fa fa-eye" id="togglePassword" style="cursor: pointer;"></i> 
                    <label>Entre com a sua senha</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox" name="lembrar_me">Lembrar de mim</label>
                    <a href="esqueceu_senha.php">Esqueceu a senha?</a>
                </div>
                <button type="submit" class="btn"><span>Entrar</span></button>
                <div class="register">
                    <p>Não assinou ainda?<a href="cadastro.php"> Cadastre-se agora</a></p>
                </div>
            </form>
        </div>
    </section>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#senha');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>

    <script>
        const popupLinks = document.querySelectorAll('.popup-link');

        popupLinks.forEach(link => {
            let popupTimeout;

            link.addEventListener('mouseenter', () => {
                popupTimeout = setTimeout(() => {
                    showPopup(link);
                }, 500); 
            });

            link.addEventListener('mouseleave', () => {
                clearTimeout(popupTimeout); // Cancela a exibição se o mouse sair antes do tempo
                setTimeout(() => {
                    hidePopup(link);
                }, 500); 
            });
        });

        function showPopup(link) {
            const popupText = document.createElement('div');
            popupText.classList.add('popup-text');
            popupText.innerText = link.getAttribute('data-popup-text');
            link.appendChild(popupText);
            popupText.style.display = 'block'; 
        }

        function hidePopup(link) {
            const popupText = link.querySelector('.popup-text');
            if (popupText) {
                popupText.remove(); 
            }
        }
    </script>

</body>
</html>
