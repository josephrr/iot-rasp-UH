-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Dic 17, 2020 alle 17:46
-- Versione del server: 10.3.26-MariaDB
-- Versione PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jrteccl_iot-rasp`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `canales`
--

CREATE TABLE `canales` (
  `id_canal` int(11) NOT NULL,
  `nombre_canal` varchar(100) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_unidad` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `canales`
--

INSERT INTO `canales` (`id_canal`, `nombre_canal`, `id_proyecto`, `id_unidad`, `estado`) VALUES
(1, 'TEMP', 1, 2, 1),
(2, 'Distancia', 1, 4, 1),
(3, '1', 2, 2, 1),
(4, '1', 3, 2, 1),
(5, 'temperatura', 4, 2, 1),
(6, 'Distancia', 4, 4, 1),
(7, 'temperatura', 5, 2, 1),
(8, 'humedad', 5, 1, 1),
(9, 'distancia', 5, 4, 1);

-- --------------------------------------------------------

--
-- Struttura stand-in per le viste `canales_view`
-- (Vedi sotto per la vista effettiva)
--
CREATE TABLE `canales_view` (
`id_canal` int(11)
,`nombre_canal` varchar(100)
,`id_proyecto` int(11)
,`token` varchar(255)
,`id_unidad` int(11)
,`unidad` varchar(30)
,`simbolo` varchar(5)
,`estado` int(11)
);

-- --------------------------------------------------------

--
-- Struttura della tabella `datos`
--

CREATE TABLE `datos` (
  `id_dato` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_canal` int(11) NOT NULL,
  `valor` double(11,6) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `datos`
--

INSERT INTO `datos` (`id_dato`, `fecha`, `id_canal`, `valor`, `estado`) VALUES
(1, '2020-12-06 00:00:00', 2, 14.000000, 1),
(2, '2020-12-06 00:00:00', 1, 27.000000, 1),
(3, '2020-12-06 00:00:00', 1, 27.000000, 1),
(4, '2020-12-06 00:00:00', 1, 27.000000, 1),
(5, '2020-12-06 00:00:00', 2, 21.000000, 1),
(6, '2020-12-06 00:00:00', 1, 27.000000, 1),
(7, '2020-12-06 00:00:00', 2, 11.000000, 1),
(8, '2020-12-06 00:00:00', 1, 27.000000, 1),
(9, '2020-12-06 00:00:00', 2, 14.000000, 1),
(10, '2020-12-06 00:00:00', 1, 27.000000, 1),
(11, '2020-12-06 00:00:00', 2, 20.000000, 1),
(12, '2020-12-06 00:00:00', 1, 27.000000, 1),
(13, '2020-12-06 00:00:00', 1, 27.000000, 1),
(14, '2020-12-06 00:00:00', 1, 27.000000, 1),
(15, '2020-12-06 00:00:00', 1, 27.000000, 1),
(16, '2020-12-06 00:00:00', 1, 27.000000, 1),
(17, '2020-12-06 00:00:00', 1, 29.000000, 1),
(18, '2020-12-07 00:00:00', 7, 27.000000, 1),
(19, '2020-12-07 00:00:00', 7, 27.000000, 1),
(20, '2020-12-07 00:00:00', 8, 23.000000, 1),
(21, '2020-12-07 00:00:00', 7, 27.000000, 1),
(22, '2020-12-07 00:00:00', 8, 23.000000, 1),
(23, '2020-12-07 00:00:00', 7, 27.000000, 1),
(24, '2020-12-07 00:00:00', 8, 23.000000, 1),
(25, '2020-12-07 00:00:00', 7, 27.000000, 1),
(26, '2020-12-07 00:00:00', 8, 23.000000, 1),
(27, '2020-12-07 00:00:00', 7, 27.000000, 1),
(28, '2020-12-07 00:00:00', 8, 22.000000, 1),
(29, '2020-12-07 00:00:00', 7, 27.000000, 1),
(30, '2020-12-07 00:00:00', 8, 23.000000, 1),
(31, '2020-12-07 00:00:00', 7, 28.000000, 1),
(32, '2020-12-07 00:00:00', 8, 95.000000, 1),
(33, '2020-12-07 00:00:00', 7, 28.000000, 1),
(34, '2020-12-07 00:00:00', 8, 95.000000, 1),
(35, '2020-12-07 00:00:00', 7, 28.000000, 1),
(36, '2020-12-07 00:00:00', 8, 95.000000, 1),
(37, '2020-12-07 00:00:00', 7, 28.000000, 1),
(38, '2020-12-07 00:00:00', 8, 68.000000, 1),
(39, '2020-12-07 00:00:00', 9, 11.000000, 1),
(40, '2020-12-07 00:00:00', 7, 28.000000, 1),
(41, '2020-12-07 00:00:00', 8, 54.000000, 1),
(42, '2020-12-07 00:00:00', 9, 11.000000, 1),
(43, '2020-12-07 00:00:00', 7, 28.000000, 1),
(44, '2020-12-07 00:00:00', 8, 47.000000, 1),
(45, '2020-12-07 00:00:00', 9, 10.000000, 1),
(46, '2020-12-07 00:00:00', 7, 28.000000, 1),
(47, '2020-12-07 00:00:00', 8, 41.000000, 1),
(48, '2020-12-07 00:00:00', 9, 11.000000, 1),
(49, '2020-12-07 00:00:00', 7, 28.000000, 1),
(50, '2020-12-07 00:00:00', 8, 37.000000, 1),
(51, '2020-12-07 00:00:00', 9, 18.000000, 1),
(52, '2020-12-07 00:00:00', 7, 28.000000, 1),
(53, '2020-12-07 00:00:00', 8, 34.000000, 1),
(54, '2020-12-07 00:00:00', 9, 28.000000, 1),
(55, '2020-12-07 00:00:00', 7, 28.000000, 1),
(56, '2020-12-07 00:00:00', 8, 32.000000, 1),
(57, '2020-12-07 00:00:00', 9, 49.000000, 1),
(58, '2020-12-07 00:00:00', 7, 28.000000, 1),
(59, '2020-12-07 00:00:00', 8, 30.000000, 1),
(60, '2020-12-07 00:00:00', 9, 11.000000, 1),
(61, '2020-12-07 00:00:00', 7, 28.000000, 1),
(62, '2020-12-07 00:00:00', 8, 31.000000, 1),
(63, '2020-12-07 00:00:00', 9, 11.000000, 1),
(64, '2020-12-07 00:00:00', 7, 28.000000, 1),
(65, '2020-12-07 00:00:00', 8, 30.000000, 1),
(66, '2020-12-07 00:00:00', 9, 11.000000, 1),
(67, '2020-12-07 00:00:00', 7, 28.000000, 1),
(68, '2020-12-07 00:00:00', 8, 30.000000, 1),
(69, '2020-12-07 00:00:00', 9, 12.000000, 1),
(70, '2020-12-07 00:00:00', 7, 28.000000, 1),
(71, '2020-12-07 00:00:00', 8, 29.000000, 1),
(72, '2020-12-07 00:00:00', 9, 11.000000, 1),
(73, '2020-12-07 00:00:00', 7, 28.000000, 1),
(74, '2020-12-07 00:00:00', 8, 29.000000, 1),
(75, '2020-12-07 00:00:00', 9, 12.000000, 1),
(76, '2020-12-07 00:00:00', 7, 28.000000, 1),
(77, '2020-12-07 00:00:00', 8, 28.000000, 1),
(78, '2020-12-07 00:00:00', 9, 11.000000, 1),
(79, '2020-12-07 00:00:00', 7, 28.000000, 1),
(80, '2020-12-07 00:00:00', 8, 28.000000, 1),
(81, '2020-12-07 00:00:00', 9, 11.000000, 1),
(82, '2020-12-07 00:00:00', 7, 28.000000, 1),
(83, '2020-12-07 00:00:00', 8, 28.000000, 1),
(84, '2020-12-07 00:00:00', 9, 11.000000, 1),
(85, '2020-12-07 00:00:00', 7, 28.000000, 1),
(86, '2020-12-07 00:00:00', 8, 28.000000, 1),
(87, '2020-12-07 00:00:00', 9, 12.000000, 1),
(88, '2020-12-07 00:00:00', 7, 28.000000, 1),
(89, '2020-12-07 00:00:00', 8, 28.000000, 1),
(90, '2020-12-07 00:00:00', 9, 11.000000, 1),
(91, '2020-12-07 00:00:00', 7, 28.000000, 1),
(92, '2020-12-07 00:00:00', 8, 28.000000, 1),
(93, '2020-12-07 00:00:00', 9, 11.000000, 1),
(94, '2020-12-07 00:00:00', 7, 28.000000, 1),
(95, '2020-12-07 00:00:00', 8, 28.000000, 1),
(96, '2020-12-07 00:00:00', 9, 11.000000, 1),
(97, '2020-12-07 00:00:00', 8, 28.000000, 1),
(98, '2020-12-07 00:00:00', 9, 12.000000, 1),
(99, '2020-12-07 00:00:00', 8, 28.000000, 1),
(100, '2020-12-07 00:00:00', 9, 12.000000, 1),
(101, '2020-12-07 00:00:00', 7, 28.000000, 1),
(102, '2020-12-07 00:00:00', 8, 27.000000, 1),
(103, '2020-12-07 00:00:00', 9, 11.000000, 1),
(104, '2020-12-07 00:00:00', 7, 28.000000, 1),
(105, '2020-12-07 00:00:00', 8, 27.000000, 1),
(106, '2020-12-07 00:00:00', 9, 11.000000, 1),
(107, '2020-12-07 00:00:00', 8, 27.000000, 1),
(108, '2020-12-07 00:00:00', 9, 11.000000, 1),
(109, '2020-12-07 00:00:00', 7, 28.000000, 1),
(110, '2020-12-07 00:00:00', 8, 27.000000, 1),
(111, '2020-12-07 00:00:00', 9, 12.000000, 1),
(112, '2020-12-07 00:00:00', 7, 28.000000, 1),
(113, '2020-12-07 00:00:00', 8, 27.000000, 1),
(114, '2020-12-07 00:00:00', 9, 11.000000, 1),
(115, '2020-12-07 00:00:00', 7, 28.000000, 1),
(116, '2020-12-07 00:00:00', 8, 27.000000, 1),
(117, '2020-12-07 00:00:00', 9, 11.000000, 1),
(118, '2020-12-07 00:00:00', 7, 28.000000, 1),
(119, '2020-12-07 00:00:00', 8, 27.000000, 1),
(120, '2020-12-07 00:00:00', 9, 11.000000, 1),
(121, '2020-12-07 00:00:00', 7, 28.000000, 1),
(122, '2020-12-07 00:00:00', 8, 27.000000, 1),
(123, '2020-12-07 00:00:00', 9, 11.000000, 1),
(124, '2020-12-07 00:00:00', 7, 28.000000, 1),
(125, '2020-12-07 00:00:00', 8, 27.000000, 1),
(126, '2020-12-07 00:00:00', 9, 12.000000, 1),
(127, '2020-12-07 00:00:00', 7, 28.000000, 1),
(128, '2020-12-07 00:00:00', 8, 27.000000, 1),
(129, '2020-12-07 00:00:00', 9, 11.000000, 1),
(130, '2020-12-07 00:00:00', 7, 28.000000, 1),
(131, '2020-12-07 00:00:00', 8, 27.000000, 1),
(132, '2020-12-07 00:00:00', 9, 12.000000, 1),
(133, '2020-12-07 00:00:00', 7, 28.000000, 1),
(134, '2020-12-07 00:00:00', 8, 27.000000, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `paises`
--

CREATE TABLE `paises` (
  `id_pais` int(11) NOT NULL,
  `iso` varchar(10) NOT NULL,
  `pais` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `paises`
--

INSERT INTO `paises` (`id_pais`, `iso`, `pais`) VALUES
(1, 'AF', 'Afganistán'),
(2, 'AX', 'Islas Gland'),
(3, 'AL', 'Albania'),
(4, 'DE', 'Alemania'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antártida'),
(9, 'AG', 'Antigua y Barbuda'),
(10, 'AN', 'Antillas Holandesas'),
(11, 'SA', 'Arabia Saudí'),
(12, 'DZ', 'Argelia'),
(13, 'AR', 'Argentina'),
(14, 'AM', 'Armenia'),
(15, 'AW', 'Aruba'),
(16, 'AU', 'Australia'),
(17, 'AT', 'Austria'),
(18, 'AZ', 'Azerbaiyán'),
(19, 'BS', 'Bahamas'),
(20, 'BH', 'Bahréin'),
(21, 'BD', 'Bangladesh'),
(22, 'BB', 'Barbados'),
(23, 'BY', 'Bielorrusia'),
(24, 'BE', 'Bélgica'),
(25, 'BZ', 'Belice'),
(26, 'BJ', 'Benin'),
(27, 'BM', 'Bermudas'),
(28, 'BT', 'Bhután'),
(29, 'BO', 'Bolivia'),
(30, 'BA', 'Bosnia y Herzegovina'),
(31, 'BW', 'Botsuana'),
(32, 'BV', 'Isla Bouvet'),
(33, 'BR', 'Brasil'),
(34, 'BN', 'Brunéi'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'CV', 'Cabo Verde'),
(39, 'KY', 'Islas Caimán'),
(40, 'KH', 'Camboya'),
(41, 'CM', 'Camerún'),
(42, 'CA', 'Canadá'),
(43, 'CF', 'República Centroafricana'),
(44, 'TD', 'Chad'),
(45, 'CZ', 'República Checa'),
(46, 'CL', 'Chile'),
(47, 'CN', 'China'),
(48, 'CY', 'Chipre'),
(49, 'CX', 'Isla de Navidad'),
(50, 'VA', 'Ciudad del Vaticano'),
(51, 'CC', 'Islas Cocos'),
(52, 'CO', 'Colombia'),
(53, 'KM', 'Comoras'),
(54, 'CD', 'República Democrática del Congo'),
(55, 'CG', 'Congo'),
(56, 'CK', 'Islas Cook'),
(57, 'KP', 'Corea del Norte'),
(58, 'KR', 'Corea del Sur'),
(59, 'CI', 'Costa de Marfil'),
(60, 'CR', 'Costa Rica'),
(61, 'HR', 'Croacia'),
(62, 'CU', 'Cuba'),
(63, 'DK', 'Dinamarca'),
(64, 'DM', 'Dominica'),
(65, 'DO', 'República Dominicana'),
(66, 'EC', 'Ecuador'),
(67, 'EG', 'Egipto'),
(68, 'SV', 'El Salvador'),
(69, 'AE', 'Emiratos Árabes Unidos'),
(70, 'ER', 'Eritrea'),
(71, 'SK', 'Eslovaquia'),
(72, 'SI', 'Eslovenia'),
(73, 'ES', 'España'),
(74, 'UM', 'Islas ultramarinas de Estados Unidos'),
(75, 'US', 'Estados Unidos'),
(76, 'EE', 'Estonia'),
(77, 'ET', 'Etiopía'),
(78, 'FO', 'Islas Feroe'),
(79, 'PH', 'Filipinas'),
(80, 'FI', 'Finlandia'),
(81, 'FJ', 'Fiyi'),
(82, 'FR', 'Francia'),
(83, 'GA', 'Gabón'),
(84, 'GM', 'Gambia'),
(85, 'GE', 'Georgia'),
(86, 'GS', 'Islas Georgias del Sur y Sandwich del Sur'),
(87, 'GH', 'Ghana'),
(88, 'GI', 'Gibraltar'),
(89, 'GD', 'Granada'),
(90, 'GR', 'Grecia'),
(91, 'GL', 'Groenlandia'),
(92, 'GP', 'Guadalupe'),
(93, 'GU', 'Guam'),
(94, 'GT', 'Guatemala'),
(95, 'GF', 'Guayana Francesa'),
(96, 'GN', 'Guinea'),
(97, 'GQ', 'Guinea Ecuatorial'),
(98, 'GW', 'Guinea-Bissau'),
(99, 'GY', 'Guyana'),
(100, 'HT', 'Haití'),
(101, 'HM', 'Islas Heard y McDonald'),
(102, 'HN', 'Honduras'),
(103, 'HK', 'Hong Kong'),
(104, 'HU', 'Hungría'),
(105, 'IN', 'India'),
(106, 'ID', 'Indonesia'),
(107, 'IR', 'Irán'),
(108, 'IQ', 'Iraq'),
(109, 'IE', 'Irlanda'),
(110, 'IS', 'Islandia'),
(111, 'IL', 'Israel'),
(112, 'IT', 'Italia'),
(113, 'JM', 'Jamaica'),
(114, 'JP', 'Japón'),
(115, 'JO', 'Jordania'),
(116, 'KZ', 'Kazajstán'),
(117, 'KE', 'Kenia'),
(118, 'KG', 'Kirguistán'),
(119, 'KI', 'Kiribati'),
(120, 'KW', 'Kuwait'),
(121, 'LA', 'Laos'),
(122, 'LS', 'Lesotho'),
(123, 'LV', 'Letonia'),
(124, 'LB', 'Líbano'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libia'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lituania'),
(129, 'LU', 'Luxemburgo'),
(130, 'MO', 'Macao'),
(131, 'MK', 'ARY Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MY', 'Malasia'),
(134, 'MW', 'Malawi'),
(135, 'MV', 'Maldivas'),
(136, 'ML', 'Malí'),
(137, 'MT', 'Malta'),
(138, 'FK', 'Islas Malvinas'),
(139, 'MP', 'Islas Marianas del Norte'),
(140, 'MA', 'Marruecos'),
(141, 'MH', 'Islas Marshall'),
(142, 'MQ', 'Martinica'),
(143, 'MU', 'Mauricio'),
(144, 'MR', 'Mauritania'),
(145, 'YT', 'Mayotte'),
(146, 'MX', 'México'),
(147, 'FM', 'Micronesia'),
(148, 'MD', 'Moldavia'),
(149, 'MC', 'Mónaco'),
(150, 'MN', 'Mongolia'),
(151, 'MS', 'Montserrat'),
(152, 'MZ', 'Mozambique'),
(153, 'MM', 'Myanmar'),
(154, 'NA', 'Namibia'),
(155, 'NR', 'Nauru'),
(156, 'NP', 'Nepal'),
(157, 'NI', 'Nicaragua'),
(158, 'NE', 'Níger'),
(159, 'NG', 'Nigeria'),
(160, 'NU', 'Niue'),
(161, 'NF', 'Isla Norfolk'),
(162, 'NO', 'Noruega'),
(163, 'NC', 'Nueva Caledonia'),
(164, 'NZ', 'Nueva Zelanda'),
(165, 'OM', 'Omán'),
(166, 'NL', 'Países Bajos'),
(167, 'PK', 'Pakistán'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestina'),
(170, 'PA', 'Panamá'),
(171, 'PG', 'Papúa Nueva Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Perú'),
(174, 'PN', 'Islas Pitcairn'),
(175, 'PF', 'Polinesia Francesa'),
(176, 'PL', 'Polonia'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'GB', 'Reino Unido'),
(181, 'RE', 'Reunión'),
(182, 'RW', 'Ruanda'),
(183, 'RO', 'Rumania'),
(184, 'RU', 'Rusia'),
(185, 'EH', 'Sahara Occidental'),
(186, 'SB', 'Islas Salomón'),
(187, 'WS', 'Samoa'),
(188, 'AS', 'Samoa Americana'),
(189, 'KN', 'San Cristóbal y Nevis'),
(190, 'SM', 'San Marino'),
(191, 'PM', 'San Pedro y Miquelón'),
(192, 'VC', 'San Vicente y las Granadinas'),
(193, 'SH', 'Santa Helena'),
(194, 'LC', 'Santa Lucía'),
(195, 'ST', 'Santo Tomé y Príncipe'),
(196, 'SN', 'Senegal'),
(197, 'CS', 'Serbia y Montenegro'),
(198, 'SC', 'Seychelles'),
(199, 'SL', 'Sierra Leona'),
(200, 'SG', 'Singapur'),
(201, 'SY', 'Siria'),
(202, 'SO', 'Somalia'),
(203, 'LK', 'Sri Lanka'),
(204, 'SZ', 'Suazilandia'),
(205, 'ZA', 'Sudáfrica'),
(206, 'SD', 'Sudán'),
(207, 'SE', 'Suecia'),
(208, 'CH', 'Suiza'),
(209, 'SR', 'Surinam'),
(210, 'SJ', 'Svalbard y Jan Mayen'),
(211, 'TH', 'Tailandia'),
(212, 'TW', 'Taiwán'),
(213, 'TZ', 'Tanzania'),
(214, 'TJ', 'Tayikistán'),
(215, 'IO', 'Territorio Británico del Océano Índico'),
(216, 'TF', 'Territorios Australes Franceses'),
(217, 'TL', 'Timor Oriental'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad y Tobago'),
(222, 'TN', 'Túnez'),
(223, 'TC', 'Islas Turcas y Caicos'),
(224, 'TM', 'Turkmenistán'),
(225, 'TR', 'Turquía'),
(226, 'TV', 'Tuvalu'),
(227, 'UA', 'Ucrania'),
(228, 'UG', 'Uganda'),
(229, 'UY', 'Uruguay'),
(230, 'UZ', 'Uzbekistán'),
(231, 'VU', 'Vanuatu'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Islas Vírgenes Británicas'),
(235, 'VI', 'Islas Vírgenes de los Estados Unidos'),
(236, 'WF', 'Wallis y Futuna'),
(237, 'YE', 'Yemen'),
(238, 'DJ', 'Yibuti'),
(239, 'ZM', 'Zambia'),
(240, 'ZW', 'Zimbabue');

-- --------------------------------------------------------

--
-- Struttura della tabella `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `fecha`, `nombre`, `descripcion`, `id_usuario`, `token`, `estado`) VALUES
(1, '2020-12-04', 'prueba', 'mi prueba', 1, '740684F963B040F77CCF32812', 1),
(2, '2020-12-05', 'buenas tardes', 'hello', 1, 'D6188E46849BCB79A308D0A5E', 1),
(4, '2020-12-07', 'pedro', 'muestra', 1, '8B2CD6FF83E1A586EA949AB36', 1),
(5, '2020-12-07', 'pedro 2', 'para mostrar', 1, 'D9C345204832090C7B19F5F85', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `unidades`
--

CREATE TABLE `unidades` (
  `id_unidad` int(11) NOT NULL,
  `unidad` varchar(30) NOT NULL,
  `simbolo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `unidades`
--

INSERT INTO `unidades` (`id_unidad`, `unidad`, `simbolo`) VALUES
(1, 'Porcentaje', '%'),
(2, 'Celcius', '°C'),
(3, 'Fahrenheit', '°F'),
(4, 'Metros', 'm'),
(5, 'Horas', 'h'),
(6, 'Minutos', 'm'),
(7, 'Segundos', 's'),
(8, 'Litros', 'L'),
(9, 'Gramos', 'g');

-- --------------------------------------------------------

--
-- Struttura della tabella `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `pass`, `id_pais`, `estado`) VALUES
(1, 'Admin', 'admin', 'admin1234', 60, 1);

-- --------------------------------------------------------

--
-- Struttura per vista `canales_view`
--
DROP TABLE IF EXISTS `canales_view`;

CREATE VIEW `canales_view`  AS  select `canales`.`id_canal` AS `id_canal`,`canales`.`nombre_canal` AS `nombre_canal`,`canales`.`id_proyecto` AS `id_proyecto`,`proyectos`.`token` AS `token`,`canales`.`id_unidad` AS `id_unidad`,`unidades`.`unidad` AS `unidad`,`unidades`.`simbolo` AS `simbolo`,`canales`.`estado` AS `estado` from ((`canales` join `unidades` on(`unidades`.`id_unidad` = `canales`.`id_unidad`)) join `proyectos` on(`proyectos`.`id_proyecto` = `canales`.`id_proyecto`)) ;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `canales`
--
ALTER TABLE `canales`
  ADD PRIMARY KEY (`id_canal`);

--
-- Indici per le tabelle `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id_dato`);

--
-- Indici per le tabelle `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indici per le tabelle `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indici per le tabelle `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id_unidad`);

--
-- Indici per le tabelle `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `canales`
--
ALTER TABLE `canales`
  MODIFY `id_canal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `datos`
--
ALTER TABLE `datos`
  MODIFY `id_dato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT per la tabella `paises`
--
ALTER TABLE `paises`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT per la tabella `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id_unidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
