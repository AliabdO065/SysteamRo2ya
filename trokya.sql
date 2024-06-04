-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 04:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trokya`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'intro', 'name=#=إنجاز للبرمحيات#x#header=#=شركة إنجاز لتطوير البرمجيات#x#wordheader=#=إنجاز للبرمجيات هي وكالة تعتمد على النتائج وتقوم بتصميم أفضل الاستراتيجيات خصيصًا لمساعدتك في تحقيق أهدافك. نحن نجمع بين الإبداع والتكنولوجيا لبناء مواقع الويب واستراتيجيات التطبيقات#x#img=#=images\\customers\\a041c920-eaa4-4930-a272-b92ee1a77a31background.png#x#imgl=#=images\\customers\\320f9d8f-60ab-462d-930d-232464ab4195logo.jpeg', NULL, NULL),
(2, 'about', 'header1=#=من نحن#x#wordheader1=#=إنجاز للبرمجيات هي وكالة تعتمد على النتائج وتقوم بتصميم أفضل الاستراتيجيات خصيصًا لمساعدتك في تحقيق أهدافك. نحن نجمع بين الإبداع والتكنولوجيا لبناء مواقع الويب واستراتيجيات التطبيقات لجعل أعمالك تزدهر في سوق الإنترنت التنافسي. اليوم. في حين أن فريقنا هي مجموعة تقدم كافة الخدمات، فإننا نقدم خدمات داخلية، مثل تصميم وتطوير مواقع الويب سريعة الاستجابة، والتجارة الإلكترونية عبر الأجهزة المحمولة، والتصميم والطباعة وبوابة الويب والأدلة، وتطوير الأجهزة المحمولة، والتطبيقات.#x#header2=#=نهجنا#x#wordheader2=#=نحن لسنا شركة تصميم وتطوير الويب النموذجية الخاصة بك نحن نستخدم التكنولوجيا المبتكرة التي تعزز تجربة المستخدمين وتمكنك من جذب العملاء، والاحتفاظ بهم. مهمتنا بسيطة ... لبناء مواقع ويب جذابة وبديهية من شأنها أن تزيد عائد استثمارك إلى أقصى حد. نحن نؤمن بأن كل شركة، سواء كانت صغيرة أو كبيرة، يجب أن تمتلك الأدوات المناسبة لتحقيق النجاح. ولذلك، فإننا نهدف باستمرار إلى إنشاء حلول ويب متميزة بناءً على متطلباتك الدقيقة وميزانيتك.#x#header3=#=جودتنا و إبداعنا#x#wordheader3=#=إذا كانت هناك صفة واحدة تلخص شركة إنجاز للبرمجيات، فهي قدرتنا على التسليم في الوقت المحدد. ونستخدم أفضل أدوات التخطيط والبرمجة و ننجز المهمة دائمًا دون المساس بقلة الجودة أو الإبداع.#x#img1=#=images\\customers\\718ed31f-fc69-4036-895c-58956783db17coding-1.jpg#x#img2=#=images\\customers\\d29c8d6a-946c-46dd-9e10-28d508e79660coding-2.jpg#x#img3=#=images\\customers\\8d67ea38-f6a7-4860-aaed-375f3059e740coding-3.jpg#x#img4=#=images\\customers\\f7587ae0-bb04-4fc0-ba79-dd01815eeb7bcoding-4.jpg#x#img5=#=images\\customers\\39e9b0e1-45aa-4e35-a28f-97e569ddb478coding5.jpg', NULL, NULL),
(3, 'service', 'header=#=برمجة المواقع ,وتطبيقات الهاتف#x#wordheader=#=خدمات تصميم مخصصة تتناسب مع هوية علامتك التجارية الفريدة.، يتم إنشاء جميع تصميماتنا مع التركيز على المستخدمين؛ من خلال رحلات محددة وعبارات تحث المستخدم على اتخاذ إجراء للحصول على تجربة مستخدم محسنة.#x#img1=#=images\\customers\\4e3d9cbf-a16f-444f-bfd5-98c96cdfd703oneimg.jpg#x#img2=#=images\\customers\\e9798de3-dc0a-4577-aad7-5b2078012a14slider-3.jpg#x#img3=#=images\\customers\\01cb5ed2-5ee2-4d6e-a206-1daf40012d46slider-1.jpg#x#img4=#=images\\customers\\7873f683-723b-4a68-ab44-f808fcc2fc62slider-2.jpg#x#img5=#=images\\customers\\f6992877-1351-4d81-bf46-d5cf35abe8c9slider-4.jpg', NULL, NULL),
(4, 'excellence', 'header1=#=التصميم#x#wordheader1=#=خدمات تصميم مخصصة تتناسب مع هوية علامتك التجارية الفريدة.، يتم إنشاء جميع تصميماتنا مع التركيز على المستخدمين؛ من خلال رحلات محددة وعبارات تحث المستخدم على اتخاذ إجراء للحصول على تجربة مستخدم محسنة.#x#header2=#=ابتكار#x#wordheader2=#=تتمتع فرقنا الإبداعية بالمزيج الصحيح من التفكير الجديد والخبرة الصناعية لإحداث تأثير حقيقي على عملك. في عالم اليوم الغني بوسائل الإعلام، تحتاج إلى التفكير بشكل كبير والتصرف بشكل مختلف لجذب انتباه الناس.#x#img1=#=images\\customers\\9e1eec89-2724-4d67-afb0-e44e2dd56876img-1.jpg#x#img2=#=images\\customers\\86bf833b-87ff-4ac3-89b5-05af5490fb63img-2.jpg', NULL, NULL),
(5, 'contact', 'address=#=مصر القاهرة زهراء مدينة نصر#x#phone=#=01222287556#x#face=#=##x#insta=#=#', NULL, NULL),
(6, 'aboutus', 'header=#=نبذه عن شركة إنجاز#x#wordheader=#=إنجاز للبرمجيات هي وكالة تعتمد على النتائج وتقوم بتصميم أفضل الاستراتيجيات خصيصًا لمساعدتك في تحقيق أهدافك. نحن نجمع بين الإبداع والتكنولوجيا لبناء مواقع الويب واستراتيجيات التطبيقات لجعل أعمالك تزدهر في سوق الإنترنت التنافسي. اليوم. في حين أن فريقنا هي مجموعة تقدم كافة الخدمات، فإننا نقدم خدمات داخلية، مثل تصميم وتطوير مواقع الويب سريعة الاستجابة، والتجارة الإلكترونية عبر الأجهزة المحمولة، والتصميم والطباعة وبوابة الويب والأدلة، وتطوير الأجهزة المحمولة، والتطبيقات.#x#img=#=images\\customers\\49c6b64c-c73c-47ea-996c-e0b31e33d0f8bg-1.png', NULL, NULL),
(7, 'services', 'title=#=برمجة المواقع#x#details=#=نحن نقدم تصميم وبرمجة المواقع مع تجربة مميزة للمستخدم والمواقع التريفيه والمواقع التجارية سهله التعامل للمستخدم ولدينا فريق عمل جاهز للتنفيذ اينما كنت مع تقنيات تكنولوجيا حديثة نحن ليس الافضل لكننا مميزين في عملنا والتطوير لو بتفكر في موقع إنجاز جاهزة معاك في وقت واينما كنت#x#img=#=images\\customers\\5c63dd5b-01f7-4e15-849c-3a2dde25abb0web.jpg#x#img2=#=images\\customers\\bcef75d8-b460-4ce6-a6b8-429e7fcf6f03web2.jpg#xt#title=#=برمجة تطبيقات الموبايل#x#details=#=نحن نقدم خدمة برمجة تطبيقات الموبايل باعلي جوده اكمنية استخدام سهل للمستخدم ومع افضل تجربة للمستخدم باستخدام احدث التقنيات في سوق العمل الحالي تطبيقك جاهز عندنا اينما كنت#x#img=#=images\\customers\\fff25eca-e8fc-443f-8b5f-26b019f803fbmopile-1.jpg#x#img2=#=images\\customers\\c2d0e8bc-9e7d-4f2e-a584-c97c2735d64fmopile-2.jpg', NULL, NULL),
(8, 'whyus', 'header=#=ليه تختار إنجاز#x#wordheader=#=لان إنجاز بتوفرلك دايما الثقة في التعامل وبتوفرلك الدعم دايما علي ال24ساعة وثقه العملاء فينا ونسعي دائما توفرلك راحه في التعامل ونعسي توفير تقنيات حديثه عالم التكنولوجيا#x#img1=#=images\\customers\\f1bba904-4a55-46a4-b29c-42bee3905504engaz-3.png#x#img2=#=images\\customers\\5a0de111-8f86-4f55-aaae-074d61f03f3cengaz-4.png#x#img3=#=images\\customers\\a1d751cd-864d-42d4-9bc6-01b8fc2a6817engazz-2.png#x#img4=#=images\\customers\\d297d1e5-0fc1-401d-96e7-902708c9fb43engaz1.png', NULL, NULL),
(9, 'images', 'img=#=images\\home\\about\\ea67fe8e-7a56-4c9e-a8ce-d2f4a3007f83scale3.jpg#xt#img=#=images\\home\\about\\ed7d4dec-bb0b-4f39-bad7-8518ac77e68fscale5.jpg#xt#img=#=images\\home\\about\\029bc852-a575-4f83-9135-6cb456e88cf8scale2.jpg', NULL, NULL),
(10, 'fields', 'title=#=المجالات الصحية و الطبية#x#details=#=لوريم إيبسوم طريقة لكتابة النصوص في النشر والتصميم الجرافيكي تستخدم بشكل شائع لتوضيح الشكل المرئي للمستند أو الخط دون الاعتماد على محتوى ذي معنى. يمكن استخدام لوريم إيبسوم قبل نشر النسخة النهائية#x#img=#=images\\customers\\6458773a-d831-448e-8ba2-510aa67810bbscale3.jpg#xt#title=#=المجالات الهندسية و المعمارية#x#details=#=لوريم إيبسوم طريقة لكتابة النصوص في النشر والتصميم الجرافيكي تستخدم بشكل شائع لتوضيح الشكل المرئي للمستند أو الخط دون الاعتماد على محتوى ذي معنى. يمكن استخدام لوريم إيبسوم قبل نشر النسخة النهائية#x#img=#=images\\customers\\c20a78e6-3836-42ba-877d-2ab3fdd8390bscale9.jpg#xt#title=#=المجالات الإدارية و المحاسبية#x#details=#=لوريم إيبسوم طريقة لكتابة النصوص في النشر والتصميم الجرافيكي تستخدم بشكل شائع لتوضيح الشكل المرئي للمستند أو الخط دون الاعتماد على محتوى ذي معنى. يمكن استخدام لوريم إيبسوم قبل نشر النسخة النهائية#x#img=#=images\\customers\\f51b9237-16b4-46d7-854d-f42bfd81ff9ascale5.jpg#xt#title=#=المجالات الذكاء الإصطناعي#x#details=#=لوريم إيبسوم طريقة لكتابة النصوص في النشر والتصميم الجرافيكي تستخدم بشكل شائع لتوضيح الشكل المرئي للمستند أو الخط دون الاعتماد على محتوى ذي معنى. يمكن استخدام لوريم إيبسوم قبل نشر النسخة النهائية#x#img=#=images\\customers\\4fc9c8c2-123d-489b-8d85-9300764b3b2fai.jpg', NULL, '2024-05-13 20:23:18'),
(11, 'rates', 'name=#=شادى ابو يوسف#x#postion=#=استاذ لغة انجليزية بجامعة المستقبل#x#comment=#=افادتني الشركة بتصميم مواقعي بشكل احترافي واتقان وجودة وسرعة التنفيذ ورائعه بقدر ما اجد من فرق بينها وبين الشركات المماثلة...#x#rate=#=3#x#img=#=images\\customers\\1afe9128-e7fa-47b6-a3cb-afbe1a705128user3.jpg#xt#name=#=محمد حماد#x#postion=#=خبير تحكيم دولي \" منازعات بحرية \"#x#comment=#=بالرغم من اننى لم تكتمل بعد اعمالى بعد مع بيانات الا اننى استفدت كثيرا من خبرة مدراء الشركة وموظفيها من حيث ما يجب ان تكون عليه تصميمات الشركة وما هو افضل حتى فى ادق التفاصيل....#x#rate=#=5#x#img=#=images\\customers\\631f202a-934b-44b6-bf3b-53df12104cc9user3.jpg#xt#name=#=ظافر العمري#x#postion=#=مدير اكبر مواقع عربية علي الانترنت#x#comment=#=ساعدنى الموقع الذى صممته لى بيانات فى التواصل مع طلابى وتوفير الخدمات التعليمية الازمة لهم بشكل احترافى استند للمعايير والشركات الدولية.#x#rate=#=4#x#img=#=images\\customers\\6de5e879-b73b-44d3-9638-9d841f663f93user3.jpg', NULL, NULL),
(12, 'articles', 'title=#=title 1 1111111111111111111111111111111111111111111111#x#title2=#=1111111111111111111111111111111111111111111111#x#details=#=1111111111111111111111111111111111111111111111  1111111111111111111111111111111111111111111111 1111111111111111111111111111111111111111111111 1111111111111111111111111111111111111111111111 1111111111111111111111111111111111111111111111 1111111111111111111111111111111111111111111111#x#img=#=images\\customers\\1e02a04a-342e-4217-8237-73750de07718img-1.jpg#xt#title=#=22222222222222222222222#x#title2=#=2222222222222222222,2222222222222,22222222222222222222#x#details=#=222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222#x#img=#=images\\customers\\f010d2bf-0718-41c6-a2a9-e41923b9431aimg-2.jpg#xt#title=#=33333333333#x#title2=#=33333333333#x#details=#=33333333333#x#img=#=images\\customers\\c04126b1-9e54-47bb-a1a2-ced55c20bf81slider-1.jpg#xt#title=#=444444444444444444444444444#x#title2=#=4444444444444444444444444444444444#x#details=#=444444444444,444444444444,444444444444,444444444444,444444444444,#x#img=#=images\\customers\\e7f00539-ae44-42c0-98e9-38d470ea2c0dslider-2.jpg', NULL, NULL),
(13, 'purvies', 'title=#=1-مجال واجهات اماميه front end#x#details=#=وجود مبدعين في هذا المجال ,وهو الواجهة التي تراها في الموقع بلغات html css js ولغات اخري مجال مهم في تصميم المواقع ,منها ui developer و front end#x#img=#=images\\customers\\a18bc4a2-c4ef-44cf-9ad3-00a930ab8c9adesign.png#xt#title=#=2- مجال الكواليس back end#x#details=#=مجال مهم جدا جدا في تطوير المواقع وهو اشياء لا تراها امامك ولكنها في كوليس الموقع من اهم لغاتها sql - database - laravel#x#img=#=images\\customers\\48cd688a-5261-44e9-ba3a-232bb74029deWebsite and applications.png#xt#title=#=3- seo#x#details=#=مجال رأع ومهم وجوده لأنه بأختصار بجعل الموقع مستجيب مع محركات البحث وافضل في البحث#x#img=#=images\\customers\\6858556c-5d16-4101-8221-011bb34ed2e7scale5.jpg#xt#title=#=4- مجال تطبيقات الموبايل Flutter#x#details=#=فلاتر هو SDK من شركة جوجل مخصص لبرمجة تطبيقات الهواتف الذكية العاملة بنظام الاندرويد وال IOS لغه برمجه لتطبيقات الموبايل#x#img=#=images\\customers\\6d00b0fc-9a1e-41b7-af47-af37f99ff4bfmopile-1.jpg', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_04_28_043747_create_sessions_table', 1),
(7, '2024_04_30_102925_create_customers_table', 1),
(8, '2024_05_08_090521_create_reports_table', 1),
(9, '2024_05_08_150740_create_projects_table', 1),
(10, '2024_05_08_160142_create_suggetions_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `team_leader_name` varchar(255) NOT NULL,
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
('D1VnSX7A6VgUhNfPQmWZX8Cmqs5b10Vt6LFVinC6', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMjFTNWYybTIxa0FJcTduTVJKblZMbngxT2RTVE1TZU5qUlNPRno1USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NjoibG9jYWxlIjtzOjI6ImFyIjt9', 1715645181),
('YsomC3RfOt38KWYXhROKNpgzrzE0oGblImbDDkyY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiM1FKNUxubWM1NW5RdEhTQVBxbFhkMUNLZDVVREZIc01yRW1PdHduVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fX0=', 1715688793);

-- --------------------------------------------------------

--
-- Table structure for table `suggetions`
--

CREATE TABLE `suggetions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('user','employee','manger','admin') NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'ali admin', 'admin', 'admin@gmail.com', '2024-05-13 20:17:21', '$2y$12$adZ291ujcd3y2EwwDQS9U.SMDyBN9VUe6/nd80R0qzXrNXD0Swiiq', NULL, NULL, NULL, 'W6WyC3WofQ', NULL, NULL, '2024-05-13 20:17:21', '2024-05-13 20:17:21'),
(2, 'Ali manger', 'manger', 'manger@gmail.com', '2024-05-13 20:17:21', '$2y$12$pRAwSpzOC14S7y60niHzVuLlKLZ71HSRO8b325ApVqxUDSumUUKPi', NULL, NULL, NULL, 'cF1tYs4Tvu', NULL, NULL, '2024-05-13 20:17:21', '2024-05-13 20:17:21'),
(3, 'Ali employee', 'employee', 'employee@gmail.com', '2024-05-13 20:17:21', '$2y$12$MV5qIygWfcpHLq0P9t4TCOd5FWYsIZSvHtm87aQcXE.iaY5Rn4iqK', NULL, NULL, NULL, 'uQduWMB1IF', NULL, NULL, '2024-05-13 20:17:21', '2024-05-13 20:17:21'),
(4, 'Ali user', 'user', 'user@gmail.com', '2024-05-13 20:17:22', '$2y$12$TK0Q8zlyx3MyvIaGfSNlSOfYZfszbxXdy9vtvZRrjvwZezR/cn6WK', NULL, NULL, NULL, 'KzIFpYoZQk', NULL, NULL, '2024-05-13 20:17:22', '2024-05-13 20:17:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `suggetions`
--
ALTER TABLE `suggetions`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suggetions`
--
ALTER TABLE `suggetions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
