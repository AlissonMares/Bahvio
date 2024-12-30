<?php include 'includes/logo-page.php'; ?>

<?php
include('conexao/connect.php');
session_start();


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
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/inicial.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>BAHVIO</title>
</head>

<body>
    <header class="header">
        <div class="header-black"></div>
        <div class="header-container">
        <nav>
            <ul>
                <li>
                    <button class="login-btn" onclick="window.location.href='login.php'">Log in</button>
                </li>
            </ul>
        </nav>



            <div class="header-content">
                <h4>Experimente até um mês grátis</h4>
                <img src="assets/images/bahviologo.png" alt="BAHVIO" class="logo" />
                <div class="header-text-1">Assista a milhares de programas de TV e filmes.</div>
                <div class="header-text-2">A partir de R$ 14,90. Cancele quando quiser.</div>
                <button class="btn btn-cta"onclick="window.location.href='cadastro.php'">Comece o seu teste GRATUITO!</button>
                <div class="legal-text">Avaliação gratuita apenas para assinantes novos e qualificados.</div>
            </div>
        </div>
    </header>

    <div class="banner">
        <img src="assets/images/popcorn.png" alt="Popcorn Icon" class="banner-icon">
        <div class="banner-content">
            <h2>A BAHVIO de uma forma que você nunca viu.</h2>
            <p>Aproveite nossa opção mais acessível, o plano com anúncios.</p>
        </div>
        <button class="btn-banner" onclick="scrollToPosition()">Saiba mais</button>

<script>
    function scrollToPosition() {
        window.scrollTo({
            top: 2900, // Valor em pixels
            behavior: 'smooth' // Rolagem suave
        });
    }
</script>

<script>
    function scrollToSection() {
        const target = document.getElementById('targetSection');
        target.scrollIntoView({ behavior: 'smooth' });
    }
</script>


    </div>
    <div class="bahvio">
        <h1>Sempre ao seu alcance!</h1>
    </div>

    <div class="div-box">
        <div class="tv">
            <h3>Aproveite onde quiser</h3>
            <p>Assista em Smart TVs, PlayStation, Xbox, Chromecast, Apple TV, aparelhos de Blu-ray e outros dispositivos.</p>
        </div>
    </div>

    <div class="div-box2">
        <div class="assista">
            <h3>Assista quando quiser</h3>
            <p>Leve sua experiência de entretenimento para qualquer lugar! Desfrute de uma vasta biblioteca de filmes e séries no seu celular, tablet ou laptop, e nunca perca um momento.</p>
        </div>
    </div>

    <div class="div-box3">
        <div class="suporte">
            <h3>Suporte ao Cliente</h3>
            <p>Estamos aqui para ajudar! Oferecemos atendimento 24/7. Entre em contato pelo chat, e-mail ou telefone para resolver suas dúvidas.</p>
        </div>
    </div>
            <div class="news">
               <h2>NOVIDADES</h2>
            </div>

    <section class="slider-container">
      <div class="slider-images">
        <div class="slider-img">
          <img src="assets/images/pb3.jpg"alt="1" />
          <h1>Peaky Blinders</h1>
          <div class="details">
            <h2>Peaky Blinders</h2>
            <p>Drama Suspense</p>
          </div>
        </div>

        <div class="slider-img">
          <img src="assets/images/u3.jpg" alt="2" />
          <h1>Vingadores: Ultimato</h1>
          <div class="details">
            <h2>Vingadores: Ultimato</h2>
            <p>Ação Aventura</p>
          </div>
        </div>

        <div class="slider-img">
          <img src="assets/images/catalogo2.jpg" alt="3" />
          <h1>Doutor Estranho no Multiverso da Loucura</h1>
          <div class="details">
            <h2>Doutor Estranho no Multiverso da Loucura</h2>
            <p>Fantasia Aventura</p>
          </div>
        </div>

        <div class="slider-img active">
          <img src="assets/images/f1.jpg" alt="4" />
          <h1>Insidius</h1>
          <div class="details">
            <h2>Insidius</h2>
            <p>Terror drama</p>
          </div>
        </div>

        <div class="slider-img">
          <img src="assets/images/ce4.jpg" alt="5" />
          <h1>A Coroa</h1>
          <div class="details">
            <h2>A Coroa</h2>
            <p>Obra de Época</p>
          </div>
        </div>

        <div class="slider-img">
          <img src="assets/images/bbt3.jpg" alt="6" />
          <h1>The Big Bang Theory</h1>
          <div class="details">
            <h2>The Big Bang Theory</h2>
            <p>Comédia</p>
          </div>
        </div>

        <div class="slider-img">
          <img src="assets/images/slider2.jpg" alt="7" />
          <h1>Frozen</h1>
          <div class="details">
            <h2>Frozen</h2>
            <p>Musical Infantil</p>
          </div>
        </div>
      </div>

    </section>
    <script src="assets/js/jQuery.js"></script>
    <script>
      jQuery(document).ready(function ($) {
        $(".slider-img").on("click", function () {
          $(".slider-img").removeClass("active");
          $(this).addClass("active");
        });
      });
    </script>

    <div class="div-message">
        <h1>Por que escolher a BAHVIO?</h1>
    </div>

    <div class="text-and-icons">
        <div class="sub-message">
            <p>Escolha a BAHVIO e descubra por que somos a melhor opção para streaming. Com um vasto catálogo de filmes e séries exclusivos, garantimos uma qualidade de transmissão superior e uma experiência de entretenimento incrível. Assista a qualquer hora e em qualquer dispositivo, com a flexibilidade que você merece. Experimente a BAHVIO gratuitamente por até um mês e veja por si mesmo porque somos a escolha número um para quem ama entretenimento de qualidade.</p>
            <p>BAHVIO — O melhor do entretenimento, ao seu alcance!
        </div>

        <div class="icons-device">
                <img src="assets/images/device.png" alt="smartphone">
        </div>

    </div>

    <div class="plan-container">
        <h1>Qual plano você deseja?</h1>
        <p>Você pode alterar ou cancelar seu plano quando quiser.</p>

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
               <a href="cadastro.php"><button>Obter</button></a>
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
               <a href="cadastro.php"><button>Obter</button></a>
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
               <a href="cadastro.php"><button>Obter</button></a>
           </div>
       </div>
   </div>

</body>
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
        <li><a href="#">Baixar</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Serviços</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h3>Suporte</h3>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Como Funciona</a></li>
        <li><a href="#">Características</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="#">Comunicando</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h3>Contate-nos</h3>
      <ul>+55 47 9191-9191</ul>
      <p>bahviostreaming@gmail.com</p>
    </div>
  </div>
</footer>

</html>

<script>

</script>