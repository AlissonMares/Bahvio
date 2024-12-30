-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Nov-2024 às 01:56
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdnetflix`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `filme_id` int(11) DEFAULT NULL,
  `serie_id` int(11) DEFAULT NULL,
  `estrelas` int(11) DEFAULT NULL CHECK (`estrelas` between 1 and 5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `usuario_id`, `filme_id`, `serie_id`, `estrelas`) VALUES
(8, 5, 1, NULL, 1),
(9, 5, 3, NULL, 1),
(10, 5, 4, NULL, 1),
(11, 5, 2, NULL, 1),
(12, 5, 5, NULL, 1),
(13, 5, 6, NULL, 1),
(14, 5, 8, NULL, 1),
(15, 6, 1, NULL, 1),
(16, 6, 3, NULL, 1),
(17, 6, 4, NULL, 1),
(18, 6, 2, NULL, 1),
(19, 6, 5, NULL, 1),
(20, 6, 6, NULL, 1),
(21, 6, 7, NULL, 1),
(22, 6, 17, NULL, 1),
(23, 6, NULL, 10, 1),
(24, 7, 1, NULL, 1),
(25, 7, 3, NULL, 1),
(26, 7, 4, NULL, 1),
(27, 8, 14, NULL, 2),
(28, 9, 15, NULL, 4),
(29, 9, NULL, 17, 5),
(30, 9, 8, NULL, 5),
(31, 9, 9, NULL, 5),
(32, 9, NULL, 2, 5),
(33, 9, NULL, 13, 5),
(34, 9, NULL, 16, 3),
(35, 10, 26, NULL, 4),
(36, 11, 1, NULL, 5),
(37, 11, 2, NULL, 4),
(38, 11, 19, NULL, 3),
(39, 11, 4, NULL, 4),
(40, 11, 8, NULL, 5),
(41, 11, 23, NULL, 5),
(42, 11, 36, NULL, 5),
(43, 11, 37, NULL, 4),
(44, 11, 7, NULL, 5),
(45, 11, 13, NULL, 3),
(46, 11, 24, NULL, 2),
(47, 11, 28, NULL, 4),
(48, 11, 29, NULL, 5),
(49, 11, 30, NULL, 4),
(50, 11, 31, NULL, 3),
(51, 11, 25, NULL, 5),
(52, 11, 34, NULL, 3),
(53, 11, 35, NULL, 3),
(54, 11, 32, NULL, 5),
(55, 11, 33, NULL, 3),
(56, 11, 5, NULL, 3),
(57, 11, 6, NULL, 5),
(58, 11, 10, NULL, 4),
(59, 11, 11, NULL, 3),
(60, 11, 12, NULL, 5),
(61, 11, 16, NULL, 3),
(62, 11, 18, NULL, 2),
(63, 11, 20, NULL, 5),
(64, 11, 22, NULL, 4),
(65, 11, 21, NULL, 4),
(66, 11, NULL, 26, 3),
(67, 11, NULL, 21, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `criado_em`) VALUES
(1, 'Ação', '2024-10-29 01:55:13'),
(2, 'Comédia', '2024-10-29 01:55:13'),
(3, 'Aventura', '2024-10-29 01:55:13'),
(4, 'Fantasia', '2024-10-29 01:55:13'),
(5, 'Ficção Científica', '2024-10-29 01:55:13'),
(6, 'Drama', '2024-10-29 01:55:13'),
(7, 'Romance', '2024-10-29 01:55:13'),
(8, 'Suspense', '2024-10-29 01:55:13'),
(9, 'Terror', '2024-10-29 01:55:13'),
(10, 'Mistério', '2024-10-29 01:55:13'),
(11, 'Animação', '2024-10-29 23:54:47'),
(12, 'Musical', '2024-10-29 23:54:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `episodios`
--

CREATE TABLE `episodios` (
  `id` int(11) NOT NULL,
  `nome_video` varchar(30) NOT NULL,
  `serie_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `temporada` int(11) DEFAULT NULL,
  `numero_episodio` int(11) DEFAULT NULL,
  `duracao` varchar(20) DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `episodios`
--

INSERT INTO `episodios` (`id`, `nome_video`, `serie_id`, `titulo`, `descricao`, `temporada`, `numero_episodio`, `duracao`, `criado_em`) VALUES
(1, 'Lucifer_', 1, 'Episódio 1', 'Lucifer decide tirar férias do Inferno. Quando um antigo \"cliente\" é assassinado, ele jura fazer o culpado pagar e, para isso, une forças com uma detetive da polícia.', 1, 1, '44min', '2024-10-30 22:48:42'),
(2, 'Lucifer_', 1, 'Episódio 2', 'Lucifer começa a notar que está mudando por causa do tempo que está passando na Terra; Chloe investiga o caso de um paparazzo e a morte do filho de um famoso ator.', 1, 2, '43min', '2024-10-30 22:48:42'),
(3, 'Lucifer_', 1, 'Episódio 3', 'Lucifer encoraja um jovem jogador de futebol americano a perder a virgindade com uma mulher em uma festa. Mas quando ela aparece morta na piscina do jogador no dia seguinte, Lucifer vai em busca dos culpados.', 1, 3, '43min', '2024-10-30 23:06:33'),
(4, 'Lucifer_', 1, 'Episódio 4', 'Lucifer interpreta mal uma sugestão de Linda e decide tentar dormir com Chloe; enquanto isso, Chloe investiga o caso de uma menina desaparecida.', 1, 4, '42min', '2024-10-30 23:06:33'),
(5, 'Lucifer_', 1, 'Episódio 5', 'Lucifer se vê no meio de uma guerra entre gangues quando uma mulher é morta em um desfile de moda; enquanto isso, Dan pede a Lucifer para cuidar de Chloe.', 1, 5, '43min', '2024-10-30 23:06:33'),
(6, 'Lucifer_', 1, 'Episódio 6', 'Um simples caso de roubo e assassinato não tem o menor interesse para Lucifer, até que ele descobre que ele é quem foi roubado; Dan tem que escolher entre a família e o trabalho.', 1, 6, '43min', '2024-10-30 23:06:33'),
(7, 'Lucifer_', 1, 'Episódio 7', 'Incapaz de revelar a verdade para Chloe sem admitir que mentiu, Lucifer pede ajuda a Amenadiel.', 1, 7, '43min', '2024-10-30 23:06:33'),
(8, 'Lucifer_', 1, 'Episódio 8', 'Chloe e Dan estão tentando resolver as coisas entre eles; Lucifer tenta lidar com seu ciúme; Enquanto isso, Malcom visita Chloe.', 1, 8, '43min', '2024-10-30 23:06:33'),
(9, 'Lucifer_', 1, 'Episódio 9', 'Um padre pede ajuda a Lucifer para impedir que um adolescente se envolva em um cartel de drogas; Malcolm pressiona Dan para conseguir uma arma que está na sala de evidências.', 1, 9, '43min', '2024-10-30 23:06:33'),
(10, 'Lucifer_', 1, 'Episódio 10', 'Lucifer e Chloe tentam resolver o caso de um dono de restaurante que foi envenenado, em que o principal suspeito é seu filho. Enquanto isso, Maze pede conselhos para Linda.', 1, 10, '43min', '2024-10-30 23:06:33'),
(11, 'Lucifer_', 1, 'Episódio 11', 'Um antigo jogador de basquete e filantropo é assassinado, e Chloe suspeita que ele não era tão bondoso quanto parecia. Enquanto isso, Lucifer explora sua própria benevolência e vulnerabilidade.', 1, 11, '43min', '2024-10-30 23:06:33'),
(12, 'Lucifer_', 1, 'Episódio 12', 'Quando uma mulher é encontrada morta em um teatro com Salve Lucifer escrito em suas costas, tudo indica a participação de um culto satanista. Enquanto isso, Maze se encontra dividida entre seu dever e seus sentimentos.', 1, 12, '43min', '2024-10-30 23:06:33'),
(13, 'Lucifer_', 1, 'Episódio 13', 'Chloe e Dan Chloe percebem que Lucifer é inocente, mas Dan tem que sacrificar sua carreira e sua Liberdade para limpar o nome de Lucifer. Enquanto isso, Lucifer faz um acordo com seu Pai.', 1, 13, '43min', '2024-10-30 23:06:33'),
(14, 'Lucifer_', 1, 'Episódio 1', 'Lucifer suspeita que sua mãe escapou do inferno e está por trás de um caso de assassinato envolvendo uma dublê de Hollywood.', 2, 1, '43m', '2024-10-30 23:21:33'),
(15, 'Lucifer_', 1, 'Episódio 2', 'A mãe de Lucifer acaba no corpo de uma advogada morta, e ele tem que resolver o assassinado e descobrir se sua mãe está falando a verdade.', 2, 2, '43m', '2024-10-30 23:21:33'),
(16, 'Lucifer_', 1, 'Episódio 3', 'Lucifer e Chloe investigam o caso de um assassino obcecado em punir pecadores. Enquanto isso, Chloe desconta suas frustrações em Dan.', 2, 3, '43m', '2024-10-30 23:21:33'),
(17, 'Lucifer_', 1, 'Episódio 4', 'Lucifer tenta se distrair do pensamento que Deus pode não estar feliz com a forma que ele encontrou de manter Charlotte longe do inferno; Charlotte se acostuma com a vida humana.', 2, 4, '42m', '2024-10-30 23:21:33'),
(18, 'Lucifer_', 1, 'Episódio 5', 'O anjo Uriel vem à Terra e dá 24 horas para Lucifer entregar Charlotte, ou ele vai matar Chloe; Lucifer e Chloe investigam a morte de um antigo ator de filmes de ação.', 2, 5, '43m', '2024-10-31 00:06:24'),
(19, 'Lucifer_', 1, 'Episódio 6', 'Lucifer e Amenadiel tentam lidar com a morte de seu irmão, e Charlotte tenta ajudar um de seus filhos da melhor forma possível; Chloe se junta com Dan para resolver o caso de um atirador.', 2, 6, '43m', '2024-10-31 00:06:24'),
(20, 'Lucifer_', 1, 'Episódio 7', 'Depois de 10 anos, o homem que atirou e matou o pai de Chloe é solto da prisão e é baleado. Com Chloe fora do caso, Dan investiga o assassinato, sendo seguido por Lucifer.', 2, 7, '43m', '2024-10-31 00:06:24'),
(21, 'Lucifer_', 1, 'Episódio 8', 'Lucifer descobre que alguém desenterrou Uriel, levou a Espada de Azrael e a está usando para cometer assassinatos. Enquanto isso, Linda tenta lidar com o fato de ter o Diabo como paciente.', 2, 8, '43m', '2024-10-31 00:06:24'),
(22, 'Lucifer_', 1, 'Episódio 9', 'O dono do prédio em que Lucifer mora é assassinado, então ele suspeita que alguém está tentando tirá-lo de sua casa. Enquanto isso, Charlotte marca um encontro com Dan.', 2, 9, '43m', '2024-10-31 00:06:24'),
(23, 'Lucifer_', 1, 'Episódio 10', 'O assassino de John Decker vai à julgamento, e Charlotte é sua advogada. Tudo é parte de seu plano para colocar Chloe contra Lucifer.', 2, 10, '44m', '2024-10-31 00:06:24'),
(24, 'Lucifer_', 1, 'Episódio 11', 'Depois que Lucifer e Chloe são interrompidos no meio de um momento íntimo, a tensão entre eles faz com que a investigação da morte de duas vítimas fique difícil, já que uma delas é ex de Lucifer.', 2, 11, '43m', '2024-10-31 00:06:24'),
(25, 'Lucifer_', 1, 'Episódio 12', 'Lucifer e Chloe investigam um caso de envenenamento onde as vítimas não são os verdadeiros alvos. Enquanto isso, Charlotte tenta encontrar o melhor jeito de contar uma difícil verdade à Lucifer.', 2, 12, '44m', '2024-10-31 00:06:24'),
(26, 'Lucifer_', 1, 'Episódio 13', 'Com Chloe morrendo envenenada, Lucifer bola plano desesperado para conseguir o antídoto com Jason.', 2, 13, '43m', '2024-10-31 00:06:24'),
(27, 'Lucifer_', 1, 'Episódio 14', 'Lucifer volta a Los Angeles com sua nova esposa, uma dançarina exótica, deixando Chloe aborrecida. Ele insiste em se juntar a ela em seu novo caso, mas Chloe não está interessada.', 2, 14, '43m', '2024-10-31 00:13:35'),
(28, 'Lucifer_', 1, 'Episódio 15', 'A reitora de uma escola é assassinada e todas as pistas sugerem que ela conhecia o assassino. Enquanto isso, Lucifer precisa entrar em contato com suas emoções para fazer a Espada de Azrael funcionar.', 2, 15, '43m', '2024-10-31 00:13:35'),
(29, 'Lucifer_', 1, 'Episódio 16', 'Um paciente de um hospital psiquiátrico é assassinado, mas Lucifer está mais interessado em outro paciente, que acredita que ele é Deus e pode curar as pessoas com um toque.', 2, 16, '43m', '2024-10-31 00:13:35'),
(30, 'Lucifer_', 1, 'Episódio 17', 'Charlotte se oferece para pagar um homem pela peça final da Espada. Quando ele aparece morto e o item desaparece, Charlotte tenta descobrir o que a levou e se junta com Chloe para descobrir.', 2, 17, '43m', '2024-10-31 00:13:35'),
(31, 'Lucifer_', 1, 'Episódio 18', 'Amenadiel pensa duas vezes sobre montar a Espada e Charlotte questiona Linda sobre os planos de Lucifer; Chloe investiga o caso do assassinato de Chet Ruiz.', 2, 18, '43m', '2024-10-31 00:13:35'),
(32, 'Lucifer_', 1, 'Episódio 1', 'Lucifer chama Chloe para descobrir como ele apareceu no deserto com suas asas de volta.', 3, 1, '43m', '2024-11-03 02:11:21'),
(33, 'Lucifer_', 1, 'Episódio 2', 'Lucifer e Chloe investigam a morte de um comediante; Amenadiel diz à Linda que Deus está o testando.', 3, 2, '43m', '2024-11-03 02:11:21'),
(34, 'Lucifer_', 1, 'Episódio 3', 'Maze aceita o conselho de Lucifer e vai atrás do pior assassino de todos, um homem que matou duas adolescentes e está foragido.', 3, 3, '43m', '2024-11-03 02:11:21'),
(35, 'Lucifer_', 1, 'Episódio 4', 'Chloe se pergunta porque Marcus não gosta dela, enquanto investiga a morte de um jovem consultor; Amenadiel tenta viver a vida de Lucifer para descobrir porque Deus o juntou com seu irmão.', 3, 4, '43m', '2024-11-03 02:11:21'),
(36, 'Lucifer_', 1, 'Episódio 5', 'A polícia investiga o caso o de um químico alimentar que é encontrado morto em seu laboratório; Charlotte se apresenta como a advogada da empresa e Lucifer suspeita que Deus tenha a mandado.', 3, 5, '43m', '2024-11-03 02:11:21'),
(37, 'Lucifer_', 1, 'Episódio 6', 'Lucifer descobre que Candy desapareceu e vai até Las Vegas procurá-la; Chloe fica chateada quando Lucifer não passa seu aniversário com ela.', 3, 6, '43m', '2024-11-03 02:11:21'),
(38, 'Lucifer_', 1, 'Episódio 7', 'Um repórter tenta se vingar de Lucifer depois que descobre que ele dormiu com sua mulher.', 3, 7, '43m', '2024-11-03 02:11:21'),
(39, 'Lucifer_', 1, 'Episódio 8', 'Um aplicativo de namoro acaba em um assassinato, e Lucifer e Chloe unem o que sabem sobre redes sociais para resolver o caso; Amenadiel ajuda Linda a lidar com a morte do seu ex-marido.', 3, 8, '43m', '2024-11-03 02:11:21'),
(40, 'Lucifer_', 1, 'Episódio 9', 'Lucifer e Chloe ficam frente a frente com o Pecador.', 3, 9, '43m', '2024-11-03 02:11:21'),
(41, 'Lucifer_', 1, 'Episódio 10', 'Com o Pecador em custódia, Lucifer está determinado a ter sua face diabólica de volta, mas acaba ficando em dúvida quando uma possível vítima está em perigo.', 3, 10, '43m', '2024-11-03 02:11:21'),
(42, 'Lucifer_', 1, 'Episódio 11', 'Um flashback do primeiro dia de Lucifer na Terra.', 3, 11, '43m', '2024-11-03 02:11:21'),
(43, 'Lucifer_', 1, 'Episódio 12', 'Depois que a verdadeira identidade do Tenente Pierce é revelada, Lucifer tenta descobrir suas motivações; Lucifer ajuda Chloe com uma investigação para que ela lhe devolva o favor e o ajude também; Amenadiel lida com um problema de saúde pessoal.', 3, 12, '43m', '2024-11-03 02:11:21'),
(44, 'Lucifer_', 1, 'Episódio 13', 'Lucifer e Pierce precisam descobrir quem é o responsável pela morte de um produtor de ecstasy; Maze começa a gostar de alguém que costumava odiar; Charlotte faz uma grande descoberta.', 3, 13, '43m', '2024-11-03 02:11:21'),
(45, 'Lucifer_', 1, 'Episódio 14', 'Ella tenta provar a inocência de seu irmão, quando uma investigação sobre o assassinato de um ladrão de diamantes o aponta como culpado; Linda se aborrece quando Charlotte lhe pede ajuda.', 3, 14, '43m', '2024-11-03 02:11:21'),
(46, 'Lucifer_', 1, 'Episódio 15', 'Lucifer e Chloe precisam se infiltrar na reunião de uma classe de ensino médio para capturar um assassino; Amenadiel e Linda encontram dificuldades em assumir sua relação publicamente.', 3, 15, '43m', '2024-11-03 02:11:21'),
(47, 'Lucifer_', 1, 'Episódio 16', 'Chloe coloca sua vida em risco para proteger uma vítima inocente, quando uma investigação de assassinato revela o lado obscuro de Hollywood; Lucifer cria um plano para ajudar Cain, mas quando Amenadiel e Maze se envolvem, as coisas saem do controle.', 3, 16, '43m', '2024-11-03 02:11:21'),
(48, 'Lucifer_', 1, 'Episódio 17', 'Lucifer e Chloe iniciam uma investigação quando uma superestrela da música tem a sua vida ameaçada; Charlotte tenta reparar a amizade entre Linda e Maze.', 3, 17, '43m', '2024-11-03 02:11:21'),
(49, 'Lucifer_', 1, 'Episódio 18', 'Chloe e Lucifer perseguem um assassino serial cujas vítimas são casais apaixonados e Pierce nota uma conexão com um caso solucionado por ele no passado.', 3, 18, '43m', '2024-11-03 02:11:21'),
(50, 'Lucifer_', 1, 'Episódio 19', 'Para solucionar um assassinato, Chloe e Lucifer entram no mundo de caçadores de recompensas.', 3, 19, '43m', '2024-11-03 02:11:21'),
(51, 'Lucifer_', 1, 'Episódio 20', 'Chloe e Lucifer investigam um assassinato em que uma testemunha diz ter sido salva por um anjo da guarda; o relacionamento entre Pierce e Decker toma um novo caminho.', 3, 20, '43m', '2024-11-03 02:11:21'),
(52, 'Lucifer_', 1, 'Episódio 21', 'Uma bailarina é brutalmente assassinada e Lucifer auxilia Chloe a solucionar o caso. Enquanto isso, Amenadiel implora a ajuda de Charlotte para realizar um plano importante.', 3, 21, '43m', '2024-11-03 02:15:08'),
(53, 'Lucifer_', 1, 'Episódio 22', 'Com o afastamento da detetive Decker, Lucifer é obrigado a trabalhar com Dan em um caso que envolve um show de cachorros. Enquanto isso, Charlotte e Maze discutem a respeito do aniversário de Chloe.', 3, 22, '43m', '2024-11-03 02:15:08'),
(54, 'Lucifer_', 1, 'Episódio 23', 'Durante a investigação de um assassinato, Lucifer e Chloe se dão conta que podem estar enganados quanto ao suspeito principal.', 3, 23, '43m', '2024-11-03 02:15:08'),
(55, 'Lucifer_', 1, 'Episódio 24', 'Espantados com uma terrível morte, Chloe, Lucifer e o restante da equipe trabalham juntos para investigar e encontrar o verdadeiro assassino.', 3, 24, '43m', '2024-11-03 02:15:08'),
(56, 'Lucifer_', 1, 'Episódio 25', 'Durante a investigação da morte de um psiquiatra infantil, Ella começa a pensar em um segredo de infância oculto.', 3, 25, '43m', '2024-11-03 02:15:08'),
(57, 'Lucifer_', 1, 'Episódio 26', 'Em um universo alternativo, Deus faz uma pequena alteração que acaba afetando diretamente a vida de Lucifer, Chloe e as pessoas ao seu redor.', 3, 26, '43m', '2024-11-03 02:15:08'),
(58, 'Lucifer_', 1, 'Episódio 1', 'Enquanto investiga com Lucifer o assassinato de um apicultor, Chloe insiste que a identidade demoníaca do parceiro não lhe é problema.', 4, 1, '49m', '2024-11-03 02:23:53'),
(59, 'Lucifer_', 1, 'Episódio 2', 'Chloe e Lucifer investigam um assassinato no cenário de um reality show. O Padre Kinley avança com seu plano. Amenadiel repensa seu conceito de lar.', 4, 2, '50m', '2024-11-03 02:23:53'),
(60, 'Lucifer_', 1, 'Episódio 3', 'O assassinato do ex-membro de uma gangue pode ocultar um crime mais sombrio. Lucifer pega uma mentira de Chloe. Dan e Maze se revoltam. Linda se prepara para ser mãe.', 4, 3, '49m', '2024-11-03 02:23:53'),
(61, 'Lucifer_', 1, 'Episódio 4', 'Lucifer e Chloe tentam resolver separadamente o assassinato de um designer de joias. Lucifer reencontra uma paixão antiga.', 4, 4, '49m', '2024-11-03 02:23:53'),
(62, 'Lucifer_', 1, 'Episódio 5', 'Lucifer e Chloe procuram o culpado pela morte de um colecionador de carros antigos. E buscam também um desfecho para seu relacionamento.\r\n\r\n', 4, 5, '50m', '2024-11-03 02:23:53'),
(63, 'Lucifer_', 1, 'Episódio 6', 'Lucifer e Chloe procuram uma relação entre um auditor assassinado e uma colônia de nudistas. Amenadiel recebe um visitante inesperado.', 4, 6, '50m', '2024-11-03 02:23:53'),
(64, 'Lucifer_', 1, 'Episódio 7', 'Eva se envolve mais na vida profissional do homem da sua vida. Lucifer começa do zero, e Amenadiel luta pela família.', 4, 7, '49m', '2024-11-03 02:23:53'),
(65, 'Lucifer_', 1, 'Episódio 8', 'Lucifer e Chloe investigam o homicídio de uma professora. Lucifer faz de tudo para convencer Eva a deixá-lo. Amenadiel aconselha um adolescente.', 4, 8, '52m', '2024-11-03 02:23:53'),
(66, 'Lucifer_', 1, 'Episódio 9', 'Chloe se preocupa com a descoberta de Lucifer e, mais ainda, com a transformação física dele. Maze ajuda Eva a se animar.', 4, 9, '51m', '2024-11-03 02:23:53'),
(67, 'Lucifer_', 1, 'Episódio 10', 'Com demônios assassinos à solta em Los Angeles, Lucifer tem que reinar no caos e proteger as pessoas que mais ama.', 4, 10, '56m', '2024-11-03 02:23:53'),
(68, 'Lucifer_', 1, 'Episódio 1', 'Enquanto Lucifer se diverte, Chloe e Maze investigam um crime. Amenadiel faz uma limpeza na boate. Linda se dedica a criar seu pequeno gênio.', 5, 1, '52m', '2024-11-03 02:37:31'),
(69, 'Lucifer_', 1, 'Episódio 2', 'Depois de passar uma eternidade no inferno, Lucifer volta para o mundo dos vivos. Mas tem alguma coisa diferente nesse diabo bonitão.', 5, 2, '58m', '2024-11-03 02:37:31'),
(70, 'Lucifer_', 1, 'Episódio 3', 'O verdadeiro Lucifer ajuda Chloe a investigar um assassinato cometido no set de filmagem da série inspirada na vida dele.', 5, 3, '55m', '2024-11-03 02:37:31'),
(71, 'Lucifer_', 1, 'Episódio 4', 'O ano é 1946 e tudo está em preto e branco. Lucifer é a estrela de uma história de suspense com rostos conhecidos em novos papéis.', 5, 4, '56m', '2024-11-03 02:37:31'),
(72, 'Lucifer_', 1, 'Episódio 5', 'Amenadiel ajuda Chloe a investigar a morte de uma freira. Lucifer ajuda Dan, e Linda fala sobre uma parte difícil de sua vida.', 5, 5, '56m', '2024-11-03 02:37:31'),
(73, 'Lucifer_', 1, 'Episódio 6', 'Um DJ famoso morre no palco, e Chloe procura pelo assassino. Lucifer tenta controlar o ciúme.', 5, 6, '56m', '2024-11-03 02:37:31'),
(74, 'Lucifer_', 1, 'Episódio 7', 'O romance entre Lucifer e Chloe tem um efeito inesperado, e o casal procura por um assassino muito peculiar.', 5, 7, '56m', '2024-11-03 02:37:31'),
(75, 'Lucifer_', 1, 'Episódio 8', 'Chloe descobre algo suspeito sobre um serial killer. Amenadiel se preocupa com a saúde do filho. Pete se abre com Ella.', 5, 8, '62m', '2024-11-03 02:37:31'),
(76, 'Lucifer_', 1, 'Episódio 9', 'Chloe e Ella investigam um assassinato no minigolfe. Lucifer, Miguel, Amenadiel e Linda se preparam para o mais sagrado jantar em família.', 5, 9, '56m', '2024-11-03 02:37:31'),
(77, 'Lucifer_', 1, 'Episódio 10', 'É um musical? Sim! Lucifer, Chloe e a turma cantam e dançam músicas famosas enquanto investigam o assassinato de um árbitro.', 5, 10, '61m', '2024-11-03 02:37:31'),
(78, 'Lucifer_', 1, 'Episódio 11', 'O pai de Lucifer — ou seja, Deus — decide experimentar a vida como um humano comum. Enquanto isso, um lutador morre de forma misteriosa.', 5, 11, '53m', '2024-11-03 02:37:31'),
(79, 'Lucifer_', 1, 'Episódio 12', 'Um simples trabalho de transporte de prisioneiros se transforma em uma perigosa, mas emocionante, odisseia para Dan.', 5, 12, '59m', '2024-11-03 02:37:31'),
(80, 'Lucifer_', 1, 'Episódio 13', 'Linda se joga em uma missão extremamente pessoal. Maze encontra uma pessoa do passado. Amenadiel reflete sobre um novo trabalho.', 5, 13, '61m', '2024-11-03 02:37:31'),
(81, 'Lucifer_', 1, 'Episódio 14', 'Lucifer tenta ser nomeado o sucessor do pai. Ella faz uma dolorosa confissão. Chloe investiga um assassinato em um aquário.\r\n\r\n', 5, 14, '59m', '2024-11-03 02:37:31'),
(82, 'Lucifer_', 1, 'Episódio 15', 'Lucifer descobre que nem todos seus irmãos e irmãs querem que ele consiga a grande promoção. Dan propõe apresentar Ella a um velho amigo.', 5, 15, '63m', '2024-11-03 02:37:31'),
(83, 'Lucifer_', 1, 'Episódio 16', 'O fim está próximo! Lucifer, Chloe, Maze e Amenadiel se preparam para a batalha contra Miguel e seu exército de anjos nada angelicais.', 5, 16, '54m', '2024-11-03 02:37:31'),
(84, 'Lucifer_', 1, 'Episódio 1', 'Antes de Lucifer começar seu novo trabalho, ele e Chloe vivem uma noite mágica com um fim bárbaro. Linda e Amenadiel recebem Maze e Eva para o jantar.', 6, 1, '48m', '2024-11-03 02:43:55'),
(85, 'Lucifer_', 1, 'Episódio 2', 'Desesperado para ser útil, Lucifer ajuda Carol a investigar a morte de uma drag queen. Ella e Chloe investigam a história misteriosa de Carol.', 6, 2, '56m', '2024-11-03 02:43:55'),
(86, 'Lucifer_', 1, 'Episódio 3', 'Lucifer e Chloe ficam presos em um loop de desenho animado. Amenadiel se prepara para seu novo emprego. Dan retorna à Cidade dos Anjos.', 6, 3, '45m', '2024-11-03 02:43:55'),
(87, 'Lucifer_', 1, 'Episódio 4', 'Lucifer se reconecta a alguns casos do passado na esperança de refutar a afirmação de Rory. Dan tenta encontrar alguém que consiga vê-lo. Vale qualquer um!', 6, 4, '45m', '2024-11-03 02:43:55'),
(88, 'Lucifer_', 1, 'Episódio 5', 'Não acreditando que poderia ter abandonado sua futura filha, Lucifer decide provar uma teoria alternativa: ele deve ter sido assassinado.', 6, 5, '47m', '2024-11-03 02:43:55'),
(89, 'Lucifer_', 1, 'Episódio 6', 'Amenadiel quer fazer tudo certo em seu primeiro dia na Polícia de LA, mas cruza com um detetive racista de seu passado. Além disso, Lucifer tenta se aproximar de Rory.', 6, 6, '54m', '2024-11-03 02:43:55'),
(90, 'Lucifer_', 1, 'Episódio 7', 'Na véspera do casamento de Eva e Maze, o ex de Eva, Adão — sim, aquele Adão — aparece querendo uma reconciliação. Mais tarde, Ella dá notícias terríveis.', 6, 7, '59m', '2024-11-03 02:43:55'),
(91, 'Lucifer_', 1, 'Episódio 8', 'Lucifer diz que finalmente está pronto para ser Deus, mas suas asas parecem discordar. Linda compartilha com relutância o primeiro rascunho de seu livro.', 6, 8, '56m', '2024-11-03 02:43:55'),
(92, 'Lucifer_', 1, 'Episódio 9', 'Lucifer tenta aproveitar aquele que pode ser seu último dia na Terra, o assassino de Dan foge da prisão e Chloe faz um anúncio bombástico.', 6, 9, '66m', '2024-11-03 02:43:55'),
(93, ' Lucifer_', 1, 'Episódio 10', 'Desesperado para resgatar Rory, Lucifer e Chloe confrontam seu sequestrador com armas e asas. Lucifer finalmente entende seu destino.', 6, 10, '53m', '2024-11-03 02:43:55'),
(94, 'Gambito_Rainha_', 2, 'Episódio 1', 'Com nove anos, Beth é enviada a um orfanato e lá desenvolve dois traços: o talento incrível para o xadrez e a dependência do tranquilizante dado às crianças.', 1, 1, '59min', '2024-11-03 03:11:09'),
(95, 'Gambito_Rainha_', 2, 'Episódio 2', 'Beth ganha uma família adotiva e sua vida dá uma guinada. Na escola, ela observa os colegas e se prepara para um torneio de xadrez.', 1, 2, '65min', '2024-11-03 03:11:09'),
(96, 'Gambito_Rainha_', 2, 'Episódio 3', 'O torneio de Cincinnati desencadeia uma maratona de viagens para Beth e sua mãe. A próxima meta é jogar no Aberto dos Estados Unidos.', 1, 3, '46min', '2024-11-03 03:11:09'),
(97, 'Gambito_Rainha_', 2, 'Episódio 4', 'A aula de russo abre para Beth as portas para uma nova vida social. No México, Beth conhece o intimidador Borgov, e sua mãe se aproxima de um amigo por correspondência.', 1, 4, '49min', '2024-11-03 03:11:09'),
(98, 'Gambito_Rainha_', 2, 'Episódio 5', 'De volta ao Kentucky, Beth encontra com um antigo adversário que oferece ajuda para aprimorar as habilidades dela antes do Campeonato Nacional dos EUA.', 1, 5, '48min', '2024-11-03 03:11:09'),
(99, 'Gambito_Rainha_', 2, 'Episódio 6', 'Após treinar com Benny em Nova York, Beth vai a Paris para a revanche contra Borgov. Mas uma noite insana desperta nela um comportamento autodestrutivo.', 1, 6, '60min', '2024-11-03 03:11:09'),
(100, 'Gambito_Rainha_', 2, 'Episódio 7', 'A visita de uma velha amiga obriga Beth a refletir sobre seu passado e repensar suas prioridades, bem a tempo da maior partida de sua vida.', 1, 7, '68min', '2024-11-03 03:11:09'),
(101, 'The_Boys', 3, 'Episódio 1', 'Quando um Super mata o amor de sua vida, o vendedor de áudio e vídeo Hughie Campbell se une a Billy Butcher, um justiceiro determinado a punir Super corruptos — e a vida de Hughie nunca mais será a mesma.', 1, 1, '1h 2min', '2024-11-04 22:15:09'),
(102, 'The_Boys', 3, 'Episódio 2', 'Os garotos ganham um super-herói, Starlight se vinga, Homelander fica travesso e um senador fica mais travesso ainda.', 1, 2, '1h 1min', '2024-11-04 22:20:36'),
(103, 'The_Boys', 3, 'Episódio 3', 'É a corrida do século. A-Train versus Shockwave, disputando o título de Homem Mais Rápido do Mundo. Enquanto isso, os garotos se reencontram e isso é tão bom.', 1, 3, '58 min', '2024-11-04 22:20:36'),
(104, 'The_Boys', 3, 'Episódio 1', 'Novo e melhorado! Agora com 50% mais decapitações explosivas, terroristas, prostitutas S&M, cultos e um novo aroma fresco de pinho! Mas espere, tem mais! 2X MAIS sangue, tripas e violência do que as outras marcas líderes! Esta oferta exclusiva está disponível apenas no Amazon Prime Video! Não perca tempo! Peça agora!', 2, 1, '59 min', '2024-11-04 22:20:36'),
(105, 'The_Boys', 3, 'Episódio 2', 'Os garotos conseguem um Super Terrorista, Starlight consegue evidências contra Vought, The Deep entra em contato com seus sentimentos e Homelander consegue uma família (mais ou menos). Tudo isso, e uma exposição contundente sobre o porquê de Super Trajes não terem bolsos.', 2, 2, '1h 3min', '2024-11-04 22:40:47'),
(106, 'The_Boys', 3, 'Episódio 3', 'Atenção: Se você ou um ente querido foi exposto ao Composto V, você pode ter direito a uma compensação financeira. Vought deu a droga a várias vítimas, sem o conhecimento ou consentimento delas. Se você acredita que você ou um ente querido foi administrado ao Composto V, ligue para o escritório de advocacia Bremmer & Bremmer em 1-888-177-2774 para uma consulta jurídica gratuita. Conheça seus direitos!', 2, 3, '1h 2min', '2024-11-04 22:42:09'),
(107, 'Gmae_of_Thrones', 4, 'episódio 1', ' Rela desertor da Guarda da Noite preocupa Lord Ned Stark. O Rei Robert chega a Winterfell e o exilado Viserys Targaryen forja aliança.', 1, 1, '1h ', '2024-11-04 23:01:12'),
(108, 'Gmae_of_Thrones', 4, 'episódio 2', 'Cersei e Jaime ouvem do irmão que Bran vai sobreviver. Ned deixa Westeros com as filhas, enquanto Snow e Tyrion rumam para o Norte.', 1, 2, '1h', '2024-11-04 23:09:15'),
(109, 'Gmae_of_Thrones', 4, 'episódio 3', 'Jon impressiona Tyrion no primeiro dia de treinamento e Ned cancela evento em sua homenagem, depois de saber da situação do reino.', 1, 3, '1h 20min', '2024-11-04 23:10:06'),
(110, 'Gmae_of_Thrones', 4, 'episódio 1', 'Tyrion age como conselheiro e tenta salvar o reinado de Joffrey de ameaças do presente e do passado. Daenerys procura por água e aliados.', 2, 1, '1h 10min', '2024-11-04 23:15:31'),
(111, 'Game_of_Thrones', 4, 'episódio 2', 'Arya conta um segredo para um guarda da noite e Daenerys recebe informações importantes. Após nove anos, Theon retorna para sua família.', 2, 2, '1h', '2024-11-04 23:15:31'),
(112, 'Game_of_Thrones', 4, 'episódio 3', 'Tyrion desmascara uma espiã que servia a Cersei, enquanto Catelyn conhece novos reis. Bran, por sua vez, tem sonhos especiais.', 2, 3, '1h 8min', '2024-11-04 23:15:31'),
(113, 'Gmae_of_Thrones', 4, 'episódio 1', 'Jon é testado por um bárbaro, enquanto Tyrion exige recompensa. Cersei organiza um jantar para a família real, e Daenerys busca novos ares.', 3, 1, '1h ', '2024-11-04 23:17:43'),
(114, 'Game_of_Thrones', 4, 'episódio 2', 'Sansa fala demais e dificulta ainda mais sua convivência com Joffrey. Jaime encontra uma maneira de passar o tempo.', 3, 2, '1h 3min', '2024-11-04 23:17:43'),
(115, 'Game_of_Thrones', 4, 'episódio 3', 'Jon é levado a um local mítico e, com o objetivo de criar um poderoso exército, Daenerys faz uma proposta pelos escravos.', 3, 3, '1h ', '2024-11-04 23:17:43'),
(116, 'Gmae_of_Thrones', 4, 'episódio 1', 'Tyrion recebe convidados especiais, ao passo que Dany segue para Meereen. Arya reencontra um velho amigo.', 4, 1, '1h 20min', '2024-11-04 23:18:24'),
(117, 'Gmae_of_Thrones', 4, 'episódio 1', 'Cersei e Jamie tentam sem Tywin. Varys revela a Tyrion que uma conspiração está em curso. Dany enfrenta uma nova ameaça.', 5, 1, '1h 2m', '2024-11-04 23:19:24'),
(118, 'Gmae_of_Thrones', 4, 'episódio 1', 'Jon Snow está morto. Daenerys conhece um homem forte. Cersei vê sua filha novamente.', 6, 1, '1h 20min', '2024-11-04 23:20:43'),
(119, 'Game_of_Thrones', 4, 'episódio 2', 'Bran treina com o Corvo de Três-Olhos. Thorne tem o apoio da Patrulha da Noite. Ramsay Bolton propõe um plano, mas Balon Greyjoy tem outras propostas.', 6, 2, '1h', '2024-11-04 23:20:43'),
(120, 'Gmae_of_Thrones', 4, 'episódio 1', 'Jon organiza a defesa do Norte. Cersei busca aliados para, com isso, melhorar suas chances. Daenerys está de volta à casa.', 7, 1, '1h 2min', '2024-11-04 23:21:49'),
(121, 'Game_of_Thrones', 4, 'episódio 2', 'Daenerys recebe uma visita inesperada. Jon enfrenta uma rebelião, enquanto Tyrion planeja conquistar Westeros.', 7, 2, '1h', '2024-11-04 23:21:49'),
(122, 'Gmae_of_Thrones', 4, 'episódio 1', 'Daenerys chega a Winterfell e Jon Snow recebe notícias importantes.', 8, 1, '1h 2min', '2024-11-04 23:22:54'),
(123, 'Game_of_Thrones', 4, 'episódio 2', 'Jaime discute seu caso na frente de uma audiência cética.', 8, 2, '1h 3min', '2024-11-04 23:22:54'),
(124, 'The_Witcher', 5, 'episódio 1', 'Ao chegar à cidade de Blaviken, Geralt encontra pessoas hostis e um mago esperto; o mundo de Ciri vira de pernas para o ar quando Nilfgaard se prepara para atacar Cintra.', 1, 1, '1h 2min', '2024-11-04 23:53:53'),
(125, 'The_Witcher', 5, 'episódio', 'Yennefer descobre um jeito de fugir de uma agressão; Geralt vai até o inferno para caçar um demônio; Ciri é acolhida por um grupo.', 1, 2, '1h', '2024-11-04 23:53:53'),
(126, 'The_Witcher', 5, 'episódio 3', 'Geralt aceita terminar o trabalho de outro bruxo em um reino aterrorizado por uma criatura feroz; Yennefer paga um preço alto por seu futuro na magia.', 1, 3, '1h 7min', '2024-11-04 23:53:53'),
(127, 'The_Witcher', 5, 'episódio 1', 'Geralt parte com Ciri numa viagem que o conduz a um velho amigo. Após a Batalha do Monte Sodden, Tissaia mostra-se impiedosa na sua busca por informações.', 2, 1, '1h 4m', '2024-11-04 23:57:20'),
(128, 'The_Witcher', 5, 'episódio 2', 'Geralt volta a casa para abrigar Ciri, mas o perigo espreita por todo o lado, incluindo em Kaer Morhen. Os sonhos de Yennefer podem ser a chave para a sua liberdade.', 2, 2, '1h', '2024-11-04 23:57:20'),
(129, 'The_Witcher', 5, 'episódio 3', 'Ciri mostra-se impaciente com os métodos de Geralt e põe-se à prova. Conspirações e suspeitas no seio da Irmandade fazem de Yennefer um alvo.', 2, 3, '1h 7m', '2024-11-04 23:57:20'),
(130, 'The_Witcher', 5, 'episódio 1', 'Ciri viajam até os confins do continente em busca de um porto seguro. O Rei Vizimir coloca seu encantador irmão mais novo em us', 3, 1, '1h 3m', '2024-11-05 00:00:55'),
(131, 'The_Witcher', 5, 'episódio 2', 'Uma descoberta chocante aguarda Geralt depois que ele obtiver informações sobre Rience. O senso de justiça de Ciri causa problemas. Jaskier se apresenta para um fã real.', 3, 2, '1h', '2024-11-05 00:00:55'),
(132, 'The_Witcher', 5, 'episódio 3', 'Geralt procura a ajuda mágica de um amigo da família enquanto Ciri e Yennefer discutem planos para o futuro. Philippa e Dijkstra planejam colocar Vizimir na linha.', 3, 3, '1h  8m', '2024-11-05 00:00:55'),
(133, 'peaky_blinders', 6, 'Episódio 1', 'Tommy é um veterano da Primeira Guerra e o líder dos Shelby, uma família de gangsters cujo objetivo é dominar a cidade inglesa de Birmingham que sofre com o pós-guerra e uma grave crise econômica.', 1, 1, '57min', '2024-11-11 22:08:41'),
(134, 'peaky_blinders', 6, 'Episódio 2', 'A gangue de Thomas se envolve em uma briga com os Lees, uma violenta família que fica enfurecida com o ataque. Ada descobre que está grávida de Freddie, mas não sabe o que fazer em relação a isso.', 1, 2, '57min', '2024-11-11 22:08:41'),
(135, 'peaky_blinders', 6, 'Episódio 3', 'Freddie e Ada decidem se casar e permanecer na cidade, contrariando as ordens de seu irmão. Chega dia da corrida, mas o encontro entre Thomas e Grace não corre como o esperado.', 1, 3, '55min', '2024-11-11 22:08:41'),
(136, 'peaky_blinders', 6, 'Episódio 1', 'No início da década de 20, os negócios estão no auge para os Peaky Blinders. Tommy Shelby começa a expandir suas operações legais e ilegais e reencontra um inimigo de longa data que pode ameaçar seus planos.', 2, 1, '59min', '2024-11-11 22:11:10'),
(137, 'peaky_blinders', 6, 'Episódio 2', 'Tommy se oferece para ajudar Polly a encontrar seus filhos, que estão distantes há muito tempo; Tommy arrisca sua vida ao conhecer o enigmático Alfie Solomons; Arthur sofre as consequências da Grande Guerra.', 2, 2, '57min', '2024-11-11 22:11:10'),
(138, 'peaky_blinders', 6, 'Episódio 3', 'Tommy cria um plano para assumir o controle dos novos hipódromos. Ele conhece a aristocrata May Carleton e vê uma oportunidade de ascensão; ao lado de Darby Sabini, o comandante Campbell busca modos de derrotar Tommy.', 2, 3, '58min', '2024-11-11 22:11:10'),
(139, 'peaky_blinders', 6, 'Episódio 1', 'Tommy e Grace se casam. No dia da cerimônia, um visitante misterioso faz contato com os Peaky Blinders e organiza uma perigosa transação. Arthur se encanta por um mulher bastante religiosa, e Polly conhece um homem atraente. Tommy se envolve numa rede de intrigas mais letal do que imaginava e acaba pedindo a ajuda de Arthur para completar sua missão.', 3, 1, '55min', '2024-11-11 22:19:35'),
(140, 'peaky_blinders', 6, 'Episódio 2', 'Tommy recebe um pagamento inusitado por seu serviço, mas os chefões ainda estão de olho nele. Arthur e John são confrontados por Changretta, que promete se vingar da gangue. Polly posa para um retrato. Grace usa um misterioso presente dado por Tommy. Durante um evento de caridade da família Shelby, a situação sai do controle.', 3, 2, '57min', '2024-11-11 22:19:35'),
(141, 'peaky_blinders', 6, 'Episódio 3', 'Tommy viaja até o País de Gales para se livrar de um perigoso objeto. John e Arthur partem numa missão, mas este último não consegue cumpri-la. Ada se surpreende com uma proposta de negócios. Michael começa a se interessar por armas. Tommy ajuda a desmascarar um informante na Liga Econômica.', 3, 3, '58min', '2024-11-11 22:19:35'),
(142, 'peaky_blinders', 6, 'Episódio1', 'Após o desastre da operação contra os russos, os Shelby estão cada vez mais desunidos e absortos em seus próprias questões. Tudo muda quando uma série de cartas ameaça destruir os membros da família. Tommy e Ada convencem os demais a juntarem forças para combater a máfia italiana, que planeja atacá-los no Natal.', 4, 1, '58min', '2024-11-11 22:22:45'),
(143, 'peaky_blinders', 6, 'Episódio 2', 'Os Shelby se recuperam de uma grave perda e decidem colocar suas diferenças de lado para enfrentar a máfia. Tommy faz negócios com um assassino de aluguel, desobedecendo as ordens de Polly. Os Peaky Blinders ganham um novo membro. Tommy fica cara a cara com seu inimigo, e os dois chegam a um acordo.', 4, 2, '57min', '2024-11-11 22:22:45'),
(144, 'peaky_blinders', 6, 'Episódio 3', 'Os italianos lançam um novo ataque contra os Peaky Blinders. Linda se esforça para ajudar Arthur, que não consegue se desvencilhar de sua ancestralidade. Tommy precisa lidar com uma greve de operários, mas um segredo de seu passado pode prejudicá-lo ainda mais. Luca Changretta tenta arranjar um aliado dentro da gangue.', 4, 3, '59min', '2024-11-11 22:22:45'),
(145, 'peaky_blinders', 6, 'Episódio 1', 'Com a quebra da Bolsa de Valores, os Shelby se reúnem às pressas em Birmingham. Linda desaprova o novo cargo de Arthur. Ada tenta esconder um segredo, mas Polly a entrega para a família. Tommy precisa lidar com novos adversários políticos e, ainda, com um jornalista que parece conhecer todo o seu passado.', 5, 1, '56min', '2024-11-11 22:24:36'),
(146, 'peaky_blinders', 6, 'Episódio 2', 'Uma série de mensagens anônimas preocupa Tommy. Em Londres, ele e Ada tratam de negócios com Oswald Mosley. Arthur e Finn planejam expandir o império dos Peaky Blinders. A lealdade de Michael é questionada depois que uma fonte improvável faz contato com a família Shelby.', 5, 2, '58min', '2024-11-11 22:24:36'),
(147, 'peaky_blinders', 6, 'Episódio 3', 'Os Peaky Blinders viajam até Londres para encontrar Mosley, que tenta levar a melhor sobre a gangue. Linda troca confidências com Lizzie e pede ajuda para lidar com Arthur. Polly visita Aberama no hospital, passando adiante as ordens de Tommy. O gângster descobre que um de seus homens está em perigo e decide intervir.', 5, 3, '58min', '2024-11-11 22:24:36'),
(148, 'peaky_blinders', 6, 'Episódio 1', 'Tommy parte para a América do Norte, onde o fim da Lei Seca traz novas oportunidades. Mas ele enfrenta um novo perigo de um antigo adversário que finalmente está agindo.', 6, 1, '55min', '2024-11-11 22:27:52'),
(149, 'peaky_blinders', 6, 'Episódio 2', 'Tommy se envolve em um jogo de poder com fascistas, combatentes pela liberdade e gangsters de Boston. Enquanto os jogadores planejam traí-lo, Tommy visita um antigo aliado em Camden.', 6, 2, '59min', '2024-11-11 22:27:52'),
(150, 'the_last', 7, 'Episódio 1', 'Vinte anos após um surto fúngico devastar o planeta, os sobreviventes Joel e Tess recebem uma missão que pode mudar tudo.', 1, 1, '58min', '2024-11-11 22:50:50'),
(151, 'the_last', 7, 'Episódio 2', 'Joel e Tess discutem o destino de Ellie enquanto exploram as ruínas abandonadas de Boston, após escaparem da zona de quarentena.', 1, 2, '1h 5min', '2024-11-11 22:50:50'),
(152, 'the_last', 7, 'Episódio 3', 'Bill, um preparador para o apocalipse, forja uma conexão improvável com um estranho. Mais tarde, Joel e Ellie procuram orientação de Bill.', 1, 3, '59min', '2024-11-11 22:52:22'),
(153, 'the_last', 7, 'Episódio 4', 'Depois de abandonar sua caminhonete em Kansas City, Joel e Ellie tentam escapar sem chamar a atenção de uma vingativa líder rebelde.', 1, 4, '1h 7min', '2024-11-11 22:52:22'),
(154, 'primal', 8, 'Episódio 1', 'Uma tragédia obriga um homem das cavernas e um dinossauro a se unirem pela sobrevivência.', 1, 1, '20min', '2024-11-11 23:23:22'),
(155, 'primal', 8, 'Episódio 2', 'Homem e fera são desafiados a encontrar uma forma de coexistirem.', 1, 2, '21min', '2024-11-11 23:23:22'),
(156, 'primal', 8, 'Episódio 3', 'No inóspito inverno primordial, um bando de mamutes sai à caça do assassino de um dos animais do grupo.', 1, 3, '21min', '2024-11-11 23:23:22'),
(157, 'primal', 8, 'Episódio 1', 'Spear e Fang se aventuram pelo desconhecido para resgatar Mira de seus capturadores.', 2, 1, '23min', '2024-11-11 23:25:18'),
(158, 'primal', 8, 'Episódio 2', 'Spear e Fang se separam e um território desconhecido', 2, 2, '19min', '2024-11-11 23:25:18'),
(159, 'primal', 8, 'Episódio 3', 'A missão para encontrar Mira leva Spear e Fang à uma aldeia de guerreiros temíveis.', 2, 3, '20min', '2024-11-11 23:25:18'),
(160, 'brothers', 9, 'Episódio 1', 'Voluntários que se tornaram paraquedistas dos EUA na 2ª Grande Guerra relembram a trajetória do grupo, conhecido como Easy Company.', 1, 1, '57min', '2024-11-11 23:31:53'),
(161, 'brothers', 9, 'Episódio 2', 'Dia D. O desembarque da Easy Company na Normandia não ocorre como previsto. Com espírito de liderança, Winters comanda primeira ofensiva.', 1, 2, '1h 3min', '2024-11-11 23:31:53'),
(162, 'brothers', 9, 'Episódio 3', 'Novamente reunidos, os homens da Easy Company recebem a ordem de retomar a vila de Caretan. Combate sangrento deixa mortos e sequelas.', 1, 3, '1h 7min', '2024-11-11 23:31:53'),
(163, 'wandinha', 10, 'Episódio 1', 'Wandinha é expulsa do colégio por causa de uma brincadeirinha cruel. Por isso, seus pais decidem mandá-la para a Escola Nunca Mais, o internato onde eles se apaixonaram.', 1, 1, '59min', '2024-11-11 23:38:01'),
(164, 'wandinha', 10, 'Episódio 2', 'O xerife interroga Wandinha sobre os estranhos acontecimentos da noite; mais tarde, ela enfrenta uma poderosa rival na corrida alucinante da Copa Poe.', 1, 2, '48min', '2024-11-11 23:38:01'),
(165, 'wandinha', 10, 'Episódio 3', 'Wandinha acaba descobrindo uma sociedade secreta; o Dia da Interação chega e os excluídos de Nunca Mais vão ter que interagir com o pessoal padrão de Jericó.', 1, 3, '48min', '2024-11-11 23:38:01'),
(166, 'pacificador', 11, 'Episódio 1', 'Após uma recuperação milagrosa, Pacificador volta para casa — apenas para descobrir que sua liberdade tem um preço.', 1, 1, '1h 3min', '2024-11-11 23:47:35'),
(167, 'pacificador', 11, 'Episódio 2', 'Fuga perigosa do Pacificador aumenta tensão e desconfiança na equipe. Enquanto lida com nova missão, ele recebe visita surpresa.', 1, 2, '57min', '2024-11-11 23:47:35'),
(168, 'pacificador', 11, 'Episódio 3', 'Economos e Murn se unem em missão para assassinar \"borboletas\". Pacificador e Harcourt fazem as pazes, mas a chegada do Mestre Judoca causa problemas.', 1, 3, '53min', '2024-11-11 23:47:35'),
(169, 'casa_do_dragao', 12, 'Episódio 1', 'Viserys organiza um torneio para comemorar o nascimento de seu segundo filho. Rhaenyra recebe seu tio Daemon na Fortaleza Vermelha.', 1, 1, '1h 20min', '2024-11-12 00:02:52'),
(170, 'casa_do_dragao', 12, 'Episódio 2', 'Rhaenyra se excede no Pequeno Conselho. Viserys é aconselhado a garantir a sucessão através do casamento. Daemon anuncia suas intenções.', 1, 2, '1h 3min', '2024-11-12 00:02:52'),
(171, 'casa_do_dragao', 12, 'Episódio 3', 'Daemon e a Serpente Marinha lutam contra o Engorda Caranguejos. O reino celebra o dia do nome de Aegon. Rhaenyra enfrenta um possível casamento.', 1, 3, '1h 8min', '2024-11-12 00:02:52'),
(172, 'casa_do_dragao', 12, 'Episódio 1', 'Enquanto Alicent fica cada vez mais preocupada com o Conselho de Aegon, Rhaenyra toma uma decisão fatídica.', 2, 1, '1h 20min', '2024-11-12 00:09:55'),
(173, 'casa_do_dragao', 12, 'Episódio 2', 'Rhaenyra questiona a lealdade de Daemon enquanto Otto planeja colocar o público contra ela.', 2, 2, '1h 3min', '2024-11-12 00:09:55'),
(174, 'casa_do_dragao', 12, 'Episódio 3', 'Enquanto velhos rancores ressurgem, Rhaenys sugere moderação. Daemon chega a Harrenhal para formar um exército para os Pretos.', 2, 3, '1h 8min', '2024-11-12 00:09:55'),
(175, 'The_Boys', 3, 'Episódio 1', 'Você e um convidado estão convidados para a estreia de DAWN OF THE SEVEN nesta terça-feira às 19h no Lamplighter Memorial Theater da Vought Tower! A exibição será seguida por uma sessão de perguntas e respostas com o diretor Adam Bourke e uma festa com o Super DJ Malchemical nas vitrolas! Junte-se a nós para a maior história de origem real já contada sobre a equipe de super-heróis número um da América e veja como a lenda começou!', 3, 1, '1h 3min', '2024-11-12 22:17:45'),
(176, 'The_Boys', 3, 'Episódio 2', 'Homelander. O maior super-herói da América. Defendendo nossas costas de mar a mar brilhante. Hoje, a América o homenageia em seu aniversário. E a Vought Shopping Network está comemorando oferecendo a exclusiva Homelander Limited Birthday Edition Gold Coin por apenas US$ 99,95 (mais impostos e frete) enquanto durarem os estoques. Vought Gold Commemorative Coins: Um investimento que dura a vida toda.\r\nJunte-se ao Prime', 3, 2, '1h', '2024-11-12 22:17:45'),
(177, 'The_Boys', 3, 'Episódio 3', 'Hoje à noite às 9/8C no Vought Plus, é o final da temporada de #AmericanHero! Restam três concorrentes, mas apenas DOIS se juntarão ao #TheSeven! Starlight escolherá seu antigo amor Supersonic? Ou outra pessoa se mudará para a Seven Tower? Sintonize hoje à noite para o episódio final CHOCANTE, trazido a você por Lean Lady Frozen Dinners da Vought: Onde o magro tem um gosto ótimo!', 3, 3, '1h 2min', '2024-11-12 22:17:45'),
(178, 'The_Boys', 3, 'Episódio 1', 'CHAMANDO TODOS OS PATRIOTAS. ESTEJAM NO TRIBUNAL AMANHÃ PARA O #VEREDITO DE HOMELANDER E ESTEJAM PRONTOS. SE O SISTEMA DE \"JUSTIÇA\" CORRUPTO QUISER SE MEXER, ELES VÃO DESCOBRIR. #HOMEFREE', 4, 1, '1h 5min', '2024-11-12 22:20:34'),
(179, 'The_Boys', 3, 'Episódio 2', 'Você sabia que os globalistas colocam produtos químicos na comida para nos tornar gays, Dakota Bob é um demônio do inferno e a Lua não é real? Descubra o que eles não querem que você saiba na #TruthCon!', 4, 2, '1h', '2024-11-12 22:20:34'),
(180, 'The_Boys', 3, 'Episódio 3', 'Em dezembro, na VoughtCoin Arena, experimente a história do Natal do jeito que ela deveria ser contada... no gelo! Vought apresenta Vought on Ice! Ingressos disponíveis agora em VoughtOnIce.com!', 4, 3, '1h ', '2024-11-12 22:20:34'),
(181, 'margem', 14, 'Episódio 1', 'O fazendeiro de Wyoming, Royal Abbott, descobre um mistério insondável nos limites de sua propriedade, desencadeando uma cadeia catastrófica de eventos.', 1, 1, '58min', '2024-11-12 23:17:25'),
(182, 'margem', 14, 'Episódio 2', 'A família Abbott conspira freneticamente para encobrir seus crimes, mas não consegue descobrir o que aconteceu com Royal.', 1, 2, '43min', '2024-11-12 23:17:25'),
(183, 'margem', 14, 'Episódio 3', 'A investigação do desaparecimento do irmão Tillerson força Royal a se aliar a Autumn, até que Amy faz uma descoberta improvável.', 1, 3, '47min', '2024-11-12 23:17:25'),
(184, 'margem', 14, 'Episódio 1', 'Após a debandada dos bisões, a família Abbott está mais fragmentada do que nunca. Royal e Cecilia confrontam algumas verdades difíceis enquanto lutam para manter a família unida.', 2, 1, '59min', '2024-11-12 23:19:28'),
(185, 'margem', 14, 'Episódio 2', 'Perry busca ajuda de um membro inesperado da família. Os Tillersons prometem vingança contra os Abbotts, enquanto Royal enfrenta uma nova ameaça ao West Pasture.', 2, 2, '53min', '2024-11-12 23:19:28'),
(186, 'margem', 14, 'Episódio 3', 'Royal e Cecelia ficam desesperados na tentativa de salvar seu rancho. Os Tillersons lidam com uma reviravolta surpreendente nos acontecimentos.', 2, 3, '1h ', '2024-11-12 23:19:28'),
(187, 'Anéis_do_Poder', 13, 'Episódio 1', 'Estreia da série. Galadriel fica perturbada com sinais do retorno de um mal antigo; Arondir faz uma descoberta perturbadora; Elrond é presenteado com uma nova e intrigante aventura; Nori quebra a regra mais profundamente arraigada da comunidade Harfoot.', 1, 1, '1h 5min', '2024-11-13 00:11:25'),
(188, 'Anéis_do_Poder', 13, 'Episódio 2', 'Galadriel encontra um novo aliado; Elrond enfrenta uma recepção fria de um velho amigo; Nori se esforça para ajudar um Estranho; Arondir busca respostas enquanto Bronwyn alerta seu povo sobre uma ameaça.', 1, 2, '1h 7min', '2024-11-13 00:11:25'),
(189, 'Anéis_do_Poder', 13, 'Episódio 3', 'Arondir se vê prisioneiro; Galadriel e Halbrand exploram um reino lendário; Elendil recebe uma nova missão; Nori enfrenta as consequências.', 1, 3, '1h 9min', '2024-11-13 00:11:25'),
(190, 'Anéis_do_Poder', 13, 'Episódio 1', 'Estreia da Temporada. Sauron negocia com Adar. O Estranho e Nori se aventuram em novas terras. Os Três Anéis Élficos enfrentam o julgamento.', 2, 2, '1h 16min', '2024-11-13 00:13:06'),
(191, 'Anéis_do_Poder', 13, 'Episódio 2', 'A escuridão cai sobre Khazad-dûm. Sauron e Galadriel buscam novos aliados. O Estranho e os Pés-Hardos encontram uma ameaça crescente.', 2, 2, '1h 3min', '2024-11-13 00:13:06'),
(192, 'Anéis_do_Poder', 13, 'Episódio 3', 'Isildur e um velho amigo se reencontram. Arondir luta com a mudança. Míriel enfrenta crescente oposição. Annatar aconselha Celebrimbor.', 2, 3, '1h 6min', '2024-11-13 00:13:06'),
(193, 'Vikings_', 15, 'Episódio 1', 'Ragnar decide empreender uma viagem de iniciação com seu filho e acha que finalmente encontrou uma maneira de navegar em direção ao oeste, mas suas crenças são consideradas uma loucura pelo restante dos vikings.', 1, 1, '46m', '2024-11-18 23:30:34'),
(194, 'Vikings_', 15, 'Episódio 2', 'Ragnar Lothbrok reúne uma equipe disposta a arriscar a vida para viajar para o desconhecido; a paranoia de Earl Haraldson atinge um novo patamar conforme se torna evidente que a confiança é algo difícil de encontrar nesta era sombria.', 1, 2, '47m', '2024-11-18 23:30:34'),
(195, 'Vikings_', 15, 'Episódio 3', 'Após sua bem-sucedida viagem, Ragnar e sua equipe voltam para casa abarrotados de riquezas. Earl Haraldson reivindica todo o tesouro, exceto por um item: Ragnar escolhe Athelstan como escravo para aprender mais sobre a Inglaterra.', 1, 3, '45m', '2024-11-18 23:30:34'),
(196, 'Vikings_', 15, 'Episódio 1', 'A batalha começa entre Ragnar e as forças do rei Horik contra Jarl Borg. Borg é acompanhado por Rollo, e esse choque viquingue coloca irmão contra irmão. Apenas um deles será o vencedor; a Princesa Aslaug chega a Kattegat com uma surpresa.', 2, 1, '48m', '2024-11-18 23:30:34'),
(197, 'Vikings_', 15, 'Episódio 2', 'Quatro pacíficos anos se passaram de Ragnar como Earl. Chegou a hora de uma aliança improvável para se unir em busca de um objetivo comum, um novo ataque a Inglaterra. Uma tempestade empurra a frota Viking para um novo destino, e nas praias de Wessex, Ragnar e seus homens podem ter encontrado seus pares.', 2, 2, '45m', '2024-11-18 23:30:34'),
(198, 'Vikings_', 15, 'Episódio 3', 'O ataque Wessex Viking está em pleno andamento e o rei Ecbert se vê diante de um novo tipo de inimigo. Enquanto Ragnar corre para dominar no Ocidente, Jarl Borg tem seus próprios planos na loja para o futuro do Kattegat.', 2, 3, '46m', '2024-11-18 23:30:34'),
(199, 'Vikings_', 15, 'Episódio 1', 'As frotas de Ragnar e Lagertha partem de Kattegat mais uma vez rumo a Wessex, mas desta vez eles trazem os colonos juntos, para criar um assentamento. O rei Ecbert propõe um acordo. Ragnar faz uma aliança surpreendente.', 3, 1, '49m', '2024-11-18 23:41:24'),
(200, 'Vikings_', 15, 'Episódio 2', 'Lagertha e Athelstan ajudam a organizar o assentamento dos Vikings em Wessex. Enquanto isso, um misterioso viajante chega a Kattegat, concretizando premonições.', 3, 2, '44m', '2024-11-18 23:41:24'),
(201, 'Vikings_', 15, 'Episódio 3', 'Rei Ecbert visita o assentamento Viking em constante desenvolvimento, enquanto a primeira colheita é semeada; as forças Wessex-Viking batalham contra Mercia.', 3, 3, '46m', '2024-11-18 23:41:24'),
(202, 'Vikings_', 15, 'Episódio 1', 'Ragnar retorna doente a Kattegat; Lagertha trava uma luta de poder com Kalf; Rollo trai sua linhagem; Floki paga o preço por sua brutalidade contra o padre.', 4, 1, '47m', '2024-11-18 23:41:24'),
(203, 'Vikings_', 15, 'Episódio 2', 'Ragnar e Floki continuam a se desentender; Rollo faz grandes esforços para conquistar sua nova noiva, a princesa Gisla; o rei Ecbert envia seu filho Aethelwulf ao resgate da rainha Kwenthrith.', 4, 2, '43m', '2024-11-18 23:41:24'),
(204, 'Vikings_', 15, 'Episódio 3', 'Ragnar revela a Floki o alto preço que foi pago por suas ações; Bjorn luta contra um feroz oponente.', 4, 3, '48m', '2024-11-18 23:41:24'),
(205, 'Vikings_', 15, 'Episódio 1', 'A tensão reina entre os filhos de Ragnar Lothbrok. Com o Rei Aethelwulf e sua família ainda escondidos, o Grande Exército sai em direção para tomar York. Com isso, Heahmund, o bispo guerreiro, deve reagrupar os Saxões para defender o reino.', 5, 1, '46m', '2024-11-18 23:41:24'),
(206, 'Vikings_', 15, 'Episódio 2', 'Enquanto os Vikings estabelecem sua fortaleza em York, Ivar está determinado a liderar o Grande Exército. Em Kattegat, Lagertha julga mal o Rei Harald e paga um alto preço por isso. Já Floki chega em uma terra misteriosa.', 5, 2, '44m', '2024-11-18 23:41:24'),
(207, 'Vikings_', 15, 'Episódio 3', 'As comemorações são interrompidas depois da batalha de York; a tensão chega ao seu clímax quando os filhos de Ragnar Lothbrok se enfrentam. Agora, cada um deve escolher de lado ficará.', 5, 3, '44m', '2024-11-18 23:41:24');
INSERT INTO `episodios` (`id`, `nome_video`, `serie_id`, `titulo`, `descricao`, `temporada`, `numero_episodio`, `duracao`, `criado_em`) VALUES
(208, 'Vikings_', 15, 'Episódio 1', 'Seis meses se passaram desde a batalha de Kattegat, e Bjorn se tornou rei. Porém, enquanto lida com as responsabilidades da realeza, ele descobre que não pode confiar em Lagertha; o príncipe Oleg decide colocar Ivar à prova.', 6, 1, '46m', '2024-11-18 23:45:09'),
(209, 'Vikings_', 15, 'Episódio 2', 'Os mensageiros chegam a Kattegat com notícias que deixam Bjorn em um dilema; Ivar fica chocado com a crueldade de Oleg enquanto luta pelo trono do Império Rus; Lagertha conquistou uma vida pacífica, mas o perigo está à espreita.', 6, 2, '44m', '2024-11-18 23:45:09'),
(210, 'Vikings_', 15, 'Episódio 3', 'A comunidade está abalada por eventos chocantes, e Lagertha se vê obrigada a tomar certas medidas; Ivar está ciente da ameaça que Oleg representa; Bjorn é socorrido por um velho inimigo, mas nem tudo é o que parece.', 6, 3, '44m', '2024-11-18 23:45:09'),
(211, 'Gotham_', 16, 'Episódio 1', 'Na estreia da série, acompanhamos Jim Gordon enquanto ele navega por uma cidade corrupta e perigosa. Também saberemos mais sobre o nascimento de um dos maiores super-heróis de nossos tempos.', 1, 1, '49min', '2024-11-19 00:11:43'),
(212, 'Gotham_', 16, 'Episódio 2', 'Os detetives Gordon e Bullock investigam um cartel de tráfico de crianças que faz suas vítimas nas ruas de Gotham, incluindo Selina Kyle.', 1, 2, '44min', '2024-11-19 00:11:43'),
(213, 'Gotham_', 16, 'Episódio 3', 'Gordon e Bullock saem à caça de um justiceiro que está matando os cidadãos corruptos de Gotham com balões meteorológicos; Oswald Cobblepot, o Pinguim, está de volta à cidade.', 1, 3, '44min', '2024-11-19 00:11:43'),
(214, 'Gotham_', 16, 'Episódio 1', 'Mesmo indo contra todos os seus princípios, o detetive James Gordon decide procurar Pinguim e lhe pedir ajuda. Enquanto isso, o jovem Bruce Wayne explora os segredos escondidos a sete chaves no escritório de seu pai.', 2, 1, '44min', '2024-11-19 00:11:43'),
(215, 'Gotham_', 16, 'Episódio 2', 'Após sua reintegração, o detetive James Gordon precisa enfrentar a fuga de um assassino do Asilo Arkham; em busca de ajuda, Bruce Wayne procura um amigo de seu pai; Nygma tenta fazer Kristin Kringle dar o fora.', 2, 2, '44min', '2024-11-19 00:11:43'),
(216, 'Gotham_', 16, 'Episódio 3', 'Gordon e Bullock seguem a trilha de um rival do passado; uma apresentação de truques de mágica durante um evento de gala no hospital infantil da cidade transforma-se rapidamente em um caso de polícia, com direito a reféns.', 2, 3, '43min', '2024-11-19 00:11:43'),
(217, 'Gotham_', 16, 'Episódio 1', 'Gordon trabalha como caçador de recompensas em um Gotham desolada; a cópia de Bruce vaga pelas ruas da cidade; Tabitha e Barbara abrem uma boate chamada The Sirens.', 3, 1, '44min', '2024-11-19 00:11:43'),
(218, 'Gotham_', 16, 'Episódio 2', 'Fish Mooney dedide localizar ela mesma Hugo Strange, o que força Gordon a se juntar a Valerie Vale e achá-la; o Pinguim ganha um aumento na popularidade; Ivy Pepper reaparece em Gotham.', 3, 2, '43min', '2024-11-19 00:11:43'),
(219, 'Gotham_', 16, 'Episódio 3', 'O Chapeleiro Maluco contrata Gordon para achar sua irmã, Alice; Pinguim decide se candidatar a prefeito; a cópia de Bruce começa a encarná-lo.', 3, 3, '44min', '2024-11-19 00:11:43'),
(220, 'Gotham_', 16, 'Episódio 1', 'Gordon teme que Jonathan Crane ainda esteja vivo e de volta a Gotham. Enquanto isso, o licenciamento de criminalidade do Pinguim na cidade não sai como esperado durante a inauguração do seu novo Iceberg Lounge.', 4, 1, '43min', '2024-11-19 00:22:12'),
(221, 'Gotham_', 16, 'Episódio 2', 'Sob pressão para provar que a Polícia de Gotham ainda é poderosa, Gordon tenta prender Jonathan Crane. No entanto, Gordon se coloca em uma situação perigosa em Arkham quando é forçado a lutar contra lunáticos e o demônio dentro de si mesmo.', 4, 2, '44min', '2024-11-19 00:22:12'),
(222, 'Gotham_', 16, 'Episódio 3', 'Gordon viaja para Miami na tentativa de persuadir Carmine Falcone a ajudar na luta contra o Pinguim. A batalha pelo armamento do Pinguim continua durante a noite do leilão no Iceberg Lounge e a presença de Bruce o coloca no radar de Pinguim.', 4, 3, '44min', '2024-11-19 00:22:12'),
(223, 'Gotham_', 16, 'Episódio 1', 'Jim Gordon e Bruce encaram o caos que se tornou Gotham City enquanto os vilões ressurgem para reivindicar seus territórios. Selina enfrenta um futuro incerto.', 5, 1, '44min', '2024-11-19 00:22:12'),
(224, 'Gotham_', 16, 'Episódio 2', 'Enquanto Bruce procura uma suposta bruxa parar curar Selina, Nygma lida com seus próprios demônios. Barbara prova ser uma aliada de Gordon quando as gangues dominam as ruas.', 5, 2, '44min', '2024-11-19 00:22:12'),
(225, 'Gotham_', 16, 'Episódio 3', 'Com a criação de Haven como um lugar seguro para os refugiados, Gordon espera deter as gangues de Gotham. Enquanto isso, Selina está disposta a encontrar Jeremiah e convence Bruce a ajudá-la.', 5, 3, '44min', '2024-11-19 00:22:12'),
(226, 'The_Crown_', 17, 'Episódio 1', 'A jovem princesa Elizabeth casa-se com o príncipe Philip. O estado de saúde do rei George VI piora e Winston Churchill é eleito primeiro-ministro para um segundo mandato.', 1, 1, '57min', '2024-11-19 00:50:48'),
(227, 'The_Crown_', 17, 'Episódio 2', 'Com o rei George demasiado doente para viajar, Elizabeth e Philip embarcam numa visita pela Commonwealth. Os líderes do partido tentam sabotar Churchill.', 1, 2, '1h 1min', '2024-11-19 00:50:48'),
(228, 'The_Crown_', 17, 'Episódio 3', 'Com Elizabeth num novo papel, Philip tenta exercer algum poder. Churchill quer adiar a coroação. O irmão do rei George, a ovelha negra da família, chega.', 1, 3, '59min', '2024-11-19 00:50:48'),
(229, 'The_Crown_', 17, 'Episódio 1', 'Philip parte numa viagem de vários meses e Elizabeth descobre um segredo perturbador. O Egito toma o Canal de Suez e o primeiro-ministro Eden pretende retaliar.', 2, 1, '57min', '2024-11-19 00:50:48'),
(230, 'The_Crown_', 17, 'Episódio 2', 'Elizabeth nota que Philip está distante. Eden enfrenta a pressão internacional e problemas de saúde. Uma entrevista desperta em Philip memórias angustiantes.', 2, 2, '55min', '2024-11-19 00:50:48'),
(231, 'The_Crown_', 17, 'Episódio 3', 'Pessoas próximas da família real tentam impedir um escândalo que poderia prejudicar a imagem de Philip. Eden enfrenta a censura do seu próprio gabinete e da imprensa.', 2, 3, '56min', '2024-11-19 00:50:48'),
(232, 'The_Crown_', 17, 'Episódio 1', 'Harold Wilson torna-se primeiro-ministro e isso aumenta a preocupação de Elizabeth que, entretanto, lida com tensões antimonárquicas e rumores da ligação dele ao KGB.', 3, 1, '47min', '2024-11-19 00:50:48'),
(233, 'The_Crown_', 17, 'Episódio 2', 'A Grã-Bretanha precisa de um resgate financeiro dos Estados Unidos, o que leva Elizabeth a pedir a ajuda de Margaret para tentar conquistar o Presidente Johnson.', 3, 2, '47min', '2024-11-19 00:50:48'),
(234, 'The_Crown_', 17, 'Episódio 3', 'Um trágico acidente numa vila mineira, no País de Gales, torna-se num acontecimento político que leva Elizabeth e Wilson a debaterem-se com as suas possíveis reações.', 3, 3, '55min', '2024-11-19 00:50:48'),
(235, 'The_Crown_', 17, 'Episódio 1', 'Elizabeth recebe a primeira mulher a ocupar o cargo de Primeira-Ministra. Charles conhece Diana Spencer. Um ataque provoca uma tragédia na família.', 4, 1, '54min', '2024-11-19 01:01:25'),
(236, 'The_Crown_', 17, 'Episódio 2', 'Margaret Thatcher visita Balmoral, mas tem dificuldades em se entrosar com a família real. Charles fica dividido entre o coração e o dever para com a coroa.', 4, 2, '57min', '2024-11-19 01:01:25'),
(237, 'The_Crown_', 17, 'Episódio 3', 'Diana se muda para o Palácio de Buckingham e descobre um mundo marcado com regras, solidão e a presença de Camilla Parker Bowles.', 4, 3, '56min', '2024-11-19 01:01:25'),
(238, 'The_Crown_', 17, 'Episódio 1', 'A reforma do iate real gera críticas ao reinado de Elizabeth. Perseguidos pela imprensa, Charles e Diana vão à Itália para uma segunda lua de mel.', 5, 1, '55min', '2024-11-19 01:01:25'),
(239, 'The_Crown_', 17, 'Episódio 2', 'Príncipe Philip oferece apoio a uma pessoa da família em luto. Um jornalista propõe a Diana a publicação de um livro revelador.', 5, 2, '49min', '2024-11-19 01:01:25'),
(240, 'The_Crown_', 17, 'Episódio 3', 'Em 1946, um vendedor ambulante egípcio se inspira no Rei Edward, que abdicou do trono. Muitos anos depois, ele faz de tudo para se integrar à alta sociedade britânica.', 5, 3, '52min', '2024-11-19 01:01:25'),
(241, 'The_Crown_', 17, 'Episódio 1', 'Diana passa as férias em Saint-Tropez com Al-Fayed e se aproxima do filho dele, Dodi. A rainha não vai à festa de aniversário de Camilla, e Charles fica arrasado.', 6, 1, '51min', '2024-11-19 01:01:25'),
(242, 'The_Crown_', 17, 'Episódio 2', 'Diana e Dodi passam mais tempo juntos e a imprensa fica em polvorosa. Irritado, Charles divulga foto com os filhos.', 6, 2, '39min', '2024-11-19 01:01:25'),
(243, 'The_Crown_', 17, 'Episódio 3', 'Al-Fayed incentiva Dodi a pedir Diana em casamento, mas ela não quer nem pensar no assunto. A perseguição dos paparazzi termina em desastre.', 6, 3, '56min', '2024-11-19 01:01:25'),
(244, '', 18, 'Episódio 1', 'Sherlock Holmes conhece o Dr. Watson e aborda o caso dos Suicídios Impossíveis.', 1, 1, '1h 28min', '2024-11-19 23:26:05'),
(245, '', 18, 'Episódio 2', 'Sherlock e Watson conseguirão resolver o caso de uma cifra misteriosa e mortal?', 1, 2, '1h 28min', '2024-11-19 23:27:12'),
(247, '', 18, 'Episódio 3', 'Uma batalha de inteligência acontece entre Sherlock e um estranho que parece saber todas as respostas', 1, 2, '1h 29min', '2024-11-19 23:28:22'),
(248, '', 18, 'Episódio 1', 'Sherlock e Watson se encontram no centro de uma conspiração internacional.', 2, 1, '1h 29min', '2024-11-19 23:29:14'),
(249, '', 18, 'Episódio 2', 'Um cão do inferno. O caso mais famoso de Sherlock. Mas um monstro está realmente perseguindo Dartmoor?', 2, 2, '1h 28min', '2024-11-19 23:29:49'),
(250, '', 18, 'Episódio 3', 'Moriarty retorna para o crime do século. Sherlock pode sobreviver?', 2, 3, '1h 28min', '2024-11-19 23:30:27'),
(251, '', 18, 'Episódio 1', 'Sherlock retorna! Mas para John Watson pode ser um caso de \'tenha cuidado com o que deseja.', 3, 1, '1h 26min', '2024-11-19 23:31:01'),
(252, '', 18, 'Episódio 2', 'Sherlock enfrenta seu maior desafio: fazer o discurso de padrinho no casamento de John.', 3, 2, '1h 26min', '2024-11-19 23:32:04'),
(253, '', 18, 'Episódio 3', 'Um caso de cartas roubadas leva Sherlock ao \"Napoleão da chantagem\".', 3, 3, '1h 29min', '2024-11-19 23:32:27'),
(254, '', 18, 'Episódio 1', 'Sherlock enfrenta talvez o inimigo mais assustador de sua longa carreira, Culverton Smith.', 4, 1, '1h 28min', '2024-11-19 23:33:14'),
(255, '', 18, 'Episódio 2', 'Sherlock e John Watson enfrentam seu maior desafio de todos os tempos. O jogo finalmente acabou?', 4, 2, '1h 29min', '2024-11-19 23:33:34'),
(256, '', 18, 'Episódio 3', 'Sherlock e John investigam uma noiva fantasmagórica que parece ter cometido um assassinato.', 4, 3, '1h 29min', '2024-11-19 23:33:58'),
(257, '', 19, 'Episódio 1', 'Querendo desesperadamente escapar do CRM, mas com a esperança diminuindo conforme cada tentativa falha, Rick tem que encontrar seu caminho neste novo mundo. Com o destino da humanidade em jogo, ele pode se perder no processo.', 1, 1, '56min', '2024-11-19 23:48:34'),
(258, '', 19, 'Episódio 2', 'Em sua jornada para encontrar Rick, Michonne recebe ajuda de um grupo inesperado de sobreviventes. Ela se pergunta se tanto essa ajuda quanto sua determinação serão suficientes para navegar pelos perigos dos vivos e dos mortos, ou se ela perderá a esperança e falhará.', 1, 2, '53min', '2024-11-19 23:48:57'),
(259, '', 19, 'Episódio 3', 'Com Michonne por perto, Rick precisa encontrar uma maneira de eles sobreviverem enquanto fingem que não se conhecem, e Michonne precisa evitar chamar muita atenção para si mesma e se tornar um alvo.', 1, 3, '48min', '2024-11-19 23:49:16'),
(260, '', 20, 'Episódio 1', 'Maggie encontra Negan, e eles viajam para Manhattan; um xerife chamado Armstrong segue Negan; conhecemos uma jovem quieta chamada Ginny.', 1, 1, '50min', '2024-11-20 00:01:50'),
(261, '', 20, 'Episódio 2', 'Maggie e Negan encontram nova-iorquinos nativos; Armstrong revisita um trauma; Ginny tenta se adaptar à mudança.', 1, 2, '39min', '2024-11-20 00:02:18'),
(264, '', 20, 'Episódio 3', 'Instintos sombrios se revelam quando Maggie e Negan formam uma estratégia; Armstrong é testado; Ginny embarca em uma jornada ousada.', 1, 3, '44min', '2024-11-20 00:05:25'),
(265, '', 21, 'Episódio 1', 'No ano de 2552, os humanos no planeta Madrigal lutam pela independência da Terra, mas um encontro fatal com os Alienígenas Covenant muda tudo.', 1, 1, '59min', '2024-11-20 00:08:07'),
(266, '', 21, 'Episódio 2', 'John leva Kwan até um velho amigo e descobre mais sobre o objeto misterioso. A Dra. Halsey tem um plano.', 1, 2, '54min', '2024-11-20 00:08:26'),
(267, '', 21, 'Episódio 3', 'John conhece seu novo parceiro e descobre segredos dentro de sua própria memória. Kwan quer retornar a Madrigal para continuar a luta de seu povo pela independência, mas Soren tem outros planos para ela.', 1, 3, '54min', '2024-11-20 00:08:58'),
(268, '', 21, 'Episódio 1', 'Uma missão mortal sinaliza uma mudança na guerra do Master Chief. Estreia da temporada.', 2, 1, '58min', '2024-11-20 00:09:25'),
(269, '', 21, 'Episódio 2', 'John leva o Silver Team ao limite enquanto procura por Spartans desaparecidos. Kai se preocupa com a estabilidade de John. Kwan descobre que Rubble é um lugar muito mais perigoso na ausência de Soren. Halsey busca a identidade de seu captor.', 2, 2, '46min', '2024-11-20 00:09:53'),
(270, '', 21, 'Episódio 3', 'John e a Equipe Prata embarcam em uma missão não autorizada.', 2, 3, '54min', '2024-11-20 00:10:12'),
(271, '', 22, 'Episódio 1', 'Um cientista sociopata arrasta seu neto inocente para perigosas aventuras interdimensionais.', 1, 1, '23min', '2024-11-20 00:20:02'),
(272, '', 22, 'Episódio 2', 'Rick ajuda Jerry com seu cachorro.', 1, 2, '23min', '2024-11-20 00:20:21'),
(273, '', 22, 'Episódio 3', 'Rick injeta Morty em um homem para salvar Anatomy Park. Jerry quer um natal sem tecnologia. Ele lamenta quando seus pais o apresentam ao amigo.', 1, 3, '23min', '2024-11-20 00:20:42'),
(274, '', 22, 'Episódio 1', 'O tempo foi reiniciado. Rick, Morty e Summer estão em um estado de existência incerto quântico. Isso leva à criação de linhas de tempo alternativas.', 2, 1, '23min', '2024-11-20 00:21:20'),
(275, '', 22, 'Episódio 2', 'Rick e Morty tentam salvar uma forma de vida gasosa enquanto Jerry mora em uma creche.', 2, 2, '23min', '2024-11-20 00:21:44'),
(276, '', 22, 'Episódio 3', 'Rick fica emocionado. Beth e Jerry brigam.', 2, 3, '23min', '2024-11-20 00:22:02'),
(277, '', 22, 'Episódio 1', 'Rick cria um plano de fuga da prisão galáctica. Na Terra, que está sob controle federal, Morty e Summer discutem sobre o avô.', 3, 1, '23min', '2024-11-20 00:22:24'),
(278, '', 22, 'Episódio 2', 'Os filhos enfrentam o divórcio dos pais. Rick os leva para um universo como Mad Max, onde ele procura roubar um cristal de um grupo de traficantes.', 3, 2, '23min', '2024-11-20 00:22:46'),
(279, '', 22, 'Episódio 3', 'Rick transforma a si mesmo em um pepino enquanto Beth, Summer e Morty vão à terapia familiar.', 3, 3, '23min', '2024-11-20 00:23:12'),
(280, '', 22, 'Episódio 1', 'Morty enlouquece dessa vez, mano. Rick faz coisas.', 4, 1, '23min', '2024-11-20 00:24:30'),
(281, '', 22, 'Episódio 2', 'Todos nós temos uma coisa em comum, broh. Eu não sei mano. Assista a este.', 4, 2, '23min', '2024-11-20 00:24:52'),
(282, '', 22, 'Episódio 3', 'Muitas voltas e mais voltas desta vez, broh. Vista seus capacetes.', 4, 3, '23min', '2024-11-20 00:25:11'),
(283, '', 22, 'Episódio 1', 'Temos um convidado especial para o jantar, broh. Checa a bebida.', 5, 1, '23min', '2024-11-20 00:25:41'),
(284, '', 22, 'Episódio 2', 'E quem é real, broh? Você é real? Broh?', 5, 2, '23min', '2024-11-20 00:26:05'),
(285, '', 22, 'Episódio 3', 'Reducir e reutilizar, broh. Talvez seja tarde.', 5, 3, '23min', '2024-11-20 00:26:30'),
(286, '', 22, 'Episódio 1', 'Os Smiths estão lidando com os efeitos da última temporada. Rick e Morty estão no espaço, flutuando entre os restos da cidadela. Conseguirão voltar?', 6, 1, '23min', '2024-11-20 00:27:06'),
(287, '', 22, 'Episódio 2', 'Morty está preso e Rick tem que salvá-lo. Para conseguir isso, Summer tem que fazer algo digno de Duro de Matar, mas vai ser difícil, ela nunca o viu!', 6, 2, '23min', '2024-11-20 00:27:33'),
(288, '', 22, 'Episódio 3', 'Os Smiths aproveitam um dos seus feriados favoritos, enquanto Summer e Morty estão completamente obcecados com o seu novo videogame ultrarrealista.', 6, 3, '23min', '2024-11-20 00:27:58'),
(289, '', 22, 'Episódio 1', 'Rick tenta ajudar um velho amigo a se reerguer.', 7, 1, '23min', '2024-11-20 00:28:42'),
(290, '', 22, 'Episódio 2', 'Rick ensina a Jerry como trabalhar menos e melhor.', 7, 2, '23min', '2024-11-20 00:29:01'),
(291, '', 22, 'Episódio 3', 'Rick e o Presidente dos Estados Unidos juntos novamente.', 7, 3, '23min', '2024-11-20 00:29:20'),
(292, '', 23, 'Episódio 1', 'Um homem malvado e rico sofre um ataque cardíaco. / Muriel é atingida na cabeça por uma peça voadora do telhado da casa.', 1, 1, '22min', '2024-11-20 00:43:42'),
(293, '', 23, 'Episódio 2', 'Um esfomeado Pé Grande aparece na fazenda. / Eustácio e Coragem vão a uma clínica especializada em crescimento capilar.', 1, 2, '22min', '2024-11-20 00:44:04'),
(294, '', 23, 'Episódio 3', 'Um demônio toma conta do corpo de Muriel. / O sobrinho de Muriel, um barbeiro arrepiante chamado Fred, visita a fazenda.', 1, 3, '22min', '2024-11-20 00:44:20'),
(295, '', 23, 'Episódio 1', 'Muriel encomenda novas cortinas para a cozinha e recebe sementes que se tornam uma árvore mágica. /Randy é enviado para a Terra.', 2, 1, '22min', '2024-11-20 00:44:45'),
(296, '', 23, 'Episódio 2', 'Shirley a cigana volta disfarçada de mendiga. /Muriel ganha um concurso e é convidada para tocar sua cítara no Radio City Music Hall.', 2, 2, '23min', '2024-11-20 00:45:05'),
(297, '', 23, 'Episódio 3', 'Um ladrão confuso fugindo da lei, entra na fazenda. /Coragem, Muriel e Eustácio são enterrados sob mil anos de sedimento.', 2, 3, '23min', '2024-11-20 00:45:27'),
(298, '', 23, 'Episódio 1', 'Escapando da lei, o casal de criminosos Maria e Nano estacionam seu trailer. /Coragem deve provar seu valor.\r\n\r\n', 3, 1, '22min', '2024-11-20 00:45:50'),
(299, '', 23, 'Episódio 2', 'Coragem deve resgatar Muriel depois que ela é sequestrada. /Eustácio traz para a casa um antigo disco de Velvet Vic.', 3, 2, '23min', '2024-11-20 00:46:11'),
(300, '', 23, 'Episódio 3', 'Uma deusa da tempestade encontra Coragem e quer que seja dela. /O Sandman decide roubar o sono de Muriel para que ele descanse.', 3, 3, '22min', '2024-11-20 00:46:30'),
(301, '', 23, 'Episódio 1', 'Muriel é chamada por seu tio para viajar para a Escócia. /O cientista solitário Dr. Gerhardt von Orbison tem necessidade de amigos.', 4, 1, '22min', '2024-11-20 00:47:13'),
(302, '', 23, 'Episódio 2', 'O Dr. Le Quack substitui a receita de biscoito de Muriel. /O moinho da fazenda começa a emperrar e Coragem tenta repará-lo.', 4, 2, '23min', '2024-11-20 00:47:32'),
(303, '', 23, 'Episódio 3', 'Muriel pega um resfriado incontrolável. /Em busca de um prêmio de caça, Eustácio leva Coragem com ele em uma viagem de caça de cervos.', 4, 0, '', '2024-11-20 00:47:55'),
(304, '', 23, 'Episódio 3', 'Muriel pega um resfriado incontrolável. /Em busca de um prêmio de caça, Eustácio leva Coragem com ele em uma viagem de caça de cervos.', 4, 3, '23min', '2024-11-20 00:48:18'),
(305, 'Suits_', 24, 'Episódio 1', 'O advogado de uma firma importante de Manhattan admite Mike Ross para ser seu novo sócio. Contudo, Mike, que sempre sonhou em ser advogado, nunca se formou.', 1, 1, '1h 21m', '2024-11-20 21:50:03'),
(306, 'Suits_', 24, 'Episódio 2', 'Mike enfrenta um problema ético em relação a um caso, quando Harvey é acusado de ter tido um comportamento impróprio com uma mulher casada.', 1, 2, '43m', '2024-11-20 21:50:03'),
(307, 'Suits_', 24, 'Episódio 3', 'Um juiz acusa Harvey de ter tido um caso com sua esposa. Para não perder um cliente importante, Louis exige que Mike tome uma posição que pode afetar o relacionamento dele com Harvey.', 1, 3, '42m', '2024-11-20 21:50:03'),
(308, 'Suits_', 24, 'Episódio 1', 'Harvey delega uma conclusão para Mike; Harvey tenta decidir se continua sendo cúmplice de Mike mediante o resto da empresa.', 2, 1, '43m', '2024-11-20 21:50:03'),
(309, 'Suits_', 24, 'Episódio 2', 'Hardman declara que está de volta para ficar; Jessica manda Harvey angariar apoio para ela dentro da empresa, mas sua inclinação para vencer pode criar mais inimigos; Mike confronta Rachel.', 2, 2, '42m', '2024-11-20 21:50:03'),
(310, 'Suits_', 24, 'Episódio 3', 'Hardman tenta interferir em um caso, mas Jessica diz à ele que Harvey já está cuidando do assunto. Louis tenta aumentar a taxa de aprovação da firma junto a Harvard.', 2, 3, '43m', '2024-11-20 21:50:03'),
(311, 'Suits_', 24, 'Episódio 1', 'A nova parceria de Jessica é posta à prova; Harvey precisa provar a inocência de um cliente famoso; Mike tenta administrar os desdobramentos decorrentes de sua revelação.', 3, 1, '48m', '2024-11-20 21:50:03'),
(312, 'Suits_', 24, 'Episódio 2', 'Louis oferece um caso a Mike que pode mudar seu futuro dentro da firma; Harvey e Jessica se unem para derrubar um velho inimigo que está atrapalhando suas tentativas de manter Ava Hessington fora da cadeia.', 3, 2, '43m', '2024-11-20 21:50:03'),
(313, 'Suits_', 24, 'Episódio 3', 'Cameron manda prender um cliente de Harvey acusado de assassinato; Katrina tenta seduzir Louis; uma versão britânica de Harvey chega à firma.', 3, 3, '43m', '2024-11-20 21:50:03'),
(314, 'Suits_', 24, 'Episódio 1', 'Se ajustando às novas normas, Mike procura Harvey com um plano que o coloca em posição delicada, enquanto Jessica tem que fazer uma escolha difícil.', 4, 1, '43m', '2024-11-20 22:00:01'),
(315, 'Suits_', 24, 'Episódio 2', 'Harvey e Mike estão em lados opostos de uma batalha acirrada; Louis faz uma parceria improvável com o desertor Jeff Malone.', 4, 2, '43m', '2024-11-20 22:00:01'),
(316, 'Suits_', 24, 'Episódio 3', 'Logan Sanders, cliente da Pearson Specter, quer que Harvey prove que seu relacionamento com Mike não interfere no resultado da batalha pelo poder.', 4, 3, '44m', '2024-11-20 22:00:01'),
(317, 'Suits_', 24, 'Episódio 1', 'É um novo dia na Pearson Specter Litt, e, por mais que Harvey queira fingir que tudo vai voltar ao normal, o fato é que Donna está indo trabalhar para Louis. Sem admitir que as coisas mudaram, Harvey tenta tocar os negócios como sempre.', 5, 1, '42m', '2024-11-20 22:00:01'),
(318, 'Suits_', 24, 'Episódio 2', 'A tensão familiar piora quando Robert Zane entrega a Rachel um pacto pré-nupcial para Mike assinar. Enquanto isso, Harvey começa a procurar um novo assistente e lida com um cliente antigo que quer vender sua empresa multimilionária.', 5, 2, '41m', '2024-11-20 22:00:01'),
(319, 'Suits_', 24, 'Episódio 3', 'Harvey tenta fazer as pazes com Jack Soloff a mando de Jessica, mas quando Jack joga na cara dele suas propostas de amizade, Harvey decide roubar um dos clientes do parceiro com sede de poder para colocá-lo no seu devido lugar.', 5, 3, '', '2024-11-20 22:00:01'),
(320, 'Suits_', 24, 'Episódio 1', 'Mike encara sua nova realidade enquanto os outros sócios da PSL tentam salvar a empresa em meio a desavenças e disputas externas.', 6, 1, '41m', '2024-11-20 22:00:01'),
(321, 'Suits_', 24, 'Episódio 2', 'A firma continua a contestar a ação sindical. A contragosto, Mike faz uma nova amizade. Harvey e Rachel visitam Mike.', 6, 2, '42m', '2024-11-20 22:00:01'),
(322, 'Suits_', 24, 'Episódio 3', 'Mike tenta se manter a salvo em Danbury. Jessica e Harvey trabalham na prospecção de um grande cliente. Louis encontra um novo inquilino.', 6, 3, '41m', '2024-11-20 22:00:01'),
(323, 'Suits_', 24, 'Episódio 1', 'Mike retorna para a Pearson Specter Litt e Harvey assume o controle da firma. Donna faz um jogo de poder. Louis enfrenta uma série de problemas.', 7, 1, '45m', '2024-11-20 22:00:01'),
(324, 'Suits_', 24, 'Episódio 2', 'Harvey luta para garantir o controle da firma. O histórico criminal de Mike põe o caso de um cliente em risco. Louis faz um exame de consciência.', 7, 2, '41m', '2024-11-20 22:00:01'),
(325, 'Suits_', 24, 'Episódio 3', 'Louis e Harvey discutem sobre o novo sócio da firma. Rachel tenta liderar os associados. Mike busca a verdade sobre um homem que morreu na prisão.', 7, 3, '41m', '2024-11-20 22:00:01'),
(326, 'Suits_', 24, 'Episódio 1', 'Harvey e Robert usam a rivalidade de Alex e Samantha para seus próprios interesses. Katrina fica em uma saia justa com Louis ao demitir seu associado favorito.', 8, 1, '42m', '2024-11-20 22:04:19'),
(327, 'Suits_', 24, 'Episódio 2', 'Harvey e Samantha se desentendem ao tentar salvar a pele de um dos ex-clientes de Mike. Sheila incentiva Louis a brigar pela posição de sócio-gerente.', 8, 2, '43m', '2024-11-20 22:04:19'),
(328, 'Suits_', 24, 'Episódio 3', 'Harvey compra uma briga com o senhorio do prédio por causa da faxineira. A saúde de Katrina atrapalha seus planos. Alex descobre algo alarmante sobre um cliente.', 8, 3, '41m', '2024-11-20 22:04:19'),
(329, 'Suits_', 24, 'Episódio 1', 'Os clientes fogem em massa, mas a firma segue na ofensiva para recuperar sua reputação. O relacionamento de Harvey e Donna entra em território desconhecido.', 9, 1, '44m', '2024-11-20 22:04:19'),
(330, 'Suits_', 24, 'Episódio 2', 'A firma enfrenta uma supervisão rigorosa. Samantha luta por um velho amigo com problemas. Alex convence Louis a dar um tempo.', 9, 2, '43m', '2024-11-20 22:04:19'),
(331, ' Suits_', 24, 'Episódio 3', 'Louis tem problemas para aceitar seu novo cargo. Harvey aceita um cliente para tentar acabar com o controle de Faye. Katrina é chantageada.', 9, 3, '43m', '2024-11-20 22:04:19'),
(332, 'Locke_Key_', 25, 'Episódio 1', 'Depois que os Lockes se mudam para Key House, Bode faz uma nova amizade e uma surpreendente descoberta. Tyler e Kinsey buscam um recomeço em uma nova escola.', 1, 1, '56m', '2024-11-20 22:17:21'),
(333, 'Locke_Key_', 25, 'Episódio 2', 'Nina descobre detalhes sobre o passado de Rendell. Kinsey ajuda o Esquadrão Savini, Tyler se junta a uma turma duvidosa e Bode encontra outra chave.', 1, 2, '50m', '2024-11-20 22:17:21'),
(334, 'Locke_Key_', 25, 'Episódio 3', 'Bode fica nas alturas depois de encontrar uma nova chave. A raiva latente de Tyler explode. Kinsey percebe que seu medo está atrapalhando sua vida.', 1, 3, '44m', '2024-11-20 22:17:21'),
(335, 'Locke_Key_', 25, 'Episódio 1', 'Gabe forma uma aliança terrível com Eden. Kinsey se prepara para a estreia do filme de terror do Esquadrão Savini. Duncan chega à Key House com uma novidade.', 2, 1, '53m', '2024-11-20 22:17:21'),
(336, 'Locke_Key_', 25, 'Episódio 2', 'Tyler se preocupa com a amnésia de Jackie. Gabe analisa a família Locke em busca de informações sobre as chaves. Nina conhece um colega de trabalho cretino.', 2, 2, '49m', '2024-11-20 22:17:21'),
(337, 'Locke_Key_', 25, 'Episódio 3', 'Duncan fica inquieto com uma nova hóspede. Gabe tenta separar Kinsey e Scot. Bode descobre uma chave inusitada. Nina estabelece um vínculo com Josh.', 2, 3, '51m', '2024-11-20 22:17:21'),
(338, 'Locke_Key_', 25, 'Episódio 1', 'Um globo de neve misterioso causa problemas em dobro à Key House, deixando Bode em uma grande fria. Kinsey e Nina tentam pegar uma chave roubada.', 3, 1, '44m', '2024-11-20 22:17:21'),
(339, 'Locke_Key_', 25, 'Episódio 2', 'O dia do casamento de Duncan traz uma ótima surpresa, mas também acaba sendo a oportunidade perfeita para que estranhos revirem a casa. Bode encontra uma nova chave.', 3, 2, '48m', '2024-11-20 22:17:21'),
(340, 'Locke_Key_', 25, 'Episódio 3', 'Bode procura a chave que o levará a seu pai. Nina enfrenta más lembranças. Kinsey e os Savinis vivem uma despedida emocionante.', 3, 3, '47m', '2024-11-20 22:17:21'),
(341, 'Round6_', 26, 'Episódio 1', 'Endividado, Gi-hun participa de um jogo misterioso na esperança de ganhar dinheiro fácil. Mas já na primeira rodada, uma verdadeira cena de horror acontece.', 1, 1, '60m', '2024-11-20 22:26:19'),
(342, 'Round6_', 26, 'Episódio 2', 'Dividido entre continuar ou desistir, o grupo faz uma votação. Mas a realidade que enfrentam no mundo exterior pode ser tão impiedosa ​​quanto o jogo.', 1, 2, '1h 3m', '2024-11-20 22:26:19'),
(343, 'Round6_', 26, 'Episódio 3', 'Alguns jogadores entram na próxima rodada, que promete altos e baixos, além de vantagens ocultas. Jun-ho chega sorrateiramente.', 1, 3, '55m', '2024-11-20 22:26:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `filme_id` int(11) DEFAULT NULL,
  `serie_id` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `favoritos`
--

INSERT INTO `favoritos` (`id`, `usuario_id`, `filme_id`, `serie_id`, `timestamp`) VALUES
(57, 7, 3, NULL, '2024-11-20 00:57:21'),
(61, 7, 7, NULL, '2024-11-20 00:57:42'),
(62, 7, 1, NULL, '2024-11-20 00:57:50'),
(63, 7, 2, NULL, '2024-11-20 00:57:51'),
(65, 7, 14, NULL, '2024-11-20 00:57:56'),
(66, 7, 19, NULL, '2024-11-20 00:58:02'),
(67, 7, NULL, 22, '2024-11-20 01:03:46'),
(68, 11, 16, NULL, '2024-11-26 00:43:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `nome_video` varchar(30) NOT NULL,
  `idade` varchar(20) NOT NULL,
  `descricao` text DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `duracao` varchar(30) DEFAULT NULL,
  `imagem_url` varchar(255) DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `titulo`, `nome_video`, `idade`, `descricao`, `ano`, `duracao`, `imagem_url`, `criado_em`) VALUES
(1, 'Deadpool & Wolverine', 'Deadpool_Wolverine_', '18+', 'Wolverine está se recuperando quando cruza seu caminho com Deadpool. Juntos, eles formam uma equipe e enfrentam um inimigo em comum.', 2024, '2h 7min', 'https://rollingstone.com.br/media/uploads/2024/04/5-destaques-do-novo-trailer-de-deadpool-wolverine-foto-reproducaomarvel-studios-4.jpg', '2024-10-29 01:55:13'),
(2, 'Animais Fantásticos: Os Segredos de Dumbledore', 'Segredos_Dumbledore_', '12+', 'O professor Albus Dumbledore sabe que o poderoso bruxo das trevas Gellert Grindelwald está se movendo para assumir o controle do mundo bruxo. Incapaz de detê-lo sozinho, ele confia a Newt Scamander um plano contra o inimigo.', 2022, '2h 23min', 'https://marte.art.br/marte/wp-content/uploads/2022/10/sa-out-4.jpg', '2024-10-29 01:55:13'),
(3, 'Piratas do Caribe: Navegando em Águas Misteriosas', 'Aguas_Misteriosas_', '12+', 'O passado do capitão Jack Sparrow volta a alcançá-lo quando ele cruza com Angelica, uma bonita pirata que Jack, um dia, amou e depois abandonou. Ela, então, o força a acompanhá-la ao navio Vingança da Rainha Ana, do famoso Barba Negra. Junto com uma tripulação de zumbis, o trio parte em busca da lendária Fonte da Juventude. Mas o rival de Jack, Barbossa, também cobiça a fonte, assim como um navio espanhol.', 2011, '2h 21min', 'https://wallpapers.com/images/hd/eleitos-de-piratas-do-caribe-on-stranger-tides-gwtr676q8u9q4jh4.jpg', '2024-10-29 01:55:13'),
(4, 'A Cinco Passos de Você', 'Cinco_Passos_', '12+', 'Stella passa muito tempo no hospital por causa de uma fibrose cística. Lá, ela conhece Will, que sofre da mesma doença. Eles são obrigados a manter distância, mas mesmo assim se apaixonam.', 2019, '1h 57min', 'https://one-cinema.s3.sa-east-1.amazonaws.com/filmes/five-feet-apart/10062020/1920/background-five-feet-apart.jpg', '2024-10-29 01:55:13'),
(5, 'Doutor Estranho', 'Doutor_Estranho1_', '12+', 'Após sua carreira ser destruída, um brilhante, porém arrogante, cirurgião ganha uma nova chance em sua vida quando um feiticeiro o treina para se tornar o Mago Supremo.', 2016, '1h 55min', 'https://wallpapers.com/images/hd/doutor-estranho-super-heroi-1920-x-1080-8xjihu02rmxp4v89.jpg', '2024-10-29 01:55:13'),
(6, 'O Corvo', 'O_Corvo_', '18+', 'As almas gêmeas Eric Draven e Shelly Webster são brutalmente assassinadas quando os demônios de seu passado sombrio os alcançam. Atravessando os mundos dos vivos e dos mortos, Draven retorna em busca de vingança sangrenta contra os assassinos.', 2024, '1h 51min', 'https://cinebuzz.com.br/media/uploads/2024/08/o-corvo-adaptacao-moderna-do-cult-de-1994-estreia-nos-cinemas-brasileiros.jpg', '2024-10-29 01:55:13'),
(7, 'Os Observadores', 'Os_Observadores_', '14+', 'Mina, uma artista de 28 anos, se vê presa numa floresta intocada no oeste da Irlanda. Sem saber, ela e três estranhos são observados todas as noites por várias criaturas misteriosas.', 2024, '1h 42min', 'https://capitalfmradio.com.br/wp-content/uploads/2024/09/04154651927263-dtpmWv.jpeg', '2024-10-29 01:55:13'),
(8, 'Coringa', 'Coringa_', '16+', 'Isolado, intimidado e desconsiderado pela sociedade, o fracassado comediante Arthur Fleck inicia seu caminho como uma mente criminosa após assassinar três homens em pleno metrô. Sua ação inicia um movimento popular contra a elite de Gotham City, da qual Thomas Wayne é seu maior representante.', 2019, '2h 2min', 'https://www.vivaocinema.com.br/wp-content/uploads/2019/11/coringa-1.jpg', '2024-10-29 01:55:13'),
(9, 'Logan', 'Logan_', '16+', 'Em 2024, os mutantes estão em franco declínio, e as pessoas não sabem o real motivo. Uma organização está transformando as crianças mutantes em verdadeiras assassinas. Wolverine, cansado de tudo e a pedido de um cada vez mais enfraquecido Professor Xavier, precisa proteger a jovem e poderosa Laura Kinney, conhecida como X-23. Enquanto isso, o vilão Nathaniel Essex amplia seu projeto de destruição.', 2017, '2h 17min', 'https://i.pinimg.com/originals/6c/30/ac/6c30ac986c1ea64ad46b5267819d6502.jpg', '2024-10-29 01:55:13'),
(10, 'Dungeons & Dragons: Honra Entre Rebeldes', 'Dungeons_Dragons_', '12+', 'Um ladrão e um bando de aventureiros embarcam em uma jornada épica para recuperar uma relíquia.', 2023, '2h 14min', 'https://thumbnails.cbsig.net/CBS_Production_Entertainment_VMS/2023/11/23/2286720579513/PPMOV_DUNGEONSDRAGONSHONORAMONGTHIEVES_CLEAN_UHD_2438084_1920x1080.jpg', '2024-10-29 01:55:13'),
(11, 'Abigail e a Cidade Proibida', 'Cidade_Proibida_', '12+', 'A jovem Abigail vive em uma cidade cujas fronteiras foram fechadas há muitos anos devido a uma epidemia de uma doença misteriosa. Seu pai era um dos doentes - e ele foi levado quando ela tinha seis anos de idade. Indo contra as autoridades para encontrá-lo, ela descobre que sua cidade é realmente cheia de magia. E ela descobre em si mesma habilidades mágicas extraordinárias.', 2019, '1h 50min', 'https://image.tmdb.org/t/p/original/epWA8i3MoWfdgrR8E7UiodEQM8q.jpg', '2024-10-29 01:55:13'),
(12, 'O Hobbit: Uma Jornada Inesperada', 'O_Hobbit_', '12+', 'Como a maioria dos hobbits, Bilbo Bolseiro leva uma vida tranquila até o dia em que recebe uma missão do mago Gandalf. Acompanhado por um grupo de anões, ele parte numa jornada até a Montanha Solitária para libertar o Reino de Erebor do dragão Smaug.', 2012, '2h 49min', 'https://play-lh.googleusercontent.com/proxy/WYcIwYRXg2ufva0DC0RyqIZ_6wnBPh6JnmlZMEXPCh84t2UIRW9EfPOxY6M_mDfObW7Cs2Bqk8xMNBVi70T5ffCkinqxCwWrhYImDET6y-VRjyeku3FQ-JQ=s1920-w1920-h1080', '2024-10-29 01:55:13'),
(13, 'Marrowbone', 'Marrowbone_', '18+', 'Devastados com a morte da mãe, quatro irmãos, em um estado crescente de depressão e paranoia, decidem se refugiar em um casarão decadente, tentando permanecer unidos. No entanto, o local esconde um obscuro e perigoso segredo que desafiará a união e a sobrevivência dos quatro.', 2017, '1h 50min', 'https://www.themoviedb.org/t/p/original/loQu6tBQvAGUM3QpXo0DzkJDSy0.jpg', '2024-10-29 01:55:13'),
(14, 'Homem-Aranha: Sem Volta para Casa', 'Homem_Aranha_S_', '12+', 'Peter Parker tem a sua identidade secreta revelada e pede ajuda ao Doutor Estranho. Quando um feitiço para reverter o evento não sai como o esperado, o Homem-Aranha e seu companheiro dos Vingadores precisam enfrentar inimigos de todo o multiverso.', 2021, '2h 28min', 'https://image.tmdb.org/t/p/original/tyQo080tijexyUHBvWPwQt26bZa.jpg', '2024-10-29 22:35:31'),
(15, 'Frozen - Uma Aventura Congelante', '_Frozen_', 'L', 'Acompanhada por um vendedor de gelo, a jovem e destemida princesa Anna parte em uma jornada por perigosas montanhas de gelo na esperança de encontrar sua irmã, a rainha Elsa, e acabar com a terrível maldição de inverno eterno, que está provocando o congelamento do reino.', 2013, '1h 42min', 'https://images7.alphacoders.com/674/thumb-1920-674391.jpg', '2024-10-29 23:53:28'),
(16, 'Donzela', 'Donzela_', '14+', 'Uma jovem concorda em se casar com um belo príncipe, apenas para descobrir que tudo não passou de uma armadilha. Ela é jogada em uma caverna com um dragão cuspidor de fogo e deve confiar apenas em sua inteligência e vontade para sobreviver.', 2024, '1h 50min', 'https://rollingstone.com.br/media/uploads/2024/03/donzela-filme-millie-bobby-brown-atriz-foto-john-wilson-netflix.jpg', '2024-10-30 00:55:22'),
(17, 'Através das Sombras', 'Atraves_Sombra_', '18+', 'Uma jovem assassina habilidosa desafia sua mentora para salvar um garoto de um terrível grupo criminoso. Ela está pronta para destruir quem ousar cruzar seu caminho.', 2024, '2h 24min', 'https://tm.ibxk.com.br/2024/10/21/21134617277162.jpg', '2024-10-30 01:08:41'),
(18, 'O Rei Leão', 'leão', 'L', 'Embarque na extraordinária aventura da chegada à puberdade de Simba, um leãozinho que mal pode esperar para ser rei e busca por seu destino no grande \"ciclo da vida\".', 1994, '1h 33min', 'https://wallpapers.com/images/hd/lion-king-pictures-hrlybnpo3o6ipxr0.jpg', '2024-11-12 23:30:47'),
(19, 'Aladdin', 'aladdin', 'L', 'Um gênio de 10 mil anos de idade, o plebeu Aladdin e a inteligente Princesa Jasmine se juntam para enfrentar o malvado feiticeiro Jafar!', 1992, '1h 34min', 'https://wallpapers.com/images/hd/aladdin-background-hpp6gt3rp76j1n48.jpg', '2024-11-12 23:33:49'),
(20, 'A Bela e a Fera', 'fera', 'L', 'Embarque numa aventura épica com a Bela, a Fera e todos os personagens que você ama, e com suas músicas inesquecíveis.', 1991, '1h 32min', 'https://personaunesp.com.br/wp-content/uploads/2021/12/2-2.jpg', '2024-11-12 23:37:24'),
(21, 'A Invenção de Hugo Cabret', 'hugo', 'L', 'Ambientado na Paris dos anos 1930, um órfão que vive dentro das paredes de uma estação de trem se vê envolvido em um mistério envolvendo seu falecido pai e um autômato.', 2011, '2h 2min', 'https://m.media-amazon.com/images/S/pv-target-images/2f3e8e4716a98a2accd65684cbef5d65faedf5939f87c8f0a12e4e5b96f27116.jpg', '2024-11-12 23:41:07'),
(22, 'Batman Begins', 'batman', '14+', ' Em BATMAN BEGINS, o aclamado diretor Christopher Nolan (Amnésia) explora as origens do legendário CAVALEIRO DAS TREVAS.', 2005, '2h 20min', 'https://images2.alphacoders.com/145/thumb-1920-145882.jpg', '2024-11-12 23:46:06'),
(23, 'À Busca da Felicidade', 'felicidade', 'L', 'Will Smith estrela esta história comovente inspirada na história real de Chris Gardner, um vendedor de São Francisco que luta para construir um futuro para si e seu filho de 5 anos, Christopher (Jaden Smith).', 2007, '1h 57min', 'https://cdn.prod.website-files.com/60ff690cd7b0537edb99a29a/66afa790988c8a0149789df5_procuragrande.jpg', '2024-11-12 23:50:59'),
(24, 'The Limehouse Golem', 'Limehouse_Golem_', '18+', 'Limehouse, em Londres, vem sofrendo com uma onda de criminalidade e assassinatos que muitos acreditam ser obra de uma criatura sobrenatural. O Inspetor Kildare, da Scotland Yard, é chamado a orientar essa difícil investigação.', 2016, '1h 49min', 'https://image.tmdb.org/t/p/original/x9Jogr7lAtiAMyZH2sj6LECfeb6.jpg', '2024-11-13 00:59:07'),
(25, 'A Noite das Bruxas', 'Noite_Bruxas_', '12+', 'O detetive belga Hercule Poirot investiga um assassinato enquanto participa de uma sessão espírita de Halloween em um palazzo assombrado em Veneza, Itália.', 2023, '1h 43min', 'https://www.coxinhanerd.com.br/wp-content/uploads/2023/08/A-Noite-das-Bruxas-1.jpg', '2024-11-13 01:07:42'),
(26, 'Avatar', 'Avatar_', '12+', 'No exuberante mundo alienígena de Pandora vivem os Na\'vi, seres que parecem ser primitivos, mas são altamente evoluídos. Como o ambiente do planeta é tóxico, foram criados os avatares, corpos biológicos controlados pela mente humana que se movimentam livremente em Pandora. Jake Sully, um ex-fuzileiro naval paralítico, volta a andar através de um avatar e se apaixona por uma Na\'vi. Esta paixão leva Jake a lutar pela sobrevivência de Pandora.', 2009, '2h 42min', 'https://wallpapers.com/images/hd/avatar-pictures-vohr0oeq1ld3lpbp.jpg', '2024-11-13 01:12:14'),
(27, 'Gato de Botas 2: O Último Pedido', 'Gato_Botas2_', 'L', 'O mais destemido e adorado espadachim felino e amante-de-leche, Gato de Botas, está de volta em uma nova aventura do universo Shrek. Ele descobre que sua paixão pela aventura cobrou seu preço, pois por conta de seu gosto pelo perigo e pelo desrespeito à sua segurança, ele queimou oito de suas nove vidas, embora ele tenha perdido a conta pelo caminho.', 2022, '1h 42min', 'https://m.media-amazon.com/images/S/pv-target-images/bd72847e8c1e4e72f80cfb614ddc639866e4d96a2b1c8b93d474d31cf22791de.jpg', '2024-11-13 22:43:21'),
(28, 'Sing - Quem Canta Seus Males Espanta', '', 'L', 'Buster é um coala empolgado que decide criar uma competição de canto para aumentar os rendimentos de seu antigo teatro.', 2016, '1h 50min', 'https://wallpapercat.com/w/full/e/0/b/2095894-1920x1080-desktop-full-hd-sing-cartoon-wallpaper-photo.jpg', '2024-11-25 23:49:58'),
(29, 'O Rei do Show', '', '10+', 'P. T. Barnum, um homem que tem uma tendência natural de enganar seu público, decide montar um circo na esperança de ficar famoso. Durante sua saga, ele ainda precisa lidar com uma questão pendente em sua vida: a paixão cega pela cantora Jenny Lind.', 2017, '1h 45min', 'https://one-cinema.s3.sa-east-1.amazonaws.com/filmes/the-greatest-showman/26062020/1920/background-the-greatest-showman.jpg', '2024-11-26 00:02:27'),
(30, 'La La Land: Cantando Estações', '', 'L', 'O pianista Sebastian conhece a atriz Mia, e os dois se apaixonam perdidamente. Em busca de oportunidades para suas carreiras na competitiva Los Angeles, os jovens tentam fazer o relacionamento amoroso dar certo, enquanto perseguem fama e sucesso.', 2016, '2h 8min', 'https://images2.alphacoders.com/789/thumb-1920-789853.jpg', '2024-11-26 00:06:32'),
(31, 'Wonka', '', '10+', 'O jovem chocolateiro Willy Wonka tenta mudar o mundo com um delicioso pedaço de cada vez.', 2023, '1h 56min', 'https://rollingstone.com.br/media/uploads/2024/03/wonka-preludio-de-a-fantastica-fabrica-de-chocolate-estreia-na-max-foto-divulgacaowarner-bros-pictures.jpg', '2024-11-26 00:12:16'),
(32, 'Interestelar', '', '10+', 'Ele conta a história de uma equipe de astronautas que viaja através de um buraco de minhoca à procura de um novo lar para a humanidade. Os irmãos Christopher e Jonathan Nolan escreveram o filme unindo ideias do primeiro com um roteiro que o segundo havia escrito em 2007.', 2014, '2h 49min', 'https://wallpapers.com/images/hd/interstellar-astronaut-black-hole-art-krbcu1yoa8ss4x6k.jpg', '2024-11-26 00:15:57'),
(33, 'Distrito 9', '', '14+', 'Alienígenas chegam à Terra em busca de refúgio e passam a viver separados dos humanos em uma área na África do Sul chamada Distrito 9. Eles são comandados pela multinacional United, que não se importa com o bem-estar dos visitantes, mas se dispõe a tudo para dominar a tecnologia que eles possuem. Quando um agente em campo contrai um vírus que altera o seu DNA, o distrito passa a ser o único lugar em que ele pode se esconder.', 2009, '1h 52min', 'https://sm.ign.com/ign_hu/screenshot/default/4364d6217ea3098e5f45b357e5468496_q9ns.jpg', '2024-11-26 00:23:51'),
(34, 'O Lobo Atrás da Porta', '', '16+', 'Uma criança é sequestrada e seus pais, Bernardo e Sylvia, decidem ir até a delegacia. O delegado resolve interrogá-los separadamente e descobre que Bernardo tinha uma amante, Rosa, que também é levada ao local para averiguações. A partir de depoimentos do trio, o delegado descobre uma rede de mentiras, amor, vingança e ciúmes.', 2013, '1h 40min', 'https://play-lh.googleusercontent.com/proxy/LaYtvlR3Oo-Eepvndjvawn7_l8HKKHGToW3xkP45YcAiVT44gVa37_A3Oc786ckmiDvJe_h3XY833sExRKkxx4dBSZ7HoUpJK5Rl3tx7G2bYBpVApJCH0rtBzQ=s1920-w1920-h1080', '2024-11-26 00:27:33'),
(35, 'Instinto Assassino', '', '16+', 'Um ex-condenado e sociopata reformado viaja para uma ilha remota para descobrir a verdade sobre a misteriosa morte de seu irmão, mas acaba entrando em conflito com um grupo de mercenários.', 2021, '1h 39min', 'https://assets.folhavitoria.com.br/images/db4f08a0-db71-11ec-a238-17bdc8b963ce--minified.png', '2024-11-26 00:30:39'),
(36, 'Hush: A Morte Ouve', '', '16+', 'A escritora Maddie Toung vive uma vida isolada desde que perdeu sua audição quando era adolescente, se colando em um mundo de total silêncio. Porém, quando um rosto mascarado de um assassino psicótico aparece em sua janela, Maddie precisa ir além dos seus limites físicos e mentais para conseguir sobreviver.', 2016, '1h 27min', 'https://cinesequencia.wordpress.com/wp-content/uploads/2017/01/hush_trailer1.jpg?w=1920&h=1080&crop=1', '2024-11-26 00:37:49'),
(37, 'Insidious', '', '12+', ' A família Lambert, formada por Josh (Patrick Wilson), Renai (Rose Byrne) e os filhos Dalton (Ty Simpkins) e Foster (Andrew Astor), acaba de se mudar. Logo, uma das crianças entra em coma de forma inexplicável, o que faz os pais pensarem que a nova casa abriga algum tipo de espírito do mal.', 2010, '1h 43min', 'https://images4.alphacoders.com/804/804804.jpg', '2024-11-26 00:41:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme_categoria`
--

CREATE TABLE `filme_categoria` (
  `filme_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `filme_categoria`
--

INSERT INTO `filme_categoria` (`filme_id`, `categoria_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 4),
(2, 5),
(3, 2),
(3, 3),
(3, 4),
(4, 6),
(4, 7),
(5, 1),
(5, 3),
(5, 4),
(6, 1),
(6, 4),
(6, 8),
(7, 4),
(7, 8),
(7, 9),
(8, 6),
(8, 8),
(9, 1),
(9, 5),
(10, 3),
(10, 4),
(11, 3),
(11, 4),
(12, 3),
(12, 4),
(13, 8),
(13, 9),
(13, 10),
(14, 1),
(14, 3),
(14, 4),
(15, 4),
(15, 11),
(15, 12),
(16, 1),
(16, 3),
(16, 4),
(17, 1),
(17, 8),
(18, 1),
(18, 4),
(18, 11),
(19, 3),
(19, 4),
(19, 11),
(20, 4),
(20, 7),
(20, 11),
(21, 3),
(21, 6),
(22, 1),
(22, 4),
(23, 6),
(24, 8),
(24, 9),
(24, 10),
(25, 6),
(25, 8),
(25, 10),
(26, 1),
(26, 5),
(27, 2),
(27, 3),
(27, 11),
(28, 6),
(28, 12),
(29, 2),
(29, 7),
(29, 12),
(30, 7),
(30, 12),
(31, 4),
(31, 12),
(32, 3),
(32, 5),
(33, 1),
(33, 5),
(34, 6),
(34, 8),
(34, 10),
(35, 1),
(35, 8),
(35, 10),
(36, 6),
(36, 9),
(37, 9),
(37, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `nome_cartao` varchar(100) NOT NULL,
  `numero_cartao_hash` varchar(255) NOT NULL,
  `validade_ano` varchar(255) NOT NULL,
  `validade_mes` varchar(255) NOT NULL,
  `data_pagamento` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `idade` varchar(255) NOT NULL,
  `temporada` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `imagem_url` varchar(255) DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `series`
--

INSERT INTO `series` (`id`, `titulo`, `idade`, `temporada`, `descricao`, `ano`, `imagem_url`, `criado_em`) VALUES
(1, 'Lúcifer', '14+', '6 temporadas', 'Entediado com a vida nas trevas, Lucifer se muda para Los Angeles, abre um bar e faz amizade com uma investigadora da polícia.', 2016, 'https://images8.alphacoders.com/115/thumb-1920-1159526.jpg', '2024-10-30 22:21:00'),
(2, 'O Gambito da Rainha', '16+', '1 temporada', 'Uma órfã prodígio do xadrez luta contra vícios enquanto enfrenta os maiores enxadristas do mundo.', 2020, 'images/top-10/02.jpg', '2024-11-03 03:03:31'),
(3, 'The Boys', '18+', '4 temporadas', 'Foi um ano de calma. Homelander está subjugado. Butcher trabalha para o governo, supervisionado por Hughie, de todas as pessoas. Mas ambos os homens anseiam por transformar essa paz e tranquilidade em sangue e osso. Então, quando os garotos descobrem uma misteriosa arma anti-Supe, isso os faz colidir com os Sete, iniciando uma guerra e perseguindo a lenda do primeiro super-herói: Soldier Boy.', 2022, 'https://t2.tudocdn.net/628463?w=1920&h=1080', '2024-11-04 22:13:08'),
(4, 'Game of Thrones', '16+', '8 temporadas', 'Quem se senta no trono de ferro controla os sete reinos. Game of Thrones segue a luta das famílias nobres que cobiçam esse poder.', 2011, 'https://images.hdqwalls.com/download/khaleesi-game-of-thrones-5k-k4-1920x1080.jpg', '2024-11-04 22:51:15'),
(5, 'The Witcher', '18+', '3 temporadas', 'O mutante Geralt de Rívia é um caçador de monstros que luta para encontrar seu lugar em um mundo onde as pessoas, muitas vezes, são mais perversas do que as criaturas selvagens.', 2019, 'https://images3.alphacoders.com/132/1321784.jpeg', '2024-11-04 23:46:48'),
(6, 'Peaky Blinders', '16+', '6 temporadas', 'Uma notória gangue da Inglaterra de 1919 ascende no submundo liderada pelo cruel Tommy Shelby, um criminoso disposto a subir na vida a qualquer preço.', 2013, 'images/top-10/06.jpg', '2024-11-11 22:01:20'),
(7, 'The Last of US', '16+', '1 Temporada', ' A jornada brutal de um homem cínico e uma garota de 14 anos enquanto cruzam os Estados Unidos, dependendo apenas um do outro para sobreviver.', 2023, 'https://gizmodo.uol.com.br/wp-content/blogs.dir/8/files/2023/02/3KTQ3QQTPFHG7DJQIV73YVG5DI.jpg', '2024-11-11 22:48:56'),
(8, 'Primal', '16+', '2 Temporadas', 'Primal apresenta um homem das cavernas na aurora da evolução e um dinossauro à beira da extinção.', 2019, 'https://media.cdn.adultswim.com/uploads/20220720/thumbnails/2_22720832274-Primal_012_ShadowOfFate.png', '2024-11-11 23:19:34'),
(9, 'Band of Brothers', '14+', '1 Temporada', 'Minissérie em dez capítulos que mostra a trajetória dos integrantes do grupo de elite de paraquedistas americanos na Segunda Guerra Mundial.', 2001, 'https://beam-images.warnermediacdn.com/BEAM_LWM_DELIVERABLES/6a0a0227-f567-46ba-9a2d-04374c5f6193/bcbf98d4-9550-11ef-ba19-12e5ea7fe80b?host=wbd-images.prod-vod.h264.io&partner=beamcom', '2024-11-11 23:29:32'),
(10, 'Wandinha', '16+', '1 Temporada', 'Inteligente, sarcástica e apática, Wandinha Addams pode estar meio morta por dentro, mas na Escola Nunca Mais ela vai fazer amigos, inimigos e investigar assassinatos.', 2022, 'https://img.ibxk.com.br/2024/05/08/08103153516051.jpg?ims=328x', '2024-11-11 23:35:16'),
(11, 'Pacificador', '16+', '1 Temporada', 'Pacificador explora origens do personagem de John Cena em \"O Esquadrão Suicida\": um homem vaidoso que acredita na paz a qualquer custo.', 2022, 'https://cinebuzz.com.br/media/uploads/2024/09/pacificador-james-gunn-confirma-previsao-de-estreia-da-2a-temporada.jpg', '2024-11-11 23:45:25'),
(12, 'A Casa do Dragão', '16+', '2 Temporadas', 'Os apoiadores de Aegon Targaryen entram em conflito com os adeptos de sua meia-irmã, Rhaenyra, pelo trono de Viserys I, seu falecido pai, iniciando uma guerra civil cerca de 200 anos antes dos eventos retratados em \"Game of Thrones\".', 2022, 'https://img.odcdn.com.br/wp-content/uploads/2024/06/casa-do-dragao-1.jpg', '2024-11-11 23:59:24'),
(13, 'O Senhor dos Anéis: Os Anéis de Poder', '14+', '2 Temporadas', 'Sauron retornou… com planos de governar toda a Terra-média.', 2022, 'https://rollingstone.com.br/media/uploads/2024/08/o-senhor-dos-aneis-os-aneis-de-poder-retorna-com-episodios-de-sua-2a-temporada.jpg', '2024-11-12 22:30:22'),
(14, 'Além da Margem', '14+', '2 Temporadas', 'Um fazendeiro lutando por suas terras e família descobre um mistério insondável nos limites da natureza selvagem do Wyoming.', 2022, 'https://m.media-amazon.com/images/S/pv-target-images/7baa231dbf5c1be015192a6762624e98895c21c6dfb4247f0493bda3eb9252e6.jpg', '2024-11-12 22:45:53'),
(15, 'Vikings', '16+', '6 temporadas', 'A série acompanha a saga dos navegadores nórdicos que exploram - e conquistam - novos territórios nos tempos medievais.', 2013, 'https://c.wallhere.com/photos/a6/d5/1920x1080_px_Vikings_TV_Series-590687.jpg!d', '2024-11-18 23:15:54'),
(16, 'Gotham', '14+', '5 temporadas', 'O tenente James Gordon chega a Gotham com o intuito de combater a corrupção. Gordon tenta fazer a diferença e começa investigando o assassinato de Thomas e Martha Wayne, cujas mortes deixaram órfão seu filho Bruce.', 2014, 'https://cloud.estacaonerd.com/wp-content/uploads/2018/10/08100826/gotham.jpg', '2024-11-19 00:00:27'),
(17, 'The Crown', '16+', '6 temporadas', 'Uma crônica da vida da Rainha Elizabeth II dos anos 1940 aos tempos modernos. Com o passar das décadas, intrigas pessoais, romances e rivalidades políticas foram revelados e ajudaram a moldar o século XX.', 2016, 'images/trending/01.jpg', '2024-11-19 00:39:24'),
(18, 'Sherlock', '14+', '', 'As aventuras de Sherlock Holmes e do Doutor Watson chegam à Londres do século XXI.', 2010, 'https://www.pbs.org/wgbh/masterpiece/wp-content/uploads/2024/06/sherlock-pbs-passport-1920x1080-1-1920x1080.jpg', '2024-11-19 23:25:20'),
(19, 'The Ones Who Live', '16+', '', 'Uma história de amor épica de duas pessoas mudadas por um mundo mudado, mantidas separadas pela distância e um poder incontrolável. Rick e Michonne podem se encontrar e encontrar quem eles eram em um lugar diferente de qualquer outro que eles já conheceram? Sem o outro, eles estão vivos?', 2024, 'https://m.media-amazon.com/images/S/pv-target-images/fee4b36c1987336b86bc908d0b24e19c5d0c358f2e55c9529d560cb848917e06.jpg', '2024-11-19 23:48:11'),
(20, 'The Walking Dead: Cidade Morta', '18+', '', 'Maggie e Negan viajam para uma Manhattan pós-apocalíptica há muito tempo isolada do continente. A cidade em ruínas está cheia de mortos e moradores que fizeram de Nova York seu próprio mundo cheio de anarquia, perigo, beleza e terror.', 2023, 'https://m.media-amazon.com/images/S/pv-target-images/9f9bf946a96f7f72dfbb129729ad7d904bdec8521b6c2aa4a16b671bc4f3fb20.jpg', '2024-11-19 23:56:35'),
(21, 'HALO', '16+', '', 'Um drama de ficção científica ricamente imaginado e humano, ambientado na colonização interestelar do século XVI.', 2022, 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgmoSuIzOghQQgpRjOzSPlZtOE76E82Yhzg9mEsgkHgY21hUjFgFFDN9C57WH7MqUTSZYc_xuP0I8q8sZ1uRtW3LDkuJdlPROd74fNTGrcL15rgXN1gt8Q0uH9QArn8T3IZDzxh9P8dbOjd7GIrI1yHr5PpKEp1Wf1UGvI7SFTdrhenLscVWZiKh0aBAuE/s1920/', '2024-11-20 00:07:42'),
(22, 'Rick e Morty', '16+', '', 'Uma premiada série de comédia animada que acompanha as façanhas excêntricas de um cientista louco chamado Rick Sanchez e seu neto impressionável, Morty Smith. Juntos, a dupla viaja pelo tempo e espaço em uma série de desventuras coloridas.', 2013, 'https://cloudfront-us-east-1.images.arcpublishing.com/estadao/QYEXGG4WFFMZTKYACICRZTIDME.jpg', '2024-11-20 00:18:27'),
(23, 'Coragem, o Cão Covarde', 'L', '', 'Coragem é um cão tímido que deve defender o casal de idosos, com quem vive, de elementos paranormais que ameaçam a sua casa.', 1999, 'https://wallpapers.com/images/hd/courage-the-cowardly-dog-rqh5yefvbjwffjft.jpg', '2024-11-20 00:43:17'),
(24, 'Suits', '14+', '9 temporadas', 'Harvey Specter e sua equipe enfrentam uma disputa pelo poder quando um novo sócio chega à firma. Com a ausência de dois dos seus melhores associados e Jessica retornando a Chicago, eles tentam se adaptar à nova realidade. Ao longo do processo, surgem traições, relações intensas e segredos revelados, enquanto velhas e novas rivalidades se intensificam entre os membros da equipe.', 2011, 'https://wallpapercave.com/wp/wp2732715.jpg', '2024-11-20 21:39:46'),
(25, 'Locke e Key', '14+', '3 temporadas', 'Após o assassinato do pai, três irmãos se mudam com a mãe para uma casa antiga onde descobrem chaves mágicas que revelam poderes e segredos.', 2020, 'https://wallpapercat.com/w/full/1/3/f/2185211-1920x1080-desktop-full-hd-locke-and-key-tv-series-background-photo.jpg', '2024-11-20 22:11:29'),
(26, 'Round 6', '18+', '1 temporada', 'Um grupo de pessoas passando por dificuldades financeiras aceita um estranho convite para um jogo de sobrevivência. Um prêmio bilionário os aguarda, mas as apostas são altas e mortais.', 2021, 'https://cinebuzz.com.br/media/uploads/2024/09/round-6-ganha-poster-oficial-da-2a-temporada-e-data-do-teaser.jpg', '2024-11-20 22:22:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `serie_categoria`
--

CREATE TABLE `serie_categoria` (
  `serie_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `serie_categoria`
--

INSERT INTO `serie_categoria` (`serie_id`, `categoria_id`) VALUES
(1, 4),
(1, 6),
(2, 6),
(3, 1),
(3, 2),
(3, 5),
(3, 6),
(4, 4),
(4, 5),
(4, 6),
(5, 1),
(5, 4),
(5, 6),
(6, 6),
(6, 8),
(6, 10),
(7, 4),
(7, 5),
(7, 6),
(8, 1),
(8, 4),
(8, 11),
(9, 1),
(9, 6),
(10, 2),
(10, 4),
(10, 10),
(11, 1),
(11, 2),
(12, 4),
(12, 5),
(12, 6),
(13, 1),
(13, 3),
(13, 4),
(13, 6),
(14, 6),
(14, 10),
(15, 3),
(16, 1),
(17, 6),
(18, 6),
(18, 8),
(19, 6),
(19, 8),
(20, 3),
(20, 5),
(20, 6),
(20, 8),
(21, 1),
(21, 3),
(21, 5),
(21, 8),
(22, 2),
(22, 3),
(22, 5),
(22, 11),
(23, 3),
(23, 11),
(24, 6),
(25, 4),
(25, 9),
(26, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_de_nascimento` date DEFAULT NULL,
  `plano` varchar(255) NOT NULL,
  `valor_plano` varchar(255) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp(),
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `nome_usuario`, `email`, `senha`, `data_de_nascimento`, `plano`, `valor_plano`, `criado_em`, `tel`) VALUES
(4, 'Voluptas quo quaerat', 'Dolor ', 'bossghost142@gmail.com', '$2y$10$k1WvcuzUGN/w6OLKuMgpXO5BMdnEGVBOkc9ApyFhTDsohRK65ecaa', NULL, 'Premium', '39,90/mensal', '2024-11-18 21:47:02', '(47) 9 9999-9999'),
(5, 'felipe weldt', 'felipe', 'felipeweldt535@gmail.com', '$2y$10$LrNARA1dENBtZxpJvTVFYuAjzNIMyRVaTi83Bpj0etENFT6XmTP8u', NULL, 'Premium', '39,90/mensal', '2024-11-19 23:01:26', '(47) 9 8836-7096'),
(6, 'Luan da Silva', 'Luan', 'luanabahvio@gmail.com', '$2y$10$1AMvRURTUCoJiBQdZ2Gf0uIFnDmhBZEgOoarlII9E4Vz3XuwFSDYu', NULL, 'Premium', '39,90/mensal', '2024-11-19 23:06:01', '(99) 9 9999-9999'),
(7, 'Carla de Souza', 'Carla', 'carlabahvio@gmail.com', '$2y$10$zgz8SLWb9as5npWmsZlc..BZblgsAV9gl/5pwQMWq1QwDH82Qonha', NULL, 'Premium', '39,90/mensal', '2024-11-19 23:08:24', '(99) 9 9999-9999'),
(8, 'Assumenda modi labor', 'Mollit', 'cazyjyd@mailinator.com', '$2y$10$T.X7lPs8ArxTWC9bzaucheokme/vm7C1zR1S8nh8O8/fLJh0BxCVe', NULL, 'Premium', '39,90/mensal', '2024-11-20 16:38:36', '(47) 9 9999-9999'),
(9, 'Ut rerum reiciendis ', 'Sit la', 'jiwelo@mailinator.com', '$2y$10$Yahv8ZExhoQSeLRhDiE/5ugVKG2ernKd/jlG8/pgdWQ5dr0vDTqBC', NULL, 'Premium', '39,90/mensal', '2024-11-20 19:10:00', '(47) 9 9999-9999'),
(10, 'Hic et deserunt in v', 'Minima ', 'cohepinoni@mailinator.com', '$2y$10$Ay8cKqUrIMovLkQHvXc5LuHkg4SKYj3ms/hDLy.Uaw7gmy..qSNuG', NULL, 'Standard', '24,90/mensal', '2024-11-20 21:29:56', '(47) 9 9999-9999'),
(11, 'guilherme da rocha', 'guizoio', 'guilherme.rocha.2708@gmail.com', '$2y$10$paIuLP4WEm.3lk3jyEEVt.930VG6WZIBZ.1TaV09TQFn9N5Jk6/Zy', NULL, 'Premium', '39,90/mensal', '2024-11-25 23:44:47', '(47) 9 9722-3780');

-- --------------------------------------------------------

--
-- Estrutura da tabela `verification_codes`
--

CREATE TABLE `verification_codes` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `used` tinyint(1) DEFAULT 0,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `filme_id` (`filme_id`),
  ADD KEY `serie_id` (`serie_id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `episodios`
--
ALTER TABLE `episodios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_episodios_serie` (`serie_id`);

--
-- Índices para tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `filme_id` (`filme_id`),
  ADD KEY `serie_id` (`serie_id`);

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `filme_categoria`
--
ALTER TABLE `filme_categoria`
  ADD PRIMARY KEY (`filme_id`,`categoria_id`),
  ADD KEY `fk_filme_categoria_categoria` (`categoria_id`);

--
-- Índices para tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices para tabela `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `serie_categoria`
--
ALTER TABLE `serie_categoria`
  ADD PRIMARY KEY (`serie_id`,`categoria_id`),
  ADD KEY `fk_serie_categoria_categoria` (`categoria_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `verification_codes`
--
ALTER TABLE `verification_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_verification_codes_email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `episodios`
--
ALTER TABLE `episodios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;

--
-- AUTO_INCREMENT de tabela `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `verification_codes`
--
ALTER TABLE `verification_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD CONSTRAINT `avaliacoes_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `avaliacoes_ibfk_2` FOREIGN KEY (`filme_id`) REFERENCES `filmes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `avaliacoes_ibfk_3` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `episodios`
--
ALTER TABLE `episodios`
  ADD CONSTRAINT `fk_episodios_serie` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`filme_id`) REFERENCES `filmes` (`id`),
  ADD CONSTRAINT `favoritos_ibfk_3` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`);

--
-- Limitadores para a tabela `filme_categoria`
--
ALTER TABLE `filme_categoria`
  ADD CONSTRAINT `fk_filme_categoria_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_filme_categoria_filme` FOREIGN KEY (`filme_id`) REFERENCES `filmes` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `pagamentos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `serie_categoria`
--
ALTER TABLE `serie_categoria`
  ADD CONSTRAINT `fk_serie_categoria_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_serie_categoria_serie` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `verification_codes`
--
ALTER TABLE `verification_codes`
  ADD CONSTRAINT `fk_verification_codes_email` FOREIGN KEY (`email`) REFERENCES `usuarios` (`email`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
