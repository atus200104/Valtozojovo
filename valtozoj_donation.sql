-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2023 at 12:34 PM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valtozoj_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `aggtallatok`
--

CREATE TABLE `aggtallatok` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Letszam` int(11) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aggtallatok`
--

INSERT INTO `aggtallatok` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Letszam`, `Veszelyezettseg`) VALUES
(1, 'Emlősök', 'Kis Patkósdenevér', 'Aggteleki Nemzeti Park', 10000, 'Kevésbé veszélyeztetett'),
(2, 'Emlősök', 'Kereknyergű Patkósdenevér', 'Aggteleki Nemzeti Park', 15000, 'Kevésbé veszélyeztetett'),
(3, 'Ízeltlábúak', 'Szemercsés Vakászka', 'Aggteleki Nemzeti Park', 25000, 'Kevésbé veszélyeztetett'),
(4, 'Ízeltlábúak', 'Aggteleki Vakbolharák', 'Aggteleki Nemzeti Park', 30000, 'Kevésbé veszélyeztetett'),
(5, 'Ízeltlábúak', 'Magyar Vakfutrinka', 'Aggteleki Nemzeti Park', 40000, 'Kevésbé veszélyeztetett'),
(6, 'Rovarok', 'Nagy Színjátszólepke', 'Aggteleki Nemzeti Park', 32000, 'Kevésbé veszélyeztetett'),
(7, 'Rovarok', 'Nagy Nyárfalepke', 'Aggteleki Nemzeti Park', 45000, 'Kevésbé veszélyeztetett'),
(8, 'Madarak', 'Fekete Gólya', 'Aggteleki Nemzeti Park', 1000, 'Veszélyeztetett'),
(9, 'Madarak', 'Parlagi Sas', 'Aggteleki Nemzeti Park', 3500, 'Fokozottan védett'),
(10, 'Emlősök', 'Vadmacska', 'Aggteleki Nemzeti Park', 10000, 'Kevésbé veszélyeztetett'),
(11, 'Madarak', 'Bajszos Sármány', 'Aggteleki Nemzeti Park', 6000, 'Kevésbé veszélyeztetett'),
(12, 'Madarak', 'Császármadár', 'Aggteleki Nemzeti Park', 8000, 'Kevésbé veszélyeztetett'),
(13, 'Rovarok', 'Vérfű Hangyaboglárka', 'Aggteleki Nemzeti Park', 20000, 'Kevésbé veszélyeztetett'),
(14, 'Rovarok', 'Szarvasbogár', 'Aggteleki Nemzeti Park', 6000, 'Veszélyeztetett');

-- --------------------------------------------------------

--
-- Table structure for table `aggtelek`
--

CREATE TABLE `aggtelek` (
  `ID` int(11) NOT NULL,
  `novenyID` int(11) NOT NULL,
  `allatID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aggtnoveny`
--

CREATE TABLE `aggtnoveny` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL,
  `Viragzas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aggtnoveny`
--

INSERT INTO `aggtnoveny` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Veszelyezettseg`, `Viragzas`) VALUES
(1, 'Növények', 'Gyertyán Magaskőris', 'Aggteleki Nemzeti Park', 'Nem védett', 'Nyár'),
(2, 'Növények', 'Osztrák Sárkányfű', 'Aggteleki Nemzeti Park', 'Fokozottan védett', 'Tavasz'),
(3, 'Növények', 'Leánykökörcsin', 'Aggteleki Nemzeti Park', 'Nem védett', 'Tavasz'),
(4, 'Növények', 'Korai Fehér Szegfű', 'Aggteleki Nemzeti Park', 'Védett', 'Nyár'),
(5, 'Növények', 'Kakasmandikó', 'Aggteleki Nemzeti Park', 'Védett', 'Nyár'),
(6, 'Növények', 'Molyhos Tölgyes', 'Aggteleki Nemzeti Park', 'Nem védett', 'Tavasz'),
(7, 'Növények', 'Aggteleki Karszt', 'Aggteleki Nemzeti Park', 'Nem védett', 'Tavasz'),
(8, 'Növények', 'Tarka Nőszirom', 'Aggteleki Nemzeti Park', 'Nem védett', 'Tavasz'),
(9, 'Növények', 'Nadálytő', 'Aggteleki Nemzeti Park', 'Nem védett', 'Nyár'),
(10, 'Növények', 'Nagy Pacsirtafű', 'Aggteleki Nemzeti Park', 'Védett', 'Tavasz');

-- --------------------------------------------------------

--
-- Table structure for table `balatonfelallat`
--

CREATE TABLE `balatonfelallat` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Letszam` int(11) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `balatonfelallat`
--

INSERT INTO `balatonfelallat` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Letszam`, `Veszelyezettseg`) VALUES
(1, 'Hüllők', 'Erdei Sikló', 'Balaton-Felvidéki Nemzeti Park', 30000, 'Kevésbé veszélyeztetett'),
(2, 'Rovarok', 'Gyászcincér', 'Balaton-Felvidéki Nemzeti Park', 50000, 'Kevésbé veszélyeztetett'),
(3, 'Rovarok', 'Havasi Cincér', 'Balaton-Felvidéki Nemzeti Park', 60000, 'Kevésbé veszélyeztetett'),
(4, 'Hüllők', 'Kockás Sikló', 'Balaton-Felvidéki Nemzeti Park', 25000, 'Kevésbé veszélyeztetett'),
(5, 'Madarak', 'Nagy Kárókatona', 'Balaton-Felvidéki Nemzeti Park', 12000, 'Kevésbé veszélyeztetett'),
(6, 'Rovarok', 'Magyar Tarsza', 'Balaton-Felvidéki Nemzeti Park', 35000, 'Kevésbé veszélyeztetett'),
(7, 'Hüllők', 'Mocsári Teknős', 'Balaton-Felvidéki Nemzeti Park', 1500, 'Nem veszélyeztetett'),
(8, 'Rovarok', 'Nagy Hőscincér', 'Balaton-Felvidéki Nemzeti Park', 55000, 'Kevésbé veszélyeztetett'),
(9, 'Madarak', 'Nagy Kócsag', 'Balaton-Felvidéki Nemzeti Park', 13000, 'Kevésbé veszélyeztetett'),
(10, 'Madarak', 'Szürke Gém', 'Balaton-Felvidéki Nemzeti Park', 10000, 'Kevésbé veszélyeztetett'),
(11, 'Hüllők', 'Zöld Gyík', 'Balaton-Felvidéki Nemzeti Park', 20000, 'Kevésbé veszélyeztetett');

-- --------------------------------------------------------

--
-- Table structure for table `balatonfelnoveny`
--

CREATE TABLE `balatonfelnoveny` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL,
  `Viragzas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `balatonfelnoveny`
--

INSERT INTO `balatonfelnoveny` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Veszelyezettseg`, `Viragzas`) VALUES
(1, 'Növények', 'Agárkosbor', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(2, 'Növények', 'Apró Nőszirom', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(3, 'Növények', 'Békakonty', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Nyár'),
(4, 'Növények', 'Bíboros Kosbor', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(5, 'Növények', 'Buglyos Szegfű ', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Nyár'),
(6, 'Növények', 'Cifra Kankalin', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(7, 'Növények', 'Cseh Tyúktaréj', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(8, 'Növények', 'Cselling', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(9, 'Növények', 'Epergyöngyike', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(10, 'Növények', 'Ezüstaszott', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(11, 'Növények', 'Fekete Kökörcsin', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(12, 'Növények', 'Gérbics', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(13, 'Növények', 'Halvány Sáfrány', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(14, 'Növények', 'Holuby-bangó', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Nyár'),
(15, 'Növények', 'Kaukázusi Zergevirág', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(16, 'Növények', 'Kígyónyelv', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Nyár'),
(17, 'Növények', 'Királyné Gyertyája', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Nyár'),
(18, 'Növények', 'Kis Holdruta', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Nyár'),
(19, 'Növények', 'Kornistárnics', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(20, 'Növények', 'Kövér Daravirág', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Nyár'),
(21, 'Növények', 'Leánykökörcsin', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(22, 'Növények', 'Lisztes Kankalin ', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(23, 'Növények', 'Magas Borsó ', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Tavasz'),
(24, 'Növények', 'Magyar Pikkelypáfrány', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Nyár'),
(25, 'Növények', 'Májvirág', 'Balaton-Felvidéki Nemzeti Park', 'Védett', 'Nyár');

-- --------------------------------------------------------

--
-- Table structure for table `balatonfelv`
--

CREATE TABLE `balatonfelv` (
  `ID` int(11) NOT NULL,
  `novenyID` int(11) NOT NULL,
  `allatID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bukk`
--

CREATE TABLE `bukk` (
  `ID` int(11) NOT NULL,
  `novenyID` int(11) NOT NULL,
  `allatID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bukkiallatok`
--

CREATE TABLE `bukkiallatok` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Letszam` int(11) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bukkiallatok`
--

INSERT INTO `bukkiallatok` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Letszam`, `Veszelyezettseg`) VALUES
(1, 'Rovarok', 'Álolaszsáska', 'Bükki Nemzeti Park', 20000, 'Veszélyeztetett'),
(2, 'Kétéltűek', 'Alpesi Gőte', 'Bükki Nemzeti Park', 10000, 'Fokozottan védett'),
(3, 'Emlősök', 'Barna Medve', 'Bükki Nemzeti Park', 300, 'Veszélyeztetett'),
(4, 'Madarak', 'Békászó Sas', 'Bükki Nemzeti Park', 5000, 'Fokozottan védett'),
(5, 'Emlősök', 'Farkas', 'Bükki Nemzeti Park', 10000, 'Kevésbé veszélyeztetett'),
(6, 'Madarak', 'Fehérhétú Fakopáncs', 'Bükki Nemzeti Park', 5000, 'Fokozottan védett'),
(7, 'Rovarok', 'Hegyi Szitakötő', 'Bükki Nemzeti Park', 20000, 'Fokozottan védett'),
(8, 'Emlősök', 'Hiúz', 'Bükki Nemzeti Park', 8000, 'Fokozottan védett'),
(9, 'Rovarok', 'Skarlátbogár', 'Bükki Nemzeti Park', 6000, 'Veszélyeztetett'),
(10, 'Madarak', 'Uráli Bagoly', 'Bükki Nemzeti Park', 7000, 'Fokozottan védett'),
(11, 'Hüllők', 'Vöröshasú Unka', 'Bükki Nemzeti Park', 12000, 'Kevésbé veszélyeztetett'),
(12, 'Hüllők', 'Sárgahasú Unka', 'Bükki Nemzeti Park', 11000, 'Kevésbé veszélyeztetett');

-- --------------------------------------------------------

--
-- Table structure for table `bukkinoveny`
--

CREATE TABLE `bukkinoveny` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL,
  `Viragzas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bukkinoveny`
--

INSERT INTO `bukkinoveny` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Veszelyezettseg`, `Viragzas`) VALUES
(1, 'Növények', 'Pirosló Hunyor', 'Bükki Nemzeti Park', 'Védett', 'Nyár'),
(2, 'Növények', 'Nadragulya', 'Bükki Nemzeti Park', 'Védett', 'Nyár'),
(3, 'Növények', 'Bürök', 'Bükki Nemzeti Park', 'Védett', 'Nyár'),
(4, 'Növények', 'Sisakvirág', 'Bükki Nemzeti Park', 'Védett', 'Nyár');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `donation-id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `donation_option` varchar(255) NOT NULL,
  `donation_option2` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `cvc` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dunad`
--

CREATE TABLE `dunad` (
  `ID` int(11) NOT NULL,
  `novenyID` int(11) NOT NULL,
  `allatID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dunadallatok`
--

CREATE TABLE `dunadallatok` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Letszam` int(11) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dunadallatok`
--

INSERT INTO `dunadallatok` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Letszam`, `Veszelyezettseg`) VALUES
(1, 'Halfaj', 'Kecsege', 'Duna-Dráva Nemzeti Park', 60000, 'Nem veszélyeztetett'),
(2, 'Halfaj', 'Menyhal', 'Duna-Dráva Nemzeti Park', 80000, 'Nem veszélyeztetett'),
(3, 'Hüllők', ' Vízisikló', 'Duna-Dráva Nemzeti Park', 75000, 'Nem veszélyeztetett'),
(4, 'Hüllők', 'Mocsári Teknős', 'Duna-Dráva Nemzeti Park', 2000, 'Fokozottan veszélyeztetett'),
(5, 'Madarak', 'Fekete Gólya', 'Duna-Dráva Nemzeti Park', 1000, 'Veszélyeztetett'),
(6, 'Madarak', 'Rétisas', 'Duna-Dráva Nemzeti Park', 2000, 'Veszélyeztetett'),
(7, 'Madarak', 'Kis Kócsag', 'Duna-Dráva Nemzeti Park', 120, 'Fokozottan védett'),
(8, 'Madarak', 'Bakcsók', 'Duna-Dráva Nemzeti Park', 250, 'Védett'),
(9, 'Emlősök', 'Vidra', 'Duna-Dráva Nemzeti Park', 30, 'Fokozottan védett');

-- --------------------------------------------------------

--
-- Table structure for table `dunadnoveny`
--

CREATE TABLE `dunadnoveny` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL,
  `Viragzas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dunadnoveny`
--

INSERT INTO `dunadnoveny` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Veszelyezettseg`, `Viragzas`) VALUES
(1, 'Növények', 'Bánáti Bazsarózsa', 'Duna-Dráva Nemzeti Park', 'Nem védett', 'Tavasz'),
(2, 'Növények', 'Fekete Galagonya', 'Duna-Dráva Nemzeti Park', 'Nem védett', 'Tavasz'),
(3, 'Növények', 'Szarvasbangó', 'Duna-Dráva Nemzeti Park', 'Nem védett', 'Nyár'),
(4, 'Növények', 'Majomkosbor', 'Duna-Dráva Nemzeti Park', 'Védett', 'Nyár'),
(5, 'Növények', 'Aldrovanda', 'Duna-Dráva Nemzeti Park', 'Védett', 'Nyár'),
(6, 'Növények', 'Vidrafű', 'Duna-Dráva Nemzeti Park', 'Védett', 'Tavasz'),
(7, 'Növények', 'Mételyfű', 'Duna-Dráva Nemzeti Park', 'Védett', 'Tavasz'),
(8, 'Növények', 'Békaliliom', 'Duna-Dráva Nemzeti Park', 'Védett', 'Tavasz'),
(9, 'Növények', 'Vizi Lófark', 'Duna-Dráva Nemzeti Park', 'Védett', 'Nyár'),
(10, 'Növények', 'Magyar Kikerics', 'Duna-Dráva Nemzeti Park', 'Védett', 'Tavasz'),
(11, 'Növények', 'Bakszarvú Lepkeszeg', 'Duna-Dráva Nemzeti Park', 'Védett', 'Nyár'),
(12, 'Növények', 'Magyar Méreggyilok', 'Duna-Dráva Nemzeti Park', 'Védett', 'Nyár'),
(13, 'Növények', 'Szalmagyopár', 'Duna-Dráva Nemzeti Park', 'Védett', 'Nyár');

-- --------------------------------------------------------

--
-- Table structure for table `dunai`
--

CREATE TABLE `dunai` (
  `ID` int(11) NOT NULL,
  `novenyID` int(11) NOT NULL,
  `allatID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dunaiallatok`
--

CREATE TABLE `dunaiallatok` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Letszam` int(11) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dunaiallatok`
--

INSERT INTO `dunaiallatok` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Letszam`, `Veszelyezettseg`) VALUES
(1, 'Madarak', 'Balkáni Gerle', 'Duna-Ipoly Nemzeti Park', 10000, 'Kevésbé veszélyeztetett'),
(2, 'Madarak', 'Barátposzáta', 'Duna-Ipoly Nemzeti Park', 1000000, 'Nem veszélyeztetett'),
(3, 'Madarak', 'Barázdabillegető', 'Duna-Ipoly Nemzeti Park', 25000, 'Nem veszélyeztetett'),
(4, 'Madarak', 'Bölömbika', 'Duna-Ipoly Nemzeti Park', 35000, 'Nem veszélyeztetett'),
(5, 'Madarak', 'Búbospacsirta', 'Duna-Ipoly Nemzeti Park', 27000, 'Nem veszélyeztetett'),
(6, 'Madarak', 'Csonttollú', 'Duna-Ipoly Nemzeti Park', 42000, 'Nem veszélyeztetett'),
(7, 'Madarak', 'Csuszka', 'Duna-Ipoly Nemzeti Park', 55000, 'Nem veszélyeztetett'),
(8, 'Madarak', 'Dankasirály', 'Duna-Ipoly Nemzeti Park', 78000, 'Nem veszélyeztetett'),
(9, 'Madarak', 'Egerészölyv', 'Duna-Ipoly Nemzeti Park', 58000, 'Nem veszélyeztetett'),
(10, 'Madarak', 'Fenyőrigó', 'Duna-Ipoly Nemzeti Park', 69000, 'Nem veszélyeztetett'),
(11, 'Madarak', 'Fülemüle', 'Duna-Ipoly Nemzeti Park', 72000, 'Nem veszélyeztetett'),
(12, 'Madarak', 'Fürj', 'Duna-Ipoly Nemzeti Park', 95000, 'Nem veszélyeztetett'),
(13, 'Madarak', 'Haris', 'Duna-Ipoly Nemzeti Park', 87000, 'Nem veszélyeztetett');

-- --------------------------------------------------------

--
-- Table structure for table `dunainoveny`
--

CREATE TABLE `dunainoveny` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL,
  `Viragzas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dunainoveny`
--

INSERT INTO `dunainoveny` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Veszelyezettseg`, `Viragzas`) VALUES
(1, 'Növények', 'Bogáncs', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Tavasz'),
(3, 'Növények', 'Csattanó Maszlag', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Nyár'),
(4, 'Növények', 'Erdei Madársóska', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Tavasz'),
(5, 'Növények', 'Erdei Nenyúljhozzám', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Tavasz'),
(6, 'Növények', 'Farkasalma', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Nyár'),
(7, 'Növények', 'Fehér Akác', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Tavasz'),
(8, 'Növények', 'Foltos Kontyvirág', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Nyár'),
(9, 'Növények', 'Fűz', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Nyár'),
(10, 'Növények', 'Gyertyán', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Nyár'),
(11, 'Növények', 'Kökény', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Nyár'),
(12, 'Növények', 'Közönséges Cickafark', 'Duna-Ipoly Nemzeti Park', 'Védett', 'Tavasz'),
(13, 'Növények', 'Leánykökörcsin', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Tavasz'),
(14, 'Növények', 'Mezei Zsálya', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Tavasz'),
(15, 'Növények', 'Nadragulya', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Nyár'),
(16, 'Növények', 'Nagyezerjófű', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Nyár'),
(17, 'Növények', 'Nehézszagú Gólyaorr', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Nyár'),
(18, 'Növények', 'Odvas Keltike', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Tavasz'),
(19, 'Növények', 'Ökörfarkkóró', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Nyár'),
(20, 'Növények', 'Orvosi Salamonpecsét', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Tavasz'),
(21, 'Növények', 'Orvosi Tüdőfű', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Tavasz'),
(22, 'Növények', 'Őszi Kikerics', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Nyár'),
(23, 'Növények', 'Salátaboglárka', 'Duna-Ipoly Nemzeti Park', 'Nem védett', 'Tavasz');

-- --------------------------------------------------------

--
-- Table structure for table `ferto`
--

CREATE TABLE `ferto` (
  `ID` int(11) NOT NULL,
  `novenyID` int(11) NOT NULL,
  `allatID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fertoallatok`
--

CREATE TABLE `fertoallatok` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Letszam` int(11) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fertoallatok`
--

INSERT INTO `fertoallatok` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Letszam`, `Veszelyezettseg`) VALUES
(1, 'Emlősök', 'Nyugati Piszedenevér', 'Fertő-Hanság Nemzeti Park', 200, 'Fokozottan védett'),
(2, 'Emlősök', 'Vadmacska', 'Fertő-Hanság Nemzeti Park', 228, 'Fokozottan védett'),
(3, 'Emlősök', 'Közönséges Vidra', 'Fertő-Hanság Nemzeti Park', 200, 'Fokozottan védett'),
(4, 'Emlősök', 'Északi Pocok', 'Fertő-Hanság Nemzeti Park', 210, 'Fokozottan védett'),
(5, 'Emlősök', 'Nagyfülű Denevér', 'Fertő-Hanság Nemzeti Park', 243, 'Fokozottan védett'),
(6, 'Emlősök', 'Tavi Denevér', 'Fertő-Hanság Nemzeti Park', 241, 'Fokozottan védett'),
(7, 'Emlősök', 'Csonkafülű Denevér', 'Fertő-Hanság Nemzeti Park', 227, 'Fokozottan védett'),
(8, 'Emlősök', 'Kereknyergű Patkósdenevér', 'Fertő-Hanság Nemzeti Park', 230, 'Fokozottan védett'),
(9, 'Emlősök', 'Ürge', 'Fertő-Hanság Nemzeti Park', 217, 'Fokozottan védett'),
(10, 'Emlősök', 'Keleti Sün', 'Fertő-Hanság Nemzeti Park', 168, 'Védett'),
(11, 'Emlősök', 'Mezei Cickány', 'Fertő-Hanság Nemzeti Park', 179, 'Védett'),
(12, 'Emlősök', 'Keleti Cickány', 'Fertő-Hanság Nemzeti Park', 186, 'Védett'),
(13, 'Emlősök', 'Erdei Cickány', 'Fertő-Hanság Nemzeti Park', 159, 'Védett'),
(14, 'Emlősök', 'Törpecickány', 'Fertő-Hanság Nemzeti Park', 140, 'Védett'),
(15, 'Emlősök', 'Miller-Vízicickány', 'Fertő-Hanság Nemzeti Park', 195, 'Védett'),
(16, 'Emlősök', 'Közönséges Vízicickány', 'Fertő-Hanság Nemzeti Park', 193, 'Védett'),
(17, 'Emlősök', 'Közönséges Vakond', 'Fertő-Hanság Nemzeti Park', 187, 'Védett'),
(18, 'Emlősök', 'Kis Patkósdenevér', 'Fertő-Hanság Nemzeti Park', 115, 'Védett'),
(19, 'Emlősök', 'Közönséges Késeidenevér', 'Fertő-Hanság Nemzeti Park', 120, 'Védett'),
(20, 'Emlősök', 'Fehérszélű Törpedenevér', 'Fertő-Hanság Nemzeti Park', 149, 'Védett');

-- --------------------------------------------------------

--
-- Table structure for table `fertonoveny`
--

CREATE TABLE `fertonoveny` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL,
  `Viragzas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fertonoveny`
--

INSERT INTO `fertonoveny` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Veszelyezettseg`, `Viragzas`) VALUES
(1, 'Növények', 'Csengettyűvirág', 'Fertő-Hanság Nemzeti Park', 'Fokozottan védett', 'Tavasz'),
(2, 'Növények', 'Rigópohár', 'Fertő-Hanság Nemzeti Park', 'Fokozottan védett', 'Tavasz'),
(3, 'Növények', 'Halvány ujjaskosbor', 'Fertő-Hanság Nemzeti Park', 'Fokozottan védett', 'Tavasz'),
(4, 'Növények', 'Adriai sallangvirág', 'Fertő-Hanság Nemzeti Park', 'Fokozottan védett', 'Nyár'),
(5, 'Növények', 'Tüzes liliom', 'Fertő-Hanság Nemzeti Park', 'Fokozottan védett', 'Tavasz'),
(6, 'Növények', 'Hagymaburok', 'Fertő-Hanság Nemzeti Park', 'Fokozottan védett', 'Nyár'),
(7, 'Növények', 'Méhbangó', 'Fertő-Hanság Nemzeti Park', 'Fokozottan védett', 'Nyár'),
(8, 'Növények', 'Légybangó', 'Fertő-Hanság Nemzeti Park', 'Fokozottan védett', 'Nyár'),
(9, 'Növények', 'Pókbangó', 'Fertő-Hanság Nemzeti Park', 'Fokozottan védett', 'Tavasz'),
(10, 'Növények', 'Lápi hízóka', 'Fertő-Hanság Nemzeti Park', 'Fokozottan védett', 'Tavasz'),
(11, 'Növények', 'Lisztes kankalin', 'Fertő-Hanság Nemzeti Park', 'Fokozottan védett', 'Tavasz'),
(12, 'Növények', 'Bugás veronika', 'Fertő-Hanság Nemzeti Park', 'Fokozottan védett', 'Nyár'),
(13, 'Növények', 'Kálmos', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(14, 'Növények', 'Tavaszi Hérics', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(15, 'Növények', 'Konkoly', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Nyár'),
(16, 'Növények', 'Havasi Palástfű', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Nyár'),
(17, 'Növények', 'Szarvas Hagyma', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(18, 'Növények', 'Bunkós Hagyma', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(19, 'Növények', 'Illatos Hagyma', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(20, 'Növények', 'Vitézvirág', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(21, 'Növények', 'Erdei Szellőrózsa', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Nyár'),
(22, 'Növények', 'Kúszó Zeller', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Nyár'),
(23, 'Növények', 'Harangláb', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Nyár'),
(24, 'Növények', 'Tündérfürt', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(25, 'Növények', 'Fekete Fodorka', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(26, 'Növények', 'Csillagőszirózsa', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(27, 'Növények', 'Pettyegetett Őszirózsa', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(28, 'Növények', 'Érdes Csüdfű', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(29, 'Növények', 'Szártalan Csüdfű', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(30, 'Növények', 'Barázdás Csűdfű', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(31, 'Növények', 'Völgycsillag', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(32, 'Növények', 'Szőrös Nyír', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Nyár'),
(33, 'Növények', 'Gyíkpohár', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Nyár'),
(34, 'Növények', 'Kis Holdruta', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Nyár'),
(35, 'Növények', 'Fűzlevelű Ökörszem', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Nyár'),
(36, 'Növények', 'Tarka Nádtippan', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(37, 'Növények', 'Fehér Sás', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(38, 'Növények', 'Rostostövű Sás', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Tavasz'),
(39, 'Növények', 'Buxbaum-Sás', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Nyár'),
(40, 'Növények', 'Lápi Sás', 'Fertő-Hanság Nemzeti Park', 'Védett', 'Nyár');

-- --------------------------------------------------------

--
-- Table structure for table `horto`
--

CREATE TABLE `horto` (
  `ID` int(11) NOT NULL,
  `novenyID` int(11) NOT NULL,
  `allatID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hortoallatok`
--

CREATE TABLE `hortoallatok` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Letszam` int(11) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hortoallatok`
--

INSERT INTO `hortoallatok` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Letszam`, `Veszelyezettseg`) VALUES
(1, 'Emlősök', 'Vadló', 'Hortobágyi Nemzeti Park', 10000, 'Kevésbé veszélyeztetett'),
(2, 'Emlősök', 'Vaddisznó', 'Hortobágyi Nemzeti Park', 20000, 'Nem veszélyeztetett'),
(3, 'Emlősök', 'Őz', 'Hortobágyi Nemzeti Park', 25000, 'Nem veszélyeztetett'),
(4, 'Emlősök', 'Őstulok', 'Hortobágyi Nemzeti Park', 30000, 'Kevésbé veszélyeztetett'),
(5, 'Emlősök', 'Szarvas', 'Hortobágyi Nemzeti Park', 22000, 'Kevésbé veszélyeztetett'),
(6, 'Madarak', 'Kanadai Daru', 'Hortobágyi Nemzeti Park', 5000, 'Védett'),
(7, 'Madarak', 'Himalájai Füzike', 'Hortobágyi Nemzeti Park', 3000, 'Védett'),
(8, 'Madarak', 'Lilebíbic', 'Hortobágyi Nemzeti Park', 11200, 'Védett'),
(9, 'Madarak', 'Kuvik', 'Hortobágyi Nemzeti Park', 1000, 'Védett'),
(10, 'Hüllők', 'Barna Varangy', 'Hortobágyi Nemzeti Park', 10000, 'Kevésbé veszélyeztetett');

-- --------------------------------------------------------

--
-- Table structure for table `hortonoveny`
--

CREATE TABLE `hortonoveny` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL,
  `Viragzas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hortonoveny`
--

INSERT INTO `hortonoveny` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Veszelyezettseg`, `Viragzas`) VALUES
(1, 'Növények', 'Mételyfű', 'Hortobágyi Nemzeti Park', 'Védett', 'Tavasz'),
(2, 'Növények', 'Henye Kunkor', 'Hortobágyi Nemzeti Park', 'Védett', 'Nyár'),
(3, 'Növények', 'Henye Vasfű', 'Hortobágyi Nemzeti Park', 'Védett', 'Nyár'),
(4, 'Növények', 'Cseplesz Látonya', 'Hortobágyi Nemzeti Park', 'Védett', 'Nyár'),
(5, 'Növények', 'Keskenylevelű Lórom', 'Hortobágyi Nemzeti Park', 'Védett', 'Tavasz'),
(6, 'Növények', 'Magyar Sóballa', 'Hortobágyi Nemzeti Park', 'Védett', 'Nyár'),
(7, 'Növények', 'Magyar Sóvirág', 'Hortobágyi Nemzeti Park', 'Védett', 'Tavasz'),
(8, 'Növények', 'Erdélyi Útifű', 'Hortobágyi Nemzeti Park', 'Védett', 'Nyár');

-- --------------------------------------------------------

--
-- Table structure for table `join`
--

CREATE TABLE `join` (
  `id` int(11) NOT NULL,
  `first_name` longtext NOT NULL,
  `last_name` longtext NOT NULL,
  `birth_date` varchar(30) NOT NULL,
  `location` varchar(255) NOT NULL,
  `parent_first_name` longtext NOT NULL,
  `parent_last_name` longtext NOT NULL,
  `country` longtext NOT NULL,
  `county` longtext NOT NULL,
  `postal_code` int(4) NOT NULL,
  `city` longtext NOT NULL,
  `address1` varchar(30) NOT NULL,
  `address2` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kiskun`
--

CREATE TABLE `kiskun` (
  `ID` int(11) NOT NULL,
  `novenyID` int(11) NOT NULL,
  `allatID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kiskunallatok`
--

CREATE TABLE `kiskunallatok` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Letszam` int(11) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kiskunallatok`
--

INSERT INTO `kiskunallatok` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Letszam`, `Veszelyezettseg`) VALUES
(1, 'Puhatestűek', 'Sima Tányércsiga', 'Kiskunsági Nemzeti Park', 10000, 'Nem veszélyeztetett'),
(2, 'Puhatestűek', 'Hamis Gömbkagyló', 'Kiskunsági Nemzeti Park', 9000, 'Nem veszélyeztetett'),
(3, 'Kétéltűek', 'Mocsári Béka', 'Kiskunsági Nemzeti Park', 12000, 'Nem veszélyeztetett'),
(4, 'Hüllők', 'Rákosi Vipera', 'Kiskunsági Nemzeti Park', 3000, 'Nem veszélyeztetett'),
(5, 'Hüllők', 'Mocsári Teknős', 'Kiskunsági Nemzeti Park', 1700, 'Fokozottan veszélyeztetett'),
(6, 'Emlősök', 'Közönséges Ürge', 'Kiskunsági Nemzeti Park', 5000, 'Nem veszélyeztetett'),
(7, 'Emlősök', 'Tavi Denevér', 'Kiskunsági Nemzeti Park', 550, 'Fokozottan védett'),
(8, 'Madarak', 'Kárókatona', 'Kiskunsági Nemzeti Park', 340, 'Fokozottan védett'),
(9, 'Madarak', 'Kis Kárókatona', 'Kiskunsági Nemzeti Park', 144, 'Fokozottan védett'),
(10, 'Madarak', 'Bakcsó', 'Kiskunsági Nemzeti Park', 506, 'Fokozottan védett'),
(11, 'Madarak', 'Üstökösgém', 'Kiskunsági Nemzeti Park', 172, 'Fokozottan védett'),
(12, 'Madarak', 'Kis Kócsag', 'Kiskunsági Nemzeti Park', 182, 'Fokozottan védett'),
(13, 'Madarak', 'Nagy Kócsag', 'Kiskunsági Nemzeti Park', 1506, 'Fokozottan védett'),
(14, 'Madarak', 'Szürke Gém', 'Kiskunsági Nemzeti Park', 616, 'Fokozottan védett'),
(15, 'Madarak', 'Vörös Gém', 'Kiskunsági Nemzeti Park', 150, 'Fokozottan védett'),
(16, 'Madarak', 'Batla', 'Kiskunsági Nemzeti Park', 2, 'Fokozottan védett'),
(17, 'Madarak', 'Kanalasgém', 'Kiskunsági Nemzeti Park', 590, 'Fokozottan védett'),
(18, 'Madarak', 'Dankasirály', 'Kiskunsági Nemzeti Park', 4550, 'Fokozottan védett'),
(19, 'Madarak', 'Szerecsensirály', 'Kiskunsági Nemzeti Park', 1104, 'Fokozottan védett'),
(20, 'Madarak', 'Székicsér', 'Kiskunsági Nemzeti Park', 20, 'Fokozottan védett'),
(21, 'Madarak', 'Kerecsensólyom', 'Kiskunsági Nemzeti Park', 22, 'Fokozottan védett'),
(22, 'Madarak', 'Kék Vércse', 'Kiskunsági Nemzeti Park', 290, 'Fokozottan védett'),
(23, 'Madarak', 'Haris', 'Kiskunsági Nemzeti Park', 8, 'Fokozottan védett'),
(24, 'Madarak', 'Barna Kánya', 'Kiskunsági Nemzeti Park', 24, 'Fokozottan védett'),
(25, 'Madarak', 'Parlagi Sas', 'Kiskunsági Nemzeti Park', 12, 'Fokozottan védett'),
(26, 'Madarak', 'Hamvas Rétihéja', 'Kiskunsági Nemzeti Park', 36, 'Fokozottan védett'),
(27, 'Madarak', 'Kígyászölyv', 'Kiskunsági Nemzeti Park', 14, 'Fokozottan védett'),
(28, 'Madarak', 'Rétisas', 'Kiskunsági Nemzeti Park', 74, 'Fokozottan védett'),
(29, 'Madarak', 'Fekete Gólya', 'Kiskunsági Nemzeti Park', 32, 'Fokozottan védett'),
(30, 'Madarak', 'Ugartyúk ', 'Kiskunsági Nemzeti Park', 402, 'Fokozottan védett');

-- --------------------------------------------------------

--
-- Table structure for table `kiskunnoveny`
--

CREATE TABLE `kiskunnoveny` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL,
  `Viragzas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kiskunnoveny`
--

INSERT INTO `kiskunnoveny` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Veszelyezettseg`, `Viragzas`) VALUES
(1, 'Növények', 'Illatos Csengettyűvirág', 'Kiskunsági Nemzeti Park', 'Védett', 'Nyár'),
(2, 'Növények', 'Kúszó Zeller', 'Kiskunsági Nemzeti Park', 'Védett', 'Nyár'),
(3, 'Növények', 'Gyapjas Csüdfű ', 'Kiskunsági Nemzeti Park', 'Védett', 'Tavasz'),
(4, 'Növények', 'Kisfészkű Aszat', 'Kiskunsági Nemzeti Park', 'Védett', 'Nyár'),
(5, 'Növények', 'Homoki Kikerics', 'Kiskunsági Nemzeti Park', 'Védett', 'Tavasz'),
(6, 'Növények', 'Tarka Sáfrány', 'Kiskunsági Nemzeti Park', 'Védett', 'Tavasz'),
(7, 'Növények', 'Tartós Szegfű', 'Kiskunsági Nemzeti Park', 'Védett', 'Tavasz'),
(8, 'Növények', 'Hóvirág', 'Kiskunsági Nemzeti Park', 'Védett', 'Nyár'),
(9, 'Növények', 'Kornistárnics', 'Kiskunsági Nemzeti Park', 'Védett', 'Nyár'),
(10, 'Növények', 'Homoki Nőszirom', 'Kiskunsági Nemzeti Park', 'Védett', 'Nyár'),
(11, 'Növények', 'Vidrafű', 'Kiskunsági Nemzeti Park', 'Védett', 'Tavasz'),
(12, 'Növények', 'Légybangó', 'Kiskunsági Nemzeti Park', 'Védett', 'Nyár'),
(13, 'Növények', 'Óriás Útifű', 'Kiskunsági Nemzeti Park', 'Védett', 'Nyár');

-- --------------------------------------------------------

--
-- Table structure for table `koros`
--

CREATE TABLE `koros` (
  `ID` int(11) NOT NULL,
  `novenyID` int(11) NOT NULL,
  `allatID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `korosallatok`
--

CREATE TABLE `korosallatok` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Letszam` int(11) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korosallatok`
--

INSERT INTO `korosallatok` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Letszam`, `Veszelyezettseg`) VALUES
(1, 'Emlősök', 'Nyest', 'Körös-Maros Nemzeti Park', 15000, 'Nem veszélyeztetett'),
(2, 'Madarak', 'Uhu', 'Körös-Maros Nemzeti Park', 1500, 'Fokozottan védett'),
(3, 'Madarak', 'Uráli Bagoly', 'Körös-Maros Nemzeti Park', 7000, 'Fokozottan védett'),
(4, 'Emlősök', 'Nyestkutya ', 'Körös-Maros Nemzeti Park', 12000, 'Nem veszélyeztetett'),
(5, 'Emlősök', 'Aranysakál', 'Körös-Maros Nemzeti Park', 25000, 'Nem veszélyeztetett'),
(6, 'Emlősök', 'Gímszarvas', 'Körös-Maros Nemzeti Park', 13000, 'Nem veszélyeztetett'),
(7, 'Emlősök', 'Őz', 'Körös-Maros Nemzeti Park', 22000, 'Nem veszélyeztetett'),
(8, 'Emlősök', 'Dámszarvas', 'Körös-Maros Nemzeti Park', 11500, 'Nem veszélyeztetett'),
(9, 'Emlősök', 'Vaddisznó', 'Körös-Maros Nemzeti Park', 23000, 'Nem veszélyeztetett'),
(10, 'Emlősök', 'Róka', 'Körös-Maros Nemzeti Park', 12000, 'Nem veszélyeztetett'),
(11, 'Emlősök', 'Európai Bölény', 'Körös-Maros Nemzeti Park', 500, 'Fokozottan veszélyeztetett'),
(12, 'Emlősök', 'Jávorszarvas', 'Körös-Maros Nemzeti Park', 2500, 'Nem veszélyeztetett'),
(13, 'Emlősök', 'Szürke Farkas', 'Körös-Maros Nemzeti Park', 2200, 'Nem veszélyeztetett'),
(14, 'Madarak', 'Fakókeselyű', 'Körös-Maros Nemzeti Park', 100, 'Fokozottan védett');

-- --------------------------------------------------------

--
-- Table structure for table `korosnoveny`
--

CREATE TABLE `korosnoveny` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL,
  `Viragzas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korosnoveny`
--

INSERT INTO `korosnoveny` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Veszelyezettseg`, `Viragzas`) VALUES
(1, 'Növények', 'Fűzlevelű Kutyatej', 'Körös-Maros Nemzeti Park', 'Nem védett', 'Tavasz'),
(2, 'Növények', 'Hibrid Zsálya', 'Körös-Maros Nemzeti Park', 'Nem védett', 'Tavasz'),
(3, 'Növények', 'Közönséges Borkóró', 'Körös-Maros Nemzeti Park', 'Nem védett', 'Nyár'),
(4, 'Növények', 'Csuklyás Ibolya', 'Körös-Maros Nemzeti Park', 'Nem védett', 'Nyár'),
(5, 'Növények', 'Sárma', 'Körös-Maros Nemzeti Park', 'Védett', 'Nyár'),
(6, 'Növények', 'Buglyos Boglárka', 'Körös-Maros Nemzeti Park', 'Védett', 'Tavasz'),
(7, 'Növények', 'Sziki Boglárka ', 'Körös-Maros Nemzeti Park', 'Védett', 'Tavasz'),
(8, 'Növények', 'Kisfészkű Aszat', 'Körös-Maros Nemzeti Park', 'Védett', 'Nyár'),
(9, 'Növények', 'Gumós Macskahere', 'Körös-Maros Nemzeti Park', 'Védett', 'Tavasz'),
(10, 'Növények', 'Magyar Szegfű', 'Körös-Maros Nemzeti Park', 'Nem védett', 'Nyár'),
(11, 'Növények', 'Réti Őszirózsa', 'Körös-Maros Nemzeti Park', 'Védett', 'Tavasz');

-- --------------------------------------------------------

--
-- Table structure for table `orsegi`
--

CREATE TABLE `orsegi` (
  `ID` int(11) NOT NULL,
  `novenyID` int(11) NOT NULL,
  `allatID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orsegiallat`
--

CREATE TABLE `orsegiallat` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Letszam` int(11) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orsegiallat`
--

INSERT INTO `orsegiallat` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Letszam`, `Veszelyezettseg`) VALUES
(1, 'Madarak', 'Fekete Gólya', 'Őrségi Nemzeti Park', 1000, 'Veszélyeztetett'),
(2, 'Madarak', 'Darázsölyv', 'Őrségi Nemzeti Park', 2000, 'Kevésbé veszélyeztetett'),
(3, 'Madarak', 'Kék Galamb', 'Őrségi Nemzeti Park', 5000, 'Kevésbé veszélyeztetett'),
(4, 'Madarak', 'Kormos Légykapó', 'Őrségi Nemzeti Park', 3000, 'Kevésbé veszélyeztetett'),
(5, 'Madarak', 'Tüzesfejű Királyka', 'Őrségi Nemzeti Park', 6000, 'Kevésbé veszélyeztetett'),
(6, 'Madarak', 'Hegyi Billegető', 'Őrségi Nemzeti Park', 2500, 'Kevésbé veszélyeztetett'),
(7, 'Madarak', 'Búbosbanka', 'Őrségi Nemzeti Park', 1500, 'Kevésbé veszélyeztetett'),
(8, 'Emlősök', 'Fehérszélű Denevér', 'Őrségi Nemzeti Park', 8000, 'Kevésbé veszélyeztetett'),
(9, 'Emlősök', 'Horgasszőrű Denevér', 'Őrségi Nemzeti Park', 7000, 'Kevésbé veszélyeztetett'),
(10, 'Kétéltűek', 'Gyepi Béka', 'Őrségi Nemzeti Park', 10000, 'Kevésbé veszélyeztetett'),
(11, 'Rovarok', 'Futrinka', 'Őrségi Nemzeti Park', 20000, 'Nem veszélyeztetett'),
(12, 'Puhatestűek', 'Folyami Kagyló', 'Őrségi Nemzeti Park', 9000, 'Kevésbé veszélyeztetett'),
(13, 'Rovarok', 'Csermely Szitakötő', 'Őrségi Nemzeti Park', 15000, 'Kevésbé veszélyeztetett'),
(14, 'Rovarok', 'Szarvasbogár', 'Őrségi Nemzeti Park', 6900, 'Kevésbé veszélyeztetett'),
(15, 'Halfaj', 'Dunai Ingola', 'Őrségi Nemzeti Park', 8000, 'Kevésbé veszélyeztetett'),
(16, 'Halfaj', 'Német Bucó', 'Őrségi Nemzeti Park', 10000, 'Kevésbé veszélyeztetett'),
(17, 'Emlősök', 'Vidra', 'Őrségi Nemzeti Park', 20, 'Fokozottan védett'),
(18, 'Emlősök', 'Nyuszt', 'Őrségi Nemzeti Park', 1500, 'Kevésbé veszélyeztetett'),
(19, 'Emlősök', 'Európai Bölény', 'Őrségi Nemzeti Park', 1000, 'Fokozottan veszélyeztetett');

-- --------------------------------------------------------

--
-- Table structure for table `orseginoveny`
--

CREATE TABLE `orseginoveny` (
  `ID` int(11) NOT NULL,
  `Faj` varchar(255) DEFAULT NULL,
  `Megnevezes` varchar(255) DEFAULT NULL,
  `Hely` varchar(255) DEFAULT NULL,
  `Veszelyezettseg` varchar(255) DEFAULT NULL,
  `Viragzas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orseginoveny`
--

INSERT INTO `orseginoveny` (`ID`, `Faj`, `Megnevezes`, `Hely`, `Veszelyezettseg`, `Viragzas`) VALUES
(1, 'Növények', 'Kereklevelű körtike', 'Őrségi Nemzeti Park', 'Védett', 'Nyár'),
(2, 'Növények', 'Fekete Áfonya', 'Őrségi Nemzeti Park', 'Kevésbé veszélyeztetett', 'Tavasz'),
(3, 'Növények', 'Ernyős Körtike', 'Őrségi Nemzeti Park', 'Kevésbé veszélyeztetett', 'Nyár'),
(4, 'Növények', 'Kardos Madársisak', 'Őrségi Nemzeti Park', 'Kevésbé veszélyeztetett', 'Tavasz'),
(5, 'Növények', 'Kétlevelű Sarkvirág', 'Őrségi Nemzeti Park', 'Kevésbé veszélyeztetett', 'Tavasz'),
(6, 'Növények', 'Nőszőfű', 'Őrségi Nemzeti Park', 'Kevésbé veszélyeztetett', 'Nyár'),
(7, 'Növények', 'Kakasmandikó', 'Őrségi Nemzeti Park', 'Védett', 'Nyár');

-- --------------------------------------------------------

--
-- Table structure for table `terulet`
--

CREATE TABLE `terulet` (
  `ID` int(11) NOT NULL,
  `aggtelek` int(11) NOT NULL,
  `balatonfelv` int(11) NOT NULL,
  `bukk` int(11) NOT NULL,
  `dunad` int(11) NOT NULL,
  `ferto` int(11) NOT NULL,
  `horto` int(11) NOT NULL,
  `kiskun` int(11) NOT NULL,
  `koros` int(11) NOT NULL,
  `orsegi` int(11) NOT NULL,
  `dunai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `color_value` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aggtallatok`
--
ALTER TABLE `aggtallatok`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aggtelek`
--
ALTER TABLE `aggtelek`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `novenyID` (`novenyID`,`allatID`),
  ADD KEY `allatID` (`allatID`);

--
-- Indexes for table `aggtnoveny`
--
ALTER TABLE `aggtnoveny`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `balatonfelallat`
--
ALTER TABLE `balatonfelallat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `balatonfelnoveny`
--
ALTER TABLE `balatonfelnoveny`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `balatonfelv`
--
ALTER TABLE `balatonfelv`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `novenyID` (`novenyID`,`allatID`),
  ADD KEY `allatID` (`allatID`);

--
-- Indexes for table `bukk`
--
ALTER TABLE `bukk`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `novenyID` (`novenyID`,`allatID`),
  ADD KEY `allatID` (`allatID`);

--
-- Indexes for table `bukkiallatok`
--
ALTER TABLE `bukkiallatok`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bukkinoveny`
--
ALTER TABLE `bukkinoveny`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donation-id`),
  ADD KEY `date` (`date`),
  ADD KEY `email` (`email`,`email2`),
  ADD KEY `email2` (`email2`);

--
-- Indexes for table `dunad`
--
ALTER TABLE `dunad`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `novenyID` (`novenyID`,`allatID`),
  ADD KEY `allatID` (`allatID`);

--
-- Indexes for table `dunadallatok`
--
ALTER TABLE `dunadallatok`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dunadnoveny`
--
ALTER TABLE `dunadnoveny`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dunai`
--
ALTER TABLE `dunai`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `novenyID` (`novenyID`,`allatID`),
  ADD KEY `allatID` (`allatID`);

--
-- Indexes for table `dunaiallatok`
--
ALTER TABLE `dunaiallatok`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dunainoveny`
--
ALTER TABLE `dunainoveny`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ferto`
--
ALTER TABLE `ferto`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `novenyID` (`novenyID`,`allatID`),
  ADD KEY `allatID` (`allatID`);

--
-- Indexes for table `fertoallatok`
--
ALTER TABLE `fertoallatok`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fertonoveny`
--
ALTER TABLE `fertonoveny`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `horto`
--
ALTER TABLE `horto`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `novenyID` (`novenyID`,`allatID`),
  ADD KEY `allatID` (`allatID`);

--
-- Indexes for table `hortoallatok`
--
ALTER TABLE `hortoallatok`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hortonoveny`
--
ALTER TABLE `hortonoveny`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `join`
--
ALTER TABLE `join`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `kiskun`
--
ALTER TABLE `kiskun`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `novenyID` (`novenyID`,`allatID`),
  ADD KEY `allatID` (`allatID`);

--
-- Indexes for table `kiskunallatok`
--
ALTER TABLE `kiskunallatok`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kiskunnoveny`
--
ALTER TABLE `kiskunnoveny`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `koros`
--
ALTER TABLE `koros`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `novenyID` (`novenyID`,`allatID`),
  ADD KEY `allatID` (`allatID`);

--
-- Indexes for table `korosallatok`
--
ALTER TABLE `korosallatok`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `korosnoveny`
--
ALTER TABLE `korosnoveny`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orsegi`
--
ALTER TABLE `orsegi`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `novenyID` (`novenyID`,`allatID`),
  ADD KEY `allatID` (`allatID`);

--
-- Indexes for table `orsegiallat`
--
ALTER TABLE `orsegiallat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orseginoveny`
--
ALTER TABLE `orseginoveny`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `terulet`
--
ALTER TABLE `terulet`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `aggtelek` (`aggtelek`,`balatonfelv`,`bukk`,`dunad`,`ferto`,`horto`,`kiskun`,`koros`,`orsegi`),
  ADD KEY `horto` (`horto`),
  ADD KEY `dunai` (`dunai`),
  ADD KEY `balatonfelv` (`balatonfelv`),
  ADD KEY `bukk` (`bukk`),
  ADD KEY `dunad` (`dunad`),
  ADD KEY `ferto` (`ferto`),
  ADD KEY `kiskun` (`kiskun`),
  ADD KEY `koros` (`koros`),
  ADD KEY `orsegi` (`orsegi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aggtelek`
--
ALTER TABLE `aggtelek`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `balatonfelv`
--
ALTER TABLE `balatonfelv`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bukk`
--
ALTER TABLE `bukk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `donation-id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dunad`
--
ALTER TABLE `dunad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dunai`
--
ALTER TABLE `dunai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ferto`
--
ALTER TABLE `ferto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horto`
--
ALTER TABLE `horto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `join`
--
ALTER TABLE `join`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kiskun`
--
ALTER TABLE `kiskun`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `koros`
--
ALTER TABLE `koros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orsegi`
--
ALTER TABLE `orsegi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terulet`
--
ALTER TABLE `terulet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aggtelek`
--
ALTER TABLE `aggtelek`
  ADD CONSTRAINT `aggtelek_ibfk_1` FOREIGN KEY (`allatID`) REFERENCES `aggtallatok` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aggtelek_ibfk_2` FOREIGN KEY (`novenyID`) REFERENCES `aggtnoveny` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `balatonfelv`
--
ALTER TABLE `balatonfelv`
  ADD CONSTRAINT `balatonfelv_ibfk_1` FOREIGN KEY (`novenyID`) REFERENCES `balatonfelnoveny` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `balatonfelv_ibfk_2` FOREIGN KEY (`allatID`) REFERENCES `balatonfelallat` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bukk`
--
ALTER TABLE `bukk`
  ADD CONSTRAINT `bukk_ibfk_1` FOREIGN KEY (`allatID`) REFERENCES `bukkiallatok` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bukk_ibfk_2` FOREIGN KEY (`novenyID`) REFERENCES `bukkinoveny` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dunad`
--
ALTER TABLE `dunad`
  ADD CONSTRAINT `dunad_ibfk_1` FOREIGN KEY (`novenyID`) REFERENCES `dunadnoveny` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dunad_ibfk_2` FOREIGN KEY (`allatID`) REFERENCES `dunadallatok` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dunai`
--
ALTER TABLE `dunai`
  ADD CONSTRAINT `dunai_ibfk_1` FOREIGN KEY (`allatID`) REFERENCES `dunaiallatok` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dunai_ibfk_2` FOREIGN KEY (`novenyID`) REFERENCES `dunainoveny` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ferto`
--
ALTER TABLE `ferto`
  ADD CONSTRAINT `ferto_ibfk_1` FOREIGN KEY (`novenyID`) REFERENCES `fertonoveny` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ferto_ibfk_2` FOREIGN KEY (`allatID`) REFERENCES `fertoallatok` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `horto`
--
ALTER TABLE `horto`
  ADD CONSTRAINT `horto_ibfk_1` FOREIGN KEY (`novenyID`) REFERENCES `hortonoveny` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horto_ibfk_2` FOREIGN KEY (`allatID`) REFERENCES `hortoallatok` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kiskun`
--
ALTER TABLE `kiskun`
  ADD CONSTRAINT `kiskun_ibfk_1` FOREIGN KEY (`novenyID`) REFERENCES `kiskunnoveny` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kiskun_ibfk_2` FOREIGN KEY (`allatID`) REFERENCES `kiskunallatok` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `koros`
--
ALTER TABLE `koros`
  ADD CONSTRAINT `koros_ibfk_1` FOREIGN KEY (`allatID`) REFERENCES `korosallatok` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `koros_ibfk_2` FOREIGN KEY (`novenyID`) REFERENCES `korosnoveny` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orsegi`
--
ALTER TABLE `orsegi`
  ADD CONSTRAINT `orsegi_ibfk_1` FOREIGN KEY (`allatID`) REFERENCES `orsegiallat` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orsegi_ibfk_2` FOREIGN KEY (`novenyID`) REFERENCES `orseginoveny` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `terulet`
--
ALTER TABLE `terulet`
  ADD CONSTRAINT `terulet_ibfk_1` FOREIGN KEY (`horto`) REFERENCES `horto` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `terulet_ibfk_10` FOREIGN KEY (`dunai`) REFERENCES `dunai` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `terulet_ibfk_2` FOREIGN KEY (`aggtelek`) REFERENCES `aggtelek` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `terulet_ibfk_3` FOREIGN KEY (`balatonfelv`) REFERENCES `balatonfelv` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `terulet_ibfk_4` FOREIGN KEY (`bukk`) REFERENCES `bukk` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `terulet_ibfk_5` FOREIGN KEY (`dunad`) REFERENCES `dunad` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `terulet_ibfk_6` FOREIGN KEY (`ferto`) REFERENCES `ferto` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `terulet_ibfk_7` FOREIGN KEY (`kiskun`) REFERENCES `kiskun` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `terulet_ibfk_8` FOREIGN KEY (`koros`) REFERENCES `koros` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `terulet_ibfk_9` FOREIGN KEY (`orsegi`) REFERENCES `orsegi` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
