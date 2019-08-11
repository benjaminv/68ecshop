<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_affiliate_log`;");
E_C("CREATE TABLE `ecs_affiliate_log` (
  `log_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) NOT NULL,
  `time` int(10) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `point` int(10) NOT NULL DEFAULT '0',
  `separate_type` tinyint(1) NOT NULL DEFAULT '0',
  `change_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_affiliate_log` values('1','1894','1471111100','1264','youpin_1264','3.18','0','0','');");
E_D("replace into `ecs_affiliate_log` values('2','14','1478240526','3','palenggege','75.00','15','0','');");
E_D("replace into `ecs_affiliate_log` values('3','15','1478241057','3','palenggege','12.50','3','0','');");
E_D("replace into `ecs_affiliate_log` values('4','16','1478244332','3','palenggege','6.00','0','0','');");
E_D("replace into `ecs_affiliate_log` values('5','17','1478250971','3','palenggege','64.50','13','0','');");
E_D("replace into `ecs_affiliate_log` values('6','18','1478251480','3','palenggege','92.25','19','0','');");
E_D("replace into `ecs_affiliate_log` values('7','22','1478322775','3','palenggege','3.75','1','0','');");
E_D("replace into `ecs_affiliate_log` values('8','1','1491088585','3','palenggege','67.50','14','0','');");
E_D("replace into `ecs_affiliate_log` values('9','2','1491643683','3','palenggege','774.90','155','0','');");
E_D("replace into `ecs_affiliate_log` values('10','3','1491690032','3','palenggege','67.50','14','-1','');");
E_D("replace into `ecs_affiliate_log` values('11','4','1491690621','3','palenggege','4.00','0','0','');");
E_D("replace into `ecs_affiliate_log` values('12','6','1491691202','3','palenggege','4.00','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('13','6','1491691202','4','palenggege33','0.50','0','0','0');");
E_D("replace into `ecs_affiliate_log` values('14','5','1491691547','3','palenggege','67.50','14','0','');");
E_D("replace into `ecs_affiliate_log` values('15','7','1491694614','3','palenggege','67.50','14','0','');");
E_D("replace into `ecs_affiliate_log` values('16','9','1491723881','3','palenggege','4.00','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('17','9','1491723881','4','palenggege33','0.50','0','0','0');");
E_D("replace into `ecs_affiliate_log` values('18','10','1491723935','3','palenggege','67.50','14','0','');");
E_D("replace into `ecs_affiliate_log` values('19','51','1500454510','3','palenggege','4.00','0','0','');");
E_D("replace into `ecs_affiliate_log` values('20','1','1500455597','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('21','1','1500455714','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('22','3','1500455714','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('23','4','1500455714','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('24','5','1500455714','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('25','49','1500455714','3','palenggege','9.75','0','0','');");
E_D("replace into `ecs_affiliate_log` values('26','1','1500456148','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('27','3','1500456148','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('28','4','1500456148','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('29','5','1500456148','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('30','49','1500456148','3','palenggege','9.75','0','0','');");
E_D("replace into `ecs_affiliate_log` values('31','1','1500456158','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('32','3','1500456158','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('33','4','1500456158','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('34','5','1500456158','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('35','49','1500456158','3','palenggege','9.75','0','0','');");
E_D("replace into `ecs_affiliate_log` values('36','53','1500456271','3','palenggege','4.00','0','0','');");
E_D("replace into `ecs_affiliate_log` values('37','1','1500456344','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('38','3','1500456344','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('39','4','1500456344','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('40','5','1500456344','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('41','49','1500456344','3','palenggege','9.75','0','0','');");
E_D("replace into `ecs_affiliate_log` values('42','1','1500456355','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('43','3','1500456355','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('44','4','1500456355','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('45','5','1500456355','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('46','49','1500456355','3','palenggege','9.75','0','0','');");
E_D("replace into `ecs_affiliate_log` values('47','1','1500456360','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('48','3','1500456360','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('49','4','1500456360','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('50','5','1500456360','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('51','49','1500456360','3','palenggege','9.75','0','0','');");
E_D("replace into `ecs_affiliate_log` values('52','1','1500456409','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('53','3','1500456409','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('54','4','1500456409','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('55','5','1500456409','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('56','49','1500456409','3','palenggege','9.75','0','0','');");
E_D("replace into `ecs_affiliate_log` values('57','1','1500456419','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('58','3','1500456419','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('59','4','1500456419','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('60','5','1500456419','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('61','49','1500456419','3','palenggege','9.75','0','0','');");
E_D("replace into `ecs_affiliate_log` values('62','1','1500456768','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('63','3','1500456768','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('64','4','1500456768','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('65','5','1500456768','3','palenggege','14.25','0','0','');");
E_D("replace into `ecs_affiliate_log` values('66','49','1500456768','3','palenggege','9.75','0','0','');");
E_D("replace into `ecs_affiliate_log` values('67','1','1500456881','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('68','3','1500456881','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('69','4','1500456881','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('70','5','1500456881','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('71','49','1500456882','3','palenggege','9.75','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('72','1','1500457796','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('73','3','1500457796','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('74','4','1500457796','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('75','5','1500457796','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('76','48','1500457796','3','palenggege','6.24','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('77','49','1500457796','3','palenggege','9.75','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('78','50','1500457796','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('79','51','1500457796','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('80','52','1500457796','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('81','53','1500457796','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('82','54','1500457796','3','palenggege','14.25','0','0','订单分成');");
E_D("replace into `ecs_affiliate_log` values('83','55','1500457979','3','palenggege','14.25','0','0','订单分成');");

require("../../inc/footer.php");
?>