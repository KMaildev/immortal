-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2022 at 08:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immortalfriendscompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title_eng`, `description_eng`, `title_jp`, `description_jp`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Activities', 'In publishing and graphic design, Lorem ipsum is a placeholder text.', '面接前準備', '面接する前の練習している姿です。', 'https://recruitmentmyanmarsak.com/admin/uploads/files/qt76bxne_l1mkw4.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/fjoadrpz465hcmk.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/jfhrcued8oxpm23.jpg', NULL, NULL),
(2, 'Activities', 'In publishing and graphic design, Lorem ipsum is a placeholder text.', '面接前準備', '面接する前の練習している姿です。', 'https://recruitmentmyanmarsak.com/admin/uploads/files/_fmkjzloiwh9cry.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/sdemujr3gzaqpkv.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mg Mg', 'asdf@gmail.com', '09444151443', 'Hello', 'Hello', '2022-08-11 06:59:29', '2022-08-11 06:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `name`, `phone`, `additional_note`, `attachment_file`, `path`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'Test', 'asdf', 'POS.pdf', 'http://localhost/projects/immortalfriends/storage/cv/Pz1bmaHhC8LyXf1NtnMLQZQ1LUjOXbfDurtKUTWT.pdf', '2022-08-11 10:26:24', '2022-08-11 10:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_company` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_experience_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_additional_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimate_salary_offer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_allowance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `company_name`, `type_of_company`, `location`, `website`, `phone`, `email`, `job_category`, `age_limit`, `educational_requirement`, `working_experience_requirement`, `other_additional_requirement`, `estimate_salary_offer`, `other_allowance`, `gender`, `interview_type`, `apply_date`, `created_at`, `updated_at`) VALUES
(1, 'asf', 'asdf', 'asd', 'askfweb', 'asdf', 'asf@gmail.com', 'asdf', 'saf', 'asfd', 'saf', 'asf', 'asf', 'asf', 'asdf', 'asdf', '2022-08-11', '2022-08-11 10:17:03', '2022-08-11 10:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_11_125939_create_contacts_table', 1),
(7, '2022_08_11_160954_create_activities_table', 2),
(8, '2022_08_11_164428_create_employers_table', 3),
(9, '2022_08_11_165109_create_cvs_table', 4),
(10, '2022_08_11_180648_create_training_galleries_table', 5),
(11, '2022_08_11_181128_create_training_faqs_table', 6),
(12, '2022_08_11_183515_create_student_application_forms_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_application_forms`
--

CREATE TABLE `student_application_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_application_forms`
--

INSERT INTO `student_application_forms` (`id`, `name`, `phone`, `email`, `education`, `date_of_birth`, `father`, `gender`, `nationality`, `permanent_address`, `apply_date`, `created_at`, `updated_at`) VALUES
(1, 'MgMg', '09444161554', 'gmg2@gmail.com', 'Good', 'asdf', 'asd', 'Male', 'asdf', 'asdfasd', '2022-08-11', '2022-08-11 12:12:35', '2022-08-11 12:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `training_faqs`
--

CREATE TABLE `training_faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_eng` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_eng` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_faqs`
--

INSERT INTO `training_faqs` (`id`, `question_eng`, `answer_eng`, `question_jp`, `answer_jp`, `created_at`, `updated_at`) VALUES
(1, 'What is the difference between Beginner Course and Basic Course?', 'The Beginner Course is for those who have absolutely no experience in learning the Japanese language. If you have studied some Japanese by yourself but want to learn Japanese systemically, you can also join the Beginner Course.\r\nIn comparison, the Basic Course is suitable for those who have a slight experience in learning Japanese (for instance, hiragana, katakana) for at least 3 months. You might have learned it in your university, polytechnic or a language school. After joining the Basic Course, you can probably master Japanese in 3 years.', 'What is the difference between Beginner Course and Basic Course?', 'The Beginner Course is for those who have absolutely no experience in learning the Japanese language. If you have studied some Japanese by yourself but want to learn Japanese systemically, you can also join the Beginner Course.\r\nIn comparison, the Basic Course is suitable for those who have a slight experience in learning Japanese (for instance, hiragana, katakana) for at least 3 months. You might have learned it in your university, polytechnic or a language school. After joining the Basic Course, you can probably master Japanese in 3 years.', NULL, NULL),
(2, 'How long must I study for to pass JLPT N5?', 'To pass JLPT N5, you need to study for about 100 hrs in class. It might be difficult to pass the JLPT N5 after completing only the Beginner Course, but you will most probably pass it after completing Basic Course.', 'How long must I study for to pass JLPT N5?', 'To pass JLPT N5, you need to study for about 100 hrs in class. It might be difficult to pass the JLPT N5 after completing only the Beginner Course, but you will most probably pass it after completing Basic Course.', NULL, NULL),
(3, 'How do I know who my teacher is?', 'All courses are taught by our highly-experienced and friendly teachers. To read their profiles, please click here.\r\nTo know which teacher is teaching which courses, please check out our class schedule here.', 'How do I know who my teacher is?', 'All courses are taught by our highly-experienced and friendly teachers. To read their profiles, please click here.\r\nTo know which teacher is teaching which courses, please check out our class schedule here.', NULL, NULL),
(4, 'How long must I study Japanese until I can be fluent in Japanese?', 'Approximately 2 years of study is advised. Learning a language is dependent on oneself’s own effort and the amount of practice that one puts forth.', 'How long must I study Japanese until I can be fluent in Japanese?', 'Approximately 2 years of study is advised. Learning a language is dependent on oneself’s own effort and the amount of practice that one puts forth.', NULL, NULL),
(5, 'How long does it take to learn Japanese at KANJI Japanese Language Center?', 'Your span of learning Japanese depends on your learning pace, as well as on the learning course that you begin. Usually, it takes 3-4 months when you begin at the first learning course.', 'How long does it take to learn Japanese at KANJI Japanese Language Center?', 'Your span of learning Japanese depends on your learning pace, as well as on the learning course that you begin. Usually, it takes 3-4 months when you begin at the first learning course.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `training_galleries`
--

CREATE TABLE `training_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_galleries`
--

INSERT INTO `training_galleries` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'https://recruitmentmyanmarsak.com/admin/uploads/files/qt76bxne_l1mkw4.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/fjoadrpz465hcmk.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/jfhrcued8oxpm23.jpg', NULL, NULL),
(2, 'https://recruitmentmyanmarsak.com/admin/uploads/files/qt76bxne_l1mkw4.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/fjoadrpz465hcmk.jpg,https://recruitmentmyanmarsak.com/admin/uploads/files/jfhrcued8oxpm23.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `student_application_forms`
--
ALTER TABLE `student_application_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_faqs`
--
ALTER TABLE `training_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_galleries`
--
ALTER TABLE `training_galleries`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_application_forms`
--
ALTER TABLE `student_application_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training_faqs`
--
ALTER TABLE `training_faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `training_galleries`
--
ALTER TABLE `training_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
