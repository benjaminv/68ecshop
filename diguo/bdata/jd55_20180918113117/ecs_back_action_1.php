<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_back_action`;");
E_C("CREATE TABLE `ecs_back_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `back_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `status_back` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status_refund` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `back_id` (`back_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_back_action` values('1','1','','5','0','','1435254819');");
E_D("replace into `ecs_back_action` values('2','1','','1','0','','1435254823');");
E_D("replace into `ecs_back_action` values('3','1','','1','1','12','1435254832');");
E_D("replace into `ecs_back_action` values('4','1','','3','1','','1435254836');");
E_D("replace into `ecs_back_action` values('5','1','','3','1','[售后] ','1435254838');");
E_D("replace into `ecs_back_action` values('6','1','admin','0','0','','1482964424');");
E_D("replace into `ecs_back_action` values('7','13','admin','0','0','','1482987533');");
E_D("replace into `ecs_back_action` values('8','25','admin','0','0','1111','1482993510');");
E_D("replace into `ecs_back_action` values('9','29','admin','0','0','5555','1483506457');");
E_D("replace into `ecs_back_action` values('10','29','admin','1','0','','1483507392');");
E_D("replace into `ecs_back_action` values('11','29','admin','1','1','哈哈','1483519134');");
E_D("replace into `ecs_back_action` values('12','29','admin','3','1','','1483519148');");
E_D("replace into `ecs_back_action` values('13','41','palenggege','5','0','','1488089518');");
E_D("replace into `ecs_back_action` values('14','42','admin','0','0','','1489371541');");
E_D("replace into `ecs_back_action` values('15','42','admin','1','0','','1489371545');");
E_D("replace into `ecs_back_action` values('16','43','admin','0','0','','1489392404');");
E_D("replace into `ecs_back_action` values('17','44','admin','0','0','','1489393199');");
E_D("replace into `ecs_back_action` values('18','45','admin','0','0','','1489394027');");
E_D("replace into `ecs_back_action` values('19','45','admin','4','1','444','1489394172');");
E_D("replace into `ecs_back_action` values('20','46','admin','0','0','','1489399014');");
E_D("replace into `ecs_back_action` values('21','46','admin','4','1','333','1489399045');");
E_D("replace into `ecs_back_action` values('22','47','palenggege','5','0','555','1489399642');");
E_D("replace into `ecs_back_action` values('23','41','palenggege','4','1','555','1489399707');");
E_D("replace into `ecs_back_action` values('24','41','palenggege','3','1','','1489399878');");
E_D("replace into `ecs_back_action` values('25','47','palenggege','1','0','','1489399931');");
E_D("replace into `ecs_back_action` values('26','47','palenggege','1','1','555','1489399959');");
E_D("replace into `ecs_back_action` values('27','47','palenggege','3','1','','1489400032');");
E_D("replace into `ecs_back_action` values('28','1','admin','0','0','','1498784512');");

require("../../inc/footer.php");
?>