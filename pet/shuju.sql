/*
Navicat MySQL Data Transfer

Source Server         : deh
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : shuju

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2019-12-20 15:19:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for aboutus
-- ----------------------------
DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE `aboutus` (
  `content` varchar(1000) NOT NULL COMMENT '内容',
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aboutus
-- ----------------------------
INSERT INTO `aboutus` VALUES ('<div><span><span>汽车有限公司成立于XXX年XX月XX日，是本地区唯一的授权销售服务中心和特约售后服务中心。主要从事多种品牌的整车销售、 售后服务、配件供应及信息反馈业务。</span></span></div><div><span>&nbsp;</span></div><div><span><span>公司秉承 “尊荣无限 至上体验”的服务理念，培养更主动贴心的服务意识,追求更周到便捷的服务水准，让每一位车主，都体验到管家般的细致专业，享受到待为贵宾般的尊崇体验</span></span><span><span>公司秉承 “尊荣无限 至上体验”的服务理念，培养更主动贴心的服务意识,追求更周到便捷的服务水准，让每一位车主，都体验到管家般的细致专业，享受到待为贵宾般的尊崇体验……</span></span></div>', '1');

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `store` varchar(255) DEFAULT NULL COMMENT '分店',
  `addr` varchar(255) NOT NULL COMMENT '地址',
  `tel` varchar(255) NOT NULL COMMENT '预约电话',
  `time1` varchar(255) NOT NULL COMMENT '周一到周五',
  `time2` varchar(255) NOT NULL COMMENT '周六到周天',
  `asort` int(11) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of address
-- ----------------------------
INSERT INTO `address` VALUES ('3', '王企鹅', '王企鹅', '213', '早上8:30到晚上10:00', '早上8:30到晚上10:00', '2');
INSERT INTO `address` VALUES ('2', '大得多', '大得多5454', '125755', '早上9:00到晚上10:00', '早上9:00到晚上10:00', '1');
INSERT INTO `address` VALUES ('4', '刚发的', '梵蒂冈', '213', '早上8:30到晚上10:00', '早上8:30到晚上10:00', '3');

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bthumb` varchar(255) NOT NULL COMMENT '轮播图',
  `bsort` int(11) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('5', '/upload/20191103/1572778486129.jpeg', '111');
INSERT INTO `banner` VALUES ('4', '/upload/20191103/1572778472942.jpeg', '99');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL COMMENT '分类名称',
  `csort` int(11) NOT NULL COMMENT '排序',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('27', '刹车油/制动液', '1');
INSERT INTO `category` VALUES ('28', '机油润滑油', '2');
INSERT INTO `category` VALUES ('29', '防冻冷却液', '3');

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `gname` varchar(255) NOT NULL COMMENT '产品名称',
  `gthumb` varchar(255) NOT NULL COMMENT '缩略图',
  `gbanner` varchar(255) NOT NULL COMMENT '轮播图',
  `market_price` decimal(10,2) NOT NULL COMMENT '市场价',
  `shop_price` decimal(10,2) NOT NULL COMMENT '零售价',
  `stock` int(11) NOT NULL COMMENT '库存',
  `content` varchar(5000) NOT NULL COMMENT '产品详情',
  `sales` int(11) DEFAULT '0' COMMENT '销售',
  `cid` int(11) DEFAULT NULL COMMENT '产品分类',
  `create_time` varchar(255) DEFAULT NULL COMMENT '创建时间',
  `update_time` varchar(255) DEFAULT NULL COMMENT '修改时间',
  `status` tinyint(2) DEFAULT '0' COMMENT '上架0  下架1',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('53', '壳牌 黄喜力HX5矿物油系列', '/upload/20191218/15766567388580.jpeg', '/upload/20191218/15766567428629.jpeg,/upload/20191218/15766598637048.png,/upload/20191218/15766598635900.png,', '266.00', '148.00', '5000', '<div>応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。</div><div>&nbsp;</div><div>応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。</div>', '0', '27', '2019-12-18 16:12:59', '2019-12-20 10:49:04', '0');
INSERT INTO `goods` VALUES ('62', '111', '/upload/20191220/15768054935345.jpeg', '/upload/20191220/15768054979505.jpeg,', '11221.00', '2111.00', '11111', '<div>応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。</div><div>&nbsp;</div><div>応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。</div>', '0', '27', '2019-12-20 09:31:43', '2019-12-20 09:32:18', '0');
INSERT INTO `goods` VALUES ('63', '656', '/upload/20191220/15768095209289.jpeg', '/upload/20191220/15768095238502.jpeg,', '65.00', '65.00', '959', '541654', '0', '27', '2019-12-20 10:38:46', '2019-12-20 10:38:46', '0');

-- ----------------------------
-- Table structure for manager
-- ----------------------------
DROP TABLE IF EXISTS `manager`;
CREATE TABLE `manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL COMMENT '管理员用户名',
  `password` varchar(255) NOT NULL COMMENT '密码',
  `head_img` varchar(255) DEFAULT NULL COMMENT '头像',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manager
-- ----------------------------
INSERT INTO `manager` VALUES ('3', 'admin', '123456', '/upload/20191218/15766510621656.jpeg');

-- ----------------------------
-- Table structure for nav
-- ----------------------------
DROP TABLE IF EXISTS `nav`;
CREATE TABLE `nav` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '导航名',
  `nsort` int(11) NOT NULL COMMENT '排序',
  `tmp` varchar(255) NOT NULL COMMENT '模块',
  `nthumb` varchar(255) NOT NULL COMMENT '图片',
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nav
-- ----------------------------
INSERT INTO `nav` VALUES ('24', '关于我们', '99', 'aboutas', '/upload/20191029/15723110324381.png');
INSERT INTO `nav` VALUES ('14', '产品中心', '98', 'Products', '/upload/20191029/15723110324381.png');
INSERT INTO `nav` VALUES ('18', '服务中心', '97', 'Services', '/upload/20191029/15723110324381.png');
INSERT INTO `nav` VALUES ('23', '新闻资讯', '96', 'Knowledgement', '/upload/20191029/15723110324381.png');
INSERT INTO `nav` VALUES ('25', '在线预约', '95', 'Online', '/upload/20191029/15723110324381.png');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `ntitle` varchar(255) NOT NULL COMMENT '标题',
  `content` varchar(1500) NOT NULL COMMENT '内容',
  `create_time` varchar(255) NOT NULL COMMENT '创建时间',
  `update_time` varchar(255) NOT NULL COMMENT '更新时间',
  `nsort` int(11) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('23', '修车五大禁忌忌开锅时贸然开引擎盖', '<div><span>&nbsp; &nbsp; &nbsp; &nbsp; 汽车电瓶是汽车得以正常行驶不可或缺的动力来源之一，如何避免非正常使用缩短汽车电瓶使用寿命，并延长其使用时间是很多车主关心的问题。</span></div><div><span>&nbsp;</span></div><p><span>　　正常情况下，一块车载电瓶的使用寿命为4年，而电瓶寿命的长短与气候情况以及车主的使用习惯也有很大的关系。常见的折损电瓶寿命的因素包括：空 气湿度、灰尘、腐蚀、电极松动或过紧、磨损以及汽车电缆的损坏。在极端情况下，这些因素都可能引起电瓶破裂甚至是更加严重的事故，而湿度和灰尘则被认作是 两个最常见的罪魁祸首。</span></p><p><span>&nbsp;</span></p><p><span>　　保持电池的干净整洁，并进行定期检测是延长汽车电瓶使用寿命的有效手段，而对汽车电瓶的清洁不同于日常物品，仅用抹布外加清洁用油进行擦拭还远远不够。</span></p><p><span>&nbsp;</span></p><p><span>　　在清洁过程中首先需要注意检查工作环境是否有明火，尤其注意在清洁期间禁止吸烟，当发动机熄火的时候还应该注意断开电池负极与汽车电缆连接。因 为汽车电池内含大量硫磺的酸会产生易燃氢气，遇明火容易产生爆炸发生危险。然后要记得在清洁开始前以及结束后将所有物品拭干避免短路发生。</span></p>', '2019-12-18 16:01:06', '2019-12-18 16:01:06', '1');
INSERT INTO `news` VALUES ('24', '你的爱车清理到位了吗 可别忘记排水孔', '<div><span>&nbsp; &nbsp; &nbsp; &nbsp; 汽车电瓶是汽车得以正常行驶不可或缺的动力来源之一，如何避免非正常使用缩短汽车电瓶使用寿命，并延长其使用时间是很多车主关心的问题。</span></div><div><span>&nbsp;</span></div><p><span>　　正常情况下，一块车载电瓶的使用寿命为4年，而电瓶寿命的长短与气候情况以及车主的使用习惯也有很大的关系。常见的折损电瓶寿命的因素包括：空 气湿度、灰尘、腐蚀、电极松动或过紧、磨损以及汽车电缆的损坏。在极端情况下，这些因素都可能引起电瓶破裂甚至是更加严重的事故，而湿度和灰尘则被认作是 两个最常见的罪魁祸首。</span></p><p><span>&nbsp;</span></p><p><span>　　保持电池的干净整洁，并进行定期检测是延长汽车电瓶使用寿命的有效手段，而对汽车电瓶的清洁不同于日常物品，仅用抹布外加清洁用油进行擦拭还远远不够。</span></p><p><span>&nbsp;</span></p><p><span>　　在清洁过程中首先需要注意检查工作环境是否有明火，尤其注意在清洁期间禁止吸烟，当发动机熄火的时候还应该注意断开电池负极与汽车电缆连接。因 为汽车电池内含大量硫磺的酸会产生易燃氢气，遇明火容易产生爆炸发生危险。然后要记得在清洁开始前以及结束后将所有物品拭干避免短路发生。</span></p>', '2019-12-18 16:01:47', '2019-12-18 16:01:47', '2');
INSERT INTO `news` VALUES ('26', '配置升级 2015款凯迪拉克XTS到店实拍', '<div><span>&nbsp; &nbsp; &nbsp; &nbsp; 汽车电瓶是汽车得以正常行驶不可或缺的动力来源之一，如何避免非正常使用缩短汽车电瓶使用寿命，并延长其使用时间是很多车主关心的问题。</span></div><div><span>&nbsp;</span></div><p><span>　　正常情况下，一块车载电瓶的使用寿命为4年，而电瓶寿命的长短与气候情况以及车主的使用习惯也有很大的关系。常见的折损电瓶寿命的因素包括：空 气湿度、灰尘、腐蚀、电极松动或过紧、磨损以及汽车电缆的损坏。在极端情况下，这些因素都可能引起电瓶破裂甚至是更加严重的事故，而湿度和灰尘则被认作是 两个最常见的罪魁祸首。</span></p><p><span>&nbsp;</span></p><p><span>　　保持电池的干净整洁，并进行定期检测是延长汽车电瓶使用寿命的有效手段，而对汽车电瓶的清洁不同于日常物品，仅用抹布外加清洁用油进行擦拭还远远不够。</span></p><p><span>&nbsp;</span></p><p><span>　　在清洁过程中首先需要注意检查工作环境是否有明火，尤其注意在清洁期间禁止吸烟，当发动机熄火的时候还应该注意断开电池负极与汽车电缆连接。因 为汽车电池内含大量硫磺的酸会产生易燃氢气，遇明火容易产生爆炸发生危险。然后要记得在清洁开始前以及结束后将所有物品拭干避免短路发生。</span></p>', '2019-12-18 16:02:04', '2019-12-18 16:02:04', '3');
INSERT INTO `news` VALUES ('27', '奥迪推出Q2/Q4受阻 菲亚特抢注名称', '<div><span>&nbsp; &nbsp; &nbsp; &nbsp; 汽车电瓶是汽车得以正常行驶不可或缺的动力来源之一，如何避免非正常使用缩短汽车电瓶使用寿命，并延长其使用时间是很多车主关心的问题。</span></div><div><span>&nbsp;</span></div><p><span>　　正常情况下，一块车载电瓶的使用寿命为4年，而电瓶寿命的长短与气候情况以及车主的使用习惯也有很大的关系。常见的折损电瓶寿命的因素包括：空 气湿度、灰尘、腐蚀、电极松动或过紧、磨损以及汽车电缆的损坏。在极端情况下，这些因素都可能引起电瓶破裂甚至是更加严重的事故，而湿度和灰尘则被认作是 两个最常见的罪魁祸首。</span></p><p><span>&nbsp;</span></p><p><span>　　保持电池的干净整洁，并进行定期检测是延长汽车电瓶使用寿命的有效手段，而对汽车电瓶的清洁不同于日常物品，仅用抹布外加清洁用油进行擦拭还远远不够。</span></p><p><span>&nbsp;</span></p><p><span>　　在清洁过程中首先需要注意检查工作环境是否有明火，尤其注意在清洁期间禁止吸烟，当发动机熄火的时候还应该注意断开电池负极与汽车电缆连接。因 为汽车电池内含大量硫磺的酸会产生易燃氢气，遇明火容易产生爆炸发生危险。然后要记得在清洁开始前以及结束后将所有物品拭干避免短路发生。</span></p>', '2019-12-18 16:02:13', '2019-12-18 16:02:13', '4');
INSERT INTO `news` VALUES ('28', '新能源汽车补贴酝酿新思路', '<div><span>&nbsp; &nbsp; &nbsp; &nbsp; 汽车电瓶是汽车得以正常行驶不可或缺的动力来源之一，如何避免非正常使用缩短汽车电瓶使用寿命，并延长其使用时间是很多车主关心的问题。</span></div><div><span>&nbsp;</span></div><p><span>　　正常情况下，一块车载电瓶的使用寿命为4年，而电瓶寿命的长短与气候情况以及车主的使用习惯也有很大的关系。常见的折损电瓶寿命的因素包括：空 气湿度、灰尘、腐蚀、电极松动或过紧、磨损以及汽车电缆的损坏。在极端情况下，这些因素都可能引起电瓶破裂甚至是更加严重的事故，而湿度和灰尘则被认作是 两个最常见的罪魁祸首。</span></p><p><span>&nbsp;</span></p><p><span>　　保持电池的干净整洁，并进行定期检测是延长汽车电瓶使用寿命的有效手段，而对汽车电瓶的清洁不同于日常物品，仅用抹布外加清洁用油进行擦拭还远远不够。</span></p><p><span>&nbsp;</span></p><p><span>　　在清洁过程中首先需要注意检查工作环境是否有明火，尤其注意在清洁期间禁止吸烟，当发动机熄火的时候还应该注意断开电池负极与汽车电缆连接。因 为汽车电池内含大量硫磺的酸会产生易燃氢气，遇明火容易产生爆炸发生危险。然后要记得在清洁开始前以及结束后将所有物品拭干避免短路发生。</span></p>', '2019-12-18 16:02:23', '2019-12-18 16:02:23', '5');

-- ----------------------------
-- Table structure for online
-- ----------------------------
DROP TABLE IF EXISTS `online`;
CREATE TABLE `online` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `data` varchar(255) NOT NULL COMMENT '预约日期',
  `name` varchar(255) NOT NULL COMMENT '用户姓名',
  `sex` varchar(255) NOT NULL COMMENT '用户性别',
  `tel` int(11) DEFAULT NULL COMMENT '电话',
  `note` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of online
-- ----------------------------
INSERT INTO `online` VALUES ('1', '3', '2019-11-16', '213', '0', '213', '213');
INSERT INTO `online` VALUES ('2', '3', '2019-11-03', '1', '0', '1', '1');
INSERT INTO `online` VALUES ('3', '3', '2019-11-14', '1', '0', '1', '1');
INSERT INTO `online` VALUES ('4', '4', '2019-12-19', '邓恩慧', '0', '15151', '<b><i>很<u>好</u></i></b><img src=\"http://localhost/qiche/static/layui/images/face/40.gif\" alt=\"[晕]\">');
INSERT INTO `online` VALUES ('5', '4', '2019-12-19', '邓恩慧', '0', '15151', '<b><i>很<u>好</u></i></b><img src=\"http://localhost/qiche/static/layui/images/face/40.gif\" alt=\"[晕]\">');
INSERT INTO `online` VALUES ('6', '4', '2019-12-19', '邓恩慧', '0', '15151', '<b><i>很<u>好</u></i></b><img src=\"http://localhost/qiche/static/layui/images/face/40.gif\" alt=\"[晕]\">');
INSERT INTO `online` VALUES ('7', '4', '2019-12-19', '邓恩慧', '0', '15151', '<b><i>很<u>好</u></i></b><img src=\"http://localhost/qiche/static/layui/images/face/40.gif\" alt=\"[晕]\">');
INSERT INTO `online` VALUES ('8', '4', '2019-12-19', '邓恩慧', '0', '15151', '<b><i>很<u>好</u></i></b><img src=\"http://localhost/qiche/static/layui/images/face/40.gif\" alt=\"[晕]\">');
INSERT INTO `online` VALUES ('9', '4', '2019-12-19', '邓恩慧', '0', '15151', '<b><i>很<u>好</u></i></b><img src=\"http://localhost/qiche/static/layui/images/face/40.gif\" alt=\"[晕]\">');

-- ----------------------------
-- Table structure for service
-- ----------------------------
DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sthumb` varchar(255) NOT NULL COMMENT '缩略图',
  `sname` varchar(255) NOT NULL COMMENT '服务名称',
  `content` varchar(255) NOT NULL COMMENT '服务内容',
  `sort` int(11) NOT NULL COMMENT '排序',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of service
-- ----------------------------
INSERT INTO `service` VALUES ('3', '/upload/20191218/1576655629810.png', '汽车保养 专家系统', '<p><span>応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换</span>迫降可调节考虑空间</p>', '99');
INSERT INTO `service` VALUES ('4', '/upload/20191218/15766556341097.png', '原厂品质 正品配件', '<p>応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换迫降可调节考虑空间</p>', '99');
INSERT INTO `service` VALUES ('5', '/upload/20191218/15766556404164.png', '全里程保养保障', '<p>応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换迫降可调节考虑空间</p>', '99');
INSERT INTO `service` VALUES ('6', '/upload/20191218/15766556464981.png', '4S店一半的价格', '<p>応损捠捡换换，攴朰朲朳枛朸桸桹桺奿妀。夲夳夵壱売壳圢圤圥圦圧，圩圪囡団囤囥咍咎壱売壳圢圤圥圦応损捠捡换换迫降可调节考虑空间</p>', '99');

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(255) NOT NULL COMMENT '姓名',
  `position` varchar(255) DEFAULT NULL COMMENT '职位',
  `head_img` varchar(255) NOT NULL COMMENT '头像',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES ('10', '邓恩慧', '员工1', '/upload/20191029/15723112131927.jpeg');
INSERT INTO `team` VALUES ('12', 'cc', '员工', '/upload/20191029/15723112584882.jpeg');
INSERT INTO `team` VALUES ('11', '陈晨', '员工', '/upload/20191029/15723112376485.jpeg');
INSERT INTO `team` VALUES ('13', '哈哈哈', '电源', '/upload/20191030/15724272438880.jpeg');
INSERT INTO `team` VALUES ('15', '嘿嘿嘿', '员工', '/upload/20191218/15766514559919.jpeg');
INSERT INTO `team` VALUES ('16', '23', '651', '/upload/20191218/15766537919778.jpeg');
