DROP TABLE IF EXISTS `ps_smart_blog_comment`;
CREATE TABLE `ps_smart_blog_comment` (
  `id_smart_blog_comment` int(11) NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `website` varchar(128) DEFAULT NULL,
  `content` text,
  `active` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id_smart_blog_comment`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/* Scheme for table ps_smart_blog_comment */
INSERT INTO `ps_smart_blog_comment` VALUES
('2','0','0','4','John Doe','admin@admin.com','#','The guys at your company are amazing! Your service has added a great value to my life. I love that I can jump to your site any time and have access to support 24/7.','1','2014-10-15 10:24:25'),
('3','2','0','4','Anna Lee','admin@admin.com','#','All members of our family use your service and absolutely love it. I can say that your company connects our family in a new, meaningful way.','1','2014-10-15 10:25:56'),
('4','2','0','4','Fred Crue','admin@admin.com','#','Congratulations on an excellent product. Now I have more useful information provided to me. I almost enjoy it.','1','2014-10-15 10:26:57'),
('5','0','0','4','Anny Dawson','admin@admin.com','#','Everything has just been fantastic! Now I have increased revenue, exposure and success. I would recommend this company to anyone.','1','2014-10-15 10:28:33'),
('6','4','0','4','Nick Nickelson','admin@admin.com','#','Your service is often a source of inspiration. It simplifies our lives and makes usually complicated processes easy.','1','2014-10-15 10:29:22');
