-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2018 a las 05:58:59
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marfa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `IdCliente` int(11) NOT NULL,
  `RfcCliente` varchar(15) NOT NULL,
  `RazonSocial` varchar(100) NOT NULL,
  `EstadoCliente` int(11) NOT NULL,
  `DiasCredito` int(11) NOT NULL,
  `SaldoCliente` decimal(10,0) NOT NULL,
  `TelefonoContacto` varchar(10) NOT NULL,
  `Calle` varchar(100) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `Colonia` varchar(100) NOT NULL,
  `CodPostal` varchar(6) NOT NULL,
  `Ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`IdCliente`, `RfcCliente`, `RazonSocial`, `EstadoCliente`, `DiasCredito`, `SaldoCliente`, `TelefonoContacto`, `Calle`, `Numero`, `Colonia`, `CodPostal`, `Ciudad`) VALUES
(24, '940209PH5SAI', 'SERVICIOS AMBIENTALES INTERNACIONALES,S.A DE R.L.D', 30, 1, '0', '3148726003', 'PROL. PINO SUAREZ', '2719-B', 'BELLA VISTA', '28219', 'Ciudad de MÃ©xico'),
(25, 'AAA730717LZ3', 'AGUILA AZTECA AUTOTRANSPORTES DE CARGA', 30, 1, '0', '3141259456', 'BRITTINGHAM NUM. 134', '50', 'CD.INDUSTRIAL', '25842', 'TORREON, COAH.'),
(26, 'AAC9712173I2', 'AUTOTRANSPORTES ACATITLAN, S. A. DE C. V.', 0, 1, '0', '3148514552', 'LIBERTAD', '50-A', 'SANTA CLARA', '282199', 'ECATEPEC, EDO. DE MEX.'),
(27, 'AAG870313TX7', 'AUTOTANQUES ANTONIO GARZA RUIZ,S.A. DE C.V.', 10, 1, '0', '3141382001', 'CARRETERA MONTERREY KM. 103-B', '50', 'LAS CUMBRES', '28487', 'REYNOSA, TAM.'),
(28, 'AAL741030G97', 'AUTOTRANSPORTES ALANIS, S.A. DE C.V.', 0, 0, '0', '3148726003', 'CARRETERA AL AEROPUERTO KM. 2.750', '50', 'NUEVO LAREDO,TAM.', '28219', 'NUEVO LAREDO, TAM.'),
(29, 'AAR0506234E4', 'AUTOCARGA REYES REYNOSO, S A DE C V', 10, 0, '0', '3148726003', 'PROL 5 DE MAYO', '1547', 'VALLE DON CAMILO', '28575', 'TOLUCA EDO DE MEX'),
(30, 'ACA040823965', 'AUTOTRANSPORTES DEL CARMEN S.A. DE C.V.', 15, 1, '0', '314872563', '. AV. MALECON S/N CALETA ENTRE', '38', 'CALETA', '28745', 'CD. DEL CARMEN,CAMPECHE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas_por_cobrar`
--

CREATE TABLE `cuentas_por_cobrar` (
  `IdFactura` int(11) NOT NULL,
  `UUID` varchar(45) NOT NULL,
  `LugarExpedicion` varchar(100) NOT NULL,
  `MetodoPago` varchar(50) NOT NULL,
  `FechaEmision` date NOT NULL,
  `DiasCredito` int(11) NOT NULL,
  `Total` decimal(10,0) NOT NULL,
  `Moneda` varchar(15) NOT NULL,
  `Subtotal` decimal(10,0) NOT NULL,
  `EmisorNombre` varchar(50) NOT NULL,
  `EmisorRfc` varchar(50) NOT NULL,
  `ReceptorNombre` varchar(50) NOT NULL,
  `Total_ImpuestosTrasladados` decimal(10,0) NOT NULL,
  `TasaCuota` decimal(10,0) NOT NULL,
  `TipoFactor` varchar(50) NOT NULL,
  `Impuestos` int(11) NOT NULL,
  `FechaVencimiento` date NOT NULL,
  `IdCliente` int(11) NOT NULL,
  `IdProveedor` int(11) NOT NULL,
  `IdAbono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuentas_por_cobrar`
--

INSERT INTO `cuentas_por_cobrar` (`IdFactura`, `UUID`, `LugarExpedicion`, `MetodoPago`, `FechaEmision`, `DiasCredito`, `Total`, `Moneda`, `Subtotal`, `EmisorNombre`, `EmisorRfc`, `ReceptorNombre`, `Total_ImpuestosTrasladados`, `TasaCuota`, `TipoFactor`, `Impuestos`, `FechaVencimiento`, `IdCliente`, `IdProveedor`, `IdAbono`) VALUES
(17, 'A591C596-0DF5-40D1-8466-5E0E6A82AB4D', '28219', 'PUE', '2018-03-06', 0, '1160', 'MXN', '1000', 'MIGUEL', 'AENM7409283I5', 'BTM', '160', '0', 'Tasa', 2, '2018-06-28', 0, 0, 0),
(18, 'A591C596-0DF5-40D1-8466-5E0E6A82AB4D', '28219', 'PUE', '2018-03-06', 0, '1160', 'MXN', '1000', 'MIGUEL', 'AENM7409283I5', 'BTM', '160', '0', 'Tasa', 2, '2018-06-30', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `IdProveedor` int(11) NOT NULL,
  `RfcProveedor` varchar(15) NOT NULL,
  `RazonSocial` varchar(100) NOT NULL,
  `EstadoProveedor` int(11) NOT NULL,
  `DiasCredito` int(11) NOT NULL,
  `SaldoProveedor` decimal(10,0) NOT NULL,
  `TelefonoContacto` varchar(10) NOT NULL,
  `Calle` varchar(100) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `Colonia` varchar(100) NOT NULL,
  `CodPostal` varchar(6) NOT NULL,
  `Ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`IdProveedor`, `RfcProveedor`, `RazonSocial`, `EstadoProveedor`, `DiasCredito`, `SaldoProveedor`, `TelefonoContacto`, `Calle`, `Numero`, `Colonia`, `CodPostal`, `Ciudad`) VALUES
(1, '53786yt', '11111', 1, 1, '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relabonofactura`
--

CREATE TABLE `relabonofactura` (
  `idRelAbono` int(11) NOT NULL,
  `idFactura` int(11) NOT NULL,
  `abono` float NOT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relabonofactura`
--

INSERT INTO `relabonofactura` (`idRelAbono`, `idFactura`, `abono`, `fechaCreacion`) VALUES
(20, 17, 3333, '2018-06-20 03:56:33'),
(21, 18, 123, '2018-06-20 03:56:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `IdTipoUsuario` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`IdTipoUsuario`, `Usuario`) VALUES
(1, 'Administrador'),
(2, 'Con Privilegios Limitados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuarios` int(11) NOT NULL,
  `NombreUsuario` varchar(50) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `ApellidoPaterno` varchar(50) NOT NULL,
  `ApellidoMaterno` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TelContactoUsuario` varchar(10) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `IdTipoUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuarios`, `NombreUsuario`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Password`, `Email`, `TelContactoUsuario`, `FechaNacimiento`, `IdTipoUsuario`) VALUES
(7, 'Marlo', 'Marlo', 'Jimenez', 'Perez', '1254', 'miguel_22_t@hotmail.com', '3148726003', '1996-10-23', 1),
(8, 'MiguelA22', 'Miguel', 'Amezcua', 'Alcantar', '123456', 'miguel_22_t@hotmail.com', '3148726003', '1996-10-10', 1),
(9, 'Miguel45', 'Miguel', 'Amezcua', 'Alcantar', 'Mike2211', 'asocmarctkd@gmail.com', '3148726003', '1996-11-10', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indices de la tabla `cuentas_por_cobrar`
--
ALTER TABLE `cuentas_por_cobrar`
  ADD PRIMARY KEY (`IdFactura`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`IdProveedor`);

--
-- Indices de la tabla `relabonofactura`
--
ALTER TABLE `relabonofactura`
  ADD PRIMARY KEY (`idRelAbono`),
  ADD KEY `idFactura` (`idFactura`) USING BTREE;

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`IdTipoUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuarios`),
  ADD KEY `IdTipoUsuario` (`IdTipoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `cuentas_por_cobrar`
--
ALTER TABLE `cuentas_por_cobrar`
  MODIFY `IdFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `IdProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `relabonofactura`
--
ALTER TABLE `relabonofactura`
  MODIFY `idRelAbono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `IdTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `relabonofactura`
--
ALTER TABLE `relabonofactura`
  ADD CONSTRAINT `relabonofactura_ibfk_1` FOREIGN KEY (`idFactura`) REFERENCES `cuentas_por_cobrar` (`IdFactura`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`IdTipoUsuario`) REFERENCES `tipousuario` (`IdTipoUsuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
