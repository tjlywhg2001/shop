-- -----------------------------
-- Think MySQL Data Transfer 
-- 
-- Host     : 127.0.0.1
-- Port     : 
-- Database : tested
-- 
-- Part : #1
-- Date : 2019-05-01 22:19:10
-- -----------------------------

SET FOREIGN_KEY_CHECKS = 0;


-- -----------------------------
-- Table structure for `tp_article`
-- -----------------------------
DROP TABLE IF EXISTS `tp_article`;
CREATE TABLE `tp_article` (
  `ar_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `ar_title` varchar(30) NOT NULL COMMENT '标题',
  `ar_keywords` varchar(100) NOT NULL COMMENT '关键词',
  `ar_description` varchar(150) NOT NULL COMMENT '描述',
  `ar_autor` varchar(10) NOT NULL COMMENT '作者',
  `ar_email` varchar(20) NOT NULL COMMENT '电子邮箱',
  `ar_linkurl` varchar(50) NOT NULL COMMENT '友情链接',
  `ar_thumbnail` varchar(150) NOT NULL COMMENT '缩略图',
  `ar_content` longtext NOT NULL COMMENT '内容',
  `ar_top` tinyint(1) NOT NULL DEFAULT '0' COMMENT '置顶1是0否',
  `ar_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示1是0否',
  `ar_cateid` smallint(6) NOT NULL COMMENT '所属栏目',
  `ar_addtime` int(10) NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`ar_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_article`
-- -----------------------------
INSERT INTO `tp_article` VALUES ('24', '售后流程', '', '', '33333', '11@333.com', 'http://www.baidu.com', '20180501\\f802e9443d371ba1d572d4cf0703f5f9.jpg', '<p>啊是发是发发发发方法</p><p><br/></p><p></p><p><br/></p>', '1', '0', '4', '1525161027');
INSERT INTO `tp_article` VALUES ('27', '货到付款区域', '', '', '', '', '', '', '', '0', '1', '5', '1554638191');
INSERT INTO `tp_article` VALUES ('28', '配送支付智能查询', '', '', '', '', '', '', '', '0', '1', '5', '1554638209');
INSERT INTO `tp_article` VALUES ('25', '购物流程', '', '', '', '', '', '', '<p><img src=\"/static/ueditor/image/20180502/1525262966807233.jpg\" title=\"1525262966807233.jpg\"/></p><p><br/></p><p><br/></p><p><br/></p>', '0', '1', '4', '1525262979');
INSERT INTO `tp_article` VALUES ('29', '支付方式说明', '', '', '', '', '', '', '', '0', '1', '5', '1554638218');
INSERT INTO `tp_article` VALUES ('30', '资金管理', '', '', '', '', '', '', '', '0', '1', '12', '1554638228');
INSERT INTO `tp_article` VALUES ('31', '我的收藏', '', '', '', '', '', '', '', '0', '1', '12', '1554638236');
INSERT INTO `tp_article` VALUES ('26', '订购方式', '订购方式', '订购方式', '订购方式', '', '', '', '<p>是<br/></p>', '0', '1', '4', '1554635475');
INSERT INTO `tp_article` VALUES ('32', '我的订单', '', '', '', '', '', '', '', '0', '1', '12', '1554638244');
INSERT INTO `tp_article` VALUES ('33', '退换货原则', '', '', '', '', '', '', '', '0', '1', '13', '1554638256');
INSERT INTO `tp_article` VALUES ('34', '售后服务保证', '', '', '', '', '', '', '', '0', '1', '13', '1554638265');
INSERT INTO `tp_article` VALUES ('35', '产品质量保证', '', '', '', '', '', '', '', '0', '1', '13', '1554638273');
INSERT INTO `tp_article` VALUES ('36', '网站故障报告', '', '', '', '', '', '', '', '0', '1', '14', '1554638281');
INSERT INTO `tp_article` VALUES ('37', '选机咨询', '', '', '', '', '', '', '', '0', '1', '14', '1554638289');
INSERT INTO `tp_article` VALUES ('38', '投诉与建议', '', '', '', '', '', '', '', '0', '1', '14', '1554638299');
INSERT INTO `tp_article` VALUES ('39', '隐私保护', '', '', '', '', '', '', '<p><a href=\"http://c.com/index/index/index.html\" target=\"_blank\">隐私保护</a><a href=\"http://c.com/index/index/index.html\" target=\"_blank\">隐私保护</a><a href=\"http://c.com/index/index/index.html\" target=\"_blank\">隐私保护</a></p>', '0', '1', '26', '1555837028');
INSERT INTO `tp_article` VALUES ('40', '联系我们', '', '', '', '', '', '', '<p>联系我们联系我们联系我们</p>', '0', '1', '26', '1555837048');
INSERT INTO `tp_article` VALUES ('41', '免责条款', '', '', '', '', '', '', '<p><a href=\"http://c.com/index/index/index.html\" target=\"_blank\">免责条款</a><a href=\"http://c.com/index/index/index.html\" target=\"_blank\">免责条款</a><a href=\"http://c.com/index/index/index.html\" target=\"_blank\">免责条款</a><a href=\"http://c.com/index/index/index.html\" target=\"_blank\">免责条款</a></p>', '0', '1', '26', '1555837063');
INSERT INTO `tp_article` VALUES ('42', '公司简介', '', '', '', '', '', '', '<p>公司简介公司简介公司简介公司简介</p>', '0', '1', '26', '1555837076');
INSERT INTO `tp_article` VALUES ('43', '意见反馈', '', '', '', '', '', '', '<p><a href=\"http://c.com/index/index/index.html\" target=\"_blank\">意见反馈</a><a href=\"http://c.com/index/index/index.html\" target=\"_blank\">意见反馈</a><a href=\"http://c.com/index/index/index.html\" target=\"_blank\">意见反馈</a><a href=\"http://c.com/index/index/index.html\" target=\"_blank\">意见反馈</a></p>', '0', '1', '26', '1555837087');

-- -----------------------------
-- Table structure for `tp_attr`
-- -----------------------------
DROP TABLE IF EXISTS `tp_attr`;
CREATE TABLE `tp_attr` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `attr_name` varchar(50) NOT NULL COMMENT '商品属性名称',
  `attr_type` varchar(100) NOT NULL COMMENT '商品属性类型',
  `attr_values` varchar(500) NOT NULL COMMENT '商品属性值',
  `attr_type_id` smallint(6) NOT NULL COMMENT '商品类型',
  PRIMARY KEY (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_attr`
-- -----------------------------
INSERT INTO `tp_attr` VALUES ('6', '颜色', '1', '黑色,白色,红色,黄色', '1');
INSERT INTO `tp_attr` VALUES ('7', '衣长', '1', '35,36,37,38,39', '3');
INSERT INTO `tp_attr` VALUES ('8', '肩宽', '1', '38,39,40,41,42,43', '3');
INSERT INTO `tp_attr` VALUES ('9', '胸围', '1', '85,90,95,100,105,110,115,120', '3');
INSERT INTO `tp_attr` VALUES ('10', '袖长', '1', '75,80,85,90,95', '3');
INSERT INTO `tp_attr` VALUES ('11', '面料', '1', '全棉,丝绸,塑料', '3');
INSERT INTO `tp_attr` VALUES ('12', '领位', '1', '35,36,37,38,39', '3');
INSERT INTO `tp_attr` VALUES ('14', '性别', '2', '女', '3');
INSERT INTO `tp_attr` VALUES ('15', 'hahaha', '2', '', '1');
INSERT INTO `tp_attr` VALUES ('16', '尺寸', '2', '8,11', '1');
INSERT INTO `tp_attr` VALUES ('17', '硬盘', '1', '512G,256G,128G,64G', '1');

-- -----------------------------
-- Table structure for `tp_brand`
-- -----------------------------
DROP TABLE IF EXISTS `tp_brand`;
CREATE TABLE `tp_brand` (
  `brand_id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL,
  `brand_url` varchar(60) NOT NULL,
  `brand_img` varchar(100) NOT NULL,
  `brand_description` varchar(255) NOT NULL,
  `brand_sort` smallint(6) NOT NULL DEFAULT '50',
  `brand_status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_brand`
-- -----------------------------
INSERT INTO `tp_brand` VALUES ('112', '耐克', 'http://nike', '20180513\\158f7404a0d72a4f7aeb37cdb1a97da2.jpg', '运动服', '50', '1');
INSERT INTO `tp_brand` VALUES ('113', '万斯', 'http://vans.com', '20180513\\b0c681996b508517981c3e8017e02ffb.jpg', '休闲鞋', '50', '1');
INSERT INTO `tp_brand` VALUES ('114', '阿迪达斯', 'http://adidas.com', '20180513\\1954291b8f368499ad8bcc44df064bed.jpg', '夏季运动服', '50', '1');
INSERT INTO `tp_brand` VALUES ('115', 'air jordan', 'http://nike.com', '20180513\\db5165c1c0b99766b7ce616c95c39c20.jpg', '明星鞋', '50', '1');

-- -----------------------------
-- Table structure for `tp_category`
-- -----------------------------
DROP TABLE IF EXISTS `tp_category`;
CREATE TABLE `tp_category` (
  `cate_id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `cate_name` varchar(20) NOT NULL COMMENT '栏目名称',
  `cate_type` tinyint(1) NOT NULL DEFAULT '5' COMMENT '栏目分类1:系统分类2:帮助分类3:网店帮助4:网店信息5:普通分类',
  `cate_keywords` varchar(100) NOT NULL COMMENT '关键词',
  `cate_description` varchar(150) NOT NULL COMMENT '描述',
  `cate_shownav` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示导航栏',
  `cate_sort` smallint(6) NOT NULL DEFAULT '20' COMMENT '排序',
  `cate_pid` smallint(6) NOT NULL DEFAULT '0' COMMENT '上级栏目id',
  `cate_son` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否显示子栏目1.是2.否',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_category`
-- -----------------------------
INSERT INTO `tp_category` VALUES ('1', '系统', '1', '', '', '0', '2', '0', '1');
INSERT INTO `tp_category` VALUES ('2', '网店帮助分类', '2', '', '', '0', '50', '1', '1');
INSERT INTO `tp_category` VALUES ('3', '3G资讯1', '5', '3G资讯', '', '1', '7', '1', '0');
INSERT INTO `tp_category` VALUES ('4', '新手上路', '3', '新手上路', '新手上路', '1', '51', '2', '0');
INSERT INTO `tp_category` VALUES ('5', '配送与支付', '3', '配送与支付', '配送与支付', '1', '52', '2', '0');
INSERT INTO `tp_category` VALUES ('11', '商城公告', '5', '商城公告', '商城公告', '1', '503', '0', '1');
INSERT INTO `tp_category` VALUES ('12', '会员中心', '3', '会员中心', '会员中心', '1', '53', '2', '1');
INSERT INTO `tp_category` VALUES ('13', '服务保证', '3', '服务保证', '服务保证', '1', '54', '2', '1');
INSERT INTO `tp_category` VALUES ('14', '联系我们', '3', '联系我们', '联系我们', '1', '55', '2', '1');
INSERT INTO `tp_category` VALUES ('15', '站内快讯', '5', '站内快讯', '站内快讯', '1', '502', '0', '1');
INSERT INTO `tp_category` VALUES ('16', '3G资讯', '5', '3G资讯', '3G资讯', '1', '501', '0', '1');
INSERT INTO `tp_category` VALUES ('17', '商家入驻流程说明', '5', '商家入驻流程说明', '商家入驻流程说明', '1', '504', '0', '1');
INSERT INTO `tp_category` VALUES ('18', '商家入驻商家说明', '5', '商家入驻商家说明', '商家入驻商家说明', '1', '505', '0', '1');
INSERT INTO `tp_category` VALUES ('19', 'App', '5', 'App   ', 'App   ', '1', '506', '0', '1');
INSERT INTO `tp_category` VALUES ('20', 'ios   ', '5', 'ios   ', 'ios   ', '1', '5062', '19', '1');
INSERT INTO `tp_category` VALUES ('21', 'android', '5', 'android', 'android', '1', '5061', '19', '1');
INSERT INTO `tp_category` VALUES ('22', '发票问题', '5', '发票问题', '发票问题', '1', '507', '0', '1');
INSERT INTO `tp_category` VALUES ('23', '公告', '5', '公告', '公告', '1', '508', '0', '1');
INSERT INTO `tp_category` VALUES ('24', '促销', '5', '促销', '促销', '1', '509', '0', '1');
INSERT INTO `tp_category` VALUES ('25', '微分销', '5', '微分销', '微分销', '1', '510', '0', '1');
INSERT INTO `tp_category` VALUES ('26', '网站信息', '4', '', '', '1', '20', '0', '1');

-- -----------------------------
-- Table structure for `tp_cates`
-- -----------------------------
DROP TABLE IF EXISTS `tp_cates`;
CREATE TABLE `tp_cates` (
  `cates_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cates_name` varchar(100) NOT NULL COMMENT '商品分类',
  `cates_keywords` varchar(100) NOT NULL,
  `cates_description` varchar(200) NOT NULL,
  `cates_img` varchar(100) NOT NULL COMMENT '商品图片',
  `cates_shownav` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否显示1显示0隐藏',
  `cates_sort` int(10) NOT NULL DEFAULT '20' COMMENT '商品分类排序',
  `cates_pid` int(11) NOT NULL COMMENT '商品分类级别',
  PRIMARY KEY (`cates_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_cates`
-- -----------------------------
INSERT INTO `tp_cates` VALUES ('1', '一级nav--1', 'asdfasdf', '', '20180512\\1211c45844f50480f5205d490c585ae7.jpg', '1', '2', '0');
INSERT INTO `tp_cates` VALUES ('2', '二级nav--1-1', 'aa', '', '20180512\\b67526ad6486318334844ba62436588d.jpg', '1', '1', '1');
INSERT INTO `tp_cates` VALUES ('3', '三级nav--1-1-1', 'rr', '', '20180512\\0df7bc8db57dcad866abee552b94b5c4.jpg', '1', '4', '2');
INSERT INTO `tp_cates` VALUES ('4', '二级nav--1-2', 'aa', '', '20180512\\b0acd86ff5600ac35296012e357646ae.jpg', '1', '30', '1');
INSERT INTO `tp_cates` VALUES ('5', '一级nav--2', 's\'s', '', '20180512\\2cbbc5602476b14d0af8214307d9036d.jpg', '1', '6', '0');

-- -----------------------------
-- Table structure for `tp_comm_attr`
-- -----------------------------
DROP TABLE IF EXISTS `tp_comm_attr`;
CREATE TABLE `tp_comm_attr` (
  `commattr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `commattr_attrid` mediumint(9) NOT NULL COMMENT '属性id',
  `commattr_value` varchar(60) NOT NULL COMMENT '属性值',
  `commattr_attrprice` decimal(10,2) NOT NULL COMMENT '属性价格',
  `commattr_commid` mediumint(9) NOT NULL COMMENT '所属商品',
  PRIMARY KEY (`commattr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=188 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_comm_attr`
-- -----------------------------
INSERT INTO `tp_comm_attr` VALUES ('136', '16', '8', '0.00', '135');
INSERT INTO `tp_comm_attr` VALUES ('135', '6', '红色', '3.00', '135');
INSERT INTO `tp_comm_attr` VALUES ('134', '6', '黄色', '2.00', '135');
INSERT INTO `tp_comm_attr` VALUES ('133', '6', '黑色', '1.00', '135');
INSERT INTO `tp_comm_attr` VALUES ('123', '15', '11', '0.00', '132');
INSERT INTO `tp_comm_attr` VALUES ('130', '6', '白色', '0.00', '134');
INSERT INTO `tp_comm_attr` VALUES ('129', '6', '红色', '0.00', '134');
INSERT INTO `tp_comm_attr` VALUES ('128', '6', '黑色', '0.00', '134');
INSERT INTO `tp_comm_attr` VALUES ('131', '17', '256G', '0.00', '134');
INSERT INTO `tp_comm_attr` VALUES ('132', '17', '512G', '0.00', '134');
INSERT INTO `tp_comm_attr` VALUES ('137', '17', '512G', '4.00', '135');
INSERT INTO `tp_comm_attr` VALUES ('138', '17', '128G', '5.00', '135');
INSERT INTO `tp_comm_attr` VALUES ('139', '6', '黑色', '1.00', '141');
INSERT INTO `tp_comm_attr` VALUES ('140', '15', '2', '0.00', '141');
INSERT INTO `tp_comm_attr` VALUES ('141', '16', '11', '0.00', '141');
INSERT INTO `tp_comm_attr` VALUES ('142', '17', '512G', '33.00', '141');
INSERT INTO `tp_comm_attr` VALUES ('143', '6', '黑色', '1.00', '143');
INSERT INTO `tp_comm_attr` VALUES ('144', '15', '11', '0.00', '143');
INSERT INTO `tp_comm_attr` VALUES ('145', '16', '8', '0.00', '143');
INSERT INTO `tp_comm_attr` VALUES ('146', '17', '512G', '2.00', '143');
INSERT INTO `tp_comm_attr` VALUES ('147', '6', '黑色', '1.00', '158');
INSERT INTO `tp_comm_attr` VALUES ('148', '15', '2', '0.00', '158');
INSERT INTO `tp_comm_attr` VALUES ('149', '16', '8', '0.00', '158');
INSERT INTO `tp_comm_attr` VALUES ('150', '17', '256G', '3.00', '158');
INSERT INTO `tp_comm_attr` VALUES ('151', '6', '黑色', '222.00', '159');
INSERT INTO `tp_comm_attr` VALUES ('152', '6', '白色', '333.00', '159');
INSERT INTO `tp_comm_attr` VALUES ('153', '6', '红色', '444.00', '159');
INSERT INTO `tp_comm_attr` VALUES ('154', '15', 'aaaa', '0.00', '159');
INSERT INTO `tp_comm_attr` VALUES ('155', '16', '8', '0.00', '159');
INSERT INTO `tp_comm_attr` VALUES ('156', '17', '512G', '33.00', '159');
INSERT INTO `tp_comm_attr` VALUES ('157', '17', '256G', '44.00', '159');
INSERT INTO `tp_comm_attr` VALUES ('158', '6', '黑色', '1211.00', '160');
INSERT INTO `tp_comm_attr` VALUES ('159', '6', '黑色', '55.00', '161');
INSERT INTO `tp_comm_attr` VALUES ('160', '6', '白色', '5555.00', '161');
INSERT INTO `tp_comm_attr` VALUES ('161', '15', '9', '0.00', '161');
INSERT INTO `tp_comm_attr` VALUES ('162', '16', '8', '0.00', '161');
INSERT INTO `tp_comm_attr` VALUES ('165', '6', '黑色', '1.00', '162');
INSERT INTO `tp_comm_attr` VALUES ('166', '6', '白色', '2.00', '162');
INSERT INTO `tp_comm_attr` VALUES ('167', '15', '3', '0.00', '162');
INSERT INTO `tp_comm_attr` VALUES ('168', '16', '8', '0.00', '162');
INSERT INTO `tp_comm_attr` VALUES ('169', '17', '512G', '1.00', '162');
INSERT INTO `tp_comm_attr` VALUES ('170', '17', '256G', '2.00', '162');
INSERT INTO `tp_comm_attr` VALUES ('171', '6', '黑色', '111.00', '163');
INSERT INTO `tp_comm_attr` VALUES ('172', '15', '4444444', '0.00', '163');
INSERT INTO `tp_comm_attr` VALUES ('173', '16', '8', '0.00', '163');
INSERT INTO `tp_comm_attr` VALUES ('174', '17', '256G', '4444.00', '163');
INSERT INTO `tp_comm_attr` VALUES ('175', '6', '黑色', '0.00', '164');
INSERT INTO `tp_comm_attr` VALUES ('176', '15', 'asdf', '0.00', '164');
INSERT INTO `tp_comm_attr` VALUES ('177', '16', '8', '0.00', '164');
INSERT INTO `tp_comm_attr` VALUES ('184', '6', '红色', '333.00', '163');
INSERT INTO `tp_comm_attr` VALUES ('180', '6', '白色', '555.00', '163');
INSERT INTO `tp_comm_attr` VALUES ('185', '17', '128G', '5555.00', '163');
INSERT INTO `tp_comm_attr` VALUES ('186', '16', '11', '0.00', '163');

-- -----------------------------
-- Table structure for `tp_comm_photo`
-- -----------------------------
DROP TABLE IF EXISTS `tp_comm_photo`;
CREATE TABLE `tp_comm_photo` (
  `comm_photo_id` mediumint(5) unsigned NOT NULL AUTO_INCREMENT,
  `comm_commodity_id` mediumint(6) NOT NULL COMMENT '所属商品',
  `comm_photo_og` varchar(100) NOT NULL,
  `comm_photo_sm` varchar(100) NOT NULL COMMENT '小图',
  `comm_photo_mid` varchar(100) NOT NULL COMMENT '中图',
  `comm_photo_big` varchar(100) NOT NULL COMMENT '大图',
  PRIMARY KEY (`comm_photo_id`),
  KEY `comm_commodity_id` (`comm_commodity_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_comm_photo`
-- -----------------------------
INSERT INTO `tp_comm_photo` VALUES ('58', '135', '20190317\\219ad061528b28e547d41eb47ccaeb6f.jpg', '20190317\\sm_219ad061528b28e547d41eb47ccaeb6f.jpg', '20190317\\mid_219ad061528b28e547d41eb47ccaeb6f.jpg', '20190317\\big_219ad061528b28e547d41eb47ccaeb6f.jpg');
INSERT INTO `tp_comm_photo` VALUES ('59', '135', '20190317\\fb3fe54a241671dd9fdd533bb4202689.jpg', '20190317\\sm_fb3fe54a241671dd9fdd533bb4202689.jpg', '20190317\\mid_fb3fe54a241671dd9fdd533bb4202689.jpg', '20190317\\big_fb3fe54a241671dd9fdd533bb4202689.jpg');

-- -----------------------------
-- Table structure for `tp_commodity`
-- -----------------------------
DROP TABLE IF EXISTS `tp_commodity`;
CREATE TABLE `tp_commodity` (
  `commodity_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `commodity_name` varchar(50) NOT NULL COMMENT '商品名称',
  `commodity_code` char(16) NOT NULL COMMENT '商品编号',
  `commodity_ogthumb` varchar(100) NOT NULL COMMENT '原图',
  `commodity_smthumb` varchar(100) NOT NULL COMMENT '小缩略图',
  `commodity_midthumb` varchar(100) NOT NULL COMMENT '中缩略图',
  `commodity_bigthumb` varchar(100) NOT NULL COMMENT '大缩略图',
  `commodity_market_price` decimal(10,2) NOT NULL COMMENT '市场价',
  `commodity_shop_price` decimal(10,2) NOT NULL COMMENT '本店价格',
  `commodity_on_sale` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否上架：1上架2下架',
  `cates_id` mediumint(9) NOT NULL COMMENT '所属栏目',
  `brand_id` mediumint(9) NOT NULL DEFAULT '0' COMMENT '所属品牌',
  `type_id` mediumint(9) NOT NULL DEFAULT '0' COMMENT '所属类型',
  `commodity_description` longtext NOT NULL COMMENT '描述',
  `commodity_weight` decimal(10,2) NOT NULL COMMENT '重量',
  `commodity_weight_unit` varchar(10) NOT NULL DEFAULT 'kg' COMMENT '单位',
  PRIMARY KEY (`commodity_id`),
  KEY `brand_id` (`brand_id`) USING BTREE,
  KEY `cates_id` (`cates_id`) USING BTREE,
  KEY `type_id` (`type_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=165 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_commodity`
-- -----------------------------
INSERT INTO `tp_commodity` VALUES ('135', '111', '1552213254421142', '', '', '', '', '222.00', '333.00', '1', '2', '113', '1', '<p>aa</p>', '444.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('132', 'qqq', '1552182842164821', '', '', '', '', '0.00', '1111.00', '1', '1', '0', '1', '', '11.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('134', 'bbb', '1552193956578260', '', '', '', '', '11.00', '22.00', '1', '1', '113', '1', '<p>1</p>', '33.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('138', '3333', '1552789614699327', '20190317\\c0a90fc599ed172cdfdbbab391bb40a7.png', '20190317\\sm_c0a90fc599ed172cdfdbbab391bb40a7.png', '20190317\\mid_c0a90fc599ed172cdfdbbab391bb40a7.png', '20190317\\big_c0a90fc599ed172cdfdbbab391bb40a7.png', '10.00', '20.00', '1', '2', '0', '1', '', '0.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('139', '2222', '1552789658950276', '20190317\\e062a285ced0b9b16a3b14bd117642cb.jpg', '20190317\\sm_e062a285ced0b9b16a3b14bd117642cb.jpg', '20190317\\mid_e062a285ced0b9b16a3b14bd117642cb.jpg', '20190317\\big_e062a285ced0b9b16a3b14bd117642cb.jpg', '232.00', '345.00', '1', '2', '113', '1', '', '657.00', 'g');
INSERT INTO `tp_commodity` VALUES ('140', '444', '1552792596283772', '', '', '', '', '111.00', '222.00', '0', '2', '113', '1', '', '333.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('141', '222', '1553395825976860', '', '', '', '', '111.00', '222.00', '1', '3', '112', '1', '<p>asdf</p>', '333.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('142', '222', '1553395851771050', '', '', '', '', '111.00', '222.00', '1', '3', '112', '1', '<p>asdf</p>', '333.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('158', '111', '1553399392800347', '', '', '', '', '222.00', '333.00', '1', '3', '114', '1', '<p>sfg</p>', '444.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('159', '8888', '1553411188540120', '', '', '', '', '888.00', '888.00', '1', '3', '113', '1', '<p>888</p>', '888.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('160', '111aaaaa', '1553412322879394', '', '', '', '', '11111.00', '0.00', '1', '2', '113', '1', '', '0.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('161', 'asdf', '1553413984333007', '', '', '', '', '111.00', '0.00', '1', '3', '113', '1', '', '0.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('162', '1234wwww', '1553417680523871', '', '', '', '', '0.00', '0.00', '1', '1', '113', '1', '', '0.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('163', '3245aaa', '1553417781325764', '', '', '', '', '0.00', '0.00', '1', '1', '113', '1', '', '0.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('164', 'zxcv', '1553420010718261', '', '', '', '', '0.00', '0.00', '1', '2', '113', '1', '', '0.00', 'kg');

-- -----------------------------
-- Table structure for `tp_config`
-- -----------------------------
DROP TABLE IF EXISTS `tp_config`;
CREATE TABLE `tp_config` (
  `config_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `config_ename` varchar(30) NOT NULL COMMENT '英文名称',
  `config_cname` varchar(30) NOT NULL COMMENT '中文名称',
  `config_formtype` varchar(10) NOT NULL DEFAULT 'input' COMMENT '表单类型',
  `config_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '配置类型 1店铺配置 2商品配置',
  `config_values` varchar(60) NOT NULL COMMENT '可选值',
  `config_default` varchar(255) NOT NULL COMMENT '默认值',
  `config_sort` int(11) NOT NULL DEFAULT '50' COMMENT '排序',
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_config`
-- -----------------------------
INSERT INTO `tp_config` VALUES ('9', 'description', '店铺描述', 'textarea', '1', '', '请描述店铺信息', '1');
INSERT INTO `tp_config` VALUES ('8', 'language', '语言', 'checked', '1', '中文,英文,日文,韩文,法文,美文', '英文,日文', '3');
INSERT INTO `tp_config` VALUES ('6', 'name', '店铺名称', 'input', '1', '', '请填写店铺名称', '6');
INSERT INTO `tp_config` VALUES ('7', 'type', '类型', 'radio', '1', '企业,商城,小卖部', '企业', '5');
INSERT INTO `tp_config` VALUES ('10', 'add', '地点', 'select', '1', '中国,英国,韩国,日本,法国,美国', '英国', '4');
INSERT INTO `tp_config` VALUES ('11', 'picture', '店铺图片', 'file', '1', '', '20180512\\f7686b73198712885a481c51069d33d3.jpg', '2');
INSERT INTO `tp_config` VALUES ('15', 'picname', '店铺图片2', 'file', '1', '', '20180512\\7983916d04eaa648b7982b055bd80469.jpg', '2');
INSERT INTO `tp_config` VALUES ('16', 'ceshi', '测试', 'checked', '1', '测试1,测试2,测试3,测试4', '测试2,测试3', '3');
INSERT INTO `tp_config` VALUES ('17', 'shopname', '商品名称', 'input', '0', '', '', '20');
INSERT INTO `tp_config` VALUES ('18', 'shoptype', '商品类型', 'radio', '0', '服装,汽车,电子数码', '电子数码', '19');
INSERT INTO `tp_config` VALUES ('19', 'shopadd', '商品配送地点', 'checked', '0', '中国,英国,美国,法国', '中国,英国,美国', '18');
INSERT INTO `tp_config` VALUES ('20', 'shopdescript', '商品描述', 'textarea', '0', '', '请描述商品内容', '17');
INSERT INTO `tp_config` VALUES ('21', 'shopconf', '商品配送方式', 'select', '0', 'ems,申通,圆通,顺丰,天天', '圆通', '16');
INSERT INTO `tp_config` VALUES ('22', 'shoppic', '商品图片', 'file', '0', '', '20180506\\bbd1a6daa57bc1def9532df6103cfbc2.jpg', '15');
INSERT INTO `tp_config` VALUES ('23', 'keywords', '站点描述', 'textarea', '1', '', '', '50');
INSERT INTO `tp_config` VALUES ('24', 'webname', '站点名称', 'input', '1', '', 'PHP商城', '50');
INSERT INTO `tp_config` VALUES ('25', 'description', '站点描述', 'textarea', '1', '', '', '50');
INSERT INTO `tp_config` VALUES ('26', 'webYesNo', '关闭站点', 'radio', '1', '', '', '50');
INSERT INTO `tp_config` VALUES ('27', 'search_keywords', '搜索框关键词', 'textarea', '1', '', '周大福, 内衣, Five,Plus,手机', '50');
INSERT INTO `tp_config` VALUES ('28', 'search_value', '搜索框默认值', 'input', '1', '', '内衣', '50');
INSERT INTO `tp_config` VALUES ('29', 'footer_copyright', '站点版权', 'textarea', '1', '', '©&nbsp;2015-2017&nbsp;tongpankt.com&nbsp;版权所有&nbsp;&nbsp;,ICP备案证书号:,豫ICP备*****号-1,&nbsp;,POWERED by童攀课堂', '50');

-- -----------------------------
-- Table structure for `tp_links`
-- -----------------------------
DROP TABLE IF EXISTS `tp_links`;
CREATE TABLE `tp_links` (
  `links_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '链接ID',
  `links_title` varchar(30) NOT NULL DEFAULT '' COMMENT '链接标题',
  `links_url` varchar(60) NOT NULL DEFAULT '' COMMENT '链接url',
  `links_logo` varchar(100) NOT NULL DEFAULT '' COMMENT '链接logo',
  `links_description` varchar(255) NOT NULL DEFAULT '' COMMENT '链接描述',
  `links_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型：1文字2图片',
  `links_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1.显示2.隐藏',
  PRIMARY KEY (`links_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_links`
-- -----------------------------
INSERT INTO `tp_links` VALUES ('2', '噶发射点发', 'http://adfasdf', '20180503\\2cfa4aa5f2712e3180b93a9a85b26b6b.jpg', '阿朵发射点发打发打发', '0', '0');

-- -----------------------------
-- Table structure for `tp_member_level`
-- -----------------------------
DROP TABLE IF EXISTS `tp_member_level`;
CREATE TABLE `tp_member_level` (
  `level_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `level_name` varchar(30) NOT NULL COMMENT '级别名称',
  `level_bom_point` int(11) NOT NULL COMMENT '积分下限',
  `level_top_point` int(11) NOT NULL COMMENT '积分上限',
  `level_rate` tinyint(4) NOT NULL COMMENT '折扣率',
  PRIMARY KEY (`level_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_member_level`
-- -----------------------------
INSERT INTO `tp_member_level` VALUES ('3', '注册会员', '0', '10000', '100');
INSERT INTO `tp_member_level` VALUES ('4', '中级会员', '10001', '20000', '90');
INSERT INTO `tp_member_level` VALUES ('5', '高级会员', '20001', '3000', '80');
INSERT INTO `tp_member_level` VALUES ('6', 'VIP会员', '30001', '50000', '70');

-- -----------------------------
-- Table structure for `tp_member_price`
-- -----------------------------
DROP TABLE IF EXISTS `tp_member_price`;
CREATE TABLE `tp_member_price` (
  `price_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price_mpprice` decimal(10,2) NOT NULL COMMENT '会员价格',
  `price_mlevel_id` smallint(6) NOT NULL COMMENT '会员级别',
  `commoditys_id` int(11) NOT NULL COMMENT '商品',
  PRIMARY KEY (`price_id`)
) ENGINE=MyISAM AUTO_INCREMENT=191 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_member_price`
-- -----------------------------
INSERT INTO `tp_member_price` VALUES ('114', '4.00', '6', '135');
INSERT INTO `tp_member_price` VALUES ('113', '2.00', '4', '135');
INSERT INTO `tp_member_price` VALUES ('112', '1.00', '3', '135');
INSERT INTO `tp_member_price` VALUES ('90', '11.00', '3', '132');
INSERT INTO `tp_member_price` VALUES ('91', '1.00', '4', '132');
INSERT INTO `tp_member_price` VALUES ('92', '1.00', '5', '132');
INSERT INTO `tp_member_price` VALUES ('93', '1.00', '6', '132');
INSERT INTO `tp_member_price` VALUES ('101', '4.00', '6', '134');
INSERT INTO `tp_member_price` VALUES ('100', '3.00', '5', '134');
INSERT INTO `tp_member_price` VALUES ('99', '2.00', '4', '134');
INSERT INTO `tp_member_price` VALUES ('98', '1.00', '3', '134');
INSERT INTO `tp_member_price` VALUES ('115', '1.00', '3', '141');
INSERT INTO `tp_member_price` VALUES ('116', '2.00', '4', '141');
INSERT INTO `tp_member_price` VALUES ('117', '3.00', '5', '141');
INSERT INTO `tp_member_price` VALUES ('118', '4.00', '6', '141');
INSERT INTO `tp_member_price` VALUES ('119', '1.00', '3', '142');
INSERT INTO `tp_member_price` VALUES ('120', '2.00', '4', '142');
INSERT INTO `tp_member_price` VALUES ('121', '3.00', '5', '142');
INSERT INTO `tp_member_price` VALUES ('122', '4.00', '6', '142');
INSERT INTO `tp_member_price` VALUES ('123', '2.00', '3', '143');
INSERT INTO `tp_member_price` VALUES ('124', '3.00', '4', '143');
INSERT INTO `tp_member_price` VALUES ('125', '4.00', '5', '143');
INSERT INTO `tp_member_price` VALUES ('126', '5.00', '6', '143');
INSERT INTO `tp_member_price` VALUES ('127', '2.00', '3', '144');
INSERT INTO `tp_member_price` VALUES ('128', '3.00', '4', '144');
INSERT INTO `tp_member_price` VALUES ('129', '4.00', '5', '144');
INSERT INTO `tp_member_price` VALUES ('130', '5.00', '6', '144');
INSERT INTO `tp_member_price` VALUES ('131', '2.00', '3', '145');
INSERT INTO `tp_member_price` VALUES ('132', '3.00', '4', '145');
INSERT INTO `tp_member_price` VALUES ('133', '4.00', '5', '145');
INSERT INTO `tp_member_price` VALUES ('134', '5.00', '6', '145');
INSERT INTO `tp_member_price` VALUES ('135', '2.00', '3', '146');
INSERT INTO `tp_member_price` VALUES ('136', '3.00', '4', '146');
INSERT INTO `tp_member_price` VALUES ('137', '4.00', '5', '146');
INSERT INTO `tp_member_price` VALUES ('138', '5.00', '6', '146');
INSERT INTO `tp_member_price` VALUES ('139', '2.00', '3', '147');
INSERT INTO `tp_member_price` VALUES ('140', '3.00', '4', '147');
INSERT INTO `tp_member_price` VALUES ('141', '4.00', '5', '147');
INSERT INTO `tp_member_price` VALUES ('142', '5.00', '6', '147');
INSERT INTO `tp_member_price` VALUES ('143', '2.00', '3', '148');
INSERT INTO `tp_member_price` VALUES ('144', '3.00', '4', '148');
INSERT INTO `tp_member_price` VALUES ('145', '4.00', '5', '148');
INSERT INTO `tp_member_price` VALUES ('146', '5.00', '6', '148');
INSERT INTO `tp_member_price` VALUES ('147', '2.00', '3', '149');
INSERT INTO `tp_member_price` VALUES ('148', '3.00', '4', '149');
INSERT INTO `tp_member_price` VALUES ('149', '4.00', '5', '149');
INSERT INTO `tp_member_price` VALUES ('150', '5.00', '6', '149');
INSERT INTO `tp_member_price` VALUES ('151', '2.00', '3', '150');
INSERT INTO `tp_member_price` VALUES ('152', '3.00', '4', '150');
INSERT INTO `tp_member_price` VALUES ('153', '4.00', '5', '150');
INSERT INTO `tp_member_price` VALUES ('154', '5.00', '6', '150');
INSERT INTO `tp_member_price` VALUES ('155', '2.00', '3', '151');
INSERT INTO `tp_member_price` VALUES ('156', '3.00', '4', '151');
INSERT INTO `tp_member_price` VALUES ('157', '4.00', '5', '151');
INSERT INTO `tp_member_price` VALUES ('158', '5.00', '6', '151');
INSERT INTO `tp_member_price` VALUES ('159', '2.00', '3', '152');
INSERT INTO `tp_member_price` VALUES ('160', '3.00', '4', '152');
INSERT INTO `tp_member_price` VALUES ('161', '4.00', '5', '152');
INSERT INTO `tp_member_price` VALUES ('162', '5.00', '6', '152');
INSERT INTO `tp_member_price` VALUES ('163', '2.00', '3', '153');
INSERT INTO `tp_member_price` VALUES ('164', '3.00', '4', '153');
INSERT INTO `tp_member_price` VALUES ('165', '4.00', '5', '153');
INSERT INTO `tp_member_price` VALUES ('166', '5.00', '6', '153');
INSERT INTO `tp_member_price` VALUES ('167', '2.00', '3', '154');
INSERT INTO `tp_member_price` VALUES ('168', '3.00', '4', '154');
INSERT INTO `tp_member_price` VALUES ('169', '4.00', '5', '154');
INSERT INTO `tp_member_price` VALUES ('170', '5.00', '6', '154');
INSERT INTO `tp_member_price` VALUES ('171', '2.00', '3', '155');
INSERT INTO `tp_member_price` VALUES ('172', '3.00', '4', '155');
INSERT INTO `tp_member_price` VALUES ('173', '4.00', '5', '155');
INSERT INTO `tp_member_price` VALUES ('174', '5.00', '6', '155');
INSERT INTO `tp_member_price` VALUES ('175', '2.00', '3', '156');
INSERT INTO `tp_member_price` VALUES ('176', '3.00', '4', '156');
INSERT INTO `tp_member_price` VALUES ('177', '4.00', '5', '156');
INSERT INTO `tp_member_price` VALUES ('178', '5.00', '6', '156');
INSERT INTO `tp_member_price` VALUES ('179', '2.00', '3', '157');
INSERT INTO `tp_member_price` VALUES ('180', '3.00', '4', '157');
INSERT INTO `tp_member_price` VALUES ('181', '4.00', '5', '157');
INSERT INTO `tp_member_price` VALUES ('182', '5.00', '6', '157');
INSERT INTO `tp_member_price` VALUES ('183', '1.00', '3', '158');
INSERT INTO `tp_member_price` VALUES ('184', '2.00', '4', '158');
INSERT INTO `tp_member_price` VALUES ('185', '4.00', '5', '158');
INSERT INTO `tp_member_price` VALUES ('186', '3.00', '6', '158');
INSERT INTO `tp_member_price` VALUES ('187', '88.00', '3', '159');
INSERT INTO `tp_member_price` VALUES ('188', '888.00', '4', '159');
INSERT INTO `tp_member_price` VALUES ('189', '8888.00', '5', '159');
INSERT INTO `tp_member_price` VALUES ('190', '88888.00', '6', '159');

-- -----------------------------
-- Table structure for `tp_nav`
-- -----------------------------
DROP TABLE IF EXISTS `tp_nav`;
CREATE TABLE `tp_nav` (
  `nav_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '导航id',
  `nav_name` varchar(30) NOT NULL COMMENT '导航名称',
  `nav_url` varchar(30) NOT NULL COMMENT '导航地址',
  `nav_open` tinyint(1) NOT NULL COMMENT '打开新页面 1.是 0.否',
  `nav_pos` varchar(6) NOT NULL COMMENT '导航位置：top:顶部 mid:中间 bottom:底部',
  `nav_sort` varchar(50) NOT NULL,
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_nav`
-- -----------------------------
INSERT INTO `tp_nav` VALUES ('1', '我的订单', '', '0', 'top', '');
INSERT INTO `tp_nav` VALUES ('2', '我的浏览', '', '0', 'top', '');
INSERT INTO `tp_nav` VALUES ('3', '我的收藏', '', '0', 'top', '');
INSERT INTO `tp_nav` VALUES ('4', '客户服务', '', '0', 'top', '');
INSERT INTO `tp_nav` VALUES ('5', '女装街', '', '1', 'mid', '');
INSERT INTO `tp_nav` VALUES ('6', '男人柜', '', '1', 'mid', '');
INSERT INTO `tp_nav` VALUES ('7', '品牌专区', '', '1', 'mid', '');
INSERT INTO `tp_nav` VALUES ('8', '聚划算', '', '1', 'mid', '');
INSERT INTO `tp_nav` VALUES ('9', '积分商城', '', '1', 'mid', '');
INSERT INTO `tp_nav` VALUES ('10', '首页', '', '1', 'bottom', '');
INSERT INTO `tp_nav` VALUES ('11', '隐私保护', '', '1', 'bottom', '');
INSERT INTO `tp_nav` VALUES ('12', '联系我们', '', '1', 'bottom', '');
INSERT INTO `tp_nav` VALUES ('13', '免责条款', '', '1', 'bottom', '');
INSERT INTO `tp_nav` VALUES ('14', '公司简介', '', '1', 'bottom', '');
INSERT INTO `tp_nav` VALUES ('15', '意见反馈', '', '1', 'bottom', '');

-- -----------------------------
-- Table structure for `tp_product`
-- -----------------------------
DROP TABLE IF EXISTS `tp_product`;
CREATE TABLE `tp_product` (
  `product_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `product_commodity_id` mediumint(9) NOT NULL COMMENT '所属商品ID',
  `product_commodity_number` int(11) NOT NULL COMMENT '库存数量',
  `product_commodity_attr_type` varchar(100) NOT NULL COMMENT '商品attr属性的类型',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_product`
-- -----------------------------
INSERT INTO `tp_product` VALUES ('86', '135', '11', '135,137');
INSERT INTO `tp_product` VALUES ('85', '135', '22', '134,138');
INSERT INTO `tp_product` VALUES ('84', '134', '11', '128,132');
INSERT INTO `tp_product` VALUES ('83', '134', '22', '129,132');
INSERT INTO `tp_product` VALUES ('82', '134', '22', '128,132');

-- -----------------------------
-- Table structure for `tp_recpos`
-- -----------------------------
DROP TABLE IF EXISTS `tp_recpos`;
CREATE TABLE `tp_recpos` (
  `rec_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `rec_name` varbinary(255) NOT NULL COMMENT '推荐位名称',
  `rec_type` tinyint(1) NOT NULL COMMENT '推荐位类型：1.商品2.分类',
  PRIMARY KEY (`rec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_recpos`
-- -----------------------------
INSERT INTO `tp_recpos` VALUES ('1', 'adfasdf111', '1');
INSERT INTO `tp_recpos` VALUES ('2', 'adfzcxvzcvzcv', '1');

-- -----------------------------
-- Table structure for `tp_type`
-- -----------------------------
DROP TABLE IF EXISTS `tp_type`;
CREATE TABLE `tp_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) NOT NULL COMMENT '商品类型名称',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_type`
-- -----------------------------
INSERT INTO `tp_type` VALUES ('1', '笔记本');
INSERT INTO `tp_type` VALUES ('3', '女装');
INSERT INTO `tp_type` VALUES ('4', '男装');
INSERT INTO `tp_type` VALUES ('5', '手机');
INSERT INTO `tp_type` VALUES ('6', '家具');
INSERT INTO `tp_type` VALUES ('7', '汽车');
