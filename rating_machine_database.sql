-- -------------------------------------------------------------
-- TablePlus 4.6.8(424)
--
-- https://tableplus.com/
--
-- Database: zl257jnut3d92tsq
-- Generation Time: 2022-06-22 10:06:25.3920
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE IF NOT EXISTS `fund_manager_computes` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `ebitda` double DEFAULT NULL,
  `total_debt` double DEFAULT NULL,
  `foc` double DEFAULT NULL,
  `l_debt` double DEFAULT NULL,
  `w_cap` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- ALTER TABLE `fund_manager_computes` DROP PRIMARY KEY,
--   ADD PRIMARY KEY (`id`);

CREATE TABLE IF NOT EXISTS `rating_machine_permissions` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- ALTER TABLE `rating_machine_permissions` DROP PRIMARY KEY,
--   ADD PRIMARY KEY (`id`);

CREATE TABLE IF NOT EXISTS `fund_manager_requirements` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `company` varchar(500) NOT NULL,
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
  `pre_topro` varchar(500) DEFAULT NULL,
  `turn_over` varchar(500) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- ALTER TABLE `fund_manager_requirements` DROP PRIMARY KEY,
--   ADD PRIMARY KEY (`id`);

CREATE TABLE IF NOT EXISTS `rating_machine_roles` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- ALTER TABLE `rating_machine_roles` DROP PRIMARY KEY,
--   ADD PRIMARY KEY (`id`);

CREATE TABLE IF NOT EXISTS `rating_machine_users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
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
-- ALTER TABLE `rating_machine_users` DROP PRIMARY KEY,
--   ADD PRIMARY KEY (`id`);

CREATE TABLE IF NOT EXISTS `ratitng_machine_quantities` (
  `id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
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
-- ALTER TABLE `ratitng_machine_quantities` DROP PRIMARY KEY,
--   ADD PRIMARY KEY (`id`);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;