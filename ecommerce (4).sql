-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jun 2016 pada 12.57
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(205) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `address`
--

INSERT INTO `address` (`id`, `uid`, `address`, `city`, `postcode`, `phone`) VALUES
(1, 6, 'Komp GBA 2 Blok L5 no. 8-9 BojongPicung', 'Bandung', '40287', '085793434357'),
(4, 12, 'Komp GBA 2 Blok L5 no. 8-9 Kecamatan Bojongsoang', 'Jakarta', '4029333', '082247034655'),
(5, 12, 'Komp GBA 2 Blok L5 no. 8-9 Kecamatan Bojongsoang', 'Jakarta', '4029333', '082247034655'),
(6, 14, 'Komplek SukaMancar', 'Bandung', '40287', '082247034655');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `expired` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cash` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `coupons`
--

INSERT INTO `coupons` (`id`, `user_id`, `code`, `expired`, `cash`) VALUES
(41, 6, '007G17', '2016-06-05 14:21:14', 100000),
(42, 6, '88FY1S', '2016-06-05 21:23:21', 100000),
(43, 12, 'INUXPS', '2016-06-05 22:36:37', 100000),
(44, 6, 'HK2Q3P', '2016-06-06 00:24:44', 100000),
(47, 14, 'XPV3VF', '2016-06-06 05:05:06', 100000),
(48, 14, 'OAXIUI', '2016-06-08 05:07:23', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` date NOT NULL,
  `pid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `uid`, `date`, `pid`, `status`) VALUES
(1, 6, '2016-06-05', 18, 3),
(2, 6, '2016-06-05', 14, 1),
(3, 6, '2016-06-05', 18, 1),
(4, 6, '2016-06-05', 18, 1),
(5, 6, '2016-06-05', 18, 1),
(6, 6, '2016-06-05', 18, 1),
(7, 6, '2016-06-05', 18, 1),
(8, 6, '2016-06-05', 18, 1),
(9, 6, '2016-06-05', 18, 1),
(10, 6, '2016-06-05', 18, 1),
(11, 12, '2016-06-06', 9, 2),
(12, 12, '2016-06-06', 8, 3),
(13, 12, '2016-06-06', 7, 1),
(14, 12, '2016-06-06', 6, 1),
(15, 12, '2016-06-06', 5, 1),
(16, 12, '2016-06-06', 4, 1),
(17, 12, '2016-06-06', 3, 1),
(18, 12, '2016-06-06', 2, 1),
(19, 12, '2016-06-06', 1, 1),
(20, 13, '2016-06-06', 17, 4),
(21, 14, '2016-06-06', 2, 3),
(22, 14, '2016-06-06', 1, 2),
(23, 14, '2016-06-06', 10, 1),
(24, 14, '2016-06-06', 9, 1),
(25, 14, '2016-06-06', 9, 1),
(26, 14, '2016-06-06', 4, 1),
(27, 14, '2016-06-06', 3, 1),
(28, 14, '2016-06-06', 2, 1),
(29, 14, '2016-06-06', 1, 1),
(30, 14, '2016-06-06', 17, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `isi` text NOT NULL,
  `replied` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `isi`, `replied`) VALUES
(24, 12, 'success', 'Terimakasih Admin', 0),
(25, 14, 'success', 'Vortex bagus sekali', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `path` text NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `path`, `description`, `category`) VALUES
(1, 'Samsung Galaxy S2', 1200000, 'SS2.jpg', 'Samsung Galaxy S2\r\nFree Description', 'Tablet'),
(2, 'Samsung Galaxy S3', 1500000, 'SS3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(3, 'Samsung Galaxy S4', 2000000, 'SS4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(4, 'Samsung Galaxy S5', 3000000, 'SS5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(5, 'Samsung Galaxy S6', 5000000, 'SS6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(6, 'Iphone 3', 2500000, 'IO3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(7, 'Iphone 4', 3000000, 'IO4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(8, 'Iphone 4s', 3500000, 'IO4S.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(9, 'Iphone 5', 5000000, 'IO5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(10, 'Iphone 5s', 5500000, 'IO5S.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(11, 'Iphone 6', 6000000, 'IO6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(12, 'Asus ROG GTX5000', 9000000, 'AROG.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(13, 'RAM Corsair Gaming 8gb', 370000, 'RAMCG.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(14, 'Mouse Gaming C9', 1000000, 'MC9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(15, 'Rexus Keyboard', 1200000, 'RK.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(16, 'Logitech Headphone A91', 600000, 'LHA91.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Tablet'),
(17, 'Canon EOS 60D', 3000000, 'canon1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'Camera'),
(18, 'LG TV 5000 10"', 3500000, 'tv1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!', 'TV');

-- --------------------------------------------------------

--
-- Struktur dari tabel `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `replies`
--

INSERT INTO `replies` (`id`, `post_id`, `content`, `date`) VALUES
(1, 25, 'okeh ', '2016-06-06 00:03:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` text,
  `stars` int(11) DEFAULT '1',
  `point` int(11) DEFAULT '0',
  `notification` int(11) NOT NULL DEFAULT '1',
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stats` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `first`, `last`, `birthday`, `password`, `foto`, `stars`, `point`, `notification`, `lastlogin`, `stats`) VALUES
(2, 'admin', 'Rayhan', 'Rezki', '2002-04-06', 'd7a273c3becade875278fc5c4391a502', '', 0, 0, 1, '2016-05-10 04:31:02', 0),
(6, 'faisal.faisal.anwar@gmail.com', 'Faisal', 'Ganteng', '1997-03-01', 'd7a273c3becade875278fc5c4391a502', NULL, 5, 0, 1, '2016-06-05 19:27:36', 0),
(12, 'ggwp@gmail.com', 'Good', 'Game', '1997-03-31', 'd7a273c3becade875278fc5c4391a502', NULL, 2, 90, 1, '2016-06-05 17:36:37', 0),
(13, 'ridwan@ganteng.com', 'Ridwan', 'Kuadrat', '1996-03-01', 'd7a273c3becade875278fc5c4391a502', NULL, 1, 10, 1, '2016-06-05 23:03:25', 0),
(14, 'rendy@gmail.com', 'rendy', 'reynaldi', '1997-03-01', 'd7a273c3becade875278fc5c4391a502', NULL, 2, 0, 1, '2016-06-08 00:07:23', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
