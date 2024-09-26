-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2024 at 09:40 AM
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
-- Table structure for table `abdatabases`
--

CREATE TABLE `abdatabases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1727336076),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1727336076;', 1727336076),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1727318744),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1727318744;', 1727318744);

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
-- Table structure for table `conferenceposters`
--

CREATE TABLE `conferenceposters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `authors` text NOT NULL,
  `journal` varchar(255) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `doi` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conferenceposters`
--

INSERT INTO `conferenceposters` (`id`, `title`, `authors`, `journal`, `year`, `doi`, `created_at`, `updated_at`) VALUES
(1, 'Apolipoprotein E genotype, cognitive performance, and dementia in Hispanic populations.', 'Llibre‐Guerra, J. J., Li, J., Qian, Y., Llibre-Rodriguez, J., Jiménez‐Velázquez, I. Z., Acosta, D., Salas, A., Harrati, A., Weiss, J., Liu, M.-M. & Dow, W. H.', 'Alzheimer’s Association International Conference', '2021', 'https://populationsciences.berkeley.edu/wp-content/uploads/2021/10/PosterApoE1.pdf', NULL, NULL),
(2, 'The Caribbean-American Dementia and Aging Study (CADAS): a multinational initiative to address dementia in Caribbean populations.', 'Llibre‐Guerra, J. J., Li, J., Harrati, A., Jiménez‐Velázquez, I. Z., Acosta, D., Llibre-Rodriguez, J., Liu, M.-M. & Dow, W. H. ', 'Alzheimer’s Association International Conference', '2021', 'https://populationsciences.berkeley.edu/wp-content/uploads/2021/10/PosterCADAS1.pdf', NULL, NULL);

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
-- Table structure for table `investigators`
--

CREATE TABLE `investigators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investigators`
--

INSERT INTO `investigators` (`id`, `name`, `position`, `phone`, `email`, `bio`, `profile_image`, `created_at`, `updated_at`, `description`) VALUES
(1, 'PROF. DR. DIRGHA JIBI GHIMIRE', 'PRINCIPAL INVESTIGATOR', '(734) 763-8649', 'nepdjg@umich.edu', 'Director – Institute for Social & Environment Research – Nepal \n                        Research Professor, Population Studies Center Ph.D. Sociology and Demography, University of Michigan', 'images/01J8P5H7JMEXGQRRBXNA1YNWNE.jpg', '2024-09-25 10:24:38', '2024-09-25 21:35:58', 'Dr. Ghimire studies social change, developmental idealism, family and demography, population and\n                        environment dynamics. His research within family and demography revolves around three sub areas-\n                        marriage (marital arrangement, marital relationship and relationship dynamics), childbearing (timing\n                        of first birth), and fertility limitation (contraceptive use). In addition, he also studies\n                        reproductive health, HIV/AIDS and mental health and well-being. Another major area of Dr. Ghimire’s\n                        research focuses on understanding of the interplay between population and environmental processes\n                        (reciprocal impacts of population processes on land use and terrestrial biodiversity, and\n                        environmental degradation on childbearing, contraceptive use, individual mobility and household\n                        energy use). More recently his work has focused on ideational aspects of these substantive areas.'),
(2, 'Dr. Carlos Mendes de Leon', 'Co-INVESTIGATOR', ' 734-615-2134', 'cmendes@umich.edu', 'Professor of Epidemiology, Ph.D., University of Michigan', 'images/01J8N2JYTF3MZQ6TVZMJGCAC35.jpg', '2024-09-25 11:25:14', '2024-09-25 11:25:14', 'Prof. Dr. Carlos F. Mendes de Leon is a professor of Epidemiology at the University of Michigan. His\n                        research involves epidemiology of late life health, social epidemiology, health disparities,\n                        psychosocial risk factors for disease and disability, longitudinal methods. He is Co-Principal\n                        Investigator of the study and as Co-PI, Mendes de Leon jointly with Dr. Ghimire will oversee all\n                        administrative and scientific aspects of the proposed research plan, including coordination among\n                        project collaborators, project planning, design and refinement of data collection instruments to\n                        measure ADRD, and venomous blood sample collection for genotyping. In the analysis portion of the\n                        project, he will lead the estimate of prevalence rate and socioeconomic predictors of ADRD. He will\n                        work closely together with Dr. Ghimire, Dr. Briceno-Abreu, Dr. Mitchel and Dr. Langa to oversee all\n                        study activities involved in this project.'),
(6, 'Dr. Emily Briceno-Abreu', 'Co-INVESTIGATOR', '866-909-4449', 'emilande@umich.edu', 'Clinical Neuropsychologist and Clinical Associate Professor- in the department of\n                        Physical Medicine and Rehabilitation at the University of Michigan.', 'images/01J8PJ3PJXC9525EGYHWGM1SF5.jpg', '2024-09-26 01:15:46', '2024-09-26 01:15:46', 'As a clinical neuropsychologist, she has extensive training, and clinical and research experience in\n                        neuropsychology with diverse patient populations, including the neuropsychological assessment of\n                        dementia. She is currently an investigator on several NIH-funded studies, including several studies\n                        that use the Harmonized Cognitive Assessment Protocol (HCAP), the cognitive assessment protocol for\n                        the current project. Dr. Briceno-Abreu is Co-PI of a NIA funded R24 pilot project, which aims to\n                        utilize cultural neuropsychological procedures to optimize cross national comparisons of cognitive\n                        assessment data from studies within the HCAP International Network. She is also a Co-Investigator on\n                        the NIH-funded BASIC-Cognitive study, an R01 that aims to ascertain the prevalence and impact of\n                        dementia in Mexican Americans, and on another R01 in this cohort that aims to examine caregiver\n                        decision-making and longer-term cognitive trajectories across Mexican Americans and non-Hispanic\n                        whites. These projects use the HCAP instruments to assess cognitive health and its trajectories in\n                        this culturally and linguistically diverse population. As the neuropsychologist investigator, she\n                        will be responsible for the implementation and interpretation of the HCAP assessments, particularly\n                        in considering the impact of demographic, linguistic, and cultural factors to optimize precision in\n                        measurement of cognition. She will also develop and provide training for the field office staff on\n                        cognitive testing with the HCAP assessment instrument and oversee quality assurance. In addition she\n                        will also be involved in data analysis, and presentation and publication of results. In the analysis\n                        portion of the project, he will lead the analyses of international migration and ADRD.'),
(7, 'Dr. Colter Mitchell', 'Co-INVESTIGATOR', '(734) 615-1724', 'cmsm@umich.edu', 'Associate Professor- in the Survey Research Center, PhD., University of Michigan', 'images/01J8PJ8RDHMA5HVBMWDGYCRTQH.jpg', '2024-09-26 01:18:32', '2024-09-26 01:18:32', 'Prof. Dr. Colter Mitchell is Director of Population, Neurodevelopment, and Genetics\n                        Program; Research Associate Professor, Survey Research Center, Population Studies Center, and\n                        Department of Sociology; Co-Director, Institute for Social Research Bio specimen Lab University of\n                        Michigan. Dr. Mitchell’s research utilizes a range of biological data types such as epigenetics,\n                        neuroimaging, and genetics to better understand how social conditions shape population health. In\n                        particular his work uses these biomarkers to elucidate pathways by which social inequalities cause\n                        health inequalities. This research uses longitudinal population-based studies. He is Co-Investigator\n                        in the project and will be responsible for overseeing the analysis linking genetic propensity,\n                        international labor migration to ADRD.'),
(8, 'Dr. Kenneth M. Langa', 'Co-INVESTIGATOR', '(734) 647-8160', 'klanga@umich.edu', 'Cyrus Sturgis Professor- of Medicine at the University of\n                        Michigan, Associate Director- of the Institute of Gerontology and for the Health\n                        and Retirement Study (HRS). Research Investigator- in the Ann Arbor Veterans\n                        Affairs (VA) Center for Clinical Management Research.', 'images/01J8PKDKY4YC10FNMKP95YXC0N.JPG', '2024-09-26 01:38:39', '2024-09-26 01:38:39', 'His research has focused on the risk factors and outcomes for chronic disease in older adults, with\n                        a special emphasis on Alzheimer’s disease and other dementias, and has published more than 225\n                        peer-reviewed articles on these topics. He has collaborated with the HRS study team since 1998. Dr.\n                        Langa was Lead Investigator on the original HRS dementia sub-study, the ADAMS, from 2002 through\n                        2010, and a Co-Investigator on the HRS-HCAP competing revision, working closely with David Weir in\n                        developing the HCAP protocol fielded by the HRS in 2016. Dr. Langa currently serves as the Principal\n                        Investigator of the NIA-funded HRS-HCAP study. He will provide expertise in aligning the HCAP\n                        cognitive assessment and dementia algorithms in this study with those applied in other international\n                        studies of dementia, in particular the HRS Network of Studies on Aging. Dr. Langa will provide\n                        guidance on overall implementation of HCAP.'),
(9, 'Dr. Uttam Sharma', 'Co-INVESTIGATOR', '(734) 615-1724', 'cmsm@umich.edu', 'Researcher .Phd.', 'images/01J8PKHETANH22F2BNNEEHV60S.jpg', '2024-09-26 01:40:45', '2024-09-26 01:40:45', 'Dr. Uttam Sharma is an applied economist with more than 10 years of experience conducting research in topics related to agriculture, education, and labor market in Bangladesh, Kenya, Nepal, Nigeria and Tanzania. He was a Co-Principal Investigator (co-PI) on 3ie-funded projects in Kenya and Nepal, and a Co-Investigator in a DFID/ESRC-funded study in Nepal. As a Co-Investigator, his responsibilities on this project include overseeing field operation (acquiring ethical and necessary government approval, validation of research instrument, staff recruitment, training data collection staff and supervision of data collection and data management) in Nepal and coordinating between Nepali and US investigators.  In addition, Dr. Sharma will be involved in all phases of data cleaning and coding, data analysis, writing manuscripts, and presenting scientific results. In the analysis portions of the project, he will collaborate with the research team on the analyses of the associations between socioeconomic status, family dynamics, and ADRD.'),
(10, 'Dr. Meeta Sainju Pradhan', 'Co-INVESTIGATOR', '(734) 615-1724', 'cmsm@umich.edu', 'Bio...', 'images/01J8PKKTEEMSWFN0H4GJBD60TS.jpg', '2024-09-26 01:42:03', '2024-09-26 01:42:03', 'Dr. Meeta Sainju Pradhan is a sociologist and Research Scientist at ISER-N and contributes her expertise on gender equality and social inclusion in the social, economic and political life in Nepal. Dr. Pradhan’s research focuses on poverty alleviation, gender equality, and social inclusion (encompassing exclusion from basic rights of groups based on differences in gender, caste, ethnicity, class, geography/region, sexual and gender minorities, persons with disabilities, elderly populations, etc.). The combination of her experiences and insights adds value to this project. As a Co-Investigator, Dr. Pradhan’s responsibilities on this project include providing gender perspective on research instrument translation, validation, and research staff training. She will also be involved in data analysis, writing manuscripts, and presenting scientific results. In the analysis portions of the project, she will collaborate with the research team on the estimation of associations between gender, disadvantage status and ADRD.'),
(11, 'Dr. Pankaj Jalan', 'Co-INVESTIGATOR', '(734) 615-1724', 'cmsm@umich.edu', 'bio..', 'images/01J8PKPF9G95EM1AXRVWP37E2V.JPG', '2024-09-26 01:43:30', '2024-09-26 01:43:30', 'Dr. Pankaj Jalan is a neurologist and has over a decade of experience in evaluating and treating patients with cognitive disorders from all over Nepal and encounters many patients with Alzheimer disease and related dementias. Dr. Jalan has completed neurology training at S.I.U. School of Medicine and is a board-certified neurologist. He provides expertise in an S.I.U. Memory and Aging Clinic which included training and research on ADRD. As Co-Investigator, his responsibilities on this project include overseeing the translation of the cognitive assessment tools, testing and validating the cognitive assessment tools, blood sample collection and shipping protocol and training Nepali research staff on the cognitive assessments. Dr. Jalan will work in close collaboration with the research team, especially Dr. Sharma, Rai, Pradhan, and the ISER-N research staff on translating the cognitive assessment tools; Dr. Briceno and the ISER-N research staff on testing and validating the cognitive measures; and Dr. Briceno on training of the cognitive assessment and ADRD measures. His extensive experience in evaluating and treating patients with cognitive disorders is particularly valuable for this project. Dr. Jalan will also be involved in writing manuscripts, and presenting scientific results. In the analysis portions of the project, he will collaborate with the research team on estimation of population based ADRD prevalence rate and the analyses of the associations between international migration, armed conflict and ADRD.'),
(12, 'Dr. Janak Rai', 'Co-INVESTIGATOR', '(734) 615-1724', 'cmsm@umich.edu', 'bio', 'images/01J8PKZY7RMHPCYR41C4S5ZE3E.png', '2024-09-26 01:48:40', '2024-09-26 01:48:40', 'Prof. Dr. Janak Rai is a cultural anthropologist and Associate Professor at Tribhuvan University and has extensive knowledge on the fabric of the Nepali population and culture to inform the content and translation of survey instruments. As a Co-Investigator, his responsibilities on this project include providing cultural perspective on research instrument translation, validation, and research staff training. Dr. Rai will be involved in qualitative data analysis, writing manuscripts, and presenting scientific results. In the analysis portions of the project, he will collaborate with the research team on the analyses of the associations between religio-ethnic status, armed conflict and ADRD.');

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
(15, '2024_09_26_065422_create_media_table', 7);

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
  `title` varchar(255) NOT NULL,
  `authors` text NOT NULL,
  `journal` varchar(255) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `volume_issue` varchar(50) DEFAULT NULL,
  `doi` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `title`, `authors`, `journal`, `year`, `volume_issue`, `doi`, `created_at`, `updated_at`) VALUES
(1, 'Dementia Research in the Caribbean Hispanic Islands: Present Findings and Future Trends', 'Acosta, D. M., Llibre-Guerra, J. J., Jiménez-Velázquez, I. Z., & Llibre-Rodríguez, J. J.', 'Frontiers in Public Health,', '2020', '8, 1046', 'https://www.frontiersin.org/journals/public-health/articles/10.3389/fpubh.2020.611998/full', NULL, NULL),
(2, 'Associations between education and dementia in the Caribbean and the United States: An international comparison.', 'Li, J., Llibre‐Guerra, J. J., Harrati, A., Weiss, J., Jiménez‐Velázquez, I. Z., Acosta, D., Llibre-Rodriguez, J., Liu, M. M. & Dow, W. H.', 'Alzheimer’s & Dementia: Translational Research & Clinical Interventions,', '2021', '7(1), e12204', 'https://alz-journals.onlinelibrary.wiley.com/doi/pdfdirect/10.1002/trc2.12204', NULL, NULL),
(3, 'Cuba’s cardiovascular risk factors: International comparison of levels and education gradients.', 'Dieci, M., Llibre-Rodriguez, J. J., Acosta, D., & Dow, W. H.', 'Plos One,', '2021', '16(3), e0247831,', 'https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0247831', NULL, NULL),
(4, 'Color disparities in cognitive aging among Puerto Ricans on the archipelago', 'Liu, M. M., Crowe, M., Telles, E. Jiménez Velázquez, I. Z. & Dow, W. H.', 'SSM – Population Health,', '2022', 'volume 17, 100998,', 'https://pubmed.ncbi.nlm.nih.gov/35231118/', NULL, NULL),
(5, 'Race/Ethnic Differences, Skin Tone and Cognitive Aging among Older Latinos in the U.S.', 'Liu, M. M., Telles, E., Tucker, K., Jiménez‐Velázquez, I. Z., & Dow, W. H.', 'The Journals of Gerontology: Series B', '2022', 'gbac043,', 'https://pubmed.ncbi.nlm.nih.gov/35231118/', NULL, NULL),
(6, 'Apolipoprotein E (APOE) genotype, dementia, and memory performance among Caribbean Hispanic versus US populations.', 'Llibre-Guerra, J. J., Li, J., Qian, Y., Llibre-Rodriguez, J. J., Jiménez-Velázquez, I. Z., Acosta, D., Salas, A., Llibre-Guerra, J. C., Valvuerdi, A., Harrati, A., Weiss, J., Liu, M. M., & Dow, W. H.', 'Alzheimer’s & dementia : the journal of the Alzheimer’s Association,', '2022', '10.1002/alz.12699,', 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC10754385/', NULL, NULL),
(7, 'Dementia Attributable Healthcare Utilizations in the Caribbean versus United States', 'Li J, Weiss J, Rajadhyaksha A, Acosta D, Harrati A, Jiménez Velázquez IZ, Liu MM, Guerra JJL, Rodriguez JJL, Dow WH.', 'J Alzheimers Dis. ', '2023', '96(2):801-811', 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC10754385/', NULL, NULL);

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
('387tda2a8X6KEp3WFb01x0OsKKEGFCIg1Q4vAudc', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiVnUwWTV5OHZ5WUlZdGZpTjB2azE1NkhYeVVjTnVPcEhXYjRrNXlkdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbnZlc3RpZ2F0b3JzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRKM0lWRmhVTGRvSUVVTzZNS1JjTk51b01UYVR0bGlLSVFLSW5OVk9JSUJZbGFyWnBUeVhGLiI7czo4OiJmaWxhbWVudCI7YTowOnt9czo2OiJ0YWJsZXMiO2E6MTp7czoyNjoiTGlzdEludmVzdGlnYXRvcnNfcGVyX3BhZ2UiO3M6MToiNSI7fX0=', 1727336365);

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
-- Indexes for table `abdatabases`
--
ALTER TABLE `abdatabases`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `conferenceposters`
--
ALTER TABLE `conferenceposters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `databases`
--
ALTER TABLE `databases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abdatabases`
--
ALTER TABLE `abdatabases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conferenceposters`
--
ALTER TABLE `conferenceposters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `databases`
--
ALTER TABLE `databases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investigators`
--
ALTER TABLE `investigators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
