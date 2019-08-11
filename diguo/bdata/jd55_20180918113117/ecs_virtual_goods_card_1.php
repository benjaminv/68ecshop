<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_virtual_goods_card`;");
E_C("CREATE TABLE `ecs_virtual_goods_card` (
  `card_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `card_sn` varchar(60) NOT NULL DEFAULT '',
  `add_date` int(11) NOT NULL DEFAULT '0',
  `end_date` int(11) NOT NULL DEFAULT '0',
  `is_saled` tinyint(1) NOT NULL DEFAULT '0',
  `order_sn` varchar(20) NOT NULL DEFAULT '',
  `is_verification` int(11) DEFAULT '0',
  `supplier_id` int(11) DEFAULT NULL,
  `buy_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`card_id`),
  KEY `goods_id` (`goods_id`),
  KEY `car_sn` (`card_sn`),
  KEY `is_saled` (`is_saled`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_virtual_goods_card` values('1','26','841001479869342','1479869342','1479888000','1','2016112392210','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('2','26','357701479870622','1479870622','1479888000','1','2016112399431','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('3','26','341301479870729','1479870729','1479888000','1','2016112392278','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('4','26','200301479870861','1479870861','1479888000','1','2016112339901','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('5','26','868101479870882','1479870882','1479888000','1','2016112365105','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('6','26','120301479870927','1479870927','1479888000','1','2016112388086','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('7','26','187801479870944','1479870944','1479888000','1','2016112310414','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('8','26','101001479870984','1479870984','1479888000','1','2016112351125','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('9','26','344801479871033','1479871033','1479888000','1','2016112344537','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('10','26','877701479871076','1479871076','1479888000','1','2016112384077','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('11','26','418701479871160','1479871160','1479888000','1','2016112353294','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('12','26','869801479871192','1479871192','1479888000','1','2016112356550','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('13','26','300301479871200','1479871200','1479888000','1','2016112345888','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('14','26','827301479871224','1479871224','1479888000','1','2016112308615','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('15','26','109101479871233','1479871233','1479888000','1','2016112361695','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('16','26','814201479871318','1479871318','1479888000','1','2016112385256','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('17','26','247501479871326','1479871326','1479888000','1','2016112363086','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('18','26','479301479871356','1479871356','1479888000','1','2016112361929','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('19','26','709301479871395','1479871395','1479888000','1','2016112345278','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('20','26','942001479871442','1479871442','1479888000','1','2016112340495','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('21','26','119101479871495','1479871495','1479888000','1','2016112316659','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('22','26','804901479871507','1479871507','1479888000','1','2016112333796','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('23','26','625501479871657','1479871657','1479888000','1','2016112345368','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('24','26','270501479871680','1479871680','1479888000','1','2016112360948','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('25','26','486601479871716','1479871716','1479888000','1','2016112314102','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('26','26','349601479874249','1479874249','1479888000','1','2016112314340','0','0',NULL);");
E_D("replace into `ecs_virtual_goods_card` values('27','46','266001488270711','1488270711','1488873600','1','2017030194391','0','1',NULL);");

require("../../inc/footer.php");
?>