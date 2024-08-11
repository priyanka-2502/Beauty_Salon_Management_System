-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 06:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin1', 'Admin', 7898799798, 'admin1@gmail.com', 'admin', '2022-05-25 06:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblbook`
--

CREATE TABLE `tblbook` (
  `ID` int(10) NOT NULL,
  `UserID` int(10) DEFAULT NULL,
  `AptNumber` int(10) DEFAULT NULL,
  `AptDate` date DEFAULT NULL,
  `AptTime` time DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `RemarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbook`
--

INSERT INTO `tblbook` (`ID`, `UserID`, `AptNumber`, `AptDate`, `AptTime`, `Message`, `BookingDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(1, 7, 729411824, '2022-05-12', '19:03:00', 'Test msg', '2022-05-12 18:30:00', 'Your appointment has been book.', 'Selected', '2022-05-13 06:11:41'),
(2, 7, 767068476, '2022-05-14', '09:00:00', 'fghfshdgfahgrfgh', '2022-05-12 18:30:00', 'Sorry your appointment has been cancelled', 'Rejected', '2022-05-13 06:14:39'),
(4, 10, 931783426, '2022-05-18', '15:40:00', 'NA', '2022-05-15 05:04:13', NULL, NULL, NULL),
(5, 10, 284544154, '2022-05-18', '15:40:00', 'NA', '2022-05-15 05:04:13', NULL, NULL, NULL),
(6, 10, 494039785, '2022-05-31', '14:47:00', 'NA', '2022-05-15 05:13:24', NULL, NULL, NULL),
(8, 10, 891247645, '2022-05-28', '20:14:00', 'nA', '2022-05-28 08:43:55', 'Your booking is confirmed.', 'Selected', '2022-05-28 08:51:22'),
(9, 11, 985654240, '2022-05-29', '13:10:00', 'NA', '2022-05-29 07:34:47', 'Your appointment is confirmed', 'Selected', '2022-05-29 07:35:36'),
(10, 13, 283169615, '2022-10-07', '15:37:00', 'juhv ogvh;gsr', '2022-09-29 07:07:43', 'hdgucuoskvhpewrj', 'Selected', '2022-09-29 07:14:06'),
(11, 15, 300296168, '2022-10-21', '14:28:00', 'gfjgkihgbk', '2022-10-10 08:55:46', 'your appointment has been scheduled', 'Selected', '2022-10-10 09:05:07'),
(13, 16, 576844725, '2022-10-20', '01:55:00', 'bck,nhlsv', '2022-10-10 17:26:56', 'sry your appointment has been rejected', 'Rejected', '2022-10-12 06:00:44'),
(14, 16, 151731200, '2022-10-25', '11:34:00', 'hbvjkdfvhnliejnvlkbnvkmebvc', '2022-10-12 05:59:19', 'rejected', 'Rejected', '2022-10-12 18:49:34'),
(15, 12, 564556228, '2022-12-28', '21:27:00', 'oihxoishqnxp;qjnx', '2022-12-10 09:36:54', 'seleted', 'Selected', '2022-12-12 04:04:18'),
(16, 12, 695448433, '2022-12-30', '01:43:00', 'facial', '2022-12-11 16:09:20', 'the schedule is full', 'Rejected', '2022-12-12 05:52:26'),
(17, 12, 342709868, '2022-12-23', '13:31:00', 'giugkuoh', '2022-12-12 03:58:31', NULL, NULL, NULL),
(18, 12, 744934675, '2022-12-22', '10:36:00', 'facial,haircut', '2022-12-12 04:06:19', NULL, NULL, NULL),
(19, 12, 528428804, '2022-12-01', '13:23:00', 'nail art', '2022-12-12 05:50:35', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(4, 7, 4, 138889283, '2022-05-13 11:42:21'),
(5, 7, 9, 138889283, '2022-05-13 11:42:21'),
(6, 7, 16, 138889283, '2022-05-13 11:42:21'),
(7, 8, 3, 555850701, '2022-05-13 11:42:51'),
(8, 8, 6, 555850701, '2022-05-13 11:42:51'),
(9, 8, 9, 555850701, '2022-05-13 11:42:51'),
(10, 8, 11, 555850701, '2022-05-13 11:42:51'),
(13, 10, 1, 330026346, '2022-05-28 08:51:42'),
(14, 10, 2, 330026346, '2022-05-28 08:51:42'),
(15, 11, 2, 379060040, '2022-05-29 07:36:17'),
(16, 11, 5, 379060040, '2022-05-29 07:36:18'),
(17, 11, 6, 379060040, '2022-05-29 07:36:18'),
(18, 11, 12, 379060040, '2022-05-29 07:36:18'),
(19, 11, 3, 460087279, '2022-06-01 01:03:58'),
(20, 13, 1, 928537656, '2022-09-29 07:19:24'),
(21, 13, 2, 928537656, '2022-09-29 07:19:24'),
(22, 13, 3, 928537656, '2022-09-29 07:19:24'),
(23, 13, 4, 928537656, '2022-09-29 07:19:24'),
(24, 13, 9, 928537656, '2022-09-29 07:19:24'),
(25, 13, 11, 928537656, '2022-09-29 07:19:24'),
(26, 1, 1, 625936529, '2022-10-10 09:07:18'),
(27, 1, 2, 625936529, '2022-10-10 09:07:18'),
(28, 1, 3, 625936529, '2022-10-10 09:07:18'),
(29, 1, 1, 829044130, '2022-10-11 19:04:15'),
(30, 1, 2, 829044130, '2022-10-11 19:04:15'),
(31, 1, 4, 829044130, '2022-10-11 19:04:15'),
(32, 16, 5, 932882237, '2022-10-12 06:01:37'),
(33, 16, 6, 932882237, '2022-10-12 06:01:37'),
(34, 16, 8, 932882237, '2022-10-12 06:01:37'),
(35, 1, 5, 811440020, '2022-10-13 15:20:25'),
(36, 1, 6, 811440020, '2022-10-13 15:20:25'),
(37, 1, 8, 811440020, '2022-10-13 15:20:25'),
(38, 12, 9, 220458147, '2022-12-10 09:56:25'),
(39, 12, 11, 220458147, '2022-12-10 09:56:25'),
(40, 1, 2, 825810811, '2022-12-11 11:18:40'),
(41, 1, 6, 825810811, '2022-12-11 11:18:40'),
(42, 1, 8, 825810811, '2022-12-11 11:18:40'),
(43, 1, 2, 229463334, '2022-12-12 03:48:36'),
(44, 1, 6, 229463334, '2022-12-12 03:48:36'),
(45, 1, 8, 229463334, '2022-12-12 03:48:36'),
(46, 12, 2, 553421757, '2022-12-12 05:54:19'),
(47, 12, 6, 553421757, '2022-12-12 05:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `ServiceDescription` mediumtext DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `ServiceDescription`, `Cost`, `Image`, `CreationDate`) VALUES
(2, 'Fruit Facial', 'Fruit facials contain certain fruit acid like glycolic acid, alpha hydroxyl acid, citric acid, phenolic acid, vitamins and minerals in it. These acids are antiblemish, antiwrinkle and help your skin to exfoliate, it highly detoxifies your skin, it excretes out all the toxins and it hydrates your face', 500, 'anti.jpg1670683347.jpg', '2022-05-24 22:37:53'),
(6, 'Normal Menicure', 'A luxurious treatment including a soak and moisturizing exfoliation, cuticle work, nails clipped and filed, hard skin is removed (pedicure) and a renewing mask is applied. A short massage and your nails are buffed and ready to paint.', 300, 'simple.jpg1670683473.jpg', '2022-05-24 22:37:01'),
(8, 'U-Shape Hair Cut', 'U-Shape HairCut is exactly that a graduated cut that creates a soft u-shape from behind.', 250, 'v1.jpg1670683439.jpg', '2022-05-24 22:37:38'),
(9, 'Layer Haircut', 'Layer Hair is a hairstyle that gives illusions of length and volume using long hair  for the illusion of length and short hair for volume.', 250, 'bags.jpg1670683634.jpg', '2022-05-24 22:37:53'),
(10, 'Rebonding', 'Hair rebonding is a chemical process that changes your hair\'s natural texture and creates a smooth, straight style. It\'s also called chemical straightening. Hair rebonding is typically performed by a licensed cosmetologist at your local hair salon.', 3999, 'smoothing.jpg1670683922.jpg', '2022-05-24 22:37:08'),
(11, 'Loreal Hair Color(Full)', 'Loreal Hair Color(Full),Loreal Hair Color(Full),Loreal Hair Color(Full)', 1200, 'hairco1.jpg1670683659.jpg', '2022-05-24 22:37:35'),
(22, 'Hand Wax', 'We use strip wax to effectively remove the hair from the root.We use only the best products that are specifically formulated to prevent skin irritation to reactive skin', 299, 'hand waxing.jpg1670683754.jpg', '2022-10-11 17:51:12'),
(24, 'Bridal Makeup Package', 'Bridal packages will mostly include hair,makeup and draping done by the professionals.', 4999, 'bride.jpg1670683809.jpg', '2022-10-12 06:12:38'),
(26, 'Pedicure', 'A simple treatment that includes foot soaking,foot scrubing with a pumice stone or foot file,nail clipping,nail shaping,foot and calf massage,moisturizer and nail polishing.', 578, 'pedi.jpg1670745015.jpg', '2022-12-10 12:51:37'),
(27, 'nail art', 'we rounded up the best nail design for 2022 with best quality nail products', 250, 'nail art.jpg1670817174.jpg', '2022-12-12 03:52:54'),
(28, 'Nauvari Drapping', 'Saree is drapped  in a nauvari style.It is drapped according to your convenience so you can feel comfortable', 500, 'nauvari1.jpg1670818991.jpg', '2022-12-12 04:23:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(120) DEFAULT NULL,
  `LastName` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Password`, `RegDate`) VALUES
(12, 'minal', 'waghmode', 9529334378, 'minu@1234', 'sonu12345', '2022-09-29 06:48:03'),
(15, 'priyanka', 'galave', 8669520034, 'priya@gmail.com', 'tae12345', '2022-10-06 05:57:52'),
(16, 'priya', 'p', 8976543767, 'piya@17', 'piya123', '2022-10-08 04:26:40'),
(17, 'vaishali', 'galave', 9921529904, 'vaishali@123', 'vaishu123', '2022-12-07 14:36:45'),
(18, 'shri', 'galve', 7447443066, 'shri@gmail.com', 'shri@123', '2022-12-07 14:47:02'),
(19, 'aman', 'khan', 9857679878, 'mail@gmail', 'hbkjh;j;', '2022-12-07 14:51:22'),
(20, 'hgkjh', 'gjhljnlkm', 9877654433, 'trse@gmail.com', 'test', '2022-12-07 14:53:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbook`
--
ALTER TABLE `tblbook`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbook`
--
ALTER TABLE `tblbook`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
