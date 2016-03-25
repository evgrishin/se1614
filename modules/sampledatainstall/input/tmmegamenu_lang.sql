DROP TABLE IF EXISTS `ps_tmmegamenu_lang`;
CREATE TABLE `ps_tmmegamenu_lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_item` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `badge` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

/* Scheme for table ps_tmmegamenu_lang */
INSERT INTO `ps_tmmegamenu_lang` VALUES
('31','4','1','FOOTWEAR',NULL),
('32','4','2','FOOTWEAR',NULL),
('33','4','3','FOOTWEAR',NULL),
('34','4','4','FOOTWEAR',NULL),
('35','4','5','FOOTWEAR',NULL),
('36','5','1','JEWELRY',NULL),
('37','5','2','JEWELRY',NULL),
('38','5','3','JEWELRY',NULL),
('39','5','4','JEWELRY',NULL),
('40','5','5','JEWELRY',NULL),
('41','6','1','MEN’S',NULL),
('42','6','2','MEN’S',NULL),
('43','6','3','MEN’S',NULL),
('44','6','4','MEN’S',NULL),
('45','6','5','MEN’S',NULL),
('91','2','1','VINTAGE',NULL),
('92','2','2','VINTAGE',NULL),
('93','2','3','VINTAGE',NULL),
('94','2','4','VINTAGE',NULL),
('95','2','5','VINTAGE',NULL),
('96','3','1','ACCESSORIES',NULL),
('97','3','2','ACCESSORIES',NULL),
('98','3','3','ACCESSORIES',NULL),
('99','3','4','ACCESSORIES',NULL),
('100','3','5','ACCESSORIES',NULL),
('101','1','1','WOMEN’S','sale'),
('102','1','2','WOMEN’S','sale'),
('103','1','3','WOMEN’S','sale'),
('104','1','4','WOMEN’S','sale'),
('105','1','5','WOMEN’S','sale');
