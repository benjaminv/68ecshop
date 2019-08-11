<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_account_log`;");
E_C("CREATE TABLE `ecs_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL,
  `frozen_money` decimal(10,2) NOT NULL,
  `rank_points` mediumint(9) NOT NULL,
  `pay_points` mediumint(9) NOT NULL,
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=290 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_account_log` values('19','0','0.00','0.00','100','100','1478251129','注册送积分','99');");
E_D("replace into `ecs_account_log` values('20','5','111110.00','0.00','0','0','1478251379','111','2');");
E_D("replace into `ecs_account_log` values('21','5','-384.00','0.00','0','0','1478251467','支付订单 2016110532365','99');");
E_D("replace into `ecs_account_log` values('23','5','0.00','0.00','369','369','1478251503','订单 2016110532365 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('32','0','0.00','0.00','100','100','1479353188','注册送积分','99');");
E_D("replace into `ecs_account_log` values('33','6','100000.00','0.00','0','0','1479609659','ceshi','2');");
E_D("replace into `ecs_account_log` values('34','6','-15.00','0.00','0','0','1479609720','支付订单 2016112046730','99');");
E_D("replace into `ecs_account_log` values('62','7','0.00','0.00','100','100','1479874151','注册送积分','99');");
E_D("replace into `ecs_account_log` values('63','7','11110.00','0.00','0','0','1479874188','111','2');");
E_D("replace into `ecs_account_log` values('64','7','-100.00','0.00','0','0','1479874249','支付订单 2016112314340','99');");
E_D("replace into `ecs_account_log` values('65','7','0.00','0.00','100','100','1479874250','订单 2016112314340 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('66','7','-273.00','0.00','0','0','1479874625','支付订单 2016112332482','99');");
E_D("replace into `ecs_account_log` values('67','7','0.00','0.00','258','258','1479874663','订单 2016112332482 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('68','6','15.00','0.00','0','0','1480039309','由于取消、无效或退货操作，退回支付订单 2016112046730 时使用的预付款','99');");
E_D("replace into `ecs_account_log` values('69','7','0.00','0.00','-258','-258','1480039475','由于退货或未发货操作，退回订单 2016112332482 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('70','7','273.00','0.00','0','0','1480039542','由于取消、无效或退货操作，退回支付订单 2016112332482 时使用的预付款','99');");
E_D("replace into `ecs_account_log` values('78','5','0.00','0.00','-369','-369','1480039679','由于退货或未发货操作，退回订单 2016110532365 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('81','5','384.00','0.00','0','0','1480039714','由于取消、无效或退货操作，退回支付订单 2016110532365 时使用的预付款','99');");
E_D("replace into `ecs_account_log` values('85','6','-16.00','0.00','0','0','1481775028','支付订单 2016121585021','99');");
E_D("replace into `ecs_account_log` values('86','0','0.00','0.00','100','100','1481780513','注册送积分','99');");
E_D("replace into `ecs_account_log` values('87','0','0.00','0.00','100','100','1481781076','注册送积分','99');");
E_D("replace into `ecs_account_log` values('88','0','0.00','0.00','100','100','1481781239','注册送积分','99');");
E_D("replace into `ecs_account_log` values('89','0','0.00','0.00','100','100','1481781298','注册送积分','99');");
E_D("replace into `ecs_account_log` values('90','0','0.00','0.00','100','100','1481781459','注册送积分','99');");
E_D("replace into `ecs_account_log` values('123','6','0.00','0.00','-1','-1','1483338132','由于退货或未发货操作，退回订单 2016121585021 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('133','6','16.00','0.00','0','0','1483338162','由于取消、无效或退货操作，退回支付订单 2016121585021 时使用的预付款','99');");
E_D("replace into `ecs_account_log` values('175','6','-55.50','0.00','0','0','1483605382','支付订单 2017010673829','99');");
E_D("replace into `ecs_account_log` values('225','6','55.50','0.00','0','0','1490168414','拼团失败:2017010673829','99');");
E_D("replace into `ecs_account_log` values('256','0','0.00','0.00','100','100','1493343389','注册送积分','99');");
E_D("replace into `ecs_account_log` values('258','16','0.00','0.00','22','22','1495496595','订单 2017042898512 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('261','17','0.00','0.00','100','100','1495757655','注册送积分','99');");
E_D("replace into `ecs_account_log` values('262','18','0.00','0.00','100','100','1495757753','注册送积分','99');");
E_D("replace into `ecs_account_log` values('288','0','0.00','0.00','100','100','1503448443','注册送积分','99');");
E_D("replace into `ecs_account_log` values('289','21','0.00','0.00','123','123','1520980317','订单 2018031448830 赠送的积分','99');");

require("../../inc/footer.php");
?>