-- -----------------------------
-- Think MySQL Data Transfer 
-- 
-- Host     : 127.0.0.1
-- Port     : 
-- Database : tested
-- 
-- Part : #1
-- Date : 2019-05-11 19:49:14
-- -----------------------------

SET FOREIGN_KEY_CHECKS = 0;


-- -----------------------------
-- Table structure for `sheet2`
-- -----------------------------
DROP TABLE IF EXISTS `sheet2`;
CREATE TABLE `sheet2` (
  `品牌日` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `sheet2`
-- -----------------------------
INSERT INTO `sheet2` VALUES ('品牌日');
INSERT INTO `sheet2` VALUES ('家电城');
INSERT INTO `sheet2` VALUES ('智能生活馆');
INSERT INTO `sheet2` VALUES ('京东净化馆');
INSERT INTO `sheet2` VALUES ('京东帮服务店');
INSERT INTO `sheet2` VALUES ('值得买精选');
INSERT INTO `sheet2` VALUES ('手机频道');
INSERT INTO `sheet2` VALUES ('网上营业厅');
INSERT INTO `sheet2` VALUES ('配件城');
INSERT INTO `sheet2` VALUES ('影像Club');
INSERT INTO `sheet2` VALUES ('手机社区');
INSERT INTO `sheet2` VALUES ('以旧换新');
INSERT INTO `sheet2` VALUES ('本周热卖');
INSERT INTO `sheet2` VALUES ('游戏部落');
INSERT INTO `sheet2` VALUES ('智能社区');
INSERT INTO `sheet2` VALUES ('GAME+');
INSERT INTO `sheet2` VALUES ('装机大师');
INSERT INTO `sheet2` VALUES ('办公生活馆');
INSERT INTO `sheet2` VALUES ('家装城');
INSERT INTO `sheet2` VALUES ('居家日用');
INSERT INTO `sheet2` VALUES ('精品家具');
INSERT INTO `sheet2` VALUES ('家装建材');
INSERT INTO `sheet2` VALUES ('厨房达人');
INSERT INTO `sheet2` VALUES ('猫猫狗狗');
INSERT INTO `sheet2` VALUES ('男装');
INSERT INTO `sheet2` VALUES ('女装');
INSERT INTO `sheet2` VALUES ('内衣');
INSERT INTO `sheet2` VALUES ('国际品牌');
INSERT INTO `sheet2` VALUES ('男鞋');
INSERT INTO `sheet2` VALUES ('女鞋');
INSERT INTO `sheet2` VALUES ('箱包');
INSERT INTO `sheet2` VALUES ('钟表');
INSERT INTO `sheet2` VALUES ('奢侈品');
INSERT INTO `sheet2` VALUES ('女包');
INSERT INTO `sheet2` VALUES ('清洁用品');
INSERT INTO `sheet2` VALUES ('美妆商城');
INSERT INTO `sheet2` VALUES ('官方旗舰店');
INSERT INTO `sheet2` VALUES ('美妆特卖');
INSERT INTO `sheet2` VALUES ('妆比社');
INSERT INTO `sheet2` VALUES ('全球购美妆');

-- -----------------------------
-- Table structure for `sheet3`
-- -----------------------------
DROP TABLE IF EXISTS `sheet3`;
CREATE TABLE `sheet3` (
  `1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `sheet3`
-- -----------------------------
INSERT INTO `sheet3` VALUES ('1');
INSERT INTO `sheet3` VALUES ('1');
INSERT INTO `sheet3` VALUES ('1');
INSERT INTO `sheet3` VALUES ('1');
INSERT INTO `sheet3` VALUES ('1');
INSERT INTO `sheet3` VALUES ('1');
INSERT INTO `sheet3` VALUES ('2');
INSERT INTO `sheet3` VALUES ('2');
INSERT INTO `sheet3` VALUES ('2');
INSERT INTO `sheet3` VALUES ('2');
INSERT INTO `sheet3` VALUES ('2');
INSERT INTO `sheet3` VALUES ('2');
INSERT INTO `sheet3` VALUES ('3');
INSERT INTO `sheet3` VALUES ('3');
INSERT INTO `sheet3` VALUES ('3');
INSERT INTO `sheet3` VALUES ('3');
INSERT INTO `sheet3` VALUES ('3');
INSERT INTO `sheet3` VALUES ('3');
INSERT INTO `sheet3` VALUES ('4');
INSERT INTO `sheet3` VALUES ('4');
INSERT INTO `sheet3` VALUES ('4');
INSERT INTO `sheet3` VALUES ('4');
INSERT INTO `sheet3` VALUES ('4');
INSERT INTO `sheet3` VALUES ('4');
INSERT INTO `sheet3` VALUES ('5');
INSERT INTO `sheet3` VALUES ('5');
INSERT INTO `sheet3` VALUES ('5');
INSERT INTO `sheet3` VALUES ('5');
INSERT INTO `sheet3` VALUES ('6');
INSERT INTO `sheet3` VALUES ('6');
INSERT INTO `sheet3` VALUES ('6');
INSERT INTO `sheet3` VALUES ('6');
INSERT INTO `sheet3` VALUES ('6');
INSERT INTO `sheet3` VALUES ('6');
INSERT INTO `sheet3` VALUES ('7');
INSERT INTO `sheet3` VALUES ('7');
INSERT INTO `sheet3` VALUES ('7');
INSERT INTO `sheet3` VALUES ('7');
INSERT INTO `sheet3` VALUES ('7');
INSERT INTO `sheet3` VALUES ('7');

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
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_brand`
-- -----------------------------
INSERT INTO `tp_brand` VALUES ('1', '金士顿', '', '20190504\\1490039286075654490.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('2', '同庆和堂', '', '20190504\\1490072850306019115.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('3', 'ELLE HOME', '', '20190504\\1490072313895957648.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('4', '她他/tata', '', '20190504\\1490072329183966195.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('5', '梦特娇', '', '20190504\\1490072344340492758.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('6', '阿迪达斯', '', '20190504\\1490072384627679069.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('7', '猫人', '', '20190504\\1490072399542595828.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('8', 'Dior', '', '20190504\\1490072417755830176.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('9', '同仁堂', '', '20190504\\1490072746651935979.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('10', '喜瑞', '', '20190504\\1490072756032175204.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('11', '汤臣倍健', '', '20190504\\1490072777790374054.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('12', '养生堂', '', '20190504\\1490072787223453617.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('13', '北大荒', '', '20190504\\1490072813729175306.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('14', '斯伯丁', '', '20190504\\1490072889090025069.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('15', '皮尔瑜伽', '', '20190504\\1490072898345358625.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('16', '乔山', '', '20190504\\1490072918339853569.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('17', '皮克朋', '', '20190504\\1490072931218635674.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('18', '欧亚马', '', '20190504\\1490072941526335126.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('19', '玛克家纺', '', '20190504\\1490072971610241726.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('20', '三星', '', '20190504\\1490296477657287023.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('21', '开普特', '', '20190504\\1490072981305868823.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('22', '迪士尼', '', '20190504\\1490073717776504773.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('23', '哥弟', '', '20190504\\1490073675778205608.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('24', '工银瑞信', '', '20190504\\1490073661335207841.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('25', '鸿星尔克', '', '20190504\\1490073591535005714.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('26', '华帝', '', '20190504\\1490073577683159021.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('27', '姬芮', '', '20190504\\1490073561018734078.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('28', '匡威', '', '20190504\\1490073529881448780.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('29', '耐克', '', '20190504\\1490073338357697604.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('30', '佳沪数码-华为', '', '20190504\\1490171981556005380.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('31', '苹果', '', '20190504\\1490073009638652059.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('32', '伊莱克斯', '', '20190504\\1490073109529817869.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('33', '帮宝适', '', '20190504\\1490075108722576375.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('34', '海飞丝', '', '20190504\\1490073648356663196.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('35', '海富通基金', '', '20190504\\1490227603513332911.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('36', '合生元', '', '20190504\\1490073616154966189.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('37', '李医生', '', '20190504\\1490227784119952387.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('38', '途牛', '', '20190504\\1490075080126940602.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('39', '磨铁图书', '', '20190504\\1490228262050567438.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('40', '养生堂', '', '20190504\\1490072787223453617.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('41', '一品玉', '', '20190504\\1490072835176110718.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('42', '亿健', '', '20190504\\1490073971637187496.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('43', 'ZIPPO', '', '20190504\\1490073919711003101.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('44', '帮宝适', '', '20190504\\1490075108722576375.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('45', '匡威', '', '20190504\\1490073529881448780.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('46', '美的', '', '20190504\\1490074901892372216.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('47', '魅族', '', '20190504\\1490073359611343586.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('48', '同庆和堂', '', '20190504\\1490072850306019115.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('49', 'esprit', '', '20190504\\1490071974970349584.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('50', 'ELLE HOME', '', '20190504\\1490072313895957648.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('51', '金利来', '', '20190504\\1490072373278367315.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('52', 'justyle', '', '20190504\\1490072677495061584.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('53', '李宁', '', '20190504\\1490072694695600078.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('54', '喜瑞', '', '20190504\\1490072756032175204.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('55', '康比特', '', '20190504\\1490072765604121481.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('56', '健安喜', '', '20190504\\1490072804442637685.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('57', '金奥力', '', '20190504\\1490072823106532144.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('58', '乐力', '', '20190504\\1490072860522023692.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('59', '金史密斯', '', '20190504\\1490072879222701895.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('60', '斯伯丁', '', '20190504\\1490072889090025069.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('61', '皮尔瑜伽', '', '20190504\\1490072898345358625.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('62', '乔山', '', '20190504\\1490072918339853569.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('63', '皮克朋', '', '20190504\\1490072931218635674.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('64', 'Masentek', '', '20190504\\1490072950580851309.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('65', '开普特', '', '20190504\\1490072981305868823.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('66', '三星', '', '20190504\\1490072993409028193.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('67', '苹果', '', '20190504\\1490073009638652059.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('68', '同庆和堂', '', '20190504\\1490072850306019115.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('69', '同仁堂', '', '20190504\\1490072746651935979.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('70', '喜瑞', '', '20190504\\1490072756032175204.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('71', '汤臣倍健', '', '20190504\\1490072777790374054.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('72', '养生堂', '', '20190504\\1490072787223453617.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('73', '一品玉', '', '20190504\\1490072835176110718.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('74', '西门子', '', '20190504\\1490074006660107941.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('75', '伊莱克斯', '', '20190504\\1490073109529817869.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('76', '亿健', '', '20190504\\1490073971637187496.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('77', 'TP-LINL', '', '20190504\\1490074180745676140.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('78', 'ZIPPO', '', '20190504\\1490073919711003101.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('79', '阿玛尼', '', '20190504\\1490073900838296364.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('80', '达利园', '', '20190504\\1490073731822160672.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('81', '迪士尼', '', '20190504\\1490073717776504773.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('82', '飞科', '', '20190504\\1490073705755280994.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('83', '匡威', '', '20190504\\1490073529881448780.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('84', '途牛', '', '20190504\\1490075080126940602.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('85', '文轩网', '', '20190504\\1490073253749057076.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('86', '新百伦', '', '20190504\\1490074308773778697.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('87', 'justyle', '', '20190504\\1490072677495061584.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('88', '宝姿', '', '20190504\\1490072685002270742.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('89', '欧亚马', '', '20190504\\1490072941526335126.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('90', 'NINE WEST', '', '20190504\\1490073930435480283.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('91', '飞利浦', '', '20190504\\1490073692774466710.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('92', '麦斯威尔', '', '20190504\\1490228075580091113.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('93', '美的', '', '20190504\\1490074901892372216.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('94', '耐克', '', '20190504\\1490073338357697604.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('95', '佳沪数码-华为', '', '20190504\\1490171981556005380.jpg', '', '50', '1');

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
INSERT INTO `tp_cates` VALUES ('1', '家用电器', '', '', '', '1', '50', '0');
INSERT INTO `tp_cates` VALUES ('2', '手机 数码 通信', '', '', '', '2', '50', '0');
INSERT INTO `tp_cates` VALUES ('3', '电脑、办公', '', '', '', '3', '50', '0');
INSERT INTO `tp_cates` VALUES ('4', '家居、家具、家装、厨具', '', '', '', '4', '50', '0');
INSERT INTO `tp_cates` VALUES ('5', '男装、女装、内衣', '', '', '', '5', '50', '0');
INSERT INTO `tp_cates` VALUES ('6', '鞋靴、箱包、钟表、奢侈品', '', '', '', '6', '50', '0');
INSERT INTO `tp_cates` VALUES ('7', '个人化妆、清洁用品', '', '', '', '7', '50', '0');
INSERT INTO `tp_cates` VALUES ('8', '大家电', '', '', '', '8', '50', '1');
INSERT INTO `tp_cates` VALUES ('9', '生活电器', '', '', '', '9', '50', '1');
INSERT INTO `tp_cates` VALUES ('10', '智能设备', '', '', '', '10', '50', '2');
INSERT INTO `tp_cates` VALUES ('11', '数码配件', '', '', '', '11', '50', '2');
INSERT INTO `tp_cates` VALUES ('12', '服务产品', '', '', '', '12', '50', '3');
INSERT INTO `tp_cates` VALUES ('13', '电脑整机', '', '', '', '13', '50', '3');
INSERT INTO `tp_cates` VALUES ('14', '厨具', '', '', '', '14', '50', '4');
INSERT INTO `tp_cates` VALUES ('15', '家装建材', '', '', '', '15', '50', '4');
INSERT INTO `tp_cates` VALUES ('16', '女装', '', '', '', '16', '50', '5');
INSERT INTO `tp_cates` VALUES ('17', '男装', '', '', '', '17', '50', '5');
INSERT INTO `tp_cates` VALUES ('18', '奢侈品', '', '', '', '18', '50', '6');
INSERT INTO `tp_cates` VALUES ('19', '功能箱包', '', '', '', '19', '50', '6');
INSERT INTO `tp_cates` VALUES ('20', '面部护肤', '', '', '', '20', '50', '7');
INSERT INTO `tp_cates` VALUES ('21', '洗发护发', '', '', '', '21', '50', '7');
INSERT INTO `tp_cates` VALUES ('22', '厨房电器', '', '', '', '22', '50', '1');
INSERT INTO `tp_cates` VALUES ('23', '个护健康', '', '', '', '23', '50', '1');
INSERT INTO `tp_cates` VALUES ('24', '五金家装', '', '', '', '24', '50', '1');
INSERT INTO `tp_cates` VALUES ('25', '平板电视', '', '', '', '25', '50', '8');
INSERT INTO `tp_cates` VALUES ('26', '电风扇', '', '', '', '26', '50', '9');
INSERT INTO `tp_cates` VALUES ('27', '电饭煲', '', '', '', '27', '50', '22');
INSERT INTO `tp_cates` VALUES ('28', '按摩椅', '', '', '', '28', '50', '23');
INSERT INTO `tp_cates` VALUES ('29', '电动工具', '', '', '', '29', '50', '24');
INSERT INTO `tp_cates` VALUES ('30', '手机通讯', '', '', '', '30', '50', '2');
INSERT INTO `tp_cates` VALUES ('31', '运营商', '', '', '', '31', '50', '2');
INSERT INTO `tp_cates` VALUES ('32', '手机配件', '', '', '', '32', '50', '2');
INSERT INTO `tp_cates` VALUES ('33', '摄影摄像', '', '', '', '33', '50', '2');
INSERT INTO `tp_cates` VALUES ('34', '时尚影音', '', '', '', '34', '50', '2');
INSERT INTO `tp_cates` VALUES ('35', '智能手环', '', '', '', '35', '50', '10');
INSERT INTO `tp_cates` VALUES ('36', '存储卡', '', '', '', '36', '50', '11');
INSERT INTO `tp_cates` VALUES ('37', '手机', '', '', '', '37', '50', '30');
INSERT INTO `tp_cates` VALUES ('38', '购机送费', '', '', '', '38', '50', '31');
INSERT INTO `tp_cates` VALUES ('39', '电池', '', '', '', '39', '50', '32');
INSERT INTO `tp_cates` VALUES ('40', '数码相机', '', '', '', '40', '50', '33');
INSERT INTO `tp_cates` VALUES ('41', '耳机/耳麦', '', '', '', '41', '50', '34');
INSERT INTO `tp_cates` VALUES ('42', '电脑配件', '', '', '', '42', '50', '3');
INSERT INTO `tp_cates` VALUES ('43', '外设产品', '', '', '', '43', '50', '3');
INSERT INTO `tp_cates` VALUES ('44', '网络产品', '', '', '', '44', '50', '3');
INSERT INTO `tp_cates` VALUES ('45', '办公打印', '', '', '', '45', '50', '3');
INSERT INTO `tp_cates` VALUES ('46', '上门服务', '', '', '', '46', '50', '12');
INSERT INTO `tp_cates` VALUES ('47', '笔记本', '', '', '', '47', '50', '13');
INSERT INTO `tp_cates` VALUES ('48', 'CPU', '', '', '', '48', '50', '42');
INSERT INTO `tp_cates` VALUES ('49', '鼠标', '', '', '', '49', '50', '43');
INSERT INTO `tp_cates` VALUES ('50', '路由器', '', '', '', '50', '50', '44');
INSERT INTO `tp_cates` VALUES ('51', '打印机', '', '', '', '51', '50', '45');
INSERT INTO `tp_cates` VALUES ('52', '家纺', '', '', '', '52', '50', '4');
INSERT INTO `tp_cates` VALUES ('53', '家具', '', '', '', '53', '50', '4');
INSERT INTO `tp_cates` VALUES ('54', '灯具', '', '', '', '54', '50', '4');
INSERT INTO `tp_cates` VALUES ('55', '生活日用', '', '', '', '55', '50', '4');
INSERT INTO `tp_cates` VALUES ('56', '烹饪锅具', '', '', '', '56', '50', '14');
INSERT INTO `tp_cates` VALUES ('57', '灯饰照明', '', '', '', '57', '50', '15');
INSERT INTO `tp_cates` VALUES ('58', '床品套件', '', '', '', '58', '50', '52');
INSERT INTO `tp_cates` VALUES ('59', '卧室家具', '', '', '', '59', '50', '53');
INSERT INTO `tp_cates` VALUES ('60', '台灯', '', '', '', '60', '50', '54');
INSERT INTO `tp_cates` VALUES ('61', '收纳用品', '', '', '', '61', '50', '55');
INSERT INTO `tp_cates` VALUES ('62', '服饰配件', '', '', '', '62', '50', '5');
INSERT INTO `tp_cates` VALUES ('63', '内衣', '', '', '', '63', '50', '5');
INSERT INTO `tp_cates` VALUES ('64', '运动户外', '', '', '', '64', '50', '5');
INSERT INTO `tp_cates` VALUES ('65', '连衣裙', '', '', '', '65', '50', '16');
INSERT INTO `tp_cates` VALUES ('66', 'T恤', '', '', '', '66', '50', '17');
INSERT INTO `tp_cates` VALUES ('67', '配饰', '', '', '', '67', '50', '62');
INSERT INTO `tp_cates` VALUES ('68', '内衣配件', '', '', '', '68', '50', '63');
INSERT INTO `tp_cates` VALUES ('69', '跑步运动', '', '', '', '69', '50', '64');
INSERT INTO `tp_cates` VALUES ('70', '流行男鞋', '', '', '', '70', '50', '6');
INSERT INTO `tp_cates` VALUES ('71', '时尚女鞋', '', '', '', '71', '50', '6');
INSERT INTO `tp_cates` VALUES ('72', '潮流女包', '', '', '', '72', '50', '6');
INSERT INTO `tp_cates` VALUES ('73', '精品男包', '', '', '', '73', '50', '6');
INSERT INTO `tp_cates` VALUES ('74', '钟表', '', '', '', '74', '50', '6');
INSERT INTO `tp_cates` VALUES ('75', '鞋靴', '', '', '', '75', '50', '18');
INSERT INTO `tp_cates` VALUES ('76', '拉杆箱/拉杆包', '', '', '', '76', '50', '19');
INSERT INTO `tp_cates` VALUES ('77', '休闲鞋', '', '', '', '77', '50', '70');
INSERT INTO `tp_cates` VALUES ('78', '凉鞋', '', '', '', '78', '50', '71');
INSERT INTO `tp_cates` VALUES ('79', '单肩包', '', '', '', '79', '50', '72');
INSERT INTO `tp_cates` VALUES ('80', '商务公文包', '', '', '', '80', '50', '73');
INSERT INTO `tp_cates` VALUES ('81', '男表', '', '', '', '81', '50', '74');
INSERT INTO `tp_cates` VALUES ('82', '身体护肤', '', '', '', '82', '50', '7');
INSERT INTO `tp_cates` VALUES ('83', '口腔护理', '', '', '', '83', '50', '7');
INSERT INTO `tp_cates` VALUES ('84', '香水彩妆', '', '', '', '84', '50', '7');
INSERT INTO `tp_cates` VALUES ('85', '女性护理', '', '', '', '85', '50', '7');
INSERT INTO `tp_cates` VALUES ('86', '清洁用品', '', '', '', '86', '50', '7');
INSERT INTO `tp_cates` VALUES ('87', '清洁', '', '', '', '87', '50', '20');
INSERT INTO `tp_cates` VALUES ('88', '洗发', '', '', '', '88', '50', '21');
INSERT INTO `tp_cates` VALUES ('89', '沐浴', '', '', '', '89', '50', '82');
INSERT INTO `tp_cates` VALUES ('90', '牙膏/牙粉', '', '', '', '90', '50', '83');
INSERT INTO `tp_cates` VALUES ('91', '香水', '', '', '', '91', '50', '84');
INSERT INTO `tp_cates` VALUES ('92', '卫生巾', '', '', '', '92', '50', '85');
INSERT INTO `tp_cates` VALUES ('93', '纸品湿巾', '', '', '', '93', '50', '86');
INSERT INTO `tp_cates` VALUES ('94', '空调', '', '', '', '94', '50', '8');
INSERT INTO `tp_cates` VALUES ('95', '冰箱', '', '', '', '95', '50', '8');
INSERT INTO `tp_cates` VALUES ('96', '洗衣机', '', '', '', '96', '50', '8');
INSERT INTO `tp_cates` VALUES ('97', '家庭影院', '', '', '', '97', '50', '8');
INSERT INTO `tp_cates` VALUES ('98', 'DVD', '', '', '', '98', '50', '8');
INSERT INTO `tp_cates` VALUES ('99', '迷你音响', '', '', '', '99', '50', '8');
INSERT INTO `tp_cates` VALUES ('100', '热水器', '', '', '', '100', '50', '8');
INSERT INTO `tp_cates` VALUES ('101', '冷吧/冰柜', '', '', '', '101', '50', '8');
INSERT INTO `tp_cates` VALUES ('102', '冷风扇', '', '', '', '102', '50', '9');
INSERT INTO `tp_cates` VALUES ('103', '净化器', '', '', '', '103', '50', '9');
INSERT INTO `tp_cates` VALUES ('104', '加湿器', '', '', '', '104', '50', '9');
INSERT INTO `tp_cates` VALUES ('105', '扫地机器人', '', '', '', '105', '50', '9');
INSERT INTO `tp_cates` VALUES ('106', '吸尘器', '', '', '', '106', '50', '9');
INSERT INTO `tp_cates` VALUES ('107', '插座', '', '', '', '107', '50', '9');
INSERT INTO `tp_cates` VALUES ('108', '电话机', '', '', '', '108', '50', '9');
INSERT INTO `tp_cates` VALUES ('109', '饮水机', '', '', '', '109', '50', '9');
INSERT INTO `tp_cates` VALUES ('110', '取暖电器', '', '', '', '110', '50', '9');
INSERT INTO `tp_cates` VALUES ('111', '净水设备', '', '', '', '111', '50', '9');
INSERT INTO `tp_cates` VALUES ('112', '干衣机', '', '', '', '112', '50', '9');
INSERT INTO `tp_cates` VALUES ('113', '收音机/录音机', '', '', '', '113', '50', '9');
INSERT INTO `tp_cates` VALUES ('114', '电器开关', '', '', '', '114', '50', '9');
INSERT INTO `tp_cates` VALUES ('115', '电压力锅', '', '', '', '115', '50', '22');
INSERT INTO `tp_cates` VALUES ('116', '豆浆机', '', '', '', '116', '50', '22');
INSERT INTO `tp_cates` VALUES ('117', '面包机', '', '', '', '117', '50', '22');
INSERT INTO `tp_cates` VALUES ('118', '咖啡机', '', '', '', '118', '50', '22');
INSERT INTO `tp_cates` VALUES ('119', '微波炉', '', '', '', '119', '50', '22');
INSERT INTO `tp_cates` VALUES ('120', '料理/榨汁机', '', '', '', '120', '50', '22');
INSERT INTO `tp_cates` VALUES ('121', '电烤箱', '', '', '', '121', '50', '22');
INSERT INTO `tp_cates` VALUES ('122', '电磁炉', '', '', '', '122', '50', '22');
INSERT INTO `tp_cates` VALUES ('123', '电饼铛/烧火盘', '', '', '', '123', '50', '22');
INSERT INTO `tp_cates` VALUES ('124', '煮蛋器', '', '', '', '124', '50', '22');
INSERT INTO `tp_cates` VALUES ('125', '酸奶机', '', '', '', '125', '50', '22');
INSERT INTO `tp_cates` VALUES ('126', '电水壶/热水瓶', '', '', '', '126', '50', '22');
INSERT INTO `tp_cates` VALUES ('127', '电饭盒', '', '', '', '127', '50', '22');
INSERT INTO `tp_cates` VALUES ('128', '其他厨房电器', '', '', '', '127', '50', '22');
INSERT INTO `tp_cates` VALUES ('129', '剃须刀', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('130', '脱毛器', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('131', '口腔护理', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('132', '电吹风', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('133', '美容器', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('134', '理发器', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('135', '按摩器', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('136', '足浴盆', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('137', '血压计', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('138', '健康秤/厨房秤', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('139', '血糖计', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('140', '计步器', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('141', '其他健康电器', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('142', '手动工具', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('143', '仪器', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('144', '仪表', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('145', '浴霸/排气扇', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('146', '灯具', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('147', 'LED灯', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('148', '洁身器', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('149', '水槽', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('150', '龙头', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('151', '沐浴花洒', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('152', '厨卫五金', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('153', '家具五金', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('154', '门铃', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('155', '监控安防', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('156', '智能手表', '', '', '', '127', '50', '10');
INSERT INTO `tp_cates` VALUES ('157', '智能眼镜', '', '', '', '127', '50', '10');
INSERT INTO `tp_cates` VALUES ('158', '运动跟踪器', '', '', '', '127', '50', '10');
INSERT INTO `tp_cates` VALUES ('159', '健康监测', '', '', '', '127', '50', '10');
INSERT INTO `tp_cates` VALUES ('160', '智能配饰', '', '', '', '127', '50', '10');
INSERT INTO `tp_cates` VALUES ('161', '智能家居', '', '', '', '127', '50', '10');
INSERT INTO `tp_cates` VALUES ('162', '体感车', '', '', '', '127', '50', '10');
INSERT INTO `tp_cates` VALUES ('163', '其他配件', '', '', '', '127', '50', '10');
INSERT INTO `tp_cates` VALUES ('164', '读卡器', '', '', '', '127', '50', '11');
INSERT INTO `tp_cates` VALUES ('165', '滤镜', '', '', '', '127', '50', '11');
INSERT INTO `tp_cates` VALUES ('166', '闪光灯/手柄', '', '', '', '127', '50', '11');
INSERT INTO `tp_cates` VALUES ('167', '相机包', '', '', '', '127', '50', '11');
INSERT INTO `tp_cates` VALUES ('168', '三脚架/云台', '', '', '', '127', '50', '11');
INSERT INTO `tp_cates` VALUES ('169', '相机清洁', '', '', '', '127', '50', '11');
INSERT INTO `tp_cates` VALUES ('170', '相机贴膜', '', '', '', '127', '50', '11');
INSERT INTO `tp_cates` VALUES ('171', '机身附件', '', '', '', '127', '50', '11');
INSERT INTO `tp_cates` VALUES ('172', '镜头附件', '', '', '', '127', '50', '11');
INSERT INTO `tp_cates` VALUES ('173', '电池/充电器', '', '', '', '127', '50', '11');
INSERT INTO `tp_cates` VALUES ('174', '移动电源', '', '', '', '127', '50', '11');
INSERT INTO `tp_cates` VALUES ('175', '对讲机', '', '', '', '127', '50', '30');
INSERT INTO `tp_cates` VALUES ('176', '0元购机', '', '', '', '127', '50', '31');
INSERT INTO `tp_cates` VALUES ('177', '选号入网', '', '', '', '127', '50', '31');
INSERT INTO `tp_cates` VALUES ('178', '蓝牙耳机', '', '', '', '127', '50', '32');
INSERT INTO `tp_cates` VALUES ('179', '充电器/数据线', '', '', '', '127', '50', '32');
INSERT INTO `tp_cates` VALUES ('180', '手机耳机', '', '', '', '127', '50', '32');
INSERT INTO `tp_cates` VALUES ('181', '贴膜', '', '', '', '127', '50', '32');
INSERT INTO `tp_cates` VALUES ('182', '存储卡', '', '', '', '127', '50', '32');
INSERT INTO `tp_cates` VALUES ('183', '保护套', '', '', '', '127', '50', '32');
INSERT INTO `tp_cates` VALUES ('184', '车载', '', '', '', '127', '50', '32');
INSERT INTO `tp_cates` VALUES ('185', 'iPhone配件', '', '', '', '127', '50', '32');
INSERT INTO `tp_cates` VALUES ('186', '创意配件', '', '', '', '127', '50', '32');
INSERT INTO `tp_cates` VALUES ('187', '便携/无线音箱', '', '', '', '127', '50', '32');
INSERT INTO `tp_cates` VALUES ('188', '手机饰品', '', '', '', '127', '50', '32');
INSERT INTO `tp_cates` VALUES ('189', '单电/微单相机', '', '', '', '127', '50', '33');
INSERT INTO `tp_cates` VALUES ('190', '单反相机', '', '', '', '127', '50', '33');
INSERT INTO `tp_cates` VALUES ('191', '拍立得', '', '', '', '127', '50', '33');
INSERT INTO `tp_cates` VALUES ('192', '运动相机', '', '', '', '127', '50', '33');
INSERT INTO `tp_cates` VALUES ('193', '摄像机', '', '', '', '127', '50', '33');
INSERT INTO `tp_cates` VALUES ('194', '镜头', '', '', '', '127', '50', '33');
INSERT INTO `tp_cates` VALUES ('195', '户外器材', '', '', '', '127', '50', '33');
INSERT INTO `tp_cates` VALUES ('196', '摄影器材', '', '', '', '127', '50', '33');
INSERT INTO `tp_cates` VALUES ('197', '音箱/音响', '', '', '', '127', '50', '34');
INSERT INTO `tp_cates` VALUES ('198', '麦克风', '', '', '', '127', '50', '34');
INSERT INTO `tp_cates` VALUES ('199', 'MP3/MP4', '', '', '', '127', '50', '34');
INSERT INTO `tp_cates` VALUES ('200', '数码相框', '', '', '', '127', '50', '34');
INSERT INTO `tp_cates` VALUES ('201', '专业音频', '', '', '', '127', '50', '34');
INSERT INTO `tp_cates` VALUES ('202', '苹果周边', '', '', '', '127', '50', '34');
INSERT INTO `tp_cates` VALUES ('203', '远程服务', '', '', '', '127', '50', '12');
INSERT INTO `tp_cates` VALUES ('204', '电脑软件', '', '', '', '127', '50', '12');
INSERT INTO `tp_cates` VALUES ('205', '超级本', '', '', '', '127', '50', '13');
INSERT INTO `tp_cates` VALUES ('206', '游戏本', '', '', '', '127', '50', '13');
INSERT INTO `tp_cates` VALUES ('207', '平板电脑', '', '', '', '127', '50', '13');
INSERT INTO `tp_cates` VALUES ('208', '平板电脑配件', '', '', '', '127', '50', '13');
INSERT INTO `tp_cates` VALUES ('209', '台式机', '', '', '', '127', '50', '13');
INSERT INTO `tp_cates` VALUES ('210', '笔记本配件', '', '', '', '127', '50', '13');
INSERT INTO `tp_cates` VALUES ('211', '服务器/工作站', '', '', '', '127', '50', '13');
INSERT INTO `tp_cates` VALUES ('212', '主板', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('213', '显卡', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('214', '硬盘', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('215', 'SSD固态硬盘', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('216', '内存', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('217', '机箱', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('218', '电源', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('219', '显示器', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('220', '刻录机/光驱', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('221', '声卡、扩展卡', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('222', '散热器', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('223', '装机配件', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('224', '组装电脑', '', '', '', '127', '50', '42');
INSERT INTO `tp_cates` VALUES ('225', '键盘', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('226', '游戏设备', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('227', 'U盘', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('228', '移动硬盘', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('229', '鼠标垫', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('230', '摄像头', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('231', '线缆', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('232', '电玩', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('233', '手写板', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('234', '外置盒', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('235', '电脑工具', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('236', '电脑清洁', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('237', 'UPS', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('238', '插座', '', '', '', '127', '50', '43');
INSERT INTO `tp_cates` VALUES ('239', '网卡', '', '', '', '127', '50', '44');
INSERT INTO `tp_cates` VALUES ('240', '交换机', '', '', '', '127', '50', '44');
INSERT INTO `tp_cates` VALUES ('241', '网络存储', '', '', '', '127', '50', '44');
INSERT INTO `tp_cates` VALUES ('242', '4G/3G上网', '', '', '', '127', '50', '44');
INSERT INTO `tp_cates` VALUES ('243', '网络盒子', '', '', '', '127', '50', '44');
INSERT INTO `tp_cates` VALUES ('244', '网络配件', '', '', '', '127', '50', '45');
INSERT INTO `tp_cates` VALUES ('245', '一体机', '', '', '', '127', '50', '45');
INSERT INTO `tp_cates` VALUES ('246', '投影机', '', '', '', '127', '50', '45');
INSERT INTO `tp_cates` VALUES ('247', '投影配件', '', '', '', '127', '50', '45');
INSERT INTO `tp_cates` VALUES ('248', '传真机', '', '', '', '127', '50', '45');
INSERT INTO `tp_cates` VALUES ('249', '复合机', '', '', '', '127', '50', '45');
INSERT INTO `tp_cates` VALUES ('250', '碎纸机', '', '', '', '127', '50', '45');
INSERT INTO `tp_cates` VALUES ('251', '扫描仪', '', '', '', '127', '50', '45');
INSERT INTO `tp_cates` VALUES ('252', '墨盒', '', '', '', '127', '50', '45');
INSERT INTO `tp_cates` VALUES ('253', '硒鼓', '', '', '', '127', '50', '45');
INSERT INTO `tp_cates` VALUES ('254', '墨粉', '', '', '', '127', '50', '45');
INSERT INTO `tp_cates` VALUES ('255', '色带', '', '', '', '127', '50', '45');
INSERT INTO `tp_cates` VALUES ('256', '刀剪菜板', '', '', '', '127', '50', '14');
INSERT INTO `tp_cates` VALUES ('257', '厨房配件', '', '', '', '127', '50', '14');
INSERT INTO `tp_cates` VALUES ('258', '水具酒具', '', '', '', '127', '50', '14');
INSERT INTO `tp_cates` VALUES ('259', '餐具', '', '', '', '127', '50', '14');
INSERT INTO `tp_cates` VALUES ('260', '茶具/咖啡具', '', '', '', '127', '50', '14');
INSERT INTO `tp_cates` VALUES ('261', '厨房卫浴', '', '', '', '127', '50', '15');
INSERT INTO `tp_cates` VALUES ('262', '五金工具', '', '', '', '127', '50', '15');
INSERT INTO `tp_cates` VALUES ('263', '电工电料', '', '', '', '127', '50', '15');
INSERT INTO `tp_cates` VALUES ('264', '墙地面材料', '', '', '', '127', '50', '15');
INSERT INTO `tp_cates` VALUES ('265', '装饰材料', '', '', '', '127', '50', '15');
INSERT INTO `tp_cates` VALUES ('266', '装修服务', '', '', '', '127', '50', '15');
INSERT INTO `tp_cates` VALUES ('267', '吸顶灯', '', '', '', '127', '50', '15');
INSERT INTO `tp_cates` VALUES ('268', '淋浴花洒', '', '', '', '127', '50', '15');
INSERT INTO `tp_cates` VALUES ('269', '开关插座', '', '', '', '127', '50', '15');
INSERT INTO `tp_cates` VALUES ('270', '油漆涂料', '', '', '', '127', '50', '15');
INSERT INTO `tp_cates` VALUES ('271', '龙头', '', '', '', '127', '50', '15');
INSERT INTO `tp_cates` VALUES ('272', '被子', '', '', '', '127', '50', '52');
INSERT INTO `tp_cates` VALUES ('273', '蚊帐', '', '', '', '127', '50', '52');
INSERT INTO `tp_cates` VALUES ('274', '凉席', '', '', '', '127', '50', '52');
INSERT INTO `tp_cates` VALUES ('275', '床单被罩', '', '', '', '127', '50', '52');
INSERT INTO `tp_cates` VALUES ('276', '枕芯', '', '', '', '127', '50', '52');
INSERT INTO `tp_cates` VALUES ('277', '毛巾浴巾', '', '', '', '127', '50', '52');
INSERT INTO `tp_cates` VALUES ('278', '布艺软饰', '', '', '', '127', '50', '52');
INSERT INTO `tp_cates` VALUES ('279', '毯子', '', '', '', '127', '50', '52');
INSERT INTO `tp_cates` VALUES ('280', '抱枕靠垫', '', '', '', '127', '50', '52');
INSERT INTO `tp_cates` VALUES ('281', '床垫/床褥', '', '', '', '127', '50', '52');
INSERT INTO `tp_cates` VALUES ('282', '窗帘/窗纱', '', '', '', '127', '50', '52');
INSERT INTO `tp_cates` VALUES ('283', '电热毯', '', '', '', '127', '50', '52');
INSERT INTO `tp_cates` VALUES ('284', '客厅家具', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('285', '餐厅家具', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('286', '书房家具', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('287', '储物家具', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('288', '阳台/户外', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('289', '商业办公', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('290', '床', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('291', '床垫', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('292', '沙发', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('293', '电脑椅', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('294', '衣柜', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('295', '茶几', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('296', '电视柜', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('297', '餐桌', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('298', '电脑桌', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('299', '鞋架/衣帽架', '', '', '', '127', '50', '53');
INSERT INTO `tp_cates` VALUES ('300', '吸顶灯', '', '', '', '127', '50', '54');
INSERT INTO `tp_cates` VALUES ('301', '筒灯射灯', '', '', '', '127', '50', '54');
INSERT INTO `tp_cates` VALUES ('302', 'LED灯', '', '', '', '127', '50', '54');
INSERT INTO `tp_cates` VALUES ('303', '节能灯', '', '', '', '127', '50', '54');
INSERT INTO `tp_cates` VALUES ('304', '落地灯', '', '', '', '127', '50', '54');
INSERT INTO `tp_cates` VALUES ('305', '五金电器', '', '', '', '127', '50', '54');
INSERT INTO `tp_cates` VALUES ('306', '应急灯/手电', '', '', '', '127', '50', '54');
INSERT INTO `tp_cates` VALUES ('307', '装饰灯', '', '', '', '127', '50', '54');
INSERT INTO `tp_cates` VALUES ('308', '吊灯', '', '', '', '127', '50', '54');
INSERT INTO `tp_cates` VALUES ('309', '氛围照明', '', '', '', '127', '50', '54');
INSERT INTO `tp_cates` VALUES ('310', '雨伞雨具', '', '', '', '127', '50', '55');
INSERT INTO `tp_cates` VALUES ('311', '浴室用品', '', '', '', '127', '50', '55');
INSERT INTO `tp_cates` VALUES ('312', '缝纫/针织用品', '', '', '', '127', '50', '55');
INSERT INTO `tp_cates` VALUES ('313', '洗晒/熨烫', '', '', '', '127', '50', '55');
INSERT INTO `tp_cates` VALUES ('314', '净化除味', '', '', '', '127', '50', '55');
INSERT INTO `tp_cates` VALUES ('315', '连衣裙', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('316', '蕾丝/雪纺衫', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('317', '衬衫', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('318', 'T恤', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('319', '半身裙', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('320', '休闲裤', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('321', '短裤', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('322', '牛仔裤', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('323', '针织衫', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('324', '吊带/背心', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('325', '打底衫', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('326', '打底裤', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('327', '正装裤', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('328', '小西服', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('329', '马甲', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('330', '风衣', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('331', '羊毛衫', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('332', '羊绒衫', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('333', '短外套', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('334', '棉服', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('335', '毛呢大衣', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('336', '加绒裤', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('337', '羽绒服', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('338', '皮草', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('339', '真皮皮衣', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('340', '仿皮皮衣', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('341', '旗袍/唐装', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('342', '礼服', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('343', '婚纱', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('344', '中老年女装', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('345', '大码女装', '', '', '', '127', '50', '16');
INSERT INTO `tp_cates` VALUES ('346', '裤子', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('347', 'POLO衫', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('348', '针织衫', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('349', '夹克', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('350', '卫衣', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('351', '风衣', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('352', '马甲/背心', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('353', '短裤', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('354', '休闲裤', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('355', '牛仔裤', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('356', '西服', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('357', '西裤', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('358', '西服套装', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('359', '真皮皮衣', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('360', '仿皮皮衣', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('361', '羽绒服', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('362', '毛呢大衣', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('363', '棉服', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('364', '羊绒衫', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('365', '羊毛衫', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('366', '卫裤/运动裤', '', '', '', '127', '50', '17');
INSERT INTO `tp_cates` VALUES ('367', '光学镜架/镜片', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('368', '防辐射眼镜', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('369', '女士丝巾/围巾/披肩', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('370', '棒球帽', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('371', '遮阳伞/雨伞', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('372', '遮阳帽', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('373', '领带/领结/领带夹', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('374', '男士腰带/礼盒', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('375', '防晒手套', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('376', '老花镜', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('377', '袖扣', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('378', '鸭舌帽', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('379', '装饰眼镜', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('380', '女士腰带/礼盒', '', '', '', '127', '50', '62');
INSERT INTO `tp_cates` VALUES ('381', '文胸', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('382', '睡衣/家居服', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('383', '情侣睡衣', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('384', '文胸套装', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('385', '少女文胸', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('386', '女式内裤', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('387', '男式内裤', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('388', '商务男袜', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('389', '休闲棉袜', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('390', '吊带/背心', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('391', '打底衫', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('392', '抹胸', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('393', '连裤袜/丝袜', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('394', '美腿袜', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('395', '打底裤袜', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('396', '塑身美体', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('397', '大码内衣', '', '', '', '127', '50', '63');
INSERT INTO `tp_cates` VALUES ('398', '室内健身', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('399', '自行车运动', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('400', '轮滑运动', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('401', '羽毛球/网球/乒乓球', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('402', '足球/篮球/排球', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('403', '运动休闲', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('404', '钓鱼用品', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('405', '野营烧烤', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('406', '游泳运动', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('407', '舞蹈运动', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('408', '瑜伽运动', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('409', '防狼防身', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('410', '水上运动', '', '', '', '127', '50', '64');
INSERT INTO `tp_cates` VALUES ('411', '箱包', '', '', '', '127', '50', '18');
INSERT INTO `tp_cates` VALUES ('412', '钱包', '', '', '', '127', '50', '18');
INSERT INTO `tp_cates` VALUES ('413', '服饰', '', '', '', '127', '50', '18');
INSERT INTO `tp_cates` VALUES ('414', '腰带', '', '', '', '127', '50', '18');
INSERT INTO `tp_cates` VALUES ('415', '太阳镜/眼镜框', '', '', '', '127', '50', '18');
INSERT INTO `tp_cates` VALUES ('416', '饰品', '', '', '', '127', '50', '18');
INSERT INTO `tp_cates` VALUES ('417', '配件', '', '', '', '127', '50', '18');
INSERT INTO `tp_cates` VALUES ('418', '旅行包', '', '', '', '127', '50', '19');
INSERT INTO `tp_cates` VALUES ('419', '电脑包', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('420', '休闲运动包', '', '', '', '127', '50', '21');
INSERT INTO `tp_cates` VALUES ('421', '相机包', '', '', '', '127', '50', '22');
INSERT INTO `tp_cates` VALUES ('422', '腰包/胸包', '', '', '', '127', '50', '23');
INSERT INTO `tp_cates` VALUES ('423', '登山包', '', '', '', '127', '50', '24');
INSERT INTO `tp_cates` VALUES ('424', '旅行配件', '', '', '', '127', '50', '25');
INSERT INTO `tp_cates` VALUES ('425', '书包', '', '', '', '127', '50', '26');
INSERT INTO `tp_cates` VALUES ('426', '妈咪包', '', '', '', '127', '50', '27');
INSERT INTO `tp_cates` VALUES ('427', '凉鞋/沙滩鞋', '', '', '', '127', '50', '70');
INSERT INTO `tp_cates` VALUES ('428', '帆布鞋', '', '', '', '127', '50', '70');
INSERT INTO `tp_cates` VALUES ('429', '商务休闲鞋', '', '', '', '127', '50', '70');
INSERT INTO `tp_cates` VALUES ('430', '正装鞋', '', '', '', '127', '50', '70');
INSERT INTO `tp_cates` VALUES ('431', '增高鞋', '', '', '', '127', '50', '70');
INSERT INTO `tp_cates` VALUES ('432', '拖鞋/人字拖', '', '', '', '127', '50', '70');
INSERT INTO `tp_cates` VALUES ('433', '工装鞋', '', '', '', '127', '50', '70');
INSERT INTO `tp_cates` VALUES ('434', '男靴', '', '', '', '127', '50', '70');
INSERT INTO `tp_cates` VALUES ('435', '传统布鞋', '', '', '', '127', '50', '70');
INSERT INTO `tp_cates` VALUES ('436', '功能鞋', '', '', '', '127', '50', '70');
INSERT INTO `tp_cates` VALUES ('437', '鞋配件', '', '', '', '127', '50', '70');
INSERT INTO `tp_cates` VALUES ('438', '定制鞋', '', '', '', '127', '50', '70');
INSERT INTO `tp_cates` VALUES ('439', '单鞋', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('440', '高跟鞋', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('441', '坡跟鞋', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('442', '松糕鞋', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('443', '鱼嘴鞋', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('444', '休闲鞋', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('445', '帆布鞋', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('446', '拖鞋/人字拖', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('447', '妈妈鞋', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('448', '防水台', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('449', '雨鞋/雨靴', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('450', '内增高', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('451', '布鞋/绣花鞋', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('452', '女靴', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('453', '雪地靴', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('454', '踝靴', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('455', '马丁靴', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('456', '鞋配件', '', '', '', '127', '50', '71');
INSERT INTO `tp_cates` VALUES ('457', '手提包', '', '', '', '127', '50', '72');
INSERT INTO `tp_cates` VALUES ('458', '斜跨包', '', '', '', '127', '50', '72');
INSERT INTO `tp_cates` VALUES ('459', '双肩包', '', '', '', '127', '50', '72');
INSERT INTO `tp_cates` VALUES ('460', '钱包', '', '', '', '127', '50', '72');
INSERT INTO `tp_cates` VALUES ('461', '手拿包/晚宴包', '', '', '', '127', '50', '72');
INSERT INTO `tp_cates` VALUES ('462', '卡包/零钱包', '', '', '', '127', '50', '72');
INSERT INTO `tp_cates` VALUES ('463', '钥匙包', '', '', '', '127', '50', '72');
INSERT INTO `tp_cates` VALUES ('464', '单肩/斜跨包', '', '', '', '127', '50', '73');
INSERT INTO `tp_cates` VALUES ('465', '男生手包', '', '', '', '127', '50', '73');
INSERT INTO `tp_cates` VALUES ('466', '双肩包', '', '', '', '127', '50', '73');
INSERT INTO `tp_cates` VALUES ('467', '钱包/卡包', '', '', '', '127', '50', '73');
INSERT INTO `tp_cates` VALUES ('468', '钥匙包', '', '', '', '127', '50', '73');
INSERT INTO `tp_cates` VALUES ('469', '女表', '', '', '', '127', '50', '74');
INSERT INTO `tp_cates` VALUES ('470', '儿童表', '', '', '', '127', '50', '74');
INSERT INTO `tp_cates` VALUES ('471', '座钟挂钟', '', '', '', '127', '50', '74');
INSERT INTO `tp_cates` VALUES ('472', '护肤', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('473', '面膜', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('474', '洗面奶', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('475', 'BB霜', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('476', '指甲油', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('477', '洗面泥', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('478', '水润护肤', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('479', '卸妆水', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('480', '雪花膏', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('481', '爽肤水', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('482', '清洁套装', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('483', '剃须', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('484', '洁面刷', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('485', '修眉笔', '', '', '', '127', '50', '20');
INSERT INTO `tp_cates` VALUES ('486', '护发', '', '', '', '127', '50', '21');
INSERT INTO `tp_cates` VALUES ('487', '染发', '', '', '', '127', '50', '21');
INSERT INTO `tp_cates` VALUES ('488', '造型', '', '', '', '127', '50', '21');
INSERT INTO `tp_cates` VALUES ('489', '润肤', '', '', '', '127', '50', '82');
INSERT INTO `tp_cates` VALUES ('490', '手足', '', '', '', '127', '50', '82');
INSERT INTO `tp_cates` VALUES ('491', '美胸', '', '', '', '127', '50', '82');
INSERT INTO `tp_cates` VALUES ('492', '套装', '', '', '', '127', '50', '82');
INSERT INTO `tp_cates` VALUES ('493', '牙刷/牙线', '', '', '', '127', '50', '83');
INSERT INTO `tp_cates` VALUES ('494', '漱口水', '', '', '', '127', '50', '83');
INSERT INTO `tp_cates` VALUES ('495', '套装', '', '', '', '127', '50', '83');
INSERT INTO `tp_cates` VALUES ('496', '底妆', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('497', '腮红', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('498', '眼部', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('499', '美甲', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('500', '精油放疗', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('501', '假睫毛', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('502', '彩妆套装', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('503', '蜜粉', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('504', '遮瑕', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('505', '化妆棉', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('506', '双眼皮贴', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('507', '高光阴影', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('508', '隔离', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('509', '粉饼', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('510', '气垫BB', '', '', '', '127', '50', '84');
INSERT INTO `tp_cates` VALUES ('511', '卫生护垫', '', '', '', '127', '50', '85');
INSERT INTO `tp_cates` VALUES ('512', '私密护理', '', '', '', '127', '50', '85');
INSERT INTO `tp_cates` VALUES ('513', '脱毛膏', '', '', '', '127', '50', '85');
INSERT INTO `tp_cates` VALUES ('514', '衣物清洁', '', '', '', '127', '50', '86');
INSERT INTO `tp_cates` VALUES ('515', '清洁工具', '', '', '', '127', '50', '86');
INSERT INTO `tp_cates` VALUES ('516', '家庭清洁', '', '', '', '127', '50', '86');
INSERT INTO `tp_cates` VALUES ('517', '一次性用品', '', '', '', '127', '50', '86');
INSERT INTO `tp_cates` VALUES ('518', '驱蚊用品', '', '', '', '127', '50', '86');
INSERT INTO `tp_cates` VALUES ('519', '皮具护理', '', '', '', '127', '50', '86');

-- -----------------------------
-- Table structure for `tp_cates_brands`
-- -----------------------------
DROP TABLE IF EXISTS `tp_cates_brands`;
CREATE TABLE `tp_cates_brands` (
  `cb_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cb_brands_id` varchar(100) NOT NULL COMMENT '关联的品牌id列表',
  `cb_proimg` varchar(60) NOT NULL COMMENT '推广图地址',
  `cb_prourl` varchar(60) NOT NULL COMMENT '推广图链接',
  `cb_catesid` mediumint(9) NOT NULL COMMENT '对应主栏目id',
  PRIMARY KEY (`cb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_cates_brands`
-- -----------------------------
INSERT INTO `tp_cates_brands` VALUES ('1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', '20190504\\1490847672639256000.jpg', 'https://www.dscmall.cn/', '1');
INSERT INTO `tp_cates_brands` VALUES ('2', '21,22,23,24,25,26,27,28,29,30', '20190504\\1490296477657287023.jpg', 'https://www.dscmall.cn/', '2');
INSERT INTO `tp_cates_brands` VALUES ('3', '31,32,33,34,35,36,37,38,39', '20190504\\1490296350661886591.jpg', 'https://www.dscmall.cn/', '3');
INSERT INTO `tp_cates_brands` VALUES ('4', '40,41,42,43,44,45,46,47', '20190504\\1490847695352345291.jpg', 'https://www.dscmall.cn/', '4');
INSERT INTO `tp_cates_brands` VALUES ('5', '48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67', '20190504\\1490296743207336995.jpg', 'https://www.dscmall.cn/', '5');
INSERT INTO `tp_cates_brands` VALUES ('6', '68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86', '20190504\\1490296765062943272.jpg', 'https://www.dscmall.cn/', '6');
INSERT INTO `tp_cates_brands` VALUES ('7', '87,88,89,90,91,92,93,94,95', '20190504\\1490847656340816332.jpg', 'https://www.dscmall.cn/', '7');

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
) ENGINE=MyISAM AUTO_INCREMENT=334 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_cates_words`
-- -----------------------------
INSERT INTO `tp_cates_words` VALUES ('1', '1', '品牌日', '');
INSERT INTO `tp_cates_words` VALUES ('2', '1', '家电城', '');
INSERT INTO `tp_cates_words` VALUES ('3', '1', '智能生活馆', '');
INSERT INTO `tp_cates_words` VALUES ('4', '1', '京东净化馆', '');
INSERT INTO `tp_cates_words` VALUES ('5', '1', '京东帮服务店', '');
INSERT INTO `tp_cates_words` VALUES ('6', '1', '值得买精选', '');
INSERT INTO `tp_cates_words` VALUES ('7', '2', '手机频道', '');
INSERT INTO `tp_cates_words` VALUES ('8', '2', '网上营业厅', '');
INSERT INTO `tp_cates_words` VALUES ('9', '2', '配件城', '');
INSERT INTO `tp_cates_words` VALUES ('10', '2', '影像Club', '');
INSERT INTO `tp_cates_words` VALUES ('11', '2', '手机社区', '');
INSERT INTO `tp_cates_words` VALUES ('12', '2', '以旧换新', '');
INSERT INTO `tp_cates_words` VALUES ('13', '3', '本周热卖', '');
INSERT INTO `tp_cates_words` VALUES ('14', '3', '游戏部落', '');
INSERT INTO `tp_cates_words` VALUES ('15', '3', '智能社区', '');
INSERT INTO `tp_cates_words` VALUES ('16', '3', 'GAME+', '');
INSERT INTO `tp_cates_words` VALUES ('17', '3', '装机大师', '');
INSERT INTO `tp_cates_words` VALUES ('18', '3', '办公生活馆', '');
INSERT INTO `tp_cates_words` VALUES ('19', '4', '家装城', '');
INSERT INTO `tp_cates_words` VALUES ('20', '4', '居家日用', '');
INSERT INTO `tp_cates_words` VALUES ('21', '4', '精品家具', '');
INSERT INTO `tp_cates_words` VALUES ('22', '4', '家装建材', '');
INSERT INTO `tp_cates_words` VALUES ('23', '4', '厨房达人', '');
INSERT INTO `tp_cates_words` VALUES ('24', '4', '猫猫狗狗', '');
INSERT INTO `tp_cates_words` VALUES ('25', '5', '男装', '');
INSERT INTO `tp_cates_words` VALUES ('26', '5', '女装', '');
INSERT INTO `tp_cates_words` VALUES ('27', '5', '内衣', '');
INSERT INTO `tp_cates_words` VALUES ('28', '5', '国际品牌', '');
INSERT INTO `tp_cates_words` VALUES ('29', '6', '男鞋', '');
INSERT INTO `tp_cates_words` VALUES ('30', '6', '女鞋', '');
INSERT INTO `tp_cates_words` VALUES ('31', '6', '箱包', '');
INSERT INTO `tp_cates_words` VALUES ('32', '6', '钟表', '');
INSERT INTO `tp_cates_words` VALUES ('33', '6', '奢侈品', '');
INSERT INTO `tp_cates_words` VALUES ('34', '6', '女包', '');
INSERT INTO `tp_cates_words` VALUES ('35', '7', '清洁用品', '');
INSERT INTO `tp_cates_words` VALUES ('36', '7', '美妆商城', '');
INSERT INTO `tp_cates_words` VALUES ('37', '7', '官方旗舰店', '');
INSERT INTO `tp_cates_words` VALUES ('38', '7', '美妆特卖', '');
INSERT INTO `tp_cates_words` VALUES ('39', '7', '妆比社', '');
INSERT INTO `tp_cates_words` VALUES ('40', '7', '全球购美妆', '');

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
