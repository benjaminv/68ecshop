<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shaidan_img`;");
E_C("CREATE TABLE `ecs_shaidan_img` (
  `img_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `shaidan_id` mediumint(8) NOT NULL DEFAULT '0',
  `desc` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shaidan_img` values('1','1','1496209972_0.jpg','images/Image/201705/1496209972_0.jpg','images/201705/1496181173465712028.jpg');");
E_D("replace into `ecs_shaidan_img` values('2','1','1496209973_1.jpg','images/Image/201705/1496209973_1.jpg','images/201705/1496181173896049189.jpg');");

require("../../inc/footer.php");
?>