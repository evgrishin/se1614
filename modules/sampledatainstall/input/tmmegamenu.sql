DROP TABLE IF EXISTS `ps_tmmegamenu`;
CREATE TABLE `ps_tmmegamenu` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_shop` int(11) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `specific_class` varchar(100) DEFAULT NULL,
  `is_mega` int(11) NOT NULL DEFAULT '0',
  `is_simple` int(11) NOT NULL DEFAULT '0',
  `is_custom_url` int(11) NOT NULL DEFAULT '0',
  `url` varchar(100) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `unique_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/* Scheme for table ps_tmmegamenu */
INSERT INTO `ps_tmmegamenu` VALUES
('1','1','1',NULL,'1','0','0','CAT5','1','it_62083697'),
('2','1','2',NULL,'0','1','0','CAT10','1','it_65892815'),
('3','1','3',NULL,'0','0','0','CAT3','1','it_59007732'),
('4','1','4',NULL,'0','0','0','CAT13','1','it_44528484'),
('5','1','5',NULL,'0','0','0','CAT11','1','it_95475535'),
('6','1','6',NULL,'0','0','0','CAT4','1','it_59161379');
