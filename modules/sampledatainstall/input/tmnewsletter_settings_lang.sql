DROP TABLE IF EXISTS `ps_tmnewsletter_settings_lang`;
CREATE TABLE `ps_tmnewsletter_settings_lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tmnewsletter` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8;

/* Scheme for table ps_tmnewsletter_settings_lang */
INSERT INTO `ps_tmnewsletter_settings_lang` VALUES
('111','23','1','Newsletter','&lt;p&gt;Subscribe to the Cyan Theme mailing list to receive updates on new arrivals,&lt;br /&gt; special offers and other discount information.&lt;/p&gt;'),
('112','23','2','Newsletter','&lt;p&gt;Subscribe to the Cyan Theme mailing list to receive updates on new arrivals,&lt;br /&gt; special offers and other discount information.&lt;/p&gt;'),
('113','23','3','Newsletter','&lt;p&gt;Subscribe to the Cyan Theme mailing list to receive updates on new arrivals,&lt;br /&gt; special offers and other discount information.&lt;/p&gt;'),
('114','23','4','Newsletter','&lt;p&gt;Subscribe to the Cyan Theme mailing list to receive updates on new arrivals,&lt;br /&gt; special offers and other discount information.&lt;/p&gt;'),
('115','23','5','Newsletter','&lt;p&gt;Subscribe to the Cyan Theme mailing list to receive updates on new arrivals,&lt;br /&gt; special offers and other discount information.&lt;/p&gt;'),
('146','30','1','Newsletter','&lt;p&gt;Subscribe to the Cyan Theme mailing list to receive updates on new arrivals,&lt;br /&gt; special offers and other discount information.&lt;/p&gt;'),
('147','30','2','Subscribe to our newsletter','&lt;p&gt;Subscribe to the Cyan Theme mailing list to receive updates on new arrivals,&lt;br /&gt; special offers and other discount information.&lt;/p&gt;'),
('148','30','3','Subscribe to our newsletter','&lt;p&gt;Subscribe to the Cyan Theme mailing list to receive updates on new arrivals,&lt;br /&gt; special offers and other discount information.&lt;/p&gt;'),
('149','30','4','Subscribe to our newsletter','&lt;p&gt;Subscribe to the Cyan Theme mailing list to receive updates on new arrivals,&lt;br /&gt; special offers and other discount information.&lt;/p&gt;'),
('150','30','5','Subscribe to our newsletter','&lt;p&gt;Subscribe to the Cyan Theme mailing list to receive updates on new arrivals,&lt;br /&gt; special offers and other discount information.&lt;/p&gt;');
