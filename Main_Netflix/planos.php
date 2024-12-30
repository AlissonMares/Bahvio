<?php include 'includes/logo-page.php'; ?>

<?php 
include('conexao/connect.php');
session_start();


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT email FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];
        $_SESSION['email'] = $email;

    
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['plano'])) {
            $plano = $_POST['plano'];
            switch ($plano) {
                case 'Basic':
                    $valor_plano = '14,90/mensal';
                    break;
                case 'Standard':
                    $valor_plano = '24,90/mensal';
                    break;
                case 'Premium':
                    $valor_plano = '39,90/mensal';
                    break;
                default:
                    $valor_plano = null;
                    break;
            }

            $sql = "UPDATE usuarios SET plano = ?, valor_plano = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssi", $plano, $valor_plano, $id);
            
            if ($stmt->execute()) {
                $_SESSION['email'] = $email; 
                $_SESSION['id'] = $id; 
                $_SESSION['plano'] = $plano;
                $_SESSION['valor_plano'] = $valor_plano;
                header("Location: pagamento.php"); 
                exit; 
            } else {
                echo "Erro ao atualizar o plano: " . $stmt->error;
            } 
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
    <title>Planos</title>
</head>
<body>

        <div class="header"><img src="assets/images/bahviologo.png" alt="logo" ></div>
    
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
            <div class="circle">3</div>
            <p>Pagamento</p>
        </div>
    </div>

    <div class="op">
       <div class="plan">
           <div class="plan-title">
               <h2>Basic</h2>
               <p><i class="fa fa-rupee"></i><Span>14,90</Span>/mensal</p>
           </div>
           <div class="plan-content">
               <ul>
                   <li>1 Tela Simultânea</li>
                   <li>5 Gb para downloads</li>
                   <li></i>Qualidade 720p</li>
                   <li>Conteúdo limitado</li>
                   <li>Som Estéreo</li>
                   <li>3 Anúncios por Dia</li>
               </ul>
               <form method="POST">
                   <input type="hidden" name="plano" value="Basic">
                   <button>Obter</button></a>
                </form>
           </div>
       </div>
       <div class="plan">
           <div class="plan-title">
               <h2>Standard</h2>
               <p><i class="fa fa-rupee"></i><Span>24,90</Span>/mensal</p>
           </div>
           <div class="plan-content">
               <ul>
                   <li>4 Telas Simultâneas</li>
                   <li>15 Gb para Downloads</li>
                   <li>Qualidade 1080p</li>
                   <li>Conteúdo Ilimitado</li>
                   <li>Som Surround</li>
                   <li>Sem Anúncios</li>
               </ul>
               <form method="POST">
                   <input type="hidden" name="plano" value="Standard">
                   <button>Obter</button></a>
                </form>
           </div>
       </div>
       <div class="plan">
           <div class="plan-title">
               <h2>Premium</h2>
               <p><i class="fa fa-rupee"></i><Span>39,90</Span>/mensal</p>
           </div>
           <div class="plan-content">
               <ul>
                   <li>Sem Limite de Telas</li>
                   <li>Sem Limite de Downloads</li>
                   <li>Qualidade 4K</li>
                   <li>Acesso a Lançamentos</li>
                   <li>Som Dolby Atmos</li>
                   <li>Conteúdos Exclusivos</li>
               </ul>
               <form method="POST"> 
                   <input type="hidden" name="plano" value="Premium">
                   <button>Obter</button></a>
                </form>
           </div>
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
</body>
</html>