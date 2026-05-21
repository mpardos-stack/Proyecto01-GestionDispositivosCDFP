-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2025 at 01:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basedatos`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipo`
--

CREATE TABLE `equipo` (
  `IDEquipo` int(11) NOT NULL,
  `NumeroEquipo` varchar(30) DEFAULT NULL,
  `TipoEquipo` varchar(50) DEFAULT NULL,
  `Planta` int(11) DEFAULT NULL,
  `Aula` varchar(50) DEFAULT NULL,
  `Estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipo`
--

INSERT INTO `equipo` (`IDEquipo`, `NumeroEquipo`, `TipoEquipo`, `Planta`, `Aula`, `Estado`) VALUES
(1, 'PC-01', 'Portatil', 2, 'Clarke', 'Operativo'),
(2, 'PC-02', 'Portatil', 2, 'Clarke', 'Operativo'),
(3, 'PC-03', 'Portatil', 2, 'Clarke', 'Operativo'),
(4, 'PC-04', 'Portatil', 2, 'Clarke', 'Operativo'),
(5, 'PC-05', 'Portatil', 2, 'Clarke', 'Operativo'),
(6, 'PC-06', 'Portatil', 2, 'Clarke', 'Operativo'),
(7, 'PC-07', 'Portatil', 2, 'Clarke', 'Operativo'),
(8, 'PC-08', 'Portatil', 2, 'Clarke', 'Operativo'),
(9, 'PC-09', 'Portatil', 2, 'Clarke', 'Operativo'),
(10, 'PC-10', 'Portatil', 2, 'Clarke', 'Operativo'),
(11, 'PC-11', 'Portatil', 2, 'Clarke', 'Operativo'),
(12, 'PC-12', 'Portatil', 2, 'Clarke', 'Operativo'),
(13, 'PC-13', 'Portatil', 2, 'Clarke', 'Operativo'),
(14, 'PC-14', 'Portatil', 2, 'Clarke', 'Operativo'),
(15, 'PC-15', 'Portatil', 2, 'Clarke', 'Operativo'),
(16, 'PC-16', 'Portatil', 2, 'Clarke', 'Operativo'),
(17, 'PC-17', 'Portatil', 2, 'Clarke', 'Operativo'),
(18, 'PC-18', 'Portatil', 2, 'Clarke', 'Operativo'),
(19, 'PC-19', 'Portatil', 2, 'Clarke', 'Operativo'),
(20, 'PC-20', 'Portatil', 2, 'Clarke', 'Operativo'),
(21, 'PC-21', 'Portatil', 2, 'Clarke', 'Operativo'),
(22, 'PC-22', 'Portatil', 2, 'Clarke', 'Operativo'),
(23, 'PC-23', 'Portatil', 2, 'Clarke', 'Operativo'),
(30, 'PC-30', 'Portatil', 2, 'Clarke', 'Operativo');

-- --------------------------------------------------------

--
-- Table structure for table `errorvisualizacion`
--

CREATE TABLE `errorvisualizacion` (
  `IdErrorVisualizacion` int(11) NOT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `FechaError` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `IDTicket` int(11) NOT NULL,
  `IDUsuario` int(11) DEFAULT NULL,
  `IDEquipo` int(11) DEFAULT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Estado` varchar(30) DEFAULT NULL,
  `FechaInicio` datetime DEFAULT NULL,
  `FechaFin` datetime DEFAULT NULL,
  `IdTecnicoAsignado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`IDTicket`, `IDUsuario`, `IDEquipo`, `Tipo`, `Descripcion`, `Estado`, `FechaInicio`, `FechaFin`, `IdTecnicoAsignado`) VALUES
(1, 1, 1, 'Solicitud', 'Se han cargado la pantalla', 'En Reparación', '2025-11-14 09:45:23', NULL, 15);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `IDUsuario` int(11) NOT NULL,
  `Rol` varchar(15) DEFAULT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Curso` varchar(50) DEFAULT NULL,
  `IDEquipo` int(11) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Contrasena` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`IDUsuario`, `Rol`, `Nombres`, `Apellidos`, `Curso`, `IDEquipo`, `Correo`, `Contrasena`) VALUES
(1, 'Usuario', 'Pablo', 'Úbeda Crespo', 'DAW', 18, 'pabloubeda18@gmail.com', 'pass123'),
(2, 'Usuario', 'Marcos', 'Pardo Soriano', 'DAW', 13, 'marcospardo13@gmail.com', 'pass123'),
(3, 'Usuario', 'Harold', 'Hernández Sandoval', 'DAW', 2, 'haroldhernandez2@gmail.com', 'pass123'),
(4, 'Usuario', 'Nuno', 'Zhang Xu', 'DAW', 8, 'nunozhan8@gmail.com', 'pass123'),
(5, 'Usuario', 'Douglas', 'Zeledón', 'DAW', 9, 'douglaszeledon9@gmail.com', 'pass123'),
(6, 'Usuario', 'Alejando', 'Gavín', 'DAW', 12, 'alejandrogavin12@gmail.com', 'pass123'),
(7, 'Usuario', 'Arturo', 'Roldón', 'DAW', 1, 'arturorodon1@gmail.com', 'pass123'),
(8, 'Usuario', 'Pablo', 'López', 'DAW', 6, 'pablolopez6@gmail.com', 'pass123'),
(9, 'Usuario', 'Saúl', 'Lizano', 'DAW', 15, 'saullizano@gmail.com', 'pass123'),
(10, 'Usuario', 'Adrián', 'Cuartero', 'DAW', 11, 'adriancuartero11@gmail.com', 'pass123'),
(11, 'Usuario', 'Rodrigo', 'Albarrancin', 'DAW', 16, 'rodrigoalbarrazin16@gmail.com', 'pass123'),
(12, 'Usuario', 'Guillermo', 'Angas', 'DAW', 5, 'guillermoangas5@gmail.com', 'pass123'),
(13, 'Usuario', 'Estefania', 'Cando', 'DAW', 10, 'estefaniacando10@gmail.com', 'pass123'),
(14, 'Profesor', 'Adrian', 'Zúñiga', 'DAW', 2, 'adrianzuñiga@gmail.com', 'pass123'),
(15, 'Tecnico', 'Sami', 'Abdel', '', 30, 'samisami@gmail.com', 'pass123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`IDEquipo`);

--
-- Indexes for table `errorvisualizacion`
--
ALTER TABLE `errorvisualizacion`
  ADD PRIMARY KEY (`IdErrorVisualizacion`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`IDTicket`),
  ADD KEY `IDUsuario` (`IDUsuario`),
  ADD KEY `IDEquipo` (`IDEquipo`),
  ADD KEY `IdTecnicoAsignado` (`IdTecnicoAsignado`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDUsuario`),
  ADD UNIQUE KEY `Correo` (`Correo`),
  ADD KEY `IDEquipo` (`IDEquipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipo`
--
ALTER TABLE `equipo`
  MODIFY `IDEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `errorvisualizacion`
--
ALTER TABLE `errorvisualizacion`
  MODIFY `IdErrorVisualizacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `IDTicket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `errorvisualizacion`
--
ALTER TABLE `errorvisualizacion`
  ADD CONSTRAINT `errorvisualizacion_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IDUsuario`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`IDUsuario`) REFERENCES `usuario` (`IDUsuario`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`IDEquipo`) REFERENCES `equipo` (`IDEquipo`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`IdTecnicoAsignado`) REFERENCES `usuario` (`IDUsuario`);

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`IDEquipo`) REFERENCES `equipo` (`IDEquipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
