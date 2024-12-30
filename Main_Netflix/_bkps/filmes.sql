-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Nov-2024 às 00:35
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
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `nome_video` varchar(30) NOT NULL,
  `genero_P` varchar(255) NOT NULL,
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

INSERT INTO `filmes` (`id`, `titulo`, `nome_video`, `genero_P`, `idade`, `descricao`, `ano`, `duracao`, `imagem_url`, `criado_em`) VALUES
(1, 'Deadpool & Wolverine', 'Deadpool_Wolverine_', 'Ação', '18+', 'Wolverine está se recuperando quando cruza seu caminho com Deadpool. Juntos, eles formam uma equipe e enfrentam um inimigo em comum.', 2024, '2h 7min', 'https://rollingstone.com.br/media/uploads/2024/04/5-destaques-do-novo-trailer-de-deadpool-wolverine-foto-reproducaomarvel-studios-4.jpg', '2024-10-29 01:55:13'),
(2, 'Animais Fantásticos: Os Segredos de Dumbledore', 'Segredos_Dumbledore_', 'Fantasia', '12+', 'O professor Albus Dumbledore sabe que o poderoso bruxo das trevas Gellert Grindelwald está se movendo para assumir o controle do mundo bruxo. Incapaz de detê-lo sozinho, ele confia a Newt Scamander um plano contra o inimigo.', 2022, '2h 23min', 'https://marte.art.br/marte/wp-content/uploads/2022/10/sa-out-4.jpg', '2024-10-29 01:55:13'),
(3, 'Piratas do Caribe: Navegando em Águas Misteriosas', 'Aguas_Misteriosas_', 'Aventura', '12+', 'O passado do capitão Jack Sparrow volta a alcançá-lo quando ele cruza com Angelica, uma bonita pirata que Jack, um dia, amou e depois abandonou. Ela, então, o força a acompanhá-la ao navio Vingança da Rainha Ana, do famoso Barba Negra. Junto com uma tripulação de zumbis, o trio parte em busca da lendária Fonte da Juventude. Mas o rival de Jack, Barbossa, também cobiça a fonte, assim como um navio espanhol.', 2011, '2h 21min', 'https://wallpapers.com/images/hd/eleitos-de-piratas-do-caribe-on-stranger-tides-gwtr676q8u9q4jh4.jpg', '2024-10-29 01:55:13'),
(4, 'A Cinco Passos de Você', 'Cinco_Passos_', 'Romance', '12+', 'Stella passa muito tempo no hospital por causa de uma fibrose cística. Lá, ela conhece Will, que sofre da mesma doença. Eles são obrigados a manter distância, mas mesmo assim se apaixonam.', 2019, '1h 57min', 'https://one-cinema.s3.sa-east-1.amazonaws.com/filmes/five-feet-apart/10062020/1920/background-five-feet-apart.jpg', '2024-10-29 01:55:13'),
(5, 'Doutor Estranho', 'Doutor_Estranho1_', 'Ação', '12+', 'Após sua carreira ser destruída, um brilhante, porém arrogante, cirurgião ganha uma nova chance em sua vida quando um feiticeiro o treina para se tornar o Mago Supremo.', 2016, '1h 55min', 'https://wallpapers.com/images/hd/doutor-estranho-super-heroi-1920-x-1080-8xjihu02rmxp4v89.jpg', '2024-10-29 01:55:13'),
(6, 'O Corvo', 'O_Corvo_', 'Ação', '18+', 'As almas gêmeas Eric Draven e Shelly Webster são brutalmente assassinadas quando os demônios de seu passado sombrio os alcançam. Atravessando os mundos dos vivos e dos mortos, Draven retorna em busca de vingança sangrenta contra os assassinos.', 2024, '1h 51min', 'https://cinebuzz.com.br/media/uploads/2024/08/o-corvo-adaptacao-moderna-do-cult-de-1994-estreia-nos-cinemas-brasileiros.jpg', '2024-10-29 01:55:13'),
(7, 'Os Observadores', 'Os_Observadores_', 'Terror', '14+', 'Mina, uma artista de 28 anos, se vê presa numa floresta intocada no oeste da Irlanda. Sem saber, ela e três estranhos são observados todas as noites por várias criaturas misteriosas.', 2024, '1h 42min', 'https://capitalfmradio.com.br/wp-content/uploads/2024/09/04154651927263-dtpmWv.jpeg', '2024-10-29 01:55:13'),
(8, 'Coringa', 'Coringa_', 'Drama', '16+', 'Isolado, intimidado e desconsiderado pela sociedade, o fracassado comediante Arthur Fleck inicia seu caminho como uma mente criminosa após assassinar três homens em pleno metrô. Sua ação inicia um movimento popular contra a elite de Gotham City, da qual Thomas Wayne é seu maior representante.', 2019, '2h 2min', 'https://www.vivaocinema.com.br/wp-content/uploads/2019/11/coringa-1.jpg', '2024-10-29 01:55:13'),
(9, 'Logan', 'Logan_', 'Ação', '16+', 'Em 2024, os mutantes estão em franco declínio, e as pessoas não sabem o real motivo. Uma organização está transformando as crianças mutantes em verdadeiras assassinas. Wolverine, cansado de tudo e a pedido de um cada vez mais enfraquecido Professor Xavier, precisa proteger a jovem e poderosa Laura Kinney, conhecida como X-23. Enquanto isso, o vilão Nathaniel Essex amplia seu projeto de destruição.', 2017, '2h 17min', 'https://i.pinimg.com/originals/6c/30/ac/6c30ac986c1ea64ad46b5267819d6502.jpg', '2024-10-29 01:55:13'),
(10, 'Dungeons & Dragons: Honra Entre Rebeldes', 'Dungeons_Dragons_', 'Ação', '12+', 'Um ladrão e um bando de aventureiros embarcam em uma jornada épica para recuperar uma relíquia.', 2023, '2h 14min', 'https://thumbnails.cbsig.net/CBS_Production_Entertainment_VMS/2023/11/23/2286720579513/PPMOV_DUNGEONSDRAGONSHONORAMONGTHIEVES_CLEAN_UHD_2438084_1920x1080.jpg', '2024-10-29 01:55:13'),
(11, 'Abigail e a Cidade Proibida', 'Cidade_Proibida_', 'Fantasia', '12+', 'A jovem Abigail vive em uma cidade cujas fronteiras foram fechadas há muitos anos devido a uma epidemia de uma doença misteriosa. Seu pai era um dos doentes - e ele foi levado quando ela tinha seis anos de idade. Indo contra as autoridades para encontrá-lo, ela descobre que sua cidade é realmente cheia de magia. E ela descobre em si mesma habilidades mágicas extraordinárias.', 2019, '1h 50min', 'https://image.tmdb.org/t/p/original/epWA8i3MoWfdgrR8E7UiodEQM8q.jpg', '2024-10-29 01:55:13'),
(12, 'O Hobbit: Uma Jornada Inesperada', 'O_Hobbit_', 'Aventura', '12+', 'Como a maioria dos hobbits, Bilbo Bolseiro leva uma vida tranquila até o dia em que recebe uma missão do mago Gandalf. Acompanhado por um grupo de anões, ele parte numa jornada até a Montanha Solitária para libertar o Reino de Erebor do dragão Smaug.', 2012, '2h 49min', 'https://play-lh.googleusercontent.com/proxy/WYcIwYRXg2ufva0DC0RyqIZ_6wnBPh6JnmlZMEXPCh84t2UIRW9EfPOxY6M_mDfObW7Cs2Bqk8xMNBVi70T5ffCkinqxCwWrhYImDET6y-VRjyeku3FQ-JQ=s1920-w1920-h1080', '2024-10-29 01:55:13'),
(13, 'Marrowbone', 'Marrowbone_', 'Terror', '18+', 'Devastados com a morte da mãe, quatro irmãos, em um estado crescente de depressão e paranoia, decidem se refugiar em um casarão decadente, tentando permanecer unidos. No entanto, o local esconde um obscuro e perigoso segredo que desafiará a união e a sobrevivência dos quatro.', 2017, '1h 50min', 'https://www.themoviedb.org/t/p/original/loQu6tBQvAGUM3QpXo0DzkJDSy0.jpg', '2024-10-29 01:55:13'),
(14, 'Homem-Aranha: Sem Volta para Casa', 'Homem_Aranha_S_', 'Ação', '12+', 'Peter Parker tem a sua identidade secreta revelada e pede ajuda ao Doutor Estranho. Quando um feitiço para reverter o evento não sai como o esperado, o Homem-Aranha e seu companheiro dos Vingadores precisam enfrentar inimigos de todo o multiverso.', 2021, '2h 28min', 'https://image.tmdb.org/t/p/original/tyQo080tijexyUHBvWPwQt26bZa.jpg', '2024-10-29 22:35:31'),
(15, 'Frozen - Uma Aventura Congelante', '_Frozen_', 'Fantasia', 'L', 'Acompanhada por um vendedor de gelo, a jovem e destemida princesa Anna parte em uma jornada por perigosas montanhas de gelo na esperança de encontrar sua irmã, a rainha Elsa, e acabar com a terrível maldição de inverno eterno, que está provocando o congelamento do reino.', 2013, '1h 42min', 'https://images7.alphacoders.com/674/thumb-1920-674391.jpg', '2024-10-29 23:53:28'),
(16, 'Donzela', 'Donzela_', 'Ação', '14+', 'Uma jovem concorda em se casar com um belo príncipe, apenas para descobrir que tudo não passou de uma armadilha. Ela é jogada em uma caverna com um dragão cuspidor de fogo e deve confiar apenas em sua inteligência e vontade para sobreviver.', 2024, '1h 50min', 'https://rollingstone.com.br/media/uploads/2024/03/donzela-filme-millie-bobby-brown-atriz-foto-john-wilson-netflix.jpg', '2024-10-30 00:55:22'),
(17, 'Através das Sombras', 'Atraves_Sombra_', 'Ação', '18+', 'Uma jovem assassina habilidosa desafia sua mentora para salvar um garoto de um terrível grupo criminoso. Ela está pronta para destruir quem ousar cruzar seu caminho.', 2024, '2h 24min', 'https://tm.ibxk.com.br/2024/10/21/21134617277162.jpg', '2024-10-30 01:08:41'),
(18, 'O Rei Leão', 'leão', 'Ação', 'L', 'Embarque na extraordinária aventura da chegada à puberdade de Simba, um leãozinho que mal pode esperar para ser rei e busca por seu destino no grande \"ciclo da vida\".', 1994, '1h 33min', 'https://wallpapers.com/images/hd/lion-king-pictures-hrlybnpo3o6ipxr0.jpg', '2024-11-12 23:30:47'),
(19, 'Aladdin', 'aladdin', 'Aventura', 'L', 'Um gênio de 10 mil anos de idade, o plebeu Aladdin e a inteligente Princesa Jasmine se juntam para enfrentar o malvado feiticeiro Jafar!', 1992, '1h 34min', 'https://wallpapers.com/images/hd/aladdin-background-hpp6gt3rp76j1n48.jpg', '2024-11-12 23:33:49'),
(20, 'A Bela e a Fera', 'fera', 'Fantasia', 'L', 'Embarque numa aventura épica com a Bela, a Fera e todos os personagens que você ama, e com suas músicas inesquecíveis.', 1991, '1h 32min', 'https://personaunesp.com.br/wp-content/uploads/2021/12/2-2.jpg', '2024-11-12 23:37:24'),
(21, 'A Invenção de Hugo Cabret', 'hugo', 'Aventura', 'L', 'Ambientado na Paris dos anos 1930, um órfão que vive dentro das paredes de uma estação de trem se vê envolvido em um mistério envolvendo seu falecido pai e um autômato.', 2011, '2h 2min', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiX5At4xuAROZ9vqoZWJd7_-K1b9MxPIIh9cHCpBaWTFL7zdqYPhSAji5t3dRgwSXuwZmo-pc5u4FBY2udUt1Q4hoIP-CYkKWbM0ZShPsVQAVdoGNIA84WUGQlpcjh3SbQ87xPm1muVzPPKiHMA8jHolrokzA-tIITquJLb1mswdl2pvCnyedA7EYRRpw/s1920/H', '2024-11-12 23:41:07'),
(22, 'Batman Begins', 'batman', 'Ação', '14+', ' Em BATMAN BEGINS, o aclamado diretor Christopher Nolan (Amnésia) explora as origens do legendário CAVALEIRO DAS TREVAS.', 2005, '2h 20min', 'https://images2.alphacoders.com/145/thumb-1920-145882.jpg', '2024-11-12 23:46:06'),
(23, 'À Busca da Felicidade', 'felicidade', 'Drama', 'L', 'Will Smith estrela esta história comovente inspirada na história real de Chris Gardner, um vendedor de São Francisco que luta para construir um futuro para si e seu filho de 5 anos, Christopher (Jaden Smith).', 2007, '1h 57min', 'https://cdn.prod.website-files.com/60ff690cd7b0537edb99a29a/66afa790988c8a0149789df5_procuragrande.jpg', '2024-11-12 23:50:59'),
(24, 'The Limehouse Golem', 'Limehouse_Golem_', 'Mistério', '18+', 'Limehouse, em Londres, vem sofrendo com uma onda de criminalidade e assassinatos que muitos acreditam ser obra de uma criatura sobrenatural. O Inspetor Kildare, da Scotland Yard, é chamado a orientar essa difícil investigação.', 2016, '1h 49min', 'https://image.tmdb.org/t/p/original/x9Jogr7lAtiAMyZH2sj6LECfeb6.jpg', '2024-11-13 00:59:07'),
(25, 'A Noite das Bruxas', 'Noite_Bruxas_', 'Mistério', '12+', 'O detetive belga Hercule Poirot investiga um assassinato enquanto participa de uma sessão espírita de Halloween em um palazzo assombrado em Veneza, Itália.', 2023, '1h 43min', 'https://www.coxinhanerd.com.br/wp-content/uploads/2023/08/A-Noite-das-Bruxas-1.jpg', '2024-11-13 01:07:42'),
(26, 'Avatar', 'Avatar_', 'Ficção Científica', '12+', 'No exuberante mundo alienígena de Pandora vivem os Na\'vi, seres que parecem ser primitivos, mas são altamente evoluídos. Como o ambiente do planeta é tóxico, foram criados os avatares, corpos biológicos controlados pela mente humana que se movimentam livremente em Pandora. Jake Sully, um ex-fuzileiro naval paralítico, volta a andar através de um avatar e se apaixona por uma Na\'vi. Esta paixão leva Jake a lutar pela sobrevivência de Pandora.', 2009, '2h 42min', 'https://wallpapers.com/images/hd/avatar-pictures-vohr0oeq1ld3lpbp.jpg', '2024-11-13 01:12:14'),
(27, 'Gato de Botas 2: O Último Pedido', 'Gato_Botas2_', 'Comédia', 'L', 'O mais destemido e adorado espadachim felino e amante-de-leche, Gato de Botas, está de volta em uma nova aventura do universo Shrek. Ele descobre que sua paixão pela aventura cobrou seu preço, pois por conta de seu gosto pelo perigo e pelo desrespeito à sua segurança, ele queimou oito de suas nove vidas, embora ele tenha perdido a conta pelo caminho.', 2022, '1h 42min', 'https://m.media-amazon.com/images/S/pv-target-images/bd72847e8c1e4e72f80cfb614ddc639866e4d96a2b1c8b93d474d31cf22791de.jpg', '2024-11-13 22:43:21');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
