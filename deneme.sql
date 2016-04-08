-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Nis 2016, 00:01:12
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `deneme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doktorlar`
--

CREATE TABLE IF NOT EXISTS `doktorlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) DEFAULT NULL,
  `doktor_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=25 ;

--
-- Tablo döküm verisi `doktorlar`
--

INSERT INTO `doktorlar` (`id`, `kategori_id`, `doktor_ad`, `durum`) VALUES
(3, 1, 'Dr. Erkan ÖZGÜN', 1),
(4, 2, 'Dr. Mustafa KAYAN', 1),
(5, 2, 'Dr. Ümit GÖKÇEK', 1),
(6, NULL, 'Dr. Dt. Cansu BÜYÜK', 1),
(7, NULL, 'Doç. Dr. Sühan TOMAÇ', 1),
(8, 0, 'Dr. Mustafa Şeni', 1),
(9, 7, 'Uzm. Dr. Asiye CEYLAN', 1),
(10, 7, 'Uzm. Dr. Begüm YETİŞ SAYIN', 1),
(11, 7, 'Doç. Dr. İbrahim ÖTGÜN', 1),
(13, NULL, 'Prof. Dr. Cem YORGANCIOĞLU', 1),
(14, NULL, 'Doç. Dr. Emel Erdal ÇALIKOĞLU', 1),
(16, NULL, 'Prof. Dr. Erhan REİS', 1),
(18, 1, 'Dr. Mustafa Şengezer', 1),
(19, 3, 'Dr. Emel G&uuml;&ccedil;l&uuml;12', 1),
(21, 88, '&lt;br /&gt;&lt;font size=&#039;1&#039;&gt;&lt;table class=&#039;xdebug-error xe-notice&#039; dir=&#', 0),
(22, 88, '&lt;br /&gt;&lt;font size=&#039;1&#039;&gt;&lt;table class=&#039;xdebug-error xe-notice&#039; dir=&#', 0),
(23, 7, 'Dr. Cengiz Yollar', 1),
(24, 9, 'Dr. Emrehan Germiyanoglu', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `katAdi` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `detay` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `category_idx1` (`durum`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci PACK_KEYS=0 AUTO_INCREMENT=40 ;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`id`, `katAdi`, `detay`, `durum`) VALUES
(1, 'Acil Servis', '', 1),
(2, 'Ağız ve Diş Hastalıkları', NULL, 1),
(3, 'Beslenme ve Diyet', NULL, 1),
(4, 'Beyin, Sinir ve Omurilik Cerrahisi', NULL, 1),
(7, 'Çocuk Cerrahisi', NULL, 1),
(8, 'Fizik Tedavi ve Rehabilitasyon', NULL, 1),
(9, 'Genel Cerrahi', NULL, 1),
(10, 'Göğüs Hastalıkları', NULL, 1),
(12, 'Göz Merkezi', NULL, 1),
(13, 'Arge-45', '1', 1),
(14, 'Nöroloji', NULL, 1),
(17, 'Ortopedi ve Travmatoloji', NULL, 1),
(19, 'Radyoloji', NULL, 1),
(20, 'Tüp Bebek [IVF] Merkezi', NULL, 1),
(29, 'Arge 237235', '1', 0),
(37, 'hjkop', '', 1),
(39, 'katAdi123', '', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `players`
--

INSERT INTO `players` (`id`, `firstname`, `lastname`) VALUES
(1, 'Bobbv', 'Baker'),
(2, 'Tim', 'Thomas'),
(3, 'Rachel', 'Roberts'),
(4, 'Sam', 'Smith');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE IF NOT EXISTS `randevu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `konu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `time` varchar(9) COLLATE utf8_turkish_ci NOT NULL,
  `uyeler_id` int(11) NOT NULL,
  `doktor` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=42 ;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`id`, `konu`, `tarih`, `time`, `uyeler_id`, `doktor`, `kategori_id`) VALUES
(10, 'der', '14/07/2015', '', 0, '', 0),
(11, 'Dolgu', '14/07/2015', '16:00', 1, '', 0),
(25, '06_acil_erkan', '06/08/2015', '10:00', 1, '3', 7),
(27, 'acil erkann 11 30', '30/07/2015', '11:00', 24, '3', 0),
(28, '29 mustafa 10 dis', '29/07/2015', '10:00', 24, '4', 0),
(29, 'mustafa23sali19dis', '23/07/2015', '10:00', 24, '4', 0),
(30, '121', '16/07/2015', '15:00', 1, '3', 0),
(31, '3', '01/07/2015', '15:00', 1, '8', 7),
(32, 'baş ağrısı', '30/07/2015', '10:00', 1, '9', 7),
(33, 'acil112', '31/07/2015', '11:00', 1, '3', 1),
(34, 'Dolgu', '08/20/2015', '13:00', 1, '10', 7),
(35, 'Dolgu', '08/20/2015', '13:00', 1, '10', 7),
(36, 'e3', '30/07/2015', '15:00', 1, '19', 3),
(37, 'dfghjkl', '04/08/2015', '10:00', 52, '19', 3),
(38, '3456', '15/09/2015', '11:00', 53, '3', 1),
(39, 'ghjkl', '16/09/2015', '10:00', 54, '5', 2),
(40, 'ghjklş', '25/08/2015', '10:00', 1, '24', 1),
(41, 'fghjkl', '31/12/2015', '11:00', 57, '3', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `tcno` bigint(11) NOT NULL,
  `tarih` timestamp NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=58 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `ad`, `soyad`, `tcno`, `tarih`, `email`, `yetki`) VALUES
(1, 'Ugurcan1', 'Sengezer', 22505127464, '2015-07-23 13:36:42', 'ugurcansengezer@gmail.com', 1),
(7, 'Mustafa', 'Sengezer', 245678, '0000-00-00 00:00:00', 'ugurc@must.com', 0),
(8, 'dene', 'fufu', 67890, '0000-00-00 00:00:00', 'ugur@hot.com', 0),
(14, 'ali', 'soydak', 1231, '0000-00-00 00:00:00', 'ugurca@hotma.co', 0),
(15, 'ugur', 'sengezer', 21, '0000-00-00 00:00:00', '131@ot.com', 0),
(16, 'ff', 'dd', 123113, '0000-00-00 00:00:00', 'ug@ho', 0),
(19, '"', '""''', 0, '2015-07-13 03:14:39', 'ugurcanm@hotmail.com', 0),
(20, 'admin', '', 123456789, '2015-07-23 04:20:52', 'admin@admin.com', 1),
(41, 'serkan', 'kalakalalla', 44574874586, '2015-07-29 05:42:29', 'serkan@hot12.com', 0),
(42, 'ugur', 'gsdsds', 74875898745, '2015-07-29 05:46:39', 'ugur4567890@htmai.com', 0),
(45, 'zulme', 'calis', 45784512023, '2015-07-29 05:53:05', 'zulme@hoc.com', 0),
(46, 'ugur', 'ugur', 22504474585, '2015-07-29 06:09:22', 'fjkmolg@hoc.com', 0),
(47, 'ugur', 'asas', 55748798758, '2015-07-30 03:36:22', 'ugurcasdsnsensdgezer@gmail.com', 0),
(48, 'mahmut', 'ali', 44745489658, '2015-07-30 03:52:29', 'ugur@hor.mathmu.com', 0),
(49, 'abdül', 'kocamabicak', 22321410214, '2015-07-30 03:58:58', 'abudl@hotm.com', 0),
(51, 'ali', 'seber', 22505127444, '2015-07-29 21:06:09', 'gdhd@hot.com', 0),
(52, 'kamil', 'koc', 78978978978, '2015-08-01 03:11:02', 'kamil@koc.com', 0),
(53, 'ayfer', 'sengezer', 25825825825, '2015-08-18 23:37:48', 'ayfer@gail.com', 0),
(54, 'emrehan', 'fghjkl', 22487353486, '2015-08-20 20:02:36', 'emrehan@emre.com', 0),
(55, 'emre', 'erdogan', 22541454787, '2015-10-04 02:38:12', 'ugur@co.tr', 0),
(56, 'adli', 'adlaid', 77777777777, '2015-12-10 07:54:32', '88888888888@hot.co', 0),
(57, 'murast', 'sari', 85285285285, '2015-12-29 04:05:25', 'murat@murat.com', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ziyaretci_defteri`
--

CREATE TABLE IF NOT EXISTS `ziyaretci_defteri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kayit_tarihi` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `mesaj` text COLLATE utf8_turkish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci PACK_KEYS=0 AUTO_INCREMENT=12 ;

--
-- Tablo döküm verisi `ziyaretci_defteri`
--

INSERT INTO `ziyaretci_defteri` (`id`, `adi`, `mail`, `kayit_tarihi`, `mesaj`) VALUES
(1, 'ugu', 'ugururufnf@dsd', '2015-07-08 08:50:54.105976', 'denegdfgdfg'),
(2, 'ugurcan sengezer', 'mustafaugurcan.sengezer@std.yeditepe.edu.tr', '2015-07-08 08:52:16.440927', 'denemesql'),
(3, 'ugurcan', 'deneme', '2015-07-08 08:55:36.337238', 'ugurcna'),
(4, 'ahmet', 'sndns@gms', '2015-07-08 09:04:04.468747', 'onsdf'),
(5, 'ugurcan', 'ugurcansengezer@gmail.com', '2015-07-08 09:04:40.138579', 'dds1'),
(6, 'ugur', 'ugurcansengezer@gmail.com', '2015-07-08 09:29:59.786775', 'deneeðiþ1212'),
(7, 'ugurcan sengezer', 'dsfsdf', '2015-07-08 09:35:02.960286', 'dwdsd'),
(8, 'ugurcan sengezer', 'dsfsdf', '2015-07-08 09:35:19.985216', 'dwdsd'),
(9, 'ugurcan sengezer', 'dsfsdf', '2015-07-08 09:35:23.630641', 'dwdsd'),
(10, 'ugurcan sengezer', 'dsfsdf', '2015-07-08 09:36:11.778844', 'dwdsd'),
(11, NULL, NULL, '2015-07-08 09:37:38.847106', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
