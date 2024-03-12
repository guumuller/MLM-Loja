-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/03/2024 às 23:18
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`CategoriaID`, `Nome`, `Ativo`) VALUES
(1, 'Guitarras', 1),
(2, 'Baixos', 1),
(3, 'Amplificadores', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `ProdutosID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` longtext NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `Preco` float NOT NULL,
  `CategoriaID` int(11) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`ProdutosID`, `Nome`, `Descricao`, `imagem`, `Preco`, `CategoriaID`, `Ativo`) VALUES
(1, 'Guitarra Steve Vai', 'Ibanez PIA 3761 Steve Vai Signature', 'stevevai.png\r\n', 1200, 1, 1),
(2, 'Guitarra George Harrison', 'G6128T-GH George Harrison Signature Duo Jet', 'georgeharrison.png', 3000, 1, 1),
(3, 'Guitarra Eric Johnson', 'Fender Stories Collection Eric Johnson 1954', 'ericjohnson.jpeg', 2500, 1, 1),
(4, 'Baixo Flea', 'O 61 Fender Jazz Bass', 'flea.png', 3000, 2, 2),
(5, 'Baixo', 'Baixo Preto', 'baixopreto.png', 2000, 2, 2),
(6, 'Baixo', 'Baixo Vermelho', 'baixovermelho.png', 2000, 2, 2),
(8, 'Amplificador', 'Amplificador Fender', 'amplifender.png', 3000, 3, 3),
(9, 'Amplificador', 'Amplificador Marshall', 'amplimarshall.png', 3500, 3, 3),
(10, 'Amplificador', 'Amplificador Meteoro', 'amplimeteoro.png', 3500, 3, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarioID` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(45) NOT NULL DEFAULT '',
  `Senha` varchar(45) NOT NULL DEFAULT '',
  `Email` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`usuarioID`, `Nome`, `Senha`, `Email`) VALUES
(1, 'Gustavo', '1234', 'gustavo@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ProdutosID`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarioID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ProdutosID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarioID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
