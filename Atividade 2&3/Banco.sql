-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2017 às 00:04
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avalia03`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id_Comentario` int(11) NOT NULL,
  `comentario` text,
  `nota` int(11) DEFAULT NULL,
  `FK_Jogos_id_Jogo` int(11) DEFAULT NULL,
  `FK_Usuario_id_Usuario` int(11) NOT NULL,
  `dataComentario` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id_Comentario`, `comentario`, `nota`, `FK_Jogos_id_Jogo`, `FK_Usuario_id_Usuario`, `dataComentario`) VALUES
(2, 'TESTE SOM', 7, 1, 1, '2017-11-19'),
(3, 'SEGUNDO TESTE', 6, 1, 1, '2017-11-15'),
(6, 'TESTE', 6, 9, 1, NULL),
(7, 'TESTE', 10, 9, 1, NULL),
(11, 'TESTE', 4, 9, 5, '2017-11-30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `id_Jogo` int(10) NOT NULL,
  `nome_Jogo` varchar(42) DEFAULT NULL,
  `dataLanca` date DEFAULT NULL,
  `players` int(11) DEFAULT NULL,
  `descricao` text,
  `tag` text,
  `classificacao` int(11) DEFAULT NULL,
  `FK_Usuario_id_Usuario` int(10) DEFAULT NULL,
  `dataAddJogo` date DEFAULT NULL,
  `codLibera` int(11) NOT NULL DEFAULT '0',
  `nomeEstudio` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id_Jogo`, `nome_Jogo`, `dataLanca`, `players`, `descricao`, `tag`, `classificacao`, `FK_Usuario_id_Usuario`, `dataAddJogo`, `codLibera`, `nomeEstudio`) VALUES
(1, 'Age of Empires', '1997-10-15', 4, 'Controle sua tribo com o mouse. Faï¿½a-os construir casas, docas, fazendas e templos. Avance sua \r\ncivilizaï¿½ï¿½o atravï¿½s do tempo aprendendo novas habilidades. O jogo permite que o jogador avance \r\natravï¿½s das idades: idade da pedra, idade da ferramenta, idade do bronze. Se o jogador preferir ficar \r\nlonge do aspecto histï¿½rico, o jogo oferece um gerador de terreno aleatï¿½rio e um criador de cenï¿½rios \r\npersonalizado.', 'Estrategia', 10, 1, '2017-11-30', 1, 'Microsoft Studios'),
(9, 'Age of Empires 3', '2005-10-18', 4, 'The story-based campaign mode consists of related scenarios with preset objectives, such as destroying a given building. In Age of Empires III, the campaign follows the fictional Black family in a series of three "Acts", which divide the story arc into three generations. All three acts are narrated by Amelia Black (Tasia Valenza).  Instead of playing as one of the standard civilizations, the player takes command of a special civilization that is linked to the character or period that each Act portrays. Most units of the player civilizations speak in English language, with the exception of unique units such as Spanish Rodeleros, Spanish Lancers, German Ulhans and German War Wagons.', 'Estrategia', 10, 1, '2017-11-26', 1, 'Microsoft Studios'),
(11, 'Need For Speed', '2016-12-03', 1, 'Need for Speed is the 20th main title in the racing series and a reboot of the franchise. It is an open \r\nworld racing game set entirely at night that returns to the underground racing and tuning ', 'Corrida', 5, 5, '2017-11-30', 1, 'EA Games');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profiles`
--

CREATE TABLE `profiles` (
  `id_Profile` int(10) NOT NULL,
  `tipoProfile` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profiles`
--

INSERT INTO `profiles` (`id_Profile`, `tipoProfile`) VALUES
(1, 'root'),
(2, 'usuario'),
(3, 'admin'),
(4, 'unseted');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_Usuario` int(11) NOT NULL,
  `nome_Usuario` varchar(42) DEFAULT NULL,
  `senha` varchar(42) DEFAULT NULL,
  `usuario` varchar(42) DEFAULT NULL,
  `email` varchar(42) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `FK_Profiles_id_Profile` int(10) DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_Usuario`, `nome_Usuario`, `senha`, `usuario`, `email`, `dataNasc`, `FK_Profiles_id_Profile`) VALUES
(5, 'Usuario Teste', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user@user.com', '1990-09-09', 2),
(3, 'Matheus', '62c73adf7f7de2790eaf9e83cb13d481', 'MRossettiPQ', 'matheus@rossetti.com', '1995-11-09', 2),
(9, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@admin.com', '1990-10-01', 3),
(7, 'teste hash', '545a8da3eb2b740d612c13483e0fc115', 'hashtest', 'hash@hash.hash', '1999-11-09', 2),
(1, 'Root', '63a9f0ea7bb98050796b649e85481845', 'root', 'root@root', '1900-01-01', 1),
(16, 'autologin', 'fa601db603312cae18238ef43850effd', 'autologin', 'autologin@autologin', '9999-11-09', 2),
(23, 'autologin', 'fa601db603312cae18238ef43850effd', 'autologin4', 'autologin@autologin', '1995-11-09', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_Comentario`),
  ADD KEY `FK_Comentarios_1` (`FK_Jogos_id_Jogo`),
  ADD KEY `FK_Comentarios_2` (`FK_Usuario_id_Usuario`);

--
-- Indexes for table `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id_Jogo`),
  ADD KEY `FK_Jogos_1` (`FK_Usuario_id_Usuario`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id_Profile`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_Usuario`),
  ADD KEY `FK_Usuario_1` (`FK_Profiles_id_Profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_Comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id_Jogo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id_Profile` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
