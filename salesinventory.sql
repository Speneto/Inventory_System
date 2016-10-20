-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2014 at 01:46 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `salesinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `balances`
--

CREATE TABLE IF NOT EXISTS `balances` (
  `S/n` int(10) NOT NULL AUTO_INCREMENT,
  `CustomerId` varchar(10) NOT NULL,
  `OldBalance` varchar(10) NOT NULL,
  `AmountPaid` varchar(10) NOT NULL,
  `Total` varchar(20) NOT NULL,
  `NewBalance` varchar(10) NOT NULL,
  `Date` varchar(10) NOT NULL,
  PRIMARY KEY (`S/n`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerId` varchar(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Date` varchar(10) NOT NULL,
  PRIMARY KEY (`CustomerId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `Name`, `Address`, `Date`) VALUES
('CUS0001', 'IBRAHIM NGURORE', 'NGURORE', '19-12-2013'),
('CUS0002', 'BELLO JOKOLO', 'YOLA TOWN', '19-12-2013'),
('CUS0003', 'ABUBAKAR ADAMU NGU', 'NGURORE', '19-12-2013'),
('CUS0004', 'JIBRIL MAYO', 'MAYO', '19-12-2013'),
('CUS0005', 'MRS CRISTIAN', 'MUBI ROAD', '19-12-2013'),
('CUS0006', 'ALH UMARU MUBI', 'MUBI', '19-12-2013'),
('CUS0007', 'SALIYU GIRE', 'GIRE', '19-12-2013'),
('CUS0008', 'COSNORIS MUBI RD', 'MUBI ROAD', '19-12-2013'),
('CUS0009', 'INNOCENT YOLA', 'YOLA', '19-12-2013'),
('CUS0010', 'MUSTAPHA HONG', 'HONG', '19-12-2013'),
('CUS0011', 'ANDY ZING', 'ZING', '19-12-2013'),
('CUS0012', 'MICHAEL DUMNE', 'YOLA', '19-12-2013'),
('CUS0013', 'LAGOS', 'YOLA', '19-12-2013'),
('CUS0014', 'MADAM MOSCO', 'YOLA', '19-12-2013'),
('CUS0015', 'EKENE HAYA GADA', 'YOLA', '19-12-2013'),
('CUS0016', 'EMMA SYLVESTER', 'YOLA', '19-12-2013'),
('CUS0017', 'DAHIRU UBA', 'UBA', '19-12-2013'),
('CUS0018', 'JEZCO CHIDI', 'POLICE R/A', '19-12-2013'),
('CUS0019', 'MADAM BLACK', 'YOLA', '19-12-2013'),
('CUS0020', 'HARISON GANYE', 'GANYE', '19-12-2013'),
('CUS0021', 'CHIBRACO', 'YOLA TOWN', '19-12-2013'),
('CUS0022', 'IBRAHIM LANTI GANYE', 'GANYE', '19-12-2013'),
('CUS0023', 'SULE UBA', 'UBA', '19-12-2013'),
('CUS0024', 'YUSUF ZING', 'ZING', '19-12-2013'),
('CUS0025', 'ADO SONG', 'SONG', '19-12-2013'),
('CUS0026', 'HABU DOUBELI', 'YOLA', '19-12-2013'),
('CUS0027', 'ALH MBELI GOMBE', 'GOMBE', '19-12-2013'),
('CUS0028', 'CHINEDU NUMAN', 'NUMAN ROAD', '19-12-2013'),
('CUS0029', 'SANUSI UBA', 'UBA', '19-12-2013'),
('CUS0030', 'AMRAT OIL', 'YOLA', '19-12-2013'),
('CUS0031', 'OZ MUBI', 'MUBI', '19-12-2013'),
('CUS0032', 'OSITA BARUWA', 'YOLA', '19-12-2013'),
('CUS0033', 'EBUKA NUMAN', 'NUMAN', '19-12-2013'),
('CUS0034', 'SALISU PARK', 'YOLA', '19-12-2013'),
('CUS0035', 'NONSO MUBI ROAD', 'YOLA', '19-12-2013'),
('CUS0036', 'HASHIMU ZING', 'ZING', '19-12-2013'),
('CUS0037', 'ALH HASSAN', 'YOLA', '19-12-2013'),
('CUS0038', 'OSIMACO YOLA', 'YOLA', '19-12-2013'),
('CUS0039', 'INNOCENT MUBI ROAD', 'YOLA', '19-12-2013'),
('CUS0040', 'SYLVESTER MOBIL', 'YOLA', '19-12-2013'),
('CUS0041', 'GREAT KINGS MUBI ROAD', 'YOLA', '19-12-2013'),
('CUS0042', 'CHINEDU GANYE', 'GANYE', '19-12-2013'),
('CUS0043', 'EKENE JADA', 'JADA', '19-12-2013'),
('CUS0044', 'EMEKA JALINGO', 'JALINGO', '19-12-2013'),
('CUS0045', 'SAMSON HAYA GADA', 'HAYA GADA', '19-12-2013'),
('CUS0046', 'NZE SAM GANYE', 'GANYE', '19-12-2013'),
('CUS0047', 'ALH BELLO ALINGO', 'JALINGO', '19-12-2013'),
('CUS0048', 'HENRY CARGO F.B.R', 'YOLA', '19-12-2013'),
('CUS0049', 'EMMA MUBI', 'MUBI', '19-12-2013'),
('CUS0050', 'AJUJI MUBI', 'MUBI', '19-12-2013'),
('CUS0051', 'NDUBUISI GANYE', 'GANYE', '19-12-2013'),
('CUS0052', 'EMMA DIVINE FAVOUR JALINGO', 'JALINGO', '19-12-2013'),
('CUS0053', 'ALH JULDE NGURORE', 'NGURORE', '19-12-2013'),
('CUS0054', 'JOHNPAUL GANYE', 'GANYE', '19-12-2013'),
('CUS0055', 'CHIKE NUMAN ROAD', 'NUMAN ROAD', '19-12-2013'),
('CUS0056', 'ALHAJI AWALU GOMBE', 'GOMBE', '20-01-2014'),
('CUS0057', 'OGA OBINNA MUBI', 'MUBI', '20-01-2014');

-- --------------------------------------------------------

--
-- Table structure for table `debitsales`
--

CREATE TABLE IF NOT EXISTS `debitsales` (
  `CustomerId` varchar(10) NOT NULL,
  `ProductCode` varchar(10) NOT NULL,
  `Quantity` varchar(10) NOT NULL,
  `Rate` varchar(10) NOT NULL,
  `Amount` varchar(15) NOT NULL,
  `Date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE IF NOT EXISTS `deposit` (
  `S/N` int(10) NOT NULL AUTO_INCREMENT,
  `CustomerId` varchar(10) NOT NULL,
  `Amount` varchar(10) NOT NULL,
  `Remark` varchar(15) NOT NULL,
  `Date` varchar(10) NOT NULL,
  PRIMARY KEY (`S/N`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE IF NOT EXISTS `discount` (
  `CustomerId` varchar(10) NOT NULL,
  `Action` varchar(20) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `Date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `ProductCode` varchar(10) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Quantity1` varchar(10) NOT NULL,
  `Quantity2` varchar(10) NOT NULL,
  `Quantity3` varchar(10) NOT NULL,
  `Price1` varchar(10) NOT NULL,
  `Price2` varchar(10) NOT NULL,
  `Price3` varchar(10) NOT NULL,
  `Total` varchar(10) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `SupplierId` varchar(10) NOT NULL,
  `SellingPrice` varchar(10) NOT NULL,
  `QuantityPerCtn` int(5) NOT NULL,
  PRIMARY KEY (`ProductCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`ProductCode`, `Description`, `Quantity1`, `Quantity2`, `Quantity3`, `Price1`, `Price2`, `Price3`, `Total`, `Date`, `SupplierId`, `SellingPrice`, `QuantityPerCtn`) VALUES
('P0001', 'ABRO COOLANT 4L', '0', '0', '0', '620', '0', '0', '0', '03-01-2014', '6', '700', 6),
('P0002', 'ABRO COOLANT TIN', '515', '0', '0', '220', '0', '0', '515', '03-01-2014', '6', '230', 24),
('P0003', 'ABRO STOP LEA POWDER', '719', '0', '0', '70', '0', '0', '719', '03-01-2014', '6', '100', 288),
('P0004', 'ABRO A T F1L', '354', '0', '0', '420', '0', '0', '354', '03-01-2014', '6', '450', 12),
('P0005', 'ABRO BRAKE OIL 99 BIG TIN', '745', '0', '0', '255', '0', '0', '745', '03-01-2014', '6', '270', 24),
('P0006', 'A Z OIL 1L', '735', '0', '0', '549', '0', '0', '735', '03-01-2014', '3', '575', 0),
('P0007', 'ABRO BRAKE OIL SMALL PLASTIC 99', '796', '0', '0', '147', '0', '0', '796', '03-01-2014', '6', '160', 24),
('P0008', 'ABRO OIL TREATMENT', '2017', '0', '0', '224', '0', '0', '2017', '03-01-2014', '6', '235', 24),
('P0009', 'ABRO CAR WAX ROUND', '41', '0', '0', '370', '0', '0', '41', '03-01-2014', '6', '400', 12),
('P0010', 'ABRO CARWAX TIN', '206', '0', '0', '205', '0', '0', '206', '03-01-2014', '6', '0', 0),
('P0011', 'ABRO SMOKE STOP', '538', '0', '0', '295', '0', '0', '538', '03-01-2014', '6', '330', 12),
('P0012', 'ABRO BRAKE OIL SMALL CAN', '794', '0', '0', '165', '0', '0', '794', '03-01-2014', '6', '180', 24),
('P0013', 'ABRO THINNER', '98', '0', '0', '1400', '0', '0', '98', '03-01-2014', '6', '1450', 4),
('P0014', 'ABRO FUEL INJECTOR CLEANER', '316', '0', '0', '277', '0', '0', '316', '03-01-2014', '6', '290', 12),
('P0015', 'ABRO CARB AND CHOKE', '285', '0', '0', '325', '0', '0', '285', '03-01-2014', '6', '370', 12),
('P0016', 'ABRO DASHBOARD POLISH', '339', '0', '0', '140', '0', '0', '339', '03-01-2014', '6', '170', 24),
('P0017', 'ABRO GREASE LIGTH BIG', '326', '0', '0', '130', '0', '0', '326', '03-01-2014', '6', '0', 0),
('P0018', 'ABRO CAR WASH GLO SMALL', '24', '0', '0', '430', '0', '0', '24', '03-01-2014', '6', '500', 12),
('P0019', 'ABRO PROTECTALL', '0', '0', '0', '340', '0', '0', '0', '03-01-2014', '6', '400', 12),
('P0020', 'ABRO AIR FRESHNER TNS', '317', '0', '0', '300', '0', '0', '317', '03-01-2014', '6', '350', 0),
('P0021', 'ABRO CAR WASH BIG PREMIUM', '15', '0', '0', '700', '0', '0', '15', '03-01-2014', '6', '800', 6),
('P0022', 'ABRO STOP LEAK LIQUID', '52', '0', '0', '170', '0', '0', '52', '03-01-2014', '6', '200', 24),
('P0023', 'ABRO GRINDING PASTE', '288', '0', '0', '150', '0', '0', '288', '03-01-2014', '6', '160', 120),
('P0024', 'ABRO FIRE MASTER SMALL', '36', '0', '0', '300', '0', '0', '36', '03-01-2014', '6', '450', 12),
('P0025', 'ABRO VOLVO KIT', '98', '0', '0', '480', '0', '0', '98', '03-01-2014', '6', '550', 12),
('P0026', 'ABRO FIRE MASTER BIG', '21', '0', '0', '850', '0', '0', '21', '03-01-2014', '6', '1000', 8),
('P0027', 'ABRO PENETRATANT OIL AB80', '15', '0', '0', '310', '0', '0', '15', '03-01-2014', '6', '350', 12),
('P0028', 'ABRO CLEANING CLOTH', '77', '0', '0', '150', '0', '0', '77', '03-01-2014', '6', '170', 150),
('P0029', 'ABRO CARNAUBA CAR WAX', '62', '0', '0', '370', '0', '0', '62', '03-01-2014', '6', '400', 12),
('P0030', 'ABRO BRAKE OIL PLASTIC', '81', '0', '0', '235', '0', '0', '81', '03-01-2014', '6', '250', 24),
('P0031', 'ABRO BODY FILLER P49', '36', '0', '0', '2650', '0', '0', '36', '03-01-2014', '6', '2700', 4),
('P0032', 'ABRO GLASS CLEANER', '20', '0', '0', '300', '0', '0', '20', '03-01-2014', '6', '400', 12),
('P0033', 'ABRO FUEL SYSTEM CLEANER', '105', '0', '0', '360', '0', '0', '105', '03-01-2014', '6', '400', 12),
('P0034', 'ABRO INJECTOR CLEANER DIESEL', '40', '0', '0', '230', '0', '0', '40', '03-01-2014', '6', '250', 12),
('P0035', 'ABRO GREASE BIG THICK', '71', '0', '0', '330', '0', '0', '71', '03-01-2014', '6', '350', 12),
('P0036', 'ABRO LEATHER CREAM PLASTIC', '9', '0', '0', '600', '0', '0', '9', '03-01-2014', '6', '700', 12),
('P0037', 'A Z ATF 1L', '640', '0', '0', '355', '0', '0', '640', '03-01-2014', '3', '375', 12),
('P0038', 'ABRO GASKET MAKER TP2 BLACK', '462', '0', '0', '145', '0', '0', '462', '03-01-2014', '6', '160', 12),
('P0039', 'ABRO SUPER GLUE CARD', '733', '0', '0', '20', '0', '0', '733', '03-01-2014', '6', '30', 288),
('P0040', 'A Z BRAKE OIL SMALL', '168', '0', '0', '130', '0', '0', '168', '03-01-2014', '19', '140', 24),
('P0041', 'ABRO SUPER GLUE PKT', '119', '0', '0', '50', '0', '0', '119', '03-01-2014', '6', '65', 288),
('P0042', 'A Z OIL 4L', '181', '0', '0', '1720', '0', '0', '181', '03-01-2014', '3', '1784', 6),
('P0043', 'ABRO BLACK SOLO TAPES', '1297', '0', '0', '28', '0', '0', '1297', '03-01-2014', '6', '35', 500),
('P0044', 'ABRO MASKING TAPE WHITE', '1081', '0', '0', '145', '0', '0', '1081', '03-01-2014', '6', '150', 36),
('P0045', 'ABRO MASKING TAPE YELLOW', '590', '0', '0', '135', '0', '0', '590', '03-01-2014', '6', '145', 12),
('P0046', 'ABRO EPOXY GUM', '57', '0', '0', '175', '0', '0', '57', '03-01-2014', '6', '200', 12),
('P0047', 'ABRO GASLET MAKER ALL COLOUR', '532', '0', '0', '175', '0', '0', '532', '03-01-2014', '6', '200', 12),
('P0048', 'ABRO SILICON GUM BLACK', '608', '0', '0', '315', '0', '0', '608', '03-01-2014', '6', '350', 24),
('P0049', 'MAGNET PLUGS LONG', '200', '0', '0', '68', '0', '0', '200', '19-01-2014', '14', '80', 200),
('P0050', 'A Z GREASE BIG THICK', '1095', '0', '0', '170', '0', '0', '1095', '03-01-2014', '3', '190', 24),
('P0051', 'ABRO SILICON GUM CLEAR', '228', '0', '0', '320', '0', '0', '228', '03-01-2014', '6', '350', 24),
('P0052', 'ABRO GASKET GUM', '296', '0', '0', '100', '0', '0', '296', '03-01-2014', '6', '110', 144),
('P0053', 'ABRO GASKET MAKER TP2 BLUE', '319', '0', '0', '140', '0', '0', '319', '03-01-2014', '6', '150', 12),
('P0054', 'ABRO SILICON GUM WHTE', '185', '0', '0', '320', '0', '0', '185', '03-01-2014', '6', '350', 24),
('P0055', 'ABRO GASKET MAKER CLEAR', '24', '0', '0', '175', '0', '0', '24', '03-01-2014', '6', '200', 12),
('P0056', 'A Z GREASE BIG LIGHT', '183', '0', '0', '172', '0', '0', '183', '03-01-2014', '3', '200', 24),
('P0057', 'ABRO SPRAY PAINT BLACK', '67', '0', '0', '250', '0', '0', '67', '03-01-2014', '6', '300', 12),
('P0058', 'ABRO SPRAY PAINT RED', '35', '0', '0', '250', '0', '0', '35', '03-01-2014', '6', '300', 12),
('P0059', 'ABRO SPRAY PAINT DARK BLUE', '20', '0', '0', '250', '0', '0', '20', '03-01-2014', '6', '300', 12),
('P0060', 'A Z GREASE SMALL THICK', '1069', '0', '0', '94', '0', '0', '1069', '03-01-2014', '3', '125', 12),
('P0061', 'ABRO SPRAY PAINT CHROME', '40', '0', '0', '400', '0', '0', '40', '03-01-2014', '6', '430', 12),
('P0062', 'A Z GREASE SMALL LIGHT', '342', '0', '0', '113', '0', '0', '342', '03-01-2014', '3', '130', 12),
('P0063', 'ABRO JET BATTERY SHORT 45AH', '5', '0', '0', '7000', '0', '0', '5', '03-01-2014', '6', '7300', 1),
('P0064', 'A Z OIL TXP 4L', '42', '0', '0', '1635', '0', '0', '42', '03-01-2014', '3', '1720', 6),
('P0065', 'ABRO JET BATTERY 62AH', '4', '0', '0', '8500', '0', '0', '4', '03-01-2014', '6', '8800', 1),
('P0066', 'ABRO JET BATTERY 75AH', '2', '0', '0', '11000', '0', '0', '2', '03-01-2014', '6', '11300', 1),
('P0067', 'ABRO JET BATTERY LONG 45AH', '1', '0', '0', '7000', '0', '0', '1', '03-01-2014', '6', '7300', 1),
('P0068', 'ABRO SPRAY PAINT GREEN', '36', '0', '0', '250', '0', '0', '36', '03-01-2014', '6', '300', 12),
('P0069', 'A Z DRUMS OIL ALL', '10', '0', '0', '56000', '0', '0', '10', '03-01-2014', '3', '57000', 1),
('P0070', 'ABRO ENGINE OIL 4L', '7', '0', '0', '1500', '0', '0', '7', '03-01-2014', '6', '1800', 4),
('P0071', 'ABRO SPRAY PAINT 18KT GOLD', '2', '0', '0', '375', '0', '0', '2', '03-01-2014', '6', '430', 12),
('P0072', 'ABRO SPRAY PAINT ALUMINIUM', '17', '0', '0', '240', '0', '0', '17', '03-01-2014', '6', '300', 12),
('P0073', 'A Z OIL 25L', '10', '0', '0', '9100', '0', '0', '10', '03-01-2014', '3', '9300', 1),
('P0074', 'AMMASCO GEAR OIL 1L', '279', '0', '0', '467', '0', '0', '279', '03-01-2014', '9', '484', 12),
('P0075', 'AMMASCO A T F 1L', '187', '0', '0', '442', '0', '0', '187', '03-01-2014', '9', '467', 12),
('P0076', 'AMMASCO OIL 1L', '593', '0', '0', '517', '0', '0', '593', '03-01-2014', '9', '534', 12),
('P0077', 'AMMASCO OIL VITAL 4L', '18', '0', '0', '1759', '0', '0', '18', '03-01-2014', '9', '1800', 6),
('P0078', 'A Z OIL 5L', '2', '0', '0', '2040', '0', '0', '2', '03-01-2014', '3', '2150', 4),
('P0079', 'AMMASCO OIL 4L', '21', '0', '0', '1700', '0', '0', '21', '03-01-2014', '9', '1734', 6),
('P0080', 'A Z ENGEEN OIL 2T', '116', '0', '0', '350', '0', '0', '116', '03-01-2014', '3', '350', 12),
('P0081', 'ABNOX A T F', '229', '0', '0', '296', '0', '0', '229', '03-01-2014', '19', '340', 12),
('P0082', 'AMMASCO GEAR OIL 4L', '49', '0', '0', '1609', '0', '0', '49', '03-01-2014', '9', '1650', 6),
('P0083', 'TOTAL OIL Q500 4L', '200', '0', '0', '2492', '0', '0', '200', '03-01-2014', '8', '2700', 6),
('P0084', 'ABBNOX GREASE SMALL', '166', '0', '0', '85', '0', '0', '166', '03-01-2014', '19', '110', 48),
('P0085', 'TOTAL CLASSICOIL 1L', '97', '0', '0', '525', '0', '0', '97', '03-01-2014', '8', '550', 18),
('P0086', 'AMMASCO RANDO OIL 4L', '19', '0', '0', '1584', '0', '0', '19', '03-01-2014', '9', '1634', 6),
('P0087', 'ABBNOX GREASE BIG', '352', '0', '0', '175', '0', '0', '352', '03-01-2014', '19', '190', 24),
('P0088', 'TOTAL CLASSIC OIL 4L', '24', '0', '0', '2115', '0', '0', '24', '03-01-2014', '8', '2250', 6),
('P0089', 'AMMASCO OIL RONDO 25L', '7', '0', '0', '8500', '0', '0', '7', '03-01-2014', '9', '8800', 1),
('P0090', 'AMMASCO VITAL OIL 1L', '104', '0', '0', '453', '0', '0', '104', '03-01-2014', '9', '559', 12),
('P0091', 'IBETO PRIMA MOTOR OIL 4L', '22', '0', '0', '1600', '0', '0', '22', '03-01-2014', '20', '1834', 6),
('P0092', 'MASTER HARDNER', '16', '0', '0', '1650', '0', '0', '16', '07-01-2014', '16', '1750', 12),
('P0093', 'IBETO BETA HD50 4L', '80', '0', '0', '1618', '0', '0', '80', '03-01-2014', '20', '1750', 4),
('P0094', 'SEA HORSE OIL 4L', '1', '0', '0', '1600', '0', '0', '1', '07-01-2014', '12', '1750', 4),
('P0095', 'JEZCO OIL 4L', '30', '0', '0', '1434', '0', '0', '30', '03-01-2014', '1', '1467', 6),
('P0096', 'LUBSTAR OIL 5L', '3', '0', '0', '1630', '0', '0', '3', '07-01-2014', '15', '1750', 4),
('P0097', 'JEZCO OIL AZOLLA 25L', '5', '0', '0', '8600', '0', '0', '5', '03-01-2014', '1', '9000', 1),
('P0098', 'JEZCO OIL 1L', '70', '0', '0', '434', '0', '0', '70', '03-01-2014', '1', '484', 12),
('P0099', 'LUBSTAR OIL 4L', '22', '0', '0', '1500', '0', '0', '22', '07-01-2014', '15', '1650', 4),
('P0100', 'JEZCO GREASE SMALL LIGTH', '68', '0', '0', '110', '0', '0', '68', '03-01-2014', '1', '125', 18),
('P0101', 'OANDO OLEUM SUPER 4L', '8', '0', '0', '1797', '0', '0', '8', '03-01-2014', '13', '1834', 6),
('P0102', 'OANDO OIL OLEUM XL 4L', '35', '0', '0', '2150', '0', '0', '35', '03-01-2014', '13', '2250', 6),
('P0103', 'OANDO SUPER 25L C3', '40', '0', '0', '11300', '0', '0', '40', '03-01-2014', '13', '11500', 1),
('P0104', 'OANDO OIL 25L OLEUM SUPER', '30', '0', '0', '10400', '0', '0', '30', '03-01-2014', '13', '10600', 1),
('P0105', 'JARS SEA HORSE OIL 25L', '6', '0', '0', '8200', '0', '0', '6', '07-01-2014', '12', '9000', 1),
('P0106', 'MAGNET PLUGS SHORT', '200', '0', '0', '68', '0', '0', '200', '19-01-2014', '14', '80', 200),
('P0107', 'ARMOR ALL CLEANING STP', '10', '0', '0', '108', '0', '0', '10', '07-01-2014', '12', '130', 1),
('P0108', 'ROAD STAR KMG LIGTH GREASE', '608', '0', '0', '270', '0', '0', '608', '07-01-2014', '12', '350', 1),
('P0109', '3M MASKING TAPE', '168', '0', '0', '130', '0', '0', '168', '07-01-2014', '12', '140', 72),
('P0110', 'GAS TREATMENT STP', '24', '0', '0', '317', '0', '0', '24', '07-01-2014', '12', '333', 12),
('P0111', 'TONIMAS GREASE SMALL', '14', '0', '0', '130', '0', '0', '14', '07-01-2014', '12', '130', 12),
('P0112', 'G KT FIRE MASTER BIG', '2', '0', '0', '1000', '0', '0', '2', '07-01-2014', '12', '800', 12),
('P0113', 'V TECH WHITE GUM', '27', '0', '0', '150', '0', '0', '27', '07-01-2014', '12', '190', 240),
('P0114', 'FORMULA 1 CAR POLISH', '45', '0', '0', '650', '0', '0', '45', '07-01-2014', '12', '750', 12),
('P0115', 'POINT 4 RADIATOR COOLANT PLASTIC', '2', '0', '0', '180', '0', '0', '2', '07-01-2014', '12', '250', 12),
('P0116', 'JIL CAR WASH', '19', '0', '0', '209', '0', '0', '19', '07-01-2014', '7', '250', 12),
('P0117', 'GLAZE PROTECTANT', '3', '0', '0', '355', '0', '0', '3', '07-01-2014', '12', '400', 12),
('P0118', 'TONIMAS GREASEBIG', '55', '0', '0', '200', '0', '0', '55', '07-01-2014', '12', '200', 24),
('P0119', '3 TONS JACK', '14', '0', '0', '1100', '', '0', '14', '07-01-2014', '14', '1300', 6),
('P0120', '10 TONS JACK', '50', '0', '0', '1800', '', '', '50', '07-01-2014', '14', '2200', 4),
('P0121', '5 TONS JACK', '23', '0', '0', '1200', '0', '0', '23', '07-01-2014', '14', '1500', 6),
('P0122', 'FUEL INJECTOR CLEANER STP', '5', '0', '0', '317', '0', '0', '5', '07-01-2014', '12', '333', 12),
('P0123', 'ELITE BODY FILLER', '344', '0', '0', '2115', '0', '0', '344', '07-01-2014', '12', '2250', 4),
('P0124', 'OIL FILTER DAF', '201', '0', '0', '380', '0', '0', '201', '07-01-2014', '21', '420', 20),
('P0125', 'M R S GREASE BIG', '593', '0', '0', '329', '0', '0', '593', '07-01-2014', '2', '350', 24),
('P0126', 'GAS FILLER DAF', '173', '0', '0', '390', '0', '0', '173', '07-01-2014', '21', '420', 20),
('P0127', 'MOBIL XHP 4L', '76', '0', '0', '2625', '0', '0', '76', '07-01-2014', '2', '2850', 4),
('P0128', 'EVERKING EPOXY GUM BIG', '387', '0', '0', '165', '0', '0', '387', '07-01-2014', '18', '200', 100),
('P0129', 'MOBIL OIL XHP 1L', '195', '0', '0', '760', '0', '0', '195', '07-01-2014', '2', '850', 12),
('P0130', 'EVERKING  EPOXY GUM SMALL', '405', '0', '0', '95', '0', '0', '405', '07-01-2014', '18', '120', 100),
('P0131', '4 HEADS SPANNERS', '37', '0', '0', '370', '0', '0', '37', '07-01-2014', '14', '450', 20),
('P0132', 'MOBIL SPECIAL OIL 4L', '16', '0', '0', '2450', '0', '0', '16', '07-01-2014', '2', '2650', 4),
('P0133', 'STOP OIL TREATMENT', '960', '0', '0', '219', '0', '0', '960', '07-01-2014', '2', '230', 24),
('P0134', 'MOBIL 1 OIL 4L', '0', '0', '0', '7213', '0', '0', '0', '07-01-2014', '2', '7750', 4),
('P0135', 'CHEMMER SUPER GLUE', '1219', '0', '0', '16', '0', '0', '1219', '07-01-2014', '12', '25', 600),
('P0136', 'MAGIC POLISH BIG', '93', '0', '0', '260', '0', '0', '93', '07-01-2014', '12', '300', 24),
('P0137', 'CHEMMER EPOXY GUM', '122', '0', '0', '130', '0', '0', '122', '07-01-2014', '12', '170', 120),
('P0138', 'M R S STALLION OIL 25L', '0', '0', '0', '11000', '0', '0', '0', '07-01-2014', '2', '11300', 1),
('P0139', 'A POIL SUPER V VISCO STATIC 4L', '4', '0', '0', '2550', '0', '0', '4', '07-01-2014', '2', '2700', 4),
('P0140', 'A P D M O 25L MOTOR AND DIESEL', '285', '0', '0', '10000', '0', '0', '285', '07-01-2014', '2', '10400', 1),
('P0141', 'A P MOTOR OIL 4L DIESEL', '13', '0', '0', '2000', '0', '0', '13', '07-01-2014', '2', '2100', 4),
('P0142', 'ASMACO MASKING TAPE', '106', '0', '0', '127', '0', '0', '106', '07-01-2014', '12', '140', 36),
('P0143', 'LUBSTAR A T F 1L', '2', '0', '0', '350', '0', '0', '2', '07-01-2014', '15', '400', 12),
('P0144', 'ALLIED BRAKE OIL BIG E5', '1278', '0', '0', '280', '0', '0', '1278', '07-01-2014', '12', '290', 30),
('P0145', 'LUBSTAR GEAR OIL 1L', '111', '0', '0', '385', '0', '0', '111', '07-01-2014', '15', '450', 12),
('P0146', 'LUBSTAR OIL 1L', '61', '0', '0', '385', '0', '0', '61', '07-01-2014', '15', '450', 12),
('P0147', 'ALLIED BRAKE OIL SMALL E5', '1554', '0', '0', '166', '0', '0', '1554', '07-01-2014', '12', '190', 24),
('P0148', 'LUBSTAR OIL DIESEL 4L', '41', '0', '0', '1500', '0', '0', '41', '07-01-2014', '15', '1600', 4),
('P0149', 'LUBSTAR GEAR OIL 4L', '2', '0', '0', '1500', '0', '0', '2', '07-01-2014', '15', '1600', 4),
('P0150', 'LUBSTAR OIL 25L', '2', '0', '0', '8100', '0', '0', '2', '07-01-2014', '15', '8500', 1),
('P0151', 'SEA HORSE OIL 1L', '60', '0', '0', '410', '0', '0', '60', '07-01-2014', '12', '450', 12),
('P0152', 'SAND PAPER 1000''800 320 220 150', '1257', '0', '0', '50', '0', '0', '1257', '07-01-2014', '16', '56', 100),
('P0153', 'HITRO CLEANER OIL', '0', '0', '0', '1100', '0', '0', '0', '07-01-2014', '16', '1300', 12),
('P0154', 'HITRO HARDENER', '10', '0', '0', '1400', '0', '0', '10', '07-01-2014', '16', '1600', 12),
('P0155', 'M R S OIL 4L', '0', '0', '0', '1925', '0', '0', '0', '07-01-2014', '2', '2050', 4),
('P0156', 'HITRO SLOW THINNER', '35', '0', '0', '700', '0', '0', '35', '07-01-2014', '16', '800', 12),
('P0157', 'BETA OIL CLEAR OIL', '0', '0', '0', '1600', '0', '0', '0', '07-01-2014', '16', '1700', 15),
('P0158', 'BETA SLOW THINNER', '20', '0', '0', '900', '0', '0', '20', '07-01-2014', '16', '1000', 12),
('P0159', 'SAND PAPER 60 D', '0', '0', '0', '60', '0', '0', '0', '07-01-2014', '16', '72', 50),
('P0160', 'EGCO PUTTY AND HITRO PUTTY', '0', '0', '0', '1000', '0', '0', '0', '07-01-2014', '16', '1200', 6),
('P0161', 'BETA NORMAL HARDNER BIG', '0', '0', '0', '1700', '0', '0', '0', '07-01-2014', '16', '1800', 12),
('P0162', 'SUPAR SHINE HARDENER', '24', '0', '0', '1500', '0', '0', '24', '07-01-2014', '16', '1650', 12),
('P0163', 'SUPER SHINE CLEAR', '0', '0', '0', '1200', '0', '0', '0', '07-01-2014', '16', '1300', 12),
('P0164', 'BETA PUTTY', '0', '0', '0', '1300', '0', '0', '0', '07-01-2014', '16', '1500', 6),
('P0165', 'CHAMPION PUTTY', '0', '0', '0', '1350', '0', '0', '0', '07-01-2014', '16', '1600', 6),
('P0166', 'MASTER CLEAR OIL PLUS', '0', '0', '0', '1250', '0', '0', '0', '07-01-2014', '16', '1400', 12),
('P0167', 'MAGNET PLUGS 305', '200', '0', '0', '68', '0', '0', '200', '19-01-2014', '14', '80', 200),
('P0168', 'HITRO PRIMER', '30', '0', '0', '850', '0', '0', '30', '08-01-2014', '16', '1000', 6),
('P0169', 'HITRO MATT', '18', '0', '0', '850', '0', '0', '18', '08-01-2014', '16', '1000', 6),
('P0170', 'FILTEX BRAKE OIL SMLALL', '1', '0', '0', '135', '0', '0', '1', '08-01-2014', '12', '170', 24),
('P0171', 'FILTEX A T F', '127', '0', '0', '330', '0', '0', '127', '08-01-2014', '12', '400', 12),
('P0172', 'FILTEX GREASE LIGTH', '74', '0', '0', '320', '0', '0', '74', '08-01-2014', '12', '380', 12),
('P0173', 'FILTEX BLUE GUM', '240', '0', '0', '145', '0', '0', '240', '08-01-2014', '12', '170', 240),
('P0174', 'FILTEX WHITE GUM', '0', '0', '0', '150', '0', '0', '0', '08-01-2014', '12', '200', 240),
('P0175', 'WHIZ ENGINE OIL 4L', '25', '0', '0', '1767', '0', '0', '25', '08-01-2014', '1', '1867', 6),
('P0176', 'WHIZ OIL TREATMENT', '477', '0', '0', '340', '0', '0', '477', '08-01-2014', '1', '350', 24),
('P0177', 'VISCO 2000 4L', '0', '0', '0', '0', '0', '0', '0', '08-01-2014', '2', '442', 0),
('P0178', 'MAGIC POLISH SMALL', '22', '0', '0', '180', '0', '0', '22', '08-01-2014', '12', '200', 24),
('P0179', 'TRANSPORT', '1', '0', '0', '0', '0', '0', '1', '10-01-2014', '22', '0', 0),
('P0180', 'EYOUEM PLUGS LONG ORG', '200', '0', '0', '183', '0', '0', '200', '19-01-2014', '14', '200', 200),
('P0181', 'EYOUEM PLUGS SHORT ORG', '200', '0', '0', '178', '0', '0', '200', '19-01-2014', '14', '200', 200),
('P0182', 'EXHAUST GASKET PEUGEOT', '2500', '0', '0', '13', '0', '0', '2500', '19-01-2014', '14', '20', 2500),
('P0183', 'OIL FILTER 406', '60', '0', '0', '170', '0', '0', '60', '19-01-2014', '17', '200', 50),
('P0184', 'OIL FILTER 212 BLACK', '50', '0', '0', '170', '0', '0', '50', '19-01-2014', '17', '200', 50),
('P0185', 'OIL FILTER AE80 ORG', '200', '0', '0', '180', '0', '0', '200', '19-01-2014', '17', '200', 200),
('P0186', 'OIL FILTER HONDA 92M', '200', '0', '0', '200', '0', '0', '200', '19-01-2014', '17', '250', 200),
('P0187', 'OIL FILTER 90M ORG', '200', '0', '0', '200', '0', '0', '200', '19-01-2014', '17', '250', 100),
('P0188', 'OIL FILTER PERKINS 403', '30', '0', '0', '320', '0', '0', '30', '19-01-2014', '17', '500', 50),
('P0189', 'OIL FILTERGOLF', '50', '0', '0', '170', '0', '0', '50', '19-01-2014', '17', '200', 50),
('P0190', 'OIL FILTERGOLF', '50', '0', '0', '170', '0', '0', '50', '19-01-2014', '17', '200', 50),
('P0191', 'OIL FILTER VBOOT', '50', '0', '0', '180', '0', '0', '50', '19-01-2014', '17', '200', 50),
('P0192', 'OIL FILTER AE80 ORD', '200', '0', '0', '130', '0', '0', '200', '19-01-2014', '17', '150', 50),
('P0193', 'OIL FILTER MMC 38', '50', '0', '0', '280', '0', '0', '50', '19-01-2014', '17', '400', 50),
('P0194', 'OIL FILTER MMC 33', '40', '0', '0', '270', '0', '0', '40', '19-01-2014', '17', '400', 50),
('P0195', 'OIL FILTER MMC TINING', '50', '0', '0', '150', '0', '0', '50', '19-01-2014', '17', '200', 50),
('P0196', 'OIL FILTER MAZDA SHORT', '50', '0', '0', '150', '0', '0', '50', '19-01-2014', '17', '180', 50),
('P0197', 'OIL FILTER PH9B', '50', '0', '0', '190', '0', '0', '50', '19-01-2014', '17', '230', 50),
('P0198', 'GAS FILTER PC42 WHITE', '50', '0', '0', '170', '0', '0', '50', '19-01-2014', '17', '200', 50),
('P0199', 'GAS FILTER PERKINS', '50', '0', '0', '230', '0', '0', '50', '19-01-2014', '17', '350', 50),
('P0200', 'SCREW DRIVER', '300', '0', '0', '21', '0', '0', '300', '19-01-2014', '18', '29', 300),
('P0201', '2POINTS BULBS 12V', '1000', '0', '0', '11', '0', '0', '1000', '19-01-2014', '18', '15', 1000),
('P0202', 'H4 BULBS 12V PIN', '500', '0', '0', '40', '0', '0', '500', '19-01-2014', '18', '50', 500),
('P0203', 'H4 BULBS 12V ROUND', '200', '0', '0', '40', '0', '0', '200', '19-01-2014', '18', '50', 500),
('P0204', 'H4 BULBS 24V PIN', '100', '0', '0', '45', '0', '0', '100', '19-01-2014', '18', '60', 500),
('P0205', 'H4 BULBS 24V ROUND', '200', '0', '0', '45', '0', '0', '200', '19-01-2014', '18', '60', 500),
('P0206', 'H4 BULBS 12V PIN HENKIEL', '100', '0', '0', '95', '0', '0', '100', '19-01-2014', '18', '130', 500),
('P0207', 'H4 BULBS 12V HENKIEL ROUND', '100', '0', '0', '95', '0', '0', '100', '19-01-2014', '18', '130', 500),
('P0208', 'H4 BULBS 24V HENKIEL PIN', '100', '0', '0', '100', '0', '0', '100', '19-01-2014', '18', '150', 500),
('P0209', 'H4 BULBS 24V HENKIEL ROUND', '100', '0', '0', '100', '0', '0', '100', '19-01-2014', '18', '150', 500),
('P0210', 'BATTERY HEADS', '1200', '0', '0', '60', '0', '0', '1200', '19-01-2014', '18', '75', 600),
('P0211', 'STANDING TRIANGLE BLUE', '50', '0', '0', '250', '0', '0', '50', '19-01-2014', '18', '350', 25),
('P0212', 'H4 BULBS 12V AHL PIN', '50', '0', '0', '150', '0', '0', '50', '19-01-2014', '18', '200', 500),
('P0213', 'H4 BULBS 12V AHL ROUND', '50', '0', '0', '150', '0', '0', '50', '19-01-2014', '18', '200', 500),
('P0214', 'H4 BULBS 24V AHL PIN', '50', '0', '0', '160', '0', '0', '50', '19-01-2014', '18', '200', 500),
('P0215', 'H4 BULBS 24V AHL ROUND', '50', '0', '0', '160', '0', '0', '50', '19-01-2014', '18', '200', 500),
('P0216', 'H4 BULBS 24V AHL ROUND', '50', '0', '0', '160', '0', '0', '50', '19-01-2014', '18', '200', 500),
('P0217', 'FUEL FILTER BENZ', '240', '0', '0', '45', '0', '0', '240', '19-01-2014', '18', '65', 12),
('P0218', '2 POINTS BULBS 24V', '200', '0', '0', '12', '0', '0', '200', '19-01-2014', '18', '15', 1000),
('P0219', '1 POINT BULBS 12V BIG', '1000', '0', '0', '11.50', '0', '0', '1000', '19-01-2014', '18', '15.5-16.5', 1000),
('P0220', '1 POINT BULBS 12V SMALL', '1000', '0', '0', '8', '0', '0', '1000', '19-01-2014', '18', '12', 2000),
('P0221', '1 POINT BULBS 24V BIG', '1000', '0', '0', '12', '0', '0', '1000', '19-01-2014', '18', '15', 1000),
('P0222', '1 POINT BULBS 24V SMALL', '300', '0', '0', '9', '0', '0', '300', '19-01-2014', '18', '12', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE IF NOT EXISTS `password` (
  `Id` int(6) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `PassWord` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`Id`, `UserName`, `PassWord`) VALUES
(1, 'alloy', 'alloy');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `ProductCode` varchar(10) NOT NULL,
  `Quantity` varchar(10) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Amount` varchar(15) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `SupplierId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `returnedgoods`
--

CREATE TABLE IF NOT EXISTS `returnedgoods` (
  `CustomerId` varchar(10) NOT NULL,
  `ProductCode` varchar(10) NOT NULL,
  `Quantity` varchar(10) NOT NULL,
  `Amount` varchar(10) NOT NULL,
  `Total` varchar(15) NOT NULL,
  `Date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `CustomerId` varchar(10) NOT NULL,
  `ProductCode` varchar(10) NOT NULL,
  `Quantity` varchar(10) NOT NULL,
  `Rate` varchar(10) NOT NULL,
  `Amount` varchar(10) NOT NULL,
  `Date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `S/n` int(10) NOT NULL AUTO_INCREMENT,
  `Supplier` varchar(30) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`S/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`S/n`, `Supplier`, `Date`, `Address`) VALUES
(1, 'JEZCO OIL INTERNATIONAL', '2013-12-16', 'NUMAN ROAD'),
(2, 'HAMISU DANTINKI', '2013-12-16', 'KANO ROAD KANO'),
(3, 'A-Z PETROLEUM INTERNATIONAL', '2013-12-16', 'NNEWI ANAMBARA STATE'),
(4, 'CHUMA BON LTD', '2013-12-11', 'ONITSHA'),
(5, 'OGOCHUKWU AFRICA', '2013-12-19', 'YOLA'),
(6, 'ABRO DEPORT', '2013-12-19', 'YOLA'),
(7, 'CLEMENT OYI', '2013-12-19', 'YOLA'),
(8, 'TOTAL STATION', '2013-12-19', 'YOLA'),
(9, 'AMMASCO INT LTD', '2013-12-19', 'YOLA'),
(10, 'FINE BOY', '2013-12-19', 'YOLA'),
(11, 'GODDY CHUKS', '2013-12-19', 'NNEWI'),
(12, 'ADE DE YOUNG', '2013-12-19', 'LAGOS'),
(13, 'OANDO', '2013-12-19', 'YOLA'),
(14, 'B U BENCO', '2013-12-19', 'NNEWI'),
(15, 'NOBIS AND ASSO', '2013-12-19', 'NNEWI'),
(16, 'UCHESON CONTINENTAL', '2013-12-19', 'NNEWI'),
(17, 'UGO BEST INVEST', '2013-12-19', 'NNEWI'),
(18, 'OKONKWO JESE', '2013-12-19', 'NNEWI'),
(19, 'ABBNOX', '2013-12-19', 'NNEWI'),
(20, 'IBETO OIL', '2013-12-19', 'NNEWI'),
(21, 'P P M LIMITED', '2013-12-19', 'NNEWI'),
(22, 'TRANSPORT', '2014-01-10', 'YOLA');

-- --------------------------------------------------------

--
-- Table structure for table `updatedbalance`
--

CREATE TABLE IF NOT EXISTS `updatedbalance` (
  `CustomerId` varchar(10) NOT NULL,
  `Balance` varchar(10) NOT NULL,
  `Date` varchar(10) NOT NULL,
  PRIMARY KEY (`CustomerId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
