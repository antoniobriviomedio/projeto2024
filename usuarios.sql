-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 07/03/2024 às 22:53
-- Versão do servidor: 10.5.20-MariaDB
-- Versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id21898784_site2024`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `acesso` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `validador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `acesso`, `status`, `validador`) VALUES
(1, 'fffff', 'fffff', 'inserir senhaffff', 'inserir senhafff', 'inserir senhaffff', 123),
(2, 'aaaaaa', 'a', 'b', 'Usuário', 'aguardando', 123),
(3, 'wwww', 'www', 'eeee', 'Usuário', 'aguardando', 222210101),
(4, 'fddddd', 'dddd', '$2y$10$OdaNQcTaqmx7IAa2i4tuNOziwI1R8nJ8NcwpCvzM2XI0elfI3EtYy', 'Usuário', 'aguardando', 657496641),
(5, 'ana', 'ana', '$2y$10$M5I7qkgtZlLd7dE3PjZqNeBShD/CiqvgMC5SxuW/YIvZtl6HglSkS', 'Usuário', 'aguardando', 594898207);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
