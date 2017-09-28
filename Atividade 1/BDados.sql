-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 31-Ago-2017 às 21:15
-- Versão do servidor: 5.6.31-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avalia01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentarios` int(11) NOT NULL,
  `id_filmes` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id_comentarios`, `id_filmes`, `comentario`, `rating`) VALUES
(2, 1, 'This is Spielberg at his best. That is all I can say about E.T. ITs gripping, intelligent story mixed with its incredible symbolism makes it one of the best films ever made. E.T. is a story about friendship, loyalty, and family. But most of all it is about love, and how powerful love is', 5),
(3, 1, 'The brilliantly innovative shots mixed with John Williams epic score makes for a masterpiece, which E.T. certainly is', 4),
(4, 2, 'Acting? Its actually above average for a sci-fi flick', 3),
(5, 2, 'Paul Verhoeven, and the script, have their tongue lodged firmly in their cheek as they make this movie into a satire about the way our vales are changing', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE IF NOT EXISTS `filmes` (
  `id_filmes` int(11) NOT NULL,
  `nome` varchar(11) NOT NULL,
  `diretor` varchar(11) NOT NULL,
  `genero` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id_filmes`, `nome`, `diretor`, `genero`, `ano`) VALUES
(1, 'E.T. - O Ex', 'Steven Spie', 'Ficção', 1982),
(2, 'RoboCop', 'Paul Verhoe', 'Ação', 1987);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentarios`),
  ADD KEY `id_filmes` (`id_filmes`);

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id_filmes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id_filmes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_filmes`) REFERENCES `filmes` (`id_filmes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;