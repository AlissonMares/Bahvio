<?php include 'includes/logo-page.php'; ?>

<?php
session_start();
include('conexao/connect.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_cartao = $_POST['nome_cartao'];
    $numero_cartao = $_POST['numero_cartao'];
    $validade_ano = $_POST['validade_ano'];
    $validade_mes = $_POST['validade_mes'];
    $cvv = $_POST['cvv'];

    if (isset($_SESSION['id'])) {
        $usuario_id = $_SESSION['id'];


        $sql_check = "SELECT * FROM pagamentos WHERE usuario_id = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("i", $usuario_id);
        $stmt_check->execute();
        $result = $stmt_check->get_result();

        if ($result->num_rows > 0) {

            echo "Você já possui um plano ativo.";
        } else {

            $numero_cartao_hash = password_hash(substr($numero_cartao, -4), PASSWORD_DEFAULT);

            $sql = "INSERT INTO pagamentos (usuario_id, nome_cartao, numero_cartao_hash, validade_ano, validade_mes) 
                    VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("issss", $usuario_id, $nome_cartao, $numero_cartao_hash, $validade_ano, $validade_mes);

            if ($stmt->execute()) {

            } else {
                echo "Erro ao processar o pagamento: " . $stmt->error;
            }
        }
    } else {
        echo "Usuário não autenticado.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/registerstyle.css">
    <title>Pagamento</title>
</head>

<body>

    <div class="header"><img src="assets/images/bahviologo.png" alt="logo"></div>

    <div class="steps">
        <div class="step">
            <div class="circle active">1</div>
            <p>Dados Pessoais</p>
        </div>
        <div class="line">
            <span></span>
        </div>
        <div class="step">
            <div class="circle active">2</div>
            <p>Planos</p>
        </div>
        <div class="line">
            <span></span>
        </div>
        <div class="step">
            <div class="circle active">3</div>
            <p>Pagamento</p>
        </div>
    </div>
    <script>
        var _lines = document.querySelectorAll('.line'),
            _line1 = _lines[0],
            _line2 = _lines[1];

        window.addEventListener('DOMContentLoaded', function() {
            _line1.classList.add('active');

            setTimeout(function() {
                _line2.classList.add('active');
            }, 1000);
        });
    </script>

    <div class="container-pay">

        <div class="card-container">

            <div class="front">
                <div class="image">
                    <img src="assets/images/chip.png" alt="">
                    <img src="assets/images/visa.png" alt="">
                </div>
                <div class="card-number-box">################</div>
                <div class="flexbox">
                    <div class="box">
                        <span>Titular</span>
                        <div class="card-holder-name">Nome completo</div>
                    </div>
                    <div class="box">
                        <span>Validade</span>
                        <div class="expiration">
                            <span class="exp-month">mm</span>
                            <span class="exp-year">aa</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="back">
                <div class="stripe"></div>
                <div class="box">
                    <span>cvv</span>
                    <div class="cvv-box"></div>
                    <img src="assets/images/visa.png" alt="">
                </div>
            </div>

        </div>

        <form action="" method='POST'>
            <div class="inputBox">
                <span>Numero do Cartão</span>
                <input type="text" class="card-number-input" inputmode="numeric" pattern="\d{16}" maxlength="16" name="numero_cartao" required title="O número do cartão deve ter 16 dígitos">
            </div>
            <div class="inputBox">
                <span>Titular</span>
                <input type="text" class="card-holder-input" maxlength="25" name="nome_cartao" required>
            </div>
            <div class="flexbox">
                <div class="inputBox">
                    <span>Mês de válidade mm</span>
                    <select name="validade_mes" class="month-input">
                        <option value="month" selected disabled>Mês</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Ano de válidade aa</span>
                    <select name="validade_ano" class="year-input">
                        <option value="year" selected disabled>Ano</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>cvv</span>
                    <input type="text" maxlength="4" class="cvv-input" name="cvv">
                </div>
            </div>
            <button type="submit" class="btn-pay"><span>Finalizar</span></button>
        </form>

        <span class="carregando"></span>

    </div>
    <div class="modal" id="signature-modal">
    <div class="modal-inside">
        <div class="modal-container">
            <div class="title">Parabéns, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</div>
            <div class="content">Seu pagamento foi realizado com sucesso. Seu plano é <?php echo htmlspecialchars($_SESSION['plano']); ?>! Aproveite. </div>
            <div class="actions">
                <button id="btn-entrar">Entrar</button>
                <span class="carregando" id="carregando-spinner"></span>
            </div>

        </div>
    </div>
</div>


    <script>
 // Função para abrir o modal
function openModal() {
    document.getElementById('signature-modal').classList.add('opened');
}

// Exibe o modal após o formulário ser enviado
document.querySelector('form').addEventListener('submit', function(event) {
    openModal();
    event.preventDefault();  // Impede o envio automático para que o usuário confirme antes de enviar o email
});

// Envia o email e redireciona para a tela principal ao clicar no botão "Entrar"
// Envia o email e redireciona para a tela principal ao clicar no botão "Entrar"
document.getElementById('btn-entrar').addEventListener('click', function() {
    const loadingSpinner = document.getElementById('carregando-spinner');
    loadingSpinner.style.display = 'inline-block'; // Exibe o spinner
    // Faz uma requisição AJAX para o PHP enviar o email
    fetch('enviar_email.php')
        .then(response => response.text())
        .then(response => {
            console.log(response); // Verifica a resposta do servidor
            window.location.href = 'tela_principal.php'; // Redireciona para a página principal
        })
        .catch(error => {
            console.error('Erro ao enviar o email:', error);
        })
        .finally(() => {
            loadingSpinner.style.display = 'none'; // Oculta o spinner
        });
});

        document.querySelector('.card-number-input').oninput = () => {
            document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
        }

        document.querySelector('.card-holder-input').oninput = () => {
            document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
        }

        document.querySelector('.month-input').oninput = () => {
            document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
        }

        document.querySelector('.year-input').oninput = () => {
            document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
        }

        document.querySelector('.cvv-input').onmouseenter = () => {
            document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
            document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
        }

        document.querySelector('.cvv-input').onmouseleave = () => {
            document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
            document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
        }

        document.querySelector('.cvv-input').oninput = () => {
            document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
        }
    </script>



</body>

</html>