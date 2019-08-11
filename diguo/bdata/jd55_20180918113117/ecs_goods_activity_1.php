<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `ext_act_type` int(1) NOT NULL DEFAULT '1',
  `goods_id` mediumint(8) unsigned NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  `supplier_id` mediumint(8) NOT NULL DEFAULT '0' COMMENT '店铺标识',
  `act_count` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('3','包包开始砍价活动了  ','','8','1','14','0','威戈瑞士军刀双肩包男士背包大容量15.6寸电脑旅行背包中学生书包','1476940320','1511183520','0','a:20:{s:5:\"price\";s:3:\"100\";s:12:\"market_price\";s:3:\"150\";s:12:\"virtual_sold\";N;s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:4:\"5.00\";s:9:\"max_price\";s:2:\"50\";s:11:\"cost_points\";i:0;s:9:\"showlimit\";s:1:\"0\";s:13:\"max_buy_price\";s:2:\"-1\";s:18:\"show_max_buy_price\";s:1:\"0\";s:10:\"join_limit\";s:1:\"1\";s:14:\"cut_time_limit\";s:2:\"48\";s:14:\"buy_time_limit\";s:2:\"96\";s:15:\"cut_times_limit\";s:1:\"0\";s:11:\"need_follow\";s:1:\"1\";s:8:\"fencheng\";s:1:\"0\";s:12:\"orders_limit\";i:1;s:11:\"share_title\";s:0:\"\";s:11:\"share_brief\";s:0:\"\";s:9:\"share_img\";s:0:\"\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('15','测试礼包','这是一个很包的礼包','4','1','0','0','','1502057820','1631081820','0','a:1:{s:13:\"package_price\";s:2:\"11\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('14','THUNDEROBOT 雷神ST Plus i7独显10系轻薄便携游戏本笔记本电脑','1111','5','1','90','0','THUNDEROBOT 雷神ST Plus i7独显10系轻薄便携游戏本笔记本电脑','1496044800','1628668800','0','a:8:{s:10:\"sale_price\";d:0;s:15:\"retainage_start\";i:1658441640;s:13:\"retainage_end\";i:1723068840;s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:11;s:5:\"price\";d:11;}}s:15:\"restrict_amount\";i:111;s:13:\"gift_integral\";i:11;s:7:\"deposit\";d:11;s:13:\"deliver_goods\";s:24:\"付款后10 天内发货\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('6','韩都衣舍2016韩版女装秋装新款时尚印花宽松显瘦长袖T恤EQ6111婋','','10','1','9','0','韩都衣舍2016韩版女装秋装新款时尚印花宽松显瘦长袖T恤EQ6111婋','1476950400','1479542400','4','a:24:{s:12:\"price_ladder\";a:1:{i:0;a:7:{s:6:\"amount\";i:3;s:5:\"price\";d:80;s:8:\"minprice\";d:80;s:8:\"maxprice\";d:80;s:10:\"orderlimit\";i:0;s:12:\"tuanzhangdis\";d:10;s:8:\"fencheng\";d:0;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:10:\"single_buy\";s:1:\"1\";s:11:\"need_people\";i:0;s:9:\"min_price\";d:0;s:9:\"max_price\";d:0;s:16:\"single_buy_price\";d:120;s:12:\"market_price\";d:200;s:8:\"discount\";d:3.5;s:12:\"virtual_sold\";i:1000;s:10:\"time_limit\";d:24;s:10:\"open_limit\";d:0;s:16:\"lucky_extpintuan\";i:0;s:11:\"lucky_limit\";i:10;s:13:\"choose_number\";i:0;s:13:\"notify_header\";N;s:11:\"need_follow\";s:1:\"0\";s:10:\"qrcode_img\";N;s:11:\"share_title\";s:0:\"\";s:11:\"share_brief\";s:0:\"\";s:9:\"share_img\";s:0:\"\";s:11:\"goods_brief\";s:0:\"\";s:7:\"deposit\";d:0;}','0','0');");
E_D("replace into `ecs_goods_activity` values('7','威戈瑞士军刀双肩包男士背包大容量15.6寸电脑旅行背包中学生书包','抓紧预定啦','5','1','14','0','威戈瑞士军刀双肩包男士背包大容量15.6寸电脑旅行背包中学生书包','1498809600','1498811040','3','a:8:{s:10:\"sale_price\";d:0;s:15:\"retainage_start\";i:1498811100;s:13:\"retainage_end\";i:1509850620;s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:100;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:100;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:10;s:13:\"deliver_goods\";s:13:\"2017-11-01 00\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('10','鲜花测试','','12','1','44','0','情人节玫瑰花束生日送女友杭州上海北京广州全国同城配送鲜花速递','1486886400','1518422400','0','a:10:{s:12:\"price_ladder\";N;s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:8:\"allprice\";s:4:\"2.00\";s:8:\"oneprice\";s:4:\"1.00\";s:6:\"number\";i:2;s:11:\"need_follow\";i:1;s:11:\"share_title\";s:0:\"\";s:11:\"share_brief\";s:0:\"\";s:9:\"share_img\";s:0:\"\";}','0','0');");

require("../../inc/footer.php");
?>