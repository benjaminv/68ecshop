<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_back_goods`;");
E_C("CREATE TABLE `ecs_back_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `back_id` mediumint(8) unsigned DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  `back_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL,
  `back_goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `back_goods_number` smallint(5) unsigned NOT NULL,
  `status_back` tinyint(1) NOT NULL DEFAULT '0',
  `status_refund` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `back_id` (`back_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_back_goods` values('41','41','28','0',NULL,'【天猫超市】帮宝适尿片 超薄透气干爽男女婴儿宝宝纸尿裤L164片',NULL,'CLG000028','0','0','','4','0','122.00','1','3','1');");
E_D("replace into `ecs_back_goods` values('42','42','45','0',NULL,'小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0',NULL,'','0','0','','0','0','270.00','1','7','0');");
E_D("replace into `ecs_back_goods` values('43','43','45','0',NULL,'小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0',NULL,'CLG000045','0','0','','4','0','270.00','1','7','0');");
E_D("replace into `ecs_back_goods` values('44','44','45','0',NULL,'小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0',NULL,'CLG000045','0','0','','4','0','270.00','1','7','0');");
E_D("replace into `ecs_back_goods` values('45','45','45','0',NULL,'小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0',NULL,'CLG000045','0','0','','4','0','270.00','1','7','1');");
E_D("replace into `ecs_back_goods` values('46','46','45','0',NULL,'小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0',NULL,'CLG000045','0','0','','4','0','270.00','1','7','1');");
E_D("replace into `ecs_back_goods` values('47','47','27','0',NULL,'Nutrilon诺优能婴儿配方奶粉1段诺贝能一段双罐 荷兰原装进口牛栏',NULL,'','0','0','','0','0','90.00','1','7','1');");
E_D("replace into `ecs_back_goods` values('48','48','28','0',NULL,'【天猫超市】帮宝适尿片 超薄透气干爽男女婴儿宝宝纸尿裤L164片',NULL,'CLG000028','0','0','','4','0','122.00','1','7','0');");
E_D("replace into `ecs_back_goods` values('49','49','45','0',NULL,'小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0',NULL,'CLG000045','0','0','','4','0','300.00','1','7','0');");
E_D("replace into `ecs_back_goods` values('50','50','16','0',NULL,'ecshop,小京东，shopex，ecmall工商银行直连工行支付插件',NULL,'CLG000016','0','0','','4','0','300.00','1','7','0');");
E_D("replace into `ecs_back_goods` values('52','2','23','3',NULL,'御见 红玫瑰花束生日送女友杭州上海北京全国同城配送鲜花速递',NULL,'CLG000023','0','0','颜色:白色 \n','4','0','123.00','1','8','0');");

require("../../inc/footer.php");
?>