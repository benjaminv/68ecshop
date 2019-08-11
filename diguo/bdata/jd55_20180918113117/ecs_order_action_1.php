<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','1','admin','5','5','2','0','','1491088479');");
E_D("replace into `ecs_order_action` values('2','1','admin','1','1','2','1','','1491088480');");
E_D("replace into `ecs_order_action` values('3','1','买家','5','2','2','0','','1491088540');");
E_D("replace into `ecs_order_action` values('4','3','admin','5','5','2','0','','1491689451');");
E_D("replace into `ecs_order_action` values('5','3','admin','1','1','2','1','','1491689451');");
E_D("replace into `ecs_order_action` values('6','3','买家','5','2','2','0','','1491689498');");
E_D("replace into `ecs_order_action` values('7','4','admin','5','5','2','0','','1491690609');");
E_D("replace into `ecs_order_action` values('8','4','admin','1','1','2','1','','1491690609');");
E_D("replace into `ecs_order_action` values('9','4','买家','5','2','2','0','','1491690621');");
E_D("replace into `ecs_order_action` values('10','5','admin','5','5','2','0','','1491690949');");
E_D("replace into `ecs_order_action` values('11','5','admin','1','1','2','1','','1491690950');");
E_D("replace into `ecs_order_action` values('12','5','买家','5','2','2','0','','1491691096');");
E_D("replace into `ecs_order_action` values('13','30','admin','1','0','2','0','','1495496584');");
E_D("replace into `ecs_order_action` values('14','30','admin','5','5','2','0','','1495496594');");
E_D("replace into `ecs_order_action` values('15','30','admin','1','1','2','1','','1495496595');");
E_D("replace into `ecs_order_action` values('16','29','admin','1','0','2','0','','1495498072');");
E_D("replace into `ecs_order_action` values('17','29','admin','5','5','2','0','','1495498078');");
E_D("replace into `ecs_order_action` values('18','29','admin','1','1','2','1','','1495498078');");
E_D("replace into `ecs_order_action` values('19','26','admin','1','0','2','0','','1495498263');");
E_D("replace into `ecs_order_action` values('20','26','admin','5','5','2','0','','1495498273');");
E_D("replace into `ecs_order_action` values('21','26','admin','1','1','2','1','','1495498273');");
E_D("replace into `ecs_order_action` values('22','29','买家','5','2','2','0','','1496108561');");
E_D("replace into `ecs_order_action` values('23','31','admin','5','5','2','0','','1496180608');");
E_D("replace into `ecs_order_action` values('24','31','admin','1','1','2','1','','1496180608');");
E_D("replace into `ecs_order_action` values('25','31','买家','5','2','2','0','','1496180643');");
E_D("replace into `ecs_order_action` values('53','48','admin','5','5','2','0','','1500451437');");
E_D("replace into `ecs_order_action` values('54','48','admin','1','1','2','1','','1500451437');");
E_D("replace into `ecs_order_action` values('55','49','admin','5','5','2','0','','1500453941');");
E_D("replace into `ecs_order_action` values('56','49','admin','1','1','2','1','','1500453941');");
E_D("replace into `ecs_order_action` values('57','50','admin','5','5','2','0','','1500454179');");
E_D("replace into `ecs_order_action` values('58','50','admin','1','1','2','1','','1500454179');");
E_D("replace into `ecs_order_action` values('59','51','admin','5','5','2','0','','1500454471');");
E_D("replace into `ecs_order_action` values('60','51','admin','1','1','2','1','','1500454471');");
E_D("replace into `ecs_order_action` values('61','51','买家','5','2','2','0','','1500454509');");
E_D("replace into `ecs_order_action` values('62','52','admin','5','5','2','0','','1500454561');");
E_D("replace into `ecs_order_action` values('63','52','admin','1','1','2','1','','1500454561');");
E_D("replace into `ecs_order_action` values('64','53','admin','5','5','2','0','','1500456260');");
E_D("replace into `ecs_order_action` values('65','53','admin','1','1','2','1','','1500456260');");
E_D("replace into `ecs_order_action` values('66','53','买家','5','2','2','0','','1500456271');");
E_D("replace into `ecs_order_action` values('67','54','admin','5','5','2','0','','1500456594');");
E_D("replace into `ecs_order_action` values('68','54','admin','1','1','2','1','','1500456594');");
E_D("replace into `ecs_order_action` values('69','55','admin','5','5','2','0','','1500457911');");
E_D("replace into `ecs_order_action` values('70','55','admin','1','1','2','1','','1500457911');");
E_D("replace into `ecs_order_action` values('75','56','admin','1','0','0','0','','1520980210');");
E_D("replace into `ecs_order_action` values('76','56','admin','1','0','2','0','','1520980214');");
E_D("replace into `ecs_order_action` values('77','56','admin','5','5','2','0','','1520980298');");
E_D("replace into `ecs_order_action` values('78','56','admin','1','1','2','1','','1520980317');");
E_D("replace into `ecs_order_action` values('79','56','买家','5','2','2','0','','1520980359');");

require("../../inc/footer.php");
?>