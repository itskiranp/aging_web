-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2024 at 07:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel11crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `databases`
--

CREATE TABLE `databases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`, `location`, `time`, `created_at`, `updated_at`, `short_description`) VALUES
(1, 'Annual Tech Conference', 'fdajkfjkajkdfjkadjkkhakkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '2024-11-10', ' Convention Center, 123 Main St, Anytown, USA', NULL, '2024-11-12 08:59:37', '2024-11-12 08:59:37', 'fsdjafkdkjfkajjkdjjfk'),
(2, 'Health and Wellness Expo', 'danfkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkabvjdjk', '2024-11-26', 'WeWork Office, London, UK', '8:00 AM - 6:00 PM', '2024-11-12 09:00:11', '2024-11-12 09:00:11', 'kldfnaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_page_contents`
--

CREATE TABLE `home_page_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carousel_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`carousel_images`)),
  `main_text` text DEFAULT NULL,
  `why_this_matters` text DEFAULT NULL,
  `collaborators` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`collaborators`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_contents`
--

INSERT INTO `home_page_contents` (`id`, `carousel_images`, `main_text`, `why_this_matters`, `collaborators`, `created_at`, `updated_at`) VALUES
(2, '[\"01JCBGY9RFHM55N6S8HXB88KFT.jpg\",\"01JCBHWBCX6Y8393TB8437M005.jpg\",\"01JCBHWBD081SSDBQ5CA7KV1PN.JPG\",\"01JCBHWBD37QC66PZPFCFRX6QB.JPG\"]', '<p>Welcome to our research initiative on International Labor Migration, Armed Conflict, and Alzheimer\'s Disease in Nepal. As Nepal\'s population ages, the country faces a rising number of adults at risk of Alzheimer\'s Disease and Related Dementias (ADRD). This study seeks to address a significant gap in research by investigating the potential impact of exposure to armed conflict, labor migration, and genetic-environmental interactions on ADRD risk in Nepal. Through rigorous data collection and analysis, we aim to guide the development of strategies to prevent and reduce the burden of ADRD in aging populations.</p><p>Our project, the Chitwan Valley Family Study on Cognition and Aging in Nepal (CVFS-SCAN), is designed to explore how aging impacts the health and cognition of older adults in Nepal. With a focus on ADRD, we aim to understand the prevalence, risk factors, and long-term effects of international labor migration and armed conflict on dementia and other age-associated conditions. By engaging over 4,000 adults aged 50 and older and their caregivers, our study aims to shed light on critical health issues facing the elderly in Nepal.</p>', '<p>With an aging population, Nepal needs to be prepared for the growing health challenges that accompany it. Understanding the factors that contribute to ADRD will allow us to develop prevention strategies and policies that reduce the burden of dementia on individuals, families, and communities. Our research will not only help Nepal but also provide valuable insights for other low-resource countries facing similar issues.</p>', '[\"01JCBHQHZEY1HZBDGZ657ETCS1.JPG\",\"01JCBHSFCKFW9HKQWXNPEHS92X.jpg\",\"01JCBHT1C9471HZ5RAHK8JZM8R.PNG\"]', '2024-11-10 11:26:29', '2024-11-11 02:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `investigators`
--

CREATE TABLE `investigators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text DEFAULT NULL,
  `profile_pdf` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investigators`
--

INSERT INTO `investigators` (`id`, `name`, `position`, `phone`, `email`, `bio`, `created_at`, `updated_at`, `description`, `profile_pdf`, `image`) VALUES
(1, 'PROF. DR. DIRGHA JIBI GHIMIRE', 'PRINCIPAL INVESTIGATOR', '(734) 763-8649', 'nepdjg@umich.edu', 'Director – Institute for Social & Environment Research – Nepal \n                        Research Professor, Population Studies Center Ph.D. Sociology and Demography, University of Michigan', '2024-09-25 10:24:38', '2024-10-21 08:57:27', 'Dr. Ghimire studies social change, developmental idealism, family and demography, population and\n                        environment dynamics. His research within family and demography revolves around three sub areas-\n                        marriage (marital arrangement, marital relationship and relationship dynamics), childbearing (timing\n                        of first birth), and fertility limitation (contraceptive use). In addition, he also studies\n                        reproductive health, HIV/AIDS and mental health and well-being. Another major area of Dr. Ghimire’s\n                        research focuses on understanding of the interplay between population and environmental processes\n                        (reciprocal impacts of population processes on land use and terrestrial biodiversity, and\n                        environmental degradation on childbearing, contraceptive use, individual mobility and household\n                        energy use). More recently his work has focused on ideational aspects of these substantive areas.', 'uploads/01JAQ5QCGGS6GSWKX364MYN281.pdf', 'images/01JAQRF16F0G1M33JPQQJ7CY3P.jpg'),
(2, 'Dr. Carlos Mendes de Leon', 'Co-INVESTIGATOR', ' 734-615-2134', 'cmendes@umich.edu', 'Professor of Epidemiology, Ph.D., University of Michigan', '2024-09-25 11:25:14', '2024-10-21 09:36:36', 'Prof. Dr. Carlos F. Mendes de Leon is a professor of Epidemiology at the University of Michigan. His\n                        research involves epidemiology of late life health, social epidemiology, health disparities,\n                        psychosocial risk factors for disease and disability, longitudinal methods. He is Co-Principal\n                        Investigator of the study and as Co-PI, Mendes de Leon jointly with Dr. Ghimire will oversee all\n                        administrative and scientific aspects of the proposed research plan, including coordination among\n                        project collaborators, project planning, design and refinement of data collection instruments to\n                        measure ADRD, and venomous blood sample collection for genotyping. In the analysis portion of the\n                        project, he will lead the estimate of prevalence rate and socioeconomic predictors of ADRD. He will\n                        work closely together with Dr. Ghimire, Dr. Briceno-Abreu, Dr. Mitchel and Dr. Langa to oversee all\n                        study activities involved in this project.', NULL, 'images/01JAQTPQM5ZPX425YDNT0Y8XAQ.jpg'),
(6, 'Dr. Emily Briceno-Abreu', 'Co-INVESTIGATOR', '866-909-4449', 'emilande@umich.edu', 'Clinical Neuropsychologist and Clinical Associate Professor- in the department of\n                        Physical Medicine and Rehabilitation at the University of Michigan.', '2024-09-26 01:15:46', '2024-10-21 05:25:13', 'As a clinical neuropsychologist, she has extensive training, and clinical and research experience in\n                        neuropsychology with diverse patient populations, including the neuropsychological assessment of\n                        dementia. She is currently an investigator on several NIH-funded studies, including several studies\n                        that use the Harmonized Cognitive Assessment Protocol (HCAP), the cognitive assessment protocol for\n                        the current project. Dr. Briceno-Abreu is Co-PI of a NIA funded R24 pilot project, which aims to\n                        utilize cultural neuropsychological procedures to optimize cross national comparisons of cognitive\n                        assessment data from studies within the HCAP International Network. She is also a Co-Investigator on\n                        the NIH-funded BASIC-Cognitive study, an R01 that aims to ascertain the prevalence and impact of\n                        dementia in Mexican Americans, and on another R01 in this cohort that aims to examine caregiver\n                        decision-making and longer-term cognitive trajectories across Mexican Americans and non-Hispanic\n                        whites. These projects use the HCAP instruments to assess cognitive health and its trajectories in\n                        this culturally and linguistically diverse population. As the neuropsychologist investigator, she\n                        will be responsible for the implementation and interpretation of the HCAP assessments, particularly\n                        in considering the impact of demographic, linguistic, and cultural factors to optimize precision in\n                        measurement of cognition. She will also develop and provide training for the field office staff on\n                        cognitive testing with the HCAP assessment instrument and oversee quality assurance. In addition she\n                        will also be involved in data analysis, and presentation and publication of results. In the analysis\n                        portion of the project, he will lead the analyses of international migration and ADRD.', NULL, 'images/01JAQCADX36K6Z9Z84YSVRFBJB.jpg'),
(7, 'Dr. Colter Mitchell', 'Co-INVESTIGATOR', '(734) 615-1724', 'cmsm@umich.edu', 'Associate Professor- in the Survey Research Center, PhD., University of Michigan', '2024-09-26 01:18:32', '2024-10-21 05:25:43', 'Prof. Dr. Colter Mitchell is Director of Population, Neurodevelopment, and Genetics\n                        Program; Research Associate Professor, Survey Research Center, Population Studies Center, and\n                        Department of Sociology; Co-Director, Institute for Social Research Bio specimen Lab University of\n                        Michigan. Dr. Mitchell’s research utilizes a range of biological data types such as epigenetics,\n                        neuroimaging, and genetics to better understand how social conditions shape population health. In\n                        particular his work uses these biomarkers to elucidate pathways by which social inequalities cause\n                        health inequalities. This research uses longitudinal population-based studies. He is Co-Investigator\n                        in the project and will be responsible for overseeing the analysis linking genetic propensity,\n                        international labor migration to ADRD.', NULL, 'images/01JAQCBB2DJSPXN25GJ8RJ7Y65.jpg'),
(8, 'Dr. Kenneth M. Langa', 'Co-INVESTIGATOR', '(734) 647-8160', 'klanga@umich.edu', 'Cyrus Sturgis Professor- of Medicine at the University of\n                        Michigan, Associate Director- of the Institute of Gerontology and for the Health\n                        and Retirement Study (HRS). Research Investigator- in the Ann Arbor Veterans\n                        Affairs (VA) Center for Clinical Management Research.', '2024-09-26 01:38:39', '2024-10-21 05:26:06', 'His research has focused on the risk factors and outcomes for chronic disease in older adults, with\n                        a special emphasis on Alzheimer’s disease and other dementias, and has published more than 225\n                        peer-reviewed articles on these topics. He has collaborated with the HRS study team since 1998. Dr.\n                        Langa was Lead Investigator on the original HRS dementia sub-study, the ADAMS, from 2002 through\n                        2010, and a Co-Investigator on the HRS-HCAP competing revision, working closely with David Weir in\n                        developing the HCAP protocol fielded by the HRS in 2016. Dr. Langa currently serves as the Principal\n                        Investigator of the NIA-funded HRS-HCAP study. He will provide expertise in aligning the HCAP\n                        cognitive assessment and dementia algorithms in this study with those applied in other international\n                        studies of dementia, in particular the HRS Network of Studies on Aging. Dr. Langa will provide\n                        guidance on overall implementation of HCAP.', NULL, 'images/01JAQCC1X6CGY899GVGFBEPTAG.JPG'),
(9, 'Dr. Uttam Sharma', 'Co-INVESTIGATOR', '(734) 615-1724', 'cmsm@umich.edu', 'Researcher .Phd.', '2024-09-26 01:40:45', '2024-10-21 05:26:54', 'Dr. Uttam Sharma is an applied economist with more than 10 years of experience conducting research in topics related to agriculture, education, and labor market in Bangladesh, Kenya, Nepal, Nigeria and Tanzania. He was a Co-Principal Investigator (co-PI) on 3ie-funded projects in Kenya and Nepal, and a Co-Investigator in a DFID/ESRC-funded study in Nepal. As a Co-Investigator, his responsibilities on this project include overseeing field operation (acquiring ethical and necessary government approval, validation of research instrument, staff recruitment, training data collection staff and supervision of data collection and data management) in Nepal and coordinating between Nepali and US investigators.  In addition, Dr. Sharma will be involved in all phases of data cleaning and coding, data analysis, writing manuscripts, and presenting scientific results. In the analysis portions of the project, he will collaborate with the research team on the analyses of the associations between socioeconomic status, family dynamics, and ADRD.', NULL, 'images/01JAQCDGTAGCVR50PWHR1EZ3ES.jpg'),
(10, 'Dr. Meeta Sainju Pradhan', 'Co-INVESTIGATOR', '(734) 615-1724', 'cmsm@umich.edu', 'Sociologist and Research Scientist at ISER-N', '2024-09-26 01:42:03', '2024-10-21 05:27:18', 'Dr. Meeta Sainju Pradhan is a sociologist and Research Scientist at ISER-N and contributes her expertise on gender equality and social inclusion in the social, economic and political life in Nepal. Dr. Pradhan’s research focuses on poverty alleviation, gender equality, and social inclusion (encompassing exclusion from basic rights of groups based on differences in gender, caste, ethnicity, class, geography/region, sexual and gender minorities, persons with disabilities, elderly populations, etc.). The combination of her experiences and insights adds value to this project. As a Co-Investigator, Dr. Pradhan’s responsibilities on this project include providing gender perspective on research instrument translation, validation, and research staff training. She will also be involved in data analysis, writing manuscripts, and presenting scientific results. In the analysis portions of the project, she will collaborate with the research team on the estimation of associations between gender, disadvantage status and ADRD.', NULL, 'images/01JAQCE7K8AG6J9KNS61MP0S2Y.jpg'),
(11, 'Dr. Pankaj Jalan', 'Co-INVESTIGATOR', '(734) 615-1724', 'cmsm@umich.edu', 'Neurologist', '2024-09-26 01:43:30', '2024-10-21 05:27:37', 'Dr. Pankaj Jalan is a neurologist and has over a decade of experience in evaluating and treating patients with cognitive disorders from all over Nepal and encounters many patients with Alzheimer disease and related dementias. Dr. Jalan has completed neurology training at S.I.U. School of Medicine and is a board-certified neurologist. He provides expertise in an S.I.U. Memory and Aging Clinic which included training and research on ADRD. As Co-Investigator, his responsibilities on this project include overseeing the translation of the cognitive assessment tools, testing and validating the cognitive assessment tools, blood sample collection and shipping protocol and training Nepali research staff on the cognitive assessments. Dr. Jalan will work in close collaboration with the research team, especially Dr. Sharma, Rai, Pradhan, and the ISER-N research staff on translating the cognitive assessment tools; Dr. Briceno and the ISER-N research staff on testing and validating the cognitive measures; and Dr. Briceno on training of the cognitive assessment and ADRD measures. His extensive experience in evaluating and treating patients with cognitive disorders is particularly valuable for this project. Dr. Jalan will also be involved in writing manuscripts, and presenting scientific results. In the analysis portions of the project, he will collaborate with the research team on estimation of population based ADRD prevalence rate and the analyses of the associations between international migration, armed conflict and ADRD.', NULL, 'images/01JAQCEV1YE1JFK44717VAADRC.JPG'),
(12, 'Dr. Janak Rai', 'Co-INVESTIGATOR', '(734) 615-1724', 'cmsm@umich.edu', 'Cultural Anthropologist and Associate Professor, Tribhuvan University', '2024-09-26 01:48:40', '2024-10-21 05:28:11', 'Prof. Dr. Janak Rai is a cultural anthropologist and Associate Professor at Tribhuvan University and has extensive knowledge on the fabric of the Nepali population and culture to inform the content and translation of survey instruments. As a Co-Investigator, his responsibilities on this project include providing cultural perspective on research instrument translation, validation, and research staff training. Dr. Rai will be involved in qualitative data analysis, writing manuscripts, and presenting scientific results. In the analysis portions of the project, he will collaborate with the research team on the analyses of the associations between religio-ethnic status, armed conflict and ADRD.', NULL, 'images/01JAQCFVXNPFD75RZG01NH23KF.png');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(6, '2024_09_03_091837_create_products_table', 2),
(7, '2024_09_04_060654_create_publications_table', 2),
(8, '2024_09_04_065745_create_databases_table', 2),
(9, '2024_09_04_065925_create_abdatabases_table', 2),
(10, '2024_09_07_061259_create_publications_table', 3),
(11, '2024_09_09_053158_create_conferenceposters_table', 4),
(12, '2024_09_12_071523_add_is_admin_to_users_table', 5),
(13, '2024_09_25_152205_create_investigators_table', 5),
(14, '2024_09_25_170257_add_description_to_investigators_table', 6),
(15, '2024_09_26_065422_create_media_table', 7),
(16, '2024_09_30_054910_add_profile_pdf_to_investigators_table', 8),
(17, '2024_09_30_063020_update_investigators_table', 9),
(18, '2024_10_19_054246_create_staff_table', 10),
(19, '2024_10_21_103542_rename_profile_pic_to_image_in_investigators_table', 11),
(20, '2024_10_28_044745_drop_publications_table', 12),
(21, '2024_10_28_045656_drop_abdatabases_table', 13),
(22, '2024_10_28_045941_drop_conferenceposters_table', 14),
(27, '2024_10_29_045417_create_publications_table', 15),
(28, '2024_11_07_143925_create_events_table', 15),
(29, '2024_11_07_160438_add_short_description_to_events_table', 15),
(30, '2024_11_10_043217_create_home_page_contents_table', 15),
(34, '2024_11_10_163244_create_home_page_contents', 16);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'product1', '1234', 1200000, NULL, NULL, '2024-09-04 02:41:12', '2024-09-04 02:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authors` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `journal` varchar(255) DEFAULT NULL,
  `year` year(4) NOT NULL,
  `doi` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8G9UlRqa8cVtfjBUWYOi9DrYf4BsKzCQnPt563Bh', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVhPaVFsV3VxbUJtTGtlTU00Zk1KTEEzQzlqVUI1UWIxVkpra2F2USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732866827);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cv_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `position`, `image`, `email`, `cv_link`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Dr. Dirgha J. Ghimire', 'EXECUTIVE DIRECTOR', 'images/01JAHVHAMFEYXWQP34J369AEXW.jpeg', 'nepdjg@umich.edu', 'uploads/01JAHTRGK9XDXP6QRE9PP90MWE.pdf', '2024-10-19 00:23:25', '2024-10-19 01:55:41'),
(2, 'Mrs. Indra Kumari Chaudhary', 'PROGRAM COORDINATOR', 'images/01JAHVKBQK8BZH1CCRM5VXNJ3Q.JPG', 'indraiser@outlook.com', 'uploads/01JAHVKBQQV5116S8MSTXFEFR0.pdf', '2024-10-19 00:29:39', '2024-10-19 01:56:48'),
(3, 'Mr. Hardik Sapkota', 'PROJECT MANAGER', NULL, NULL, NULL, '2024-10-19 00:34:23', '2024-10-19 00:34:23'),
(4, 'Mr. Prem Prakash Pandit', 'STUDY MANAGER', 'images/01JAHVMT7GB35MMXHJEN4BYBBN.jpg', 'premiser@outlook.com', 'uploads/01JAHVMT7J1XQY9AJMPE46JKSF.pdf', '2024-10-19 00:35:38', '2024-10-19 01:57:35'),
(5, 'Mrs. Adina Gurung', 'DATA MANAGER', 'images/01JAHVP9NGJVP23NRD7K02RM1A.jpg', 'adinaiser@outlook.com', 'uploads/01JAHVP9NJJVBMPTEMTSCNX5HT.pdf', '2024-10-19 00:37:57', '2024-10-19 01:58:24'),
(6, 'Mr. Rajendra Ghimire', 'RESEARCH OFFICER', 'images/01JAHV6679T4HKKKQN6GMA94NS.jpg', 'rajendraiser@outlook.com', 'uploads/01JAHV667B6Y28YTBEPSXC2708.pdf', '2024-10-19 01:49:36', '2024-10-19 01:49:36'),
(7, 'Mr. Krishna Shrestha', 'RESEARCH OFFICER', 'images/01JAHVRH9RZAFJT9EBVQ6MHQR6.jpg', 'kshresthatiser@outlook.com', 'uploads/01JAHVRH9T59RM5HECVY6WP5YJ.pdf', '2024-10-19 01:59:37', '2024-10-19 01:59:37'),
(8, 'Mr. Saujanya Wagle', 'RESEARCH OFFICER - ANALYST', 'images/01JAHVVTNVQQFV5H7M4G8GMK75.jpg', 'wsaujanya@gmail.com', 'uploads/01JAHVVTNX963GQNKR2K6EMB49.pdf', '2024-10-19 02:01:25', '2024-10-19 02:01:25'),
(9, 'Mrs. Gita Subedi', 'FINANCE OFFICER', 'images/01JAHVYAJ5E5RG1D152F1BA1VE.jpeg', NULL, 'uploads/01JAHVYAJ7MJSZ5SDHFM6BW20X.pdf', '2024-10-19 02:02:47', '2024-10-19 02:02:47'),
(10, 'Mr. Mangal Raj Darai', 'ASST. ACCOUNT OFFICER', 'images/01JAHVZWSKM4VPP0S6GDG6Q9RV.jpg', NULL, NULL, '2024-10-19 02:03:38', '2024-10-19 02:03:38'),
(11, 'Dil Bahadur C.K.', 'ASST. ACCOUNT OFFICER', 'images/01JAHW3N1D61KW779MEJJARJXZ.jpeg', NULL, NULL, '2024-10-19 02:05:41', '2024-10-19 02:05:41'),
(12, 'Sundari Lama', 'ASST. ACCOUNT OFFICER', 'images/01JAHW4JG7ADE515ZAF97F5A1V.jpg', NULL, NULL, '2024-10-19 02:06:12', '2024-10-19 02:06:12'),
(13, 'Nira Gurung', 'ASST. RESEARCH OFFICER', 'images/01JAHW5EKR2RX06SEC4F21GSSB.jpg', NULL, NULL, '2024-10-19 02:06:40', '2024-10-19 02:06:40'),
(14, 'Sita Chaudhary', 'ASST. RESEARCH OFFICER', 'images/01JAHW6PHF25CEE3YR1PQ9DF4H.jpg', NULL, NULL, '2024-10-19 02:07:21', '2024-10-19 02:07:21'),
(15, 'Govinda Lamichhane', 'ASST. RESEARCH OFFICER', 'images/01JAHW7MPEXNZPYA7B2SF1JQJH.jpg', NULL, NULL, '2024-10-19 02:07:52', '2024-10-19 02:07:52'),
(16, 'Kamana Ghimire', 'ASST. RESEARCH OFFICER', 'images/01JAHW8NH60EN63ZSMRCPDV2ZK.jpg', NULL, NULL, '2024-10-19 02:08:26', '2024-10-19 02:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$J3IVFhULdoIEUO6MKRcNNuoMTaTtliKIQKInNVOIIBYlarZpTyXF.', NULL, '2024-09-12 00:05:18', '2024-09-12 00:05:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `databases`
--
ALTER TABLE `databases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_page_contents`
--
ALTER TABLE `home_page_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investigators`
--
ALTER TABLE `investigators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `databases`
--
ALTER TABLE `databases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_page_contents`
--
ALTER TABLE `home_page_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `investigators`
--
ALTER TABLE `investigators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
