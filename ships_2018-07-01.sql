# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.19)
# Database: ships
# Generation Time: 2018-06-30 22:56:11 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table annual_leaves
# ------------------------------------------------------------

DROP TABLE IF EXISTS `annual_leaves`;

CREATE TABLE `annual_leaves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `id_expiry_date` datetime NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `leaving_date` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table certificate_texts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `certificate_texts`;

CREATE TABLE `certificate_texts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `type` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `certificate_texts` WRITE;
/*!40000 ALTER TABLE `certificate_texts` DISABLE KEYS */;

INSERT INTO `certificate_texts` (`id`, `title`, `content`, `type`)
VALUES
	(1,'Fire Extinguisher1','This certificate issued by \"Offshore Safety\" States that the following Fire Extinguishers that belongs to the Vessel \"Vessel Name\" Have been Inspected and Handled by our Engineers and has passed after it has gone through the following Status',1),
	(2,'Fire Extinguisher2','Fire Extinguisher2',1);

/*!40000 ALTER TABLE `certificate_texts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table clients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `contact_person`, `created`, `modified`)
VALUES
	(1,'Name','Email@email.com','Phone','Conatct Person','2018-02-18 15:32:21','2018-02-18 15:32:21');

/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table countries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(2) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;

INSERT INTO `countries` (`id`, `code`, `name`)
VALUES
	(1,'AF','Afghanistan'),
	(2,'AL','Albania'),
	(3,'DZ','Algeria'),
	(4,'DS','American Samoa'),
	(5,'AD','Andorra'),
	(6,'AO','Angola'),
	(7,'AI','Anguilla'),
	(8,'AQ','Antarctica'),
	(9,'AG','Antigua and Barbuda'),
	(10,'AR','Argentina'),
	(11,'AM','Armenia'),
	(12,'AW','Aruba'),
	(13,'AU','Australia'),
	(14,'AT','Austria'),
	(15,'AZ','Azerbaijan'),
	(16,'BS','Bahamas'),
	(17,'BH','Bahrain'),
	(18,'BD','Bangladesh'),
	(19,'BB','Barbados'),
	(20,'BY','Belarus'),
	(21,'BE','Belgium'),
	(22,'BZ','Belize'),
	(23,'BJ','Benin'),
	(24,'BM','Bermuda'),
	(25,'BT','Bhutan'),
	(26,'BO','Bolivia'),
	(27,'BA','Bosnia and Herzegovina'),
	(28,'BW','Botswana'),
	(29,'BV','Bouvet Island'),
	(30,'BR','Brazil'),
	(31,'IO','British Indian Ocean Territory'),
	(32,'BN','Brunei Darussalam'),
	(33,'BG','Bulgaria'),
	(34,'BF','Burkina Faso'),
	(35,'BI','Burundi'),
	(36,'KH','Cambodia'),
	(37,'CM','Cameroon'),
	(38,'CA','Canada'),
	(39,'CV','Cape Verde'),
	(40,'KY','Cayman Islands'),
	(41,'CF','Central African Republic'),
	(42,'TD','Chad'),
	(43,'CL','Chile'),
	(44,'CN','China'),
	(45,'CX','Christmas Island'),
	(46,'CC','Cocos (Keeling) Islands'),
	(47,'CO','Colombia'),
	(48,'KM','Comoros'),
	(49,'CG','Congo'),
	(50,'CK','Cook Islands'),
	(51,'CR','Costa Rica'),
	(52,'HR','Croatia (Hrvatska)'),
	(53,'CU','Cuba'),
	(54,'CY','Cyprus'),
	(55,'CZ','Czech Republic'),
	(56,'DK','Denmark'),
	(57,'DJ','Djibouti'),
	(58,'DM','Dominica'),
	(59,'DO','Dominican Republic'),
	(60,'TP','East Timor'),
	(61,'EC','Ecuador'),
	(62,'EG','Egypt'),
	(63,'SV','El Salvador'),
	(64,'GQ','Equatorial Guinea'),
	(65,'ER','Eritrea'),
	(66,'EE','Estonia'),
	(67,'ET','Ethiopia'),
	(68,'FK','Falkland Islands (Malvinas)'),
	(69,'FO','Faroe Islands'),
	(70,'FJ','Fiji'),
	(71,'FI','Finland'),
	(72,'FR','France'),
	(73,'FX','France, Metropolitan'),
	(74,'GF','French Guiana'),
	(75,'PF','French Polynesia'),
	(76,'TF','French Southern Territories'),
	(77,'GA','Gabon'),
	(78,'GM','Gambia'),
	(79,'GE','Georgia'),
	(80,'DE','Germany'),
	(81,'GH','Ghana'),
	(82,'GI','Gibraltar'),
	(83,'GK','Guernsey'),
	(84,'GR','Greece'),
	(85,'GL','Greenland'),
	(86,'GD','Grenada'),
	(87,'GP','Guadeloupe'),
	(88,'GU','Guam'),
	(89,'GT','Guatemala'),
	(90,'GN','Guinea'),
	(91,'GW','Guinea-Bissau'),
	(92,'GY','Guyana'),
	(93,'HT','Haiti'),
	(94,'HM','Heard and Mc Donald Islands'),
	(95,'HN','Honduras'),
	(96,'HK','Hong Kong'),
	(97,'HU','Hungary'),
	(98,'IS','Iceland'),
	(99,'IN','India'),
	(100,'IM','Isle of Man'),
	(101,'ID','Indonesia'),
	(102,'IR','Iran (Islamic Republic of)'),
	(103,'IQ','Iraq'),
	(104,'IE','Ireland'),
	(105,'IL','Israel'),
	(106,'IT','Italy'),
	(107,'CI','Ivory Coast'),
	(108,'JE','Jersey'),
	(109,'JM','Jamaica'),
	(110,'JP','Japan'),
	(111,'JO','Jordan'),
	(112,'KZ','Kazakhstan'),
	(113,'KE','Kenya'),
	(114,'KI','Kiribati'),
	(115,'KP','Korea, Democratic People\'s Republic of'),
	(116,'KR','Korea, Republic of'),
	(117,'XK','Kosovo'),
	(118,'KW','Kuwait'),
	(119,'KG','Kyrgyzstan'),
	(120,'LA','Lao People\'s Democratic Republic'),
	(121,'LV','Latvia'),
	(122,'LB','Lebanon'),
	(123,'LS','Lesotho'),
	(124,'LR','Liberia'),
	(125,'LY','Libyan Arab Jamahiriya'),
	(126,'LI','Liechtenstein'),
	(127,'LT','Lithuania'),
	(128,'LU','Luxembourg'),
	(129,'MO','Macau'),
	(130,'MK','Macedonia'),
	(131,'MG','Madagascar'),
	(132,'MW','Malawi'),
	(133,'MY','Malaysia'),
	(134,'MV','Maldives'),
	(135,'ML','Mali'),
	(136,'MT','Malta'),
	(137,'MH','Marshall Islands'),
	(138,'MQ','Martinique'),
	(139,'MR','Mauritania'),
	(140,'MU','Mauritius'),
	(141,'TY','Mayotte'),
	(142,'MX','Mexico'),
	(143,'FM','Micronesia, Federated States of'),
	(144,'MD','Moldova, Republic of'),
	(145,'MC','Monaco'),
	(146,'MN','Mongolia'),
	(147,'ME','Montenegro'),
	(148,'MS','Montserrat'),
	(149,'MA','Morocco'),
	(150,'MZ','Mozambique'),
	(151,'MM','Myanmar'),
	(152,'NA','Namibia'),
	(153,'NR','Nauru'),
	(154,'NP','Nepal'),
	(155,'NL','Netherlands'),
	(156,'AN','Netherlands Antilles'),
	(157,'NC','New Caledonia'),
	(158,'NZ','New Zealand'),
	(159,'NI','Nicaragua'),
	(160,'NE','Niger'),
	(161,'NG','Nigeria'),
	(162,'NU','Niue'),
	(163,'NF','Norfolk Island'),
	(164,'MP','Northern Mariana Islands'),
	(165,'NO','Norway'),
	(166,'OM','Oman'),
	(167,'PK','Pakistan'),
	(168,'PW','Palau'),
	(169,'PS','Palestine'),
	(170,'PA','Panama'),
	(171,'PG','Papua New Guinea'),
	(172,'PY','Paraguay'),
	(173,'PE','Peru'),
	(174,'PH','Philippines'),
	(175,'PN','Pitcairn'),
	(176,'PL','Poland'),
	(177,'PT','Portugal'),
	(178,'PR','Puerto Rico'),
	(179,'QA','Qatar'),
	(180,'RE','Reunion'),
	(181,'RO','Romania'),
	(182,'RU','Russian Federation'),
	(183,'RW','Rwanda'),
	(184,'KN','Saint Kitts and Nevis'),
	(185,'LC','Saint Lucia'),
	(186,'VC','Saint Vincent and the Grenadines'),
	(187,'WS','Samoa'),
	(188,'SM','San Marino'),
	(189,'ST','Sao Tome and Principe'),
	(190,'SA','Saudi Arabia'),
	(191,'SN','Senegal'),
	(192,'RS','Serbia'),
	(193,'SC','Seychelles'),
	(194,'SL','Sierra Leone'),
	(195,'SG','Singapore'),
	(196,'SK','Slovakia'),
	(197,'SI','Slovenia'),
	(198,'SB','Solomon Islands'),
	(199,'SO','Somalia'),
	(200,'ZA','South Africa'),
	(201,'GS','South Georgia South Sandwich Islands'),
	(202,'ES','Spain'),
	(203,'LK','Sri Lanka'),
	(204,'SH','St. Helena'),
	(205,'PM','St. Pierre and Miquelon'),
	(206,'SD','Sudan'),
	(207,'SR','Suriname'),
	(208,'SJ','Svalbard and Jan Mayen Islands'),
	(209,'SZ','Swaziland'),
	(210,'SE','Sweden'),
	(211,'CH','Switzerland'),
	(212,'SY','Syrian Arab Republic'),
	(213,'TW','Taiwan'),
	(214,'TJ','Tajikistan'),
	(215,'TZ','Tanzania, United Republic of'),
	(216,'TH','Thailand'),
	(217,'TG','Togo'),
	(218,'TK','Tokelau'),
	(219,'TO','Tonga'),
	(220,'TT','Trinidad and Tobago'),
	(221,'TN','Tunisia'),
	(222,'TR','Turkey'),
	(223,'TM','Turkmenistan'),
	(224,'TC','Turks and Caicos Islands'),
	(225,'TV','Tuvalu'),
	(226,'UG','Uganda'),
	(227,'UA','Ukraine'),
	(228,'AE','United Arab Emirates'),
	(229,'GB','United Kingdom'),
	(230,'US','United States'),
	(231,'UM','United States minor outlying islands'),
	(232,'UY','Uruguay'),
	(233,'UZ','Uzbekistan'),
	(234,'VU','Vanuatu'),
	(235,'VA','Vatican City State'),
	(236,'VE','Venezuela'),
	(237,'VN','Vietnam'),
	(238,'VG','Virgin Islands (British)'),
	(239,'VI','Virgin Islands (U.S.)'),
	(240,'WF','Wallis and Futuna Islands'),
	(241,'EH','Western Sahara'),
	(242,'YE','Yemen'),
	(243,'ZR','Zaire'),
	(244,'ZM','Zambia'),
	(245,'ZW','Zimbabwe');

/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table delivery_note_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `delivery_note_items`;

CREATE TABLE `delivery_note_items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_note_id` int(11) NOT NULL,
  `item_no` int(11) DEFAULT NULL,
  `description` text,
  `ordered` int(11) DEFAULT NULL,
  `delivered` int(11) DEFAULT NULL,
  `outstanding` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `delivery_note_items` WRITE;
/*!40000 ALTER TABLE `delivery_note_items` DISABLE KEYS */;

INSERT INTO `delivery_note_items` (`id`, `delivery_note_id`, `item_no`, `description`, `ordered`, `delivered`, `outstanding`)
VALUES
	(1,1,33355555,'333355555',3335555,3335555,3335555),
	(2,1,444,'4444',444,44,444);

/*!40000 ALTER TABLE `delivery_note_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table delivery_notes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `delivery_notes`;

CREATE TABLE `delivery_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `quotation_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `dispatch_date` date DEFAULT NULL,
  `delivery_method` varchar(255) DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table eebd_certificate_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `eebd_certificate_items`;

CREATE TABLE `eebd_certificate_items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `eebd_certificate_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `serial_no` varchar(50) DEFAULT NULL,
  `set_serial_no` varchar(50) DEFAULT NULL,
  `capacity` varchar(20) DEFAULT NULL,
  `last_hydro_test` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fire_extinguisher_certificate_id` (`eebd_certificate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table eebd_certificates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `eebd_certificates`;

CREATE TABLE `eebd_certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_number` varchar(255) DEFAULT NULL,
  `vessel_name` varchar(255) NOT NULL,
  `certificate_text` text,
  `inspection_date` date DEFAULT NULL,
  `next_inspection_date` date DEFAULT NULL,
  `next_hydro_test` date DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `eebd_certificates` WRITE;
/*!40000 ALTER TABLE `eebd_certificates` DISABLE KEYS */;

INSERT INTO `eebd_certificates` (`id`, `certificate_number`, `vessel_name`, `certificate_text`, `inspection_date`, `next_inspection_date`, `next_hydro_test`, `created`, `modified`)
VALUES
	(1,'sasdasd','asdasdad','asdasdasdad','2018-05-09','2018-05-25','2018-05-16','2018-05-01 17:56:09','2018-05-01 18:40:02');

/*!40000 ALTER TABLE `eebd_certificates` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table employees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `iqama_number` varchar(255) NOT NULL,
  `iqama_expiry_date` datetime NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;

INSERT INTO `employees` (`id`, `name`, `iqama_number`, `iqama_expiry_date`, `phone_number`, `created`, `modified`)
VALUES
	(1,'Employee','122333','2018-02-05 16:01:00','010000000','2018-02-18 16:01:10','2018-02-18 16:01:10');

/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fire_extinguisher_certificate_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fire_extinguisher_certificate_items`;

CREATE TABLE `fire_extinguisher_certificate_items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fire_extinguisher_certificate_id` int(11) DEFAULT NULL,
  `fire_extinguisher_item_type_id` int(11) unsigned NOT NULL,
  `serial_no` varchar(255) DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `capacity` float DEFAULT NULL,
  `capacity_unit` int(11) DEFAULT NULL,
  `last_hydro_test` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fire_extinguisher_certificate_id` (`fire_extinguisher_certificate_id`),
  KEY `fire_extinguisher_item_type_id` (`fire_extinguisher_item_type_id`),
  CONSTRAINT `fire_extinguisher_certificate_items_ibfk_1` FOREIGN KEY (`fire_extinguisher_certificate_id`) REFERENCES `fire_extinguisher_certificates` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fire_extinguisher_certificate_items_ibfk_2` FOREIGN KEY (`fire_extinguisher_item_type_id`) REFERENCES `fire_extinguisher_item_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `fire_extinguisher_certificate_items` WRITE;
/*!40000 ALTER TABLE `fire_extinguisher_certificate_items` DISABLE KEYS */;

INSERT INTO `fire_extinguisher_certificate_items` (`id`, `fire_extinguisher_certificate_id`, `fire_extinguisher_item_type_id`, `serial_no`, `quantity`, `capacity`, `capacity_unit`, `last_hydro_test`, `status`, `remarks`, `created`, `updated`)
VALUES
	(1,1,1,'121211212',NULL,1212120,1,'2018-06-21','1,2,3','111','2018-06-05 11:22:41',NULL),
	(2,2,1,'',NULL,NULL,1,NULL,'','','2018-06-09 15:38:28',NULL),
	(3,3,1,'',NULL,NULL,1,NULL,'','','2018-06-09 15:39:33',NULL),
	(4,4,1,'',NULL,NULL,1,NULL,'1,3','','2018-06-10 11:59:27',NULL),
	(5,4,1,'',NULL,NULL,1,NULL,'','','2018-06-10 11:59:27',NULL),
	(6,5,1,'',NULL,NULL,1,NULL,'','','2018-06-10 15:21:12',NULL),
	(7,6,1,'sss',NULL,22,1,'2018-06-08','1,3','111','2018-06-21 00:33:25',NULL),
	(9,6,1,'22',NULL,22,3,'2018-06-11','1,2,3,5','sss','2018-06-21 00:42:02',NULL),
	(15,6,1,'233454454',NULL,33,3,'2018-06-20','','dasds','2018-06-21 01:26:08',NULL),
	(16,7,1,'',33,33,2,'2018-04-17','2,5','111','2018-06-21 01:40:35',NULL),
	(17,7,1,'',33,33,2,'2018-06-19','','asdasdasd','2018-06-21 01:42:46',NULL),
	(18,8,1,'121211212',NULL,1212120,1,'2018-06-21','1,2,3','111','2018-06-05 11:22:41',NULL),
	(19,9,1,'121211212',NULL,1212120,1,'2018-06-21','1,2,3','111','2018-06-05 11:22:41',NULL),
	(20,10,1,'121211212',NULL,1212120,1,'2018-06-21','1,2,3','111','2018-06-05 11:22:41',NULL),
	(21,11,1,'121211212',NULL,1212120,1,'2018-06-21','1,2,3','111','2018-06-05 11:22:41',NULL),
	(22,12,1,'121211212',NULL,1212120,1,'2018-06-21','1,2,3','111','2018-06-05 11:22:41',NULL),
	(26,16,1,'121211212',NULL,1212120,1,'2018-06-21','1,2,3','111','2018-06-05 11:22:41',NULL),
	(27,17,1,'121211212',NULL,1212120,1,'2018-06-21','1,2,3','111','2018-06-05 11:22:41',NULL),
	(29,19,1,'121211212',NULL,1212120,1,'2018-06-21','1,2,3','111','2018-06-05 11:22:41',NULL),
	(30,20,1,'121211212',NULL,1212120,1,'2018-06-21','1,2,3','111','2018-06-05 11:22:41',NULL),
	(31,21,1,'121211212',NULL,1212120,1,'2018-06-21','1,2,3','111','2018-06-05 11:22:41',NULL),
	(32,1,1,'wqwqsd',NULL,222,2,'2018-06-27','1,2,3,5','asdasdasd','2018-06-30 23:12:31',NULL),
	(33,1,1,'22',NULL,33,3,'2018-06-22','1','dd','2018-06-30 23:29:55',NULL);

/*!40000 ALTER TABLE `fire_extinguisher_certificate_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fire_extinguisher_certificates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fire_extinguisher_certificates`;

CREATE TABLE `fire_extinguisher_certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_number` varchar(255) DEFAULT NULL,
  `vessel_id` int(11) unsigned NOT NULL,
  `certificate_text_id` int(11) unsigned NOT NULL,
  `inspection_date` date DEFAULT NULL,
  `next_inspection_date` date DEFAULT NULL,
  `certificate_type` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `phase` int(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `certificate_text_id` (`certificate_text_id`),
  KEY `vessel_id` (`vessel_id`),
  CONSTRAINT `fire_extinguisher_certificates_ibfk_1` FOREIGN KEY (`certificate_text_id`) REFERENCES `certificate_texts` (`id`),
  CONSTRAINT `fire_extinguisher_certificates_ibfk_2` FOREIGN KEY (`vessel_id`) REFERENCES `vessels` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `fire_extinguisher_certificates` WRITE;
/*!40000 ALTER TABLE `fire_extinguisher_certificates` DISABLE KEYS */;

INSERT INTO `fire_extinguisher_certificates` (`id`, `certificate_number`, `vessel_id`, `certificate_text_id`, `inspection_date`, `next_inspection_date`, `certificate_type`, `status`, `phase`, `created`, `modified`)
VALUES
	(1,'sss',1,1,'2018-06-23','2019-06-23',1,1,2,'2018-06-05 11:22:41','2018-06-30 23:30:07'),
	(2,'FE-5002',1,1,'2018-06-09','2019-06-09',1,2,4,'2018-06-09 15:38:28','2018-06-23 16:42:17'),
	(3,'FE-5003',1,1,'2018-06-02','2019-06-02',2,1,4,'2018-06-09 15:39:33','2018-06-23 17:10:37'),
	(4,'FE-5004',1,1,'2018-06-10','2019-06-10',1,1,1,'2018-06-10 11:59:27','2018-06-12 22:53:44'),
	(5,'FE-5005',1,1,'2018-06-02','2019-06-02',1,1,2,'2018-06-10 15:21:12','2018-06-10 15:21:53'),
	(6,'FE-5006',1,1,'2018-04-22','2019-04-22',1,2,3,'2018-06-21 00:33:25','2018-06-21 01:39:49'),
	(7,'FE-5007',1,1,'2018-04-22','2019-04-22',2,2,3,'2018-06-21 01:40:35','2018-06-23 15:22:28'),
	(8,'FE-5008',1,1,'2018-06-23','2019-06-23',1,1,4,'2018-06-05 11:22:41','2018-06-23 18:58:14'),
	(9,'FE-5009',1,1,'2018-06-23','2019-06-23',1,1,1,'2018-06-05 11:22:41','2018-06-23 19:14:46'),
	(10,'FE-5010',1,1,'2018-06-23','2019-06-23',1,1,3,'2018-06-05 11:22:41','2018-06-23 19:14:02'),
	(11,'FE-5011',1,1,'2018-06-23','2019-06-23',1,1,1,'2018-06-05 11:22:41','2018-06-23 19:14:46'),
	(12,'FE-5012',1,1,'2018-06-23','2019-06-23',1,1,2,'2018-06-05 11:22:41','2018-06-23 19:13:24'),
	(16,'FE-5013',1,1,'2018-06-23','2019-06-23',1,1,2,'2018-06-05 11:22:41','2018-06-23 19:13:24'),
	(17,'FE-5017',1,1,'2018-06-23','2019-06-23',1,1,2,'2018-06-05 11:22:41','2018-06-23 19:13:24'),
	(19,'FE-5018',1,1,'2018-06-23','2019-06-23',1,1,2,'2018-06-05 11:22:41','2018-06-23 19:13:24'),
	(20,'FE-5020',1,1,'2018-06-23','2019-06-23',1,1,2,'2018-06-05 11:22:41','2018-06-23 19:13:24'),
	(21,'FE-5021',1,1,'2018-06-23','2019-06-23',1,1,2,'2018-06-05 11:22:41','2018-06-23 19:13:24');

/*!40000 ALTER TABLE `fire_extinguisher_certificates` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fire_extinguisher_item_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fire_extinguisher_item_types`;

CREATE TABLE `fire_extinguisher_item_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `fire_extinguisher_item_types` WRITE;
/*!40000 ALTER TABLE `fire_extinguisher_item_types` DISABLE KEYS */;

INSERT INTO `fire_extinguisher_item_types` (`id`, `name`)
VALUES
	(1,'Type 1');

/*!40000 ALTER TABLE `fire_extinguisher_item_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fixed_system_certificates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fixed_system_certificates`;

CREATE TABLE `fixed_system_certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(255) NOT NULL,
  `date_of_issue` datetime NOT NULL,
  `vessel_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table hydro_static_release_unit_certificates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hydro_static_release_unit_certificates`;

CREATE TABLE `hydro_static_release_unit_certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(255) NOT NULL,
  `date_of_issue` datetime NOT NULL,
  `vessel_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table life_boat_certificates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `life_boat_certificates`;

CREATE TABLE `life_boat_certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(255) NOT NULL,
  `date_of_issue` datetime NOT NULL,
  `vessel_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table life_raft_certificates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `life_raft_certificates`;

CREATE TABLE `life_raft_certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(255) NOT NULL,
  `work_status` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `vessel_name` varchar(255) NOT NULL,
  `vessel_flag` int(11) DEFAULT NULL,
  `imo_no` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `inspected_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `manufacturer` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `manufacture_date` date DEFAULT NULL,
  `painter_line` varchar(50) DEFAULT NULL,
  `stowage_height` varchar(50) DEFAULT '',
  `outside_line` varchar(50) DEFAULT NULL,
  `id_container` int(11) DEFAULT NULL,
  `paint_status` int(11) DEFAULT NULL,
  `cylinder_count` int(11) DEFAULT NULL,
  `radar_reflector_type` varchar(50) DEFAULT NULL,
  `radar_reflector_serial_no` varchar(50) DEFAULT NULL,
  `first_cylinder_serial_no` varchar(255) DEFAULT NULL,
  `first_cylinder_co2_charge` varchar(255) DEFAULT NULL,
  `first_cylinder_n2_charge` varchar(255) DEFAULT NULL,
  `firts_cylinder_gross_weight` varchar(255) DEFAULT NULL,
  `first_cylinder_last_hydro_test` date DEFAULT NULL,
  `second_cylinder_serial_no` varchar(255) DEFAULT NULL,
  `second_cylinder_co2_charge` varchar(255) DEFAULT NULL,
  `second_cylinder_n2_charge` varchar(255) DEFAULT NULL,
  `second_cylinder_gross_weight` varchar(255) DEFAULT NULL,
  `second_cylinder_last_hydro_test` date DEFAULT NULL,
  `emergency_pack_type` int(11) DEFAULT NULL,
  `emergency_pack_capacity` int(11) DEFAULT NULL,
  `food_rations_status` int(11) DEFAULT NULL,
  `food_rations_expiry_date` date DEFAULT NULL,
  `water_rations_status` int(11) DEFAULT NULL,
  `water_rations_expiry_date` date DEFAULT NULL,
  `hand_flare_status` int(11) DEFAULT NULL,
  `hand_flare_expiry_date` date DEFAULT NULL,
  `rocket_parachute_status` int(11) DEFAULT NULL,
  `rocket_parachute_expiry_date` date DEFAULT NULL,
  `smoke_signal_status` int(11) DEFAULT NULL,
  `smoke_signal_expiry_date` date DEFAULT NULL,
  `first_aid_kit_status` int(11) DEFAULT NULL,
  `first_aid_kit_expiry_date` date DEFAULT NULL,
  `anti_sea_sickness_medicine_status` int(11) DEFAULT NULL,
  `anti_sea_sickness_medicine_expiry_date` date DEFAULT NULL,
  `flashlight_batteries_medicine_status` int(11) DEFAULT NULL,
  `flashlight_batteries_medicine_qty` int(11) DEFAULT NULL,
  `flashlight_batteries_expiry_date` date DEFAULT NULL,
  `gas_Inflation_test_status` int(11) DEFAULT NULL,
  `gas_Inflation_test_date` date DEFAULT NULL,
  `working_pressure_test_upper_status` int(11) DEFAULT NULL,
  `working_pressure_test_upper_time_on` varchar(50) DEFAULT NULL,
  `working_pressure_test_upper_time_off` varchar(50) DEFAULT NULL,
  `working_pressure_test_upper_starting_temp` int(50) DEFAULT NULL,
  `working_pressure_test_upper_ending_temp` int(50) DEFAULT NULL,
  `working_pressure_test_upper_starting_reading` int(50) DEFAULT NULL,
  `working_pressure_test_upper_ending_reading` int(50) DEFAULT NULL,
  `working_pressure_test_lower_status` int(11) DEFAULT NULL,
  `working_pressure_test_lower_time_on` varchar(50) DEFAULT NULL,
  `working_pressure_test_lower_time_off` varchar(50) DEFAULT NULL,
  `working_pressure_test_lower_starting_temp` int(50) DEFAULT NULL,
  `working_pressure_test_lower_ending_temp` int(50) DEFAULT NULL,
  `working_pressure_test_lower_starting_reading` int(50) DEFAULT NULL,
  `working_pressure_test_lower_ending_reading` int(50) DEFAULT NULL,
  `necessary_additional_pressure_test_upper_status` int(11) DEFAULT NULL,
  `necessary_additional_pressure_test_upper_time_on` varchar(50) DEFAULT NULL,
  `necessary_additional_pressure_test_upper_time_off` varchar(50) DEFAULT NULL,
  `necessary_additional_pressure_test_upper_starting_temp` int(50) DEFAULT NULL,
  `necessary_additional_pressure_test_upper_ending_temp` int(50) DEFAULT NULL,
  `necessary_additional_pressure_test_upper_starting_reading` int(50) DEFAULT NULL,
  `necessary_additional_pressure_test_upper_ending_reading` int(50) DEFAULT NULL,
  `necessary_additional_pressure_test_lower_status` int(11) DEFAULT NULL,
  `necessary_additional_pressure_test_lower_time_on` varchar(50) DEFAULT NULL,
  `necessary_additional_pressure_test_lower_time_off` varchar(50) DEFAULT NULL,
  `necessary_additional_pressure_test_lower_starting_temp` int(50) DEFAULT NULL,
  `necessary_additional_pressure_test_lower_ending_temp` int(50) DEFAULT NULL,
  `necessary_additional_pressure_test_lower_starting_reading` int(50) DEFAULT NULL,
  `necessary_additional_pressure_test_lower_ending_reading` int(50) DEFAULT NULL,
  `floor_seam_test_status` int(11) DEFAULT NULL,
  `floor_seam_test_time_on` varchar(50) DEFAULT NULL,
  `floor_seam_test_time_off` varchar(50) DEFAULT NULL,
  `floor_seam_test_starting_temp` int(50) DEFAULT NULL,
  `floor_seam_test_ending_temp` int(50) DEFAULT NULL,
  `floor_seam_test_starting_reading` int(50) DEFAULT NULL,
  `floor_seam_test_ending_reading` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table medical_oxygen_certificates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `medical_oxygen_certificates`;

CREATE TABLE `medical_oxygen_certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(255) NOT NULL,
  `date_of_issue` datetime NOT NULL,
  `vessel_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table phinxlog
# ------------------------------------------------------------

DROP TABLE IF EXISTS `phinxlog`;

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `phinxlog` WRITE;
/*!40000 ALTER TABLE `phinxlog` DISABLE KEYS */;

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`)
VALUES
	(20171015181145,'CreateFireExtinguisher','2018-02-18 14:05:53','2018-02-18 14:05:53',0),
	(20171015184518,'CreateLifeRaft','2018-02-18 14:05:53','2018-02-18 14:05:53',0),
	(20171015184543,'CreateFixedSystem','2018-02-18 14:05:53','2018-02-18 14:05:53',0),
	(20171015184625,'CreateEebd','2018-02-18 14:05:53','2018-02-18 14:05:53',0),
	(20171015184705,'CreateScapa','2018-02-18 14:05:53','2018-02-18 14:05:54',0),
	(20171015184749,'CreateLifeBoat','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20171015185134,'CreateRescueBoat','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20171015185211,'CreateMedicalOxygen','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20171015185248,'CreateHydroStaticReleaseUnit','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20171015185517,'CreateDeliveryNote','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20171015185546,'CreatePurchaseOrder','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20171015185615,'CreateQuotation','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20171015185639,'CreatePriceList','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20171015185848,'CreateEmployee','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20171015185959,'CreateAnnualLeave','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20180218113826,'CreateClients','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20180218114433,'AlterQuotations','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20180218115034,'CreateCertificationItems','2018-02-18 14:05:54','2018-02-18 14:05:54',0),
	(20180218121908,'AlterCertificationItems','2018-02-18 14:22:11','2018-02-18 14:22:11',0);

/*!40000 ALTER TABLE `phinxlog` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table price_lists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `price_lists`;

CREATE TABLE `price_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(255) NOT NULL,
  `date_of_issue` datetime NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table purchase_order_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `purchase_order_items`;

CREATE TABLE `purchase_order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_order_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,0) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quotation_id` (`purchase_order_id`),
  CONSTRAINT `purchase_order_items_ibfk_1` FOREIGN KEY (`purchase_order_id`) REFERENCES `purchase_orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `purchase_order_items` WRITE;
/*!40000 ALTER TABLE `purchase_order_items` DISABLE KEYS */;

INSERT INTO `purchase_order_items` (`id`, `purchase_order_id`, `description`, `quantity`, `unit_price`, `created`, `modified`)
VALUES
	(1,1,'dddd',1222,333,'2018-04-21 19:12:12','2018-04-21 19:12:12');

/*!40000 ALTER TABLE `purchase_order_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table purchase_orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `purchase_orders`;

CREATE TABLE `purchase_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) NOT NULL,
  `terms_conditions` text,
  `discount` int(11) DEFAULT NULL,
  `notes` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `purchase_orders` WRITE;
/*!40000 ALTER TABLE `purchase_orders` DISABLE KEYS */;

INSERT INTO `purchase_orders` (`id`, `employee_id`, `vendor_id`, `terms_conditions`, `discount`, `notes`, `created`, `modified`)
VALUES
	(1,1,1,'<p>2222</p>',222,'222','2018-04-21 19:12:12','2018-04-21 19:12:12');

/*!40000 ALTER TABLE `purchase_orders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table quotation_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `quotation_items`;

CREATE TABLE `quotation_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quotation_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `taxed` tinyint(1) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,0) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quotation_id` (`quotation_id`),
  CONSTRAINT `quotation_items_ibfk_1` FOREIGN KEY (`quotation_id`) REFERENCES `quotations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `quotation_items` WRITE;
/*!40000 ALTER TABLE `quotation_items` DISABLE KEYS */;

INSERT INTO `quotation_items` (`id`, `quotation_id`, `description`, `taxed`, `quantity`, `unit_price`, `created`, `modified`)
VALUES
	(1,8,'ssssdasdasdasd',0,1,1,'2018-02-18 16:46:09','2018-04-18 23:30:26'),
	(2,8,'dsasdasdasdsssfwdsadf',1,2,2,'2018-02-18 16:46:09','2018-04-18 23:30:12');

/*!40000 ALTER TABLE `quotation_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table quotations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `quotations`;

CREATE TABLE `quotations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `terms_conditions` text,
  `notes` text,
  `discount` float DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `quotations` WRITE;
/*!40000 ALTER TABLE `quotations` DISABLE KEYS */;

INSERT INTO `quotations` (`id`, `client_id`, `employee_id`, `terms_conditions`, `notes`, `discount`, `created`, `modified`)
VALUES
	(2,1,1,NULL,NULL,NULL,'2018-02-18 16:38:47','2018-02-18 16:38:47'),
	(3,1,1,NULL,NULL,NULL,'2018-02-18 16:43:25','2018-02-18 16:43:25'),
	(4,1,1,NULL,NULL,NULL,'2018-02-18 16:44:16','2018-02-18 16:44:16'),
	(5,1,1,NULL,NULL,NULL,'2018-02-18 16:45:11','2018-02-18 16:45:11'),
	(6,1,1,NULL,NULL,NULL,'2018-02-18 16:45:37','2018-02-18 16:45:37'),
	(7,1,1,'<ul><li>Terms</li><li>Conditions</li></ul>','Notes',NULL,'2018-02-18 16:46:09','2018-02-18 20:51:58'),
	(8,1,1,'<p>3333sadasdasd</p>','ssssasasdasdasd',3335540000,'2018-04-18 22:17:43','2018-04-21 20:42:25');

/*!40000 ALTER TABLE `quotations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rescue_boat_certificates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rescue_boat_certificates`;

CREATE TABLE `rescue_boat_certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(255) NOT NULL,
  `date_of_issue` datetime NOT NULL,
  `vessel_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table scapa_certificates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `scapa_certificates`;

CREATE TABLE `scapa_certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(255) NOT NULL,
  `date_of_issue` datetime NOT NULL,
  `vessel_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(255) DEFAULT NULL,
  `setting_value` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `setting_key`, `setting_value`)
VALUES
	(1,'site_name_en','ships');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` char(255) DEFAULT NULL,
  `role` int(11) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`)
VALUES
	(1,'admin','$2y$10$3ybaW2dct76gLZ3dkNBUL.1k555bD.Bg.ZzEACQtO3PgfsE6S/xui',1,NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table vendors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vendors`;

CREATE TABLE `vendors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text,
  `zip_code` varchar(5) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `fax` varchar(12) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `vendors` WRITE;
/*!40000 ALTER TABLE `vendors` DISABLE KEYS */;

INSERT INTO `vendors` (`id`, `name`, `contact_person`, `email`, `address`, `zip_code`, `phone`, `fax`, `created`, `updated`)
VALUES
	(1,'ddd','ddd','ddd@ddd.com','',NULL,'010101000000','','2018-04-21 19:02:07',NULL);

/*!40000 ALTER TABLE `vendors` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table vessels
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vessels`;

CREATE TABLE `vessels` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `imo_number` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `call_sign` varchar(255) DEFAULT NULL,
  `client_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`),
  CONSTRAINT `vessels_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `vessels` WRITE;
/*!40000 ALTER TABLE `vessels` DISABLE KEYS */;

INSERT INTO `vessels` (`id`, `name`, `imo_number`, `country_id`, `call_sign`, `client_id`)
VALUES
	(1,'Vessel 1','11111',62,'1111',1);

/*!40000 ALTER TABLE `vessels` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
