-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2019 at 06:39 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `drillingauction`
--

-- --------------------------------------------------------

--
-- Table structure for table `auctions_lots`
--

CREATE TABLE `auctions_lots` (
  `id` int(11) NOT NULL,
  `auc_id` int(11) NOT NULL,
  `lot_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auctions_lots`
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
(30, 7, 118);

-- --------------------------------------------------------

--
-- Table structure for table `auction_date`
--

CREATE TABLE `auction_date` (
  `id` int(11) NOT NULL,
  `auc_date` datetime NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auction_date`
--

INSERT INTO `auction_date` (`id`, `auc_date`, `location`) VALUES
(7, '2019-04-30 15:00:00', 'UAE, Ajman'),
(9, '2019-03-30 00:50:48', 'UAE, Ajman'),
(10, '2019-03-30 13:55:52', 'кустанай'),
(11, '2019-03-30 14:50:55', 'актау'),
(12, '2019-03-30 14:10:00', '111');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(5, 'Valves'),
(6, 'Double Studded Flange'),
(7, 'Choke Manifold'),
(8, 'Double Studded Adapter'),
(4, 'Blowout prevention'),
(9, 'Drilling Spools'),
(13, 'API gate'),
(11, 'Double Ram'),
(12, 'Spare Rams'),
(14, ' Adapter coil'),
(15, 'Adapter flance'),
(17, 'буровые установки');

-- --------------------------------------------------------

--
-- Table structure for table `categories_drilling`
--

CREATE TABLE `categories_drilling` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `service_left` text,
  `service_right` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories_drilling`
--

INSERT INTO `categories_drilling` (`id`, `name`, `description`, `service_left`, `service_right`) VALUES
(1, 'Продажа', '<p><span style=\"font-size:18px\">STIGL F.Z.E. offers services for drilling wells: vertical, directional, horizontal, reconnaissance and operational. The company provides integrated engineering support for the drilling process.</span></p>\r\n', '<ul>\r\n	<li><span style=\"font-size:18px\">development of all design and estimate documentation</span></li>\r\n	<li><span style=\"font-size:18px\">development of environmental measures in the drilling of oil and gas wells</span></li>\r\n	<li><span style=\"font-size:18px\">monitoring of drilling parameters</span></li>\r\n	<li><span style=\"font-size:18px\">casing run</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><span style=\"font-size:18px\">selection and delivery of drilling equipment</span></li>\r\n	<li><span style=\"font-size:18px\">drilling supervision services</span></li>\r\n	<li><span style=\"font-size:18px\">support of the drilling process, including: core sampling, logging, perforation, engineering support of drilling fluids</span></li>\r\n</ul>\r\n'),
(2, 'Ремонт', '<p><span style=\"font-size:20px\">STIGL F.Z.E. offers effective work on capital repair of wells, qualified use of modern equipment, materials and technologies.</span></p>\r\n', '<ul>\r\n	<li><span style=\"font-size:18px\">repair and insulation works: disconnection of watered intervals and individual seams with cement and polymers, correction or escalating of the cement ring</span></li>\r\n	<li><span style=\"font-size:18px\">cementing of wells</span></li>\r\n	<li><span style=\"font-size:18px\">implementation of analysis of oil wells, development of cement mortar formulations</span></li>\r\n	<li><span style=\"font-size:18px\">elimination of leakage of the production string: plugging, installing a patch, lowering an additional casing string of smaller diameter, partial replacement of the production string</span></li>\r\n	<li><span style=\"font-size:18px\">elimination of accidents that occurred during the operation or repair of wells</span></li>\r\n	<li><span style=\"font-size:18px\">extraction of underground equipment from wells after an accident, cleaning of slaughter from foreign objects, fishing operations in boreholes, etc.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><span style=\"font-size:18px\">transition to other horizons and the introduction of strata</span></li>\r\n	<li><span style=\"font-size:18px\">introduction and removal of packer-cutters</span></li>\r\n	<li><span style=\"font-size:18px\">underground work related to drilling: cutting a new trunk in order to eliminate the accident that occurred in the well in the process of exploitation, cutting a new trunk for opening additional productive capacities from the trunk of low-productive and watered wells</span></li>\r\n	<li><span style=\"font-size:18px\">well investigation: study of saturation and formation of seams, determination of the technical condition of the production line (OTEC), geophysical studies in horizontal wells</span></li>\r\n	<li><span style=\"font-size:18px\">preservation and re-opening of wells</span></li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `categories_lease`
--

CREATE TABLE `categories_lease` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories_lease`
--

INSERT INTO `categories_lease` (`id`, `name`, `description`) VALUES
(1, 'Accommodations', '<p>Apartment houses, trailers, offices, permanent or temporary accommodation, dorms for living at work or study, hotels for short-term stays.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `characteristics`
--

CREATE TABLE `characteristics` (
  `id` int(5) NOT NULL,
  `id_prod` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
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
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `index_city`, `city`, `street`, `number_home`, `mail`, `site`, `number_f`, `number_s`, `map`, `description`) VALUES
(1, '2758', 'UAE. Dubai', ' Jebel Ali Free Trade Zone', '', 'info@oildrillingcorp.com', 'temporaryserver.zzz.com.ua', '+971 4 395 69 15', '+971 4 395 69 15', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d57870.37014945219!2d55.082996714741085!3d24.9695801843468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sJebel+Ali+Free+Trade+Zone!5e0!3m2!1sru!2sua!4v1531571661605\" width=\"1110\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '<p>STIGL FZE was established in 2003 with a primary objective of providing support services to the oil, gas and drilling industries as a supplier of oilfield drilling and industrial products. STIGL FZE is Equipment and Service Supplier to the Oil &amp; Gas industry with its main focus on the Drilling and Workover sector. Our Equipment includes the Rental and Sales of Pressure Control Equipment, Downhole Tools, Drill Pipe and Tubulars. STIGL FZE provides the complete well control system solution for all types of well activity.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
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
-- Dumping data for table `countries`
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
-- Table structure for table `filter_category`
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
-- Dumping data for table `filter_category`
--

INSERT INTO `filter_category` (`id`, `name`, `parent_id`, `alias`, `intString`, `number`, `position`) VALUES
(1, 'Seller', 0, 'company', '1', '', 2),
(2, 'Location', 0, 'location', '1', '', 3),
(3, 'STIGL', 1, 'stigl', '1', NULL, 0),
(5, 'UAE, Dubai', 2, 'dubai', '1', NULL, 0),
(6, 'UAE, Adjan', 2, 'adjan', '1', NULL, 0),
(7, 'Ukraine, Kiev', 2, 'kiev', '1', NULL, 0),
(8, 'Ukraine, Donetsk', 2, 'donetsk', '1', NULL, 0),
(9, 'Ukraine, Odessa', 2, 'odessa', '1', NULL, 0),
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
-- Table structure for table `filter_lot`
--

CREATE TABLE `filter_lot` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filter_lot`
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
(112, 54, 2, 'UAE, Adjan'),
(113, 55, 2, 'UAE, Adjan'),
(114, 56, 2, 'UAE, Adjan'),
(115, 57, 2, 'UAE, Adjan'),
(116, 58, 2, 'UAE, Adjan'),
(117, 59, 2, 'UAE, Adjan'),
(118, 60, 2, 'UAE, Adjan'),
(119, 61, 2, 'UAE, Adjan'),
(120, 62, 2, 'UAE, Dubai'),
(121, 63, 2, 'UAE, Dubai'),
(122, 64, 2, 'UAE, Dubai'),
(123, 65, 2, 'UAE, Dubai'),
(124, 66, 2, 'UAE, Dubai'),
(125, 67, 2, 'UAE, Dubai'),
(126, 68, 2, 'UAE, Dubai'),
(127, 69, 2, 'UAE, Dubai'),
(128, 70, 2, 'UAE, Dubai'),
(129, 71, 2, 'UAE, Dubai'),
(130, 72, 2, 'UAE, Dubai'),
(131, 73, 2, 'UAE, Dubai'),
(132, 74, 2, 'UAE, Dubai'),
(133, 75, 2, 'UAE, Dubai'),
(134, 76, 2, 'UAE, Dubai'),
(135, 77, 2, 'UAE, Dubai'),
(136, 78, 2, 'UAE, Dubai'),
(137, 79, 2, 'UAE, Dubai'),
(138, 80, 2, 'UAE, Dubai'),
(139, 81, 2, 'UAE, Dubai'),
(140, 82, 2, 'UAE, Dubai'),
(141, 9, 2, 'UAE'),
(142, 10, 2, 'UAE, Adjan'),
(143, 11, 2, 'UAE'),
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
(154, 22, 2, 'Ukraine, Donetsk'),
(155, 23, 2, 'Ukraine, Donetsk'),
(156, 24, 2, 'Ukraine, Donetsk'),
(157, 25, 2, 'Ukraine, Donetsk'),
(158, 26, 2, 'Ukraine, Donetsk'),
(159, 27, 2, 'Ukraine, Donetsk'),
(160, 28, 2, 'Ukraine, Donetsk'),
(161, 29, 2, 'Ukraine, Donetsk'),
(162, 30, 2, 'Ukraine, Donetsk'),
(163, 32, 2, 'Ukraine, Donetsk'),
(164, 33, 2, 'Ukraine, Donetsk'),
(165, 34, 2, 'Ukraine, Donetsk'),
(166, 35, 2, 'Ukraine, Donetsk'),
(167, 36, 2, 'Ukraine, Donetsk'),
(168, 37, 2, 'Ukraine, Donetsk'),
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
(183, 2, 2, 'UAE, Dubai'),
(184, 2, 3, 'Drilling Spools'),
(185, 3, 1, 'STIGL'),
(186, 3, 2, 'UAE, Dubai'),
(187, 3, 3, 'Drilling Spools'),
(188, 4, 1, 'STIGL'),
(189, 4, 2, 'UAE, Dubai'),
(190, 4, 3, 'Drilling Spools'),
(191, 5, 1, 'STIGL'),
(192, 5, 2, 'UAE, Dubai'),
(193, 5, 3, 'Drilling Spools'),
(194, 6, 1, 'STIGL'),
(195, 6, 2, 'UAE, Dubai'),
(196, 6, 3, 'Drilling Spools'),
(197, 7, 1, 'STIGL'),
(198, 7, 2, 'UAE, Dubai'),
(199, 7, 3, 'Drilling Spools'),
(200, 10, 3, 'Blowout prevention'),
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
(280, 118, 3, 'Blowout prevention');

-- --------------------------------------------------------

--
-- Table structure for table `image`
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
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filePath`, `itemId`, `isMain`, `modelName`, `urlAlias`, `name`) VALUES
(114, 'CategoriesDrillings/CategoriesDrilling3/9fdc0d.png', 3, 1, 'CategoriesDrilling', '0afb9fd77e-1', ''),
(113, 'CategoriesDrillings/CategoriesDrilling2/2b10ec.png', 2, 1, 'CategoriesDrilling', 'caeb9a3ce1-1', ''),
(103, 'Products/Products1/c41a35.jpeg', 1, 1, 'Products', '11e78f6e34-1', ''),
(104, 'Products/Products2/b301aa.jpeg', 2, 1, 'Products', 'fdf5fcb484-1', ''),
(105, 'Products/Products3/95228b.jpeg', 3, 1, 'Products', '64ba88d7fe-1', ''),
(106, 'Products/Products4/d0da93.jpeg', 4, 1, 'Products', '7d7b27fb11-1', ''),
(107, 'Products/Products5/87192b.jpeg', 5, 1, 'Products', '6072106b05-1', ''),
(108, 'Products/Products6/846ade.jpeg', 6, 1, 'Products', '585851d73e-1', ''),
(109, 'Products/Products7/166de6.jpeg', 7, 1, 'Products', '4447ba714b-1', ''),
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
(132, 'Products/Products118/0dcc7b.jpg', 118, 1, 'Products', '1606408067-1', '');

-- --------------------------------------------------------

--
-- Table structure for table `import_mail`
--

CREATE TABLE `import_mail` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscribe` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `import_mail`
--

INSERT INTO `import_mail` (`id`, `email`, `subscribe`) VALUES
(1, 'alexandr.shvets96@gmail.com', '1'),
(2, 'kolesnykov.roma@gmail.com', '1'),
(4, 'info@oildrillingcorp.com', '1'),
(7, '969868767@mail.ru', '1'),
(8, 'alenajob2018@mail.ru', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lots`
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
-- Dumping data for table `lots`
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
-- Table structure for table `lots_categories`
--

CREATE TABLE `lots_categories` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `data_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lots_categories`
--

INSERT INTO `lots_categories` (`id`, `name`, `data_create`) VALUES
(1, 'Drilling Spools', '2018-07-14 23:22:10'),
(2, 'Double Ram', '2018-07-14 23:22:22'),
(3, 'Blowout prevention', '2018-07-14 23:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `lot_condition`
--

CREATE TABLE `lot_condition` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lot_condition`
--

INSERT INTO `lot_condition` (`id`, `name`) VALUES
(1, 'Sale'),
(2, 'Sold'),
(3, 'Not Sale');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1528876832),
('m140622_111540_create_image_table', 1528876841),
('m140622_111545_add_name_to_image_table', 1528876841);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `text`, `img`, `data`) VALUES
(7, 'The site is in test mode', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<div style=\"page-break-after: always\"><span style=\"display:none\">&nbsp;</span></div>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', '', '2019-03-29 15:02:51'),
(6, '1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit...</p>\r\n', '', '2019-03-29 13:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `unix` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastvisit` int(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`id`, `unix`, `lastvisit`, `user_id`) VALUES
(13, '2018-08-14 09:05:44', 1534237544, 24),
(15, '2019-04-16 19:04:15', 1555441455, 19),
(16, '2018-08-08 09:54:31', 1533722071, 27),
(17, '2018-08-15 10:43:57', 1534329837, 33);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
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
-- Dumping data for table `order_items`
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
(158, 64, 118, 'USA Adaptor Spool 13 5/8\" 5k x 13 5/8\" 10k', NULL, NULL, 2, NULL, 'sale');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
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
-- Dumping data for table `order_product`
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
(64, '2019-04-04 15:05:37', '2019-04-04 15:05:37', 2, NULL, '0', 'Asma', 'info2009@mail.ru', '+971505952288', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
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
  `lot_condition` int(11) NOT NULL DEFAULT '1' COMMENT 'Состояние торгов',
  `product_condition` varchar(255) DEFAULT '1' COMMENT 'Состояние товара(новый или б/у)',
  `location` varchar(255) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `seller` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `visible` enum('0','1') DEFAULT '1' COMMENT 'Виден на сайте или нет'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `price`, `rent_price`, `manufacturer`, `model`, `current_bid`, `bid_increment`, `current_bid_rent`, `bid_increment_rent`, `date_start`, `date_sale`, `lot_condition`, `product_condition`, `location`, `date_posted`, `seller`, `description`, `contact_name`, `phone`, `views`, `visible`) VALUES
(118, 4, NULL, NULL, 'USA', 'Adaptor Spool 13 5/8\" 5k x 13 5/8\" 10k', NULL, NULL, 70, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-06 10:41:18', 'STIGL', '<p>Adaptor Spool 13 5/8&quot; 5k BX160 flange x 13 5/8&quot; 10k BX159 hub 14&quot; long with COC Certification.</p>\r\n', '', '', 32, '1'),
(117, 4, NULL, NULL, 'USA', 'Adaptor Flange 11\" 10k x 11\" 5k flange for', NULL, NULL, 20, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-04 11:25:32', 'STIGL', '<p>Adaptor Flange 11&quot; 10k x 11&quot; 5k flange 17&quot; long with COC Certification</p>\r\n', '', '', 13, '1'),
(116, 4, NULL, NULL, 'USA', 'Double Studded Adaptor 13-5 8\'\' 10K X 7-1 16\'\' 10K for', NULL, NULL, 20, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-05 15:48:35', 'STIGL', '<p>DSA 13-5 8&#39;&#39; 10K BX - 159 X 7-1 16&#39;&#39; 10K BX-156 with certification</p>\r\n', '', '', 3, '1'),
(115, 4, NULL, NULL, 'USA', 'Choke Manifold 3 1/8 5k', NULL, NULL, 20, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-05 21:13:39', 'STIGL', '<p>Choke Manifold with 9ea 3 1/8 5k w/ 1ea 2 9 1/16&quot; 5k Hyd. Adj. Choke &amp; 2ea 2 9 1/6&quot; 5k Manual Adj. Choke with 2ea 4 1/16&quot; 5k Manual Gate Valve with control panel. API 6A Certification.</p>\r\n', '', '', 2, '1'),
(114, 4, NULL, NULL, 'USA', 'Hub Clamp for ', NULL, NULL, 20, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-06 00:34:32', 'STIGL', '<p>13 5/8&quot; 10k Hub Clamp No. 15 (2 set) with COC certification.</p>\r\n', '', '', 2, '1'),
(112, 4, NULL, NULL, 'USA', 'Diverter 29 1/2\" BOP System', NULL, NULL, 20, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-15 07:49:51', 'STIGL', '<p>Hydril MSP 29 1/2&quot; 500psi Diverter BOP System</p>\r\n', '', '', 3, '1'),
(113, 4, NULL, NULL, 'USA', '13 5/8\" 5k Clamp for', NULL, NULL, 20, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-05 19:03:48', 'STIGL', '<p>13 5/8&quot; 5k hub Clamp Qty 2 with API Certification</p>\r\n', '', '', 1, '1'),
(109, 4, NULL, NULL, 'USA', 'Koomey Unit 9 station 28 bottles', NULL, NULL, 20, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-06 00:38:36', 'STIGL', '<p>Koomey Unit 9 Station 28 bottles 11 gallon with 2 electric remote panel, 3 air pump and 1 electric pump.<br />\r\nCertification According API 16D.</p>\r\n', '', '', 2, '1'),
(110, 4, NULL, NULL, 'USA', '11\" 3k Annular', NULL, NULL, 20, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-01 11:39:40', 'STIGL', '<p>Hydril GK 11&quot; 3k Annular studded top 3k &amp; flange bottom 5k.</p>\r\n', '', '', 1, '1'),
(111, 4, NULL, NULL, 'USA', '11\" 5k Double BOP', NULL, NULL, 20, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-06 00:23:53', 'STIGL', '<p>Church Energy type 50 &quot;U&quot; Double 11&quot; 5k BOP flange top &amp; bottom R54 ring grooves e/ standard bonnet in upper cavity &amp; large bore shear bonnet in lower cavity w/ 2 side outlet 4 1/16&quot; 5k fitted with blind flanges with tandem booster.</p>\r\n', '', '', 3, '1'),
(107, 4, NULL, NULL, 'USA', 'Cameron 13-5/8\" 15K Single Ram Bop', NULL, NULL, 20, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-06 10:41:01', 'STIGL', '<p>Cameron 13-5/8&quot; 15K Single Ram Bop Type U flange top &amp; bottom with wedge lock w/ 2 side outlet 4-1/16&quot; 15K flange. In good condition.<br />\r\nP/N 2169396 -01- A 01. Cam 65007924-05</p>\r\n', '', '', 4, '1'),
(108, 4, NULL, NULL, 'USA', 'T3 NOV 13-5/8in 10K Model 6012 DOuble & Single Bop', NULL, NULL, 20, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-06 10:52:28', 'STIGL', '<p>1. T3 NOV 13-5/8in 10K Model 6012 Type U Single Ram BOP Flanged Top &amp; Bottom BX-159 ring grove dressed with 2ea 4-1/16in 10K BX-155 flange side outlet. USED Refurbish BOP. API Certified 2017</p>\r\n\r\n<p>2. T3 NOV 13-5/8in 10K Model 6012 Type U Double Ram BOP flanged top &amp; bottom BX-159 ring groove c/w standard pipe bonnets on top cavity, and large bore shear bonnet and tandem booster on lower cavity, 4ea 4-1/16&quot; 10K BX-155 flange outlets (outlet blanked with blind flanges) USED Refurbish BOP. API Certified 2017</p>\r\n', '', '', 1, '1'),
(106, 4, NULL, NULL, 'USA', 'T3 Double Bop', NULL, NULL, 20, 5, NULL, '2019-04-30 15:00:00', 1, '1', 'Dubai', '2019-04-06 14:06:11', 'STIGL', '<p>T3 Double Bop 21-1/4&quot; 2K Type U flange top &amp; bottom dressed w/ standard bonnet in lower cavity &amp; in upper cavity dressed w/ large bore shear bonnet and tandem booster with side outlet 4-1/16&quot; 5K</p>\r\n', '', '', 13, '1');

-- --------------------------------------------------------

--
-- Table structure for table `products_lease`
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
-- Dumping data for table `products_lease`
--

INSERT INTO `products_lease` (`id`, `category`, `price`, `manufacturer`, `model`, `condition`, `location`, `date_posted`, `company`, `description`, `contact_name`, `phone`) VALUES
(1, 1, 'POR', 'DOGGHOUSES ', 'CABINETS', 'GOOD USED', 'Carencro, la', '2018-07-06 16:49:43', 'Oilfield Swivel Repair', '<p><span style=\"font-size:16px\"><span style=\"color:rgb(0, 51, 102); font-family:arial,helvetica,sans-serif\">2- DOGGHOUSE CABINETS ON SKID GOOD CONDITION</span></span></p>\r\n', 'CHRIS OR MIKE', '3378525471');

-- --------------------------------------------------------

--
-- Table structure for table `product_condition`
--

CREATE TABLE `product_condition` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_condition`
--

INSERT INTO `product_condition` (`id`, `name`) VALUES
(1, 'New'),
(2, 'Used'),
(3, 'Manifolds');

-- --------------------------------------------------------

--
-- Table structure for table `rate_condition`
--

CREATE TABLE `rate_condition` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rate_condition`
--

INSERT INTO `rate_condition` (`id`, `name`) VALUES
(1, 'Never Bid'),
(2, 'Bid');

-- --------------------------------------------------------

--
-- Table structure for table `rate_history`
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
-- Dumping data for table `rate_history`
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
(457, 118, 19, 70, 'rent', '2019-04-01 08:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
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
-- Table structure for table `sending_messages`
--

CREATE TABLE `sending_messages` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sending_messages`
--

INSERT INTO `sending_messages` (`id`, `heading`, `description`) VALUES
(2, 'Mail', '<p>l,plm;lm;l,;,;;l,&#39;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_surname`, `email`, `password`, `phone`, `country`, `region`, `city`, `auth_key`, `secret_key`, `status`, `subscribe`, `date_update`) VALUES
(34, 'test', 'test', 'test@yandex.com', '$2y$13$YkPwZ0MkQJEE3EBmPv4VgerKzId2xk/3YkV5IwgOJWY42P6S5jduK', '79999777788', 185, 'moscow', 'moscow', 'jZzQlkudpojCtckLxFLiB0hCVAe_DlV-', 'q62MHi9jzK55eU2Cgt2lqSgSQX_14sY__1534161234', '1', '1', '2018-08-13 11:53:54'),
(19, 'Alex', 'STIGL ', '969868767@mail.ru', '$2y$13$telu72z/i2VVL4H.MUo2ku26h4w3SXRMzisgJz56CYT5jmgfiZZh6', '0505952288', 2, 'Uae ', 'Dubai ', 'nh3MbSOspi-BzQ9LZkvFf49UB8wYgc_s', '', '10', '1', '2018-08-11 10:39:58'),
(2, 'admin.web', 'admin.web', 'admin.webmaster@admin.com', '$2y$13$c9EEtMKX3/ALWvHqmjOQouuK5d9.QcPI4pf.NbTdDT46eZv.hTA2.', '-', 221, '-', '-', NULL, '', '10', '0', '2018-08-08 09:49:32'),
(33, 'Alexandr', 'ShvetS', 'alexandr.shvets96@gmail.com', '$2y$13$fZT1vnKlRiOBCEMKy/z7DOaJj/eEqdP9/ORGImZYK4pu2b2gU8n1S', '+380664606741', 221, 'Donetsk', 'Donetsk', '5z82LqYQmmOVeEpqNNx-Y7rPW2XxIIlk', '', '10', '1', '2018-08-08 11:54:01'),
(24, 'Roma', 'Kolesnykov', 'kolesnykov.roma@gmail.com', '$2y$13$c/dZMNvVWasm1xbfht7InOuyVnKkXReOKXh.ayJXHXJzlGBKkEb2a', '+380952065630', 221, 'Kievska', 'Kiev', 'oY5mhnjTWwW_3pGL0kbtdsjSBhH4y0Tl', 'MycGnLtmpGvLObyPIXjFdtBI5wAi84je_1533711728', '10', '1', '2018-08-08 07:02:08'),
(25, 'Das', 'Satybekov ', 'dastansatybekov@yandex.ru', '$2y$13$w9C62gErKQT7UKN3Qm.yXOfXufr8ro.hMsVEKkGz1dY2z5i6IVqUG', '996556530305', 112, 'Chuy', 'Bishkek ', 'EK6yRtEL_A1pQmgqBO4IiTPZwJBbBbV5', '', '10', '1', '2018-08-11 10:40:15'),
(35, 'Ivan', 'Ivan', 'adasd@mail.ru', '$2y$13$BOq2jnytMMGpGsnQJRbaz.R.2nguksm4YTtE.sdE.njvCoSPu3Xiy', '12312312312312312312312', 4, '123123', '123123', 'AgbwSgR83xD5hZOZeTSdX_r86a_iDkIX', '43swnWxkr9afW8JtCUlwTTlXvqLghMmY_1553349903', '1', '1', '2019-03-23 14:05:03'),
(36, 'Oleksandr', 'Sukachov', 'sadman4eg@gmail.com', '$2y$13$gSQgKpKs/Y1RF5vJIlecMudh..NKdIBAQJxwUvPjTHMl7URXX4Az6', '939545755', 221, 'Київська область', 'Борисполь', 'd21_1F9MF3vFDZzEqEIocTUw4TQk7lEH', 's15WxEckvZ_ZEH3YpPJpwXO396BUqZJc_1553427957', '1', '1', '2019-03-24 11:45:57'),
(37, 'Nikita', 'Uzlov', 'uzlov_nikita@mail.ru', '$2y$13$XBHLkuD1iYKcAxsPHBXVk.Isl7gYxEUUCh8Lv1a/3BXIAoX1tx86m', '9605013301', 185, 'Ivanovo', 'Ivanovo', 'IK1SKRbGv4GD-Hj7EyCic7DogM28Xloz', 'mx0lPF5Bslb94u4Y_UKmXkv0vC4Qu6kV_1553808930', '1', '1', '2019-03-28 21:35:30'),
(38, 'никита ', 'талан', 'talan.nikita@mail.ru', '$2y$13$guryq8oslnNpxf1VQ5.A3eoaNyv4E16ZiS/PXIG7fsxU.OXpxD1c2', '80292588080', 21, 'Брестская Область', 'Кобрин', 'oMXW-YdHB1gfqSItMlhURBd6l9YWJt8J', 'CihHGzBUnIzRPKB24jTlAuPru8O8wMK3_1554104762', '1', '1', '2019-04-01 07:46:02'),
(39, 'Evgeny', 'Kaz', 'info2009@mail.ru', '$2y$13$RGBTKO2f.jLuLrwyI5dle.eQNVHbn/UFdUixbtf9GOORlOR8L9z2e', '+971505952288', 2, 'Dubai', 'Dubai', 'ThTeDOHSqj2Sozv-TEOnhhZjlefq87Sw', 'zBCuLaXHwUSPho_Vf21Uk3jY29n6zKIV_1554108562', '1', '1', '2019-04-01 08:49:22'),
(40, 'Evgeny', 'Kaz', 'sales@oildrillingcorp.com', '$2y$13$YvKdpWJdfXUvtr284MziGuUcF4ZIOi9QaGxiwvBu4BCraknUwO7ZK', '+971505952211', 2, 'Dubai', 'Dubai', 'VZZVsLOGWC3xsSBaWgNzLj2P3SQCmu0f', 'G7zGSvrN3lgCN_TuVDGIL3GRcJDvPTEs_1554108444', '1', '1', '2019-04-01 08:47:24'),
(41, 'ggg', 'meer', 'acestarwin@gmail.com', '$2y$13$JAhEKRIl/VaSvm3nBP3Yz.c7tzX2KRCWECH6vgEji/HP227KY8DUi', '12345678912', 185, 'Москва', 'Москва', 'Djaxp4rv2ii7OIQh9zU6CJYXiC5d3hWe', 'Q6ve89TNQslRFLhp0fIB6fvc2yEJ0eSO_1554197898', '1', '1', '2019-04-02 09:38:18'),
(42, 'game', 'mode', 'acestrawin@gmail.com', '$2y$13$PER./vK0z1aJwo1G0zQw3esuF1PVgLDLYGNaQMuu2VeLSTHxD3zz.', '89278454235', 185, 'Москва', 'Москва', '0dGh31csPeBm0I0sER03ThBnK7SioVJX', 'PeCFjJ-7p98s2-dmd4XvI_udpTV2LE61_1554198034', '1', '1', '2019-04-02 09:40:34'),
(43, 'game', 'mode', 'acefdwin@gmail.com', '$2y$13$OQ3tjEbSajL.vbe3I6YrEehhGE0hbOLeYoV6QvaldQf0bDrnNX5rq', '89278454234', 185, 'Москва', 'Москва', 'LDnPf0rOHjFV3VjgeRNh3A46vBvoKTfL', '78LoLAvl6w-vg8Ji3SzPUluVRJxQ-dxf_1554198153', '1', '1', '2019-04-02 09:42:33'),
(44, 'Roman', 'Pronin', 'dir6662@rambler.ru', '$2y$13$V7thW5jr9OgIygrTWfdrQOhw6eyv.XeZxwWG71jBXqNs0b8JQwoxu', '+79852365412', 185, 'Moscow', 'Moscow', 'dl2KOIsmCUqSqxObb9hxvlHvOnvaUBgO', 'AYiyfX2tsKIPftD0QY0b8nIU87Cl0g9g_1554201118', '1', '1', '2019-04-02 10:31:58'),
(45, 'Daniil', 'Mikheev', 'daniil365592@gmail.com', '$2y$13$M/LasGdkYoayGmTfIw.1OuXn5CPYwXKtuXXnpz/4K44VeB7LVMsvu', '+79115848324', 185, 'Moscow', 'Moscow', '3dTPbtHTEevvnoVq6UBnRSeNGgrPPETf', 'TaBoawW44bPBMWZVCYFWc75WZCxXS2dD_1554212405', '1', '1', '2019-04-02 13:40:05'),
(46, 'Alexandr', 'Telegin', 'tsm19542@gmail.com', '$2y$13$wtCAQNzBhclJfhs884lmbuXVB6RASoV8/QHYMsoc9n.5pgkL9P64a', '+77053385764', 121, 'Zhambyl', 'Taraz', 'F9py60Aqbxrrex8-XBwGH4IkmvJ-VYBe', 'X4p-9j9swMk7hIctQ-Ud8QM7ehHCenEt_1554225194', '1', '1', '2019-04-02 17:13:14'),
(47, 'pavel', 'kolom', 'pavelkolom@gmail.com', '$2y$13$dnQv8rmj7612kyS5xtXFjOUu3A9NWg16lw5azEXaPJH6fdElp91Eu', '569120767', 2, 'Dubai', 'Dubai', '8QT8eXiBiuJOcAt7d-q7tr6F0bTvgV5p', 'q5hla5VkfxW-c9Xo2mLnxI63xgYZ_mku_1554300816', '1', '1', '2019-04-03 14:13:36'),
(48, 'test', 'test', 'kak-tak1@bk.ru', '$2y$13$9NIhl82Ywz3deZtRVGSHW./VMnvGWhTfwkmwOGCD8/g4uw.z/9Eke', '3123123123', 3, 'dadas', 'dasdas', '4E1jDrAtKGkXVUxmO725rqUKVw7EGZMh', 'AJxlR7cWLiA7kLtBZjD6l2XvhCu6j501_1554301923', '1', '1', '2019-04-03 14:32:03'),
(49, 'test', 'testt', 'kaktak908@yandex.ru', '$2y$13$pehATGfV7UTIj2x22h4uO.MaxUNHW61cKwCMvgJWzL9IC8tIDYoWq', 'test', 11, '1111', '1111', 'otepn7XnzqGRkqp2m6VtL8Q4_IFiL_9P', 'Yp6JokSQtlggSgvIWmf_9ehCRlzXipL0_1554302139', '1', '1', '2019-04-03 14:35:39'),
(50, 'test', 'testt', '1test@yandex.ru', '$2y$13$R.1bmuXOfTNo0WJwTgbRcutSCkOi0vBINqpThfL.0DzzeW6tJaUIW', '1232132312', 11, '1111', '1111', 'xG3OCFshNK7_e7HN24sRiS7Ddwryj6XU', 'vXjV327xkIVrtkuLrPgaPSKXwmkAjLEL_1554302188', '1', '1', '2019-04-03 14:36:28'),
(51, 'test', 'testt', '2test@yandex.ru', '$2y$13$vB72FtGKLpJSUPrEAfReA.WEv7tYhusDr6XTrGK2xmxAeDUzHflAy', '222222', 11, '1111', '1111', 'ycDJASkC3xIb3pcbI8PTfvAWpWjFulCw', '4ILl4KOYlqyFS6P2JOjYbyKIjfLN5PFO_1554302281', '1', '1', '2019-04-03 14:38:01'),
(52, 'test', 'test', 'mytest908@yandex.ru', '$2y$13$PCZ56mXL.NPp0k83wyKCHubt1lv8xXcj9pAtNI1MkyRBU22Wb1eHm', '1232132132312', 14, 'ddasd', 'dasdas', 'FBQ9K2Q1XYjPFDNC9FZ2J_9DQ1agnNvt', 'Ycey5FKjWQ0aEdHE4wUFLi9ictinCSpZ_1554302316', '1', '1', '2019-04-03 14:38:36'),
(53, 'Kwork', 'Developer', 'dev@emoe.ru', '$2y$13$rVtNaWya1Ws2PAOYYEmf0eReTXDprF49fjqbQQfu5ehIdCOQYHVgi', '123456789', 185, 'RU', 'Moscow', 'IRdgipwCQqO6srZb_eURcfL8Mxlxdve7', 'dFpLB77pCFdmcv_28CZvbh2Fo70N8_xq_1554454113', '1', '1', '2019-04-05 08:48:33'),
(54, 'Sonya', 'Yakovleva', 'konkin9999@mail.ru', '$2y$13$.ZgDSKKcKP.NgbskecZK/u01XVn.576uLNBsfD923AeaV2lliM2BW', '79807019016', 185, 'Moscow', 'Moscow', '5cSJz4Bq7jgsNfNb6wIyIdM29qV4N3Q2', 'TYwHprYojChV4n5fCJRmtiSD90oShudr_1554478827', '1', '1', '2019-04-05 15:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_deposite`
--

CREATE TABLE `user_deposite` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deposit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_deposite`
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
(39, 54, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_deposite_history`
--

CREATE TABLE `user_deposite_history` (
  `id` int(11) NOT NULL,
  `used_id` int(11) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_deposite_history`
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
-- Table structure for table `victory_user`
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
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `page` varchar(50) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `page`, `views`) VALUES
(1, 'home', 7275),
(2, 'about-company', 10),
(3, 'catalog-drilling', 239),
(4, 'all-catalog-lease', 34),
(5, 'all-catalog', 213),
(6, 'tender', 63),
(7, 'auction-catalog', 143),
(8, 'auction-lists', 116),
(9, 'listnews', 300),
(10, 'contacts', 87);

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `id` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `mass_prod` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auctions_lots`
--
ALTER TABLE `auctions_lots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auction_date`
--
ALTER TABLE `auction_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_drilling`
--
ALTER TABLE `categories_drilling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_lease`
--
ALTER TABLE `categories_lease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characteristics`
--
ALTER TABLE `characteristics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `el_name` (`name`),
  ADD KEY `f930` (`code`);

--
-- Indexes for table `filter_category`
--
ALTER TABLE `filter_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filter_lot`
--
ALTER TABLE `filter_lot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `import_mail`
--
ALTER TABLE `import_mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lots`
--
ALTER TABLE `lots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lots_categories`
--
ALTER TABLE `lots_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lot_condition`
--
ALTER TABLE `lot_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_lease`
--
ALTER TABLE `products_lease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_condition`
--
ALTER TABLE `product_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_condition`
--
ALTER TABLE `rate_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_history`
--
ALTER TABLE `rate_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sending_messages`
--
ALTER TABLE `sending_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_deposite`
--
ALTER TABLE `user_deposite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_deposite_history`
--
ALTER TABLE `user_deposite_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `victory_user`
--
ALTER TABLE `victory_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auctions_lots`
--
ALTER TABLE `auctions_lots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `auction_date`
--
ALTER TABLE `auction_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories_drilling`
--
ALTER TABLE `categories_drilling`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories_lease`
--
ALTER TABLE `categories_lease`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `characteristics`
--
ALTER TABLE `characteristics`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `filter_category`
--
ALTER TABLE `filter_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `filter_lot`
--
ALTER TABLE `filter_lot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `import_mail`
--
ALTER TABLE `import_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lots`
--
ALTER TABLE `lots`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lots_categories`
--
ALTER TABLE `lots_categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lot_condition`
--
ALTER TABLE `lot_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `products_lease`
--
ALTER TABLE `products_lease`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_condition`
--
ALTER TABLE `product_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rate_condition`
--
ALTER TABLE `rate_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rate_history`
--
ALTER TABLE `rate_history`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=458;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sending_messages`
--
ALTER TABLE `sending_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_deposite`
--
ALTER TABLE `user_deposite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_deposite_history`
--
ALTER TABLE `user_deposite_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `victory_user`
--
ALTER TABLE `victory_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
