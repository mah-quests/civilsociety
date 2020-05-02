-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2020 at 09:52 AM
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
(12, 'Thato Grant', '', 'Female', '0825561323420', '6 Lingmoor, Spinetale Street', 'Centurion', 'City of Tshwane Metropolitan', 'North West', 'Nomfazwe Thomas', '0825561420443', '949473759454583', '5302', 1, '2020-04-29 05:12:02');

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
(2, 'dfd', '4', '5', '1', '2', 1, '2020-04-29 05:25:28');

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
  `heartCondition` text NOT NULL,
  `highBloodCondition` varchar(222) NOT NULL,
  `hivCondition` varchar(222) NOT NULL,
  `patient1_id` varchar(222) NOT NULL,
  `patient1_fullnames` varchar(222) NOT NULL,
  `patient1_facility` varchar(222) NOT NULL,
  `patient2_id` varchar(222) NOT NULL,
  `patient2_fullnames` varchar(222) NOT NULL,
  `patient2_facility` varchar(222) NOT NULL,
  `patient3_id` varchar(222) NOT NULL,
  `patient3_fullnames` varchar(222) NOT NULL,
  `patient3_facility` varchar(222) NOT NULL,
  `healthCareCondition` varchar(222) NOT NULL,
  `disasterCondition` varchar(222) NOT NULL,
  `retailCondition` varchar(222) NOT NULL,
  `emegencyCondition` varchar(222) NOT NULL,
  `transportCondition` varchar(222) NOT NULL,
  `highTempCond` varchar(222) NOT NULL,
  `dryCoughCond` varchar(222) NOT NULL,
  `soreThroatConditionCond` varchar(222) NOT NULL,
  `diarrhoeaCondition` varchar(222) NOT NULL,
  `more_covid_info` varchar(222) NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `covid_signs` varchar(222) NOT NULL,
  `essential_services_worker` varchar(222) NOT NULL
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
  `lgbt_in_house` text NOT NULL,
  `age0_2` varchar(222) NOT NULL,
  `age13_18` varchar(150) NOT NULL,
  `age19_59` varchar(100) NOT NULL,
  `age60plus` varchar(200) NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `age3_12` varchar(222) NOT NULL,
  `people_in_house` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_people`
--

INSERT INTO `request_people` (`req_ppl_id`, `unique_code`, `settlement`, `males_in_house`, `females_in_house`, `lgbt_in_house`, `age0_2`, `age13_18`, `age19_59`, `age60plus`, `status`, `date`, `age3_12`, `people_in_house`) VALUES
(6, '9389', 'Rural (Village)', '2', '1', '1', '3', '3', '2', '1', 1, '2020-04-28 12:52:48', '1', '1'),
(7, '5302', 'Informal Settlement', '1', '1', '1', '1', '1', '1', '1', 1, '2020-04-29 05:12:02', '1', '1');

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
(39, '8402035727080', 'Thato Grant', 'Mohono', 'thato.mohono@mahquests.co.za', '0825561420', '5511cf23120e545d66036be92c04e6ae', '220 2nd Street\r\nHalfway House', 1, '2020-05-01 03:35:39', 'Mathjabengdss', 'Lejeleputswa', 'North West', 'Male', 'Nomfazwe Thomas', '0825561420', 'South Africa', 'P', 'MaH Quests Enterprises (PTY) LTD', 'SANCO');

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

-- --------------------------------------------------------

--
-- Table structure for table `violations_status`
--

CREATE TABLE `violations_status` (
  `violation_id` int(222) NOT NULL,
  `unique_code` varchar(222) NOT NULL,
  `any_kind_abuse` varchar(222) NOT NULL,
  `lawEnforcementCond` varchar(222) NOT NULL,
  `communityMemberCond` varchar(222) NOT NULL,
  `gangsCheck` text NOT NULL,
  `domesticCond` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
-- Indexes for table `request_people`
--
ALTER TABLE `request_people`
  ADD PRIMARY KEY (`req_ppl_id`),
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
-- Indexes for table `violations_status`
--
ALTER TABLE `violations_status`
  ADD PRIMARY KEY (`violation_id`),
  ADD UNIQUE KEY `unique_code` (`unique_code`);

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
  MODIFY `req_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `request_employment_stats`
--
ALTER TABLE `request_employment_stats`
  MODIFY `house_employment_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request_medication`
--
ALTER TABLE `request_medication`
  MODIFY `req_med_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request_people`
--
ALTER TABLE `request_people`
  MODIFY `req_ppl_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `violations_status`
--
ALTER TABLE `violations_status`
  MODIFY `violation_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
