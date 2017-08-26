-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2017 a las 06:15:19
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `detalle_id` int(11) NOT NULL,
  `factura_id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`detalle_id`, `factura_id`, `id_producto`, `cantidad`, `precio`) VALUES
(1, 10, 1, 2, 20.5),
(1, 11, 1, 1, 20.5),
(2, 10, 2, 1, 4.95);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `factura_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`factura_id`, `persona_id`, `fecha`) VALUES
(10, 1, '2017-08-09'),
(11, 2, '2017-08-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `orden_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `precio` float(5,2) NOT NULL,
  `cantidad` int(2) NOT NULL,
  `total` float(10,2) NOT NULL,
  `orden_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`orden_id`, `producto_id`, `usuario_id`, `precio`, `cantidad`, `total`, `orden_estado`) VALUES
(9, 4, 1, 9.95, 1, 9.95, 0),
(11, 1, 2, 20.50, 1, 20.50, 0),
(12, 7, 2, 14.95, 1, 14.95, 0),
(15, 2, 1, 4.95, 1, 4.95, 0),
(16, 2, 2, 4.95, 1, 4.95, 0),
(17, 1, 2, 20.50, 5, 102.50, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `persona_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`persona_id`, `nombre`, `apellido`, `cedula`, `fecha_nacimiento`, `genero`, `email`) VALUES
(1, 'Pierre Stalin', 'Chavez Pihuave', '0931587034', '1996-10-25', 'masculino', 'pierre.chavezp@ug.edu.ec'),
(2, 'Pierro', 'Ignacio', '1234567890', '2012-08-01', 'maculino', 'pierre_chavez@outlook.com'),
(3, 'Kevin', 'Lupera Bravo', '0951726777', '2002-12-11', 'mujer', 'kevinlupera1997@outlook.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `producto_id` int(11) NOT NULL,
  `pro_nombre` varchar(100) NOT NULL,
  `pro_descripcion` varchar(300) NOT NULL,
  `pro_precio` float(5,2) NOT NULL,
  `pro_img` varchar(50) NOT NULL,
  `pro_stock` int(3) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`producto_id`, `pro_nombre`, `pro_descripcion`, `pro_precio`, `pro_img`, `pro_stock`) VALUES
(1, 'Arduino UNO', 'versión clásica de Arduino UNO R3', 20.50, 'arduinoR1.jpg', 100),
(2, 'Sensor de Humedad de Suelo', 'Sensor de Humedad de Suelo es fácil de usar, mide la humedad en el suelo y materiales similares', 4.95, 'shs.jpg', 100),
(3, 'Sensor de Pulso', 'El Sensor de Pulso Amped es un sensor de frecuencia cardíaca plug-and-play para Arduino.', 4.95, 'spulso.jpg', 100),
(4, 'Sensor de movimiento PIR', 'Enciéndalo y espere 1-2 segundos para que el sensor obtenga una instantánea de la cámara. Si algo se mueve después de ese período, el pin de \"alarma\" bajará.', 9.95, 'pir.jpg', 100),
(5, 'Sparkfun GPS Logger Escudo', 'El escudo se basa en un GP3906-TLP Módulo GPS - un receptor GPS de 66 canales que ofrece una arquitectura MT3339 de MediaTek y hasta una velocidad de actualización de 10 Hz.', 44.95, 'spkgps.jpg', 100),
(6, 'LilyPad Vibe Board', 'LilyPad es una tecnología portátil desarrollado por Leah Buechley y diseñada por Leah y Sparkfun.', 7.95, 'lilypad.jpg', 100),
(7, 'micro:bit Board', 'El micro BBC: bit es un ordenador de bolsillo que le permite ser creativo con la tecnología digital.', 14.95, 'microbit.jpg', 100),
(8, 'LilyPad Button Board', 'CLilyPad es una tecnología de e-textiles portátil desarrollado por Leah Buechley y diseñada por Leah y Sparkfun.', 1.50, 'lilybt.jpg', 100),
(9, 'Escudo MyoWare LED', 'Con este escudo se le proporcionará con una representación visual de las señales proporcionadas por el sensor de Muscle MyoWare.', 24.95, 'emyoware.jpg', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `tipo` int(1) NOT NULL DEFAULT '1',
  `usu_estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `clave`, `persona_id`, `tipo`, `usu_estado`) VALUES
(1, 'admin', '12345', 1, 4, 1),
(2, 'pierre', '12345', 2, 3, 1),
(3, 'kevin', '12345678', 3, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`detalle_id`,`factura_id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`factura_id`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`orden_id`),
  ADD KEY `pk_ordenes` (`orden_id`,`producto_id`,`usuario_id`) USING BTREE,
  ADD KEY `fk_producto_id` (`producto_id`) USING BTREE,
  ADD KEY `fk_usuario_id` (`usuario_id`) USING BTREE;

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`persona_id`),
  ADD KEY `pk_persona` (`persona_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`producto_id`),
  ADD UNIQUE KEY `pk_producto` (`producto_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `pk_usuarioId` (`usuario_id`),
  ADD KEY `fk_usuario_personaId` (`persona_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `detalle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `factura_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `orden_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `persona_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `producto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
