DROP TABLE IF EXISTS `ps_tmmegamenu_banner_lang`;
CREATE TABLE `ps_tmmegamenu_banner_lang` (
  `id_item` int(10) unsigned NOT NULL,
  `id_lang` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `public_title` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_item`,`id_lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Scheme for table ps_tmmegamenu_banner_lang */
INSERT INTO `ps_tmmegamenu_banner_lang` VALUES
('1','1','banner1','index.php?id_category=3&controller=category','e9fcd4903c95108bd7f3a1786b06dcb39e5afc27_banner1.jpg',NULL,''),
('1','2','banner1','index.php?id_category=3&controller=category','7128f33b33f735db3c25f429d6b53ac417a0cd0c_banner1.jpg',NULL,''),
('1','3','banner1','index.php?id_category=3&controller=category','48308f59b76d8d724cd79249f3f83253a40dbbe7_banner1.jpg',NULL,''),
('1','4','banner1','index.php?id_category=3&controller=category','c4faf1fab26b9c658cfd6ea19b11e19cebf18bd1_banner1.jpg',NULL,''),
('1','5','banner1','index.php?id_category=3&controller=category','12563de109df3d151e710a43e93cac7024727d01_banner1.jpg',NULL,'');
