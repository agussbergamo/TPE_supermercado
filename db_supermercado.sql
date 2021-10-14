-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2021 a las 23:17:50
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
(3, 'Bebidas', 0),
(4, 'Limpieza', 0),
(5, 'Congelados', 1),
(6, 'Perfumería', 0),
(18, 'Almacén', 0);

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
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_prod`, `nom_prod`, `marca`, `peso`, `unidad_medida`, `precio`, `id_cat`) VALUES
(6, 'Leche descremada', 'Armonia', 1000, 'ml', 60, 2),
(7, 'Yogur con cereales', 'Ser', 120, 'gr', 100, 2),
(9, 'Queso untable', 'La Serenisima', 480, 'gr', 250, 2),
(11, 'Gaseosa cola', 'Pepsi', 1250, 'ml', 115, 3),
(12, 'Gaseosa pomelo', 'Paso de los Toros', 2250, 'ml', 140, 3),
(13, 'Gaseosa uva', 'Manaos', 1500, 'ml', 200, 3),
(14, 'Jugo de naranja', 'Citric', 1000, 'ml', 200, 3),
(15, 'Lavandina', 'Ayudin', 1500, 'ml', 100, 4),
(17, 'Antigrasa', 'Mr. Músculo', 350, 'ml', 260, 4),
(18, 'Desodorante para piso', 'Poett', 950, 'ml', 90, 4),
(19, 'Arvejas', 'La Granja', 500, 'gr', 300, 5),
(20, 'Milanesas de pollo', 'Granja del Sol', 600, 'gr', 400, 5),
(24, 'Papas fritas', 'Mc Cain', 500, 'gr', 500, 5),
(29, 'Pañales', 'Pampers', 100, 'gr', 101010, 5),
(30, 'Café', 'La Virginia', 200, 'gr', 150, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `contraseña`) VALUES
(1, 'diegodutka@gmail.com', '$2a$12$gfW39BvABFOGw/E5KEGnr.V7G1G2J6fsl0q9E1jKqJalTiHkcfD/2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

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
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
