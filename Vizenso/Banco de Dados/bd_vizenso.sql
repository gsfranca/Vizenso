-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2022 às 21:59
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_vizenso`
--
CREATE DATABASE IF NOT EXISTS `bd_vizenso` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_vizenso`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `apresentacao`
--

CREATE TABLE `apresentacao` (
  `IdApresent` int(11) NOT NULL,
  `RegistrArt` int(11) NOT NULL,
  `IdEspaco` int(11) NOT NULL,
  `DataApres` date NOT NULL,
  `HoraApres` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `apresentacao`
--

INSERT INTO `apresentacao` (`IdApresent`, `RegistrArt`, `IdEspaco`, `DataApres`, `HoraApres`) VALUES
(1, 1, 3, '2022-05-26', '20:30:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

CREATE TABLE `artista` (
  `NomeArt` varchar(60) NOT NULL,
  `RegistrArt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `artista`
--

INSERT INTO `artista` (`NomeArt`, `RegistrArt`) VALUES
('Martinho da Vila', 3),
('Caetano Veloso', 2),
('Roberto Carlos', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `convidados`
--

CREATE TABLE `convidados` (
  `IdConvidado` int(11) NOT NULL,
  `NomeCvdd` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `convidados`
--

INSERT INTO `convidados` (`IdConvidado`, `NomeCvdd`, `RGCvdd`) VALUES
(3, 'Eliel Andrade Matos Godoy', '36.563.290-9'),
(2, 'Giovana Santos de França', '50.221.503-3'),
(1, 'Magna Pereira Vitória', '31.390.695-6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `convite`
--

CREATE TABLE `convite` (
  `IdConvidado` int(11) NOT NULL,
  `CodCliente` int(11) NOT NULL,
  `IdReservaEspaco` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `convite`
--

INSERT INTO `convite` (`IdConvidado`, `CodCliente`, `IdReservaEspaco`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `espaco`
--

CREATE TABLE `espaco` (
  `IdEspaco` int(11) NOT NULL,
  `Descr` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `espaco`
--

INSERT INTO `espaco` (`IdEspaco`, `Descr`) VALUES
(1, 'Espaço 1 - Comum'),
(2, 'Espaço 2 - Privativa (Corporativa)'),
(3, 'Espaço 3 - Privativa (Eventos)'),
(4, 'Espaço 4 - Privativa (Casal)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesa`
--

CREATE TABLE `mesa` (
  `IdMesa` int(11) NOT NULL,
  `IdEspaco` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mesa`
--

INSERT INTO `mesa` (`IdMesa`, `IdEspaco`) VALUES
(2, 2),
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `registrocliente`
--

CREATE TABLE `registrocliente` (
  `CodCliente` int(11) NOT NULL,
  `NomeClie` varchar(50) NOT NULL,
  `CPFClie` varchar(14) NOT NULL,
  `RGClie` varchar(12) NOT NULL,
  `EmailCli` varchar(100) NOT NULL,
  `SenhaCli` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `registrocliente`
--

INSERT INTO `registrocliente` (`CodCliente`, `NomeClie`, `CPFClie`, `RGClie`, `EmailCli`, `SenhaCli`) VALUES
(1, 'Claudete Giancomo Silva', '585.873.248-88', '14.893.900-4', 'craudetedobolinho@gmail.com', 'crau1289');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservaespaco`
--

CREATE TABLE `reservaespaco` (
  `IdReservaEspaco` int(11) NOT NULL,
  `CodCliente` int(11) NOT NULL,
  `IdEspaco` int(11) NOT NULL,
  `Restaurante` varchar(150) NOT NULL,
  `DataEspaco` date NOT NULL,
  `HoraEspaco` time NOT NULL,
  `Tema` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reservaespaco`
--

INSERT INTO `reservaespaco` (`IdReservaEspaco`, `CodCliente`, `IdEspaco`, `Restaurante`, `DataEspaco`, `HoraEspaco`, `Tema`) VALUES
(1, 1, 3, 'Restaurante X', '2022-05-26', '18:45:00', 'Cantina Italiana');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservamesa`
--

CREATE TABLE `reservamesa` (
  `IdReservaMesa` int(11) NOT NULL,
  `CodCliente` int(11) NOT NULL,
  `Restaurante` varchar(150) NOT NULL,
  `QntdPessoas` int(11) NOT NULL,
  `DataMesa` date NOT NULL,
  `HoraMesa` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reservamesa`
--

INSERT INTO `reservamesa` (`IdReservaMesa`, `CodCliente`, `Restaurante`, `QntdPessoas`, `DataMesa`, `HoraMesa`) VALUES
(1, 1, 'Restaurante X', 4, '2022-05-26', '18:45:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Usuario` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Usuario`, `Senha`) VALUES
('a', '123'),
('b', '456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `apresentacao`
--
ALTER TABLE `apresentacao`
  ADD PRIMARY KEY (`IdApresent`),
  ADD UNIQUE KEY `RegistrArt` (`RegistrArt`),
  ADD UNIQUE KEY `HoraApres` (`HoraApres`);

--
-- Índices para tabela `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`RegistrArt`);

--
-- Índices para tabela `convidados`
--
ALTER TABLE `convidados`
  ADD PRIMARY KEY (`IdConvidado`),
  ADD UNIQUE KEY `NomeCvdd` (`NomeCvdd`);

--
-- Índices para tabela `espaco`
--
ALTER TABLE `espaco`
  ADD PRIMARY KEY (`IdEspaco`);

--
-- Índices para tabela `registrocliente`
--
ALTER TABLE `registrocliente`
  ADD PRIMARY KEY (`CodCliente`),
  ADD UNIQUE KEY `CPFClie` (`CPFClie`),
  ADD UNIQUE KEY `RGClie` (`RGClie`),
  ADD UNIQUE KEY `EmailCli` (`EmailCli`);

--
-- Índices para tabela `reservaespaco`
--
ALTER TABLE `reservaespaco`
  ADD PRIMARY KEY (`IdReservaEspaco`),
  ADD UNIQUE KEY `HoraEspaco` (`HoraEspaco`);

--
-- Índices para tabela `reservamesa`
--
ALTER TABLE `reservamesa`
  ADD PRIMARY KEY (`IdReservaMesa`),
  ADD UNIQUE KEY `HoraMesa` (`HoraMesa`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `Usuario` (`Usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `apresentacao`
--
ALTER TABLE `apresentacao`
  MODIFY `IdApresent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `artista`
--
ALTER TABLE `artista`
  MODIFY `RegistrArt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `convidados`
--
ALTER TABLE `convidados`
  MODIFY `IdConvidado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `espaco`
--
ALTER TABLE `espaco`
  MODIFY `IdEspaco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `registrocliente`
--
ALTER TABLE `registrocliente`
  MODIFY `CodCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `reservaespaco`
--
ALTER TABLE `reservaespaco`
  MODIFY `IdReservaEspaco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `reservamesa`
--
ALTER TABLE `reservamesa`
  MODIFY `IdReservaMesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
