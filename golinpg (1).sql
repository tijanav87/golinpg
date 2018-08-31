-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 01:22 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golinpg`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastename` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`user_id`, `username`, `password`, `firstname`, `lastename`, `email`, `image`, `role`, `randSalt`) VALUES
(1, 'tijana', '999', 'tijana', 'vujosevic', 'tijana.vujosevic@gmai.com', '', 'admin', ''),
(2, 'marko', '654321', 'marko', 'markovic', 'nekimail@gmai.com', '', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(3) NOT NULL,
  `menu_item` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_item`, `section`) VALUES
(1, 'PR and comunication', 'pr_and_comunication'),
(2, 'Event management', 'event_management'),
(3, 'Clients', 'clients'),
(4, 'About us', 'about_us'),
(5, 'Offices', 'offices'),
(6, 'Contact', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `pod_sadrzaj`
--

CREATE TABLE `pod_sadrzaj` (
  `id` int(3) NOT NULL,
  `id_pod_sadrzaj_section` int(3) NOT NULL,
  `pod_naslov` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pod_sadrzaj` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pod_sadrzaj`
--

INSERT INTO `pod_sadrzaj` (`id`, `id_pod_sadrzaj_section`, `pod_naslov`, `pod_sadrzaj`) VALUES
(1, 4, 'EXPLORERS', 'deliver insight and measurement through research, analytics and planning.'),
(2, 4, 'CREATORS', 'generate ideas and design and produce creative content to bring those ideas to life.'),
(3, 4, 'CONNECTORS', 'engage consumer and business audiences across earned, owned, shared and paid media.'),
(4, 4, 'CATALYSTS', 'lead business, grow client relationships, drive change and champion campaigns.');

-- --------------------------------------------------------

--
-- Table structure for table `sadrzaj`
--

CREATE TABLE `sadrzaj` (
  `id` int(3) NOT NULL,
  `id_sadrzaj_section` int(3) NOT NULL,
  `naslov` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `datum` date NOT NULL,
  `sadrzaj` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sadrzaj`
--

INSERT INTO `sadrzaj` (`id`, `id_sadrzaj_section`, `naslov`, `datum`, `sadrzaj`) VALUES
(1, 1, 'AMPLITUDO AFFILITATE OF GOLIN', '2018-08-27', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\nInteger volutpat at odio scelerisque molestie. \r\nDonec vestibulum ipsum id condimentum malesuada. Integer malesuada interdum orci, vitae feugiat eros aliquet in. Sed vel lectus convallis, porta ex acc        \r\n                 \r\n                 \r\n                 \r\n                 \r\n                 \r\n         '),
(2, 1, 'PR AND COMMUNICATIONS', '2018-08-27', '\0Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\nInteger volutpat at odio scelerisque molestie. \r\nDonec vestibulum ipsum id condimentum malesuada. Integer malesuada interdum orci, vitae feugiat eros aliquet in. \r\nSed vel lectus convallis, porta ex accumsan, varius turpis. \r\n'),
(3, 3, 'CLIENTS', '2018-08-27', ''),
(4, 4, 'We are the Relevance Agency.', '2018-08-27', 'We\'re relevance obsessed. More importantly, we\'re relevance equipped.\r\nWe are an integrated agency with PR, Digital and Content at our core. Our ambition is to create change through brave, relevant work worthy of awe, action and awards. By embracing new technologies and pushing creative boundaries, we help our clients adapt and win in a constantly evolving world.\r\n\r\nWe are committed to delivering the deepest insights, boldest ideas and broadest engagement to the world\'s leading brands through seamless integrated communications.\r\n\r\nWe\'re the nice guys who kick ass.');

-- --------------------------------------------------------

--
-- Table structure for table `sastanci`
--

CREATE TABLE `sastanci` (
  `id` int(11) NOT NULL,
  `ime_prezime` varchar(32) NOT NULL,
  `firma` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `brojtelefona` varchar(14) NOT NULL,
  `datum` date NOT NULL,
  `vrijeme` varchar(10) NOT NULL,
  `status` varchar(32) NOT NULL DEFAULT 'na cekanju'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sastanci`
--

INSERT INTO `sastanci` (`id`, `ime_prezime`, `firma`, `email`, `brojtelefona`, `datum`, `vrijeme`, `status`) VALUES
(20, 'Tijana Vujosevic', 'Neki doo', 'tijana.vujosevic87@gmail.com', '067000', '2018-08-16', '10:00', 'Odobren'),
(21, 'Marko Markovic', 'Neki doo', 'tijana.vujosevic87@gmail.com', '', '2018-08-17', '11:00', 'Na Äekanju'),
(22, 'Janko Jankovic', 'Neki doo', 'mail@mail.com', '', '2018-08-16', '11:00', 'Odbijen'),
(24, 'Tijana Vujosevic', 'Neki doo', 'tijana.vujosevic87@gmail.com', '067000000', '2018-07-01', '10:00', 'Na Äekanju'),
(25, 'Seka Gazivoda', 'Sg company doo', 'office@sgcompany.me', '069036666', '2018-08-27', '10:00', 'na cekanju'),
(28, 'Branko Vujosevic', 'Doo', 'mail@mail.com', '067000000', '2018-08-30', '00:00', 'na cekanju');

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

CREATE TABLE `slike` (
  `id` int(3) NOT NULL,
  `id_slika_section` int(3) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `naziv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`id`, `id_slika_section`, `naslov`, `naziv`) VALUES
(1, 3, '', 'client1.png'),
(2, 3, '', 'client2.png'),
(3, 3, '', 'client3.png'),
(4, 3, '', 'client4.png'),
(5, 3, '', 'client5.png'),
(6, 3, '', 'client6.png'),
(8, 5, 'Podgorica', 'podgorica.png'),
(9, 5, 'Belgrade', 'belgrade.png'),
(10, 5, 'Brussels', 'brussels.png'),
(11, 5, 'Bucharest', 'bucharest.png'),
(12, 5, 'Dubai', 'dubai.png'),
(13, 5, 'Hamburg', 'hamburg.png'),
(14, 5, 'Istanbul', 'istanbul.png'),
(15, 5, 'London', 'london.png'),
(16, 5, 'Madrid', 'madrid.png'),
(17, 5, 'Milan', 'milano.png'),
(18, 5, 'Moscow', 'moscow.png'),
(19, 5, 'Paris', 'paris.png'),
(20, 5, 'Riga', 'riga.png'),
(21, 5, 'Stockholm', 'stockholm.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `pod_sadrzaj`
--
ALTER TABLE `pod_sadrzaj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sadrzaj`
--
ALTER TABLE `sadrzaj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sastanci`
--
ALTER TABLE `sastanci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slike`
--
ALTER TABLE `slike`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pod_sadrzaj`
--
ALTER TABLE `pod_sadrzaj`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sadrzaj`
--
ALTER TABLE `sadrzaj`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sastanci`
--
ALTER TABLE `sastanci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
