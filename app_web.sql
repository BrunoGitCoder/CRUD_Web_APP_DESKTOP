-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/06/2025 às 17:17
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `app_web`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `score` double NOT NULL,
  `category` varchar(255) NOT NULL,
  `img_small` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `movie`
--

INSERT INTO `movie` (`movie_id`, `title`, `description`, `score`, `category`, `img_small`) VALUES
(1, '300', 'Espartanos enfrentam um império com coragem e honra.', 0, 'Ação', '300_small.png'),
(2, '12 Years a Slave', 'A luta real de um homem negro sequestrado e escravizado.', 0, 'Drama', '12_years_slave_small.png'),
(3, '13th', 'Análise crítica sobre o sistema prisional dos EUA e racismo.', 0, 'Documentário', '13th_small.png'),
(4, 'A Beautiful Mind', 'A genialidade e a luta contra a esquizofrenia de um matemático.', 0, 'Drama', 'beautiful_mind_small.png'),
(5, 'A Quiet Place', 'Família precisa sobreviver em silêncio para evitar monstros.', 0, 'Terror', 'quiet_place_small.png'),
(6, 'A Walk to Remember', 'Um adolescente rebelde se apaixona por uma garota religiosa.', 0, 'Romance', 'walk_to_remember_small.png'),
(7, 'Alice in Wonderland', 'Uma garota cai em um mundo excêntrico com criaturas bizarras.', 0, 'Fantasia', 'alice_wonderland_small.png'),
(8, 'Anchorman', 'Um apresentador luta por relevância em meio à concorrência.', 0, 'Comédia', 'anchorman_small.png'),
(9, 'Arrival', 'Linguista tenta se comunicar com alienígenas recém-chegados à Terra.', 0, 'Ficção', 'arrival_small.png'),
(10, 'Avengers: Endgame', 'Os heróis se unem para reverter o estalo de Thanos.', 0, 'Ação', 'avengers_endgame_small.png'),
(11, 'Blackfish', 'Mostra os perigos do cativeiro de orcas em parques aquáticos.', 0, 'Documentário', 'blackfish_small.png'),
(12, 'Blade Runner 2049', 'Um agente descobre segredos que podem mudar o mundo.', 0, 'Ficção', 'blade_runner_small.png'),
(13, 'Borat', 'Um repórter cazaque documenta a cultura americana de forma satírica.', 0, 'Comédia', 'borat_small.png'),
(14, 'Bridesmaids', 'Rivalidade entre amigas antes de um casamento.', 0, 'Comédia', 'bridesmaids_small.png'),
(15, 'Cowspiracy', 'Impacto da agropecuária no meio ambiente.', 0, 'Documentário', 'cowspiracy_small.png'),
(16, 'Dead Poets Society', 'Professor inspira alunos a pensarem por si mesmos.', 0, 'Drama', 'dead_poets_small.png'),
(17, 'Dear John', 'Um soldado e uma jovem trocam cartas enquanto enfrentam a distância.', 0, 'Romance', 'dear_john_small.png'),
(18, 'Die Hard', 'Um policial enfrenta terroristas em um prédio durante o Natal.', 0, 'Ação', 'die_hard_small.png'),
(19, 'District 9', 'Humanos lidam com uma população alienígena marginalizada.', 0, 'Ficção', 'district9_small.png'),
(20, 'Dumb and Dumber', 'Dois amigos atrapalhados viajam pelos EUA.', 0, 'Comédia', 'dumb_dumber_small.png'),
(21, 'Dune', 'Um jovem nobre precisa sobreviver em um planeta desértico perigoso.', 0, 'Ficção', 'dune_small.png'),
(22, 'Eragon', 'Um fazendeiro encontra um ovo de dragão e se torna cavaleiro.', 0, 'Fantasia', 'eragon_small.png'),
(23, 'Ex Machina', 'Um programador testa uma inteligência artificial com consciência.', 0, 'Ficção', 'ex_machina_small.png'),
(24, 'Fantastic Beasts', 'Um magizoologista coleciona criaturas mágicas na década de 1920.', 0, 'Fantasia', 'fantastic_beasts_small.png'),
(25, 'Fight Club', 'Dois homens fundam um clube secreto de lutas.', 0, 'Drama', 'fight_club_small.png'),
(26, 'Forrest Gump', 'Um homem simples vive momentos marcantes da história dos EUA.', 0, 'Drama', 'forrest_gump_small.png'),
(27, 'Free Solo', 'Escalada sem cordas da montanha El Capitan.', 0, 'Documentário', 'free_solo_small.png'),
(28, 'Get Out', 'Jovem negro descobre segredos sinistros na casa da namorada branca.', 0, 'Terror', 'get_out_small.png'),
(29, 'Gladiator', 'Um general romano busca vingança como gladiador.', 0, 'Ação', 'gladiator_small.png'),
(30, 'Gravity', 'Astronauta luta para sobreviver após acidente no espaço.', 0, 'Ficção', 'gravity_small.png'),
(31, 'Harry Potter and the Sorcerer’s Stone', 'Um garoto descobre que é um bruxo e vai para uma escola mágica.', 0, 'Fantasia', 'harry_potter1_small.png'),
(32, 'Hereditary', 'Família é assombrada por segredos e eventos sobrenaturais.', 0, 'Terror', 'hereditary_small.png'),
(33, 'I Am Legend', 'Cientista sobrevive em um mundo pós-pandemia.', 0, 'Ficção', 'i_am_legend_small.png'),
(34, 'Inception', 'Um ladrão invade sonhos para roubar segredos corporativos.', 0, 'Ação', 'inception_small.png'),
(35, 'Interstellar', 'Astronautas viajam por um buraco de minhoca para salvar a humanidade.', 0, 'Ficção', 'interstellar_small.png'),
(36, 'Into the Wild', 'Jovem abandona tudo e viaja pelos EUA em busca de liberdade.', 0, 'Aventura', 'into_the_wild_small.png'),
(37, 'It', 'Um palhaço macabro aterroriza crianças em uma pequena cidade.', 0, 'Terror', 'it_small.png'),
(38, 'John Wick', 'Um ex-assassino busca vingança após perder seu cachorro.', 0, 'Ação', 'john_wick_small.png'),
(39, 'Jumanji: Welcome to...', 'Jovens ficam presos em um jogo perigoso na selva.', 0, 'Aventura', 'jumanji_small.png'),
(40, 'King Kong', 'Um grupo captura um gorila gigante em uma ilha misteriosa.', 0, 'Aventura', 'king_kong_small.png'),
(41, 'La La Land', 'Um músico e uma atriz se apaixonam em Los Angeles.', 0, 'Romance', 'la_la_land_small.png'),
(42, 'Life of Pi', 'Um jovem sobrevive no oceano com um tigre de bengala.', 0, 'Aventura', 'life_of_pi_small.png'),
(43, 'Love Actually', 'Várias histórias de amor interligadas em Londres.', 0, 'Romance', 'love_actually_small.png'),
(44, 'Mad Max: Fury Road', 'Em um mundo pós-apocalíptico, um guerreiro e uma rebelde lutam por justiça.', 0, 'Ação', 'mad_max_small.png'),
(45, 'Making a Murderer', 'Caso polêmico de condenação injusta nos EUA.', 0, 'Documentário', 'making_murderer_small.png'),
(46, 'Me Before You', 'Uma cuidadora se envolve com um tetraplégico rico.', 0, 'Romance', 'me_before_you_small.png'),
(47, 'Mission: Impossible', 'Um agente especial enfrenta traições em missões arriscadas.', 0, 'Ação', 'mission_impossible_small.png'),
(48, 'My Octopus Teacher', 'Um cineasta cria laço com um polvo na África do Sul.', 0, 'Documentário', 'octopus_teacher_small.png'),
(49, 'Napoleon Dynamite', 'Um adolescente esquisito tenta ajudar seu amigo a se eleger.', 0, 'Comédia', 'napoleon_small.png'),
(50, 'Night on Earth', 'Documenta o comportamento de animais durante a noite.', 0, 'Documentário', 'night_earth_small.png'),
(51, 'Notting Hill', 'Um livreiro se apaixona por uma atriz famosa.', 0, 'Romance', 'notting_hill_small.png'),
(52, 'Pan’s Labyrinth', 'Uma jovem encontra criaturas fantásticas em meio à guerra civil espanhola.', 0, 'Fantasia', 'pans_labyrinth_small.png'),
(53, 'Paranormal Activity', 'Câmeras registram fenômenos sobrenaturais em uma casa.', 0, 'Terror', 'paranormal_small.png'),
(54, 'Percy Jackson & The Olympians', 'Jovem semideus descobre seus poderes e entra em guerra mitológica.', 0, 'Fantasia', 'percy_jackson_small.png'),
(55, 'Pirates of the Caribbean', 'Um pirata excêntrico embarca em aventuras em alto-mar.', 0, 'Aventura', 'pirates_caribbean_small.png'),
(56, 'Pride & Prejudice', 'Uma jovem enfrenta convenções sociais e encontra o amor verdadeiro.', 0, 'Romance', 'pride_prejudice_small.png'),
(57, 'Ready Player One', 'Um gamer enfrenta desafios em um mundo virtual de realidade aumentada.', 0, 'Ficção', 'ready_player_one_small.png'),
(58, 'Schindler\'s List', 'Um empresário salva judeus durante o Holocausto.', 0, 'Drama', 'schindlers_list_small.png'),
(59, 'Seaspiracy', 'Investigação sobre pesca industrial e vida marinha.', 0, 'Documentário', 'seaspiracy_small.png'),
(60, 'Sinister', 'Escritor encontra vídeos perturbadores em casa nova.', 0, 'Terror', 'sinister_small.png'),
(61, 'Stardust', 'Jovem atravessa um muro mágico em busca de uma estrela caída.', 0, 'Fantasia', 'stardust_small.png'),
(62, 'Step Brothers', 'Dois adultos imaturos se tornam meio-irmãos.', 0, 'Comédia', 'step_brothers_small.png'),
(63, 'Superbad', 'Dois adolescentes em busca da festa perfeita.', 0, 'Comédia', 'superbad_small.png'),
(64, 'The 40-Year-Old Virgin', 'Um homem tenta perder a virgindade aos 40 anos.', 0, 'Comédia', '40_year_old_virgin_small.png'),
(65, 'The Babadook', 'Criatura sombria aparece após leitura de livro infantil.', 0, 'Terror', 'babadook_small.png'),
(66, 'The Chronicles of Narnia', 'Crianças entram em um mundo mágico e enfrentam a Feiticeira Branca.', 0, 'Fantasia', 'narnia_small.png'),
(67, 'The Conjuring', 'Casal de investigadores enfrenta uma presença demoníaca.', 0, 'Terror', 'conjuring_small.png'),
(68, 'The Dark Knight', 'Batman enfrenta o caos instaurado pelo Coringa.', 0, 'Ação', 'dark_knight_small.png'),
(69, 'The Fault in Our Stars', 'Dois jovens com câncer se apaixonam.', 0, 'Romance', 'fault_stars_small.png'),
(70, 'The Golden Compass', 'Jovem desafia uma sociedade opressiva em um universo paralelo.', 0, 'Fantasia', 'golden_compass_small.png'),
(71, 'The Green Mile', 'Guardas descobrem um prisioneiro com dons sobrenaturais.', 0, 'Drama', 'green_mile_small.png'),
(72, 'The Hangover', 'Três amigos acordam em Vegas sem memória e com problemas.', 0, 'Comédia', 'hangover_small.png'),
(73, 'The Jungle Book', 'Um garoto criado por lobos enfrenta perigos da selva.', 0, 'Aventura', 'jungle_book_small.png'),
(74, 'The Last Dance', 'A trajetória de Michael Jordan e os Bulls nos anos 90.', 0, 'Documentário', 'last_dance_small.png'),
(75, 'The Lord of the Rings', 'Um hobbit parte em uma missão para destruir um anel poderoso.', 0, 'Fantasia', 'lotr_small.png'),
(76, 'The Martian', 'Astronauta usa ciência para sobreviver em Marte.', 0, 'Ficção', 'martian_small.png'),
(77, 'The Matrix', 'Um programador descobre a verdade sobre a realidade.', 0, 'Ação', 'matrix_small.png'),
(78, 'The Notebook', 'Um casal vive um amor intenso com altos e baixos.', 0, 'Romance', 'notebook_small.png'),
(79, 'The Pianist', 'Um pianista judeu sobrevive à ocupação nazista em Varsóvia.', 0, 'Drama', 'pianist_small.png'),
(80, 'The Pursuit of Happyness', 'Um pai solteiro luta por uma vida melhor para seu filho.', 0, 'Drama', 'pursuit_happyness_small.png'),
(81, 'The Revenant', 'Um caçador luta para sobreviver após ser traído e atacado por um urso.', 0, 'Aventura', 'revenant_small.png'),
(82, 'The Ring', 'Uma fita amaldiçoada leva quem assiste à morte.', 0, 'Terror', 'ring_small.png'),
(83, 'The Secret Life of Walter Mitty', 'Um homem comum parte para uma jornada épica.', 0, 'Aventura', 'walter_mitty_small.png'),
(84, 'The Shawshank Redemption', 'Um homem inocente enfrenta décadas na prisão com esperança.', 0, 'Drama', 'shawshank_small.png'),
(85, 'The Social Dilemma', 'Ex-funcionários de techs revelam manipulações das redes sociais.', 0, 'Documentário', 'social_dilemma_small.png'),
(86, 'Titanic', 'Amor proibido em meio a uma tragédia no oceano.', 0, 'Romance', 'titanic_small.png'),
(87, 'Tomb Raider', 'Lara Croft parte em busca do paradeiro do pai desaparecido.', 0, 'Aventura', 'tomb_raider_small.png'),
(88, 'Tropic Thunder', 'Atores de guerra acabam em uma guerra real.', 0, 'Comédia', 'tropic_thunder_small.png'),
(89, 'Up', 'Um idoso voa para a América do Sul com balões e um escoteiro.', 0, 'Aventura', 'up_small.png'),
(90, 'Us', 'Família é atacada por sósias violentos.', 0, 'Terror', 'us_small.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL DEFAULT '123',
  `acess` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`user`, `pass`, `acess`) VALUES
('Admin', '$2y$10$ARqW8C8cjqFo34Hgi09niO9SL275xg/fBDEqhRJ7n9EYfGUZKA6t2', 'admin'),
('Bruno', '$2y$10$53BxqTiFv7oBPbgNO973vu6hvDM34JfJc87Y4Wg493RPmXCXfkA9a', 'user'),
('User', '$2y$10$bu12ZjWWKeis20bAHFpf.uIGkHPcYffgsUBSMeuQ4XhXl3z1QNMii', 'user');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
