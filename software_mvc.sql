-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jul-2023 às 02:07
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `software_mvc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_pro` int(11) NOT NULL,
  `titulo_pro` varchar(300) NOT NULL,
  `descricao_pro` varchar(500) NOT NULL,
  `quantidade_pro` int(11) NOT NULL,
  `tipo_tipo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_produtos`
--

CREATE TABLE `tipos_produtos` (
  `id_tipo` int(11) NOT NULL,
  `titulo_tipo` varchar(300) NOT NULL,
  `descricao_tipo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_us` varchar(15) NOT NULL,
  `nome_us` varchar(250) NOT NULL,
  `email_us` varchar(250) NOT NULL,
  `senha_us` varchar(400) NOT NULL,
  `criacao_us` datetime NOT NULL,
  `tipo_us` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_us`, `nome_us`, `email_us`, `senha_us`, `criacao_us`, `tipo_us`) VALUES
('2a3d0e7d13a2e3A', 'Yan Pablo Rodrigues', 'yan.pablo205@gmail.com', 'cd8f0a1093818b673bbb58a622e0740a', '2023-07-13 23:02:16', 0),
('Y2d3a0e7A1Y9F00', 'PIB Presidente Venceslau', 'pib@gmail.com', '8903d70a4cc1be9f8f126572eb8e5a82', '2023-07-19 00:50:18', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `tipo_tipo` (`tipo_tipo`);

--
-- Índices para tabela `tipos_produtos`
--
ALTER TABLE `tipos_produtos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_us`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tipos_produtos`
--
ALTER TABLE `tipos_produtos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
