-- -----------------------------
-- Think MySQL Data Transfer 
-- 
-- Host     : 127.0.0.1
-- Port     : 
-- Database : tested
-- 
-- Part : #1
-- Date : 2019-03-03 15:14:29
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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_article`
-- -----------------------------
INSERT INTO `tp_article` VALUES ('24', '爱得发疯沙发', '儿童网特网特网特', '52543525', '33333', '11@333.com', 'http://3333333', '20180501\\f802e9443d371ba1d572d4cf0703f5f9.jpg', '<p>啊是发是发发发发方法</p><p><br/></p><p><img src=\"/static/ueditor/image/20180501/1525162970646208.jpg\" title=\"1525162970646208.jpg\"/></p><p><br/></p>', '1', '0', '3', '1525161027');
INSERT INTO `tp_article` VALUES ('25', 'asdfasdfasdf', '', '', '', '', '', '', '<p><img src=\"/static/ueditor/image/20180502/1525262966807233.jpg\" title=\"1525262966807233.jpg\"/></p><p><img src=\"/static/ueditor/image/20180502/1525262966998208.jpg\" title=\"1525262966998208.jpg\"/></p><p><img src=\"/static/ueditor/image/20180502/1525262966560575.jpg\" title=\"1525262966560575.jpg\"/></p><p><br/></p>', '0', '1', '4', '1525262979');

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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_category`
-- -----------------------------
INSERT INTO `tp_category` VALUES ('1', '系统', '1', '', '', '0', '2', '0', '1');
INSERT INTO `tp_category` VALUES ('2', '网店帮助分类', '2', '', '', '0', '8', '1', '1');
INSERT INTO `tp_category` VALUES ('3', '网店信息', '3', '', '', '0', '7', '1', '0');
INSERT INTO `tp_category` VALUES ('4', '新手上路', '3', '', '', '1', '50', '2', '0');
INSERT INTO `tp_category` VALUES ('5', '配送与支付', '3', '', '', '0', '5', '2', '0');
INSERT INTO `tp_category` VALUES ('11', '嘿嘿', '5', '', '', '1', '20', '0', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_comm_attr`
-- -----------------------------
INSERT INTO `tp_comm_attr` VALUES ('118', '6', '黑色', '1000.00', '131');
INSERT INTO `tp_comm_attr` VALUES ('119', '6', '红色', '0.00', '131');
INSERT INTO `tp_comm_attr` VALUES ('120', '6', '白色', '3000.00', '131');
INSERT INTO `tp_comm_attr` VALUES ('121', '15', '11', '0.00', '131');
INSERT INTO `tp_comm_attr` VALUES ('122', '16', '8', '0.00', '131');

-- -----------------------------
-- Table structure for `tp_comm_photo`
-- -----------------------------
DROP TABLE IF EXISTS `tp_comm_photo`;
CREATE TABLE `tp_comm_photo` (
  `comm_photo_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `comm_commodity_id` smallint(6) NOT NULL COMMENT '所属商品',
  `comm_photo_og` varchar(100) NOT NULL,
  `comm_photo_sm` varchar(100) NOT NULL COMMENT '小图',
  `comm_photo_mid` varchar(100) NOT NULL COMMENT '中图',
  `comm_photo_big` varchar(100) NOT NULL COMMENT '大图',
  PRIMARY KEY (`comm_photo_id`),
  KEY `comm_commodity_id` (`comm_commodity_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;


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
  KEY `cates_id` (`cates_id`,`brand_id`,`type_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_commodity`
-- -----------------------------
INSERT INTO `tp_commodity` VALUES ('131', 'aaa', '1551590136870876', '', '', '', '', '11.00', '222.00', '1', '5', '112', '0', '<p>adf</p>', '33.00', 'kg');

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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

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
INSERT INTO `tp_config` VALUES ('17', 'shopname', '商品名称', 'input', '0', '', '请输入商品名称', '20');
INSERT INTO `tp_config` VALUES ('18', 'shoptype', '商品类型', 'radio', '0', '服装,汽车,电子数码', '电子数码', '19');
INSERT INTO `tp_config` VALUES ('19', 'shopadd', '商品配送地点', 'checked', '0', '中国,英国,美国,法国', '中国,英国,美国', '18');
INSERT INTO `tp_config` VALUES ('20', 'shopdescript', '商品描述', 'textarea', '0', '', '请描述商品内容', '17');
INSERT INTO `tp_config` VALUES ('21', 'shopconf', '商品配送方式', 'select', '0', 'ems,申通,圆通,顺丰,天天', '圆通', '16');
INSERT INTO `tp_config` VALUES ('22', 'shoppic', '商品图片', 'file', '0', '', '20180506\\bbd1a6daa57bc1def9532df6103cfbc2.jpg', '15');

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
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_member_price`
-- -----------------------------
INSERT INTO `tp_member_price` VALUES ('86', '1.00', '3', '131');
INSERT INTO `tp_member_price` VALUES ('87', '2.00', '4', '131');
INSERT INTO `tp_member_price` VALUES ('88', '3.00', '5', '131');
INSERT INTO `tp_member_price` VALUES ('89', '4.00', '6', '131');

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
