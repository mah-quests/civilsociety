-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2020 at 08:35 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `resturant01`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(6, 'admin', '97bf34d31a8710e6b1649fd33357f783', 'admin@gmail.com', '', '2020-04-24 23:55:39'),
(8, 'abc888', '6d0361d5777656072438f6e314a852bc', 'abc@gmail.com', 'QX5ZMN', '2018-04-13 18:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(1, 'QX5ZMN'),
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(11, 48, 'Access to Food', '250,000 food parcels to be distributed during lockdown', '55.77', 'foodparcels.jpg'),
(12, 48, 'Medical Supplies', 'Community pharmacies to use volunteers for patient medication deliveries', '22.12', 'medication-supply.jpg'),
(13, 48, 'Gender Based & Other Violence', 'Lockdown has been seen to aggravate domestic and other violence in other countries. ', '12.35', 'gender-violance.jpg'),
(14, 50, 'Other type of response #1', 'Another type of data #1', '0.00', '5ad759e1546fc.jpg'),
(15, 51, 'Other type of response #2', 'Another type of data #2', '0.00', '5ad75a1869e93.jpg'),
(16, 52, 'Other type of response #3', 'Another type of data #3', '0.00', '5ad75a5dbb329.jpg'),
(17, 53, 'Other type of response #4', 'Another type of data #4', '0.00', '5ad79fcf59e66.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(62, 32, 'in process', 'hi', '2018-04-18 17:35:52'),
(63, 32, 'closed', 'cc', '2018-04-18 17:36:46'),
(64, 32, 'in process', 'fff', '2018-04-18 18:01:37'),
(65, 32, 'closed', 'its delv', '2018-04-18 18:08:55'),
(66, 34, 'in process', 'on a way', '2018-04-18 18:56:32'),
(67, 35, 'closed', 'ok', '2018-04-18 18:59:08'),
(68, 37, 'in process', 'on the way!', '2018-04-18 19:50:06'),
(69, 37, 'rejected', 'if admin cancel for any reason this box is for remark only for buter perposes', '2018-04-18 19:51:19'),
(70, 37, 'closed', 'delivered success', '2018-04-18 19:51:50'),
(71, 48, 'in process', 'NGo', '2020-04-26 11:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `request_by_partner`
--

CREATE TABLE `request_by_partner` (
  `req_id` int(222) NOT NULL,
  `firstname` varchar(222) NOT NULL,
  `lastname` varchar(222) NOT NULL,
  `sex` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `municipality` varchar(222) NOT NULL,
  `district` varchar(150) NOT NULL,
  `provice` varchar(100) NOT NULL,
  `alt_person` varchar(200) NOT NULL,
  `alt_number` varchar(100) NOT NULL,
  `identification` varchar(222) NOT NULL,
  `unique_code` varchar(2222) NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_by_partner`
--

INSERT INTO `request_by_partner` (`req_id`, `firstname`, `lastname`, `sex`, `phone`, `address`, `municipality`, `district`, `provice`, `alt_person`, `alt_number`, `identification`, `unique_code`, `status`, `date`) VALUES
(9, 'Thato Grant', '', 'Male', '0825561554420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'North West', 'Nomfazwe Thomas', '0825565541420', '456675634453445435', '4514', 1, '2020-04-28 12:03:32'),
(10, 'Thato Grant', '', 'Choose...', '082556665568781420', '6 Lingmoor, Spinetale Street', 'South Africa', 'Mathjabengdss', 'North West', 'Nomfazwe Thomas', '0825561420', 'ddsofudkdier', '9251', 1, '2020-04-28 12:50:40'),
(11, 'Thato Grant', '', 'Male', '082556188884354420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'North West', 'Thato Mohono', '08255614207767', 'kjfjufuevefdvg', '9389', 1, '2020-04-28 12:52:48'),
(12, 'Thato Grant', '', 'Female', '0825561323420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'North West', 'Nomfazwe Thomas', '0825561420443', '949473759454583', '5302', 1, '2020-04-29 05:12:02'),
(13, 'Thato Grant', 'Mohono', 'Male', '0825564341420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '4342323', '77484763623', '9616', 1, '2020-05-02 10:22:21'),
(14, 'Thato Grant', 'Mohono', 'Male', '082556149920', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '082795561420', '44343345434543', '4341', 1, '2020-05-02 10:33:02'),
(15, 'Thato Grant', 'Mohono', 'Male', '08255614206', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '08255614204444', '94947375945458655', '6499', 1, '2020-05-02 11:05:36'),
(16, 'Thato Grant', 'Mohono', 'Male', '082565561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '08265561420', '776766576786', '6017', 1, '2020-05-02 11:32:16'),
(17, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '4345465565', '94947375945458', '3041', 1, '2020-05-02 12:42:51'),
(18, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '9242', 1, '2020-05-02 13:03:31'),
(19, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '2449', 1, '2020-05-02 13:25:00'),
(20, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947345458', '2462', 1, '2020-05-02 13:44:49'),
(21, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '2692', 1, '2020-05-02 13:53:56'),
(22, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '2463', 1, '2020-05-02 14:02:32'),
(23, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '3751', 1, '2020-05-02 14:34:12'),
(24, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '6922', 1, '2020-05-02 14:43:45'),
(25, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '3723', 1, '2020-05-02 19:22:04'),
(26, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '7311', 1, '2020-05-02 19:26:33'),
(27, 'Thato Grant', 'Mohono', 'Female', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '3105', 1, '2020-05-02 19:41:17'),
(28, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '2050', 1, '2020-05-02 19:56:48'),
(29, 'Thato Grant', 'Mohono', 'Female', '0825561420', '6 Lingmoor, Spinetale Street', 'sdfdsfds', 'Mathjabeng', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '7353', 1, '2020-05-02 20:08:12'),
(30, 'Thato Grant', 'Mohono', 'Female', '0825561420', '6 Lingmoor, Spinetale Street', 'sdfdsfds', 'Maluti', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458w3423', '4408', 1, '2020-05-02 20:10:20'),
(31, 'Thato Grant', 'Mohono', 'Female', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'Maluti', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '8879', 1, '2020-05-02 20:14:38'),
(32, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'sdfdsfds', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '1007', 1, '2020-05-02 20:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `request_disability`
--

CREATE TABLE `request_disability` (
  `disability_id` int(222) NOT NULL,
  `unique_code` varchar(222) NOT NULL,
  `number_disabled` varchar(222) NOT NULL,
  `number_disabled_child` varchar(222) NOT NULL,
  `number_disabled_adult` varchar(222) NOT NULL,
  `physical_disability` varchar(222) NOT NULL,
  `other_disability` varchar(222) NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `psyco_social_disability` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_disability`
--

INSERT INTO `request_disability` (`disability_id`, `unique_code`, `number_disabled`, `number_disabled_child`, `number_disabled_adult`, `physical_disability`, `other_disability`, `status`, `date`, `psyco_social_disability`) VALUES
(1, '3041', 'No', 'Yes', 'No', 'Yes', 'Yes', 1, '2020-05-02 12:42:51', 'Yes'),
(2, '6922', 'Yes', 'Yes', 'No', 'Yes', 'No', 1, '2020-05-02 14:43:45', 'No'),
(3, '3723', 'No', 'No', 'Yes', 'No', 'No', 1, '2020-05-02 19:22:04', 'No'),
(4, '7311', 'Yes', 'No', 'No', 'No', 'Yes', 1, '2020-05-02 19:26:33', 'No'),
(5, '3105', '', '', '', '', '', 1, '2020-05-02 19:41:17', ''),
(6, '2050', '', '', '', '', '', 1, '2020-05-02 19:56:48', ''),
(7, '7353', '', '', '', '', '', 1, '2020-05-02 20:08:12', ''),
(8, '4408', '', '', '', '', '', 1, '2020-05-02 20:10:20', ''),
(9, '8879', '', '', '', '', '', 1, '2020-05-02 20:14:38', ''),
(10, '1007', 'No', 'No', 'No', 'Yes', 'Yes', 1, '2020-05-02 20:19:35', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `request_employment_stats`
--

CREATE TABLE `request_employment_stats` (
  `house_employment_id` int(222) NOT NULL,
  `unique_code` varchar(222) NOT NULL,
  `number_people_employed` varchar(222) NOT NULL,
  `employment_lost` varchar(222) NOT NULL,
  `still_receiving_income` varchar(222) NOT NULL,
  `social_grants` varchar(222) NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_employment_stats`
--

INSERT INTO `request_employment_stats` (`house_employment_id`, `unique_code`, `number_people_employed`, `employment_lost`, `still_receiving_income`, `social_grants`, `status`, `date`) VALUES
(2, 'dfd', '4', '5', '1', '2', 1, '2020-04-29 05:25:28'),
(3, '6499', '1', '1', 'Yes', '1', 1, '2020-05-02 11:05:36'),
(4, '6017', '2', '1', 'No', '1', 1, '2020-05-02 11:32:16'),
(5, '2692', '2', '1', 'No', '1', 1, '2020-05-02 13:53:56'),
(6, '2463', '2', '2', 'No', '2', 1, '2020-05-02 14:02:32'),
(7, '3751', '2', '1', 'No', '2', 1, '2020-05-02 14:34:12'),
(8, '6922', '1', '1', 'Yes', '2', 1, '2020-05-02 14:43:45'),
(9, '3723', '2', '1', 'Yes', '1', 1, '2020-05-02 19:22:04'),
(10, '7311', '3', '1', 'No', '0', 1, '2020-05-02 19:26:33'),
(11, '3105', '', '', '', '', 1, '2020-05-02 19:41:17'),
(12, '2050', '', '', '', '', 1, '2020-05-02 19:56:48'),
(13, '7353', '', '', '', '', 1, '2020-05-02 20:08:12'),
(14, '4408', '', '', '', '', 1, '2020-05-02 20:10:20'),
(15, '8879', '', '', '', '', 1, '2020-05-02 20:14:38'),
(16, '1007', '1', '0', 'No', '3', 1, '2020-05-02 20:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `request_medication`
--

CREATE TABLE `request_medication` (
  `req_med_id` int(222) NOT NULL,
  `unique_code` varchar(222) NOT NULL,
  `chronic_medication` varchar(222) NOT NULL,
  `diabetesCondition` varchar(222) NOT NULL,
  `cancerCondition` varchar(222) NOT NULL,
  `heartCondition` varchar(222) NOT NULL,
  `highBloodCondition` varchar(222) NOT NULL,
  `hivCondition` varchar(222) NOT NULL,
  `patient1_id` varchar(222) DEFAULT NULL,
  `patient1_fullnames` varchar(222) DEFAULT NULL,
  `patient1_facility` varchar(222) DEFAULT NULL,
  `patient2_id` varchar(222) DEFAULT NULL,
  `patient2_fullnames` varchar(222) DEFAULT NULL,
  `patient2_facility` varchar(222) DEFAULT NULL,
  `patient3_id` varchar(222) DEFAULT NULL,
  `patient3_fullnames` varchar(222) DEFAULT NULL,
  `patient3_facility` varchar(222) DEFAULT NULL,
  `healthCareCondition` varchar(222) NOT NULL,
  `disasterCondition` varchar(222) NOT NULL,
  `retailCondition` varchar(222) NOT NULL,
  `emegencyCondition` varchar(222) NOT NULL,
  `transportCondition` varchar(222) NOT NULL,
  `highTempCond` varchar(222) NOT NULL,
  `dryCoughCond` varchar(222) NOT NULL,
  `soreThroatConditionCond` varchar(222) NOT NULL,
  `diarrhoeaCondition` varchar(222) NOT NULL,
  `infoCovid` varchar(222) NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `covid_signs` varchar(222) NOT NULL,
  `essential_services_worker` varchar(222) NOT NULL,
  `tbCondition` varchar(222) NOT NULL,
  `tirednessCondition` varchar(222) NOT NULL,
  `whatsappp_subscribe` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_medication_01`
--

CREATE TABLE `request_medication_01` (
  `med_01_id` int(222) NOT NULL,
  `unique_code` varchar(222) NOT NULL,
  `chronic_medication` varchar(222) NOT NULL,
  `diabetesCondition` varchar(222) NOT NULL,
  `cancerCondition` varchar(222) NOT NULL,
  `heartCondition` varchar(222) NOT NULL,
  `highBloodCondition` varchar(222) NOT NULL,
  `hivCondition` varchar(222) NOT NULL,
  `tbCondition` varchar(222) NOT NULL,
  `patient1_fullnames` varchar(222) NOT NULL,
  `patient1_id` varchar(222) NOT NULL,
  `patient1_facility` varchar(222) NOT NULL,
  `patient2_fullnames` varchar(222) NOT NULL,
  `patient2_id` varchar(222) NOT NULL,
  `patient2_facility` varchar(222) NOT NULL,
  `patient3_fullnames` varchar(222) NOT NULL,
  `patient3_id` varchar(222) NOT NULL,
  `patient3_facility` varchar(222) NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_medication_02`
--

CREATE TABLE `request_medication_02` (
  `med_02_id` int(222) NOT NULL,
  `unique_code` varchar(222) NOT NULL,
  `essential_services_worker` varchar(222) NOT NULL,
  `healthCareCondition` varchar(222) NOT NULL,
  `disasterCondition` varchar(222) NOT NULL,
  `retailCondition` varchar(222) NOT NULL,
  `emegencyCondition` varchar(222) NOT NULL,
  `transportCondition` varchar(222) NOT NULL,
  `highTempCond` varchar(222) NOT NULL,
  `dryCoughCond` varchar(222) NOT NULL,
  `soreThroatConditionCond` varchar(222) NOT NULL,
  `diarrhoeaCondition` varchar(222) NOT NULL,
  `tirednessCondition` varchar(222) NOT NULL,
  `infoCovid` varchar(222) NOT NULL,
  `whatsappp_subscribe` varchar(222) NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_people`
--

CREATE TABLE `request_people` (
  `req_ppl_id` int(222) NOT NULL,
  `unique_code` varchar(222) NOT NULL,
  `settlement` varchar(222) NOT NULL,
  `males_in_house` varchar(222) NOT NULL,
  `females_in_house` varchar(222) NOT NULL,
  `lgbt_in_house` varchar(222) NOT NULL,
  `age0_2` varchar(222) NOT NULL,
  `age13_18` varchar(150) NOT NULL,
  `age19_59` varchar(100) NOT NULL,
  `age60plus` varchar(200) NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `age3_12` varchar(222) NOT NULL,
  `people_in_house` varchar(222) NOT NULL,
  `pregnant` varchar(222) NOT NULL,
  `no_pregnant_people` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_people`
--

INSERT INTO `request_people` (`req_ppl_id`, `unique_code`, `settlement`, `males_in_house`, `females_in_house`, `lgbt_in_house`, `age0_2`, `age13_18`, `age19_59`, `age60plus`, `status`, `date`, `age3_12`, `people_in_house`, `pregnant`, `no_pregnant_people`) VALUES
(6, '9389', 'Rural (Village)', '2', '1', '1', '3', '3', '2', '1', 1, '2020-04-28 12:52:48', '1', '1', '', ''),
(7, '5302', 'Informal Settlement', '1', '1', '1', '1', '1', '1', '1', 1, '2020-04-29 05:12:02', '1', '1', '', ''),
(8, '4341', 'Formal (Townhouse)', '2', '3', '3', '3', '3', '2', '3', 1, '2020-05-02 10:33:02', '3', '5', 'Yes', '1'),
(9, '6499', 'Formal (Background Shack)', '2', '2', '1', '1', '2', '2', '2', 1, '2020-05-02 11:05:36', '1', '1', 'Yes', '1'),
(10, '6017', 'Formal (Townhouse)', '1', '2', '1', '2', '2', '2', '1', 1, '2020-05-02 11:32:16', '2', '6', 'Yes', '3'),
(11, '2462', 'Rural (Village)', '0', '3', '3', '2', '1', '2', '2', 1, '2020-05-02 13:44:49', '1', '1', 'No', '1'),
(12, '2692', 'Rural (Village)', '0', '2', '0', '2', '1', '1', '2', 1, '2020-05-02 13:53:56', '0', '1', 'Yes', '1'),
(13, '2463', 'Rural (Village)', '2', '2', '0', '1', '2', '1', '0', 1, '2020-05-02 14:02:32', '2', '1', 'Yes', '2'),
(14, '3751', 'Informal Settlement', '2', '1', '0', '1', '1', '1', '1', 1, '2020-05-02 14:34:12', '1', '0', 'No', '2'),
(15, '6922', 'Rural (Village)', '3', '2', '0', '1', '2', '1', '1', 1, '2020-05-02 14:43:45', '1', '2', 'Yes', '2'),
(16, '3723', 'Rural (Village)', '1', '1', '4', '2', '2', '1', '2', 1, '2020-05-02 19:22:04', '1', '1', 'Yes', '1'),
(17, '7311', 'Formal (Townhouse)', '2', '1', '1', '2', '2', '2', '2', 1, '2020-05-02 19:26:33', '1', '1', 'Yes', '1'),
(18, '3105', '', '', '', '', '', '', '', '', 1, '2020-05-02 19:41:17', '', '', '', ''),
(19, '2050', '', '', '', '', '', '', '', '', 1, '2020-05-02 19:56:48', '', '', '', ''),
(20, '7353', '', '', '', '', '', '', '', '', 1, '2020-05-02 20:08:12', '', '', '', ''),
(21, '4408', '', '', '', '', '', '', '', '', 1, '2020-05-02 20:10:20', '', '', '', ''),
(22, '8879', '', '', '', '', '', '', '', '', 1, '2020-05-02 20:14:38', '', '', '', ''),
(23, '1007', 'Formal (Townhouse)', '2', '1', '2', '1', '1', '0', '2', 1, '2020-05-02 20:19:35', '2', '1', 'Yes', '1');

-- --------------------------------------------------------

--
-- Table structure for table `request_violations`
--

CREATE TABLE `request_violations` (
  `violation_id` int(222) NOT NULL,
  `unique_code` varchar(222) NOT NULL,
  `any_kind_abuse` varchar(222) NOT NULL,
  `lawEnforcementCond` varchar(222) NOT NULL,
  `communityMemberCond` varchar(222) NOT NULL,
  `healthCareCheck` varchar(222) NOT NULL,
  `domesticCond` varchar(222) NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_violations`
--

INSERT INTO `request_violations` (`violation_id`, `unique_code`, `any_kind_abuse`, `lawEnforcementCond`, `communityMemberCond`, `healthCareCheck`, `domesticCond`, `status`, `date`) VALUES
(2, '6017', 'Yes', 'No', 'Discrimination', 'No', 'Assault', 1, '2020-05-02 11:32:16'),
(3, '2463', 'Yes', 'No', 'No', 'No', 'No', 1, '2020-05-02 14:02:32'),
(4, '3751', 'No', 'None', 'None', 'No', 'Abuse', 1, '2020-05-02 14:34:12'),
(5, '6922', 'No', 'None', 'None', 'Yes', 'Abuse', 1, '2020-05-02 14:43:45'),
(6, '3723', 'No', 'Unlawful detention', 'Discrimination', 'No', 'None', 1, '2020-05-02 19:22:04'),
(7, '7311', 'Yes', 'None', 'None', 'Yes', 'Assault', 1, '2020-05-02 19:26:33'),
(8, '3105', '', '', '', '', '', 1, '2020-05-02 19:41:17'),
(9, '2050', '', '', '', '', '', 1, '2020-05-02 19:56:48'),
(10, '7353', '', '', '', '', '', 1, '2020-05-02 20:08:12'),
(11, '4408', '', '', '', '', '', 1, '2020-05-02 20:10:20'),
(12, '8879', '', '', '', '', '', 1, '2020-05-02 20:14:38'),
(13, '1007', 'Yes', 'Unlawful detention', 'Stigma', 'Yes', 'Assault', 1, '2020-05-02 20:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(48, 5, 'Itumeleng Mashishi', 'mabuyza77@gmail.com', '0812138117', 'HariBurger.com', '7am', '4pm', 'mon-tue', 'Corner Martha Louw & Mooki Street\\r\\nSoweto', '5ad74ce37c383.jpg', '2020-04-25 21:10:17'),
(49, 5, 'Kenny Motshweneng Motshweneng', 'admin@inqaba.org.za', '0606288544', 'kwbab.com', '6am', '5pm', 'mon-fri', 'Corner Martha Louw & Mooki Street\\r\\nSoweto', '5ad74de005016.jpg', '2020-04-25 21:10:24'),
(50, 6, 'Matome Kganakga', 'mabalane@showmeyournumber.org', '0834172801', 'Vaishno.com', '6am', '6pm', 'mon-sat', 'Kganakga', '5ad74e5310ae4.jpg', '2020-04-25 21:11:37'),
(51, 7, 'Nelisa Ngqulana', 'media@communityconstituency.org.za', '0734813939', 'martin.com', '8am', '4pm', 'mon-thu', 'Ngqulana', '5ad74ebf1d103.jpg', '2020-04-25 21:12:29'),
(52, 8, 'Palesa Komane', 'palesa@showmeyournumber.org.za', '0813733109', 'hudson.com', '6am', '7pm', 'mon-fri', 'Rosebank', '5ad756f1429e3.jpg', '2020-04-25 21:13:17'),
(53, 9, 'Itumeleng Tlhone', 'itumeleng.tlhone@gmail.com', '0738178017', 'kari.com', '7am', '7pm', 'mon-sat', 'Tlhone', '5ad79e7d01c5a.jpg', '2020-04-25 21:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(5, 'grill', '2018-04-14 18:45:28'),
(6, 'pizza', '2018-04-14 18:44:56'),
(7, 'pasta', '2018-04-14 18:45:13'),
(8, 'thaifood', '2018-04-14 18:32:56'),
(9, 'fish', '2018-04-14 18:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `district` varchar(150) NOT NULL,
  `municipality` varchar(200) NOT NULL,
  `provice` varchar(100) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `alt_person` varchar(200) NOT NULL,
  `alt_number` varchar(100) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `network` varchar(222) NOT NULL,
  `organization_name` varchar(555) NOT NULL,
  `organization_structure` varchar(444) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`, `district`, `municipality`, `provice`, `sex`, `alt_person`, `alt_number`, `nationality`, `network`, `organization_name`, `organization_structure`) VALUES
(39, '8402035727080', 'Thato Grant', 'Mohono', 'thato.mohono@mahquests.co.za', '0825561420', '5511cf23120e545d66036be92c04e6ae', '220 2nd Street\r\nHalfway House', 0, '2020-05-01 20:29:45', 'Mathjabengdss', 'Lejeleputswa', 'North West', 'Male', 'Nomfazwe Thomas', '0825561420', 'South Africa', 'P', 'MaH Quests Enterprises (PTY) LTD', 'SANCO'),
(40, '488484873884', 'Thato Grant', 'Mohono', 'thato.mohono@mahquests.co.za', '2782556134420', '97bf34d31a8710e6b1649fd33357f783', '220 2nd Street\r\nHalfway House', 1, '2020-05-01 20:24:19', 'City of Tshwane Metropolitan', 'Centurion', 'Gauteng', 'Male', 'Nomfazwe Thomas', '082553461420', 'South Africa', 'P', 'MaH Quests Enterprises (PTY) LTD', 'WIEGO'),
(41, '8876477499384', 'Thato', 'Mohono', 'thato.mohono@gmail.com', '88373993732', '97bf34d31a8710e6b1649fd33357f783', 'Somewhere in South Africa', 1, '2020-05-01 20:34:30', 'Tshwane', 'Centurion', 'Gauteng', 'Male', 'Fazo', '08837366372', 'South Africa', 'N', 'Inqaba Yokulinda', 'NP28982739183'),
(42, '77376462883746', 'Thato Grant', 'Mohono', 'thato.mohono@mahquests.co.za', '08255623231420', '97bf34d31a8710e6b1649fd33357f783', '6 Lingmoor, Spinetale Street', 1, '2020-05-01 21:01:13', 'City of Tshwane Metropolitan', 'Centurion', 'Gauteng', 'Male', 'Nomfazwe Thomas', '08253423561420', 'South Africa', 'C', 'Community Member', 'Community Member');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `request_first_name` varchar(333) NOT NULL,
  `delivery_address` varchar(555) NOT NULL,
  `unique_code` varchar(444) NOT NULL,
  `request_surname` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_by_partner`
--
ALTER TABLE `request_by_partner`
  ADD PRIMARY KEY (`req_id`),
  ADD UNIQUE KEY `unique_code` (`unique_code`);

--
-- Indexes for table `request_disability`
--
ALTER TABLE `request_disability`
  ADD PRIMARY KEY (`disability_id`),
  ADD UNIQUE KEY `unique_code` (`unique_code`);

--
-- Indexes for table `request_employment_stats`
--
ALTER TABLE `request_employment_stats`
  ADD PRIMARY KEY (`house_employment_id`),
  ADD UNIQUE KEY `unique_code` (`unique_code`);

--
-- Indexes for table `request_medication`
--
ALTER TABLE `request_medication`
  ADD PRIMARY KEY (`req_med_id`),
  ADD UNIQUE KEY `unique_code` (`unique_code`);

--
-- Indexes for table `request_medication_01`
--
ALTER TABLE `request_medication_01`
  ADD PRIMARY KEY (`med_01_id`),
  ADD UNIQUE KEY `unique_code` (`unique_code`);

--
-- Indexes for table `request_medication_02`
--
ALTER TABLE `request_medication_02`
  ADD PRIMARY KEY (`med_02_id`),
  ADD UNIQUE KEY `unique_code` (`unique_code`);

--
-- Indexes for table `request_people`
--
ALTER TABLE `request_people`
  ADD PRIMARY KEY (`req_ppl_id`),
  ADD UNIQUE KEY `unique_code` (`unique_code`);

--
-- Indexes for table `request_violations`
--
ALTER TABLE `request_violations`
  ADD PRIMARY KEY (`violation_id`),
  ADD UNIQUE KEY `unique_code` (`unique_code`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `request_by_partner`
--
ALTER TABLE `request_by_partner`
  MODIFY `req_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `request_disability`
--
ALTER TABLE `request_disability`
  MODIFY `disability_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `request_employment_stats`
--
ALTER TABLE `request_employment_stats`
  MODIFY `house_employment_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `request_medication`
--
ALTER TABLE `request_medication`
  MODIFY `req_med_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request_medication_01`
--
ALTER TABLE `request_medication_01`
  MODIFY `med_01_id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_medication_02`
--
ALTER TABLE `request_medication_02`
  MODIFY `med_02_id` int(222) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_people`
--
ALTER TABLE `request_people`
  MODIFY `req_ppl_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `request_violations`
--
ALTER TABLE `request_violations`
  MODIFY `violation_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
