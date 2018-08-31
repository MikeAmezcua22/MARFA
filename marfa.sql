-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2018 a las 14:56:51
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

INSERT INTO `clientes` (`IdCliente`, `RfcCliente`, `RazonSocial`, `EstadoCliente`, `SaldoCliente`, `TelefonoContacto`, `Calle`, `Numero`, `Colonia`, `CodPostal`, `Ciudad`) VALUES
(25, 'AENM7409283I5', 'AGUILA AZTECA AUTOTRANSPORTES DE CARGA', 30, '0', '3141259456', 'BRITTINGHAM NUM. 134', '50', 'CD.INDUSTRIAL', '25842', 'TORREON, COAH.'),
(26, 'SCL050629E23', 'AUTOTRANSPORTES ACATITLAN, S. A. DE C. V.', 0, '0', '3148514552', 'LIBERTAD', '50-A', 'SANTA CLARA', '282199', 'ECATEPEC, EDO. DE MEX.'),
(27, 'AAG870313TX7', 'AUTOTANQUES ANTONIO GARZA RUIZ,S.A. DE C.V.', 10, '0', '3141382001', 'CARRETERA MONTERREY KM. 103-B', '50', 'LAS CUMBRES', '28487', 'REYNOSA, TAM.'),
(28, 'AAL741030G97', 'AUTOTRANSPORTES ALANIS, S.A. DE C.V.', 0, '0', '3148726003', 'CARRETERA AL AEROPUERTO KM. 2.750', '50', 'NUEVO LAREDO,TAM.', '28219', 'NUEVO LAREDO, TAM.'),
(29, 'AAR0506234E4', 'AUTOCARGA REYES REYNOSO, S A DE C V', 10, '0', '3148726003', 'PROL 5 DE MAYO', '1547', 'VALLE DON CAMILO', '28575', 'TOLUCA EDO DE MEX'),
(30, 'ACA040823965', 'AUTOTRANSPORTES DEL CARMEN S.A. DE C.V.', 15, '0', '314872563', '. AV. MALECON S/N CALETA ENTRE', '38', 'CALETA', '28745', 'CD. DEL CARMEN,CAMPECHE');

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
  `IdAbono` int(11) NOT NULL,
  `ReceptorRFC` varchar(50) NOT NULL,
  `BolPagad` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuentas_por_cobrar`
--

INSERT INTO `cuentas_por_cobrar` (`IdFactura`, `UUID`, `LugarExpedicion`, `MetodoPago`, `FechaEmision`, `Total`, `Moneda`, `Subtotal`, `EmisorNombre`, `EmisorRfc`, `ReceptorNombre`, `Total_ImpuestosTrasladados`, `TasaCuota`, `TipoFactor`, `Impuestos`, `FechaVencimiento`, `IdCliente`, `IdProveedor`, `IdAbono`, `ReceptorRFC`, `BolPagad`) VALUES
(52, 'A3B768F5-49F9-4FFD-9963-6BAB69D3A588', '28219', 'PPD', '2018-06-25', '35322', 'MXN', '30450', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4872', '0', 'Tasa', 2, '2018-07-31', 0, 0, 0, 'SCL050629E23', 1),
(53, 'E9E05203-8FFF-4E0A-9D0A-0D5FCAE2311D', '28219', 'PUE', '2018-06-20', '835', 'MXN', '720', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '115', '0', 'Tasa', 2, '2018-08-01', 0, 0, 0, 'SCL050629E23', 1),
(54, '98D10808-29B4-486A-A2AE-44DBC7C7C5F5', '28219', 'PPD', '2018-06-19', '8700', 'MXN', '7500', 'MIGUEL', 'AENM7409283I5', 'AEP', '1200', '0', 'Tasa', 2, '2018-08-03', 0, 0, 0, 'ASP050701C58', 0),
(56, 'D0EFD47F-BC14-4925-9D55-B8A11995A854', '28219', 'PPD', '2018-06-12', '7598', 'MXN', '6550', 'MIGUEL', 'AENM7409283I5', 'AEP', '1048', '0', 'Tasa', 2, '2018-08-03', 0, 0, 0, 'ASP050701C58', 0),
(57, 'A5DEB344-7FF2-4BC7-9F10-FFDC5C8606C7', '28219', 'PPD', '2018-06-12', '33118', 'MXN', '28550', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4568', '0', 'Tasa', 2, '2018-08-04', 0, 0, 0, 'SCL050629E23', 0),
(59, '1926C2CD-DE71-4AC9-B0A9-56507F7B4B3C', '28219', 'PPD', '2018-06-06', '33234', 'MXN', '28650', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4584', '0', 'Tasa', 2, '2018-08-03', 0, 0, 0, 'SCL050629E23', 1),
(60, '883E4D08-BDE2-438E-AC76-9C70546A3225', '28219', 'PPD', '2018-07-09', '36076', 'MXN', '31100', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4976', '0', 'Tasa', 2, '2018-07-16', 0, 0, 0, 'SCL050629E23', 0),
(61, '38D581DA-B76C-4D99-872D-0F58C3F46383', '28219', 'PPD', '2018-06-25', '8642', 'MXN', '7450', 'MIGUEL', 'AENM7409283I5', 'AEP', '1192', '0', 'Tasa', 2, '2018-07-10', 0, 0, 0, 'ASP050701C58', 1),
(62, 'A3B768F5-49F9-4FFD-9963-6BAB69D3A588', '28219', 'PPD', '2018-06-25', '35322', 'MXN', '30450', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4872', '0', 'Tasa', 2, '2018-07-10', 0, 0, 0, 'SCL050629E23', 0),
(63, 'E9E05203-8FFF-4E0A-9D0A-0D5FCAE2311D', '28219', 'PUE', '2018-06-20', '835', 'MXN', '720', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '115', '0', 'Tasa', 2, '2018-07-03', 0, 0, 0, 'SCL050629E23', 0),
(64, '98D10808-29B4-486A-A2AE-44DBC7C7C5F5', '28219', 'PPD', '2018-06-19', '8700', 'MXN', '7500', 'MIGUEL', 'AENM7409283I5', 'AEP', '1200', '0', 'Tasa', 2, '2018-07-10', 0, 0, 0, 'ASP050701C58', 1),
(65, '7C34E4C3-CF93-4FCD-BDCD-D0DB9322BFB1', '28219', 'PPD', '2018-06-19', '36424', 'MXN', '31400', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '5024', '0', 'Tasa', 2, '2018-07-10', 0, 0, 0, 'SCL050629E23', 0),
(66, 'D0EFD47F-BC14-4925-9D55-B8A11995A854', '28219', 'PPD', '2018-06-12', '7598', 'MXN', '6550', 'MIGUEL', 'AENM7409283I5', 'AEP', '1048', '0', 'Tasa', 2, '2018-07-19', 0, 0, 0, 'ASP050701C58', 0),
(67, 'A5DEB344-7FF2-4BC7-9F10-FFDC5C8606C7', '28219', 'PPD', '2018-06-12', '33118', 'MXN', '28550', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4568', '0', 'Tasa', 2, '2018-07-09', 0, 0, 0, 'SCL050629E23', 1),
(69, '1926C2CD-DE71-4AC9-B0A9-56507F7B4B3C', '28219', 'PPD', '2018-06-06', '33234', 'MXN', '28650', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4584', '0', 'Tasa', 2, '2018-07-26', 0, 0, 0, 'SCL050629E23', 0),
(70, 'AA33C4F8-A6EC-4E6F-8F1B-7445560B94C1', '28219', 'PPD', '2018-02-28', '35496', 'MXN', '30600', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4896', '0', 'Tasa', 2, '2018-07-09', 0, 0, 0, 'SCL050629E23', 1),
(71, '700041FE-15D3-4005-8D21-59ACDB958580', '28219', 'PPD', '2018-02-28', '6554', 'MXN', '5650', 'MIGUEL', 'AENM7409283I5', 'AEP', '904', '0', 'Tasa', 2, '2018-07-24', 0, 0, 0, 'ASP050701C58', 0),
(74, 'A311FF06-C606-40EC-B3C1-8FD79254291F', '28219', 'PPD', '2018-02-20', '7018', 'MXN', '6050', 'MIGUEL', 'AENM7409283I5', 'AEP', '968', '0', 'Tasa', 2, '2018-07-10', 0, 0, 0, 'ASP050701C58', 0),
(75, 'AA33C4F8-A6EC-4E6F-8F1B-7445560B94C1', '28219', 'PPD', '2018-02-28', '35496', 'MXN', '30600', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4896', '0', 'Tasa', 2, '2018-07-18', 0, 0, 0, 'SCL050629E23', 0),
(77, 'FF3971FC-EF07-40DD-AB6A-D7DB83A15E66', '28219', 'PPD', '2018-03-06', '33930', 'MXN', '29250', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4680', '0', 'Tasa', 2, '2018-08-04', 0, 0, 0, 'SCL050629E23', 0),
(78, '38A6040B-E4F5-4DD0-8BEB-84A088168D00', '28219', 'PPD', '2018-03-06', '6438', 'MXN', '5550', 'MIGUEL', 'AENM7409283I5', 'AEP', '888', '0', 'Tasa', 2, '2018-07-12', 0, 0, 0, 'ASP050701C58', 0),
(79, 'D9D17030-7D9B-4CA3-BE4F-B5F8C8E294A9', '28219', 'PPD', '2018-03-14', '36192', 'MXN', '31200', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4992', '0', 'Tasa', 2, '2018-07-20', 0, 0, 0, 'SCL050629E23', 0),
(80, '2E2B936F-5FD4-4169-B14A-6925C49E12C4', '28219', 'PPD', '2018-03-14', '6148', 'MXN', '5300', 'MIGUEL', 'AENM7409283I5', 'AEP', '848', '0', 'Tasa', 2, '2018-07-20', 0, 0, 0, 'ASP050701C58', 0),
(81, '3CFF52F0-3FD9-4225-A323-D19E831795B5', '28219', 'PPD', '2018-03-21', '33872', 'MXN', '29200', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4672', '0', 'Tasa', 2, '2018-07-20', 0, 0, 0, 'SCL050629E23', 0),
(82, 'E0C2709D-DE5B-405A-88B3-26E078864E2F', '28219', 'PPD', '2018-03-21', '6728', 'MXN', '5800', 'MIGUEL', 'AENM7409283I5', 'AEP', '928', '0', 'Tasa', 2, '2018-07-19', 0, 0, 0, 'ASP050701C58', 0),
(83, 'C6F2E702-C828-472C-8E48-1DA1A8A1FF39', '28219', 'PPD', '2018-07-16', '38164', 'MXN', '32900', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '5264', '0', 'Tasa', 2, '2018-07-10', 0, 0, 0, 'SCL050629E23', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas_por_pagar`
--

CREATE TABLE `cuentas_por_pagar` (
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
  `IdAbono` int(11) NOT NULL,
  `ReceptorRFC` varchar(50) NOT NULL,
  `BolPagad` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuentas_por_pagar`
--

INSERT INTO `cuentas_por_pagar` (`IdFactura`, `UUID`, `LugarExpedicion`, `MetodoPago`, `FechaEmision`, `DiasCredito`, `Total`, `Moneda`, `Subtotal`, `EmisorNombre`, `EmisorRfc`, `ReceptorNombre`, `Total_ImpuestosTrasladados`, `TasaCuota`, `TipoFactor`, `Impuestos`, `FechaVencimiento`, `IdCliente`, `IdProveedor`, `IdAbono`, `ReceptorRFC`, `BolPagad`) VALUES
(52, 'A3B768F5-49F9-4FFD-9963-6BAB69D3A588', '28219', 'PPD', '2018-06-25', 0, '35322', 'MXN', '30450', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4872', '0', 'Tasa', 2, '2018-07-31', 0, 0, 0, 'SCL050629E23', 1),
(53, 'E9E05203-8FFF-4E0A-9D0A-0D5FCAE2311D', '28219', 'PUE', '2018-06-20', 0, '835', 'MXN', '720', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '115', '0', 'Tasa', 2, '2018-08-01', 0, 0, 0, 'SCL050629E23', 1),
(54, '98D10808-29B4-486A-A2AE-44DBC7C7C5F5', '28219', 'PPD', '2018-06-19', 0, '8700', 'MXN', '7500', 'MIGUEL', 'AENM7409283I5', 'AEP', '1200', '0', 'Tasa', 2, '2018-08-03', 0, 0, 0, 'ASP050701C58', 0),
(55, '7C34E4C3-CF93-4FCD-BDCD-D0DB9322BFB1', '28219', 'PPD', '2018-06-19', 0, '36424', 'MXN', '31400', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '5024', '0', 'Tasa', 2, '2018-08-04', 0, 0, 0, 'SCL050629E23', 1),
(56, 'D0EFD47F-BC14-4925-9D55-B8A11995A854', '28219', 'PPD', '2018-06-12', 0, '7598', 'MXN', '6550', 'MIGUEL', 'AENM7409283I5', 'AEP', '1048', '0', 'Tasa', 2, '2018-08-03', 0, 0, 0, 'ASP050701C58', 0),
(57, 'A5DEB344-7FF2-4BC7-9F10-FFDC5C8606C7', '28219', 'PPD', '2018-06-12', 0, '33118', 'MXN', '28550', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4568', '0', 'Tasa', 2, '2018-08-04', 0, 0, 0, 'SCL050629E23', 0),
(59, '1926C2CD-DE71-4AC9-B0A9-56507F7B4B3C', '28219', 'PPD', '2018-06-06', 0, '33234', 'MXN', '28650', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4584', '0', 'Tasa', 2, '2018-08-03', 0, 0, 0, 'SCL050629E23', 1),
(60, '883E4D08-BDE2-438E-AC76-9C70546A3225', '28219', 'PPD', '2018-07-09', 0, '36076', 'MXN', '31100', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4976', '0', 'Tasa', 2, '2018-07-16', 0, 0, 0, 'SCL050629E23', 0),
(61, '38D581DA-B76C-4D99-872D-0F58C3F46383', '28219', 'PPD', '2018-06-25', 0, '8642', 'MXN', '7450', 'MIGUEL', 'AENM7409283I5', 'AEP', '1192', '0', 'Tasa', 2, '2018-07-10', 0, 0, 0, 'ASP050701C58', 1),
(62, 'A3B768F5-49F9-4FFD-9963-6BAB69D3A588', '28219', 'PPD', '2018-06-25', 0, '35322', 'MXN', '30450', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4872', '0', 'Tasa', 2, '2018-07-10', 0, 0, 0, 'SCL050629E23', 0),
(63, 'E9E05203-8FFF-4E0A-9D0A-0D5FCAE2311D', '28219', 'PUE', '2018-06-20', 0, '835', 'MXN', '720', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '115', '0', 'Tasa', 2, '2018-07-03', 0, 0, 0, 'SCL050629E23', 0),
(64, '98D10808-29B4-486A-A2AE-44DBC7C7C5F5', '28219', 'PPD', '2018-06-19', 0, '8700', 'MXN', '7500', 'MIGUEL', 'AENM7409283I5', 'AEP', '1200', '0', 'Tasa', 2, '2018-07-10', 0, 0, 0, 'ASP050701C58', 1),
(65, '7C34E4C3-CF93-4FCD-BDCD-D0DB9322BFB1', '28219', 'PPD', '2018-06-19', 0, '36424', 'MXN', '31400', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '5024', '0', 'Tasa', 2, '2018-07-10', 0, 0, 0, 'SCL050629E23', 0),
(66, 'D0EFD47F-BC14-4925-9D55-B8A11995A854', '28219', 'PPD', '2018-06-12', 0, '7598', 'MXN', '6550', 'MIGUEL', 'AENM7409283I5', 'AEP', '1048', '0', 'Tasa', 2, '2018-07-19', 0, 0, 0, 'ASP050701C58', 0),
(67, 'A5DEB344-7FF2-4BC7-9F10-FFDC5C8606C7', '28219', 'PPD', '2018-06-12', 0, '33118', 'MXN', '28550', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4568', '0', 'Tasa', 2, '2018-07-09', 0, 0, 0, 'SCL050629E23', 1),
(69, '1926C2CD-DE71-4AC9-B0A9-56507F7B4B3C', '28219', 'PPD', '2018-06-06', 0, '33234', 'MXN', '28650', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4584', '0', 'Tasa', 2, '2018-07-26', 0, 0, 0, 'SCL050629E23', 0),
(70, 'AA33C4F8-A6EC-4E6F-8F1B-7445560B94C1', '28219', 'PPD', '2018-02-28', 0, '35496', 'MXN', '30600', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4896', '0', 'Tasa', 2, '2018-07-09', 0, 0, 0, 'SCL050629E23', 1),
(71, '700041FE-15D3-4005-8D21-59ACDB958580', '28219', 'PPD', '2018-02-28', 0, '6554', 'MXN', '5650', 'MIGUEL', 'AENM7409283I5', 'AEP', '904', '0', 'Tasa', 2, '2018-07-24', 0, 0, 0, 'ASP050701C58', 0),
(73, '1329B666-0C3A-426D-BED8-CB4B49229674', '28219', 'PPD', '2018-02-13', 0, '5278', 'MXN', '4550', 'MIGUEL', 'AENM7409283I5', 'AEP', '728', '0', 'Tasa', 2, '2018-07-10', 0, 0, 0, 'ASP050701C58', 0),
(74, 'A311FF06-C606-40EC-B3C1-8FD79254291F', '28219', 'PPD', '2018-02-20', 0, '7018', 'MXN', '6050', 'MIGUEL', 'AENM7409283I5', 'AEP', '968', '0', 'Tasa', 2, '2018-07-10', 0, 0, 0, 'ASP050701C58', 0),
(75, 'AA33C4F8-A6EC-4E6F-8F1B-7445560B94C1', '28219', 'PPD', '2018-02-28', 0, '35496', 'MXN', '30600', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4896', '0', 'Tasa', 2, '2018-07-18', 0, 0, 0, 'SCL050629E23', 0),
(76, '700041FE-15D3-4005-8D21-59ACDB958580', '28219', 'PPD', '2018-02-28', 0, '6554', 'MXN', '5650', 'MIGUEL', 'AENM7409283I5', 'AEP', '904', '0', 'Tasa', 2, '2018-07-25', 0, 0, 0, 'ASP050701C58', 0),
(77, 'FF3971FC-EF07-40DD-AB6A-D7DB83A15E66', '28219', 'PPD', '2018-03-06', 0, '33930', 'MXN', '29250', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4680', '0', 'Tasa', 2, '2018-08-04', 0, 0, 0, 'SCL050629E23', 0),
(78, '38A6040B-E4F5-4DD0-8BEB-84A088168D00', '28219', 'PPD', '2018-03-06', 0, '6438', 'MXN', '5550', 'MIGUEL', 'AENM7409283I5', 'AEP', '888', '0', 'Tasa', 2, '2018-07-12', 0, 0, 0, 'ASP050701C58', 0),
(79, 'D9D17030-7D9B-4CA3-BE4F-B5F8C8E294A9', '28219', 'PPD', '2018-03-14', 0, '36192', 'MXN', '31200', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4992', '0', 'Tasa', 2, '2018-07-20', 0, 0, 0, 'SCL050629E23', 0),
(80, '2E2B936F-5FD4-4169-B14A-6925C49E12C4', '28219', 'PPD', '2018-03-14', 0, '6148', 'MXN', '5300', 'MIGUEL', 'AENM7409283I5', 'AEP', '848', '0', 'Tasa', 2, '2018-07-20', 0, 0, 0, 'ASP050701C58', 0),
(81, '3CFF52F0-3FD9-4225-A323-D19E831795B5', '28219', 'PPD', '2018-03-21', 0, '33872', 'MXN', '29200', 'MIGUEL', 'AENM7409283I5', 'SERVICIOS', '4672', '0', 'Tasa', 2, '2018-07-20', 0, 0, 0, 'SCL050629E23', 0),
(82, 'E0C2709D-DE5B-405A-88B3-26E078864E2F', '28219', 'PPD', '2018-03-21', 0, '6728', 'MXN', '5800', 'MIGUEL', 'AENM7409283I5', 'AEP', '928', '0', 'Tasa', 2, '2018-07-19', 0, 0, 0, 'ASP050701C58', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `IdProveedor` int(11) NOT NULL,
  `RfcProveedor` varchar(15) NOT NULL,
  `RazonSocial` varchar(100) NOT NULL,
  `EstadoProveedor` int(11) NOT NULL,
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

INSERT INTO `proveedores` (`IdProveedor`, `RfcProveedor`, `RazonSocial`, `EstadoProveedor`, `SaldoProveedor`, `TelefonoContacto`, `Calle`, `Numero`, `Colonia`, `CodPostal`, `Ciudad`) VALUES
(1, '53786yt', '11111', 1, '1', '1', '1', '1', '1', '1', '1');

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
(38, 52, 5, '2018-07-09 22:26:41'),
(45, 59, 12, '2018-07-10 02:46:13'),
(46, 59, 13, '2018-07-10 04:33:37'),
(47, 59, 33220, '2018-07-10 04:33:56'),
(48, 60, 5, '2018-07-10 04:43:31'),
(49, 60, 36000, '2018-07-10 04:43:41'),
(50, 60, 70, '2018-07-10 04:43:52'),
(51, 60, 5, '2018-07-10 04:44:09'),
(56, 69, 5, '2018-07-10 20:14:42'),
(61, 75, 555, '2018-07-27 03:05:50'),
(63, 59, 5, '2018-07-27 03:47:26'),
(64, 59, 776, '2018-07-27 03:47:52'),
(65, 59, 5, '2018-07-27 03:51:08'),
(66, 69, 5, '2018-07-27 03:52:31'),
(67, 69, 33230, '2018-07-27 03:58:05'),
(68, 54, 200, '2018-07-27 04:06:53'),
(69, 54, 8600, '2018-07-27 04:07:08'),
(70, 80, 4, '2018-07-27 04:07:58'),
(71, 80, 6145, '2018-07-27 04:08:17'),
(72, 61, 5, '2018-07-27 04:08:44'),
(73, 61, 8641, '2018-07-27 04:09:05'),
(74, 78, 3, '2018-07-27 04:10:17'),
(75, 81, 33871, '2018-07-27 04:12:50'),
(76, 71, 34, '2018-07-27 04:13:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relabonofacturacxp`
--

CREATE TABLE `relabonofacturacxp` (
  `idRelAbono` int(11) NOT NULL,
  `idFactura` int(11) NOT NULL,
  `abono` float NOT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relabonofacturacxp`
--

INSERT INTO `relabonofacturacxp` (`idRelAbono`, `idFactura`, `abono`, `fechaCreacion`) VALUES
(38, 52, 5, '2018-07-09 22:26:41'),
(45, 59, 12, '2018-07-10 02:46:13'),
(46, 59, 13, '2018-07-10 04:33:37'),
(47, 59, 33220, '2018-07-10 04:33:56'),
(48, 60, 5, '2018-07-10 04:43:31'),
(49, 60, 36000, '2018-07-10 04:43:41'),
(50, 60, 70, '2018-07-10 04:43:52'),
(51, 60, 5, '2018-07-10 04:44:09'),
(52, 55, 5, '2018-07-10 04:47:33'),
(53, 55, 36419, '2018-07-10 04:48:34'),
(54, 55, 5, '2018-07-10 04:48:44'),
(55, 55, 5, '2018-07-10 04:49:14'),
(56, 69, 5, '2018-07-10 20:14:42');

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
(9, 'Miguel45', 'Miguel', 'Amezcua', 'Alcantar', 'Mike2211', 'asocmarctkd@gmail.com', '3148726003', '1996-11-10', 1),
(10, 'Obedsito', 'Obed', 'Rafael', 'Ramirez', '1234', 'miguel_22_t@hotmail.com', '3148726003', '0000-00-00', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`IdCliente`),
  ADD KEY `IdCliente` (`IdCliente`),
  ADD KEY `IdCliente_2` (`IdCliente`);

--
-- Indices de la tabla `cuentas_por_cobrar`
--
ALTER TABLE `cuentas_por_cobrar`
  ADD PRIMARY KEY (`IdFactura`),
  ADD KEY `IdCliente` (`IdCliente`),
  ADD KEY `IdFactura` (`IdFactura`);

--
-- Indices de la tabla `cuentas_por_pagar`
--
ALTER TABLE `cuentas_por_pagar`
  ADD PRIMARY KEY (`IdFactura`),
  ADD KEY `IdAbono` (`IdAbono`),
  ADD KEY `IdFactura` (`IdFactura`);

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
-- Indices de la tabla `relabonofacturacxp`
--
ALTER TABLE `relabonofacturacxp`
  ADD PRIMARY KEY (`idRelAbono`),
  ADD KEY `idFactura` (`idFactura`) USING BTREE,
  ADD KEY `idFactura_2` (`idFactura`);

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
  MODIFY `IdFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT de la tabla `cuentas_por_pagar`
--
ALTER TABLE `cuentas_por_pagar`
  MODIFY `IdFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `IdProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `relabonofactura`
--
ALTER TABLE `relabonofactura`
  MODIFY `idRelAbono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT de la tabla `relabonofacturacxp`
--
ALTER TABLE `relabonofacturacxp`
  MODIFY `idRelAbono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `IdTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `relabonofactura`
--
ALTER TABLE `relabonofactura`
  ADD CONSTRAINT `relabonofactura_ibfk_1` FOREIGN KEY (`idFactura`) REFERENCES `cuentas_por_cobrar` (`IdFactura`);

--
-- Filtros para la tabla `relabonofacturacxp`
--
ALTER TABLE `relabonofacturacxp`
  ADD CONSTRAINT `relabonofacturacxp_ibfk_1` FOREIGN KEY (`idFactura`) REFERENCES `cuentas_por_pagar` (`IdFactura`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`IdTipoUsuario`) REFERENCES `tipousuario` (`IdTipoUsuario`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
