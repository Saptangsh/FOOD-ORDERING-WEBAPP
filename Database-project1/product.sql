-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2025 at 06:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `CP` int(20) NOT NULL,
  `SP` int(20) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `Description`, `CP`, `SP`, `Image`) VALUES
('100', 'Mutton Biriyani', 'Biriyani', 180, 220, 'IMG/biriyani.jpg'),
('110', 'Chicken Biriyani', 'Mughlai ', 150, 180, 'IMG/chickenbiryani.jpg'),
('120', 'Chicken Chap', 'Mughlai ', 100, 140, 'IMG/chap.jpg'),
('130', 'Chicken Kasha', 'Side dish', 130, 160, 'IMG/chickenkasha.jpeg'),
('140', 'Chicken Bharta', 'Side dish', 150, 180, 'IMG/bharta.jfif'),
('150', 'Chicken Tikka Kabab', 'Kabab', 150, 200, 'IMG/chicken_tikka_kebab.webp'),
('160', 'Chicken Tandoori', 'Starter', 280, 320, 'IMG/ChickenTandoori.jpg'),
('170', 'Chicken Reshmi Kabab', 'Kabab', 160, 200, 'IMG/chickenReshmiKebab.jpg'),
('180', 'Chicken Butter Masala', 'Side dish', 180, 220, 'IMG/Butter-Chicken.jpg'),
('190', 'Mutton Rogan Josh', 'Side dish', 250, 300, 'IMG/Mutton-Rogan-Josh.jpg'),
('200', 'Mutton Chap', '', 200, 250, 'IMG/MuttanChap.jpg'),
('210', 'Mutton Kasha', 'Side dish', 250, 300, 'IMG/muttonkasha.jpg'),
('220', 'Tandoori Roti', 'Bread', 15, 25, 'IMG/tandooriroti.jpg'),
('230', 'Butter Naan', 'Bread', 40, 60, 'IMG/butternan.jpg'),
('240', 'Laccha Paratha', 'Bread', 15, 25, 'IMG/lacchaparatha.jpg'),
('250', 'Firni', 'Sweet', 60, 80, 'IMG/phirni-firni.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
