<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_topic`;");
E_C("CREATE TABLE `ecs_topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '''''',
  `intro` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(10) NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT '''''',
  `css` text NOT NULL,
  `topic_img` varchar(255) DEFAULT NULL,
  `title_pic` varchar(255) DEFAULT NULL,
  `base_style` char(6) DEFAULT NULL,
  `htmls` mediumtext,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_topic` values('6','热卖专题活动','','1502006400','1659859200','O:8:\"stdClass\":1:{s:7:\"default\";a:8:{i:0;s:78:\"THUNDEROBOT 雷神ST Plus i7独显10系轻薄便携游戏本笔记本电脑|90\";i:1;s:93:\"酷奇笔记本支架颈椎办公室升降桌面托架增高电脑底座苹果散热架子|89\";i:2;s:83:\"现货送100元话费卡Huawei/华为 畅享7手机 华为畅享7 有PLUS畅想7|86\";i:3;s:83:\"现货送100元话费卡Huawei/华为 畅享7手机 华为畅享7 有PLUS畅想7|85\";i:4;s:61:\"honor/荣耀 荣耀8青春版 全网通高配版4GB+32G版|87\";i:5;s:80:\"现货OnePlus/一加 一加手机5 全网通一加五t 高通835 128g 一加5|84\";i:6;s:84:\"现货速发【新品送耳机电源等】Huawei/华为 畅享7 全网通4G手机|83\";i:7;s:82:\"银河舰队2代 HP/惠普 PAVILION 15 游戏笔记本电脑光影精灵2代Pro|91\";}}','','','data/afficheimg/20170808vvlmfm.jpg','','','','热卖专题活动','热卖专题活动');");

require("../../inc/footer.php");
?>