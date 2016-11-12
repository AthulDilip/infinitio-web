CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(1024) NOT NULL,
  `sports` float DEFAULT NULL,
  `business` float DEFAULT NULL,
  `tech` float DEFAULT NULL,
  `politics` float DEFAULT NULL,
  `entertainment` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


ALTER TABLE  `users` ADD  `fb_user_id` VARCHAR( 1024 ) NULL ;

