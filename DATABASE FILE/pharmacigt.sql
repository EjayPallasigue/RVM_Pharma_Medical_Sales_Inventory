-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 02:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacigt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'D00F5D5217896FB7FD601412CB890830');

-- --------------------------------------------------------

--
-- Table structure for table `create_generic_name`
--

CREATE TABLE `create_generic_name` (
  `generic_id` int(100) NOT NULL,
  `generic_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_generic_name`
--

INSERT INTO `create_generic_name` (`generic_id`, `generic_name`) VALUES
(14, 'Paracetamol'),
(15, 'Amoxicillin'),
(16, 'Azithromycin'),
(17, 'Cetirizine'),
(18, 'Omeprazole'),
(19, 'Calcium'),
(20, 'Multivitamin'),
(21, 'Chlorpheniramine'),
(22, 'Plaster'),
(23, 'Povidone+Iodine'),
(24, 'Cotton Rolls'),
(25, 'Norflox'),
(26, 'Metronidazole'),
(27, 'Amlong'),
(28, 'Salbutamol'),
(29, 'Domperidone'),
(30, 'B. Complex'),
(31, 'Band Aid'),
(32, 'Aspirin'),
(33, 'Lip Balm'),
(34, 'Zincum Gluconicum'),
(35, 'Ibuprofen'),
(36, 'Test Kit'),
(37, 'Cough Drops'),
(38, 'Syringe'),
(39, 'Gloves'),
(40, 'Ointment'),
(41, 'Tube'),
(42, 'Glass Slide'),
(43, 'Infusion Set'),
(44, 'Mefenamic Acid'),
(45, 'Phenylpropanolamine'),
(46, 'Gentianae Radi'),
(47, 'Hyoscine'),
(48, 'Loratadine'),
(49, 'Carbocisteine'),
(50, 'Antiacid'),
(51, 'Butamirate Citrate'),
(52, 'Dextromethorpan Hydrobromide');

-- --------------------------------------------------------

--
-- Table structure for table `create_medicine_name`
--

CREATE TABLE `create_medicine_name` (
  `medicine_name_id` int(20) NOT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `generic_id` int(20) DEFAULT NULL,
  `generic_name` varchar(50) DEFAULT NULL,
  `medicine_presentation_id` int(15) DEFAULT NULL,
  `medicine_presentation_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_medicine_name`
--

INSERT INTO `create_medicine_name` (`medicine_name_id`, `medicine_name`, `generic_id`, `generic_name`, `medicine_presentation_id`, `medicine_presentation_name`) VALUES
(16, 'Biogesic', NULL, 'Paracetamol', NULL, NULL),
(17, 'Amoxil', NULL, 'Amoxicillin', NULL, NULL),
(18, 'Azemax', NULL, 'Azithromycin', NULL, NULL),
(19, 'Alnix', NULL, 'Cetirizine', NULL, NULL),
(20, 'Omepron', NULL, 'Omeprazole', NULL, NULL),
(21, 'Ambical', NULL, 'Calcium', NULL, NULL),
(22, 'Enervon', NULL, 'Multivitamin', NULL, NULL),
(23, 'Centrum', NULL, 'Multivitamin', NULL, NULL),
(24, 'Rapidol', NULL, 'Paracetamol', NULL, NULL),
(25, 'Tempra', NULL, 'Paracetamol', NULL, NULL),
(26, 'Antamin', NULL, 'Chlorpheniramine', NULL, NULL),
(27, 'Long Bone', NULL, 'Plaster', NULL, NULL),
(28, 'Betadine', NULL, 'Povidone+Iodine', NULL, NULL),
(29, 'Zetadone', NULL, 'Povidone+Iodine', NULL, NULL),
(30, 'Happy', NULL, 'Cotton Rolls', NULL, NULL),
(31, 'Cleene', NULL, 'Cotton Rolls', NULL, NULL),
(32, 'Sanicare', NULL, 'Cotton Rolls', NULL, NULL),
(33, 'Dymetrazole', NULL, 'Metronidazole', NULL, NULL),
(34, 'Metrozole', NULL, 'Metronidazole', NULL, NULL),
(35, 'Aero-Vent', NULL, 'Salbutamol', NULL, NULL),
(36, 'Pulmodual', NULL, 'Salbutamol', NULL, NULL),
(37, 'Asmatin', NULL, 'Salbutamol', NULL, NULL),
(38, 'Motilium', NULL, 'Domperidone', NULL, NULL),
(39, 'Neurobion', NULL, 'B. Complex', NULL, NULL),
(40, 'Supraneuron', NULL, 'B. Complex', NULL, NULL),
(41, 'Mediplast', NULL, 'Band Aid', NULL, NULL),
(42, 'Cortal', NULL, 'Aspirin', NULL, NULL),
(43, 'Saphrin', NULL, 'Aspirin', NULL, NULL),
(44, 'Carmex', NULL, 'Lip Balm', NULL, NULL),
(45, 'Zinbee', NULL, 'Zincum Gluconicum', NULL, NULL),
(46, 'Advil', NULL, 'Ibuprofen', NULL, NULL),
(47, 'Medicol', NULL, 'Ibuprofen', NULL, NULL),
(48, 'First Response Ovulation Test Kit', NULL, 'Test Kit', NULL, NULL),
(49, 'Halls', NULL, 'Cough Drops', NULL, NULL),
(50, 'Strepsils', NULL, 'Cough Drops', NULL, NULL),
(52, 'Watsons', NULL, 'Cetirizine', NULL, NULL),
(53, 'Neozep', NULL, 'Paracetamol', NULL, NULL),
(54, 'Decolgen', NULL, 'Phenylpropanolamine', NULL, NULL),
(55, 'Tuseran Forte', NULL, 'Dextromethorpan Hydrobromide', NULL, NULL),
(56, 'Sinecod', NULL, 'Butamirate Citrate', NULL, NULL),
(57, 'Symdex', NULL, 'Paracetamol', NULL, NULL),
(58, 'Nafarin', NULL, 'Phenylpropanolamine', NULL, NULL),
(59, 'Sinupret', NULL, 'Gentianae Radi', NULL, NULL),
(60, 'Buscopan', NULL, 'Hyoscine', NULL, NULL),
(61, 'Ritemed', NULL, 'Loratadine', NULL, NULL),
(62, 'Ponstan', NULL, 'Mefenamic Acid', NULL, NULL),
(63, 'Solmux', NULL, 'Carbocisteine', NULL, NULL),
(64, 'Algina', NULL, 'Antiacid', NULL, NULL),
(65, 'Katinko', NULL, 'Ointment', NULL, NULL),
(66, 'Efficascent Oil', NULL, 'Ointment', NULL, NULL),
(67, 'Tiger Balm', NULL, 'Ointment', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `create_medicine_presentation`
--

CREATE TABLE `create_medicine_presentation` (
  `medicine_presentation_id` int(20) NOT NULL,
  `medicine_presentation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_medicine_presentation`
--

INSERT INTO `create_medicine_presentation` (`medicine_presentation_id`, `medicine_presentation`) VALUES
(1, 'Capsule'),
(2, 'Tablet'),
(4, 'Liquid / Syrup'),
(5, 'Medical Item'),
(6, 'Test Kit'),
(8, 'Ointment');

-- --------------------------------------------------------

--
-- Table structure for table `create_product_category`
--

CREATE TABLE `create_product_category` (
  `record_id` int(100) NOT NULL,
  `product_category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_product_category`
--

INSERT INTO `create_product_category` (`record_id`, `product_category`) VALUES
(1, 'Surgical Product');

-- --------------------------------------------------------

--
-- Table structure for table `create_product_name`
--

CREATE TABLE `create_product_name` (
  `record_id` int(100) NOT NULL,
  `product_category` varchar(250) NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_product_name`
--

INSERT INTO `create_product_name` (`record_id`, `product_category`, `product_name`) VALUES
(1, 'Surgical Product', 'Sterile Surgical Gloves');

-- --------------------------------------------------------

--
-- Table structure for table `create_supplier`
--

CREATE TABLE `create_supplier` (
  `supplier_id` int(100) NOT NULL,
  `supplier_name` varchar(250) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `previous_due` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_supplier`
--

INSERT INTO `create_supplier` (`supplier_id`, `supplier_name`, `mobile`, `address`, `previous_due`) VALUES
(8, 'Shenzhen Hawk Medical Instrument Co., Ltd', '+86-755-83151901', 'Building C, Jianyetai Industrial Zone, No.11 Minhuan Road, Fukang Community, Longhua Street, Longhua District, Shenzhen, 518109, Guangdong, P.R.China', 0),
(9, 'VMed Medical Co.', '0917 859 8633 ', '1331 Dagupan Street,  Tondo Manila, 1012', 0),
(10, 'Getz Healthcare', '+63 2 8784 0400', '5/F West Wing, Estancia Offices, Capitol Commons, Meralco Ave. Barangay Oranbo, 1600 Pasig City Metro Manila, Philippines', 0),
(11, 'Luna Distribution, Inc.', '(+632) (3)234 2108', 'Level 10-1 Fort Legend Tower, 31st Street & 3rd Avenue,, Taguig, Metro Manila', 0),
(12, 'Linde Philippines, Inc', '+63 2-889 54633', 'The Podium West Tower 12/F Unit 1201, 12 ADB Avenue,Ortigas Center, Mandaluyong, Metro ManilaThe Podium West Tower 12/F Unit 1201, 12 ADB Avenue,Ortigas Center, Mandaluyong, Metro Manila', 0),
(13, 'LF (Philippines) Inc.', '+63 (2) 8 640 0041', '18th Floor, One Corporate Center, Julia Vargas Ave., cor Meralco Ave.,, San Antonio, Pasig, Metro Manila, National Capital Region, 1605, Pasig, Metro Manila', 0),
(14, 'Handog Industrial Gases Distributors Inc.', '0917 549 9977', 'Armela Compd. Km. 17 West Service Rd. Ssh, Marcelo Green Village, Paranaque', 0);

-- --------------------------------------------------------

--
-- Table structure for table `insert_purchase_info`
--

CREATE TABLE `insert_purchase_info` (
  `purchase_id` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `invoice_id` int(20) DEFAULT NULL,
  `particulars` varchar(50) DEFAULT NULL,
  `medicine_presentation_id` int(20) DEFAULT NULL,
  `medicine_presentation` varchar(50) DEFAULT NULL,
  `medicine_name_id` int(20) DEFAULT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `generic_id` int(20) DEFAULT NULL,
  `generic_name` varchar(50) DEFAULT NULL,
  `supplier_id` int(20) DEFAULT NULL,
  `supplier_name` varchar(50) DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `qty` float DEFAULT NULL,
  `purchase_price` float DEFAULT NULL,
  `unit_sales_price` float DEFAULT NULL,
  `unit` varchar(11) NOT NULL,
  `purchase_paid` float DEFAULT NULL,
  `purchase_due` float DEFAULT NULL,
  `expiredate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insert_purchase_info`
--

INSERT INTO `insert_purchase_info` (`purchase_id`, `date`, `invoice_id`, `particulars`, `medicine_presentation_id`, `medicine_presentation`, `medicine_name_id`, `medicine_name`, `generic_id`, `generic_name`, `supplier_id`, `supplier_name`, `unit_price`, `qty`, `purchase_price`, `unit_sales_price`, `unit`, `purchase_paid`, `purchase_due`, `expiredate`) VALUES
(19, '2019-04-06', NULL, 'Payment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beximco Pharmaceuticals Ltd.', NULL, NULL, 0, NULL, '', 5, 255, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales_product`
--

CREATE TABLE `sales_product` (
  `sales_id` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `invoice` int(20) DEFAULT NULL,
  `particular` varchar(50) DEFAULT NULL,
  `customer_id` int(20) DEFAULT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `mobile` varchar(11) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `medicine_presentation_id` int(20) DEFAULT NULL,
  `medicine_presentation` varchar(50) DEFAULT NULL,
  `medicine_name_id` int(20) DEFAULT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `generic_id` int(20) DEFAULT NULL,
  `generic_name` varchar(50) DEFAULT NULL,
  `qty` int(20) DEFAULT NULL,
  `unit_sales_price` float DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `total_amount` float DEFAULT NULL,
  `total_discount` float DEFAULT NULL,
  `discount_price` float DEFAULT NULL,
  `sales_paid` float DEFAULT NULL,
  `sales_due` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_product`
--

INSERT INTO `sales_product` (`sales_id`, `date`, `invoice`, `particular`, `customer_id`, `customer_name`, `mobile`, `customer_email`, `medicine_presentation_id`, `medicine_presentation`, `medicine_name_id`, `medicine_name`, `generic_id`, `generic_name`, `qty`, `unit_sales_price`, `total_price`, `total_amount`, `total_discount`, `discount_price`, `sales_paid`, `sales_due`) VALUES
(1, '2019-04-06', 1, 'Sales Medicine', NULL, NULL, '', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 10, 3, 30, 120, 5, 115, 115, NULL),
(2, '2019-04-06', 1, 'Sales Medicine', NULL, NULL, '', 'bmmahmud@gmail.com', NULL, 'Tablet', 2, 'Napa Extra', NULL, 'Paracetamol', 30, 3, 90, 120, 5, 115, 115, NULL),
(3, '2019-03-31', 2, 'Sales Medicine', NULL, NULL, '', 'bmmahmud@gmail.com', NULL, 'Tablet', 0, 'Amdocal 10', NULL, 'Amlodipine', 10, 7, 70, 70, 0, 70, 70, NULL),
(4, '2021-08-03', 3, 'Sales Medicine', NULL, NULL, '', 'bmmahmud@gmail.com', NULL, 'Tablet', 9, 'Niko', NULL, 'Paracetamol', 47, 2, 94, 94, 2, 92, 94, NULL),
(5, '2021-08-17', 4, 'Sales Medicine', NULL, NULL, '', 'testacc@gmail.com', NULL, 'Tablet', 9, 'Niko', NULL, 'Paracetamol', 17, 2, 34, 34, 0, 34, 34, NULL),
(6, '2021-08-17', 5, 'Sales Medicine', NULL, NULL, '', 'test22@gmail.com', NULL, 'Tablet', 0, 'Amdocal 5', NULL, 'Amlodipine', 66, 4.5, 297, 297, 2, 295, 295, NULL),
(7, '2021-08-17', 6, 'Sales Medicine', NULL, NULL, '', 'jamesr@gmail.com', NULL, 'Tablet', 11, 'Xyzal', NULL, 'Levocetirizine Dihydrochloride', 46, 0.55, 25.3, 25.3, 0, 25.3, 25.3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `identity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `identity`) VALUES
(1, 'staff', '1A1DC91C907325C69271DDF0C944BC72', 'Staff'),
(6, 'Joshua', 'daa34855c7318586856c3894925e92c1', 'Staff'),
(7, 'Fadol', '482c811da5d5b4bc6d497ffa98491e38', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_generic_name`
--
ALTER TABLE `create_generic_name`
  ADD PRIMARY KEY (`generic_id`);

--
-- Indexes for table `create_medicine_name`
--
ALTER TABLE `create_medicine_name`
  ADD PRIMARY KEY (`medicine_name_id`),
  ADD KEY `FK` (`generic_id`,`medicine_presentation_id`);

--
-- Indexes for table `create_medicine_presentation`
--
ALTER TABLE `create_medicine_presentation`
  ADD PRIMARY KEY (`medicine_presentation_id`);

--
-- Indexes for table `create_product_category`
--
ALTER TABLE `create_product_category`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `create_product_name`
--
ALTER TABLE `create_product_name`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `create_supplier`
--
ALTER TABLE `create_supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `insert_purchase_info`
--
ALTER TABLE `insert_purchase_info`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `FK` (`medicine_presentation_id`,`medicine_name_id`,`generic_id`,`supplier_id`);

--
-- Indexes for table `sales_product`
--
ALTER TABLE `sales_product`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `FK` (`customer_id`,`medicine_presentation_id`,`medicine_name_id`,`generic_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_generic_name`
--
ALTER TABLE `create_generic_name`
  MODIFY `generic_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `create_medicine_name`
--
ALTER TABLE `create_medicine_name`
  MODIFY `medicine_name_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `create_medicine_presentation`
--
ALTER TABLE `create_medicine_presentation`
  MODIFY `medicine_presentation_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `create_product_category`
--
ALTER TABLE `create_product_category`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `create_product_name`
--
ALTER TABLE `create_product_name`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_supplier`
--
ALTER TABLE `create_supplier`
  MODIFY `supplier_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `insert_purchase_info`
--
ALTER TABLE `insert_purchase_info`
  MODIFY `purchase_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sales_product`
--
ALTER TABLE `sales_product`
  MODIFY `sales_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
