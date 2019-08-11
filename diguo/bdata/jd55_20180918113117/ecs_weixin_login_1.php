<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_login`;");
E_C("CREATE TABLE `ecs_weixin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createtime` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `token` varchar(200) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `value` int(10) unsigned NOT NULL,
  `wxid` varchar(32) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `value` (`value`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_login` values('1','1490333909','0','','0.0.0.0','339095409','',NULL);");
E_D("replace into `ecs_weixin_login` values('2','1492507390','0','','0.0.0.0','73902846','',NULL);");
E_D("replace into `ecs_weixin_login` values('3','1492507963','0','','0.0.0.0','79634123','',NULL);");
E_D("replace into `ecs_weixin_login` values('4','1492938795','0','','0.0.0.0','387952422','','0');");
E_D("replace into `ecs_weixin_login` values('5','1497366637','0','','0.0.0.0','666375093','','3');");
E_D("replace into `ecs_weixin_login` values('6','1500444252','0','','0.0.0.0','442529736','','0');");

require("../../inc/footer.php");
?>