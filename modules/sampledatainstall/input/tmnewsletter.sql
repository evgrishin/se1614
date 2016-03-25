DROP TABLE IF EXISTS `ps_tmnewsletter`;
CREATE TABLE `ps_tmnewsletter` (
  `id_tmnewsletter` int(11) NOT NULL AUTO_INCREMENT,
  `id_guest` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_shop` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_tmnewsletter`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/* Scheme for table ps_tmnewsletter */
INSERT INTO `ps_tmnewsletter` VALUES
('2','5','0','1','0'),
('3','6','0','1','0'),
('4','0','5','1','0'),
('5','7','0','1','0'),
('6','8','0','1','0'),
('7','9','0','1','0'),
('8','3','0','1','0'),
('9','10','0','1','0'),
('10','2','0','1','0'),
('11','4','0','1','0'),
('12','0','4','1','0'),
('13','15','0','1','0'),
('14','1','0','1','0'),
('15','11','0','1','0'),
('16','16','0','1','0'),
('17','18','0','1','0'),
('18','14','0','1','0'),
('19','0','7','1','0');
