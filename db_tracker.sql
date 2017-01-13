-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 06:33 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_clients`
--

CREATE TABLE `tab_clients` (
  `int_client_id` int(11) NOT NULL,
  `txt_client_name` varchar(50) NOT NULL,
  `txt_client_email` varchar(225) NOT NULL,
  `txt_client_phone` varchar(225) NOT NULL,
  `txt_client_gender` varchar(100) NOT NULL,
  `txt_client_address` varchar(225) NOT NULL,
  `txt_password` varchar(225) NOT NULL,
  `txt_plan_of_client` varchar(50) NOT NULL,
  `int_no_of_members` int(11) NOT NULL,
  `int_is_deleted` tinyint(11) DEFAULT NULL,
  `txt_added_by` int(11) NOT NULL,
  `dt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_clients`
--

INSERT INTO `tab_clients` (`int_client_id`, `txt_client_name`, `txt_client_email`, `txt_client_phone`, `txt_client_gender`, `txt_client_address`, `txt_password`, `txt_plan_of_client`, `int_no_of_members`, `int_is_deleted`, `txt_added_by`, `dt_date`) VALUES
(1, 'Mahesh Mansarovar', 'mahesh@gmail.com', '8867886700', 'male', 'alambagh lko', '11111', '5', 6, NULL, 1, '2017-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `tab_client_details`
--

CREATE TABLE `tab_client_details` (
  `int_detail_id` int(11) NOT NULL,
  `int_client_id` int(11) NOT NULL,
  `txt_client_email` varchar(50) NOT NULL,
  `txt_client_mobile` varchar(50) NOT NULL,
  `txt_client_address` varchar(200) NOT NULL,
  `txt_client_logo` varchar(200) NOT NULL,
  `dt_date_of_purchase` date NOT NULL,
  `dt_date` date NOT NULL,
  `txt_key` varchar(50) NOT NULL,
  `int_is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tab_device`
--

CREATE TABLE `tab_device` (
  `int_device_id` int(11) NOT NULL,
  `txt_key` varchar(50) NOT NULL,
  `txt_imei` varchar(50) NOT NULL,
  `txt_manufacturer_name` varchar(50) NOT NULL,
  `txt_device_owner` varchar(50) NOT NULL,
  `txt_token` varchar(50) NOT NULL,
  `int_is_deleted` int(11) NOT NULL,
  `txt_added_by` varchar(50) NOT NULL,
  `dt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tab_device_assignment`
--

CREATE TABLE `tab_device_assignment` (
  `int_assign_id` int(11) NOT NULL,
  `int_device_id` int(11) NOT NULL,
  `int_member_id` int(11) NOT NULL,
  `dt_assignment_date` date NOT NULL,
  `int_is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tab_members`
--

CREATE TABLE `tab_members` (
  `int_member_id` int(11) NOT NULL,
  `txt_name` varchar(50) NOT NULL,
  `int_client_id` int(11) NOT NULL,
  `txt_designation` varchar(50) NOT NULL,
  `txt_gender` varchar(50) NOT NULL,
  `txt_relation` varchar(50) NOT NULL,
  `txt_email` varchar(50) NOT NULL,
  `txt_phone` varchar(50) NOT NULL,
  `txt_pan_no` varchar(50) NOT NULL,
  `int_is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tab_plans`
--

CREATE TABLE `tab_plans` (
  `int_plan_id` int(11) NOT NULL,
  `dbl_cost` double NOT NULL,
  `txt_logo` varchar(200) NOT NULL,
  `txt_plan_name` varchar(50) NOT NULL,
  `txt_plan_desc` varchar(50) NOT NULL,
  `int_is_deleted` int(11) NOT NULL,
  `txt_added_by` varchar(50) NOT NULL,
  `dt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_plans`
--

INSERT INTO `tab_plans` (`int_plan_id`, `dbl_cost`, `txt_logo`, `txt_plan_name`, `txt_plan_desc`, `int_is_deleted`, `txt_added_by`, `dt_date`) VALUES
(1, 2000, 'uploads/plan/logo.jpg', 'Basic', 'Bacis Plan ', 1, '0', '0000-00-00'),
(2, 3000, 'http://[::1]/Saya/upload/', 'Premium', 'Premium descritpion ', 0, '1', '2017-01-17'),
(4, 100, '', 'kjhg', 'gjhg', 0, '1', '2017-01-11'),
(5, 20000, 'uploads/plans/Mrt-Pic.jpg', 'kjhg-edit', 'gjhg-edit', 0, '1', '2017-01-31'),
(6, 2000, 'uploads/plans/images.jpg', 'New Plan ', 'New Plan Desc ', 0, '0', '2017-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `tab_tracking`
--

CREATE TABLE `tab_tracking` (
  `int_tracking_id` int(11) NOT NULL,
  `int_device_id` int(11) NOT NULL,
  `int_member_id` int(11) NOT NULL,
  `dbl_latitude` double NOT NULL,
  `dbl_longitude` int(11) NOT NULL,
  `txt_error_estimation` varchar(200) NOT NULL,
  `int_is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tab_users`
--

CREATE TABLE `tab_users` (
  `int_user_id` int(11) NOT NULL,
  `txt_user_name` varchar(50) NOT NULL,
  `txt_password` varchar(50) NOT NULL,
  `txt_user_email` varchar(50) NOT NULL,
  `int_group_id` int(11) NOT NULL,
  `int_is_deleted` int(11) NOT NULL DEFAULT '0',
  `dt_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_users`
--

INSERT INTO `tab_users` (`int_user_id`, `txt_user_name`, `txt_password`, `txt_user_email`, `int_group_id`, `int_is_deleted`, `dt_date`) VALUES
(1, 'admin_user', 'admin_user', '', 2, 0, '0000-00-00'),
(2, 'Mahesh Mansarovar', '111111', 'mahesh@gmail.com', 3, 0, '2017-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `tab_user_group`
--

CREATE TABLE `tab_user_group` (
  `int_group_id` int(11) NOT NULL,
  `txt_user_group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_user_group`
--

INSERT INTO `tab_user_group` (`int_group_id`, `txt_user_group`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_clients`
--
ALTER TABLE `tab_clients`
  ADD PRIMARY KEY (`int_client_id`);

--
-- Indexes for table `tab_client_details`
--
ALTER TABLE `tab_client_details`
  ADD PRIMARY KEY (`int_detail_id`);

--
-- Indexes for table `tab_device`
--
ALTER TABLE `tab_device`
  ADD PRIMARY KEY (`int_device_id`);

--
-- Indexes for table `tab_device_assignment`
--
ALTER TABLE `tab_device_assignment`
  ADD PRIMARY KEY (`int_assign_id`);

--
-- Indexes for table `tab_members`
--
ALTER TABLE `tab_members`
  ADD PRIMARY KEY (`int_member_id`);

--
-- Indexes for table `tab_plans`
--
ALTER TABLE `tab_plans`
  ADD PRIMARY KEY (`int_plan_id`);

--
-- Indexes for table `tab_tracking`
--
ALTER TABLE `tab_tracking`
  ADD PRIMARY KEY (`int_tracking_id`);

--
-- Indexes for table `tab_users`
--
ALTER TABLE `tab_users`
  ADD PRIMARY KEY (`int_user_id`);

--
-- Indexes for table `tab_user_group`
--
ALTER TABLE `tab_user_group`
  ADD PRIMARY KEY (`int_group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_clients`
--
ALTER TABLE `tab_clients`
  MODIFY `int_client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tab_client_details`
--
ALTER TABLE `tab_client_details`
  MODIFY `int_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tab_device`
--
ALTER TABLE `tab_device`
  MODIFY `int_device_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tab_device_assignment`
--
ALTER TABLE `tab_device_assignment`
  MODIFY `int_assign_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tab_members`
--
ALTER TABLE `tab_members`
  MODIFY `int_member_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tab_plans`
--
ALTER TABLE `tab_plans`
  MODIFY `int_plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tab_tracking`
--
ALTER TABLE `tab_tracking`
  MODIFY `int_tracking_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tab_users`
--
ALTER TABLE `tab_users`
  MODIFY `int_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tab_user_group`
--
ALTER TABLE `tab_user_group`
  MODIFY `int_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
