-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2025 at 10:52 PM
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
-- Database: `db_pisys`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `addr_id` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`addr_id`, `street`, `barangay`, `city`, `province`) VALUES
(1, ' ', 'Agot', 'Boac', 'Marinduque'),
(2, ' ', 'Agumaymayan', 'Boac', 'Marinduque'),
(3, ' ', 'Amoingon', 'Boac', 'Marinduque'),
(4, ' ', 'Apitong', 'Boac', 'Marinduque'),
(5, ' ', 'Balagasan', 'Boac', 'Marinduque'),
(6, ' ', 'Balaring', 'Boac', 'Marinduque'),
(7, ' ', 'Balimbing', 'Boac', 'Marinduque'),
(8, ' ', 'Balogo', 'Boac', 'Marinduque'),
(9, ' ', 'Bamban', 'Boac', 'Marinduque'),
(10, ' ', 'Bangbangalon', 'Boac', 'Marinduque'),
(11, ' ', 'Bantad', 'Boac', 'Marinduque'),
(12, ' ', 'Bantay', 'Boac', 'Marinduque'),
(13, ' ', 'Bayuti', 'Boac', 'Marinduque'),
(14, ' ', 'Binunga', 'Boac', 'Marinduque'),
(15, ' ', 'Boi', 'Boac', 'Marinduque'),
(16, ' ', 'Boton', 'Boac', 'Marinduque'),
(17, ' ', 'Buliasnin', 'Boac', 'Marinduque'),
(18, ' ', 'Bunganay', 'Boac', 'Marinduque'),
(19, ' ', 'Caganhao', 'Boac', 'Marinduque'),
(20, ' ', 'Canat', 'Boac', 'Marinduque'),
(21, ' ', 'Catubugan', 'Boac', 'Marinduque'),
(22, ' ', 'Cawit', 'Boac', 'Marinduque'),
(23, ' ', 'Daig', 'Boac', 'Marinduque'),
(24, ' ', 'Daypay', 'Boac', 'Marinduque'),
(25, ' ', 'Duyay', 'Boac', 'Marinduque'),
(26, ' ', 'Hinapulan', 'Boac', 'Marinduque'),
(27, ' ', 'Ihatub', 'Boac', 'Marinduque'),
(28, ' ', 'Isok 1 (Poblacion)', 'Boac', 'Marinduque'),
(29, ' ', 'Isok 2 (Poblacion)', 'Boac', 'Marinduque'),
(30, ' ', 'Laylay', 'Boac', 'Marinduque'),
(31, ' ', 'Lupac', 'Boac', 'Marinduque'),
(32, ' ', 'Mahinhin', 'Boac', 'Marinduque'),
(33, ' ', 'Mainit', 'Boac', 'Marinduque'),
(34, ' ', 'Malbog', 'Boac', 'Marinduque'),
(35, ' ', 'Maligaya', 'Boac', 'Marinduque'),
(36, ' ', 'Malusak (Poblacion)', 'Boac', 'Marinduque'),
(37, ' ', 'Mansiwat', 'Boac', 'Marinduque'),
(38, ' ', 'Mataas na Bayan (Poblacion)', 'Boac', 'Marinduque'),
(39, ' ', 'Maybo', 'Boac', 'Marinduque'),
(40, ' ', 'Mercado (Poblacion)', 'Boac', 'Marinduque'),
(41, ' ', 'Murallon (Poblacion)', 'Boac', 'Marinduque'),
(42, ' ', 'Ogbac', 'Boac', 'Marinduque'),
(43, ' ', 'Pawa', 'Boac', 'Marinduque'),
(44, ' ', 'Pili', 'Boac', 'Marinduque'),
(45, ' ', 'Poctoy', 'Boac', 'Marinduque'),
(46, ' ', 'Poras', 'Boac', 'Marinduque'),
(47, ' ', 'Putting Buhangin', 'Boac', 'Marinduque'),
(48, ' ', 'Puyog', 'Boac', 'Marinduque'),
(49, ' ', 'Sabong', 'Boac', 'Marinduque'),
(50, ' ', 'San Miguel (Poblacion)', 'Boac', 'Marinduque'),
(51, ' ', 'Santol', 'Boac', 'Marinduque'),
(52, ' ', 'Sawi', 'Boac', 'Marinduque'),
(53, ' ', 'Tabi', 'Boac', 'Marinduque'),
(54, ' ', 'Tabigue', 'Boac', 'Marinduque'),
(55, ' ', 'Tagwak', 'Boac', 'Marinduque'),
(56, ' ', 'Tambunan', 'Boac', 'Marinduque'),
(57, ' ', 'Tampus (Poblacion)', 'Boac', 'Marinduque'),
(58, ' ', 'Tanza', 'Boac', 'Marinduque'),
(59, ' ', 'Tugos', 'Boac', 'Marinduque'),
(60, ' ', 'Tumagabok', 'Boac', 'Marinduque'),
(61, ' ', 'Tumapon', 'Boac', 'Marinduque'),
(62, ' ', 'Antipolo', 'Gasan', 'Marinduque'),
(63, ' ', 'Bachao Ibaba', 'Gasan', 'Marinduque'),
(64, ' ', 'Bachao Ilaya', 'Gasan', 'Marinduque'),
(65, ' ', 'Bacong-Bacong', 'Gasan', 'Marinduque'),
(66, ' ', 'Bahi', 'Gasan', 'Marinduque'),
(67, ' ', 'Bangbang', 'Gasan', 'Marinduque'),
(68, ' ', 'Banot', 'Gasan', 'Marinduque'),
(69, ' ', 'Banuyo', 'Gasan', 'Marinduque'),
(70, ' ', 'Bognuyan', 'Gasan', 'Marinduque'),
(71, ' ', 'Cabugao', 'Gasan', 'Marinduque'),
(72, ' ', 'Dawis', 'Gasan', 'Marinduque'),
(73, ' ', 'Dili', 'Gasan', 'Marinduque'),
(74, ' ', 'Libtangin', 'Gasan', 'Marinduque'),
(75, ' ', 'Mahunig', 'Gasan', 'Marinduque'),
(76, ' ', 'Mangiliol', 'Gasan', 'Marinduque'),
(77, ' ', 'Masiga', 'Gasan', 'Marinduque'),
(78, ' ', 'Matandang Gasan', 'Gasan', 'Marinduque'),
(79, ' ', 'Pangi', 'Gasan', 'Marinduque'),
(80, ' ', 'Pinggan', 'Gasan', 'Marinduque'),
(81, ' ', 'Tabionan', 'Gasan', 'Marinduque'),
(82, ' ', 'Tapuyan', 'Gasan', 'Marinduque'),
(83, ' ', 'Tiguion', 'Gasan', 'Marinduque'),
(84, ' ', 'Barangay I (Poblacion)', 'Gasan', 'Marinduque'),
(85, ' ', 'Barangay II (Poblacion)', 'Gasan', 'Marinduque'),
(86, ' ', 'Barangay III (Poblacion)', 'Gasan', 'Marinduque'),
(87, ' ', 'Anapog-Sibucao', 'Mogpog', 'Marinduque'),
(88, ' ', 'Argao', 'Mogpog', 'Marinduque'),
(89, ' ', 'Balanacan', 'Mogpog', 'Marinduque'),
(90, ' ', 'Banto', 'Mogpog', 'Marinduque'),
(91, ' ', 'Bintakay', 'Mogpog', 'Marinduque'),
(92, ' ', 'Bocboc', 'Mogpog', 'Marinduque'),
(93, ' ', 'Butansapa', 'Mogpog', 'Marinduque'),
(94, ' ', 'Candahon', 'Mogpog', 'Marinduque'),
(95, ' ', 'Capayang', 'Mogpog', 'Marinduque'),
(96, ' ', 'Danao', 'Mogpog', 'Marinduque'),
(97, ' ', 'Dulong Bayan (Poblacion)', 'Mogpog', 'Marinduque'),
(98, ' ', 'Gitnang Bayan (Poblacion)', 'Mogpog', 'Marinduque'),
(99, ' ', 'Guisian', 'Mogpog', 'Marinduque'),
(100, ' ', 'Hinadharan', 'Mogpog', 'Marinduque'),
(101, ' ', 'Hinanggayon', 'Mogpog', 'Marinduque'),
(102, ' ', 'Ino', 'Mogpog', 'Marinduque'),
(103, ' ', 'Janagdong?(Planned Poblacion Expansion)', 'Mogpog', 'Marinduque'),
(104, ' ', 'Lamesa', 'Mogpog', 'Marinduque'),
(105, ' ', 'Laon', 'Mogpog', 'Marinduque'),
(106, ' ', 'Magapua', 'Mogpog', 'Marinduque'),
(107, ' ', 'Malayak', 'Mogpog', 'Marinduque'),
(108, ' ', 'Malusak', 'Mogpog', 'Marinduque'),
(109, ' ', 'Mampaitan', 'Mogpog', 'Marinduque'),
(110, ' ', 'Mangyan-Mababad', 'Mogpog', 'Marinduque'),
(111, ' ', 'Market Site (Poblacion)', 'Mogpog', 'Marinduque'),
(112, ' ', 'Mataas Na Bayan (Poblacion)', 'Mogpog', 'Marinduque'),
(113, ' ', 'Mendez', 'Mogpog', 'Marinduque'),
(114, ' ', 'Nangka I?(Planned Poblacion Expansion)', 'Mogpog', 'Marinduque'),
(115, ' ', 'Nangka II', 'Mogpog', 'Marinduque'),
(116, ' ', 'Paye', 'Mogpog', 'Marinduque'),
(117, ' ', 'Pili', 'Mogpog', 'Marinduque'),
(118, ' ', 'Puting Buhangin', 'Mogpog', 'Marinduque'),
(119, ' ', 'Sayao', 'Mogpog', 'Marinduque'),
(120, ' ', 'Silangan', 'Mogpog', 'Marinduque'),
(121, ' ', 'Sumangga', 'Mogpog', 'Marinduque'),
(122, ' ', 'Tarug', 'Mogpog', 'Marinduque'),
(123, ' ', 'Villa Mendez (Poblacion)', 'Mogpog', 'Marinduque'),
(124, ' ', 'Bagacay', 'Buenavista', 'Marinduque'),
(125, ' ', 'Bagtingon', 'Buenavista', 'Marinduque'),
(126, ' ', 'Barangay I (Poblacion)', 'Buenavista', 'Marinduque'),
(127, ' ', 'Barangay II (Poblacion)', 'Buenavista', 'Marinduque'),
(128, ' ', 'Barangay III (Poblacion)', 'Buenavista', 'Marinduque'),
(129, ' ', 'Barangay IV (Poblacion)', 'Buenavista', 'Marinduque'),
(130, ' ', 'Bicas-bicas', 'Buenavista', 'Marinduque'),
(131, ' ', 'Caigangan', 'Buenavista', 'Marinduque'),
(132, ' ', 'Daykitin', 'Buenavista', 'Marinduque'),
(133, ' ', 'Libas', 'Buenavista', 'Marinduque'),
(134, ' ', 'Malbog', 'Buenavista', 'Marinduque'),
(135, ' ', 'Sihi', 'Buenavista', 'Marinduque'),
(136, ' ', 'Timbo (Sanggulong)', 'Buenavista', 'Marinduque'),
(137, ' ', 'Tungib-Lipata', 'Buenavista', 'Marinduque'),
(138, ' ', 'Yook', 'Buenavista', 'Marinduque'),
(139, ' ', 'Bangwayin', 'Torrijos', 'Marinduque'),
(140, ' ', 'Bayakbakin', 'Torrijos', 'Marinduque'),
(141, ' ', 'Bolo', 'Torrijos', 'Marinduque'),
(142, ' ', 'Bonliw', 'Torrijos', 'Marinduque'),
(143, ' ', 'Buangan', 'Torrijos', 'Marinduque'),
(144, ' ', 'Cabuyo', 'Torrijos', 'Marinduque'),
(145, ' ', 'Cagpo', 'Torrijos', 'Marinduque'),
(146, ' ', 'Dampulan', 'Torrijos', 'Marinduque'),
(147, ' ', 'Kay Duke', 'Torrijos', 'Marinduque'),
(148, ' ', 'Mabuhay', 'Torrijos', 'Marinduque'),
(149, ' ', 'Makawayan', 'Torrijos', 'Marinduque'),
(150, ' ', 'Malibago', 'Torrijos', 'Marinduque'),
(151, ' ', 'Malinao', 'Torrijos', 'Marinduque'),
(152, ' ', 'Maranlig', 'Torrijos', 'Marinduque'),
(153, ' ', 'Marlangga', 'Torrijos', 'Marinduque'),
(154, ' ', 'Matuyatuya', 'Torrijos', 'Marinduque'),
(155, ' ', 'Nangka', 'Torrijos', 'Marinduque'),
(156, ' ', 'Pakaskasan', 'Torrijos', 'Marinduque'),
(157, ' ', 'Payanas', 'Torrijos', 'Marinduque'),
(158, ' ', 'Poblacion', 'Torrijos', 'Marinduque'),
(159, ' ', 'Poctoy', 'Torrijos', 'Marinduque'),
(160, ' ', 'Sibuyao', 'Torrijos', 'Marinduque'),
(161, ' ', 'Suha', 'Torrijos', 'Marinduque'),
(162, ' ', 'Talawan', 'Torrijos', 'Marinduque'),
(163, ' ', 'Tigwi', 'Torrijos', 'Marinduque'),
(164, ' ', 'Alobo', 'Santa Cruz', 'Marinduque'),
(165, ' ', 'Angas', 'Santa Cruz', 'Marinduque'),
(166, ' ', 'Aturan', 'Santa Cruz', 'Marinduque'),
(167, ' ', 'Bagong Silang Pob. (2nd Zone)', 'Santa Cruz', 'Marinduque'),
(168, ' ', 'Baguidbirin', 'Santa Cruz', 'Marinduque'),
(169, ' ', 'Baliis', 'Santa Cruz', 'Marinduque'),
(170, ' ', 'Balogo', 'Santa Cruz', 'Marinduque'),
(171, ' ', 'Banahaw Pob. (3rd Zone Pob.)', 'Santa Cruz', 'Marinduque'),
(172, ' ', 'Bangcuangan', 'Santa Cruz', 'Marinduque'),
(173, ' ', 'Banogbog', 'Santa Cruz', 'Marinduque'),
(174, ' ', 'Biga', 'Santa Cruz', 'Marinduque'),
(175, ' ', 'Botilao', 'Santa Cruz', 'Marinduque'),
(176, ' ', 'Buyabod', 'Santa Cruz', 'Marinduque'),
(177, ' ', 'Dating Bayan', 'Santa Cruz', 'Marinduque'),
(178, ' ', 'Devilla', 'Santa Cruz', 'Marinduque'),
(179, ' ', 'Dolores', 'Santa Cruz', 'Marinduque'),
(180, ' ', 'Haguimit', 'Santa Cruz', 'Marinduque'),
(181, ' ', 'Hupi', 'Santa Cruz', 'Marinduque'),
(182, ' ', 'Ipil', 'Santa Cruz', 'Marinduque'),
(183, ' ', 'Jolo', 'Santa Cruz', 'Marinduque'),
(184, ' ', 'Kaganhao', 'Santa Cruz', 'Marinduque'),
(185, ' ', 'Kalangkang', 'Santa Cruz', 'Marinduque'),
(186, ' ', 'Kamandugan', 'Santa Cruz', 'Marinduque'),
(187, ' ', 'Kasily', 'Santa Cruz', 'Marinduque'),
(188, ' ', 'Kilo-kilo', 'Santa Cruz', 'Marinduque'),
(189, ' ', 'Kinyaman', 'Santa Cruz', 'Marinduque'),
(190, ' ', 'Labo', 'Santa Cruz', 'Marinduque'),
(191, ' ', 'Lamesa', 'Santa Cruz', 'Marinduque'),
(192, ' ', 'Landy(Perez)', 'Santa Cruz', 'Marinduque'),
(193, ' ', 'Lapu-lapu Pob. (5th Zone)', 'Santa Cruz', 'Marinduque'),
(194, ' ', 'Libjo', 'Santa Cruz', 'Marinduque'),
(195, ' ', 'Lipa', 'Santa Cruz', 'Marinduque'),
(196, ' ', 'Lusok', 'Santa Cruz', 'Marinduque'),
(197, ' ', 'Maharlika Pob. (1st Zone)', 'Santa Cruz', 'Marinduque'),
(198, ' ', 'Makulapnit', 'Santa Cruz', 'Marinduque'),
(199, ' ', 'Maniwaya', 'Santa Cruz', 'Marinduque'),
(200, ' ', 'Manlibunan', 'Santa Cruz', 'Marinduque'),
(201, ' ', 'Masaguisi', 'Santa Cruz', 'Marinduque'),
(202, ' ', 'Masalukot', 'Santa Cruz', 'Marinduque'),
(203, ' ', 'Matalaba', 'Santa Cruz', 'Marinduque'),
(204, ' ', 'Mongpong', 'Santa Cruz', 'Marinduque'),
(205, ' ', 'Morales', 'Santa Cruz', 'Marinduque'),
(206, ' ', 'Napo (Malabon)', 'Santa Cruz', 'Marinduque'),
(207, ' ', 'Pag-Asa Pob. (4th Zone)', 'Santa Cruz', 'Marinduque'),
(208, ' ', 'Pantayin', 'Santa Cruz', 'Marinduque'),
(209, ' ', 'Polo', 'Santa Cruz', 'Marinduque'),
(210, ' ', 'Pulong-Parang', 'Santa Cruz', 'Marinduque'),
(211, ' ', 'Punong', 'Santa Cruz', 'Marinduque'),
(212, ' ', 'San Antonio', 'Santa Cruz', 'Marinduque'),
(213, ' ', 'San Isidro', 'Santa Cruz', 'Marinduque'),
(214, ' ', 'Tagum', 'Santa Cruz', 'Marinduque'),
(215, ' ', 'Tamayo', 'Santa Cruz', 'Marinduque'),
(216, ' ', 'Tambangan', 'Santa Cruz', 'Marinduque'),
(217, ' ', 'Tawiran', 'Santa Cruz', 'Marinduque'),
(218, ' ', 'Taytay', 'Santa Cruz', 'Marinduque');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admission`
--

CREATE TABLE `tbl_admission` (
  `adm_id` varchar(50) NOT NULL,
  `hospital_no` varchar(50) NOT NULL,
  `classification` varchar(50) NOT NULL,
  `vital_id` varchar(50) NOT NULL,
  `pp_ordinance` varchar(100) NOT NULL,
  `pp_ord_value` varchar(50) NOT NULL,
  `date_admitted` date NOT NULL,
  `time_admitted` time NOT NULL,
  `ward_ch` varchar(10) NOT NULL,
  `ward_pay` varchar(10) NOT NULL,
  `ward_ph` varchar(10) NOT NULL,
  `prepared_by_id` varchar(50) NOT NULL,
  `dh_id` varchar(50) NOT NULL,
  `impression` varchar(100) NOT NULL,
  `att_physician_id` varchar(50) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `complaint_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clinic_info`
--

CREATE TABLE `tbl_clinic_info` (
  `clinic_id` varchar(50) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `license_num` varchar(50) NOT NULL,
  `clinic_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `ptr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_clinic_info`
--

INSERT INTO `tbl_clinic_info` (`clinic_id`, `profession`, `license_num`, `clinic_name`, `address`, `contact`, `employee_id`, `ptr`) VALUES
('1', 'Doctor', 'lc123345333', 'lc123345333', 'Boac, Marinduques', '121313', '3', '123445661313');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint_presc`
--

CREATE TABLE `tbl_complaint_presc` (
  `cp_id` int(11) NOT NULL,
  `image_filename` varchar(200) NOT NULL,
  `complaint_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dept_hospital`
--

CREATE TABLE `tbl_dept_hospital` (
  `dh_id` varchar(50) NOT NULL,
  `dept_id` varchar(50) NOT NULL,
  `dept_name` text NOT NULL,
  `dept_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnosis`
--

CREATE TABLE `tbl_diagnosis` (
  `diag_id` varchar(50) NOT NULL,
  `initial` varchar(100) NOT NULL,
  `final` varchar(100) NOT NULL,
  `treatment_given` text NOT NULL,
  `nurses_notes` text NOT NULL,
  `disposition_type` varchar(100) NOT NULL,
  `other_disp_value` varchar(100) NOT NULL,
  `date_diag` date NOT NULL,
  `time_diag` time NOT NULL,
  `patient_condition` varchar(30) NOT NULL,
  `doctor_id` varchar(50) NOT NULL,
  `nurse_id` varchar(50) NOT NULL,
  `complaint_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor_sched`
--

CREATE TABLE `tbl_doctor_sched` (
  `ds_id` varchar(50) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL DEFAULT current_timestamp(),
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `room` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_doctor_sched`
--

INSERT INTO `tbl_doctor_sched` (`ds_id`, `employee_id`, `date_from`, `date_to`, `time_from`, `time_to`, `room`) VALUES
('08f087c48f27e1e62c1715bff18dc60ebf1d6740', '3', '2025-04-29', '2025-04-28', '12:01:00', '21:02:00', 'ASFAFAF'),
('6655be46931add45adc7427900e70de88e9e57a9', '3', '0003-12-12', '0313-12-11', '12:01:00', '12:12:00', 'asdasda');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp_and_doctor`
--

CREATE TABLE `tbl_emp_and_doctor` (
  `employee_id` varchar(50) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middle` varchar(20) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_emp_and_doctor`
--

INSERT INTO `tbl_emp_and_doctor` (`employee_id`, `lastname`, `firstname`, `middle`, `designation`, `gender`, `address`, `status`) VALUES
('1745392920689', 'kk', 'sfssf', 'fsf', 'User', 'Male', 'wrwr', 'Active'),
('2', 'Magahis', 'Erz', '', 'Nurse', 'Female', 'Boac, Marinduque', 'Active'),
('3', 'Caballes, MDD', 'Gerardo', 'O', 'Doctor', 'Male', 'Boac, Marinduque', 'Active'),
('CL2024', 'Omiping', 'Kenneth', 'Layron', 'Doctor', 'Male', 'Cawit, Boac, Marinduque', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laboratory_results`
--

CREATE TABLE `tbl_laboratory_results` (
  `lab_id` varchar(255) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `test_date` date NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `normal_value` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_time_entry` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_months`
--

CREATE TABLE `tbl_months` (
  `id` int(11) NOT NULL,
  `month_name` varchar(20) NOT NULL,
  `month_abbr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_months`
--

INSERT INTO `tbl_months` (`id`, `month_name`, `month_abbr`) VALUES
(1, 'January', 'Jan'),
(2, 'February', 'Feb'),
(3, 'March', 'Mar'),
(4, 'April', 'Apr'),
(5, 'May', 'May'),
(6, 'June', 'Jun'),
(7, 'July', 'Jul'),
(8, 'August', 'Aug'),
(9, 'September', 'Sep'),
(10, 'October', 'Oct'),
(11, 'November', 'Nov'),
(12, 'December', 'Dec');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhs_disease`
--

CREATE TABLE `tbl_nhs_disease` (
  `nhsid` int(11) NOT NULL,
  `disease` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_nhs_disease`
--

INSERT INTO `tbl_nhs_disease` (`nhsid`, `disease`) VALUES
(1, 'AAA screening, see Abdominal aortic aneurysm (AAA) screening'),
(2, 'AAA, see Abdominal aortic aneurysm'),
(3, 'Abdominal aortic aneurysm'),
(4, 'Abdominal aortic aneurysm (AAA) screening'),
(5, 'Abortion'),
(6, 'Acanthosis nigricans'),
(7, 'Achalasia'),
(8, 'Acid and chemical burns'),
(9, 'Acid reflux in babies, see Reflux in babies'),
(10, 'Acne'),
(11, 'Acoustic neuroma (vestibular schwannoma)'),
(12, 'Acromegaly'),
(13, 'Actinic keratoses (solar keratoses)'),
(14, 'Actinomycosis'),
(15, 'Acupuncture'),
(16, 'Acute cholecystitis'),
(17, 'Acute kidney injury'),
(18, 'Acute lymphoblastic leukaemia'),
(19, 'Acute myeloid leukaemia'),
(20, 'Acute pancreatitis'),
(21, 'Acute respiratory distress syndrome (ARDS)'),
(22, 'Addison\'s disease'),
(23, 'Adenoidectomy'),
(24, 'Adenomyosis'),
(25, 'Age-related cataracts'),
(26, 'Age-related macular degeneration (AMD)'),
(27, 'Agoraphobia'),
(28, 'Albinism'),
(29, 'Alcohol misuse'),
(30, 'Alcohol poisoning'),
(31, 'Alcohol-related liver disease'),
(32, 'Alexander technique'),
(33, 'Alkaptonuria'),
(34, 'Allergic rhinitis'),
(35, 'Allergies'),
(36, 'Altitude sickness'),
(37, 'Alzheimer\'s disease'),
(38, 'Amblyopia, see Lazy eye'),
(39, 'Amnesia, see Memory loss (amnesia)'),
(40, 'Amniocentesis'),
(41, 'Amputation'),
(42, 'Amyloidosis'),
(43, 'Anabolic steroid misuse'),
(44, 'Anaemia (iron deficiency), see Iron deficiency anaemia'),
(45, 'Anaemia (vitamin B12 or folate deficiency), see Vitamin B12 or folate deficiency anaemia'),
(46, 'Anal cancer'),
(47, 'Anal fissure'),
(48, 'Anal fistula'),
(49, 'Anal pain'),
(50, 'Anaphylaxis'),
(51, 'Androgen insensitivity syndrome'),
(52, 'Aneurysm (abdominal aortic), see Abdominal aortic aneurysm'),
(53, 'Aneurysm (brain), see Brain aneurysm'),
(54, 'Angelman syndrome'),
(55, 'Angina'),
(56, 'Angioedema'),
(57, 'Angiography'),
(58, 'Angioplasty, see Coronary angioplasty and stent insertion'),
(59, 'Animal and human bites'),
(60, 'Ankle pain'),
(61, 'Ankylosing spondylitis'),
(62, 'Anorexia nervosa'),
(63, 'Anosmia, see Lost or changed sense of smell'),
(64, 'Antacids'),
(65, 'Antibiotics'),
(66, 'Anticoagulant medicines'),
(67, 'Antidepressants'),
(68, 'Antifungal medicines'),
(69, 'Antihistamines'),
(70, 'Antiphospholipid syndrome (APS)'),
(71, 'Antisocial personality disorder'),
(72, 'Anus (itchy), see Itchy bottom'),
(73, 'Anxiety disorders in children'),
(74, 'Aortic valve replacement'),
(75, 'Aphasia'),
(76, 'Appendicitis'),
(77, 'Arrhythmia, see Heart rhythm problems (arrhythmia)'),
(78, 'Arthritis'),
(79, 'Arthroscopy'),
(80, 'Asbestosis'),
(81, 'Asperger\'s, see Autism'),
(82, 'Aspergillosis'),
(83, 'Asthma'),
(84, 'Astigmatism'),
(85, 'Ataxia'),
(86, 'Atherosclerosis'),
(87, 'Athlete\'s foot'),
(88, 'Atopic eczema'),
(89, 'Atrial fibrillation'),
(90, 'Attention deficit hyperactivity disorder (ADHD)'),
(91, 'Auditory processing disorder (APD)'),
(92, 'Autism'),
(93, 'Autosomal dominant polycystic kidney disease'),
(94, 'Autosomal recessive polycystic kidney disease'),
(95, 'Avian flu, see Bird flu'),
(96, 'Baby'),
(97, 'Back pain'),
(98, 'Bacterial vaginosis'),
(99, 'Bad breath'),
(100, 'Baker\'s cyst'),
(101, 'Balanitis'),
(102, 'Barium enema'),
(103, 'Bartholin\'s cyst'),
(104, 'BCG vaccine for tuberculosis (TB)'),
(105, 'Bedbugs'),
(106, 'Bedwetting in children'),
(107, 'Beh?et\'s disease'),
(108, 'Being sick, see Diarrhoea and vomiting'),
(109, 'Bell\'s palsy'),
(110, 'Benign brain tumour (non-cancerous)'),
(111, 'Benign prostate enlargement'),
(112, 'Beta blockers'),
(113, 'Bile duct cancer (cholangiocarcinoma)'),
(114, 'Bilharzia, see Schistosomiasis (bilharzia)'),
(115, 'Binge eating disorder'),
(116, 'Biopsy'),
(117, 'Bipolar disorder'),
(118, 'Bird flu'),
(119, 'Birthmarks'),
(120, 'Bite (animal or human), see Animal and human bites'),
(121, 'Black eye'),
(122, 'Bladder cancer'),
(123, 'Bladder pain syndrome (interstitial cystitis)'),
(124, 'Bladder stones'),
(125, 'Bleeding after the menopause, see Postmenopausal bleeding'),
(126, 'Bleeding between periods or after sex, see Vaginal bleeding between periods or after sex'),
(127, 'Bleeding from the bottom (rectal bleeding)'),
(128, 'Blepharitis'),
(129, 'Blindness and vision loss'),
(130, 'Blisters'),
(131, 'Bloating'),
(132, 'Blood clots'),
(133, 'Blood groups'),
(134, 'Blood in semen'),
(135, 'Blood in urine'),
(136, 'Blood poisoning, see Sepsis'),
(137, 'Blood pressure (low), see Low blood pressure (hypotension)'),
(138, 'Blood pressure test'),
(139, 'Blood tests'),
(140, 'Blood transfusion'),
(141, 'Blue or grey skin or lips (cyanosis)'),
(142, 'Blushing'),
(143, 'Body dysmorphic disorder (BDD)'),
(144, 'Body odour (BO)'),
(145, 'Boils'),
(146, 'Bone cancer'),
(147, 'Bone cyst'),
(148, 'Bone density scan (DEXA scan)'),
(149, 'Borderline personality disorder'),
(150, 'Botulism'),
(151, 'Bowel cancer'),
(152, 'Bowel cancer screening'),
(153, 'Bowel incontinence'),
(154, 'Bowel polyps'),
(155, 'Bowen\'s disease'),
(156, 'Braces and orthodontics'),
(157, 'Brachycephaly and plagiocephaly, see Plagiocephaly and brachycephaly (flat head syndrome)'),
(158, 'Brain abscess'),
(159, 'Brain aneurysm'),
(160, 'Brain death'),
(161, 'Brain haemorrhage, see Subarachnoid haemorrhage'),
(162, 'Brain tumour (benign), see Benign brain tumour (non-cancerous)'),
(163, 'Brain tumour (malignant), see Malignant brain tumour (brain cancer)'),
(164, 'Brain tumours'),
(165, 'Breast abscess'),
(166, 'Breast cancer in men'),
(167, 'Breast cancer in women'),
(168, 'Breast lumps'),
(169, 'Breast pain'),
(170, 'Breast reduction on the NHS'),
(171, 'Breast screening (mammogram)'),
(172, 'Breath-holding in babies and children'),
(173, 'Broken ankle'),
(174, 'Broken arm or wrist'),
(175, 'Broken collarbone'),
(176, 'Broken finger or thumb'),
(177, 'Broken hip'),
(178, 'Broken leg'),
(179, 'Broken nose'),
(180, 'Broken or bruised ribs'),
(181, 'Broken toe'),
(182, 'Bronchiectasis'),
(183, 'Bronchiolitis'),
(184, 'Bronchitis'),
(185, 'Bronchodilators'),
(186, 'Brucellosis'),
(187, 'Brugada syndrome'),
(188, 'Bruxism, see Teeth grinding (bruxism)'),
(189, 'Bulging eyes (exophthalmos)'),
(190, 'Bulimia'),
(191, 'Bullous pemphigoid'),
(192, 'Bunions'),
(193, 'Burns and scalds'),
(194, 'Bursitis'),
(195, 'Buttock pain, see Sciatica'),
(196, 'CABG, see Coronary artery bypass graft'),
(197, 'Caesarean section'),
(198, 'Cancer'),
(199, 'Cannabis oil (medical cannabis), see Medical cannabis (and cannabis oils)'),
(200, 'Carbon monoxide poisoning'),
(201, 'Cardiac catheterisation and coronary angiography'),
(202, 'Cardiomyopathy'),
(203, 'Cardiovascular disease'),
(204, 'Carotid endarterectomy'),
(205, 'Carpal tunnel syndrome'),
(206, 'Cat bites, see Animal and human bites'),
(207, 'Cataract surgery'),
(208, 'Cataracts (age-related), see Age-related cataracts'),
(209, 'Cataracts (children), see Childhood cataracts'),
(210, 'Catarrh'),
(211, 'Cavernoma'),
(212, 'Cavernous sinus thrombosis'),
(213, 'Cellulitis'),
(214, 'Cerebral palsy'),
(215, 'Cervical cancer'),
(216, 'Cervical screening'),
(217, 'Cervical spondylosis'),
(218, 'Charcot-Marie-Tooth disease'),
(219, 'Charles Bonnet syndrome'),
(220, 'Chemotherapy'),
(221, 'Chest infection'),
(222, 'Chest pain'),
(223, 'Chiari malformation'),
(224, 'Chickenpox'),
(225, 'Chickenpox vaccine'),
(226, 'Chilblains'),
(227, 'Childhood cataracts'),
(228, 'Children\'s flu vaccine'),
(229, 'Chipped, broken or cracked tooth'),
(230, 'Chiropractic'),
(231, 'Chlamydia'),
(232, 'Cholecystitis (acute), see Acute cholecystitis'),
(233, 'Cholera'),
(234, 'Cholesteatoma'),
(235, 'Cholesterol (high), see High cholesterol'),
(236, 'Chorionic villus sampling'),
(237, 'Chronic fatigue syndrome (ME/CFS), see Myalgic encephalomyelitis or chronic fatigue syndrome (ME/CFS'),
(238, 'Chronic kidney disease'),
(239, 'Chronic lymphocytic leukaemia'),
(240, 'Chronic myeloid leukaemia'),
(241, 'Chronic obstructive pulmonary disease (COPD)'),
(242, 'Chronic pancreatitis'),
(243, 'Chronic traumatic encephalopathy'),
(244, 'Circumcision in boys'),
(245, 'Circumcision in men'),
(246, 'Cirrhosis'),
(247, 'CJD, see Creutzfeldt-Jakob disease'),
(248, 'Claustrophobia'),
(249, 'Cleft lip and palate'),
(250, 'Clinical trials'),
(251, 'Clostridium difficile (C. diff) infection'),
(252, 'Club foot'),
(253, 'Cluster headaches'),
(254, 'Coccyx pain, see Tailbone (coccyx) pain'),
(255, 'Coeliac disease'),
(256, 'Cognitive behavioural therapy (CBT)'),
(257, 'Cold sores'),
(258, 'Colic'),
(259, 'Colon cancer, see Bowel cancer'),
(260, 'Colonoscopy'),
(261, 'Colostomy'),
(262, 'Colour blindness, see Colour vision deficiency (colour blindness)'),
(263, 'Colour vision deficiency (colour blindness)'),
(264, 'Colposcopy'),
(265, 'Combined pill'),
(266, 'Common cold'),
(267, 'Compartment syndrome'),
(268, 'Complementary and alternative medicine'),
(269, 'Complex regional pain syndrome'),
(270, 'Concussion, see Head injury and concussion'),
(271, 'Condoms'),
(272, 'Confusion (sudden), see Sudden confusion (delirium)'),
(273, 'Congenital heart disease'),
(274, 'Congenital hip dislocation, see Developmental dysplasia of the hip'),
(275, 'Conjunctivitis'),
(276, 'Consent to treatment'),
(277, 'Constipation'),
(278, 'Contact dermatitis'),
(279, 'Continuous glucose monitoring and hybrid closed loop for diabetes'),
(280, 'Contraception'),
(281, 'Contraceptive implant'),
(282, 'Contraceptive injection'),
(283, 'Contraceptive patch'),
(284, 'Cornea transplant'),
(285, 'Corns and calluses'),
(286, 'Coronary angioplasty and stent insertion'),
(287, 'Coronary artery bypass graft'),
(288, 'Coronary heart disease'),
(289, 'Coronavirus, see COVID-19'),
(290, 'Corticobasal degeneration'),
(291, 'Corticosteroid cream, see Topical corticosteroids'),
(292, 'Corticosteroids, see Steroids'),
(293, 'Cosmetic procedures'),
(294, 'Costochondritis'),
(295, 'Cough'),
(296, 'Coughing up blood (blood in phlegm)'),
(297, 'Counselling'),
(298, 'COVID-19'),
(299, 'COVID-19 vaccine'),
(300, 'Cradle cap'),
(301, 'Craniosynostosis'),
(302, 'Creutzfeldt-Jakob disease'),
(303, 'Crohn\'s disease'),
(304, 'Croup'),
(305, 'CT scan'),
(306, 'Cushing\'s syndrome'),
(307, 'Cuts and grazes'),
(308, 'Cyanosis, see Blue or grey skin or lips (cyanosis)'),
(309, 'Cyclical vomiting syndrome'),
(310, 'Cyclospora'),
(311, 'Cystic fibrosis'),
(312, 'Cystitis'),
(313, 'Cystoscopy'),
(314, 'Cytomegalovirus (CMV)'),
(315, 'Dandruff'),
(316, 'Deafblindness'),
(317, 'Deafness, see Hearing loss'),
(318, 'Decongestants'),
(319, 'Dehydration'),
(320, 'Delirium, see Sudden confusion (delirium)'),
(321, 'Dementia'),
(322, 'Dementia (frontotemporal), see Frontotemporal dementia'),
(323, 'Dementia (vascular), see Vascular dementia'),
(324, 'Dementia with Lewy bodies'),
(325, 'Dengue'),
(326, 'Dental abscess'),
(327, 'Dental pain, see Toothache'),
(328, 'Dentures (false teeth)'),
(329, 'Depression'),
(330, 'Depression in adults'),
(331, 'Detached retina (retinal detachment)'),
(332, 'Developmental co-ordination disorder (dyspraxia) in children'),
(333, 'Developmental dysplasia of the hip'),
(334, 'DEXA scan, see Bone density scan (DEXA scan)'),
(335, 'Diabetes'),
(336, 'Diabetes (type 1), see Type 1 diabetes'),
(337, 'Diabetes (type 2), see Type 2 diabetes'),
(338, 'Diabetes in pregnancy, see Gestational diabetes'),
(339, 'Diabetes insipidus'),
(340, 'Diabetic eye screening'),
(341, 'Diabetic ketoacidosis'),
(342, 'Diabetic retinopathy'),
(343, 'Dialysis'),
(344, 'Diaphragm or cap'),
(345, 'Diarrhoea and vomiting'),
(346, 'Diarrhoea, see Diarrhoea and vomiting'),
(347, 'Differences in sex development'),
(348, 'DiGeorge syndrome (22q11 deletion)'),
(349, 'Diphtheria'),
(350, 'Discoid eczema'),
(351, 'Dislocated kneecap'),
(352, 'Dislocated shoulder'),
(353, 'Dissociative disorders'),
(354, 'Diverticular disease and diverticulitis'),
(355, 'Dizziness'),
(356, 'Do not attempt cardiopulmonary resuscitation (DNACPR) decisions'),
(357, 'Dog bites, see Animal and human bites'),
(358, 'Double vision'),
(359, 'Down\'s syndrome'),
(360, 'Dry eyes'),
(361, 'Dry lips, see Sore or dry lips'),
(362, 'Dry mouth'),
(363, 'Dupuytren\'s contracture'),
(364, 'DVT (deep vein thrombosis)'),
(365, 'Dwarfism, see Restricted growth (dwarfism)'),
(366, 'Dysarthria (difficulty speaking)'),
(367, 'Dysentery'),
(368, 'Dyslexia'),
(369, 'Dysphagia (swallowing problems)'),
(370, 'Dyspraxia (developmental co-ordination disorder) in adults'),
(371, 'Dyspraxia in children, see Developmental co-ordination disorder (dyspraxia) in children'),
(372, 'Dystonia'),
(373, 'Ear infections'),
(374, 'Earache'),
(375, 'Eardrum (burst), see Perforated eardrum'),
(376, 'Early menopause'),
(377, 'Early or delayed puberty'),
(378, 'Earwax build-up'),
(379, 'Eating disorders'),
(380, 'Ebola virus disease'),
(381, 'Echocardiogram'),
(382, 'Ectopic beats, see Heart palpitations'),
(383, 'Ectopic pregnancy'),
(384, 'Ectropion'),
(385, 'Eczema (atopic), see Atopic eczema'),
(386, 'Eczema (contact dermatitis), see Contact dermatitis'),
(387, 'Eczema (discoid), see Discoid eczema'),
(388, 'Eczema (varicose), see Varicose eczema'),
(389, 'Edwards\' syndrome (trisomy 18)'),
(390, 'Ehlers-Danlos syndromes'),
(391, 'Ejaculation problems'),
(392, 'Elbow and arm pain'),
(393, 'Electrocardiogram (ECG)'),
(394, 'Electroencephalogram (EEG)'),
(395, 'Electrolyte test'),
(396, 'Emergency contraceptive pill (morning after pill)'),
(397, 'Emollients'),
(398, 'Empyema'),
(399, 'Encephalitis'),
(400, 'Endocarditis'),
(401, 'Endometrial cancer, see Womb (uterus) cancer'),
(402, 'Endometriosis'),
(403, 'Endoscopy'),
(404, 'Enhanced recovery'),
(405, 'Epidermolysis bullosa'),
(406, 'Epididymitis'),
(407, 'Epidural'),
(408, 'Epiglottitis'),
(409, 'Epilepsy'),
(410, 'Erectile dysfunction (impotence)'),
(411, 'Erythema multiforme'),
(412, 'Erythema nodosum'),
(413, 'Erythrocytosis'),
(414, 'Erythromelalgia'),
(415, 'Essential tremor, see Tremor or shaking hands'),
(416, 'Euthanasia and assisted suicide'),
(417, 'Excessive daytime sleepiness (hypersomnia)'),
(418, 'Excessive hair growth (hirsutism)'),
(419, 'Excessive sweating (hyperhidrosis)'),
(420, 'Excessive thirst'),
(421, 'Eye cancer'),
(422, 'Eye cancer in children, see Retinoblastoma'),
(423, 'Eye flashes, see Floaters and flashes in the eyes'),
(424, 'Eye floaters, see Floaters and flashes in the eyes'),
(425, 'Eye infection (herpes), see Herpes simplex eye infections'),
(426, 'Eye injuries'),
(427, 'Eye tests for children'),
(428, 'Eyelid problems'),
(429, 'Fabricated or induced illness'),
(430, 'Face blindness, see Prosopagnosia (face blindness)'),
(431, 'Fainting'),
(432, 'Falls'),
(433, 'Farting (flatulence)'),
(434, 'Febrile seizures'),
(435, 'Feeling sick (nausea)'),
(436, 'Female genital mutilation (FGM)'),
(437, 'Female sterilisation'),
(438, 'Femoral hernia repair'),
(439, 'Fetal alcohol spectrum disorder'),
(440, 'Fever in adults, see High temperature (fever) in adults'),
(441, 'Fever in children, see High temperature (fever) in children'),
(442, 'Fibroids'),
(443, 'Fibromyalgia'),
(444, 'Finger pain'),
(445, 'First aid'),
(446, 'Fits (children with fever), see Febrile seizures'),
(447, 'Fits (seizures), see What to do if someone has a seizure (fit)'),
(448, 'Flat feet'),
(449, 'Flat head syndrome, see Plagiocephaly and brachycephaly (flat head syndrome)'),
(450, 'Flatulence, see Farting (flatulence)'),
(451, 'Floaters and flashes in the eyes'),
(452, 'Flu'),
(453, 'Flu vaccine'),
(454, 'Food allergy'),
(455, 'Food colours and hyperactivity'),
(456, 'Food intolerance'),
(457, 'Food poisoning'),
(458, 'Foot drop'),
(459, 'Foot pain'),
(460, 'Foreskin problems, see Tight foreskin (phimosis)'),
(461, 'Frontotemporal dementia'),
(462, 'Frostbite'),
(463, 'Frozen shoulder'),
(464, 'Functional neurological disorder, see Medically unexplained symptoms'),
(465, 'Fungal nail infection'),
(466, 'Gallbladder cancer'),
(467, 'Gallbladder pain, see Acute cholecystitis'),
(468, 'Gallbladder removal'),
(469, 'Gallstones'),
(470, 'Ganglion cyst'),
(471, 'Gangrene'),
(472, 'Gastrectomy'),
(473, 'Gastritis'),
(474, 'Gastro-oesophageal reflux disease (GORD), see Heartburn and acid reflux'),
(475, 'Gastroenteritis, see Diarrhoea and vomiting'),
(476, 'Gastroparesis'),
(477, 'Gastroscopy'),
(478, 'Gender dysphoria'),
(479, 'General anaesthetic'),
(480, 'Generalised anxiety disorder (GAD)'),
(481, 'Genetic and genomic testing'),
(482, 'Genetic test for cancer gene, see Predictive genetic tests for cancer risk genes'),
(483, 'Genital herpes'),
(484, 'Genital warts'),
(485, 'German measles, see Rubella (german measles)'),
(486, 'Gestational diabetes'),
(487, 'Giant cell arteritis, see Temporal arteritis'),
(488, 'Giardiasis'),
(489, 'Gigantism, see Acromegaly'),
(490, 'Gilbert\'s syndrome'),
(491, 'Glandular fever'),
(492, 'Glaucoma'),
(493, 'Glomerulonephritis'),
(494, 'Glue ear'),
(495, 'Glutaric aciduria type 1'),
(496, 'Goitre'),
(497, 'Gonorrhoea'),
(498, 'Gout'),
(499, 'Granuloma annulare'),
(500, 'Granulomatosis with polyangiitis (GPA)'),
(501, 'Group B strep'),
(502, 'Growing pains'),
(503, 'Guillain-Barr? syndrome'),
(504, 'Gum disease'),
(505, 'Gynaecomastia'),
(506, 'Haemochromatosis'),
(507, 'Haemophilia'),
(508, 'Haemophilus influenzae type b (Hib)'),
(509, 'Haemorrhoids, see Piles (haemorrhoids)'),
(510, 'Hair dye reactions'),
(511, 'Hair loss'),
(512, 'Halitosis, see Bad breath'),
(513, 'Hallucinations and hearing voices'),
(514, 'Hamstring injury'),
(515, 'Hand pain'),
(516, 'Hand tendon repair'),
(517, 'Hand, foot and mouth disease'),
(518, 'Having an operation (surgery)'),
(519, 'Hay fever'),
(520, 'Head and neck cancer'),
(521, 'Head injury and concussion'),
(522, 'Head lice and nits'),
(523, 'Headaches'),
(524, 'Headaches (tension-type), see Tension headaches'),
(525, 'Health anxiety'),
(526, 'Hearing aids and implants'),
(527, 'Hearing loss'),
(528, 'Hearing tests'),
(529, 'Hearing voices, see Hallucinations and hearing voices'),
(530, 'Heart attack'),
(531, 'Heart block'),
(532, 'Heart bypass, see Coronary artery bypass graft'),
(533, 'Heart disease (coronary), see Coronary heart disease'),
(534, 'Heart failure'),
(535, 'Heart pain, see Chest pain'),
(536, 'Heart palpitations'),
(537, 'Heart rhythm problems (arrhythmia)'),
(538, 'Heart valve problems, see Mitral valve problems'),
(539, 'Heart valve replacement, see Aortic valve replacement'),
(540, 'Heartburn and acid reflux'),
(541, 'Heat exhaustion and heatstroke'),
(542, 'Heat rash (prickly heat)'),
(543, 'Heavy periods'),
(544, 'Heel pain'),
(545, 'Help for suicidal thoughts'),
(546, 'Henoch-Sch?nlein purpura (HSP)'),
(547, 'Hepatitis'),
(548, 'Hepatitis A'),
(549, 'Hepatitis B'),
(550, 'Hepatitis B vaccine'),
(551, 'Hepatitis C'),
(552, 'Herbal medicines'),
(553, 'Hereditary haemorrhagic telangiectasia (HHT)'),
(554, 'Hereditary neuropathy with pressure palsies (HNPP)'),
(555, 'Hereditary spastic paraplegia'),
(556, 'Hernia'),
(557, 'Hernia (femoral), see Femoral hernia repair'),
(558, 'Hernia (hiatus), see Hiatus hernia'),
(559, 'Hernia (inguinal), see Inguinal hernia repair'),
(560, 'Hernia (umbilical), see Umbilical hernia repair'),
(561, 'Herpes (genital), see Genital herpes'),
(562, 'Herpes in babies, see Neonatal herpes (herpes in a baby)'),
(563, 'Herpes simplex eye infections'),
(564, 'Herpetic whitlow (whitlow finger)'),
(565, 'Hiatus hernia'),
(566, 'Hib, see Haemophilus influenzae type b (Hib)'),
(567, 'Hib/MenC vaccine'),
(568, 'Hiccups'),
(569, 'Hidradenitis suppurativa (HS)'),
(570, 'High blood pressure'),
(571, 'High blood sugar (hyperglycaemia)'),
(572, 'High cholesterol'),
(573, 'High temperature (fever) in adults'),
(574, 'High temperature (fever) in children'),
(575, 'Hip dysplasia, see Developmental dysplasia of the hip'),
(576, 'Hip pain in adults'),
(577, 'Hip pain in children (irritable hip)'),
(578, 'Hip replacement'),
(579, 'Hirschsprung\'s disease'),
(580, 'Hirsutism, see Excessive hair growth (hirsutism)'),
(581, 'HIV and AIDS'),
(582, 'Hives'),
(583, 'Hoarding disorder'),
(584, 'Hodgkin lymphoma'),
(585, 'Home oxygen therapy'),
(586, 'Homeopathy'),
(587, 'Homocystinuria'),
(588, 'Hookworm, see Worms in humans'),
(589, 'How to check your breasts or chest'),
(590, 'How to check your testicles'),
(591, 'How to collect a sample of poo (stool sample)'),
(592, 'HPV vaccine'),
(593, 'Hughes syndrome, see Antiphospholipid syndrome (APS)'),
(594, 'Human bites, see Animal and human bites'),
(595, 'Human papillomavirus (HPV)'),
(596, 'Huntington\'s disease'),
(597, 'Hydrocephalus'),
(598, 'Hydronephrosis'),
(599, 'Hyperacusis, see Noise sensitivity (hyperacusis)'),
(600, 'Hyperhidrosis, see Excessive sweating (hyperhidrosis)'),
(601, 'Hyperparathyroidism'),
(602, 'Hypersomnia, see Excessive daytime sleepiness (hypersomnia)'),
(603, 'Hypertension, see High blood pressure'),
(604, 'Hyperthyroidism, see Overactive thyroid (hyperthyroidism)'),
(605, 'Hypnotherapy'),
(606, 'Hypoglycaemia, see Low blood sugar (hypoglycaemia)'),
(607, 'Hypoparathyroidism'),
(608, 'Hypotension, see Low blood pressure (hypotension)'),
(609, 'Hypothermia'),
(610, 'Hypothyroidism, see Underactive thyroid (hypothyroidism)'),
(611, 'Hysterectomy'),
(612, 'Hysteroscopy'),
(613, 'IBD, see Inflammatory bowel disease'),
(614, 'IBS, see Irritable bowel syndrome (IBS)'),
(615, 'Ichthyosis'),
(616, 'Idiopathic pulmonary fibrosis'),
(617, 'Ileostomy'),
(618, 'Impetigo'),
(619, 'Impotence, see Erectile dysfunction (impotence)'),
(620, 'Incontinence (urinary), see Urinary incontinence'),
(621, 'Indigestion'),
(622, 'Infected piercings'),
(623, 'Infertility'),
(624, 'Inflammatory bowel disease'),
(625, 'Influenza, see Flu'),
(626, 'Ingrown hairs'),
(627, 'Ingrown toenail'),
(628, 'Inguinal hernia repair'),
(629, 'Insect bites and stings'),
(630, 'Insomnia'),
(631, 'Intensive care'),
(632, 'Internal (female) condoms'),
(633, 'Intersex, see Differences in sex development'),
(634, 'Interstitial cystitis, see Bladder pain syndrome (interstitial cystitis)'),
(635, 'Intracranial hypertension'),
(636, 'Intrauterine insemination (IUI)'),
(637, 'Iron deficiency anaemia'),
(638, 'Irregular periods'),
(639, 'Irritable bowel syndrome (IBS)'),
(640, 'Irritable hip, see Hip pain in children (irritable hip)'),
(641, 'Isovaleric acidaemia'),
(642, 'Itchy bottom'),
(643, 'Itchy skin'),
(644, 'IUD (intrauterine device) or copper coil'),
(645, 'IUS (intrauterine system) or hormonal coil'),
(646, 'IVF'),
(647, 'Japanese encephalitis'),
(648, 'Jaundice'),
(649, 'Jaundice in newborns, see Newborn jaundice'),
(650, 'Jaw pain, see Temporomandibular disorder (TMD)'),
(651, 'Jellyfish and other sea creature stings'),
(652, 'Jet lag'),
(653, 'Joint hypermobility syndrome'),
(654, 'Joint pain'),
(655, 'Kawasaki disease'),
(656, 'Keloid scars'),
(657, 'Keratosis pilaris'),
(658, 'Kidney cancer'),
(659, 'Kidney failure, see Chronic kidney disease'),
(660, 'Kidney infection'),
(661, 'Kidney stones'),
(662, 'Klinefelter syndrome'),
(663, 'Knee cartilage damage, see Meniscus tear (knee cartilage damage)'),
(664, 'Knee ligament surgery'),
(665, 'Knee pain'),
(666, 'Knee replacement'),
(667, 'Knock knees'),
(668, 'Knocked-out tooth'),
(669, 'Kyphosis'),
(670, 'Labial fusion'),
(671, 'Labyrinthitis and vestibular neuritis'),
(672, 'Lactate dehydrogenase (LDH) test'),
(673, 'Lactose intolerance'),
(674, 'Lambert-Eaton myasthenic syndrome'),
(675, 'Laparoscopy (keyhole surgery)'),
(676, 'Laryngeal (larynx) cancer'),
(677, 'Laryngitis'),
(678, 'Laser eye surgery and lens surgery'),
(679, 'Laxatives'),
(680, 'Lazy eye'),
(681, 'Learning disabilities'),
(682, 'Leg cramps'),
(683, 'Leg ulcer, see Venous leg ulcer'),
(684, 'Legionnaires\' disease'),
(685, 'Leptospirosis (Weil\'s disease)'),
(686, 'Leukaemia (acute lymphoblastic), see Acute lymphoblastic leukaemia'),
(687, 'Leukaemia (acute myeloid), see Acute myeloid leukaemia'),
(688, 'Leukaemia (chronic lymphocytic), see Chronic lymphocytic leukaemia'),
(689, 'Leukoplakia'),
(690, 'Lichen planus'),
(691, 'Lichen sclerosus'),
(692, 'Limping in children'),
(693, 'Lipoedema'),
(694, 'Lipoma'),
(695, 'Lips (sore or dry), see Sore or dry lips'),
(696, 'Listeriosis'),
(697, 'Liver cancer'),
(698, 'Liver disease'),
(699, 'Liver disease (alcohol-related), see Alcohol-related liver disease'),
(700, 'Local anaesthesia'),
(701, 'Long QT syndrome'),
(702, 'Long-sightedness'),
(703, 'Lost or changed sense of smell'),
(704, 'Low blood pressure (hypotension)'),
(705, 'Low blood sugar (hypoglycaemia)'),
(706, 'Low sex drive (loss of libido)'),
(707, 'Low sperm count'),
(708, 'Low white blood cell count'),
(709, 'Lower back pain, see Back pain'),
(710, 'Lumbago, see Back pain'),
(711, 'Lumbar decompression surgery'),
(712, 'Lumbar puncture'),
(713, 'Lumps'),
(714, 'Lung cancer'),
(715, 'Lung health checks'),
(716, 'Lupus'),
(717, 'Lyme disease'),
(718, 'Lymphoedema'),
(719, 'Macular degeneration (age-related), see Age-related macular degeneration (AMD)'),
(720, 'Macular hole'),
(721, 'Magnesium test'),
(722, 'Malaria'),
(723, 'Male menopause, see The \'male menopause\''),
(724, 'Male sterilisation, see Vasectomy'),
(725, 'Malignant brain tumour (brain cancer)'),
(726, 'Mallet finger'),
(727, 'Malnutrition'),
(728, 'Mammogram, see Breast screening (mammogram)'),
(729, 'Maple syrup urine disease'),
(730, 'Marfan syndrome'),
(731, 'Mastectomy'),
(732, 'Mastitis'),
(733, 'Mastocytosis'),
(734, 'Mastoiditis'),
(735, 'MCADD'),
(736, 'Measles'),
(737, 'Medical cannabis (and cannabis oils)'),
(738, 'Medically unexplained symptoms'),
(739, 'Medicines information'),
(740, 'Melanoma skin cancer'),
(741, 'Memory loss (amnesia)'),
(742, 'MenACWY vaccine'),
(743, 'MenB vaccine'),
(744, 'Meningitis'),
(745, 'Meniscus tear (knee cartilage damage)'),
(746, 'Menopause'),
(747, 'Menopause (early), see Early menopause'),
(748, 'Menstrual pain, see Period pain'),
(749, 'Mesothelioma'),
(750, 'Metabolic syndrome'),
(751, 'Metallic taste'),
(752, 'Metatarsalgia, see Pain in the ball of the foot'),
(753, 'Middle East respiratory syndrome (MERS)'),
(754, 'Migraine'),
(755, 'Miscarriage'),
(756, 'Missed or late periods'),
(757, 'Mitral valve problems'),
(758, 'MMR (measles, mumps and rubella) vaccine'),
(759, 'Molar pregnancy'),
(760, 'Moles'),
(761, 'Molluscum contagiosum'),
(762, 'Morton\'s neuroma'),
(763, 'Motion sickness'),
(764, 'Motor neurone disease'),
(765, 'Mouth cancer'),
(766, 'Mouth thrush, see Oral thrush (mouth thrush)'),
(767, 'Mouth ulcers'),
(768, 'Mpox'),
(769, 'MRI scan'),
(770, 'MRSA'),
(771, 'Mucositis'),
(772, 'Multiple myeloma'),
(773, 'Multiple sclerosis'),
(774, 'Multiple system atrophy'),
(775, 'Mumps'),
(776, 'Munchausen syndrome'),
(777, 'Muscular dystrophy'),
(778, 'Myalgic encephalomyelitis or chronic fatigue syndrome (ME/CFS)'),
(779, 'Myasthenia gravis'),
(780, 'Myelodysplastic syndrome (myelodysplasia)'),
(781, 'Myeloma, see Multiple myeloma'),
(782, 'Myopia, see Short-sightedness (myopia)'),
(783, 'Myositis'),
(784, 'M?ni?re\'s disease'),
(785, 'Nail fungal infection, see Fungal nail infection'),
(786, 'Nail patella syndrome'),
(787, 'Nail problems'),
(788, 'Nappy rash'),
(789, 'Narcolepsy'),
(790, 'Nasal and sinus cancer'),
(791, 'Nasal polyps'),
(792, 'Nasopharyngeal cancer'),
(793, 'Natural family planning'),
(794, 'Nausea, see Feeling sick (nausea)'),
(795, 'Neck pain'),
(796, 'Necrotising fasciitis'),
(797, 'Neonatal herpes (herpes in a baby)'),
(798, 'Nephrotic syndrome in children'),
(799, 'Neuroendocrine tumours'),
(800, 'Neuroendocrine tumours and carcinoid syndrome'),
(801, 'Neurofibromatosis type 1'),
(802, 'Neurofibromatosis type 2'),
(803, 'Neuromyelitis optica'),
(804, 'Newborn jaundice'),
(805, 'Newborn respiratory distress syndrome'),
(806, 'NHS screening'),
(807, 'Night sweats'),
(808, 'Night terrors and nightmares'),
(809, 'Nipple discharge'),
(810, 'Noise sensitivity (hyperacusis)'),
(811, 'Non-alcoholic fatty liver disease (NAFLD)'),
(812, 'Non-allergic rhinitis'),
(813, 'Non-gonococcal urethritis, see Urethritis'),
(814, 'Non-Hodgkin lymphoma'),
(815, 'Non-melanoma skin cancer'),
(816, 'Noonan syndrome'),
(817, 'Norovirus (vomiting bug)'),
(818, 'Nose cancer, see Nasal and sinus cancer'),
(819, 'Nosebleed'),
(820, 'NSAIDs'),
(821, 'Obesity'),
(822, 'Obsessive compulsive disorder (OCD)'),
(823, 'Obstructive sleep apnoea, see Sleep apnoea'),
(824, 'Occupational therapy'),
(825, 'Oesophageal atresia and tracheo-oesophageal fistula'),
(826, 'Oesophageal cancer'),
(827, 'Oral thrush (mouth thrush)'),
(828, 'Orf'),
(829, 'Orthodontics'),
(830, 'Osteoarthritis'),
(831, 'Osteomalacia, see Rickets and osteomalacia'),
(832, 'Osteomyelitis'),
(833, 'Osteopathy'),
(834, 'Osteophyte (bone spur)'),
(835, 'Osteoporosis'),
(836, 'Otosclerosis'),
(837, 'Ovarian cancer'),
(838, 'Ovarian cyst'),
(839, 'Overactive thyroid (hyperthyroidism)'),
(840, 'Ovulation pain'),
(841, 'Oxygen therapy, see Home oxygen therapy'),
(842, 'Pacemaker implantation'),
(843, 'Paget\'s disease of bone'),
(844, 'Paget\'s disease of the nipple'),
(845, 'Pain in testicles, see Testicle pain'),
(846, 'Pain in the back of the hand'),
(847, 'Pain in the ball of the foot'),
(848, 'Pain in the bottom of the foot'),
(849, 'Pain in the palm of the hand'),
(850, 'Pain in the top of the foot'),
(851, 'Painful bladder syndrome, see Bladder pain syndrome (interstitial cystitis)'),
(852, 'Painful periods, see Period pain'),
(853, 'Palpitations, see Heart palpitations'),
(854, 'Pancreatic cancer'),
(855, 'Pancreatitis (acute), see Acute pancreatitis'),
(856, 'Pancreatitis (chronic), see Chronic pancreatitis'),
(857, 'Panic disorder'),
(858, 'Paralysis'),
(859, 'Parkinson\'s disease'),
(860, 'Patau\'s syndrome'),
(861, 'Peak flow test'),
(862, 'Pelvic inflammatory disease'),
(863, 'Pelvic organ prolapse'),
(864, 'Pelvic pain'),
(865, 'Pemphigus vulgaris'),
(866, 'Penile cancer'),
(867, 'Penis lumps and spots'),
(868, 'Perforated eardrum'),
(869, 'Pericarditis'),
(870, 'Perimenopause, see Menopause'),
(871, 'Period pain'),
(872, 'Periods'),
(873, 'Periods (heavy), see Heavy periods'),
(874, 'Periods (irregular), see Irregular periods'),
(875, 'Periods (missed or late), see Missed or late periods'),
(876, 'Peripheral arterial disease (PAD)'),
(877, 'Peripheral neuropathy'),
(878, 'Peritonitis'),
(879, 'Persistent trophoblastic disease and choriocarcinoma'),
(880, 'Personality disorders'),
(881, 'PET scan'),
(882, 'Peyronie\'s disease'),
(883, 'Phaeochromocytoma'),
(884, 'Phenylketonuria'),
(885, 'Phimosis, see Tight foreskin (phimosis)'),
(886, 'Phlebitis (superficial thrombophlebitis)'),
(887, 'Phobias'),
(888, 'Phosphate test'),
(889, 'Photodynamic therapy (PDT)'),
(890, 'Physiotherapy'),
(891, 'Piles (haemorrhoids)'),
(892, 'Pilonidal sinus'),
(893, 'Pins and needles'),
(894, 'PIP breast implants'),
(895, 'Pityriasis rosea'),
(896, 'Pityriasis versicolor'),
(897, 'Plagiocephaly and brachycephaly (flat head syndrome)'),
(898, 'Plantar fasciitis'),
(899, 'Plastic surgery'),
(900, 'Pleurisy'),
(901, 'PMS (premenstrual syndrome)'),
(902, 'Pneumococcal vaccine'),
(903, 'Pneumonia'),
(904, 'Poisoning'),
(905, 'Polio'),
(906, 'Polycystic kidney disease (autosomal dominant), see Autosomal dominant polycystic kidney disease'),
(907, 'Polycystic kidney disease (autosomal recessive), see Autosomal recessive polycystic kidney disease'),
(908, 'Polycystic ovary syndrome'),
(909, 'Polyhydramnios (too much amniotic fluid)'),
(910, 'Polymorphic light eruption'),
(911, 'Polymyalgia rheumatica'),
(912, 'Pompholyx (dyshidrotic eczema)'),
(913, 'Popliteal cyst, see Baker\'s cyst'),
(914, 'Post-herpetic neuralgia'),
(915, 'Post-mortem'),
(916, 'Post-polio syndrome'),
(917, 'Post-traumatic stress disorder (PTSD)'),
(918, 'Postmenopausal bleeding'),
(919, 'Postnatal depression'),
(920, 'Postpartum psychosis'),
(921, 'Postural tachycardia syndrome (PoTS)'),
(922, 'Potassium test'),
(923, 'Prader-Willi syndrome'),
(924, 'Pre-eclampsia'),
(925, 'Predictive genetic tests for cancer risk genes'),
(926, 'Pregnancy'),
(927, 'Premature ejaculation, see Ejaculation problems'),
(928, 'Pressure ulcers (pressure sores)'),
(929, 'Priapism (painful erections)'),
(930, 'Prickly heat, see Heat rash (prickly heat)'),
(931, 'Primary biliary cholangitis (primary biliary cirrhosis)'),
(932, 'Probiotics'),
(933, 'Problems swallowing pills'),
(934, 'Proctalgia, see Anal pain'),
(935, 'Progestogen-only pill'),
(936, 'Progressive supranuclear palsy'),
(937, 'Prolapse (pelvic organ), see Pelvic organ prolapse'),
(938, 'Prosopagnosia (face blindness)'),
(939, 'Prostate cancer'),
(940, 'Prostate enlargement, see Benign prostate enlargement'),
(941, 'Prostate problems'),
(942, 'Prostatitis'),
(943, 'PSA test'),
(944, 'Psoriasis'),
(945, 'Psoriatic arthritis'),
(946, 'Psychiatry'),
(947, 'Psychosis'),
(948, 'Psychotic depression'),
(949, 'Puberty (early or delayed), see Early or delayed puberty'),
(950, 'Pubic lice'),
(951, 'Pudendal neuralgia'),
(952, 'Pulmonary embolism'),
(953, 'Pulmonary fibrosis, see Idiopathic pulmonary fibrosis'),
(954, 'Pulmonary hypertension'),
(955, 'Pyoderma gangrenosum'),
(956, 'Q fever'),
(957, 'Quinsy, see Tonsillitis'),
(958, 'Rabies'),
(959, 'Radiotherapy'),
(960, 'Rashes in babies and children'),
(961, 'Raynaud\'s'),
(962, 'Reactive arthritis'),
(963, 'Rectal bleeding, see Bleeding from the bottom (rectal bleeding)'),
(964, 'Rectal cancer, see Bowel cancer'),
(965, 'Rectal examination'),
(966, 'Red blood cell count'),
(967, 'Red eye'),
(968, 'Reflux in babies'),
(969, 'Renal cancer, see Kidney cancer'),
(970, 'Repetitive strain injury (RSI)'),
(971, 'Respiratory syncytial virus (RSV)'),
(972, 'Respiratory syncytial virus (RSV) vaccine, see RSV vaccine'),
(973, 'Respiratory tract infections (RTIs)'),
(974, 'Restless legs syndrome'),
(975, 'Restricted growth (dwarfism)'),
(976, 'Retinal detachment, see Detached retina (retinal detachment)'),
(977, 'Retinal migraine'),
(978, 'Retinoblastoma'),
(979, 'Rett syndrome'),
(980, 'Reye\'s syndrome'),
(981, 'Rhesus disease'),
(982, 'Rheumatic fever'),
(983, 'Rheumatoid arthritis'),
(984, 'Rhinitis (allergic), see Allergic rhinitis'),
(985, 'Rickets and osteomalacia'),
(986, 'Ringworm'),
(987, 'Root canal treatment'),
(988, 'Rosacea'),
(989, 'Roseola'),
(990, 'Rotavirus vaccine'),
(991, 'Roundworm, see Worms in humans'),
(992, 'RSV vaccine'),
(993, 'RSV, see Respiratory syncytial virus (RSV)'),
(994, 'Rubella (german measles)'),
(995, 'Salivary gland stones'),
(996, 'Sarcoidosis'),
(997, 'Scabies'),
(998, 'Scarlet fever'),
(999, 'Scars'),
(1000, 'Schistosomiasis (bilharzia)'),
(1001, 'Schizophrenia'),
(1002, 'Sciatica'),
(1003, 'Scleroderma'),
(1004, 'Scoliosis'),
(1005, 'Scurvy'),
(1006, 'Seasonal affective disorder (SAD)'),
(1007, 'Seizures (children with fever), see Febrile seizures'),
(1008, 'Seizures (fits), see What to do if someone has a seizure (fit)'),
(1009, 'Selective mutism'),
(1010, 'Self-harm'),
(1011, 'Sense of smell (lost/changed), see Lost or changed sense of smell'),
(1012, 'Sepsis'),
(1013, 'Septic arthritis'),
(1014, 'Septicaemia, see Sepsis'),
(1015, 'Sexually transmitted infections (STIs)'),
(1016, 'Shaking, see Tremor or shaking hands'),
(1017, 'Shin pain (shin splints), see Shin splints'),
(1018, 'Shin splints'),
(1019, 'Shingles'),
(1020, 'Shingles vaccine'),
(1021, 'Short-sightedness (myopia)'),
(1022, 'Shortness of breath'),
(1023, 'Shoulder impingement'),
(1024, 'Shoulder pain'),
(1025, 'Sick building syndrome'),
(1026, 'Sickle cell disease'),
(1027, 'Silicosis'),
(1028, 'Sinus cancer, see Nasal and sinus cancer'),
(1029, 'Sinusitis (sinus infection)'),
(1030, 'Sinusitis, see Sinusitis (sinus infection)'),
(1031, 'Sj?gren\'s syndrome'),
(1032, 'Skin abscess'),
(1033, 'Skin cancer (melanoma), see Melanoma skin cancer'),
(1034, 'Skin cyst'),
(1035, 'Skin picking disorder'),
(1036, 'Skin tags'),
(1037, 'Slapped cheek syndrome'),
(1038, 'Sleep apnoea'),
(1039, 'Sleep paralysis'),
(1040, 'Sleepwalking'),
(1041, 'Slipped disc'),
(1042, 'Smelly feet'),
(1043, 'Smelly urine'),
(1044, 'Smoking (treatments to stop), see Stop smoking treatments'),
(1045, 'Snake bites'),
(1046, 'Snoring'),
(1047, 'Social anxiety (social phobia)'),
(1048, 'Soft tissue sarcoma'),
(1049, 'Soiling (child pooing their pants)'),
(1050, 'Solar keratoses, see Actinic keratoses (solar keratoses)'),
(1051, 'Sore lips, see Sore or dry lips'),
(1052, 'Sore or dry lips'),
(1053, 'Sore or white tongue'),
(1054, 'Sore throat'),
(1055, 'Sperm count (low), see Low sperm count'),
(1056, 'Spina bifida'),
(1057, 'Spinal muscular atrophy (SMA)'),
(1058, 'Spirometry'),
(1059, 'Spleen problems and spleen removal'),
(1060, 'Spondylolisthesis'),
(1061, 'Sprains and strains'),
(1062, 'Squint'),
(1063, 'Stammering'),
(1064, 'Staph infection'),
(1065, 'Statins'),
(1066, 'Stem cell and bone marrow transplants'),
(1067, 'Stent insertion, see Coronary angioplasty and stent insertion'),
(1068, 'Sterilisation (female), see Female sterilisation'),
(1069, 'Sterlisation (male), see Vasectomy'),
(1070, 'Steroid cream, see Topical corticosteroids'),
(1071, 'Steroid inhalers'),
(1072, 'Steroid injections'),
(1073, 'Steroid misuse, see Anabolic steroid misuse'),
(1074, 'Steroid nasal sprays'),
(1075, 'Steroid tablets'),
(1076, 'Steroids'),
(1077, 'Stevens-Johnson syndrome'),
(1078, 'Stillbirth'),
(1079, 'Sting or bite (insect), see Insect bites and stings'),
(1080, 'Stomach ache'),
(1081, 'Stomach bug, see Diarrhoea and vomiting'),
(1082, 'Stomach cancer'),
(1083, 'Stomach ulcer'),
(1084, 'Stop smoking treatments'),
(1085, 'Strep A'),
(1086, 'Stretch marks'),
(1087, 'Stroke'),
(1088, 'Stuttering, see Stammering'),
(1089, 'Stye'),
(1090, 'Subarachnoid haemorrhage'),
(1091, 'Subdural haematoma'),
(1092, 'Sudden confusion (delirium)'),
(1093, 'Sudden infant death syndrome (SIDS)'),
(1094, 'Sunburn'),
(1095, 'Superficial thrombophlebitis, see Phlebitis (superficial thrombophlebitis)'),
(1096, 'Supraventricular tachycardia (SVT)'),
(1097, 'Surgery (having an operation), see Having an operation (surgery)'),
(1098, 'Swallowing pills, see Problems swallowing pills'),
(1099, 'Swallowing problems, see Dysphagia (swallowing problems)'),
(1100, 'Sweat rash, see Heat rash (prickly heat)'),
(1101, 'Sweating (excessive), see Excessive sweating (hyperhidrosis)'),
(1102, 'Sweating (excessive), see Heat rash (prickly heat)'),
(1103, 'Sweating at night, see Night sweats'),
(1104, 'Swollen ankles, feet and legs (oedema)'),
(1105, 'Swollen arms and hands (oedema)'),
(1106, 'Swollen glands'),
(1107, 'Syphilis'),
(1108, 'Tailbone (coccyx) pain'),
(1109, 'Tapeworm, see Worms in humans'),
(1110, 'Tay-Sachs disease'),
(1111, 'TB, see Tuberculosis (TB)'),
(1112, 'Td/IPV vaccine (3-in-1 teenage booster)'),
(1113, 'Teeth grinding (bruxism)'),
(1114, 'Teeth whitening'),
(1115, 'Temporal arteritis'),
(1116, 'Temporomandibular disorder (TMD)'),
(1117, 'Tendonitis'),
(1118, 'Tennis elbow'),
(1119, 'TENS (transcutaneous electrical nerve stimulation)'),
(1120, 'Tension headaches'),
(1121, 'Testicle lumps and swellings'),
(1122, 'Testicle pain'),
(1123, 'Testicular cancer'),
(1124, 'Tetanus'),
(1125, 'Thalassaemia'),
(1126, 'The \'male menopause\''),
(1127, 'Thirst (excessive), see Excessive thirst'),
(1128, 'Thoracic outlet syndrome'),
(1129, 'Threadworms'),
(1130, 'Throat (sore), see Sore throat'),
(1131, 'Thrombophilia'),
(1132, 'Thrush in men and women'),
(1133, 'Thumb pain'),
(1134, 'Thyroid cancer'),
(1135, 'TIA, see Transient ischaemic attack (TIA)'),
(1136, 'Tick-borne encephalitis (TBE)'),
(1137, 'Tics'),
(1138, 'Tight foreskin (phimosis)'),
(1139, 'Tinnitus'),
(1140, 'Tiredness and fatigue'),
(1141, 'Toe pain'),
(1142, 'Tongue (sore or white), see Sore or white tongue'),
(1143, 'Tongue-tie'),
(1144, 'Tonsillitis'),
(1145, 'Tooth (chipped or broken), see Chipped, broken or cracked tooth'),
(1146, 'Tooth decay'),
(1147, 'Tooth knocked out, see Knocked-out tooth'),
(1148, 'Toothache'),
(1149, 'Topical corticosteroids'),
(1150, 'Total iron-binding capacity (TIBC) and transferrin test'),
(1151, 'Total protein test'),
(1152, 'Tourette\'s syndrome'),
(1153, 'Toxic shock syndrome'),
(1154, 'Toxocariasis'),
(1155, 'Toxoplasmosis'),
(1156, 'Tracheostomy'),
(1157, 'Transient ischaemic attack (TIA)'),
(1158, 'Transurethral resection of the prostate (TURP)'),
(1159, 'Travel vaccinations'),
(1160, 'Tremor or shaking hands'),
(1161, 'Tremor, see Tremor or shaking hands'),
(1162, 'Trichomoniasis'),
(1163, 'Trichotillomania (hair pulling disorder)'),
(1164, 'Trigeminal neuralgia'),
(1165, 'Trigger finger'),
(1166, 'Trimethylaminuria (\'fish odour syndrome\')'),
(1167, 'Tuberculosis (TB)'),
(1168, 'Tuberous sclerosis'),
(1169, 'Tummy ache, see Stomach ache'),
(1170, 'Tummy bug, see Diarrhoea and vomiting'),
(1171, 'Turner syndrome'),
(1172, 'Twitching eyes and muscles'),
(1173, 'Type 1 diabetes'),
(1174, 'Type 2 diabetes'),
(1175, 'Typhoid fever'),
(1176, 'Typhus'),
(1177, 'Ulcerative colitis'),
(1178, 'Ultrasound scan'),
(1179, 'Umbilical hernia repair'),
(1180, 'Underactive thyroid (hypothyroidism)'),
(1181, 'Undescended testicles'),
(1182, 'Unintentional weight loss'),
(1183, 'Upper back pain, see Back pain'),
(1184, 'Urethritis'),
(1185, 'Urinary catheter'),
(1186, 'Urinary incontinence'),
(1187, 'Urinary tract infections (UTIs)'),
(1188, 'Urine (smelly), see Smelly urine'),
(1189, 'Urine albumin to creatinine ratio (ACR)'),
(1190, 'Uterine (womb) cancer, see Womb (uterus) cancer'),
(1191, 'Uveitis'),
(1192, 'Vaginal bleeding between periods or after sex'),
(1193, 'Vaginal cancer'),
(1194, 'Vaginal discharge'),
(1195, 'Vaginal dryness'),
(1196, 'Vaginal pain, see Vulvodynia (vulval pain)'),
(1197, 'Vaginal ring'),
(1198, 'Vaginismus'),
(1199, 'Vaginitis'),
(1200, 'Varicose eczema'),
(1201, 'Varicose veins'),
(1202, 'Vascular dementia'),
(1203, 'Vasculitis'),
(1204, 'Vasectomy'),
(1205, 'Venous leg ulcer'),
(1206, 'Vertigo'),
(1207, 'Vestibular neuritis, see Labyrinthitis and vestibular neuritis'),
(1208, 'Vestibular schwannoma, see Acoustic neuroma (vestibular schwannoma)'),
(1209, 'Vitamin B12 or folate deficiency anaemia'),
(1210, 'Vitamins and minerals'),
(1211, 'Vitiligo'),
(1212, 'Vomiting blood'),
(1213, 'Vomiting bug, see Norovirus (vomiting bug)'),
(1214, 'Vomiting, see Diarrhoea and vomiting'),
(1215, 'Von Willebrand disease'),
(1216, 'Vulval cancer'),
(1217, 'Vulvodynia (vulval pain)'),
(1218, 'Warts and verrucas'),
(1219, 'Watering eyes'),
(1220, 'Weight loss (unexpected), see Unintentional weight loss'),
(1221, 'Weight loss (unintentional), see Unintentional weight loss'),
(1222, 'Weight loss surgery'),
(1223, 'Weil\'s disease, see Leptospirosis (Weil\'s disease)'),
(1224, 'What to do if someone has a seizure (fit)'),
(1225, 'Whiplash'),
(1226, 'White blood cell count (low), see Low white blood cell count'),
(1227, 'Whitlow finger, see Herpetic whitlow (whitlow finger)'),
(1228, 'Whooping cough'),
(1229, 'Wind, see Farting (flatulence)'),
(1230, 'Winter vomiting bug, see Norovirus (vomiting bug)'),
(1231, 'Wisdom tooth removal'),
(1232, 'Wolff-Parkinson-White syndrome'),
(1233, 'Womb (uterus) cancer'),
(1234, 'Women\'s health'),
(1235, 'Worms in humans'),
(1236, 'Wrist pain'),
(1237, 'X-ray'),
(1238, 'Yellow fever'),
(1239, 'Zika virus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient_complaint`
--

CREATE TABLE `tbl_patient_complaint` (
  `complaint_id` varchar(50) NOT NULL,
  `dh_id` varchar(100) NOT NULL,
  `patient_condition` varchar(100) NOT NULL,
  `chief_complaint` varchar(100) NOT NULL,
  `history` varchar(30) NOT NULL,
  `nhsid` int(11) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `date_complaint` date NOT NULL,
  `time_complaint` time NOT NULL,
  `patient_status` varchar(30) NOT NULL,
  `date_time_entry` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patient_complaint`
--

INSERT INTO `tbl_patient_complaint` (`complaint_id`, `dh_id`, `patient_condition`, `chief_complaint`, `history`, `nhsid`, `diagnosis`, `employee_id`, `patient_id`, `date_complaint`, `time_complaint`, `patient_status`, `date_time_entry`) VALUES
('0d1be29f99237ca8d07f9827de8deba08134c67f', '2', 'Fair', 'Fever', 'Patient has been experiencing ', 102, 'Viral Infection', '3', 'PAT002', '2023-11-02', '11:00:00', 'Checked Up', '2023-11-02 11:00:00'),
('ac75d2edd9df2e2b16c1b7a44d6a0c53a5457929', '1', 'Good', 'Headache', 'Patient has a history of migra', 101, 'asafaf', '3', 'PAT001', '2023-11-01', '10:30:00', 'Checked Up', '2023-11-01 10:30:00'),
('cf326f6fd2ec71f1c359c53b401ba7da9dd6939a', '3', 'Poor', 'Chest Pain', 'Patient reports chest pain and', 102, 'Angina', 'CL2024', 'PAT002', '2023-11-03', '09:45:00', 'Pending', '2023-11-03 09:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient_info`
--

CREATE TABLE `tbl_patient_info` (
  `patient_id` varchar(50) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middle` varchar(20) NOT NULL,
  `ext` varchar(30) NOT NULL,
  `province` varchar(100) NOT NULL,
  `municipality` varchar(20) NOT NULL,
  `barangay` varchar(20) NOT NULL,
  `street` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `birth` date NOT NULL,
  `place_birth` varchar(255) NOT NULL,
  `informant` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `philhealth` varchar(50) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `mss_class` varchar(30) NOT NULL,
  `nearest_relative` varchar(100) NOT NULL,
  `relationship` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patient_info`
--

INSERT INTO `tbl_patient_info` (`patient_id`, `lastname`, `firstname`, `middle`, `ext`, `province`, `municipality`, `barangay`, `street`, `phone`, `birth`, `place_birth`, `informant`, `gender`, `philhealth`, `civil_status`, `nationality`, `religion`, `occupation`, `mss_class`, `nearest_relative`, `relationship`) VALUES
('PAT001', 'Doe', 'John', 'M', '', 'Marinduque', 'Boac', 'Barangay 1', 'Street 1', '09123456789', '1990-01-01', 'Boac, Marinduque', 'Jane Doe', 'Male', '123456789', 'Single', 'Filipino', 'Catholic', 'Farmer', 'Class A', 'Jane Doe', 'Mother'),
('PAT002', 'Smith', 'Jane', '', '', 'Marinduque', 'Gasan', 'Barangay 2', 'Street 2', '09198765432', '1985-05-15', 'Gasan, Marinduque', 'John Smith', 'Female', '987654321', 'Married', 'Filipino', 'Christian', 'Teacher', 'Class B', 'John Smith', 'Husband');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prescription`
--

CREATE TABLE `tbl_prescription` (
  `presc_id` varchar(50) NOT NULL,
  `medicine` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `ml` float DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `complaint_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_queue`
--

CREATE TABLE `tbl_queue` (
  `queue_id` int(11) NOT NULL,
  `complaint_id` varchar(50) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `datetime_queue` datetime NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_queue`
--

INSERT INTO `tbl_queue` (`queue_id`, `complaint_id`, `patient_id`, `datetime_queue`, `employee_id`, `status`) VALUES
(5, '0d1be29f99237ca8d07f9827de8deba08134c67f', 'PAT002', '2025-04-26 07:55:45', '3', 'Checked Up'),
(6, 'ac75d2edd9df2e2b16c1b7a44d6a0c53a5457929', 'PAT001', '2025-04-26 07:55:45', '3', 'Checked Up'),
(7, 'cf326f6fd2ec71f1c359c53b401ba7da9dd6939a', 'PAT002', '2025-04-26 07:55:45', 'CL2024', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_level` varchar(25) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `password`, `user_level`, `employee_id`, `status`) VALUES
('123ken', 'admin', 'admin', 'Administrator', 'CL2024', 'Active'),
('456nurse', 'nurse', 'nurse', 'Nurse', '2', 'Active'),
('789doctor', 'doctor', 'doc', 'Doctor', '3', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vital_signs`
--

CREATE TABLE `tbl_vital_signs` (
  `vital_id` varchar(50) NOT NULL,
  `temp` float NOT NULL,
  `hr` varchar(20) NOT NULL,
  `rr` int(11) NOT NULL,
  `bp` varchar(10) NOT NULL,
  `ht` float NOT NULL,
  `wt` float NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vital_signs`
--

INSERT INTO `tbl_vital_signs` (`vital_id`, `temp`, `hr`, `rr`, `bp`, `ht`, `wt`, `patient_id`, `date_time`) VALUES
('2ff3b1e75336deff800369b5d06993a21bca0eab', 2, '3', 4, '3', 4, 4, '0277fb006e67164d0de8ab2ff622a3cc132711ec', '2025-04-20 13:13:58'),
('4a3fa081c450b902aaed3ef44be5522df3f5dbff', 23, '44', 44, '333', 4, 44, '34abfe3521b1321f806eacd8919c80dcff7e532b', '2025-04-20 12:52:17'),
('721c26320767c2aab24ccd9cdfde8b9382eb0bde', 2, '3', 4, '6', 6, 5, '6c543682add88453bdf0fe5faf53e47f1c3590a9', '2025-04-19 21:56:09'),
('c10876fcd503c050d6d3407a2e59a7533e33af26', 23, '44', 44, '333', 4, 44, '34abfe3521b1321f806eacd8919c80dcff7e532b', '2025-04-20 12:52:02'),
('cb4790af4737d4efbe756f47ce8ec70e417a48f9', 2, '4', 5, '3', 4, 5, '469fc5f0936aa2c82fc00666501997020046d441', '2025-04-20 13:50:47'),
('df6ed32db4cac7d7b3c6ca012576881589ac0632', 23, '44', 44, '333', 4, 44, '34abfe3521b1321f806eacd8919c80dcff7e532b', '2025-04-20 12:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `users_log`
--

CREATE TABLE `users_log` (
  `log_id` varchar(50) NOT NULL,
  `date_log` date NOT NULL,
  `time_log` time NOT NULL,
  `action_made` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_log`
--

INSERT INTO `users_log` (`log_id`, `date_log`, `time_log`, `action_made`, `status`, `user_id`) VALUES
('34b413fceb09c920136c5e0408de70f4a47d81b9', '2025-05-01', '19:40:58', 'User logged in', 'Success', '789doctor'),
('3a790384a8d5624d1478d8ebea530519143b169f', '2025-04-24', '20:48:22', 'User logged in', 'Success', '123ken'),
('4ee0397fdaf223a32105bf709548b566e712ab65', '2025-05-01', '19:40:35', 'User logged in', 'Success', '123ken'),
('53423d23f6f19f4999129e894bb9e25d3ad508a7', '2025-04-25', '05:43:42', 'User logged in', 'Success', '123ken'),
('5a2c23a27196ce207965257a523d2f0ebc2910bc', '2025-04-25', '10:39:25', 'User logged in', 'Success', '789doctor'),
('72a28ab6ffd40932c405f37dc7328a6116d535d3', '2025-04-26', '00:13:14', 'User logged in', 'Success', '123ken'),
('840826df2c7f83135da25f7f4930ee62f1e2f01e', '2025-04-25', '05:59:29', 'User logged in', 'Success', '789doctor'),
('88a1cbee6c50e8f6a9f82d6b4082f1931f4398b4', '2025-04-24', '20:45:18', 'User logged in', 'Success', '789doctor'),
('a16a5e41139af3b99c7026e1c5c04f0e70aa10e4', '2025-04-25', '23:50:03', 'User logged in', 'Success', '789doctor'),
('c893e5542eddbe1d0a34c30ca8257124b94e8b01', '2025-04-26', '07:54:27', 'User logged in', 'Success', '789doctor'),
('efebae78bbc16a1785f75ea7310ca94f0f139d21', '2025-04-27', '19:40:01', 'User logged in', 'Success', '789doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`addr_id`);

--
-- Indexes for table `tbl_admission`
--
ALTER TABLE `tbl_admission`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `tbl_clinic_info`
--
ALTER TABLE `tbl_clinic_info`
  ADD PRIMARY KEY (`clinic_id`);

--
-- Indexes for table `tbl_complaint_presc`
--
ALTER TABLE `tbl_complaint_presc`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `tbl_dept_hospital`
--
ALTER TABLE `tbl_dept_hospital`
  ADD PRIMARY KEY (`dh_id`);

--
-- Indexes for table `tbl_diagnosis`
--
ALTER TABLE `tbl_diagnosis`
  ADD PRIMARY KEY (`diag_id`);

--
-- Indexes for table `tbl_doctor_sched`
--
ALTER TABLE `tbl_doctor_sched`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `tbl_emp_and_doctor`
--
ALTER TABLE `tbl_emp_and_doctor`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `tbl_months`
--
ALTER TABLE `tbl_months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nhs_disease`
--
ALTER TABLE `tbl_nhs_disease`
  ADD PRIMARY KEY (`nhsid`);

--
-- Indexes for table `tbl_patient_complaint`
--
ALTER TABLE `tbl_patient_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_patient_info`
--
ALTER TABLE `tbl_patient_info`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `tbl_queue`
--
ALTER TABLE `tbl_queue`
  ADD PRIMARY KEY (`queue_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_vital_signs`
--
ALTER TABLE `tbl_vital_signs`
  ADD PRIMARY KEY (`vital_id`);

--
-- Indexes for table `users_log`
--
ALTER TABLE `users_log`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `addr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `tbl_complaint_presc`
--
ALTER TABLE `tbl_complaint_presc`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_months`
--
ALTER TABLE `tbl_months`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_nhs_disease`
--
ALTER TABLE `tbl_nhs_disease`
  MODIFY `nhsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1240;

--
-- AUTO_INCREMENT for table `tbl_queue`
--
ALTER TABLE `tbl_queue`
  MODIFY `queue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_laboratory_results`
--
ALTER TABLE `tbl_laboratory_results`
  ADD CONSTRAINT `tbl_laboratory_results_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `tbl_patient_info` (`patient_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
