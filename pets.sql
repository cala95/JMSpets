-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 01:38 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `username`, `user_password`, `firstname`, `lastname`, `role`) VALUES
(1, 'marko', '1004995', 'marko', 'stepanovic', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `breeds`
--

CREATE TABLE `breeds` (
  `breed_id` int(3) NOT NULL,
  `breed_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breeds`
--

INSERT INTO `breeds` (`breed_id`, `breed_name`) VALUES
(1, 'engleski buldog'),
(2, 'haski'),
(3, 'francuski buldog'),
(4, 'mops'),
(5, 'vucjak'),
(6, 'bokser'),
(7, 'boo'),
(8, 'chow chow'),
(9, 'retriver'),
(10, 'hrt'),
(11, 'dzukela'),
(12, 'samojed');

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `dog_id` int(3) NOT NULL,
  `dog_name` varchar(255) NOT NULL,
  `dog_description` text NOT NULL,
  `dog_breed_id` int(3) NOT NULL,
  `dog_adress` varchar(255) NOT NULL,
  `dog_image` varchar(255) NOT NULL,
  `dog_price` double(6,2) NOT NULL,
  `dog_adding_date` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'published',
  `views` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`dog_id`, `dog_name`, `dog_description`, `dog_breed_id`, `dog_adress`, `dog_image`, `dog_price`, `dog_adding_date`, `status`, `views`, `owner`, `phone`, `email`) VALUES
(14, 'Dea', 'NARAV: \r\nInteligentan, oprezan i poslusan. Prijateljske prirode, nikada sa znacima agresivnosti ili jasne plasljivosti \r\n\r\nGLAVA: \r\nSiroka lobanja sa jasnim stopom, dobro modelirana bez mesnatih obraza. Vilice srednje duzine, pune snage ne spicaste. \r\n\r\n', 4, 'Novi Beograd', 'mops.jpg', 999.00, '2017-12-18', 'published', 0, '', '', ''),
(15, 'Dejan', '\r\nNARAV: \r\nInteligentan, oprezan i poslusan. Prijateljske prirode, nikada sa znacima agresivnosti ili jasne plasljivosti\r\nGLAVA:\r\nSiroka lobanja sa jasnim stopom, dobro modelirana bez mesnatih obraza. Vilice srednje duzine, pune snage ne spicaste. ', 4, 'Beograd', 'mops2.jpg', 789.00, '2017-12-18', 'published', 0, '', '', ''),
(16, 'Rex', 'NARAV: Inteligentan, oprezan i poslusan. Prijateljske prirode, nikada sa znacima agresivnosti ili jasne plasljivosti GLAVA: Siroka lobanja sa', 5, 'Loznica', 'vucijak.jpg', 1200.00, '2017-12-18', 'published', 0, '', '', ''),
(17, 'Tara', 'NARAV: Inteligentan, oprezan i poslusan. Prijateljske prirode, nikada sa znacima agresivnosti ili jasne plasljivosti GLAVA: Siroka lobanja sa', 2, 'Sombor', 'haski.jpg', 1000.00, '2017-12-18', 'published', 0, '', '', ''),
(18, 'Lola', 'NARAV: Inteligentan, oprezan i poslusan. Prijateljske prirode, nikada sa znacima agresivnosti ili jasne plasljivosti GLAVA: Siroka lobanja sa', 11, 'Novi Sad', 'dzukela.jpg', 350.00, '2017-12-18', 'published', 0, '', '', ''),
(20, 'Dule', 'NARAV: Inteligentan, oprezan i poslusan. Prijateljske prirode, nikada sa znacima agresivnosti ili jasne plasljivosti GLAVA: Siroka lobanja sa', 9, 'Surcin', 'retriver.jpg', 800.00, '2017-12-18', 'published', 0, '', '', ''),
(21, 'Milunka', 'NARAV: Inteligentan, oprezan i poslusan. Prijateljske prirode, nikada sa znacima agresivnosti ili jasne plasljivosti GLAVA: Siroka lobanja sa', 7, 'Ivanjica', 'boo.jpg', 3000.00, '2017-12-18', 'published', 0, '', '', ''),
(22, 'Zlaja', 'NARAV: Inteligentan, oprezan i poslusan. Prijateljske prirode, nikada sa znacima agresivnosti ili jasne plasljivosti GLAVA: Siroka lobanja sa', 10, 'Novi Sad - Liman', 'hrt.jpg', 500.00, '2017-12-18', 'published', 0, '', '', ''),
(23, 'Ali', 'NARAV: Inteligentan, oprezan i poslusan. Prijateljske prirode, nikada sa znacima agresivnosti ili jasne plasljivosti GLAVA: Siroka lobanja sa', 6, 'Beograd (Bezanijska kosa)', 'bokser.jpg', 650.00, '2017-12-18', 'published', 0, '', '', ''),
(25, 'Ceda', 'NARAV: Inteligentan, oprezan i poslusan. Prijateljske prirode, nikada sa znacima agresivnosti ili jasne plasljivosti GLAVA: Siroka lobanja sa', 3, 'Kladovo', 'francuskibuldog.jpg', 700.00, '2017-12-18', 'published', 0, 'Jana Curcic', '065221447', 'jana@gmail.com'),
(26, 'Viski', 'NARAV: Inteligentan, oprezan i poslusan. Prijateljske prirode, nikada sa znacima agresivnosti ili jasne plasljivosti GLAVA: Siroka lobanja sa', 12, 'Gandijeva - Novi Beograd', 'samojed.jpg', 750.00, '2017-12-19', 'published', 0, 'Jovana Cvijovic', '066555444', 'jovana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriber_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'subscriber'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscriber_id`, `firstname`, `lastname`, `username`, `password`, `email`, `phone`, `role`) VALUES
(1, 'Dusan', 'Treskavica', 'dule', '$2y$10$83Y5FS3/VIkQw56xtTPL2Oz4UZL255Gf7lFZ1IhWhCK3Yi/sOAlVy', 'dule@gmail.com', '061555333', 'subscriber'),
(3, 'Jana', 'Curcic', 'jana', '$2y$10$Y0eyGyTA9uf78Z9oWMWCbuBUmCS4tuIsmJYSp2YwAMFqRP.5bPo8y', 'jana@gmail.com', '065221447', 'subscriber'),
(4, 'Jovana', 'Cvijovic', 'jovana', '$2y$10$bC6yKlu7OhP9wOZ/DB24U.rcmMjYaMnyMsgJwyTeJb8YbP7/0HqLW', 'jovana@gmail.com', '066555444', 'subscriber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`breed_id`);

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`dog_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `breeds`
--
ALTER TABLE `breeds`
  MODIFY `breed_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `dog_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
