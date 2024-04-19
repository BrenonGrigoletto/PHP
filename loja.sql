-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Abr-2024 às 00:48
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cli`
--

CREATE TABLE `cli` (
  `id_cli` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cli`
--

INSERT INTO `cli` (`id_cli`, `nome`, `email`) VALUES
(1, 'João', 'joao@email.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_pedi`
--

CREATE TABLE `info_pedi` (
  `id_ped` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `qtd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `info_pedi`
--

INSERT INTO `info_pedi` (`id_ped`, `id_prod`, `qtd`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedi`
--

CREATE TABLE `pedi` (
  `id_ped` int(11) NOT NULL,
  `id_cli` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pedi`
--

INSERT INTO `pedi` (`id_ped`, `id_cli`, `id_prod`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prod`
--

CREATE TABLE `prod` (
  `id_prod` int(11) NOT NULL,
  `descri` varchar(100) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `prod`
--

INSERT INTO `prod` (`id_prod`, `descri`, `valor`) VALUES
(1, 'Camisa', '29.99');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cli`
--
ALTER TABLE `cli`
  ADD PRIMARY KEY (`id_cli`);

--
-- Índices para tabela `info_pedi`
--
ALTER TABLE `info_pedi`
  ADD PRIMARY KEY (`id_ped`,`id_prod`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Índices para tabela `pedi`
--
ALTER TABLE `pedi`
  ADD PRIMARY KEY (`id_ped`),
  ADD KEY `id_cli` (`id_cli`);

--
-- Índices para tabela `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cli`
--
ALTER TABLE `cli`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pedi`
--
ALTER TABLE `pedi`
  MODIFY `id_ped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `prod`
--
ALTER TABLE `prod`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `info_pedi`
--
ALTER TABLE `info_pedi`
  ADD CONSTRAINT `info_pedi_ibfk_1` FOREIGN KEY (`id_ped`) REFERENCES `pedi` (`id_ped`),
  ADD CONSTRAINT `info_pedi_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `prod` (`id_prod`);

--
-- Limitadores para a tabela `pedi`
--
ALTER TABLE `pedi`
  ADD CONSTRAINT `pedi_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `cli` (`id_cli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
