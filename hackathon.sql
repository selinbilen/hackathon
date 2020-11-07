-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2020 at 05:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `name` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `worked_year` int(11) NOT NULL,
  `projects_num` int(11) NOT NULL,
  `departman` varchar(255) NOT NULL,
  `basariyuzde` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`name`, `salary`, `worked_year`, `projects_num`, `departman`, `basariyuzde`, `id`) VALUES
('Arda Aslan', '3.500', 2, 1, 'HR', '%90', 0),
('Fatih', '6.000', 1, 1, 'IT', '%70', 0),
('Sebnem Biroglu', '6.000', 4, 5, 'Management', '%50', 0),
('Selin Bilen', '5.000', 3, 4, 'IT', '%80', 0),
('Begum', '3.000', 4, 6, 'HR', '%65', 1);


-- --------------------------------------------------------

--
-- Table structure for table `hedef`
--

CREATE TABLE `hedef` (
  `hedefismi` varchar(255) NOT NULL,
  `Departman` varchar(255) NOT NULL,
  `hedefsuresi` int(11) NOT NULL,
  `HedefDetayi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hedef`
--

INSERT INTO `hedef` (`hedefismi`, `Departman`, `hedefsuresi`, `HedefDetayi`) VALUES
('hedef_1', 'HR', 20, 'Lorem Ipsum'),
('hedef', 'IT', 20, 'dvbfhknksjfznjkrs'),
('vfshk', 'Management ', 12, 'ncdjksnjksnvkj');

-- --------------------------------------------------------

--
-- Table structure for table `Proje`
--

CREATE TABLE `Proje` (
  `Projeninismi` text NOT NULL,
  `Departman` text NOT NULL,
  `Projesuresi` int(11) NOT NULL,
  `ProjeDetayi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Proje`
--

INSERT INTO `Proje` (`Projeninismi`, `Departman`, `Projesuresi`, `ProjeDetayi`) VALUES
('Project_2', 'IT', 32, 'Lorem Ipsum'),
('Project_1', 'IT', 90, 'Warehouse design and coding using C++'),
('Projec_3', 'Management ', 10, 'Calculating the price of the necessary supplements.'),
('ProhgdfhjksgvnÃ¶a', 'fgfdh', 80, 'fgsr dhtjygjm'),
('Proje', 'IT', 32, 'falan falan'),
('yeni', 'Management ', 3, 'vnjksnfkjsd');

-- --------------------------------------------------------

--
-- Table structure for table `terfi_1`
--

CREATE TABLE `terfi_1` (
  `isim` varchar(255) NOT NULL,
  `departman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terfi_1`
--

INSERT INTO `terfi_1` (`isim`, `departman`) VALUES
('Selin Bilen', 'IT'),
('Ahmet Yilmaz', 'IT'),
('Sebnem Biroglu', 'Management'),
('Begum Guler', 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `terfi_2`
--

CREATE TABLE `terfi_2` (
  `isim` varchar(255) NOT NULL,
  `departman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terfi_2`
--

INSERT INTO `terfi_2` (`isim`, `departman`) VALUES
('Arda Aslan', 'HR'),
('Oguz Kircan', 'IT'),
('Fatih Ayar', 'Management '),
('Selin Bilen', 'IT'),
('Ahmet Yilmaz', 'IT'),
('Sebnem Biroglu', 'Management'),
('Begum Guler', 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `terfi_3`
--

CREATE TABLE `terfi_3` (
  `isim` varchar(255) NOT NULL,
  `departman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terfi_3`
--

INSERT INTO `terfi_3` (`isim`, `departman`) VALUES
('Selin', 'IT'),
('Ahmet', 'IT'),
('Arda Aslan', 'HR'),
('Oguz Kircan', 'IT'),
('Arda Aslan', 'HR'),
('Fatih Ayar', 'Management'),
('Begum Guler', 'HR'),
('Sema Arslan', 'HR'),
('Osman Korcan', 'IT'),
('Koray Yayla', 'HR'),
('Mehmet Kurt', 'HR');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
