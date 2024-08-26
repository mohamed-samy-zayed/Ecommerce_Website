-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 08:55 PM
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
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `alarm_watch`
--

CREATE TABLE `alarm_watch` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Floor Spotlight',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'alarm_watch',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(500) NOT NULL DEFAULT '"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة."'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alarm_watch`
--

INSERT INTO `alarm_watch` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/1/', 'brown', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(2, 'Alarm Watch', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/2/', 'white', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(3, 'Alarm Watch', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/3/', 'black', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(4, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/4/', 'red', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(5, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/5/', 'white', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(6, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/6/', 'black', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(7, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/7/', 'brown', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(8, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/8/', 'white', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(9, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/9/', 'blue', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(10, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/10/', 'black', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(11, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/11/', 'black', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(12, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/12/', 'white', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(13, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/13/', 'brown', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(14, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/14/', 'black', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(15, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/15/', 'black', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(16, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/16/', 'white', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(17, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/17/', 'green', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(18, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/18/', 'blue', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(19, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/19/', 'black', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"'),
(20, 'Alarm Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/alarm/20/', 'blue', 'alarm_watch', 'furniture', '\"تقدم مجموعتنا من ساعات الإنذار جمالًا ووظائف فائقة. تصميمات عصرية متنوعة تتيح لك اختيار الساعة التي تناسب ذوقك واحتياجاتك. مع ميزات الإنذار الموثوقة والأناقة الرائعة، ستكون ساعتك الجديدة رفيقًا مثاليًا لتنظيم وقتك بأناقة.\"');

-- --------------------------------------------------------

--
-- Table structure for table `carpets`
--

CREATE TABLE `carpets` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Fan',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'fan',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(255) NOT NULL DEFAULT 'There is No information, about This Product'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carpets`
--

INSERT INTO `carpets` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Carpet 1', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/1/', 'brown', 'carpets', 'furniture', '\"استمتع بالفخامة غير المسبوقة مع سجادتنا الرائعة، المُصنعة بعناية فائقة لترفع مستوى مساحتك بملمسها الفاخر وأناقتها الخالدة. حوّل أي غرفة إلى ملاذ من الراحة والأناقة.\"'),
(2, 'Carpet 2', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/carpets/2/', 'white', 'carpets', 'furniture', '\"Experience unparalleled luxury with our exquisite carpet, meticulously crafted to elevate your space with its plush texture and timeless elegance. Transform any room into a haven of comfort and style.\"'),
(3, 'Carpet 3', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/3/', 'black', 'carpets', 'furniture', 'There is No information, about This Product'),
(4, 'Carpet 4', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/4/', 'red', 'carpets', 'furniture', 'There is No information, about This Product'),
(5, 'Carpet 5', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/5/', 'white', 'carpets', 'furniture', 'There is No information, about This Product'),
(6, 'Carpet 6', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/6/', 'black', 'carpets', 'furniture', 'There is No information, about This Product'),
(7, 'Carpet 7', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/7/', 'brown', 'carpets', 'furniture', 'There is No information, about This Product'),
(8, 'Carpet 8', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/8/', 'white', 'carpets', 'furniture', 'There is No information, about This Product'),
(9, 'Carpet 9', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/9/', 'blue', 'carpets', 'furniture', 'There is No information, about This Product'),
(10, 'Carpet 10', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/10/', 'black', 'carpets', 'furniture', 'There is No information, about This Product'),
(11, 'Carpet 11', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/11/', 'black', 'carpets', 'furniture', 'There is No information, about This Product'),
(12, 'Carpet 12', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/12/', 'white', 'carpets', 'furniture', 'There is No information, about This Product'),
(13, 'Carpet 13', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/13/', 'brown', 'carpets', 'furniture', 'There is No information, about This Product'),
(14, 'Carpet 14', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/14/', 'black', 'carpets', 'furniture', 'There is No information, about This Product'),
(15, 'Carpet 15', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/15/', 'black', 'carpets', 'furniture', 'There is No information, about This Product'),
(16, 'Carpet 16', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/16/', 'white', 'carpets', 'furniture', 'There is No information, about This Product'),
(17, 'Carpet 17', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/17/', 'green', 'carpets', 'furniture', 'There is No information, about This Product'),
(18, 'Carpet 18', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/18/', 'blue', 'carpets', 'furniture', 'There is No information, about This Product'),
(19, 'Carpet 19', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/19/', 'black', 'carpets', 'furniture', 'There is No information, about This Product'),
(20, 'Carpet 20', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/carpets/20/', 'blue', 'carpets', 'furniture', 'There is No information, about This Product');

-- --------------------------------------------------------

--
-- Table structure for table `chairs`
--

CREATE TABLE `chairs` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Fan',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'fan',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(500) NOT NULL DEFAULT '"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك."'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chairs`
--

INSERT INTO `chairs` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Chair 1', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/1/', 'brown', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(2, 'Chair 2', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/chairs/2/', 'white', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(3, 'Chair 3', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/3/', 'black', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(4, 'Chair 4', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/4/', 'red', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(5, 'Chair 5', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/5/', 'white', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(6, 'Chair 6', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/6/', 'black', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(7, 'Chair 7', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/7/', 'brown', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(8, 'Chair 8', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/8/', 'white', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(9, 'Chair 9', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/9/', 'blue', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(10, 'Chair 10', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/10/', 'black', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(11, 'Chair 11', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/11/', 'black', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(12, 'Chair 12', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/12/', 'white', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(13, 'Chair 13', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/13/', 'brown', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(14, 'Chair 14', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/14/', 'black', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(15, 'Chair 15', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/15/', 'black', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(16, 'Chair 16', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/16/', 'white', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(17, 'Chair 17', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/17/', 'green', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(18, 'Chair 18', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/18/', 'blue', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(19, 'Chair 19', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/19/', 'black', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"'),
(20, 'Chair 20', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/chairs/20/', 'blue', 'chairs', 'furniture', '\"تقدم مجموعتنا من الكراسي توازنًا مثاليًا بين الأناقة والراحة. تصميمات متنوعة توفر دعمًا مريحًا وجودة استثنائية. من الكراسي العصرية لغرف المعيشة إلى الكراسي الأنيقة لغرف الطعام، ستجد لدينا مجموعة تلبي احتياجاتك في كل مكان في منزلك.\"');

-- --------------------------------------------------------

--
-- Table structure for table `electric`
--

CREATE TABLE `electric` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Fan',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'fan',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(500) NOT NULL DEFAULT '"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة."'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electric`
--

INSERT INTO `electric` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Electric 1', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/1/', 'brown', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(2, 'Electric 2', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/electric/2/', 'white', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(3, 'Electric 3', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/3/', 'black', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(4, 'Electric 4', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/4/', 'red', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(5, 'Electric 5', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/5/', 'white', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(6, 'Electric 6', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/6/', 'black', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(7, 'Electric 7', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/7/', 'brown', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(8, 'Electric 8', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/8/', 'white', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(9, 'Electric 9', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/9/', 'blue', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(10, 'Electric 10', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/10/', 'black', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(11, 'Electric 11', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/11/', 'black', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(12, 'Electric 12', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/12/', 'white', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(13, 'Electric 13', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/13/', 'brown', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(14, 'Electric 14', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/14/', 'black', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(15, 'Electric 15', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/15/', 'black', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(16, 'Electric 16', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/16/', 'white', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(17, 'Electric 17', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/17/', 'green', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(18, 'Electric 18', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/18/', 'blue', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(19, 'Electric 19', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/19/', 'black', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"'),
(20, 'Electric 20', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/electric/20/', 'blue', 'electric', 'furniture', '\"مجموعتنا من الأجهزة الكهربائية توفر لك الأداء العالي والموثوقية. تصميمات مبتكرة وتقنيات متطورة تجمع بين الأداء القوي والاستخدام السهل. من الأجهزة المنزلية الذكية إلى الأجهزة الإلكترونية الشخصية، ستجد لدينا مجموعة واسعة تلبي احتياجاتك اليومية بكفاءة وراحة.\"');

-- --------------------------------------------------------

--
-- Table structure for table `fan`
--

CREATE TABLE `fan` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Fan',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'fan',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(500) NOT NULL DEFAULT '"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة."'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fan`
--

INSERT INTO `fan` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/1/', 'brown', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(2, 'Fan', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/fan/2/', 'white', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(3, 'Fan', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/3/', 'black', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(4, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/4/', 'red', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(5, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/5/', 'white', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(6, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/6/', 'black', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(7, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/7/', 'brown', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(8, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/8/', 'white', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(9, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/9/', 'blue', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(10, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/10/', 'black', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(11, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/11/', 'black', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(12, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/12/', 'white', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(13, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/13/', 'brown', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(14, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/14/', 'black', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(15, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/15/', 'black', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(16, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/16/', 'white', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(17, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/17/', 'green', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(18, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/18/', 'blue', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(19, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/19/', 'black', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"'),
(20, 'Fan', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/fan/20/', 'blue', 'fan', 'furniture', '\"تقدم مجموعتنا من المراوح التهوية الفعالة والعملية. تصاميم عصرية متنوعة توفر تدفق هواء منعش للحفاظ على بيئة منزلك منعشة ومريحة. مع مجموعة متنوعة من الحجم والأساليب، ستجد لدينا المروحة المناسبة لتلبية احتياجات التهوية في منزلك بكل سهولة وراحة.\"');

-- --------------------------------------------------------

--
-- Table structure for table `floor_spotlight`
--

CREATE TABLE `floor_spotlight` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Floor Spotlight',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'floor_spotlight',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(500) NOT NULL DEFAULT '"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك."'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `floor_spotlight`
--

INSERT INTO `floor_spotlight` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/1/', 'brown', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(2, 'Floor Spotlight', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/2/', 'white', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(3, 'Floor Spotlight', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/3/', 'black', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(4, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/4/', 'red', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(5, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/5/', 'white', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(6, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/6/', 'black', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(7, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/7/', 'brown', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(8, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/8/', 'white', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(9, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/9/', 'blue', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(10, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/10/', 'black', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(11, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/11/', 'black', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(12, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/12/', 'white', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(13, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/13/', 'brown', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(14, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/14/', 'black', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(15, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/15/', 'black', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(16, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/16/', 'white', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(17, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/17/', 'green', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(18, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/18/', 'blue', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(19, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/19/', 'black', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"'),
(20, 'Floor Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/floor/20/', 'blue', 'floor_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الأرضية إضاءة فعالة وجذابة. تصاميم عصرية توفر إضاءة مثالية لإبراز جمال وديكور منزلك. مع مجموعة متنوعة من الأشكال والأحجام، ستضيف أضواء الأرضية لمسة جمالية وأناقة إلى أي مساحة في منزلك.\"');

-- --------------------------------------------------------

--
-- Table structure for table `roof_spotlight`
--

CREATE TABLE `roof_spotlight` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Roof Spotlight',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'roof_spotlight',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(500) NOT NULL DEFAULT '"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك."'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roof_spotlight`
--

INSERT INTO `roof_spotlight` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/1/', 'brown', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(2, 'Roof Spotlight', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/2/', 'white', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(3, 'Roof Spotlight', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/3/', 'black', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(4, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/4/', 'red', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(5, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/5/', 'white', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(6, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/6/', 'black', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(7, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/7/', 'brown', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(8, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/8/', 'white', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(9, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/9/', 'blue', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(10, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/10/', 'black', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(11, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/11/', 'black', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(12, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/12/', 'white', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(13, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/13/', 'brown', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(14, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/14/', 'black', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(15, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/15/', 'black', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(16, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/16/', 'white', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(17, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/17/', 'green', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(18, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/18/', 'blue', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(19, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/19/', 'black', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"'),
(20, 'Roof Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/roof/20/', 'blue', 'roof_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء السقف إضاءة مثالية وجذابة لمساحاتك الداخلية. تصميمات عصرية ومتنوعة توفر إضاءة ساطعة وموحدة لتحسين جمال ووظيفة داخلية المنزل. مع مجموعة متنوعة من الأنماط والأحجام، ستضيف أضواء السقف لمسة من الأناقة والإشراق إلى أي غرفة في منزلك.\"');

-- --------------------------------------------------------

--
-- Table structure for table `special_watch`
--

CREATE TABLE `special_watch` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Floor Spotlight',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'special_watch',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(500) NOT NULL DEFAULT '"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة."'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `special_watch`
--

INSERT INTO `special_watch` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/1/', 'brown', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(2, 'Special Watch', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/2/', 'white', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(3, 'Special Watch', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/3/', 'black', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(4, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/4/', 'red', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(5, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/5/', 'white', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(6, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/6/', 'black', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(7, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/7/', 'brown', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(8, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/8/', 'white', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(9, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/9/', 'blue', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(10, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/10/', 'black', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(11, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/11/', 'black', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(12, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/12/', 'white', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(13, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/13/', 'brown', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(14, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/14/', 'black', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(15, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/15/', 'black', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(16, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/16/', 'white', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(17, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/17/', 'green', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(18, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/18/', 'blue', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(19, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/19/', 'black', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"'),
(20, 'Special Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/special/20/', 'blue', 'special_watch', 'furniture', '\"تقدم مجموعتنا من الساعات الخاصة تصميمات فريدة وفاخرة تعكس الأناقة والفخامة. تصنع هذه الساعات بأعلى معايير الجودة والحرفية، مما يجعلها تحفًا فنية تستحق الاحتفاظ بها. بتفاصيل دقيقة وتصاميم مذهلة، تقدم هذه الساعات تجربة فريدة ومميزة لمن يبحثون عن الاستثمار في الأناقة والأناقة.\"');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Fan',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'fan',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(500) NOT NULL DEFAULT '"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب."'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Table 1', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/1/', 'brown', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(2, 'Table 2', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/tables/2/', 'white', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(3, 'Table 3', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/3/', 'black', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(4, 'Table 4', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/4/', 'red', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(5, 'Table 5', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/5/', 'white', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(6, 'Table 6', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/6/', 'black', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(7, 'Table 7', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/7/', 'brown', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(8, 'Table 8', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/8/', 'white', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(9, 'Table 9', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/9/', 'blue', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(10, 'Table 10', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/10/', 'black', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(11, 'Table 11', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/11/', 'black', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(12, 'Table 12', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/12/', 'white', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(13, 'Table 13', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/13/', 'brown', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(14, 'Table 14', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/14/', 'black', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(15, 'Table 15', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/15/', 'black', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(16, 'Table 16', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/16/', 'white', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(17, 'Table 17', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/17/', 'green', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(18, 'Table 18', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/18/', 'blue', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(19, 'Table 19', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/19/', 'black', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"'),
(20, 'Table 20', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/tables/20/', 'blue', 'tables', 'furniture', '\"تقدم مجموعتنا من الطاولات مزيجًا مثاليًا من الأناقة والوظائف المتعددة. تصاميم متنوعة تتناسب مع جميع أنماط الديكور والاحتياجات. من الطاولات العصرية ذات الطابع الفني إلى الطاولات العملية والوظيفية، ستجد لدينا مجموعة متنوعة تلبي جميع احتياجاتك في المنزل أو المكتب.\"');

-- --------------------------------------------------------

--
-- Table structure for table `table_spotlight`
--

CREATE TABLE `table_spotlight` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Table Spotlight',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'table_spotlight',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(500) NOT NULL DEFAULT '"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك."'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_spotlight`
--

INSERT INTO `table_spotlight` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/1/', 'brown', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(2, 'Table Spotlight', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/2/', 'white', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(3, 'Table Spotlight', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/3/', 'black', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(4, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/4/', 'red', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(5, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/5/', 'white', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(6, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/6/', 'black', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(7, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/7/', 'brown', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(8, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/8/', 'white', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(9, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/9/', 'blue', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(10, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/10/', 'black', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(11, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/11/', 'black', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(12, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/12/', 'white', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(13, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/13/', 'brown', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(14, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/14/', 'black', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(15, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/15/', 'black', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(16, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/16/', 'white', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(17, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/17/', 'green', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(18, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/18/', 'blue', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(19, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/19/', 'black', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"'),
(20, 'Table Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/table/20/', 'blue', 'table_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الطاولة إضاءة مثالية وجذابة لمساحات العمل أو القراءة. تصاميم متنوعة توفر إضاءة دافئة وموجهة للمساعدة في التركيز والإبداع. مع مجموعة متنوعة من الأنماط والأحجام والألوان، ستضيف أضواء الطاولة لمسة من الأناقة والإضاءة إلى أي مكان في منزلك أو مكتبك.\"');

-- --------------------------------------------------------

--
-- Table structure for table `table_watch`
--

CREATE TABLE `table_watch` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Floor Spotlight',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'table_watch',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(500) NOT NULL DEFAULT '"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والوظائف العملية. مع تصاميم متنوعة، تضيف لمسة من الرقي إلى أي مكتب أو إعداد منزلي. تتميز هذه الساعات بدقة في قياس الوقت وجماليات أنيقة، تناسب مختلف الأذواق. متوفرة بأحجام مختلفة وتشطيبات رائعة، ترفع هذه الساعات مستوى ديكور المساحة بلمسة راقية."'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_watch`
--

INSERT INTO `table_watch` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/1/', 'brown', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(2, 'Table Watch', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/2/', 'white', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(3, 'Table Watch', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/3/', 'black', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(4, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/4/', 'red', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(5, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/5/', 'white', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(6, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/6/', 'black', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(7, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/7/', 'brown', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(8, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/8/', 'white', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(9, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/9/', 'blue', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(10, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/10/', 'black', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(11, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/11/', 'black', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(12, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/12/', 'white', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(13, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/13/', 'brown', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(14, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/14/', 'black', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(15, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/15/', 'black', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(16, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/16/', 'white', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(17, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/17/', 'green', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(18, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/18/', 'blue', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(19, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/19/', 'black', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"'),
(20, 'Table Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/table/20/', 'blue', 'table_watch', 'furniture', 'It seems like you\'re referring to watches that are placed on tables, often referred to as \"table clocks\" or \"desk clocks\". Here\'s a description:  \"مجموعتنا من ساعات الطاولة تجمع بين الأناقة والفعالية. تصميمات فريدة تضيف لمسة من الجمال إلى أي مكتب أو منزل. تتميز هذه الساعات بدقة في الوقت وتصميمات فخمة تعكس ذوقك الرفيع. بأشكال متنوعة وتشطيبات رائعة، ستكون هذه الساعات إضافة رائعة إلى ديكورك الداخلي.\"');

-- --------------------------------------------------------

--
-- Table structure for table `wall_spotlight`
--

CREATE TABLE `wall_spotlight` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Wall Spotlight',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'wall_spotlight',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(500) NOT NULL DEFAULT '"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك."'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wall_spotlight`
--

INSERT INTO `wall_spotlight` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/1/', 'brown', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(2, 'Wall Spotlight', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/2/', 'white', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(3, 'Wall Spotlight', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/3/', 'black', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(4, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/4/', 'red', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(5, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/5/', 'white', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(6, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/6/', 'black', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(7, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/7/', 'brown', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(8, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/8/', 'white', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(9, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/9/', 'blue', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(10, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/10/', 'black', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(11, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/11/', 'black', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(12, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/12/', 'white', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(13, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/13/', 'brown', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(14, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/14/', 'black', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(15, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/15/', 'black', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(16, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/16/', 'white', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(17, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/17/', 'green', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(18, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/18/', 'blue', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(19, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/19/', 'black', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"'),
(20, 'Wall Spotlight', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/spotlight/wall/20/', 'blue', 'wall_spotlight', 'furniture', '\"تقدم مجموعتنا من أضواء الحائط إضاءة مميزة وجذابة لديكور منزلك. تصميمات عصرية ومتنوعة توفر إضاءة هادئة وموجهة لتسليط الضوء على أماكن محددة في الغرفة. مع مجموعة متنوعة من الأشكال والأحجام والألوان، ستضيف أضواء الحائط لمسة من الجمال والأناقة إلى أي جدار في منزلك.\"');

-- --------------------------------------------------------

--
-- Table structure for table `wall_watch`
--

CREATE TABLE `wall_watch` (
  `id` int(5) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT 'Floor Spotlight',
  `price` float DEFAULT NULL,
  `old_price` float DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'wall_watch',
  `kind` varchar(255) NOT NULL DEFAULT 'furniture',
  `info` varchar(500) NOT NULL DEFAULT '"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي."'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wall_watch`
--

INSERT INTO `wall_watch` (`id`, `name`, `price`, `old_price`, `img_url`, `color`, `category`, `kind`, `info`) VALUES
(1, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/1/', 'brown', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(2, 'Wall Watch', 149.99, 200, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/2/', 'white', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(3, 'Wall Watch', 180, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/3/', 'black', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(4, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/4/', 'red', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(5, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/5/', 'white', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(6, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/6/', 'black', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(7, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/7/', 'brown', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(8, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/8/', 'white', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(9, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/9/', 'blue', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(10, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/10/', 'black', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(11, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/11/', 'black', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(12, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/12/', 'white', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(13, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/13/', 'brown', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(14, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/14/', 'black', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(15, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/15/', 'black', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(16, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/16/', 'white', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(17, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/17/', 'green', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(18, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/18/', 'blue', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(19, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/19/', 'black', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"'),
(20, 'Wall Watch', 179.99, 215, 'http://localhost/all/project/ecommerce/img/furniture/watches/wall/20/', 'blue', 'wall_watch', 'furniture', 'It appears you\'re referring to wall clocks or clocks that are mounted on walls. Here\'s a description:  \"مجموعتنا من الساعات الحائطية تجمع بين الأناقة والوظائف العملية. تصميمات متنوعة تضيف لمسة من الفخامة إلى أي مكان في المنزل أو المكتب. تتميز هذه الساعات بأداء دقيق وموثوق به وتصاميم أنيقة تناسب جميع الأذواق. بأحجام مختلفة وأشكال رائعة، ستضيف هذه الساعات الحائطية لمسة من الأناقة والتميز إلى ديكورك الداخلي.\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alarm_watch`
--
ALTER TABLE `alarm_watch`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `carpets`
--
ALTER TABLE `carpets`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `chairs`
--
ALTER TABLE `chairs`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `electric`
--
ALTER TABLE `electric`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fan`
--
ALTER TABLE `fan`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `floor_spotlight`
--
ALTER TABLE `floor_spotlight`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `roof_spotlight`
--
ALTER TABLE `roof_spotlight`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `special_watch`
--
ALTER TABLE `special_watch`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `table_spotlight`
--
ALTER TABLE `table_spotlight`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `table_watch`
--
ALTER TABLE `table_watch`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `wall_spotlight`
--
ALTER TABLE `wall_spotlight`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `wall_watch`
--
ALTER TABLE `wall_watch`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
