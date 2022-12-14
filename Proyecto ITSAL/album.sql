-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2022 at 02:25 PM
-- Server version: 10.9.4-MariaDB
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `album`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `correoelectronico` varchar(255) NOT NULL,
  `telefono` varchar(32) NOT NULL,
  `trabajoactual` varchar(255) NOT NULL,
  `trabajoanterior` varchar(255) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombres`, `apellidos`, `correoelectronico`, `telefono`, `trabajoactual`, `trabajoanterior`, `imagen`) VALUES
(49, 'Kevin Arturo', 'Barroso Romero', 'rosxhead@gmail.com', '2281574698', 'Desarrollador', 'Obrero', '1670476388_kevothrasher.png'),
(56, 'Liv', 'Rundgren Tyler', 'arwen@ring.com', '9999999', 'Actriz', 'Modelo', '1670551633_livtyler.jpg'),
(58, 'Linus', 'Benedict Torvalds', 'linux@git.com', '123456789', 'Desarrollador', 'Panadero', '1670551905_linus2.png'),
(59, 'Elena', 'Santos Rodriguez', 'quimica@gmail.com', '2222222', 'Quimico Analista', 'Cajera', '1670552180_quimica.jpg'),
(60, 'Elon', 'Reeve Musk', 'ceo@tesla.com', '6666666', 'CEO', 'Desarrollador', '1670552439_elon.png'),
(61, 'Regina', 'Ramos Mendez', 'reg12@hotmail.com', '444444', 'Ingeniero Electronico', 'Mesera', '1670553959_eelctronica.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loginadministradores`
--

CREATE TABLE `loginadministradores` (
  `id_loginadmin` int(11) NOT NULL,
  `usuarioadmin` varchar(255) NOT NULL,
  `contrasenaadmin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginadministradores`
--

INSERT INTO `loginadministradores` (`id_loginadmin`, `usuarioadmin`, `contrasenaadmin`) VALUES
(1, 'admin', 'admin'),
(3, 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `loginalumno`
--

CREATE TABLE `loginalumno` (
  `id` int(11) NOT NULL,
  `usuarioalumno` varchar(255) NOT NULL,
  `contrasenaalumno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginalumno`
--

INSERT INTO `loginalumno` (`id`, `usuarioalumno`, `contrasenaalumno`) VALUES
(1, 'gaby', 'gaby123'),
(2, 'uno', 'uno');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginadministradores`
--
ALTER TABLE `loginadministradores`
  ADD PRIMARY KEY (`id_loginadmin`);

--
-- Indexes for table `loginalumno`
--
ALTER TABLE `loginalumno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `loginadministradores`
--
ALTER TABLE `loginadministradores`
  MODIFY `id_loginadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loginalumno`
--
ALTER TABLE `loginalumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
