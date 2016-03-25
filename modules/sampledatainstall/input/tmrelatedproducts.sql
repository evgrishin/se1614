DROP TABLE IF EXISTS `ps_tmrelatedproducts`;
CREATE TABLE `ps_tmrelatedproducts` (
  `id_shop` int(10) unsigned NOT NULL,
  `id_master` int(11) NOT NULL,
  `id_slave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Scheme for table ps_tmrelatedproducts */
INSERT INTO `ps_tmrelatedproducts` VALUES
('1','1','7'),
('1','1','19'),
('1','1','6'),
('1','1','14'),
('1','1','5'),
('1','1','13'),
('1','1','8');
