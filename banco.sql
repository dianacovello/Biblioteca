-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Out-2018 às 03:57
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `obra`
--

CREATE TABLE `obra` (
  `id_obra` int(11) NOT NULL,
  `titulo_obra` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `autor_obra` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edicao_obra` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genero_obra` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ano_obra` int(11) DEFAULT NULL,
  `exemplar_obra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `matricula` int(11) NOT NULL DEFAULT '0',
  `login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `matricula`, `login`, `senha`) VALUES
(5, 'gustavo neves', 17411947, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'gustavo', 145526, 'gustavo@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'gustavo', 145526, 'gustavo@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`id_obra`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obra`
--
ALTER TABLE `obra`
  MODIFY `id_obra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
