-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2022 at 11:01 AM
-- Server version: 10.7.3-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rating_machine`
--

-- --------------------------------------------------------

--
-- Table structure for table `fund_manager_computes`
--

CREATE TABLE IF NOT EXISTS `fund_manager_computes` (
  `id` int(11) NOT NULL,
  `ebitda` double DEFAULT NULL,
  `total_debt` double DEFAULT NULL,
  `foc` double DEFAULT NULL,
  `l_debt` double DEFAULT NULL,
  `w_cap` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating_machine_permissions`
--

CREATE TABLE IF NOT EXISTS `rating_machine_permissions` (
  `id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fund_manager_requirements`
--

CREATE TABLE IF NOT EXISTS `fund_manager_requirements` (
  `id` int(11) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `year_count` int(11) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `dep` varchar(500) DEFAULT NULL,
  `add_fix` varchar(500) DEFAULT NULL,
  `finance_cost` varchar(500) DEFAULT NULL,
  `ffo` varchar(500) DEFAULT NULL,
  `fin_ass` varchar(500) DEFAULT NULL,
  `int_asset` varchar(500) DEFAULT NULL,
  `c_liabs` varchar(500) DEFAULT NULL,
  `c_asset` varchar(500) DEFAULT NULL,
  `t_asset` varchar(500) DEFAULT NULL,
  `f_asset` varchar(500) DEFAULT NULL,
  `n_worth` varchar(500) DEFAULT NULL,
  `pre_to_pro` varchar(500) DEFAULT NULL,
  `turn_over` varchar(500) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating_machine_roles`
--

CREATE TABLE IF NOT EXISTS `rating_machine_roles` (
  `id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating_machine_users`
--

CREATE TABLE IF NOT EXISTS `rating_machine_users` (
  `id` int(11) NOT NULL,
  `permissions_id` int(11) DEFAULT NULL,
  `roles_id` int(11) DEFAULT NULL,
  `last_login_time` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratitng_machine_quantities`
--

CREATE TABLE IF NOT EXISTS `ratitng_machine_quantities` (
  `id` int(10) NOT NULL,
  `cr` double NOT NULL,
  `sol` double NOT NULL,
  `fa_nw` double NOT NULL,
  `cl_nw` double NOT NULL,
  `ass_t` double NOT NULL,
  `sale_wc` double NOT NULL,
  `ass_sale` double NOT NULL,
  `pm` double NOT NULL,
  `sr` double NOT NULL,
  `roa` double NOT NULL,
  `nw_ta` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fund_manager_computes`
--
ALTER TABLE `fund_manager_computes` DROP PRIMARY KEY,
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_machine_permissions`
--
ALTER TABLE `rating_machine_permissions` DROP PRIMARY KEY,
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund_manager_requirements`
--
ALTER TABLE `fund_manager_requirements` DROP PRIMARY KEY,
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_machine_roles`
--
ALTER TABLE `rating_machine_roles` DROP PRIMARY KEY,
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_machine_users`
--
ALTER TABLE `rating_machine_users` DROP PRIMARY KEY,
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratitng_machine_quantities`
--
ALTER TABLE `ratitng_machine_quantities` DROP PRIMARY KEY,
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fund_manager_computes`
--
ALTER TABLE `fund_manager_computes` 
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating_machine_permissions`
--
ALTER TABLE `rating_machine_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fund_manager_requirements`
--
ALTER TABLE `fund_manager_requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `rating_machine_roles`
--
ALTER TABLE `rating_machine_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating_machine_users`
--
ALTER TABLE `rating_machine_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratitng_machine_quantities`
--
ALTER TABLE `ratitng_machine_quantities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
