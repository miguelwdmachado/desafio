-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 28/01/2019 às 10:30
-- Versão do servidor: 5.7.24-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desafio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `datas_alteradas`
--

CREATE TABLE `datas_alteradas` (
  `id` int(11) NOT NULL,
  `dt_inicial` datetime NOT NULL,
  `alteracao` int(11) NOT NULL,
  `operacao` char(1) NOT NULL,
  `dt_final` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `datas_alteradas`
--

INSERT INTO `datas_alteradas` (`id`, `dt_inicial`, `alteracao`, `operacao`, `dt_final`) VALUES
(1, '2019-01-21 05:11:00', 4000, '+', '2019-01-23 23:51:00'),
(2, '2019-01-21 05:11:00', 4000, '-', '2019-01-18 10:31:00');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `datas_alteradas`
--
ALTER TABLE `datas_alteradas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `datas_alteradas`
--
ALTER TABLE `datas_alteradas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
