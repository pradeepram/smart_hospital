-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2015 at 03:04 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smarthospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `d_patientreg`
--

CREATE TABLE IF NOT EXISTS `d_patientreg` (
`p_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `DOB` varchar(12) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `doctor` int(11) NOT NULL,
  `vip` int(11) NOT NULL,
  `emergency` int(11) NOT NULL,
  `patient_status` int(11) NOT NULL,
  `track` tinyint(1) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `app_id` int(11) DEFAULT NULL,
  `doctor_name` varchar(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `UpdatedBy` int(11) NOT NULL,
  `TimeCreated` timestamp NULL DEFAULT NULL,
  `updatedTime` timestamp NULL DEFAULT NULL,
  `waitingTime` timestamp NULL DEFAULT NULL,
  `visitedTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=773 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_patientreg`
--

INSERT INTO `d_patientreg` (`p_id`, `first_name`, `phone`, `DOB`, `Gender`, `doctor`, `vip`, `emergency`, `patient_status`, `track`, `patient_id`, `app_id`, `doctor_name`, `user_id`, `UpdatedBy`, `TimeCreated`, `updatedTime`, `waitingTime`, `visitedTime`) VALUES
(742, 'avinash', '9888999881', '04/01/2015', 'Male', 2, 1, 1, 0, 0, '100', NULL, 'physio doc', 6, 0, '2015-04-16 06:02:19', NULL, '2015-04-16 06:46:40', '2015-04-16 06:47:34'),
(743, 'ram', '9788991232', '01/30/1990', 'Female', 0, 1, 1, 0, 0, '101', NULL, NULL, 6, 0, '2015-04-16 06:05:20', NULL, NULL, NULL),
(744, 'rams', '9788991232', '01/30/1990', 'Male', 3, 0, 0, 0, 0, '102', NULL, 'physio doc', 75, 0, '2015-04-16 06:14:57', NULL, NULL, '2015-04-16 06:19:39'),
(745, 'farhan', '8908878812', '01/29/1980', 'Female', 2, 1, 1, 0, 0, '104', NULL, 'physio doc', 6, 0, '2015-04-16 07:01:52', NULL, '2015-04-16 07:02:11', '2015-04-16 07:02:37'),
(746, 'yuvaraj', '8908977612', '01/29/1980', 'Male', 2, 1, 1, 5, 0, '105', NULL, 'physio doc', 6, 0, '2015-04-15 08:30:06', NULL, '2015-04-16 08:31:14', '2015-04-16 08:32:49'),
(747, 'radhika', '7845769531', '02/02/1960', 'Female', 0, 1, 0, 0, 0, '106', NULL, 'physio doc', 6, 0, '2015-04-14 09:29:28', NULL, NULL, NULL),
(748, 'radhika', '7845769531', '02/02/1960', 'Female', 2, 0, 0, 0, 0, '106', 23, 'physio doc', 75, 0, '2015-04-16 09:30:07', NULL, NULL, '2015-04-16 09:32:57'),
(750, 'dhanabal', '8908771212', '02/02/2010', 'Female', 1, 0, 0, 0, 0, '107', 24, 'physio doc', 75, 0, '2015-04-16 09:50:18', NULL, '2015-04-16 09:50:18', NULL),
(751, 'siva', '9002345121', '01/29/1980', 'Female', 0, 0, 0, 0, 0, '108', NULL, 'physio doc', 6, 0, '2015-04-15 10:02:44', NULL, NULL, NULL),
(752, 'entity', '8908121212', '01/30/1990', 'Male', 0, 0, 0, 0, 0, '109', NULL, 'physio doc', 6, 0, '2015-04-15 10:17:39', NULL, NULL, NULL),
(753, 'rexy', '9988998121', '01/27/1970', 'Female', 0, 0, 1, 0, 0, '110', NULL, 'physio doc', 6, 0, '2015-04-16 10:19:55', NULL, NULL, NULL),
(754, 'siva', '9002345121', '01/29/1980', 'Female', 2, 0, 0, 7, 0, '108', 25, 'physio doc', 75, 0, '2015-04-16 10:21:50', '2015-04-18 06:10:42', '2015-04-16 10:21:50', '2015-04-16 12:32:39'),
(755, 'bibin', '7899891212', '01/27/1970', 'Male', 0, 1, 0, 0, 0, '111', NULL, 'physio doc', 6, 0, '2015-04-15 11:06:57', NULL, NULL, NULL),
(756, 'bibin', '7899891212', '01/27/1970', 'Male', 1, 0, 0, 0, 0, '111', 27, 'physio doc', 75, 0, '2015-04-16 11:08:32', NULL, '2015-04-16 11:08:32', NULL),
(757, 'zenitha', '9898912345', '01/30/1990', 'Female', 1, 0, 1, 0, 0, '112', NULL, 'heart doc', 6, 0, '2015-04-16 12:35:55', NULL, '2015-04-16 12:39:51', NULL),
(758, 'dishoom', '9090901212', '01/29/1980', 'Male', 1, 0, 0, 0, 0, '113', NULL, 'heart doc', 6, 0, '2015-04-16 12:36:43', NULL, '2015-04-16 12:39:58', NULL),
(759, 'zafroon', '9876612345', '01/29/1980', 'Female', 1, 1, 0, 0, 0, '114', NULL, 'heart doc', 6, 0, '2015-04-16 12:37:45', NULL, '2015-04-16 12:40:02', NULL),
(760, 'dermy', '7890012341', '01/29/1980', 'Male', 0, 0, 0, 0, 0, '115', NULL, 'heart doc', 6, 0, '2015-04-16 12:38:35', NULL, NULL, NULL),
(761, 'god', '8765123123', '02/02/1960', 'Male', 0, 0, 0, 0, 0, '116', NULL, 'heart doc', 6, 0, '2015-04-16 12:39:39', NULL, NULL, NULL),
(762, 'avinash', '9888999881', '04/01/2015', 'Male', 0, 0, 0, 0, 0, '100', NULL, 'nopala', 6, 0, '2015-04-17 03:52:04', NULL, NULL, NULL),
(763, 'ram', '9788991232', '01/30/1990', 'Male', 0, 0, 0, 0, 0, '101', NULL, 'nopala', 6, 0, '2015-04-17 03:52:21', NULL, NULL, NULL),
(764, 'rams', '9788991232', '01/30/1990', 'Female', 0, 0, 0, 0, 0, '102', NULL, NULL, 6, 0, '2015-04-17 03:55:39', NULL, NULL, NULL),
(768, 'yuvaraj', '8908977612', '01/29/1980', 'Male', 3, 0, 0, 0, 0, '105', NULL, 'physio doc', 6, 0, '2015-04-15 20:04:44', NULL, '2015-04-17 06:30:46', '2015-04-17 06:31:30'),
(769, 'avinash', '9888999881', '04/01/2015', 'Male', 2, 1, 1, 1, 0, '100', NULL, 'physio doc', 6, 0, '2015-04-18 06:32:24', '2015-04-18 06:32:24', '2015-04-18 06:33:14', '2015-04-18 06:48:06'),
(770, 'ram', '9788991232', '01/30/1990', 'Male', 0, 0, 0, 0, 0, '101', NULL, 'physio doc', 6, 0, '2015-04-18 08:22:34', '2015-04-18 08:22:34', NULL, NULL),
(771, 'rams', '9788991232', '01/30/1990', 'Male', 0, 0, 1, 1, 0, '102', NULL, 'physio doc', 6, 0, '2015-04-18 08:54:06', '2015-04-18 09:04:10', NULL, NULL),
(772, 'yuvaraj', '8908977612', '01/29/1980', 'Male', 3, 0, 1, 4, 0, '105', NULL, 'physio doc', 6, 0, '2015-04-18 12:56:46', '2015-04-18 13:00:46', '2015-04-18 12:58:03', '2015-04-18 12:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `m_bed`
--

CREATE TABLE IF NOT EXISTS `m_bed` (
`Bed_id` int(11) NOT NULL,
  `Bed` varchar(50) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_bed`
--

INSERT INTO `m_bed` (`Bed_id`, `Bed`, `CreatedBy`, `CreatedTime`) VALUES
(1, '12', 1, '2015-04-08 06:52:32'),
(4, '13', 103, '2015-04-09 12:40:11'),
(6, '14', 103, '2015-04-09 12:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `m_doctor_department`
--

CREATE TABLE IF NOT EXISTS `m_doctor_department` (
`department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `department_description` varchar(500) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_doctor_department`
--

INSERT INTO `m_doctor_department` (`department_id`, `department_name`, `department_description`, `CreatedBy`, `CreatedTime`) VALUES
(3, 'physiotherapists ', 'for sycologicals', 57, '2015-03-16 10:41:49'),
(4, 'Heart Specialist', 'heart related symptoms', 57, '2015-03-16 10:06:38'),
(5, 'ortho', 'system', 0, '2015-03-16 10:43:26'),
(6, 'dentist', 'vbgh', 0, '2015-04-08 09:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `m_dr_charges`
--

CREATE TABLE IF NOT EXISTS `m_dr_charges` (
`c_id` int(11) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `fee` decimal(8,2) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedTime` timestamp NULL DEFAULT NULL,
  `UpdatedBy` int(11) NOT NULL,
  `UpdatedTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_dr_charges`
--

INSERT INTO `m_dr_charges` (`c_id`, `doctor_name`, `fee`, `CreatedBy`, `CreatedTime`, `UpdatedBy`, `UpdatedTime`) VALUES
(3, 'ortho specialist doc', '780.00', 103, '2015-04-09 10:29:24', 0, NULL),
(4, 'physio doc', '1212.00', 103, '2015-04-09 10:38:51', 103, '2015-04-09 10:43:35'),
(8, 'nopala', '900.00', 103, '2015-04-09 12:44:39', 0, NULL),
(9, 'heart doc', '2500.00', 103, '2015-04-15 12:43:52', 0, NULL),
(10, 'Nesh', '999.00', 103, '2015-04-15 12:44:43', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_feedback`
--

CREATE TABLE IF NOT EXISTS `m_feedback` (
`l_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `value` varchar(100) NOT NULL,
  `CreatedBy` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_feedback`
--

INSERT INTO `m_feedback` (`l_id`, `name`, `value`, `CreatedBy`) VALUES
(1, 'Reception / Enquiry service', '1', 1),
(2, 'Doctor service ', '2', 1),
(3, 'Nursing care ', '3', 1),
(4, 'Admission Process', '4', 1),
(5, 'Hospital Environment', '5', 1),
(6, 'Overall Experience ', '6', 1),
(7, 'Laboratory', '7', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_lab`
--

CREATE TABLE IF NOT EXISTS `m_lab` (
`c_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `child_name` varchar(50) NOT NULL,
  `scan` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `TimeCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_lab`
--

INSERT INTO `m_lab` (`c_id`, `m_id`, `child_name`, `scan`, `amount`, `TimeCreated`) VALUES
(2, 1, 'Hemo Tests', 0, '500.00', '2015-04-10 06:22:40'),
(3, 1, 'Blood Test', 0, '150.00', '2015-04-10 06:22:48'),
(9, 1, 'Metabollic Test', 0, '250.00', '2015-04-10 06:22:53'),
(16, 1, 'MRI Scan', 1, '5001.10', '2015-04-16 04:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `m_lookup`
--

CREATE TABLE IF NOT EXISTS `m_lookup` (
`L-id` int(11) NOT NULL,
  `Key_id` int(11) NOT NULL,
  `column_name` varchar(50) NOT NULL,
  `Key_Name` varchar(50) NOT NULL,
  `Value1` varchar(50) NOT NULL,
  `Value2` varchar(50) DEFAULT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_lookup`
--

INSERT INTO `m_lookup` (`L-id`, `Key_id`, `column_name`, `Key_Name`, `Value1`, `Value2`, `CreatedBy`, `CreatedTime`) VALUES
(1, 1, 'patient_status', 'critical', '1', '1', 1, '0000-00-00 00:00:00'),
(2, 1, 'patient_status', 'observation', '2', '1', 1, '0000-00-00 00:00:00'),
(3, 1, 'patient_status', 'normal', '3', '1', 1, '0000-00-00 00:00:00'),
(4, 1, 'patient_status', 'cured', '4', '2', 1, '0000-00-00 00:00:00'),
(5, 1, 'patient_status', 'dead', '5', '2', 1, '0000-00-00 00:00:00'),
(6, 1, 'patient_status', 'ok', '6', '2', 1, '0000-00-00 00:00:00'),
(7, 1, 'patient_status', 'not well', '7', '2', 1, '0000-00-00 00:00:00'),
(8, 2, 'doctor', 'waiting', '1', NULL, 1, '0000-00-00 00:00:00'),
(9, 2, 'doctor', 'visited', '2', NULL, 1, '0000-00-00 00:00:00'),
(10, 2, 'doctor', 'outpatient', '3', NULL, 1, '0000-00-00 00:00:00'),
(11, 3, 'follow', 'Need to Follow', '0', NULL, 1, '0000-00-00 00:00:00'),
(12, 3, 'follow', 'No Need to Follow', '1', NULL, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `m_roles`
--

CREATE TABLE IF NOT EXISTS `m_roles` (
`roleid` int(5) NOT NULL,
  `rolename` varchar(25) NOT NULL,
  `role_description` varchar(100) NOT NULL,
  `Timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_roles`
--

INSERT INTO `m_roles` (`roleid`, `rolename`, `role_description`, `Timecreated`) VALUES
(1, 'Main Reception', 'sd', '2015-04-10 11:41:30'),
(2, 'Doctor', 'sd', '2015-03-16 11:13:17'),
(4, 'Lab Reception', 'asd', '2015-03-16 11:13:22'),
(7, 'Dr Desk', 'sad', '2015-03-16 11:13:27'),
(8, 'Pharmacy', 'pharmacy', '2015-03-31 10:10:08'),
(10, 'Admission Manager', 'Admit patient', '2015-04-10 11:47:29'),
(11, 'surgery', 'surgery patients', '2015-04-15 09:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE IF NOT EXISTS `m_user` (
`user_id` int(11) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `d_id` int(11) NOT NULL,
  `department_id` varchar(50) NOT NULL,
  `TimeCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `roleid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`user_id`, `emailaddress`, `username`, `password`, `firstname`, `phone`, `gender`, `d_id`, `department_id`, `TimeCreated`, `roleid`) VALUES
(6, 'test@gmail.com', 'frontdesk', 'frontdesk', 'frontdesk', '9944999664', 'male', 0, '0', '2015-03-09 04:01:54', 1),
(16, 'lab@gmail.com', 'lab', 'lab', 'lab technician', '9933445561', 'male', 0, '0', '2015-02-24 06:01:21', 4),
(61, 'pharmacy@gmail.com', 'pharmacy', 'pharmacy', 'pharmacy', 'pharmacy', 'male', 0, '0', '2015-03-12 13:28:27', 8),
(66, 'ortho@gmail.com', 'ortho', 'ortho', 'ortho specialist doc', '9887655234', 'male', 0, '1', '2015-03-12 13:15:41', 2),
(69, 'physio@gmail.com', 'physio', 'physio', 'physio doc', '8997872562', 'male', 0, '3', '2015-03-12 13:15:27', 2),
(70, 'heart@gmail.com', 'heart', 'heart', 'heart doc', '987866782', 'male', 0, '4', '2015-03-12 13:15:20', 2),
(73, 'orthodrdesk@gmail.com', 'orthodrdesk', 'orthodrdesk', 'ortho doctor desk', '987777322', 'male', 66, '', '2015-03-12 13:23:43', 7),
(75, 'physiodrdesk@gmail.com', 'physiodrdesk', 'physiodrdesk', 'physio dr desk', '834853854', 'male', 69, '', '2015-03-13 04:35:16', 7),
(76, 'heartdrdesk@gmail.com', 'heartdrdesk', 'heartdrdesk', 'heart dr desk', '98546564656', 'male', 70, '', '2015-03-12 13:23:09', 7),
(93, 'nope@gmail.com', 'more', 'lets do', 'nopala', '787867453123', 'male', 0, '3', '2015-04-06 06:18:03', 2),
(98, 'sdasdsd@gmail.com', 'qwert', 'asdsd12', 'qwert', '9776651231', 'male', 66, '', '2015-04-06 06:26:12', 7),
(99, 'sdasdsd@gmail.com', 'qwert', 'asdsd12', 'qwert', '9776651231', 'male', 66, '', '2015-04-06 06:26:12', 7),
(103, 'admin@gmail.com', 'admin', 'admin', 'Admin', '9944999664', 'male', 0, '', '2015-04-06 08:21:48', 9),
(107, 'sdasdsd@gmail.com', 'asdf', 'dfg123', 'dfgdfg', '975656768745', 'female', 0, '3', '2015-04-06 08:56:55', 2),
(108, 'frontdesk1@gmail.com', 'frontdesk1', 'frontdesk1', 'Reception', '9888998889', 'male', 0, '3', '2015-04-06 12:28:12', 1),
(109, 'front@gmail.com', 'Front', 'okieses', 'Desk', '9887772213', 'male', 0, '3', '2015-04-06 12:31:30', 1),
(110, 'dr@gmail.com', 'Dr@gmail.com', 'niytrt', 'Sedryh', '9883214562', 'female', 0, '4', '2015-04-06 12:37:39', 2),
(112, 'sriramjan16@gmail.com', 'sriram', 'sriram', 'sriram', '9698394450', 'male', 0, '', '2015-04-07 08:22:00', 1),
(113, 'prasath@gmail.com', 'Prasath', '123456', 'Prasath', '9894038361', 'male', 0, '', '2015-04-07 08:22:15', 1),
(114, 'b.naresh92@gmail.com', 'Nesh', 'naresh123', 'Naresh', '9790962761', 'male', 0, '', '2015-04-07 08:22:42', 1),
(115, 'sankar@gmail.com', 'sankar', '4561239871', 'sankar', '7894561231', 'male', 0, '4', '2015-04-07 08:25:14', 2),
(116, 'Nareshnesh@gmail.com', 'naresh_123', '123456', 'Nesh', '9898988781', 'male', 0, '4', '2015-04-07 08:25:16', 2),
(123, 'manikandan789@gmail.com', 'manikandan', 'manikandan', 'manikandan', '9698674427', 'male', 66, '', '2015-04-07 08:30:02', 7),
(124, 'dharvesh_satori@gmail.com', 'dharvesh', '123456', 'avi', '9867565656', 'male', 116, '', '2015-04-07 08:30:04', 7),
(125, 'prabakaran', 'prabakaran', 'prabakaran', 'prabakaran', '9659505037', 'male', 119, '', '2015-04-07 08:30:46', 8),
(126, 'amitabh@avi.com', 'amitabhmama', '123456', 'amitabh', '9898989898', 'male', 119, '', '2015-04-07 08:30:59', 8),
(129, 'sk@gmail.com', '123456', '11111111111111111111', 'ast', '1234556789', 'female', 119, '', '2015-04-07 08:39:57', 8),
(130, 'pradeep.pilot', 'sdfsdf', 'sdfsdfsdf', 'sel', '9877651231', 'male', 119, '', '2015-04-07 11:10:22', 1),
(131, 'david@firstplanet.in', '578898777', '12345678', 'J', '9123456789', 'female', 119, '', '2015-04-07 12:41:03', 1),
(132, 'logintoprasath@gmail.com', '^test', '123456787', 'Test', '7894561230', 'male', 119, '', '2015-04-08 07:04:32', 1),
(133, 'avb@gmail.com', 'avb', 'avbserty', 'avbserty', '9878766123', 'male', 66, '3', '2015-04-08 09:43:34', 2),
(134, 'sriram@gmail.com', 'Rtr', 'qwertyuiop', 'Rtrtrtrrtrtr', '7777777777', 'female', 119, '', '2015-04-08 09:47:08', 1),
(135, 'srgm@gmail.com', '99999dffd', 'rtyuioiuy', 'Fgh', '9999999999', 'male', 119, '', '2015-04-08 10:12:03', 1),
(136, 'ac@km.com', 'Eer', 'rtyyyyuuuu', 'Rtgfff', '5456789987', 'male', 119, '', '2015-04-08 10:13:19', 1),
(137, 'ramkumarh@gmail.com', 'ramkumar', 'tyuiopyy', 'ramkuma', '9943999167', 'male', 119, '', '2015-04-08 11:57:48', 1),
(140, 'srimb@gmail.com', '$rtgy', 'Ghijgyuhgfg', 'tyhgtygf', '9688730802', 'male', 119, '', '2015-04-08 12:09:18', 1),
(141, 'tygfygg@gnail.com', 'rftyhgf', '24567^7', 'fgfdf', '9658732149', 'male', 119, '', '2015-04-08 12:10:31', 1),
(142, 'fjfhj@gmai.com', 'annad', 'wetttrttrr', 'errtttrt', '8562341753', 'male', 119, '', '2015-04-08 12:22:36', 1),
(143, 'admission@gmail.com', 'admission', 'admission', 'Admission Manager', '9876521342', 'male', 0, '', '2015-04-10 11:47:32', 10),
(144, 'surgery@gmail.com', 'surgery', 'surgery1', 'Surgery Man', '9765357851', 'male', 0, '', '2015-04-15 09:21:05', 11);

-- --------------------------------------------------------

--
-- Table structure for table `t_admission`
--

CREATE TABLE IF NOT EXISTS `t_admission` (
`admission_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `InAmount` decimal(10,2) NOT NULL,
  `outAmount` decimal(10,2) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedTime` timestamp NULL DEFAULT NULL,
  `UpdatedBy` int(11) NOT NULL,
  `UpdatedTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admission`
--

INSERT INTO `t_admission` (`admission_id`, `p_id`, `InAmount`, `outAmount`, `CreatedBy`, `CreatedTime`, `UpdatedBy`, `UpdatedTime`) VALUES
(15, 744, '10000.00', '123.00', 143, '2015-04-16 06:44:32', 143, '2015-04-16 10:37:03'),
(16, 746, '13000.00', '12350.00', 143, '2015-04-16 08:34:52', 143, '2015-04-17 06:52:09'),
(17, 754, '2350.00', '1450.00', 143, '2015-04-17 06:48:13', 143, '2015-04-18 06:10:42'),
(18, 772, '980.00', '19000.00', 143, '2015-04-18 12:59:59', 143, '2015-04-18 13:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `t_appointment`
--

CREATE TABLE IF NOT EXISTS `t_appointment` (
`app_id` int(11) NOT NULL,
  `patient_id` varchar(20) NOT NULL,
  `appointment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `doctor_name` varchar(50) NOT NULL,
  `attend` int(11) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `TimeCreated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedBy` int(11) NOT NULL,
  `updatedTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_appointment`
--

INSERT INTO `t_appointment` (`app_id`, `patient_id`, `appointment_time`, `doctor_name`, `attend`, `CreatedBy`, `TimeCreated`, `updatedBy`, `updatedTime`) VALUES
(21, '101', '2015-04-15 06:12:00', 'physio doc', 1, 75, '2015-04-16 06:12:58', 75, '2015-04-16 06:14:57'),
(22, '102', '2015-04-15 12:30:00', 'physio doc', 0, 75, '2015-04-16 09:06:56', 0, NULL),
(23, '106', '2015-04-16 11:30:00', 'physio doc', 1, 75, '2015-04-16 09:30:01', 75, '2015-04-16 09:30:07'),
(24, '107', '2015-04-16 12:30:00', 'physio doc', 1, 75, '2015-04-16 09:49:56', 75, '2015-04-16 09:50:18'),
(25, '108', '2015-04-16 11:30:00', 'physio doc', 1, 75, '2015-04-16 10:03:35', 75, '2015-04-16 10:21:50'),
(26, '109', '2015-04-16 15:30:00', 'physio doc', 0, 75, '2015-04-16 10:18:20', 0, NULL),
(27, '111', '2015-04-16 14:30:00', 'physio doc', 1, 75, '2015-04-16 11:08:12', 75, '2015-04-16 11:08:32'),
(28, '101', '2015-04-08 14:30:00', 'physio doc', 0, 75, '2015-04-17 12:02:25', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_dr_lab`
--

CREATE TABLE IF NOT EXISTS `t_dr_lab` (
`tv_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `c_id` varchar(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `test_result` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `TimeCreated` timestamp NULL DEFAULT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=527 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dr_lab`
--

INSERT INTO `t_dr_lab` (`tv_id`, `t_id`, `c_id`, `paid`, `test_result`, `createdBy`, `TimeCreated`, `updatedBy`, `updatedTime`) VALUES
(490, 267, '2', 1, 1, 6, '2015-04-16 06:05:20', 16, '2015-04-16 06:57:34'),
(491, 267, '3', 1, 1, 6, '2015-04-16 06:05:20', 16, '2015-04-16 06:57:34'),
(492, 267, '16', 1, 1, 6, '2015-04-16 06:05:20', 16, '2015-04-16 06:57:34'),
(493, 268, '9', 1, 1, 69, '2015-04-16 06:19:39', 16, '2015-04-16 07:01:05'),
(494, 268, '16', 1, 1, 69, '2015-04-16 06:19:39', 16, '2015-04-16 07:01:05'),
(495, 269, '3', 1, 0, 69, '2015-04-16 06:47:34', 16, '2015-04-16 06:53:41'),
(496, 269, '9', 1, 1, 69, '2015-04-16 06:47:34', 16, '2015-04-16 06:55:31'),
(497, 269, '16', 1, 1, 69, '2015-04-16 06:47:34', 16, '2015-04-16 06:53:41'),
(498, 270, '2', 0, 0, 69, '2015-04-16 07:02:37', 0, NULL),
(499, 270, '3', 0, 0, 69, '2015-04-16 07:02:37', 0, NULL),
(500, 270, '9', 0, 0, 69, '2015-04-16 07:02:37', 0, NULL),
(501, 270, '16', 0, 0, 69, '2015-04-16 07:02:37', 0, NULL),
(502, 271, '2', 0, 0, 69, '2015-04-16 08:32:49', 0, NULL),
(503, 271, '3', 0, 0, 69, '2015-04-16 08:32:49', 0, NULL),
(504, 271, '9', 0, 0, 69, '2015-04-16 08:32:49', 0, NULL),
(505, 271, '16', 0, 0, 69, '2015-04-15 08:32:49', 0, NULL),
(506, 272, '2', 0, 0, 69, '2015-04-16 09:32:57', 0, NULL),
(507, 272, '3', 0, 0, 69, '2015-04-16 09:32:57', 0, NULL),
(508, 272, '9', 0, 0, 69, '2015-04-16 09:32:57', 0, NULL),
(509, 272, '16', 0, 0, 69, '2015-04-16 09:32:57', 0, NULL),
(510, 274, '2', 0, 0, 6, '2015-04-17 03:55:39', 0, NULL),
(511, 274, '3', 0, 0, 6, '2015-04-17 03:55:39', 0, NULL),
(512, 274, '9', 0, 0, 6, '2015-04-17 03:55:39', 0, NULL),
(513, 274, '16', 0, 0, 6, '2015-04-17 03:55:39', 0, NULL),
(514, 275, '2', 0, 0, 6, '2015-04-17 05:58:19', 0, NULL),
(515, 275, '3', 0, 0, 6, '2015-04-17 05:58:20', 0, NULL),
(516, 275, '16', 0, 0, 6, '2015-04-17 05:58:20', 0, NULL),
(517, 276, '2', 0, 0, 69, '2015-04-17 06:31:30', 0, NULL),
(518, 276, '3', 0, 0, 69, '2015-04-17 06:31:30', 0, NULL),
(519, 276, '9', 0, 0, 69, '2015-04-17 06:31:30', 0, NULL),
(520, 276, '16', 0, 0, 69, '2015-04-17 06:31:30', 0, NULL),
(521, 277, '2', 0, 0, 69, '2015-04-18 06:48:06', 0, NULL),
(522, 277, '9', 0, 0, 69, '2015-04-18 06:48:06', 0, NULL),
(523, 277, '16', 0, 0, 69, '2015-04-18 06:48:06', 0, NULL),
(524, 278, '2', 1, 1, 69, '2015-04-18 12:59:03', 16, '2015-04-18 13:01:04'),
(525, 278, '3', 1, 1, 69, '2015-04-18 12:59:03', 16, '2015-04-18 13:01:11'),
(526, 278, '16', 1, 1, 69, '2015-04-18 12:59:03', 16, '2015-04-18 13:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `t_dr_test`
--

CREATE TABLE IF NOT EXISTS `t_dr_test` (
`t_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `test` varchar(20) NOT NULL,
  `admission` int(11) NOT NULL,
  `admit_date` date DEFAULT NULL,
  `discharge_date` date DEFAULT NULL,
  `surgery` int(11) NOT NULL,
  `surgery_date` date DEFAULT NULL,
  `device` int(11) NOT NULL,
  `device_id` varchar(50) DEFAULT NULL,
  `pharmacy` int(11) NOT NULL,
  `Medicine_Collected` tinyint(1) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `TimeUpdated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=279 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dr_test`
--

INSERT INTO `t_dr_test` (`t_id`, `p_id`, `patient_name`, `test`, `admission`, `admit_date`, `discharge_date`, `surgery`, `surgery_date`, `device`, `device_id`, `pharmacy`, `Medicine_Collected`, `amount`, `createdBy`, `TimeUpdated`) VALUES
(267, 743, 'ram', 'on', 0, NULL, NULL, 0, NULL, 0, NULL, 0, 0, '0.00', 6, '2015-04-16 06:05:20'),
(268, 744, 'rams', 'on', 1, '2015-04-16', '2015-04-16', 1, '2015-04-16', 0, NULL, 1, 0, '0.00', 69, '2015-04-16 06:19:39'),
(269, 742, 'avinash', 'on', 1, '2015-04-16', '2015-04-24', 0, NULL, 0, NULL, 1, 1, '234.00', 69, '2015-04-16 06:47:34'),
(270, 745, 'farhan', 'on', 0, '2015-04-14', NULL, 0, NULL, 0, NULL, 1, 0, '0.00', 69, '2015-04-16 07:02:37'),
(271, 746, 'yuvaraj', 'on', 1, '2015-04-16', '2015-05-01', 1, '2015-04-17', 0, NULL, 1, 0, '0.00', 69, '2015-04-16 08:32:49'),
(272, 748, 'radhika', 'on', 1, '2015-04-16', '2015-04-16', 1, '2015-04-17', 0, NULL, 1, 0, '0.00', 69, '2015-04-16 09:32:57'),
(273, 754, 'siva', 'off', 1, '2015-04-17', '0000-00-00', 0, NULL, 0, NULL, 1, 0, '0.00', 69, '2015-04-16 12:32:39'),
(274, 764, 'rams', 'on', 0, NULL, NULL, 0, NULL, 0, NULL, 0, 0, '0.00', 6, '2015-04-17 03:55:39'),
(275, 767, 'radhika', 'on', 0, NULL, NULL, 0, NULL, 0, NULL, 0, 0, '0.00', 6, '2015-04-17 05:58:19'),
(276, 768, 'yuvaraj', 'on', 1, '2015-04-20', '2015-04-30', 1, '2015-04-23', 0, NULL, 1, 0, '0.00', 69, '2015-04-17 06:31:30'),
(277, 769, 'avinash', 'on', 1, '2015-04-30', '2015-05-01', 0, NULL, 1, 'I127668781', 1, 0, '0.00', 69, '2015-04-18 06:48:06'),
(278, 772, 'yuvaraj', 'on', 1, '2015-04-18', '2015-05-08', 1, '2015-04-18', 1, 'I201', 1, 1, '250.00', 69, '2015-04-18 12:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `t_feedback`
--

CREATE TABLE IF NOT EXISTS `t_feedback` (
`feed_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Doctor` varchar(100) NOT NULL,
  `value1` int(11) NOT NULL,
  `value2` int(11) NOT NULL,
  `value3` int(11) NOT NULL,
  `value4` int(11) NOT NULL,
  `value5` int(11) NOT NULL,
  `value6` int(11) NOT NULL,
  `value7` int(11) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  ` CreatedTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_followup`
--

CREATE TABLE IF NOT EXISTS `t_followup` (
`f_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `follow_date` date DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `remarks` varchar(500) DEFAULT NULL,
  `follow` int(11) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_followup`
--

INSERT INTO `t_followup` (`f_id`, `p_id`, `patient_id`, `follow_date`, `reason`, `remarks`, `follow`, `createdBy`, `createdTime`, `updatedBy`, `updatedTime`) VALUES
(10, 742, '100', '2015-03-02', 'lab', 'okies', 0, 75, '2015-04-18 12:00:00', NULL, NULL),
(12, 742, '100', '2023-04-20', 'admission', 'qwerty', 1, 75, '2015-04-18 10:58:43', NULL, NULL),
(13, 764, '102', '0000-00-00', 'lab', '', 1, 75, '2015-04-18 12:12:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_payment`
--

CREATE TABLE IF NOT EXISTS `t_payment` (
`pay_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `doctor_fee` decimal(10,0) NOT NULL,
  `extra_charges` decimal(10,0) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdTime` timestamp NULL DEFAULT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_payment`
--

INSERT INTO `t_payment` (`pay_id`, `p_id`, `doctor_fee`, `extra_charges`, `createdBy`, `createdTime`, `updatedBy`, `updatedTime`) VALUES
(17, 744, '1212', '100', 75, '2015-04-16 06:40:12', 0, NULL),
(18, 768, '1212', '250', 75, '2015-04-17 08:22:12', 0, NULL),
(19, 772, '1212', '629', 75, '2015-04-18 12:59:28', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_surgery`
--

CREATE TABLE IF NOT EXISTS `t_surgery` (
`sur_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdTime` timestamp NULL DEFAULT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_surgery`
--

INSERT INTO `t_surgery` (`sur_id`, `p_id`, `amount`, `createdBy`, `createdTime`, `updatedBy`, `updatedTime`) VALUES
(2, 715, '10000', 144, '2015-04-15 10:08:35', 0, NULL),
(3, 722, '8900', 144, '2015-04-15 10:27:17', 0, NULL),
(4, 744, '2500', 144, '2015-04-16 07:04:47', 0, NULL),
(5, 746, '123', 144, '2015-04-17 08:15:41', 0, NULL),
(6, 772, '15000', 144, '2015-04-18 13:00:46', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_patientreg`
--
ALTER TABLE `d_patientreg`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `m_bed`
--
ALTER TABLE `m_bed`
 ADD PRIMARY KEY (`Bed_id`);

--
-- Indexes for table `m_doctor_department`
--
ALTER TABLE `m_doctor_department`
 ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `m_dr_charges`
--
ALTER TABLE `m_dr_charges`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `m_feedback`
--
ALTER TABLE `m_feedback`
 ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `m_lab`
--
ALTER TABLE `m_lab`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `m_lookup`
--
ALTER TABLE `m_lookup`
 ADD PRIMARY KEY (`L-id`);

--
-- Indexes for table `m_roles`
--
ALTER TABLE `m_roles`
 ADD PRIMARY KEY (`roleid`), ADD UNIQUE KEY `roleid` (`roleid`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `t_admission`
--
ALTER TABLE `t_admission`
 ADD PRIMARY KEY (`admission_id`);

--
-- Indexes for table `t_appointment`
--
ALTER TABLE `t_appointment`
 ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `t_dr_lab`
--
ALTER TABLE `t_dr_lab`
 ADD PRIMARY KEY (`tv_id`);

--
-- Indexes for table `t_dr_test`
--
ALTER TABLE `t_dr_test`
 ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `t_feedback`
--
ALTER TABLE `t_feedback`
 ADD PRIMARY KEY (`feed_id`), ADD UNIQUE KEY `feed_id` (`feed_id`);

--
-- Indexes for table `t_followup`
--
ALTER TABLE `t_followup`
 ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `t_payment`
--
ALTER TABLE `t_payment`
 ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `t_surgery`
--
ALTER TABLE `t_surgery`
 ADD PRIMARY KEY (`sur_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d_patientreg`
--
ALTER TABLE `d_patientreg`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=773;
--
-- AUTO_INCREMENT for table `m_bed`
--
ALTER TABLE `m_bed`
MODIFY `Bed_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `m_doctor_department`
--
ALTER TABLE `m_doctor_department`
MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `m_dr_charges`
--
ALTER TABLE `m_dr_charges`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `m_feedback`
--
ALTER TABLE `m_feedback`
MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `m_lab`
--
ALTER TABLE `m_lab`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `m_lookup`
--
ALTER TABLE `m_lookup`
MODIFY `L-id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `m_roles`
--
ALTER TABLE `m_roles`
MODIFY `roleid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT for table `t_admission`
--
ALTER TABLE `t_admission`
MODIFY `admission_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `t_appointment`
--
ALTER TABLE `t_appointment`
MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `t_dr_lab`
--
ALTER TABLE `t_dr_lab`
MODIFY `tv_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=527;
--
-- AUTO_INCREMENT for table `t_dr_test`
--
ALTER TABLE `t_dr_test`
MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=279;
--
-- AUTO_INCREMENT for table `t_feedback`
--
ALTER TABLE `t_feedback`
MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_followup`
--
ALTER TABLE `t_followup`
MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `t_payment`
--
ALTER TABLE `t_payment`
MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `t_surgery`
--
ALTER TABLE `t_surgery`
MODIFY `sur_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
