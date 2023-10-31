-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2022 a las 01:44:42
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbtaller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuartoecs`
--

CREATE TABLE `cuartoecs` (
  `id` int(11) NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `id_curso` int(11) NOT NULL,
  `mecanica` float NOT NULL,
  `electronica` float NOT NULL,
  `electricidad` float NOT NULL,
  `construcciones` float NOT NULL,
  `promedio1` float NOT NULL,
  `promedio2` float NOT NULL,
  `promedio_final` float NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cuartoecs`
--

INSERT INTO `cuartoecs` (`id`, `documento`, `nombre`, `id_curso`, `mecanica`, `electronica`, `electricidad`, `construcciones`, `promedio1`, `promedio2`, `promedio_final`, `estado`, `id_usuario`, `fecha`) VALUES
(1, '46663281', 'ANFILOFIEFF Alex Ignacio', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:13'),
(2, '45259640', 'BECERRA Pedro Sim?n', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:14'),
(3, '46796065', 'BURGOS Martin Ezequiel', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:14'),
(4, '47283752', 'CAMPOS Ian Ezequiel', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:15'),
(5, '45797875', 'CARILLO Joaqu?n', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:16'),
(6, '46613576', 'COLIN Yaksamel Donato', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:17'),
(7, '47048945', 'CUELLO Mateo Valent?n', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:18'),
(8, '47049529', 'ELIZALDE M?ximo Mart?n', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:18'),
(9, '47048963', 'FRANZINO Juan Francisco', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:19'),
(10, '47180406', 'GALI Nestor Hern?n', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:19'),
(11, '45797889', 'GHIGLIA Ramiro Valent?n', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:22'),
(12, '46613593', 'G?IDA Walter Thomas', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:22'),
(13, '46724906', 'LOYOLA PE?A Mateo Nahuel', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:23'),
(14, '46613581', 'LUENGO Tom?s Joaqu?n', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:23'),
(15, '46613569', 'MARENCO RUFFINI Nicolas', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:24'),
(16, '47048966', 'RUFFINI Angel Octavio', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:33'),
(17, '45259654', 'SALUSOGLIA Emanuel', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:35'),
(18, '46613588', 'TORRES Alan Gabriel', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:35'),
(19, '45797881', 'VEGA VELOSO Martina Aldana', 18, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:36'),
(20, '45259603', 'ABREU Valent?n Tob?as', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:37'),
(21, '46613586', 'BEROISA L?PEZ Ignacio Jes?s', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:39'),
(22, '45797867', 'BIDEGAIN OBERNAUER F?tima', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:39'),
(23, '47246301', 'CH?VEZ Mateo Daniel', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:40'),
(24, '46613587', 'CRESPO HENRIQUEZ Sofia Agustina', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:40'),
(25, '46613578', 'ESPINOZA Leonardo Joaquin', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:41'),
(26, '44155613', 'FUENZALIDA Carlos Damian', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:42'),
(27, '44430250', 'GALLEGOS FERNANDEZ Claudio Gabriel', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:42'),
(28, '45471973', 'GONZALEZ CODONY Esteban', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:43'),
(29, '46406991', 'GUZMAN Thiago Juan David', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:43'),
(30, '45259667', 'HUINCA CARRILLO Ger?nimo Ney?n', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:44'),
(31, '45797882', 'LAHETJUZAN Avril', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:46'),
(32, '46406971', 'LENCINA PIEREZ Mateo Daniel', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:47'),
(33, '47048965', 'ORTIZ BER?N Xavier', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:48'),
(34, '46717937', 'PARED Federico Ram?n', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:48'),
(35, '46982913', 'RELMU?N BOTAS Mateo David', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:49'),
(36, '44324538', 'RIVERO Nahuel Antonio', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:49'),
(37, '45259621', 'VANG MART?NEZ Alan Joel', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:50'),
(38, '45797869', 'VILLANOVA Genaro Alejandro', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:50'),
(39, '46406970', 'VIVIER Francisco Nicol?s', 19, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:17:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `turno` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `turno`, `estado`, `fecha`) VALUES
(2, '1ro. 1ra. CB', 'Mañana', 1, '2022-03-11 23:28:15'),
(3, '1ro. 2da. CB', 'Mañana', 1, '2022-03-11 23:28:26'),
(6, '2do. 1ra. CB', 'Mañana', 1, '2022-03-11 23:29:36'),
(7, '2do. 2da. CB', 'Mañana', 1, '2022-03-11 23:29:54'),
(8, '1ro 1ra. E CS', 'Mañana', 1, '2022-03-11 23:30:35'),
(9, '1ro. 2da. E CS', 'Mañana', 1, '2022-03-11 23:31:17'),
(10, '1ro. 1ra. A CS', 'Mañana', 1, '2022-03-11 23:31:53'),
(11, '1ro. 1ra. CB', 'Tarde', 1, '2022-03-11 23:32:23'),
(12, '1ro. 2da. CB', 'Tarde', 1, '2022-03-11 23:32:43'),
(13, '1ro. 3ra. CB', 'Tarde', 1, '2022-03-11 23:33:07'),
(14, '2do. 1ra. CB', 'Tarde', 1, '2022-03-11 23:33:39'),
(15, '2do. 2da. CB', 'Tarde', 1, '2022-03-11 23:33:57'),
(16, '1ro 1ra. E CS', 'Tarde', 1, '2022-03-11 23:34:21'),
(17, '1ro. 1ra. A CS', 'Tarde', 1, '2022-03-11 23:34:58'),
(18, '2do. 1ra. E CS', 'Vespertino', 1, '2022-03-11 23:35:19'),
(19, '2do. 2da. E CS', 'Vespertino', 1, '2022-03-11 23:35:36'),
(20, '2do. 1ra. A CS', 'Vespertino', 1, '2022-03-11 23:36:05'),
(21, '3ro 1ra. E CS', 'Vespertino', 1, '2022-03-11 23:36:22'),
(22, '3ro 2da. E CS', 'Vespertino', 1, '2022-03-11 23:36:58'),
(23, '3ro 1ra. A CS', 'Vespertino', 1, '2022-03-11 23:37:13'),
(24, '4to. 1ra. E CS', 'Vespertino', 1, '2022-03-11 23:37:32'),
(25, '4to. 2da. E CS', 'Vespertino', 1, '2022-03-11 23:38:03'),
(26, '4to. 1ra. A CS', 'Vespertino', 1, '2022-03-11 23:38:18'),
(27, '1ro. 2da. E CS', 'Tarde', 1, '2022-03-16 21:25:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `primerocb`
--

CREATE TABLE `primerocb` (
  `id` int(11) NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `id_curso` int(11) NOT NULL,
  `carpinteria` float NOT NULL,
  `hojalateria` float NOT NULL,
  `electricidad` float NOT NULL,
  `ajuste` float NOT NULL,
  `promedio1` float NOT NULL,
  `promedio2` float NOT NULL,
  `promedio_final` float NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `primerocb`
--

INSERT INTO `primerocb` (`id`, `documento`, `nombre`, `id_curso`, `carpinteria`, `hojalateria`, `electricidad`, `ajuste`, `promedio1`, `promedio2`, `promedio_final`, `estado`, `id_usuario`, `fecha`) VALUES
(1, '49050367', 'BRIZUELA Maria Pia', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:40:57'),
(2, '49217602', 'GARRO ARROYO Genaro', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:40:58'),
(3, '48908876', 'LEIVA Tiago Isaías', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:44:28'),
(4, '49031262', 'MOREIRA Lautaro', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:40:59'),
(5, '49280060', 'ORTIZ FAGOTTI Bautista', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:41:00'),
(6, '49280065', 'VEGA PUÑALEF Arianne Malen', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:51:19'),
(7, '49466826', 'ANSO FERREYRA Francisco Agustin', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:51:39'),
(8, '49031270', 'CARIMAN Mateo Esteban', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:41:03'),
(9, '49399713', 'CATALANO Matías Emanuel', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:50:59'),
(10, '49138127', 'CRESPIN SHARIPOFF Felipe Juan', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:41:04'),
(11, '49399710', 'DORIGONI Ian Marco', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:41:56'),
(12, '49340207', 'FERREIRA Nicolas Alejandro', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:41:57'),
(13, '49480822', 'GUTIERREZ MURA?A Gladis Valentina', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:41:57'),
(14, '95838967', 'MAMANI QUISPE Josue Vladimir', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:41:58'),
(15, '49031259', 'MOLLO VIZA Doly Abigail', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:41:58'),
(16, '48318733', 'MU?IZ BEROISA Sof?a Aylen', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:41:59'),
(17, '48820692', 'PAYLEMAN SOTO Mateo Joaquin', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:00'),
(18, '48947021', 'PEINECURA VILLA Emir Sebastian', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:00'),
(19, '48947028', 'PERALTA QUEVEDO Joan Lisandro', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:01'),
(20, '49218465', 'RAINA Federico Bautista', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:01'),
(21, '47850027', 'REINAO Candela Jazmin', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:08'),
(22, '47850026', 'REINAO Milagros Priscila', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:09'),
(23, '48908879', 'ROMERO D\'ASCANIO Benjam?n Sebasti?n', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:10'),
(24, '48947441', 'ROSA Abril Ariana', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:10'),
(25, '49573983', 'ROUSIOT Mia Pilar', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:11'),
(26, '48908884', 'RUFFINI Nazareno Miguel', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:11'),
(27, '49120316', 'SARTI BARRERA Emir', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:12'),
(28, '49399360', 'SOTO URRA Giuliano Valent?n', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:12'),
(29, '95942041', 'V?SQUEZ BRICE?O Michell Alejandra', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:13'),
(30, '49465179', 'VI?AS URQUIZU Inti Uriel', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:14'),
(31, '48732266', 'VISCAY Mateo Jonas', 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:16'),
(32, '48908893', 'ALVAREZ Juan Miqueas Nahun', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:16'),
(33, '49279716', 'BAEZ MAIZ Romina Helen', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:17'),
(34, '48732284', 'BARBOSA Shina Priscila Alanis', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:17'),
(35, '49340216', 'BIDEGAIN Leandro Imanol', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:18'),
(36, '48947964', 'CARRIZO TRIPAILAO Zaira Quimey', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:18'),
(37, '49340201', 'CHAPARRO NAVARRO Ian Lautaro', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:19'),
(38, '48947095', 'CID Santino Uriel', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:20'),
(39, '49399709', 'FIGUEROA Jonas Miqueas', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:20'),
(40, '49184537', 'FORMIGA Bianca Luana Isabel', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:21'),
(41, '48947980', 'GOMEZ SECO Alexander Manuel', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:34'),
(42, '48866678', 'LASTRA GARCIA Joaquin', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:34'),
(43, '49138881', 'LIEN Oreana Sheila', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:35'),
(44, '49486563', 'LOPEZ TORREZ Emanuel Florentino', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:35'),
(45, '49465653', 'MAIZ CHOSCO Sheila Karina', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:36'),
(46, '49340229', 'MARTINEZ Evangelina Jasmin', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:37'),
(47, '49340221', 'PAZ Evangelina Jazmin', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:37'),
(48, '49465657', 'PLATTNER Luciana Emilce', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:38'),
(49, '48866677', 'PLATTNER Mateo Jeremias', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:39'),
(50, '49465652', 'PRADO Juliette Ailin', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:39'),
(51, '49138884', 'QUISPE Tatiana Lilen', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:41'),
(52, '49465655', 'RAMIREZ Josias Nicolas', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:42'),
(53, '49340396', 'ROMERO Luisana Suyai', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:42'),
(54, '49218469', 'SHAE Ludmila Eyenil', 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:43'),
(55, '49031243', 'CLEMENTE PRIETO Araceli Juliana', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:43'),
(56, '49280069', 'CORREA HERNANDEZ Valentino', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:44'),
(57, '49031264', 'JARA LLANQUINAO Kevin Ariel', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:44'),
(58, '49031042', 'LLORENTE Lautaro Juli?n', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:45'),
(59, '49399707', 'RUIZ Luciano Benjamin', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:45'),
(60, '49217618', 'ARZARELLO Franco Agust?n', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:46'),
(61, '49466835', 'BARBOSA Valentina Magal?;11', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:50:22'),
(62, '49031268', 'BILLENE ROLDAN Lucca Thyago', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:53'),
(63, '48908874', 'BUCAREY Joaqu?n Sim?n', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:53'),
(64, '49280074', 'CANDELA Emiliano Manuel', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:54'),
(65, '49218275', 'CA?UPAN Jonathan David', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:54'),
(66, '49465516', 'COLIQUEO Luis Benjamin', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:55'),
(67, '50432709', 'ETCHEGARAY Sebastian Martin', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:55'),
(68, '49218460', 'FLORES Leandro Ezequiel', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:56'),
(69, '43217618', 'FRANCO AGUSTIN Arzarello', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:57'),
(70, '49465176', 'GON?ALVES MORA Carmela Margot', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:58'),
(71, '49138087', 'GUZMAN MONDACA Santiago', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:42:59'),
(72, '49399780', 'LOPEZ Tiago Valent?n', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:00'),
(73, '49573979', 'LUCENA Hector Benjamin', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:00'),
(74, '49466828', 'MARTINEZ Tiago Valentin', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:01'),
(75, '49128246', 'MENDEZ El?as Valent?n', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:01'),
(76, '49280056', 'MOSS VELOSO Francisco Fabi?n', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:02'),
(77, '49399719', 'ORTIZ Maia Malena', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:02'),
(78, '48947041', 'PARRA CORONEL Naom? Milei', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:03'),
(79, '49280058', 'PE?A OBERNAUER Maria Luz', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:04'),
(80, '49279465', 'SILVA PEDRANTI Juan Sim?n', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:04'),
(81, '48947440', 'VASQUEZ Santiago Daniel', 11, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:44:03'),
(82, '48908889', 'ISLAS Benjamin Daniel', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:44:03'),
(83, '49030886', 'ROBLES CHAZARRETA Simon Emilio Eliel', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:44:02'),
(84, '49340219', 'SEGUNDO GARRIDO Fabricio', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:44:01'),
(85, '51704914', 'BAEZA MARTINEZ Francessca Agustina', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:44:01'),
(86, '48947038', 'CASTRO LAGOS Hernan Andres', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:44:01'),
(87, '48947027', 'COLIN Milovan Joachins', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:44:00'),
(88, '49031247', 'CORDOVA Nicolas Daniel', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:59'),
(89, '49340206', 'DE LA FUENTE GIANNOTTI Tomas Sebastian', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:59'),
(90, '49217615', 'ETCHEGARAY ALBARRAN Jerem?as Emanuel', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:58'),
(91, '49081675', 'FUENTES FLORES Felipe Emiliano', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:53'),
(92, '49031256', 'GENOVA Dilan Francisco', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:53'),
(93, '48250997', 'GONZALEZ GALVEZ Victor Leonardo', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:54'),
(94, '49218459', 'GUZMAN Morena', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:55'),
(95, '48732267', 'LARRONDO GONZALEZ Ariadna Yanina', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:55'),
(96, '48250988', 'LLARENA MANSILLA Joaquin Antonio', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:56'),
(97, '49058802', 'MARQUEZ Tomas Marcelo', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:50'),
(98, '48956382', 'MEDINA Delfin Nazareno', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:48'),
(99, '48122888', 'MEDINA Michel Sergio', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:47'),
(100, '49217614', 'MOREIRA Franco', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:49'),
(101, '48908887', 'PARDO FORMIGA Nicol?s Rafael', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:44'),
(102, '48947013', 'PELEATO Avril Estela', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:44'),
(103, '49217610', 'PE?A Paco Joel', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:43'),
(104, '49340223', 'ROCCHETTI Giovanna Dennisse', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:42'),
(105, '49399703', 'RUIZ DELGADO Jano Exequiel', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:40'),
(106, '49340209', 'SANCHEZ Tiago Joaqu?n', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:40'),
(107, '49466831', 'SEPULVEDA Uma', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:39'),
(108, '49031266', 'VEGA Agustin', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:39'),
(109, '48318736', 'ZALAZAR MATAMALA V?ctor Germ?n', 12, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:38'),
(110, '49466823', 'DOCA AUCACHI Emanuel Braian', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:37'),
(111, '49030900', 'ORTIZ Saira Nahir', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:35'),
(112, '49217605', 'AAB Emilia', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:34'),
(113, '48947031', 'ALE Jenifer Elizabeth', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:34'),
(114, '49399783', 'BELMAR Jos?as Gabriel', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:33'),
(115, '49340399', 'CAMMERTONI DURAN Giuliano Armin', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:33'),
(116, '48732269', 'CORREA Thiago Nahuel', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:32'),
(117, '49254959', 'CORTEZ Florencia Abigail', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:32'),
(118, '47914443', 'ESTRADA AUCACHI Luis Gabriel', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:31'),
(119, '48732275', 'ETCHEGARAY ALBARRAN Marcos Ezequiel', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:30'),
(120, '48947024', 'FIGUEROA Zaira Adabel', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:30'),
(121, '48947022', 'FORMIGA Tobias Ezequiel', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:27'),
(122, '49031276', 'GALARZA PEDRAZA Francisco Juanjo', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:26'),
(123, '48456237', 'GALFRASCOLI Florencia Del Valle', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:26'),
(124, '49138083', 'GALLEGOS BURGOS Jimena Evangelina', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:25'),
(125, '48947026', 'GUERRERO Franc?sco Simon', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:25'),
(126, '49466822', 'GUTIERREZ Leid? Antonela', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:24'),
(127, '49466821', 'IPORRE JANCO Jazmin Belen', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:23'),
(128, '49030404', 'MARILEO NEIRA Nathaya Trinidad', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:23'),
(129, '49030402', 'MARIPIL CURRUMAN Guadalupe Daniela', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:22'),
(130, '48947968', 'PARRA Shiskara Nazarena', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:22'),
(131, '49138135', 'PEINECURA COLIYAN Sof?a Victoria', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:19'),
(132, '49030403', 'PINO Iori Leonardo', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:18'),
(133, '48774764', 'QUINTEROS Martina Milagros', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:18'),
(134, '49279124', 'ROJAS Joaquin Samuel Ariel', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:18'),
(135, '49031280', 'TORRES ROMARIZ Demian Luca', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:17'),
(136, '48947048', 'VANG Sofia Anabella', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:17'),
(137, '49574284', 'VILLALBA Emmanuel Natanael', 13, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:43:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quintoecs`
--

CREATE TABLE `quintoecs` (
  `id` int(11) NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `id_curso` int(11) NOT NULL,
  `electricidad` float NOT NULL,
  `sistemas` float NOT NULL,
  `maquinas` float NOT NULL,
  `electronica` float NOT NULL,
  `promedio1` float NOT NULL,
  `promedio2` float NOT NULL,
  `promedio_final` float NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `quintoecs`
--

INSERT INTO `quintoecs` (`id`, `documento`, `nombre`, `id_curso`, `electricidad`, `sistemas`, `maquinas`, `electronica`, `promedio1`, `promedio2`, `promedio_final`, `estado`, `id_usuario`, `fecha`) VALUES
(1, '45259614', 'BARRIA MORALES Kevin Francisco', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:02'),
(2, '45207228', 'BATTILANA Joaquin', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:03'),
(3, '45471971', 'CURIMA AUCACHI Lisvet Camila', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:03'),
(4, '44811655', 'ESCUDERO Jeremías Tomás', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:25:03'),
(5, '45207275', 'ETCHEGARAY CAYUMIL Matías Leonardo', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:25:16'),
(6, '45211976', 'FERNANDEZ Esteban Miguel', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:05'),
(7, '45211716', 'FERNANDEZ HUEBRA Alan Joaquín', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:25:26'),
(8, '45471983', 'FERNANDEZ Theo Joel', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:07'),
(9, '44324569', 'FLORES RODRIGUEZ Yasm?n Luj?n', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:08'),
(10, '45259615', 'FORMIGA FUENTES Victoria Bel?n', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:08'),
(11, '45207231', 'FRESSER Valentina', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:10'),
(12, '45259630', 'GIRETTI Gonzalo Adelmo', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:11'),
(13, '46625495', 'GOMEZ Matias Joaquin', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:12'),
(14, '46406934', 'LO SURDO Thom?s Alexis', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:12'),
(15, '44430268', 'LUJAN PUMA Juan Gabriel Nicolas', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:13'),
(16, '45798204', 'MAESE Francisco Miguel', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:13'),
(17, '42652423', 'MALDONADO Javier', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:14'),
(18, '45376216', 'NORIEGA Alma Abril', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:14'),
(19, '44042068', 'PERALTA QUEVEDO Dylan Manuel', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:16'),
(20, '44324515', 'RIOS Carlos Alberto', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:16'),
(21, '45259655', 'SALUSOGLIA Tadeo', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:19'),
(22, '45471981', 'SANDOVAL Samira Solange', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:20'),
(23, '46330810', 'SEPULVEDA Agustin Ezequiel', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:20'),
(24, '45207641', 'TRIPAILAFF Andy Joel', 21, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:21'),
(25, '45211978', 'DIAZ Marcos Leandro', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:22'),
(26, '45211971', 'ESPARZA Maximiliano Leonel', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:23'),
(27, '45797817', 'GODOY Gonzalo Sebastian', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:24'),
(28, '45259628', 'GOMEZ Federico Emanuel', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:24'),
(29, '45259641', 'GOMEZ GUTIERREZ Marisa Elida', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:25'),
(30, '45471953', 'GORDON Carlos Facundo', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:25'),
(31, '46406909', 'GUTIERREZ MURA?A Jerem?as C?sar Andr?s', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:27'),
(32, '45119114', 'LEIVA Tania Katherina', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:28'),
(33, '45471966', 'MARENCO RUFFINI Azul', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:29'),
(34, '45259674', 'MARINELLI Valentina Victoria', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:30'),
(35, '46612979', 'MATAMALA Bruno Ezequiel', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:30'),
(36, '45667697', 'MEDINA Milagros Claudia', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:31'),
(37, '45797807', 'MORALES Denilson David', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:32'),
(38, '46406725', 'MORENO Valentina Anabel', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:33'),
(39, '45259690', 'PEYROT Tob?as Esteban', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:33'),
(40, '45259624', 'RODRIGUEZ Joaqu?n Andr?s', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:34'),
(41, '45797847', 'ROMERO Santiago', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:36'),
(42, '45471949', 'SALINAS Juli?n Daniel', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:37'),
(43, '44947093', 'SANCHEZ Santiago Sebastian', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:37'),
(44, '46536936', 'SANTIBA?EZ Ramiro', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:38'),
(45, '45797806', 'TRINCHERI Lucas Dingerman', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:39'),
(46, '45259673', 'VALENZUELA MOREIRA Agostina Oriana', 22, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:23:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `nombre`, `estado`, `fecha`) VALUES
(1, 'Carpintería ', 1, '2022-03-08 21:34:49'),
(2, 'Ajuste', 1, '2022-03-08 00:44:04'),
(3, 'Tornería', 1, '2022-03-08 00:44:07'),
(5, 'Computación', 1, '2022-03-08 00:44:09'),
(6, 'Soldadura', 1, '2022-03-08 00:44:13'),
(7, 'Hojalatería', 1, '2022-03-08 00:44:16'),
(8, 'Electricidad', 1, '2022-03-08 00:44:18'),
(9, 'Automatización', 1, '2022-03-08 00:44:21'),
(10, 'Oficina Técnica', 1, '2022-03-08 21:47:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segundocb`
--

CREATE TABLE `segundocb` (
  `id` int(11) NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `id_curso` int(11) NOT NULL,
  `ajuste` float NOT NULL,
  `electricidad` float NOT NULL,
  `informatica` float NOT NULL,
  `herreria` float NOT NULL,
  `promedio1` float NOT NULL,
  `promedio2` float NOT NULL,
  `promedio_final` float NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `segundocb`
--

INSERT INTO `segundocb` (`id`, `documento`, `nombre`, `id_curso`, `ajuste`, `electricidad`, `informatica`, `herreria`, `promedio1`, `promedio2`, `promedio_final`, `estado`, `id_usuario`, `fecha`) VALUES
(1, '48131119', 'AGUIRRE Guillermo Sebastian', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:06'),
(2, '47914031', 'ANTILLANCA GARON Jonathan Emilio', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:06'),
(3, '48732253', 'BUSTOS PACHECO Liz Morena', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:07'),
(4, '47670945', 'CAMPO Sofía Ariatna', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:02:41'),
(5, '45797855', 'CAVIESE Juan Pablo', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:08'),
(6, '48908636', 'CHAVEZ Santiago Ismael', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:09'),
(7, '47471688', 'FERNANDEZ Thomas Benjamin', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:10'),
(8, '47720902', 'FLORES Alex Miguel', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:11'),
(9, '47720552', 'GONZALES RAMOS Malena Belén', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:02:27'),
(10, '45376253', 'GONZALEZ ARCE Esteban Ismael', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:12'),
(11, '48185128', 'HERNANDEZ Bianca Sofia', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:14'),
(12, '47915142', 'MAUREIRA Omar', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:15'),
(13, '48185114', 'MONTEIRO Lourdes Alexia', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:15'),
(14, '47670555', 'MORALES PONCE Mauro Nicolas', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:16'),
(15, '48732289', 'NAVARRO Jazm?n', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:16'),
(16, '48636341', 'PRIETO Giuliana Bel?n', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:17'),
(17, '45376271', 'SARASOLA AENLLE I?aki Bautista', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:17'),
(18, '48319160', 'SEGATORI FERRARINO Robertino', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:18'),
(19, '48531398', 'STUARDO CASADO Juan Reinaldo', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:18'),
(20, '48732286', 'TAPIA Jose Julian', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:19'),
(21, '48732520', 'TRONCOSO Maia Adabel', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:22'),
(22, '48013849', 'VELOZ Agostina', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:23'),
(23, '48318741', 'YUNES Nicol?s Agust?n', 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:24'),
(24, '48250977', 'CURIMA AUCACHI Jose Jeremias', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:25'),
(25, '48732260', 'GAGGIOTTI ITOIZ Manuel', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:25'),
(26, '48732259', 'GALI Yonathan Daniel', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:26'),
(27, '47670295', 'GODOY M?ximo Nicol?s', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:26'),
(28, '48165987', 'GOY Thiago Gast?n', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:27'),
(29, '47914079', 'GUAL Mikeas Hernan', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:27'),
(30, '48390985', 'GUZMAN RODRIGUEZ Azucena Yasm?n', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:28'),
(31, '48250984', 'ISASMENDI CASTRO Valent?n Gabriel', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:32'),
(32, '45207285', 'LEIVA Maximiliano Dudamel', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:33'),
(33, '47914447', 'LOPEZ Martina', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:33'),
(34, '48732271', 'MALDONADO GALLEGOS Emanuel', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:34'),
(35, '48250961', 'MALDONADO RUMUALDO Eduardo Jose', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:35'),
(36, '48142874', 'MEDRANO Mauricio Tom?s', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:36'),
(37, '48732171', 'MONTECINO NAVARRO Lautaro Javier', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:37'),
(38, '47914437', 'ORTIZ Juan Pablo', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:37'),
(39, '47720937', 'PASSEGGI S?NCHEZ Milagros Franchesca Luana', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:38'),
(40, '48391433', 'ROA Adrian Eduardo', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:38'),
(41, '47720949', 'RODRIGUEZ Gonzalo', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:41'),
(42, '48318709', 'ROSSO Gina Fianna', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:42'),
(43, '47914068', 'SANCHEZ NEGRETE Franco Agustin', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:43'),
(44, '47376388', 'SOTO Diego Lionel', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:44'),
(45, '48844051', 'VALENZUELA Ignacio', 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:44'),
(46, '?48732577', 'ADARO Camila Aylen', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:45'),
(47, '47914428', 'AGOSTINELLI Catalina', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:45'),
(48, '48751838', 'ALGARILLA Mateo Arian', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:46'),
(49, '48866666', 'ASTUDILLO Ariana Yaren', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:46'),
(50, '48866665', 'ASTUDILLO Ariela Rayen', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:47'),
(51, '47720939', 'BARRERA Bruno', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:49'),
(52, '47914093', 'BARRIA Loredana Abril', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:49'),
(53, '47720950', 'BENEDETTI JAQUE Mateo Exequiel', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:50'),
(54, '48318722', 'CASAMAJOU LARA Naom? Tiara', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:50'),
(55, '47914060', 'COMETTA Mikeas Joaqu?n', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:52'),
(56, '48504763', 'DE ESTEBAN Santiago', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:53'),
(57, '47376366', 'ETCHEGARAY ALBARRAN Benjamin', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:53'),
(58, '47914080', 'FERREYRA POGGI Francisco Walter', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:54'),
(59, '47914008', 'GARRIDO Abiga? Selena', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:55'),
(60, '46613564', 'GENOVA Brandon Sebastian', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 22:59:55'),
(61, '48732278', 'GODOY ALDERETE Stefania Geraldin', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:04'),
(62, '47914098', 'GONZALEZ GENOVA Tiago Joaquin', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:05'),
(63, '47670970', 'INFANTE Giuliana Valentina', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:05'),
(64, '49280430', 'MANCILLA Denis Benjam?n', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:06'),
(65, '48250964', 'MANRIQUE Facundo Dam?an', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:06'),
(66, '48866833', 'MU?OZ Maia Jazmin', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:07'),
(67, '48250921', 'ORTIZ FAGOTTI Santino', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:08'),
(68, '48531048', 'ORTIZ ZU?IGA Brisa De Abril', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:09'),
(69, '48531377', 'ROMERO BARRIENTO Cielo Abril Margarita', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:09'),
(70, '48318745', 'RUARTE AG?ERO Thiago Juan', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:10'),
(71, '48659888', 'SCORTICHINI Morena', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:12'),
(72, '48405199', 'TORRES Jos? Luis', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:13'),
(73, '48250980', 'VILLEGAS PANOZO Cesia Belen', 14, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:14'),
(74, '95751395', 'AMESQUITA CHACIN Jason Andre', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:14'),
(75, '48318742', 'CALENDINO Mar?a Paula', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:15'),
(76, '47914448', 'CAMPOS MARTINEZ Maximo Alberto', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:16'),
(77, '48318732', 'CATALANO Cristian Damian', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:16'),
(78, '48660116', 'CONTRERAS TORRES Thiago Emmanuel', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:17'),
(79, '48732290', 'ESPINOZA TEJADA Federico Nahuel', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:18'),
(80, '47914422', 'ESTEVEZ VARELA Augusto Santino', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:18'),
(81, '48391832', 'ETCHEPAREBORDA Santino', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:21'),
(82, '48318735', 'FORMIGA FUENTES Sof?a Nerea', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:21'),
(83, '48947001', 'FRAILE GRANDON Angel Martin', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:22'),
(84, '47720948', 'GADANO Jer?nimo Amadeo', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:23'),
(85, '48616559', 'GAUNA Maximiliano Nicol?s', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:23'),
(86, '47375837', 'GENOVA Jose Bautista Andres', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:24'),
(87, '47914435', 'GONZALEZ JAPONZUK Alexis Nahuel', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:24'),
(88, '48866671', 'GUTIERREZ ARDAIZ Lara Agustina', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:25'),
(89, '48318710', 'IBARRONDO Yago', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:26'),
(90, '46406968', 'MALDONADO Jos? Gabriel', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:27'),
(91, '48250996', 'MOLLO CONDORI Maria Ximena', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:56'),
(92, '47471698', 'PE?A SEMPE Teresa Camila', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:56'),
(93, '48250992', 'PEREZ Fabricio Damian', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:57'),
(94, '47914082', 'RAMIREZ SHERRIFF Santiago', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:58'),
(95, '48390671', 'RIVERA Gabriel Emiliano', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:58'),
(96, '48318749', 'ROJAS BRUNO Tiziano', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:59'),
(97, '47914012', 'TOLEDO LAGOS Luana Camila Milagros', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:01:59'),
(98, '47914427', 'VAZQUEZ Isabella', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:02:00'),
(99, '48250971', 'VELAZQUEZ VILLASUSO Andy Cristhian', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:02:01'),
(100, '47914069', 'VICTORIANO Dana Magali', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:02:01'),
(101, '47914061', 'ZABALA Gonzalo Ezequiel', 15, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:02:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sextoecs`
--

CREATE TABLE `sextoecs` (
  `id` int(11) NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `id_curso` int(11) NOT NULL,
  `automatizacion` float NOT NULL,
  `oficina` float NOT NULL,
  `sistemas` float NOT NULL,
  `practicas` float NOT NULL,
  `promedio1` float NOT NULL,
  `promedio2` float NOT NULL,
  `promedio_final` float NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sextoecs`
--

INSERT INTO `sextoecs` (`id`, `documento`, `nombre`, `id_curso`, `automatizacion`, `oficina`, `sistemas`, `practicas`, `promedio1`, `promedio2`, `promedio_final`, `estado`, `id_usuario`, `fecha`) VALUES
(1, '43891459', 'ARNALDO Alexis Ariel', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:34:58'),
(2, '44628236', 'CARDOZO RIVERA Denis Luis', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:34:58'),
(3, '45207213', 'CORONEL Sebastian Alejo', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:34:59'),
(4, '45471925', 'GARAY CORREA Mat?as David', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:34:59'),
(5, '44628240', 'GARAY MU?OZ Oriana', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:00'),
(6, '45207224', 'GARCIA GODOY Joaquin Ariel', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:00'),
(7, '45207277', 'GRAND?N Agust?n', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:01'),
(8, '45207278', 'GRAND?N Valent?n', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:02'),
(9, '45207218', 'GRIZY ARRIOLA Brandon Ezequiel', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:02'),
(10, '45211958', 'JEREZ Axel Xavier', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:03'),
(11, '45537051', 'LINAREZ GALLARDO Pia Serena', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:05'),
(12, '45211702', 'MONTELPARE Lucas Jes?s', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:05'),
(13, '45211963', 'NEYRA Valent?n Ignacio', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:06'),
(14, '44863835', 'RAMOS CHAMBI Joel Lucas', 24, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:06'),
(15, '45207212', 'BEROISA LOPEZ Lucas Alfredo', 25, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:07'),
(16, '45207214', 'CONDORI ROLDAN Ail?n Estefan?a', 25, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:07'),
(17, '44430275', 'CORREA Jeremias Joaquin', 25, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:08'),
(18, '45210076', 'FALDUTO Gianfranco', 25, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:09'),
(19, '44628239', 'GASPAR VASQUEZ Abigail Guadalupe', 25, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:09'),
(20, '45210647', 'MOSQUERA - PRADOLIN Alberto Alejandro', 25, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:10'),
(21, '45207610', 'MOYANO MOLINA Daiana Solcire Aymara', 25, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:12'),
(22, '45207667', 'OYARZ?N Lucas Sebasti?n', 25, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:12'),
(23, '44324553', 'SANCHEZ Adri?n Dar?o', 25, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:13'),
(24, '44811689', 'SORIANO RALINQUEO Paulo Daniel', 25, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:13'),
(25, '45567856', 'SUAREZ FORMIGA Santiago Valentin', 25, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:35:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terceroacs`
--

CREATE TABLE `terceroacs` (
  `id` int(11) NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `id_curso` int(11) NOT NULL,
  `electricidad` float NOT NULL,
  `tecnicas` float NOT NULL,
  `elaboracion` float NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `terceroacs`
--

INSERT INTO `terceroacs` (`id`, `documento`, `nombre`, `id_curso`, `electricidad`, `tecnicas`, `elaboracion`, `estado`, `id_usuario`, `fecha`) VALUES
(1, '47376285', 'ANGULO Lucas Arian', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:16'),
(2, '47376254', 'BURGOS MILLAN Magalí Jobanka', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:49'),
(3, '47283946', 'BUSTAMANTE AGUILERA Lujan', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:17'),
(4, '47417356', 'CARIMAN Juan Bautista', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:17'),
(5, '47376289', 'DIAZ Fernanda Maria José', 10, 0, 0, 0, 1, 0, '2022-03-28 23:43:03'),
(6, '46725170', 'FUENTEALBA Sol Guadalupe', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:18'),
(7, '45376256', 'GIL Alexander Leonel', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:19'),
(8, '45376262', 'GOMEZ GUTIERREZ Liliana Norali', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:19'),
(9, '47283972', 'HUARACHI ESTRADA Sion Camila Patricia', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:20'),
(10, '47472548', 'LINARES Joel Yusef', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:20'),
(11, '47914027', 'MARENCO RUFFINI Abril', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:23'),
(12, '46931781', 'MOLINA Ger?nimo Matias', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:23'),
(13, '47914001', 'MU?OZ MOLINA Lourdes Agostina', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:24'),
(14, '47720923', 'PEYROT Abril Catalina', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:24'),
(15, '47283934', 'RAMIREZ Daiana Marianela', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:25'),
(16, '47670920', 'RIQUELME SALAMANCA Geraldin? Tatiana', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:25'),
(17, '47283944', 'SALINAS Luc?a Beatriz', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:26'),
(18, '47720911', 'TEJERINA Melani Xiomara Meibel', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:26'),
(19, '47376383', 'VILLALOBOS Agostina Ayel?n', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:27'),
(20, '47471663', 'ZUNZUNEGUY Mateo Gabriel', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:28'),
(21, '45797864', 'ZU?IGA Joaqu?n Gerem?as', 10, 0, 0, 0, 1, 0, '2022-03-28 23:42:30'),
(22, '47914006', 'CAFFE Joaquin Alejandro', 17, 0, 0, 0, 1, 0, '2022-03-28 23:42:30'),
(23, '47376500', 'CORREGIDOR Fabricio Leonel', 17, 0, 0, 0, 1, 0, '2022-03-28 23:42:31'),
(24, '47049733', 'HERRERA Xaymara Abigail', 17, 0, 0, 0, 1, 0, '2022-03-28 23:42:32'),
(25, '45797894', 'MALVIDO B?rbara Milagros', 17, 0, 0, 0, 1, 0, '2022-03-28 23:42:32'),
(26, '47914032', 'MORAN Mateo Anton', 17, 0, 0, 0, 1, 0, '2022-03-28 23:42:33'),
(27, '48017499', 'MORENO Florencia Abigail', 17, 0, 0, 0, 1, 0, '2022-03-28 23:42:33'),
(28, '47638351', 'OTTOGALLI CARENTE Josefina', 17, 0, 0, 0, 1, 0, '2022-03-28 23:42:34'),
(29, '47914511', 'PELEATO Tatiana Irina', 17, 0, 0, 0, 1, 0, '2022-03-28 23:42:34'),
(30, '47283968', 'STUARDO Genaro Ezequiel', 17, 0, 0, 0, 1, 0, '2022-03-28 23:42:35'),
(31, '47283939', 'VIVIER Agustina Daniela', 17, 0, 0, 0, 1, 0, '2022-03-28 23:42:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terceroecs`
--

CREATE TABLE `terceroecs` (
  `id` int(11) NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `id_curso` int(11) NOT NULL,
  `electricidad` float NOT NULL,
  `herreria` float NOT NULL,
  `disenio` float NOT NULL,
  `torneria` float NOT NULL,
  `promedio1` float NOT NULL,
  `promedio2` float NOT NULL,
  `promedio_final` float NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `terceroecs`
--

INSERT INTO `terceroecs` (`id`, `documento`, `nombre`, `id_curso`, `electricidad`, `herreria`, `disenio`, `torneria`, `promedio1`, `promedio2`, `promedio_final`, `estado`, `id_usuario`, `fecha`) VALUES
(1, '47914039', 'BUSTOS - OVIEDO Jeremias Martin', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:40'),
(2, '45797851', 'CAIMI Nicolás Higinio', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:10:24'),
(3, '47301408', 'CANOSA Nicolás Agustín', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:10:39'),
(4, '46406983', 'CENTURION Gabriel Agustín', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:11:17'),
(5, '47376358', 'D?ASCANIO Donato', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:46'),
(6, '47283959', 'DEMBROWKY RODRIGUEZ Ginno Franco', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:46'),
(7, '47700501', 'ESPECHE Lucas Nahuel', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:47'),
(8, '47624453', 'GUTIERREZ MURAÑA Sergio Andres', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:10:51'),
(9, '47914083', 'HUGO Rodrigo Leonardo', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:48'),
(10, '47375828', 'RODRIGUEZ Alex Ariel', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:49'),
(11, '47471695', 'SAEZ Mat?as Ezequiel', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:51'),
(12, '47376394', 'SARASOLA MONEDERO Tadeo', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:51'),
(13, '47376369', 'SORIA Mat?as Andr?s', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:52'),
(14, '47471681', 'SUAREZ FORMIGA Gonzalo Ezequiel', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:53'),
(15, '47376381', 'VELAZQUEZ Sof?a', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:53'),
(16, '47471671', 'VIVANCO Sofia Aylen', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:54'),
(17, '47471777', 'YANQUIN Lourdes Belen', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:56'),
(18, '47850020', 'ZU?IGA Elias Emir', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:56'),
(19, '47914075', 'ZU?IGA ETCHEPAREBORDA Juan Bautista', 8, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:57'),
(20, '45376213', 'BEDOYA CHAMBI Gabriel Humberto', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:08:58'),
(21, '47283942', 'BIDEGAIN OBERNAUER Franco', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:14'),
(22, '47472404', 'CALDERON Valent?n El?as', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:15'),
(23, '48013843', 'CORDOBA Cesar Leonel', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:16'),
(24, '47720926', 'FRAILE An?bal', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:16'),
(25, '47048950', 'GALLEGOS FERNANDEZ Mateo Alejandro', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:17'),
(26, '47048992', 'LAHETJUZAN Oriella Jazm?n', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:17'),
(27, '47376284', 'LEDESMA Elena Isabel', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:18'),
(28, '45376265', 'MARIN Lucila Ailyn', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:19'),
(29, '47596517', 'MOSQUERA PRADOL?N Emiliano', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:19'),
(30, '47596514', 'MOYANO GUZMAN Maximo Lautaro', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:20'),
(31, '47049738', 'NEYRA Micaela Nahir', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:22'),
(32, '47850035', 'RODR?GUEZ Valentina Abril', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:22'),
(33, '47283426', 'ROLLERI Valentino', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:23'),
(34, '47915278', 'URDIROZ Derek Pedro Gael', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:24'),
(35, '46725168', 'YUNES Federico Alejo', 9, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:24'),
(36, '47300804', 'ARIAS KUZMIN Maximo Paul', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:25'),
(37, '47673162', 'BILBAO Hugo Francisco', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:25'),
(38, '47376296', 'CONTRERAS Brandon Alexis', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:26'),
(39, '46613589', 'CONTRERAS TORRES Hern?n Benjamin', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:27'),
(40, '47914018', 'CORREGIDOR Santino Alberto', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:28'),
(41, '47048987', 'ESQUER PARDO Francisco Gabriel', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:31'),
(42, '47596719', 'FRITZ SANDOVAL Agustin Fernando', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:32'),
(43, '47049721', 'GARAY MU?OZ Nehem?as', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:33'),
(44, '48013078', 'GIRETTI Nicolas Leonel', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:33'),
(45, '47914043', 'IBARRA MONTECINO Miguel Natanael', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:34'),
(46, '47283951', 'LAHETJUZAN Zoe', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:34'),
(47, '47376365', 'MANRIQUE Lautaro Nicol?s', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:35'),
(48, '47888949', 'M?RQUEZ Kala Ariadna', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:36'),
(49, '47048941', 'MART?NEZ Mar?a Fernanda', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:36'),
(50, '47596522', 'MOZZICAFREDDO PEREYRA Tiago Benjam?n', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:37'),
(51, '47283418', 'NILL Mat?as Mart?n', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:39'),
(52, '47472101', 'ORTIZ Magdalena Naara', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:40'),
(53, '44778776', 'SANCHEZ Luca Gabriel', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:41'),
(54, '47376354', 'SEGATORI Juan Ignacio', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:41'),
(55, '47914028', 'SOL?RZANO Martin', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:42'),
(56, '47283953', 'V?SQUEZ Benjamin Sim?n', 16, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2022-03-28 23:09:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(8, 'Guillermo Lapettina', 'lape', '$2a$07$usesomesillystringforeGe/gjmkQcd6xqbNulVFFvysuRzIyuJS', 'Administrador', 'vistas/img/usuarios/lape/104.jpg', 1, '2022-03-28 20:10:07', '2022-03-28 23:10:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuartoecs`
--
ALTER TABLE `cuartoecs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `primerocb`
--
ALTER TABLE `primerocb`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quintoecs`
--
ALTER TABLE `quintoecs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `segundocb`
--
ALTER TABLE `segundocb`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sextoecs`
--
ALTER TABLE `sextoecs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `terceroacs`
--
ALTER TABLE `terceroacs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `terceroecs`
--
ALTER TABLE `terceroecs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuartoecs`
--
ALTER TABLE `cuartoecs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `primerocb`
--
ALTER TABLE `primerocb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT de la tabla `quintoecs`
--
ALTER TABLE `quintoecs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `segundocb`
--
ALTER TABLE `segundocb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `sextoecs`
--
ALTER TABLE `sextoecs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `terceroacs`
--
ALTER TABLE `terceroacs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `terceroecs`
--
ALTER TABLE `terceroecs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
