-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 02:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `prezime` varchar(255) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `datumReg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` varchar(100) CHARACTER SET utf16 COLLATE utf16_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `email`, `username`, `password`, `datumReg`, `role`) VALUES
(1, 'glavni', 'glavni', 'sadasdasd@adsadsd.com', 'glavni', 'glavni123', '2020-11-29 15:12:38', 'admin'),
(3, 'probni', 'probni', 'probni@sfdsfsd.com', 'probni123', '$2y$12$8obKIII0KXDmL0jYwi6FE..KDB85JkSw73Y9k82WlwEgP6xftN2E6', '2020-12-02 10:29:16', 'admin'),
(4, '', '', '', '', '$2y$10$a.5dBW6kxmMftpvLu14VGu7PJU.M0vSpGQ9fF6Xydt1Igii68xHI.', '2020-12-02 14:39:58', ''),
(5, 'josjedan', 'josjedan', 'josjedan@sdad.com', 'josjedan123', '$2y$10$wtngiwyaRKU6isNcxZxt/uaRsqpb3znc4ERBs8Gsi0XGMtSrK85S2', '2020-12-02 19:09:28', 'admin'),
(6, 'janko', 'janko', 'janko@janko.com', 'janko123', '$2y$10$aZw/Q5tQMos/zb9CyvYJlum3BA/lbg2ADkUvrWUmdoeBoa3LqF2ma', '2020-12-02 18:37:57', '');

-- --------------------------------------------------------

--
-- Table structure for table `vijest`
--

CREATE TABLE `vijest` (
  `id` int(11) NOT NULL,
  `naslov` varchar(100) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `tekst` varchar(10000) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `vrijemeObjave` timestamp NOT NULL DEFAULT current_timestamp(),
  `slikaPath` varchar(1000) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `kratkiOpis` varchar(110) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vijest`
--

INSERT INTO `vijest` (`id`, `naslov`, `tekst`, `vrijemeObjave`, `slikaPath`, `kratkiOpis`) VALUES
(1, 'nesto', 'nesto', '2020-12-02 20:52:40', 'uploads/8a82db7d86f8d737dfd151fe63c65979.jpg', 'nesto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vijest`
--
ALTER TABLE `vijest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vijest`
--
ALTER TABLE `vijest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
