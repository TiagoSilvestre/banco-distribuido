-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Nov-2016 às 22:57
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exercicio20`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairros`
--

CREATE TABLE `bairros` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bairros`
--

INSERT INTO `bairros` (`id`, `nome`) VALUES
(1, 'Centro'),
(2, 'Prospera');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`) VALUES
(1, 'Criciuma'),
(2, 'Sao Paulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `nome`) VALUES
(1, 'Santa Catarina'),
(2, 'Sao Paulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logradouros`
--

CREATE TABLE `logradouros` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `logradouros`
--

INSERT INTO `logradouros` (`id`, `nome`) VALUES
(1, 'Avenida Centenario'),
(2, 'Rua Humberto de Campos'),
(3, 'Rua Imigrantes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentos`
--

CREATE TABLE `movimentos` (
  `idMovimento` int(11) NOT NULL,
  `OperacaoMovimento` varchar(50) DEFAULT NULL,
  `siteMovimento` int(11) DEFAULT NULL,
  `dataMovimento` datetime DEFAULT NULL,
  `Pessoas_idPessoa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `movimentos`
--

INSERT INTO `movimentos` (`idMovimento`, `OperacaoMovimento`, `siteMovimento`, `dataMovimento`, `Pessoas_idPessoa`) VALUES
(1, 'INSERT', 1, '2016-11-11 20:25:22', 1),
(2, 'INSERT', 2, '2016-11-11 20:26:45', 2),
(3, 'UPDATE', 1, '2016-11-11 20:27:12', 2),
(4, 'INSERT', 1, '2016-11-11 20:44:28', 3),
(5, 'INSERT', 1, '2016-11-11 20:45:58', 4),
(6, 'UPDATE', 2, '2016-11-11 20:49:05', 3),
(7, 'INSERT', 1, '2016-11-11 20:51:46', 5),
(8, 'INSERT', 1, '2016-11-11 20:52:17', 6),
(9, 'INSERT', 2, '2016-11-11 20:52:33', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paises`
--

CREATE TABLE `paises` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paises`
--

INSERT INTO `paises` (`id`, `nome`) VALUES
(1, 'Brasil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `idPessoa` int(11) NOT NULL,
  `nomePessoa` varchar(50) DEFAULT NULL,
  `Logradouros_idLogradouro` int(11) NOT NULL,
  `Bairros_idBairro` int(11) NOT NULL,
  `Cidades_idCidade` int(11) NOT NULL,
  `Estados_idEstado` int(11) NOT NULL,
  `Paises_idPais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`idPessoa`, `nomePessoa`, `Logradouros_idLogradouro`, `Bairros_idBairro`, `Cidades_idCidade`, `Estados_idEstado`, `Paises_idPais`) VALUES
(1, 'Tiago Silvestre', 1, 1, 1, 1, 1),
(2, 'Jefferson da Silva', 2, 1, 1, 1, 1),
(3, 'Paulo Cardoso', 1, 2, 1, 1, 1),
(4, 'Paracelso', 3, 1, 2, 2, 1),
(5, 'Mariana Fernandes', 3, 1, 1, 1, 1),
(6, 'Fernanda Machdo', 1, 1, 1, 1, 1),
(7, 'Leobardo', 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bairros`
--
ALTER TABLE `bairros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logradouros`
--
ALTER TABLE `logradouros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movimentos`
--
ALTER TABLE `movimentos`
  ADD PRIMARY KEY (`idMovimento`),
  ADD KEY `Pessoas_idPessoa` (`Pessoas_idPessoa`);

--
-- Indexes for table `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`idPessoa`),
  ADD KEY `Logradouros_idLogradouro` (`Logradouros_idLogradouro`),
  ADD KEY `Bairros_idBairro` (`Bairros_idBairro`),
  ADD KEY `Cidades_idCidade` (`Cidades_idCidade`),
  ADD KEY `Estados_idEstado` (`Estados_idEstado`),
  ADD KEY `Paises_idPais` (`Paises_idPais`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bairros`
--
ALTER TABLE `bairros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `logradouros`
--
ALTER TABLE `logradouros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `movimentos`
--
ALTER TABLE `movimentos`
  MODIFY `idMovimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `idPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD CONSTRAINT `pessoas_ibfk_1` FOREIGN KEY (`Logradouros_idLogradouro`) REFERENCES `logradouros` (`id`),
  ADD CONSTRAINT `pessoas_ibfk_2` FOREIGN KEY (`Bairros_idBairro`) REFERENCES `bairros` (`id`),
  ADD CONSTRAINT `pessoas_ibfk_3` FOREIGN KEY (`Cidades_idCidade`) REFERENCES `cidades` (`id`),
  ADD CONSTRAINT `pessoas_ibfk_4` FOREIGN KEY (`Estados_idEstado`) REFERENCES `estados` (`id`),
  ADD CONSTRAINT `pessoas_ibfk_5` FOREIGN KEY (`Paises_idPais`) REFERENCES `paises` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
