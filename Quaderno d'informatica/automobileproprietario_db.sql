-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 27, 2025 alle 18:25
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automobileproprietario`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `automobile`
--

CREATE TABLE `automobile` (
  `targa` varchar(10) NOT NULL,
  `modello` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `colore` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `automobile`
--

INSERT INTO `automobile` (`targa`, `modello`, `marca`, `colore`) VALUES
('dj2n4', 'Lamborghini', 'FORD', 'BIANCO'),
('JD83H', 'LUXURY', 'TOYOTA', 'NERO'),
('JD84', 'misse', 'misse', 'misse'),
('JD847', 'misse', 'misse', 'misse'),
('NFI442', 'SUPRA', 'TOYOTA', 'NERO'),
('NFI442d39', 'Lamborghini', 'FORD', 'BIANCO'),
('NFI442d396', 'Lamborghini', 'FORD', 'BIANCO');

-- --------------------------------------------------------

--
-- Struttura della tabella `possesso`
--

CREATE TABLE `possesso` (
  `id` int(11) NOT NULL,
  `targa` varchar(10) DEFAULT NULL,
  `CF` char(16) DEFAULT NULL,
  `data_inizio` date DEFAULT NULL,
  `data_fine` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `proprietario`
--

CREATE TABLE `proprietario` (
  `CF` char(16) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `cognome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `proprietario`
--

INSERT INTO `proprietario` (`CF`, `nome`, `cognome`) VALUES
('dn92', 'Luca', 'Rossi'),
('kdie93', 'Giovanni', 'Giorgio'),
('kdie93jbjb', 'Giovanni', 'Giorgioooo'),
('ND92ND92N', 'Michele', 'Roxano'),
('NF39312', 'MArio', 'Crudeli'),
('NF93NF3', 'Luca', 'Rossi'),
('NF93NF36', 'Luca', 'Rossi');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `automobile`
--
ALTER TABLE `automobile`
  ADD PRIMARY KEY (`targa`);

--
-- Indici per le tabelle `possesso`
--
ALTER TABLE `possesso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `targa` (`targa`),
  ADD KEY `CF` (`CF`);

--
-- Indici per le tabelle `proprietario`
--
ALTER TABLE `proprietario`
  ADD PRIMARY KEY (`CF`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `possesso`
--
ALTER TABLE `possesso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `possesso`
--
ALTER TABLE `possesso`
  ADD CONSTRAINT `possesso_ibfk_1` FOREIGN KEY (`targa`) REFERENCES `automobile` (`targa`),
  ADD CONSTRAINT `possesso_ibfk_2` FOREIGN KEY (`CF`) REFERENCES `proprietario` (`CF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
