-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2026 at 01:02 PM
-- Server version: 11.8.3-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jabes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog_summery` varchar(10000) NOT NULL,
  `blog_description` longtext NOT NULL,
  `slug` text DEFAULT NULL,
  `author` varchar(250) DEFAULT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_image`, `blog_summery`, `blog_description`, `slug`, `author`, `active_flag`, `created_at`, `updated_at`) VALUES
(1, 'Importance of Regular Health Checkups for a Healthy Life', '2025/08/20/1755669538_blog-5.jpg', 'Regular health checkups are the foundation of preventive healthcare. They help detect hidden diseases early, reduce complications, and improve quality of life.', '<p>In today&rsquo;s fast-paced world, many people ignore their health until symptoms become severe. Unfortunately, by the time visible signs appear, the condition might already have progressed. This is why regular health checkups are so important &mdash; they provide an opportunity to detect diseases early, when they are most treatable.</p>\r\n\r\n<p>At <strong>Pavan Sai Hospital</strong>, we emphasize preventive healthcare as the key to long-term wellness. Regular checkups help identify risk factors for lifestyle diseases like diabetes, hypertension, heart disease, thyroid disorders, and certain types of cancer. Even if you feel healthy, silent conditions may be developing in the background.</p>\r\n\r\n<h3>Why are Regular Checkups Important?</h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Early Detection Saves Lives</strong> &ndash; Conditions like cancer, heart disease, and diabetes can be detected early with routine screenings, giving patients the best chance for recovery.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Cost-Effective</strong> &ndash; Treating an illness in its early stages is far less expensive compared to late-stage treatments.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Better Lifestyle Guidance</strong> &ndash; Doctors can give personalized advice on diet, exercise, and habits after evaluating your reports.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Peace of Mind</strong> &ndash; Knowing that you are healthy reduces stress and motivates you to maintain a balanced lifestyle.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3>What Does a Health Checkup Include?</h3>\r\n\r\n<p>A standard full-body checkup at Pavan Sai Hospital covers:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Blood sugar and cholesterol tests</p>\r\n	</li>\r\n	<li>\r\n	<p>Liver and kidney function tests</p>\r\n	</li>\r\n	<li>\r\n	<p>Complete blood count</p>\r\n	</li>\r\n	<li>\r\n	<p>ECG and cardiac evaluation</p>\r\n	</li>\r\n	<li>\r\n	<p>Thyroid function test</p>\r\n	</li>\r\n	<li>\r\n	<p>Vitamin and hormone analysis</p>\r\n	</li>\r\n	<li>\r\n	<p>Chest X-ray and imaging if required</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Who Should Get Checked?</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Adults above the age of 30</p>\r\n	</li>\r\n	<li>\r\n	<p>People with family history of chronic diseases</p>\r\n	</li>\r\n	<li>\r\n	<p>Individuals with stressful lifestyles</p>\r\n	</li>\r\n	<li>\r\n	<p>Patients with existing conditions like obesity, diabetes, or hypertension</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Our doctors recommend a <strong>comprehensive health checkup at least once a year</strong>. Prevention is always better than cure &mdash; and with regular monitoring, you can take control of your health before problems arise.</p>\r\n\r\n<p>At <strong>Pavan Sai Hospital</strong>, we combine advanced diagnostic technology with experienced doctors to ensure accurate results and proper guidance. Your health is your greatest wealth, and we are here to help you protect it.</p>', 'importance-of-regular-health-checkups-for-a-healthy-life', 'Writer By Admin', 1, '2025-08-20 05:58:58', '2025-08-20 05:58:58'),
(2, 'Advanced Emergency Care: Every Minute Counts', '2025/08/20/1755668982_blog-3.jpg', 'In a medical emergency, every second can mean the difference between life and death. Pavan Sai Hospital provides 24/7 emergency care with trained specialists, advanced technology, and immediate response.', '<p>Medical emergencies strike without warning. A sudden heart attack, stroke, accident, or injury can put a person&rsquo;s life at risk within minutes. In such critical moments, the right medical response at the right time can save lives. That&rsquo;s why <strong>Pavan Sai Hospital</strong> has built a robust 24/7 emergency care department designed to handle all kinds of emergencies with speed, accuracy, and compassion.</p>\r\n\r\n<h3>Why Every Minute Matters</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Heart Attack</strong>: Each passing minute during a cardiac arrest reduces the chances of survival. Quick intervention with ECG, clot-busting drugs, or angioplasty can save a life.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Stroke</strong>: Treatment within the &ldquo;golden hour&rdquo; can prevent long-term disability and brain damage.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Accidents and Trauma</strong>: Immediate first aid, bleeding control, and surgery often decide the outcome of road traffic accidents.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Respiratory Emergencies</strong>: Fast oxygen support and ventilator care can stabilize patients until full treatment begins.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Our Emergency Care Facilities</h3>\r\n\r\n<p>At Pavan Sai Hospital, our emergency department is equipped with:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>24/7 availability of doctors, nurses, and paramedics</p>\r\n	</li>\r\n	<li>\r\n	<p>Advanced monitoring systems and defibrillators</p>\r\n	</li>\r\n	<li>\r\n	<p>Dedicated trauma care unit with operation theater backup</p>\r\n	</li>\r\n	<li>\r\n	<p>Rapid imaging and lab diagnostics for instant results</p>\r\n	</li>\r\n	<li>\r\n	<p>ICU and ventilator support for critically ill patients</p>\r\n	</li>\r\n	<li>\r\n	<p>Well-equipped ambulances with life-support facilities</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Our Team</h3>\r\n\r\n<p>Our emergency care team is trained to handle every situation with speed and precision. From first responders to surgeons, every staff member works in coordination to stabilize the patient immediately and continue with advanced treatment as required.</p>\r\n\r\n<h3>Ambulance and Critical Care Transport</h3>\r\n\r\n<p>We provide emergency ambulance services across the city. Our ambulances are equipped with oxygen supply, ventilators, and trained staff to deliver on-the-spot medical assistance. Patients are stabilized even before reaching the hospital, saving precious time.</p>\r\n\r\n<h3>Patient-Centered Emergency Care</h3>\r\n\r\n<p>At Pavan Sai Hospital, we believe emergency care should be fast, efficient, and compassionate. Our goal is not only to save lives but also to provide emotional support to patients and families during the most stressful times.</p>\r\n\r\n<p>Emergencies cannot be predicted &mdash; but being prepared makes all the difference. With round-the-clock emergency services, <strong>Pavan Sai Hospital stands as a trusted lifeline for the people of Visakhapatnam and beyond.</strong></p>', 'advanced-emergency-care-every-minute-counts', 'Writer By Admin', 0, '2025-08-20 05:53:55', '2025-08-20 05:53:55'),
(3, 'Advanced Emergency Care: Every Minute Counts', '2025/08/20/1755669494_blog-3.jpg', 'In a medical emergency, every second can mean the difference between life and death. Pavan Sai Hospital provides 24/7 emergency care with trained specialists, advanced technology, and immediate response.', '<p>Medical emergencies strike without warning. A sudden heart attack, stroke, accident, or injury can put a person&rsquo;s life at risk within minutes. In such critical moments, the right medical response at the right time can save lives. That&rsquo;s why <strong>Pavan Sai Hospital</strong> has built a robust 24/7 emergency care department designed to handle all kinds of emergencies with speed, accuracy, and compassion.</p>\r\n\r\n<h3>Why Every Minute Matters</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Heart Attack</strong>: Each passing minute during a cardiac arrest reduces the chances of survival. Quick intervention with ECG, clot-busting drugs, or angioplasty can save a life.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Stroke</strong>: Treatment within the &ldquo;golden hour&rdquo; can prevent long-term disability and brain damage.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Accidents and Trauma</strong>: Immediate first aid, bleeding control, and surgery often decide the outcome of road traffic accidents.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Respiratory Emergencies</strong>: Fast oxygen support and ventilator care can stabilize patients until full treatment begins.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Our Emergency Care Facilities</h3>\r\n\r\n<p>At Pavan Sai Hospital, our emergency department is equipped with:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>24/7 availability of doctors, nurses, and paramedics</p>\r\n	</li>\r\n	<li>\r\n	<p>Advanced monitoring systems and defibrillators</p>\r\n	</li>\r\n	<li>\r\n	<p>Dedicated trauma care unit with operation theater backup</p>\r\n	</li>\r\n	<li>\r\n	<p>Rapid imaging and lab diagnostics for instant results</p>\r\n	</li>\r\n	<li>\r\n	<p>ICU and ventilator support for critically ill patients</p>\r\n	</li>\r\n	<li>\r\n	<p>Well-equipped ambulances with life-support facilities</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Our Team</h3>\r\n\r\n<p>Our emergency care team is trained to handle every situation with speed and precision. From first responders to surgeons, every staff member works in coordination to stabilize the patient immediately and continue with advanced treatment as required.</p>\r\n\r\n<h3>Ambulance and Critical Care Transport</h3>\r\n\r\n<p>We provide emergency ambulance services across the city. Our ambulances are equipped with oxygen supply, ventilators, and trained staff to deliver on-the-spot medical assistance. Patients are stabilized even before reaching the hospital, saving precious time.</p>\r\n\r\n<h3>Patient-Centered Emergency Care</h3>\r\n\r\n<p>At Pavan Sai Hospital, we believe emergency care should be fast, efficient, and compassionate. Our goal is not only to save lives but also to provide emotional support to patients and families during the most stressful times.</p>\r\n\r\n<p>Emergencies cannot be predicted &mdash; but being prepared makes all the difference. With round-the-clock emergency services, <strong>Pavan Sai Hospital stands as a trusted lifeline for the people of Visakhapatnam and beyond.</strong></p>', 'advanced-emergency-care-every-minute-counts', 'Writer By Admin', 1, '2025-08-20 05:59:20', '2025-08-20 05:59:20'),
(4, 'Pavan Sai Hospital: Where Compassion Meets Advanced Healthcare', '2025/08/21/1755770781_14933.jpg', 'Healthcare is not just about medicine and machines—it’s about people, compassion, and trust. At Pavan Sai Hospital, we bring together world-class medical expertise and heartfelt care to ensure every patient feels valued, respected, and truly cared for. With a mission that says “Your health is our priority”, we stand as a symbol of healing and hope for the community.', '<h3><strong>Introduction</strong></h3>\r\n\r\n<p>Healthcare is not just about medicine and machines&mdash;it&rsquo;s about people, compassion, and trust. At <strong>Pavan Sai Hospital</strong>, we bring together world-class medical expertise and heartfelt care to ensure every patient feels valued, respected, and truly cared for. With a mission that says <em>&ldquo;Your health is our priority&rdquo;</em>, we stand as a symbol of healing and hope for the community.</p>\r\n\r\n<hr />\r\n<h3><strong>1. Our Mission &amp; Vision</strong></h3>\r\n\r\n<p>At the core of Pavan Sai Hospital lies a simple yet powerful belief: <strong>&ldquo;Compassionate care with advanced solutions.&rdquo;</strong><br />\r\nWe envision a healthier tomorrow where medical excellence is accessible to all, and where every patient receives not only treatment but also comfort, empathy, and guidance on their journey to recovery.</p>\r\n\r\n<hr />\r\n<h3><strong>2. State-of-the-Art Medical Facilities</strong></h3>\r\n\r\n<p>We understand that timely and accurate treatment saves lives. That&rsquo;s why Pavan Sai Hospital is equipped with:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Modern Operation Theaters</strong> &ndash; for safe and advanced surgeries</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>24/7 Emergency &amp; Trauma Care</strong> &ndash; because emergencies don&rsquo;t wait</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Advanced Diagnostic Labs</strong> &ndash; delivering quick and accurate results</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Specialized Departments</strong> &ndash; including Orthopedics, Gynecology, Pediatrics, Cardiology, General Medicine, and more</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Our expert doctors combine years of experience with modern medical technology to ensure the best outcomes.</p>\r\n\r\n<hr />\r\n<h3><strong>3. Patient-Centered Approach</strong></h3>\r\n\r\n<p>What sets us apart is the way we treat our patients. From the moment you step inside, you are not just another case&mdash;you are family.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Friendly reception staff make the admission process hassle-free</p>\r\n	</li>\r\n	<li>\r\n	<p>Doctors listen patiently and explain treatment options clearly</p>\r\n	</li>\r\n	<li>\r\n	<p>Nurses and support staff ensure comfort during recovery</p>\r\n	</li>\r\n	<li>\r\n	<p>Affordable healthcare packages make treatments accessible to everyone</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<h3><strong>4. Commitment to the Community</strong></h3>\r\n\r\n<p>Pavan Sai Hospital goes beyond its walls. We actively organize <strong>free medical camps</strong> and awareness programs in and around Visakhapatnam. Recently, our <strong>mega medical camp in Vadlapudi</strong> was widely appreciated and covered by local media. These initiatives help us reach underprivileged sections of society, fulfilling our social responsibility as a healthcare provider.</p>\r\n\r\n<hr />\r\n<h3><strong>5. Success Stories &amp; Testimonials</strong></h3>\r\n\r\n<p>Real stories speak louder than promises. Over the years, Pavan Sai Hospital has successfully treated thousands of patients. From life-saving surgeries to routine consultations, our patients&rsquo; positive feedback is our biggest achievement.</p>\r\n\r\n<p>One patient shared:<br />\r\n<em>&ldquo;I underwent a knee replacement at Pavan Sai Hospital, and the operation was successful. The doctors and staff treated me with great care, and the facilities were excellent. Truly value for money and health.&rdquo;</em></p>\r\n\r\n<hr />\r\n<h3><strong>6. Celebrating a Decade of Excellence</strong></h3>\r\n\r\n<p>This year marks the <strong>10th Anniversary</strong> of Pavan Sai Hospital. Over the past decade, we have grown from a single facility to a trusted name in healthcare, touching countless lives with quality medical services. This milestone reflects our continuous journey of innovation, trust, and compassion.</p>\r\n\r\n<hr />\r\n<h3><strong>7. Why Choose Pavan Sai Hospital?</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>24/7 Emergency Services</p>\r\n	</li>\r\n	<li>\r\n	<p>Experienced &amp; Caring Doctors</p>\r\n	</li>\r\n	<li>\r\n	<p>Affordable Treatment Plans</p>\r\n	</li>\r\n	<li>\r\n	<p>Advanced Medical Technology</p>\r\n	</li>\r\n	<li>\r\n	<p>Active Community Engagement</p>\r\n	</li>\r\n	<li>\r\n	<p>Proven Patient Satisfaction</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<h3><strong>Conclusion</strong></h3>\r\n\r\n<p>At <strong>Pavan Sai Hospital</strong>, we believe that true healing happens when advanced medical care is delivered with empathy and respect. Whether it&rsquo;s a routine health check-up, a critical surgery, or community outreach, our mission remains the same: <em>to put your health first, always</em>.</p>\r\n\r\n<p>📞 <strong>Contact us today</strong> to book your consultation or visit our hospital for personalized care.<br />\r\n🌐 Follow us on social media to stay updated with health tips, medical camps, and hospital news.</p>', 'pavan-sai-hospital-where-compassion-meets-advanced-healthcare', 'Writer By Admin', 1, '2025-08-21 10:06:21', '2025-08-21 10:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `book_appointments`
--

CREATE TABLE `book_appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `service` varchar(255) NOT NULL,
  `sub_service` varchar(255) DEFAULT NULL,
  `booking_date` datetime NOT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'BOOKED',
  `active_flag` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `patient_flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_appointments`
--

INSERT INTO `book_appointments` (`id`, `name`, `mobile`, `email`, `service`, `sub_service`, `booking_date`, `message`, `status`, `active_flag`, `created_at`, `address`, `dob`, `patient_flag`) VALUES
(1, 'bhargavifsgfhgd', '9347883784', 'bhargavit.pengwinsolutions@gmail.com', 'Orthopedics', NULL, '2222-02-23 00:00:00', '7yujykuykr', 'CONVERTED', 1, '2025-08-19 11:50:36', 'bdfdfbd', '2002-10-15', 1),
(2, 'rakl;dvfhfjf', '948641232323', 'bhargavitholani@widotechnologies.com', 'Obstetrics', NULL, '2025-08-19 00:00:00', 'edwqtgryklijkj;k', 'BOOKED', 1, '2025-08-19 11:56:15', 'jfgdgjn', '7823-10-22', 0);

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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `active_flag`) VALUES
(1, 'bhargavi', 'dnl@gmail.com', '34234324', 'Leave Request for Project Review on 16-07-2025', 'wqdqrqe', '2025-08-19 11:39:25', 1),
(2, 'chiru', 'corevet@gmail.com', '756432`1`212436', 'vgvdsgvs', 'yhbfdhdghd', '2025-08-19 11:58:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `degree` varchar(250) DEFAULT NULL,
  `department` varchar(250) DEFAULT NULL,
  `image_path` varchar(1000) DEFAULT NULL,
  `order_no` int(11) DEFAULT NULL,
  `active_flag` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `degree`, `department`, `image_path`, `order_no`, `active_flag`, `created_at`, `updated_at`) VALUES
(1, 'Dr. P.LAVAN SAGAR', 'MD, FIRA, FIAE', 'Anaesthesia & Critical Care in House Doctor', '2025/08/21/1755758101_01.png', 1, 1, '2025-08-21 06:35:01', '2025-08-21 07:51:22'),
(2, 'Dr. Mohan Das', NULL, 'MS GENERAL SURGEON', '2025/08/21/1755758246_02.png', NULL, 1, '2025-08-21 06:37:26', '2025-08-21 06:55:08'),
(3, 'Dr. Hitesh Akshay Raj', 'MBBS, MS', '(Ortho)', '2025/08/21/1755758278_03.png', NULL, 1, '2025-08-21 06:37:58', '2025-08-21 06:37:58'),
(4, 'Dr. Ch. Ramesh Babu', 'MD., DA', 'General Medicine', '2025/08/21/1755758308_04.png', NULL, 1, '2025-08-21 06:38:28', '2025-08-21 06:38:28'),
(5, 'Dr. S.Madhu', 'MD, (Paediatric)', 'Childrens Specialist', '2025/08/21/1755758330_05.png', NULL, 1, '2025-08-21 06:38:50', '2025-08-21 06:38:50'),
(6, 'Dr. Bhagawan', 'MBBS MD Psychiatry', 'Consultant Psychiatrist', '2025/08/21/1755758365_06.png', NULL, 1, '2025-08-21 06:39:25', '2025-08-21 06:39:25'),
(7, 'Dr. RANURAG JOSE', 'MS Surgery MCh Urology', 'Consultant Urologist and Andrologist', '2025/08/21/1755758393_07.png', NULL, 1, '2025-08-21 06:39:53', '2025-08-21 06:39:53'),
(8, 'Dr. Y.Jyothsna M.S,', 'OBG Gynecologist, Civil, Asst Surgeon', NULL, '2025/08/21/1755758415_08.png', NULL, 1, '2025-08-21 06:40:15', '2025-08-21 06:40:15'),
(9, 'Dr. Lakshmi Radha Sowjanya', 'MBBS, MS (OBG)', 'Deputy Civil Surgeon', '2025/08/21/1755758442_09.png', NULL, 1, '2025-08-21 06:40:42', '2025-08-21 06:40:42'),
(10, 'Dr. Mahalakshmi Peruri', 'MBBS MD (DVL)', 'Fellowship in Cosmetology', '2025/08/21/1755758472_10.png', NULL, 1, '2025-08-21 06:41:12', '2025-08-21 06:41:12');

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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `video_path` varchar(255) DEFAULT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_title`, `image_path`, `type`, `video_path`, `active_flag`, `created_at`) VALUES
(1, 'image 1', '2025/08/19/1755605920_blog-6.jpg', 'IMAGE', NULL, 1, '2025-08-19 12:18:41'),
(2, 'image2', '2025/08/19/1755605935_blog-1.jpg', 'IMAGE', NULL, 1, '2025-08-19 12:18:55'),
(3, 'image 3', '2025/08/19/1755607888_blog-4.jpg', 'IMAGE', NULL, 1, '2025-08-19 12:51:28'),
(4, 'image2', '2025/08/21/1755771146_589.jpg', 'IMAGE', NULL, 1, '2025-08-21 10:12:26'),
(5, 'image', '2025/08/21/1755771163_2251.jpg', 'IMAGE', NULL, 1, '2025-08-21 10:12:43'),
(6, 'image', '2025/08/21/1755771172_6561.jpg', 'IMAGE', NULL, 1, '2025-08-21 10:12:52'),
(7, 'image', '2025/08/21/1755771182_38407.jpg', 'IMAGE', NULL, 1, '2025-08-21 10:13:02'),
(8, 'image', '2025/08/21/1755771197_sick-patient-resting-bed-wearing-nasal-oxygen-tube-while-discussing-with-doctors-medical-treatmen.jpg', 'IMAGE', NULL, 1, '2025-08-21 10:13:17'),
(9, 'image', '2025/08/21/1755771235_65924.jpg', 'IMAGE', NULL, 1, '2025-08-21 10:13:55'),
(10, 'image', '2025/08/21/1755771243_blurred-background-abstract-blur-beautiful-luxury-hospital-clinic-interior-background-vintage-effect-style-pictures.jpg', 'IMAGE', NULL, 1, '2025-08-21 10:14:03'),
(11, 'image', '2025/08/21/1755771251_group-people-meeting-with-monitor-showing-blue-lab-coat-man-blue-scrubs.jpg', 'IMAGE', NULL, 1, '2025-08-21 10:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `home_banners`
--

CREATE TABLE `home_banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `image_path` varchar(255) NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_banners`
--

INSERT INTO `home_banners` (`id`, `title`, `description`, `image_path`, `active_flag`, `created_at`) VALUES
(1, 'Your Health, Our Priority', 'At Pavansai Hospital, we ensure your well-being with advanced medical care, modern facilities, and compassionate service.', '2025/08/20/1755694942_nurse-preparing-their-shift.jpg', 1, '2025-08-20 13:02:22'),
(2, 'Comprehensive Care for Every Patient', 'Our team of specialists delivers personalized treatments and healthcare solutions to meet your unique needs.', '2025/08/20/1755694963_23554.jpg', 1, '2025-08-20 13:02:43'),
(3, 'Excellence in Medical Expertise', 'With years of trusted service, we provide world-class medical expertise to help you recover faster and live healthier.', '2025/08/20/1755694982_17818.jpg', 1, '2025-08-20 13:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `home_gallery`
--

CREATE TABLE `home_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(3, '0001_01_01_000002_create_jobs_table', 1);

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
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `seo_id` int(11) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `keywords` varchar(1000) DEFAULT NULL,
  `meta` text DEFAULT NULL,
  `schema` text DEFAULT NULL,
  `gtag_head` text DEFAULT NULL,
  `gtag_body` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`seo_id`, `url`, `title`, `description`, `keywords`, `meta`, `schema`, `gtag_head`, `gtag_body`, `created_at`) VALUES
(1, '', 'Pavan Sai Hospital – Multi-Specialty Hospital in Visakhapatnam | 24x7 Emergency Care', 'Pavan Sai Hospital, Vadlapudi – 24x7 Emergency, ICU, Laparoscopic & General Surgeries, Gynecology, Infertility, Orthopedic, Neurology & Cardiology Care.', 'Pavan Sai Hospital, hospital in Vadlapudi, hospital in Visakhapatnam, best hospital Vizag, multi-specialty hospital Vizag, emergency hospital Vizag, ICU care Visakhapatnam, laparoscopic surgery Vizag, gynecology hospital Vizag, infertility treatment Vizag, orthopedic hospital Visakhapatnam, neurology care Vizag, cardiology hospital Vizag', NULL, NULL, NULL, NULL, '2025-08-19 12:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_title` text NOT NULL,
  `service_image` text NOT NULL,
  `inner_image` varchar(1000) DEFAULT NULL,
  `service_summary` longtext NOT NULL,
  `service_description` longtext NOT NULL,
  `type` varchar(1000) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `active_flag` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(250) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_image`, `inner_image`, `service_summary`, `service_description`, `type`, `slug`, `active_flag`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '24x7 EMERGENCY & Critical Care', '2025/08/20/1755683843_emergency.jpg', '2025/08/20/1755691055_24.jpg', 'Round-the-clock emergency and ICU support for life-threatening conditions like snake bites, poisoning, strokes, heart attacks, accidents, and critical trauma. Our in-house ICU doctors ensure immediate care anytime.', '<p>At <strong>Pavan Sai Hospital</strong>, we understand that emergencies can happen anytime &mdash; day or night. Our <strong>24x7 Emergency &amp; Critical Care Department</strong> is equipped to handle life-threatening situations with speed, precision, and compassion.</p>\r\n\r\n<p>Our state-of-the-art <strong>Emergency Room (ER)</strong> and <strong>Intensive Care Unit (ICU)</strong> are staffed with highly trained doctors, nurses, and paramedics who provide <strong>immediate response and advanced life support</strong>. From stabilizing patients to providing advanced interventions, we ensure the right treatment is given at the right time.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>✅ Conditions We Handle:</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Snake Bites &amp; Poisoning Cases</strong> &ndash; Prompt anti-venom and detox management</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Chemical &amp; Phenol Poisoning</strong> &ndash; Emergency gastric lavage and critical monitoring</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pharmacy Blasts &amp; Burn Injuries</strong> &ndash; Emergency burn care and wound management</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Heart Attacks (Myocardial Infarction)</strong> &ndash; ECG, thrombolysis, and emergency cardiac care</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Brain Stroke (Ischemic &amp; Hemorrhagic)</strong> &ndash; Rapid CT/MRI imaging and clot-busting therapies</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Severe Trauma &amp; Accidents</strong> &ndash; Immediate stabilization and surgical intervention</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>24x7 In-house ICU Doctors</strong> &ndash; Always available for emergencies</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>🏥 Facilities &amp; Highlights:</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Fully-equipped ICU with ventilator support</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Round-the-clock emergency physicians</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Advanced monitoring systems (ECG, CT, MRI, ventilators, defibrillators)</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Dedicated ambulance services with life support</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>24/7 availability of specialists (cardiologists, neurologists, surgeons, orthopedicians)</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>At Pavan Sai Hospital, we follow the principle that <strong>&ldquo;Every Second Counts in an Emergency.&rdquo;</strong> Our team is committed to <strong>saving lives, minimizing complications, and providing the highest standards of emergency medical care</strong> to patients across Visakhapatnam and surrounding areas.</p>', 'service', '24x7-emergency-critical-care', 1, '2025-08-20 12:33:11', 'Pawan Sai Hospitals', '2025-08-20 12:33:11', NULL),
(2, 'Laparoscopic Surgeries (Minimally Invasive)', '2025/08/20/1755684436_lapro.jpg', '2025/08/20/1755691044_surgery.jpg', 'Minimally invasive laparoscopic surgeries for appendix, gallbladder, hernia, uterus, ovarian cysts, acid reflux, and colon disorders with faster recovery and less pain.', '<p>At <strong>Pavan Sai Hospital</strong>, we specialize in <strong>Laparoscopic (Keyhole) Surgeries</strong>, a modern surgical approach that ensures <strong>minimal pain, tiny incisions, faster recovery, and reduced hospital stay</strong> compared to traditional open surgeries.</p>\r\n\r\n<p>Laparoscopic surgery is performed using a thin tube with a camera (laparoscope) that allows our surgeons to operate with <strong>precision and safety</strong>. Patients benefit from smaller scars, minimal blood loss, and quicker return to normal life.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>✅ Types of Laparoscopic Surgeries We Offer:</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Laparoscopic Appendectomy</strong> &ndash; Removal of appendix</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Laparoscopic Cholecystectomy</strong> &ndash; Gallbladder removal (for gallstones, infection)</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Laparoscopic Hernia Repair</strong> &ndash; Inguinal, umbilical, and incisional hernias</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Laparoscopic Hysterectomy</strong> &ndash; Uterus removal for gynecological conditions</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Laparoscopic Ovarian Cyst Removal</strong> &ndash; Safe removal of ovarian cysts</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Laparoscopic Fundoplication</strong> &ndash; For acid reflux &amp; hiatal hernia treatment</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Laparoscopic Colectomy</strong> &ndash; Removal of part of the colon for cancer, IBD, or other conditions</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Diagnostic Laparoscopy</strong> &ndash; For unexplained abdominal pain, infertility, or internal organ inspection</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>🏥 Benefits of Laparoscopic Surgery at Pavan Sai Hospital:</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Smaller incisions, minimal scars</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Less pain and blood loss</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Faster recovery and shorter hospital stay</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Lower risk of infection</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Early return to work and daily activities</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Our team of <strong>highly experienced laparoscopic surgeons</strong> and advanced operating theaters ensure world-class outcomes. Whether it&rsquo;s a routine appendix removal or a complex gynecological procedure, we bring <strong>precision, safety, and patient comfort</strong> to every surgery.</p>\r\n\r\n<p>At Pavan Sai Hospital, we believe in <strong>minimally invasive solutions for maximum patient benefit.</strong></p>', 'service', 'laparoscopic-surgeries-minimally-invasive', 1, '2025-08-20 12:33:59', 'Pawan Sai Hospitals', '2025-08-20 12:33:59', NULL),
(3, 'General Surgeries', '2025/08/20/1755684477_ganeral-surgery.jpg', '2025/08/20/1755691020_general.jpg', 'From appendectomy and hernia repairs to thyroid, breast, piles, and trauma surgeries—our general surgery team provides safe, effective, and reliable care.', '<p>At <strong>Pavan Sai Hospital</strong>, our <strong>General Surgery Department</strong> handles a wide spectrum of surgical needs with the highest standards of safety and precision. Whether it&rsquo;s an <strong>emergency surgery</strong> or a planned procedure, our team is equipped with advanced technology and years of expertise to provide the best possible outcomes.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>✅ General Surgeries We Offer:</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Appendectomy</strong> &ndash; Removal of appendix (open or laparoscopic)</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Hernia Repairs</strong> &ndash; Inguinal, umbilical, or incisional (open or laparoscopic)</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Thyroid Surgery</strong> &ndash; For goiter, thyroid nodules, or cancer</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Breast Lump Removal</strong> &ndash; Lumpectomy or mastectomy for benign and malignant tumors</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Piles Surgery (Hemorrhoidectomy, Stapler Surgery)</strong> &ndash; Pain-free solutions for piles</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Fistula Surgery (Fistulotomy, Fistulectomy)</strong> &ndash; Effective treatment of anal fistulas</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Fissure Surgery (Lateral Sphincterotomy)</strong> &ndash; Permanent relief from anal fissures</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Gallbladder Surgery</strong> &ndash; Gallstone and gallbladder infection removal (open/laparoscopic)</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Tumor or Cyst Removal</strong> &ndash; For benign and malignant growths in different parts of the body</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Abscess Drainage</strong> &ndash; Quick relief from painful pus collections</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Minor Trauma / Wound Repair</strong> &ndash; Emergency care for cuts, wounds, and injuries</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>🏥 Why Choose Pavan Sai Hospital for General Surgery?</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Experienced Surgeons</strong> with expertise in advanced techniques</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>State-of-the-art Operation Theaters</strong> with world-class safety standards</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Patient-Centered Care</strong> with personalized treatment plans</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Quick Recovery</strong> protocols for early return to daily life</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>24/7 Emergency Support</strong> for trauma and critical cases</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Our hospital combines <strong>modern technology with compassionate care</strong>, ensuring that patients receive not just treatment, but also confidence and reassurance throughout their surgical journey.</p>\r\n\r\n<p>At Pavan Sai Hospital, your <strong>health, safety, and recovery are always our top priority.</strong></p>', 'service', 'general-surgeries', 1, '2025-08-20 12:34:14', 'Pawan Sai Hospitals', '2025-08-20 12:34:14', NULL),
(4, 'Gynecology', '2025/08/20/1755684523_gynecology.jpg', '2025/08/20/1755691009_gyne.jpg', 'From routine check-ups to advanced gynecological surgeries, we provide complete women’s healthcare with compassion, expertise, and modern technology.', '<p>At <strong>Pavan Sai Hospital</strong>, we understand that women&rsquo;s health requires <strong>sensitive, specialized, and comprehensive care</strong>. Our <strong>Gynecology Department</strong> is dedicated to supporting women through every stage of life&mdash;right from adolescence and reproductive years to menopause and beyond.</p>\r\n\r\n<p>We offer a wide range of services, combining <strong>preventive care, advanced diagnostics, and surgical expertise</strong> to ensure optimal health and well-being.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>✅ Gynecology Services We Provide:</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Routine Check-ups &amp; Pap Smear</strong> &ndash; Regular screenings for early detection of cervical cancer and gynecological disorders.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Menstrual Disorders Management</strong> &ndash; Effective treatments for PCOS, irregular cycles, painful or heavy periods.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Fibroid &amp; Endometriosis Treatment</strong> &ndash; Both medical and surgical solutions for pelvic pain, infertility, and heavy bleeding.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Ovarian Cyst Management</strong> &ndash; Minimally invasive techniques to treat cysts and preserve fertility.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Uterine Prolapse &amp; Pelvic Floor Disorder Treatment</strong> &ndash; Advanced surgical and non-surgical therapies for pelvic health.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Cervical Cancer Screening &amp; HPV Vaccination</strong> &ndash; Preventive care for long-term health.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Hysterectomy (Open, Laparoscopic, Vaginal)</strong> &ndash; Safe procedures tailored to each patient&rsquo;s condition.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Contraception &amp; Family Planning</strong> &ndash; Counseling and services for safe motherhood and birth spacing.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Hormonal Therapy &amp; Menopause Care</strong> &ndash; Support for women facing hormonal imbalances and menopausal symptoms.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Infection Treatments</strong> &ndash; Expert care for UTIs, vaginal infections, and sexually transmitted diseases.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>🏥 Why Choose Pavan Sai Hospital for Gynecology?</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Expert Lady Gynecologists &amp; Surgeons</strong> ensuring comfort and trust</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Advanced Laparoscopic &amp; Minimally Invasive Procedures</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Personalized Care</strong> tailored to each woman&rsquo;s unique health needs</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Safe Motherhood Support</strong> with antenatal &amp; postnatal care facilities</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Confidential &amp; Compassionate Approach</strong> in every treatment</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>We believe in empowering women with <strong>knowledge, preventive care, and world-class treatment</strong>, so they can lead healthier, happier lives.</p>\r\n\r\n<p>At <strong>Pavan Sai Hospital</strong>, we don&rsquo;t just treat gynecological problems&mdash;we take care of <strong>every aspect of women&rsquo;s health</strong> with trust and compassion.</p>', 'service', 'gynecology', 1, '2025-08-20 12:34:29', 'Pawan Sai Hospitals', '2025-08-20 12:34:29', NULL),
(5, 'Infertility Care', '2025/08/20/1755684557_feritility.jpg', '2025/08/20/1755690912_feritility (2).jpg', 'From fertility evaluation to advanced IVF treatments, we provide compassionate and scientific solutions to help couples achieve their dream of parenthood.', '<p>At <strong>Pavan Sai Hospital</strong>, we understand the emotional journey of couples struggling with infertility. Our <strong>Infertility Care Department</strong> is dedicated to offering <strong>world-class fertility treatments</strong> backed by advanced technology, modern labs, and highly experienced fertility specialists.</p>\r\n\r\n<p>We provide <strong>personalized, evidence-based treatments</strong> for both male and female infertility, ensuring the highest chances of success while offering compassionate emotional support.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>✅ Infertility Care Services We Provide:</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Fertility Evaluation for Couples</strong> &ndash; Complete diagnostic tests for both partners.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Ovulation Induction &amp; Monitoring</strong> &ndash; Medications and scans to stimulate and track ovulation.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Intrauterine Insemination (IUI)</strong> &ndash; A simple, effective method where processed sperm is placed directly into the uterus.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>In Vitro Fertilization (IVF)</strong> &ndash; Advanced procedure where eggs are fertilized outside the body and embryos are transferred to the womb.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Intracytoplasmic Sperm Injection (ICSI)</strong> &ndash; Cutting-edge technique where a single sperm is injected into an egg for fertilization.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Donor Programs</strong> &ndash; Donor eggs, donor sperm, and embryo donation options available.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Embryo Freezing &amp; Fertility Preservation</strong> &ndash; Options for couples delaying parenthood or cancer patients preserving fertility.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>ERA (Endometrial Receptivity Analysis)</strong> &ndash; Scientific method to identify the best time for embryo transfer.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Hysteroscopy &amp; Laparoscopy</strong> &ndash; To diagnose and treat infertility-related problems like polyps, fibroids, adhesions, or blocked tubes.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Recurrent Miscarriage Treatment</strong> &ndash; Identifying and treating underlying causes for repeated pregnancy loss.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>🏥 Why Choose Pavan Sai Hospital for Infertility Care?</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>High IVF &amp; ICSI Success Rates</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Experienced Fertility Specialists &amp; Embryologists</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>State-of-the-art IVF Laboratory &amp; Technology</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Ethical, Transparent &amp; Affordable Treatment Plans</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Comprehensive Support &ndash; Physical, Emotional &amp; Psychological</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>We believe that <strong>every couple deserves the chance to experience parenthood</strong>. At Pavan Sai Hospital, we combine <strong>medical expertise with compassion</strong> to make that dream come true.</p>\r\n\r\n<p>Whether you&rsquo;re just starting your fertility journey or seeking advanced reproductive technologies, our team is here to guide you at every step.</p>', 'service', 'infertility-care', 1, '2025-08-20 12:34:47', 'Pawan Sai Hospitals', '2025-08-20 12:34:47', NULL),
(6, 'Accident & Trauma Care', '2025/08/20/1755684607_accident.jpg', '2025/08/20/1755690898_accident (2).jpg', 'Round-the-clock emergency and trauma services for road accidents, fractures, head injuries, burns, and critical emergencies with rapid response and expert care.', '<p>At <strong>Pavan Sai Hospital</strong>, we understand that <strong>accidents and trauma emergencies</strong> can happen anytime, anywhere. In such situations, <strong>timely medical intervention</strong> is the key to saving lives and preventing long-term complications. That&rsquo;s why we offer a <strong>dedicated 24&times;7 Accident &amp; Trauma Care Unit</strong> equipped with advanced facilities and a highly experienced emergency response team.</p>\r\n\r\n<p>Our <strong>multi-disciplinary trauma care team</strong> includes emergency physicians, orthopedic surgeons, neurosurgeons, general surgeons, critical care specialists, and trained nurses, ensuring that patients receive immediate, coordinated, and life-saving treatment.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>✅ Accident &amp; Trauma Care Services We Provide:</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>24&times;7 Emergency Response</strong> &ndash; Quick stabilization and treatment of accident victims.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Fracture Management</strong> &ndash; From simple bone breaks to complex fracture surgeries.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Dislocation Reduction</strong> &ndash; Specialized care for shoulder, hip, knee, and other joint dislocations.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Wound Cleaning &amp; Suturing</strong> &ndash; To prevent infections and ensure proper healing.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Head Injury &amp; Polytrauma Management</strong> &ndash; Expert neurosurgical and intensive care support.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Road Traffic Accident (RTA) Injury Care</strong> &ndash; Comprehensive treatment for accident victims.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Burns &amp; Soft Tissue Injury Treatment</strong> &ndash; Advanced burn care and reconstructive procedures.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Post-Accident Rehabilitation</strong> &ndash; Physiotherapy and recovery support for faster healing.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>🏥 Why Choose Pavan Sai Hospital for Trauma Care?</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>24&times;7 Availability of Emergency Specialists &amp; ICU Doctors</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Advanced Trauma Care Unit with State-of-the-art Equipment</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Immediate Access to Operating Theatres, ICU, and Radiology</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Multispecialty Support &ndash; Orthopedics, Neurosurgery, General Surgery, and More</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Ambulance Services for Quick Response &amp; Patient Transfer</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Comprehensive Rehabilitation &amp; Follow-up Care</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>At Pavan Sai Hospital, our mission is simple: <strong>to save lives and provide world-class trauma care at the most critical moments.</strong> Whether it&rsquo;s a <strong>road traffic accident, workplace injury, burn, or severe trauma</strong>, our team is trained to deliver <strong>compassionate, fast, and expert care</strong> when you need it the most.</p>', 'service', 'accident-trauma-care', 1, '2025-08-20 12:35:05', 'Pawan Sai Hospitals', '2025-08-20 12:35:05', NULL),
(7, 'Orthopedic Care', '2025/08/20/1755684640_ortho.jpg', '2025/08/20/1755690885_ortho (2).jpg', 'Expert diagnosis, treatment, and surgery for fractures, arthritis, sports injuries, spine issues, and joint replacements with personalized rehabilitation.', '<p>At <strong>Pavan Sai Hospital</strong>, our <strong>Orthopedic Department</strong> is committed to providing <strong>world-class bone and joint care</strong> with the latest technology and a patient-centered approach. Whether it&rsquo;s a <strong>fracture, chronic joint pain, or complex orthopedic surgery</strong>, our team of skilled orthopedic surgeons and physiotherapists ensures that every patient receives the best possible outcome.</p>\r\n\r\n<p>Our hospital is equipped with <strong>advanced operation theatres, digital X-rays, MRI, and physiotherapy units</strong>, allowing us to deliver <strong>comprehensive orthopedic treatment under one roof</strong>.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>✅ Orthopedic Services We Provide:</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Bone Fracture Surgery</strong> &ndash; Plating, Nailing, and External Fixation for simple &amp; complex fractures.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Joint Replacement Surgery</strong> &ndash; Hip, Knee, and Shoulder replacement using minimally invasive techniques.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Arthroscopy</strong> &ndash; Keyhole surgery for knee, shoulder, and ankle problems.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Ligament Reconstruction</strong> &ndash; ACL, PCL, and rotator cuff repairs for sports injuries.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Spine Surgery</strong> &ndash; Treatment for slipped discs, spinal fractures, and deformities.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Sports Injury Treatment</strong> &ndash; Comprehensive care for athletes and active individuals.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Arthritis &amp; Osteoporosis Management</strong> &ndash; Preventive and therapeutic care for bone and joint health.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pediatric Orthopedic Care</strong> &ndash; Special care for children&rsquo;s bone and joint conditions.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Physiotherapy &amp; Rehabilitation</strong> &ndash; Restoring mobility and strength after injury or surgery.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>🏥 Why Choose Pavan Sai Hospital for Orthopedics?</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Experienced Orthopedic Surgeons &amp; Specialists</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Minimally Invasive &amp; Advanced Surgical Techniques</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>24&times;7 Trauma &amp; Fracture Management</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Dedicated Physiotherapy &amp; Rehabilitation Center</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Personalized Treatment Plans for Quick Recovery</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Holistic Approach for Long-term Bone &amp; Joint Health</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Whether you&rsquo;re recovering from an accident, suffering from chronic pain, or considering <strong>joint replacement surgery</strong>, Pavan Sai Hospital&rsquo;s Orthopedic Care ensures you get back to your normal life <strong>stronger, healthier, and faster</strong>.</p>', 'service', 'orthopedic-care', 1, '2025-08-20 12:35:19', 'Pawan Sai Hospitals', '2025-08-20 12:35:19', NULL),
(8, 'Neurology Care', '2025/08/20/1755684671_neuro.jpg', '2025/08/20/1755690868_neuro (2).jpg', 'Comprehensive care for stroke, epilepsy, headaches, neuropathy, Parkinson’s, dementia, and other brain & nerve disorders with advanced diagnostics and treatment.', '<p>At <strong>Pavan Sai Hospital</strong>, our <strong>Neurology Department</strong> specializes in diagnosing and treating a wide range of <strong>brain, spine, and nervous system disorders</strong>. Neurological conditions often require <strong>timely intervention and specialized care</strong>, and our team of neurologists, neurosurgeons, and critical care experts are available 24&times;7 to provide the best possible treatment.</p>\r\n\r\n<p>We use advanced diagnostic tools such as <strong>EEG, EMG, Nerve Conduction Studies, and MRI scans</strong> to detect and treat conditions with precision. From <strong>emergency stroke management</strong> to <strong>long-term care for chronic neurological disorders</strong>, we ensure patients receive holistic, personalized treatment.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>✅ Neurology Services We Provide:</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Stroke Management &amp; Rehabilitation</strong> &ndash; Immediate emergency care, clot-busting treatment, and recovery support.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Epilepsy Diagnosis &amp; Treatment</strong> &ndash; Medication management and surgical options for seizure disorders.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Headache &amp; Migraine Care</strong> &ndash; Specialized treatments for chronic and severe headache disorders.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Neuropathy &amp; Nerve Disorders</strong> &ndash; Diagnosis and management of peripheral nerve conditions.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Parkinson&rsquo;s Disease &amp; Movement Disorders</strong> &ndash; Comprehensive care with medications, therapy, and rehabilitation.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Multiple Sclerosis (MS) Care</strong> &ndash; Long-term management and supportive therapy.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Dementia &amp; Memory Disorders</strong> &ndash; Personalized programs for Alzheimer&rsquo;s and other memory-related conditions.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Spinal Cord Disorders</strong> &ndash; Diagnosis and treatment of spinal injuries, infections, and degenerative diseases.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Neurocritical Care</strong> &ndash; Specialized ICU care for severe neurological emergencies.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>EEG, Nerve Conduction Studies, EMG</strong> &ndash; Advanced diagnostic facilities for accurate detection.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>🏥 Why Choose Pavan Sai Hospital for Neurology?</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>24&times;7 Stroke &amp; Emergency Neurology Services</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Experienced Neurologists &amp; Neurosurgeons</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Advanced Diagnostic &amp; Imaging Facilities</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Dedicated Neuro ICU for Critical Patients</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Multidisciplinary Approach for Complex Disorders</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Rehabilitation Programs for Long-term Care</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>At Pavan Sai Hospital, we combine <strong>cutting-edge medical technology with compassionate care</strong> to help patients manage neurological conditions effectively and improve their <strong>quality of life</strong>.</p>', 'service', 'neurology-care', 1, '2025-08-20 12:35:33', 'Pawan Sai Hospitals', '2025-08-20 12:35:33', NULL),
(9, 'Cardiology Care', '2025/08/20/1755684705_cardio.jpg', '2025/08/20/1755690427_cardio (2).jpg', 'Expert cardiac care including check-ups, angioplasty, pacemaker implantation, heart attack management, and cardiac rehabilitation with 24×7 emergency support.', '<p>At <strong>Pavan Sai Hospital</strong>, our <strong>Cardiology Department</strong> provides advanced care for the prevention, diagnosis, and treatment of <strong>heart diseases</strong>. Heart health is one of the most crucial aspects of overall well-being, and our team of <strong>experienced cardiologists, interventional specialists, and cardiac surgeons</strong> ensure that every patient receives world-class cardiac care.</p>\r\n\r\n<p>We handle everything from <strong>routine heart check-ups</strong> to <strong>emergency cardiac care</strong> such as <strong>heart attacks, arrhythmias, and heart failure</strong>. With the latest technology in <strong>ECG, Echocardiography, Stress Testing, and Coronary Interventions</strong>, we provide accurate diagnosis and effective treatment tailored to each patient&rsquo;s needs.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>✅ Cardiology Services We Provide:</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Heart Check-ups &amp; Preventive Cardiology</strong> &ndash; Regular monitoring, lifestyle counseling, and early risk detection.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>ECG, Echocardiography, TMT (Stress Test)</strong> &ndash; Comprehensive diagnostic tools for accurate heart assessment.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Hypertension &amp; High Cholesterol Management</strong> &ndash; Preventive and medical management of risk factors.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Heart Attack &amp; Emergency Cardiac Care</strong> &ndash; 24&times;7 emergency response and immediate life-saving interventions.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Coronary Angiography &amp; Angioplasty (Stent Placement)</strong> &ndash; Minimally invasive treatments for blocked arteries.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pacemaker Implantation</strong> &ndash; For patients with slow or irregular heart rhythms.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Heart Failure Management</strong> &ndash; Advanced medical and device-based therapies for heart function improvement.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Valvular Heart Disease Treatment</strong> &ndash; Repair or replacement of diseased heart valves.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Arrhythmia Diagnosis &amp; Treatment</strong> &ndash; Management of irregular heartbeat with medication, ablation, or devices.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Cardiac Rehabilitation</strong> &ndash; Post-surgery and post-heart attack recovery programs to restore health.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>🏥 Why Choose Pavan Sai Hospital for Cardiology?</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Round-the-clock Emergency Cardiac Services</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Highly Skilled Cardiologists &amp; Cardiac Surgeons</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>State-of-the-art Cath Lab &amp; Advanced Technology</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Holistic Approach with Lifestyle &amp; Diet Guidance</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Comprehensive Rehabilitation &amp; Long-term Care</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>At Pavan Sai Hospital, we are committed to <strong>protecting hearts and saving lives</strong> with compassionate, precise, and advanced cardiac treatments.</p>', 'service', 'cardiology-care', 1, '2025-08-20 12:38:51', 'Pawan Sai Hospitals', '2025-08-20 12:38:51', NULL);

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
('08kcyixOU7BQ0GE1EcB3YjarC0buy3rwKmUNZdA4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieXQwdmRUQnFmbEo5aTl0eW83RnVUVjQ4dkhrb2pBMTlXWmdtYWl1bCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9fYWRtaW4vc2VjdXJlL3Rlc3RpbW9uaWFscyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1756186053),
('2YGSKKfnHQRomw5w7zxPVAXNt0pbmUOd5gSyiFoW', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZjdLZWZFQjVxZ3RNMm03aXRIMlJvcXdOTGJKSTE0R0lBd2NtUE1GSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9nYWxsZXJ5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1755773625),
('DcdUY8l33l9mW72iXJa4umu5MQKmdshINq31J8Dq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQURTZmVwWVRHZUN0QnBKaTZsaWdER2gxaUxxMXdjSXk5QThtVURURSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9fYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774849978),
('gFTOm6laJ2ZR1sVaW6ipmFGsLyeX6ZkpSBUGsNwJ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVmRKSnd3QjVncnlPMHBxVVFJZklzWFY3Q1pmc1NBZlI0ekk2ZUx4TSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9fYWRtaW4vc2VjdXJlL2Rhc2hib2FyZCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1758865115),
('NqHXfnrIyBtXyEyfqFLs0VqtFVMdZa1led7rVYTa', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV2Vmc0ZJd2pYOHk2MVlYVTFYZmtNMFhHanlCdE1qb2JWNXFjbzNzZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9fYWRtaW4vc2VjdXJlL3NlcnZpY2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1756120320),
('WHmchZr1Bvh9gsO2gr6GCqbFmrWqWn72NeLJpThq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY2FSSXNqd1hJODZTWW9aT3dsVGw3bjl2TXBxaDJUTW5QWWprYmd2RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9fYWRtaW4vc2VjdXJlL3NlcnZpY2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1756107107),
('xbV95IyZGXzuBDXxrhCFY1OTurQpmwpPHFY0LlI2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibE9ocEdzVjExckVYQXlJT0tNcjFlVzI4TXlHQnV0eVluaFRoU0RTYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9fYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774850112),
('YyV1Z2uBhnbCO0r6saYC5HgyoaOJNdkXYUyp3loN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoianpOZDFSSmd1bkZlaHJLV1ZWdEZkUml2anl5NTMzYmV4RG0yVDJPYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ZXN0aW1vbmlhbHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774868504);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_appointments`
--
ALTER TABLE `book_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_gallery`
--
ALTER TABLE `home_gallery`
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
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`seo_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
