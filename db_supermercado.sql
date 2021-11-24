-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 19:01:22
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_supermercado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(30) NOT NULL,
  `refrig` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `nom_cat`, `refrig`) VALUES
(2, 'Lácteos', 1),
(4, 'Limpieza', 0),
(5, 'Congelados', 1),
(6, 'Perfumería', 0),
(18, 'Almacén', 0),
(20, 'Carnicería', 1),
(21, 'Bebés', 0),
(22, 'Verdulería', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `puntaje` int(1) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_producto`, `id_usuario`, `comentario`, `puntaje`, `fecha`) VALUES
(12, 24, 3, 'Son mucho más ricas que las caseras.', 5, '2021-11-18'),
(13, 17, 1, 'No me resultó bueno.', 1, '2021-11-19'),
(15, 19, 1, 'Muy verdes.', 5, '2021-11-21'),
(16, 19, 1, 'Son muy ricas. ', 4, '2021-11-21'),
(25, 17, 3, 'Deja la cocina limpia.', 5, '2021-11-24'),
(26, 17, 3, 'Mr. Musculo es mejor.', 3, '2021-11-24'),
(31, 17, 3, 'Muy económico.', 5, '2021-11-24'),
(33, 18, 3, 'Tiene muy rico aroma.', 5, '2021-11-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_prod` int(11) NOT NULL,
  `nom_prod` varchar(25) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `peso` int(11) NOT NULL,
  `unidad_medida` varchar(5) NOT NULL,
  `precio` double NOT NULL,
  `id_cat` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_prod`, `nom_prod`, `marca`, `peso`, `unidad_medida`, `precio`, `id_cat`, `imagen`) VALUES
(6, 'Leche descremada', 'Armonia', 1000, 'ml', 85, 2, 'img/619e7b82e990b1.49947246.'),
(7, 'Yogur con cereales', 'Ser', 120, 'gr', 100, 2, ''),
(9, 'Queso untable', 'La Serenisima', 480, 'gr', 250, 2, ''),
(15, 'Lavandina', 'Ayudin', 2000, 'ml', 100, 4, 'img/619e2ca5e13c40.50873647.png'),
(17, 'Antigrasa', 'Mr. Músculo', 350, 'ml', 260, 4, ''),
(18, 'Desodorante para piso', 'Poett', 950, 'ml', 90, 4, ''),
(19, 'Arvejas', 'La Granja', 500, 'gr', 300, 5, ''),
(20, 'Milanesas de pollo', 'Granja del Sol', 600, 'gr', 400, 5, ''),
(24, 'Papas fritas', 'Mc Cain', 500, 'gr', 500, 5, ''),
(29, 'Pañales', 'Pampers', 100, 'gr', 1000, 5, ''),
(30, 'Café', 'La Virginia', 300, 'gr', 300, 18, 'img/619c1177240bd1.91678510.png'),
(32, 'Harina', 'Pureza', 1000, 'gr', 95, 18, ''),
(33, 'Jamón cocido', 'Paladini', 500, 'gr', 200, 5, ''),
(34, 'Jamón crudo', 'Paladini', 150, 'gr', 150, 5, ''),
(35, 'Jabón en polvo', 'Ala', 1000, 'gr', 180, 4, ''),
(36, 'Jabón en polvo', 'Ala', 1000, 'gr', 250, 4, ''),
(37, 'Jabón liquido', 'Ariel', 1000, 'ml', 300, 4, ''),
(38, 'Capuccino', 'Arlistan', 170, 'gr', 195, 18, ''),
(39, 'Café instantáneo', 'La Virginia', 170, 'gr', 400, 18, ''),
(40, 'Arroz', 'Gallo', 1000, 'gr', 200, 18, 'img/619c21077b4420.12401728.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(400) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `contraseña`, `rol`) VALUES
(1, 'diegodutka@gmail.com', '$2a$12$gfW39BvABFOGw/E5KEGnr.V7G1G2J6fsl0q9E1jKqJalTiHkcfD/2', 'admin'),
(3, 'agusese@gmail.com', '$2y$10$cAetVVg.HbPbzAKeL3mlUOIDPG0MVXecLPeySOWGB8HJV4xoHs7ju', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
