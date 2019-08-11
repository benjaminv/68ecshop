<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users`;");
E_C("CREATE TABLE `ecs_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `aite_id` text NOT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `is_surplus_open` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否开启余额支付密码功能',
  `surplus_password` varchar(32) NOT NULL COMMENT '余额支付密码',
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_points` int(10) unsigned NOT NULL DEFAULT '0',
  `address_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  `last_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `visit_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `user_rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_special` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) DEFAULT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '0',
  `parent_id` mediumint(9) NOT NULL DEFAULT '0',
  `flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `alias` varchar(60) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `is_validated` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `passwd_weixin` varchar(255) DEFAULT NULL,
  `validated` int(11) NOT NULL,
  `credit_line` decimal(10,2) unsigned NOT NULL,
  `passwd_question` varchar(50) DEFAULT NULL,
  `passwd_answer` varchar(255) DEFAULT NULL,
  `is_fenxiao` tinyint(1) NOT NULL,
  `is_ad_user` tinyint(1) NOT NULL DEFAULT '0',
  `real_name` varchar(255) NOT NULL,
  `card` varchar(255) NOT NULL,
  `face_card` varchar(255) NOT NULL,
  `back_card` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `mediaUID` varchar(50) NOT NULL,
  `mediaID` int(4) NOT NULL,
  `froms` char(10) NOT NULL DEFAULT 'pc' COMMENT 'pc:电脑,mobile:手机,app:应用',
  `headimg` varchar(255) NOT NULL,
  `Latitude` varchar(20) DEFAULT NULL,
  `Longitude` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `email` (`email`),
  KEY `parent_id` (`parent_id`),
  KEY `flag` (`flag`),
  KEY `mediaUID` (`mediaUID`,`mediaID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_users` values('21','','ceshi@qq.com','ceshi','1e3d23761e631c9fbeec7b269b9cd920','0','','','','0','1957-01-01','0.00','0.00','123','123','8','1503448443','1520981306','0000-00-00 00:00:00','127.0.0.1','381','0','0','7062','0','0','0','','','','','','18888888888','1',NULL,'0','0.00',NULL,NULL,'0','0','','','','','0','0','0','0','','1','','0','pc','',NULL,NULL);");
E_D("replace into `ecs_users` values('5','','111111@qq.com','haha','822fda9ba8094fb75b85b45b87da4d69','0','','','','0','1956-01-01','111110.00','0.00','0','0','3','1478251129','1478307051','0000-00-00 00:00:00','0.0.0.0','84','0','0','7827','0','0','0','','','','','','13069488130','1',NULL,'0','0.00',NULL,NULL,'0','0','','','','','0','0','0','0','','1','','0','pc','',NULL,NULL);");
E_D("replace into `ecs_users` values('6','','4974014925@qq.com','hehe','dfc8729d155a4892a7972cf6fbc2946d','0','','','','0','1956-01-01','100000.00','0.00','0','0','5','1479353189','1483605417','0000-00-00 00:00:00','0.0.0.0','113','0','0','1277','0','0','0','','','','','','17790282996','0',NULL,'0','0.00',NULL,NULL,'0','0','','','','','0','0','0','0','','0','','0','pc','',NULL,NULL);");
E_D("replace into `ecs_users` values('7','','','u135ZDJV3318','8918f8a4bd78c8a243f1fbbd29df1847','0','','','','0','0000-00-00','11010.00','0.00','200','200','6','1479874151','1479875746','0000-00-00 00:00:00','0.0.0.0','228','0','0','8611','0','0','0','','','','','','13558363318','0',NULL,'1','0.00',NULL,NULL,'0','0','','','','','0','0','0','0','','0','','0','pc','',NULL,NULL);");
E_D("replace into `ecs_users` values('12','','497222401495@qq.com','111222111','96e79218965eb72c92a549dd5a330112','0','','','','0','1956-01-01','0.00','0.00','0','0','0','1481781459','0','0000-00-00 00:00:00','','0','0','0',NULL,'0','0','0','','','','','','','1',NULL,'0','0.00',NULL,NULL,'0','0','','','','','0','0','0','0','','0','','0','pc','',NULL,NULL);");
E_D("replace into `ecs_users` values('16','','1112222111@qq.com','leng','2c60ec3eacaa57ddde1eb9d81b6667f2','0','','','','0','1957-01-01','0.00','0.00','22','22','7','1493343389','1494050380','0000-00-00 00:00:00','0.0.0.0','83','0','0','2671','0','0','0','','','','','','13619856331','1',NULL,'0','0.00',NULL,NULL,'0','0','','','','','0','0','0','0','','0','','0','pc','',NULL,NULL);");
E_D("replace into `ecs_users` values('17','','','u178UUGA5732','9850014c690e9504a3b91fa524468cb9','0','','','','0','0000-00-00','0.00','0.00','100','100','0','1495757655','1495757682','0000-00-00 00:00:00','0.0.0.0','26','0','0','5239','0','0','0','','','','','','17839605732','0',NULL,'1','0.00',NULL,NULL,'0','0','','','','','0','0','0','0','','0','','0','pc','',NULL,NULL);");
E_D("replace into `ecs_users` values('18','','444@QQ.COM','u125ZZDC2592','96e79218965eb72c92a549dd5a330112','0','','','','0','0000-00-00','0.00','0.00','100','100','0','1495757753','1495757758','0000-00-00 00:00:00','0.0.0.0','9','0','0',NULL,'0','17','0','','','','','','','1',NULL,'0','0.00',NULL,NULL,'0','0','','','','','0','0','0','0','','0','','0','pc','',NULL,NULL);");
E_D("replace into `ecs_users` values('19','','','u136ECUS6339','96e79218965eb72c92a549dd5a330112','0','','','','0','0000-00-00','0.00','0.00','0','0','0','1495758086','1495758086','0000-00-00 00:00:00','0.0.0.0','1','0','0',NULL,'0','17','0','','','','','','13619856339','0',NULL,'1','0.00',NULL,NULL,'2','0','','','','','0','0','0','0','','0','','0','mobile','',NULL,NULL);");
E_D("replace into `ecs_users` values('20','','','u136QRZK6337','96e79218965eb72c92a549dd5a330112','0','','','','0','0000-00-00','0.00','0.00','0','0','0','1495758208','1495758208','0000-00-00 00:00:00','0.0.0.0','1','0','0',NULL,'0','17','0','','','','','','13619856337','0',NULL,'1','0.00',NULL,NULL,'2','0','','','','','0','0','0','0','','0','','0','mobile','',NULL,NULL);");

require("../../inc/footer.php");
?>