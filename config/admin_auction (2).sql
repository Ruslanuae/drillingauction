-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 01 2019 г., 13:46
-- Версия сервера: 5.6.39
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `admin_auction`
--

-- --------------------------------------------------------

--
-- Структура таблицы `7LIYY`
--

CREATE TABLE `7LIYY` (
  `id` int(11) NOT NULL,
  `A` varchar(225) NOT NULL DEFAULT 'example@example.ru',
  `B` text,
  `C` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `auctions_lots`
--

CREATE TABLE `auctions_lots` (
  `id` int(11) NOT NULL,
  `auc_id` int(11) NOT NULL,
  `lot_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auctions_lots`
--

INSERT INTO `auctions_lots` (`id`, `auc_id`, `lot_id`) VALUES
(15, 7, 9),
(12, 7, 103),
(7, 7, 7),
(6, 7, 6),
(5, 7, 5),
(4, 7, 4),
(14, 7, 3),
(13, 7, 2),
(1, 7, 1),
(17, 7, 105),
(18, 7, 106),
(19, 7, 107),
(20, 7, 108),
(21, 7, 109),
(22, 7, 110),
(23, 7, 111),
(24, 7, 112),
(25, 7, 113),
(26, 7, 114),
(27, 7, 115),
(28, 7, 116),
(29, 7, 117),
(30, 7, 118),
(31, 9, 119),
(32, 7, 120),
(33, 7, 121),
(34, 7, 122),
(35, 7, 123),
(36, 7, 124),
(37, 10, 125),
(38, 7, 126),
(39, 10, 127),
(40, 10, 128),
(41, 10, 129),
(42, 10, 130),
(43, 10, 131),
(44, 10, 132),
(45, 10, 133),
(46, 10, 134),
(47, 7, 135),
(48, 7, 136),
(49, 7, 137),
(50, 7, 1),
(51, 7, 2),
(52, 7, 3),
(53, 7, 4),
(54, 7, 5),
(55, 7, 6),
(56, 7, 7),
(57, 7, 8),
(58, 7, 9),
(59, 7, 10),
(60, 7, 11),
(61, 7, 1),
(62, 7, 2),
(63, 7, 3),
(64, 7, 4),
(65, 7, 5),
(66, 7, 6),
(67, 7, 7),
(68, 7, 8),
(69, 7, 9),
(70, 7, 10),
(71, 7, 11),
(72, 7, 12),
(73, 7, 13),
(74, 7, 14),
(75, 7, 15),
(76, 7, 16),
(77, 7, 17),
(78, 7, 18),
(79, 7, 19),
(80, 7, 20),
(81, 7, 21),
(82, 7, 22),
(83, 7, 23),
(84, 7, 24),
(85, 7, 25),
(86, 7, 26),
(87, 7, 27),
(88, 7, 28),
(89, 7, 29),
(90, 7, 30),
(91, 7, 31),
(92, 7, 32),
(93, 7, 33),
(94, 7, 34),
(95, 7, 35),
(96, 7, 36),
(97, 7, 37),
(98, 7, 38),
(99, 7, 39),
(100, 7, 40),
(101, 7, 41),
(102, 7, 42),
(103, 7, 43),
(104, 7, 44),
(105, 7, 45),
(106, 7, 46),
(107, 7, 47),
(108, 7, 48),
(109, 7, 49),
(110, 7, 50),
(111, 7, 51),
(112, 7, 52),
(113, 7, 53),
(114, 7, 54),
(115, 7, 55),
(116, 7, 56),
(117, 7, 57),
(118, 7, 58),
(119, 7, 59),
(120, 7, 60),
(121, 7, 61),
(122, 7, 62),
(123, 7, 63),
(124, 7, 64),
(125, 7, 65),
(126, 7, 66),
(127, 7, 67),
(128, 7, 68),
(129, 7, 69),
(130, 7, 70),
(131, 7, 71),
(132, 7, 72),
(133, 7, 73),
(134, 7, 74),
(135, 7, 75),
(136, 7, 76),
(137, 7, 77),
(138, 7, 78);

-- --------------------------------------------------------

--
-- Структура таблицы `auction_date`
--

CREATE TABLE `auction_date` (
  `id` int(11) NOT NULL,
  `auc_date` datetime NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auction_date`
--

INSERT INTO `auction_date` (`id`, `auc_date`, `location`) VALUES
(7, '2019-04-29 23:30:00', 'Yerevan'),
(9, '2019-04-30 07:35:48', 'UAE, Ajman'),
(10, '2019-05-30 13:55:52', 'кустанай'),
(11, '2019-03-30 14:50:55', 'актау'),
(12, '2019-03-30 14:10:00', '111'),
(13, '2019-04-30 17:50:30', 'Нижний Тагил');

-- --------------------------------------------------------

--
-- Структура таблицы `bus_admin`
--

CREATE TABLE `bus_admin` (
  `login` text,
  `cooc` text,
  `nam` text,
  `vers` text,
  `act` int(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bus_admin`
--

INSERT INTO `bus_admin` (`login`, `cooc`, `nam`, `vers`, `act`, `date`) VALUES
('Ruslan', 'd9bd20deede89c2827abc72cb191da24', 'Ruslan', '3.6', 1, '2019-04-30 21:42:58');

-- --------------------------------------------------------

--
-- Структура таблицы `bus_baser`
--

CREATE TABLE `bus_baser` (
  `isp` enum('true','false') NOT NULL DEFAULT 'false',
  `spis` text,
  `psev` text,
  `opis` text,
  `orders` text,
  `vivod` text,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Bname` enum('0','1') NOT NULL DEFAULT '0',
  `adform` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bus_baser`
--

INSERT INTO `bus_baser` (`isp`, `spis`, `psev`, `opis`, `orders`, `vivod`, `data`, `Bname`, `adform`) VALUES
('false', 'Вебс студии', 'LZzci', 'Сайты', 'id', NULL, '2019-04-24 20:28:20', '1', 'false'),
('false', 'tender', 'mMcSf', 'lfkfngsldfng', NULL, NULL, '2019-04-30 21:07:53', '0', 'false'),
('false', 'TENDER RENT', '7LIYY', '', NULL, NULL, '2019-04-30 21:09:49', '0', 'false'),
('false', 'TENDER BUY', 'Sx0xz', '', NULL, NULL, '2019-04-30 21:09:58', '0', 'false');

-- --------------------------------------------------------

--
-- Структура таблицы `bus_conf`
--

CREATE TABLE `bus_conf` (
  `nam` varchar(225) NOT NULL DEFAULT 'idmess',
  `val` text,
  `val2` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bus_conf`
--

INSERT INTO `bus_conf` (`nam`, `val`, `val2`) VALUES
('idmess', '0', NULL),
('hints', '1', NULL),
('optis', 'rYGb5', NULL),
('editpanel', 'maxi', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `bus_form`
--

CREATE TABLE `bus_form` (
  `id` int(11) NOT NULL,
  `visible` enum('true','false') NOT NULL DEFAULT 'true' COMMENT 'Отображение',
  `names` text COMMENT 'Название поля',
  `cont` enum('true','false') NOT NULL DEFAULT 'true' COMMENT 'Запрещает удаление поля',
  `widt` int(11) NOT NULL DEFAULT '160' COMMENT 'Ширина поля'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bus_form`
--

INSERT INTO `bus_form` (`id`, `visible`, `names`, `cont`, `widt`) VALUES
(1, 'true', 'Категория', 'false', 160),
(2, 'true', 'Ваш Email', 'false', 160),
(3, 'true', 'Подписаться', 'false', 160);

-- --------------------------------------------------------

--
-- Структура таблицы `bus_mess`
--

CREATE TABLE `bus_mess` (
  `them` text,
  `mess` longtext,
  `smotr` enum('0','1') NOT NULL DEFAULT '0',
  `hash` varchar(225) NOT NULL DEFAULT '3456456436',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `bus_proc`
--

CREATE TABLE `bus_proc` (
  `proj` text,
  `baza` text,
  `sost` int(11) DEFAULT NULL,
  `zad` int(11) NOT NULL DEFAULT '0',
  `ot` int(11) NOT NULL DEFAULT '0',
  `do` int(11) NOT NULL DEFAULT '0',
  `vkl` int(11) NOT NULL DEFAULT '5',
  `res` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bus_proc`
--

INSERT INTO `bus_proc` (`proj`, `baza`, `sost`, `zad`, `ot`, `do`, `vkl`, `res`) VALUES
('df40c0047445c015c7daf5aa849ff5ef', 'LZzci', 0, 0, 0, 0, 5, 'Рассылка остановлена');

-- --------------------------------------------------------

--
-- Структура таблицы `bus_proj`
--

CREATE TABLE `bus_proj` (
  `id` varchar(32) NOT NULL DEFAULT 'aaaaarrrrrr',
  `name` text,
  `proj` longblob,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bus_proj`
--

INSERT INTO `bus_proj` (`id`, `name`, `proj`, `date`) VALUES
('df40c0047445c015c7daf5aa849ff5ef', 'RHJpaWxpbmdBdWN0aW9u', 0xc5534d6fd34010bd57ea7f58960b959ae6434da8d6aee1048a847a28e1c0d1769c622989a36c222815526322a8944abd7045fc85b4109a0fe2fe85d97fc49b75b88084b861c91eeff8cd9b9937635f954bea4cabf28192b4a48cbed1dc9cc3dee034958e5655255f349e140ef8bd06d09c7e98abcde178a8db7e970f6091744799f968d23cae024fdc8c749834631d3e3ee9f8717b2f4c3a16bd0f7446d7c834057ef90f111525cdc8661871e4a680c0d7516d9f0fa81f4c331437918eafcaea2c56a5bcfce78dfad367d279b76161d4d28c4cfa3bf221f2bbaf069db6e70649f3d4737b9edb4aba031126eda47f28ef97ec2545cb0fa343d9883b911647d16b719c74fceeaed0513f6e49cfd53dbf2bf4e0b40d10c71774fc3652a25cebbd7144e8f7a341c1322ad13f091e54aad55df1ebb1e3203ef0dcd8a34fb94066420b81a9cc686d2eef09fa02f7779ad2cabca705774153416b38ee30b80bdc684fd08d9908ba8577cdf3829db11ff04be6ca5877ba864dedcc1702a24e4197f2e08555f816380e5fe70520833063c4416100c7966389542febf58a409215cd19853ce2915b8c3db788368a2c050cab00d3f3b6b7b6b7feafac9fff900a2b78919bd47ce0afdc47863667e67cef6fadc06fd7a46877c62e186fe198a5a495748e9ccd7fc583f80acad5e6bf9ae7dfb09ac3ae1e0676bf952c81e127, '2019-04-24 20:26:51');

-- --------------------------------------------------------

--
-- Структура таблицы `bus_serv`
--

CREATE TABLE `bus_serv` (
  `type` int(11) NOT NULL DEFAULT '0',
  `url` text,
  `login` text,
  `pass` blob,
  `ip` text,
  `com` text,
  `lim` int(11) NOT NULL DEFAULT '0',
  `progr` int(11) NOT NULL DEFAULT '0',
  `date` int(11) NOT NULL DEFAULT '0',
  `Gisp` enum('true','false') NOT NULL DEFAULT 'true',
  `isp` enum('true','false') NOT NULL DEFAULT 'true',
  `mds` char(32) DEFAULT NULL,
  `ers` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bus_serv`
--

INSERT INTO `bus_serv` (`type`, `url`, `login`, `pass`, `ip`, `com`, `lim`, `progr`, `date`, `Gisp`, `isp`, `mds`, `ers`) VALUES
(0, 'https://www.drillingauction.com/bimailer/flash/next.php', NULL, NULL, '193.22.96.129', 'данный хостинг', 0, 0, 1556138926, 'true', 'true', '1a1a1', 'PHN0cm9uZz7QpNGD0L3QutGG0LjRjyBtYWlsKCkg0LLQtdGA0L3Rg9C70LAg0L7RgtGA0LjRhtCw0YLQtdC70YzQvdGLINC+0YLQstC10YIuPC9zdHJvbmc+PHA+0JjQvdC+0LPQtNCwINC+0YLQutCw0Lcg0L7RgtC/0YDQsNCy0LrQuCDQvNC+0LbQtdGCINCx0YvRgtGMINCy0YvQt9Cy0LDQvSDQvdC10LTQvtGB0YLRg9C/0L3QvtGB0YLRjNGOINGE0LDQudC70L7QsiDQuNC70Lgg0LrQsNGA0YLQuNC90L7QuiDQsiDQv9GA0L7QtdC60YLQtSDQv9C40YHRjNC80LAsINC/0L7RjdGC0L7QvNGDINC/0L7QuNGB0Log0L/RgNC40YfQuNC90Ysg0YHQu9C10LTRg9C10YIg0L3QsNGH0LjQvdCw0YLRjCDRgSDQvtGC0L/RgNCw0LLQutC4INC/0YDQvtGB0YLQtdC50YjQtdCz0L4g0L/QuNGB0YzQvNCwINGB0L7QtNC10YDQttCw0YnQtdCz0L4g0YLQvtC70YzQutC+INGC0LXQutGB0YIuPC9wPjxwPtCU0LXQu9C+INC+0LHRgdGC0L7QuNGCINGF0YPQttC1LCDQtdGB0LvQuCDQvtGC0LrQsNC3INCy0YvQt9Cy0LDQvSDQvdC10LLQtdGA0L3QvtC5INC90LDRgdGC0YDQvtC50LrQvtC5INGB0LLRj9C30LrQuCBQSFAgKyBTTVRQINC40LvQuCDRgdCw0LzQvtCz0L4gU01UUCDRgdC10YDQstC10YDQsC48L3A+PHA+0JXRgdC70Lgg0YDQsNGB0YHRi9C70LrQsCDRh9C10YDQtdC3IGJpc2VuZCDQstC10LvQsNGB0Ywg0LggbWFpbCgpINC/0LXRgNC10YHRgtCw0LvQsCDRgNCw0LHQvtGC0LDRgtGMLCDRgtC+INGB0LrQvtGA0LXQtSDQstGB0LXQs9C+INC/0YDQtdCy0YvRiNC10L0g0LvQuNC80LjRgiDRgNCw0YHRgdGL0LvQutC4INGD0YHRgtCw0L3QvtCy0LvQtdC90L3Ri9C5INCyINC90LDRgdGC0YDQvtC50LrQsNGFINGF0L7RgdGC0LjQvdCz0LAsINCz0LTQtSDQu9C10LbQuNGCIGJpc2VuZC48L3A+'),
(0, 'https://above-h.000webhostapp.com/bisend.php', NULL, NULL, '145.14.144.38', '', 0, 0, 0, 'true', 'true', 'dbf7240cad049369934fad00a838b804', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(27, 'Drilling Rigs - Offshore'),
(26, 'Drilling Equipment'),
(24, 'Drill Collars'),
(25, 'Drill Pipe Equipment'),
(23, 'Compressors'),
(19, 'Blowout Preventers'),
(21, 'Casing '),
(22, 'Choke Systems ( Choke Manifold )'),
(28, 'Electrical Equipment'),
(29, 'Elevators'),
(30, 'Engines, Parts'),
(31, 'Filters'),
(32, 'Fluid End Modules'),
(33, 'Frac Tanks'),
(34, 'Generators, Diesel'),
(35, 'Hooks & Blocks'),
(36, 'Kelly Bushings'),
(37, 'Liners'),
(38, 'Miscellaneous'),
(39, 'Motors, Traction'),
(40, 'Mud pumps'),
(41, 'Mud Tanks'),
(42, 'Offshore Equipment'),
(43, 'Pipe'),
(44, 'Pipe Handling Tools'),
(45, 'Pipeline Equipment'),
(46, 'Power Tongs'),
(47, 'Pump Parts'),
(48, 'Pumps'),
(49, 'Pulling Units'),
(50, 'Rotary Equipment'),
(51, 'Sand Control'),
(52, 'Swivels, Rotary'),
(53, 'Topdrives'),
(54, 'Transmissions'),
(55, 'Tubing'),
(56, 'Valves & Fittings'),
(57, 'Valves, Kelly'),
(58, 'Well Service Equipment'),
(59, 'Wireline Equipment'),
(60, 'Workover Equipment'),
(61, 'Accumulator Units'),
(62, 'Blowout Preventer Rams'),
(63, 'Brakes'),
(64, 'Casing Tools'),
(65, 'Cementing Equipment'),
(66, 'Centrifuge Decanting'),
(67, 'Clamps, Safety'),
(68, 'Coiled Tubing Unit'),
(69, 'Coring Equipment'),
(70, 'Downhole Equipment'),
(71, 'Drill Bits'),
(72, 'Drill Pipe'),
(73, 'Drill Pipe, Spinners'),
(74, 'Drilling Rigs - Land'),
(75, 'Electronics Controls'),
(76, 'Engines, Diesel'),
(77, 'Fishing Tools'),
(78, 'Fracturing Units'),
(79, 'Motors, Electric'),
(80, 'Mud Agitators'),
(81, 'Mud Systems'),
(82, 'OEM replacement parts'),
(83, 'Offshore Rigs'),
(84, 'Oilfield Equipment / Spare Parts'),
(85, 'Packers'),
(86, 'Pipe Fittings'),
(87, 'Pipe, Structural (Steel)'),
(88, 'Plant Equipment'),
(89, 'Production Equipment'),
(90, 'Power Swivels'),
(91, 'Pumps, Centrifugal'),
(92, 'Rotary Tables'),
(93, 'Shale Shakers'),
(94, 'Slips'),
(95, 'Subsea Equipment'),
(96, 'Swivels, Power'),
(97, 'Tanks'),
(98, 'Tools'),
(99, 'Torque Converters '),
(100, 'Traveling Equipment'),
(101, 'Valves, Gate'),
(102, 'Well Control'),
(103, 'Valves-Check'),
(104, 'Winches'),
(105, 'Workover'),
(106, 'Masts'),
(107, 'Pumping Units'),
(108, 'Pumps, Water Injection'),
(109, 'Safety equipment'),
(110, 'Tongs'),
(111, 'Pump Jacks'),
(112, 'Pumps, Jetting'),
(113, 'Rubber Products'),
(114, 'Oilfield Specialties'),
(115, 'Kellys'),
(116, 'Control panel'),
(117, 'BAILS'),
(118, 'Cementing Unit '),
(119, 'High pressure BOP test pump'),
(120, 'MANUAL TONG'),
(121, 'Master Bushing'),
(122, 'MI Swaco'),
(123, 'Separator');

-- --------------------------------------------------------

--
-- Структура таблицы `categories_drilling`
--

CREATE TABLE `categories_drilling` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `service_left` text,
  `service_right` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories_drilling`
--

INSERT INTO `categories_drilling` (`id`, `name`, `description`, `service_left`, `service_right`) VALUES
(1, 'Бурения', '<p><span style=\"font-size:18px\">STIGL F.Z.E. offers services for drilling wells: vertical, directional, horizontal, reconnaissance and operational. The company provides integrated engineering support for the drilling process.</span></p>\r\n', '<ul>\r\n	<li><span style=\"font-size:18px\">development of all design and estimate documentation</span></li>\r\n	<li><span style=\"font-size:18px\">development of environmental measures in the drilling of oil and gas wells</span></li>\r\n	<li><span style=\"font-size:18px\">monitoring of drilling parameters</span></li>\r\n	<li><span style=\"font-size:18px\">casing run</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><span style=\"font-size:18px\">selection and delivery of drilling equipment</span></li>\r\n	<li><span style=\"font-size:18px\">drilling supervision services</span></li>\r\n	<li><span style=\"font-size:18px\">support of the drilling process, including: core sampling, logging, perforation, engineering support of drilling fluids</span></li>\r\n</ul>\r\n'),
(2, 'Ремонт', '<p><span style=\"font-size:20px\">STIGL F.Z.E. offers effective work on capital repair of wells, qualified use of modern equipment, materials and technologies.</span></p>\r\n', '<ul>\r\n	<li><span style=\"font-size:18px\">repair and insulation works: disconnection of watered intervals and individual seams with cement and polymers, correction or escalating of the cement ring</span></li>\r\n	<li><span style=\"font-size:18px\">cementing of wells</span></li>\r\n	<li><span style=\"font-size:18px\">implementation of analysis of oil wells, development of cement mortar formulations</span></li>\r\n	<li><span style=\"font-size:18px\">elimination of leakage of the production string: plugging, installing a patch, lowering an additional casing string of smaller diameter, partial replacement of the production string</span></li>\r\n	<li><span style=\"font-size:18px\">elimination of accidents that occurred during the operation or repair of wells</span></li>\r\n	<li><span style=\"font-size:18px\">extraction of underground equipment from wells after an accident, cleaning of slaughter from foreign objects, fishing operations in boreholes, etc.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><span style=\"font-size:18px\">transition to other horizons and the introduction of strata</span></li>\r\n	<li><span style=\"font-size:18px\">introduction and removal of packer-cutters</span></li>\r\n	<li><span style=\"font-size:18px\">underground work related to drilling: cutting a new trunk in order to eliminate the accident that occurred in the well in the process of exploitation, cutting a new trunk for opening additional productive capacities from the trunk of low-productive and watered wells</span></li>\r\n	<li><span style=\"font-size:18px\">well investigation: study of saturation and formation of seams, determination of the technical condition of the production line (OTEC), geophysical studies in horizontal wells</span></li>\r\n	<li><span style=\"font-size:18px\">preservation and re-opening of wells</span></li>\r\n</ul>\r\n'),
(4, 'Продажа', 'Продажа', NULL, NULL),
(5, 'Аренда', 'Аренда', NULL, NULL),
(6, 'Аукцион', 'Аукцион', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `categories_lease`
--

CREATE TABLE `categories_lease` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories_lease`
--

INSERT INTO `categories_lease` (`id`, `name`, `description`) VALUES
(1, 'Accommodations', '<p>Apartment houses, trailers, offices, permanent or temporary accommodation, dorms for living at work or study, hotels for short-term stays.</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `characteristics`
--

CREATE TABLE `characteristics` (
  `id` int(5) NOT NULL,
  `id_prod` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(5) NOT NULL,
  `index_city` varchar(20) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `number_home` varchar(20) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `site` varchar(100) DEFAULT NULL,
  `number_f` varchar(50) DEFAULT NULL,
  `number_s` varchar(50) DEFAULT NULL,
  `map` text,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `index_city`, `city`, `street`, `number_home`, `mail`, `site`, `number_f`, `number_s`, `map`, `description`) VALUES
(1, '2758', 'UAE. Dubai', ' Jebel Ali Free Trade Zone', '', 'info@oildrillingcorp.com', 'temporaryserver.zzz.com.ua', '+971 4 395 69 15', '+971 4 395 69 15', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d57870.37014945219!2d55.082996714741085!3d24.9695801843468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sJebel+Ali+Free+Trade+Zone!5e0!3m2!1sru!2sua!4v1531571661605\" width=\"1110\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '<p>STIGL FZE was established in 2003 with a primary objective of providing support services to the oil, gas and drilling industries as a supplier of oilfield drilling and industrial products. STIGL FZE is Equipment and Service Supplier to the Oil &amp; Gas industry with its main focus on the Drilling and Workover sector. Our Equipment includes the Rental and Sales of Pressure Control Equipment, Downhole Tools, Drill Pipe and Tubulars. STIGL FZE provides the complete well control system solution for all types of well activity.</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `alias` varchar(255) NOT NULL,
  `lat` decimal(20,17) DEFAULT NULL,
  `lng` decimal(20,17) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `alias`, `lat`, `lng`) VALUES
(1, 'Andorra', 'AD', '', '42.50000000000000000', '1.50000000000000000'),
(2, 'United Arab Emirates', 'AE', '', '24.00000000000000000', '54.00000000000000000'),
(3, 'Afghanistan', 'AF', '', '33.00000000000000000', '65.00000000000000000'),
(4, 'Antigua and Barbuda', 'AG', '', '17.05000000000000000', '-61.80000000000000000'),
(5, 'Anguilla', 'AI', '', '18.25000000000000000', '-63.17000000000000000'),
(6, 'Albania', 'AL', '', '41.00000000000000000', '20.00000000000000000'),
(7, 'Armenia', 'AM', '', '40.00000000000000000', '45.00000000000000000'),
(8, 'Netherlands Antilles', 'AN', '', '12.25000000000000000', '-68.75000000000000000'),
(9, 'Angola', 'AO', '', '-12.50000000000000000', '18.50000000000000000'),
(10, 'Asia/Pacific Region', 'AP', '', '35.00000000000000000', '105.00000000000000000'),
(11, 'Antarctica', 'AQ', '', '-90.00000000000000000', '0.00000000000000000'),
(12, 'Argentina', 'AR', '', '-34.00000000000000000', '-64.00000000000000000'),
(13, 'American Samoa', 'AS', '', '-14.33000000000000000', '-170.00000000000000000'),
(14, 'Austria', 'AT', '', '47.33000000000000000', '13.33000000000000000'),
(15, 'Australia', 'AU', '', '-27.00000000000000000', '133.00000000000000000'),
(16, 'Aruba', 'AW', '', '12.50000000000000000', '-69.97000000000000000'),
(17, 'Azerbaijan', 'AZ', '', '40.50000000000000000', '47.50000000000000000'),
(18, 'Bosnia and Herzegovina', 'BA', '', '44.00000000000000000', '18.00000000000000000'),
(19, 'Barbados', 'BB', '', '13.17000000000000000', '-59.53000000000000000'),
(20, 'Bangladesh', 'BD', '', '24.00000000000000000', '90.00000000000000000'),
(21, 'Belgium', 'BE', '', '50.83000000000000000', '4.00000000000000000'),
(22, 'Burkina Faso', 'BF', '', '13.00000000000000000', '-2.00000000000000000'),
(23, 'Bulgaria', 'BG', '', '43.00000000000000000', '25.00000000000000000'),
(24, 'Bahrain', 'BH', '', '26.00000000000000000', '50.55000000000000000'),
(25, 'Burundi', 'BI', '', '-3.50000000000000000', '30.00000000000000000'),
(26, 'Benin', 'BJ', '', '9.50000000000000000', '2.25000000000000000'),
(27, 'Bermuda', 'BM', '', '32.33000000000000000', '-64.75000000000000000'),
(28, 'Brunei Darussalam', 'BN', '', '4.50000000000000000', '114.67000000000000000'),
(29, 'Bolivia', 'BO', '', '-17.00000000000000000', '-65.00000000000000000'),
(30, 'Brazil', 'BR', '', '-10.00000000000000000', '-55.00000000000000000'),
(31, 'Bahamas', 'BS', '', '24.25000000000000000', '-76.00000000000000000'),
(32, 'Bhutan', 'BT', '', '27.50000000000000000', '90.50000000000000000'),
(33, 'Bouvet Island', 'BV', '', '-54.43000000000000000', '3.40000000000000000'),
(34, 'Botswana', 'BW', '', '-22.00000000000000000', '24.00000000000000000'),
(35, 'Belarus', 'BY', '', '53.00000000000000000', '28.00000000000000000'),
(36, 'Belize', 'BZ', '', '17.25000000000000000', '-88.75000000000000000'),
(37, 'Canada', 'CA', '', '60.00000000000000000', '-95.00000000000000000'),
(39, 'Congo', 'CD', '', '0.00000000000000000', '25.00000000000000000'),
(40, 'Central African Republic', 'CF', '', '7.00000000000000000', '21.00000000000000000'),
(41, 'Congo', 'CG', '', '-1.00000000000000000', '15.00000000000000000'),
(42, 'Switzerland', 'CH', '', '47.00000000000000000', '8.00000000000000000'),
(43, 'Cote D\'Ivoire', 'CI', '', '8.00000000000000000', '-5.00000000000000000'),
(44, 'Cook Islands', 'CK', '', '-21.23000000000000000', '-159.77000000000000000'),
(45, 'Chile', 'CL', '', '-30.00000000000000000', '-71.00000000000000000'),
(46, 'Cameroon', 'CM', '', '6.00000000000000000', '12.00000000000000000'),
(47, 'China', 'CN', '', '35.00000000000000000', '105.00000000000000000'),
(48, 'Colombia', 'CO', '', '4.00000000000000000', '-72.00000000000000000'),
(49, 'Costa Rica', 'CR', '', '10.00000000000000000', '-84.00000000000000000'),
(50, 'Cuba', 'CU', '', '21.50000000000000000', '-80.00000000000000000'),
(51, 'Cape Verde', 'CV', '', '16.00000000000000000', '-24.00000000000000000'),
(53, 'Cyprus', 'CY', '', '35.00000000000000000', '33.00000000000000000'),
(54, 'Czech Republic', 'CZ', '', '49.75000000000000000', '15.50000000000000000'),
(55, 'Germany', 'DE', '', '51.00000000000000000', '9.00000000000000000'),
(56, 'Djibouti', 'DJ', '', '11.50000000000000000', '43.00000000000000000'),
(57, 'Denmark', 'DK', '', '56.00000000000000000', '10.00000000000000000'),
(58, 'Dominica', 'DM', '', '15.42000000000000000', '-61.33000000000000000'),
(59, 'Dominican Republic', 'DO', '', '19.00000000000000000', '-70.67000000000000000'),
(60, 'Algeria', 'DZ', '', '28.00000000000000000', '3.00000000000000000'),
(61, 'Ecuador', 'EC', '', '-2.00000000000000000', '-77.50000000000000000'),
(62, 'Estonia', 'EE', '', '59.00000000000000000', '26.00000000000000000'),
(63, 'Egypt', 'EG', '', '27.00000000000000000', '30.00000000000000000'),
(65, 'Eritrea', 'ER', '', '15.00000000000000000', '39.00000000000000000'),
(66, 'Spain', 'ES', '', '40.00000000000000000', '-4.00000000000000000'),
(67, 'Ethiopia', 'ET', '', '8.00000000000000000', '38.00000000000000000'),
(68, 'Europe', 'EU', '', '47.00000000000000000', '8.00000000000000000'),
(69, 'Finland', 'FI', '', '64.00000000000000000', '26.00000000000000000'),
(70, 'Fiji', 'FJ', '', '-18.00000000000000000', '175.00000000000000000'),
(71, 'Falkland Islands (Malvinas)', 'FK', '', '-51.75000000000000000', '-59.00000000000000000'),
(72, 'Micronesia', 'FM', '', '6.92000000000000000', '158.25000000000000000'),
(73, 'Faroe Islands', 'FO', '', '62.00000000000000000', '-7.00000000000000000'),
(74, 'France', 'FR', '', '46.00000000000000000', '2.00000000000000000'),
(75, 'Gabon', 'GA', '', '-1.00000000000000000', '11.75000000000000000'),
(76, 'United Kingdom', 'GB', '', '54.00000000000000000', '-2.00000000000000000'),
(77, 'Grenada', 'GD', '', '12.12000000000000000', '-61.67000000000000000'),
(78, 'Georgia', 'GE', '', '42.00000000000000000', '43.50000000000000000'),
(79, 'French Guiana', 'GF', '', '4.00000000000000000', '-53.00000000000000000'),
(80, 'Ghana', 'GH', '', '8.00000000000000000', '-2.00000000000000000'),
(81, 'Gibraltar', 'GI', '', '36.18000000000000000', '-5.37000000000000000'),
(82, 'Greenland', 'GL', '', '72.00000000000000000', '-40.00000000000000000'),
(83, 'Gambia', 'GM', '', '13.47000000000000000', '-16.57000000000000000'),
(84, 'Guinea', 'GN', '', '11.00000000000000000', '-10.00000000000000000'),
(85, 'Guadeloupe', 'GP', '', '16.25000000000000000', '-61.58000000000000000'),
(86, 'Equatorial Guinea', 'GQ', '', '2.00000000000000000', '10.00000000000000000'),
(87, 'Greece', 'GR', '', '39.00000000000000000', '22.00000000000000000'),
(89, 'Guatemala', 'GT', '', '15.50000000000000000', '-90.25000000000000000'),
(90, 'Guam', 'GU', '', '13.47000000000000000', '144.78000000000000000'),
(91, 'Guinea-Bissau', 'GW', '', '12.00000000000000000', '-15.00000000000000000'),
(92, 'Guyana', 'GY', '', '5.00000000000000000', '-59.00000000000000000'),
(93, 'Hong Kong', 'HK', '', '22.25000000000000000', '114.17000000000000000'),
(94, 'Heard Island and McDonald Islands', 'HM', '', '-53.10000000000000000', '72.52000000000000000'),
(95, 'Honduras', 'HN', '', '15.00000000000000000', '-86.50000000000000000'),
(96, 'Croatia', 'HR', '', '45.17000000000000000', '15.50000000000000000'),
(97, 'Haiti', 'HT', '', '19.00000000000000000', '-72.42000000000000000'),
(98, 'Hungary', 'HU', '', '47.00000000000000000', '20.00000000000000000'),
(99, 'Indonesia', 'ID', '', '-5.00000000000000000', '120.00000000000000000'),
(100, 'Ireland', 'IE', '', '53.00000000000000000', '-8.00000000000000000'),
(101, 'Israel', 'IL', '', '31.50000000000000000', '34.75000000000000000'),
(102, 'India', 'IN', '', '20.00000000000000000', '77.00000000000000000'),
(103, 'British Indian Ocean Territory', 'IO', '', '-6.00000000000000000', '71.50000000000000000'),
(104, 'Iraq', 'IQ', '', '33.00000000000000000', '44.00000000000000000'),
(105, 'Iran', 'IR', '', '32.00000000000000000', '53.00000000000000000'),
(106, 'Iceland', 'IS', '', '65.00000000000000000', '-18.00000000000000000'),
(107, 'Italy', 'IT', '', '42.83000000000000000', '12.83000000000000000'),
(108, 'Jamaica', 'JM', '', '18.25000000000000000', '-77.50000000000000000'),
(109, 'Jordan', 'JO', '', '31.00000000000000000', '36.00000000000000000'),
(110, 'Japan', 'JP', '', '36.00000000000000000', '138.00000000000000000'),
(111, 'Kenya', 'KE', '', '1.00000000000000000', '38.00000000000000000'),
(112, 'Kyrgyzstan', 'KG', '', '41.00000000000000000', '75.00000000000000000'),
(113, 'Cambodia', 'KH', '', '13.00000000000000000', '105.00000000000000000'),
(114, 'Kiribati', 'KI', '', '1.42000000000000000', '173.00000000000000000'),
(115, 'Comoros', 'KM', '', '-12.17000000000000000', '44.25000000000000000'),
(116, 'Saint Kitts and Nevis', 'KN', '', '17.33000000000000000', '-62.75000000000000000'),
(117, 'Kore', 'KP', '', '40.00000000000000000', '127.00000000000000000'),
(118, 'Korea', 'KR', '', '37.00000000000000000', '127.50000000000000000'),
(119, 'Kuwait', 'KW', '', '29.34000000000000000', '47.66000000000000000'),
(120, 'Cayman Islands', 'KY', '', '19.50000000000000000', '-80.50000000000000000'),
(121, 'Kazakstan', 'KZ', '', '48.00000000000000000', '68.00000000000000000'),
(122, 'Lao People\'s Democratic Republic', 'LA', '', '18.00000000000000000', '105.00000000000000000'),
(123, 'Lebanon', 'LB', '', '33.83000000000000000', '35.83000000000000000'),
(124, 'Saint Lucia', 'LC', '', '13.88000000000000000', '-61.13000000000000000'),
(125, 'Liechtenstein', 'LI', '', '47.17000000000000000', '9.52999999999999900'),
(126, 'Sri Lanka', 'LK', '', '7.00000000000000000', '81.00000000000000000'),
(127, 'Liberia', 'LR', '', '6.50000000000000000', '-9.50000000000000000'),
(128, 'Lesotho', 'LS', '', '-29.50000000000000000', '28.50000000000000000'),
(129, 'Lithuania', 'LT', '', '56.00000000000000000', '24.00000000000000000'),
(130, 'Luxembourg', 'LU', '', '49.75000000000000000', '6.17000000000000000'),
(131, 'Latvia', 'LV', '', '57.00000000000000000', '25.00000000000000000'),
(132, 'Libyan Arab Jamahiriya', 'LY', '', '25.00000000000000000', '17.00000000000000000'),
(133, 'Morocco', 'MA', '', '32.00000000000000000', '-5.00000000000000000'),
(134, 'Monaco', 'MC', '', '43.73000000000000000', '7.40000000000000000'),
(135, 'Moldova', 'MD', '', '47.00000000000000000', '29.00000000000000000'),
(136, 'Montenegro', 'ME', '', '42.00000000000000000', '19.00000000000000000'),
(137, 'Madagascar', 'MG', '', '-20.00000000000000000', '47.00000000000000000'),
(138, 'Marshall Islands', 'MH', '', '9.00000000000000000', '168.00000000000000000'),
(139, 'Macedonia', 'MK', '', '41.83000000000000000', '22.00000000000000000'),
(140, 'Mali', 'ML', '', '17.00000000000000000', '-4.00000000000000000'),
(141, 'Myanmar', 'MM', '', '22.00000000000000000', '98.00000000000000000'),
(142, 'Mongolia', 'MN', '', '46.00000000000000000', '105.00000000000000000'),
(143, 'Macau', 'MO', '', '22.17000000000000000', '113.55000000000000000'),
(144, 'Northern Mariana Islands', 'MP', '', '15.20000000000000000', '145.75000000000000000'),
(145, 'Martinique', 'MQ', '', '14.67000000000000000', '-61.00000000000000000'),
(146, 'Mauritania', 'MR', '', '20.00000000000000000', '-12.00000000000000000'),
(147, 'Montserrat', 'MS', '', '16.75000000000000000', '-62.20000000000000000'),
(148, 'Malta', 'MT', '', '35.83000000000000000', '14.58000000000000000'),
(149, 'Mauritius', 'MU', '', '-20.28000000000000000', '57.55000000000000000'),
(150, 'Maldives', 'MV', '', '3.25000000000000000', '73.00000000000000000'),
(151, 'Malawi', 'MW', '', '-13.50000000000000000', '34.00000000000000000'),
(152, 'Mexico', 'MX', '', '23.00000000000000000', '-102.00000000000000000'),
(153, 'Malaysia', 'MY', '', '2.50000000000000000', '112.50000000000000000'),
(154, 'Mozambique', 'MZ', '', '-18.25000000000000000', '35.00000000000000000'),
(155, 'Namibia', 'NA', '', '-22.00000000000000000', '17.00000000000000000'),
(156, 'New Caledonia', 'NC', '', '-21.50000000000000000', '165.50000000000000000'),
(157, 'Niger', 'NE', '', '16.00000000000000000', '8.00000000000000000'),
(158, 'Norfolk Island', 'NF', '', '-29.03000000000000000', '167.95000000000000000'),
(159, 'Nigeria', 'NG', '', '10.00000000000000000', '8.00000000000000000'),
(160, 'Nicaragua', 'NI', '', '13.00000000000000000', '-85.00000000000000000'),
(161, 'Netherlands', 'NL', '', '52.50000000000000000', '5.75000000000000000'),
(162, 'Norway', 'NO', '', '62.00000000000000000', '10.00000000000000000'),
(163, 'Nepal', 'NP', '', '28.00000000000000000', '84.00000000000000000'),
(164, 'Nauru', 'NR', '', '-0.53000000000000000', '166.92000000000000000'),
(165, 'Niue', 'NU', '', '-19.03000000000000000', '-169.87000000000000000'),
(166, 'New Zealand', 'NZ', '', '-41.00000000000000000', '174.00000000000000000'),
(167, 'Oman', 'OM', '', '21.00000000000000000', '57.00000000000000000'),
(168, 'Panama', 'PA', '', '9.00000000000000000', '-80.00000000000000000'),
(169, 'Peru', 'PE', '', '-10.00000000000000000', '-76.00000000000000000'),
(170, 'French Polynesia', 'PF', '', '-15.00000000000000000', '-140.00000000000000000'),
(171, 'Papua New Guinea', 'PG', '', '-6.00000000000000000', '147.00000000000000000'),
(172, 'Philippines', 'PH', '', '13.00000000000000000', '122.00000000000000000'),
(173, 'Pakistan', 'PK', '', '30.00000000000000000', '70.00000000000000000'),
(174, 'Poland', 'PL', '', '52.00000000000000000', '20.00000000000000000'),
(175, 'Saint Pierre and Miquelon', 'PM', '', '46.83000000000000000', '-56.33000000000000000'),
(176, 'Puerto Rico', 'PR', '', '18.25000000000000000', '-66.50000000000000000'),
(177, 'Palestinian Territory', 'PS', '', '32.00000000000000000', '35.25000000000000000'),
(178, 'Portugal', 'PT', '', '39.50000000000000000', '-8.00000000000000000'),
(179, 'Palau', 'PW', '', '7.50000000000000000', '134.50000000000000000'),
(180, 'Paraguay', 'PY', '', '-23.00000000000000000', '-58.00000000000000000'),
(181, 'Qatar', 'QA', '', '25.50000000000000000', '51.25000000000000000'),
(182, 'Reunion', 'RE', '', '-21.10000000000000000', '55.60000000000000000'),
(183, 'Romania', 'RO', '', '46.00000000000000000', '25.00000000000000000'),
(184, 'Serbia', 'RS', '', '44.00000000000000000', '21.00000000000000000'),
(185, 'Russian Federation', 'RU', '', '60.00000000000000000', '100.00000000000000000'),
(186, 'Rwanda', 'RW', '', '-2.00000000000000000', '30.00000000000000000'),
(187, 'Saudi Arabia', 'SA', '', '25.00000000000000000', '45.00000000000000000'),
(188, 'Solomon Islands', 'SB', '', '-8.00000000000000000', '159.00000000000000000'),
(189, 'Seychelles', 'SC', '', '-4.58000000000000000', '55.67000000000000000'),
(190, 'Sudan', 'SD', '', '15.00000000000000000', '30.00000000000000000'),
(191, 'Sweden', 'SE', '', '62.00000000000000000', '15.00000000000000000'),
(192, 'Singapore', 'SG', '', '1.37000000000000000', '103.80000000000000000'),
(194, 'Slovenia', 'SI', '', '46.00000000000000000', '15.00000000000000000'),
(196, 'Slovakia', 'SK', '', '48.67000000000000000', '19.50000000000000000'),
(197, 'Sierra Leone', 'SL', '', '8.50000000000000000', '-11.50000000000000000'),
(198, 'San Marino', 'SM', '', '43.77000000000000000', '12.42000000000000000'),
(199, 'Senegal', 'SN', '', '14.00000000000000000', '-14.00000000000000000'),
(200, 'Somalia', 'SO', '', '10.00000000000000000', '49.00000000000000000'),
(201, 'Suriname', 'SR', '', '4.00000000000000000', '-56.00000000000000000'),
(202, 'Sao Tome and Principe', 'ST', '', '1.00000000000000000', '7.00000000000000000'),
(203, 'El Salvador', 'SV', '', '13.83000000000000000', '-88.92000000000000000'),
(204, 'Syrian Arab Republic', 'SY', '', '35.00000000000000000', '38.00000000000000000'),
(205, 'Swaziland', 'SZ', '', '-26.50000000000000000', '31.50000000000000000'),
(206, 'Turks and Caicos Islands', 'TC', '', '21.75000000000000000', '-71.58000000000000000'),
(207, 'Chad', 'TD', '', '15.00000000000000000', '19.00000000000000000'),
(209, 'Togo', 'TG', '', '8.00000000000000000', '1.17000000000000000'),
(210, 'Thailand', 'TH', '', '15.00000000000000000', '100.00000000000000000'),
(211, 'Tajikistan', 'TJ', '', '39.00000000000000000', '71.00000000000000000'),
(212, 'Tokelau', 'TK', '', '-9.00000000000000000', '-172.00000000000000000'),
(213, 'Turkmenistan', 'TM', '', '40.00000000000000000', '60.00000000000000000'),
(214, 'Tunisia', 'TN', '', '34.00000000000000000', '9.00000000000000000'),
(215, 'Tonga', 'TO', '', '-20.00000000000000000', '-175.00000000000000000'),
(216, 'Turkey', 'TR', '', '39.00000000000000000', '35.00000000000000000'),
(217, 'Trinidad and Tobago', 'TT', '', '11.00000000000000000', '-61.00000000000000000'),
(218, 'Tuvalu', 'TV', '', '-8.00000000000000000', '178.00000000000000000'),
(219, 'Taiwan', 'TW', '', '23.50000000000000000', '121.00000000000000000'),
(220, 'Tanzania', 'TZ', '', '-6.00000000000000000', '35.00000000000000000'),
(221, 'Ukraine', 'UA', '', '49.00000000000000000', '32.00000000000000000'),
(222, 'Uganda', 'UG', '', '1.00000000000000000', '32.00000000000000000'),
(223, 'United States Minor Outlying Islands', 'UM', '', '19.28000000000000000', '166.60000000000000000'),
(224, 'United States', 'US', '', '38.00000000000000000', '-97.00000000000000000'),
(225, 'Uruguay', 'UY', '', '-33.00000000000000000', '-56.00000000000000000'),
(226, 'Uzbekistan', 'UZ', '', '41.00000000000000000', '64.00000000000000000'),
(227, 'Holy See (Vatican City State)', 'VA', '', '41.90000000000000000', '12.45000000000000000'),
(228, 'Saint Vincent and the Grenadines', 'VC', '', '13.25000000000000000', '-61.20000000000000000'),
(229, 'Venezuela', 'VE', '', '8.00000000000000000', '-66.00000000000000000'),
(230, 'Virgin Islands (VG)', 'VG', '', '18.50000000000000000', '-64.50000000000000000'),
(231, 'Virgin Islands (VI)', 'VI', '', '18.33000000000000000', '-64.83000000000000000'),
(232, 'Vietnam', 'VN', '', '16.00000000000000000', '106.00000000000000000'),
(233, 'Vanuatu', 'VU', '', '-16.00000000000000000', '167.00000000000000000'),
(234, 'Wallis and Futuna', 'WF', '', '-13.30000000000000000', '-176.20000000000000000'),
(235, 'Samoa', 'WS', '', '-13.58000000000000000', '-172.33000000000000000'),
(236, 'Yemen', 'YE', '', '15.00000000000000000', '48.00000000000000000'),
(237, 'Mayotte', 'YT', '', '-12.83000000000000000', '45.17000000000000000'),
(238, 'South Africa', 'ZA', '', '-29.00000000000000000', '24.00000000000000000'),
(239, 'Zambia', 'ZM', '', '-15.00000000000000000', '30.00000000000000000'),
(240, 'Zimbabwe', 'ZW', '', '-20.00000000000000000', '30.00000000000000000'),
(241, 'Uraine', NULL, '', '0.00000000000000000', '0.00000000000000000'),
(244, 'California', 'US-CA', '', '32.53333333333333333', '-114.13333333333333333'),
(245, 'Caribbean', '', '', '14.52555555555555550', '-75.81833333333333333'),
(246, 'Alps', '', '', '46.00000000000000000', '10.00000000000000000'),
(243, 'Provence-Alpes-Cote d\'Azur', 'FR8', '', '43.70000000000000000', '7.25000000000000000'),
(242, 'Tuscany', 'ITC', '', '43.41666666666666666', '11.00000000000000000');

-- --------------------------------------------------------

--
-- Структура таблицы `filter_category`
--

CREATE TABLE `filter_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `intString` enum('1','2') NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `filter_category`
--

INSERT INTO `filter_category` (`id`, `name`, `parent_id`, `alias`, `intString`, `number`, `position`) VALUES
(20, 'Drilling Rigs', 10, 'drilling-rigs', '', NULL, NULL),
(10, 'Categories', 0, 'categories', '1', NULL, 1),
(11, 'Valves', 10, 'valves', '1', NULL, 0),
(12, 'Double Studded Flange', 10, 'double-studded-flange', '1', NULL, 0),
(13, 'Choke Manifold', 10, 'choke-manifold', '1', NULL, 0),
(14, 'Blowout prevention', 10, 'blowout-prevention', '1', NULL, 0),
(15, 'Double Studded Adapter', 10, 'double-studded-adapter', '1', NULL, 0),
(16, 'Drilling Spools', 10, 'drilling-spools', '1', NULL, 0),
(17, 'Double Ram', 10, 'double-ram', '1', NULL, 0),
(18, 'Spare Rams', 10, 'spare-rams', '1', NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `filter_lot`
--

CREATE TABLE `filter_lot` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `filter_lot`
--

INSERT INTO `filter_lot` (`id`, `product_id`, `category_id`, `value`) VALUES
(238, 104, 3, 'Valves'),
(237, 104, 2, 'UAE, Dubai'),
(236, 104, 1, 'STIGL'),
(235, 9, 3, 'Blowout prevention'),
(234, 9, 1, 'Stigl'),
(73, 49, 1, 'STIGL'),
(74, 50, 1, 'STIGL'),
(75, 51, 1, 'STIGL'),
(76, 52, 1, 'STIGL'),
(77, 53, 1, 'STIGL'),
(78, 54, 1, 'STIGL'),
(79, 55, 1, 'STIGL'),
(80, 56, 1, 'STIGL'),
(81, 57, 1, 'STIGL'),
(82, 58, 1, 'STIGL'),
(83, 59, 1, 'STIGL'),
(84, 60, 1, 'STIGL'),
(85, 61, 1, 'STIGL'),
(86, 62, 1, 'STIGL'),
(87, 63, 1, 'STIGL'),
(88, 64, 1, 'STIGL'),
(89, 65, 1, 'STIGL'),
(90, 66, 1, 'STIGL'),
(91, 67, 1, 'STIGL'),
(92, 68, 1, 'STIGL'),
(93, 69, 1, 'STIGL'),
(94, 70, 1, 'STIGL'),
(95, 71, 1, 'STIGL'),
(96, 72, 1, 'STIGL'),
(97, 73, 1, 'STIGL'),
(98, 74, 1, 'STIGL'),
(99, 75, 1, 'STIGL'),
(100, 76, 1, 'STIGL'),
(101, 77, 1, 'STIGL'),
(102, 78, 1, 'STIGL'),
(103, 79, 1, 'STIGL'),
(104, 80, 1, 'STIGL'),
(105, 81, 1, 'STIGL'),
(106, 82, 1, 'STIGL'),
(107, 49, 2, 'UAE, Adjan'),
(108, 50, 2, 'UAE, Adjan'),
(109, 51, 2, 'UAE, Adjan'),
(110, 52, 2, 'UAE, Adjan'),
(111, 53, 2, 'UAE, Adjan'),
(112, 54, 2, 'Dubai'),
(113, 55, 2, 'Dubai'),
(114, 56, 2, 'Dubai'),
(115, 57, 2, 'UAE, Adjan'),
(116, 58, 2, 'UAE, Adjan'),
(117, 59, 2, 'Dubai'),
(118, 60, 2, 'UAE, Adjan'),
(119, 61, 2, 'UAE, Adjan'),
(120, 62, 2, 'Dubai'),
(121, 63, 2, 'UAE, Dubai'),
(122, 64, 2, 'UAE, Dubai'),
(123, 65, 2, 'UAE, Dubai'),
(124, 66, 2, 'Dubai'),
(125, 67, 2, 'UAE, Dubai'),
(126, 68, 2, 'UAE, Dubai'),
(127, 69, 2, 'UAE, Dubai'),
(128, 70, 2, 'UAE, Dubai'),
(129, 71, 2, 'Dubai'),
(130, 72, 2, 'UAE, Dubai'),
(131, 73, 2, 'UAE, Dubai'),
(132, 74, 2, 'UAE, Dubai'),
(133, 75, 2, 'UAE, Dubai'),
(134, 76, 2, 'UAE, Dubai'),
(135, 77, 2, 'UAE, Dubai'),
(136, 78, 2, 'Dubai'),
(137, 79, 2, 'UAE, Dubai'),
(138, 80, 2, 'UAE, Dubai'),
(139, 81, 2, 'UAE, Dubai'),
(140, 82, 2, 'UAE, Dubai'),
(141, 9, 2, 'UAE'),
(142, 10, 2, 'Dubai'),
(143, 11, 2, 'Dubai'),
(144, 12, 2, 'Ukraine, Kiev'),
(145, 13, 2, 'Ukraine, Kiev'),
(146, 14, 2, 'Ukraine, Kiev'),
(147, 15, 2, 'Ukraine, Kiev'),
(148, 16, 2, 'Ukraine, Kiev'),
(149, 17, 2, 'Ukraine, Kiev'),
(150, 18, 2, 'Ukraine, Kiev'),
(151, 19, 2, 'Ukraine, Kiev'),
(152, 20, 2, 'Ukraine, Kiev'),
(153, 21, 2, 'Ukraine, Kiev'),
(154, 22, 2, 'Dubai'),
(155, 23, 2, 'Ukraine, Donetsk'),
(156, 24, 2, 'Ukraine, Donetsk'),
(157, 25, 2, 'Ukraine, Donetsk'),
(158, 26, 2, 'Ukraine, Donetsk'),
(159, 27, 2, 'Ukraine, Donetsk'),
(160, 28, 2, 'Dubai'),
(161, 29, 2, 'Ukraine, Donetsk'),
(162, 30, 2, 'Ukraine, Donetsk'),
(163, 32, 2, 'Ukraine, Donetsk'),
(164, 33, 2, 'Dubai'),
(165, 34, 2, 'Ukraine, Donetsk'),
(166, 35, 2, 'Ukraine, Donetsk'),
(167, 36, 2, 'Dubai'),
(168, 37, 2, 'Dubai'),
(169, 38, 2, 'Ukraine, Donetsk'),
(170, 39, 2, 'Ukraine, Donetsk'),
(171, 40, 2, 'Ukraine, Donetsk'),
(172, 41, 2, 'Ukraine, Donetsk'),
(173, 42, 2, 'Ukraine, Odessa'),
(174, 43, 2, 'Ukraine, Odessa'),
(175, 44, 2, 'Ukraine, Odessa'),
(176, 45, 2, 'Ukraine, Odessa'),
(177, 46, 2, 'Ukraine, Odessa'),
(178, 47, 2, 'Ukraine, Odessa'),
(179, 1, 1, 'STIGL'),
(180, 1, 2, 'UAE, Dubai'),
(181, 1, 3, 'Drilling Spools'),
(182, 2, 1, 'STIGL'),
(183, 2, 2, 'Dubai'),
(184, 2, 3, 'Blowout Preventers'),
(185, 3, 1, 'STIGL'),
(186, 3, 2, 'Dubai'),
(187, 3, 3, 'Blowout Preventers'),
(188, 4, 1, 'STIGL'),
(189, 4, 2, 'Dubai'),
(190, 4, 3, 'Blowout Preventers'),
(191, 5, 1, 'STIGL'),
(192, 5, 2, 'Dubai'),
(193, 5, 3, 'Control panel'),
(194, 6, 1, 'STIGL'),
(195, 6, 2, 'Dubai'),
(196, 6, 3, 'Blowout Preventers'),
(197, 7, 1, 'STIGL'),
(198, 7, 2, 'UAE, Dubai'),
(199, 7, 3, 'Drilling Spools'),
(200, 10, 3, 'Blowout Preventers'),
(239, 105, 1, 'dasdasd'),
(240, 105, 2, '123'),
(241, 105, 3, 'Double Studded Adapter'),
(242, 106, 1, 'STIGL'),
(243, 106, 2, 'Dubai'),
(244, 106, 3, 'Blowout prevention'),
(245, 107, 1, 'STIGL'),
(246, 107, 2, 'Dubai'),
(247, 107, 3, 'Blowout prevention'),
(248, 108, 1, 'STIGL'),
(249, 108, 2, 'Dubai'),
(250, 108, 3, 'Blowout prevention'),
(251, 109, 1, 'STIGL'),
(252, 109, 2, 'Dubai'),
(253, 109, 3, 'Blowout prevention'),
(254, 110, 1, 'STIGL'),
(255, 110, 2, 'Dubai'),
(256, 110, 3, 'Blowout prevention'),
(257, 111, 1, 'STIGL'),
(258, 111, 2, 'Dubai'),
(259, 111, 3, 'Blowout prevention'),
(260, 112, 1, 'STIGL'),
(261, 112, 2, 'Dubai'),
(262, 112, 3, 'Blowout prevention'),
(263, 113, 1, 'STIGL'),
(264, 113, 2, 'Dubai'),
(265, 113, 3, 'Blowout prevention'),
(266, 114, 1, 'STIGL'),
(267, 114, 2, 'Dubai'),
(268, 114, 3, 'Blowout prevention'),
(269, 115, 1, 'STIGL'),
(270, 115, 2, 'Dubai'),
(271, 115, 3, 'Blowout prevention'),
(272, 116, 1, 'STIGL'),
(273, 116, 2, 'Dubai'),
(274, 116, 3, 'Blowout prevention'),
(275, 117, 1, 'STIGL'),
(276, 117, 2, 'Dubai'),
(277, 117, 3, 'Blowout prevention'),
(278, 118, 1, 'STIGL'),
(279, 118, 2, 'Dubai'),
(280, 118, 3, 'Blowout prevention'),
(281, 119, 1, 'Продавец'),
(282, 119, 2, 'Местоположение'),
(283, 119, 3, 'Double Studded Flange'),
(284, 120, 1, 'stigl'),
(285, 120, 2, 'Dubai'),
(286, 120, 3, 'Blowout prevention'),
(287, 121, 1, 'stigl'),
(288, 121, 2, 'Dubai'),
(289, 121, 3, 'Blowout prevention'),
(290, 122, 1, 'stigl'),
(291, 122, 2, 'Dubai'),
(292, 122, 3, 'Blowout prevention'),
(293, 123, 1, 'stigl'),
(294, 123, 2, 'Dubai'),
(295, 123, 3, 'Blowout prevention'),
(296, 124, 1, 'stigl'),
(297, 124, 2, 'Dubai'),
(298, 124, 3, 'Blowout prevention'),
(299, 125, 1, 'Продавец'),
(300, 125, 2, 'Местоположение'),
(301, 125, 3, 'Choke Manifold'),
(302, 126, 1, 'stigl'),
(303, 126, 2, 'Dubai'),
(304, 126, 3, 'Blowout prevention'),
(305, 127, 1, 'Продавец'),
(306, 127, 2, 'Местоположение'),
(307, 127, 3, 'Double Studded Adapter'),
(308, 128, 1, 'Продавец'),
(309, 128, 2, 'Местоположение'),
(310, 128, 3, 'Double Studded Adapter'),
(311, 129, 1, 'Продавец'),
(312, 129, 2, 'Местоположение'),
(313, 129, 3, 'Double Studded Adapter'),
(314, 130, 1, 'Продавец'),
(315, 130, 2, 'Местоположение'),
(316, 130, 3, 'Double Studded Adapter'),
(317, 131, 1, 'Продавец'),
(318, 131, 2, 'Местоположение'),
(319, 131, 3, 'Double Studded Adapter'),
(320, 132, 1, 'Продавец'),
(321, 132, 2, 'Местоположение'),
(322, 132, 3, 'Double Studded Adapter'),
(323, 133, 1, 'Продавец'),
(324, 133, 2, 'Местоположение'),
(325, 133, 3, 'Double Studded Adapter'),
(326, 134, 1, 'Продавец'),
(327, 134, 2, 'Местоположение'),
(328, 134, 3, 'Double Studded Adapter'),
(329, 135, 1, 'stigl'),
(330, 135, 2, 'Dubai'),
(331, 135, 3, 'Blowout prevention'),
(332, 136, 1, 'Stigl'),
(333, 136, 2, 'Dubai'),
(334, 136, 3, 'Blowout prevention'),
(335, 137, 1, 'Stigl'),
(336, 137, 2, 'Dubai'),
(337, 137, 3, 'Blowout prevention'),
(338, 1, 1, 'Продавец'),
(339, 1, 2, 'Местоположение'),
(340, 1, 3, 'Blowout Preventers'),
(341, 2, 1, 'Продавец'),
(342, 2, 2, 'Местоположение'),
(343, 2, 3, 'Blowout Preventers'),
(344, 3, 1, 'Продавец'),
(345, 3, 2, 'Местоположение'),
(346, 3, 3, 'Blowout Preventers'),
(347, 4, 1, 'Продавец'),
(348, 4, 2, 'Местоположение'),
(349, 4, 3, 'Blowout Preventers'),
(350, 5, 1, 'Продавец'),
(351, 5, 2, 'Местоположение'),
(352, 5, 3, 'Blowout Preventers'),
(353, 6, 1, 'Продавец'),
(354, 6, 2, 'Местоположение'),
(355, 6, 3, 'Blowout Preventers'),
(356, 7, 1, 'Продавец'),
(357, 7, 2, 'Местоположение'),
(358, 7, 3, 'Blowout Preventers'),
(359, 8, 1, 'Продавец'),
(360, 8, 2, 'Местоположение'),
(361, 8, 3, 'Blowout Preventers'),
(362, 9, 1, 'Продавец'),
(363, 9, 2, 'Местоположение'),
(364, 9, 3, 'Blowout Preventers'),
(365, 10, 1, 'STIGL'),
(366, 10, 2, 'Dubai'),
(367, 10, 3, 'Blowout Preventers'),
(368, 11, 2, 'Местоположение'),
(369, 11, 3, 'Choke Systems ( Choke Manifold )'),
(370, 1, 2, 'Dubai'),
(371, 1, 3, 'Blowout Preventers'),
(372, 2, 1, 'STIGL'),
(373, 2, 2, 'Dubai'),
(374, 2, 3, 'Blowout Preventers'),
(375, 3, 1, 'STIGL'),
(376, 3, 2, 'Dubai'),
(377, 3, 3, 'Blowout Preventers'),
(378, 4, 1, 'STIGL'),
(379, 4, 2, 'Dubai'),
(380, 4, 3, 'Blowout Preventers'),
(381, 5, 1, 'STIGL'),
(382, 5, 2, 'Dubai'),
(383, 5, 3, 'Blowout Preventers'),
(384, 6, 1, 'STIGL'),
(385, 6, 2, 'Dubai'),
(386, 6, 3, 'Blowout Preventers'),
(387, 7, 1, 'STIGL'),
(388, 7, 2, 'Dubai'),
(389, 7, 3, 'Blowout Preventers'),
(390, 8, 1, 'STIGL'),
(391, 8, 2, 'Dubai'),
(392, 8, 3, 'Blowout Preventers'),
(393, 9, 1, 'STIGL'),
(394, 9, 2, 'Dubai'),
(395, 9, 3, 'Blowout Preventers'),
(396, 10, 1, 'STIGL'),
(397, 10, 2, 'Dubai'),
(398, 10, 3, 'Blowout Preventers'),
(399, 11, 1, 'STIGL'),
(400, 11, 2, 'Dubai'),
(401, 11, 3, 'Blowout Preventers'),
(402, 12, 1, 'STIGL'),
(403, 12, 2, 'Dubai'),
(404, 12, 3, 'Blowout Preventers'),
(405, 13, 1, 'STIGL'),
(406, 13, 2, 'Dubai'),
(407, 13, 3, 'Blowout Preventers'),
(408, 14, 1, 'STIGL'),
(409, 14, 2, 'Dubai'),
(410, 14, 3, 'Blowout Preventers'),
(411, 15, 1, 'STIGL'),
(412, 15, 2, 'Dubai'),
(413, 15, 3, 'Blowout Preventers'),
(414, 16, 1, 'STIGL'),
(415, 16, 2, 'Dubai'),
(416, 16, 3, 'Blowout Preventers'),
(417, 17, 1, 'STIGL'),
(418, 17, 2, 'Dubai'),
(419, 17, 3, 'Blowout Preventers'),
(420, 18, 1, 'STIGL'),
(421, 18, 2, 'Dubai'),
(422, 18, 3, 'Blowout Preventers'),
(423, 19, 1, 'STIGL'),
(424, 19, 2, 'Dubai'),
(425, 19, 3, 'Blowout Preventers'),
(426, 20, 1, 'STIGL'),
(427, 20, 2, 'Dubai'),
(428, 20, 3, 'Blowout Preventers'),
(429, 21, 1, 'STIGL'),
(430, 21, 2, 'Dubai'),
(431, 21, 3, 'Blowout Preventers'),
(432, 22, 1, 'STIGL'),
(433, 22, 2, 'Dubai'),
(434, 22, 3, 'Blowout Preventers'),
(435, 23, 1, 'STIGL'),
(436, 23, 2, 'Dubai'),
(437, 23, 3, 'Blowout Preventers'),
(438, 24, 1, 'STIGL'),
(439, 24, 2, 'Dubai'),
(440, 24, 3, 'Blowout Preventers'),
(441, 25, 1, 'STIGL'),
(442, 25, 2, 'Dubai'),
(443, 25, 3, 'Blowout Preventers'),
(444, 26, 1, 'STIGL'),
(445, 26, 2, 'Dubai'),
(446, 26, 3, 'Blowout Preventers'),
(447, 27, 1, 'STIGL'),
(448, 27, 2, 'Dubai'),
(449, 27, 3, 'Blowout Preventers'),
(450, 28, 1, 'STIGL'),
(451, 28, 2, 'Dubai'),
(452, 28, 3, 'Valves, Gate'),
(453, 29, 1, 'STIGL'),
(454, 29, 2, 'Dubai'),
(455, 29, 3, 'Blowout Preventers'),
(456, 30, 1, 'STIGL'),
(457, 30, 2, 'Dubai'),
(458, 30, 3, 'Blowout Preventers'),
(459, 31, 1, 'STIGL'),
(460, 31, 2, 'Dubai'),
(461, 31, 3, 'Blowout Preventers'),
(462, 32, 1, 'STIGL'),
(463, 32, 2, 'Dubai'),
(464, 32, 3, 'Blowout Preventers'),
(465, 33, 1, 'STIGL'),
(466, 33, 2, 'Dubai'),
(467, 33, 3, 'Choke Systems ( Choke Manifold )'),
(468, 34, 1, 'STIGL'),
(469, 34, 2, 'Dubai'),
(470, 34, 3, 'Blowout Preventers'),
(471, 35, 1, 'STIGL'),
(472, 35, 2, 'Dubai'),
(473, 35, 3, 'Blowout Preventer Rams'),
(474, 36, 1, 'STIGL'),
(475, 36, 2, 'Dubai'),
(476, 36, 3, 'Blowout Preventer Rams'),
(477, 37, 1, 'STIGL'),
(478, 37, 2, 'Dubai'),
(479, 37, 3, 'Blowout Preventer Rams'),
(480, 38, 1, 'STIGL'),
(481, 38, 2, 'Dubai'),
(482, 38, 3, 'BAILS'),
(483, 39, 1, 'STIGL'),
(484, 39, 2, 'Dubai'),
(485, 39, 3, 'BAILS'),
(486, 40, 1, 'STIGL'),
(487, 40, 2, 'Dubai'),
(488, 40, 3, 'BAILS'),
(489, 41, 1, 'STIGL'),
(490, 41, 2, 'Dubai'),
(491, 41, 3, 'BAILS'),
(492, 42, 1, 'STIGL'),
(493, 42, 2, 'Dubai'),
(494, 42, 3, 'BAILS'),
(495, 43, 1, 'STIGL'),
(496, 43, 2, 'Dubai'),
(497, 43, 3, 'BAILS'),
(498, 44, 1, 'STIGL'),
(499, 44, 2, 'Dubai'),
(500, 44, 3, 'BAILS'),
(501, 45, 1, 'STIGL'),
(502, 45, 2, 'Dubai'),
(503, 45, 3, 'BAILS'),
(504, 46, 1, 'STIGL'),
(505, 46, 2, 'Dubai'),
(506, 46, 3, 'BAILS'),
(507, 47, 1, 'STIGL'),
(508, 47, 2, 'Dubai'),
(509, 47, 3, 'BAILS'),
(510, 48, 1, 'STIGL'),
(511, 48, 2, 'Dubai'),
(512, 48, 3, 'BAILS'),
(513, 49, 1, 'STIGL'),
(514, 49, 2, 'Dubai'),
(515, 49, 3, 'BAILS'),
(516, 50, 1, 'STIGL'),
(517, 50, 2, 'Dubai'),
(518, 50, 3, 'BAILS'),
(519, 51, 1, 'STIGL'),
(520, 51, 2, 'Dubai'),
(521, 51, 3, 'Drill Bits'),
(522, 52, 1, 'STIGL'),
(523, 52, 2, 'Dubai'),
(524, 52, 3, 'Tanks'),
(525, 53, 1, 'STIGL'),
(526, 53, 2, 'Dubai'),
(527, 53, 3, 'Tanks'),
(528, 54, 1, 'STIGL'),
(529, 54, 2, 'Dubai'),
(530, 54, 3, 'Cementing Unit '),
(531, 55, 1, 'STIGL'),
(532, 55, 2, 'Dubai'),
(533, 55, 3, 'Cementing Unit '),
(534, 56, 1, 'STIGL'),
(535, 56, 2, 'Dubai'),
(536, 56, 3, 'Cementing Unit '),
(537, 57, 1, 'STIGL'),
(538, 57, 2, 'Dubai'),
(539, 57, 3, 'Cementing Equipment'),
(540, 58, 1, 'STIGL'),
(541, 58, 2, 'Dubai'),
(542, 58, 3, 'Cementing Equipment'),
(543, 59, 1, 'STIGL'),
(544, 59, 2, 'Dubai'),
(545, 59, 3, 'Mud pumps'),
(546, 60, 1, 'STIGL'),
(547, 60, 2, 'Dubai'),
(548, 60, 3, 'Mud pumps'),
(549, 61, 1, 'STIGL'),
(550, 61, 2, 'Dubai'),
(551, 61, 3, 'Electrical Equipment'),
(552, 62, 1, 'STIGL'),
(553, 62, 2, 'Dubai'),
(554, 62, 3, 'Elevators'),
(555, 63, 1, 'STIGL'),
(556, 63, 2, 'Dubai'),
(557, 63, 3, 'Elevators'),
(558, 64, 1, 'STIGL'),
(559, 64, 2, 'Dubai'),
(560, 64, 3, 'Elevators'),
(561, 65, 1, 'STIGL'),
(562, 65, 2, 'Dubai'),
(563, 65, 3, 'Elevators'),
(564, 66, 1, 'STIGL'),
(565, 66, 2, 'Dubai'),
(566, 66, 3, 'Generators, Diesel'),
(567, 67, 1, 'STIGL'),
(568, 67, 2, 'Dubai'),
(569, 67, 3, 'Generators, Diesel'),
(570, 68, 1, 'STIGL'),
(571, 68, 2, 'Dubai'),
(572, 68, 3, 'High pressure BOP test pump'),
(573, 69, 1, 'STIGL'),
(574, 69, 2, 'Dubai'),
(575, 69, 3, 'High pressure BOP test pump'),
(576, 70, 1, 'STIGL'),
(577, 70, 2, 'Dubai'),
(578, 70, 3, 'Kelly Bushings'),
(579, 71, 1, 'STIGL'),
(580, 71, 2, 'Dubai'),
(581, 71, 3, 'Kelly Bushings'),
(582, 72, 1, 'STIGL'),
(583, 72, 2, 'Dubai'),
(584, 72, 3, 'MANUAL TONG'),
(585, 73, 1, 'STIGL'),
(586, 73, 2, 'Dubai'),
(587, 73, 3, 'MANUAL TONG'),
(588, 74, 1, 'STIGL'),
(589, 74, 2, 'Dubai'),
(590, 74, 3, 'Master Bushing'),
(591, 75, 1, 'STIGL'),
(592, 75, 2, 'Dubai'),
(593, 75, 3, 'MI Swaco'),
(594, 76, 1, 'STIGL'),
(595, 76, 2, 'Dubai'),
(596, 76, 3, 'Rotary Tables'),
(597, 77, 1, 'STIGL'),
(598, 77, 2, 'Dubai'),
(599, 77, 3, 'Separator'),
(600, 78, 1, 'STIGL'),
(601, 78, 2, 'Dubai'),
(602, 78, 3, 'Drill Pipe, Spinners');

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filePath` varchar(400) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `isMain` tinyint(1) DEFAULT NULL,
  `modelName` varchar(150) NOT NULL,
  `urlAlias` varchar(400) NOT NULL,
  `name` varchar(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `filePath`, `itemId`, `isMain`, `modelName`, `urlAlias`, `name`) VALUES
(114, 'CategoriesDrillings/CategoriesDrilling3/9fdc0d.png', 3, 1, 'CategoriesDrilling', '0afb9fd77e-1', ''),
(113, 'CategoriesDrillings/CategoriesDrilling2/2b10ec.png', 2, 1, 'CategoriesDrilling', 'caeb9a3ce1-1', ''),
(103, 'Products/Products1/c41a35.jpeg', 1, 1, 'Products', '11e78f6e34-1', ''),
(104, 'Products/Products2/b301aa.jpeg', 2, 0, 'Products', '0500439dce-2', ''),
(105, 'Products/Products3/95228b.jpeg', 3, 0, 'Products', 'f9c09b1f32-2', ''),
(106, 'Products/Products4/d0da93.jpeg', 4, 0, 'Products', 'd5c600310d-3', ''),
(107, 'Products/Products5/87192b.jpeg', 5, 0, 'Products', '21afc336e3-2', ''),
(108, 'Products/Products6/846ade.jpeg', 6, 0, 'Products', '99b1e32858-2', ''),
(109, 'Products/Products7/166de6.jpeg', 7, 0, 'Products', 'ba5d0b630c-2', ''),
(112, 'CategoriesDrillings/CategoriesDrilling1/c074b7.png', 1, 1, 'CategoriesDrilling', '3d2af7041e-1', ''),
(111, 'News/News2/2e57c9.png', 2, 1, 'News', 'ce5ae478af-1', ''),
(115, 'Products/Products105/461dae.jpg', 105, 1, 'Products', '3168cd91cd-1', ''),
(116, 'Products/Products106/efb7f8.jpg', 106, 1, 'Products', '5e8894b75c-1', ''),
(117, 'Products/Products106/b53459.jpg', 106, NULL, 'Products', '8a72d1e741-2', ''),
(118, 'Products/Products106/30ac0c.jpg', 106, NULL, 'Products', '4d757c0dbe-3', ''),
(119, 'Products/Products106/58765f.jpg', 106, NULL, 'Products', '87b290442e-4', ''),
(120, 'Products/Products107/76350d.jpg', 107, 1, 'Products', 'fff40483c7-1', ''),
(121, 'Products/Products108/cf277b.jpg', 108, 1, 'Products', 'ec206edbb9-1', ''),
(122, 'Products/Products109/2156da.jpg', 109, 1, 'Products', '36818e09b8-1', ''),
(123, 'Products/Products110/c16931.jpg', 110, 1, 'Products', 'ef429b70c8-1', ''),
(124, 'Products/Products110/9e7cbd.jpg', 110, NULL, 'Products', 'bb5974a31f-2', ''),
(125, 'Products/Products111/cad28d.jpg', 111, 1, 'Products', '93db21b402-1', ''),
(126, 'Products/Products112/55b296.jpg', 112, 1, 'Products', '7bbba125a9-1', ''),
(127, 'Products/Products113/974d9f.jpg', 113, 1, 'Products', 'a72c85ce40-1', ''),
(128, 'Products/Products114/3e1139.jpg', 114, 1, 'Products', '434887c82c-1', ''),
(129, 'Products/Products115/3137eb.jpg', 115, 1, 'Products', '822f08ed5e-1', ''),
(130, 'Products/Products116/b6b41f.jpg', 116, 1, 'Products', '13a295e286-1', ''),
(131, 'Products/Products117/3d7e88.jpg', 117, 1, 'Products', '7e32605552-1', ''),
(132, 'Products/Products118/0dcc7b.jpg', 118, 1, 'Products', '1606408067-1', ''),
(133, 'Products/Products119/2bb9d3.png', 119, 1, 'Products', 'be4378ffc1-1', ''),
(134, 'Products/Products119/3cf753.png', 119, NULL, 'Products', '8bc6ed88b0-2', ''),
(135, 'Products/Products119/19b7a5.png', 119, NULL, 'Products', '860c55a24c-3', ''),
(136, 'Products/Products134/687b52.png', 134, 1, 'Products', '77c2ec4e6e-1', ''),
(137, 'Products/Products134/71c16f.png', 134, NULL, 'Products', 'bcd4b143c4-2', ''),
(138, 'Products/Products134/cbd696.png', 134, NULL, 'Products', 'bd1e387459-3', ''),
(139, 'Products/Products134/5f7e95.png', 134, NULL, 'Products', 'fc0124fbd1-4', ''),
(140, 'Products/Products135/b618bf.jpg', 135, 1, 'Products', '041e620812-1', ''),
(141, 'Products/Products136/09410a.jpg', 136, 1, 'Products', 'de800fe4fc-1', ''),
(142, 'Products/Products137/ab197e.png', 137, 1, 'Products', '6dee4eb79e-1', ''),
(143, 'Products/Products8/ea526e.png', 8, 0, 'Products', '34f5884e9c-2', ''),
(144, 'Products/Products9/101d12.png', 9, 0, 'Products', '5ec35340ad-2', ''),
(145, 'Products/Products10/87aebb.jpg', 10, 0, 'Products', '7d27266ba1-2', ''),
(146, 'Products/Products4/b6c318.jpeg', 4, 0, 'Products', '251e0495e2-2', ''),
(147, 'Products/Products4/1e162e.jpeg', 4, 1, 'Products', 'cda9e7eae6-1', ''),
(148, 'Products/Products7/ff5214.jpg', 7, 1, 'Products', '70ea5b653f-1', ''),
(149, 'Products/Products6/dfeff4.jpg', 6, 1, 'Products', 'dc9c7c67b8-1', ''),
(150, 'Products/Products8/8fcc79.jpg', 8, 1, 'Products', '0c1a7d9835-1', ''),
(151, 'Products/Products9/51dafe.jpg', 9, 1, 'Products', '5744ee6a9e-1', ''),
(152, 'Products/Products10/d564f1.jpg', 10, 1, 'Products', 'ee05409eab-1', ''),
(153, 'Products/Products11/940360.jpg', 11, 1, 'Products', 'bc2e56651f-1', ''),
(154, 'Products/Products12/baf9a9.jpg', 12, 1, 'Products', '23c3756f20-1', ''),
(155, 'Products/Products13/336909.jpg', 13, 1, 'Products', 'ebd4b95e13-1', ''),
(156, 'Products/Products14/d87880.jpg', 14, 1, 'Products', 'e0c57dab07-1', ''),
(157, 'Products/Products15/9f9cec.jpg', 15, 1, 'Products', '7e5cdb66fc-1', ''),
(158, 'Products/Products16/883142.jpg', 16, 1, 'Products', '53de4f4f9e-1', ''),
(159, 'Products/Products17/faf2c3.jpg', 17, 1, 'Products', '68051ba6c9-1', ''),
(160, 'Products/Products18/e2ff66.jpg', 18, 1, 'Products', '958c79d7c6-1', ''),
(161, 'Products/Products19/f64f78.jpg', 19, 1, 'Products', '3698a53883-1', ''),
(162, 'Products/Products20/bc3e19.jpg', 20, 1, 'Products', '25cd79f6db-1', ''),
(163, 'Products/Products21/40c56c.jpg', 21, 1, 'Products', 'bf29a9be6b-1', ''),
(164, 'Products/Products22/57e942.jpg', 22, 0, 'Products', 'd5a451b474-2', ''),
(165, 'Products/Products22/12ed52.jpg', 22, 1, 'Products', '1465e967a1-1', ''),
(166, 'Products/Products23/353e0f.jpg', 23, 1, 'Products', 'e26b08091d-1', ''),
(167, 'Products/Products24/9b720a.jpg', 24, 1, 'Products', '0ff83e8b7c-1', ''),
(168, 'Products/Products25/79d58a.jpg', 25, 1, 'Products', '06c66e3b59-1', ''),
(169, 'Products/Products26/3eb077.jpg', 26, 1, 'Products', 'ff6a733af5-1', ''),
(170, 'Products/Products27/beaef6.jpg', 27, 1, 'Products', '5119ed96bb-1', ''),
(171, 'Products/Products28/3f70c0.jpg', 28, 1, 'Products', '96d2377848-1', ''),
(172, 'Products/Products29/19a693.jpg', 29, 1, 'Products', '45c07f449a-1', ''),
(173, 'Products/Products30/1f8e4f.jpg', 30, 1, 'Products', '33efe1d413-1', ''),
(174, 'Products/Products31/91687d.jpg', 31, 1, 'Products', '81fe8df77b-1', ''),
(175, 'Products/Products32/ba01c3.jpg', 32, 1, 'Products', '098aeded9b-1', ''),
(176, 'Products/Products33/78d4cb.jpg', 33, 1, 'Products', 'df8b1810b1-1', ''),
(177, 'Products/Products34/b58ae5.jpg', 34, 1, 'Products', 'a808e2b776-1', ''),
(178, 'Products/Products5/67e7f3.jpg', 5, 1, 'Products', 'f7ba8dbfb0-1', ''),
(179, 'Products/Products35/f41c60.jpg', 35, 1, 'Products', '86f67dd828-1', ''),
(180, 'Products/Products36/94fcad.jpg', 36, 0, 'Products', '061c210831-2', ''),
(181, 'Products/Products37/d231e4.jpg', 37, 0, 'Products', '32ed8f8951-2', ''),
(182, 'Products/Products36/cdab6a.jpg', 36, 1, 'Products', '9d7ad2e6c3-1', ''),
(183, 'Products/Products37/25c05c.jpg', 37, 1, 'Products', 'a97929e092-1', ''),
(184, 'Products/Products38/bb9a05.jpg', 38, 1, 'Products', '0dd1bbe6e9-1', ''),
(185, 'Products/Products39/ff6f73.jpg', 39, 1, 'Products', 'a8521d6611-1', ''),
(186, 'Products/Products40/c1b9a3.jpg', 40, 1, 'Products', '6a961d9da7-1', ''),
(187, 'Products/Products41/a6cdf3.jpg', 41, 1, 'Products', '6d32cdc0ce-1', ''),
(188, 'Products/Products42/c33b53.jpg', 42, 1, 'Products', 'cf55a372b4-1', ''),
(189, 'Products/Products43/1305bc.jpg', 43, 1, 'Products', '93538e1203-1', ''),
(190, 'Products/Products44/b20b7f.jpg', 44, 1, 'Products', '5b64306fdc-1', ''),
(191, 'Products/Products45/181593.jpg', 45, 1, 'Products', 'e2d4fd1aa1-1', ''),
(192, 'Products/Products46/82f42e.jpg', 46, 1, 'Products', '70c21539ea-1', ''),
(193, 'Products/Products47/7c7f32.jpg', 47, 1, 'Products', 'f8cd859163-1', ''),
(194, 'Products/Products48/e17c69.jpg', 48, 1, 'Products', 'fd8165f05b-1', ''),
(195, 'Products/Products49/d86328.jpg', 49, 1, 'Products', '8bd355bd52-1', ''),
(196, 'Products/Products50/81ea90.jpg', 50, 1, 'Products', 'f997c803e2-1', ''),
(197, 'Products/Products51/492a75.jpg', 51, 1, 'Products', 'dab07ba5b0-1', ''),
(198, 'Products/Products52/a95cf7.jpg', 52, 1, 'Products', '80a7283dbf-1', ''),
(199, 'Products/Products53/11db97.jpg', 53, 1, 'Products', 'ccb23163dd-1', ''),
(200, 'Products/Products54/3273bf.jpg', 54, 1, 'Products', 'c79008b799-1', ''),
(201, 'Products/Products55/ada78d.jpg', 55, 1, 'Products', '81cb289e9f-1', ''),
(202, 'Products/Products56/dd915a.jpg', 56, 1, 'Products', '3359053dd6-1', ''),
(203, 'Products/Products57/2b3396.jpg', 57, 1, 'Products', '4ba022e7c4-1', ''),
(204, 'Products/Products58/1320aa.jpg', 58, 1, 'Products', '72d71a60de-1', ''),
(205, 'Products/Products59/309e21.jpg', 59, 1, 'Products', 'dbdd561813-1', ''),
(206, 'Products/Products60/e945a7.jpg', 60, 1, 'Products', '5d654efe08-1', ''),
(207, 'Products/Products61/d2f598.jpg', 61, 1, 'Products', '303859cbad-1', ''),
(208, 'Products/Products62/24be76.jpg', 62, 1, 'Products', 'd87af631c8-1', ''),
(209, 'Products/Products63/ebc1d6.jpg', 63, 1, 'Products', 'd394803d3c-1', ''),
(210, 'Products/Products64/a6951f.jpg', 64, 1, 'Products', '66baaf7e75-1', ''),
(211, 'Products/Products65/cbc958.jpg', 65, 1, 'Products', '6e3a0f2289-1', ''),
(212, 'Products/Products66/de5c69.jpg', 66, 1, 'Products', '9f47365a6b-1', ''),
(213, 'Products/Products67/f58b8d.jpg', 67, 1, 'Products', 'a5ce366e1c-1', ''),
(214, 'Products/Products68/ee869e.jpg', 68, 1, 'Products', 'bedf0e970b-1', ''),
(215, 'Products/Products69/4c037d.jpg', 69, 1, 'Products', 'e64f7f1282-1', ''),
(216, 'Products/Products70/2801ee.jpg', 70, 1, 'Products', '17c798d59a-1', ''),
(217, 'Products/Products71/2a7c47.jpg', 71, 1, 'Products', '30e1f5f5a8-1', ''),
(218, 'Products/Products72/bc37ba.jpg', 72, 1, 'Products', 'c5670e2d92-1', ''),
(219, 'Products/Products73/569d46.jpg', 73, 1, 'Products', '2670550afb-1', ''),
(220, 'Products/Products74/360e6b.jpg', 74, 1, 'Products', 'e221ce6b60-1', ''),
(221, 'Products/Products75/2e5504.jpg', 75, 1, 'Products', '0be44f8f90-1', ''),
(222, 'Products/Products76/3088f9.jpg', 76, 1, 'Products', '95e6e75adc-1', ''),
(223, 'Products/Products77/64406e.jpg', 77, 1, 'Products', '963f284abc-1', ''),
(224, 'Products/Products78/60b8dd.jpg', 78, 1, 'Products', '5c300f700e-1', ''),
(225, 'Products/Products3/7e5f9a.jpg', 3, 1, 'Products', '082101864a-1', ''),
(226, 'Products/Products2/413ab5.jpg', 2, 1, 'Products', '9306cea44b-1', '');

-- --------------------------------------------------------

--
-- Структура таблицы `import_mail`
--

CREATE TABLE `import_mail` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscribe` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `import_mail`
--

INSERT INTO `import_mail` (`id`, `email`, `subscribe`) VALUES
(1, 'alexandr.shvets96@gmail.com', '1'),
(2, 'kolesnykov.roma@gmail.com', '1'),
(4, 'info@oildrillingcorp.com', '1'),
(7, '969868767@mail.ru', '1'),
(8, 'alenajob2018@mail.ru', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `lots`
--

CREATE TABLE `lots` (
  `id` int(5) NOT NULL,
  `id_category` int(5) NOT NULL,
  `number_lot` int(11) DEFAULT NULL,
  `manufactured` varchar(255) NOT NULL COMMENT 'Производитель',
  `model` varchar(255) DEFAULT NULL COMMENT 'Модель',
  `seller` varchar(255) NOT NULL COMMENT 'Продавец',
  `current_bid` int(11) NOT NULL COMMENT 'Текущая ставка',
  `bid_increment` int(11) NOT NULL COMMENT 'Минимальный шаг',
  `current_bid_rent` int(11) DEFAULT '10',
  `bid_increment_rent` int(11) DEFAULT '5',
  `fix_price` int(11) DEFAULT NULL,
  `rate_condition` int(11) DEFAULT '1' COMMENT 'Состояние торгов (делал ли кто-то ставку)',
  `rate_type` varchar(255) DEFAULT NULL COMMENT 'Тип лота',
  `date_start` datetime DEFAULT NULL COMMENT 'Старт продаж',
  `date_sale` datetime DEFAULT NULL COMMENT 'Окончание продаж',
  `location` varchar(255) DEFAULT NULL COMMENT 'Местоположение',
  `lot_condition` int(11) NOT NULL DEFAULT '1' COMMENT 'Состояние торгов',
  `product_condition` int(11) NOT NULL DEFAULT '1' COMMENT 'Состояние лота (новый или б/у)',
  `img` varchar(255) DEFAULT NULL COMMENT 'Изображение',
  `description` text COMMENT 'Подробное описание',
  `visible` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Виден на сайте или нет'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lots`
--

INSERT INTO `lots` (`id`, `id_category`, `number_lot`, `manufactured`, `model`, `seller`, `current_bid`, `bid_increment`, `current_bid_rent`, `bid_increment_rent`, `fix_price`, `rate_condition`, `rate_type`, `date_start`, `date_sale`, `location`, `lot_condition`, `product_condition`, `img`, `description`, `visible`) VALUES
(7, 1, 345678, 'ADAPTER SPOOL ', '13 5/8\" x 5k ', 'STIGL', 2100, 300, 791, 5, 16000, 1, 'Pure sail', '2018-07-07 13:30:23', '2018-07-15 19:00:00', 'UAE, Dubai', 2, 2, NULL, '<ul>\r\n	<li>Model: 13 5/8&quot; x 5k Spacer Spool</li>\r\n	<li>Place of Origin:&nbsp;Shaanxi, China (Mainland)</li>\r\n	<li>Application:&nbsp;Connection wellhead, manifold</li>\r\n	<li>Material: AISI4130</li>\r\n	<li>Processing:&nbsp;Integral Forged</li>\r\n	<li>Working pressure: 3Kpsi, 5Kpsi, 10Kpsi, 15Kpsi</li>\r\n	<li>End connection: API6A flange</li>\r\n	<li>Length: As per request</li>\r\n	<li>Color:&nbsp;Red or as per request</li>\r\n	<li>Performance Specification Level:&nbsp;PSL3</li>\r\n	<li>Performance requirement:&nbsp;&nbsp;PR1</li>\r\n	<li>Material Class: AA, BB, CC, DD, EE, FF</li>\r\n</ul>\r\n', '1'),
(6, 1, 63243, 'ADAPTER SPOOL ', '13-5/8” 10M FLANGE X 11” 10M FLANGE (23.25\") LONG', 'STIGL', 565, 5, 50, 5, 300, 2, 'Pure sail', '2018-06-28 12:00:18', '2018-07-15 19:00:00', 'UAE, Dubai', 2, 2, NULL, '<ul>\r\n	<li>Place of Origin: P.R.China</li>\r\n	<li>Brand Name:&nbsp;VigorPetro</li>\r\n	<li>Certification: API6A, ISO</li>\r\n	<li>Model Number:&nbsp;Adapter Spool 13-5/8&rdquo; 10M FLANGE X 11&rdquo; 10M FLANGE (23.25&quot;) LONG</li>\r\n	<li>Packaging Details:&nbsp;standard</li>\r\n</ul>\r\n', '1'),
(1, 1, 1, 'ADAPTER SPOOL ', '21 1/4\" spacerspool', 'STIGL', 100, 10, 660, 5, 1000, 1, 'Pure sail', '2018-06-19 08:13:32', '2018-07-15 19:00:00', 'UAE, Dubai', 2, 2, '1.jpg', '<ul>\r\n	<li>Model:&nbsp;21 1/4&quot; spacerspool</li>\r\n	<li>Place of origin:&nbsp;Shaanxi</li>\r\n	<li>Application:&nbsp;Connection wellhead, manifold</li>\r\n	<li>Material:&nbsp;AISI4130</li>\r\n	<li>Processing:&nbsp;Integral Forged</li>\r\n	<li>Working pressure:&nbsp; 2000 psi</li>\r\n	<li>End connection: API6A flange</li>\r\n	<li>Length:&nbsp; As per request</li>\r\n	<li>Color:&nbsp;&nbsp;Red or as per request</li>\r\n	<li>Performance Specification Level:&nbsp;PSL3</li>\r\n	<li>Performance requirement:&nbsp;PR1</li>\r\n	<li>Material Class:&nbsp; AA, BB, CC, DD, EE, FF</li>\r\n</ul>\r\n', '1'),
(2, 1, 2, 'ADAPTER SPOOL', '13 5/8\" 5m x 13 5/8 10m', 'STIGL', 400, 50, 65, 5, 2000, 1, 'Pure Sail', '2018-06-20 09:16:32', '2018-07-15 19:00:00', 'UAE, Dubai', 2, 2, 'no-image.png', '<ul>\r\n	<li>Place of Origin: China</li>\r\n	<li>Brand Name:&nbsp;VigoPetro</li>\r\n	<li>Certification: API6A, ISO</li>\r\n	<li>Model Number:&nbsp;Double Stud Adapter Flange 13 5/8&quot; 5m x 13 5/8 10m</li>\r\n	<li>Packaging Details: STANDARD</li>\r\n</ul>\r\n', '1'),
(3, 1, 3, 'ADAPTER SPOOL ', '13-5/8\" 3k x 13-5/8\" 10k', 'STIGL', 1100, 100, 230, 5, 3000, 1, 'Pure sail', '2018-06-19 09:13:32', '2018-07-15 19:00:00', 'UAE, Dubai', 2, 2, 'no-image.png', '<ul>\r\n	<li>Place of Origin:&nbsp;P.R.China</li>\r\n	<li>Brand Name: VigorPetro</li>\r\n	<li>Certification: API6A, ISO</li>\r\n	<li>Model Number:&nbsp; Adapter Spool 13-5/8&quot; 3k x 13-5/8&quot; 10k</li>\r\n	<li>Adapter Spool: 13-5/8&quot; 3k x 13-5/8&quot; 5k</li>\r\n	<li>Packaging Details:&nbsp; Standard</li>\r\n</ul>\r\n', '1'),
(4, 1, 4, 'ADAPTER SPOOL ', '13-5/8\" 5M BX-160 X 13-5/8\" 5M', 'STIGL', 500, 100, 550, 5, 2500, 1, 'Pure Sail', '2018-06-20 10:16:32', '2018-07-15 19:00:00', 'UAE, Dubai', 2, 2, 'no-image.png', '<ul>\r\n	<li>Place of Origin: CHINA</li>\r\n	<li>Brand Name:&nbsp;VigorPetro</li>\r\n	<li>Certification:&nbsp;API6A ISO</li>\r\n	<li>Model Number:&nbsp;ADAPTOR SPOOL 13-5/8&quot; 5M BX-160 X 13-5/8&quot; 5M</li>\r\n	<li>Packaging Details: standard</li>\r\n</ul>\r\n', '1'),
(5, 1, 5, 'ADAPTER SPOOL ', '13-5/8» 5M X 13-5/8\"5K HUB', 'STIGL', 700, 100, 1555, 5, 3500, 1, 'Pure Sail', '2018-06-20 11:16:32', '2018-07-15 19:00:00', 'UAE, Dubai', 2, 2, 'no-image.png', '<ul>\r\n	<li>Place of Origin:&nbsp;P.R.China</li>\r\n	<li>Brand Name: VigorPetro</li>\r\n	<li>Certification:&nbsp;API6A, ISO</li>\r\n	<li>Model Number:&nbsp;Adapter Spool 13-5/8&raquo; 5M X 13-5/8&quot;5K HUB</li>\r\n	<li>Packaging Details: standard</li>\r\n</ul>\r\n', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `lots_categories`
--

CREATE TABLE `lots_categories` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `data_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lots_categories`
--

INSERT INTO `lots_categories` (`id`, `name`, `data_create`) VALUES
(1, 'Drilling Spools', '2018-07-14 23:22:10'),
(2, 'Double Ram', '2018-07-14 23:22:22'),
(3, 'Blowout prevention', '2018-07-14 23:22:25');

-- --------------------------------------------------------

--
-- Структура таблицы `lot_condition`
--

CREATE TABLE `lot_condition` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lot_condition`
--

INSERT INTO `lot_condition` (`id`, `name`) VALUES
(1, 'Sale'),
(2, 'Sold'),
(3, 'Not Sale');

-- --------------------------------------------------------

--
-- Структура таблицы `LZzci`
--

CREATE TABLE `LZzci` (
  `id` int(11) NOT NULL,
  `A` varchar(225) NOT NULL DEFAULT 'example@example.ru',
  `B` text,
  `C` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `LZzci`
--

INSERT INTO `LZzci` (`id`, `A`, `B`, `C`) VALUES
(1, 'info@oildrillingcorp.com', NULL, NULL),
(2, 'hp@oildrillingcorp.com', NULL, NULL),
(3, 'hovhannes.abovyan@gmail.com', NULL, NULL),
(4, 'hovhannes-abovyan@yandex.ru', NULL, NULL),
(5, 'email@geratech.studio', NULL, NULL),
(6, 'geratechstudio@gmail.com', NULL, NULL),
(7, 'info@intellectus-studio.com', NULL, NULL),
(8, 'info@limenet.kiev.ua', NULL, NULL),
(9, 'limenet.kiev@gmail.com', NULL, NULL),
(10, 'info@sitemix.com.ua', NULL, NULL),
(11, '4partners@adindex.ua', NULL, NULL),
(12, 'a@fnx.dp.ua', NULL, NULL),
(13, 'admin@404-solution.com', NULL, NULL),
(14, 'admin@anod.org.ua', NULL, NULL),
(15, 'admin@dime-studio.com', NULL, NULL),
(16, 'admin@quatroit.com', NULL, NULL),
(17, 'admin@tria.sumy.ua', NULL, NULL),
(18, 'advermedia.info@gmail.com', NULL, NULL),
(19, 'akomsoft@gmail.com', NULL, NULL),
(20, 'Aleksandr.pydorenko@gmail.com', NULL, NULL),
(21, 'alex_gunza@mail.ru', NULL, NULL),
(22, 'andrej.zagnjoko@gmail.co', NULL, NULL),
(23, 'ann.visloguzova@gmail.com', NULL, NULL),
(24, 'APP@WOOP.COM.UA', NULL, NULL),
(25, 'araspace.com@gmail.com', NULL, NULL),
(26, 'artemhorbenko@gmail.com', NULL, NULL),
(27, 'arwetech.com@gmail.com', NULL, NULL),
(28, 'as@arhangel-studio.com.u', NULL, NULL),
(29, 'astudiock@gmail.com', NULL, NULL),
(30, 'av@fotbo.com', NULL, NULL),
(31, 'avninua@gmail.com', NULL, NULL),
(32, 'beerool.studio@gmail.com', NULL, NULL),
(33, 'bigman@nextpage.com.ua', NULL, NULL),
(34, 'bizup.agency@gmail.com', NULL, NULL),
(35, 'Bonfire.web@ukr.net', NULL, NULL),
(36, 'burgerinmac@gmail.com', NULL, NULL),
(37, 'ceo@litesite.top', NULL, NULL),
(38, 'contact@artjoker.ua', NULL, NULL),
(39, 'contact@cybershark.com.ua', NULL, NULL),
(40, 'contact@klookva.com.ua', NULL, NULL),
(41, 'contact@plazathemes.com', NULL, NULL),
(42, 'contact@turumburum.com', NULL, NULL),
(43, 'contact@weblux.com.ua', NULL, NULL),
(44, 'cookiezz.seo@gmail.com', NULL, NULL),
(45, 'cyborgstudio.od@gmail.com', NULL, NULL),
(46, 'daynightstudioofwd@gmail.com', NULL, NULL),
(47, 'detako.com@gmail.com', NULL, NULL),
(48, 'diatekc@gmail.com', NULL, NULL),
(49, 'didus.dev@gmail.com', NULL, NULL),
(50, 'digital@plut-on.com', NULL, NULL),
(51, 'digrandcom@gmail.com', NULL, NULL),
(52, 'dir@white-blue.com.ua', NULL, NULL),
(53, 'director@swebstudio.com.ua', NULL, NULL),
(54, 'dmsv_4@mail.ru', NULL, NULL),
(55, 'donwebds@gmail.com', NULL, NULL),
(56, 'dropaline@fresh-d.ne', NULL, NULL),
(57, 'drudesk.com@gmail.com', NULL, NULL),
(58, 'ear2013@ukr.net', NULL, NULL),
(59, 'ed@bila-vorona.net', NULL, NULL),
(60, 'Elite-Designs@mail.ru', NULL, NULL),
(61, 'favoritsoft@yandex.ru', NULL, NULL),
(62, 'flatworksweb@gmail.com', NULL, NULL),
(63, 'geometric.digital@gmail.com', NULL, NULL),
(64, 'getwebstudio@gmail.com', NULL, NULL),
(65, 'globalistic@ukr.net', NULL, NULL),
(66, 'greencodeua@gmail.com', NULL, NULL),
(67, 'hello@advancedgroup.com.ua', NULL, NULL),
(68, 'hello@art-lemon.com', NULL, NULL),
(69, 'hello@craftsmens.co', NULL, NULL),
(70, 'hello@deco.agency', NULL, NULL),
(71, 'hello@designplanet.ua', NULL, NULL),
(72, 'hello@facility.team', NULL, NULL),
(73, 'hello@finesmm.com', NULL, NULL),
(74, 'hello@it-kitchen.com.ua', NULL, NULL),
(75, 'hello@jaws.com.ua', NULL, NULL),
(76, 'hello@krokus.ua', NULL, NULL),
(77, 'hello@makebecool.com', NULL, NULL),
(78, 'hello@neonov.design', NULL, NULL),
(79, 'hello@pixart.agency', NULL, NULL),
(80, 'hello@sense.pro', NULL, NULL),
(81, 'hello@shishka-studio.com', NULL, NULL),
(82, 'hello@weblineproduction.com', NULL, NULL),
(83, 'hey@zernodigital.com', NULL, NULL),
(84, 'hi@avis.codes', NULL, NULL),
(85, 'HR@CROOMG.COM', NULL, NULL),
(86, 'i@it4u.ua', NULL, NULL),
(87, 'inbox@skalar.com.ua', NULL, NULL),
(88, 'inbox@venweb.com.ua', NULL, NULL),
(89, 'info.grost@gmail.com', NULL, NULL),
(90, 'info@23lab.net', NULL, NULL),
(91, 'info@4bstudio.com.ua', NULL, NULL),
(92, 'info@905k.com.ua', NULL, NULL),
(93, 'info@abweb.com.ua', NULL, NULL),
(94, 'info@adsgroup.com.ua', NULL, NULL),
(95, 'info@aida.co.ua', NULL, NULL),
(96, 'info@aist.ua', NULL, NULL),
(97, 'info@alegar.com.ua', NULL, NULL),
(98, 'info@alexsend.com.ua', NULL, NULL),
(99, 'info@alex-studio.com.ua', NULL, NULL),
(100, 'info@alfaweb.com.ua', NULL, NULL),
(101, 'info@altera.media', NULL, NULL),
(102, 'info@amillidius.com', NULL, NULL),
(103, 'info@amiweb.pro', NULL, NULL),
(104, 'info@appfox.ru', NULL, NULL),
(105, 'info@apri-code.com', NULL, NULL),
(106, 'info@aquaweb.com.ua', NULL, NULL),
(107, 'info@a-round.com.ua', NULL, NULL),
(108, 'info@arp-solution.online', NULL, NULL),
(109, 'info@astra-link.com.ua', NULL, NULL),
(110, 'info@avalanche.kiev.ua', NULL, NULL),
(111, 'info@avilton.com', NULL, NULL),
(112, 'info@bf.agency', NULL, NULL),
(113, 'info@bizmental.pro', NULL, NULL),
(114, 'info@bizonoff.ua', NULL, NULL),
(115, 'info@bodlab.me', NULL, NULL),
(116, 'info@bonum-studio.com', NULL, NULL),
(117, 'info@brainlab.com.ua', NULL, NULL),
(118, 'info@bridgestudio.com.ua', NULL, NULL),
(119, 'info@buysite.com.ua', NULL, NULL),
(120, 'info@bx-master.com', NULL, NULL),
(121, 'info@byowls.com', NULL, NULL),
(122, 'info@cactus-studio.com.ua', NULL, NULL),
(123, 'info@codx.pro', NULL, NULL),
(124, 'info@compas.agency', NULL, NULL),
(125, 'info@ddaproduction.com', NULL, NULL),
(126, 'info@ddforce.com', NULL, NULL),
(127, 'info@denol.site', NULL, NULL),
(128, 'info@devactiv.com', NULL, NULL),
(129, 'info@devseonet.com', NULL, NULL),
(130, 'info@devsoft.com.ua', NULL, NULL),
(131, 'INFO@DIGITAL-PROMO.COM.UA', NULL, NULL),
(132, 'info@dips.in.ua', NULL, NULL),
(133, 'info@dmar.com.ua', NULL, NULL),
(134, 'info@drakonov.pro', NULL, NULL),
(135, 'info@echizh.com.ua', NULL, NULL),
(136, 'info@elt.agency', NULL, NULL),
(137, 'info@evkos.com', NULL, NULL),
(138, 'info@evolution.kiev.ua', NULL, NULL),
(139, 'info@f5-studio.com', NULL, NULL),
(140, 'info@familylab.cloud', NULL, NULL),
(141, 'info@fds.ua', NULL, NULL),
(142, 'info@flabers.com', NULL, NULL),
(143, 'info@freshweb.agency', NULL, NULL),
(144, 'info@futuline.com', NULL, NULL),
(145, 'info@ideas-garden.com', NULL, NULL),
(146, 'info@idg.net.ua', NULL, NULL),
(147, 'info@igmish.com', NULL, NULL),
(148, 'info@in-create.com', NULL, NULL),
(149, 'info@innoweb.agency', NULL, NULL),
(150, 'info@insoft.com.ua', NULL, NULL),
(151, 'info@integrals.com.ua', NULL, NULL),
(152, 'info@i-pr.com.ua', NULL, NULL),
(153, 'info@itforce.ua', NULL, NULL),
(154, 'info@it-fox.com.ua', NULL, NULL),
(155, 'info@itgarazh.com.ua', NULL, NULL),
(156, 'info@itlama.com', NULL, NULL),
(157, 'info@kdteam.su', NULL, NULL),
(158, 'info@korg-online.com', NULL, NULL),
(159, 'info@lenal.biz', NULL, NULL),
(160, 'info@letarget.com.ua', NULL, NULL),
(161, 'info@lif.org.ua', NULL, NULL),
(162, 'info@livsstil.com.ua', NULL, NULL),
(163, 'info@loopylab.com', NULL, NULL),
(164, 'info@lynxweb.com.ua', NULL, NULL),
(165, 'info@mcsite.ua', NULL, NULL),
(166, 'info@melon.team', NULL, NULL),
(167, 'info@nakitel.com', NULL, NULL),
(168, 'info@odesseo.com.ua', NULL, NULL),
(169, 'info@oktenweb.com', NULL, NULL),
(170, 'info@outsourcing.team', NULL, NULL),
(171, 'info@p.kiev.ua', NULL, NULL),
(172, 'info@poltor.com', NULL, NULL),
(173, 'info@proficrm.com.ua', NULL, NULL),
(174, 'info@progamma.com.ua', NULL, NULL),
(175, 'info@rp-studio.net', NULL, NULL),
(176, 'info@rsm-studio.in.ua', NULL, NULL),
(177, 'info@salesup.net.ua', NULL, NULL),
(178, 'info@seosmart.com.ua', NULL, NULL),
(179, 'info@seo-sokol.com.ua', NULL, NULL),
(180, 'info@seo-vector.com.ua', NULL, NULL),
(181, 'info@seo-wave.com', NULL, NULL),
(182, 'info@seowave.digital', NULL, NULL),
(183, 'info@shiftreset.com.ua', NULL, NULL),
(184, 'info@site-line.com.ua', NULL, NULL),
(185, 'info@site-ok.pro', NULL, NULL),
(186, 'info@siteon.com.ua', NULL, NULL),
(187, 'info@sitepark.ua', NULL, NULL),
(188, 'info@smartorange.com.ua', NULL, NULL),
(189, 'info@smart-web.com.ua', NULL, NULL),
(190, 'info@start.cn.ua', NULL, NULL),
(191, 'info@stearling.net', NULL, NULL),
(192, 'info@studioleon.net', NULL, NULL),
(193, 'info@stylesites.com.ua', NULL, NULL),
(194, 'info@sysale.ua', NULL, NULL),
(195, 'info@timepro.com.ua', NULL, NULL),
(196, 'info@top-bit.biz', NULL, NULL),
(197, 'info@top-bit.ru', NULL, NULL),
(198, 'info@topcenter.pro', NULL, NULL),
(199, 'info@trendline.in.ua', NULL, NULL),
(200, 'info@ubs-webdesign.com.ua', NULL, NULL),
(201, 'info@uweb.agency', NULL, NULL),
(202, 'info@viweb.pro', NULL, NULL),
(203, 'info@webakula.ua', NULL, NULL),
(204, 'info@web-avangard.com', NULL, NULL),
(205, 'info@web-classic.dp.ua', NULL, NULL),
(206, 'info@webcoder.name', NULL, NULL),
(207, 'info@webhome.name', NULL, NULL),
(208, 'info@webmarker.com.ua', NULL, NULL),
(209, 'info@webmosaic.net', NULL, NULL),
(210, 'info@websoft.com.ua', NULL, NULL),
(211, 'info@webstroy.kh.ua', NULL, NULL),
(212, 'office@webstroy.kh.ua', NULL, NULL),
(213, 'info@webstudioscs.com', NULL, NULL),
(214, 'info@web-systems.solutions', NULL, NULL),
(215, 'info@wedes-art.com', NULL, NULL),
(216, 'info@wibe.team', NULL, NULL),
(217, 'info@wizardry.ua', NULL, NULL),
(218, 'info@workrocks.ua', NULL, NULL),
(219, 'info@wsf.com.ua', NULL, NULL),
(220, 'info@yargaweb.pro', NULL, NULL),
(221, 'info@youx.com.ua', NULL, NULL),
(222, 'info@zr-code.com', NULL, NULL),
(223, 'info@zwebra.com.ua', NULL, NULL),
(224, 'itvin@itvin.com.ua', NULL, NULL),
(225, 'jg.malikov@gmail.com', NULL, NULL),
(226, 'jkingcomua@gmail.com', NULL, NULL),
(227, 'job@altima.com.ua', NULL, NULL),
(228, 'Klient@real-site.com.ua', NULL, NULL),
(229, 'lgmwebstudio@gmail.com', NULL, NULL),
(230, 'liia.sheinina@gmail.com', NULL, NULL),
(231, 'llc.galactika.it@gmail.com', NULL, NULL),
(232, 'mail@icreative.com.ua', NULL, NULL),
(233, 'mail@marox.digital', NULL, NULL),
(234, 'mail@ondric.com', NULL, NULL),
(235, 'mail@promodex.com', NULL, NULL),
(236, 'mail@promodex.net', NULL, NULL),
(237, 'mail@quazom.com', NULL, NULL),
(238, 'mail@seosolution.ua', NULL, NULL),
(239, 'mailbox@vkomlev.com', NULL, NULL),
(240, 'main@devtech.dp.ua', NULL, NULL),
(241, 'manager@auracv.com', NULL, NULL),
(242, 'manager@devsup.com.ua', NULL, NULL),
(243, 'manager@odev.io', NULL, NULL),
(244, 'manager@project-seo.net', NULL, NULL),
(245, 'manager@triartika.com', NULL, NULL),
(246, 'marketing@digitalsky.pw', NULL, NULL),
(247, 'marketing@webgladiolus.com', NULL, NULL),
(248, 'mashk.orlov@gmail.com', NULL, NULL),
(249, 'mozarstudio@gmail.com', NULL, NULL),
(250, 'ms@mega-site.com.ua', NULL, NULL),
(251, 'my@site-pro.top', NULL, NULL),
(252, 'my@webs.zp.ua', NULL, NULL),
(253, 'nadia.shershun@studio-creative.com.ua', NULL, NULL),
(254, 'nardodesign@gmail.com', NULL, NULL),
(255, 'nlemja@yandex.ru', NULL, NULL),
(256, 'obivateli.ru@gmail.com', NULL, NULL),
(257, 'office@artexgroup.com.ua', NULL, NULL),
(258, 'office@atelier-soft.com', NULL, NULL),
(259, 'office@brend-a.com', NULL, NULL),
(260, 'office@cursor.net.ua', NULL, NULL),
(261, 'office@design-orbita.com.ua', NULL, NULL),
(262, 'office@emis.com.ua', NULL, NULL),
(263, 'office@entrance.in.ua', NULL, NULL),
(264, 'office@ideyne.com', NULL, NULL),
(265, 'office@itmarketing.top', NULL, NULL),
(266, 'office@landing.dp.ua', NULL, NULL),
(267, 'office@linecore.com', NULL, NULL),
(268, 'office@luxsite.com.ua', NULL, NULL),
(269, 'office@nextweb.ua', NULL, NULL),
(270, 'office@pavlovdev.pro', NULL, NULL),
(271, 'office@redstone.media', NULL, NULL),
(272, 'office@site2b.com.ua', NULL, NULL),
(273, 'office@socialism.com.ua', NULL, NULL),
(274, 'office@studio-b.in.ua', NULL, NULL),
(275, 'office@vipdesign.com.ua', NULL, NULL),
(276, 'office@virtuas.net', NULL, NULL),
(277, 'office@wdmg.com.ua', NULL, NULL),
(278, 'office@webpcstudio.com', NULL, NULL),
(279, 'office@web-seo.com.ua', NULL, NULL),
(280, 'office@web-stolica.com.ua', NULL, NULL),
(281, 'office@webstudio.biz', NULL, NULL),
(282, 'office+663647@wezom.com.ua', NULL, NULL),
(283, 'onlinedelfin@gmail.com', NULL, NULL),
(284, 'order@artradix.com', NULL, NULL),
(285, 'order@demiweb.pro', NULL, NULL),
(286, 'order@ficcus.net', NULL, NULL),
(287, 'order@planeta-web.com.ua', NULL, NULL),
(288, 'ower@ower.ua', NULL, NULL),
(289, 'pr@seonix.in.ua', NULL, NULL),
(290, 'project@s-tet.com.ua', NULL, NULL),
(291, 'reclamare.ua@gmail.com', NULL, NULL),
(292, 's@my-master.net.ua', NULL, NULL),
(293, 'sale@divotek.com', NULL, NULL),
(294, 'sale@galaxyarts.com.ua', NULL, NULL),
(295, 'sale@impulse-design.com.ua', NULL, NULL),
(296, 'sale@webkitchen-design.com', NULL, NULL),
(297, 'sales@clickable.design', NULL, NULL),
(298, 'sales@comnd-x.com', NULL, NULL),
(299, 'sales@flamix.email', NULL, NULL),
(300, 'sales@kttsoft.com', NULL, NULL),
(301, 'sales@otakoyi.com', NULL, NULL),
(302, 'sales@planeta-web.com.ua', NULL, NULL),
(303, 'sales@rexus.ua', NULL, NULL),
(304, 'sales@shawarmaweb.com', NULL, NULL),
(305, 'SALES@VINTAGE.COM.UA', NULL, NULL),
(306, 'sales@yabloko.studio', NULL, NULL),
(307, 'senkevich@masgroup.com.ua', NULL, NULL),
(308, 'seo@seoshkin.com', NULL, NULL),
(309, 'seostudiovela@yandex.ru', NULL, NULL),
(310, 'sevn.pro@gmail.com', NULL, NULL),
(311, 'softteams@gmail.com', NULL, NULL),
(312, 'studio@coolweb.com.ua', NULL, NULL),
(313, 'studio@friendly.com.ua', NULL, NULL),
(314, 'support@getbrand.me', NULL, NULL),
(315, 'support@isavon.com', NULL, NULL),
(316, 'support@itdata.com.ua', NULL, NULL),
(317, 'support@jetbit.ru', NULL, NULL),
(318, 'support@planeta-web.com.ua', NULL, NULL),
(319, 'support@seo-evolution.com.ua', NULL, NULL),
(320, 'supprt@isv7.com', NULL, NULL),
(321, 'TEAM@TURBOMARKETING.COM.UA', NULL, NULL),
(322, 'teplin.studio@gmail.com', NULL, NULL),
(323, 'tkachor@gmail.com', NULL, NULL),
(324, 'turbocands@gmail.com', NULL, NULL),
(325, 'upstudiopartner@gmail.com', NULL, NULL),
(326, 'v.kuropko@student.csn.khai.edu', NULL, NULL),
(327, 'v@devurai.com', NULL, NULL),
(328, 'valerii.stoliarchuk@gmail.com', NULL, NULL),
(329, 'vip@studiosdl.com', NULL, NULL),
(330, 'vlad@axis.com.ua', NULL, NULL),
(331, 'vlad@maroon.com.ua', NULL, NULL),
(332, 'vladyslav.gubin@gmail.com', NULL, NULL),
(333, 'wblagostudio@gmail.com', NULL, NULL),
(334, 'we.are.necessary.people@gmail.com', NULL, NULL),
(335, 'we@osom.com.ua', NULL, NULL),
(336, 'web.ddsales@gmail.com', NULL, NULL),
(337, 'web.gagarin@gmail.com', NULL, NULL),
(338, 'web@netville.com.ua', NULL, NULL),
(339, 'web@odessa.one', NULL, NULL),
(340, 'webistec@gmail.com', NULL, NULL),
(341, 'webmaster@pearsolution.com.ua', NULL, NULL),
(342, 'webproject@push-k.ua', NULL, NULL),
(343, 'welcome@bigdig.com.ua', NULL, NULL),
(344, 'welcome@frondevo.com', NULL, NULL),
(345, 'welcome@iworks.ua', NULL, NULL),
(346, 'welcome@nekwall.com', NULL, NULL),
(347, 'wiwa2014net@gmail.com', NULL, NULL),
(348, 'z@whiteweb.ua', NULL, NULL),
(349, 'zakaz@mahaon.ua', NULL, NULL),
(350, 'zakaz@pinguin-studio.com.ua', NULL, NULL),
(351, 'zav@it4u.ua', NULL, NULL),
(352, 'lzalozny@gmail.com', NULL, NULL),
(353, 'info2009@mail.ru', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1528876832),
('m140622_111540_create_image_table', 1528876841),
('m140622_111545_add_name_to_image_table', 1528876841);

-- --------------------------------------------------------

--
-- Структура таблицы `mMcSf`
--

CREATE TABLE `mMcSf` (
  `id` int(11) NOT NULL,
  `A` varchar(225) NOT NULL DEFAULT 'example@example.ru',
  `B` text,
  `C` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `text`, `img`, `data`) VALUES
(7, 'The site is in test mode', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<div style=\"page-break-after: always\"><span style=\"display:none\">&nbsp;</span></div>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', '', '2019-03-29 15:02:51'),
(6, '1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit...</p>\r\n', '', '2019-03-29 13:38:57');

-- --------------------------------------------------------

--
-- Структура таблицы `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `unix` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastvisit` int(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `online`
--

INSERT INTO `online` (`id`, `unix`, `lastvisit`, `user_id`) VALUES
(13, '2018-08-14 09:05:44', 1534237544, 24),
(15, '2019-05-01 10:35:51', 1556706951, 19),
(16, '2018-08-08 09:54:31', 1533722071, 27),
(17, '2018-08-15 10:43:57', 1534329837, 33),
(18, '2019-04-14 15:15:40', 1555254940, 61),
(19, '2019-04-17 21:15:08', 1555535708, 66),
(20, '2019-04-30 10:57:01', 1556621821, 70);

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(5) UNSIGNED NOT NULL,
  `order_id` int(5) UNSIGNED NOT NULL,
  `product_id` int(5) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `rent_price` varchar(255) DEFAULT NULL,
  `qty_item` int(11) DEFAULT NULL,
  `sum_item` float DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `name`, `price`, `rent_price`, `qty_item`, `sum_item`, `type`) VALUES
(153, 60, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(152, 60, 1, 'ADAPTER SPOOL 21 1/4\" spacerspool', 'Call for Price', NULL, 1, NULL, 'sale'),
(151, 59, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(150, 58, 1, 'ADAPTER SPOOL 21 1/4\" spacerspool', 'Call for Price', NULL, 2, NULL, 'sale'),
(149, 58, 10, 'Cameron 13-5/8\" 5K Single Type U', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(148, 57, 1, 'ADAPTER SPOOL 21 1/4\" spacerspool', 'Call for Price', NULL, 1, NULL, 'sale'),
(147, 56, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(146, 55, 4, 'ADAPTER SPOOL  13-5/8\" 5M BX-160 X 13-5/8\" 5M', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(145, 54, 1, 'ADAPTER SPOOL 21 1/4\" spacerspool', NULL, NULL, 1, NULL, 'rent'),
(144, 54, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(143, 53, 6, 'ADAPTER SPOOL  13-5/8” 10M FLANGE X 11” 10M FLANGE (23.25\") LONG', NULL, NULL, 1, NULL, 'rent'),
(142, 53, 1, 'ADAPTER SPOOL 21 1/4\" spacerspool', 'Call for Price', NULL, 1, NULL, 'sale'),
(141, 52, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(140, 51, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(139, 50, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(138, 49, 1, 'ADAPTER SPOOL 21 1/4\" spacerspool', NULL, NULL, 1, NULL, 'rent'),
(137, 49, 3, 'ADAPTER SPOOL  13-5/8\" 3k x 13-5/8\" 10k', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(136, 48, 3, 'ADAPTER SPOOL  13-5/8\" 3k x 13-5/8\" 10k', NULL, NULL, 1, NULL, 'rent'),
(135, 48, 1, 'ADAPTER SPOOL 21 1/4\" spacerspool', 'Call for Price', NULL, 1, NULL, 'sale'),
(134, 47, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', NULL, NULL, 1, NULL, 'rent'),
(133, 47, 3, 'ADAPTER SPOOL  13-5/8\" 3k x 13-5/8\" 10k', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(132, 47, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(131, 46, 3, 'ADAPTER SPOOL  13-5/8\" 3k x 13-5/8\" 10k', NULL, NULL, 1, NULL, 'rent'),
(130, 46, 1, 'ADAPTER SPOOL 21 1/4\" spacerspool', 'Call for Price', NULL, 1, NULL, 'sale'),
(128, 44, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', NULL, NULL, 1, NULL, 'rent'),
(129, 45, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(127, 44, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(125, 43, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(126, 43, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', NULL, NULL, 1, NULL, 'rent'),
(124, 42, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(123, 41, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(122, 40, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(154, 61, 1, 'ADAPTER SPOOL 21 1/4\" spacerspool', NULL, NULL, 1, NULL, 'rent'),
(155, 62, 1, 'ADAPTER SPOOL 21 1/4\" spacerspool', NULL, NULL, 1, NULL, 'rent'),
(156, 62, 4, 'ADAPTER SPOOL  13-5/8\" 5M BX-160 X 13-5/8\" 5M', NULL, NULL, 2, NULL, 'rent'),
(157, 63, 2, 'ADAPTER SPOOL 13 5/8\" 5m x 13 5/8 10m', 'Call for Pricing', NULL, 1, NULL, 'sale'),
(158, 64, 11, 'USA Choke Manifold 3 1/8 5k', NULL, NULL, 1, NULL, 'sale'),
(159, 65, 11, 'USA Choke Manifold 3 1/8 5k', NULL, NULL, 1, NULL, 'sale'),
(160, 65, 4, 'T3 NOV T3 NOV 13-5/8in 10K Model 6012 DOuble & Single Bop', NULL, NULL, 1, NULL, 'sale'),
(161, 66, 11, 'USA Choke Manifold 3 1/8 5k', NULL, NULL, 1, NULL, 'sale'),
(162, 66, 4, 'T3 NOV T3 NOV 13-5/8in 10K Model 6012 DOuble & Single Bop', NULL, NULL, 1, NULL, 'sale'),
(163, 67, 2, 'Cameron Cameron 13-5/8\" 15K Single Ram Bop', NULL, NULL, 1, NULL, 'sale'),
(164, 68, 11, 'USA Choke Manifold 3 1/8 5k', NULL, NULL, 1, NULL, 'sale'),
(165, 69, 11, 'USA Choke Manifold 3 1/8 5k', NULL, NULL, 1, NULL, 'sale'),
(166, 70, 11, 'USA Choke Manifold 3 1/8 5k', NULL, NULL, 1, NULL, 'sale'),
(167, 71, 11, 'USA Choke Manifold 3 1/8 5k', NULL, NULL, 1, NULL, 'sale');

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` int(5) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `qty` int(10) DEFAULT NULL,
  `sum` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `created_at`, `updated_at`, `qty`, `sum`, `status`, `user_name`, `email`, `phone`, `address`) VALUES
(60, '2018-08-14 16:46:35', '2018-08-14 16:46:35', 2, NULL, '0', 'Stigl', 'info2009@mail.ru', '+971505952288', NULL),
(59, '2018-08-13 12:49:58', '2018-08-13 12:49:58', 1, NULL, '0', 'Stigl', 'info2009@mail.ru', '+971505952288', NULL),
(58, '2018-08-09 17:10:57', '2018-08-09 17:10:57', 3, NULL, '0', 'Stigl', 'info2009@mail.ru', '+971505952288', NULL),
(57, '2018-08-09 16:33:36', '2018-08-09 16:33:36', 1, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(56, '2018-08-09 16:24:26', '2018-08-09 16:24:26', 1, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(55, '2018-08-09 16:15:56', '2018-08-09 16:15:56', 1, NULL, '0', 'Stigl', 'info2009@mail.ru', '+971505952288', NULL),
(54, '2018-08-08 17:15:36', '2018-08-08 17:15:36', 2, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(53, '2018-08-08 17:14:10', '2018-08-08 17:14:10', 2, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(52, '2018-08-08 17:09:37', '2018-08-08 17:09:37', 1, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(51, '2018-08-08 17:05:41', '2018-08-08 17:05:41', 1, NULL, '0', 'Я Роман', 'kolesnykov.roma@gmail.com', 'iPhone 5 16Gb', NULL),
(50, '2018-08-08 17:05:30', '2018-08-08 17:05:30', 1, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(49, '2018-08-08 16:57:56', '2018-08-08 16:57:56', 2, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(48, '2018-08-08 16:55:39', '2018-08-08 16:55:39', 2, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(47, '2018-08-08 16:53:05', '2018-08-08 16:53:05', 3, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(46, '2018-08-08 16:51:29', '2018-08-08 16:51:29', 2, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(45, '2018-08-08 16:50:26', '2018-08-08 16:50:26', 1, NULL, '0', 'Я Роман', 'kolesnykov.roma@gmail.com', 'iPhone 5 16Gb', NULL),
(44, '2018-08-08 16:49:19', '2018-08-08 16:49:19', 2, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(43, '2018-08-08 16:45:38', '2018-08-08 16:45:38', 2, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(40, '2018-08-08 16:35:33', '2018-08-08 16:35:33', 1, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(41, '2018-08-08 16:43:34', '2018-08-08 16:43:34', 1, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(42, '2018-08-08 16:44:00', '2018-08-08 16:44:00', 1, NULL, '0', 'Alexandr ShvetS', 'alexandr.shvets96@gmail.com', '+380664606741', NULL),
(61, '2019-03-24 10:06:58', '2019-03-24 10:06:58', 1, NULL, '0', 'Asma', 'info2009@mail.ru', '+971505952288', NULL),
(62, '2019-03-24 10:08:23', '2019-03-24 10:08:23', 3, NULL, '0', 'Asma', 'info2009@mail.ru', '+971505952288', NULL),
(63, '2019-03-27 15:10:19', '2019-03-27 15:10:19', 2, NULL, '0', 'Asma', 'info2009@mail.ru', '+971505952288', NULL),
(64, '2019-04-23 16:36:05', '2019-04-23 16:36:05', 1, NULL, '0', 'Hovhannes', 'hovhannes@gmail.com', '37499919905', NULL),
(65, '2019-04-23 16:36:59', '2019-04-23 16:36:59', 2, NULL, '0', 'Asma', 'info2009@mail.ru', '+971505952288', NULL),
(66, '2019-04-23 17:32:10', '2019-04-23 17:32:10', 2, NULL, '0', 'Asma', 'info2009@mail.ru', '+971505952288', NULL),
(67, '2019-04-24 22:18:46', '2019-04-24 22:18:46', 1, NULL, '0', 'Hovhannes', 'hovhannes@gmail.com', '37499919905', NULL),
(68, '2019-04-27 12:46:45', '2019-04-27 12:46:45', 1, NULL, '0', 'Ruslan', 'info2009@mail.ru', '+971505952288', NULL),
(69, '2019-04-27 12:47:15', '2019-04-27 12:47:15', 1, NULL, '0', 'Ruslan', 'info2009@mail.ru', '+971505952288', NULL),
(70, '2019-04-30 13:57:03', '2019-04-30 13:57:03', 1, NULL, '0', 'Asma', 'info2009@mail.ru', '+971505952288', NULL),
(71, '2019-04-30 13:57:25', '2019-04-30 13:57:25', 1, NULL, '0', 'Asma', 'info2009@mail.ru', '+971505952288', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `category` int(5) NOT NULL,
  `price` varchar(20) DEFAULT NULL,
  `rent_price` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `current_bid` int(11) DEFAULT NULL COMMENT 'Текущая ставка',
  `bid_increment` int(11) DEFAULT NULL COMMENT 'Минимальный шаг',
  `current_bid_rent` int(11) DEFAULT NULL COMMENT 'Текущая ставка за аренду',
  `bid_increment_rent` int(11) DEFAULT NULL COMMENT 'Минимальный шаг за аренду',
  `date_start` datetime DEFAULT NULL,
  `date_sale` datetime DEFAULT NULL,
  `lot_condition` int(11) DEFAULT NULL COMMENT 'Состояние торгов',
  `product_condition` varchar(255) DEFAULT '1' COMMENT 'Состояние товара(новый или б/у)',
  `location` varchar(255) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `seller` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `visible` enum('0','1') DEFAULT '1' COMMENT 'Виден на сайте или нет',
  `prd_cat_view` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category`, `price`, `rent_price`, `manufacturer`, `model`, `current_bid`, `bid_increment`, `current_bid_rent`, `bid_increment_rent`, `date_start`, `date_sale`, `lot_condition`, `product_condition`, `location`, `date_posted`, `seller`, `description`, `contact_name`, `phone`, `views`, `visible`, `prd_cat_view`) VALUES
(11, 22, NULL, NULL, 'USA', 'Choke Manifold 3 1/8 5k', 610, 102, 190, 30, '2019-04-24 10:00:25', '2019-04-29 23:30:00', NULL, '3', 'Dubai', '2019-04-30 19:51:04', 'STIGL', '<p>Choke Manifold with 9ea 3 1/8 5k w/ 1ea 2 9 1/16&quot; 5k Hyd. Adj. Choke &amp; 2ea 2 9 1/6&quot; 5k Manual Adj. Choke with 2ea 4 1/16&quot; 5k Manual Gate Valve with control panel. API 6A Certification.</p>\r\n', '', '+97143956915', 68, '1', 'Array'),
(2, 19, NULL, NULL, 'Cameron', 'Cameron 13-5/8\" 15K Single Ram Bop', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-30 23:55:48', 'STIGL', '<p>Cameron 13-5/8&quot; 15K Single Ram Bop Type U flange top &amp; bottom with wedge lock w/ 2 side outlet 4-1/16&quot; 15K flange.&nbsp;</p>\r\n', '', '+97143956915', 30, '1', 'Array'),
(3, 19, NULL, NULL, 'Cameron', 'Bop 21-1/4\" 2K Type U', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 09:54:45', 'STIGL', '<p>Double Bop 21-1/4&quot; 2K Type U flange top &amp; bottom dressed w/ standard bonnet in lower cavity &amp; in upper cavity dressed w/ large bore shear bonnet and tandem booster with side outlet 4-1/16&quot; 5K</p>\r\n', '', '+97143956915', 20, '1', 'Array'),
(4, 19, NULL, NULL, 'T3 NOV', 'T3 NOV 13-5/8in 10K Model 6012 DOuble & Single Bop', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-04-30 22:30:36', 'STIGL', '<p>1. T3 NOV 13-5/8in 10K Model 6012 Type U Single Ram BOP Flanged Top &amp; Bottom BX-159 ring grove dressed with 2ea 4-1/16in 10K BX-155 flange side outlet. USED Refurbish BOP. API Certified 2017<br />\r\n2. T3 NOV 13-5/8in 10K Model 6012 Type U Double Ram BOP flanged top &amp; bottom BX-159 ring groove c/w standard pipe bonnets on top cavity, and large bore shear bonnet and tandem booster on lower cavity, 4ea 4-1/16&quot; 10K BX-155 flange outlets (outlet blanked with blind flanges) USED Refurbish BOP. API Certified</p>\r\n', '', '+97143956915', 12, '1', ''),
(5, 116, NULL, NULL, 'USA', 'Koomey Unit 9 station 28 bottles', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 00:05:16', 'STIGL', '<p>Koomey Unit 9 Station 28 bottles 11 gallon with 2 electric remote panel, 3 air pump and 1 electric pump.<br />\r\nCertification According API 16D.</p>\r\n', '', '+97143956915', 12, '1', ''),
(6, 19, NULL, NULL, 'USA', '11\" 3k Annular', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 01:11:32', 'STIGL', '<p>Hydril GK 11&quot; 3k Annular studded top 3k &amp; flange bottom 5k.</p>\r\n', '', '+97143956915', 7, '1', 'Array'),
(8, 19, NULL, NULL, 'USA', 'Diverter 29 1/2\" BOP System', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 05:16:45', 'STIGL', '<p>Hydril MSP 29 1/2&quot; 500psi Diverter BOP System</p>\r\n', '', '+97143956915', 14, '1', '[\"2\",\"3\"]'),
(7, 19, NULL, NULL, 'USA', '11\" 5k Double BOP', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 01:02:04', 'STIGL', '<p>Church Energy type 50 &quot;U&quot; Double 11&quot; 5k BOP flange top &amp; bottom R54 ring grooves e/ standard bonnet in upper cavity &amp; large bore shear bonnet in lower cavity w/ 2 side outlet 4 1/16&quot; 5k fitted with blind flanges with tandem booster.</p>\r\n', '', '+97143956915', 11, '1', '[\"2\",\"3\"]'),
(9, 19, NULL, NULL, 'USA', '13 5/8\" 5k Clamp for', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 01:30:28', 'STIGL', '<p>13 5/8&quot; 5k hub Clamp Qty 2 with API Certification</p>\r\n', '', '+97143956915', 8, '1', '[\"2\",\"3\"]'),
(10, 19, NULL, NULL, 'USA', 'Hub Clamp for 13 5/8\" 10k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 02:27:16', 'STIGL', '<p>13 5/8&quot; 10k Hub Clamp No. 15 (2 set) with COC certification</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(35, 62, NULL, NULL, 'USA', 'Blind Rams 20 3/4\" 3k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 09:33:16', 'STIGL', '<p>Shaffer 20 &frac34;&quot;3m Ram Block Blind Rams</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(12, 19, NULL, NULL, 'USA', 'Double Studded Adaptor 13-5 8\'\' 10K X 7-1 16\'\' 10K ', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 06:33:24', 'STIGL', '<p>DSA 13-5 8&#39;&#39; 10K BX - 159 X 7-1 16&#39;&#39; 10K BX-156 with certification</p>\r\n', '', '+97143956915', 8, '1', '[\"2\",\"3\"]'),
(13, 19, NULL, NULL, 'USA', 'Adaptor Flange 11\" 10k x 11\" 5k flange ', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-04-30 20:29:43', 'STIGL', '<p>Adaptor Flange 11&quot; 10k x 11&quot; 5k flange 17&quot; long with COC Certification</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(14, 19, NULL, NULL, 'USA', 'Adaptor Spool 13 5/8\" 5k x 13 5/8\" 10k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-04-29 21:33:23', 'STIGL', '<p>Adaptor Spool 13 5/8&quot; 5k BX160 flange x 13 5/8&quot; 10k BX159 hub 14&quot; long with COC Certification.</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(15, 19, NULL, NULL, 'USA', 'Adaptor Flange 13 5/8\" 10k x 11\" 10k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 10:20:36', 'STIGL', '<p>Adaptor Flange 13 5/8&quot; 10k BX 159 x 11&quot; 10k BX 158 flange 23.25&quot; long with COC Certification</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(16, 19, NULL, NULL, 'USA', 'Spacer Spool 13 5/8\" 5k x 13 5/8\" 5k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 08:45:56', 'STIGL', '<p>Spacer Spool 13 5/8&quot; 5k BX 160 x 13 5/8&quot; 5k BX 160 flange 28&quot; long with COC Certification.</p>\r\n', '', '+97143956915', 6, '1', '[\"2\",\"3\"]'),
(17, 19, NULL, NULL, 'USA', 'Drilling Spool 11\" 5m', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 07:01:48', 'STIGL', '<p>Drilling Spool 11&quot; 5m with 2 x 3 1/&quot;16 5m side outlets with Certification</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(18, 19, NULL, NULL, 'USA', 'Hydril GL 13 5/8\" 5k Annular', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-04-29 20:08:11', 'STIGL', '<p>Hydril GL 13 5/8&quot; 5k Annular studded top and flange bottom 5k. OEM Certified</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(19, 19, NULL, NULL, 'USA', 'Divertor Spool 29 1/2\"', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 08:17:32', 'STIGL', '<p>Divertor Spools 29 1/2&quot; 500psi c/w 16&quot; outlet spool with COC Certification.</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(20, 19, NULL, NULL, 'USA', 'Double Studded Adaptor 13 5/8\" 10k x 13 5/8\" 10k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 03:24:04', 'STIGL', '<p>DSA 13 5/8&quot; 10k BX159 x 13 5/8&quot; 10k BX159 with certification</p>\r\n', '', '+97143956915', 8, '1', '[\"2\",\"3\"]'),
(21, 19, NULL, NULL, 'USA', 'Double Studded Adaptor 13-5 8\'\' 10K X 7-1 16\'\' 3K', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 04:39:48', 'STIGL', '<p>DSA 13-5 8&#39;&#39; 10K BX-159 X 7-1 16&#39;&#39; 3K RX-45 with certification</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(22, 19, NULL, NULL, 'USA', 'Drilling Spools 13 5/8\" 10k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 02:46:12', 'STIGL', '<p>Drilling Spools 13 5/8&quot; 10k c/o 3 1/16&quot; 5k side outlet with certification.</p>\r\n', '', '+97143956915', 6, '1', 'Array'),
(23, 19, NULL, NULL, 'USA', 'Drilling Spool 13 5-8 10k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-30 02:55:15', 'STIGL', '<p>Drilling Spool 13 5-8 10k flange x 13 5- 10k hub with certs.</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(24, 19, NULL, NULL, 'USA', 'DSA 20 3-4 3k to 20 1-4 2k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 05:46:04', 'STIGL', '<p>DSA 20 3-4 3k to 20 1-4 2k w/ certification by wesco.</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(25, 19, NULL, NULL, 'USA', 'Diverter Spool 21 1/4\" 2k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 07:11:16', 'STIGL', '<p>Diverter Spool 21 1/4&quot; 2k flange top and bottom dressed w/ RX73 ring grooves with 12&quot; side outlet flanged. API</p>\r\n', '', '+97143956915', 8, '1', '[\"2\",\"3\"]'),
(26, 19, NULL, NULL, 'T3 NOV', 'T3 13 5/8\" 10k Single Ram Bop', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 00:52:37', 'STIGL', '<p>T3 13 5/8&quot; 10k Single Ram BOP flange top &amp; botttom w/ 316 stainless steel lined BX 159 ring grooves 2-4 1/16&quot; 10k flange outlet w/ 316 stainless steel lined BX 155 ring grooves.</p>\r\n', '', '+97143956915', 6, '1', '[\"2\",\"3\"]'),
(27, 19, NULL, NULL, 'USA', 'DSA 13 5/8\" 10k x 11\" 10k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 04:49:17', 'STIGL', '<p>Double Studded Adaptor 13 5/8&quot; 10k BX159 x 11&quot; 10k BX158 7&quot; long with certification.</p>\r\n', '', '+97143956915', 6, '1', '[\"2\",\"3\"]'),
(28, 101, NULL, NULL, 'USA', 'Gate Valve 4 1/16\" 5k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-04-30 04:10:59', 'STIGL', '<p>WOM Gate Valve 4 1/16&quot; 5k with certification by Ados. Serial No. 10214-3</p>\r\n', '', '+97143956915', 4, '1', ''),
(29, 19, NULL, NULL, 'USA', 'Shaffer 13 5/8\" 10k Single Ram BOP', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 03:52:28', 'STIGL', '<p>Shaffer 13 5/8 10k Single Ram BOP Type SL flange top &amp; bottom BX 159 w/ 1ea 4 1/16&quot; 10k side outlet ring grooves BX 155 &amp; 1ea 2 1/16&quot; 10k side outlet BX 153 dressed with blind flange.</p>\r\n', '', '+97143956915', 6, '1', '[\"2\",\"3\"]'),
(30, 19, NULL, NULL, 'USA', 'Shaffer 13 5/8\" 10k Double Ram BOP', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 01:49:24', 'STIGL', '<p>Shaffer 13 5/8&quot; 10k Double Ram BOP Type SL hub top &amp; bottom BX 159 ring grooves with 2 side outlet 4 1/6&quot; 10k BX 155 w/ 2 side outlet 2 1/16&quot; 10k.</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(31, 19, NULL, NULL, 'USA', 'Shaffer 20 3/4\" 3k Single Ram Bop', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-30 04:39:23', 'STIGL', '<p>Shaffer 20 3/4&quot; 3k Shaffer LWS Single BOP flange top &amp; bottom with R74 ring grooves c/w 2 off flange side outlet fitted with blind flange.</p>\r\n', '', '+97143956915', 8, '1', '[\"2\",\"3\"]'),
(32, 19, NULL, NULL, 'USA', 'Shaffer Spherical 21 1/4\" 2k Annular BOP', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-30 01:20:35', 'STIGL', '<p>Shaffer Spherical 21 1/4&quot; 2k Annular BOP studded top &amp; flanged bottom 2k. Brand New API Monogram complete with data package</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(33, 22, NULL, NULL, 'USA', 'Choke Manifold 3 1/16\" 10k', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 03:33:32', 'STIGL', '<p>WOM Choke Manifold 12ea 3 1/16&quot; 10k w/ 2ea 3 1/16&quot; 10k Hyd adj. choke w/ 1ea 3 1/16&quot; 10k manual adj. choke with stainless steel control panel and pressure gauge.</p>\r\n', '', '+97143956915', 6, '1', ''),
(34, 19, NULL, NULL, 'T3 NOV', 'T3 13 5/8\" 10k Double Ram Bop', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 04:20:52', 'STIGL', '<p>T3 13 5/8&quot; 10k Double Ram Bop flange top &amp; bottom w/ 316 stainless steel lined BX 159 ring grooves 4-41/16&quot;10k flange outlet w/ stainless steel lined BX 155 ring grooves w. large shear bonnet in lower cavity w/ tandem booster.</p>\r\n', '', '+97143956915', 7, '1', '[\"2\",\"3\"]'),
(36, 62, NULL, NULL, 'USA', 'Shaffer 20 3/4\" 3k Pipe Ram 5\"', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-04-29 20:27:07', 'STIGL', '<p>Shaffer 20 3/4&quot; 3k pipe ram 5&quot;. OEM Certified</p>\r\n', '', '+97143956915', 4, '1', 'Array'),
(37, 62, NULL, NULL, 'USA', 'Shaffer 13 5/8\" 10k rams', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 06:52:20', 'STIGL', '<p>Shaffer 13 5/8&quot; 10k pipe rams 5&quot;</p>\r\n', '', '+97143956915', 6, '1', 'Array'),
(38, 117, NULL, NULL, 'USA', 'MI Swaco stainless steel shale shakers', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-29 21:42:51', 'STIGL', '<p>MI Swaco stainless steel shale shakers 1 stage with complete desalter with balanced system.<br />\r\nHeight: 220 cm / Lenght: 263 cm / Width: 195 cm<br />\r\nThe table shaker 1 stage<br />\r\nLenght: 208 cm / Width: 137 cm</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(39, 117, NULL, NULL, 'USA', 'BOP Element', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-29 19:11:23', 'STIGL', '<p>Element Annular Cameron type D 13 5/8&quot; 5K. New Unused in Dubai.</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(40, 117, NULL, NULL, 'USA', 'National Swivel N-1324', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-30 07:01:23', 'STIGL', '<p>National Swivel N-1324 in Dubai.</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(41, 117, NULL, NULL, 'USA', 'Pipe Spinner', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-29 22:01:47', 'STIGL', '<p>Varco Drill Pipe Spinner Air operated Qty 2.</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(42, 117, NULL, NULL, 'USA', 'Jar Tester', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 09:14:20', 'STIGL', '<p>Jar Tester c/w test cylinder, test bed, hanger chuck &amp; tester console, oil catch tray billed in with oil pump &amp; oil filtration w/ fill &amp; test unit. (used)<br />\r\nLength 7m.15 cm each total 14m.28 cm<br />\r\nManufactured by NOV USA Agent</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(43, 117, NULL, NULL, 'USA', 'Drawwork', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-30 04:58:19', 'STIGL', '<p>National Drawwork 1320 UE Drum Grooved for 1 3/8&quot; wire line Sand reel complete w/ 12000 ft of 9/16&quot;</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(44, 117, NULL, NULL, 'USA', 'National Swivel P500', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 10:11:08', 'STIGL', '<p>National Swivel P-500 ton complety Refurbish Certified</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(45, 117, NULL, NULL, 'USA', 'Varco 350 Spider slip insert', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 03:05:08', 'STIGL', '<p>Varco 350 Spider slip insert 6 set</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(46, 117, NULL, NULL, 'USA', 'Deadline Anchor', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-30 10:20:05', 'STIGL', '<p>Deadline Anchor for 3000 hp Drawwork</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(47, 117, NULL, NULL, 'USA', 'BJ Hook Dynaplex 500 ton', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-04-29 19:43:27', 'STIGL', '<p>BJ Hook Dynaplex 500 ton type 5500 MPI certification</p>\r\n', '', '+97143956915', 3, '1', '[\"2\",\"3\"]'),
(48, 117, NULL, NULL, 'Cameron', 'Cameron 18-3/4” 10K PIPE RAMS', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 05:17:40', 'STIGL', '<p>Cameron 18-3/4&rdquo; 10K PIPE RAMS type U Quantity 10 Set certified</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(49, 117, NULL, NULL, 'Cameron', 'Cameron 13 5/8” 5-10K RAMS', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 06:42:52', 'STIGL', '<p>Cameron Ram type U 13 5/8 5K and 10K OEM Certified. in Dubai</p>\r\n', '', '+97143956915', 6, '1', '[\"2\",\"3\"]'),
(50, 117, NULL, NULL, 'USA', 'Varco Power Slips PS15', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-29 22:49:07', 'STIGL', '<p>Varco Power Slips PS15 or Varco PS15&nbsp;</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(51, 71, NULL, NULL, 'USA', 'Drilling Bits', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 04:01:56', 'STIGL', '<p>Drilling bits PDC 6&quot; 1 pcs. made in USA Tinggerson Carbide 2 pcs. made in Japan</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(52, 97, NULL, NULL, 'USA', 'Acid Stainless Steel', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 09:42:44', 'STIGL', '<p>Acid Stainless Steel Insulated Tank capacity 8000 ltr</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(53, 97, NULL, NULL, 'USA', 'GD Air Compressor', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-29 23:08:03', 'STIGL', '<p>Gardner Denver Air Compressor CFM 100 per minute maximum pressure 40 psi in good running condition without engine</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(54, 118, NULL, NULL, 'USA', 'HT400 Triplex pump 4 plunger 10000 psi', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 07:58:36', 'STIGL', '<p>HT400 Triplex pump 4&quot; plunger 10000 psi.<br />\r\nUsed in good condition.</p>\r\n', '', '+97143956915', 4, '1', 'Array'),
(55, 118, NULL, NULL, 'USA', 'HT 400 Cementing Pumping Unit', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 05:36:36', 'STIGL', '<p>HT 400 Cementing Pumping Unit driven with 2 detroit deisel engine complete with control panel and jet automatic mixer with density control and with 2 centrifugal pump.<br />\r\n1. Hydraulic System with Detroit Deisel Engine<br />\r\n2. Cement Silo Tank</p>\r\n', '', '+97143956915', 5, '1', 'Array'),
(57, 65, NULL, NULL, 'USA', 'Cement Silo Tanks', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-29 23:17:31', 'STIGL', '<p>3 Cement SiloTank in good working condition details as request.</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(56, 118, NULL, NULL, 'USA', 'HT400 Cementing Pumping Unit', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 09:04:53', 'STIGL', '<p>HT 400 Cementing Pumping Unit driven with 2 detroit deisel engine complete with control panel and jet automatic mixer with density control and with 2 centrifugal pump. 1. Hydraulic System with Detroit Deisel Engine / 2. Cement Silo Tank / 3. Diesel Tank Qty 1. New Rebuilt with Certification</p>\r\n', '', '+97143956915', 4, '1', 'Array'),
(58, 65, NULL, NULL, 'USA', 'Cementing Head', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 08:08:04', 'STIGL', '<p>Cementing head 18 pcs UIE cementing head montpellier halliburton size from 13 3/8, 9 5/8, 7&quot; &amp; 5&quot;.</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(59, 40, NULL, NULL, 'USA', 'National 12P160 Mud Pump', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 03:43:00', 'STIGL', '<p>USED National 12P160 Mud Pump equipped with 2 Traction DC Motor type D79 make by EMD belt driven and with Hydril Pulsation Dampener.</p>\r\n', '', '+97143956915', 5, '1', 'Array'),
(60, 40, NULL, NULL, 'USA', 'Guinard pompes', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 05:55:32', 'STIGL', '<p>Guinard pompes type DVMX 3_6_9 ED. Qty 2</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(61, 28, NULL, NULL, 'USA', 'GE752 Motor', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 07:20:44', 'STIGL', '<p>2 GE 752 1000hp series DC motor, 10hp double clean motor blower, junction box oilfield hub</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(62, 29, NULL, NULL, 'USA', '24 1/2 Inch BJ spider elevator 500 ton', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 10:39:32', 'STIGL', '<p>USED BJ 24 1/2in 500 ton Spider elevator air operated Qty 2 ea<br />\r\nUsed BJ 20&rdquo; Slips Qty 1 ea</p>\r\n', '', '+97143956915', 6, '1', 'Array'),
(63, 29, NULL, NULL, 'USA', 'Varco 350 ton Spider Elevator', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 05:27:08', 'STIGL', '<p>Varco 350 ton Spider Elevator Air Operated 14&quot; single Body in good working condition.</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(64, 29, NULL, NULL, 'USA', 'BJ Spider Elevator 175 ton', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-30 13:57:56', 'STIGL', '<p>BJ Spider Elevator 175 ton with 1 set of 5&quot; slips</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(65, 29, NULL, NULL, 'USA', 'B+V Spider Elevator Body 500 ton', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '3', 'Dubai', '2019-05-01 01:58:52', 'STIGL', '<p>1 set of B+V Spider Elevator Body 500 ton air operated MPI Certification w/ 1 set of 13 3/8&quot; slips &amp; 1 set of 9 5/8&quot; slips and 1 set of 7&quot; slips.</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(66, 34, NULL, NULL, 'USA', '3516D Caterpillar Generator', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '2', 'Dubai', '2019-05-01 09:23:48', 'STIGL', '<p>Caterpillar 3516D Genset Kato Generator 600V, 60 Hz, 1850 KVA, 1500 RPM working hours 1902 hrs in good working condition.</p>\r\n', '', '+97143956915', 5, '1', 'Array'),
(67, 34, NULL, NULL, 'USA', '3512D Generator', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '2', 'Dubai', '2019-04-30 13:20:04', 'STIGL', '<p>3512D generator with alternator caterpillar 1500 RPM 1500 KVA 480 to 600 Volts 50-60 hz 3720 working Hours, serial no. 24Z00479 in good working condition.</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(68, 119, NULL, NULL, 'USA', 'Martin Decker 15K BOP Test Pump', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 01:39:57', 'STIGL', '<p>Martin Decker 15000 psi BOP Test Pump complete with chart recorder complete with hose and gauge.</p>\r\n', '', '+97143956915', 6, '1', '[\"2\",\"3\"]'),
(69, 119, NULL, NULL, 'USA', 'BOP Test Pump', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-29 18:18:15', 'STIGL', '<p>New Air Operated BOP Test Pump complete with chart recorder maximum pressure 20,000 psi.</p>\r\n', '', '+97143956915', 7, '1', '[\"2\",\"3\"]'),
(70, 36, NULL, NULL, 'USA', '5 1/2\" Hex Kelly Drive Bushing', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '2', 'Dubai', '2019-04-29 18:46:39', 'STIGL', '<p>5 1/2&quot; Hex Kelly Drive Bushing USED. Location in Dubai</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '+97143956915', 3, '1', '[\"2\",\"3\"]'),
(71, 36, NULL, NULL, 'USA', 'Kelly drive bushing', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 08:27:00', 'STIGL', '<p>Kelly drive bushing Varco HDP W/ 4 &frac12; &amp; 3 &frac12;.</p>\r\n', '', '+97143956915', 6, '1', 'Array'),
(72, 120, NULL, NULL, 'USA', 'Tubing Power Tong', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 04:11:24', 'STIGL', '<p>2 7/8&quot; to 5 1/2&quot; Eckel Tubing Power Tong with 1 set of jaw.</p>\r\n', '', '+97143956915', 6, '1', '[\"2\",\"3\"]'),
(73, 120, NULL, NULL, 'USA', 'Casing Power Tong', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-30 01:39:31', 'STIGL', '<p>13 3/8&rdquo; Eckel Casing power tong with 1 set of jaw</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(74, 121, NULL, NULL, 'USA', 'Varco Master Bushing 37 1/2\".', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-30 01:58:27', 'STIGL', '<p>Varco Master Bushing 37 1/2&quot;.</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(75, 122, NULL, NULL, 'USA', 'Swaco SC4061', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 03:14:36', 'STIGL', '<p>Swaco Mud Cleaner type number SC4061</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(76, 92, NULL, NULL, 'USA', 'National Rotary Table 27 1/2', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '2', 'Dubai', '2019-04-30 13:29:31', 'STIGL', '<p>National Rotary Table 27 1/2 in good working condition</p>\r\n', '', '+97143956915', 5, '1', '[\"2\",\"3\"]'),
(77, 123, NULL, NULL, 'USA', 'Separator', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-29 21:23:55', 'STIGL', '<p>1-NEW (36&quot;) Outside Diameter by (10&#39;-0&quot;) Seam to Seam by (1440 PSIG) Maximum Allowable WP (ASME Sec. VIII Div. 1) Code Stamped Horizontal 3 Phase GPM Separator, Skid Mounted</p>\r\n', '', '+97143956915', 4, '1', '[\"2\",\"3\"]'),
(78, 73, NULL, NULL, 'USA', 'Varco 660 kelly spinner', NULL, NULL, NULL, NULL, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-05-01 06:14:28', 'STIGL', '<p>Varco 660 kelly spinner location in Dubai.</p>\r\n', '', '+97143956915', 5, '1', '');

-- --------------------------------------------------------

--
-- Структура таблицы `products_lease`
--

CREATE TABLE `products_lease` (
  `id` int(5) NOT NULL,
  `category` int(5) NOT NULL,
  `price` varchar(20) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `company` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_lease`
--

INSERT INTO `products_lease` (`id`, `category`, `price`, `manufacturer`, `model`, `condition`, `location`, `date_posted`, `company`, `description`, `contact_name`, `phone`) VALUES
(1, 1, 'POR', 'DOGGHOUSES ', 'CABINETS', 'GOOD USED', 'Carencro, la', '2018-07-06 16:49:43', 'Oilfield Swivel Repair', '<p><span style=\"font-size:16px\"><span style=\"color:rgb(0, 51, 102); font-family:arial,helvetica,sans-serif\">2- DOGGHOUSE CABINETS ON SKID GOOD CONDITION</span></span></p>\r\n', 'CHRIS OR MIKE', '3378525471');

-- --------------------------------------------------------

--
-- Структура таблицы `product_condition`
--

CREATE TABLE `product_condition` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_condition`
--

INSERT INTO `product_condition` (`id`, `name`) VALUES
(1, 'New'),
(2, 'Used'),
(3, 'Manifolds');

-- --------------------------------------------------------

--
-- Структура таблицы `rate_condition`
--

CREATE TABLE `rate_condition` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rate_condition`
--

INSERT INTO `rate_condition` (`id`, `name`) VALUES
(1, 'Never Bid'),
(2, 'Bid');

-- --------------------------------------------------------

--
-- Структура таблицы `rate_history`
--

CREATE TABLE `rate_history` (
  `id` int(5) NOT NULL,
  `num_lot` int(11) NOT NULL COMMENT 'номер лота',
  `buyer` int(11) DEFAULT NULL COMMENT 'id игрока',
  `bid_buyer` int(11) NOT NULL COMMENT 'ставка игрока',
  `bid_type` enum('rent','sale') NOT NULL COMMENT 'Тип ставки',
  `bid_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'время ставки'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rate_history`
--

INSERT INTO `rate_history` (`id`, `num_lot`, `buyer`, `bid_buyer`, `bid_type`, `bid_date`) VALUES
(445, 1, 19, 1010, 'sale', '2019-03-30 07:52:17'),
(446, 1, 19, 1050, 'sale', '2019-03-30 08:02:20'),
(447, 1, 19, 1060, 'sale', '2019-03-30 08:03:01'),
(448, 1, 19, 1070, 'sale', '2019-03-30 08:05:34'),
(449, 1, 19, 1080, 'sale', '2019-03-30 08:07:24'),
(450, 1, 19, 1090, 'sale', '2019-03-30 08:09:29'),
(451, 1, 19, 1100, 'sale', '2019-03-30 08:10:50'),
(452, 1, 19, 1200, 'sale', '2019-03-30 08:10:57'),
(453, 1, 19, 1250, 'rent', '2019-03-30 08:11:07'),
(454, 106, 19, 30, 'rent', '2019-03-31 14:22:46'),
(455, 118, 19, 50, 'rent', '2019-04-01 08:00:01'),
(456, 118, 19, 60, 'rent', '2019-04-01 08:00:35'),
(457, 118, 19, 70, 'rent', '2019-04-01 08:51:13'),
(458, 118, 19, 110, 'rent', '2019-04-14 12:41:24'),
(459, 118, 66, 115, 'rent', '2019-04-17 20:53:16'),
(460, 11, 19, 202, 'sale', '2019-04-24 19:56:17'),
(461, 11, 19, 40, 'rent', '2019-04-24 19:56:19'),
(462, 11, 19, 304, 'sale', '2019-04-24 19:56:21'),
(463, 11, 19, 70, 'rent', '2019-04-24 19:56:23'),
(464, 11, 19, 406, 'sale', '2019-04-24 19:56:25'),
(465, 11, 19, 100, 'rent', '2019-04-24 19:56:27'),
(466, 11, 19, 130, 'rent', '2019-04-24 19:56:31'),
(467, 11, 19, 508, 'sale', '2019-04-24 19:56:33'),
(468, 11, 19, 160, 'rent', '2019-04-24 19:56:35'),
(469, 11, 19, 610, 'sale', '2019-04-24 21:40:21'),
(470, 11, 19, 190, 'rent', '2019-04-24 21:40:25');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(5) NOT NULL,
  `id_prod` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `text` text NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sending_messages`
--

CREATE TABLE `sending_messages` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sending_messages`
--

INSERT INTO `sending_messages` (`id`, `heading`, `description`) VALUES
(2, 'Mail', '<p>l,plm;lm;l,;,;;l,&#39;</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `Sx0xz`
--

CREATE TABLE `Sx0xz` (
  `id` int(11) NOT NULL,
  `A` varchar(225) NOT NULL DEFAULT 'example@example.ru',
  `B` text,
  `C` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tender`
--

CREATE TABLE `tender` (
  `id` int(11) NOT NULL,
  `tender_type_id` int(11) NOT NULL,
  `name_of_equipment_description` text NOT NULL,
  `desc_prv_text` text NOT NULL,
  `rental_period` varchar(255) DEFAULT NULL,
  `starting_from_date` varchar(255) DEFAULT NULL,
  `end_destination` varchar(255) DEFAULT NULL,
  `requested_standard` varchar(255) DEFAULT NULL,
  `other_information` text,
  `requested_documents` varchar(255) DEFAULT NULL,
  `send_request` varchar(255) DEFAULT NULL,
  `looking_to_buy_before` varchar(255) DEFAULT NULL,
  `need_to_be_ready_before` varchar(255) DEFAULT NULL,
  `location_of_equipment` varchar(255) DEFAULT NULL,
  `type_of_certification` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tender`
--

INSERT INTO `tender` (`id`, `tender_type_id`, `name_of_equipment_description`, `desc_prv_text`, `rental_period`, `starting_from_date`, `end_destination`, `requested_standard`, `other_information`, `requested_documents`, `send_request`, `looking_to_buy_before`, `need_to_be_ready_before`, `location_of_equipment`, `type_of_certification`) VALUES
(1, 1, 'BOP Cameron Type U Double pipe rams  13 inch  10,000 psi ( Cоздать гипер ссылку)', 'BOP Cameron Type U Double ', '6 month', '2019-05-01', 'India', 'API', 'Need with shear/pipe and blind rams', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 'BOP 11\" 5000psi Annular / Top Studded R54/Bottom Flanged R54/Stainless Ring Grooves H2S Service/Ser# R31105-002', 'BOP 11\" 5000psi Annular', NULL, NULL, 'Oman', 'OEM', 'With 5 years certificate', NULL, NULL, ' 2019-05-01', NULL, NULL, NULL),
(3, 3, 'Need repair full stack BOP  1. Cameron Type U Double pipe rams  11 inch  10,000 psi /\r\n1.	B0P Cameron Type U single  pipe rams  11\r\n', 'Need repair full stack BOP', NULL, NULL, NULL, NULL, 'Need remove rams', NULL, NULL, NULL, '2019-07-01 ', 'Dubai', 'API');

-- --------------------------------------------------------

--
-- Структура таблицы `tender_types`
--

CREATE TABLE `tender_types` (
  `id` int(11) NOT NULL,
  `tender_type_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tender_types`
--

INSERT INTO `tender_types` (`id`, `tender_type_name`) VALUES
(1, 'RENT'),
(2, 'BUYING'),
(3, 'REPAIRS');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `country` int(11) NOT NULL DEFAULT '0',
  `region` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  `secret_key` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `subscribe` enum('1','0') NOT NULL DEFAULT '1' COMMENT 'Подписан или нет',
  `date_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_surname`, `email`, `password`, `phone`, `country`, `region`, `city`, `auth_key`, `secret_key`, `status`, `subscribe`, `date_update`) VALUES
(19, 'Alex', 'STIGL ', '969868767@mail.ru', '$2y$13$telu72z/i2VVL4H.MUo2ku26h4w3SXRMzisgJz56CYT5jmgfiZZh6', '0505952288', 2, 'Uae ', 'Dubai ', 'nh3MbSOspi-BzQ9LZkvFf49UB8wYgc_s', '5xYeNSvAC1eaykIm9wX56AuOOkHbSdJv_1556640708', '10', '1', '2019-04-30 16:11:48'),
(39, 'Evgeny', 'Kaz', 'info2009@mail.ru', '$2y$13$RGBTKO2f.jLuLrwyI5dle.eQNVHbn/UFdUixbtf9GOORlOR8L9z2e', '+971505952288', 2, 'Dubai', 'Dubai', 'ThTeDOHSqj2Sozv-TEOnhhZjlefq87Sw', 'zBCuLaXHwUSPho_Vf21Uk3jY29n6zKIV_1554108562', '1', '1', '2019-04-01 08:49:22'),
(95, 'Hovhannes', 'Abovyn', 'hovhannes.abovyan@gmail.com', '$2y$13$xVQaeIV5psC/3EnpD27dSO6XNDHySvoNrXPvsK7tZYgDtZNVnJ4O.', '37499919905', 3, 'Armenia', 'Yerevan', 'Jx7jIj4eklGKyINFwZWnYPdbt0qfN2jr', 'xwAsMA4UppiYkY6-0bxK-AxRHWJtXnfz_1556650954', '1', '1', '2019-04-30 19:02:34');

-- --------------------------------------------------------

--
-- Структура таблицы `user_deposite`
--

CREATE TABLE `user_deposite` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deposit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_deposite`
--

INSERT INTO `user_deposite` (`id`, `user_id`, `deposit`) VALUES
(6, 19, 500),
(9, 24, 500),
(10, 25, 0),
(11, 26, 500),
(12, 27, 500),
(19, 34, 0),
(18, 33, 500),
(20, 35, 0),
(21, 36, 0),
(22, 37, 0),
(23, 38, 0),
(24, 39, 0),
(25, 40, 0),
(26, 41, 0),
(27, 42, 0),
(28, 43, 0),
(29, 44, 0),
(30, 45, 0),
(31, 46, 0),
(32, 47, 0),
(33, 48, 0),
(34, 49, 0),
(35, 50, 0),
(36, 51, 0),
(37, 52, 0),
(38, 53, 0),
(39, 54, 0),
(40, 55, 0),
(41, 56, 0),
(42, 57, 0),
(43, 58, 0),
(44, 59, 100),
(45, 60, 0),
(46, 61, 0),
(47, 62, 0),
(48, 63, 0),
(49, 64, 0),
(50, 65, 0),
(51, 66, 0),
(52, 67, 0),
(53, 68, 0),
(54, 69, 0),
(55, 70, 0),
(56, 71, 0),
(57, 72, 0),
(58, 73, 0),
(59, 74, 0),
(60, 75, 0),
(61, 76, 0),
(62, 77, 0),
(63, 78, 0),
(64, 79, 0),
(65, 80, 0),
(66, 81, 0),
(67, 82, 0),
(68, 83, 0),
(69, 84, 0),
(70, 85, 0),
(71, 86, 0),
(72, 87, 0),
(73, 88, 0),
(74, 89, 0),
(75, 90, 0),
(76, 91, 0),
(77, 92, 0),
(78, 93, 0),
(79, 94, 0),
(80, 95, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user_deposite_history`
--

CREATE TABLE `user_deposite_history` (
  `id` int(11) NOT NULL,
  `used_id` int(11) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_deposite_history`
--

INSERT INTO `user_deposite_history` (`id`, `used_id`, `deposit`, `date`) VALUES
(1, 3, '+2000', '2018-07-16 10:35:13'),
(2, 3, '+3000', '2018-07-18 19:12:47'),
(3, 4, '+1000', '2018-07-15 19:15:29'),
(4, 4, '+2000', '2018-07-16 18:44:48'),
(5, 4, '-2580', '2018-07-19 21:22:46'),
(6, 5, '+8830', '2018-07-18 19:34:07'),
(7, 6, '+10000', '2018-07-16 10:51:18'),
(8, 6, '-6250', '2018-07-16 14:19:39'),
(9, 6, '-2000', '2018-07-16 17:19:40'),
(10, 6, '+5000', '2018-07-18 19:24:06');

-- --------------------------------------------------------

--
-- Структура таблицы `victory_user`
--

CREATE TABLE `victory_user` (
  `id` int(5) NOT NULL,
  `num_lot` int(11) NOT NULL,
  `buyer` int(11) DEFAULT NULL,
  `bid_buyer` int(11) DEFAULT NULL,
  `bid_type` enum('rent','sale') NOT NULL,
  `bid_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `page` varchar(50) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `views`
--

INSERT INTO `views` (`id`, `page`, `views`) VALUES
(1, 'home', 9285),
(2, 'about-company', 19),
(3, 'catalog-drilling', 434),
(4, 'all-catalog-lease', 46),
(5, 'all-catalog', 518),
(6, 'tender', 129),
(7, 'auction-catalog', 372),
(8, 'auction-lists', 245),
(9, 'listnews', 357),
(10, 'contacts', 136);

-- --------------------------------------------------------

--
-- Структура таблицы `wish_list`
--

CREATE TABLE `wish_list` (
  `id` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `mass_prod` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `7LIYY`
--
ALTER TABLE `7LIYY`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `A` (`A`) USING BTREE;

--
-- Индексы таблицы `auctions_lots`
--
ALTER TABLE `auctions_lots`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `auction_date`
--
ALTER TABLE `auction_date`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bus_conf`
--
ALTER TABLE `bus_conf`
  ADD UNIQUE KEY `nam` (`nam`) USING BTREE;

--
-- Индексы таблицы `bus_form`
--
ALTER TABLE `bus_form`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bus_mess`
--
ALTER TABLE `bus_mess`
  ADD UNIQUE KEY `hash` (`hash`) USING BTREE;

--
-- Индексы таблицы `bus_proj`
--
ALTER TABLE `bus_proj`
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories_drilling`
--
ALTER TABLE `categories_drilling`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories_lease`
--
ALTER TABLE `categories_lease`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `characteristics`
--
ALTER TABLE `characteristics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `el_name` (`name`),
  ADD KEY `f930` (`code`);

--
-- Индексы таблицы `filter_category`
--
ALTER TABLE `filter_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `filter_lot`
--
ALTER TABLE `filter_lot`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `import_mail`
--
ALTER TABLE `import_mail`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lots`
--
ALTER TABLE `lots`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lots_categories`
--
ALTER TABLE `lots_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lot_condition`
--
ALTER TABLE `lot_condition`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `LZzci`
--
ALTER TABLE `LZzci`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `A` (`A`) USING BTREE;

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `mMcSf`
--
ALTER TABLE `mMcSf`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `A` (`A`) USING BTREE;

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_lease`
--
ALTER TABLE `products_lease`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_condition`
--
ALTER TABLE `product_condition`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rate_condition`
--
ALTER TABLE `rate_condition`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rate_history`
--
ALTER TABLE `rate_history`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sending_messages`
--
ALTER TABLE `sending_messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Sx0xz`
--
ALTER TABLE `Sx0xz`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `A` (`A`) USING BTREE;

--
-- Индексы таблицы `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tender_types`
--
ALTER TABLE `tender_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_deposite`
--
ALTER TABLE `user_deposite`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_deposite_history`
--
ALTER TABLE `user_deposite_history`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `victory_user`
--
ALTER TABLE `victory_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `7LIYY`
--
ALTER TABLE `7LIYY`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `auctions_lots`
--
ALTER TABLE `auctions_lots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT для таблицы `auction_date`
--
ALTER TABLE `auction_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `bus_form`
--
ALTER TABLE `bus_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT для таблицы `categories_drilling`
--
ALTER TABLE `categories_drilling`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `categories_lease`
--
ALTER TABLE `categories_lease`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `characteristics`
--
ALTER TABLE `characteristics`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `filter_category`
--
ALTER TABLE `filter_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `filter_lot`
--
ALTER TABLE `filter_lot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=603;

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT для таблицы `import_mail`
--
ALTER TABLE `import_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `lots`
--
ALTER TABLE `lots`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `lots_categories`
--
ALTER TABLE `lots_categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `lot_condition`
--
ALTER TABLE `lot_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `LZzci`
--
ALTER TABLE `LZzci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT для таблицы `mMcSf`
--
ALTER TABLE `mMcSf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT для таблицы `products_lease`
--
ALTER TABLE `products_lease`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `product_condition`
--
ALTER TABLE `product_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `rate_condition`
--
ALTER TABLE `rate_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `rate_history`
--
ALTER TABLE `rate_history`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=471;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sending_messages`
--
ALTER TABLE `sending_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Sx0xz`
--
ALTER TABLE `Sx0xz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tender`
--
ALTER TABLE `tender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tender_types`
--
ALTER TABLE `tender_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT для таблицы `user_deposite`
--
ALTER TABLE `user_deposite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT для таблицы `user_deposite_history`
--
ALTER TABLE `user_deposite_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `victory_user`
--
ALTER TABLE `victory_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
