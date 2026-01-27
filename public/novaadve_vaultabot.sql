-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2026 at 12:27 PM
-- Server version: 10.11.14-MariaDB-cll-lve
-- PHP Version: 8.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novaadve_vaultabot`
--

-- --------------------------------------------------------

--
-- Table structure for table `bots`
--

CREATE TABLE `bots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-abayomiolawoye4@gmail.com|105.113.20.235', 'i:1;', 1765617255),
('laravel-cache-abayomiolawoye4@gmail.com|105.113.20.235:timer', 'i:1765617255;', 1765617255),
('laravel-cache-abayomiolawoye4@gmail.coma|105.119.7.174', 'i:1;', 1765696363),
('laravel-cache-abayomiolawoye4@gmail.coma|105.119.7.174:timer', 'i:1765696363;', 1765696363),
('laravel-cache-abdulhaditurakialiyu464@gmail.com|105.117.6.190', 'i:1;', 1765235253),
('laravel-cache-abdulhaditurakialiyu464@gmail.com|105.117.6.190:timer', 'i:1765235253;', 1765235253),
('laravel-cache-abdullahagaladima@gmail.com|102.91.102.30', 'i:1;', 1765708163),
('laravel-cache-abdullahagaladima@gmail.com|102.91.102.30:timer', 'i:1765708163;', 1765708163),
('laravel-cache-abisahemmanuel@123.com|154.161.242.28', 'i:1;', 1765477909),
('laravel-cache-abisahemmanuel@123.com|154.161.242.28:timer', 'i:1765477909;', 1765477909),
('laravel-cache-aboyoduricad74@gmail.com|80.85.246.71', 'i:1;', 1760800397),
('laravel-cache-aboyoduricad74@gmail.com|80.85.246.71:timer', 'i:1760800397;', 1760800397),
('laravel-cache-ackonjames@gmail.com|154.161.128.37', 'i:1;', 1765570211),
('laravel-cache-ackonjames@gmail.com|154.161.128.37:timer', 'i:1765570211;', 1765570211),
('laravel-cache-addajospin14@gmail.com|102.91.105.97', 'i:1;', 1765912708),
('laravel-cache-addajospin14@gmail.com|102.91.105.97:timer', 'i:1765912708;', 1765912708),
('laravel-cache-admin@admin.com|139.59.126.205', 'i:5;', 1763633239),
('laravel-cache-admin@admin.com|139.59.126.205:timer', 'i:1763633239;', 1763633239),
('laravel-cache-admin@lotearn.com|139.59.126.205', 'i:5;', 1763633271),
('laravel-cache-admin@lotearn.com|139.59.126.205:timer', 'i:1763633271;', 1763633271),
('laravel-cache-adogahsamuel@gmail.com|102.91.93.49', 'i:2;', 1765645042),
('laravel-cache-adogahsamuel@gmail.com|102.91.93.49:timer', 'i:1765645042;', 1765645042),
('laravel-cache-affluentnwachinaemereprosper@gmail.com|102.90.97.104', 'i:1;', 1765501216),
('laravel-cache-affluentnwachinaemereprosper@gmail.com|102.90.97.104:timer', 'i:1765501216;', 1765501216),
('laravel-cache-agbelormemmanuel4@gmail.com|154.161.24.176', 'i:1;', 1765403143),
('laravel-cache-agbelormemmanuel4@gmail.com|154.161.24.176:timer', 'i:1765403143;', 1765403143),
('laravel-cache-agusaterkula@gmail.com|102.90.99.23', 'i:1;', 1765139455),
('laravel-cache-agusaterkula@gmail.com|102.90.99.23:timer', 'i:1765139455;', 1765139455),
('laravel-cache-ahmadnalele@gmail.com|102.0.21.90', 'i:2;', 1765819537),
('laravel-cache-ahmadnalele@gmail.com|102.0.21.90:timer', 'i:1765819537;', 1765819537),
('laravel-cache-ahokeghritnora@gmail.com|197.211.63.84', 'i:1;', 1765788678),
('laravel-cache-ahokeghritnora@gmail.com|197.211.63.84:timer', 'i:1765788678;', 1765788678),
('laravel-cache-ajahjoshua01@gmail.com|197.211.52.71', 'i:1;', 1765175406),
('laravel-cache-ajahjoshua01@gmail.com|197.211.52.71:timer', 'i:1765175406;', 1765175406),
('laravel-cache-ajokeolamide08050207280@gmail.com|105.112.26.58', 'i:1;', 1765320388),
('laravel-cache-ajokeolamide08050207280@gmail.com|105.112.26.58:timer', 'i:1765320388;', 1765320388),
('laravel-cache-akaayarnora@gmail.com|197.211.63.84', 'i:1;', 1765788652),
('laravel-cache-akaayarnora@gmail.com|197.211.63.84:timer', 'i:1765788652;', 1765788652),
('laravel-cache-akakpolinoel@email.com|154.161.44.255', 'i:2;', 1765888913),
('laravel-cache-akakpolinoel@email.com|154.161.44.255:timer', 'i:1765888913;', 1765888913),
('laravel-cache-akakpolinoel@gmail.com|154.161.44.255', 'i:1;', 1765888869),
('laravel-cache-akakpolinoel@gmail.com|154.161.44.255:timer', 'i:1765888869;', 1765888869),
('laravel-cache-akakpolinoel@gmail.com|154.161.51.108', 'i:1;', 1765957702),
('laravel-cache-akakpolinoel@gmail.com|154.161.51.108:timer', 'i:1765957702;', 1765957702),
('laravel-cache-akaniyeneobot208@gmail.com|105.112.101.142', 'i:3;', 1765723060),
('laravel-cache-akaniyeneobot208@gmail.com|105.112.101.142:timer', 'i:1765723060;', 1765723060),
('laravel-cache-akoredeabolaji54@gmail.com|102.89.42.4', 'i:1;', 1765228270),
('laravel-cache-akoredeabolaji54@gmail.com|102.89.42.4:timer', 'i:1765228270;', 1765228270),
('laravel-cache-akorjohn901@gmail.com|197.211.63.11', 'i:1;', 1765835610),
('laravel-cache-akorjohn901@gmail.com|197.211.63.11:timer', 'i:1765835610;', 1765835610),
('laravel-cache-akuracosmas@gmail.com|102.91.98.246', 'i:1;', 1765671796),
('laravel-cache-akuracosmas@gmail.com|102.91.98.246:timer', 'i:1765671796;', 1765671796),
('laravel-cache-albachrisdavid@gmail.com|154.159.252.104', 'i:1;', 1765380263),
('laravel-cache-albachrisdavid@gmail.com|154.159.252.104:timer', 'i:1765380263;', 1765380263),
('laravel-cache-alhassanmusaalhassanmusa94@gmail.com|197.210.53.175', 'i:1;', 1765660540),
('laravel-cache-alhassanmusaalhassanmusa94@gmail.com|197.210.53.175:timer', 'i:1765660540;', 1765660540),
('laravel-cache-alimuaz414@gmail.com|102.91.105.242', 'i:2;', 1765561195),
('laravel-cache-alimuaz414@gmail.com|102.91.105.242:timer', 'i:1765561195;', 1765561195),
('laravel-cache-amankwet@gmail.com|197.211.63.183', 'i:1;', 1765445470),
('laravel-cache-amankwet@gmail.com|197.211.63.183:timer', 'i:1765445470;', 1765445470),
('laravel-cache-amor4real2003@yahoo.co.uk|102.88.108.196', 'i:1;', 1765615271),
('laravel-cache-amor4real2003@yahoo.co.uk|102.88.108.196:timer', 'i:1765615271;', 1765615271),
('laravel-cache-anwatimj@gmail.com|102.90.97.152', 'i:1;', 1765469032),
('laravel-cache-anwatimj@gmail.com|102.90.97.152:timer', 'i:1765469032;', 1765469032),
('laravel-cache-anyiezmalak@gmail.com|105.161.132.203', 'i:1;', 1757849885),
('laravel-cache-anyiezmalak@gmail.com|105.161.132.203:timer', 'i:1757849885;', 1757849885),
('laravel-cache-anyiezmalak@gmail.com|197.237.178.125', 'i:1;', 1754614384),
('laravel-cache-anyiezmalak@gmail.com|197.237.178.125:timer', 'i:1754614384;', 1754614384),
('laravel-cache-anyim.s.chukwudi@gmail.com|102.88.105.79', 'i:1;', 1765748778),
('laravel-cache-anyim.s.chukwudi@gmail.com|102.88.105.79:timer', 'i:1765748778;', 1765748778),
('laravel-cache-aranrieprecious878@gmail.com|102.90.118.167', 'i:1;', 1765780500),
('laravel-cache-aranrieprecious878@gmail.com|102.90.118.167:timer', 'i:1765780500;', 1765780500),
('laravel-cache-ashongexcellence@gmail.com|105.116.12.188', 'i:1;', 1765839277),
('laravel-cache-ashongexcellence@gmail.com|105.116.12.188:timer', 'i:1765839277;', 1765839277),
('laravel-cache-asugbadekassibirobert@gmail.co|41.204.44.19', 'i:1;', 1765638925),
('laravel-cache-asugbadekassibirobert@gmail.co|41.204.44.19:timer', 'i:1765638925;', 1765638925),
('laravel-cache-aterugetoku329@gmail.com|195.2.78.89', 'i:1;', 1760593287),
('laravel-cache-aterugetoku329@gmail.com|195.2.78.89:timer', 'i:1760593287;', 1760593287),
('laravel-cache-audushejir@gmail.com|102.90.100.133', 'i:1;', 1765779916),
('laravel-cache-audushejir@gmail.com|102.90.100.133:timer', 'i:1765779916;', 1765779916),
('laravel-cache-augustig@gmail.com|105.112.114.179', 'i:1;', 1765459421),
('laravel-cache-augustig@gmail.com|105.112.114.179:timer', 'i:1765459421;', 1765459421),
('laravel-cache-augustig28@gmail.com|105.112.112.159', 'i:1;', 1762964641),
('laravel-cache-augustig28@gmail.com|105.112.112.159:timer', 'i:1762964641;', 1762964641),
('laravel-cache-augustig28@gmail.com|105.112.112.99', 'i:1;', 1763620609),
('laravel-cache-augustig28@gmail.com|105.112.112.99:timer', 'i:1763620609;', 1763620609),
('laravel-cache-austinakekere@gmail.com|102.90.102.248', 'i:1;', 1765802585),
('laravel-cache-austinakekere@gmail.com|102.90.102.248:timer', 'i:1765802585;', 1765802585),
('laravel-cache-auwalabdulkadir1986@gmail.com|105.112.126.235', 'i:1;', 1765870626),
('laravel-cache-auwalabdulkadir1986@gmail.com|105.112.126.235:timer', 'i:1765870626;', 1765870626),
('laravel-cache-ayomikunbademosi@gmail.com|129.222.206.204', 'i:1;', 1766066821),
('laravel-cache-ayomikunbademosi@gmail.com|129.222.206.204:timer', 'i:1766066821;', 1766066821),
('laravel-cache-balokae@gmail.com|102.89.47.213', 'i:1;', 1765364646),
('laravel-cache-balokae@gmail.com|102.89.47.213:timer', 'i:1765364646;', 1765364646),
('laravel-cache-baruchking544@gmail.com|102.91.96.118', 'i:1;', 1765890089),
('laravel-cache-baruchking544@gmail.com|102.91.96.118:timer', 'i:1765890089;', 1765890089),
('laravel-cache-benardlangat941@gmail.com|154.159.237.132', 'i:1;', 1765169906),
('laravel-cache-benardlangat941@gmail.com|154.159.237.132:timer', 'i:1765169906;', 1765169906),
('laravel-cache-benefitdc1@gmail.com|102.90.115.30', 'i:1;', 1761289215),
('laravel-cache-benefitdc1@gmail.com|102.90.115.30:timer', 'i:1761289215;', 1761289215),
('laravel-cache-betttdinho@gmail.com|105.120.130.104', 'i:1;', 1765132569),
('laravel-cache-betttdinho@gmail.com|105.120.130.104:timer', 'i:1765132569;', 1765132569),
('laravel-cache-bonkuno3@gmail.com|102.91.103.50', 'i:1;', 1765792553),
('laravel-cache-bonkuno3@gmail.com|102.91.103.50:timer', 'i:1765792553;', 1765792553),
('laravel-cache-bonleedrowns@gmail.com|102.208.44.14', 'i:1;', 1765363991),
('laravel-cache-bonleedrowns@gmail.com|102.208.44.14:timer', 'i:1765363991;', 1765363991),
('laravel-cache-brakumo19@gmail.com|105.113.57.65', 'i:1;', 1765696432),
('laravel-cache-brakumo19@gmail.com|105.113.57.65:timer', 'i:1765696432;', 1765696432),
('laravel-cache-briankariuki49@gmail.com|105.160.83.66', 'i:1;', 1765736797),
('laravel-cache-briankariuki49@gmail.com|105.160.83.66:timer', 'i:1765736797;', 1765736797),
('laravel-cache-brianriteluk@yahoo.com|102.215.12.242', 'i:1;', 1765120135),
('laravel-cache-brianriteluk@yahoo.com|102.215.12.242:timer', 'i:1765120135;', 1765120135),
('laravel-cache-c35020104@gmail.com|105.112.108.137', 'i:1;', 1765656997),
('laravel-cache-c35020104@gmail.com|105.112.108.137:timer', 'i:1765656997;', 1765656997),
('laravel-cache-c35020104@gmail.com|105.112.209.15', 'i:3;', 1765656832),
('laravel-cache-c35020104@gmail.com|105.112.209.15:timer', 'i:1765656832;', 1765656832),
('laravel-cache-caljayden5@gmail.com|102.0.21.46', 'i:1;', 1765970015),
('laravel-cache-caljayden5@gmail.com|102.0.21.46:timer', 'i:1765970015;', 1765970015),
('laravel-cache-chachadavid0@gmail.com|41.139.167.17', 'i:2;', 1764178525),
('laravel-cache-chachadavid0@gmail.com|41.139.167.17:timer', 'i:1764178525;', 1764178525),
('laravel-cache-charlesatalinga3@gmail.com|154.161.46.25', 'i:1;', 1765731267),
('laravel-cache-charlesatalinga3@gmail.com|154.161.46.25:timer', 'i:1765731267;', 1765731267),
('laravel-cache-chidimmaokonkwo758@gmail.com|102.89.34.139', 'i:2;', 1765040795),
('laravel-cache-chidimmaokonkwo758@gmail.com|102.89.34.139:timer', 'i:1765040795;', 1765040795),
('laravel-cache-chimaijenwanga@gmail.com|102.90.101.76', 'i:2;', 1765837619),
('laravel-cache-chimaijenwanga@gmail.com|102.90.101.76:timer', 'i:1765837619;', 1765837619),
('laravel-cache-chimaijenwoba@gmail.com|197.211.52.74', 'i:2;', 1764973894),
('laravel-cache-chimaijenwoba@gmail.com|197.211.52.74:timer', 'i:1764973894;', 1764973894),
('laravel-cache-chimanwali86@gmail.com|102.88.131.170', 'i:1;', 1765185032),
('laravel-cache-chimanwali86@gmail.com|102.88.131.170:timer', 'i:1765185032;', 1765185032),
('laravel-cache-chimdindudavidstanleynwankwo@gmail.com|105.113.11.204', 'i:1;', 1765290623),
('laravel-cache-chimdindudavidstanleynwankwo@gmail.com|105.113.11.204:timer', 'i:1765290623;', 1765290623),
('laravel-cache-christianboateng444@gmail.com|154.161.57.123', 'i:1;', 1765797743),
('laravel-cache-christianboateng444@gmail.com|154.161.57.123:timer', 'i:1765797743;', 1765797743),
('laravel-cache-contactvynie@gmail.com|102.90.131.179', 'i:2;', 1765901276),
('laravel-cache-contactvynie@gmail.com|102.90.131.179:timer', 'i:1765901276;', 1765901276),
('laravel-cache-corosis9@gmail.com|197.211.63.90', 'i:1;', 1765698444),
('laravel-cache-corosis9@gmail.com|197.211.63.90:timer', 'i:1765698444;', 1765698444),
('laravel-cache-crazebrowwn@gmail.com|102.90.115.30', 'i:1;', 1765802380),
('laravel-cache-crazebrowwn@gmail.com|102.90.115.30:timer', 'i:1765802380;', 1765802380),
('laravel-cache-d.eurotrust@gmail.com|102.89.47.102', 'i:2;', 1765785016),
('laravel-cache-d.eurotrust@gmail.com|102.89.47.102:timer', 'i:1765785016;', 1765785016),
('laravel-cache-daniel11.chimela@gmail.com|102.89.68.17', 'i:1;', 1765303695),
('laravel-cache-daniel11.chimela@gmail.com|102.89.68.17:timer', 'i:1765303695;', 1765303695),
('laravel-cache-danielandanje1993@gmail.com|154.159.237.82', 'i:2;', 1765199196),
('laravel-cache-danielandanje1993@gmail.com|154.159.237.82:timer', 'i:1765199196;', 1765199196),
('laravel-cache-dannyyoung3004@gmail.com|102.88.112.38', 'i:1;', 1765108003),
('laravel-cache-dannyyoung3004@gmail.com|102.88.112.38:timer', 'i:1765108003;', 1765108003),
('laravel-cache-darkeynoble69@gmail.com|154.161.130.166', 'i:1;', 1765578738),
('laravel-cache-darkeynoble69@gmail.com|154.161.130.166:timer', 'i:1765578738;', 1765578738),
('laravel-cache-darknetmafias@gmail.com|41.139.167.17', 'i:1;', 1764178509),
('laravel-cache-darknetmafias@gmail.com|41.139.167.17:timer', 'i:1764178509;', 1764178509),
('laravel-cache-daveoladave@gmail.com|129.18.183.26', 'i:1;', 1765725320),
('laravel-cache-daveoladave@gmail.com|129.18.183.26:timer', 'i:1765725320;', 1765725320),
('laravel-cache-davfeg124@gmail.com|41.215.169.39', 'i:1;', 1765871408),
('laravel-cache-davfeg124@gmail.com|41.215.169.39:timer', 'i:1765871408;', 1765871408),
('laravel-cache-davfeg124@gmail.com|41.215.173.189', 'i:1;', 1765885829),
('laravel-cache-davfeg124@gmail.com|41.215.173.189:timer', 'i:1765885829;', 1765885829),
('laravel-cache-davidazu43@gmail.com|105.113.35.201', 'i:1;', 1765455457),
('laravel-cache-davidazu43@gmail.com|105.113.35.201:timer', 'i:1765455457;', 1765455457),
('laravel-cache-davidmuchiri@email.com|102.0.18.196', 'i:1;', 1765351302),
('laravel-cache-davidmuchiri@email.com|102.0.18.196:timer', 'i:1765351302;', 1765351302),
('laravel-cache-davidmuchiri073@gmail.com|102.0.18.196', 'i:1;', 1765309556),
('laravel-cache-davidmuchiri073@gmail.com|102.0.18.196:timer', 'i:1765309556;', 1765309556),
('laravel-cache-davidmuchirimuigai@gmail.com|102.0.18.196', 'i:1;', 1765351011),
('laravel-cache-davidmuchirimuigai@gmail.com|102.0.18.196:timer', 'i:1765351011;', 1765351011),
('laravel-cache-denisagyei3@gmail.com|154.161.4.220', 'i:1;', 1765889041),
('laravel-cache-denisagyei3@gmail.com|154.161.4.220:timer', 'i:1765889041;', 1765889041),
('laravel-cache-divinethompson37@gmail.com|102.90.116.73', 'i:1;', 1765442888),
('laravel-cache-divinethompson37@gmail.com|102.90.116.73:timer', 'i:1765442888;', 1765442888),
('laravel-cache-ebigideon27@gmail.com|102.90.96.229', 'i:1;', 1765203894),
('laravel-cache-ebigideon27@gmail.com|102.90.96.229:timer', 'i:1765203894;', 1765203894),
('laravel-cache-ebongikot77@gmail.com|105.113.81.51', 'i:1;', 1765925636),
('laravel-cache-ebongikot77@gmail.com|105.113.81.51:timer', 'i:1765925636;', 1765925636),
('laravel-cache-ecyspicci@gmail.com|197.251.240.49', 'i:1;', 1765655508),
('laravel-cache-ecyspicci@gmail.com|197.251.240.49:timer', 'i:1765655508;', 1765655508),
('laravel-cache-ekiayaya1@gmail.com|102.90.79.98', 'i:1;', 1765214730),
('laravel-cache-ekiayaya1@gmail.com|102.90.79.98:timer', 'i:1765214730;', 1765214730),
('laravel-cache-ekiayaya46@gmail.com|102.90.79.98', 'i:1;', 1765214754),
('laravel-cache-ekiayaya46@gmail.com|102.90.79.98:timer', 'i:1765214754;', 1765214754),
('laravel-cache-elaigwuemmanuel732@gmail.com|217.64.103.70', 'i:1;', 1764950615),
('laravel-cache-elaigwuemmanuel732@gmail.com|217.64.103.70:timer', 'i:1764950615;', 1764950615),
('laravel-cache-elijahswazy27@gmail.com|105.120.131.136', 'i:1;', 1765555760),
('laravel-cache-elijahswazy27@gmail.com|105.120.131.136:timer', 'i:1765555759;', 1765555759),
('laravel-cache-emanuelaziaklo@yahoo.com|197.251.240.200', 'i:1;', 1765643006),
('laravel-cache-emanuelaziaklo@yahoo.com|197.251.240.200:timer', 'i:1765643006;', 1765643006),
('laravel-cache-emmajalo557@gmail.com|98.97.79.130', 'i:1;', 1765734340),
('laravel-cache-emmajalo557@gmail.com|98.97.79.130:timer', 'i:1765734340;', 1765734340),
('laravel-cache-emmanuelaziaklo@yahoo.com|197.251.240.200', 'i:4;', 1765643544),
('laravel-cache-emmanuelaziaklo@yahoo.com|197.251.240.200:timer', 'i:1765643544;', 1765643544),
('laravel-cache-emmykeyz101@gmail.com|102.90.115.7', 'i:2;', 1765455316),
('laravel-cache-emmykeyz101@gmail.com|102.90.115.7:timer', 'i:1765455316;', 1765455316),
('laravel-cache-enesystems4heroz@gmail.com|197.211.59.115', 'i:1;', 1765533982),
('laravel-cache-enesystems4heroz@gmail.com|197.211.59.115:timer', 'i:1765533982;', 1765533982),
('laravel-cache-es0513794@gmail.com|102.88.112.212', 'i:1;', 1766062283),
('laravel-cache-es0513794@gmail.com|102.88.112.212:timer', 'i:1766062283;', 1766062283),
('laravel-cache-estaitee@gmail.com|105.112.208.160', 'i:1;', 1765955686),
('laravel-cache-estaitee@gmail.com|105.112.208.160:timer', 'i:1765955686;', 1765955686),
('laravel-cache-favourkennedy67@gmail.com|41.184.117.194', 'i:4;', 1765821393),
('laravel-cache-favourkennedy67@gmail.com|41.184.117.194:timer', 'i:1765821393;', 1765821393),
('laravel-cache-felixcandia980@gmail.com|51.195.202.75', 'i:3;', 1765795095),
('laravel-cache-felixcandia980@gmail.com|51.195.202.75:timer', 'i:1765795095;', 1765795095),
('laravel-cache-ferantores@gmail.com|107.72.178.126', 'i:1;', 1756021664),
('laravel-cache-ferantores@gmail.com|107.72.178.126:timer', 'i:1756021664;', 1756021664),
('laravel-cache-frimpongmaxwell96@gmail.com|154.161.133.184', 'i:1;', 1765731535),
('laravel-cache-frimpongmaxwell96@gmail.com|154.161.133.184:timer', 'i:1765731535;', 1765731535),
('laravel-cache-fuicherdnarchy@gmail.com|154.161.42.128', 'i:1;', 1765807307),
('laravel-cache-fuicherdnarchy@gmail.com|154.161.42.128:timer', 'i:1765807307;', 1765807307),
('laravel-cache-gabarog64@gmail.com|102.88.111.248', 'i:1;', 1765400440),
('laravel-cache-gabarog64@gmail.com|102.88.111.248:timer', 'i:1765400440;', 1765400440),
('laravel-cache-gabdenmark385@gmail.com|102.90.96.29', 'i:1;', 1765015059),
('laravel-cache-gabdenmark385@gmail.com|102.90.96.29:timer', 'i:1765015059;', 1765015059),
('laravel-cache-gentlebill.art@gmail.com|197.211.63.128', 'i:1;', 1765967827),
('laravel-cache-gentlebill.art@gmail.com|197.211.63.128:timer', 'i:1765967827;', 1765967827),
('laravel-cache-geoffreymaro100@gmail.com|102.0.21.90', 'i:1;', 1765655991),
('laravel-cache-geoffreymaro100@gmail.com|102.0.21.90:timer', 'i:1765655991;', 1765655991),
('laravel-cache-geoffreymaro100@gmail.com|41.90.209.43', 'i:2;', 1758781334),
('laravel-cache-geoffreymaro100@gmail.com|41.90.209.43:timer', 'i:1758781334;', 1758781334),
('laravel-cache-gigever60@gmail.com|105.112.31.25', 'i:1;', 1766064509),
('laravel-cache-gigever60@gmail.com|105.112.31.25:timer', 'i:1766064509;', 1766064509),
('laravel-cache-gilibeto98@gmail.com|105.161.133.166', 'i:1;', 1765355670),
('laravel-cache-gilibeto98@gmail.com|105.161.133.166:timer', 'i:1765355670;', 1765355670),
('laravel-cache-godswillw825@gmail.com|105.112.100.214', 'i:1;', 1766063837),
('laravel-cache-godswillw825@gmail.com|105.112.100.214:timer', 'i:1766063837;', 1766063837),
('laravel-cache-goodnessugadu@gmail.com|197.211.52.207', 'i:1;', 1765729750),
('laravel-cache-goodnessugadu@gmail.com|197.211.52.207:timer', 'i:1765729750;', 1765729750),
('laravel-cache-gp0220032@gmail.com|105.117.1.194', 'i:1;', 1764021299),
('laravel-cache-gp0220032@gmail.com|105.117.1.194:timer', 'i:1764021299;', 1764021299),
('laravel-cache-gp02232@gmail.com|105.117.1.194', 'i:1;', 1764021377),
('laravel-cache-gp02232@gmail.com|105.117.1.194:timer', 'i:1764021377;', 1764021377),
('laravel-cache-gp59506@gmail.com|105.113.35.110', 'i:1;', 1765100416),
('laravel-cache-gp59506@gmail.com|105.113.35.110:timer', 'i:1765100416;', 1765100416),
('laravel-cache-gyanikegyan@gmail.com|154.161.147.174', 'i:1;', 1765717869),
('laravel-cache-gyanikegyan@gmail.com|154.161.147.174:timer', 'i:1765717869;', 1765717869),
('laravel-cache-haroldwerunga@82gmail.com|102.209.57.72', 'i:1;', 1765482618),
('laravel-cache-haroldwerunga@82gmail.com|102.209.57.72:timer', 'i:1765482618;', 1765482618),
('laravel-cache-haronsan4@gmail.com|105.160.51.10', 'i:2;', 1765541440),
('laravel-cache-haronsan4@gmail.com|105.160.51.10:timer', 'i:1765541440;', 1765541440),
('laravel-cache-haronsmith12@gmail.com|105.160.51.10', 'i:1;', 1765541453),
('laravel-cache-haronsmith12@gmail.com|105.160.51.10:timer', 'i:1765541453;', 1765541453),
('laravel-cache-hfzee2017@gmail.comh|102.91.92.145', 'i:1;', 1765602685),
('laravel-cache-hfzee2017@gmail.comh|102.91.92.145:timer', 'i:1765602685;', 1765602685),
('laravel-cache-hillarykipngenok7@gmail.com|154.159.237.207', 'i:2;', 1765780731),
('laravel-cache-hillarykipngenok7@gmail.com|154.159.237.207:timer', 'i:1765780731;', 1765780731),
('laravel-cache-ibuchimiwejor005@gmail.com|102.90.97.125', 'i:1;', 1765782248),
('laravel-cache-ibuchimiwejor005@gmail.com|102.90.97.125:timer', 'i:1765782248;', 1765782248),
('laravel-cache-ifeanyiibeh232@gmail.com|102.89.34.191', 'i:1;', 1765567725),
('laravel-cache-ifeanyiibeh232@gmail.com|102.89.34.191:timer', 'i:1765567725;', 1765567725),
('laravel-cache-ifenyinjeremiah@gmail.com|197.211.52.179', 'i:1;', 1766042106),
('laravel-cache-ifenyinjeremiah@gmail.com|197.211.52.179:timer', 'i:1766042106;', 1766042106),
('laravel-cache-ijeomaukachukwu52@gmail.com|105.120.129.234', 'i:1;', 1765404114),
('laravel-cache-ijeomaukachukwu52@gmail.com|105.120.129.234:timer', 'i:1765404114;', 1765404114),
('laravel-cache-ikansdesign@gmail.com|102.90.97.223', 'i:1;', 1765879235),
('laravel-cache-ikansdesign@gmail.com|102.90.97.223:timer', 'i:1765879235;', 1765879235),
('laravel-cache-ikanstrade2@gmail.com|102.90.103.89', 'i:1;', 1765883039),
('laravel-cache-ikanstrade2@gmail.com|102.90.103.89:timer', 'i:1765883039;', 1765883039),
('laravel-cache-ikfortrading2@gmail.com|102.90.97.223', 'i:1;', 1765880488),
('laravel-cache-ikfortrading2@gmail.com|102.90.97.223:timer', 'i:1765880488;', 1765880488),
('laravel-cache-inanihove96@gmail.com|91.84.111.136', 'i:1;', 1760746302),
('laravel-cache-inanihove96@gmail.com|91.84.111.136:timer', 'i:1760746302;', 1760746302),
('laravel-cache-isaacbortsie3@gmail.com|154.160.26.132', 'i:1;', 1765883125),
('laravel-cache-isaacbortsie3@gmail.com|154.160.26.132:timer', 'i:1765883125;', 1765883125),
('laravel-cache-jamesachile66@gmail.com|197.211.52.72', 'i:2;', 1766067239),
('laravel-cache-jamesachile66@gmail.com|197.211.52.72:timer', 'i:1766067239;', 1766067239),
('laravel-cache-janewagatho@gmail.com|102.205.239.4', 'i:1;', 1766048712),
('laravel-cache-janewagatho@gmail.com|102.205.239.4:timer', 'i:1766048712;', 1766048712),
('laravel-cache-jefferyloveth8@gmail.com|102.90.100.20', 'i:1;', 1765701427),
('laravel-cache-jefferyloveth8@gmail.com|102.90.100.20:timer', 'i:1765701427;', 1765701427),
('laravel-cache-jemmuborby@gmail.com|41.209.53.114', 'i:2;', 1765208357),
('laravel-cache-jemmuborby@gmail.com|41.209.53.114:timer', 'i:1765208357;', 1765208357),
('laravel-cache-jerrythomasdusu123@gmail.com|197.157.218.198', 'i:1;', 1766061144),
('laravel-cache-jerrythomasdusu123@gmail.com|197.157.218.198:timer', 'i:1766061144;', 1766061144),
('laravel-cache-jesus4realp@gmail.com|197.210.53.52', 'i:1;', 1765903723),
('laravel-cache-jesus4realp@gmail.com|197.210.53.52:timer', 'i:1765903723;', 1765903723),
('laravel-cache-jesyn.fxgold@gmail.com|197.211.63.15', 'i:1;', 1765663239),
('laravel-cache-jesyn.fxgold@gmail.com|197.211.63.15:timer', 'i:1765663239;', 1765663239),
('laravel-cache-joakangrand1@gmail.com|102.90.100.171', 'i:1;', 1765468930),
('laravel-cache-joakangrand1@gmail.com|102.90.100.171:timer', 'i:1765468930;', 1765468930),
('laravel-cache-joe224@gmail.com|154.161.185.142', 'i:1;', 1765641514),
('laravel-cache-joe224@gmail.com|154.161.185.142:timer', 'i:1765641514;', 1765641514),
('laravel-cache-joelj8335@gmail.com|43.245.57.119', 'i:1;', 1765865689),
('laravel-cache-joelj8335@gmail.com|43.245.57.119:timer', 'i:1765865689;', 1765865689),
('laravel-cache-josephkyuthi@gmail.com|154.159.252.184', 'i:1;', 1765252828),
('laravel-cache-josephkyuthi@gmail.com|154.159.252.184:timer', 'i:1765252828;', 1765252828),
('laravel-cache-kazungustallon@gmail.com|129.222.147.58', 'i:1;', 1765262614),
('laravel-cache-kazungustallon@gmail.com|129.222.147.58:timer', 'i:1765262614;', 1765262614),
('laravel-cache-kenmmwendag@gmail.com|154.159.252.54', 'i:1;', 1765474379),
('laravel-cache-kenmmwendag@gmail.com|154.159.252.54:timer', 'i:1765474379;', 1765474379),
('laravel-cache-kennethzeremo@gmail.com|104.145.210.131', 'i:1;', 1765974134),
('laravel-cache-kennethzeremo@gmail.com|104.145.210.131:timer', 'i:1765974134;', 1765974134),
('laravel-cache-kennyprroly@gmail.com|105.119.35.14', 'i:1;', 1766048491),
('laravel-cache-kennyprroly@gmail.com|105.119.35.14:timer', 'i:1766048491;', 1766048491),
('laravel-cache-kibiievans1996@gmail.com|102.68.78.245', 'i:1;', 1765132084),
('laravel-cache-kibiievans1996@gmail.com|102.68.78.245:timer', 'i:1765132084;', 1765132084),
('laravel-cache-kingsleyadom290@hmail.com|154.161.153.247', 'i:2;', 1765833817),
('laravel-cache-kingsleyadom290@hmail.com|154.161.153.247:timer', 'i:1765833817;', 1765833817),
('laravel-cache-kingsleyigbo174@gmail.com|154.161.159.8', 'i:1;', 1765407589),
('laravel-cache-kingsleyigbo174@gmail.com|154.161.159.8:timer', 'i:1765407589;', 1765407589),
('laravel-cache-kipngetichamos50@gmail.com|154.159.237.182', 'i:1;', 1765384195),
('laravel-cache-kipngetichamos50@gmail.com|154.159.237.182:timer', 'i:1765384195;', 1765384195),
('laravel-cache-kiprotichpeter300@gmail.com|196.96.73.26', 'i:1;', 1766080722),
('laravel-cache-kiprotichpeter300@gmail.com|196.96.73.26:timer', 'i:1766080722;', 1766080722),
('laravel-cache-lawaladammuhammad4@gmail.com|105.117.6.118', 'i:1;', 1765787744),
('laravel-cache-lawaladammuhammad4@gmail.com|105.117.6.118:timer', 'i:1765787744;', 1765787744),
('laravel-cache-lawrencesegunakinbowale@gmail.com|102.89.68.183', 'i:1;', 1765376803),
('laravel-cache-lawrencesegunakinbowale@gmail.com|102.89.68.183:timer', 'i:1765376803;', 1765376803),
('laravel-cache-likatabickslay78@gmail.com|154.159.237.188', 'i:1;', 1765191008),
('laravel-cache-likatabickslay78@gmail.com|154.159.237.188:timer', 'i:1765191008;', 1765191008),
('laravel-cache-lincoln.maingi7@gmail.com|102.210.24.6', 'i:1;', 1765120172),
('laravel-cache-lincoln.maingi7@gmail.com|102.210.24.6:timer', 'i:1765120172;', 1765120172),
('laravel-cache-lincolnmunene37@gmail.com|105.161.183.233', 'i:2;', 1765545927),
('laravel-cache-lincolnmunene37@gmail.com|105.161.183.233:timer', 'i:1765545927;', 1765545927),
('laravel-cache-lj536711@gmail.com|102.91.105.210', 'i:2;', 1765294057),
('laravel-cache-lj536711@gmail.com|102.91.105.210:timer', 'i:1765294057;', 1765294057),
('laravel-cache-lmasanga28@gmail.com|196.96.70.24', 'i:2;', 1765801248),
('laravel-cache-lmasanga28@gmail.com|196.96.70.24:timer', 'i:1765801248;', 1765801248),
('laravel-cache-lordonestok@gmail.com|102.88.108.57', 'i:1;', 1765566320),
('laravel-cache-lordonestok@gmail.com|102.88.108.57:timer', 'i:1765566320;', 1765566320),
('laravel-cache-mabamijeaghogho@gmail.com|105.113.94.20', 'i:2;', 1765271632),
('laravel-cache-mabamijeaghogho@gmail.com|105.113.94.20:timer', 'i:1765271632;', 1765271632),
('laravel-cache-mahewa105@gmail.com|102.0.13.150', 'i:1;', 1765737159),
('laravel-cache-mahewa105@gmail.com|102.0.13.150:timer', 'i:1765737159;', 1765737159),
('laravel-cache-makaridalmas0@gmail.com|197.248.138.149', 'i:3;', 1765532024),
('laravel-cache-makaridalmas0@gmail.com|197.248.138.149:timer', 'i:1765532024;', 1765532024),
('laravel-cache-mallisahandsons@gmail.com|105.112.102.202', 'i:1;', 1761226878),
('laravel-cache-mallisahandsons@gmail.com|105.112.102.202:timer', 'i:1761226878;', 1761226878),
('laravel-cache-mamuzo53@gmail.com|102.89.75.9', 'i:1;', 1765966208),
('laravel-cache-mamuzo53@gmail.com|102.89.75.9:timer', 'i:1765966208;', 1765966208),
('laravel-cache-manbuva254@gmail.com|102.135.168.152', 'i:1;', 1766043974),
('laravel-cache-manbuva254@gmail.com|102.135.168.152:timer', 'i:1766043974;', 1766043974),
('laravel-cache-manlevels21@gmail.com|154.161.138.81', 'i:1;', 1766089192),
('laravel-cache-manlevels21@gmail.com|154.161.138.81:timer', 'i:1766089192;', 1766089192),
('laravel-cache-marvelkerry001@gmail.com|105.112.107.144', 'i:3;', 1765885814),
('laravel-cache-marvelkerry001@gmail.com|105.112.107.144:timer', 'i:1765885814;', 1765885814),
('laravel-cache-maryrose@gmail.com|105.112.216.211', 'i:1;', 1766076694),
('laravel-cache-maryrose@gmail.com|105.112.216.211:timer', 'i:1766076694;', 1766076694),
('laravel-cache-matthewashong12@gmail.com|105.116.12.188', 'i:1;', 1765839223),
('laravel-cache-matthewashong12@gmail.com|105.116.12.188:timer', 'i:1765839223;', 1765839223),
('laravel-cache-mensahosei947@gmail.com|154.161.238.187', 'i:3;', 1765469253),
('laravel-cache-mensahosei947@gmail.com|154.161.238.187:timer', 'i:1765469253;', 1765469253),
('laravel-cache-michaelsaabora@gmail.com|102.176.75.177', 'i:1;', 1765479976),
('laravel-cache-michaelsaabora@gmail.com|102.176.75.177:timer', 'i:1765479976;', 1765479976),
('laravel-cache-miraclennaji84@gmail|98.97.79.115', 'i:1;', 1766074548),
('laravel-cache-miraclennaji84@gmail|98.97.79.115:timer', 'i:1766074548;', 1766074548),
('laravel-cache-miriamnyaitondi@gmail.com|197.248.155.235', 'i:1;', 1765703806),
('laravel-cache-miriamnyaitondi@gmail.com|197.248.155.235:timer', 'i:1765703806;', 1765703806),
('laravel-cache-mosesomoniyi212@gmail.com|197.211.52.66', 'i:1;', 1765712599),
('laravel-cache-mosesomoniyi212@gmail.com|197.211.52.66:timer', 'i:1765712598;', 1765712598),
('laravel-cache-muazuaminu5683206@gmail.com|102.91.93.127', 'i:2;', 1765988062),
('laravel-cache-muazuaminu5683206@gmail.com|102.91.93.127:timer', 'i:1765988062;', 1765988062),
('laravel-cache-muhammadalameen4907@gmail.com|102.91.105.242', 'i:1;', 1765610990),
('laravel-cache-muhammadalameen4907@gmail.com|102.91.105.242:timer', 'i:1765610990;', 1765610990),
('laravel-cache-muhumadalidirye@gmail.com|102.217.123.90', 'i:1;', 1765097462),
('laravel-cache-muhumadalidirye@gmail.com|102.217.123.90:timer', 'i:1765097462;', 1765097462),
('laravel-cache-muririmamyeure5@gmail.com|197.211.59.111', 'i:1;', 1766054822),
('laravel-cache-muririmamyeure5@gmail.com|197.211.59.111:timer', 'i:1766054822;', 1766054822),
('laravel-cache-mutiriapaul2021@gmail.com|102.212.237.141', 'i:1;', 1765737912),
('laravel-cache-mutiriapaul2021@gmail.com|102.212.237.141:timer', 'i:1765737912;', 1765737912),
('laravel-cache-nanaappiahbonney@gmail.com|154.161.130.1', 'i:1;', 1765787712),
('laravel-cache-nanaappiahbonney@gmail.com|154.161.130.1:timer', 'i:1765787712;', 1765787712),
('laravel-cache-ndubueze448@gmail.com|102.91.104.204', 'i:1;', 1765688330),
('laravel-cache-ndubueze448@gmail.com|102.91.104.204:timer', 'i:1765688330;', 1765688330),
('laravel-cache-nic420545@gmail.com|102.90.79.73', 'i:1;', 1765883830),
('laravel-cache-nic420545@gmail.com|102.90.79.73:timer', 'i:1765883830;', 1765883830),
('laravel-cache-niisoja27@gmail.com|102.176.94.232', 'i:1;', 1765453665),
('laravel-cache-niisoja27@gmail.com|102.176.94.232:timer', 'i:1765453665;', 1765453665),
('laravel-cache-nkeziri@gmail.com|102.89.69.217', 'i:1;', 1765237452),
('laravel-cache-nkeziri@gmail.com|102.89.69.217:timer', 'i:1765237452;', 1765237452),
('laravel-cache-nwabuezed962@gmail.com|102.90.96.235', 'i:1;', 1765724134),
('laravel-cache-nwabuezed962@gmail.com|102.90.96.235:timer', 'i:1765724134;', 1765724134),
('laravel-cache-nwankwougonnam@gmail.com|105.116.1.252', 'i:1;', 1765705365),
('laravel-cache-nwankwougonnam@gmail.com|105.116.1.252:timer', 'i:1765705365;', 1765705365),
('laravel-cache-nyamotechltd2021@gmail.com|41.81.34.71', 'i:1;', 1765561874),
('laravel-cache-nyamotechltd2021@gmail.com|41.81.34.71:timer', 'i:1765561874;', 1765561874),
('laravel-cache-obisikeebuka7@gmail.com|105.113.63.212', 'i:1;', 1766080756),
('laravel-cache-obisikeebuka7@gmail.com|105.113.63.212:timer', 'i:1766080756;', 1766080756),
('laravel-cache-odirastephen070@gmail.com|105.160.92.120', 'i:1;', 1765207821),
('laravel-cache-odirastephen070@gmail.com|105.160.92.120:timer', 'i:1765207821;', 1765207821),
('laravel-cache-ogolatrizer@gmail.com|154.159.237.15', 'i:1;', 1765972390),
('laravel-cache-ogolatrizer@gmail.com|154.159.237.15:timer', 'i:1765972390;', 1765972390),
('laravel-cache-ogundirandamilare55@gmail.com|197.211.63.182', 'i:1;', 1765969659),
('laravel-cache-ogundirandamilare55@gmail.com|197.211.63.182:timer', 'i:1765969659;', 1765969659),
('laravel-cache-ojodemillicent8@gmail.com|105.161.209.11', 'i:1;', 1765779207),
('laravel-cache-ojodemillicent8@gmail.com|105.161.209.11:timer', 'i:1765779207;', 1765779207),
('laravel-cache-okinaly@gmail.com|102.90.101.60', 'i:1;', 1765744889),
('laravel-cache-okinaly@gmail.com|102.90.101.60:timer', 'i:1765744889;', 1765744889),
('laravel-cache-oladejohabeeb4621@gmail.com|105.113.24.45', 'i:1;', 1765710582),
('laravel-cache-oladejohabeeb4621@gmail.com|105.113.24.45:timer', 'i:1765710582;', 1765710582),
('laravel-cache-omohamike1000@gmail.com|102.91.71.169', 'i:2;', 1765842259),
('laravel-cache-omohamike1000@gmail.com|102.91.71.169:timer', 'i:1765842259;', 1765842259),
('laravel-cache-onahsunday124@gmail.com|102.91.96.118', 'i:2;', 1765890039),
('laravel-cache-onahsunday124@gmail.com|102.91.96.118:timer', 'i:1765890039;', 1765890039),
('laravel-cache-onuahmicovic2018@gmail.com|105.112.211.222', 'i:1;', 1765976535),
('laravel-cache-onuahmicovic2018@gmail.com|105.112.211.222:timer', 'i:1765976535;', 1765976535),
('laravel-cache-onuahmicovic2018@gmail.com|105.112.221.91', 'i:1;', 1766052169),
('laravel-cache-onuahmicovic2018@gmail.com|105.112.221.91:timer', 'i:1766052169;', 1766052169),
('laravel-cache-onyeachop@gmail.com|102.90.99.50', 'i:1;', 1765727495),
('laravel-cache-onyeachop@gmail.com|102.90.99.50:timer', 'i:1765727495;', 1765727495),
('laravel-cache-onyecheibuchim@gmail.com|102.90.97.125', 'i:1;', 1765782329),
('laravel-cache-onyecheibuchim@gmail.com|102.90.97.125:timer', 'i:1765782329;', 1765782329),
('laravel-cache-onyedikachiele@gmail.com|154.161.254.6', 'i:3;', 1765825116),
('laravel-cache-onyedikachiele@gmail.com|154.161.254.6:timer', 'i:1765825116;', 1765825116),
('laravel-cache-onyedikachielei@gmail.com|154.161.254.6', 'i:2;', 1765825239),
('laravel-cache-onyedikachielei@gmail.com|154.161.254.6:timer', 'i:1765825239;', 1765825239),
('laravel-cache-opedeji2@gmail.com|102.89.85.133', 'i:1;', 1765523212),
('laravel-cache-opedeji2@gmail.com|102.89.85.133:timer', 'i:1765523212;', 1765523212),
('laravel-cache-opeyemiamusan3@gmail.com|102.89.83.152', 'i:1;', 1765702158),
('laravel-cache-opeyemiamusan3@gmail.com|102.89.83.152:timer', 'i:1765702158;', 1765702158),
('laravel-cache-oriphil2@gmail.com|197.211.52.77', 'i:1;', 1765804958),
('laravel-cache-oriphil2@gmail.com|197.211.52.77:timer', 'i:1765804958;', 1765804958),
('laravel-cache-osagabriel704@gmail.com|197.211.63.157', 'i:1;', 1765878758),
('laravel-cache-osagabriel704@gmail.com|197.211.63.157:timer', 'i:1765878758;', 1765878758),
('laravel-cache-owheunique00@gmail.com|154.161.54.153', 'i:1;', 1765491972),
('laravel-cache-owheunique00@gmail.com|154.161.54.153:timer', 'i:1765491972;', 1765491972),
('laravel-cache-owolabi383@gmail.com|105.113.63.86', 'i:1;', 1765733200),
('laravel-cache-owolabi383@gmail.com|105.113.63.86:timer', 'i:1765733200;', 1765733200),
('laravel-cache-ozoemenadavidson@gmail.com|102.90.97.17', 'i:1;', 1765558219),
('laravel-cache-ozoemenadavidson@gmail.com|102.90.97.17:timer', 'i:1765558219;', 1765558219),
('laravel-cache-pabel4651@gmail.com|105.112.105.63', 'i:1;', 1765312016),
('laravel-cache-pabel4651@gmail.com|105.112.105.63:timer', 'i:1765312016;', 1765312016),
('laravel-cache-pakasamaki52@gmail.com|196.96.66.156', 'i:1;', 1764949388),
('laravel-cache-pakasamaki52@gmail.com|196.96.66.156:timer', 'i:1764949388;', 1764949388),
('laravel-cache-pedant_sko@yahoo.com|102.90.79.109', 'i:1;', 1765695241),
('laravel-cache-pedant_sko@yahoo.com|102.90.79.109:timer', 'i:1765695241;', 1765695241),
('laravel-cache-peterdawar8@gmail.com|105.112.23.136', 'i:1;', 1765376566),
('laravel-cache-peterdawar8@gmail.com|105.112.23.136:timer', 'i:1765376566;', 1765376566),
('laravel-cache-peterpatrick635@gmail.com|102.91.99.37', 'i:3;', 1761077036),
('laravel-cache-peterpatrick635@gmail.com|102.91.99.37:timer', 'i:1761077036;', 1761077036),
('laravel-cache-princeibiangeno@gmail.com|105.117.128.59', 'i:1;', 1765971909),
('laravel-cache-princeibiangeno@gmail.com|105.117.128.59:timer', 'i:1765971909;', 1765971909),
('laravel-cache-richard.akoobioma@gmail.com|197.211.52.71', 'i:1;', 1765523023),
('laravel-cache-richard.akoobioma@gmail.com|197.211.52.71:timer', 'i:1765523023;', 1765523023),
('laravel-cache-roosemarynkeiruka@gmail.com|105.112.216.211', 'i:1;', 1766076593),
('laravel-cache-roosemarynkeiruka@gmail.com|105.112.216.211:timer', 'i:1766076593;', 1766076593),
('laravel-cache-rosemarymekoh@gmaol.com|102.90.101.182', 'i:1;', 1765808669),
('laravel-cache-rosemarymekoh@gmaol.com|102.90.101.182:timer', 'i:1765808669;', 1765808669),
('laravel-cache-ruflexguy91@gmail.com|105.113.87.51', 'i:1;', 1765730874),
('laravel-cache-ruflexguy91@gmail.com|105.113.87.51:timer', 'i:1765730874;', 1765730874),
('laravel-cache-ruriijohn5@gmail.com|196.96.184.54', 'i:2;', 1765199341),
('laravel-cache-ruriijohn5@gmail.com|196.96.184.54:timer', 'i:1765199341;', 1765199341),
('laravel-cache-sallykipngok31@gmail.com|102.166.178.192', 'i:5;', 1765193390),
('laravel-cache-sallykipngok31@gmail.com|102.166.178.192:timer', 'i:1765193390;', 1765193390),
('laravel-cache-sam17th.se@gmail.com|154.161.150.158', 'i:1;', 1765751938),
('laravel-cache-sam17th.se@gmail.com|154.161.150.158:timer', 'i:1765751938;', 1765751938),
('laravel-cache-sameeddyc@gmail.com|57.128.178.88', 'i:1;', 1761066232),
('laravel-cache-sameeddyc@gmail.com|57.128.178.88:timer', 'i:1761066231;', 1761066231),
('laravel-cache-sameeddychrisboy41@gmail.com|57.128.178.88', 'i:1;', 1761067753),
('laravel-cache-sameeddychrisboy41@gmail.com|57.128.178.88:timer', 'i:1761067753;', 1761067753),
('laravel-cache-samuelnyamyi@gmail.com|102.221.29.42', 'i:1;', 1765797514),
('laravel-cache-samuelnyamyi@gmail.com|102.221.29.42:timer', 'i:1765797514;', 1765797514),
('laravel-cache-samuelnyanyi@gmai.com|102.221.29.42', 'i:1;', 1765650955),
('laravel-cache-samuelnyanyi@gmai.com|102.221.29.42:timer', 'i:1765650955;', 1765650955),
('laravel-cache-sanivice2007@gmail.com|102.91.105.104', 'i:1;', 1765711161),
('laravel-cache-sanivice2007@gmail.com|102.91.105.104:timer', 'i:1765711161;', 1765711161),
('laravel-cache-simonmalaak@gmail.com|105.161.132.203', 'i:1;', 1757849851),
('laravel-cache-simonmalaak@gmail.com|105.161.132.203:timer', 'i:1757849851;', 1757849851),
('laravel-cache-sirajoe12@gmail.com|197.211.63.178', 'i:1;', 1765784972),
('laravel-cache-sirajoe12@gmail.com|197.211.63.178:timer', 'i:1765784972;', 1765784972),
('laravel-cache-sjobeystudios1995@gmail.com|154.161.230.181', 'i:1;', 1765529469),
('laravel-cache-sjobeystudios1995@gmail.com|154.161.230.181:timer', 'i:1765529469;', 1765529469),
('laravel-cache-songmatina@gmail.com|172.58.131.214', 'i:1;', 1755729946),
('laravel-cache-songmatina@gmail.com|172.58.131.214:timer', 'i:1755729946;', 1755729946),
('laravel-cache-songmatina10@gmail.com|172.58.131.214', 'i:1;', 1755730044),
('laravel-cache-songmatina10@gmail.com|172.58.131.214:timer', 'i:1755730044;', 1755730044),
('laravel-cache-steveculture68@gmail.com|102.0.18.196', 'i:2;', 1765128492),
('laravel-cache-steveculture68@gmail.com|102.0.18.196:timer', 'i:1765128492;', 1765128492),
('laravel-cache-sultanerick08@gmail.com|105.165.4.17', 'i:2;', 1765296742),
('laravel-cache-sultanerick08@gmail.com|105.165.4.17:timer', 'i:1765296742;', 1765296742),
('laravel-cache-suoyoekubo@gmail.com|141.0.13.67', 'i:1;', 1765454429),
('laravel-cache-suoyoekubo@gmail.com|141.0.13.67:timer', 'i:1765454429;', 1765454429),
('laravel-cache-sw44407@gmail.com|154.161.1.153', 'i:1;', 1765654543),
('laravel-cache-sw44407@gmail.com|154.161.1.153:timer', 'i:1765654543;', 1765654543),
('laravel-cache-talibanspa9@gmail.com|197.248.133.167', 'i:2;', 1765282556),
('laravel-cache-talibanspa9@gmail.com|197.248.133.167:timer', 'i:1765282556;', 1765282556),
('laravel-cache-tamkabaribekebeke@gmail.com|105.116.11.117', 'i:1;', 1765191448),
('laravel-cache-tamkabaribekebeke@gmail.com|105.116.11.117:timer', 'i:1765191448;', 1765191448),
('laravel-cache-topesalemmusic@gmail.com|102.88.114.240', 'i:1;', 1765870957),
('laravel-cache-topesalemmusic@gmail.com|102.88.114.240:timer', 'i:1765870957;', 1765870957),
('laravel-cache-tripodnet33@yahoo.comt|102.90.101.195', 'i:1;', 1765721314),
('laravel-cache-tripodnet33@yahoo.comt|102.90.101.195:timer', 'i:1765721314;', 1765721314),
('laravel-cache-tushad2030@hotmail.com|102.68.78.177', 'i:1;', 1765289469),
('laravel-cache-tushad2030@hotmail.com|102.68.78.177:timer', 'i:1765289469;', 1765289469),
('laravel-cache-twinsgold197@gmail.com|102.89.76.97', 'i:1;', 1766056761),
('laravel-cache-twinsgold197@gmail.com|102.89.76.97:timer', 'i:1766056761;', 1766056761),
('laravel-cache-uche.info@yahoo.com|141.0.12.107', 'i:1;', 1765899523),
('laravel-cache-uche.info@yahoo.com|141.0.12.107:timer', 'i:1765899523;', 1765899523),
('laravel-cache-ugazureboka28@gmail.com|91.246.41.166', 'i:1;', 1760865021),
('laravel-cache-ugazureboka28@gmail.com|91.246.41.166:timer', 'i:1760865021;', 1760865021),
('laravel-cache-ukachimunachimsoelvis@gmail.com|102.90.99.93', 'i:3;', 1765142178),
('laravel-cache-ukachimunachimsoelvis@gmail.com|102.90.99.93:timer', 'i:1765142178;', 1765142178),
('laravel-cache-uketglobal@gmail.com|105.113.41.225', 'i:1;', 1765621456),
('laravel-cache-uketglobal@gmail.com|105.113.41.225:timer', 'i:1765621456;', 1765621456),
('laravel-cache-umobi2000forever@gmail.com|197.210.54.39', 'i:1;', 1765702550),
('laravel-cache-umobi2000forever@gmail.com|197.210.54.39:timer', 'i:1765702550;', 1765702550),
('laravel-cache-usmanmuhammedadamu5@gmail.com|102.91.77.86', 'i:1;', 1765659156),
('laravel-cache-usmanmuhammedadamu5@gmail.com|102.91.77.86:timer', 'i:1765659156;', 1765659156),
('laravel-cache-uwemmonday6678@gmail.com|105.113.10.181', 'i:1;', 1765998475),
('laravel-cache-uwemmonday6678@gmail.com|105.113.10.181:timer', 'i:1765998475;', 1765998475),
('laravel-cache-uyiedebor31@gmail.com|102.90.116.42', 'i:1;', 1765202918),
('laravel-cache-uyiedebor31@gmail.com|102.90.116.42:timer', 'i:1765202918;', 1765202918),
('laravel-cache-vickiekitur@gmail.com|105.160.81.40', 'i:1;', 1765565159),
('laravel-cache-vickiekitur@gmail.com|105.160.81.40:timer', 'i:1765565159;', 1765565159),
('laravel-cache-vinobikili@gmail.com|102.91.105.145', 'i:1;', 1765955222),
('laravel-cache-vinobikili@gmail.com|102.91.105.145:timer', 'i:1765955222;', 1765955222),
('laravel-cache-vjal3550@gmail.com|152.58.35.112', 'i:1;', 1764216773),
('laravel-cache-vjal3550@gmail.com|152.58.35.112:timer', 'i:1764216773;', 1764216773),
('laravel-cache-wambuamark11@gmail.com|102.0.27.26', 'i:1;', 1765533418),
('laravel-cache-wambuamark11@gmail.com|102.0.27.26:timer', 'i:1765533418;', 1765533418),
('laravel-cache-williamokoloko@gmail.com|197.211.52.72', 'i:1;', 1765217010),
('laravel-cache-williamokoloko@gmail.com|197.211.52.72:timer', 'i:1765217010;', 1765217010),
('laravel-cache-xaazrexc@gmail.com|157.230.166.144', 'i:1;', 1758852674),
('laravel-cache-xaazrexc@gmail.com|157.230.166.144:timer', 'i:1758852674;', 1758852674),
('laravel-cache-y.u.n.asylva.i.ne@gmail.com|149.71.193.20', 'i:1;', 1764869364),
('laravel-cache-y.u.n.asylva.i.ne@gmail.com|149.71.193.20:timer', 'i:1764869364;', 1764869364),
('laravel-cache-yusuffimranakanfe@gmail.com|102.89.83.230', 'i:1;', 1765633413),
('laravel-cache-yusuffimranakanfe@gmail.com|102.89.83.230:timer', 'i:1765633413;', 1765633413),
('laravel-cache-zinbaxint5@gmail.com|154.161.59.252', 'i:3;', 1765835608),
('laravel-cache-zinbaxint5@gmail.com|154.161.59.252:timer', 'i:1765835608;', 1765835608),
('latency-cache-abduesmael771@gmail.com|102.213.69.235', 'i:1;', 1767871876),
('latency-cache-abduesmael771@gmail.com|102.213.69.235:timer', 'i:1767871876;', 1767871876),
('latency-cache-abdulalawi192@gmail.com|197.232.62.158', 'i:1;', 1767782581),
('latency-cache-abdulalawi192@gmail.com|197.232.62.158:timer', 'i:1767782581;', 1767782581),
('latency-cache-abdulrahamanabdulhamid10@gmail.com|102.215.57.54', 'i:1;', 1767382014),
('latency-cache-abdulrahamanabdulhamid10@gmail.com|102.215.57.54:timer', 'i:1767382014;', 1767382014),
('latency-cache-abhinavsingh90071@gmail.com|152.59.187.104', 'i:1;', 1767415366),
('latency-cache-abhinavsingh90071@gmail.com|152.59.187.104:timer', 'i:1767415366;', 1767415366),
('latency-cache-abhinavsingh90071@gmail.com|152.59.187.220', 'i:1;', 1767417784),
('latency-cache-abhinavsingh90071@gmail.com|152.59.187.220:timer', 'i:1767417784;', 1767417784),
('latency-cache-abusufianomar4@gmail.com|154.79.248.34', 'i:1;', 1767447395),
('latency-cache-abusufianomar4@gmail.com|154.79.248.34:timer', 'i:1767447395;', 1767447395),
('latency-cache-adeyinkafavouri@gmail.com|102.89.68.12', 'i:2;', 1767439491),
('latency-cache-adeyinkafavouri@gmail.com|102.89.68.12:timer', 'i:1767439490;', 1767439490),
('latency-cache-agbanyob1@gmail.com|154.160.17.249', 'i:1;', 1767616931),
('latency-cache-agbanyob1@gmail.com|154.160.17.249:timer', 'i:1767616931;', 1767616931),
('latency-cache-aingel47@gmail.com|41.210.145.6', 'i:3;', 1767992769),
('latency-cache-aingel47@gmail.com|41.210.145.6:timer', 'i:1767992769;', 1767992769),
('latency-cache-andrew4sakah@gmail.com|137.115.4.112', 'i:1;', 1767540160),
('latency-cache-andrew4sakah@gmail.com|137.115.4.112:timer', 'i:1767540160;', 1767540160),
('latency-cache-annemarynganga021@gmail.com|105.161.156.84', 'i:1;', 1767773356),
('latency-cache-annemarynganga021@gmail.com|105.161.156.84:timer', 'i:1767773356;', 1767773356),
('latency-cache-annsebastian650@gmail.com|92.96.45.30', 'i:1;', 1768288226),
('latency-cache-annsebastian650@gmail.com|92.96.45.30:timer', 'i:1768288226;', 1768288226),
('latency-cache-annsebastian650@gmail.com|92.97.41.69', 'i:2;', 1768165965),
('latency-cache-annsebastian650@gmail.com|92.97.41.69:timer', 'i:1768165965;', 1768165965),
('latency-cache-argjendsinani11@gmail.com|213.163.125.245', 'i:1;', 1767964272),
('latency-cache-argjendsinani11@gmail.com|213.163.125.245:timer', 'i:1767964271;', 1767964271),
('latency-cache-beoshidelacalifornie@gmail.com|154.72.153.175', 'i:1;', 1768111314),
('latency-cache-beoshidelacalifornie@gmail.com|154.72.153.175:timer', 'i:1768111314;', 1768111314),
('latency-cache-beoshidelacalifornie@icloud.com|172.98.32.2', 'i:1;', 1767881179),
('latency-cache-beoshidelacalifornie@icloud.com|172.98.32.2:timer', 'i:1767881179;', 1767881179),
('latency-cache-brookd364@gmail.com|196.190.62.125', 'i:1;', 1768309927),
('latency-cache-brookd364@gmail.com|196.190.62.125:timer', 'i:1768309927;', 1768309927),
('latency-cache-bustanihomea@gmail.com|41.57.105.79', 'i:2;', 1767682990),
('latency-cache-bustanihomea@gmail.com|41.57.105.79:timer', 'i:1767682990;', 1767682990),
('latency-cache-bustanihomes@gmail.com|146.70.74.90', 'i:2;', 1767799073),
('latency-cache-bustanihomes@gmail.com|146.70.74.90:timer', 'i:1767799073;', 1767799073),
('latency-cache-callraymondking@gmail.com|102.91.78.225', 'i:1;', 1767435298),
('latency-cache-callraymondking@gmail.com|102.91.78.225:timer', 'i:1767435298;', 1767435298),
('latency-cache-cervanteshendrixmchale@gmail.com|58.69.151.105', 'i:2;', 1767671338),
('latency-cache-cervanteshendrixmchale@gmail.com|58.69.151.105:timer', 'i:1767671338;', 1767671338),
('latency-cache-chibuikeiheanacho873@gmail.com|102.90.115.236', 'i:1;', 1767783272),
('latency-cache-chibuikeiheanacho873@gmail.com|102.90.115.236:timer', 'i:1767783272;', 1767783272),
('latency-cache-cynthiakinyua475@gmail.com|197.237.25.57', 'i:1;', 1767820780),
('latency-cache-cynthiakinyua475@gmail.com|197.237.25.57:timer', 'i:1767820780;', 1767820780),
('latency-cache-davedropshiper@gmail.com|102.208.164.122', 'i:1;', 1767712913),
('latency-cache-davedropshiper@gmail.com|102.208.164.122:timer', 'i:1767712913;', 1767712913),
('latency-cache-dropshippingbiz11@gmail.com|192.95.134.199', 'i:1;', 1767624858),
('latency-cache-dropshippingbiz11@gmail.com|192.95.134.199:timer', 'i:1767624858;', 1767624858),
('latency-cache-gedzahsamuel7@gmail.com|41.204.44.227', 'i:1;', 1767792071),
('latency-cache-gedzahsamuel7@gmail.com|41.204.44.227:timer', 'i:1767792071;', 1767792071),
('latency-cache-guerzonjames@gmail.com|124.217.95.241', 'i:1;', 1768017023),
('latency-cache-guerzonjames@gmail.com|124.217.95.241:timer', 'i:1768017023;', 1768017023),
('latency-cache-hawahnabuwembo26@gmail.com|102.210.28.17', 'i:1;', 1767468690),
('latency-cache-hawahnabuwembo26@gmail.com|102.210.28.17:timer', 'i:1767468690;', 1767468690),
('latency-cache-henryfb816@gmail.com|102.90.118.223', 'i:2;', 1767878626),
('latency-cache-henryfb816@gmail.com|102.90.118.223:timer', 'i:1767878626;', 1767878626),
('latency-cache-jacksontorrez86@gmail.com|197.239.8.232', 'i:1;', 1767993292),
('latency-cache-jacksontorrez86@gmail.com|197.239.8.232:timer', 'i:1767993292;', 1767993292),
('latency-cache-jacksontorrez86@gmail.com|41.210.145.6', 'i:2;', 1767992927),
('latency-cache-jacksontorrez86@gmail.com|41.210.145.6:timer', 'i:1767992927;', 1767992927),
('latency-cache-japbarajan41@gmail.com|175.176.90.7', 'i:1;', 1768132487),
('latency-cache-japbarajan41@gmail.com|175.176.90.7:timer', 'i:1768132487;', 1768132487),
('latency-cache-japhetlangat975@gmail.com|154.159.238.205', 'i:2;', 1767473384),
('latency-cache-japhetlangat975@gmail.com|154.159.238.205:timer', 'i:1767473384;', 1767473384),
('latency-cache-johnanyanwu63@gmail.com|105.112.214.106', 'i:1;', 1767863676),
('latency-cache-johnanyanwu63@gmail.com|105.112.214.106:timer', 'i:1767863676;', 1767863676),
('latency-cache-juniorekani@gmail.com|41.158.251.251', 'i:1;', 1767894429),
('latency-cache-juniorekani@gmail.com|41.158.251.251:timer', 'i:1767894429;', 1767894429),
('latency-cache-kawemina@gmail.com|102.176.101.77', 'i:1;', 1768161942),
('latency-cache-kawemina@gmail.com|102.176.101.77:timer', 'i:1768161942;', 1768161942),
('latency-cache-kelvindyeboah@gmail.com|41.155.5.165', 'i:2;', 1768216922),
('latency-cache-kelvindyeboah@gmail.com|41.155.5.165:timer', 'i:1768216922;', 1768216922),
('latency-cache-kelvinsyeboah@gmail.com|41.155.5.165', 'i:1;', 1768216880),
('latency-cache-kelvinsyeboah@gmail.com|41.155.5.165:timer', 'i:1768216880;', 1768216880),
('latency-cache-kenyisantos54@gmail.com|185.165.240.82', 'i:1;', 1767484277),
('latency-cache-kenyisantos54@gmail.com|185.165.240.82:timer', 'i:1767484277;', 1767484277),
('latency-cache-kimolir@gmail.com|102.204.4.0', 'i:2;', 1768332754),
('latency-cache-kimolir@gmail.com|102.204.4.0:timer', 'i:1768332754;', 1768332754),
('latency-cache-kiriamakelvin4@gmail.com|41.89.104.15', 'i:2;', 1768386281),
('latency-cache-kiriamakelvin4@gmail.com|41.89.104.15:timer', 'i:1768386281;', 1768386281),
('latency-cache-lincolnmunene37@gmail.com|102.0.9.114', 'i:1;', 1767006961);
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('latency-cache-lincolnmunene37@gmail.com|102.0.9.114:timer', 'i:1767006961;', 1767006961),
('latency-cache-lincolnmunene37@gmail.com|197.237.25.57', 'i:1;', 1767820730),
('latency-cache-lincolnmunene37@gmail.com|197.237.25.57:timer', 'i:1767820730;', 1767820730),
('latency-cache-lukaaleu18@gmail.com|197.231.239.101', 'i:1;', 1768344106),
('latency-cache-lukaaleu18@gmail.com|197.231.239.101:timer', 'i:1768344106;', 1768344106),
('latency-cache-lukengesaadiq6@gmail.com|86.96.86.62', 'i:1;', 1767980627),
('latency-cache-lukengesaadiq6@gmail.com|86.96.86.62:timer', 'i:1767980627;', 1767980627),
('latency-cache-mahamayahaya0@gmai.com|154.161.137.181', 'i:1;', 1767501877),
('latency-cache-mahamayahaya0@gmai.com|154.161.137.181:timer', 'i:1767501877;', 1767501877),
('latency-cache-marieanneseba30@gmail.com|92.97.41.69', 'i:2;', 1768165078),
('latency-cache-marieanneseba30@gmail.com|92.97.41.69:timer', 'i:1768165078;', 1768165078),
('latency-cache-marvinnathan01@gmail.com|102.86.4.64', 'i:2;', 1768167277),
('latency-cache-marvinnathan01@gmail.com|102.86.4.64:timer', 'i:1768167277;', 1768167277),
('latency-cache-maverick1@gmail.com|102.204.198.120', 'i:1;', 1766857383),
('latency-cache-maverick1@gmail.com|102.204.198.120:timer', 'i:1766857383;', 1766857383),
('latency-cache-meshackkipkosgei374@gmail.com|154.159.237.184', 'i:1;', 1767978599),
('latency-cache-meshackkipkosgei374@gmail.com|154.159.237.184:timer', 'i:1767978599;', 1767978599),
('latency-cache-muneiwac@gmail.com|169.1.90.132', 'i:3;', 1767550883),
('latency-cache-muneiwac@gmail.com|169.1.90.132:timer', 'i:1767550883;', 1767550883),
('latency-cache-muneiwac@gmail.com|169.1.90.4', 'i:1;', 1767526947),
('latency-cache-muneiwac@gmail.com|169.1.90.4:timer', 'i:1767526947;', 1767526947),
('latency-cache-muthuicarolyne680@gmail.com|105.161.47.44', 'i:2;', 1768253094),
('latency-cache-muthuicarolyne680@gmail.com|105.161.47.44:timer', 'i:1768253094;', 1768253094),
('latency-cache-nathantaun9@gmail.com|102.85.142.17', 'i:1;', 1767923313),
('latency-cache-nathantaun9@gmail.com|102.85.142.17:timer', 'i:1767923313;', 1767923313),
('latency-cache-ncarolyne87@yahoo.com|105.161.47.44', 'i:1;', 1768253252),
('latency-cache-ncarolyne87@yahoo.com|105.161.47.44:timer', 'i:1768253252;', 1768253252),
('latency-cache-ngoboisolomon7@gmail.com|197.139.3.9', 'i:1;', 1767778110),
('latency-cache-ngoboisolomon7@gmail.com|197.139.3.9:timer', 'i:1767778110;', 1767778110),
('latency-cache-nocal@mail.com|45.207.200.82', 'i:1;', 1766611220),
('latency-cache-nocal@mail.com|45.207.200.82:timer', 'i:1766611220;', 1766611220),
('latency-cache-orion4dawit@gmail.com|196.191.221.239', 'i:1;', 1768308122),
('latency-cache-orion4dawit@gmail.com|196.191.221.239:timer', 'i:1768308122;', 1768308122),
('latency-cache-oscarmassagasr@gmail.com|197.186.15.177', 'i:1;', 1767778482),
('latency-cache-oscarmassagasr@gmail.com|197.186.15.177:timer', 'i:1767778482;', 1767778482),
('latency-cache-phirik79@gmail.com|41.63.34.2', 'i:1;', 1767628364),
('latency-cache-phirik79@gmail.com|41.63.34.2:timer', 'i:1767628364;', 1767628364),
('latency-cache-priapharmacy@gmail.com|103.166.26.133', 'i:1;', 1767616629),
('latency-cache-priapharmacy@gmail.com|103.166.26.133:timer', 'i:1767616629;', 1767616629),
('latency-cache-priestnaka@gmail.com|43.245.57.175', 'i:1;', 1767825083),
('latency-cache-priestnaka@gmail.com|43.245.57.175:timer', 'i:1767825083;', 1767825083),
('latency-cache-priestnaka@gmail.com|43.245.57.55', 'i:1;', 1767825044),
('latency-cache-priestnaka@gmail.com|43.245.57.55:timer', 'i:1767825044;', 1767825044),
('latency-cache-reaznazamadeen800@gmail.com|190.108.215.180', 'i:1;', 1768327737),
('latency-cache-reaznazamadeen800@gmail.com|190.108.215.180:timer', 'i:1768327737;', 1768327737),
('latency-cache-reipennec@gnail.com|180.191.221.102', 'i:1;', 1767602450),
('latency-cache-reipennec@gnail.com|180.191.221.102:timer', 'i:1767602450;', 1767602450),
('latency-cache-richvid098@gmail.com|154.161.40.88', 'i:1;', 1767734236),
('latency-cache-richvid098@gmail.com|154.161.40.88:timer', 'i:1767734236;', 1767734236),
('latency-cache-rkdesalit@gmail.com|86.98.167.87', 'i:1;', 1768261054),
('latency-cache-rkdesalit@gmail.com|86.98.167.87:timer', 'i:1768261054;', 1768261054),
('latency-cache-sawa24971@gmail.com|217.64.100.192', 'i:1;', 1767985113),
('latency-cache-sawa24971@gmail.com|217.64.100.192:timer', 'i:1767985113;', 1767985113),
('latency-cache-sawa24971@gmail.com|217.64.100.240', 'i:1;', 1767894560),
('latency-cache-sawa24971@gmail.com|217.64.100.240:timer', 'i:1767894560;', 1767894560),
('latency-cache-seun8041@gmail.com|102.164.96.105', 'i:1;', 1768344684),
('latency-cache-seun8041@gmail.com|102.164.96.105:timer', 'i:1768344684;', 1768344684),
('latency-cache-sh.e.e.nadi.a.r.te@gmail.com|154.49.199.96', 'i:1;', 1766445046),
('latency-cache-sh.e.e.nadi.a.r.te@gmail.com|154.49.199.96:timer', 'i:1766445046;', 1766445046),
('latency-cache-somokalemubaraq@gmail.com|197.211.63.87', 'i:1;', 1768336890),
('latency-cache-somokalemubaraq@gmail.com|197.211.63.87:timer', 'i:1768336890;', 1768336890),
('latency-cache-sumerkin0007@gmail.com|77.239.161.139', 'i:1;', 1768178955),
('latency-cache-sumerkin0007@gmail.com|77.239.161.139:timer', 'i:1768178955;', 1768178955),
('latency-cache-trustedenterprisez@gmail.com|102.0.21.90', 'i:1;', 1766567648),
('latency-cache-trustedenterprisez@gmail.com|102.0.21.90:timer', 'i:1766567648;', 1766567648),
('latency-cache-twalutatukasingula105@gmail.com|102.86.7.171', 'i:1;', 1768059579),
('latency-cache-twalutatukasingula105@gmail.com|102.86.7.171:timer', 'i:1768059579;', 1768059579),
('latency-cache-wahiakonu17@gmail.com|154.161.136.101', 'i:1;', 1767659682),
('latency-cache-wahiakonu17@gmail.com|154.161.136.101:timer', 'i:1767659682;', 1767659682),
('latency-cache-wilsonloriposia152@gmail.com|105.161.226.149', 'i:1;', 1768249562),
('latency-cache-wilsonloriposia152@gmail.com|105.161.226.149:timer', 'i:1768249562;', 1768249562),
('latency-cache-yhandeluna18@gmail.com|221.154.19.225', 'i:1;', 1768094632),
('latency-cache-yhandeluna18@gmail.com|221.154.19.225:timer', 'i:1768094632;', 1768094632),
('latency-cache-ymerajmateo8@gmail.com|77.247.90.14', 'i:2;', 1768158494),
('latency-cache-ymerajmateo8@gmail.com|77.247.90.14:timer', 'i:1768158494;', 1768158494),
('lotearn-cache-anyiezmalaak@gmail.com|41.90.180.14', 'i:1;', 1754161139),
('lotearn-cache-anyiezmalaak@gmail.com|41.90.180.14:timer', 'i:1754161139;', 1754161139),
('lotearn-cache-anyiezmalaak@gmail.com|41.90.184.83', 'i:1;', 1754350118),
('lotearn-cache-anyiezmalaak@gmail.com|41.90.184.83:timer', 'i:1754350118;', 1754350118),
('lotearn-cache-anyiezmalak@gmail.com|41.90.178.85', 'i:3;', 1754225424),
('lotearn-cache-anyiezmalak@gmail.com|41.90.178.85:timer', 'i:1754225424;', 1754225424),
('lotearn-cache-anyiezmalak@gmail.com|41.90.184.83', 'i:3;', 1754350830),
('lotearn-cache-anyiezmalak@gmail.com|41.90.184.83:timer', 'i:1754350830;', 1754350830),
('lotearn-cache-simonmalaak@gmail.com|41.90.178.85', 'i:1;', 1754225248),
('lotearn-cache-simonmalaak@gmail.com|41.90.178.85:timer', 'i:1754225248;', 1754225248),
('vaultabot-cache-barbara38@gmail.com|154.49.199.177', 'i:1;', 1768410649),
('vaultabot-cache-barbara38@gmail.com|154.49.199.177:timer', 'i:1768410649;', 1768410649),
('vaultabot-cache-william123@gmail.com|23.191.80.29', 'i:1;', 1768838308),
('vaultabot-cache-william123@gmail.com|23.191.80.29:timer', 'i:1768838308;', 1768838308),
('vaultabot-cache-williamvatileni3@gmail.com|80.190.82.236', 'i:1;', 1768666648),
('vaultabot-cache-williamvatileni3@gmail.com|80.190.82.236:timer', 'i:1768666648;', 1768666648);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `markets`
--

CREATE TABLE `markets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_24_141026_create_deposits_table', 1),
(5, '2025_07_24_145740_create_bots_table', 1),
(6, '2025_07_24_152945_create_markets_table', 1),
(7, '2025_07_25_110252_add_wallet_balance_to_users_table', 1),
(8, '2025_07_30_060507_create_user_cards_table', 1),
(9, '2025_07_30_060632_create_transactions_table', 1),
(10, '2025_07_30_060821_create_personal_access_tokens_table', 1),
(11, '2025_07_30_065754_add_cvv_to_user_cards', 1),
(12, '2025_08_01_065754_create_withdrawals_table', 2),
(13, '2025_08_05_075115_create_mpesa_stk_requests_table', 3),
(14, '2025_08_05_101855_create_permission_tables', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 1671);

-- --------------------------------------------------------

--
-- Table structure for table `mpesa_stk_requests`
--

CREATE TABLE `mpesa_stk_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `account` varchar(255) DEFAULT NULL,
  `checkout_request_id` varchar(255) NOT NULL,
  `merchant_request_id` varchar(255) NOT NULL,
  `status` enum('pending','success','failed') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mpesa_stk_requests`
--

INSERT INTO `mpesa_stk_requests` (`id`, `user_id`, `phone`, `amount`, `account`, `checkout_request_id`, `merchant_request_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '254704800563', 2900.00, NULL, 'ws_CO_1754384981542704800563', '59d5-4d06-be2e-1e850e5071fa4631755', 'pending', '2025-08-05 06:09:42', '2025-08-05 06:09:42'),
(2, 1, '254704800563', 100.00, NULL, 'ws_CO_1754387092771704800563', 'ea02-43d5-9274-63b6808514268952702', 'success', '2025-08-05 06:44:52', '2025-08-05 07:04:12'),
(3, 1, '254704800563', 100.00, NULL, 'ws_CO_1754387402637704800563', 'ee68-49e6-bc4a-b05c865e0db64798611', 'success', '2025-08-05 06:50:03', '2025-08-05 07:04:15'),
(4, 1, '254704800563', 100.00, NULL, 'ws_CO_1754387744127704800563', 'ea66-4aec-aee2-bf5fce9fd7504795216', 'success', '2025-08-05 06:55:44', '2025-08-05 07:04:18'),
(5, 1, '254704800563', 100.00, NULL, 'ws_CO_1754388253516704800563', '79f6-4ea4-8830-0888f9cee8668972792', 'success', '2025-08-05 07:04:15', '2025-08-05 07:05:19'),
(6, 1, '254704800563', 130.00, NULL, 'ws_CO_1754388483276704800563', '79f6-4ea4-8830-0888f9cee8668987255', 'success', '2025-08-05 07:08:05', '2025-08-05 07:08:36'),
(7, NULL, '254727482555', 2000.00, NULL, 'ws_CO_1754402564452727482555', 'ee68-49e6-bc4a-b05c865e0db65690018', 'pending', '2025-08-05 11:02:44', '2025-08-05 11:02:44'),
(8, NULL, '254727482555', 2000.00, NULL, 'ws_CO_1754402572633727482555', '59d5-4d06-be2e-1e850e5071fa5670201', 'pending', '2025-08-05 11:02:52', '2025-08-05 11:02:52'),
(9, NULL, '254727482555', 2000.00, NULL, 'ws_CO_1754402584823727482555', '4627-416b-be88-d3fb9f3c728e632425', 'success', '2025-08-05 11:03:05', '2025-08-05 11:03:18'),
(10, NULL, '254727482555', 2000.00, NULL, 'ws_CO_1754402742533727482555', 'ee68-49e6-bc4a-b05c865e0db65701918', 'success', '2025-08-05 11:05:42', '2025-08-05 11:06:17'),
(11, NULL, '254727482555', 15550.00, NULL, 'ws_CO_1754408468535727482555', 'ea02-43d5-9274-63b68085142610270552', 'success', '2025-08-05 12:41:08', '2025-08-05 12:42:12'),
(12, NULL, '254727482555', 12900.00, NULL, 'ws_CO_1754410119232727482555', '79f6-4ea4-8830-0888f9cee86610353577', 'success', '2025-08-05 13:08:39', '2025-08-05 13:09:13'),
(13, NULL, '254727482555', 12900.00, NULL, 'ws_CO_1754411569246727482555', 'ea02-43d5-9274-63b68085142610537856', 'success', '2025-08-05 13:32:51', '2025-08-05 13:33:11'),
(14, 1, '254704800563', 3499.00, NULL, 'ws_CO_060820251047168704800563', '2ab9-4961-8bb2-d6f5599cbb8c3856162', 'pending', '2025-08-06 04:47:17', '2025-08-06 04:47:17'),
(15, 1, '254745223849', 100.00, NULL, 'ws_CO_070820252301531745223849', '2ab9-4961-8bb2-d6f5599cbb8c10038281', 'pending', '2025-08-07 17:01:53', '2025-08-07 17:01:53'),
(16, NULL, '254701301405', 3499.00, NULL, 'ws_CO_080820250905591701301405', 'b2bd-467a-b0b7-e669489100141454490', 'pending', '2025-08-08 03:05:59', '2025-08-08 03:05:59'),
(17, NULL, '254727482755', 3499.00, NULL, 'ws_CO_110820251717566727482755', '41ba-480f-b376-443d2c637446198068', 'pending', '2025-08-11 11:17:57', '2025-08-11 11:17:57'),
(18, NULL, '254727482555', 3499.00, NULL, 'ws_CO_110820251718204727482555', '3db5-4e7d-8a3a-93afe5fb0cba5542228', 'pending', '2025-08-11 11:18:20', '2025-08-11 11:18:20'),
(19, NULL, '254727482555', 1000.00, NULL, 'ws_CO_110820251718410727482555', '53dd-48b7-9a0d-43e220c828d7175634', 'pending', '2025-08-11 11:18:41', '2025-08-11 11:18:41'),
(20, 1, '254799132904', 1000.00, NULL, 'ws_CO_120820251901560799132904', 'f373-48f0-8696-f5c35e1b0dc61478683', 'pending', '2025-08-12 13:01:56', '2025-08-12 13:01:56'),
(21, NULL, '254701070818', 3499.00, NULL, 'ws_CO_170820252257112701070818', '6280-4d9f-a7bd-69d3aefc3f723075683', 'pending', '2025-08-17 16:57:11', '2025-08-17 16:57:11'),
(22, 1, '254741379431', 1000.00, NULL, 'ws_CO_130920251755428741379431', '3c33-411b-a8b9-8d77b79cdb378548287', 'pending', '2025-09-13 11:55:42', '2025-09-13 11:55:42'),
(23, NULL, '254701070818', 6332.00, NULL, 'ws_CO_24092025153111712701070818', '2e8c-47f3-a5de-a9df380c5ee4861579', 'pending', '2025-09-24 09:31:11', '2025-09-24 09:31:11'),
(24, 1, '254741379431', 400.00, NULL, 'ws_CO_16102025101922892741379431', '9b25-44bc-ac6f-f50a886b975011593846', 'pending', '2025-10-16 04:19:23', '2025-10-16 04:19:23'),
(25, 1, '254745673512', 1000.00, NULL, 'ws_CO_16102025143036918745673512', '26f2-441c-b642-c9289af49aad2108373', 'pending', '2025-10-16 08:30:36', '2025-10-16 08:30:36'),
(26, NULL, '254701284457', 6332.00, NULL, 'ws_CO_21102025140011845701284457', 'c55b-4a81-a088-7904655788401424479', 'pending', '2025-10-21 08:00:11', '2025-10-21 08:00:11'),
(27, NULL, '254795673549', 400.00, NULL, 'ws_CO_22102025003408562795673549', '8c34-44b3-bbf0-768e307296cf13450547', 'pending', '2025-10-21 18:34:08', '2025-10-21 18:34:08'),
(28, NULL, '254748350003', 1500.00, NULL, 'ws_CO_24102025084848002748350003', '2f3d-4f57-95be-470eac4460d93444759', 'pending', '2025-10-24 02:48:50', '2025-10-24 02:48:50'),
(29, NULL, '254748350003', 1500.00, NULL, 'ws_CO_24102025084906830748350003', '17ee-4089-8351-20fb5b7222731177198', 'pending', '2025-10-24 02:49:08', '2025-10-24 02:49:08'),
(30, NULL, '254740279413', 1000.00, NULL, 'ws_CO_25102025081602929740279413', '79d3-4c49-b9e3-1b3942a7b9278461936', 'pending', '2025-10-25 02:16:02', '2025-10-25 02:16:02'),
(31, NULL, '254720905241', 50000.00, NULL, 'ws_CO_25102025160914093720905241', 'cd10-4f63-a04f-a2d27ac4e9712871128', 'pending', '2025-10-25 10:09:15', '2025-10-25 10:09:15'),
(32, NULL, '254794000274', 100000.00, NULL, 'ws_CO_25102025161555779794000274', '219e-4886-b5f0-14e7543a1a8b118940', 'pending', '2025-10-25 10:15:57', '2025-10-25 10:15:57'),
(33, NULL, '254743054544', 200000.00, NULL, 'ws_CO_25102025163722031743054544', '413f-45b5-ba31-c5ecbad7abe61687279', 'pending', '2025-10-25 10:37:23', '2025-10-25 10:37:23'),
(34, NULL, '254727788657', 10000.00, NULL, 'ws_CO_25102025164044711727788657', 'e6de-403b-90d3-2bbb08db28d89990420', 'pending', '2025-10-25 10:40:46', '2025-10-25 10:40:46'),
(35, NULL, '254720905241', 6332.00, NULL, 'ws_CO_25102025164308058720905241', '79d3-4c49-b9e3-1b3942a7b9279655330', 'pending', '2025-10-25 10:43:08', '2025-10-25 10:43:08'),
(36, NULL, '254720905241', 6332.00, NULL, 'ws_CO_25102025164317082720905241', '79d3-4c49-b9e3-1b3942a7b9279655765', 'pending', '2025-10-25 10:43:18', '2025-10-25 10:43:18'),
(37, NULL, '254720905241', 6332.00, NULL, 'ws_CO_25102025164425431720905241', '00d4-4713-9a35-3203ddb2b1a22962057', 'pending', '2025-10-25 10:44:25', '2025-10-25 10:44:25'),
(38, NULL, '254720905241', 6332.00, NULL, 'ws_CO_25102025164452949720905241', '00d4-4713-9a35-3203ddb2b1a22963335', 'pending', '2025-10-25 10:44:54', '2025-10-25 10:44:54'),
(39, NULL, '254720905241', 6332.00, NULL, 'ws_CO_25102025164509634720905241', 'ac03-4f12-95fe-08f8b4484fc85972924', 'pending', '2025-10-25 10:45:09', '2025-10-25 10:45:09'),
(40, NULL, '254720905241', 6332.00, NULL, 'ws_CO_25102025164516007720905241', '219e-4886-b5f0-14e7543a1a8b202731', 'pending', '2025-10-25 10:45:16', '2025-10-25 10:45:16'),
(41, NULL, '254720905241', 1500.00, NULL, 'ws_CO_25102025164609897720905241', '219e-4886-b5f0-14e7543a1a8b205108', 'pending', '2025-10-25 10:46:10', '2025-10-25 10:46:10'),
(42, NULL, '254720905241', 1500.00, NULL, 'ws_CO_25102025164739731720905241', '79d3-4c49-b9e3-1b3942a7b9279668082', 'pending', '2025-10-25 10:47:39', '2025-10-25 10:47:39'),
(43, NULL, '254720905241', 1555.00, NULL, 'ws_CO_25102025164846862720905241', 'f0ee-45ad-96cb-029f5b9906365988870', 'pending', '2025-10-25 10:48:47', '2025-10-25 10:48:47'),
(44, NULL, '254720905241', 1555.00, NULL, 'ws_CO_25102025164856841720905241', '43f7-42e8-8670-4e394d8093f97516061', 'pending', '2025-10-25 10:48:57', '2025-10-25 10:48:57'),
(45, NULL, '254720905241', 1555.00, NULL, 'ws_CO_25102025164900093720905241', 'b6f8-4684-8b5f-d792af94b74c26986118', 'pending', '2025-10-25 10:49:00', '2025-10-25 10:49:00'),
(46, NULL, '254743255592', 1577.00, NULL, 'ws_CO_25102025170743047743255592', 'b6f8-4684-8b5f-d792af94b74c27038338', 'pending', '2025-10-25 11:07:44', '2025-10-25 11:07:44'),
(47, NULL, '254117058331', 100000.00, NULL, 'ws_CO_25102025174450523117058331', 'b6f8-4684-8b5f-d792af94b74c27134919', 'pending', '2025-10-25 11:44:52', '2025-10-25 11:44:52'),
(48, NULL, '254716055231', 4495.00, NULL, 'ws_CO_25102025183829858716055231', '79d3-4c49-b9e3-1b3942a7b9279970930', 'pending', '2025-10-25 12:38:31', '2025-10-25 12:38:31'),
(49, NULL, '254716055231', 4495.00, NULL, 'ws_CO_25102025184237632716055231', '219e-4886-b5f0-14e7543a1a8b526831', 'pending', '2025-10-25 12:42:37', '2025-10-25 12:42:37'),
(50, NULL, '254714700225', 5000.00, NULL, 'ws_CO_26102025002053009714700225', '79d3-4c49-b9e3-1b3942a7b92710891405', 'pending', '2025-10-25 18:20:53', '2025-10-25 18:20:53'),
(51, NULL, '254714700225', 5000.00, NULL, 'ws_CO_26102025002557445714700225', '3e31-4008-9d7b-21c77ffaba0c838150', 'pending', '2025-10-25 18:25:58', '2025-10-25 18:25:58'),
(52, NULL, '254759687906', 5000.00, NULL, 'ws_CO_26102025002642689759687906', '43f7-42e8-8670-4e394d8093f98740205', 'pending', '2025-10-25 18:26:42', '2025-10-25 18:26:42'),
(53, NULL, '254718971608', 10000.00, NULL, 'ws_CO_26102025111243301718971608', '00d4-4713-9a35-3203ddb2b1a24935318', 'pending', '2025-10-26 05:12:45', '2025-10-26 05:12:45'),
(54, NULL, '254718971605', 6332.00, NULL, 'ws_CO_26102025111500860718971605', '413f-45b5-ba31-c5ecbad7abe63745554', 'pending', '2025-10-26 05:15:00', '2025-10-26 05:15:00'),
(55, NULL, '254718971608', 6332.00, NULL, 'ws_CO_26102025111516202718971608', 'e6de-403b-90d3-2bbb08db28d811978338', 'pending', '2025-10-26 05:15:17', '2025-10-26 05:15:17'),
(56, NULL, '254720272072', 1322.00, NULL, 'ws_CO_26102025113517872720272072', 'ac03-4f12-95fe-08f8b4484fc88051498', 'pending', '2025-10-26 05:35:18', '2025-10-26 05:35:18'),
(57, NULL, '254720272072', 3500.00, NULL, 'ws_CO_26102025113557814720272072', 'e6de-403b-90d3-2bbb08db28d812020607', 'pending', '2025-10-26 05:35:57', '2025-10-26 05:35:57'),
(58, NULL, '254716843784', 500.00, NULL, 'ws_CO_26102025113802161716843784', '413f-45b5-ba31-c5ecbad7abe63795174', 'pending', '2025-10-26 05:38:03', '2025-10-26 05:38:03'),
(59, NULL, '254722261935', 1000.00, NULL, 'ws_CO_26102025113952540722261935', '79b8-48a4-9e44-276462619fde4671775', 'pending', '2025-10-26 05:39:53', '2025-10-26 05:39:53'),
(60, NULL, '254722261935', 1000.00, NULL, 'ws_CO_26102025114047917722261935', '79d3-4c49-b9e3-1b3942a7b92711690210', 'pending', '2025-10-26 05:40:49', '2025-10-26 05:40:49'),
(61, NULL, '254792743252', 600.00, NULL, 'ws_CO_26102025114105055792743252', '413f-45b5-ba31-c5ecbad7abe63801975', 'pending', '2025-10-26 05:41:06', '2025-10-26 05:41:06'),
(62, NULL, '254725992832', 1000.00, NULL, 'ws_CO_26102025114134425725992832', 'ab04-43cf-b3b2-4c342619e142914461', 'pending', '2025-10-26 05:41:34', '2025-10-26 05:41:34'),
(63, NULL, '254725992832', 1000.00, NULL, 'ws_CO_26102025114139898725992832', '2f3d-4f57-95be-470eac4460d99278393', 'pending', '2025-10-26 05:41:40', '2025-10-26 05:41:40'),
(64, NULL, '254725992832', 1000.00, NULL, 'ws_CO_26102025114207794725992832', '79b8-48a4-9e44-276462619fde4676658', 'pending', '2025-10-26 05:42:07', '2025-10-26 05:42:07'),
(65, NULL, '254746629362', 638.00, NULL, 'ws_CO_26102025114229617746629362', 'df83-4737-8a35-d1180c21aafd5274963', 'pending', '2025-10-26 05:42:31', '2025-10-26 05:42:31'),
(66, NULL, '254714700225', 2315.00, NULL, 'ws_CO_26102025114601416714700225', 'f0ee-45ad-96cb-029f5b9906368078446', 'pending', '2025-10-26 05:46:01', '2025-10-26 05:46:01'),
(67, NULL, '254714700225', 5000.00, NULL, 'ws_CO_26102025114736836714700225', '3e31-4008-9d7b-21c77ffaba0c1647255', 'pending', '2025-10-26 05:47:38', '2025-10-26 05:47:38'),
(68, NULL, '254718177649', 660.00, NULL, 'ws_CO_26102025132200645718177649', '413f-45b5-ba31-c5ecbad7abe64027848', 'pending', '2025-10-26 07:22:00', '2025-10-26 07:22:00'),
(69, NULL, '254724419317', 633.00, NULL, 'ws_CO_26102025132248760724419317', 'ab04-43cf-b3b2-4c342619e1421140882', 'pending', '2025-10-26 07:22:48', '2025-10-26 07:22:48'),
(70, NULL, '254729862495', 633.00, NULL, 'ws_CO_26102025132331917729862495', '413f-45b5-ba31-c5ecbad7abe64031425', 'pending', '2025-10-26 07:23:32', '2025-10-26 07:23:32'),
(71, NULL, '254729872421', 633.00, NULL, 'ws_CO_26102025132353397729872421', 'df83-4737-8a35-d1180c21aafd5501873', 'pending', '2025-10-26 07:23:54', '2025-10-26 07:23:54'),
(72, NULL, '254728557276', 633.00, NULL, 'ws_CO_26102025132418958728557276', '2f3d-4f57-95be-470eac4460d99501100', 'pending', '2025-10-26 07:24:18', '2025-10-26 07:24:18'),
(73, NULL, '254728557276', 633.00, NULL, 'ws_CO_26102025132431457728557276', '2f3d-4f57-95be-470eac4460d99501554', 'pending', '2025-10-26 07:24:32', '2025-10-26 07:24:32'),
(74, NULL, '254721474208', 880.00, NULL, 'ws_CO_26102025132537664721474208', 'e6de-403b-90d3-2bbb08db28d812257035', 'pending', '2025-10-26 07:25:37', '2025-10-26 07:25:37'),
(75, NULL, '254721474208', 880.00, NULL, 'ws_CO_26102025132548080721474208', 'cd10-4f63-a04f-a2d27ac4e9715227825', 'pending', '2025-10-26 07:25:48', '2025-10-26 07:25:48'),
(76, NULL, '254701577165', 1500.00, NULL, 'ws_CO_26102025183900868701577165', 'f0ee-45ad-96cb-029f5b9906369098319', 'pending', '2025-10-26 12:39:01', '2025-10-26 12:39:01'),
(77, NULL, '254743255592', 1200.00, NULL, 'ws_CO_26102025184607289743255592', '43f7-42e8-8670-4e394d8093f910567640', 'pending', '2025-10-26 12:46:08', '2025-10-26 12:46:08'),
(78, NULL, '254733617804', 1200.00, NULL, 'ws_CO_26102025184716306733617804', '3e31-4008-9d7b-21c77ffaba0c2671131', 'pending', '2025-10-26 12:47:16', '2025-10-26 12:47:16'),
(79, NULL, '254733617804', 1200.00, NULL, 'ws_CO_26102025184757908733617804', '00d4-4713-9a35-3203ddb2b1a26030777', 'pending', '2025-10-26 12:47:58', '2025-10-26 12:47:58'),
(80, NULL, '254710503897', 1200.00, NULL, 'ws_CO_26102025184811828710503897', '413f-45b5-ba31-c5ecbad7abe64860430', 'pending', '2025-10-26 12:48:12', '2025-10-26 12:48:12'),
(81, NULL, '254727754615', 20000.00, NULL, 'ws_CO_26102025195114954727754615', 'ab04-43cf-b3b2-4c342619e1422140653', 'success', '2025-10-26 13:51:14', '2025-10-26 13:58:49'),
(82, NULL, '254745678342', 2000.00, NULL, 'ws_CO_27102025080723830745678342', 'ac03-4f12-95fe-08f8b4484fc810181274', 'pending', '2025-10-27 02:07:25', '2025-10-27 02:07:25'),
(83, NULL, '254723567472', 600.00, NULL, 'ws_CO_27102025081151900723567472', '2f3d-4f57-95be-470eac4460d911467193', 'pending', '2025-10-27 02:11:51', '2025-10-27 02:11:51'),
(84, NULL, '254723567472', 600.00, NULL, 'ws_CO_27102025081202592723567472', 'ac03-4f12-95fe-08f8b4484fc810188683', 'pending', '2025-10-27 02:12:03', '2025-10-27 02:12:03'),
(85, NULL, '254756325684', 6000.00, NULL, 'ws_CO_27102025081236934756325684', 'ab04-43cf-b3b2-4c342619e1423035330', 'pending', '2025-10-27 02:12:36', '2025-10-27 02:12:36'),
(86, NULL, '254712674900', 500.00, NULL, 'ws_CO_27102025081305609712674900', 'cd10-4f63-a04f-a2d27ac4e9717189363', 'pending', '2025-10-27 02:13:05', '2025-10-27 02:13:05'),
(87, NULL, '254712674943', 500.00, NULL, 'ws_CO_27102025081326178712674943', '413f-45b5-ba31-c5ecbad7abe65927951', 'pending', '2025-10-27 02:13:26', '2025-10-27 02:13:26'),
(88, NULL, '254743255592', 1200.00, NULL, 'ws_CO_27102025105939506743255592', 'ab04-43cf-b3b2-4c342619e1423305075', 'pending', '2025-10-27 04:59:40', '2025-10-27 04:59:40'),
(89, NULL, '254743255592', 1200.00, NULL, 'ws_CO_27102025144411574743255592', '79d3-4c49-b9e3-1b3942a7b92714628021', 'pending', '2025-10-27 08:44:11', '2025-10-27 08:44:11'),
(90, NULL, '254743255592', 1200.00, NULL, 'ws_CO_27102025144500662743255592', '79d3-4c49-b9e3-1b3942a7b92714629771', 'pending', '2025-10-27 08:45:01', '2025-10-27 08:45:01'),
(91, NULL, '254743255592', 1200.00, NULL, 'ws_CO_27102025144513561743255592', 'f0ee-45ad-96cb-029f5b99063610839397', 'pending', '2025-10-27 08:45:14', '2025-10-27 08:45:14'),
(92, NULL, '254727788657', 1200.00, NULL, 'ws_CO_27102025144550201727788657', '3e31-4008-9d7b-21c77ffaba0c4580074', 'pending', '2025-10-27 08:45:53', '2025-10-27 08:45:53'),
(93, NULL, '254727788657', 1200.00, NULL, 'ws_CO_27102025144636008727788657', 'af52-4627-81a0-b37214dd3f944231700', 'pending', '2025-10-27 08:46:38', '2025-10-27 08:46:38'),
(94, NULL, '254743255592', 600.00, NULL, 'ws_CO_27102025144716218743255592', 'abf6-4bb3-b4a5-c03a71cd44301545833', 'pending', '2025-10-27 08:47:18', '2025-10-27 08:47:18'),
(95, NULL, '254720905241', 3500.00, NULL, 'ws_CO_27102025160716687720905241', 'cd10-4f63-a04f-a2d27ac4e9718121514', 'pending', '2025-10-27 10:07:16', '2025-10-27 10:07:16'),
(96, NULL, '254743255592', 3500.00, NULL, 'ws_CO_27102025160800010743255592', 'e6de-403b-90d3-2bbb08db28d815152335', 'pending', '2025-10-27 10:08:00', '2025-10-27 10:08:00'),
(97, NULL, '254743255592', 600.00, NULL, 'ws_CO_27102025160841814743255592', '4831-4dfb-812e-3ad8a490239037341', 'pending', '2025-10-27 10:08:41', '2025-10-27 10:08:41'),
(98, NULL, '254703095445', 600.00, NULL, 'ws_CO_27102025160951252703095445', '3e31-4008-9d7b-21c77ffaba0c4763358', 'pending', '2025-10-27 10:09:53', '2025-10-27 10:09:53'),
(99, NULL, '254700555728', 500000.00, NULL, 'ws_CO_28102025194625211700555728', '43f7-42e8-8670-4e394d8093f915734784', 'pending', '2025-10-28 13:46:27', '2025-10-28 13:46:27'),
(100, NULL, '254706373252', 100.00, NULL, 'ws_CO_29102025145753057706373252', 'cd10-4f63-a04f-a2d27ac4e97112955150', 'pending', '2025-10-29 08:57:53', '2025-10-29 08:57:53'),
(101, NULL, '254748350003', 300.00, NULL, 'ws_CO_07112025002722700748350003', 'b659-4bdf-b2d0-165b4451fa3a6413245', 'success', '2025-11-06 18:27:22', '2025-11-06 18:32:41'),
(102, NULL, '254748350003', 140.00, NULL, 'ws_CO_07112025175651655748350003', '3e9d-4c2f-b88f-ea2c74913331870007', 'success', '2025-11-07 11:56:53', '2025-11-07 12:02:38'),
(103, NULL, '254111305894', 100.00, NULL, 'ws_CO_08112025182231091111305894', '5fb3-467b-ae19-fcf2fa77be402388822', 'pending', '2025-11-08 12:22:31', '2025-11-08 12:22:31'),
(104, NULL, '254748350003', 250.00, NULL, 'ws_CO_10112025102642695748350003', '5ff0-454d-8fba-dd80a23a0f146623019', 'pending', '2025-11-10 04:26:43', '2025-11-10 04:26:43'),
(105, NULL, '254748350003', 200.00, NULL, 'ws_CO_14112025235048840748350003', '2712-4d8f-8781-95fa5a14b9328749874', 'pending', '2025-11-14 17:50:48', '2025-11-14 17:50:48'),
(106, NULL, '254748352503', 500.00, NULL, 'ws_CO_14112025235124182748352503', 'e52b-4925-a946-043ea9fd12cb4067526', 'pending', '2025-11-14 17:51:24', '2025-11-14 17:51:24'),
(107, NULL, '254701284457', 6332.00, NULL, 'ws_CO_20112025114050765701284457', '2f00-4d6b-a4c2-15162f4b7902177710', 'pending', '2025-11-20 05:40:51', '2025-11-20 05:40:51'),
(108, NULL, '254748350003', 200.00, NULL, 'ws_CO_24112025140310467748350003', 'fbb3-463f-aac4-6f10ac1595ab2348407', 'success', '2025-11-24 08:03:10', '2025-11-24 08:11:56'),
(109, NULL, '254712288478', 6000.00, NULL, 'ws_CO_24112025193159325712288478', 'a3fd-4de8-9b0b-277506f0b6761615555', 'pending', '2025-11-24 13:32:01', '2025-11-24 13:32:01'),
(110, NULL, '254796979815', 260.00, NULL, 'ws_CO_27112025191335834796979815', '0c84-4946-bf85-f19154cd76d84876573', 'success', '2025-11-27 13:13:35', '2025-11-27 13:17:06');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2025-08-05 09:37:05', '2025-08-05 09:37:05'),
(2, 'user', 'web', '2025-08-05 09:37:05', '2025-08-05 09:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
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
('029rSsAP92Mwxc0Xuxu4gvtLRi7Ow2Frb2t3laWA', NULL, '108.165.58.248', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiblRiSU43YXpJakdISW45ZEVKTzFIR2wyVkhwdFp2dDVHdldKMWVuNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vdmF1bHRhYm90LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1769197987),
('50A6t1LAGlodnEOSYphpwBmHtwFRY4xkZaUhDQUY', NULL, '35.193.246.97', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1467.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibmJScEJ1YzRBUnROWFFSb3lVTTdncDR4RWxXaVJPM1YwRzZxUnJuVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vdmF1bHRhYm90LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1769208673),
('5TsS0XsLSuQVaNKDUO4h1Tv8oFRZj9Nofja0rt4c', NULL, '198.244.183.59', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVpXbnlQdmdvbU1TbmNkTG5NMXFleTIyWTNXdTZGcWI5Rk5XVUI2VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vdmF1bHRhYm90LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1769221639),
('77RiDswtKWaYSNS0HThPVevO5OIOmuioRA2hdl9y', NULL, '205.210.31.43', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRHVOcDBpODY3RVNiYVVRVTd2cFozdVo4empadnNLQll0SXhBS05LciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vdmF1bHRhYm90LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1769223578),
('7ISKK8CQLBjOEtuowytJfgMgmJ0jzf3JlzC2jl5k', NULL, '102.209.111.191', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRmVPVzRpVDhHMFlKZGZsWTN4SVR0akRmcDhEejR3MkFDd0V2ZllJYyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cHM6Ly92YXVsdGFib3QuY29tL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwczovL3ZhdWx0YWJvdC5jb20vZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1769202968),
('Ac1KVOptGZhhHPjFtAFrAJslOCfoFhMW7NVcXBEV', NULL, '68.183.20.248', 'Mozilla/5.0 (X11; Linux x86_64; rv:142.0) Gecko/20100101 Firefox/142.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUUdiemd2TTl6aGtjdndVeWpLUVdZVXhYYXNDZ2xXc2RQdGZZQ1pNNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vdmF1bHRhYm90LmNvbS5ub3ZhYWR2ZXJ0aXNpbmd3b3JrLnN0b3JlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1769198710),
('aSyxKOrx2ALBu8F8Qy6pcJIm5ISIL2aNGymqlUR5', 1, '102.204.198.112', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.2 Mobile/15E148 Safari/604.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR1pSdUFSVEtsNWFrQWUyWXNmVm1seVA4TDhIS0o5T1BCOW80a0RmNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vdmF1bHRhYm90LmNvbS9kZXBvc2l0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1769243671),
('gca6nk3dvUWzbXxTgJ0vzc4mgKd8QMEM7XRzfPgl', 2052, '102.209.111.191', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicGNJUmZnZ2NWT2s4a29JWmZLc1B6V3g4azRCMnMyZGtNc0IyTnphbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vdmF1bHRhYm90LmNvbS93aXRoZHJhdyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjIwNTI7fQ==', 1769191936),
('IWBR8k3ZCio3JlTyqtaAefGEGupCWk4shMACBywK', NULL, '108.165.58.248', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ29yNTN6R2xGT2lvWFFsb210dVQzemlidkVYM0JnZ1R2eFdMRFpyNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vdmF1bHRhYm90LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1769197988),
('j9OMjSzTIEZzTdlozaoF3Nnuh4eoM2WikzmiG5Ki', NULL, '13.230.19.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibHlzUEwyS3VkQmh4RmpEZkUzN0NKS3ByZG11bm1sSlFkQzlVc1hlTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd3d3LnZhdWx0YWJvdC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1769229057),
('OXUv6dkRz7rL9Y5yKS3CbApKm7VksaHSUkPBlpXr', NULL, '197.237.25.57', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUm5HRGNVR2FTUmJocEpFdVB4V3htYjZRRHE4aW9MaXNSZDBDWExacSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vdmF1bHRhYm90LmNvbS9hdXRoIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1769245524),
('qKgoTw5kAPcrbd4DhAi9zB65jPGHqoigZnXsrvUw', NULL, '200.123.200.22', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMTNEWXd1Z2FuWVB0RFF6RFF6V1IyS2pnVDV5Z05HS3FjQU14QllnZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vdmF1bHRhYm90LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1769222232),
('XHLG9b2oUN4gsNHFtPA1Z3h8pJivnjtPldUvbLoU', NULL, '102.209.111.191', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMXJ6OHNMY2o4QXNrVTVFUTdHTzVhcklFMkNNMTRwR2ZWY29LeDFyVCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cHM6Ly92YXVsdGFib3QuY29tL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwczovL3ZhdWx0YWJvdC5jb20vbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1769202969);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('deposit','withdrawal','transfer') NOT NULL,
  `method` enum('card','mpesa','crypto','bank') NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `currency` varchar(3) NOT NULL DEFAULT 'USD',
  `status` enum('pending','completed','failed','cancelled') NOT NULL DEFAULT 'pending',
  `reference` varchar(255) DEFAULT NULL,
  `metadata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`metadata`)),
  `processed_at` timestamp NULL DEFAULT NULL,
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
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL DEFAULT 'Kenya',
  `password` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wallet_balance` decimal(12,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `country`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `wallet_balance`) VALUES
(1, 'Ben', 'admin@vaultabot.com', NULL, 'Kenya', '$2y$12$u5l5jc1QL/.0qwjjWqAQ4uB0C6RvXPMHH0o50UAoWqvfQrD7sjQgG', NULL, NULL, '2025-07-31 06:11:54', '2025-12-28 05:54:49', 863.78),
(1679, 'John', 'maverick23@gmail.com', '454643318', 'United States', '$2y$12$.lygwLMOOagY4VYLAi65a.JyGSS6mVgBCMRTj7Bbr99gPtXc0RkSm', NULL, NULL, '2025-12-27 05:49:49', '2026-01-02 06:07:49', 73.75),
(1680, 'William', 'william123@gmail.com', '764453211', 'United States', '$2y$12$Fgss5zGWVg66MnMFP0VdMe0IrHT7RuKu9RJRteH.QDXhv6uJqK9v6', NULL, NULL, '2025-12-28 02:10:56', '2026-01-15 13:57:19', 0.00),
(1681, 'Gideon', 'gideon123@gmail.com', '754346612', 'United States', '$2y$12$2oFm4FqQxQUHmEZc0vw4NOLwnZSSDt56CQ0EhFZTyP8x8VAqJ.YUe', NULL, NULL, '2025-12-28 02:12:55', '2026-01-13 09:10:46', 0.00),
(2039, 'UKASHATU ILIYASU', 'ukashat008@gmail.com', '07046663525', 'United States', '$2y$12$2cMdzcOBUfZ1yksuzR6zre9p6TFQ6ww.C4rmEfrK2kB0gLbznyBse', NULL, NULL, '2026-01-17 11:13:47', '2026-01-17 11:13:47', 0.00),
(2040, 'Ila Ibrahim', 'ibrahimila2@gmail.com', '675399400', 'Nigeria', '$2y$12$0UPllwMRmM7CiVBLsnVeteo0mBCLEOPTND5pWJ0Ca2BBhobTBWA/W', NULL, NULL, '2026-01-17 12:06:43', '2026-01-17 12:06:43', 0.00),
(2041, 'Bello Garba', 'abbello205@gmail.com', '7044805110', 'Nigeria', '$2y$12$NqiQvrTpWO0RltJKl.2idOGeniQ/1UXm1/xRkCCF/RIMtyE3ef4Ve', NULL, NULL, '2026-01-17 13:39:55', '2026-01-17 13:39:55', 0.00),
(2042, 'Ndzoyem sonwa andelson verres', 'cashncarry188@gmail.com', '678946277', 'United States', '$2y$12$eDlGB4dxkc0lDJPg7MQvWec8lvQU7RTP527KTB.EWCdptY/GkYGj6', NULL, NULL, '2026-01-17 14:15:10', '2026-01-17 14:15:10', 0.00),
(2043, 'Francis Kwakye Abedi', 'franedi100@gmail.com', '592305336', 'Ghana', '$2y$12$GvxOb9SomLqVjeD5Dus/PO/.5ba8.zz7g54mqWV.SvpUzN3renIwi', NULL, NULL, '2026-01-17 14:47:33', '2026-01-17 14:47:33', 0.00),
(2044, 'Mike', 'yricchade@gmail.com', '0612345678', 'France', '$2y$12$KgGW7KNGyMQkLex2Cd/zSOmMA4kXLr9V8PKW8AdG2Bdcy2d6W8n4O', NULL, NULL, '2026-01-17 16:35:51', '2026-01-17 16:35:51', 0.00),
(2045, 'Aguinem somtochukwu favor', 'favsom15@gmail.com', '8032205911', 'Nigeria', '$2y$12$58BOLMCM7GPcJIs92ulT0OyQkf4tckVryWeWP0nomywy.a2GDjHpq', NULL, NULL, '2026-01-18 15:47:04', '2026-01-18 15:47:04', 0.00),
(2046, 'Sagir Baba Kamfani', 'sagirbabakamfani@gmail.com', '8133806265', 'Nigeria', '$2y$12$WR7CnbWIL9S.8XJo6nMGKOYiWXpg6S28HLIn4QL9zoBNhjH1aGMdi', NULL, NULL, '2026-01-19 07:23:10', '2026-01-19 07:23:10', 0.00),
(2047, 'habibi', 'maroonvicki@powerscrews.com', '3553535353', 'United States', '$2y$12$tGDT/44OFeNoBMqjAcmOh.aSNBSQgjnyXmIpxauS4b8tJg7Xd5/OO', NULL, NULL, '2026-01-19 12:51:16', '2026-01-19 12:51:16', 0.00),
(2048, 'Charles Ngundi', 'cmngundi123@gmail.com', '254721603476', 'Kenya', '$2y$12$zF2.aAUo3DNs9kCkNLe.peeQAcd0tKyxnIIJ9okI476Y7bylVZNri', NULL, NULL, '2026-01-19 17:41:45', '2026-01-19 17:41:45', 0.00),
(2049, 'Warke', 'gadisabella99@gmail.com', '0953714743', 'United States', '$2y$12$QkxW.eawNFvUtKHm4hgUM.nTQ1NaIblJYKzCyUbEnvj8YHyfWKpsK', NULL, NULL, '2026-01-20 11:57:24', '2026-01-20 11:57:24', 0.00),
(2050, 'Emmanuel', 'eh5913659@gmail.com', '9150290092', 'United States', '$2y$12$ESum32d3lSE4/yRg3YZgvOFMQY4jgpRWIpJx/R2TP6bvoFJdsTSyS', NULL, NULL, '2026-01-21 18:28:50', '2026-01-21 18:28:50', 0.00),
(2051, 'Abraham', 'abrahamjohn@gmail.com', '7223344667', 'United States', '$2y$12$vt/f48x./d4UQh9yGmqxbuq/PT.iETaQNH7ipnqiSLwElsvxDB9Gm', NULL, NULL, '2026-01-22 07:20:09', '2026-01-22 07:20:09', 0.00),
(2052, 'Robert quantino jada clement', 'quintosjada@gmail.com', '780784024', 'United States', '$2y$12$SJt.JcD.GkXaATN2mRaCous.SNBBh.qsaLJLhgVVkBd.bSz4EmuDS', NULL, NULL, '2026-01-22 20:07:48', '2026-01-23 13:46:14', 0.71),
(2053, 'philiips', 'nanananancy80@gmail.com', '205755600', 'India', '$2y$12$BmNqo7xW1qSmeVslWC7PZOU3OdI03PSevMF7Uo8LUKdX8gq.fZ7NG', NULL, NULL, '2026-01-23 05:56:36', '2026-01-23 08:47:00', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `user_cards`
--

CREATE TABLE `user_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `card_expiry` varchar(255) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cvv` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `method` varchar(255) NOT NULL,
  `amount` decimal(16,2) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`details`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `method`, `amount`, `status`, `details`, `created_at`, `updated_at`) VALUES
(8, 1, 'mpesa', 100.00, 'pending', '{\"phone\":\"254704800563\",\"kes_amount\":\"100\"}', '2025-08-02 09:51:38', '2025-08-02 09:51:38'),
(31, 1, 'mpesa', 100.00, 'pending', '{\"phone\":\"254704800563\",\"kes_amount\":\"100\"}', '2025-11-29 13:33:28', '2025-11-29 13:33:28'),
(87, 1679, 'crypto', 100.00, 'pending', '{\"crypto_type\":\"bitcoin\",\"wallet_address\":\"0xd33FF8a860BD15a147c433B57b63D2D652217146\"}', '2025-12-27 06:07:57', '2025-12-27 06:07:57'),
(88, 1, 'crypto', 100.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"ttutyyufgytftyfytfcfcfxddxdx\"}', '2025-12-27 06:09:04', '2025-12-27 06:09:04'),
(89, 1, 'crypto', 100.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"78888890898978768756\"}', '2025-12-27 06:10:45', '2025-12-27 06:10:45'),
(90, 1679, 'crypto', 18.00, 'pending', '{\"crypto_type\":\"bitcoin\",\"wallet_address\":\"0xd33FF8a860BD15a147c433B57b63D2D652217146\"}', '2025-12-27 06:11:15', '2025-12-27 06:11:15'),
(91, 1679, 'crypto', 11.00, 'pending', '{\"crypto_type\":\"bitcoin\",\"wallet_address\":\"0xd33FF8a860BD15a147c433B57b63D2D652217146\"}', '2025-12-27 06:14:22', '2025-12-27 06:14:22'),
(92, 1, 'crypto', 100.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"68uhhhvhvvbbbvbvbhvh\"}', '2025-12-28 04:34:00', '2025-12-28 04:34:00'),
(93, 1680, 'crypto', 15.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"88jnjbhbbbhb\"}', '2025-12-28 05:47:56', '2025-12-28 05:47:56'),
(94, 1680, 'crypto', 15.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"88jnjbhbbbhbiijjnjnjnjn\"}', '2025-12-28 05:48:06', '2025-12-28 05:48:06'),
(95, 1680, 'crypto', 15.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"88jnjbhbbbhbiijjnjnjnjn\"}', '2025-12-28 05:48:20', '2025-12-28 05:48:20'),
(96, 1680, 'crypto', 15.00, 'pending', '{\"crypto_type\":\"bitcoin\",\"wallet_address\":\"7584uhgfbjfbdnvfn\"}', '2025-12-28 05:48:52', '2025-12-28 05:48:52'),
(97, 1680, 'crypto', 15.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"ureufidjfhjdbvhjvh\"}', '2025-12-28 05:52:44', '2025-12-28 05:52:44'),
(98, 1680, 'crypto', 15.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"80998989089980\"}', '2025-12-28 05:54:07', '2025-12-28 05:54:07'),
(99, 1, 'crypto', 18.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"89hjbhbbhvgvgh\"}', '2025-12-28 05:54:49', '2025-12-28 05:54:49'),
(100, 1680, 'crypto', 10.00, 'pending', '{\"crypto_type\":\"bitcoin\",\"wallet_address\":\"0xd33FF8a860BD15a147c433B57b63D2D652217146\"}', '2025-12-28 06:47:28', '2025-12-28 06:47:28'),
(101, 1680, 'crypto', 20.00, 'pending', '{\"crypto_type\":\"bitcoin\",\"wallet_address\":\"0xd33ff8a860bd15a147c433b57b63d2d652217146\"}', '2026-01-02 06:17:07', '2026-01-02 06:17:07'),
(102, 1681, 'crypto', 601.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"THHpqoYNrXAXPhEbdQKsXQoYEeQkHJ3kiJ\"}', '2026-01-02 07:14:25', '2026-01-02 07:14:25'),
(103, 1681, 'crypto', 555.52, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"TEpcr8UgRRm7PzF14dz9i7pNxNWJqEdUrw\"}', '2026-01-02 08:17:59', '2026-01-02 08:17:59'),
(114, 1681, 'crypto', 379.99, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"TEpcr8UgRRm7PzF14dz9i7pNxNWJqEdUrw\"}', '2026-01-07 10:23:49', '2026-01-07 10:23:49'),
(115, 1681, 'crypto', 601.53, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"THHpqoYNrXAXPhEbdQKsXQoYEeQkHJ3kiJ\"}', '2026-01-07 11:26:17', '2026-01-07 11:26:17'),
(127, 1681, 'crypto', 720.12, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"THHpqoYNrXAXPhEbdQKsXQoYEeQkHJ3kiJ\"}', '2026-01-13 07:56:42', '2026-01-13 07:56:42'),
(128, 1681, 'crypto', 704.45, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"TEpcr8UgRRm7PzF14dz9i7pNxNWJqEdUrw\"}', '2026-01-13 09:10:46', '2026-01-13 09:10:46'),
(129, 1680, 'crypto', 20.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"Erfhhuu5t87ajajiagw8uwbwawkkjhbvskskwknwnwnss\"}', '2026-01-15 10:28:08', '2026-01-15 10:28:08'),
(130, 1680, 'crypto', 398.20, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"TXa8ubEysfF2YNTdkZ8A7FAmRV7ojTbe5e\"}', '2026-01-15 11:55:48', '2026-01-15 11:55:48'),
(131, 1680, 'crypto', 551.40, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"THHpqoYNrXAXPhEbdQKsXQoYEeQkHJ3kiJ\"}', '2026-01-15 12:49:05', '2026-01-15 12:49:05'),
(132, 1680, 'crypto', 407.73, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"TEpcr8UgRRm7PzF14dz9i7pNxNWJqEdUrw\"}', '2026-01-15 13:57:19', '2026-01-15 13:57:19'),
(133, 2052, 'crypto', 75.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"TJ4aWvu2GELH6Vwa4b7ajA6jHwR4N49P5N\"}', '2026-01-23 09:04:42', '2026-01-23 09:04:42'),
(134, 2052, 'crypto', 40.00, 'pending', '{\"crypto_type\":\"usdt\",\"wallet_address\":\"TJ4aWvu2GELH6Vwa4b7ajA6jHwR4N49P5N\"}', '2026-01-23 13:44:55', '2026-01-23 13:44:55'),
(135, 2052, 'crypto', 260.00, 'pending', '{\"crypto_type\":\"bitcoin\",\"wallet_address\":\"0xdacf832659c20e5e2d78922e9dfc72942ecd8f53\"}', '2026-01-23 13:46:14', '2026-01-23 13:46:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bots`
--
ALTER TABLE `bots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markets`
--
ALTER TABLE `markets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `mpesa_stk_requests`
--
ALTER TABLE `mpesa_stk_requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mpesa_stk_requests_checkout_request_id_unique` (`checkout_request_id`),
  ADD UNIQUE KEY `mpesa_stk_requests_merchant_request_id_unique` (`merchant_request_id`),
  ADD KEY `mpesa_stk_requests_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_status_index` (`user_id`,`status`),
  ADD KEY `transactions_type_method_index` (`type`,`method`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_cards`
--
ALTER TABLE `user_cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_cards_user_id_foreign` (`user_id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdrawals_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bots`
--
ALTER TABLE `bots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `markets`
--
ALTER TABLE `markets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mpesa_stk_requests`
--
ALTER TABLE `mpesa_stk_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2054;

--
-- AUTO_INCREMENT for table `user_cards`
--
ALTER TABLE `user_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mpesa_stk_requests`
--
ALTER TABLE `mpesa_stk_requests`
  ADD CONSTRAINT `mpesa_stk_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_cards`
--
ALTER TABLE `user_cards`
  ADD CONSTRAINT `user_cards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD CONSTRAINT `withdrawals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
