-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/11/2024 às 00:05
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
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `CodProduto` varchar(4) NOT NULL,
  `NomeProduto` varchar(70) NOT NULL,
  `Tipo` enum('Pacote','Unidade') DEFAULT NULL,
  `qtidadeProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`id`, `CodProduto`, `NomeProduto`, `Tipo`, `qtidadeProduto`) VALUES
(2, 'LP01', 'Lapis', 'Unidade', 10),
(3, 'BR01', 'Borracha', 'Unidade', 22),
(4, 'PC01', 'Papel Crepom Marrom', 'Unidade', 3),
(10, 'PE01', 'Papel EVA Vermelho', 'Unidade', 10),
(11, 'PE02', 'Papel EVA Azul', 'Unidade', 12),
(12, 'CS01', 'Papel Collor Set Branco', 'Unidade', 4),
(15, 'CA01', 'Caneta Preta', 'Unidade', 45),
(17, 'CA02', 'Caneta Azul', 'Unidade', 25),
(18, 'CS02', 'Papel Collor Set Preto', 'Unidade', 5),
(19, 'FS01', 'Folha Sulfite 500 fls', 'Pacote', 10),
(20, 'SP01', 'Saquinho Plastico A4 50 und', 'Pacote', 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `sala` varchar(50) NOT NULL,
  `professor` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `horario` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
