-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql_db
-- Generation Time: Nov 26, 2026 at 09:48 AM
-- Server version: 26.10.0
-- PHP Version: 8.3.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `producten`
--

CREATE TABLE `producten` (
  `id` int NOT NULL,
  `naam` varchar(100) NOT NULL,
  `prijs` decimal(6,2) NOT NULL,
  `omschrijving` text,
  `afbeelding` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`id`, `naam`, `prijs`, `omschrijving`, `afbeelding`) VALUES
(1, 'Barras', 60.00, 'De barras vis ook wel een baars genoemt is een van de meest voorkomende inheemse zoetwaterroofvissen in Nederland en België.', 'barras.png'),
(2, 'Random Fish', 25.00, 'Dit is een random vis die ik tijdens een beroep les had gevonden.', 'fish.png'),
(3, 'Fish with shoes and hat', 5000.00, 'The fish with shoes and hat was eerst gewoon een normale vis maar nadat hij een hoed en wat schoenen had gevonden werdt hij de drippler.', 'fishwithshoesandhat.png'),
(4, 'Puffer Fish', 1250.00, 'A vis die kan opblazen', 'puffa.png'),
(5, 'Rohu Carp', 24.00, 'De rohu carp is een grote zoetwaterkarper uit Azië die veel wordt gebruikt in de keuken en de viskweek. De vis heeft een langgerekt lichaam, dikke lippen en zilverkleurige schubben met vaak een roze of donkere gloed.', 'rohucarp.png'),
(6, 'Swordfish', 1800.00, 'Swordfish verwijst meestal naar een geavanceerde oplostechniek bij sudoku of naar de zeer grote roofvis met een zwaardvormige snuit.', 'swordfish.png'),
(7, 'Asian Blobvis', 9999.99, 'Een vis blob vis die in een chinese time van zijn leven is.', 'asianblobvis.png'),
(8, 'flopper', 10.00, 'Flopper van Fortnite', 'flopper.webp'),
(9, 'Midas Flopper', 9999.99, 'Midas Flopper van Fortnite', 'midasFlopper.webp'),
(10, 'Slurp Fish', 50.00, 'Slurpfish van Fortnite.', 'slurpfish.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producten`
--
ALTER TABLE `producten`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
