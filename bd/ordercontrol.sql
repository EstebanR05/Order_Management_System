-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2024 at 07:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ordercontrol`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `Name_category` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `idCity` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`idCity`, `Name`) VALUES
(1, 'cali');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `City_idCity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`idClient`, `Name`, `Email`, `Address`, `City_idCity`) VALUES
(6, 'rosa', 'rosa@gmail.com', 'carrera 4', 1),
(7, 'fernando', 'fernando@gmail.com', 'carrera 16', 1),
(8, 'mariana', 'mariana@gmail.com', 'avenida 12', 1),
(9, 'carlos', 'carlos@gmail.com', 'calle 8', 1),
(10, 'laura', 'laura@gmail.com', 'avenida 7', 1),
(11, 'jose', 'jose@gmail.com', 'calle 5', 1),
(12, 'andrea', 'andrea@gmail.com', 'carrera 10', 1),
(13, 'miguel', 'miguel@gmail.com', 'calle 15', 1),
(14, 'sofia', 'sofia@gmail.com', 'calle 22', 1),
(15, 'daniel', 'daniel@gmail.com', 'calle 11', 1),
(16, 'valeria', 'valeria@gmail.com', 'calle 17', 1),
(17, 'pablo', 'pablo@gmail.com', 'carrera 9', 1),
(18, 'david', 'david@gmail.com', 'carrera 14', 1),
(19, 'carolina', 'carolina@gmail.com', 'avenida 3', 1),
(20, 'gabriel', 'gabriel@gmail.com', 'calle 20', 1),
(21, 'monica', 'monica@gmail.com', 'carrera 21', 1),
(22, 'ricardo', 'ricardo@gmail.com', 'calle 6', 1),
(23, 'juliana', 'juliana@gmail.com', 'avenida 5', 1),
(24, 'santiago', 'santiago@gmail.com', 'carrera 18', 1),
(25, 'maria', 'maria@gmail.com', 'calle 13', 1),
(26, 'victor', 'victor@gmail.com', 'carrera 7', 1),
(27, 'angela', 'angela@gmail.com', 'carrera 19', 1),
(28, 'jorge', 'jorge@gmail.com', 'avenida 8', 1),
(29, 'camila', 'camila@gmail.com', 'calle 4', 1),
(30, 'felipe', 'felipe@gmail.com', 'carrera 12', 1),
(31, 'luis', 'luis@gmail.com', 'carrera 2', 1),
(32, 'juan', 'juan@gmail.com', 'carrera 13', 1),
(33, 'isabella', 'isabella@gmail.com', 'avenida 9', 1),
(34, 'elena', 'elena@gmail.com', 'calle 18', 1),
(35, 'sebastian', 'sebastian@gmail.com', 'carrera 3', 1),
(36, 'ana', 'ana@gmail.com', 'calle 21', 1),
(37, 'diego', 'diego@gmail.com', 'avenida 1', 1),
(38, 'marcos', 'marcos@gmail.com', 'carrera 17', 1),
(39, 'lina', 'lina@gmail.com', 'calle 10', 1),
(40, 'pedro', 'pedro@gmail.com', 'avenida 6', 1),
(41, 'martina', 'martina@gmail.com', 'carrera 6', 1),
(42, 'alvaro', 'alvaro@gmail.com', 'calle 12', 1),
(43, 'veronica', 'veronica@gmail.com', 'carrera 11', 1),
(44, 'antonio', 'antonio@gmail.com', 'avenida 2', 1),
(45, 'paula', 'paula@gmail.com', 'calle 14', 1),
(46, 'rafael', 'rafael@gmail.com', 'carrera 8', 1),
(47, 'susana', 'susana@gmail.com', 'carrera 15', 1),
(48, 'adriana', 'adriana@gmail.com', 'calle 19', 1),
(49, 'leonardo', 'leonardo@gmail.com', 'avenida 10', 1),
(50, 'vanessa', 'vanessa@gmail.com', 'carrera 5', 1),
(51, 'oscar', 'oscar@gmail.com', 'avenida 4', 1),
(52, 'renata', 'renata@gmail.com', 'carrera 20', 1),
(53, 'natalia', 'natalia@gmail.com', 'calle 9', 1),
(54, 'edgar', 'edgar@gmail.com', 'carrera 22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idOrder` int(11) NOT NULL,
  `create_at` date NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `Client_idClient` int(11) NOT NULL,
  `idUser_create_at` int(11) NOT NULL,
  `idUser_update_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idProducts` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `Name_product` varchar(20) DEFAULT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `NoParts` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `price` decimal(20,0) NOT NULL,
  `AmountEnable` int(11) NOT NULL,
  `Category_idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_has_order`
--

CREATE TABLE `products_has_order` (
  `Products_idProducts` int(11) NOT NULL,
  `Order_idOrder` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rols`
--

CREATE TABLE `rols` (
  `idRol` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rols`
--

INSERT INTO `rols` (`idRol`, `Name`) VALUES
(1, 'admin'),
(2, 'lider');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `NickName` varchar(15) NOT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `City_idCity` int(11) NOT NULL,
  `Rols_idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `Name`, `lastName`, `Email`, `Password`, `NickName`, `Address`, `City_idCity`, `Rols_idRol`) VALUES
(1, 'Admin', 'Admin', 'Admin@gmail.com', '123456', 'super admin', 'carrera 4', 1, 1),
(6, 'luis', 'ortega', 'luis@gmail.com', '123456', 'luisssOr', 'carrera 6 #16-15', 1, 2),
(7, 'mariana', 'gomez', 'mariana@gmail.com', '654321', 'mariG', 'calle 7 #11-23', 1, 2),
(8, 'carlos', 'diaz', 'carlos@gmail.com', '987654', 'carlosD', 'avenida 5 #18-40', 1, 2),
(9, 'laura', 'perez', 'laura@gmail.com', '112233', 'lauPerez', 'calle 9 #12-30', 1, 2),
(10, 'andrea', 'martinez', 'andrea@gmail.com', '445566', 'andMart', 'carrera 3 #21-13', 1, 2),
(11, 'sofia', 'lopez', 'sofia@gmail.com', '778899', 'sofLopez', 'calle 10 #15-50', 1, 2),
(12, 'daniel', 'torres', 'daniel@gmail.com', '123123', 'danTorres', 'avenida 8 #20-45', 1, 2),
(13, 'miguel', 'fernandez', 'miguel@gmail.com', '456789', 'migFern', 'calle 4 #22-10', 1, 2),
(14, 'valeria', 'garcia', 'valeria@gmail.com', '789123', 'valGar', 'carrera 5 #14-16', 1, 2),
(15, 'david', 'ruiz', 'david@gmail.com', '321456', 'davRuiz', 'carrera 2 #10-30', 1, 2),
(16, 'monica', 'moreno', 'monica@gmail.com', '654987', 'moniMor', 'avenida 6 #9-24', 1, 2),
(17, 'juliana', 'sanchez', 'juliana@gmail.com', '987321', 'julSanchez', 'carrera 9 #17-14', 1, 2),
(18, 'pablo', 'rojas', 'pablo@gmail.com', '852963', 'pabloR', 'calle 8 #6-19', 1, 2),
(19, 'carolina', 'castro', 'carolina@gmail.com', '147258', 'carCastro', 'avenida 4 #11-22', 1, 2),
(20, 'ricardo', 'quintero', 'ricardo@gmail.com', '963852', 'ricQuin', 'calle 3 #18-25', 1, 2),
(21, 'santiago', 'ramirez', 'santiago@gmail.com', '753159', 'santRam', 'carrera 8 #7-10', 1, 2),
(22, 'angela', 'prieto', 'angela@gmail.com', '159753', 'angPri', 'avenida 7 #12-18', 1, 2),
(23, 'felipe', 'mejia', 'felipe@gmail.com', '951357', 'felMej', 'calle 14 #9-31', 1, 2),
(24, 'camila', 'serrano', 'camila@gmail.com', '258963', 'camiSer', 'carrera 1 #5-23', 1, 2),
(25, 'juan', 'hurtado', 'juan@gmail.com', '369258', 'juanHur', 'calle 2 #19-28', 1, 2),
(26, 'lina', 'avila', 'lina@gmail.com', '753852', 'linAvila', 'avenida 11 #6-21', 1, 2),
(27, 'pedro', 'romero', 'pedro@gmail.com', '147369', 'pedRom', 'carrera 7 #15-40', 1, 2),
(28, 'martina', 'navarro', 'martina@gmail.com', '258147', 'martNav', 'calle 11 #8-17', 1, 2),
(29, 'alvaro', 'velasquez', 'alvaro@gmail.com', '369147', 'alvVel', 'avenida 2 #4-26', 1, 2),
(30, 'veronica', 'marquez', 'veronica@gmail.com', '951654', 'verMarq', 'carrera 10 #16-36', 1, 2),
(31, 'antonio', 'ospina', 'antonio@gmail.com', '159456', 'antOspi', 'calle 5 #20-45', 1, 2),
(32, 'paula', 'munoz', 'paula@gmail.com', '357951', 'pauMun', 'avenida 9 #14-29', 1, 2),
(33, 'rafael', 'pineda', 'rafael@gmail.com', '951258', 'rafPine', 'calle 12 #11-27', 1, 2),
(34, 'susana', 'gutierrez', 'susana@gmail.com', '753456', 'susGut', 'avenida 12 #10-33', 1, 2),
(35, 'adriana', 'restrepo', 'adriana@gmail.com', '357159', 'adrRest', 'carrera 4 #22-15', 1, 2),
(36, 'leonardo', 'martin', 'leonardo@gmail.com', '258741', 'leoMart', 'calle 16 #13-31', 1, 2),
(37, 'vanessa', 'cardenas', 'vanessa@gmail.com', '147258', 'vanCar', 'avenida 13 #6-24', 1, 2),
(38, 'oscar', 'hernandez', 'oscar@gmail.com', '654123', 'oscHern', 'calle 15 #20-36', 1, 2),
(39, 'renata', 'guerrero', 'renata@gmail.com', '789456', 'renGue', 'carrera 11 #8-29', 1, 2),
(40, 'natalia', 'vargas', 'natalia@gmail.com', '963741', 'natVar', 'avenida 15 #12-19', 1, 2),
(41, 'edgar', 'calderon', 'edgar@gmail.com', '321789', 'edgCald', 'calle 13 #18-34', 1, 2),
(42, 'isabella', 'arango', 'isabella@gmail.com', '654852', 'isaAran', 'carrera 12 #10-31', 1, 2),
(43, 'diego', 'rios', 'diego@gmail.com', '951753', 'dieRios', 'avenida 14 #11-21', 1, 2),
(44, 'jose', 'perez', 'jose@gmail.com', '357486', 'josPerez', 'calle 17 #14-27', 1, 2),
(45, 'manuel', 'salazar', 'manuel@gmail.com', '852147', 'manSal', 'avenida 16 #9-30', 1, 2),
(46, 'carla', 'ortiz', 'carla@gmail.com', '951357', 'carOrtiz', 'calle 19 #7-25', 1, 2),
(47, 'fernando', 'guzman', 'fernando@gmail.com', '357951', 'ferGuz', 'avenida 17 #16-28', 1, 2),
(48, 'victor', 'montoya', 'victor@gmail.com', '789321', 'vicMont', 'carrera 13 #19-29', 1, 2),
(49, 'gabriela', 'suarez', 'gabriela@gmail.com', '123654', 'gabSu', 'avenida 19 #20-37', 1, 2),
(50, 'jorge', 'blanco', 'jorge@gmail.com', '951159', 'jorBlan', 'calle 20 #18-32', 1, 2),
(51, 'ana', 'morales', 'ana@gmail.com', '789159', 'anaMor', 'carrera 14 #6-24', 1, 2),
(52, 'emilio', 'santana', 'emilio@gmail.com', '456852', 'emiSant', 'avenida 18 #22-19', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`idCity`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`),
  ADD KEY `fk_Client_City1_idx` (`City_idCity`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `fk_Order_Client1_idx` (`Client_idClient`),
  ADD KEY `fk_Order_Users1_idx` (`idUser_create_at`),
  ADD KEY `fk_Order_Users2_idx` (`idUser_update_at`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProducts`),
  ADD KEY `fk_Products_Category1_idx` (`Category_idCategory`);

--
-- Indexes for table `products_has_order`
--
ALTER TABLE `products_has_order`
  ADD PRIMARY KEY (`Products_idProducts`,`Order_idOrder`),
  ADD KEY `fk_Products_has_Order_Order1_idx` (`Order_idOrder`),
  ADD KEY `fk_Products_has_Order_Products1_idx` (`Products_idProducts`);

--
-- Indexes for table `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`idRol`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `fk_Users_City_idx` (`City_idCity`),
  ADD KEY `fk_Users_Rols1_idx` (`Rols_idRol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `idCity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rols`
--
ALTER TABLE `rols`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_Client_City1` FOREIGN KEY (`City_idCity`) REFERENCES `city` (`idCity`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_Order_Client1` FOREIGN KEY (`Client_idClient`) REFERENCES `client` (`idClient`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Order_Users1` FOREIGN KEY (`idUser_create_at`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Order_Users2` FOREIGN KEY (`idUser_update_at`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_Products_Category1` FOREIGN KEY (`Category_idCategory`) REFERENCES `category` (`idCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products_has_order`
--
ALTER TABLE `products_has_order`
  ADD CONSTRAINT `fk_Products_has_Order_Order1` FOREIGN KEY (`Order_idOrder`) REFERENCES `order` (`idOrder`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Products_has_Order_Products1` FOREIGN KEY (`Products_idProducts`) REFERENCES `products` (`idProducts`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_Users_City` FOREIGN KEY (`City_idCity`) REFERENCES `city` (`idCity`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Users_Rols1` FOREIGN KEY (`Rols_idRol`) REFERENCES `rols` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
