-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Eki 2013, 17:53:16
-- Sunucu sürümü: 5.6.11
-- PHP Sürümü: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `graser`
--
CREATE DATABASE IF NOT EXISTS `graser` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `graser`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_detail_tr` text NOT NULL,
  `about_detail_eng` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `about_us`
--

INSERT INTO `about_us` (`id`, `about_detail_tr`, `about_detail_eng`) VALUES
(1, '<p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;"><strong style="font-size: 24px; position: relative; top: 12px; margin: 0px 4px 2px 0px;">G</strong>uis malesuada massa quis dui rhoncus volutpat. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quisque eleifend consequat malesuada. Pellentesque quis tempor ligula, vel tristique diam. Nullam vulputate est ornare nisi euismod, a dignissim tortor varius. Aenean a justo orci. Suspendisse sagittis porttitor metus, eu ornare nisi blandit in. Vestibulum sodales in odio nec aliquet.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">Curabitur malesuada nibh sit amet sapien consequat interdum. Etiam pharetra vel nisi id dapibus. Suspendisse accumsan ultricies ipsum, et euismod mi posuere ut. In scelerisque, purus et iaculis varius, libero odio dictum metus, at dignissim metus enim et purus. Aliquam at pretium magna, quis rutrum lacus. Sed sapien purus, congue sit amet sagittis vitae, aliquam quis libero. Etiam volutpat nisl ut lectus pretium, nec faucibus sem condimentum. Donec rutrum egestas tempor.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">Nunc eleifend, elit et iaculis hendrerit, sapien quam aliquet lorem, vel suscipit metus velit nec nulla. Phasellus feugiat pulvinar erat, non ultrices risus volutpat eu. Etiam non mi cursus, gravida odio at, tincidunt eros.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">Suspendisse nibh enim, blandit et nulla non, pharetra hendrerit arcu. Suspendisse potenti. Sed vehicula tincidunt euismod. Nam facilisis pharetra blandit. Donec sagittis arcu viverra, molestie lorem vestibulum, faucibus magna. Nulla porttitor tellus et felis sagittis auctor</p>', '<p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;"><strong style="font-size: 24px; position: relative; top: 12px; margin: 0px 4px 2px 0px;">G</strong>uis malesuada massa quis dui rhoncus volutpat. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quisque eleifend consequat malesuada. Pellentesque quis tempor ligula, vel tristique diam. Nullam vulputate est ornare nisi euismod, a dignissim tortor varius. Aenean a justo orci. Suspendisse sagittis porttitor metus, eu ornare nisi blandit in. Vestibulum sodales in odio nec aliquet.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">Curabitur malesuada nibh sit amet sapien consequat interdum. Etiam pharetra vel nisi id dapibus. Suspendisse accumsan ultricies ipsum, et euismod mi posuere ut. In scelerisque, purus et iaculis varius, libero odio dictum metus, at dignissim metus enim et purus. Aliquam at pretium magna, quis rutrum lacus. Sed sapien purus, congue sit amet sagittis vitae, aliquam quis libero. Etiam volutpat nisl ut lectus pretium, nec faucibus sem condimentum. Donec rutrum egestas tempor.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">Nunc eleifend, elit et iaculis hendrerit, sapien quam aliquet lorem, vel suscipit metus velit nec nulla. Phasellus feugiat pulvinar erat, non ultrices risus volutpat eu. Etiam non mi cursus, gravida odio at, tincidunt eros.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">Suspendisse nibh enim, blandit et nulla non, pharetra hendrerit arcu. Suspendisse potenti. Sed vehicula tincidunt euismod. Nam facilisis pharetra blandit. Donec sagittis arcu viverra, molestie lorem vestibulum, faucibus magna. Nulla porttitor tellus et felis sagittis auctor</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">&nbsp;</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.5;">SABAHATTİN GÜNDOĞDU&nbsp;<br>Ceramic Artist / Present</p>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin@graser.com', 'grs_54321');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `fax` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `address`, `phone`, `fax`, `email`) VALUES
(1, '1. Organize Sanayi Bölgesi Akhun Cad. No:2<div>&nbsp;06930 Sincan Ankara - TÜRKİYE</div>', '0 312 267 38 28 (pbx)', '0 312 267 40 12', 'graser@graser.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `main_slider_photo`
--

CREATE TABLE IF NOT EXISTS `main_slider_photo` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_id` int(11) NOT NULL,
  `slider_big_photo` text NOT NULL,
  `slider_thumb_photo` text NOT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `slider_id` (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Tablo döküm verisi `main_slider_photo`
--

INSERT INTO `main_slider_photo` (`photo_id`, `slider_id`, `slider_big_photo`, `slider_thumb_photo`) VALUES
(6, 1, 'assets/images/main_slider/30513_24086_9625.jpg', 'assets/images/main_slider/thumb/30513_24086_9625_thumb.jpg'),
(7, 2, 'assets/images/main_slider/12798_23903_20574.jpg', 'assets/images/main_slider/thumb/12798_23903_20574_thumb.jpg'),
(8, 3, 'assets/images/main_slider/21869_17826_12851.jpg', 'assets/images/main_slider/thumb/21869_17826_12851_thumb.jpg'),
(9, 4, 'assets/images/main_slider/6640_23401_6638.jpg', 'assets/images/main_slider/thumb/6640_23401_6638_thumb.jpg'),
(10, 5, 'assets/images/main_slider/3135_6412_597.jpg', 'assets/images/main_slider/thumb/3135_6412_597_thumb.jpg'),
(11, 6, 'assets/images/main_slider/5226_11611_14840.png', 'assets/images/main_slider/thumb/5226_11611_14840_thumb.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `main_slider_text`
--

CREATE TABLE IF NOT EXISTS `main_slider_text` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_text_title` text NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `main_slider_text`
--

INSERT INTO `main_slider_text` (`slider_id`, `slider_text_title`) VALUES
(1, '30513_24086'),
(2, '12798_23903'),
(3, '21869_17826'),
(4, '6640_23401'),
(5, '3135_6412'),
(6, '5226_11611');

-- --------------------------------------------------------

--
-- Görünüm yapısı durumu `main_slider_view`
--
CREATE TABLE IF NOT EXISTS `main_slider_view` (
`slider_id` int(11)
,`slider_text_title` text
,`photo_id` int(11)
,`slider_big_photo` text
,`slider_thumb_photo` text
);
-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pro_cat_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `product_css` text NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `pro_cat_id` (`pro_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`pro_cat_id`, `product_id`, `title`, `product_css`) VALUES
(1, 1, 'örnek doğal taş ürün1', 'ornek-dogal-tas-urun1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `pro_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `title_tr` text NOT NULL,
  `title_eng` text NOT NULL,
  `pro_cat_css` text NOT NULL,
  PRIMARY KEY (`pro_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `product_category`
--

INSERT INTO `product_category` (`pro_cat_id`, `title_tr`, `title_eng`, `pro_cat_css`) VALUES
(1, 'doğal taş ve cam', 'natural stone&glass', 'dogal-tas-ve-cam'),
(2, 'yeni kategori 2', 'new category 2', 'yeni-kategori-2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_photo`
--

CREATE TABLE IF NOT EXISTS `product_photo` (
  `product_id` int(11) NOT NULL,
  `product_photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_big_photo` text NOT NULL,
  `product_thumb_photo` text NOT NULL,
  PRIMARY KEY (`product_photo_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `product_photo`
--

INSERT INTO `product_photo` (`product_id`, `product_photo_id`, `product_big_photo`, `product_thumb_photo`) VALUES
(1, 2, 'assets/images/product/23746_19155.jpg', 'assets/images/product/thumb/23746_19155_thumb.jpg');

-- --------------------------------------------------------

--
-- Görünüm yapısı durumu `product_view`
--
CREATE TABLE IF NOT EXISTS `product_view` (
`pro_cat_id` int(11)
,`title_tr` text
,`title_eng` text
,`pro_cat_css` text
,`product_id` int(11)
,`title` text
,`product_css` text
,`product_photo_id` int(11)
,`product_big_photo` text
,`product_thumb_photo` text
);
-- --------------------------------------------------------

--
-- Görünüm yapısı `main_slider_view`
--
DROP TABLE IF EXISTS `main_slider_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `main_slider_view` AS select `main_slider_text`.`slider_id` AS `slider_id`,`main_slider_text`.`slider_text_title` AS `slider_text_title`,`main_slider_photo`.`photo_id` AS `photo_id`,`main_slider_photo`.`slider_big_photo` AS `slider_big_photo`,`main_slider_photo`.`slider_thumb_photo` AS `slider_thumb_photo` from (`main_slider_text` join `main_slider_photo`) where (`main_slider_text`.`slider_id` = `main_slider_photo`.`slider_id`);

-- --------------------------------------------------------

--
-- Görünüm yapısı `product_view`
--
DROP TABLE IF EXISTS `product_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_view` AS select `product_category`.`pro_cat_id` AS `pro_cat_id`,`product_category`.`title_tr` AS `title_tr`,`product_category`.`title_eng` AS `title_eng`,`product_category`.`pro_cat_css` AS `pro_cat_css`,`product`.`product_id` AS `product_id`,`product`.`title` AS `title`,`product`.`product_css` AS `product_css`,`product_photo`.`product_photo_id` AS `product_photo_id`,`product_photo`.`product_big_photo` AS `product_big_photo`,`product_photo`.`product_thumb_photo` AS `product_thumb_photo` from ((`product_category` join `product`) join `product_photo`) where ((`product_category`.`pro_cat_id` = `product`.`pro_cat_id`) and (`product`.`product_id` = `product_photo`.`product_id`));

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `main_slider_photo`
--
ALTER TABLE `main_slider_photo`
  ADD CONSTRAINT `main_slider_photo_ibfk_1` FOREIGN KEY (`slider_id`) REFERENCES `main_slider_text` (`slider_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`pro_cat_id`) REFERENCES `product_category` (`pro_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `product_photo`
--
ALTER TABLE `product_photo`
  ADD CONSTRAINT `product_photo_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
