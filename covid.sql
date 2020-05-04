-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2020 at 09:47 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `covid`
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
  `status` varchar(222) NOT NULL,
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
  `district` varchar(222) NOT NULL,
  `provice` varchar(222) NOT NULL,
  `alt_person` varchar(222) NOT NULL,
  `alt_number` varchar(222) NOT NULL,
  `identification` varchar(222) NOT NULL,
  `unique_code` varchar(222) NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_by_partner`
--

INSERT INTO `request_by_partner` (`req_id`, `firstname`, `lastname`, `sex`, `phone`, `address`, `municipality`, `district`, `provice`, `alt_person`, `alt_number`, `identification`, `unique_code`, `status`, `date`) VALUES
(9, 'Thato Grant', '', 'Male', '0825561554420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'North West', 'Nomfazwe Thomas', '0825565541420', '456675634453445435', '4514', 1, '2020-04-28 12:03:32'),
(30, 'Thato Grant', 'Mohono', 'Female', '0825561420', '6 Lingmoor, Spinetale Street', 'sdfdsfds', 'Maluti', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458w3423', '4408', 1, '2020-05-02 20:10:20'),
(31, 'Thato Grant', 'Mohono', 'Female', '0825561420', '6 Lingmoor, Spinetale Street', 'Centurion', 'Maluti', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '8879', 1, '2020-05-02 20:14:38'),
(32, 'Thato Grant', 'Mohono', 'Male', '0825561420', '6 Lingmoor, Spinetale Street', 'sdfdsfds', 'City of Tshwane Metropolitan', 'Gauteng', 'Nomfazwe Thomas', '0825561420', '94947375945458', '1007', 1, '2020-05-02 20:19:35'),
(33, 'TEST', 'TEST', 'Other', '87998573957', 'Gauteng Maboneng', 'Centurion', 'Tshwane', 'Free State', 'Fazo Thomas', '08837366372', 'TEST010203', '1730', 1, '2020-05-04 14:29:42'),
(34, 'Thato', 'Mohono', 'Male', '08327364823', 'Some testing data', 'Centurion', 'Tshwane', 'Gauteng', 'Fazo', '07377464782', '8878837477584', '9625', 1, '2020-05-04 15:11:08'),
(35, 'Thato', 'Mohono', 'Male', '0825561420', 'Opposite Fora', 'Centurion', 'Tshwane', 'Free State', 'Fazo', '07377464782', '77477878476773', '7037', 1, '2020-05-04 15:28:58'),
(36, 'Thato', 'Mohono', 'Male', '0825561420', 'House hold stuff ', 'Centurion', 'Tshwane', 'North West', 'Fazo Thomas', '08837366372', '77477878476773', '2754', 1, '2020-05-04 15:40:56'),
(37, 'Thato Grant', 'Mohono', 'Male', '0825561420', '440 Meloding, Virginia', 'Meloding', 'Virginia', 'Free State', 'Fazo Thomas', '07377464782', '8402035727080', '3014', 1, '2020-05-04 16:10:39'),
(38, 'Thato', 'Mohono', 'Female', '0825561420', '440 Meloding', 'Centurion', 'Tshwane', 'Free State', 'Fazo Thomas', '07377464782', '77477878476773', '2365', 1, '2020-05-04 16:25:58'),
(39, 'Thato', 'Mohono', 'Male', '08327364823', 'Somewhere in Soweto ', 'Centurion', 'District', 'Free State', 'Fazo Thomas', '07377464782', '765765', '1706', 1, '2020-05-04 16:30:23');

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
(10, '1007', 'No', 'No', 'No', 'Yes', 'Yes', 1, '2020-05-02 20:19:35', 'Yes'),
(11, '1730', 'Yes', 'Yes', 'Yes', 'No', 'No', 1, '2020-05-04 14:29:42', 'Yes'),
(12, '9625', 'Yes', 'No', 'No', 'Yes', 'No', 1, '2020-05-04 15:11:08', 'No'),
(13, '7037', 'Yes', 'No', 'Yes', 'No', 'Yes', 1, '2020-05-04 15:28:58', 'Yes'),
(14, '2754', 'No', 'No', 'Yes', 'No', 'Yes', 1, '2020-05-04 15:40:56', 'Yes'),
(15, '3014', 'Yes', 'Yes', 'No', 'Yes', 'No', 1, '2020-05-04 16:10:39', 'No'),
(16, '2365', 'No', 'No', 'No', 'Yes', 'Yes', 1, '2020-05-04 16:25:58', 'No'),
(17, '1706', 'No', 'Yes', 'No', 'Yes', 'No', 1, '2020-05-04 16:30:23', 'No');

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
(15, '8879', '', '', '', '', 1, '2020-05-02 20:14:38'),
(16, '1007', '1', '0', 'No', '3', 1, '2020-05-02 20:19:35'),
(17, '1730', '2', '2', 'No', '0', 1, '2020-05-04 14:29:42'),
(18, '9625', '1', '2', 'Yes', '1', 1, '2020-05-04 15:11:08'),
(19, '7037', '2', '1', 'No', '0', 1, '2020-05-04 15:28:58'),
(20, '2754', '1', '1', 'No', '2', 1, '2020-05-04 15:40:56'),
(21, '3014', '1', '2', 'No', '1', 1, '2020-05-04 16:10:39'),
(22, '2365', '2', '0', 'No', '2', 1, '2020-05-04 16:25:58'),
(23, '1706', '4', '2', 'Yes', '1', 1, '2020-05-04 16:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `request_medication_01`
--

CREATE TABLE `request_medication_01` (
  `med_01_id` int(222) NOT NULL,
  `unique_code` varchar(222) NOT NULL,
  `no_pregnant_people` varchar(222) NOT NULL,
  `pregnant` varchar(222) NOT NULL,
  `patient1_fullnames` varchar(222) DEFAULT NULL,
  `patient1_id` varchar(222) DEFAULT NULL,
  `patient1_facility` varchar(222) DEFAULT NULL,
  `patient2_fullnames` varchar(222) DEFAULT NULL,
  `patient2_id` varchar(222) DEFAULT NULL,
  `patient2_facility` varchar(222) DEFAULT NULL,
  `patient3_fullnames` varchar(222) DEFAULT NULL,
  `patient3_id` varchar(222) DEFAULT NULL,
  `patient3_facility` varchar(222) DEFAULT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `chronic_medication` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_medication_01`
--

INSERT INTO `request_medication_01` (`med_01_id`, `unique_code`, `no_pregnant_people`, `pregnant`, `patient1_fullnames`, `patient1_id`, `patient1_facility`, `patient2_fullnames`, `patient2_id`, `patient2_facility`, `patient3_fullnames`, `patient3_id`, `patient3_facility`, `status`, `date`, `chronic_medication`) VALUES
(1, '7037', '2', 'Yes', 'None', 'None', 'None', 'None', 'None', 'None', NULL, NULL, NULL, 1, '2020-05-04 15:28:58', 'No'),
(2, '2754', '1', 'Yes', 'None', 'None', 'None', 'None', 'None', 'None', NULL, NULL, NULL, 1, '2020-05-04 15:40:56', 'No'),
(3, '3014', '1', 'No', 'None', 'None', 'None', 'None', 'None', 'None', NULL, NULL, NULL, 1, '2020-05-04 16:10:39', 'Yes'),
(4, '2365', '0', 'Yes', 'None', 'None', 'None', 'None', 'None', 'None', NULL, NULL, NULL, 1, '2020-05-04 16:25:58', 'No'),
(5, '1706', '1', 'Yes', 'None', 'None', 'None', 'None', 'None', 'None', NULL, NULL, NULL, 1, '2020-05-04 16:30:23', 'Yes');

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `otherCondition` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_medication_02`
--

INSERT INTO `request_medication_02` (`med_02_id`, `unique_code`, `essential_services_worker`, `healthCareCondition`, `disasterCondition`, `retailCondition`, `emegencyCondition`, `transportCondition`, `highTempCond`, `dryCoughCond`, `soreThroatConditionCond`, `diarrhoeaCondition`, `tirednessCondition`, `infoCovid`, `whatsappp_subscribe`, `status`, `date`, `otherCondition`) VALUES
(1, '7037', 'No', 'Yes', 'Yes', 'No', 'No', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'Yes', 'No', 1, '2020-05-04 15:28:58', 'No'),
(2, '2754', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'Yes', 'No', 1, '2020-05-04 15:40:56', 'No'),
(3, '3014', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', 'Yes', 1, '2020-05-04 16:10:39', 'No'),
(4, '2365', 'Yes', 'Yes', 'No', 'No', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', 'No', 'Yes', 1, '2020-05-04 16:25:58', 'No'),
(5, '1706', 'Yes', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'Yes', 'No', 'No', 'No', 1, '2020-05-04 16:30:23', 'No');

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
  `age13_18` varchar(222) NOT NULL,
  `age19_59` varchar(222) NOT NULL,
  `age60plus` varchar(222) NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `people_in_house` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_people`
--

INSERT INTO `request_people` (`req_ppl_id`, `unique_code`, `settlement`, `males_in_house`, `females_in_house`, `lgbt_in_house`, `age0_2`, `age13_18`, `age19_59`, `age60plus`, `status`, `date`, `people_in_house`) VALUES
(6, '9389', 'Rural (Village)', '2', '1', '1', '3', '3', '2', '1', 1, '2020-04-28 12:52:48', '1'),
(7, '5302', 'Informal Settlement', '1', '1', '1', '1', '1', '1', '1', 1, '2020-04-29 05:12:02', '1'),
(22, '8879', '', '', '', '', '', '', '', '', 1, '2020-05-02 20:14:38', ''),
(23, '1007', 'Formal (Townhouse)', '2', '1', '2', '1', '1', '0', '2', 1, '2020-05-02 20:19:35', '1'),
(24, '1730', 'Formal (Townhouse)', '2', '2', '2', '2', '1', '1', '2', 1, '2020-05-04 14:29:42', '3'),
(25, '3014', 'Formal (Townhouse)', '2', '2', '1', '2', '2', '1', '1', 1, '2020-05-04 16:10:39', '1'),
(26, '2365', 'Rural (Village)', '1', '1', '1', '2', '1', '4', '0', 1, '2020-05-04 16:25:58', '4'),
(27, '1706', 'Rural (Village)', '2', '3', '3', '2', '3', '3', '4', 1, '2020-05-04 16:30:23', '1');

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
(13, '1007', 'Yes', 'Unlawful detention', 'Stigma', 'Yes', 'Assault', 1, '2020-05-02 20:19:35'),
(14, '1730', 'No', 'Assault', 'Discrimination', 'Yes', 'Abuse', 1, '2020-05-04 14:29:42'),
(15, '9625', 'No', 'None', 'None', 'Yes', 'None', 1, '2020-05-04 15:11:08'),
(16, '7037', 'Yes', 'Unlawful detention', 'Discrimination', 'Yes', 'Assault', 1, '2020-05-04 15:28:58'),
(17, '2754', 'No', 'Unlawful detention', 'Discrimination', 'No', 'Assault', 1, '2020-05-04 15:40:56'),
(18, '3014', 'No', 'None', 'Discrimination', 'No', 'None', 1, '2020-05-04 16:10:39'),
(19, '2365', 'No', 'Unlawful detention', 'None', 'No', 'Assault', 1, '2020-05-04 16:25:58'),
(20, '1706', 'No', 'None', 'Stigma', 'No', 'Assault', 1, '2020-05-04 16:30:23');

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
  `district` varchar(222) NOT NULL,
  `municipality` varchar(222) NOT NULL,
  `provice` varchar(222) NOT NULL,
  `sex` varchar(222) NOT NULL,
  `alt_person` varchar(222) NOT NULL,
  `alt_number` varchar(222) NOT NULL,
  `nationality` varchar(222) NOT NULL,
  `network` varchar(222) NOT NULL,
  `organization_name` varchar(555) NOT NULL,
  `organization_structure` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`, `district`, `municipality`, `provice`, `sex`, `alt_person`, `alt_number`, `nationality`, `network`, `organization_name`, `organization_structure`) VALUES
(39, '8402035727080', 'Thato Grant', 'Mohono', 'thato.mohono@mahquests.co.za', '0825561420', '5511cf23120e545d66036be92c04e6ae', '220 2nd Street\r\nHalfway House', 0, '2020-05-01 20:29:45', 'Mathjabengdss', 'Lejeleputswa', 'North West', 'Male', 'Nomfazwe Thomas', '0825561420', 'South Africa', 'P', 'MaH Quests Enterprises (PTY) LTD', 'SANCO'),
(40, 'TESTING-NGO', 'Thato Grant', 'Mohono', 'thato.mohono@mahquests.co.za', '0825561421', '5511cf23120e545d66036be92c04e6ae', '6 Lingmoor, Spinetale Street', 1, '2020-04-29 09:41:56', 'City of Tshwane Metropolitan', 'Centurion', 'Gauteng', 'Male', 'Nomfazwe Thomas', '0825561421', 'South Africa', 'N', 'TEST-NGO', 'TEST'),
(41, 'TESTING-PARTNER', 'Thato Grant', 'Mohono', 'thato.mohono@mahquests.co.za', '0825561422', '5511cf23120e545d66036be92c04e6ae', '6 Lingmoor, Spinetale Street', 1, '2020-04-29 09:42:00', 'City of Tshwane Metropolitan', 'Centurion', 'Gauteng', 'Male', 'Nomfazwe Thomas', '0825561422', 'South Africa', 'P', 'TEST-PARTNER', 'DPSA'),
(42, 'TESTING-COMMUNITY', 'Thato Grant', 'Mohono', 'thato.mohono@mahquests.co.za', '0825561423', '5511cf23120e545d66036be92c04e6ae', '6 Lingmoor, Spinetale Street', 1, '2020-04-29 09:42:03', 'City of Tshwane Metropolitan', 'Centurion', 'Gauteng', 'Male', 'Nomfazwe Thomas', '0825561424', 'South Africa', 'C', 'Community Member', 'Community Member'),
(43, '7777777777777', 'Letlhogonolo ', 'Sekwati ', 'carl.sekwati@mahquests.co.za', '0728243656', 'e0435d7d6569ab0b327d45b77a57980b', '1749 Block X Mabopane', 1, '2020-04-29 10:25:31', 'Pretoria', 'Tshwane', 'Gauteng', 'Male', 'Mother', '0127896542', 'South Africa', 'C', 'Community Member', 'Community Member'),
(44, '1234567890', 'Letlhogonolo ', 'Sekwati ', 'carl.sekwati@mahquests.co.za', '0728243665', 'e0435d7d6569ab0b327d45b77a57980b', '                              1749 Block x', 1, '2020-04-29 10:31:50', 'Pretoria', 'Tshwane', 'Gauteng', 'Male', 'Mother', '0127896524', 'South Africa', 'P', 'Mah Quests', 'Choose'),
(45, '8304040415087', 'Palesa', 'Komane', 'palesa@showmeyournumber.org.za', '0813733109', 'f4575b1789e9a2dcfbb378d394f9f75f', '8066, Zone7A, Sebokeng,', 1, '2020-04-29 11:43:52', 'Sedibeng ', 'Emfuleni', 'Gauteng', 'Female', 'Sebs ', '0814235506', 'South Africa', 'C', 'Community Member', 'Community Member'),
(46, '9309080297084', 'Itumeleng', 'Mashishi', 'tumie.mashishi@gmail.com', '0812138117', '339b0a6b916bdb5d95c4d1aa73be1c6f', '                              4365 Lithemba Street, Roodekop Ext 21', 1, '2020-04-29 12:15:04', 'Alberton', 'City of Ekurhuleni', 'Gauteng', 'Female', 'Bhekuuzi', '0815403501', 'South Africa', 'N', 'Inqaba Yokulinda Youth Organisation', 'NPO 029-442'),
(47, '8104075939084', 'Mazhamba', 'Madima', 'mazhamba@dpsa.org.za', '0813449339', '24d42dd5cdb483d04b705209ad202c48', '1174 Machaba Drive                              ', 1, '2020-04-29 12:21:48', 'Joburg', 'City of Joburg', 'Gauteng', 'Male', 'Dan Kekane', '0736167170', 'South Africa', 'N', 'Disabled People South Africa', '001-315'),
(48, '6709270429087', 'Sheila', 'Mbele-khama', 'sheilambele@gmail.com', '+27837440965', 'dae1a70712a38a58bea95b846e11aa0c', '2193 Mfundo Street, Siluma View, Katlehong', 1, '2020-04-29 12:38:35', 'Germiston ', 'Ekurhuleni Metro', 'Gauteng', 'Male', 'Samantha Mbele-khama ', '+27837440965', 'South Africa', 'P', 'MIATHS', 'SANAC CIVIL SOCIETY FORUM'),
(49, '6412161251088', 'Jacqueline', 'Bodibe', 'jmbodibe@gmail.com', '0661661545', 'fb9d50333a2b626fafc99713ef52c925', '    13 Phyl Street\r\nBirchleigh North    \r\nKempton Park                      ', 1, '2020-04-29 12:40:12', 'Ekhuruleni', 'Ekhuruleni Metro', 'Gauteng', 'Female', 'Mpolokeng Mpolokeng ', '0743491821', 'South Africa', 'P', 'Show Me Your Number', 'SANAC CIVIL SOCIETY FORUM'),
(50, 'President@SAYC', 'Thembinkosi ', 'Josopu', 'tmjosopu@gmail.com', '082 292 2661 ', 'd77d85db5cc51b7461eb207598781c22', '2 Augrabies Street,\r\nMooikloofridge Estate\r\n', 1, '2020-04-29 12:40:58', 'Pretoria', 'City of Tshwane', 'Gauteng', 'Male', 'TJ', '0732421445', 'South Africa', 'P', 'SAYC', 'SAYC'),
(51, '7111120572084', 'Maseiso Freda', 'Motsoikha', 'fmmotloenya@gmail.com', '0785880414', '83cc877aada1a641b0eb3c18f0aa18f5', '  30 Boulevards Estate \r\nPiet Retief street SE 10\r\nVanderbilpark                             ', 1, '2020-04-29 12:46:44', 'Sedibeng ', 'Emfuleni ', 'Gauteng', 'Female', 'Mmatu Motsoikha ', '0827271944', 'South Africa', 'C', 'Community Member', 'Community Member'),
(52, '6103070765082', 'Tshase Salome ', 'Mogane Mzimela ', 'tsmzimela@gmail.com', '0824896513', '47adf2b6df5eba1b0fc91d377675d1d6', '10 Clifton Street Crystal Park \r\nBenoni 1501', 1, '2020-04-29 13:01:26', 'Benoni ', 'Ekurhuleni ', 'Gauteng', 'Female', ' Xolisile Tshabalala ', '0827912532', 'South Africa', 'N', 'Tshase Welfare Academy of Learning ', '243-716'),
(53, '6312090264089', 'Toto Lobisa Johanna ', 'Baloi', 'baloyitotomummy@gmail.com', '0833293535', 'c431c82bb75a045c4fbc9e9b796ebc47', '   22308 Nzingamuti Street\r\nExtension 4\r\nMamelodi  East                           ', 1, '2020-04-29 13:01:38', 'Tshwane', 'Tshwane Metro', 'Gauteng', 'Female', 'Shadi Mavimbela', '0749091530', 'South Africa', 'P', 'Contralesa', 'SANAC CIVIL SOCIETY FORUM'),
(54, '9605100639084', 'ntotole hildegard', 'phalama', 'uncedolwabantu@gmail.com', '0727234326', '033960301557effb251b4fb5bfef94db', '   phase 2 Block A ext 2\r\n Alexandra\r\n 2090                           ', 1, '2020-04-29 13:04:10', 'REGION E', 'COJ', 'Gauteng', 'Female', 'LEHLOGONOLO PHALAMA', '071 877 3162', 'South Africa', 'P', 'nonpoc', 'ALLIANCE OF NPO NETWORKS'),
(55, '8106185675086', 'Nqobile Mxolisi', 'Phiri', 'mxolisiphiri4@gmail.com', '0724080132', '89f1366d15944ab9ad7b44ff9420be2d', '                              ', 1, '2020-04-29 13:08:47', 'Region D', 'Joburg', 'Gauteng', 'Male', 'Esther Padi', '0832468736', 'South Africa', 'P', 'SANGOCO', 'ALLIANCE OF NPO NETWORKS'),
(56, '8612201013087', 'Esther', 'Padi', 'estherpadi8@gmail.com', '0832468736', '77737709e8be168ed4dfe37089df1d25', '                              2832a Ritavi Street, zone 2, Diepkloof Soweto', 1, '2020-04-29 13:09:12', 'Region D', 'City of Johannesburg', 'Gauteng', 'Female', 'Mr Jimmy Kotyana', '0788131021', 'South Africa', 'P', 'Sangoco', 'ALLIANCE OF NPO NETWORKS'),
(57, '5503120736085', 'Malesela ', 'Mosima ', 'maleselamosima76@gmail.com', '0837178283 ', 'ebdbdd0f766146e02d6b34c852d2c69c', '                              3839 Huma Street Phagameng ', 1, '2020-04-29 13:11:32', 'Water ', 'Modimolle mokgophong', 'Limpopo', 'Male', 'Pearl Moroasui ', '0822969248', 'South Africa', 'P', 'Faith Based Sector ', 'SANAC CIVIL SOCIETY FORUM'),
(58, '6701135246087', 'dan', 'Kekane ', 'danhappyrekane@gmail.com', '073 616 7170', '60a5a953d634504cb2b6c631b50d1dd5', '71 van Bruggen Ave\r\nKookrus\r\nMeyerton            ', 1, '2020-04-29 13:12:17', 'Sedibengm', 'Midvaal', 'Gauteng', 'Male', 'Mazhamba Madima', 'Eric Marumo', 'South Africa', 'P', 'Disabled People South Africa', 'DPSA'),
(59, '7911275351089', 'MOSES', 'NGOBENI', 'MOSESLWANDLE@GMAIL.COM', '0714305897', 'cf3e22e079f4ddeeb13c4d9beda622b9', '                              ', 1, '2020-04-29 13:12:46', 'TSHWANE', 'TSHWANE', 'Gauteng', 'Male', '0714305897', '0763480840', 'South Africa', 'P', 'TRADITIONAL HEALERS ORGANISATION', 'SANAC CIVIL SOCIETY FORUM'),
(60, '6404145399083', 'Sakhele', 'Makhubo', 'endumisweni@mweb.co.za', '0733040682', '96bf624eec54bd673a872cee7c611d20', '                              562 Esipetweni Section, Tembisa, 1628', 1, '2020-04-29 13:14:56', 'Tembisa', 'City of Ekurhuleni', 'Gauteng', 'Male', 'S. Nongogo', '0730965739', 'South Africa', 'C', 'Community Member', 'Community Member'),
(61, '5911090793087', 'Veronica Sindiswa ', 'Nongogo', 'sindi.nongogo@icloud.com', '0730965739', 'b9c9ddd584bf39021c92af16b6971eb5', '                              38 Vosloo Street Birchleigh ', 1, '2020-04-29 15:29:37', 'Kempton Park', 'Ekurhuleni ', 'Gauteng', 'Female', 'Dimpho ', '0723679898', 'South Africa', 'C', 'Community Member', 'Community Member'),
(62, '6712015772084', 'Manene ', 'Tabane', 'manenetabane@gmail.com', '0839664558', '0be866ed8d423ace99498cd48d797311', '     1477/20, 37th Avenue, Esselenpark ext2, Thembisa, 1632                         ', 1, '2020-04-29 15:55:59', 'Ekurhuleni', 'Ekurhuleni municipality', 'Gauteng', 'Male', 'Toto Baloi', '0833293535', 'South Africa', 'Select...', 'Contralesa', 'Choose'),
(63, '9107305531083', 'Neo Dennis ', 'Khweli', 'neodenniskhweli@yahoo.com', '0795478274', '916e1ded446ecbbe9af442797ab40e4e', '                              4917 Mohapi street Phagameng ', 1, '2020-04-29 16:14:23', 'Waterberg ', 'Modimolle mokgophong', 'Limpopo', 'Male', 'Mosima Gladys ', '0837284901 ', 'South Africa', 'N', 'Victory and Salvation Ministries ', '139-106'),
(64, '8106010789086', 'Keneilwe', 'Mosima ', 'lovemorechrech@gmail.com', '0837284901 ', '8fb33f407679926de2b4130594603abe', '                              8041 Ext 09\r\nPhomolong', 1, '2020-04-29 16:38:44', 'Waterberg ', 'Modimolle mokgophong', 'Limpopo', 'Female', 'Dennis khweli', '0837284901 ', 'South Africa', 'N', 'Lovemore creche ', '232-981'),
(65, '7508100756084', 'Maqauza', 'Qunusa', 'southafricanfaithorganization@gmail.com', '0710996135', 'bd45a07f8baa74e5e051109201ba1a26', '                              3753 Selemela street Phagameng ', 1, '2020-04-29 17:44:03', 'Waterberg ', 'Modimolle mokgophong', 'Limpopo', 'Female', 'Mphahlele Genevah', '0710996135', 'South Africa', 'N', 'South African faith organization ', '232-700'),
(66, '9309070356080', 'Jacqualine', 'Legodi', 'mosimastarfc@gmail.com', '0671111160', '54062baaf27b01782a272fe202cdeac1', '                              97 Kekana Street Phagameng ', 1, '2020-04-29 18:07:05', 'Waterberg ', 'Modimolle mokgophong', 'Limpopo', 'Female', 'Mosima Solomon ', '0837178283 ', 'South Africa', 'N', 'Mosima Stars football club ', '2019/389990/08'),
(67, '7512140428084', 'Neo', 'Khweli', 'neodenniskhweli@yahoo.com', '0763500810', '789bbcb3346b04846aedb981d2bb19ea', '                              4917 Mohapi street Phagameng ', 1, '2020-04-29 18:26:15', 'Waterberg ', 'Modimolle mokgophong', 'Limpopo', 'Male', 'Khumalo Busisiwe ', '0845986392', 'South Africa', 'N', 'Live Ur Life', '232-980'),
(68, '6210250531083', 'Solomon', 'Mosima ', 'maleselamosima76@gmail.com', '0827439440', '8c686ce32f8aaf7220887e610bf7c3ad', '                              3751 Selemela street Phagameng ', 1, '2020-04-29 19:04:18', 'Waterberg ', 'Modimolle mokgophong', 'Limpopo', 'Male', 'Masumbuka Monnicah', '0818066365', 'South Africa', 'N', 'Waterberg toy Centre ', '234-082'),
(69, '8411125970088', 'Cyprian', 'Mlambo', 'cyprianmlambo@gmail.co', '0631583124', '06e20e960b4ace2f91bd4b1d50d49302', '                   4474 Protea Glen ext 3           ', 1, '2020-04-29 20:44:02', 'Region G', 'city of JHB', 'Gauteng', 'Male', 'Hilda Phalama', '0727234326', 'South Africa', 'Select...', 'Nanpoc', 'ALLIANCE OF NPO NETWORKS'),
(70, '7706105326081', 'Nyameko', 'Mpulu', 'nmpulu@gmail.com', '0829346546', 'b77880c8b2c51edd6d0e7cf694f2ab38', '   6 Tuli Street\r\nDelft\r\n7100                           ', 1, '2020-04-30 05:28:44', 'Cape District', 'Cape Metro', 'Western Cape', 'Male', 'Bongani Yamba', '0735300279', 'South Africa', 'P', 'Disabled People South Africa', 'DPSA'),
(71, '9008185212085', 'Thabiso', 'Makoe', 'sihrmakoe.bbb@gmail.com', '0677581804', '25c70754e309a6f444e3e3b36e646c68', '  2350 Tshepo Street\r\n  Zone 13\r\n  Sebokeng\r\n  1983                           ', 1, '2020-04-30 05:39:40', 'Sedibeng', 'Emfuleni', 'Gauteng', 'Male', 'Nomvula', 'Mabixwane', 'South Africa', 'C', 'Community Member', 'Community Member'),
(72, '7702030761088', 'Nomvula Pamella', 'Mhlari', 'mhlaripamella589@gmail.com', '0845020939/ 0767994792', 'b4452b1133c7b09492f82994cd07421d', 'Valencia and Outspaan Streets, Veldrift N0 15 House 14\r\nBendor Park\r\nPolokwane                          ', 1, '2020-04-30 05:44:03', 'Capricorn District Municipality', 'Polokwane Local Municipality', 'Limpopo', 'Female', 'Mashara Chepape', '0733557408', 'South Africa', 'P', 'Disabled People South Africa', 'DPSA'),
(73, '9506250927081', 'Mantja Junicia', 'konoakonoane', 'juniciakonoakonane@gmail.com', '0616912895', 'bf74ec9f2375e6cffb3145a662444331', '73642 Kanana\r\nSebokeng\r\n1983                              ', 1, '2020-04-30 06:00:55', 'Sedibeng', 'Emfuleni', 'Gauteng', 'Female', 'Thapelo Malope', '0630207373', 'South Africa', 'C', 'Community Member', 'Community Member'),
(74, '9003075614086', 'Moses', 'Moeletsi', 'tmoeletsi90@gmail.com', '0710720496', '98e3e92784a2475d40c7a6773632f1c3', '2319 Bonatla Street\r\nZone 13\r\nSebokeng\r\n1983                       ', 1, '2020-04-30 06:07:26', 'Sedibeng', 'Emfuleni', 'Gauteng', 'Male', 'Mantwa Moeletsi', '0781812691', 'South Africa', 'C', 'Community Member', 'Community Member'),
(75, '6108200450083', 'Alina Thandiwe', 'Mfulo', 'mfulo.thandiwe@gmail.com', '0798439972', '006e8501b29aaf7b057c52bff61a1699', ' 3070 NIBE STREET,\r\nGALESHEWE \r\nKIMBERLEY ', 1, '2020-04-30 06:17:21', 'Francis Baard', 'Sol Plaatje ', 'Northern Cape', 'Female', 'Aaron Babolaeng', '0659973361', 'South Africa', 'P', 'Disabled people south africa', 'DPSA'),
(76, '6004150130082', 'Gillian Emily ', 'Moses ', 'gillian@dpsa.org.za', '0827760850', '66ed26dd2a0da07bdd89a27c146ed54e', '  21 St Anne , Kenilworth Road,\r\nKenilworth                             ', 1, '2020-04-30 07:05:47', 'Cape Metropole', 'City of Cape Town', 'Western Cape', 'Male', 'Penelope Johnston', '0846231611', 'South Africa', 'P', 'Disabled People South Africa ', 'DPSA'),
(77, '8501260630081', 'Given Amukelani', 'Mhlari', 'gmhlari@gmail.com', '0710277601', '7a37226a491cb90ebf00af56e2694cc3', 'Stand N0 125 Zanghoma Village\r\nNext Mashabana Spaza Shop\r\nNduna Totwana\r\n                              ', 1, '2020-04-30 07:23:48', 'Mopani District Municipality', 'Tzaneen Local Municipality', 'Limpopo', 'Female', 'Nomvula Pamella Mhlari', '0845020939/0767994792', 'South Africa', 'P', 'Disabled People South Africa', 'DPSA'),
(78, '7503106465087', 'Bongani', 'Yamba', 'yambabongani@gmail.com', '0735300279', '23e29c0f0ea9450443a5085aa60c91f3', ' E5012 Europe\r\nGugulethu                             ', 1, '2020-04-30 07:37:24', 'Cape District', 'Cape Metro', 'Western Cape', 'Male', 'Nyameko Mpulu', '0829346546', 'South Africa', 'P', 'Disabled People South Africa', 'DPSA'),
(79, '74080350990i2', 'Scha', 'Van Niekerk', 'scha@uconomy.co', '+27662265193', '1c740eb75865bc0e3cc865a53a0370d5', 'Randburg', 1, '2020-04-30 07:45:16', 'Johannesburg', 'Randburg ', 'Gauteng', 'Male', 'Wynand Goosen ', '+27 83 393 9991', 'South Africa', 'P', 'Uconomy ', 'PATIENT USER NETWORK'),
(80, '8205071113085', ' Mmashara Margaret', 'Chepape', 'masharachepape@yahoo.com', '0733557408', '5dbeca429a4c043f979258d96fca4e97', '                              ', 1, '2020-04-30 07:55:03', 'Capricorn District Municipality', 'Polokwane Local Municipality', 'Limpopo', 'Female', 'Nomvula Pamella Mhlari', '0845020939/0767994792', 'South Africa', 'P', 'Disabled People South Africa', 'DPSA'),
(81, '6701070052086', 'Peo', 'Mokoto', 'mokotopeo@gmail.com', '0606445068', '6fe1a59a5b25093f1b85bcae9af64dde', '10580 Magogoe Tlhabologo', 1, '2020-04-30 08:18:51', 'Ngaka Modiri Molema', 'Mahikeng', 'North West', 'Female', 'Tumelo', '0839949083', 'South Africa', 'P', 'Disabled People South Africa', 'DPSA'),
(82, '80070100369088', 'Tumelo', 'Mokoto', 'mokotopeo@gmail.com', '0839949083', 'dacf3047667a8545801ffb79ae24f791', '10580 Magogoe Tlhabologo', 1, '2020-04-30 08:24:29', 'Ngaka Modiri Molema', 'Mahikeng', 'North West', 'Female', 'Peo', '0606445068', 'South Africa', 'P', 'Disabled People South Africa', 'DPSA'),
(83, '8811241103086', 'Mbali Caroline ', 'Dladla', 'mbali@dpsa.org.za', '0717916668', '797a9c0e91625ab4e91cbf5fb41d3e53', '   81A Roseaneth Road \r\nRose-acres\r\nJohannesburg                            ', 1, '2020-04-30 08:42:30', 'Johannesburg', 'City Of Joburg', 'Gauteng', 'Female', 'Brenda Letlaka', '082 859 0515', 'South Africa', 'P', 'Disabled People South Africa ', 'DPSA'),
(84, '6801280299087', 'Matseliso Brenda', 'Letlaka', 'pansy@dpsa.org.za', '0828590515', '3a56c612ea115ad619856951365cc717', '3037 Kelimotse Street Rockville P.O Moroka 1868                             ', 1, '2020-04-30 08:44:59', 'Johannesburg', 'Johannesburg', 'Gauteng', 'Female', 'Mbali Dladla', '0717916668', 'South Africa', 'P', 'Disabled People South Africa', 'DPSA'),
(85, '6702110512089', 'Emily', 'Ntuli', 'pdcmp@dpsa.org.za', '0838981919', '811bd7e6c17a660892d224d495e48cf1', '     1727 Porcupine Street  \r\nKamagugu \r\nNelspruit                      ', 1, '2020-04-30 09:23:13', 'Ehlanzeni District', 'Mbombela', 'Mpumalanga', 'Male', 'Emmanuel Lukhele', '0766565416', 'South Africa', 'P', 'Disabled People South Africa', 'DPSA'),
(86, '6411085042086', 'Wynand ', 'Goosen', 'drwynand@gmail.com', '0833939991', '20fa907c3fbe5909279d5a70be0b2cdd', '65 Shepard Avenue\r\nBryanston ', 1, '2020-04-30 10:56:37', 'Sandton', 'Sandton', 'Gauteng', 'Male', 'George Lupke', '083 608 2283', 'South Africa', 'C', 'Community Member', 'Community Member'),
(87, '7307175748088', 'Peter', 'Kgolokoane', 'tnetd2017@gmail.com', '0769655570', '464265db93832ff72be230283e936386', '                              3130 Ratlou  Location  \r\nThaba Nchu  \r\n9780', 1, '2020-04-30 12:32:08', 'Thaba Nchu ', 'Mangaung  Metro  Municipality', 'Free State', 'Male', 'Tankiso  Ben  Morite', '0611490527', 'South Africa', 'N', 'Thaba Nchu  Enterprise Empowerment', '2019/309273/08'),
(88, '8405060287086', 'Keatlegile', 'Ramatong', 'kgramatong29@gmail.com', '0839893089', '96508860b6a99e49887148d30b82b878', '                      20 Salerno Avenue Riebeeckstad Welkom        ', 1, '2020-04-30 14:10:57', 'Lejweleputswa', 'Matjhabeng', 'Free State', 'Male', 'Evelyn Ramosobela', '0782009169', 'South Africa', 'N', 'Baba Bagodimo Dic and Awareness centre', '057/723'),
(89, '7509295595089', 'Mokete', 'Ramatong', 'Ramatongmg@gmail.com', '0788897244', '96508860b6a99e49887148d30b82b878', '       20 Salerno Avenue Riebeeckstad Welkom                       ', 1, '2020-04-30 14:15:51', 'Lejweleputswa', 'Matjhabeng', 'Free State', 'Male', 'Keatlegile Ramatong', '0839893089', 'South Africa', 'C', 'Community Member', 'Community Member'),
(90, '7806125273089', 'Thabo John', 'Phakade', 'phakadetj@yahoo.com', '0792213940', '96508860b6a99e49887148d30b82b878', '      24 Oxford Avenue Riebeeckstad welkom                        ', 1, '2020-04-30 16:35:06', 'Lejweleputswa', 'Matjhabeng', 'Free State', 'Male', 'Mood Ndlebe', '0836623667', 'South Africa', 'C', 'Community Member', 'Community Member'),
(91, '7308155858087', 'Manyonda', 'Ndlebe', 'ndlebemanyonda@gmail.com', '0836623667', '96508860b6a99e49887148d30b82b878', '      4390 uxolo street thabong welkom                        ', 1, '2020-04-30 16:47:07', 'Lejweleputswa', 'Matjhabeng', 'Free State', 'Male', 'Thabo phakade', '0792213940', 'South Africa', 'C', 'Community Member', 'Community Member'),
(92, '6705185566088', 'Aaron Ohentse', 'Babolaeng', 'ababolaeng@gmail.com', '0659973361', '265bd1301b7e2a18a5d24cb978c29f5d', ' 4282 Kgosi Street,\r\n Vergenoeg, \r\nKimberley, 8345', 1, '2020-05-01 04:50:28', 'Francis Baard', 'Sol Plaatjie', 'Northern Cape', 'Male', 'Thandiwe Mfulo', '0798439972', 'South Africa', 'P', 'Disabled People South Africa', 'DPSA'),
(93, '8002135718086', 'Patrick', 'Mugumo', 'patrick@infomage.co.za', '0823388358', '906e23993aad9b8c446cbc648c651049', '240 Blairgowrie Drive\r\nBlairgowrie\r\nRandburg\r\n2194                              ', 1, '2020-05-01 08:36:41', 'Randburg', 'city of Joburg', 'Gauteng', 'Male', '0118862727', '0823388358', 'South Africa', 'C', 'Community Member', 'Community Member'),
(94, '8607016198081', 'Nickey ', 'Mabusa ', 'Nickey@showmeyournumber.org.za', '0605252010 ', 'c912e4e8d77000e9cc78593c648bf64e', '  3401 modise street \r\nTigane location \r\nHartbeefountein \r\n2600                       ', 1, '2020-05-01 12:22:55', 'Dr Kenneth Kaunda District ', 'Matlosana ', 'North West', 'Male', 'Please Komane ', '0813733109 ', 'South Africa', 'N', 'Show me your number ', '082563'),
(95, '7203106177085', 'Mandla Mncedisi', 'Nkota', 'maziminvestment@gmail.com', '0616699192', '54fb25ef3815319587726f4dd3cee0ce', '    51 Fairbank Road Amalinda     East london                      ', 1, '2020-05-01 14:43:31', 'Buffalo city Municipality ', 'Buffalo city Municipality ', 'Eastern Cape', 'Male', 'Phaphama Mfenyana ', '0792973689', 'South Africa', 'P', 'Disabled People South Africa', 'DPSA'),
(96, '8206130292084', 'Khanyi', 'Ngema', 'khanyisile@showmeyournumber.org.za', '0711783010', 'bfe9ba3af05c66be5bce0f8e75729da8', '                              Lot 551 coffee farm\r\nPinetown\r\n3610', 1, '2020-05-01 15:09:38', 'Ethekwini metro', 'Ethekwini metro municipality', 'KwaZulu Natal', 'Male', 'Palesa komane', '0813733109', 'South Africa', 'N', 'Khanyi Ngema', '082563'),
(97, 'cn164947', 'Monica', 'Amlima', 'ambassadors4achange@gmail.com', '0834215891', '60848790357dffdfc58680c1ca7e903b', '                             7711 plumeria \r\nMafikeng', 1, '2020-05-02 03:35:38', 'Ngaka modiri Molema', 'mafikeng', 'North West', 'Female', 'Gathel moyo', '0835873965', 'South Africa', 'C', 'Community Member', 'Community Member'),
(98, '7603080740081', 'Ntswaki Emly', 'Mabaso', 'mabasoemly@gmail.com', '0744972789', 'b6cb2388f0007a4f5701c1dcf0c8f1c7', '                              926B Phomolong', 1, '2020-05-02 08:29:05', 'Thabo Mofutsanyana', 'Maluti a phofung', 'Free State', 'Female', 'Dikeledi', '0817528834', 'South Africa', 'N', 'Tshwaranang creche and pre school ', '026-979'),
(99, '9603080740081', 'Ntswaki Emly', 'Mabaso', 'mabasoemly@gmail.com', '0817528834', 'a8aee062868ed62ac376a4c4f79e0bcc', '926 PHOMOLONG', 1, '2020-05-02 08:47:40', 'Thabo Mofutsanyana', 'Maluti a Phofung', 'Free State', 'Female', 'Dikeledi', '0744972789', 'South Africa', 'C', 'Community Member', 'Community Member'),
(100, '9209021525082', 'Portia Matamela', 'Mmbidi', 'office@educationofhopeafrica.org.za', '+27 73 885 2437', '50ddf2ed0940bb43d34b65fed0a215e2', '11150 Utlhanong Drive Kagiso Ext.6               ', 1, '2020-05-02 15:58:47', 'West Rand', 'Mogale City', 'Gauteng', 'Female', 'Timothy Zulu', '0670584406', 'South Africa', 'P', 'Education of Hope Africa', 'SANAC CIVIL SOCIETY FORUM'),
(101, '7301275691082', 'Nhlanhla Amandus ', 'NDLOVU', 'ndlovuna@gmail.com', '0789494100', '9312220e5cc3b3bbbd538f79d40898d7', '10 Woodrige Place, 60 Ouhout Road, Weltevredenpark                ', 1, '2020-05-03 11:57:53', 'Joburg Metropolitan Municipality ', 'Joburg ', 'Gauteng', 'Male', 'Thulani Tshefuta ', '0720157957', 'South Africa', 'P', 'Nedlac Community Trust ', 'NEDLAC COMMUNITY CONSTITUENCY'),
(102, '8809135769087', 'Oagile ', 'Louw', 'oagile.gp@gmail.com', '0835624781', 'd5f28663823bc0f7190269d5df13bb77', '                5543 Cheetah Str.\r\nLehae. \r\nExt 1.', 1, '2020-05-04 06:51:08', 'City of Johannesburg ', 'City of Johannesburg ', 'Gauteng', 'Male', 'Oagile Louw ', '083  562 4781', 'South Africa', 'P', 'SAYC', 'SAYC'),
(103, '9212075387086', 'Daniel Basie', 'Mtfilibe', 'danielbasie92@gmail.com', '0735762340', 'baa7c2cf3cf4b657b9261b9dd2b8efbd', '6727 Kodisang Streets\r\nRatanda\r\nHeidelberg\r\n1441', 1, '2020-05-04 07:16:56', 'Sedibeng', 'Lesedi Local Municipality', 'Gauteng', 'Male', 'Mmeli Nkosi', '0840253047', 'South Africa', 'N', 'Inqaba Yoklinda Youth Organisation', '029-442'),
(104, '7004210415084', 'DIANNE', 'NOYILE', 'diannenoyile@gmail.com', '0625154662', '31d3b3d1f23c3c8c12b6601b9252274e', '     45 OAKLEY STREET ,RAYTON ,1001                        ', 1, '2020-05-04 07:41:27', 'TSHWANE', 'TSHWANE', 'Gauteng', 'Female', 'THAPELO MANTSHIDI', '0824850130', 'South Africa', 'P', 'SIYATHEMBA-NOKENG COMMUNITY CENTRE', 'ALLIANCE OF NPO NETWORKS'),
(105, '9203075394081', 'Samuel', 'Mcoco', 'mcocosamuel@gmail.com', '0838647268', '2646c71a965db59d7cce7ee9ee39da74', '6578 Mhlambi street extension 7 Ratanda', 1, '2020-05-04 11:19:47', 'Sedibeng', 'Lesedi', 'Gauteng', 'Male', 'Nomali Mcoco', '0736648796', 'South Africa', 'C', 'Community Member', 'Community Member'),
(106, '9009285277085', 'nkosana', 'Nkosi', 'nkosinkosana39@gmail.com', '0814595705', '5ef83db63417323b2b4d6039559a1538', '26784 Norrinco Street\r\nKwa-Thema, Springs \r\n1575', 1, '2020-05-04 11:22:15', 'Springs', 'Ekurhuleni', 'Gauteng', 'Male', 'Emmanuel', '0787753223', 'South Africa', 'C', 'Community Member', 'Community Member'),
(107, '9303075394081', 'Mzwakhe', 'Ngubeni', 'ngubeni169@gmail.com', '0727825680', '2646c71a965db59d7cce7ee9ee39da74', '1895 Heidelberg Road', 1, '2020-05-04 11:42:15', 'Sedibeng', 'Lesedi', 'Gauteng', 'Choose', 'Nomali Mcoco', '0838647268', 'South Africa', 'C', 'Community Member', 'Community Member'),
(108, '9503075394081', 'Mobile Test', 'Mobile Test ', 'mcocosamuel@gmail.com', '0838647270', '2646c71a965db59d7cce7ee9ee39da74', '6578 Mhlambi street ext 7 Ratanda', 1, '2020-05-04 12:22:32', 'Sedibeng', 'Lesedi', 'Gauteng', 'Male', 'Test Mobile', '0838642768', 'South Africa', 'C', 'Community Member', 'Community Member'),
(109, '8904280428082', 'Sibongile', 'Radebe', 'Sibongilerdb8@gmail.com', '0739195801', 'ca8bfcbf31f019b26652834201c8d088', '7053 phokeng street diepkloof zone 4', 1, '2020-05-04 15:32:24', 'South West', 'Johannesburg', 'Gauteng', 'Female', 'Sibusisiwe Radebe', '0680656400', 'South Africa', 'P', 'SAYC', 'SAYC'),
(110, '9505130837080', 'Mampe Ivy', 'Thobatsi', 'ivythonatsi7@gmail.com', '0633092212', 'f7e4f9934ff9dfd0243b22ef7163aa88', '                1849 Paul Hlahane street \r\nBoitumelo\r\nSebokeng (1983)', 1, '2020-05-04 15:34:38', 'Sedibeng', 'Emfulweni', 'Gauteng', 'Female', 'Nthabiseng', '0784622529', 'South Africa', 'P', 'African Youth Development Fund', 'SAYC'),
(111, '8901075836081', 'Charles', 'Mokonyama', 'cosas.jhb@gmail.com', '068 046 2470', '10b3cae00cae2b49a8000086254af3c6', '                7175 Ext 9 Mike Diradingwe street Alexandra ', 1, '2020-05-04 16:23:20', 'City of Johannesburg', 'City of Johannesburg', 'Gauteng', 'Male', '0642715310', '0720925203', 'South Africa', 'P', 'SAYC', 'SAYC'),
(112, '9912280542082', 'Nkosana', 'Nkosana', 'nkosinkosana@yahoo.com', 'o787753223', 'e10adc3949ba59abbe56e057f20f883e', '1234 Street\r\nKwathema\r\n1575', 1, '2020-05-04 16:24:08', 'Springs', 'Ekurhuleni', 'Gauteng', 'Male', 'nkosi', '0814595705', 'South Africa', 'P', 'Paper Solution', 'WIEGO'),
(113, '9603075394081', 'Test ', 'Mobile', 'mcocosamuel2@gmail.com', '0838647271', 'cdf894cf77055d1a6c95c62c0d057aae', '6578 Mhlambi            ', 1, '2020-05-04 16:35:00', 'Sedibeng', 'Lesedi', 'Gauteng', 'Male', 'Nomali ', '0838642768', 'South Africa', 'P', 'IYYO', 'DPSA'),
(114, '8605275962080', 'Nkosingiphile ', 'Dum', 'nkosingiphileb72@gmail.com', '0822390068', '5ca46d4a1916e9fbad94d8088922fb3a', '4787\r\n13 Hyena street  \r\nPhase 3\r\n1829              ', 1, '2020-05-04 16:35:38', '120', 'Johannesbu6', 'Gauteng', 'Male', 'Khanyile', '0715087313', 'South Africa', 'P', 'SOUTH AFRICAN DRUG ELIMATING TEAM  (SADET)', 'SAYC'),
(115, '9703075394081', 'Test 2', 'Mobile2', 'mcocosamuel3@gmail.com', '0838647272', '2646c71a965db59d7cce7ee9ee39da74', '6578 Mhlambi street             ', 1, '2020-05-04 16:36:51', 'Sedibeng', 'Lesedi', 'Free State', 'Male', 'Nomali ', '0838642768', 'South Africa', 'P', 'IYYO', 'DPSA'),
(116, '9803075394081', 'Test Civil 3', 'Mobile 3', 'mcocosamuel4@gmail.com', '0838647280', 'cdf894cf77055d1a6c95c62c0d057aae', '6578 mhlambi street           ', 1, '2020-05-04 16:42:10', 'Sedibeng', 'Ekhuruleni', 'North West', 'Male', 'Nomali ', '0838642768', 'South Africa', 'N', 'IYYO', '1234567'),
(117, '5810225598082', 'Nkosingiphile', 'Duma', 'Nkosingiphileb72@gmail.com', '0715087313', '5ca46d4a1916e9fbad94d8088922fb3a', ' 4787\r\nHyena street \r\nPhase 3               ', 1, '2020-05-04 16:50:34', '120', 'Johannesburg', 'Choose', 'Male', 'Khanyile', '0715087313', 'South Africa', 'N', 'SOUTH AFRICAN DRUG ELIMATING TEAM  (SADET)', '218-980'),
(118, '9703075394094', 'Community Test5', 'Test', 'mcocosamuel5@gmail.com', '0838647367', 'cdf894cf77055d1a6c95c62c0d057aae', '6578 mhlambi  ', 1, '2020-05-04 16:52:10', 'Sedibeng', 'Lesedi', 'Northern Cape', 'Female', 'Nomali ', '0838642768', 'South Africa', 'C', 'Community Member', 'Community Member'),
(119, '820414 0634 080', 'Faith', 'Ndhlovu', 'faithndhlovu1@gmail.com', '0815944710', 'c1f0387da68b6621a5f1b582f2c3017d', '20967/19 Unongubende Street Ext 10 \r\nEast Field \r\nVosloorus                ', 1, '2020-05-04 17:04:32', 'Boksburg', 'Ekurhuleni Manucipality', 'Gauteng', 'Female', 'Mpho', '079 973 8076', 'South Africa', 'N', 'Faith and Hope for brothers and sisters', '130-032 NPO'),
(120, '9603050884081 ', 'Carroline Lebohang ', 'Molapo', 'KilaUnatymthombeni@gmail.com', '0834135643', 'e10adc3949ba59abbe56e057f20f883e', '              2773 Phillip street \r\n              Finetown \r\n              Grasmere \r\n               1828           ', 1, '2020-05-04 17:06:22', 'Johannesburg ', 'Metro Johannesburg ', 'Gauteng', 'Female', 'Seipati molapo', '0769306517 ', 'South Africa', 'P', 'African youth development fund', 'SAYC');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) DEFAULT NULL,
  `quantity` int(222) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `request_first_name` varchar(222) NOT NULL,
  `delivery_address` varchar(222) NOT NULL,
  `unique_code` varchar(222) NOT NULL,
  `request_surname` varchar(222) NOT NULL,
  `comments` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`, `request_first_name`, `delivery_address`, `unique_code`, `request_surname`, `comments`) VALUES
(1, 39, NULL, NULL, NULL, NULL, '2020-05-04 16:30:23', 'Thato', 'Somewhere in Soweto ', '1706', '', 'Lets just write stuff and see what happens');

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
  MODIFY `req_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `request_disability`
--
ALTER TABLE `request_disability`
  MODIFY `disability_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `request_employment_stats`
--
ALTER TABLE `request_employment_stats`
  MODIFY `house_employment_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `request_medication_01`
--
ALTER TABLE `request_medication_01`
  MODIFY `med_01_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request_medication_02`
--
ALTER TABLE `request_medication_02`
  MODIFY `med_02_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request_people`
--
ALTER TABLE `request_people`
  MODIFY `req_ppl_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `request_violations`
--
ALTER TABLE `request_violations`
  MODIFY `violation_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
