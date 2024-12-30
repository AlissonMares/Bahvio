<?php
// Enviar e-mail após o pagamento
session_start();
include('conexao/connect.php');
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_SESSION['id'])) {
    $usuario_id = $_SESSION['id'];
    $email_usuario = $_SESSION['email'];  

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
        $mail->addAddress($email_usuario); 

        $nome_usuario = $_SESSION['nome'];
        $plano_escolhido = $_SESSION['plano'];
        $valor_plano = $_SESSION['valor_plano'];

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Confirmação do Seu Pagamento';
        $mail->Body = "
            Prezado(a) {$nome_usuario},<br><br>
            Agradecemos por escolher o Bahvio! Este é um e-mail de confirmação referente ao seu pagamento e à escolha do plano.<br><br>
            <strong>Detalhes do Pagamento:</strong><br>
            - Plano Escolhido: <strong>{$plano_escolhido}</strong><br>
            - Valor: <strong>R$ {$valor_plano}</strong><br>
            - Data do Pagamento: <strong>" . date('d/m/Y') . "</strong><br><br>
            Seu pagamento foi processado com sucesso e está agora ativo. Você poderá acessar todos os recursos do seu plano imediatamente.<br><br>
            Se você tiver alguma dúvida ou precisar de assistência, não hesite em entrar em contato com nossa equipe de suporte.<br><br>
            Agradecemos pela sua confiança em nós!<br><br>
            Atenciosamente,<br>
            Bahvio<br>
            (47) 9 9999-9999
        ";

        // Envia o e-mail
        if ($mail->send()) {
            echo 'E-mail enviado com sucesso.';
        } else {
            echo 'Erro ao enviar o e-mail.';
        }

    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
