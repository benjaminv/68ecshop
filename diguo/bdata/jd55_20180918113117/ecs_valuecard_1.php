<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_valuecard`;");
E_C("CREATE TABLE `ecs_valuecard` (
  `vc_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `vc_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `vc_sn` bigint(20) unsigned NOT NULL DEFAULT '0',
  `vc_pwd` varchar(20) NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `used_time` int(10) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`vc_id`),
  KEY `vc_sn` (`vc_sn`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_valuecard` values('1','1','18022905','599065','0','0','1478903906');");
E_D("replace into `ecs_valuecard` values('2','1','3701449','676742','0','0','1478903906');");

require("../../inc/footer.php");
?>