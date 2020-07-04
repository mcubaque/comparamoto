-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2020 a las 22:01:59
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comparamotos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id_category`, `category_name`) VALUES
(1, 'Street'),
(2, 'Todo Terreno'),
(3, 'Scooter'),
(4, 'Enduro - Motocross'),
(5, 'Turismo'),
(6, 'Cuatrimotos'),
(7, 'Deportivas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delaer`
--

CREATE TABLE `delaer` (
  `id_dealer` int(11) NOT NULL,
  `d_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `delaer`
--

INSERT INTO `delaer` (`id_dealer`, `d_name`) VALUES
(890900317, 'Auteco'),
(900485799, 'Akt Motos'),
(900513703, 'Benelli'),
(900593229, 'Italgama'),
(901227795, 'KTM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `id_detalle` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `referencia` varchar(40) NOT NULL,
  `precio` varchar(15) NOT NULL,
  `motor` varchar(40) NOT NULL,
  `cilindrada` varchar(40) NOT NULL,
  `potencia` varchar(40) NOT NULL,
  `transmision` varchar(40) NOT NULL,
  `ciclo` varchar(40) NOT NULL,
  `refrigeracion` varchar(40) NOT NULL,
  `cilindros` varchar(40) NOT NULL,
  `regimen_potencia` varchar(40) NOT NULL,
  `arranque` varchar(40) NOT NULL,
  `traccion` varchar(40) NOT NULL,
  `distancia_ejes` varchar(40) NOT NULL,
  `rueda_delantera` varchar(40) NOT NULL,
  `rueda_trasera` varchar(40) NOT NULL,
  `freno_delantero` varchar(40) NOT NULL,
  `freno_trasero` varchar(40) NOT NULL,
  `altura_asiento` varchar(40) NOT NULL,
  `peso` varchar(40) NOT NULL,
  `capacidad_deposito` varchar(40) NOT NULL,
  `compresion` varchar(40) NOT NULL,
  `suspension_D` varchar(40) NOT NULL,
  `suspension_T` varchar(40) NOT NULL,
  `encendido` varchar(40) NOT NULL,
  `caja_vel` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`id_detalle`, `id_marca`, `id_category`, `referencia`, `precio`, `motor`, `cilindrada`, `potencia`, `transmision`, `ciclo`, `refrigeracion`, `cilindros`, `regimen_potencia`, `arranque`, `traccion`, `distancia_ejes`, `rueda_delantera`, `rueda_trasera`, `freno_delantero`, `freno_trasero`, `altura_asiento`, `peso`, `capacidad_deposito`, `compresion`, `suspension_D`, `suspension_T`, `encendido`, `caja_vel`) VALUES
(1, 1, 1, 'NKD-125', '3090000', 'CGR 4T OHV', '125 cc', '10.34 hp', 'Manual', '4T', 'Aire', '1', '8500 rpm', 'Electrico Y Patada', 'Cadena', '1270 mm', '2.75-18 TL', '3.00-18 TL', 'Disco', 'Tambor', '800 mm', '98 kg', '2.6 Gal', '9.5:1', 'Telescopica hidraulica', 'Doble amortiguador regulable', 'CDI', '5 Velocidades'),
(2, 1, 1, 'CR4-125', '3990000', 'CGR 4T OHV', '125 cc', '10 hp', 'Manual', '4T', 'Aire', '1', '8000 rpm', 'Electrico Y Patada', 'Cadena', '1300 mm', '80/90/17', '110/80/17', 'Disco lobulado', 'Disco lobulado 230 mm', '1030 mm', '118 kg', '3.46 Gal', '9.5:1', 'Telescopica hidraulica', 'Doble amortiguador', 'IDI', '5 Velocidades'),
(3, 1, 1, 'CR5-200', '5590000', 'RE 4T OHC', '197 cc', '16.5 hp', 'Manual', '4T', 'Aire', '1', '8500 rpm', 'Electrico', 'Cadena', '1330 mm', '110/80/17', '130/70/17', 'Disco lobulado', 'Disco lobulado', '1080 mm', '125 kg', '3.2 Gal', '9.2:1', 'Telescopica hidraulica', 'Unishock', 'CDI', '6 Velocidades'),
(4, 1, 1, 'RTX-150', '4390000', 'SOHC 4T', '149 cc', '12.5 hp ', 'Manual', '4T', 'Aire', '1', '7000 rpm', 'Electrico', 'Cadena', '1330 mm', '90/90/17', '110/80/17', 'Disco lobulado', 'Disco', '1040 mm', '117 kg', '4.3 Gal', '9.2:1', 'Telescopica hidraulica', 'Unishock', 'DC-CDI', '5 Velocidades'),
(6, 1, 1, 'SPECIAL-110X', '3390000', 'SOHC 4T', '110 cc', '7.21 hp', 'Semiautomatica', '4T', 'Aire', '1', '8000 rpm', 'Electrico Y Patada', 'Cadena', '1225 mm', '2.50X17', '2.75X17', 'Disco lobulado', 'Tambor', '1110 mm', '98 kg', '1.2 Gal', '9.3:1', 'Telescopica hidraulica', 'Doble amortiguador regulable', 'CDI', '4 Velocidades'),
(7, 1, 1, 'FLEX-125', '3690000', 'OHC 4T', '123.7 cc', '8.6 hp', 'Semiautomatica', '4T', 'Aire', '1', '8000 rpm', 'Electrico Y Patada', 'Cadena', '1240 mm', '2.50X17', '2.75X17', 'Disco', 'Tambor', '1100 mm', '103 kg', '1 Gal', '9.7:1', 'Telescopica hidraulica', 'Doble amortiguador', 'CDI', '4 Velocidades'),
(8, 4, 1, 'STX-150', '4900000', 'SOHC 4T', '149 cc', '12.5 hp ', 'Manual', '4T', 'Aire', '1', '7000 rpm', 'Electrico', 'Cadena', '1330 mm', '90/90/17', '110/80/17', 'Disco 240 mm', 'Tambor', '1070 mm', '117 kg', '4.76 Gal', '9.2:1', 'Telescopica hidraulica', 'Doble amortiguador regulable', 'DC-CDI', '6 Velocidades'),
(9, 2, 1, 'Discover-150S', '4900000', 'OHC 4T', '144.8 cc', '14.3 hp', 'Manual', '4T', 'Aire', '1', '8500 rpm', 'Electrico Y Patada', 'Cadena', '1305 mm', '80/100/17', '100/90/17', 'Disco perforado 240 mm', 'Tambor 130 mm', '795 mm', '130 kg', '10 L', '9.3:1', 'Telescopica hidraulica', 'Monoshock con nitro', 'DC-CDI', '5 Velocidades'),
(10, 5, 1, 'TNT-25', '14222000', 'DOHC 4V 4T', '249.2 hp', '25.1 hp', 'Manual', '4T', 'Liquida', '1', '9000 rpm', 'Electrico', 'Cadena', '1400 mm', '110/70/17', '140/60/17', 'Disco 280 mm', 'Disco', '810 mm', '143 kg', '20 L', '11.2:1', 'Telescopica invertida 120 mm', 'Monoamortiguador 51 mm', 'CDI', '6 Velocidades'),
(11, 2, 1, 'BOXER-100', '3499000', 'OCH', '99.27 cc', '8.2 hp', 'Manual', '4T', 'Aire', '1', 'ND', 'Electrico y Patada', 'Cadena', 'ND', '2.75X17', '3.00X17', 'Tambor', 'Tambor', 'ND', '95 kg', '2.77 Gal', 'ND', 'Telescopica Hidraulica', 'Doble espiral regulable', 'CDI', '4 Velocidades'),
(12, 5, 1, 'TNT-302', '17500000', 'DOHC', '300 cc', '38 hp', 'Manual', '4T', 'Liquida', '2', '12000 rpm', 'Electrico', 'Cadena', '1405 mm', '110/70/17', '140/60/17', 'Doble disco', 'Disco', '795 mm', '183 kg', '16 lt', 'ND', 'TelescÃ³pica invertida', 'Monoamortiguador regulable', 'CDI', '6 Velocidades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(40) NOT NULL,
  `id_dealer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre_marca`, `id_dealer`) VALUES
(1, 'Akt', 900485799),
(2, 'Bajaj', 890900317),
(3, 'KTM', 901227795),
(4, 'Aprilia', 900593229),
(5, 'Benelli', 900513703);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `class` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `username`, `class`, `status`) VALUES
(80831121, 'admin@mail.com', 'admin', 'Marco Cubaque', 'Administrador', 'Activo'),
(1032382210, 'jcubaque@mail.com', '1234', 'Jose Cubaque', 'Usuario', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `delaer`
--
ALTER TABLE `delaer`
  ADD PRIMARY KEY (`id_dealer`);

--
-- Indices de la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`),
  ADD UNIQUE KEY `id_dealer` (`id_dealer`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detalles`
--
ALTER TABLE `detalles`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
  ADD CONSTRAINT `detalles_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`);

--
-- Filtros para la tabla `marca`
--
ALTER TABLE `marca`
  ADD CONSTRAINT `marca_ibfk_1` FOREIGN KEY (`id_dealer`) REFERENCES `delaer` (`id_dealer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
