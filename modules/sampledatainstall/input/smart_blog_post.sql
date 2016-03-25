DROP TABLE IF EXISTS `ps_smart_blog_post`;
CREATE TABLE `ps_smart_blog_post` (
  `id_smart_blog_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_author` int(11) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `available` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `viewed` int(11) DEFAULT NULL,
  `is_featured` int(11) DEFAULT NULL,
  `comment_status` int(11) DEFAULT NULL,
  `post_type` varchar(45) DEFAULT NULL,
  `image` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id_smart_blog_post`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/* Scheme for table ps_smart_blog_post */
INSERT INTO `ps_smart_blog_post` VALUES
('2','1','1','0','1','1','2014-10-15 09:46:34','2016-01-13 06:21:51','0','0','1','0',NULL),
('3','1','1','0','1','1','2014-10-15 09:46:34','2016-01-13 06:18:34','25','0','1','0',NULL),
('4','1','1','0','1','1','2014-10-15 09:46:34','2016-01-13 06:14:41','34','0','1','0',NULL);
