-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 02-10-2023 a las 01:41:52
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Clave_C` int(10) NOT NULL,
  `Nombre` text NOT NULL,
  `Edad` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `Clave_R` int(11) NOT NULL,
  `NOMBRE` varchar(200) NOT NULL,
  `PRECIO` decimal(20,2) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `IMAGEN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`Clave_R`, `NOMBRE`, `PRECIO`, `DESCRIPCION`, `IMAGEN`) VALUES
(1, 'TARTINES', 55.00, ' Las tartines pueden untarse con distintos alimentos dulces o salados, como mermelada, mantequilla, queso o paté, entre otros productos que se extienden con facilidad. A veces, se añaden otros tipos de ingredientes no untables, como, por ejemplo, jamón. Estas rebanadas de pan pueden acompañarse con un café con leche o con un té.', 'https://www.kayak.es/news/wp-content/uploads/sites/2/2022/09/THEME_FOOD_GREEK_SPANAKOPITA_GettyImages-1221768276-1-820x656.jpg'),
(2, 'CROISSANTS', 35.00, ' Es un producto hecho con pocos ingredientes (solo lleva harina, levadura y manteca o margarina), pero su elaboración es compleja, porque requiere horas de amasado y enfriado. Se puede acompañar de una taza de café caliente o chocolate. ', 'https://www.kayak.es/news/wp-content/uploads/sites/2/2022/09/THEME_FOOD_CROISSANT_GettyImages-1289353397-820x656.jpg'),
(3, 'CROQUE-MONSIEUR Y CROQUE-MADAME', 30.00, 'El croque-monsieur es un sándwich elaborado con pan de molde, jamón, queso y salsa bechamel. El queso utilizado para hacer el croque-monsieur puede ser gruyer o emmental y el jamón debe ser cocido. El sándwich se gratina al horno con salsa bechamel. ', 'https://www.kayak.es/news/wp-content/uploads/sites/2/2022/10/THEME_FOOD_CROQUE_MONSIEUR_GettyImages-155388694-820x656.jpg'),
(5, 'TOSTADA FRANCESA', 40.00, 'Las tostadas francesas son rebanadas de pan duro empapadas en una mezcla de leche y huevos y que, posteriormente, se fríen. Además, suelen aromatizarse con vainilla, canela o nuez moscada y se les añade también azúcar.', 'https://www.kayak.es/news/wp-content/uploads/sites/2/2022/10/THEME_FOOD_FRENCH_TOAST_GettyImages-1321032058-820x656.jpg'),
(6, 'OMELETTES', 35.00, 'tortilla solo con huevos, sal y aceite de oliva a la que bautizaron como «tortilla de cuando los franceses», que, posteriormente, derivaría en la actual denominación de tortilla francesa. ', 'https://www.kayak.es/news/wp-content/uploads/sites/2/2022/10/THEME_FOOD_SPANISH_TORTILLA_DE_PATATA_GettyImages-1274892902-1-820x656.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblinventaroventa`
--

CREATE TABLE `tblinventaroventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` decimal(20,2) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCARGADO` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblinventaroventa`
--

INSERT INTO `tblinventaroventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) VALUES
(1, 9, 1, 55.00, 1, 0),
(2, 9, 2, 35.00, 1, 0),
(3, 9, 2, 35.00, 1, 0),
(4, 9, 2, 35.00, 1, 0),
(5, 9, 2, 35.00, 1, 0),
(6, 9, 5, 40.00, 1, 0),
(7, 9, 2, 35.00, 1, 0),
(8, 9, 2, 35.00, 1, 0),
(9, 9, 2, 35.00, 1, 0),
(10, 9, 2, 35.00, 1, 0),
(11, 9, 2, 35.00, 1, 0),
(12, 9, 2, 35.00, 1, 0),
(13, 9, 2, 35.00, 1, 0),
(14, 9, 2, 35.00, 1, 0),
(15, 9, 3, 30.00, 1, 0),
(16, 9, 2, 35.00, 1, 0),
(17, 9, 2, 35.00, 1, 0),
(18, 9, 2, 35.00, 1, 0),
(19, 9, 2, 35.00, 1, 0),
(20, 9, 2, 35.00, 1, 0),
(21, 9, 2, 35.00, 1, 0),
(22, 9, 2, 35.00, 1, 0),
(23, 9, 2, 35.00, 1, 0),
(24, 9, 2, 35.00, 1, 0),
(25, 9, 2, 35.00, 1, 0),
(26, 9, 2, 35.00, 1, 0),
(27, 9, 2, 35.00, 1, 0),
(28, 9, 2, 35.00, 1, 0),
(29, 9, 2, 35.00, 1, 0),
(30, 9, 2, 35.00, 1, 0),
(31, 9, 2, 35.00, 1, 0),
(32, 9, 2, 35.00, 1, 0),
(33, 9, 2, 35.00, 1, 0),
(34, 9, 1, 55.00, 1, 0),
(35, 9, 2, 35.00, 1, 0),
(36, 9, 2, 35.00, 1, 0),
(37, 9, 2, 35.00, 1, 0),
(38, 9, 2, 35.00, 1, 0),
(39, 9, 2, 35.00, 1, 0),
(40, 9, 2, 35.00, 1, 0),
(41, 9, 1, 55.00, 1, 0),
(42, 9, 1, 55.00, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) NOT NULL,
  `paypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Numero` int(11) NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblventas`
--

INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `paypalDatos`, `Fecha`, `Numero`, `Total`, `status`) VALUES
(1, '12345678910', '', '2023-10-01 22:01:19', 558798575, 55.00, 'pendiente'),
(2, '12345678910', '', '2023-10-01 22:01:19', 558798575, 55.00, 'pendiente'),
(3, 'p8u2qmu5sb8ite9rjn252gifq8', '', '2023-10-01 14:16:16', 2147483647, 1495.00, 'pendiente'),
(4, 'p8u2qmu5sb8ite9rjn252gifq8', '', '2023-10-01 14:20:33', 554, 1550.00, 'pendiente'),
(5, 'p8u2qmu5sb8ite9rjn252gifq8', '', '2023-10-01 14:39:03', 0, 1550.00, 'pendiente'),
(6, 'p8u2qmu5sb8ite9rjn252gifq8', '', '2023-10-01 14:39:31', 0, 1550.00, 'pendiente'),
(7, 'p8u2qmu5sb8ite9rjn252gifq8', '', '2023-10-01 14:40:23', 0, 1550.00, 'pendiente'),
(8, 'p8u2qmu5sb8ite9rjn252gifq8', '', '2023-10-01 14:40:46', 0, 1550.00, 'pendiente'),
(9, 'p8u2qmu5sb8ite9rjn252gifq8', '', '2023-10-01 14:43:51', 2147483647, 1550.00, 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Clave_C`);

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`Clave_R`);

--
-- Indices de la tabla `tblinventaroventa`
--
ALTER TABLE `tblinventaroventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVENTA` (`IDVENTA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Clave_C` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `Clave_R` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tblinventaroventa`
--
ALTER TABLE `tblinventaroventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblinventaroventa`
--
ALTER TABLE `tblinventaroventa`
  ADD CONSTRAINT `tblinventaroventa_ibfk_1` FOREIGN KEY (`IDVENTA`) REFERENCES `tblventas` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `tblinventaroventa_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `comida` (`Clave_R`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
