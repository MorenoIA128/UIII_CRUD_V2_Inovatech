-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 20:18:18
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdinovatech`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedidos`
--

CREATE TABLE `tbl_pedidos` (
  `idPedido` int(10) NOT NULL,
  `idCliente` int(10) NOT NULL,
  `idEmpleado` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `total` double(10,2) NOT NULL,
  `metodoDePago` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `numeroDeSeguimiento` varchar(50) NOT NULL,
  `fechaDeEntrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_pedidos`
--

INSERT INTO `tbl_pedidos` (`idPedido`, `idCliente`, `idEmpleado`, `fecha`, `total`, `metodoDePago`, `direccion`, `numeroDeSeguimiento`, `fechaDeEntrega`) VALUES
(1, 1, 21, '2023-10-23', 5000.00, 'Transferencia', 'Avenida Lopez', '12345', '2023-10-28'),
(2, 4, 16, '2023-10-24', 600.00, 'Efectivo', 'Calle Troncoso', '54321', '2023-11-03'),
(3, 8, 12, '2023-10-26', 800.00, 'Efectivo', 'Avenida Canada', '45622', '2023-11-09'),
(4, 10, 14, '2023-10-15', 9000.00, 'Transferencia', 'Calle Ramones', '42244', '2023-11-10'),
(5, 45, 8, '2023-10-13', 654.00, 'Efectivo', 'Avenida Jimenez', '54896', '2023-11-02'),
(6, 16, 7, '2023-10-10', 9005.00, 'Deposito', 'Calle Toronja', '75986', '2023-10-25'),
(7, 51, 7, '2023-10-01', 4563.00, 'Transferencia', 'Avenida Ejercito', '45678', '2023-10-28'),
(8, 60, 5, '2023-09-24', 1234.00, 'Deposito', 'Avenida Chilaquil', '78956', '2024-01-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  ADD PRIMARY KEY (`idPedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  MODIFY `idPedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
