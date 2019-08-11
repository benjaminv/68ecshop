<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2016-10-25','ecshop','功能插件','3');");
E_D("replace into `ecs_keywords` values('2016-10-25','ecshop','支付插件','3');");
E_D("replace into `ecs_keywords` values('2016-10-25','ecshop','模板','1');");
E_D("replace into `ecs_keywords` values('2016-10-25','ecshop','设计服务','1');");
E_D("replace into `ecs_keywords` values('2016-10-25','ecshop','天猫评论区','1');");
E_D("replace into `ecs_keywords` values('2016-11-23','ecshop','充值','1');");
E_D("replace into `ecs_keywords` values('2016-11-23','ecshop','手机充值100','1');");
E_D("replace into `ecs_keywords` values('2017-07-20','ecshop','短信注册','1');");
E_D("replace into `ecs_keywords` values('2017-07-20','ecshop','手机短信','1');");
E_D("replace into `ecs_keywords` values('2017-07-20','ecshop','小京东V5.0源码小鲸懂V5.0源码修复完美版可运营','1');");

require("../../inc/footer.php");
?>