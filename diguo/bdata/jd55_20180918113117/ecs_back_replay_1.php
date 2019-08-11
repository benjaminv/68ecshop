<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_back_replay`;");
E_C("CREATE TABLE `ecs_back_replay` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `back_id` mediumint(8) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_back_replay` values('1','26','为什么  为什么','1483339609','1');");
E_D("replace into `ecs_back_replay` values('2','29','你是睡','1483519062','0');");
E_D("replace into `ecs_back_replay` values('3','44','111','1489393188','0');");
E_D("replace into `ecs_back_replay` values('4','47','5555','1489399828','1');");

require("../../inc/footer.php");
?>