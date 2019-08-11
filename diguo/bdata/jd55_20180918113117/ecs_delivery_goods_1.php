<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('28','24','21','0','','ecshop,小京东，shopex邮政银行直连支付插件','','CLG000021','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('31','27','4','0','','ecshop小京东程序升级php5.4,5.5,5.6以上版本错误修复','','CLG000004','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('30','26','19','0','','通联支付发起拼团活动啦','','CLG000019','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('32','28','45','0','','小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0','','CLG000045','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('33','29','45','0','','小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0','','CLG000045','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('34','30','44','0','','鲜花测试','','CLG000044','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('35','31','45','0','','小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0','怕冷哥哥品牌','CLG000045','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('36','32','27','0','','Nutrilon诺优能婴儿配方奶粉1段诺贝能一段双罐 荷兰原装进口牛栏','','CLG000027','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('37','33','24','4','CLG000024g_p4','99朵蓝色妖姬蓝玫瑰花束鲜花北京上海济南速递杭州重庆鲜花店送花','','CLG000024','1',NULL,'0','1','颜色:蓝色 \n');");
E_D("replace into `ecs_delivery_goods` values('38','34','8','0','','ecshop小京东手机对接阿里大鱼阿里大于注册发货短信通知插件定制','','CLG000008','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('39','35','45','0','','小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0','怕冷哥哥品牌','CLG000045','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('40','36','8','0','','ecshop小京东手机对接阿里大鱼阿里大于注册发货短信通知插件定制','','CLG000008','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('41','37','45','0','','小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0','怕冷哥哥品牌','CLG000045','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('42','38','20','0','','ecshop小京东PayPal 支付插件，包括手机版的','','CLG000020','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('43','39','29','0','','富安娜全棉四件套纯棉1.8m床上被套床品套件床上用品艳冠','','CLG000029','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('44','40','8','0','','ecshop小京东手机对接阿里大鱼阿里大于注册发货短信通知插件定制','','CLG000008','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('45','41','27','0','','Nutrilon诺优能婴儿配方奶粉1段诺贝能一段双罐 荷兰原装进口牛栏','','CLG000027','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('46','42','28','0','','【天猫超市】帮宝适尿片 超薄透气干爽男女婴儿宝宝纸尿裤L164片','','CLG000028','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('47','43','7','0','','ecshop小京东ectouch手机短信验证注册发货短信通知插件','','CLG000007','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('48','44','45','0','','小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0','怕冷哥哥品牌','CLG000045','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('49','45','45','0','','小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0','怕冷哥哥品牌','CLG000045','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('50','46','45','0','','小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0','怕冷哥哥品牌','CLG000045','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('51','47','45','0','','小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0','怕冷哥哥品牌','CLG000045','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('52','48','45','0','','小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0','怕冷哥哥品牌','CLG000045','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('53','49','45','0','','小京东V5.0源码小鲸懂V5.0源码修复完美版可运营商之翼小京东V5.0','怕冷哥哥品牌','CLG000045','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('54','50','23','3','CLG000023g_p3','御见 红玫瑰花束生日送女友杭州上海北京全国同城配送鲜花速递','','CLG000023','1',NULL,'0','1','颜色:白色 \n');");

require("../../inc/footer.php");
?>