<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_lucky_buy`;");
E_C("CREATE TABLE `ecs_lucky_buy` (
  `lucky_buy_id` int(11) NOT NULL AUTO_INCREMENT,
  `act_id` mediumint(8) NOT NULL DEFAULT '0',
  `schedule_id` int(11) NOT NULL,
  `total` int(11) unsigned NOT NULL,
  `available` int(11) unsigned NOT NULL,
  `lock` int(11) unsigned NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `handl_status` int(1) NOT NULL DEFAULT '0' COMMENT '开奖后的处理状态',
  `start_time` int(10) unsigned NOT NULL,
  `lock_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `sum_of_calculate_number` int(11) NOT NULL DEFAULT '0',
  `lucky_code` int(11) NOT NULL,
  `lucky_user_id` mediumint(8) NOT NULL,
  `lucky_user_name` varchar(256) NOT NULL,
  `lucky_user_head` varchar(256) NOT NULL,
  `lucky_user_order_id` mediumint(8) NOT NULL,
  `lucky_user_order_sn` varchar(20) NOT NULL,
  PRIMARY KEY (`lucky_buy_id`),
  UNIQUE KEY `act_id` (`act_id`,`schedule_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_lucky_buy` values('1','5','8580001','300','300','0','0','0','1481765577','0','0','0','0','0','','','0','');");
E_D("replace into `ecs_lucky_buy` values('2','8','8880001','2','0','0','1','0','1481774908','0','1481775176','402110358','10000001','3','palenggege','','75','2016121510231');");
E_D("replace into `ecs_lucky_buy` values('3','8','8880002','2','2','0','0','0','1486951157','0','0','0','0','0','','','0','');");
E_D("replace into `ecs_lucky_buy` values('4','10','81080001','2','0','0','1','0','1486951435','0','1488345663','392909879','10000002','3','palenggege','','102','2017021327223');");
E_D("replace into `ecs_lucky_buy` values('5','10','81080002','2','0','0','1','0','1488346394','0','1488351804','443733788','10000001','4','u494NTQU2093','','115','2017030131801');");
E_D("replace into `ecs_lucky_buy` values('6','10','81080003','2','2','0','0','0','1488351827','0','0','0','0','0','','','0','');");

require("../../inc/footer.php");
?>