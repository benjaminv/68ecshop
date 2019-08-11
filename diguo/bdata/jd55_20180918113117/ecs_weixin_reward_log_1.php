<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_reward_log`;");
E_C("CREATE TABLE `ecs_weixin_reward_log` (
  `reward_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `ecuid` int(32) NOT NULL,
  `order_sn` int(40) NOT NULL,
  `reward_money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `reward_meg` varchar(600) DEFAULT NULL,
  `anonymous_reward` int(1) NOT NULL DEFAULT '0',
  `rewardtime` int(10) NOT NULL,
  `rewardtimeymd` varchar(46) NOT NULL,
  `nickname` varchar(32) NOT NULL,
  `headimgurl` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`reward_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>