<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_msg`;");
E_C("CREATE TABLE `ecs_weixin_msg` (
  `msgid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `fake_id` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `createtime` int(11) NOT NULL,
  `createymd` date NOT NULL,
  PRIMARY KEY (`msgid`),
  KEY `uid` (`uid`),
  KEY `createymd` (`createymd`),
  KEY `fake_id` (`fake_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>