-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 12 feb 2019 kl 20:24
-- Serverversion: 10.1.34-MariaDB
-- PHP-version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `webbshop`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` float NOT NULL,
  `productCategory` varchar(30) NOT NULL,
  `productInfo` text NOT NULL,
  `productCategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `product`
--

INSERT INTO `product` (`productId`, `productName`, `productPrice`, `productCategory`, `productInfo`, `productCategoryId`) VALUES
(1, 'Blyertspenna', 11.99, 'Pennor', 'En vanlig Blyertspenna i trä', 1),
(2, 'Bläckpenna', 16.9, 'Pennor', 'En prima bläckpenna som skriver i blått', 1),
(3, 'Färgpennor', 28.9, 'Pennor', 'En ask med sorterade färgpennor inklusive en pennvässare', 1),
(4, 'Blyertspenna', 13.5, 'Pennor', 'Stiftpenna med storleken 0.5.\r\nMed komfortgrepp.\r\nFärg: Lila', 1),
(5, 'Suddigummi', 4.95, 'Pennor Tillbehör', 'Ett vanligt suddgummi för att korrigera de fel som uppstått i ditt liv', 3),
(6, 'Skrivblock', 16.9, 'Papper', 'ett block med hålade och randiga A4 papper', 2),
(33, 'rosa suddgummi', 3, 'Övrigt', 'fint ljusrosa suddgummi', 3),
(35, 'Mönstrat skrivblock', 24, 'Papper', 'Block med randiga blad med motiv av äpplen', 2),
(40, 'Bananer', 12.9, 'Övrigt', 'ajsa', 3),
(43, 'plommon', 8.9, 'Övrigt', 'plommon', 3),
(44, 'Penvässare', 25.9, 'Övrigt', 'En fin pennvässare', 3);

-- --------------------------------------------------------

--
-- Tabellstruktur `productcategory`
--

CREATE TABLE `productcategory` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(30) NOT NULL,
  `categoryImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `productcategory`
--

INSERT INTO `productcategory` (`categoryId`, `categoryName`, `categoryImg`) VALUES
(1, 'Pennor', 'https://c.pxhere.com/photos/28/f2/colour_pencils_paint_colored_pencils_pens_crayons_color_draw_colorful-581378.jpg!d'),
(2, 'Papper', 'https://cdn.pixabay.com/photo/2015/02/03/23/41/paper-623167_960_720.jpg'),
(3, 'Övrigt', 'https://cdn.pixabay.com/photo/2016/11/06/18/16/office-accessories-1803666_960_720.jpg');

-- --------------------------------------------------------

--
-- Tabellstruktur `test`
--

CREATE TABLE `test` (
  `testId` int(11) NOT NULL,
  `TestBild` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellstruktur `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userFirstName` varchar(40) NOT NULL,
  `userLastName` varchar(40) NOT NULL,
  `userEmail` varchar(80) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userAdmin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `user`
--

INSERT INTO `user` (`userId`, `userFirstName`, `userLastName`, `userEmail`, `userPassword`, `userAdmin`) VALUES
(24, 'Sandra', 'Lindström', 'sandra.lindstrm@gmail.com', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0),
(25, 'Admin', 'Admin', 'admin@webbshop.se', '7af2d10b73ab7cd8f603937f7697cb5fe432c7ff', 1),
(26, 'Snurre', 'Sprätt', 'snurre@hotmail.com', '533ffc404a35af06235d10f0af60357af93a7d4d', 0),
(27, 'kund', 'kund', 'kund@kund.se', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0),
(28, 'aaa', 'aaaaa', 'a@k.se', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0),
(29, 'hej', 'Anka', 'a@a.a', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0),
(30, 'rick', 'hage', 'rick@gmail.com', 'd31a87da3b37696265e9aa3c97f4b722e900f260', 0),
(31, 'customer', 'Test', 'customer@cu.se', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0),
(33, 'mvc', 'mvc-test', 'mvc@mvc.se', '12345A', 0),
(35, 'mvc', 'mvc-test', 'mvc@mvc.com', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0),
(36, 'sandra', 'mvc-test', 'sandra@mvc.se', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0),
(37, 'hej', 'Anka', 'ss@hotmail.com', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0),
(38, 'test', 'test2', 'test2@test.se', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0),
(41, 'Test3', 'Test', 'test3@a.a', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0),
(45, 'Donald', 'Duck', 'Donald@Duck.se', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0),
(46, 'Sandra', 'Igen', 'min@email.com', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0),
(47, 'hej', 'lindström', 'hej@mail.cs', '343962c7ba7e2cb2781441d7ca266608b378c59c', 0);

-- --------------------------------------------------------

--
-- Tabellstruktur `userorder`
--

CREATE TABLE `userorder` (
  `orderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `orderAdress` varchar(30) NOT NULL,
  `orderZipcode` int(5) NOT NULL,
  `orderCity` varchar(30) NOT NULL,
  `orderDate` datetime NOT NULL,
  `productAmount` int(11) NOT NULL,
  `orderPaymentMethod` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `userorder`
--

INSERT INTO `userorder` (`orderId`, `userId`, `productId`, `orderAdress`, `orderZipcode`, `orderCity`, `orderDate`, `productAmount`, `orderPaymentMethod`) VALUES
(9, 25, 3, 'Testlabbet', 12345, 'Webbshop', '2018-12-09 08:56:42', 5, 2),
(11, 25, 35, 'testLabbetåäö', 12345, 'Åäö', '2018-12-09 09:00:05', 2, 1),
(21, 25, 35, 'adress', 12345, 'stad', '2018-12-09 09:12:30', 9, 1),
(23, 24, 40, 'adressen1', 12345, 'platsen', '2018-12-12 12:00:34', 10, 2),
(24, 26, 43, 'snurres adress', 12345, 'kaninlyan', '2018-12-18 09:56:57', 10, 2),
(25, 30, 6, 'askhkj', 12345, 'sdf', '2018-12-18 10:25:26', 2, 1),
(26, 24, 2, 'lagårn', 12345, 'Kullen', '2018-12-20 01:16:36', 1, 2),
(27, 25, 35, 'äpplevägen 13', 12345, 'Kullen', '2019-01-23 01:01:55', 5, 1),
(28, 25, 2, 'äpplevägen 13', 12345, 'Kullen', '2019-01-23 01:14:08', 5, 1),
(29, 25, 2, 'äpplevägen 13', 12345, 'Kullen', '2019-01-23 01:15:10', 5, 1),
(30, 25, 2, 'äpplevägen 13', 12345, 'Kullen', '2019-01-23 01:16:31', 5, 1),
(31, 25, 2, 'äpplevägen 13', 12345, 'Kullen', '2019-01-23 01:17:40', 5, 1),
(32, 25, 2, 'äpplevägen 13', 12345, 'Kullen', '2019-01-23 01:18:15', 5, 1),
(33, 25, 2, 'äpplevägen 13', 12345, 'Kullen', '2019-01-23 01:19:47', 5, 1),
(34, 25, 35, 'lagårn', 12345, 'Kullen', '2019-01-25 08:29:44', 5, 2);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Index för tabell `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`categoryId`);

--
-- Index för tabell `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`testId`);

--
-- Index för tabell `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Index för tabell `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`orderId`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT för tabell `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT för tabell `test`
--
ALTER TABLE `test`
  MODIFY `testId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT för tabell `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT för tabell `userorder`
--
ALTER TABLE `userorder`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
