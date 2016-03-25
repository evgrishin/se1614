DROP TABLE IF EXISTS `ps_tmmegamenu_items`;
CREATE TABLE `ps_tmmegamenu_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tab` int(11) NOT NULL,
  `row` int(11) NOT NULL DEFAULT '1',
  `col` int(11) NOT NULL DEFAULT '1',
  `width` int(11) NOT NULL,
  `class` varchar(100) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `is_mega` int(11) NOT NULL DEFAULT '0',
  `settings` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

/* Scheme for table ps_tmmegamenu_items */
INSERT INTO `ps_tmmegamenu_items` VALUES
('48','2','1','1','0',NULL,'0','0','CAT19,CAT23,CAT24,CAT23,CAT22,CAT25'),
('53','1','1','1','3',NULL,'0','1','CAT19'),
('54','1','1','2','3',NULL,'0','1','HTML1'),
('55','1','1','3','3',NULL,'0','1','HTML2'),
('56','1','1','4','3',NULL,'0','1','BNR1');
