-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-12-2022 a las 16:16:17
-- Versión del servidor: 10.5.16-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u526542931_fasdatec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `id` int(255) NOT NULL,
  `id_personal` int(255) NOT NULL,
  `hora` varchar(40) NOT NULL,
  `fecha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id`, `id_personal`, `hora`, `fecha`) VALUES
(1, 1, '11:00:00', '2022-09-05'),
(2, 3, '11:00:51', '2022-09-06'),
(3, 6, '11:01:38', '2022-09-06'),
(4, 10, '11:08:05', '2022-09-06'),
(5, 8, '09:12:38', '2022-09-06'),
(6, 9, '09:12:42', '2022-09-06'),
(7, 5, '13:56:35', '2022-09-06'),
(8, 4, '13:57:58', '2022-09-06'),
(9, 7, '09:45:25', '2022-09-06'),
(10, 8, '14:00:15', '2022-09-06'),
(11, 9, '14:00:20', '2022-09-06'),
(12, 3, '15:51:40', '2022-09-06'),
(13, 5, '15:51:57', '2022-09-06'),
(14, 4, '15:52:10', '2022-09-06'),
(15, 6, '15:52:21', '2022-09-06'),
(16, 10, '3:53.30', '2022-09-06'),
(17, 8, '09:06:23', '2022-09-07'),
(18, 9, '09:05:32', '2022-09-07'),
(19, 7, '09:06:43', '2022-09-07'),
(20, 6, '10:40:45', '2022-09-07'),
(21, 3, '10:40:52', '2022-09-07'),
(22, 11, '10:40:53', '2022-09-07'),
(23, 12, '10:40:57', '2022-09-07'),
(24, 3, '09:00:00', '2022-09-12'),
(25, 4, '09:00:00', '2022-09-12'),
(26, 5, '09:00:00', '2022-09-12'),
(27, 6, '09:00:00', '2022-09-12'),
(28, 7, '09:00:00', '2022-09-12'),
(29, 8, '09:00:00', '2022-09-12'),
(30, 9, '09:00:00', '2022-09-12'),
(31, 10, '09:00:00', '2022-09-12'),
(32, 11, '09:00:00', '2022-09-12'),
(33, 12, '09:00:00', '2022-09-12'),
(34, 13, '09:00:00', '2022-09-12'),
(35, 14, '09:00:00', '2022-09-12'),
(36, 3, '09:00:00', '2022-09-13'),
(37, 4, '09:00:00', '2022-09-13'),
(38, 5, '09:00:00', '2022-09-13'),
(39, 6, '09:00:00', '2022-09-13'),
(40, 7, '09:00:00', '2022-09-13'),
(41, 8, '09:00:00', '2022-09-13'),
(42, 9, '09:00:00', '2022-09-13'),
(43, 10, '09:00:00', '2022-09-13'),
(44, 11, '09:00:00', '2022-09-13'),
(45, 12, '09:00:00', '2022-09-13'),
(46, 13, '09:00:00', '2022-09-13'),
(47, 14, '09:00:00', '2022-09-13'),
(48, 3, '09:00:00', '2022-09-14'),
(49, 4, '09:00:00', '2022-09-14'),
(50, 5, '09:00:00', '2022-09-14'),
(51, 6, '09:00:00', '2022-09-14'),
(52, 7, '09:00:00', '2022-09-14'),
(53, 8, '09:00:00', '2022-09-14'),
(54, 9, '09:00:00', '2022-09-14'),
(55, 10, '09:00:00', '2022-09-14'),
(56, 11, '09:00:00', '2022-09-14'),
(57, 12, '09:00:00', '2022-09-14'),
(58, 13, '09:00:00', '2022-09-14'),
(59, 14, '09:00:00', '2022-09-14'),
(60, 3, '09:00:00', '2022-09-15'),
(61, 4, '09:00:00', '2022-09-15'),
(62, 5, '09:00:00', '2022-09-15'),
(63, 6, '09:00:00', '2022-09-15'),
(64, 7, '09:00:00', '2022-09-15'),
(65, 8, '09:00:00', '2022-09-15'),
(66, 9, '09:00:00', '2022-09-15'),
(67, 10, '09:00:00', '2022-09-15'),
(68, 11, '09:00:00', '2022-09-15'),
(69, 12, '09:00:00', '2022-09-15'),
(70, 13, '09:00:00', '2022-09-14'),
(71, 14, '09:00:00', '2022-09-15'),
(72, 14, '10:55:50', '2022-10-11'),
(73, 6, '09:07:40', '2022-10-14'),
(74, 5, '09:07:50', '2022-10-14'),
(75, 4, '09:11:24', '2022-10-14'),
(76, 3, '09:12:48', '2022-10-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(255) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `correo` varchar(90) NOT NULL,
  `numero` varchar(12) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `correo`, `numero`, `usuario`, `password`, `img`) VALUES
(1, 'Humberto Salvador Velazquez Romero', 'velazquezhumberto99@gmail.com', '5530835953', 'chava', '2105', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(255) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `correo` varchar(90) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `puesto` varchar(40) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'recursos/user.png',
  `usuarioAlta` varchar(40) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `qr` varchar(255) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombre`, `correo`, `telefono`, `puesto`, `usuario`, `password`, `img`, `usuarioAlta`, `fecha`, `qr`, `estado`) VALUES
(1, 'Humberto Salvador Velazquez Romero', 'velazquezhumberto99@gmail.com', '5530835953', 'Director General Fasda tec.', 'Salvador', '2105', 'recursos/user.png', 'chava', '2022-09-05', 'qr/1-2022-09-05.png', 'Activo'),
(2, 'Fasdatec', 'salvador8_5@hotmail.com', '5536664109', 'Director General Fasda tec.', 'Fasdatec', '1234', 'recursos/user.png', 'chava', '2022-09-05', 'qr/2-2022-09-05.png', 'Activo'),
(3, 'Ehtan Jhair Esquivel Vargas', 'esquivelvargasehtanjhair@gmail.com', '5561776610', 'Desarrollador', 'Nuddel', 'Mizore_8', 'recursos/user.png', 'chava', '2022-09-05', 'qr/3-2022-09-05.png', 'Activo'),
(4, 'Nancy Paulina Ceciliano Zepeda', 'paulinaceciliano@gmail.com', '7226684991', 'Desarrollador', 'paulinaceciliano', 'kiwiygala123.', 'recursos/user.png', 'chava', '2022-09-05', 'qr/4-2022-09-05.png', 'Activo'),
(5, 'Kevin Emmanuel Sanchez Diaz', 'Key_park2121@hotmail.com', '5635246667', 'Diseñador y Productor', 'Kevin Emmanuel', '123456789', 'recursos/user.png', 'chava', '2022-09-05', 'qr/5-2022-09-05.png', 'Activo'),
(6, 'Luis Alberto Cruz Marín', 'alberto.cm4007@gmail.com', '5636428559', 'Desarrollador', 'albertolcm', 'holasoyluis4', 'recursos/user.png', 'chava', '2022-09-05', 'qr/6-2022-09-05.png', 'Activo'),
(7, 'Maciel Pulido Garcia', 'melisamacielpulidogarci@gmail.com', '5634714671', 'Administrador', 'maci_pg', '2803', 'recursos/user.png', 'chava', '2022-09-05', 'qr/7-2022-09-05.png', 'Activo'),
(8, 'jaqueline rivera juarez', 'jaquelinprince@hotmail.com', '5565365562', 'Administrador', 'jaki', 'peqkeprince', 'recursos/user.png', 'chava', '2022-09-05', 'qr/8-2022-09-05.png', 'Activo'),
(9, 'Barron Esquivel Alejandra Michelle', 'shellrood75@gmail.com', '5550577539', 'Administrador', 'Shelly Esquivel', 'shelly123', 'recursos/user.png', 'chava', '2022-09-05', 'qr/9-2022-09-05.png', 'Activo'),
(10, 'Rangel Hernandez Diana Laura', 'lauris-2561@hotmail.com', '5529836978', 'Administrador', 'DianaRGL', '250699', 'recursos/user.png', 'chava', '2022-09-05', 'qr/10-2022-09-05.png', 'Activo'),
(11, 'Luis Angel Dominguez Gutierrez', 'angeeldominguez20@gmail.com', '5573919135', 'Desarrollador', 'angel24l', '281190', 'recursos/user.png', 'chava', '2022-09-07', 'qr/11-2022-09-07.png', 'Activo'),
(12, 'Jonathan Orlando Horta VIlchis', 'jona_orlando@hotmail.com', '5541309103', 'Desarrollador', 'jonas', 'jonas', 'recursos/user.png', 'chava', '2022-09-07', 'qr/12-2022-09-07.png', 'Activo'),
(13, 'Victor Jorge', 'jbenhumea00@gmail.com', '5613027609', 'Desarrollador', 'Benhumea', 'Benhumea12', 'recursos/user.png', 'chava', '2022-09-14', 'qr/13-2022-09-14.png', 'Activo'),
(14, 'Karla Sandoval Guzman ', 'karlasandoval308@gmail.com', '5581399464', 'Desarrollador', 'Karla ', 'Karla1216', 'recursos/user.png', 'chava', '2022-09-14', 'qr/14-2022-09-14.png', 'Activo'),
(15, 'CRISTIAN BOLAÑOS DE JESUS ', 'Fdtcristianb09@gmail.com', '5540327711', 'Director De Producción Fasda tec.', 'CRISTIAN', '0000', 'recursos/user.png', 'chava', '2022-10-21', 'qr/15-2022-10-21.png', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id` int(255) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `estatus` varchar(40) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `fecha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id`, `nombre`, `estatus`, `usuario`, `fecha`) VALUES
(1, 'Director General Fasda tec.', 'Activo', 'Chava', '2022-09-01'),
(2, 'Desarrollador', 'Activo', 'Chava', '2022-09-03'),
(3, 'Administrador', 'Activo', 'Chava', '2022-09-03'),
(4, 'Diseñador y Productor', 'Activo', 'Chava', '2022-09-03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
