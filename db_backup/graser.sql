-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Eki 2013, 16:11:15
-- Sunucu sürümü: 5.5.32
-- PHP Sürümü: 5.4.16

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `about_us`
--

INSERT INTO `about_us` (`id`, `about_detail_tr`, `about_detail_eng`) VALUES
(1, '<p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;"><strong style="font-size: 24px; position: relative; top: 12px; margin: 0px 4px 2px 0px;">G</strong>uis malesuada massa quis dui rhoncus volutpat. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quisque eleifend consequat malesuada. Pellentesque quis tempor ligula, vel tristique diam. Nullam vulputate est ornare nisi euismod, a dignissim tortor varius. Aenean a justo orci. Suspendisse sagittis porttitor metus, eu ornare nisi blandit in. Vestibulum sodales in odio nec aliquet.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">Curabitur malesuada nibh sit amet sapien consequat interdum. Etiam pharetra vel nisi id dapibus. Suspendisse accumsan ultricies ipsum, et euismod mi posuere ut. In scelerisque, purus et iaculis varius, libero odio dictum metus, at dignissim metus enim et purus. Aliquam at pretium magna, quis rutrum lacus. Sed sapien purus, congue sit amet sagittis vitae, aliquam quis libero. Etiam volutpat nisl ut lectus pretium, nec faucibus sem condimentum. Donec rutrum egestas tempor.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">Nunc eleifend, elit et iaculis hendrerit, sapien quam aliquet lorem, vel suscipit metus velit nec nulla. Phasellus feugiat pulvinar erat, non ultrices risus volutpat eu. Etiam non mi cursus, gravida odio at, tincidunt eros.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">Suspendisse nibh enim, blandit et nulla non, pharetra hendrerit arcu. Suspendisse potenti. Sed vehicula tincidunt euismod. Nam facilisis pharetra blandit. Donec sagittis arcu viverra, molestie lorem vestibulum, faucibus magna. Nulla porttitor tellus et felis sagittis auctor. örnek türkçe metin...</p>', '<p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;"><strong style="font-size: 24px; position: relative; top: 12px; margin: 0px 4px 2px 0px;">G</strong>uis malesuada massa quis dui rhoncus volutpat. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quisque eleifend consequat malesuada. Pellentesque quis tempor ligula, vel tristique diam. Nullam vulputate est ornare nisi euismod, a dignissim tortor varius. Aenean a justo orci. Suspendisse sagittis porttitor metus, eu ornare nisi blandit in. Vestibulum sodales in odio nec aliquet.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">Curabitur malesuada nibh sit amet sapien consequat interdum. Etiam pharetra vel nisi id dapibus. Suspendisse accumsan ultricies ipsum, et euismod mi posuere ut. In scelerisque, purus et iaculis varius, libero odio dictum metus, at dignissim metus enim et purus. Aliquam at pretium magna, quis rutrum lacus. Sed sapien purus, congue sit amet sagittis vitae, aliquam quis libero. Etiam volutpat nisl ut lectus pretium, nec faucibus sem condimentum. Donec rutrum egestas tempor.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">Nunc eleifend, elit et iaculis hendrerit, sapien quam aliquet lorem, vel suscipit metus velit nec nulla. Phasellus feugiat pulvinar erat, non ultrices risus volutpat eu. Etiam non mi cursus, gravida odio at, tincidunt eros.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;">Suspendisse nibh enim, blandit et nulla non, pharetra hendrerit arcu. Suspendisse potenti. Sed vehicula tincidunt euismod. Nam facilisis pharetra blandit. Donec sagittis arcu viverra, molestie lorem vestibulum, faucibus magna. Nulla porttitor tellus et felis sagittis auctor. örnek ingilizce metin</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;"><span style="line-height: 18px;"><br></span></p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; font-family: Verdana, Arial, ''Myriad Pro'', sans-serif; color: rgb(75, 73, 73); line-height: 1.1;"><span style="line-height: 18px;">SABAHATTİN GÜNDOĞDU&nbsp;</span><br style="line-height: 18px;"><span style="line-height: 18px;">Ceramic Artist / Present</span><br></p>');

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
-- Tablo için tablo yapısı `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_surname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `position` text NOT NULL,
  `message` text NOT NULL,
  `cv_file_path` text NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
-- Tablo için tablo yapısı `gal`
--

CREATE TABLE IF NOT EXISTS `gal` (
  `gal_cat_id` int(11) NOT NULL,
  `gal_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `detail` text NOT NULL,
  `gal_css` text NOT NULL,
  PRIMARY KEY (`gal_id`),
  KEY `gal_cat_id` (`gal_cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gal_category`
--

CREATE TABLE IF NOT EXISTS `gal_category` (
  `gal_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `title_tr` text NOT NULL,
  `title_eng` text NOT NULL,
  `gal_cat_css` text NOT NULL,
  PRIMARY KEY (`gal_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `gal_category`
--

INSERT INTO `gal_category` (`gal_cat_id`, `title_tr`, `title_eng`, `gal_cat_css`) VALUES
(1, 'SERGİLER', 'FAIRS', 'sergiler');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gal_photo`
--

CREATE TABLE IF NOT EXISTS `gal_photo` (
  `gal_id` int(11) NOT NULL,
  `gal_photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `gal_big_photo` text NOT NULL,
  `gal_thumb_photo` text NOT NULL,
  PRIMARY KEY (`gal_photo_id`),
  KEY `gal_id` (`gal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Görünüm yapısı durumu `gal_view`
--
CREATE TABLE IF NOT EXISTS `gal_view` (
`gal_cat_id` int(11)
,`title_tr` text
,`title_eng` text
,`gal_cat_css` text
,`gal_id` int(11)
,`title` text
,`detail` text
,`gal_css` text
,`gal_photo_id` int(11)
,`gal_big_photo` text
,`gal_thumb_photo` text
);
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`pro_cat_id`, `product_id`, `title`, `product_css`) VALUES
(1, 3, 'ürün adı örnek 1', 'urun-adi-ornek-1'),
(1, 4, 'yeni ürün adı 2', 'yeni-urun-adi-2');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `product_category`
--

INSERT INTO `product_category` (`pro_cat_id`, `title_tr`, `title_eng`, `pro_cat_css`) VALUES
(1, 'DOĞAL TAŞ VE CAM', 'NATURAL STONE&GLASS', 'dogal-tas-ve-cam'),
(2, 'DİJİTAL CAM PANO VE KAROLAR', 'DIGITAL GLASS TILES AND PANEL', 'dijital-cam-pano-ve-karolar'),
(3, 'DOĞAL TAŞLAR', 'NATURAL STONES', 'dogal-taslar'),
(4, 'FÜZYON CAM', 'FUSION GLASS', 'fuzyon-cam'),
(5, 'METAL KAPLAMA DOĞAL TAŞ', 'COATED NATURAL STONE', 'metal-kaplama-dogal-tas');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `product_photo`
--

INSERT INTO `product_photo` (`product_id`, `product_photo_id`, `product_big_photo`, `product_thumb_photo`) VALUES
(3, 5, 'assets/images/product/13108_21853.jpg', 'assets/images/product/thumb/13108_21853_thumb.jpg'),
(4, 6, 'assets/images/product/14276_9901.jpg', 'assets/images/product/thumb/14276_9901_thumb.jpg');

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
-- Tablo için tablo yapısı `ref`
--

CREATE TABLE IF NOT EXISTS `ref` (
  `ref_cat_id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `detail` text NOT NULL,
  `ref_css` text NOT NULL,
  PRIMARY KEY (`ref_id`),
  KEY `ref_cat_id` (`ref_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Tablo döküm verisi `ref`
--

INSERT INTO `ref` (`ref_cat_id`, `ref_id`, `title`, `detail`, `ref_css`) VALUES
(2, 9, 'yenirefbaş', 'yeni ref detay', 'yenirefbas'),
(1, 10, 'yenirefbaş2', 'yeni referans detay2', 'yenirefbas2'),
(1, 11, 'yenirefbaş3', 'yeni referans detay3', 'yenirefbas3'),
(1, 12, 'yenirefbaş5', 'yeni referansbaş5detay', 'yenirefbas5'),
(1, 13, 'yenirefbaş666', 'yeref66başşlk', 'yenirefbas666'),
(1, 14, 'yenirefbaş8999', 'yeref999', 'yenirefbas8999');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ref_category`
--

CREATE TABLE IF NOT EXISTS `ref_category` (
  `ref_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `title_tr` text NOT NULL,
  `title_eng` text NOT NULL,
  `ref_cat_css` text NOT NULL,
  PRIMARY KEY (`ref_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `ref_category`
--

INSERT INTO `ref_category` (`ref_cat_id`, `title_tr`, `title_eng`, `ref_cat_css`) VALUES
(1, 'İÇ MEKAN', 'INTERIOR', 'ic-mekan'),
(2, 'DIŞ MEKAN', 'OUTDOOR', 'dis-mekan');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ref_photo`
--

CREATE TABLE IF NOT EXISTS `ref_photo` (
  `ref_id` int(11) NOT NULL,
  `ref_photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_big_photo` text NOT NULL,
  `ref_thumb_photo` text NOT NULL,
  PRIMARY KEY (`ref_photo_id`),
  KEY `ref_id` (`ref_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Tablo döküm verisi `ref_photo`
--

INSERT INTO `ref_photo` (`ref_id`, `ref_photo_id`, `ref_big_photo`, `ref_thumb_photo`) VALUES
(12, 18, 'assets/images/ref/31346_3779.jpg', 'assets/images/ref/thumb/31346_3779_thumb.jpg'),
(10, 20, 'assets/images/ref/25594_28075.jpg', 'assets/images/ref/thumb/25594_28075_thumb.jpg'),
(11, 21, 'assets/images/ref/29058_8339.jpg', 'assets/images/ref/thumb/29058_8339_thumb.jpg'),
(9, 22, 'assets/images/ref/12366_1391.jpg', 'assets/images/ref/thumb/12366_1391_thumb.jpg'),
(13, 24, 'assets/images/ref/21116_5893.jpg', 'assets/images/ref/thumb/21116_5893_thumb.jpg'),
(14, 25, 'assets/images/ref/28872_9569.jpg', 'assets/images/ref/thumb/28872_9569_thumb.jpg');

-- --------------------------------------------------------

--
-- Görünüm yapısı durumu `ref_view`
--
CREATE TABLE IF NOT EXISTS `ref_view` (
`ref_cat_id` int(11)
,`title_tr` text
,`title_eng` text
,`ref_cat_css` text
,`ref_id` int(11)
,`title` text
,`detail` text
,`ref_css` text
,`ref_photo_id` int(11)
,`ref_big_photo` text
,`ref_thumb_photo` text
);
-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tour`
--

CREATE TABLE IF NOT EXISTS `tour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tour_detail` text NOT NULL,
  `tour_video` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `tour`
--

INSERT INTO `tour` (`id`, `tour_detail`, `tour_video`) VALUES
(1, '<p style="margin-top:0cm;margin-right:0cm;margin-bottom:15.0pt;margin-left:\r\n0cm;vertical-align:baseline"><span style="font-family: Verdana, sans-serif;">Lorem ipsum dolor sit amet, sit an molestie neglegentur\r\nconcludaturque. Possim hendrerit in usu. Iriure delectus mea at, vis dicit\r\nlaudem ex, vel eu possim imperdiet consequuntur. Brute ipsum tincidunt vim ei.\r\nNe eos vidisse splendide instructior.<o:p></o:p></span></p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; vertical-align: baseline;">\r\n\r\n</p><p style="margin: 0cm 0cm 15pt; vertical-align: baseline;"><span style="font-family: Verdana, sans-serif;">aecenas ipsum metus, semper hendrerit varius mattis, sed magna\r\nposuere ut elementum enim rutrum. Nam mi erat, porta id ultrices nec,\r\npellentesque vel nunc. Cras varius fermentum iaculis ...<o:p></o:p></span></p>', '<font face="Arial, Helvetica, sans-serif" size="2"><span style="line-height: 19.5px;"><object width="730" height="338"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=76357912&amp;force_embed=1&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=1&amp;color=00adef&amp;fullscreen=1&amp;autoplay=0&amp;loop=0"><embed src="http://vimeo.com/moogaloop.swf?clip_id=76357912&amp;force_embed=1&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=1&amp;color=00adef&amp;fullscreen=1&amp;autoplay=0&amp;loop=0" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="730" height="338"></object></span></font>');

-- --------------------------------------------------------

--
-- Görünüm yapısı `gal_view`
--
DROP TABLE IF EXISTS `gal_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gal_view` AS select `gal_category`.`gal_cat_id` AS `gal_cat_id`,`gal_category`.`title_tr` AS `title_tr`,`gal_category`.`title_eng` AS `title_eng`,`gal_category`.`gal_cat_css` AS `gal_cat_css`,`gal`.`gal_id` AS `gal_id`,`gal`.`title` AS `title`,`gal`.`detail` AS `detail`,`gal`.`gal_css` AS `gal_css`,`gal_photo`.`gal_photo_id` AS `gal_photo_id`,`gal_photo`.`gal_big_photo` AS `gal_big_photo`,`gal_photo`.`gal_thumb_photo` AS `gal_thumb_photo` from ((`gal_category` join `gal`) join `gal_photo`) where ((`gal_category`.`gal_cat_id` = `gal`.`gal_cat_id`) and (`gal`.`gal_id` = `gal_photo`.`gal_id`));

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

-- --------------------------------------------------------

--
-- Görünüm yapısı `ref_view`
--
DROP TABLE IF EXISTS `ref_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ref_view` AS select `ref_category`.`ref_cat_id` AS `ref_cat_id`,`ref_category`.`title_tr` AS `title_tr`,`ref_category`.`title_eng` AS `title_eng`,`ref_category`.`ref_cat_css` AS `ref_cat_css`,`ref`.`ref_id` AS `ref_id`,`ref`.`title` AS `title`,`ref`.`detail` AS `detail`,`ref`.`ref_css` AS `ref_css`,`ref_photo`.`ref_photo_id` AS `ref_photo_id`,`ref_photo`.`ref_big_photo` AS `ref_big_photo`,`ref_photo`.`ref_thumb_photo` AS `ref_thumb_photo` from ((`ref_category` join `ref`) join `ref_photo`) where ((`ref_category`.`ref_cat_id` = `ref`.`ref_cat_id`) and (`ref`.`ref_id` = `ref_photo`.`ref_id`));

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `gal`
--
ALTER TABLE `gal`
  ADD CONSTRAINT `gal_ibfk_1` FOREIGN KEY (`gal_cat_id`) REFERENCES `gal_category` (`gal_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `gal_photo`
--
ALTER TABLE `gal_photo`
  ADD CONSTRAINT `gal_photo_ibfk_1` FOREIGN KEY (`gal_id`) REFERENCES `gal` (`gal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Tablo kısıtlamaları `ref`
--
ALTER TABLE `ref`
  ADD CONSTRAINT `ref_ibfk_1` FOREIGN KEY (`ref_cat_id`) REFERENCES `ref_category` (`ref_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `ref_photo`
--
ALTER TABLE `ref_photo`
  ADD CONSTRAINT `ref_photo_ibfk_1` FOREIGN KEY (`ref_id`) REFERENCES `ref` (`ref_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
