<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `split_money` decimal(10,2) NOT NULL,
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  `comment_state` tinyint(1) NOT NULL DEFAULT '0',
  `shaidan_state` tinyint(1) NOT NULL DEFAULT '0',
  `package_attr_id` varchar(100) NOT NULL,
  `is_back` tinyint(1) NOT NULL DEFAULT '0',
  `cost_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `promote_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `exclusive` varchar(255) NOT NULL DEFAULT '-1' COMMENT '手机专享价格',
  `send_store_number` smallint(5) NOT NULL,
  `send_store_id` mediumint(8) NOT NULL,
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('30','30','20','ecshop小京东PayPal 支付插件，包括手机版的','CLG000020','0','1','360.00','22.00','0.00','','1','1','','0','0','','0','0','','0','0.00','0.00','-1','0','0');");
E_D("replace into `ecs_order_goods` values('56','56','23','御见 红玫瑰花束生日送女友杭州上海北京全国同城配送鲜花速递','CLG000023','3','1','147.60','123.00','0.00','颜色:白色 \n','1','1','','0','0','1','0','0','','0','0.00','0.00','-1','0','0');");

require("../../inc/footer.php");
?>