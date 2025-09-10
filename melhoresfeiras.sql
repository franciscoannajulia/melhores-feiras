-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Fev-2020 às 18:24
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melhoresfeiras`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `CodAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `NomeAdmin` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Senha` varchar(10) NOT NULL,
  PRIMARY KEY (`CodAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`CodAdmin`, `NomeAdmin`, `Email`, `Login`, `Senha`) VALUES
(1, 'Anna', 'admin@gmail.com', 'aaa', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `feira`
--

DROP TABLE IF EXISTS `feira`;
CREATE TABLE IF NOT EXISTS `feira` (
  `CodFeira` int(11) NOT NULL AUTO_INCREMENT,
  `NomeFeira` varchar(500) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `Cidade` varchar(200) NOT NULL,
  `Setor` varchar(500) NOT NULL,
  `DataInicio` date NOT NULL,
  `DataFim` date NOT NULL,
  `Descricao` varchar(800) NOT NULL,
  `Capa` varchar(500) NOT NULL,
  `Contato` varchar(500) NOT NULL,
  `Realizador` varchar(100) NOT NULL,
  `Site` varchar(500) NOT NULL,
  PRIMARY KEY (`CodFeira`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `feira`
--

INSERT INTO `feira` (`CodFeira`, `NomeFeira`, `Estado`, `Cidade`, `Setor`, `DataInicio`, `DataFim`, `Descricao`, `Capa`, `Contato`, `Realizador`, `Site`) VALUES
(14, 'Agrishow 2020', 'São Paulo', 'Ribeirão Preto', 'Multisetor', '2020-04-27', '2020-05-01', 'Uma das maiores feiras agrícolas no mundo, a Agrishow reúne soluções para todos os tipos de culturas e tamanhos de propriedades, além de ser reconhecida como o palco dos lançamentos das principais tendências e inovações para o agronegócio.\r\n', 'img/capa/CpCatalogoAgrishow.jpg', 'Tel 40028922 Email ggg@mail.com', 'Roberto', 'agrishow.com.br');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
