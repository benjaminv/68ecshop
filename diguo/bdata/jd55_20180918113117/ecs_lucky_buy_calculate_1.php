<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_lucky_buy_calculate`;");
E_C("CREATE TABLE `ecs_lucky_buy_calculate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lucky_buy_id` int(11) NOT NULL DEFAULT '0',
  `act_id` mediumint(8) NOT NULL DEFAULT '0',
  `schedule_id` int(11) NOT NULL DEFAULT '0',
  `code` int(11) NOT NULL,
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `used_time` int(11) unsigned NOT NULL DEFAULT '0',
  `used_time_millisecond` int(3) NOT NULL DEFAULT '0',
  `calculate_number` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `act_id` (`act_id`,`schedule_id`,`code`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_lucky_buy_calculate` values('1','2','8','8880001','10000002','1481774908','1481775176','205','201256205');");
E_D("replace into `ecs_lucky_buy_calculate` values('2','2','8','8880001','10000001','1481774908','1481774934','153','200854153');");
E_D("replace into `ecs_lucky_buy_calculate` values('3','4','10','81080001','10000001','1486951435','1488345663','756','212103756');");
E_D("replace into `ecs_lucky_buy_calculate` values('4','4','10','81080001','10000002','1486951435','1486951686','123','180806123');");
E_D("replace into `ecs_lucky_buy_calculate` values('5','5','10','81080002','10000001','1488346394','1488351804','393','230324393');");
E_D("replace into `ecs_lucky_buy_calculate` values('6','5','10','81080002','10000002','1488346394','1488346449','395','213409395');");

require("../../inc/footer.php");
?>