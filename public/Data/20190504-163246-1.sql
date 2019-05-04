-- -----------------------------
-- Think MySQL Data Transfer 
-- 
-- Host     : 127.0.0.1
-- Port     : 
-- Database : tested
-- 
-- Part : #1
-- Date : 2019-05-04 16:32:46
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
) ENGINE=MyISAM AUTO_INCREMENT=530 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_cates`
-- -----------------------------
INSERT INTO `tp_cates` VALUES ('1', '家电器', '家电器', '', '20180512\\1211c45844f50480f5205d490c585ae7.jpg', '1', '2', '0');
INSERT INTO `tp_cates` VALUES ('2', '大家电', '大家电', '', '20180512\\b67526ad6486318334844ba62436588d.jpg', '1', '1', '1');
INSERT INTO `tp_cates` VALUES ('3', '冷吧/冰柜', '冷吧/冰柜', '', '20180512\\0df7bc8db57dcad866abee552b94b5c4.jpg', '1', '4', '2');
INSERT INTO `tp_cates` VALUES ('4', '生活电器', '生活电器', '', '20180512\\b0acd86ff5600ac35296012e357646ae.jpg', '1', '30', '1');
INSERT INTO `tp_cates` VALUES ('5', '手机、数码、通信', '手机、数码、通信', '', '20180512\\2cbbc5602476b14d0af8214307d9036d.jpg', '1', '6', '0');
INSERT INTO `tp_cates` VALUES ('15', '电脑、办公', '电脑、办公', '', '', '1', '20', '0');
INSERT INTO `tp_cates` VALUES ('16', '家居、家具、家装、厨具', '家居、家具、家装、厨具', '', '', '1', '20', '0');
INSERT INTO `tp_cates` VALUES ('17', '男装、女装、内衣', '男装、女装、内衣', '', '', '1', '20', '0');
INSERT INTO `tp_cates` VALUES ('18', '个人化妆、清洁用品', '个人化妆、清洁用品', '', '', '1', '20', '0');
INSERT INTO `tp_cates` VALUES ('19', '家庭影院', '家庭影院', '', '', '1', '20', '2');
INSERT INTO `tp_cates` VALUES ('20', 'DVD', 'DVD', '', '', '1', '20', '2');
INSERT INTO `tp_cates` VALUES ('21', '迷你音响', '迷你音响', '', '', '1', '20', '2');
INSERT INTO `tp_cates` VALUES ('22', '热水器', '热水器', '', '', '1', '20', '2');
INSERT INTO `tp_cates` VALUES ('24', '智能设备', '智能设备', '', '', '1', '20', '5');
INSERT INTO `tp_cates` VALUES ('25', '数码配件', '数码配件', '', '', '1', '20', '5');
INSERT INTO `tp_cates` VALUES ('26', '服务产品', '服务产品', '', '', '1', '20', '15');
INSERT INTO `tp_cates` VALUES ('27', '电脑整机', '电脑整机', '', '', '1', '20', '15');
INSERT INTO `tp_cates` VALUES ('28', '厨具', '厨具', '', '', '1', '20', '16');
INSERT INTO `tp_cates` VALUES ('29', '家装建材', '家装建材', '', '', '1', '20', '16');
INSERT INTO `tp_cates` VALUES ('30', '女装', '女装', '', '', '1', '20', '17');
INSERT INTO `tp_cates` VALUES ('31', '鞋靴、箱包、钟表、奢侈品', '鞋靴、箱包、钟表、奢侈品', '', '', '1', '20', '0');
INSERT INTO `tp_cates` VALUES ('32', '男装', '男装', '', '', '1', '20', '17');
INSERT INTO `tp_cates` VALUES ('33', '奢侈品', '奢侈品', '', '', '1', '20', '31');
INSERT INTO `tp_cates` VALUES ('34', '功能箱包', '功能箱包', '', '', '1', '20', '31');
INSERT INTO `tp_cates` VALUES ('35', '面部护肤', '面部护肤', '', '', '1', '20', '18');
INSERT INTO `tp_cates` VALUES ('36', '洗发护发', '洗发护发', '', '', '1', '20', '18');
INSERT INTO `tp_cates` VALUES ('37', '个护健康', '个护健康', '', '', '1', '20', '1');
INSERT INTO `tp_cates` VALUES ('38', '平板电视', '平板电视', '', '', '1', '20', '2');
INSERT INTO `tp_cates` VALUES ('39', '空调', '空调', '', '', '1', '20', '2');
INSERT INTO `tp_cates` VALUES ('40', '冰箱', '冰箱', '', '', '1', '20', '2');
INSERT INTO `tp_cates` VALUES ('41', '洗衣机', '洗衣机', '', '', '1', '20', '2');
INSERT INTO `tp_cates` VALUES ('42', '电风扇', '电风扇', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('43', '冷风扇', '冷风扇', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('44', '净化器', '净化器', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('45', '加湿器', '加湿器', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('46', '扫地机器人', '扫地机器人', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('47', '吸尘器', '吸尘器', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('48', '插座', '插座', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('49', '电话机', '电话机', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('50', '饮水机', '饮水机', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('51', '取暖电器', '取暖电器', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('52', '净水设备', '净水设备', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('53', '干衣机', '干衣机', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('54', '收音机/录音机', '收音机/录音机', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('55', '电器开关', '电器开关', '', '', '1', '20', '4');
INSERT INTO `tp_cates` VALUES ('56', '厨房电器', '厨房电器', '', '', '1', '20', '1');
INSERT INTO `tp_cates` VALUES ('57', '电饭煲', '电饭煲', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('58', '电压力锅', '电压力锅', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('59', '豆浆机', '豆浆机', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('60', '面包机', '面包机', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('61', '咖啡机', '咖啡机', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('62', '微波炉', '微波炉', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('63', '料理/榨汁机', '料理/榨汁机', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('64', '电烤箱', '电烤箱', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('65', '电磁炉', '电磁炉', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('66', '电饼铛/烧火盘', '电饼铛/烧火盘', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('67', '煮蛋器', '煮蛋器', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('68', '酸奶机', '酸奶机', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('69', '电水壶/热水瓶', '电水壶/热水瓶', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('70', '电饭盒', '电饭盒', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('71', '其他厨房电器', '其他厨房电器', '', '', '1', '20', '56');
INSERT INTO `tp_cates` VALUES ('72', '按摩椅', '按摩椅', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('73', '剃须刀', '剃须刀', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('74', '脱毛器', '脱毛器', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('75', '口腔护理', '口腔护理', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('76', '电吹风', '电吹风', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('77', '美容器', '美容器', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('78', '理发器', '理发器', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('79', '按摩器', '按摩器', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('80', '足浴盆', '足浴盆', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('81', '血压计', '血压计', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('82', '健康秤/厨房秤', '健康秤/厨房秤', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('83', '血糖计', '血糖计', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('84', '计步器', '计步器', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('85', '其他健康电器', '其他健康电器', '', '', '1', '20', '37');
INSERT INTO `tp_cates` VALUES ('86', '五金家装', '五金家装', '', '', '1', '20', '1');
INSERT INTO `tp_cates` VALUES ('87', '电动工具', '电动工具', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('88', '手动工具', '手动工具', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('89', '仪器', '仪器', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('90', '仪表', '仪表', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('91', '浴霸/排气扇', '浴霸/排气扇', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('92', '灯具', '灯具', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('93', 'LED灯', 'LED灯', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('94', '洁身器', '洁身器', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('95', '水槽', '水槽', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('96', '龙头', '龙头', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('97', '沐浴花洒', '沐浴花洒', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('98', '厨卫五金', '厨卫五金', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('99', '家具五金', '家具五金', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('100', '门铃', '门铃', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('101', '监控安防', '监控安防', '', '', '1', '20', '86');
INSERT INTO `tp_cates` VALUES ('102', '智能手环', '智能手环', '', '', '1', '20', '24');
INSERT INTO `tp_cates` VALUES ('103', '智能手表', '智能手表', '', '', '1', '20', '24');
INSERT INTO `tp_cates` VALUES ('104', '智能眼镜', '智能眼镜', '', '', '1', '20', '24');
INSERT INTO `tp_cates` VALUES ('105', '运动跟踪器', '运动跟踪器', '', '', '1', '20', '24');
INSERT INTO `tp_cates` VALUES ('106', '健康监测', '健康监测', '', '', '1', '20', '24');
INSERT INTO `tp_cates` VALUES ('107', '智能配饰', '智能配饰', '', '', '1', '20', '24');
INSERT INTO `tp_cates` VALUES ('108', '智能家居', '智能家居', '', '', '1', '20', '24');
INSERT INTO `tp_cates` VALUES ('109', '体感车', '体感车', '', '', '1', '20', '24');
INSERT INTO `tp_cates` VALUES ('110', '其他配件', '其他配件', '', '', '1', '20', '24');
INSERT INTO `tp_cates` VALUES ('111', '存储卡', '存储卡', '', '', '1', '20', '25');
INSERT INTO `tp_cates` VALUES ('112', '读卡器', '读卡器', '', '', '1', '20', '25');
INSERT INTO `tp_cates` VALUES ('113', '滤镜', '滤镜', '', '', '1', '20', '25');
INSERT INTO `tp_cates` VALUES ('114', '闪光灯/手柄', '闪光灯/手柄', '', '', '1', '20', '25');
INSERT INTO `tp_cates` VALUES ('115', '相机包', '相机包', '', '', '1', '20', '25');
INSERT INTO `tp_cates` VALUES ('116', '三脚架/云台', '三脚架/云台', '', '', '1', '20', '25');
INSERT INTO `tp_cates` VALUES ('117', '相机清洁', '相机清洁', '', '', '1', '20', '25');
INSERT INTO `tp_cates` VALUES ('118', '相机贴膜', '相机贴膜', '', '', '1', '20', '25');
INSERT INTO `tp_cates` VALUES ('119', '机身附件', '机身附件', '', '', '1', '20', '25');
INSERT INTO `tp_cates` VALUES ('120', '镜头附件', '镜头附件', '', '', '1', '20', '25');
INSERT INTO `tp_cates` VALUES ('121', '电池/充电器', '电池/充电器', '', '', '1', '20', '25');
INSERT INTO `tp_cates` VALUES ('122', '移动电源', '移动电源', '', '', '1', '20', '25');
INSERT INTO `tp_cates` VALUES ('123', '手机通讯', '手机通讯', '', '', '1', '20', '5');
INSERT INTO `tp_cates` VALUES ('124', '手机', '手机', '', '', '1', '20', '123');
INSERT INTO `tp_cates` VALUES ('125', '对讲机', '对讲机', '', '', '1', '20', '123');
INSERT INTO `tp_cates` VALUES ('126', '运营商', '运营商', '', '', '1', '20', '5');
INSERT INTO `tp_cates` VALUES ('127', '购机送费', '购机送费', '', '', '1', '20', '126');
INSERT INTO `tp_cates` VALUES ('128', '0元购机', '0元购机', '', '', '1', '20', '126');
INSERT INTO `tp_cates` VALUES ('129', '选号入网', '选号入网', '', '', '1', '20', '126');
INSERT INTO `tp_cates` VALUES ('130', '手机配件', '手机配件', '', '', '1', '20', '5');
INSERT INTO `tp_cates` VALUES ('131', '电池', '电池', '', '', '1', '20', '130');
INSERT INTO `tp_cates` VALUES ('132', '蓝牙耳机', '蓝牙耳机', '', '', '1', '20', '130');
INSERT INTO `tp_cates` VALUES ('133', '充电器/数据线', '充电器/数据线', '', '', '1', '20', '130');
INSERT INTO `tp_cates` VALUES ('134', '手机耳机', '手机耳机', '', '', '1', '20', '130');
INSERT INTO `tp_cates` VALUES ('135', '贴膜', '贴膜', '', '', '1', '20', '130');
INSERT INTO `tp_cates` VALUES ('136', '存储卡', '存储卡', '', '', '1', '20', '130');
INSERT INTO `tp_cates` VALUES ('137', '保护套', '保护套', '', '', '1', '20', '130');
INSERT INTO `tp_cates` VALUES ('138', '车载', '车载', '', '', '1', '20', '130');
INSERT INTO `tp_cates` VALUES ('139', 'iPhone配件', 'iPhone配件', '', '', '1', '20', '130');
INSERT INTO `tp_cates` VALUES ('140', '创意配件', '创意配件', '', '', '1', '20', '130');
INSERT INTO `tp_cates` VALUES ('141', '便携/无线音箱', '便携/无线音箱', '', '', '1', '20', '130');
INSERT INTO `tp_cates` VALUES ('142', '手机饰品', '手机饰品', '', '', '1', '20', '130');
INSERT INTO `tp_cates` VALUES ('143', '摄影摄像', '摄影摄像', '', '', '1', '20', '5');
INSERT INTO `tp_cates` VALUES ('144', '数码相机', '数码相机', '', '', '1', '20', '143');
INSERT INTO `tp_cates` VALUES ('145', '单电/微单相机', '单电/微单相机', '', '', '1', '20', '143');
INSERT INTO `tp_cates` VALUES ('146', '单反相机', '单反相机', '', '', '1', '20', '143');
INSERT INTO `tp_cates` VALUES ('147', '拍立得', '拍立得', '', '', '1', '20', '143');
INSERT INTO `tp_cates` VALUES ('148', '运动相机', '运动相机', '', '', '1', '20', '143');
INSERT INTO `tp_cates` VALUES ('149', '摄像机', '摄像机', '', '', '1', '20', '143');
INSERT INTO `tp_cates` VALUES ('150', '镜头', '镜头', '', '', '1', '20', '143');
INSERT INTO `tp_cates` VALUES ('151', '户外器材', '户外器材', '', '', '1', '20', '143');
INSERT INTO `tp_cates` VALUES ('152', '摄影器材', '摄影器材', '', '', '1', '20', '143');
INSERT INTO `tp_cates` VALUES ('153', '时尚影音', '时尚影音', '', '', '1', '20', '5');
INSERT INTO `tp_cates` VALUES ('154', '耳机/耳麦', '耳机/耳麦', '', '', '1', '20', '153');
INSERT INTO `tp_cates` VALUES ('155', '音箱/音响', '音箱/音响', '', '', '1', '20', '153');
INSERT INTO `tp_cates` VALUES ('156', '麦克风', '麦克风', '', '', '1', '20', '153');
INSERT INTO `tp_cates` VALUES ('157', 'MP3/MP4', 'MP3/MP4', '', '', '1', '20', '153');
INSERT INTO `tp_cates` VALUES ('158', '数码相框', '数码相框', '', '', '1', '20', '153');
INSERT INTO `tp_cates` VALUES ('159', '专业音频', '专业音频', '', '', '1', '20', '153');
INSERT INTO `tp_cates` VALUES ('160', '苹果周边', '苹果周边', '', '', '1', '20', '153');
INSERT INTO `tp_cates` VALUES ('161', '上门服务', '上门服务', '', '', '1', '20', '26');
INSERT INTO `tp_cates` VALUES ('162', '远程服务', '远程服务', '', '', '1', '20', '26');
INSERT INTO `tp_cates` VALUES ('163', '电脑软件', '电脑软件', '', '', '1', '20', '26');
INSERT INTO `tp_cates` VALUES ('164', '笔记本', '笔记本', '', '', '1', '20', '27');
INSERT INTO `tp_cates` VALUES ('165', '超级本', '超级本', '', '', '1', '20', '27');
INSERT INTO `tp_cates` VALUES ('166', '游戏本', '游戏本', '', '', '1', '20', '27');
INSERT INTO `tp_cates` VALUES ('167', '平板电脑', '平板电脑', '', '', '1', '20', '27');
INSERT INTO `tp_cates` VALUES ('168', '平板电脑配件', '平板电脑配件', '', '', '1', '20', '27');
INSERT INTO `tp_cates` VALUES ('169', '台式机', '台式机', '', '', '1', '20', '27');
INSERT INTO `tp_cates` VALUES ('170', '笔记本配件', '笔记本配件', '', '', '1', '20', '27');
INSERT INTO `tp_cates` VALUES ('171', '服务器/工作站', '服务器/工作站', '', '', '1', '20', '27');
INSERT INTO `tp_cates` VALUES ('172', '电脑配件', '', '', '', '1', '20', '15');
INSERT INTO `tp_cates` VALUES ('173', 'CPU', 'CPU', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('174', '主板', '主板', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('175', '显卡', '显卡', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('176', '硬盘', '硬盘', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('177', 'SSD固态硬盘', 'SSD固态硬盘', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('178', '内存', '内存', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('179', '机箱', '机箱', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('180', '电源', '电源', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('181', '显示器', '显示器', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('182', '刻录机/光驱', '刻录机/光驱', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('183', '声卡、扩展卡', '声卡、扩展卡', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('184', '散热器', '散热器', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('185', '装机配件', '装机配件', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('186', '组装电脑', '组装电脑', '', '', '1', '20', '172');
INSERT INTO `tp_cates` VALUES ('187', '外设产品', '外设产品', '', '', '1', '20', '15');
INSERT INTO `tp_cates` VALUES ('188', '鼠标', '鼠标', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('189', '键盘', '键盘', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('190', '游戏设备', '游戏设备', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('191', 'U盘', 'U盘', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('192', '移动硬盘', '移动硬盘', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('193', '鼠标垫', '鼠标垫', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('194', '摄像头', '摄像头', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('195', '线缆', '线缆', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('196', '电玩', '电玩', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('197', '手写板', '手写板', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('198', '外置盒', '外置盒', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('199', '电脑工具', '电脑工具', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('200', '电脑清洁', '电脑清洁', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('201', 'UPS', 'UPS', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('202', '插座', '插座', '', '', '1', '20', '187');
INSERT INTO `tp_cates` VALUES ('203', '网络产品', '网络产品', '', '', '1', '20', '15');
INSERT INTO `tp_cates` VALUES ('204', '路由器', '路由器', '', '', '1', '20', '203');
INSERT INTO `tp_cates` VALUES ('205', '网卡', '网卡', '', '', '1', '20', '203');
INSERT INTO `tp_cates` VALUES ('206', '交换机', '交换机', '', '', '1', '20', '203');
INSERT INTO `tp_cates` VALUES ('207', '网络存储', '网络存储', '', '', '1', '20', '203');
INSERT INTO `tp_cates` VALUES ('208', '4G/3G上', '4G/3G上', '', '', '1', '20', '203');
INSERT INTO `tp_cates` VALUES ('209', '网络盒子', '网络盒子', '', '', '1', '20', '203');
INSERT INTO `tp_cates` VALUES ('210', '网络配件', '网络配件', '', '', '1', '20', '203');
INSERT INTO `tp_cates` VALUES ('211', '办公打印', '办公打印', '', '', '1', '20', '15');
INSERT INTO `tp_cates` VALUES ('212', '打印机', '打印机', '', '', '1', '20', '211');
INSERT INTO `tp_cates` VALUES ('213', '一体机', '一体机', '', '', '1', '20', '211');
INSERT INTO `tp_cates` VALUES ('214', '投影机', '投影机', '', '', '1', '20', '211');
INSERT INTO `tp_cates` VALUES ('215', '投影配件', '投影配件', '', '', '1', '20', '211');
INSERT INTO `tp_cates` VALUES ('216', '传真机', '传真机', '', '', '1', '20', '211');
INSERT INTO `tp_cates` VALUES ('217', '复合机', '复合机', '', '', '1', '20', '211');
INSERT INTO `tp_cates` VALUES ('218', '碎纸机', '碎纸机', '', '', '1', '20', '211');
INSERT INTO `tp_cates` VALUES ('219', '扫描仪', '扫描仪', '', '', '1', '20', '211');
INSERT INTO `tp_cates` VALUES ('220', '墨盒', '墨盒', '', '', '1', '20', '211');
INSERT INTO `tp_cates` VALUES ('221', '硒鼓', '硒鼓', '', '', '1', '20', '211');
INSERT INTO `tp_cates` VALUES ('222', '墨粉', '墨粉', '', '', '1', '20', '211');
INSERT INTO `tp_cates` VALUES ('223', '色带', '色带', '', '', '1', '20', '211');
INSERT INTO `tp_cates` VALUES ('224', '烹饪锅具', '烹饪锅具', '', '', '1', '20', '28');
INSERT INTO `tp_cates` VALUES ('225', '刀剪菜板', '刀剪菜板', '', '', '1', '20', '28');
INSERT INTO `tp_cates` VALUES ('226', '厨房配件', '厨房配件', '', '', '1', '20', '28');
INSERT INTO `tp_cates` VALUES ('227', '水具酒具', '水具酒具', '', '', '1', '20', '28');
INSERT INTO `tp_cates` VALUES ('228', '餐具', '餐具', '', '', '1', '20', '28');
INSERT INTO `tp_cates` VALUES ('229', '茶具/咖啡具', '茶具/咖啡具', '', '', '1', '20', '28');
INSERT INTO `tp_cates` VALUES ('230', '灯饰照明', '灯饰照明', '', '', '1', '20', '29');
INSERT INTO `tp_cates` VALUES ('231', '厨房卫浴', '厨房卫浴', '', '', '1', '20', '29');
INSERT INTO `tp_cates` VALUES ('232', '五金工具', '五金工具', '', '', '1', '20', '29');
INSERT INTO `tp_cates` VALUES ('233', '电工电料', '电工电料', '', '', '1', '20', '29');
INSERT INTO `tp_cates` VALUES ('234', '墙地面材料', '墙地面材料', '', '', '1', '20', '29');
INSERT INTO `tp_cates` VALUES ('235', '装饰材料', '装饰材料', '', '', '1', '20', '29');
INSERT INTO `tp_cates` VALUES ('236', '装修服务', '装修服务', '', '', '1', '20', '29');
INSERT INTO `tp_cates` VALUES ('237', '吸顶灯', '吸顶灯', '', '', '1', '20', '29');
INSERT INTO `tp_cates` VALUES ('238', '淋浴花洒', '淋浴花洒', '', '', '1', '20', '29');
INSERT INTO `tp_cates` VALUES ('239', '开关插座', '开关插座', '', '', '1', '20', '29');
INSERT INTO `tp_cates` VALUES ('240', '油漆涂料', '油漆涂料', '', '', '1', '20', '29');
INSERT INTO `tp_cates` VALUES ('241', '龙头', '龙头', '', '', '1', '20', '29');
INSERT INTO `tp_cates` VALUES ('242', '家纺', '家纺', '', '', '1', '20', '16');
INSERT INTO `tp_cates` VALUES ('243', '床品套件', '床品套件', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('244', '被子', '被子', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('245', '蚊帐', '蚊帐', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('246', '凉席', '凉席', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('247', '床单被罩', '床单被罩', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('248', '枕芯', '枕芯', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('249', '毛巾浴巾', '毛巾浴巾', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('250', '布艺软饰', '布艺软饰', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('251', '毯子', '毯子', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('252', '抱枕靠垫', '抱枕靠垫', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('253', '床垫/床褥', '床垫/床褥', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('254', '窗帘/窗纱', '窗帘/窗纱', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('255', '电热毯', '电热毯', '', '', '1', '20', '242');
INSERT INTO `tp_cates` VALUES ('256', '家具', '家具', '', '', '1', '20', '16');
INSERT INTO `tp_cates` VALUES ('257', '卧室家具', '卧室家具', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('258', '客厅家具', '客厅家具', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('259', '餐厅家具', '餐厅家具', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('260', '书房家具', '书房家具', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('261', '储物家具', '储物家具', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('262', '阳台/户外', '阳台/户外', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('263', '商业办公', '商业办公', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('264', '床', '床', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('265', '床垫', '床垫', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('266', '沙发', '沙发', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('267', '电脑椅', '电脑椅', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('268', '衣柜', '衣柜', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('269', '茶几', '茶几', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('270', '电视柜', '电视柜', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('271', '餐桌', '餐桌', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('272', '电脑桌', '电脑桌', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('273', '鞋架/衣帽架', '鞋架/衣帽架', '', '', '1', '20', '256');
INSERT INTO `tp_cates` VALUES ('274', '灯具', '灯具', '', '', '1', '20', '16');
INSERT INTO `tp_cates` VALUES ('275', '台灯', '台灯', '', '', '1', '20', '274');
INSERT INTO `tp_cates` VALUES ('276', '吸顶灯', '吸顶灯', '', '', '1', '20', '274');
INSERT INTO `tp_cates` VALUES ('277', '筒灯射灯', '筒灯射灯', '', '', '1', '20', '274');
INSERT INTO `tp_cates` VALUES ('278', 'LED灯', 'LED灯', '', '', '1', '20', '274');
INSERT INTO `tp_cates` VALUES ('279', '节能灯', '节能灯', '', '', '1', '20', '274');
INSERT INTO `tp_cates` VALUES ('280', '落地灯', '落地灯', '', '', '1', '20', '274');
INSERT INTO `tp_cates` VALUES ('281', '五金电器', '五金电器', '', '', '1', '20', '274');
INSERT INTO `tp_cates` VALUES ('282', '应急灯/手电', '应急灯/手电', '', '', '1', '20', '274');
INSERT INTO `tp_cates` VALUES ('283', '装饰灯', '装饰灯', '', '', '1', '20', '274');
INSERT INTO `tp_cates` VALUES ('284', '吊灯', '吊灯', '', '', '1', '20', '274');
INSERT INTO `tp_cates` VALUES ('285', '氛围照明', '氛围照明', '', '', '1', '20', '274');
INSERT INTO `tp_cates` VALUES ('286', '生活日用', '生活日用', '', '', '1', '20', '16');
INSERT INTO `tp_cates` VALUES ('287', '收纳用品', '收纳用品', '', '', '1', '20', '286');
INSERT INTO `tp_cates` VALUES ('288', '雨伞雨具', '雨伞雨具', '', '', '1', '20', '286');
INSERT INTO `tp_cates` VALUES ('289', '浴室用品', '浴室用品', '', '', '1', '20', '286');
INSERT INTO `tp_cates` VALUES ('290', '缝纫/针织用品', '缝纫/针织用品', '', '', '1', '20', '286');
INSERT INTO `tp_cates` VALUES ('291', '晒/熨烫', '晒/熨烫', '', '', '1', '20', '286');
INSERT INTO `tp_cates` VALUES ('292', '净化除味', '净化除味', '', '', '1', '20', '286');
INSERT INTO `tp_cates` VALUES ('293', '连衣裙', '连衣裙', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('294', '蕾丝/雪纺衫', '蕾丝/雪纺衫', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('295', '衬衫', '衬衫', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('296', 'T恤', 'T恤', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('297', '半身裙', '半身裙', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('298', '休闲裤', '休闲裤', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('299', '短裤', '短裤', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('300', '牛仔裤', '牛仔裤', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('301', '针织衫', '针织衫', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('302', '吊带/背心', '吊带/背心', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('303', '打底衫', '打底衫', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('304', '打底裤', '打底裤', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('305', '正装裤', '正装裤', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('306', '小西服', '小西服', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('307', '马甲', '马甲', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('308', '风衣', '风衣', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('309', '羊毛衫', '羊毛衫', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('310', '羊绒衫', '羊绒衫', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('311', '短外套', '短外套', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('312', '棉服', '棉服', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('313', '毛呢大衣', '毛呢大衣', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('314', '加绒裤', '加绒裤', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('315', '羽绒服', '羽绒服', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('316', '皮草', '皮草', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('317', '真皮皮衣', '真皮皮衣', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('318', '仿皮皮衣', '仿皮皮衣', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('319', '旗袍/唐装', '旗袍/唐装', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('320', '礼服', '礼服', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('321', '婚纱', '婚纱', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('322', '中老年女装', '中老年女装', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('323', '大码女装', '大码女装', '', '', '1', '20', '30');
INSERT INTO `tp_cates` VALUES ('324', 'T恤', 'T恤', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('325', '裤子', '裤子', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('326', 'POLO衫', 'POLO衫', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('327', '针织衫', '针织衫', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('328', '夹克', '夹克', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('329', '卫衣', '卫衣', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('330', '风衣', '风衣', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('331', '马甲/背心', '马甲/背心', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('332', '短裤', '短裤', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('333', '休闲裤', '休闲裤', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('334', '牛仔裤', '牛仔裤', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('335', '西服', '西服', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('336', '西裤', '西裤', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('337', '西服套装', '西服套装', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('338', '真皮皮衣', '真皮皮衣', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('339', '仿皮皮衣', '仿皮皮衣', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('340', '羽绒服', '羽绒服', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('341', '毛呢大衣', '毛呢大衣', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('342', '棉服', '棉服', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('343', '羊绒衫', '羊绒衫', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('344', '羊毛衫', '羊毛衫', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('345', '卫裤/运动裤', '卫裤/运动裤', '', '', '1', '20', '32');
INSERT INTO `tp_cates` VALUES ('346', '服饰配件', '服饰配件', '', '', '1', '20', '17');
INSERT INTO `tp_cates` VALUES ('347', '配饰', '配饰', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('348', '光学镜架/镜片', '光学镜架/镜片', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('349', '防辐射眼镜', '防辐射眼镜', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('350', '女士丝巾/围巾/披肩', '女士丝巾/围巾/披肩', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('351', '棒球帽', '棒球帽', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('352', '遮阳伞/雨伞', '遮阳伞/雨伞', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('353', '阳帽', '阳帽', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('354', '领带/领结/领带夹', '领带/领结/领带夹', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('355', '男士腰带/礼盒', '男士腰带/礼盒', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('356', '防晒手套', '防晒手套', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('357', '老花镜', '老花镜', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('358', '袖扣', '袖扣', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('359', '鸭舌帽', '鸭舌帽', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('360', '装饰眼镜', '装饰眼镜', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('361', '女士腰带/礼盒', '女士腰带/礼盒', '', '', '1', '20', '346');
INSERT INTO `tp_cates` VALUES ('362', '内衣', '内衣', '', '', '1', '20', '17');
INSERT INTO `tp_cates` VALUES ('363', '内衣配件', '内衣配件', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('364', '文胸', '文胸', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('365', '睡衣/家居服', '睡衣/家居服', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('366', '情侣睡衣', '情侣睡衣', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('367', '文胸套装', '文胸套装', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('368', '少女文胸', '少女文胸', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('369', '女式内裤', '女式内裤', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('370', '男式内裤', '男式内裤', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('371', '商务男袜', '商务男袜', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('372', '休闲棉袜', '休闲棉袜', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('373', '吊带/背心', '吊带/背心', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('374', '打底衫', '打底衫', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('375', '抹胸', '抹胸', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('376', '连裤袜/丝袜', '连裤袜/丝袜', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('377', '美腿袜', '美腿袜', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('378', '打底裤袜', '打底裤袜', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('379', '塑身美体', '塑身美体', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('380', '大码内衣', '大码内衣', '', '', '1', '20', '362');
INSERT INTO `tp_cates` VALUES ('381', '运动户外', '运动户外', '', '', '1', '20', '17');
INSERT INTO `tp_cates` VALUES ('382', '跑步运动', '跑步运动', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('383', '室内健身', '室内健身', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('384', '自行车运动', '自行车运动', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('385', '轮滑运动', '轮滑运动', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('386', '羽毛球/网球/乒乓球', '羽毛球/网球/乒乓球', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('387', '足球/篮球/排球', '足球/篮球/排球', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('388', '运动休闲', '运动休闲', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('389', '钓鱼用品', '钓鱼用品', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('390', '野营烧烤', '野营烧烤', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('391', '游泳运动', '游泳运动', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('392', '舞蹈运动', '舞蹈运动', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('393', '瑜伽运动', '瑜伽运动', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('394', '防狼防身', '防狼防身', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('395', '水上运动', '水上运动', '', '', '1', '20', '381');
INSERT INTO `tp_cates` VALUES ('396', '清洁', '清洁', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('397', '护肤', '护肤', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('398', '面膜', '面膜', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('399', '洗面奶', '洗面奶', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('400', 'BB霜', 'BB霜', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('401', '指甲油', '指甲油', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('402', '洗面泥', '洗面泥', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('403', '水润护肤', '水润护肤', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('404', '卸妆水', '卸妆水', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('405', '雪花膏', '雪花膏', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('406', '爽肤水', '爽肤水', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('407', '清洁套装', '清洁套装', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('408', '剃须', '剃须', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('409', '洁面刷', '洁面刷', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('410', '修眉笔', '修眉笔', '', '', '1', '20', '35');
INSERT INTO `tp_cates` VALUES ('411', '洗发', '洗发', '', '', '1', '20', '36');
INSERT INTO `tp_cates` VALUES ('412', '护发', '护发', '', '', '1', '20', '36');
INSERT INTO `tp_cates` VALUES ('413', '染发', '染发', '', '', '1', '20', '36');
INSERT INTO `tp_cates` VALUES ('414', '造型', '造型', '', '', '1', '20', '36');
INSERT INTO `tp_cates` VALUES ('415', '身体护肤', '身体护肤', '', '', '1', '20', '18');
INSERT INTO `tp_cates` VALUES ('416', '沐浴', '沐浴', '', '', '1', '20', '415');
INSERT INTO `tp_cates` VALUES ('417', '润肤', '润肤', '', '', '1', '20', '415');
INSERT INTO `tp_cates` VALUES ('418', '手足', '手足', '', '', '1', '20', '415');
INSERT INTO `tp_cates` VALUES ('419', '美胸', '美胸', '', '', '1', '20', '415');
INSERT INTO `tp_cates` VALUES ('420', '套装', '套装', '', '', '1', '20', '415');
INSERT INTO `tp_cates` VALUES ('421', '口腔护理', '口腔护理', '', '', '1', '20', '18');
INSERT INTO `tp_cates` VALUES ('422', '牙膏/牙粉', '牙膏/牙粉', '', '', '1', '20', '421');
INSERT INTO `tp_cates` VALUES ('423', '牙刷/牙线', '牙刷/牙线', '', '', '1', '20', '421');
INSERT INTO `tp_cates` VALUES ('424', '漱口水', '漱口水', '', '', '1', '20', '421');
INSERT INTO `tp_cates` VALUES ('425', '套装', '套装', '', '', '1', '20', '421');
INSERT INTO `tp_cates` VALUES ('426', '香水彩妆', '香水彩妆', '', '', '1', '20', '18');
INSERT INTO `tp_cates` VALUES ('430', '眼部', '眼部', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('428', '底妆', '底妆', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('429', '腮红', '腮红', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('431', '香水', '香水', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('432', '美甲', '美甲', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('433', '精油放疗', '精油放疗', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('434', '假睫毛', '假睫毛', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('435', '彩妆套装', '彩妆套装', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('436', '蜜粉', '蜜粉', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('437', '遮瑕', '遮瑕', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('438', '化妆棉', '化妆棉', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('439', '双眼皮贴', '双眼皮贴', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('440', '高光阴影', '高光阴影', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('441', '隔离', '隔离', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('442', '粉饼', '粉饼', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('443', '气垫BB', '气垫BB', '', '', '1', '20', '426');
INSERT INTO `tp_cates` VALUES ('444', '女性护理', '女性护理', '', '', '1', '20', '18');
INSERT INTO `tp_cates` VALUES ('445', '卫生巾', '卫生巾', '', '', '1', '20', '444');
INSERT INTO `tp_cates` VALUES ('446', '卫生护垫', '卫生护垫', '', '', '1', '20', '444');
INSERT INTO `tp_cates` VALUES ('447', '私密护理', '私密护理', '', '', '1', '20', '444');
INSERT INTO `tp_cates` VALUES ('448', '脱毛膏', '脱毛膏', '', '', '1', '20', '444');
INSERT INTO `tp_cates` VALUES ('449', '清洁用品', '清洁用品', '', '', '1', '20', '18');
INSERT INTO `tp_cates` VALUES ('450', '纸品湿巾', '纸品湿巾', '', '', '1', '20', '449');
INSERT INTO `tp_cates` VALUES ('451', '家庭清洁', '家庭清洁', '', '', '1', '20', '449');
INSERT INTO `tp_cates` VALUES ('452', '衣物清洁', '', '', '', '1', '20', '449');
INSERT INTO `tp_cates` VALUES ('453', '清洁工具', '', '', '', '1', '20', '449');
INSERT INTO `tp_cates` VALUES ('454', '一次性用品', '一次性用品', '', '', '1', '20', '449');
INSERT INTO `tp_cates` VALUES ('455', '驱蚊用品', '驱蚊用品', '', '', '1', '20', '449');
INSERT INTO `tp_cates` VALUES ('456', '皮具护理', '皮具护理', '', '', '1', '20', '449');
INSERT INTO `tp_cates` VALUES ('457', '鞋靴', '鞋靴', '', '', '1', '20', '33');
INSERT INTO `tp_cates` VALUES ('458', '箱包', '箱包', '', '', '1', '20', '33');
INSERT INTO `tp_cates` VALUES ('459', '钱包', '钱包', '', '', '1', '20', '33');
INSERT INTO `tp_cates` VALUES ('460', '服饰', '服饰', '', '', '1', '20', '33');
INSERT INTO `tp_cates` VALUES ('461', '腰带', '腰带', '', '', '1', '20', '33');
INSERT INTO `tp_cates` VALUES ('462', '太阳镜/眼镜框', '太阳镜/眼镜框', '', '', '1', '20', '33');
INSERT INTO `tp_cates` VALUES ('463', '饰品', '饰品', '', '', '1', '20', '33');
INSERT INTO `tp_cates` VALUES ('464', '配件', '配件', '', '', '1', '20', '33');
INSERT INTO `tp_cates` VALUES ('465', '拉杆箱/拉杆包', '拉杆箱/拉杆包', '', '', '1', '20', '34');
INSERT INTO `tp_cates` VALUES ('466', '旅行包', '旅行包', '', '', '1', '20', '34');
INSERT INTO `tp_cates` VALUES ('467', '电脑包', '电脑包', '', '', '1', '20', '34');
INSERT INTO `tp_cates` VALUES ('468', '休闲运动包', '休闲运动包', '', '', '1', '20', '34');
INSERT INTO `tp_cates` VALUES ('469', '相机包', '相机包', '', '', '1', '20', '34');
INSERT INTO `tp_cates` VALUES ('470', '腰包/胸包', '腰包/胸包', '', '', '1', '20', '34');
INSERT INTO `tp_cates` VALUES ('471', '登山包', '登山包', '', '', '1', '20', '34');
INSERT INTO `tp_cates` VALUES ('472', '旅行配件', '旅行配件', '', '', '1', '20', '34');
INSERT INTO `tp_cates` VALUES ('473', '书包', '书包', '', '', '1', '20', '34');
INSERT INTO `tp_cates` VALUES ('474', '妈咪包', '妈咪包', '', '', '1', '20', '34');
INSERT INTO `tp_cates` VALUES ('475', '流行男鞋', '流行男鞋', '', '', '1', '20', '31');
INSERT INTO `tp_cates` VALUES ('476', '休闲鞋', '休闲鞋', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('477', '凉鞋/沙滩鞋', '凉鞋/沙滩鞋', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('478', '帆布鞋', '帆布鞋', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('479', '商务休闲鞋', '商务休闲鞋', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('480', '正装鞋', '正装鞋', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('481', '增高鞋', '增高鞋', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('482', '拖鞋/人字拖', '拖鞋/人字拖', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('483', '工装鞋', '工装鞋', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('484', '男靴', '男靴', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('485', '传统布鞋', '传统布鞋', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('486', '功能鞋', '功能鞋', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('487', '鞋配件', '鞋配件', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('488', '定制鞋', '定制鞋', '', '', '1', '20', '475');
INSERT INTO `tp_cates` VALUES ('489', '时尚女鞋', '时尚女鞋', '', '', '1', '20', '31');
INSERT INTO `tp_cates` VALUES ('490', '凉鞋', '凉鞋', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('491', '单鞋', '单鞋', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('492', '高跟鞋', '高跟鞋', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('493', '坡跟鞋', '坡跟鞋', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('494', '松糕鞋', '松糕鞋', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('495', '鱼嘴鞋', '鱼嘴鞋', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('496', '休闲鞋', '休闲鞋', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('497', '帆布鞋', '帆布鞋', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('498', '拖鞋/人字拖', '拖鞋/人字拖', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('499', '妈妈鞋', '妈妈鞋', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('500', '防水台', '防水台', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('501', '雨鞋/雨靴', '雨鞋/雨靴', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('502', '内增高', '内增高', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('503', '布鞋/绣花鞋', '', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('504', '女靴', '女靴', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('505', '雪地靴', '雪地靴', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('506', '踝靴', '踝靴', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('507', '马丁靴', '马丁靴', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('508', '鞋配件', '鞋配件', '', '', '1', '20', '489');
INSERT INTO `tp_cates` VALUES ('509', '潮流女包', '潮流女包', '', '', '1', '20', '31');
INSERT INTO `tp_cates` VALUES ('510', '单肩包', '单肩包', '', '', '1', '20', '509');
INSERT INTO `tp_cates` VALUES ('511', '手提包', '手提包', '', '', '1', '20', '509');
INSERT INTO `tp_cates` VALUES ('512', '斜跨包', '斜跨包', '', '', '1', '20', '509');
INSERT INTO `tp_cates` VALUES ('513', '双肩包', '双肩包', '', '', '1', '20', '509');
INSERT INTO `tp_cates` VALUES ('514', '钱包', '钱包', '', '', '1', '20', '509');
INSERT INTO `tp_cates` VALUES ('515', '手拿包/晚宴包', '手拿包/晚宴包', '', '', '1', '20', '509');
INSERT INTO `tp_cates` VALUES ('516', '卡包/零钱包', '卡包/零钱包', '', '', '1', '20', '509');
INSERT INTO `tp_cates` VALUES ('517', '钥匙包', '钥匙包', '', '', '1', '20', '509');
INSERT INTO `tp_cates` VALUES ('518', '精品男包', '精品男包', '', '', '1', '20', '31');
INSERT INTO `tp_cates` VALUES ('519', '商务公文包', '商务公文包', '', '', '1', '20', '518');
INSERT INTO `tp_cates` VALUES ('520', '单肩/斜跨包', '单肩/斜跨包', '', '', '1', '20', '518');
INSERT INTO `tp_cates` VALUES ('521', '男生手包', '男生手包', '', '', '1', '20', '518');
INSERT INTO `tp_cates` VALUES ('522', '双肩包', '双肩包', '', '', '1', '20', '518');
INSERT INTO `tp_cates` VALUES ('523', '钱包/卡包', '钱包/卡包', '', '', '1', '20', '518');
INSERT INTO `tp_cates` VALUES ('524', '钥匙包', '钥匙包', '', '', '1', '20', '518');
INSERT INTO `tp_cates` VALUES ('525', '钟表', '钟表', '', '', '1', '20', '31');
INSERT INTO `tp_cates` VALUES ('526', '男表', '男表', '', '', '1', '20', '525');
INSERT INTO `tp_cates` VALUES ('527', '女表', '女表', '', '', '1', '20', '525');
INSERT INTO `tp_cates` VALUES ('528', '儿童表', '儿童表', '', '', '1', '20', '525');
INSERT INTO `tp_cates` VALUES ('529', '座钟挂钟', '座钟挂钟', '', '', '1', '20', '525');

-- -----------------------------
-- Table structure for `tp_cates_words`
-- -----------------------------
DROP TABLE IF EXISTS `tp_cates_words`;
CREATE TABLE `tp_cates_words` (
  `cw_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cw_cates_id` mediumint(9) NOT NULL COMMENT '关联的顶级栏目id',
  `cw_word` varchar(60) NOT NULL COMMENT '词汇',
  `cw_linkurl` varchar(60) NOT NULL COMMENT '链接地址',
  PRIMARY KEY (`cw_id`),
  KEY `cw_cates_id` (`cw_cates_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_cates_words`
-- -----------------------------
INSERT INTO `tp_cates_words` VALUES ('1', '1', '品牌日', '');
INSERT INTO `tp_cates_words` VALUES ('2', '1', '家电城', '');
INSERT INTO `tp_cates_words` VALUES ('3', '1', '智能生活馆', '');
INSERT INTO `tp_cates_words` VALUES ('4', '1', '京东净化馆', '');
INSERT INTO `tp_cates_words` VALUES ('5', '1', '京东帮服务店', '');
INSERT INTO `tp_cates_words` VALUES ('6', '1', '值得买精选', '');
INSERT INTO `tp_cates_words` VALUES ('7', '5', '手机频道', '');
INSERT INTO `tp_cates_words` VALUES ('8', '5', '网上营业厅', '');
INSERT INTO `tp_cates_words` VALUES ('9', '5', '配件城', '');
INSERT INTO `tp_cates_words` VALUES ('10', '5', '影像Club', '');
INSERT INTO `tp_cates_words` VALUES ('11', '5', '手机社区', '');
INSERT INTO `tp_cates_words` VALUES ('12', '5', '以旧换新', '');
INSERT INTO `tp_cates_words` VALUES ('13', '15', '本周热卖', '');
INSERT INTO `tp_cates_words` VALUES ('14', '15', '游戏部落', '');
INSERT INTO `tp_cates_words` VALUES ('15', '15', '智能社区', '');
INSERT INTO `tp_cates_words` VALUES ('16', '15', 'GAME+', '');
INSERT INTO `tp_cates_words` VALUES ('17', '15', '装机大师', '');
INSERT INTO `tp_cates_words` VALUES ('18', '15', '办公生活馆', '');
INSERT INTO `tp_cates_words` VALUES ('19', '16', '家装城', '');
INSERT INTO `tp_cates_words` VALUES ('20', '16', '居家日用', '');
INSERT INTO `tp_cates_words` VALUES ('21', '16', '精品家具', '');
INSERT INTO `tp_cates_words` VALUES ('22', '16', '家装建材', '');
INSERT INTO `tp_cates_words` VALUES ('23', '16', '厨房达人', '');
INSERT INTO `tp_cates_words` VALUES ('24', '16', '猫猫狗狗', '');
INSERT INTO `tp_cates_words` VALUES ('25', '17', '男装', '');
INSERT INTO `tp_cates_words` VALUES ('26', '17', '女装', '');
INSERT INTO `tp_cates_words` VALUES ('27', '17', '内衣', '');
INSERT INTO `tp_cates_words` VALUES ('28', '17', '国际品牌', '');
INSERT INTO `tp_cates_words` VALUES ('29', '18', '清洁用品', '');
INSERT INTO `tp_cates_words` VALUES ('30', '18', '美妆商城', '');
INSERT INTO `tp_cates_words` VALUES ('31', '18', '官方旗舰店', '');
INSERT INTO `tp_cates_words` VALUES ('32', '18', '美妆特卖', '');
INSERT INTO `tp_cates_words` VALUES ('33', '18', '妆比社', '');
INSERT INTO `tp_cates_words` VALUES ('34', '18', '全球购美妆', '');
INSERT INTO `tp_cates_words` VALUES ('35', '31', '男鞋', '');
INSERT INTO `tp_cates_words` VALUES ('36', '31', '女鞋', '');
INSERT INTO `tp_cates_words` VALUES ('37', '31', '箱包', '');
INSERT INTO `tp_cates_words` VALUES ('38', '31', '钟表', '');
INSERT INTO `tp_cates_words` VALUES ('39', '31', '奢侈品', '');
INSERT INTO `tp_cates_words` VALUES ('40', '31', '女包', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=171 DEFAULT CHARSET=utf8;

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
INSERT INTO `tp_commodity` VALUES ('165', 'adfdfasfd', '1556775849983344', '', '', '', '', '0.00', '0.00', '1', '1', '112', '0', '', '0.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('166', 'adfdfasfd', '1556775975524820', '', '', '', '', '0.00', '0.00', '1', '1', '112', '0', '', '0.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('167', 'adfdfasfd', '1556776057476942', '', '', '', '', '0.00', '0.00', '1', '1', '112', '0', '', '0.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('168', 'adfdfasfd', '1556776090142171', '', '', '', '', '0.00', '0.00', '1', '1', '112', '0', '', '0.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('169', 'zxcv', '1556776161383517', '', '', '', '', '0.00', '0.00', '1', '2', '114', '0', '', '0.00', 'kg');
INSERT INTO `tp_commodity` VALUES ('170', '', '1556786568649061', '', '', '', '', '0.00', '0.00', '1', '0', '0', '0', '', '0.00', 'kg');

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
  `rec_name` mediumtext NOT NULL COMMENT '推荐位名称',
  `rec_type` tinyint(1) NOT NULL COMMENT '推荐位类型：1.商品2.分类',
  PRIMARY KEY (`rec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- -----------------------------
-- Records of `tp_recpos`
-- -----------------------------
INSERT INTO `tp_recpos` VALUES ('1', '限时抢购', '1');
INSERT INTO `tp_recpos` VALUES ('2', '热卖商品', '1');
INSERT INTO `tp_recpos` VALUES ('4', '最新商品', '1');
INSERT INTO `tp_recpos` VALUES ('5', '首页推荐', '2');
INSERT INTO `tp_recpos` VALUES ('6', '推荐分类', '2');

-- -----------------------------
-- Table structure for `tp_recpos_comm`
-- -----------------------------
DROP TABLE IF EXISTS `tp_recpos_comm`;
CREATE TABLE `tp_recpos_comm` (
  `recpos_id` smallint(6) unsigned NOT NULL,
  `commodity_id` smallint(6) unsigned NOT NULL,
  `recpos_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '商品类型：1.商品 2.商品分类'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_recpos_comm`
-- -----------------------------
INSERT INTO `tp_recpos_comm` VALUES ('2', '168', '1');
INSERT INTO `tp_recpos_comm` VALUES ('1', '168', '1');
INSERT INTO `tp_recpos_comm` VALUES ('2', '170', '1');
INSERT INTO `tp_recpos_comm` VALUES ('1', '170', '1');
INSERT INTO `tp_recpos_comm` VALUES ('1', '169', '1');
INSERT INTO `tp_recpos_comm` VALUES ('5', '22', '2');
INSERT INTO `tp_recpos_comm` VALUES ('2', '169', '1');
INSERT INTO `tp_recpos_comm` VALUES ('4', '168', '1');

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
