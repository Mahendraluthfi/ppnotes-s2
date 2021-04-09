-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 08:25 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppnotes`
--

-- --------------------------------------------------------

--
-- Table structure for table `atteendees_pra`
--

CREATE TABLE `atteendees_pra` (
  `id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_meet`
--

CREATE TABLE `attendance_meet` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `status`) VALUES
(2, 'VSI', 1),
(3, 'PINK', 1),
(5, 'La Senza', 1),
(6, 'Calvin Klein', 1),
(7, 'Warners', 1),
(8, 'HBI', 1),
(9, 'VSX', 1),
(10, 'Me Undies', 1),
(11, 'GAP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `status`) VALUES
(1, 'Technical', 1),
(2, 'Cutting', 1),
(5, 'PCU', 1),
(6, 'Autonomation', 1),
(7, 'Engineering', 1),
(9, 'Industrial Engineering', 1),
(10, 'Quality Inspection', 1),
(11, 'Quality Assurance', 1),
(12, 'Planning', 1),
(13, 'MOS', 1),
(14, 'Raw Material', 1),
(15, 'Manufacturing Director', 1),
(16, 'Production', 1),
(17, 'Finishing', 1),
(18, 'Technical', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `employee_name` varchar(75) NOT NULL,
  `employee_level` varchar(50) NOT NULL,
  `employee_respon` enum('VIEWER','USER','ADMIN') NOT NULL,
  `password` varchar(50) NOT NULL,
  `employee_status` int(11) NOT NULL DEFAULT '1',
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `department_id`, `employee_name`, `employee_level`, `employee_respon`, `password`, `employee_status`, `token`) VALUES
(187, 12, 'Dani Pratomo', 'STAFF', 'USER', '31fefc0e570cb3860f2a6d4b38c6490d', 1, ''),
(780, 11, 'Rina Widiastuti', 'STAFF', 'USER', 'a8e864d04c95572d1aece099af852d0a', 1, ''),
(2585, 10, 'Kurnia Nur Afifah', 'STAFF', 'USER', '36e729ec173b94133d8fa552e4029f8b', 1, ''),
(2706, 2, 'Galin Dian Rosita', 'STAFF', 'USER', '2e74c2cf88f68a68c84e9509abc7ea56', 1, ''),
(3234, 5, 'Yosefina Yuke', 'STAFF', 'USER', 'c5658c711ba9170700fc7d3ee3f63e40', 1, ''),
(3292, 9, 'Febi Wahyu Lastika Sari', 'STAFF', 'USER', 'cfcce0621b49c983991ead4c3d4d3b6b', 1, ''),
(4430, 14, 'Cahyo Wulandari', 'STAFF', 'USER', 'ce052ea95dfe35291c6fa7fcf8819492', 1, ''),
(4570, 11, 'Amilia Purnama', 'STAFF', 'USER', 'e9dae45ec08b498f7e1af247757c9b35', 1, ''),
(4576, 1, 'Lely Prima Anggraeni', 'EXECUTIVE', 'ADMIN', 'f89394c979b34a25cc4ff8e11234fbfb', 1, ''),
(6385, 7, 'Irma Meida Susilowati Papadak', 'STAFF', 'USER', '2107931de60c5a7c5d526bd1d6a8a34d', 1, ''),
(6612, 2, 'Anto Sawarno ', 'STAFF', 'USER', 'd37eb50d868361ea729bb4147eb3c1d8', 1, ''),
(6868, 12, 'Oei Giovanni Wijayanti', 'STAFF', 'USER', '8a1276c25f5efe85f0fc4020fbf5b4f8', 1, ''),
(91052, 10, 'Rahma Wati', 'STAFF', 'USER', 'a1d7db3a5389e53e9af39e2ccdc720e2', 1, ''),
(91601, 1, 'Nisma Fauziyah', 'STAFF', 'USER', 'df558f247b08c157adc8847bbb1a02a3', 1, ''),
(93053, 9, 'Febrianus I', 'STAFF', 'USER', '023ebcfd3444e1cdc7aeb1421510f237', 1, ''),
(93523, 9, 'Lilis N', 'STAFF', 'USER', '82ce793b52b4f8893511fbdd2cd97e81', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `mast_cbf`
--

CREATE TABLE `mast_cbf` (
  `id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `color_code` varchar(50) NOT NULL,
  `units` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mast_cbt`
--

CREATE TABLE `mast_cbt` (
  `id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `trims` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `color_code` varchar(50) NOT NULL,
  `units` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mast_global`
--

CREATE TABLE `mast_global` (
  `scheduling_id` int(11) NOT NULL,
  `pi_date1` date NOT NULL,
  `pi_date2` date NOT NULL,
  `pi_input1` text NOT NULL,
  `pi_input2` text NOT NULL,
  `pi_input3` text NOT NULL,
  `pi_input4` text NOT NULL,
  `pi_radio1` varchar(5) NOT NULL,
  `pi_radio2` varchar(5) NOT NULL,
  `pi_radio3` varchar(5) NOT NULL,
  `pi_textarea1` text NOT NULL,
  `mc_input1` text NOT NULL,
  `mc_input2` text NOT NULL,
  `mc_input3` text NOT NULL,
  `mc_input4` text NOT NULL,
  `mc_input5` text NOT NULL,
  `mc_input6` text NOT NULL,
  `mc_input7` text NOT NULL,
  `mc_input8` text NOT NULL,
  `mc_input9` text NOT NULL,
  `mc_input10` text NOT NULL,
  `mc_input11` text NOT NULL,
  `mc_date1` date NOT NULL,
  `mc_date2` date NOT NULL,
  `mc_date3` date NOT NULL,
  `mc_date4` date NOT NULL,
  `mc_date5` date NOT NULL,
  `mc_date6` date NOT NULL,
  `mc_radio1` varchar(5) NOT NULL,
  `mc_textarea1` text NOT NULL,
  `mc_textarea2` text NOT NULL,
  `mc_select1` text NOT NULL,
  `hg_input1` text NOT NULL,
  `hg_radio1` varchar(5) NOT NULL,
  `hg_radio2` varchar(5) NOT NULL,
  `hg_textarea1` text NOT NULL,
  `tc_input1` text NOT NULL,
  `tc_input2` text NOT NULL,
  `tc_input3` text NOT NULL,
  `tc_input4` text NOT NULL,
  `tc_input5` text NOT NULL,
  `tc_input6` text NOT NULL,
  `tc_input7` text NOT NULL,
  `tc_input8` text NOT NULL,
  `tc_input9` text NOT NULL,
  `tc_input10` text NOT NULL,
  `tc_input11` text NOT NULL,
  `tc_input12` text NOT NULL,
  `tc_input13` text NOT NULL,
  `tc_input14` text NOT NULL,
  `tc_input15` text NOT NULL,
  `tc_input16` text NOT NULL,
  `tc_input17` text NOT NULL,
  `tc_input18` text NOT NULL,
  `tc_input19` text NOT NULL,
  `tc_input20` text NOT NULL,
  `tc_input21` text NOT NULL,
  `tc_input22` text NOT NULL,
  `tc_input23` text NOT NULL,
  `tc_input24` text NOT NULL,
  `tc_input25` text NOT NULL,
  `tc_input26` text NOT NULL,
  `tc_input27` text NOT NULL,
  `tc_input28` text NOT NULL,
  `tc_radio1` varchar(5) NOT NULL,
  `tc_radio2` varchar(5) NOT NULL,
  `tc_radio3` varchar(5) NOT NULL,
  `tc_radio4` varchar(5) NOT NULL,
  `tc_radio5` varchar(5) NOT NULL,
  `tc_textarea1` text NOT NULL,
  `tc_textarea2` text NOT NULL,
  `tc_textarea3` text NOT NULL,
  `tc_textarea4` text NOT NULL,
  `qa_radio1` varchar(5) NOT NULL,
  `qa_radio2` varchar(5) NOT NULL,
  `qa_radio3` varchar(5) NOT NULL,
  `qa_radio4` varchar(5) NOT NULL,
  `qa_radio5` varchar(5) NOT NULL,
  `qa_radio6` varchar(5) NOT NULL,
  `qa_radio7` varchar(5) NOT NULL,
  `qa_radio8` varchar(5) NOT NULL,
  `qa_radio9` varchar(5) NOT NULL,
  `qa_input1` text NOT NULL,
  `qa_input2` text NOT NULL,
  `qa_input3` text NOT NULL,
  `qa_input4` text NOT NULL,
  `qa_input5` text NOT NULL,
  `qa_input6` text NOT NULL,
  `qa_input7` text NOT NULL,
  `qa_input8` text NOT NULL,
  `qa_input9` text NOT NULL,
  `qa_input10` text NOT NULL,
  `qa_input11` text NOT NULL,
  `qa_input12` text NOT NULL,
  `qa_input13` text NOT NULL,
  `qa_input14` text NOT NULL,
  `qa_input15` text NOT NULL,
  `qa_input16` text NOT NULL,
  `qa_input17` text NOT NULL,
  `qa_input18` text NOT NULL,
  `qa_input19` text NOT NULL,
  `qa_input20` text NOT NULL,
  `qa_input21` text NOT NULL,
  `qa_input22` text NOT NULL,
  `qa_input23` text NOT NULL,
  `qa_input24` text NOT NULL,
  `qa_input25` text NOT NULL,
  `qa_input26` text NOT NULL,
  `qa_input27` text NOT NULL,
  `qa_input28` text NOT NULL,
  `qa_input29` text NOT NULL,
  `qa_input30` text NOT NULL,
  `qa_input31` text NOT NULL,
  `qa_input32` text NOT NULL,
  `qa_input33` text NOT NULL,
  `qa_input34` text NOT NULL,
  `qa_input35` text NOT NULL,
  `qa_input36` text NOT NULL,
  `qa_input37` text NOT NULL,
  `qa_input38` text NOT NULL,
  `qa_input39` text NOT NULL,
  `qa_input40` text NOT NULL,
  `qa_input41` text NOT NULL,
  `qa_input42` text NOT NULL,
  `qa_input43` text NOT NULL,
  `qa_input44` text NOT NULL,
  `qa_input45` text NOT NULL,
  `qa_input46` text NOT NULL,
  `qa_input47` text NOT NULL,
  `qa_input48` text NOT NULL,
  `qa_input49` text NOT NULL,
  `qa_input50` text NOT NULL,
  `qa_input51` text NOT NULL,
  `qa_input52` text NOT NULL,
  `qa_input53` text NOT NULL,
  `qa_input54` text NOT NULL,
  `qa_input55` text NOT NULL,
  `qa_input56` text NOT NULL,
  `qa_input57` text NOT NULL,
  `qa_input58` text NOT NULL,
  `qa_input59` text NOT NULL,
  `qa_input60` text NOT NULL,
  `qa_input61` text NOT NULL,
  `qa_input62` text NOT NULL,
  `qa_input63` text NOT NULL,
  `qa_input64` text NOT NULL,
  `qa_input65` text NOT NULL,
  `qa_input66` text NOT NULL,
  `qa_input67` text NOT NULL,
  `qa_input68` text NOT NULL,
  `qa_input69` text NOT NULL,
  `qa_input70` text NOT NULL,
  `qa_input71` text NOT NULL,
  `qa_input72` text NOT NULL,
  `qa_input73` text NOT NULL,
  `qa_input74` text NOT NULL,
  `qa_input75` text NOT NULL,
  `qa_input76` text NOT NULL,
  `qa_input77` text NOT NULL,
  `qa_input78` text NOT NULL,
  `qa_input79` text NOT NULL,
  `qa_input80` text NOT NULL,
  `qa_input81` text NOT NULL,
  `qa_input82` text NOT NULL,
  `qa_input83` text NOT NULL,
  `qa_input84` text NOT NULL,
  `qa_input85` text NOT NULL,
  `qa_input86` text NOT NULL,
  `qa_input87` text NOT NULL,
  `qa_textarea1` text NOT NULL,
  `qa_textarea2` text NOT NULL,
  `qa_textarea3` text NOT NULL,
  `qa_textarea4` text NOT NULL,
  `qa_textarea5` text NOT NULL,
  `qa_textarea6` text NOT NULL,
  `qa_textarea7` text NOT NULL,
  `md_input1` text NOT NULL,
  `md_input2` text NOT NULL,
  `md_input3` text NOT NULL,
  `md_input4` text NOT NULL,
  `md_input5` text NOT NULL,
  `md_input6` text NOT NULL,
  `md_input7` text NOT NULL,
  `md_input8` text NOT NULL,
  `md_input9` text NOT NULL,
  `md_input10` text NOT NULL,
  `md_input11` text NOT NULL,
  `md_input12` text NOT NULL,
  `md_input13` text NOT NULL,
  `md_input14` text NOT NULL,
  `md_date1` date NOT NULL,
  `md_textarea1` text NOT NULL,
  `md_textarea2` text NOT NULL,
  `md_textarea3` text NOT NULL,
  `md_textarea4` text NOT NULL,
  `md_textarea5` text NOT NULL,
  `md_textarea6` text NOT NULL,
  `md_textarea7` text NOT NULL,
  `md_textarea8` text NOT NULL,
  `md_textarea9` text NOT NULL,
  `md_textarea10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mast_global`
--

INSERT INTO `mast_global` (`scheduling_id`, `pi_date1`, `pi_date2`, `pi_input1`, `pi_input2`, `pi_input3`, `pi_input4`, `pi_radio1`, `pi_radio2`, `pi_radio3`, `pi_textarea1`, `mc_input1`, `mc_input2`, `mc_input3`, `mc_input4`, `mc_input5`, `mc_input6`, `mc_input7`, `mc_input8`, `mc_input9`, `mc_input10`, `mc_input11`, `mc_date1`, `mc_date2`, `mc_date3`, `mc_date4`, `mc_date5`, `mc_date6`, `mc_radio1`, `mc_textarea1`, `mc_textarea2`, `mc_select1`, `hg_input1`, `hg_radio1`, `hg_radio2`, `hg_textarea1`, `tc_input1`, `tc_input2`, `tc_input3`, `tc_input4`, `tc_input5`, `tc_input6`, `tc_input7`, `tc_input8`, `tc_input9`, `tc_input10`, `tc_input11`, `tc_input12`, `tc_input13`, `tc_input14`, `tc_input15`, `tc_input16`, `tc_input17`, `tc_input18`, `tc_input19`, `tc_input20`, `tc_input21`, `tc_input22`, `tc_input23`, `tc_input24`, `tc_input25`, `tc_input26`, `tc_input27`, `tc_input28`, `tc_radio1`, `tc_radio2`, `tc_radio3`, `tc_radio4`, `tc_radio5`, `tc_textarea1`, `tc_textarea2`, `tc_textarea3`, `tc_textarea4`, `qa_radio1`, `qa_radio2`, `qa_radio3`, `qa_radio4`, `qa_radio5`, `qa_radio6`, `qa_radio7`, `qa_radio8`, `qa_radio9`, `qa_input1`, `qa_input2`, `qa_input3`, `qa_input4`, `qa_input5`, `qa_input6`, `qa_input7`, `qa_input8`, `qa_input9`, `qa_input10`, `qa_input11`, `qa_input12`, `qa_input13`, `qa_input14`, `qa_input15`, `qa_input16`, `qa_input17`, `qa_input18`, `qa_input19`, `qa_input20`, `qa_input21`, `qa_input22`, `qa_input23`, `qa_input24`, `qa_input25`, `qa_input26`, `qa_input27`, `qa_input28`, `qa_input29`, `qa_input30`, `qa_input31`, `qa_input32`, `qa_input33`, `qa_input34`, `qa_input35`, `qa_input36`, `qa_input37`, `qa_input38`, `qa_input39`, `qa_input40`, `qa_input41`, `qa_input42`, `qa_input43`, `qa_input44`, `qa_input45`, `qa_input46`, `qa_input47`, `qa_input48`, `qa_input49`, `qa_input50`, `qa_input51`, `qa_input52`, `qa_input53`, `qa_input54`, `qa_input55`, `qa_input56`, `qa_input57`, `qa_input58`, `qa_input59`, `qa_input60`, `qa_input61`, `qa_input62`, `qa_input63`, `qa_input64`, `qa_input65`, `qa_input66`, `qa_input67`, `qa_input68`, `qa_input69`, `qa_input70`, `qa_input71`, `qa_input72`, `qa_input73`, `qa_input74`, `qa_input75`, `qa_input76`, `qa_input77`, `qa_input78`, `qa_input79`, `qa_input80`, `qa_input81`, `qa_input82`, `qa_input83`, `qa_input84`, `qa_input85`, `qa_input86`, `qa_input87`, `qa_textarea1`, `qa_textarea2`, `qa_textarea3`, `qa_textarea4`, `qa_textarea5`, `qa_textarea6`, `qa_textarea7`, `md_input1`, `md_input2`, `md_input3`, `md_input4`, `md_input5`, `md_input6`, `md_input7`, `md_input8`, `md_input9`, `md_input10`, `md_input11`, `md_input12`, `md_input13`, `md_input14`, `md_date1`, `md_textarea1`, `md_textarea2`, `md_textarea3`, `md_textarea4`, `md_textarea5`, `md_textarea6`, `md_textarea7`, `md_textarea8`, `md_textarea9`, `md_textarea10`) VALUES
(1, '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_mast`
--

CREATE TABLE `meeting_mast` (
  `id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `meet_date` date NOT NULL,
  `cpo` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `gac` date NOT NULL,
  `pro_desc` text NOT NULL,
  `fabric_desc` text NOT NULL,
  `m_a1_1` text NOT NULL,
  `m_a1_2` text NOT NULL,
  `m_a1_3` date NOT NULL,
  `m_a2_1` text NOT NULL,
  `m_a2_2` text NOT NULL,
  `m_a2_3` date NOT NULL,
  `m_a3_1` text NOT NULL,
  `m_a3_2` text NOT NULL,
  `m_a3_3` date NOT NULL,
  `m_file_1` text NOT NULL,
  `m_file_2` text NOT NULL,
  `m_b1_1_1` text NOT NULL,
  `m_b1_1_2` text NOT NULL,
  `m_b1_1_3` text NOT NULL,
  `m_b1_1_4` date NOT NULL,
  `m_b1_2_1` text NOT NULL,
  `m_b1_2_2` text NOT NULL,
  `m_b1_2_3` text NOT NULL,
  `m_b1_2_4` date NOT NULL,
  `m_b1_3_1` text NOT NULL,
  `m_b1_3_2` text NOT NULL,
  `m_b1_3_3` text NOT NULL,
  `m_b1_3_4` date NOT NULL,
  `m_b2_1_1` text NOT NULL,
  `m_b2_1_2` text NOT NULL,
  `m_b2_1_3` text NOT NULL,
  `m_b2_1_4` text NOT NULL,
  `m_b2_1_5` date NOT NULL,
  `m_b2_2_1` text NOT NULL,
  `m_b2_2_2` text NOT NULL,
  `m_b2_2_3` text NOT NULL,
  `m_b2_2_4` text NOT NULL,
  `m_b2_2_5` date NOT NULL,
  `m_b2_3_1` text NOT NULL,
  `m_b2_3_2` text NOT NULL,
  `m_b2_3_3` text NOT NULL,
  `m_b2_3_4` text NOT NULL,
  `m_b2_3_5` date NOT NULL,
  `m_b3_1_1` text NOT NULL,
  `m_b3_1_2` text NOT NULL,
  `m_b3_1_3` text NOT NULL,
  `m_b3_1_4` text NOT NULL,
  `m_b3_1_5` date NOT NULL,
  `m_b3_2_1` text NOT NULL,
  `m_b3_2_2` text NOT NULL,
  `m_b3_2_3` text NOT NULL,
  `m_b3_2_4` text NOT NULL,
  `m_b3_2_5` date NOT NULL,
  `m_b4_1` text NOT NULL,
  `m_b4_2` text NOT NULL,
  `m_b4_3` date NOT NULL,
  `m_b5_1_1` text NOT NULL,
  `m_b5_1_2` text NOT NULL,
  `m_b5_1_3` text NOT NULL,
  `m_b5_1_4` text NOT NULL,
  `m_b5_1_5` text NOT NULL,
  `m_b5_1_6` date NOT NULL,
  `m_c1_1` text NOT NULL,
  `m_c1_2` text NOT NULL,
  `m_c1_3` text NOT NULL,
  `m_c1_4` text NOT NULL,
  `m_c1_5` text NOT NULL,
  `m_c1_6` date NOT NULL,
  `m_c2_1` text NOT NULL,
  `m_c2_2` text NOT NULL,
  `m_c2_3` text NOT NULL,
  `m_c2_4` date NOT NULL,
  `m_c3_1` text NOT NULL,
  `m_c3_2` text NOT NULL,
  `m_c3_3` text NOT NULL,
  `m_c3_4` date NOT NULL,
  `m_c4_1_1` text NOT NULL,
  `m_c4_1_2` text NOT NULL,
  `m_c4_1_3` date NOT NULL,
  `m_c4_2_1` text NOT NULL,
  `m_c4_2_2` text NOT NULL,
  `m_c4_2_3` date NOT NULL,
  `m_c4_3_1` text NOT NULL,
  `m_c4_3_2` text NOT NULL,
  `m_c4_3_3` date NOT NULL,
  `m_c5_1` text NOT NULL,
  `m_c5_2` text NOT NULL,
  `m_c5_3` text NOT NULL,
  `m_c5_4` date NOT NULL,
  `m_d1_1` text NOT NULL,
  `m_d1_2` text NOT NULL,
  `m_d1_3` text NOT NULL,
  `m_d1_4` date NOT NULL,
  `m_d2_1_1` text NOT NULL,
  `m_d2_1_2` text NOT NULL,
  `m_d2_1_3` text NOT NULL,
  `m_d2_1_4` date NOT NULL,
  `m_d2_2_1` text NOT NULL,
  `m_d2_2_2` text NOT NULL,
  `m_d2_2_3` text NOT NULL,
  `m_d2_2_4` date NOT NULL,
  `m_d3_1` text NOT NULL,
  `m_d3_2` text NOT NULL,
  `m_d3_3` text NOT NULL,
  `m_d3_4` date NOT NULL,
  `m_d4_1` text NOT NULL,
  `m_d4_2` text NOT NULL,
  `m_d4_3` text NOT NULL,
  `m_d4_4` date NOT NULL,
  `m_d5_1` text NOT NULL,
  `m_d5_2` text NOT NULL,
  `m_d5_3` text NOT NULL,
  `m_d5_4` date NOT NULL,
  `m_d6_1` text NOT NULL,
  `m_d6_2` text NOT NULL,
  `m_d6_3` text NOT NULL,
  `m_d6_4` text NOT NULL,
  `m_d6_5` text NOT NULL,
  `m_d6_6` date NOT NULL,
  `m_d7_1` text NOT NULL,
  `m_d7_2` text NOT NULL,
  `m_d7_3` text NOT NULL,
  `m_d7_4` date NOT NULL,
  `m_e1_1` text NOT NULL,
  `m_e1_2` text NOT NULL,
  `m_e1_3` text NOT NULL,
  `m_e1_4` date NOT NULL,
  `m_e2_1_1` text NOT NULL,
  `m_e2_1_2` text NOT NULL,
  `m_e2_1_3` text NOT NULL,
  `m_e2_1_4` date NOT NULL,
  `m_e2_2_1` text NOT NULL,
  `m_e2_2_2` text NOT NULL,
  `m_e2_2_3` text NOT NULL,
  `m_e2_2_4` date NOT NULL,
  `m_e3_1` text NOT NULL,
  `m_e3_2` text NOT NULL,
  `m_e3_3` text NOT NULL,
  `m_e3_4` date NOT NULL,
  `m_e4_1` text NOT NULL,
  `m_e4_2` text NOT NULL,
  `m_e4_3` text NOT NULL,
  `m_e4_4` date NOT NULL,
  `m_g1_1` text NOT NULL,
  `m_g1_2` text NOT NULL,
  `m_g1_3` text NOT NULL,
  `m_g1_4` date NOT NULL,
  `m_g2_1_1` text NOT NULL,
  `m_g2_1_2` text NOT NULL,
  `m_g2_1_3` text NOT NULL,
  `m_g2_1_4` date NOT NULL,
  `m_g2_2_1` text NOT NULL,
  `m_g2_2_2` text NOT NULL,
  `m_g2_2_3` text NOT NULL,
  `m_g2_2_4` date NOT NULL,
  `m_g2_3_1` text NOT NULL,
  `m_g2_3_2` text NOT NULL,
  `m_g2_3_3` text NOT NULL,
  `m_g2_3_4` date NOT NULL,
  `m_g2_4_1` text NOT NULL,
  `m_g2_4_2` text NOT NULL,
  `m_g2_4_3` text NOT NULL,
  `m_g2_4_4` date NOT NULL,
  `m_h1_1` text NOT NULL,
  `m_h1_2` text NOT NULL,
  `m_h1_3` date NOT NULL,
  `m_h2_1` text NOT NULL,
  `m_h2_2` text NOT NULL,
  `m_h2_3` date NOT NULL,
  `m_h3_1` text NOT NULL,
  `m_h3_2` text NOT NULL,
  `m_h3_3` date NOT NULL,
  `m_h4_1` text NOT NULL,
  `m_h4_2` text NOT NULL,
  `m_h4_3` date NOT NULL,
  `m_h5_1` text NOT NULL,
  `m_h5_2` text NOT NULL,
  `m_h5_3` date NOT NULL,
  `m_h6_1` text NOT NULL,
  `m_h6_2` text NOT NULL,
  `m_h6_3` date NOT NULL,
  `m_h7_1` text NOT NULL,
  `m_h7_2` text NOT NULL,
  `m_h7_3` date NOT NULL,
  `m_h8_1` text NOT NULL,
  `m_h8_2` text NOT NULL,
  `m_h8_3` date NOT NULL,
  `m_h9` text NOT NULL,
  `m_h10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting_mast`
--

INSERT INTO `meeting_mast` (`id`, `scheduling_id`, `meet_date`, `cpo`, `qty`, `gac`, `pro_desc`, `fabric_desc`, `m_a1_1`, `m_a1_2`, `m_a1_3`, `m_a2_1`, `m_a2_2`, `m_a2_3`, `m_a3_1`, `m_a3_2`, `m_a3_3`, `m_file_1`, `m_file_2`, `m_b1_1_1`, `m_b1_1_2`, `m_b1_1_3`, `m_b1_1_4`, `m_b1_2_1`, `m_b1_2_2`, `m_b1_2_3`, `m_b1_2_4`, `m_b1_3_1`, `m_b1_3_2`, `m_b1_3_3`, `m_b1_3_4`, `m_b2_1_1`, `m_b2_1_2`, `m_b2_1_3`, `m_b2_1_4`, `m_b2_1_5`, `m_b2_2_1`, `m_b2_2_2`, `m_b2_2_3`, `m_b2_2_4`, `m_b2_2_5`, `m_b2_3_1`, `m_b2_3_2`, `m_b2_3_3`, `m_b2_3_4`, `m_b2_3_5`, `m_b3_1_1`, `m_b3_1_2`, `m_b3_1_3`, `m_b3_1_4`, `m_b3_1_5`, `m_b3_2_1`, `m_b3_2_2`, `m_b3_2_3`, `m_b3_2_4`, `m_b3_2_5`, `m_b4_1`, `m_b4_2`, `m_b4_3`, `m_b5_1_1`, `m_b5_1_2`, `m_b5_1_3`, `m_b5_1_4`, `m_b5_1_5`, `m_b5_1_6`, `m_c1_1`, `m_c1_2`, `m_c1_3`, `m_c1_4`, `m_c1_5`, `m_c1_6`, `m_c2_1`, `m_c2_2`, `m_c2_3`, `m_c2_4`, `m_c3_1`, `m_c3_2`, `m_c3_3`, `m_c3_4`, `m_c4_1_1`, `m_c4_1_2`, `m_c4_1_3`, `m_c4_2_1`, `m_c4_2_2`, `m_c4_2_3`, `m_c4_3_1`, `m_c4_3_2`, `m_c4_3_3`, `m_c5_1`, `m_c5_2`, `m_c5_3`, `m_c5_4`, `m_d1_1`, `m_d1_2`, `m_d1_3`, `m_d1_4`, `m_d2_1_1`, `m_d2_1_2`, `m_d2_1_3`, `m_d2_1_4`, `m_d2_2_1`, `m_d2_2_2`, `m_d2_2_3`, `m_d2_2_4`, `m_d3_1`, `m_d3_2`, `m_d3_3`, `m_d3_4`, `m_d4_1`, `m_d4_2`, `m_d4_3`, `m_d4_4`, `m_d5_1`, `m_d5_2`, `m_d5_3`, `m_d5_4`, `m_d6_1`, `m_d6_2`, `m_d6_3`, `m_d6_4`, `m_d6_5`, `m_d6_6`, `m_d7_1`, `m_d7_2`, `m_d7_3`, `m_d7_4`, `m_e1_1`, `m_e1_2`, `m_e1_3`, `m_e1_4`, `m_e2_1_1`, `m_e2_1_2`, `m_e2_1_3`, `m_e2_1_4`, `m_e2_2_1`, `m_e2_2_2`, `m_e2_2_3`, `m_e2_2_4`, `m_e3_1`, `m_e3_2`, `m_e3_3`, `m_e3_4`, `m_e4_1`, `m_e4_2`, `m_e4_3`, `m_e4_4`, `m_g1_1`, `m_g1_2`, `m_g1_3`, `m_g1_4`, `m_g2_1_1`, `m_g2_1_2`, `m_g2_1_3`, `m_g2_1_4`, `m_g2_2_1`, `m_g2_2_2`, `m_g2_2_3`, `m_g2_2_4`, `m_g2_3_1`, `m_g2_3_2`, `m_g2_3_3`, `m_g2_3_4`, `m_g2_4_1`, `m_g2_4_2`, `m_g2_4_3`, `m_g2_4_4`, `m_h1_1`, `m_h1_2`, `m_h1_3`, `m_h2_1`, `m_h2_2`, `m_h2_3`, `m_h3_1`, `m_h3_2`, `m_h3_3`, `m_h4_1`, `m_h4_2`, `m_h4_3`, `m_h5_1`, `m_h5_2`, `m_h5_3`, `m_h6_1`, `m_h6_2`, `m_h6_3`, `m_h7_1`, `m_h7_2`, `m_h7_3`, `m_h8_1`, `m_h8_2`, `m_h8_3`, `m_h9`, `m_h10`) VALUES
(1, 1, '0000-00-00', '', 0, '0000-00-00', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_pl`
--

CREATE TABLE `meeting_pl` (
  `id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `date_pl` date DEFAULT NULL,
  `pl_mp1_1` text NOT NULL,
  `pl_mp1_2` text NOT NULL,
  `pl_mp1_3` text NOT NULL,
  `pl_mp1_4` text NOT NULL,
  `pl_mp1_5` text NOT NULL,
  `pl_mp1_6` text NOT NULL,
  `pl_mp1_7` text NOT NULL,
  `pl_mp1_8` text NOT NULL,
  `pl_mp1_9` text NOT NULL,
  `pl_mp1_10` text NOT NULL,
  `pl_mp1_11` text NOT NULL,
  `pl_mp1_12` text NOT NULL,
  `pl_mp2_1` text NOT NULL,
  `pl_mp2_2` text NOT NULL,
  `pl_mp2_3` text NOT NULL,
  `pl_mp3_1` text NOT NULL,
  `pl_mp3_2` text NOT NULL,
  `pl_mp3_3` text NOT NULL,
  `pl_mp3_4` text NOT NULL,
  `pl_mp4_1` text NOT NULL,
  `pl_mp4_2` date NOT NULL,
  `pl_mp5_1` text NOT NULL,
  `pl_mp5_2` text NOT NULL,
  `pl_mp5_3` text NOT NULL,
  `pl_mp5_4` text NOT NULL,
  `pl_mp5_5` text NOT NULL,
  `pl_mp5_6` text NOT NULL,
  `pl_mp6_1` text NOT NULL,
  `pl_mp6_2` text NOT NULL,
  `pl_mp7_1` text NOT NULL,
  `pl_mp7_2` text NOT NULL,
  `pl_mp7_3` text NOT NULL,
  `pl_mp7_4` text NOT NULL,
  `pl_mp8_1` text NOT NULL,
  `pl_mp8_2` text NOT NULL,
  `pl_mp8_3` text NOT NULL,
  `pl_mp8_4` text NOT NULL,
  `pl_mp9_1` text NOT NULL,
  `pl_mp9_2` text NOT NULL,
  `pl_mp9_3` text NOT NULL,
  `pl_mp9_4` text NOT NULL,
  `pl_mp9_5` text NOT NULL,
  `pl_mp9_6` text NOT NULL,
  `pl_mp9_7` text NOT NULL,
  `pl_mp9_8` text NOT NULL,
  `pl_mp9_9` text NOT NULL,
  `pl_mp9_10` text NOT NULL,
  `pl_mp10_1` text NOT NULL,
  `pl_me1_1` text NOT NULL,
  `pl_me1_2` text NOT NULL,
  `pl_me1_3` text NOT NULL,
  `pl_me1_4` text NOT NULL,
  `pl_me1_5` text NOT NULL,
  `pl_me1_6` text NOT NULL,
  `pl_me1_7` text NOT NULL,
  `pl_me1_8` text NOT NULL,
  `pl_me1_9` text NOT NULL,
  `pl_me1_10` text NOT NULL,
  `pl_me1_11` text NOT NULL,
  `pl_me1_12` text NOT NULL,
  `pl_me2_1` text NOT NULL,
  `pl_me2_2` text NOT NULL,
  `pl_me2_3` text NOT NULL,
  `pl_me3_1` text NOT NULL,
  `pl_me3_2` text NOT NULL,
  `pl_me3_3` text NOT NULL,
  `pl_me3_4` text NOT NULL,
  `pl_me3_5` text NOT NULL,
  `pl_me3_6` text NOT NULL,
  `pl_me3_7` text NOT NULL,
  `pl_me3_8` text NOT NULL,
  `pl_me3_9` text NOT NULL,
  `pl_me3_10` text NOT NULL,
  `pl_me3_11` text NOT NULL,
  `pl_me3_12` text NOT NULL,
  `pl_me4_1` text NOT NULL,
  `pl_me4_2` date NOT NULL,
  `pl_me4_3` text NOT NULL,
  `pl_me4_4` text NOT NULL,
  `pl_me4_5` date NOT NULL,
  `pl_me4_6` text NOT NULL,
  `pl_me4_7` text NOT NULL,
  `pl_me4_8` date NOT NULL,
  `pl_me4_9` text NOT NULL,
  `pl_me5_1` text NOT NULL,
  `pl_ma1_1` text NOT NULL,
  `pl_ma1_2` text NOT NULL,
  `pl_ma1_3` text NOT NULL,
  `pl_ma1_4` text NOT NULL,
  `pl_ma1_5` text NOT NULL,
  `pl_ma1_6` text NOT NULL,
  `pl_ma1_7` text NOT NULL,
  `pl_ma1_8` text NOT NULL,
  `pl_ma1_9` text NOT NULL,
  `pl_ma2_1` text NOT NULL,
  `pl_ma2_2` text NOT NULL,
  `pl_ma2_3` text NOT NULL,
  `pl_ma2_4` text NOT NULL,
  `pl_ma2_5` text NOT NULL,
  `pl_ma2_6` text NOT NULL,
  `pl_ma2_7` text NOT NULL,
  `pl_ma2_8` text NOT NULL,
  `pl_ma2_9` text NOT NULL,
  `pl_ma2_10` text NOT NULL,
  `pl_ma2_11` text NOT NULL,
  `pl_ma2_12` text NOT NULL,
  `pl_ma2_13` text NOT NULL,
  `pl_ma2_14` text NOT NULL,
  `pl_ma2_15` text NOT NULL,
  `pl_ma2_16` text NOT NULL,
  `pl_ma2_17` text NOT NULL,
  `pl_ma2_18` text NOT NULL,
  `pl_ma2_19` text NOT NULL,
  `pl_ma2_20` text NOT NULL,
  `pl_ma3_1` text NOT NULL,
  `pl_ma3_2` text NOT NULL,
  `pl_ma4_1` text NOT NULL,
  `pl_ma4_2` text NOT NULL,
  `pl_ma4_3` text NOT NULL,
  `pl_ma5_1` text NOT NULL,
  `pl_mu1_1` text NOT NULL,
  `pl_mu1_2` text NOT NULL,
  `pl_mu1_3` text NOT NULL,
  `pl_mu1_4` text NOT NULL,
  `pl_mu1_5` text NOT NULL,
  `pl_mu1_6` text NOT NULL,
  `pl_mu1_7` text NOT NULL,
  `pl_mu1_8` text NOT NULL,
  `pl_mu1_9` text NOT NULL,
  `pl_mu1_10` text NOT NULL,
  `pl_mu1_11` text NOT NULL,
  `pl_mu1_12` text NOT NULL,
  `pl_mu2_1` text NOT NULL,
  `pl_mu2_2` text NOT NULL,
  `pl_mu2_3` text NOT NULL,
  `pl_mu2_4` text NOT NULL,
  `pl_mu2_5` text NOT NULL,
  `pl_mu3_1` text NOT NULL,
  `pl_mu4_1` text NOT NULL,
  `pl_mu4_2` date NOT NULL,
  `pl_mu4_3` text NOT NULL,
  `pl_mu4_4` text NOT NULL,
  `pl_mu4_5` date NOT NULL,
  `pl_mu4_6` text NOT NULL,
  `pl_mu5_1` text NOT NULL,
  `pl_mu5_2` text NOT NULL,
  `pl_mu5_3` text NOT NULL,
  `pl_mu5_4` text NOT NULL,
  `pl_mu5_5` text NOT NULL,
  `pl_mu5_6` text NOT NULL,
  `pl_mu5_7` text NOT NULL,
  `pl_mu5_8` text NOT NULL,
  `pl_mu6_1` text NOT NULL,
  `pl_mu6_2` text NOT NULL,
  `pl_mu6_3` text NOT NULL,
  `pl_mu6_4` text NOT NULL,
  `pl_mu6_5` text NOT NULL,
  `pl_mu6_6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting_pl`
--

INSERT INTO `meeting_pl` (`id`, `scheduling_id`, `date_pl`, `pl_mp1_1`, `pl_mp1_2`, `pl_mp1_3`, `pl_mp1_4`, `pl_mp1_5`, `pl_mp1_6`, `pl_mp1_7`, `pl_mp1_8`, `pl_mp1_9`, `pl_mp1_10`, `pl_mp1_11`, `pl_mp1_12`, `pl_mp2_1`, `pl_mp2_2`, `pl_mp2_3`, `pl_mp3_1`, `pl_mp3_2`, `pl_mp3_3`, `pl_mp3_4`, `pl_mp4_1`, `pl_mp4_2`, `pl_mp5_1`, `pl_mp5_2`, `pl_mp5_3`, `pl_mp5_4`, `pl_mp5_5`, `pl_mp5_6`, `pl_mp6_1`, `pl_mp6_2`, `pl_mp7_1`, `pl_mp7_2`, `pl_mp7_3`, `pl_mp7_4`, `pl_mp8_1`, `pl_mp8_2`, `pl_mp8_3`, `pl_mp8_4`, `pl_mp9_1`, `pl_mp9_2`, `pl_mp9_3`, `pl_mp9_4`, `pl_mp9_5`, `pl_mp9_6`, `pl_mp9_7`, `pl_mp9_8`, `pl_mp9_9`, `pl_mp9_10`, `pl_mp10_1`, `pl_me1_1`, `pl_me1_2`, `pl_me1_3`, `pl_me1_4`, `pl_me1_5`, `pl_me1_6`, `pl_me1_7`, `pl_me1_8`, `pl_me1_9`, `pl_me1_10`, `pl_me1_11`, `pl_me1_12`, `pl_me2_1`, `pl_me2_2`, `pl_me2_3`, `pl_me3_1`, `pl_me3_2`, `pl_me3_3`, `pl_me3_4`, `pl_me3_5`, `pl_me3_6`, `pl_me3_7`, `pl_me3_8`, `pl_me3_9`, `pl_me3_10`, `pl_me3_11`, `pl_me3_12`, `pl_me4_1`, `pl_me4_2`, `pl_me4_3`, `pl_me4_4`, `pl_me4_5`, `pl_me4_6`, `pl_me4_7`, `pl_me4_8`, `pl_me4_9`, `pl_me5_1`, `pl_ma1_1`, `pl_ma1_2`, `pl_ma1_3`, `pl_ma1_4`, `pl_ma1_5`, `pl_ma1_6`, `pl_ma1_7`, `pl_ma1_8`, `pl_ma1_9`, `pl_ma2_1`, `pl_ma2_2`, `pl_ma2_3`, `pl_ma2_4`, `pl_ma2_5`, `pl_ma2_6`, `pl_ma2_7`, `pl_ma2_8`, `pl_ma2_9`, `pl_ma2_10`, `pl_ma2_11`, `pl_ma2_12`, `pl_ma2_13`, `pl_ma2_14`, `pl_ma2_15`, `pl_ma2_16`, `pl_ma2_17`, `pl_ma2_18`, `pl_ma2_19`, `pl_ma2_20`, `pl_ma3_1`, `pl_ma3_2`, `pl_ma4_1`, `pl_ma4_2`, `pl_ma4_3`, `pl_ma5_1`, `pl_mu1_1`, `pl_mu1_2`, `pl_mu1_3`, `pl_mu1_4`, `pl_mu1_5`, `pl_mu1_6`, `pl_mu1_7`, `pl_mu1_8`, `pl_mu1_9`, `pl_mu1_10`, `pl_mu1_11`, `pl_mu1_12`, `pl_mu2_1`, `pl_mu2_2`, `pl_mu2_3`, `pl_mu2_4`, `pl_mu2_5`, `pl_mu3_1`, `pl_mu4_1`, `pl_mu4_2`, `pl_mu4_3`, `pl_mu4_4`, `pl_mu4_5`, `pl_mu4_6`, `pl_mu5_1`, `pl_mu5_2`, `pl_mu5_3`, `pl_mu5_4`, `pl_mu5_5`, `pl_mu5_6`, `pl_mu5_7`, `pl_mu5_8`, `pl_mu6_1`, `pl_mu6_2`, `pl_mu6_3`, `pl_mu6_4`, `pl_mu6_5`, `pl_mu6_6`) VALUES
(1, 1, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_pl2`
--

CREATE TABLE `meeting_pl2` (
  `id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `pl_ga1_1` text NOT NULL,
  `pl_ga1_2` text NOT NULL,
  `pl_ga1_3` text NOT NULL,
  `pl_ga1_4` text NOT NULL,
  `pl_ga1_5` text NOT NULL,
  `pl_ga1_6` text NOT NULL,
  `pl_ga1_7` text NOT NULL,
  `pl_ga1_8` text NOT NULL,
  `pl_ga1_9` text NOT NULL,
  `pl_ga1_10` text NOT NULL,
  `pl_ga1_11` text NOT NULL,
  `pl_ga1_12` text NOT NULL,
  `pl_ga1_13` text NOT NULL,
  `pl_ga1_14` text NOT NULL,
  `pl_ga1_15` text NOT NULL,
  `pl_ga1_16` text NOT NULL,
  `pl_ga1_17` text NOT NULL,
  `pl_ga1_18` text NOT NULL,
  `pl_ga1_19` text NOT NULL,
  `pl_ga1_20` text NOT NULL,
  `pl_ga1_21` text NOT NULL,
  `pl_ga2_1` text NOT NULL,
  `pl_ga2_2` text NOT NULL,
  `pl_ga2_3` text NOT NULL,
  `pl_ga2_4` text NOT NULL,
  `pl_ga3_1` text NOT NULL,
  `pl_ga3_2` text NOT NULL,
  `pl_ga4_1` text NOT NULL,
  `pl_ga4_2` text NOT NULL,
  `pl_ga4_3` text NOT NULL,
  `pl_ga4_4` text NOT NULL,
  `pl_ga4_5` text NOT NULL,
  `pl_ga4_6` text NOT NULL,
  `pl_ga4_7` text NOT NULL,
  `pl_ga4_8` text NOT NULL,
  `pl_ga4_9` text NOT NULL,
  `pl_ga4_10` text NOT NULL,
  `pl_ga4_11` text NOT NULL,
  `pl_ga4_12` text NOT NULL,
  `pl_ga4_13` text NOT NULL,
  `pl_ga4_14` text NOT NULL,
  `pl_ga4_15` text NOT NULL,
  `pl_ga4_16` text NOT NULL,
  `pl_ga4_17` text NOT NULL,
  `pl_ga4_18` text NOT NULL,
  `pl_ga4_19` text NOT NULL,
  `pl_ga4_20` text NOT NULL,
  `pl_ga5_1` text NOT NULL,
  `pl_ga6_1` text NOT NULL,
  `pl_cu1_1` text NOT NULL,
  `pl_cu1_2` text NOT NULL,
  `pl_cu1_3` text NOT NULL,
  `pl_cu1_4` text NOT NULL,
  `pl_cu1_5` text NOT NULL,
  `pl_cu1_6` text NOT NULL,
  `pl_cu1_7` text NOT NULL,
  `pl_cu1_8` text NOT NULL,
  `pl_cu1_9` text NOT NULL,
  `pl_cu2_1` date NOT NULL,
  `pl_cu2_2` text NOT NULL,
  `pl_cu2_3` text NOT NULL,
  `pl_cu2_4` text NOT NULL,
  `pl_cu2_5` text NOT NULL,
  `pl_cu2_6` text NOT NULL,
  `pl_cu3_1` text NOT NULL,
  `pl_cu3_2` text NOT NULL,
  `pl_cu3_3` text NOT NULL,
  `pl_cu3_4` text NOT NULL,
  `pl_cu4_1` text NOT NULL,
  `pl_cu4_2` text NOT NULL,
  `pl_cu4_3` text NOT NULL,
  `pl_cu4_4` text NOT NULL,
  `pl_cu5_1` text NOT NULL,
  `pl_cu5_2` text NOT NULL,
  `pl_cu5_3` text NOT NULL,
  `pl_cu5_4` text NOT NULL,
  `pl_cu5_5` text NOT NULL,
  `pl_cu5_6` text NOT NULL,
  `pl_cu5_7` text NOT NULL,
  `pl_cu5_8` text NOT NULL,
  `pl_cu6_1` text NOT NULL,
  `pl_cu6_2` text NOT NULL,
  `pl_cu6_3` text NOT NULL,
  `pl_cu6_4` text NOT NULL,
  `pl_cu6_5` text NOT NULL,
  `pl_cu6_6` text NOT NULL,
  `pl_cu6_7` text NOT NULL,
  `pl_cu6_8` text NOT NULL,
  `pl_cu6_9` text NOT NULL,
  `pl_cu7_1` text NOT NULL,
  `pl_cu7_2` text NOT NULL,
  `pl_cu7_3` text NOT NULL,
  `pl_cu7_4` text NOT NULL,
  `pl_cu7_5` text NOT NULL,
  `pl_cu8_1` text NOT NULL,
  `pl_cu8_2` text NOT NULL,
  `pl_cu9_1` text NOT NULL,
  `pl_cu10_1` text NOT NULL,
  `pl_cu11_1` text NOT NULL,
  `pl_cu11_2` text NOT NULL,
  `pl_cu11_3` text NOT NULL,
  `pl_cu11_4` text NOT NULL,
  `pl_cu12_1` text NOT NULL,
  `pl_cu12_2` text NOT NULL,
  `pl_cu12_3` text NOT NULL,
  `pl_mo1_1` text NOT NULL,
  `pl_mo1_2` text NOT NULL,
  `pl_mo1_3` text NOT NULL,
  `pl_mo1_4` text NOT NULL,
  `pl_mo1_5` text NOT NULL,
  `pl_mo1_6` text NOT NULL,
  `pl_mo1_7` text NOT NULL,
  `pl_mo1_8` text NOT NULL,
  `pl_mo1_9` text NOT NULL,
  `pl_mo2_1` text NOT NULL,
  `pl_mo2_2` text NOT NULL,
  `pl_mo2_3` text NOT NULL,
  `pl_mo2_4` text NOT NULL,
  `pl_mo2_5` text NOT NULL,
  `pl_mo2_6` text NOT NULL,
  `pl_mo2_7` text NOT NULL,
  `pl_mo2_8` text NOT NULL,
  `pl_mo2_9` text NOT NULL,
  `pl_mo2_10` text NOT NULL,
  `pl_mo2_11` text NOT NULL,
  `pl_mo2_12` text NOT NULL,
  `pl_ws1_1` text NOT NULL,
  `pl_ws1_2` text NOT NULL,
  `pl_ws1_3` text NOT NULL,
  `pl_ws1_4` text NOT NULL,
  `pl_ws1_5` text NOT NULL,
  `pl_ws1_6` text NOT NULL,
  `pl_ws2_1` text NOT NULL,
  `pl_ws2_2` text NOT NULL,
  `pl_ws3_1` text NOT NULL,
  `pl_ws4_1` text NOT NULL,
  `pl_ws5_1` text NOT NULL,
  `pl_ws6_1` text NOT NULL,
  `pl_ws7_1` text NOT NULL,
  `pl_qa1_1` text NOT NULL,
  `pl_qa1_2` text NOT NULL,
  `pl_qa1_3` text NOT NULL,
  `pl_qa1_4` text NOT NULL,
  `pl_qa1_5` text NOT NULL,
  `pl_qa2_1` text NOT NULL,
  `pl_qa2_2` text NOT NULL,
  `pl_qa2_3` date NOT NULL,
  `pl_qa2_4` text NOT NULL,
  `pl_pc1_1` text NOT NULL,
  `pl_pc1_2` text NOT NULL,
  `pl_pc1_3` text NOT NULL,
  `pl_pc1_4` text NOT NULL,
  `pl_pc1_5` text NOT NULL,
  `pl_pc1_6` text NOT NULL,
  `pl_pc1_7` text NOT NULL,
  `pl_pc1_8` text NOT NULL,
  `pl_pc1_9` text NOT NULL,
  `pl_pc1_10` text NOT NULL,
  `pl_pc1_11` text NOT NULL,
  `pl_pc1_12` text NOT NULL,
  `pl_pc2_1` text NOT NULL,
  `pl_pc2_2` text NOT NULL,
  `pl_pc2_3` date NOT NULL,
  `pl_pc2_4` text NOT NULL,
  `pl_pc2_5` text NOT NULL,
  `pl_pc2_6` text NOT NULL,
  `pl_pc2_7` date NOT NULL,
  `pl_pc2_8` text NOT NULL,
  `pl_pc2_9` text NOT NULL,
  `pl_pc3_1` text NOT NULL,
  `pl_pc3_2` text NOT NULL,
  `pl_pc3_3` text NOT NULL,
  `pl_pc3_4` text NOT NULL,
  `pl_pc3_5` text NOT NULL,
  `pl_pc3_6` text NOT NULL,
  `pl_pc3_7` text NOT NULL,
  `pl_pc3_8` text NOT NULL,
  `pl_pc3_9` text NOT NULL,
  `pl_pc3_10` text NOT NULL,
  `pl_pc3_11` text NOT NULL,
  `pl_pc3_12` text NOT NULL,
  `pl_cb1` text NOT NULL,
  `pl_cb2` date DEFAULT NULL,
  `pl_cb3` time DEFAULT NULL,
  `pl_cb4` text NOT NULL,
  `pl_cb5` text NOT NULL,
  `pl_cb6` date DEFAULT NULL,
  `pl_cb7` text NOT NULL,
  `pl_cb8` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting_pl2`
--

INSERT INTO `meeting_pl2` (`id`, `scheduling_id`, `pl_ga1_1`, `pl_ga1_2`, `pl_ga1_3`, `pl_ga1_4`, `pl_ga1_5`, `pl_ga1_6`, `pl_ga1_7`, `pl_ga1_8`, `pl_ga1_9`, `pl_ga1_10`, `pl_ga1_11`, `pl_ga1_12`, `pl_ga1_13`, `pl_ga1_14`, `pl_ga1_15`, `pl_ga1_16`, `pl_ga1_17`, `pl_ga1_18`, `pl_ga1_19`, `pl_ga1_20`, `pl_ga1_21`, `pl_ga2_1`, `pl_ga2_2`, `pl_ga2_3`, `pl_ga2_4`, `pl_ga3_1`, `pl_ga3_2`, `pl_ga4_1`, `pl_ga4_2`, `pl_ga4_3`, `pl_ga4_4`, `pl_ga4_5`, `pl_ga4_6`, `pl_ga4_7`, `pl_ga4_8`, `pl_ga4_9`, `pl_ga4_10`, `pl_ga4_11`, `pl_ga4_12`, `pl_ga4_13`, `pl_ga4_14`, `pl_ga4_15`, `pl_ga4_16`, `pl_ga4_17`, `pl_ga4_18`, `pl_ga4_19`, `pl_ga4_20`, `pl_ga5_1`, `pl_ga6_1`, `pl_cu1_1`, `pl_cu1_2`, `pl_cu1_3`, `pl_cu1_4`, `pl_cu1_5`, `pl_cu1_6`, `pl_cu1_7`, `pl_cu1_8`, `pl_cu1_9`, `pl_cu2_1`, `pl_cu2_2`, `pl_cu2_3`, `pl_cu2_4`, `pl_cu2_5`, `pl_cu2_6`, `pl_cu3_1`, `pl_cu3_2`, `pl_cu3_3`, `pl_cu3_4`, `pl_cu4_1`, `pl_cu4_2`, `pl_cu4_3`, `pl_cu4_4`, `pl_cu5_1`, `pl_cu5_2`, `pl_cu5_3`, `pl_cu5_4`, `pl_cu5_5`, `pl_cu5_6`, `pl_cu5_7`, `pl_cu5_8`, `pl_cu6_1`, `pl_cu6_2`, `pl_cu6_3`, `pl_cu6_4`, `pl_cu6_5`, `pl_cu6_6`, `pl_cu6_7`, `pl_cu6_8`, `pl_cu6_9`, `pl_cu7_1`, `pl_cu7_2`, `pl_cu7_3`, `pl_cu7_4`, `pl_cu7_5`, `pl_cu8_1`, `pl_cu8_2`, `pl_cu9_1`, `pl_cu10_1`, `pl_cu11_1`, `pl_cu11_2`, `pl_cu11_3`, `pl_cu11_4`, `pl_cu12_1`, `pl_cu12_2`, `pl_cu12_3`, `pl_mo1_1`, `pl_mo1_2`, `pl_mo1_3`, `pl_mo1_4`, `pl_mo1_5`, `pl_mo1_6`, `pl_mo1_7`, `pl_mo1_8`, `pl_mo1_9`, `pl_mo2_1`, `pl_mo2_2`, `pl_mo2_3`, `pl_mo2_4`, `pl_mo2_5`, `pl_mo2_6`, `pl_mo2_7`, `pl_mo2_8`, `pl_mo2_9`, `pl_mo2_10`, `pl_mo2_11`, `pl_mo2_12`, `pl_ws1_1`, `pl_ws1_2`, `pl_ws1_3`, `pl_ws1_4`, `pl_ws1_5`, `pl_ws1_6`, `pl_ws2_1`, `pl_ws2_2`, `pl_ws3_1`, `pl_ws4_1`, `pl_ws5_1`, `pl_ws6_1`, `pl_ws7_1`, `pl_qa1_1`, `pl_qa1_2`, `pl_qa1_3`, `pl_qa1_4`, `pl_qa1_5`, `pl_qa2_1`, `pl_qa2_2`, `pl_qa2_3`, `pl_qa2_4`, `pl_pc1_1`, `pl_pc1_2`, `pl_pc1_3`, `pl_pc1_4`, `pl_pc1_5`, `pl_pc1_6`, `pl_pc1_7`, `pl_pc1_8`, `pl_pc1_9`, `pl_pc1_10`, `pl_pc1_11`, `pl_pc1_12`, `pl_pc2_1`, `pl_pc2_2`, `pl_pc2_3`, `pl_pc2_4`, `pl_pc2_5`, `pl_pc2_6`, `pl_pc2_7`, `pl_pc2_8`, `pl_pc2_9`, `pl_pc3_1`, `pl_pc3_2`, `pl_pc3_3`, `pl_pc3_4`, `pl_pc3_5`, `pl_pc3_6`, `pl_pc3_7`, `pl_pc3_8`, `pl_pc3_9`, `pl_pc3_10`, `pl_pc3_11`, `pl_pc3_12`, `pl_cb1`, `pl_cb2`, `pl_cb3`, `pl_cb4`, `pl_cb5`, `pl_cb6`, `pl_cb7`, `pl_cb8`) VALUES
(1, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meeting_pp`
--

CREATE TABLE `meeting_pp` (
  `id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `date_pp` date DEFAULT NULL,
  `pp_m2_1` text NOT NULL,
  `pp_m2_2` text NOT NULL,
  `pp_m2_3` text NOT NULL,
  `pp_m2_4` date NOT NULL,
  `pp_m3_1` text NOT NULL,
  `pp_m3_2` text NOT NULL,
  `pp_m3_3` text NOT NULL,
  `pp_m4_1` text NOT NULL,
  `pp_m4_2` text NOT NULL,
  `pp_m4_3` text NOT NULL,
  `pp_m4_4` date NOT NULL,
  `pp_m4_5` date NOT NULL,
  `pp_m4_6` date NOT NULL,
  `pp_m4_7` text NOT NULL,
  `pp_m4_8` text NOT NULL,
  `pp_m4_9` text NOT NULL,
  `pp_m5_1` text NOT NULL,
  `pp_m5_2` date NOT NULL,
  `pp_m5_3` text NOT NULL,
  `pp_m5_4` text NOT NULL,
  `pp_m6_1` text NOT NULL,
  `pp_m6_2` text NOT NULL,
  `pp_m6_3` text NOT NULL,
  `pp_m6_4` text NOT NULL,
  `pp_m6_5` text NOT NULL,
  `pp_m6_6` text NOT NULL,
  `pp_m6_7` text NOT NULL,
  `pp_m6_8` text NOT NULL,
  `pp_m6_9` text NOT NULL,
  `pp_m6_10` text NOT NULL,
  `pp_m6_11` text NOT NULL,
  `pp_m6_12` text NOT NULL,
  `pp_m6_13` text NOT NULL,
  `pp_m6_14` text NOT NULL,
  `pp_m6_15` text NOT NULL,
  `pp_m6_16` text NOT NULL,
  `pp_m7_1` text NOT NULL,
  `pp_f1_1` text NOT NULL,
  `pp_f1_2` text NOT NULL,
  `pp_f1_3` text NOT NULL,
  `pp_f1_4` text NOT NULL,
  `pp_f2_1` text NOT NULL,
  `pp_f2_2` text NOT NULL,
  `pp_f2_3` text NOT NULL,
  `pp_f2_4` text NOT NULL,
  `pp_f3_1` text NOT NULL,
  `pp_f3_2` text NOT NULL,
  `pp_f3_3` text NOT NULL,
  `pp_f3_4` text NOT NULL,
  `pp_f3_5` text NOT NULL,
  `pp_f3_6` text NOT NULL,
  `pp_f3_7` text NOT NULL,
  `pp_f3_8` text NOT NULL,
  `pp_f3_9` text NOT NULL,
  `pp_f3_10` text NOT NULL,
  `pp_f4_1` text NOT NULL,
  `pp_f5_1` text NOT NULL,
  `pp_f5_2` text NOT NULL,
  `pp_f5_3` text NOT NULL,
  `pp_f6_1` text NOT NULL,
  `pp_f6_2` text NOT NULL,
  `pp_f6_3` text NOT NULL,
  `pp_f6_4` text NOT NULL,
  `pp_f6_5` text NOT NULL,
  `pp_f6_6` text NOT NULL,
  `pp_f7_1` text NOT NULL,
  `pp_f7_2` text NOT NULL,
  `pp_f7_3` text NOT NULL,
  `pp_f7_4` text NOT NULL,
  `pp_f8_1` text NOT NULL,
  `pp_f8_2` text NOT NULL,
  `pp_f8_3` text NOT NULL,
  `pp_f8_4` date NOT NULL,
  `pp_f8_5` text NOT NULL,
  `pp_f8_6` text NOT NULL,
  `pp_f8_7` text NOT NULL,
  `pp_f8_8` text NOT NULL,
  `pp_f8_9` text NOT NULL,
  `pp_f8_10` text NOT NULL,
  `pp_f8_11` text NOT NULL,
  `pp_f8_12` text NOT NULL,
  `pp_f9_1` text NOT NULL,
  `pp_f9_2` text NOT NULL,
  `pp_f9_3` text NOT NULL,
  `pp_f9_4` text NOT NULL,
  `pp_f10_1` text NOT NULL,
  `pp_f10_2` text NOT NULL,
  `pp_f10_3` text NOT NULL,
  `pp_f10_4` text NOT NULL,
  `pp_f10_5` text NOT NULL,
  `pp_f10_6` text NOT NULL,
  `pp_f10_7` text NOT NULL,
  `pp_f11_1` text NOT NULL,
  `pp_f11_2` text NOT NULL,
  `pp_f11_3` text NOT NULL,
  `pp_f11_4` text NOT NULL,
  `pp_f12_1` text NOT NULL,
  `pp_f12_2` text NOT NULL,
  `pp_f12_3` text NOT NULL,
  `pp_f13_1` text NOT NULL,
  `pp_ct2_1` text NOT NULL,
  `pp_ct2_2` text NOT NULL,
  `pp_ct2_3` date NOT NULL,
  `pp_ct2_4` text NOT NULL,
  `pp_ct2_5` text NOT NULL,
  `pp_ct3_1` text NOT NULL,
  `pp_ct4_1` text NOT NULL,
  `pp_ct4_2` text NOT NULL,
  `pp_ct4_3` text NOT NULL,
  `pp_ct4_4` text NOT NULL,
  `pp_ct4_5` text NOT NULL,
  `pp_ct4_6` text NOT NULL,
  `pp_ct5_1` text NOT NULL,
  `pp_ct6_1` text NOT NULL,
  `pp_ct7_1` text NOT NULL,
  `pp_ct7_2` text NOT NULL,
  `pp_ct7_3` text NOT NULL,
  `pp_ct7_4` text NOT NULL,
  `pp_ct8_1` text NOT NULL,
  `pp_ct8_2` text NOT NULL,
  `pp_ct8_3` text NOT NULL,
  `pp_ct8_4` text NOT NULL,
  `pp_ct8_5` text NOT NULL,
  `pp_ct8_6` text NOT NULL,
  `pp_ct9_1` text NOT NULL,
  `pp_ct9_2` text NOT NULL,
  `pp_ct9_3` text NOT NULL,
  `pp_ct9_4` text NOT NULL,
  `pp_ct9_5` text NOT NULL,
  `pp_ct9_6` text NOT NULL,
  `pp_ct9_7` text NOT NULL,
  `pp_ct9_8` text NOT NULL,
  `pp_ct9_9` text NOT NULL,
  `pp_ct10_1` text NOT NULL,
  `pp_ct11_1` text NOT NULL,
  `pp_ct11_2` text NOT NULL,
  `pp_ct11_3` text NOT NULL,
  `pp_ct11_4` text NOT NULL,
  `pp_ct11_5` text NOT NULL,
  `pp_ct11_6` text NOT NULL,
  `pp_ct11_7` text NOT NULL,
  `pp_ct11_8` text NOT NULL,
  `pp_ct11_9` text NOT NULL,
  `pp_ct11_10` text NOT NULL,
  `pp_ct11_11` text NOT NULL,
  `pp_ct11_12` text NOT NULL,
  `pp_ct11_13` text NOT NULL,
  `pp_ct11_14` text NOT NULL,
  `pp_ct11_15` text NOT NULL,
  `pp_ct11_16` text NOT NULL,
  `pp_ct12_1` text NOT NULL,
  `pp_ct12_2` text NOT NULL,
  `pp_ct12_3` text NOT NULL,
  `pp_ct12_4` text NOT NULL,
  `pp_ct12_5` text NOT NULL,
  `pp_ct12_6` text NOT NULL,
  `pp_ct12_7` text NOT NULL,
  `pp_ct12_8` text NOT NULL,
  `pp_ct12_9` text NOT NULL,
  `pp_ct12_10` text NOT NULL,
  `pp_ct12_11` text NOT NULL,
  `pp_ct12_12` text NOT NULL,
  `pp_ct12_13` text NOT NULL,
  `pp_ct13_1` text NOT NULL,
  `pp_ct13_2` text NOT NULL,
  `pp_ct13_3` text NOT NULL,
  `pp_ct13_4` text NOT NULL,
  `pp_ct13_5` text NOT NULL,
  `pp_ct13_6` text NOT NULL,
  `pp_ct13_7` text NOT NULL,
  `pp_ct13_8` text NOT NULL,
  `pp_ct13_9` text NOT NULL,
  `pp_ct13_10` text NOT NULL,
  `pp_ct13_11` text NOT NULL,
  `pp_ct13_12` text NOT NULL,
  `pp_ct13_13` text NOT NULL,
  `pp_ct13_14` text NOT NULL,
  `pp_ct14_1` text NOT NULL,
  `pp_ct14_2` text NOT NULL,
  `pp_ct15_1` text NOT NULL,
  `pp_ct15_2` text NOT NULL,
  `pp_ct15_3` text NOT NULL,
  `pp_mo_1` text NOT NULL,
  `pp_mo_2` text NOT NULL,
  `pp_mo_3` text NOT NULL,
  `pp_mo_4` text NOT NULL,
  `pp_mo_5` text NOT NULL,
  `pp_mo_6` text NOT NULL,
  `pp_mo_7` text NOT NULL,
  `pp_mo_8` text NOT NULL,
  `pp_mo_9` text NOT NULL,
  `pp_mo_10` text NOT NULL,
  `pp_c1_1` text NOT NULL,
  `pp_c1_2` text NOT NULL,
  `pp_c1_3` text NOT NULL,
  `pp_c2_1` text NOT NULL,
  `pp_c2_2` text NOT NULL,
  `pp_c2_3` text NOT NULL,
  `pp_c3_1` text NOT NULL,
  `pp_pc1_1` date NOT NULL,
  `pp_pc1_2` time NOT NULL,
  `pp_pc2_1` date NOT NULL,
  `pp_pc2_2` time NOT NULL,
  `pp_pc3` text NOT NULL,
  `pp_pc4_1` date NOT NULL,
  `pp_pc4_2` text NOT NULL,
  `pp_pc5_1` date NOT NULL,
  `pp_pc5_2` time NOT NULL,
  `pp_pc6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting_pp`
--

INSERT INTO `meeting_pp` (`id`, `scheduling_id`, `date_pp`, `pp_m2_1`, `pp_m2_2`, `pp_m2_3`, `pp_m2_4`, `pp_m3_1`, `pp_m3_2`, `pp_m3_3`, `pp_m4_1`, `pp_m4_2`, `pp_m4_3`, `pp_m4_4`, `pp_m4_5`, `pp_m4_6`, `pp_m4_7`, `pp_m4_8`, `pp_m4_9`, `pp_m5_1`, `pp_m5_2`, `pp_m5_3`, `pp_m5_4`, `pp_m6_1`, `pp_m6_2`, `pp_m6_3`, `pp_m6_4`, `pp_m6_5`, `pp_m6_6`, `pp_m6_7`, `pp_m6_8`, `pp_m6_9`, `pp_m6_10`, `pp_m6_11`, `pp_m6_12`, `pp_m6_13`, `pp_m6_14`, `pp_m6_15`, `pp_m6_16`, `pp_m7_1`, `pp_f1_1`, `pp_f1_2`, `pp_f1_3`, `pp_f1_4`, `pp_f2_1`, `pp_f2_2`, `pp_f2_3`, `pp_f2_4`, `pp_f3_1`, `pp_f3_2`, `pp_f3_3`, `pp_f3_4`, `pp_f3_5`, `pp_f3_6`, `pp_f3_7`, `pp_f3_8`, `pp_f3_9`, `pp_f3_10`, `pp_f4_1`, `pp_f5_1`, `pp_f5_2`, `pp_f5_3`, `pp_f6_1`, `pp_f6_2`, `pp_f6_3`, `pp_f6_4`, `pp_f6_5`, `pp_f6_6`, `pp_f7_1`, `pp_f7_2`, `pp_f7_3`, `pp_f7_4`, `pp_f8_1`, `pp_f8_2`, `pp_f8_3`, `pp_f8_4`, `pp_f8_5`, `pp_f8_6`, `pp_f8_7`, `pp_f8_8`, `pp_f8_9`, `pp_f8_10`, `pp_f8_11`, `pp_f8_12`, `pp_f9_1`, `pp_f9_2`, `pp_f9_3`, `pp_f9_4`, `pp_f10_1`, `pp_f10_2`, `pp_f10_3`, `pp_f10_4`, `pp_f10_5`, `pp_f10_6`, `pp_f10_7`, `pp_f11_1`, `pp_f11_2`, `pp_f11_3`, `pp_f11_4`, `pp_f12_1`, `pp_f12_2`, `pp_f12_3`, `pp_f13_1`, `pp_ct2_1`, `pp_ct2_2`, `pp_ct2_3`, `pp_ct2_4`, `pp_ct2_5`, `pp_ct3_1`, `pp_ct4_1`, `pp_ct4_2`, `pp_ct4_3`, `pp_ct4_4`, `pp_ct4_5`, `pp_ct4_6`, `pp_ct5_1`, `pp_ct6_1`, `pp_ct7_1`, `pp_ct7_2`, `pp_ct7_3`, `pp_ct7_4`, `pp_ct8_1`, `pp_ct8_2`, `pp_ct8_3`, `pp_ct8_4`, `pp_ct8_5`, `pp_ct8_6`, `pp_ct9_1`, `pp_ct9_2`, `pp_ct9_3`, `pp_ct9_4`, `pp_ct9_5`, `pp_ct9_6`, `pp_ct9_7`, `pp_ct9_8`, `pp_ct9_9`, `pp_ct10_1`, `pp_ct11_1`, `pp_ct11_2`, `pp_ct11_3`, `pp_ct11_4`, `pp_ct11_5`, `pp_ct11_6`, `pp_ct11_7`, `pp_ct11_8`, `pp_ct11_9`, `pp_ct11_10`, `pp_ct11_11`, `pp_ct11_12`, `pp_ct11_13`, `pp_ct11_14`, `pp_ct11_15`, `pp_ct11_16`, `pp_ct12_1`, `pp_ct12_2`, `pp_ct12_3`, `pp_ct12_4`, `pp_ct12_5`, `pp_ct12_6`, `pp_ct12_7`, `pp_ct12_8`, `pp_ct12_9`, `pp_ct12_10`, `pp_ct12_11`, `pp_ct12_12`, `pp_ct12_13`, `pp_ct13_1`, `pp_ct13_2`, `pp_ct13_3`, `pp_ct13_4`, `pp_ct13_5`, `pp_ct13_6`, `pp_ct13_7`, `pp_ct13_8`, `pp_ct13_9`, `pp_ct13_10`, `pp_ct13_11`, `pp_ct13_12`, `pp_ct13_13`, `pp_ct13_14`, `pp_ct14_1`, `pp_ct14_2`, `pp_ct15_1`, `pp_ct15_2`, `pp_ct15_3`, `pp_mo_1`, `pp_mo_2`, `pp_mo_3`, `pp_mo_4`, `pp_mo_5`, `pp_mo_6`, `pp_mo_7`, `pp_mo_8`, `pp_mo_9`, `pp_mo_10`, `pp_c1_1`, `pp_c1_2`, `pp_c1_3`, `pp_c2_1`, `pp_c2_2`, `pp_c2_3`, `pp_c3_1`, `pp_pc1_1`, `pp_pc1_2`, `pp_pc2_1`, `pp_pc2_2`, `pp_pc3`, `pp_pc4_1`, `pp_pc4_2`, `pp_pc5_1`, `pp_pc5_2`, `pp_pc6`) VALUES
(1, 1, NULL, '', '', '', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '0000-00-00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `modul_id` int(11) NOT NULL,
  `modul_span` varchar(50) NOT NULL,
  `modul_icon` varchar(50) NOT NULL,
  `modul_url` varchar(50) NOT NULL,
  `modul_parent` int(11) NOT NULL,
  `modul_level` int(11) NOT NULL,
  `modul_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`modul_id`, `modul_span`, `modul_icon`, `modul_url`, `modul_parent`, `modul_level`, `modul_role`) VALUES
(1, 'Master Data', 'ti ti-harddrives', 'dropdown-master', 0, 0, 'ADMIN'),
(2, 'Department', '', 'department', 1, 2, 'ADMIN'),
(3, 'Customers', '', 'customers', 1, 2, 'ADMIN'),
(4, 'Styles', '', 'style', 1, 2, 'ADMIN'),
(5, 'Employees', '', 'employees', 1, 2, 'ADMIN'),
(6, 'PP Process', 'ti ti-write', 'dropdown-pp', 0, 0, 'ADMIN'),
(7, 'Scheduling', '', 'scheduling', 6, 2, 'ADMIN'),
(8, 'Meeting', '', 'meeting', 6, 2, 'ADMIN'),
(10, 'PP Process', 'ti ti-write', 'dropdown-pp', 0, 0, 'SENIOR EXECUTIVE'),
(11, 'Scheduling', '', 'scheduling_ex', 10, 2, 'SENIOR EXECUTIVE'),
(12, 'Meeting', '', 'meeting_ex', 10, 2, 'SENIOR EXECUTIVE'),
(13, 'PP Process', 'la la-files-o', 'dropdown-pp', 0, 0, 'ASSISTANT MANAGER'),
(14, 'Scheduling', '', 'scheduling_rep', 13, 2, 'ASSISTANT MANAGER'),
(15, 'Meeting', '', 'meeting_rep', 13, 2, 'ASSISTANT MANAGER'),
(16, 'Score Card', '', 'scorecard_rep', 13, 2, 'ASSISTANT MANAGER'),
(17, 'PP Process', 'ti ti-write', 'dropdown-pp', 0, 0, 'EXECUTIVE'),
(18, 'Scheduling', '', 'scheduling_em', 17, 2, 'EXECUTIVE'),
(19, 'Meeting', '', 'meeting_em', 17, 2, 'EXECUTIVE'),
(20, 'PP Process', 'ti ti-write', 'dropdown-pp', 0, 0, 'STAFF'),
(21, 'Scheduling', '', 'scheduling_stf', 20, 2, 'STAFF'),
(22, 'Meeting', '', 'meeting_stf', 20, 2, 'STAFF');

-- --------------------------------------------------------

--
-- Table structure for table `pdra`
--

CREATE TABLE `pdra` (
  `id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `remarks` text NOT NULL,
  `pc` varchar(50) NOT NULL,
  `ie` varchar(50) NOT NULL,
  `te` varchar(50) NOT NULL,
  `gl` varchar(50) NOT NULL,
  `input1_1` text NOT NULL,
  `input1_2` text NOT NULL,
  `input1_3` text NOT NULL,
  `input1_4` text NOT NULL,
  `input1_5` text NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `date3` date NOT NULL,
  `date4` date NOT NULL,
  `date5` date NOT NULL,
  `date6` date NOT NULL,
  `date7` date NOT NULL,
  `date8` date NOT NULL,
  `date9` date NOT NULL,
  `date10` date NOT NULL,
  `date11` date NOT NULL,
  `date12` date NOT NULL,
  `input3_1` text NOT NULL,
  `input3_2` text NOT NULL,
  `input3_3` text NOT NULL,
  `input3_4` text NOT NULL,
  `input3_5` text NOT NULL,
  `input3_6` text NOT NULL,
  `input3_7` text NOT NULL,
  `input3_8` text NOT NULL,
  `input3_9` text NOT NULL,
  `input3_10` text NOT NULL,
  `input3_11` text NOT NULL,
  `input4_1` text NOT NULL,
  `input4_2` text NOT NULL,
  `input4_3` text NOT NULL,
  `input4_4` text NOT NULL,
  `input4_5` text NOT NULL,
  `input4_6` text NOT NULL,
  `input4_7` text NOT NULL,
  `input4_8` text NOT NULL,
  `input4_9` text NOT NULL,
  `rad1` varchar(5) NOT NULL,
  `rad2` varchar(5) NOT NULL,
  `rad3` varchar(5) NOT NULL,
  `rad4` varchar(5) NOT NULL,
  `rad5` varchar(5) NOT NULL,
  `rad6` varchar(5) NOT NULL,
  `rad7` varchar(5) NOT NULL,
  `rad8` varchar(5) NOT NULL,
  `rad9` varchar(5) NOT NULL,
  `rad10` varchar(5) NOT NULL,
  `rad11` varchar(5) NOT NULL,
  `rad12` varchar(5) NOT NULL,
  `rad13` varchar(5) NOT NULL,
  `rad14` varchar(5) NOT NULL,
  `rad15` varchar(5) NOT NULL,
  `rad16` varchar(5) NOT NULL,
  `rad17` varchar(5) NOT NULL,
  `rad18` varchar(5) NOT NULL,
  `rad19` varchar(5) NOT NULL,
  `input5_1` text NOT NULL,
  `input5_2` text NOT NULL,
  `input5_3` text NOT NULL,
  `input5_4` text NOT NULL,
  `input5_5` text NOT NULL,
  `input5_6` text NOT NULL,
  `input5_7` text NOT NULL,
  `input5_8` text NOT NULL,
  `input5_9` text NOT NULL,
  `input5_10` text NOT NULL,
  `input6_1` varchar(3) DEFAULT NULL,
  `input6_2` varchar(3) DEFAULT NULL,
  `input6_3` varchar(3) DEFAULT NULL,
  `input6_4` varchar(3) DEFAULT NULL,
  `input6_5` varchar(3) DEFAULT NULL,
  `input6_6` varchar(3) DEFAULT NULL,
  `input6_7` varchar(3) DEFAULT NULL,
  `input6_8` varchar(3) DEFAULT NULL,
  `input6_9` varchar(3) DEFAULT NULL,
  `input6_10` varchar(3) DEFAULT NULL,
  `input6_11` varchar(3) DEFAULT NULL,
  `input6_12` varchar(3) DEFAULT NULL,
  `input6_13` varchar(3) DEFAULT NULL,
  `input6_14` varchar(3) DEFAULT NULL,
  `input6_15` varchar(3) DEFAULT NULL,
  `input6_16` varchar(3) DEFAULT NULL,
  `input6_17` varchar(3) DEFAULT NULL,
  `input6_18` varchar(3) DEFAULT NULL,
  `input6_19` varchar(3) DEFAULT NULL,
  `input6_20` varchar(3) DEFAULT NULL,
  `input6_21` varchar(3) DEFAULT NULL,
  `input6_22` varchar(3) DEFAULT NULL,
  `input6_23` text,
  `input6_24` text,
  `input6_25` text,
  `input6_26` text,
  `input6_27` text,
  `input6_28` text,
  `input6_29` text,
  `input6_30` text,
  `input6_31` text,
  `input6_32` text,
  `input6_33` text,
  `input6_34` text,
  `input6_35` text,
  `input6_36` text,
  `input6_37` text,
  `input6_38` text,
  `input6_39` text,
  `input6_40` text,
  `input6_41` text,
  `input6_42` text,
  `input6_43` text,
  `input6_44` text,
  `input8_1` text,
  `input8_2` text,
  `input8_3` text,
  `input8_4` text,
  `input8_5` text,
  `input8_6` text,
  `input8_7` text,
  `input8_8` text,
  `input8_9` text,
  `input8_10` text,
  `input8_11` text,
  `input8_12` text,
  `input8_13` text,
  `input8_14` text,
  `input8_15` text,
  `input8_16` text,
  `input8_17` text,
  `input8_18` text,
  `input8_19` text,
  `input8_20` text,
  `input8_21` text,
  `input8_22` text,
  `input8_23` text,
  `input8_24` text,
  `input9_1` text,
  `input9_2` text,
  `input9_3` text,
  `input9_4` text,
  `input9_5` text,
  `input9_6` text,
  `input9_7` text,
  `input9_8` text,
  `input9_9` text,
  `input9_10` text,
  `input9_11` text,
  `input9_12` text,
  `input9_13` text,
  `input9_14` text,
  `input9_15` text,
  `input9_16` text,
  `input9_17` text,
  `input9_18` text,
  `input9_19` text,
  `input9_20` text,
  `input10` text NOT NULL,
  `input11` text NOT NULL,
  `input12_1` text NOT NULL,
  `input12_2` text NOT NULL,
  `input12_3` text NOT NULL,
  `input12_4` text NOT NULL,
  `input12_5` text NOT NULL,
  `input12_6` text NOT NULL,
  `input12_7` text NOT NULL,
  `input12_8` text NOT NULL,
  `input12_9` text NOT NULL,
  `input12_10` text NOT NULL,
  `input12_11` text NOT NULL,
  `input12_12` text NOT NULL,
  `input12_13` text NOT NULL,
  `input12_14` text NOT NULL,
  `input12_15` text NOT NULL,
  `input13` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pdra_extend`
--

CREATE TABLE `pdra_extend` (
  `id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `wht` text NOT NULL,
  `who` text NOT NULL,
  `whn` text NOT NULL,
  `st` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pra`
--

CREATE TABLE `pra` (
  `id_pra` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `prepared` varchar(50) NOT NULL,
  `radio1` varchar(5) DEFAULT NULL,
  `radio2` varchar(10) DEFAULT NULL,
  `que1` varchar(5) DEFAULT NULL,
  `que2` varchar(5) DEFAULT NULL,
  `que3` varchar(5) DEFAULT NULL,
  `que4` varchar(5) DEFAULT NULL,
  `que5` varchar(5) DEFAULT NULL,
  `que6` varchar(5) DEFAULT NULL,
  `que7` varchar(5) DEFAULT NULL,
  `que8` varchar(5) DEFAULT NULL,
  `que9` varchar(5) DEFAULT NULL,
  `que10` varchar(5) DEFAULT NULL,
  `que11` varchar(5) DEFAULT NULL,
  `que12` varchar(5) DEFAULT NULL,
  `que13` varchar(5) DEFAULT NULL,
  `que14` varchar(5) DEFAULT NULL,
  `que15` varchar(5) DEFAULT NULL,
  `que16` varchar(5) DEFAULT NULL,
  `que17` varchar(5) DEFAULT NULL,
  `que18` varchar(5) DEFAULT NULL,
  `que19` varchar(5) DEFAULT NULL,
  `que20` varchar(5) DEFAULT NULL,
  `que21` varchar(5) DEFAULT NULL,
  `que22` varchar(5) DEFAULT NULL,
  `que23` varchar(5) DEFAULT NULL,
  `que24` varchar(5) DEFAULT NULL,
  `que25` varchar(5) DEFAULT NULL,
  `que26` varchar(5) DEFAULT NULL,
  `que27` varchar(5) DEFAULT NULL,
  `que28` varchar(5) DEFAULT NULL,
  `que29` varchar(5) DEFAULT NULL,
  `que30` varchar(5) DEFAULT NULL,
  `que31` varchar(5) DEFAULT NULL,
  `que32` varchar(5) DEFAULT NULL,
  `risk1` varchar(5) DEFAULT NULL,
  `risk2` varchar(5) DEFAULT NULL,
  `risk3` varchar(5) DEFAULT NULL,
  `risk4` varchar(5) DEFAULT NULL,
  `risk5` varchar(5) DEFAULT NULL,
  `risk6` varchar(5) DEFAULT NULL,
  `risk7` varchar(5) DEFAULT NULL,
  `risk8` varchar(5) DEFAULT NULL,
  `risk9` varchar(5) DEFAULT NULL,
  `risk10` varchar(5) DEFAULT NULL,
  `risk11` varchar(5) DEFAULT NULL,
  `risk12` varchar(5) DEFAULT NULL,
  `risk13` varchar(5) DEFAULT NULL,
  `risk14` varchar(5) DEFAULT NULL,
  `risk15` varchar(5) DEFAULT NULL,
  `risk16` varchar(5) DEFAULT NULL,
  `risk17` varchar(5) DEFAULT NULL,
  `risk18` varchar(5) DEFAULT NULL,
  `risk19` varchar(5) DEFAULT NULL,
  `risk20` varchar(5) DEFAULT NULL,
  `risk21` varchar(5) DEFAULT NULL,
  `risk22` varchar(5) DEFAULT NULL,
  `risk23` varchar(5) DEFAULT NULL,
  `risk24` varchar(5) DEFAULT NULL,
  `risk25` varchar(5) DEFAULT NULL,
  `risk26` varchar(5) DEFAULT NULL,
  `risk27` varchar(5) DEFAULT NULL,
  `risk28` varchar(5) DEFAULT NULL,
  `risk29` varchar(5) DEFAULT NULL,
  `risk30` varchar(5) DEFAULT NULL,
  `quetext1` text NOT NULL,
  `quetext2` text NOT NULL,
  `quetext3` text NOT NULL,
  `quetext4` text NOT NULL,
  `quetext5` text NOT NULL,
  `quetext6` text NOT NULL,
  `quetext7` text NOT NULL,
  `quetext8` text NOT NULL,
  `quetext9` text NOT NULL,
  `quetext10` text NOT NULL,
  `quetext11` text NOT NULL,
  `quetext12` text NOT NULL,
  `quetext13` text NOT NULL,
  `quetext14` text NOT NULL,
  `quetext15` text NOT NULL,
  `quetext16` text NOT NULL,
  `quetext17` text NOT NULL,
  `quetext18` text NOT NULL,
  `quetext19` text NOT NULL,
  `quetext20` text NOT NULL,
  `quetext21` text NOT NULL,
  `quetext22` text NOT NULL,
  `quetext23` text NOT NULL,
  `quetext24` text NOT NULL,
  `quetext25` text NOT NULL,
  `quetext26` text NOT NULL,
  `quetext27` text NOT NULL,
  `quetext28` text NOT NULL,
  `quetext29` text NOT NULL,
  `quetext30` text NOT NULL,
  `quetext31` text NOT NULL,
  `date2` date DEFAULT NULL,
  `sizes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pra`
--

INSERT INTO `pra` (`id_pra`, `scheduling_id`, `date`, `prepared`, `radio1`, `radio2`, `que1`, `que2`, `que3`, `que4`, `que5`, `que6`, `que7`, `que8`, `que9`, `que10`, `que11`, `que12`, `que13`, `que14`, `que15`, `que16`, `que17`, `que18`, `que19`, `que20`, `que21`, `que22`, `que23`, `que24`, `que25`, `que26`, `que27`, `que28`, `que29`, `que30`, `que31`, `que32`, `risk1`, `risk2`, `risk3`, `risk4`, `risk5`, `risk6`, `risk7`, `risk8`, `risk9`, `risk10`, `risk11`, `risk12`, `risk13`, `risk14`, `risk15`, `risk16`, `risk17`, `risk18`, `risk19`, `risk20`, `risk21`, `risk22`, `risk23`, `risk24`, `risk25`, `risk26`, `risk27`, `risk28`, `risk29`, `risk30`, `quetext1`, `quetext2`, `quetext3`, `quetext4`, `quetext5`, `quetext6`, `quetext7`, `quetext8`, `quetext9`, `quetext10`, `quetext11`, `quetext12`, `quetext13`, `quetext14`, `quetext15`, `quetext16`, `quetext17`, `quetext18`, `quetext19`, `quetext20`, `quetext21`, `quetext22`, `quetext23`, `quetext24`, `quetext25`, `quetext26`, `quetext27`, `quetext28`, `quetext29`, `quetext30`, `quetext31`, `date2`, `sizes`) VALUES
(1, 1, '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `pra2_main`
--

CREATE TABLE `pra2_main` (
  `id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `pilot` text NOT NULL,
  `conclusion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pra2_main`
--

INSERT INTO `pra2_main` (`id`, `scheduling_id`, `pilot`, `conclusion`) VALUES
(1, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pra_desc`
--

CREATE TABLE `pra_desc` (
  `id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `field_1` text,
  `field_2` text,
  `field_3` text,
  `field_4` text,
  `field_5` text,
  `photo_1` text,
  `field_6` text,
  `photo_2` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pra_element`
--

CREATE TABLE `pra_element` (
  `id` int(11) NOT NULL,
  `scheduling_id` int(11) NOT NULL,
  `risk_element` text NOT NULL,
  `ow_fact` varchar(50) NOT NULL,
  `support_mast` varchar(50) NOT NULL,
  `plan_date` date NOT NULL,
  `actual_date` date NOT NULL,
  `who` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `scheduling`
--

CREATE TABLE `scheduling` (
  `scheduling_id` int(11) NOT NULL,
  `plant` varchar(20) NOT NULL,
  `styles_id` int(11) NOT NULL,
  `season` varchar(30) NOT NULL,
  `smv` float NOT NULL,
  `range_buy` text NOT NULL,
  `merchant` varchar(32) NOT NULL,
  `business_head` varchar(32) NOT NULL,
  `rm_date` date NOT NULL,
  `planned_date` date NOT NULL,
  `psd` date NOT NULL,
  `revised_pp` varchar(50) NOT NULL,
  `actual_date` date NOT NULL,
  `no_lines` int(11) NOT NULL,
  `pilot_line` int(11) NOT NULL,
  `reason` text NOT NULL,
  `so` varchar(30) NOT NULL,
  `li` int(11) NOT NULL,
  `comments` text NOT NULL,
  `information` text NOT NULL,
  `final` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheduling`
--

INSERT INTO `scheduling` (`scheduling_id`, `plant`, `styles_id`, `season`, `smv`, `range_buy`, `merchant`, `business_head`, `rm_date`, `planned_date`, `psd`, `revised_pp`, `actual_date`, `no_lines`, `pilot_line`, `reason`, `so`, `li`, `comments`, `information`, `final`) VALUES
(1, 'A151', 1, '', 0, '', '', '', '1970-01-01', '1970-01-01', '1970-01-01', '', '1970-01-01', 0, 0, '', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `scorecard`
--

CREATE TABLE `scorecard` (
  `scorecard_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE TABLE `styles` (
  `id` int(11) NOT NULL,
  `style_no` varchar(30) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `style_item` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`id`, `style_no`, `customer_id`, `style_item`, `remarks`, `status`) VALUES
(1, '60211086a', 2, 'Brief', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atteendees_pra`
--
ALTER TABLE `atteendees_pra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_meet`
--
ALTER TABLE `attendance_meet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `mast_cbf`
--
ALTER TABLE `mast_cbf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mast_cbt`
--
ALTER TABLE `mast_cbt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mast_global`
--
ALTER TABLE `mast_global`
  ADD PRIMARY KEY (`scheduling_id`);

--
-- Indexes for table `meeting_mast`
--
ALTER TABLE `meeting_mast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting_pl`
--
ALTER TABLE `meeting_pl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting_pl2`
--
ALTER TABLE `meeting_pl2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting_pp`
--
ALTER TABLE `meeting_pp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`modul_id`);

--
-- Indexes for table `pdra`
--
ALTER TABLE `pdra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdra_extend`
--
ALTER TABLE `pdra_extend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pra`
--
ALTER TABLE `pra`
  ADD PRIMARY KEY (`id_pra`);

--
-- Indexes for table `pra2_main`
--
ALTER TABLE `pra2_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pra_desc`
--
ALTER TABLE `pra_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pra_element`
--
ALTER TABLE `pra_element`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheduling`
--
ALTER TABLE `scheduling`
  ADD PRIMARY KEY (`scheduling_id`);

--
-- Indexes for table `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atteendees_pra`
--
ALTER TABLE `atteendees_pra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_meet`
--
ALTER TABLE `attendance_meet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mast_cbf`
--
ALTER TABLE `mast_cbf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mast_cbt`
--
ALTER TABLE `mast_cbt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meeting_mast`
--
ALTER TABLE `meeting_mast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meeting_pl`
--
ALTER TABLE `meeting_pl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meeting_pl2`
--
ALTER TABLE `meeting_pl2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meeting_pp`
--
ALTER TABLE `meeting_pp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `modul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pdra`
--
ALTER TABLE `pdra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pdra_extend`
--
ALTER TABLE `pdra_extend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pra`
--
ALTER TABLE `pra`
  MODIFY `id_pra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pra2_main`
--
ALTER TABLE `pra2_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pra_desc`
--
ALTER TABLE `pra_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pra_element`
--
ALTER TABLE `pra_element`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scheduling`
--
ALTER TABLE `scheduling`
  MODIFY `scheduling_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `styles`
--
ALTER TABLE `styles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
