-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 10:15 AM
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
-- Database: `women_motor_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `konten`, `tanggal`) VALUES
(2, 'Mengapa Bergabung dengan Club Motor Wanita Adalah Keputusan Hebat', 'Di dunia motor, perjalanan bukan hanya tentang mencapai tujuan, tetapi juga tentang pengalaman, persahabatan, dan membangun kepercayaan diri. Bagi banyak wanita, bersepeda motor adalah lebih dari sekadar alat transportasi; itu adalah gaya hidup. Dan di Club Motor Wanita, kami mengerti betul arti penting ini. Jadi, jika Anda masih ragu-ragu untuk bergabung dengan komunitas ini, artikel ini akan memberi tahu Anda mengapa bergabung dengan Club Motor Wanita adalah keputusan yang hebat.\r\n\r\n1. Komunitas yang Solid\r\nKami adalah lebih dari sekadar klub motor. Kami adalah komunitas yang solid dan mendukung. Kami hadir untuk mendukung satu sama lain, tidak hanya dalam urusan berkendara, tetapi juga dalam aspek kehidupan lainnya. Dalam keadaan apa pun, Anda tidak akan merasa sendirian. Kami adalah keluarga motor Anda yang siap membantu.\r\n\r\n2. Pergaulan yang Tak Tertandingi\r\nDi Club Motor Wanita, Anda akan menjalin persahabatan yang mendalam dengan orang-orang yang memiliki minat yang sama. Teman-teman berkendara bukan hanya teman perjalanan, tetapi juga teman sejati yang akan merayakan momen-momen besar dan kecil dalam hidup Anda.\r\n\r\n3. Inspirasi Tak Terbatas\r\nDalam komunitas kami, Anda akan menemukan wanita-wanita yang inspiratif. Mereka mungkin telah melakukan perjalanan yang mengesankan atau menghadapi tantangan yang luar biasa dalam hidup mereka. Bersama-sama, kami memotivasi satu sama lain untuk menghadapi tantangan dan meraih impian kita.\r\n\r\n4. Pelatihan yang Meningkatkan Kepercayaan Diri\r\nKami mengadakan pelatihan pengendaraan yang dirancang untuk meningkatkan keterampilan berkendara Anda. Apakah Anda seorang pemula yang baru pertama kali mengendarai motor atau seorang pengendara berpengalaman, pelatihan ini akan membantu Anda merasa lebih percaya diri di jalan.\r\n\r\n5. Perjalanan Bersama yang Tak Terlupakan\r\nKami sering mengadakan perjalanan bersama yang memungkinkan Anda menjelajahi tempat-tempat indah dengan motor sambil berbagi pengalaman dengan teman-teman klub. Perjalanan ini adalah kesempatan sempurna untuk menciptakan kenangan yang tak terlupakan.\r\n\r\n6. Merayakan Kebebasan dan Kekuatan Wanita\r\nClub Motor Wanita adalah tempat di mana kita merayakan kebebasan dan kekuatan wanita. Di atas motor, kita merasa bebas dan kuat, dan kami merayakan semangat ini dalam setiap langkah kami.\r\n\r\n7. Akses ke Sumber Daya dan Informasi\r\nKami menyediakan akses ke sumber daya dan informasi yang dapat membantu Anda merawat dan menjaga motor Anda dalam kondisi terbaik. Dari panduan perawatan hingga saran teknis, kami ada di sini untuk membantu Anda.\r\n\r\nKesimpulan\r\nBergabung dengan Club Motor Wanita bukan hanya tentang bergabung dengan klub motor biasa. Ini tentang menjadi bagian dari komunitas yang mendukung, inspiratif, dan kuat. Ini tentang merayakan semangat kebebasan dan kekuatan wanita. Ini adalah tentang menjalin persahabatan yang tak tertandingi dan merasakan pengalaman berkendara yang luar biasa. Bergabunglah dengan kami hari ini dan temukan mengapa menjadi anggota Club Motor Wanita adalah keputusan yang hebat untuk kehidupan Anda.', '2023-10-04'),
(3, 'Bersama Club Motor Wanita: Merayakan Kebebasan di Atas Dua Roda', 'Selamat datang di dunia luar biasa dari Club Motor Wanita! Di sini, kami merayakan kekuatan, keberanian, dan semangat wanita yang mengendarai motor. Komunitas kami adalah tempat di mana perempuan dari berbagai latar belakang, pengalaman, dan usia berkumpul untuk menjalani petualangan di atas dua roda. Mari kita ceritakan mengapa bergabung dengan Club Motor Wanita adalah salah satu keputusan terbaik yang pernah Anda buat.\r\n\r\nClub Motor Wanita adalah wadah di mana kami merayakan kebebasan wanita. Di atas motor, kita semua merasa bebas dan kuat. Sensasi angin yang melintasi wajah dan pemandangan indah di sepanjang perjalanan adalah pengalaman yang sulit digambarkan dengan kata-kata. Bergabunglah dengan kami untuk merayakan kebebasan ini setiap kali Anda memutar kunci dan memulai petualangan baru Anda.\r\n\r\nKami adalah keluarga. Di Club Motor Wanita, Anda akan menemukan teman-teman sebaya yang memiliki minat yang sama dengan Anda. Kami adalah komunitas yang mendukung dan peduli satu sama lain. Kami hadir untuk membantu dalam perjalanan Anda, baik itu memperbaiki motor Anda, meningkatkan keterampilan berkendara Anda, atau bahkan sekadar berbicara tentang pengalaman perjalanan Anda.\r\n\r\nApakah Anda seorang pemula yang baru saja memulai petualangan motor atau seorang pengendara berpengalaman, Club Motor Wanita memiliki sesuatu untuk semua orang. Kami menawarkan pelatihan pengendaraan yang akan meningkatkan keterampilan berkendara Anda dan membuat Anda lebih percaya diri di jalan. Kami juga menyelenggarakan lokakarya teknis yang memberikan wawasan tentang merawat dan memahami motor Anda dengan lebih baik.\r\n\r\nSalah satu momen paling memuaskan adalah perjalanan bersama dengan teman-teman klub. Kami menjelajahi tempat-tempat indah, mengatasi tantangan jalan, dan menciptakan kenangan yang akan kita ingat seumur hidup. Apakah Anda ingin menjelajahi pegunungan yang indah, pantai yang menakjubkan, atau kota-kota bersejarah, kami akan membantu Anda merencanakan petualangan yang sempurna.\r\n\r\nKami juga peduli tentang kesehatan dan kebahagiaan motor Anda. Di Club Motor Wanita, Anda akan menemukan panduan dan tips tentang merawat dan memelihara kendaraan Anda agar tetap dalam kondisi terbaik. Ini tidak hanya akan memperpanjang umur motor Anda tetapi juga akan membuat setiap perjalanan lebih aman dan menyenangkan.\r\n\r\nClub Motor Wanita adalah tempat di mana perempuan merayakan kebebasan dan persaudaraan di atas dua roda. Kami mengundang Anda untuk bergabung dengan komunitas kami dan menjalani petualangan bersama. Bersama-sama, kita akan terus merayakan semangat wanita yang tak terhentikan dan menciptakan kenangan tak terlupakan di jalan. Jadi, apa yang Anda tunggu? Bergabunglah dengan Club Motor Wanita hari ini dan rasakan sensasi kebebasan di atas motor!', '2023-10-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `admin_pk` (`username`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artikel_pk2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
