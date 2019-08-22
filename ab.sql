-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 08:13 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ab`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(191) NOT NULL,
  `display_name` varchar(191) DEFAULT NULL,
  `company_type` varchar(191) DEFAULT NULL,
  `organization_type` varchar(191) DEFAULT NULL,
  `industry_type` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `districts` varchar(191) DEFAULT NULL,
  `post_code` varchar(191) DEFAULT NULL,
  `billing_address` varchar(191) DEFAULT NULL,
  `employeer_type` varchar(191) DEFAULT NULL,
  `website` text,
  `logo` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`id`, `user_id`, `company_name`, `display_name`, `company_type`, `organization_type`, `industry_type`, `address`, `districts`, `post_code`, `billing_address`, `employeer_type`, `website`, `logo`, `created_at`, `updated_at`) VALUES
(4, 2, 'zxzxx', 'SSSSS', 'Multinational', 'NGO', 'Airlines/Aviation', 'Uttora', 'Dhaka', '232', 'sasa', 'Employer', 'hh.com', 'images/20190802045212logo10.png', '2019-08-01 22:52:12', '2019-08-01 22:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `job_post_id` int(11) UNSIGNED NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `user_id`, `job_post_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Eliminated', '2019-08-02 23:39:36', '2019-08-04 12:53:36'),
(3, 1, 2, NULL, '2019-08-06 05:46:29', '2019-08-06 05:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_title` varchar(191) NOT NULL,
  `job_type` varchar(191) DEFAULT NULL,
  `description` text,
  `exp` varchar(191) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `extra_facilites` text,
  `edu_req` text,
  `last_date` timestamp NULL DEFAULT NULL,
  `no_of_vacancies` int(11) DEFAULT NULL,
  `location` varchar(191) DEFAULT NULL,
  `salary` varchar(191) DEFAULT NULL,
  `additional_requirements` text,
  `category` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`id`, `user_id`, `job_title`, `job_type`, `description`, `exp`, `gender`, `extra_facilites`, `edu_req`, `last_date`, `no_of_vacancies`, `location`, `salary`, `additional_requirements`, `category`, `created_at`, `updated_at`) VALUES
(1, 2, 'Digital Marketing', 'Full Time', 'hj hjj hj', '2 year', 'Male', 'tyy', 'hhhhh', '2019-08-06 18:00:00', 11, 'kk', 'jk', 'hhhh', 'Accounting', '2019-08-02 03:30:56', '2019-08-02 03:30:56'),
(2, 2, 'Developer', 'Full Time', 'Messi got red card', '2 year', 'Male', 'tyy', 'nnnbm\r\nkjkj', '2019-08-05 18:00:00', 11, 'kk', 'jk', 'hhhhjkh', 'Software', '2019-08-05 23:23:49', '2019-08-05 23:23:49'),
(3, 2, 'Software Engineer', 'Full Time', 'hhhhhhhhhhhh hhhhhh', '5 year', 'Male', 'tyy', 'ijjj jn', '2019-08-05 18:00:00', 11, 'kk', 'jk', 'hihihi', 'Software', '2019-08-06 05:26:58', '2019-08-06 05:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_profile`
--

CREATE TABLE `job_seeker_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `father_name` varchar(191) DEFAULT NULL,
  `mother_name` varchar(191) DEFAULT NULL,
  `contact_no` varchar(191) DEFAULT NULL,
  `nid` bigint(20) UNSIGNED NOT NULL,
  `passport_no` varchar(191) DEFAULT NULL,
  `birth_certificate` varchar(191) DEFAULT NULL,
  `nationality` varchar(191) DEFAULT NULL,
  `permanent_district` varchar(191) DEFAULT NULL,
  `permanent_poster_code` varchar(191) DEFAULT NULL,
  `permanent_address` varchar(191) DEFAULT NULL,
  `linkedin_profile` varchar(191) DEFAULT NULL,
  `present_district` varchar(191) DEFAULT NULL,
  `present_poster_code` varchar(191) DEFAULT NULL,
  `present_address` varchar(191) DEFAULT NULL,
  `marital_status` varchar(191) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `career_objective` text,
  `DOB` varchar(191) DEFAULT NULL,
  `git_profile` varchar(191) DEFAULT NULL,
  `image` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_seeker_profile`
--

INSERT INTO `job_seeker_profile` (`id`, `user_id`, `fname`, `lname`, `father_name`, `mother_name`, `contact_no`, `nid`, `passport_no`, `birth_certificate`, `nationality`, `permanent_district`, `permanent_poster_code`, `permanent_address`, `linkedin_profile`, `present_district`, `present_poster_code`, `present_address`, `marital_status`, `gender`, `career_objective`, `DOB`, `git_profile`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'ss', 'asa', 'fff', 'fff', '0000', 2000000000002, '999', '09090', 'Bangladesh', 'Dhaka', '89', 'jh', 'jkh', 'Chittagong', 'jhjh', 'nh', 'Married', 'Male', 'khihnkhi', '2019-08-02', 'kjh', 'images/20190803085522image2.jpg', '2019-08-02 11:17:30', '2019-08-03 02:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `job_post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `message`, `job_post_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'hi', 1, '2019-08-04 15:34:42', '2019-08-04 15:34:42'),
(2, 2, 1, 'hi', 1, '2019-08-04 15:34:57', '2019-08-04 15:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_25_075217_entrust_setup_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Job Seeker', 'Job Seeker', NULL, NULL, NULL),
(2, 'Employer Seeker', 'Employer seeker', NULL, NULL, NULL),
(3, 'Admin', 'Admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone_no`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hi', 'hi', '12345678901', 'h@gmail.com', NULL, '$2y$10$/gDkMquJfrAL3bsx81kq0uGLgfwK.QUdcvcSRgr89nnzIS2ljYBeS', 'A1rIz9bFa1IgZUgoXKwsUo6ZXNsDmlXT3sHUXIvF1E1aT8SUDDmXnMOLmqma', '2019-07-30 23:22:10', '2019-07-30 23:22:10'),
(2, 'hi1', 'hi1', '12345678901', 's@gmail.com', NULL, '$2y$10$f2XLpAz82x2Uan4zHMlpJ.05QzRWtCaXv98qZYZx/aohi65PPZtxW', 'F2HlDXKwVKCpkbcZXE45qrgdTtrdirLLyTYDoiyzbywGjoqOLYctSsAA6JdN', '2019-07-30 23:55:21', '2019-07-30 23:55:21'),
(5, 'zzzzz', 'sssss', 'sssss', 'admin@gmail.com', NULL, '$2y$10$eO6YXqXrq1dOsletHBQmgOJD7261YbXj1r8LoqbmcAx/z0CSEoQuy', 'npjRbLJMYAEyqeYBlFPzAtXNH6K8iamAvKzYKgHIAtNApt89FTU7s2caaSE8', '2019-08-04 13:14:08', '2019-08-04 13:14:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker_profile`
--
ALTER TABLE `job_seeker_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_seeker_profile`
--
ALTER TABLE `job_seeker_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
