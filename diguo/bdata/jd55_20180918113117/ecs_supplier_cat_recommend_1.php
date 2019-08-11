<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_cat_recommend`;");
E_C("CREATE TABLE `ecs_supplier_cat_recommend` (
  `cat_id` smallint(5) NOT NULL,
  `recommend_type` tinyint(1) NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`,`recommend_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_cat_recommend` values('16','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('16','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('16','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('17','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('17','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('17','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('18','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('18','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('18','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('19','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('19','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('19','3','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('20','1','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('20','2','7');");
E_D("replace into `ecs_supplier_cat_recommend` values('20','3','7');");

require("../../inc/footer.php");
?>