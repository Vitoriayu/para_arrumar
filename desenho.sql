-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Nov-2022 às 11:03
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desenho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

DROP TABLE IF EXISTS `mensagem`;
CREATE TABLE IF NOT EXISTS `mensagem` (
  `id_mensagem` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE ucs2_bin NOT NULL,
  `email` varchar(100) COLLATE ucs2_bin NOT NULL,
  `mensagem` text COLLATE ucs2_bin NOT NULL,
  `log` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=ucs2 COLLATE=ucs2_bin;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id_mensagem`, `nome`, `email`, `mensagem`, `log`) VALUES
(39, 'Dieimes', 'hrtdhh@dsfdsf', 'hgrh', '2022-11-24 07:44:09'),
(40, 'Dieimes NUnes', 'hrtdhh@sfdsdf', 'hgrh', '2022-11-24 07:57:27'),
(41, 'Dieimes NUness', 'hrtdhh@sfdsdf', 'hgrh', '2022-11-24 07:57:40'),
(38, 'thdth', 'hrtdhh', 'hgrh', '2022-11-24 07:36:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
