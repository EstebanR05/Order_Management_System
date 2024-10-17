-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2024 a las 21:30:27
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_jurado_a`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` smallint(6) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `descripcion`) VALUES
(100, 'Electrodomesticos'),
(200, 'Aseo Hogar'),
(300, 'Ropa Dama'),
(400, 'Ropa Caballero'),
(500, 'Herramientas'),
(600, 'Computadores'),
(700, 'Jardineria'),
(800, 'Deportes'),
(900, 'Mascotas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `CodCiudad` smallint(6) NOT NULL,
  `nombre` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`CodCiudad`, `nombre`) VALUES
(501, 'Medellin'),
(801, 'Barranquilla'),
(1101, 'Bogota'),
(7601, 'Cali');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` smallint(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `codCiudad` smallint(6) DEFAULT NULL,
  `email` varchar(28) DEFAULT NULL,
  `nombreDeUsuario` varchar(10) DEFAULT NULL,
  `contrasena` varchar(10) DEFAULT NULL,
  PRIMARY key (idCliente)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `direccion`, `codCiudad`, `email`, `nombreDeUsuario`, `contrasena`) VALUES
(100, 'Santiago Umaña', 'Cr 7d #65-47', 7601, 'UmañaSant@gmail.com', 'Santiago U', 'umañaS123'),
(101, 'Jose Valencia', 'cll69 7b bis #63-12', 7601, 'burbanod89@gmail.com', 'Valecita69', 'contraseña'),
(102, 'Fernando Buitra', 'cr 7d bis #54-12', 7601, 'NandoTrago@gmail.com', 'Buitre62', 'b645783'),
(104, 'Karla Andrea Va', '6c Bis #64-12', 7601, 'KAndreaVal76@gmail.com', 'Kandrea67', 'AndreaVale'),
(105, 'Laura Valentina', '7d bis #56-21', 7601, 'ValentinaL67@gmail.com', 'LauraV68', '785453'),
(106, 'David Jurado', 'Cr 7c bis #62-15', 1101, 'juanjuradoj712@gmail.com', 'Davidxx', '161223'),
(107, 'Luz Caicedo', 'Cr 9b #45-75', 1101, 'Lcaicedo7432@gmail.com', 'LuzCa274', 'LuzCaicedo'),
(108, 'maria fernandez', '5d bis #65-14', 1101, 'MariaF785@gmail.com', 'MFernanda2', '210323'),
(109, 'Stella Martinez', '7c bis #64-96', 1101, 'STmartinez86@gmail.com', 'Stella', '310523'),
(110, 'miguel Torres', '7c bis #24-58', 1101, 'TorresMG75@gmail.com', 'MigueT32', 'Torresmig2'),
(111, 'Camila Torres', 'Cr 6b #23-45', 501, 'CMT78933@gmail.com', 'CTorres785', 'Ctorres275'),
(112, 'Julian Caicedo', 'cr 7g #48-56', 501, 'Jcaicedo286@gmail.com', 'JulianC', '287564'),
(113, 'Sara Gutierrez', '5c bis #65-14', 501, 'Saris7823@gmail.com', 'Saris2803', '874632'),
(114, 'Isabel Martinez', '7f bis #63-96', 501, 'IsabelM6743@gmail.com', 'Isabel', '894632'),
(115, 'Isabella Hurtad', '7e bis #24-76', 501, 'HurtadoIsa29@gmail.com', 'IsabellaH', '537261'),
(116, 'sarah fernandez', 'Cr 7e bis #54-17', 801, 'Sarahso78@gmail.com', 'SarahSo12', 'Sarah762'),
(117, 'natalia castro', 'Cr 7c bis #67-34', 801, 'NataCast893@gmail.com', 'NataCast', '892533'),
(118, 'natalia porras', '7g Bis #45-94', 801, 'Nataliporras28@gmail.com', 'Natalia', 'Porras0524'),
(119, 'anderson alvare', 'Cr 9f bis #78-12', 801, 'AlvarezAander67@gmail.com', 'AndesornA', '9287474'),
(120, 'juan pablo torr', 'Cr 9d #67-34', 801, 'TorresJuanP@gmail.com', 'TorresPabl', 'pablo1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad`
--

CREATE TABLE `entidad` (
  `idEntidad` smallint(6) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entidad`
--

INSERT INTO `entidad` (`idEntidad`, `nombre`) VALUES
(1, 'VISA'),
(2, 'MasterCard'),
(3, 'Diners'),
(4, 'AmericanExpress');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `nroFactura` smallint(6) NOT NULL,
  `fecha` date NOT NULL,
  `noTarjeta` decimal(18,0) NOT NULL,
  `tipoTarjeta` char(7) DEFAULT NULL CHECK (`tipoTarjeta` in ('CREDITO','DEBITO')),
  `noAprobacion` decimal(6,0) NOT NULL,
  `idEntidad` smallint(6) DEFAULT NULL,
  `nroOrden` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `nroOrden` smallint(6) NOT NULL,
  `idCliente` smallint(6) DEFAULT NULL,
  `fecha` date NOT NULL,
  `estado` char(10) DEFAULT NULL CHECK (`estado` in ('EnProceso','Facturada','ParaEnvio','Finalizada','Cancelada'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`nroOrden`, `idCliente`, `fecha`, `estado`) VALUES
(167, 116, '2024-08-29', 'ParaEnvio'),
(234, 119, '2024-08-24', 'ParaEnvio'),
(456, 111, '2024-06-25', 'ParaEnvio'),
(467, 120, '2024-08-12', 'Cancelada'),
(486, 100, '2024-08-15', 'EnProceso'),
(675, 113, '2024-08-23', 'ParaEnvio'),
(786, 115, '2024-08-15', 'EnProceso'),
(804, 109, '2024-08-14', 'Facturada'),
(873, 105, '2024-08-13', 'Cancelada'),
(905, 114, '2024-08-14', 'Facturada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` smallint(6) NOT NULL,
  `idCategoria` smallint(6) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  `noPiezas` smallint(6) DEFAULT 1,
  `pesoKg` decimal(3,1) DEFAULT NULL CHECK (`pesoKg` > 0),
  `precio` decimal(12,0) DEFAULT NULL CHECK (`precio` > 0),
  `cantidadDisp` smallint(6) DEFAULT NULL CHECK (`cantidadDisp` > 0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `idCategoria`, `nombre`, `descripcion`, `noPiezas`, `pesoKg`, `precio`, `cantidadDisp`) VALUES
(101, 100, 'Nevera Haceb', 'Nevera 2 puertas ahorradora de', 1, 95.0, 650000, 8),
(102, 100, 'Microondas LG', 'Microondas con pantalla digita', 1, 15.0, 220000, 7),
(103, 100, 'Lavadora Haceb', 'lavadora carga pesada ahorrado', 1, 75.0, 345000, 9),
(104, 100, 'tostadora haceb', 'tostadora de doble ranura ahor', 1, 5.0, 145000, 6),
(105, 100, 'Cafetera Haceb', 'Cafetera Vaso Grande ahorrador', 1, 6.0, 95000, 6),
(301, 300, 'licra deportiva', 'licra color negro, tela delgad', 2, 1.0, 20000, 5),
(302, 300, 'Crop Top', 'color azul oscuro, tela delgad', 2, 1.0, 21000, 8),
(303, 300, 'Sudadera Oversi', 'sudadera color beige tela abri', 2, 2.0, 62000, 6),
(304, 300, 'Pantalon Cargo ', 'colro negro, tela ancha', 1, 2.0, 55000, 5),
(305, 300, 'brasier', 'brasier de tiras doble color n', 2, 1.0, 14000, 5),
(501, 500, 'Alicate', 'Alicate con agarre de goma y c', 1, 1.0, 18000, 31),
(502, 500, 'Martillo', 'Martillo con Agarre de goma y ', 4, 2.0, 19000, 18),
(503, 500, 'llave inglesa', 'llave inglesa de acero inoxida', 3, 2.0, 19000, 26),
(504, 500, 'Taladro', 'Taladro junto con kit de 10 br', 2, 3.0, 56000, 7),
(505, 500, 'kit de destorni', 'destornilladores de puntas var', 3, 2.0, 19500, 12),
(601, 600, 'Portatil Lenovo', 'partatil lenovo pantalla de 9 ', 2, 7.0, 1345000, 6),
(602, 600, 'Portatil Acer', 'Pantalla 9,5 pulgadas 6gb RAM ', 3, 7.0, 1465000, 7),
(603, 600, 'PC de escritori', 'Computadora de escritorio pant', 1, 19.0, 2110000, 5),
(604, 600, 'Impresora LG', 'Impresora LG Multicolores Rapi', 2, 9.0, 950000, 6),
(605, 600, 'PC escritorio L', 'Pantalla 15 pulgadas 8gb RAM 8', 2, 17.0, 2134000, 6),
(801, 800, 'Par de raquetas', 'Raquetas con mango de goma sua', 4, 1.0, 18000, 17),
(802, 800, 'Balon de futbol', 'balon de futbol de cuero, dura', 3, 1.0, 37000, 22),
(803, 800, 'Pelota de Voley', 'Pelota de voley de cuero durad', 5, 1.0, 123000, 21),
(804, 800, 'par de mancuern', 'mancuernas de 20 kilos c/u', 2, 40.0, 55000, 26),
(805, 800, 'Termo deportivo', 'termo endotermico', 2, 1.0, 21000, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosorden`
--

CREATE TABLE `productosorden` (
  `nroOrden` smallint(6) NOT NULL,
  `idProducto` smallint(6) NOT NULL,
  `cantidad` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productosorden`
--

INSERT INTO `productosorden` (`nroOrden`, `idProducto`, `cantidad`) VALUES
(486, 802, 3),
(675, 302, 2),
(675, 801, 2),
(675, 803, 3),
(786, 105, 2),
(786, 602, 2),
(873, 102, 1),
(873, 505, 2),
(905, 604, 1),
(905, 605, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`CodCiudad`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD KEY `codCiudad` (`codCiudad`);

--
-- Indices de la tabla `entidad`
--
ALTER TABLE `entidad`
  ADD PRIMARY KEY (`idEntidad`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`nroFactura`),
  ADD KEY `idEntidad` (`idEntidad`),
  ADD KEY `nroOrden` (`nroOrden`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`nroOrden`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `productosorden`
--
ALTER TABLE `productosorden`
  ADD PRIMARY KEY (`nroOrden`,`idProducto`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`codCiudad`) REFERENCES `ciudad` (`CodCiudad`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`idEntidad`) REFERENCES `entidad` (`idEntidad`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`nroOrden`) REFERENCES `orden` (`nroOrden`);

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Filtros para la tabla `productosorden`
--
ALTER TABLE `productosorden`
  ADD CONSTRAINT `productosorden_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`),
  ADD CONSTRAINT `productosorden_ibfk_2` FOREIGN KEY (`nroOrden`) REFERENCES `orden` (`nroOrden`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
