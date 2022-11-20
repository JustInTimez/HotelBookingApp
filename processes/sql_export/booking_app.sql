-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2022 at 09:46 AM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `is_cancelled` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `customer_id`, `hotel_id`, `checkin_date`, `checkout_date`, `is_cancelled`) VALUES
(23, 18, 8, '2022-11-19', '2022-11-20', 0),
(25, 18, 2, '2022-11-21', '2022-11-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `capacity` int(2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `has_wifi` tinyint(1) NOT NULL DEFAULT '0',
  `has_ac` tinyint(1) NOT NULL DEFAULT '0',
  `has_parking` tinyint(1) NOT NULL DEFAULT '0',
  `is_petfriend` tinyint(1) NOT NULL DEFAULT '0',
  `has_pool` tinyint(1) NOT NULL DEFAULT '0',
  `is_accessible` tinyint(1) NOT NULL DEFAULT '0',
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `image`, `address`, `price`, `capacity`, `description`, `has_wifi`, `has_ac`, `has_parking`, `is_petfriend`, `has_pool`, `is_accessible`, `rating`) VALUES
(1, 'ATKV Goudini Spa', 'GoudiniSpa.jpg', 'Wyzersdrift Road, Rawsonville, 6845', 345, 2, 'Laid-back resort offering dining, mini-golf & a hot spring bath, plus indoor & outdoor pools.', 1, 1, 1, 0, 0, 0, 4),
(2, 'Peace of Eden Vegan Nature Lodge', 'PeaceOfEden.jpg', '49 Rheenendal Rd 8.2 km from N 2, left side, Rheenendal, Knysna, 6576', 270, 2, 'Rustic-chic cottages & retro tents on an ecolodge offering activities & vegan/vegetarian meals.', 1, 1, 1, 1, 1, 0, 4.2),
(3, 'Rivers End Farm Stanford', 'RiversEndFarmStanford.jpg', 'Wortelgat Rd, Stanford, 7210', 500, 4, 'Good location overall for sightseeing, recreation, dining and getting around', 1, 0, 1, 0, 1, 0, 3),
(4, 'Gecko Rock Private Nature Reserve', 'GeckoRockPrivateNatureReserve.jpg', 'Nougaspoort, Touws River, 6880', 280, 2, 'Gecko Rock Private Nature Reserve is nestled in the Nougaspoort Valley, just 25 km from Touwsrivier, and offers visitors an eco-adventure destination.', 0, 1, 1, 1, 0, 1, 3.9),
(5, 'The Manor House at Knorhoek Estate', 'TheManorHouseKnorhoekEstate.jpg', '37 Knorhoek Rd, Helderberg Rural, Sir Lowry\'s Pass, 7133', 369, 8, 'Warm quarters in a laid-back inn offering a restaurant & an outdoor pool, plus mountain views.', 1, 1, 1, 0, 1, 1, 4.8),
(6, 'Rooiberg Lodge', 'RooibergLodge.jpg', '62 Rd, Van Wyksdorp, 6690', 500, 2, 'Casual quarters in a down-to-earth lodge offering dining & a barbecue area, plus event space.', 0, 1, 1, 1, 0, 1, 3.6),
(7, 'Formosa Bay Resort', 'FormosaBayResort.jpg', 'N2, Plettenberg Bay, 6600', 900, 4, 'Located only 3km from the famous Plettenberg Bay Beach, Formosa Bay is a welcoming, lifestyle resort with on-site attractions for kids of all ages.', 1, 1, 1, 1, 1, 1, 4.9),
(8, 'Blouberg Beach Retreat', 'BloubergBeachRetreat.jpg', '27 Dipidax Rd, Table View, City Town, 7441', 553, 2, 'At the guesthouse, all rooms are equipped with a patio with a pool view. All rooms come with an electric tea pot and a private bathroom with a shower, while selected rooms here will provide you with a kitchen equipped with a microwave.', 1, 0, 1, 0, 0, 1, 3.5),
(9, 'Swartvlei Equestrian Estate - Luxury Cottage', 'SwartvleiEquestrianEstate.jpg', 'Wolwerivier, Knysna, 6570', 935, 2, 'Swartvlei Equestrian Estate is situated within 17 km of the coastal town of Sedgefield, 21 km from Goukamma Nature Reserve. Rooms come with a flat-screen TV with satellite channels. Some units have a seating area where you can relax.', 0, 1, 1, 1, 0, 1, 4.5),
(10, 'Du Kloof Lodge', 'DuKloofLodge.jpg', 'N1 Hwy & Dutoits Kloof Pass, Paarl, 6849', 1000, 2, 'Polished hotel offering serene rooms & suites, plus informal dining & an open-air pub.', 1, 1, 1, 0, 0, 0, 4.3),
(11, 'Grande Kloof Boutique Hotel', 'GrandKloofHotel.jpg', '69 Kloof Rd, Fresnaye, Cape Town, 8005', 462, 4, 'Casual quarters in a laid-back hotel offering ocean views, an outdoor pool, a spa & breakfast.', 1, 1, 1, 0, 1, 1, 4),
(12, 'Hotel Sky Cape Town', 'HotelSkyCT.jpg', '9 Lower Long St, Foreshore, Cape Town, 80009 Lower Long St, Foreshore, Cape Town, 8000', 1200, 2, 'Ultrachic high-rise hotel offering a rooftop thrill ride, plus a restaurant with city & ocean views.', 1, 1, 0, 0, 1, 1, 4.8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_no` varchar(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `department` varchar(40) DEFAULT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `contact_no`, `dob`, `department`, `role`) VALUES
(18, 'Justin', 'Oost', 'justin@woohoo.com', '12345', '1234567891', '2022-11-14', 'Admin', 'staff'),
(19, 'What', 'The', 'idk@gmail.com', 'hahaha', NULL, NULL, NULL, 'customer'),
(31, 'Duane', 'Scheepers', 'duane@codespace.co.za', '123456', NULL, NULL, NULL, 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `bookings_ibfk_1` (`customer_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
