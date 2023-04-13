-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:8889
-- 產生時間： 2023 年 04 月 05 日 10:28
-- 伺服器版本： 5.7.39
-- PHP 版本： 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `COMP3521`
--

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_price` varchar(9999) NOT NULL,
  `product_rate` int(5) NOT NULL,
  `product_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_price`, `product_rate`, `product_picture`) VALUES
(1, 'SMART THERMOSTAT', 'Control from anywhere using your Android or iOS device Add SmartSensor to manage hot or cold spots and deliver enhanced comfort to the rooms that matter most Automatically pauses your heating or cooling when a door or window is left open (requires ecobee SmartSensor for doors and windows and a Smart Security subscription)', '32', 4, 'prod1.jpg'),
(2, 'SMART PLUG', 'Smart Home WiFi Outlet Works with Alexa, Echo and Google Home, No Hub Required, Remote Control, 2.4GHz WiFi Required, 15 Amp, UL Certified, 2-Pack , white', '20', 4, 'prod2.jpg'),
(3, 'SMART KEYPAD', 'Secure, code-based home entry Accessory for the August Smart Lock. Operating Temperature is -13 to 122 Fahrenheit (-25℃ to 50℃). Power Source Type: Battery Operated', '87.5', 2, 'prod3.jpg'),
(4, 'SMART LIGHT SWITCH', 'Neutral Wire and 2.4GHz Wi-Fi Connection Required, Not Dimmer Switch, Works with Alexa and Google Home, No Hub Required, UL Certified, 3-Pack , White', '14', 3, 'prod4.jpg'),
(5, 'SMART LIGHT BULB', 'Smart WiFi LED Bulbs Compatible with Alexa, Google Home and SmartThings, Dimmable E26 Multicolor 2700K-6500K RGBWW, 810 Lumens 60W Equivalent, No Hub Required', '9', 5, 'prod5.jpg'),
(6, 'OUTDOOR SMART PLUG', 'Duo Wi-Fi Smart Plug, Weatherproof, No Hub Required, Wireless Remote Control and Timer -Smart Plug Compatible with Alexa, The Google Assistant (2 Outlets)', '150', 2, 'prod6.jpg'),
(7, 'SMART CAM', '2.4GHz Wi-Fi Connection Required, 1080p (Full HD), Up to 30 ft Night Vision, Up to 128 GB microSD Card Slot, Works w/Alexa and Google', '120', 4, 'prod7.jpg'),
(8, 'OUTDOOR HOME CAMERA', 'Outdoor Home Security Camera with Spotlight, 1080P HD WiFi Camera, PIR Motion Detection, Two-Way Talk and Siren Alarm, IP65 Waterproof, Micro SD Card Storage', '110', 1, 'prod8.jpg'),
(9, 'HEXA LIGHT PANELS', 'RGBIC Hexagon Lights, Wi-Fi Wall Lights, DIY Design, Music Sync, App Control, Works with Alexa & Google Assistant, for Gaming, Streaming, and Decor, 10 LED Panels', '80', 3, 'prod9.jpg'),
(10, 'SMART WINDOW SENSOR', 'Wireless Smart Door/Window Sensor - White (2-Pack) | Compatible with Alexa and Google Assistant, No Hub Required - from Stitch Collection', '135', 3, 'prod10.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `user_name` varchar(999) NOT NULL,
  `user_email` varchar(999) NOT NULL,
  `user_password` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`user_name`, `user_email`, `user_password`) VALUES
('1', '1', '1'),
('2', '2', '2'),
('Jason', '00@00', '123321'),
('jason123', 'jasonlik@yahoo.com.hk', '123321'),
('jason1234', 'jasonlik@yahoo.com.hk', '123321'),
('Sunny2', 'abc123@gmail.com', 'Ln60156178'),
('Sunny3', 'abc1234@gmail.com', 'Ln60156178');

-- --------------------------------------------------------

--
-- 資料表結構 `user_payment`
--

CREATE TABLE `user_payment` (
  `user_name` varchar(100) NOT NULL,
  `card_number` int(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_cvv` int(100) NOT NULL,
  `card_date` int(100) NOT NULL,
  `user_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user_payment`
--

INSERT INTO `user_payment` (`user_name`, `card_number`, `card_name`, `card_cvv`, `card_date`, `user_address`) VALUES
('jason123', 1, '2', 3, 4, '5'),
('jason123', 1, '2', 3, 4, '5'),
('jason123', 1, '2', 3, 4, '5'),
('jason123', 1, '2', 3, 4, '5'),
('jason123', 1, '2', 3, 4, '5'),
('jason123', 1, '2', 3, 4, '5555'),
('jason123', 1, '2', 3, 4, '5'),
('jason123', 1, '2', 3, 4, '5'),
('jason123', 11, '11', 11, 11, '11'),
('Sunny2', 1, '1', 1, 1, '1'),
('jason123', 1234, '123132', 31231, 123123, '1231231'),
('jason123', 1, '2', 3, 4, '5'),
('jason123', 1, '2', 3, 4, '5');

-- --------------------------------------------------------

--
-- 資料表結構 `user_purchase`
--

CREATE TABLE `user_purchase` (
  `user_name` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user_purchase`
--

INSERT INTO `user_purchase` (`user_name`, `product_id`, `quantity`) VALUES
('Sunny3', 1, 1),
('Sunny2', 1, 1),
('Sunny2', 2, 1),
('jason123', 1, 1),
('jason123', 2, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
