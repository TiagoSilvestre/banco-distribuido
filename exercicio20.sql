-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Nov-2016 às 16:46
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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
  `idBairro` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bairros`
--

INSERT INTO `bairros` (`idBairro`, `nome`) VALUES
(1, 'Centro'),
(2, 'Pinheirinho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `idCidade` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`idCidade`, `nome`) VALUES
(1, 'Criciuma');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `idEstado` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`idEstado`, `nome`) VALUES
(1, 'Santa Catarina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logradouros`
--

CREATE TABLE `logradouros` (
  `idLogradouro` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `logradouros`
--

INSERT INTO `logradouros` (`idLogradouro`, `nome`) VALUES
(1, 'Av. Centenario'),
(2, 'Rua Humberto de Campos'),
(19, 'Rua Antonio de Lucca'),
(20, 'Av. Julio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paises`
--

CREATE TABLE `paises` (
  `idPais` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paises`
--

INSERT INTO `paises` (`idPais`, `nome`) VALUES
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
(1, 'Tiago', 1, 1, 1, 1, 1),
(2, 'Jose', 2, 2, 1, 1, 1),
(3, 'Jose', 2, 2, 1, 1, 1),
(4, 'Jeison', 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bairros`
--
ALTER TABLE `bairros`
  ADD PRIMARY KEY (`idBairro`);

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`idCidade`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indexes for table `logradouros`
--
ALTER TABLE `logradouros`
  ADD PRIMARY KEY (`idLogradouro`);

--
-- Indexes for table `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`idPais`);

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
  MODIFY `idBairro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `idCidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logradouros`
--
ALTER TABLE `logradouros`
  MODIFY `idLogradouro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `paises`
--
ALTER TABLE `paises`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `idPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD CONSTRAINT `pessoas_ibfk_1` FOREIGN KEY (`Logradouros_idLogradouro`) REFERENCES `logradouros` (`idLogradouro`),
  ADD CONSTRAINT `pessoas_ibfk_2` FOREIGN KEY (`Bairros_idBairro`) REFERENCES `bairros` (`idBairro`),
  ADD CONSTRAINT `pessoas_ibfk_3` FOREIGN KEY (`Cidades_idCidade`) REFERENCES `cidades` (`idCidade`),
  ADD CONSTRAINT `pessoas_ibfk_4` FOREIGN KEY (`Estados_idEstado`) REFERENCES `estados` (`idEstado`),
  ADD CONSTRAINT `pessoas_ibfk_5` FOREIGN KEY (`Paises_idPais`) REFERENCES `paises` (`idPais`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
