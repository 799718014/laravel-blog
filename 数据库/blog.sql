/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50505
Source Host           : localhost:8195
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-08-08 17:33:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `art_title` varchar(100) NOT NULL COMMENT '文章标题',
  `art_tag` varchar(100) DEFAULT NULL COMMENT '关键词',
  `art_description` varchar(255) DEFAULT NULL COMMENT '描述',
  `art_thumb` varchar(255) DEFAULT NULL COMMENT '缩略图',
  `art_content` text NOT NULL COMMENT '文章内容',
  `art_time` int(11) DEFAULT NULL COMMENT '发布时间',
  `art_edtor` varchar(50) DEFAULT NULL COMMENT '作者',
  `art_view` int(11) DEFAULT NULL COMMENT '查看次数',
  `cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '分类id',
  PRIMARY KEY (`art_id`),
  KEY `art_title` (`art_title`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '恶趣味', '恶趣味', '恶趣味', null, '<p>恶趣味恶趣味恶趣味恶趣味恶趣味</p>', '1502173379', '恶趣味', null, '8');
INSERT INTO `article` VALUES ('2', '联发科7月营收同比减两成 第四季还得看OPPO、vivo', '联发科', '联发科7日公布7月自结营收跌破190亿元新台币（下同），月减幅度超过一成，该公司昨日公布7月营收成绩单，降到189.69亿元，月减13.4%，也比去年同期衰退两成。联发科第3季不旺，主要受到大陆手机客户需求平淡，加上智', 'uploads/20170808062931784.jpg', '<p><span style=\"\">联发科7日公布7月自结营收跌破190亿元新台币（下同），月减幅度超过一成，该公司昨日公布7月营收成绩单，降到189.69亿元，月减13.4%，也比去年同期衰退两成。<br/><br/><strong style=\"word-wrap: break-word; word-break: break-all; outline: none;\">联发科第3季不旺，主要受到大陆手机客户需求平淡，加上智能手机产品市场份额流失所致，预估本季智能手机和平板电脑移动平台出货量约1.1亿至1.2亿套，与上季持平</strong>。<br/><br/></span></p><p style=\"word-wrap: break-word; word-break: break-all; outline: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(89, 89, 89); font-family: &quot;Microsoft yahei&quot;, 寰蒋闆呴粦, Arial, Helvetica, sans-serif, 瀹嬩綋; white-space: normal; background-color: rgb(255, 255, 255);\"><a href=\"http://www.16rd.com/data/attachment/portal/201708/08/110642wg2oxlszzzolpmuu.jpg\" target=\"_blank\" style=\"word-wrap: break-word; word-break: break-all; outline: none; color: rgb(51, 51, 51); text-decoration-line: none;\"><img src=\"/ueditor/php/upload/image/20170808/1502173750291196.jpg\" alt=\"联发科7月营收同比减两成 第四季还得看OPPO、vivo\"/></a></p><p><span style=\"\"><br/>之前蔡力行曾指出，第 3 季的展望上，预料智能手机产品仍处于产品调整期，成长幅度不大的情况下，其他包括成长型产品以及成熟型产品成长率，都将有较智能手机产品高的成长空间。而在移动运算平台部分，包含智能手机与平板电脑等产品的出货量，预估为 1.1 亿到 1.2 亿套，大致与第 2 季持平的状况。<br/><br/><span style=\"color:#F00000\"><strong style=\"word-wrap: break-word; word-break: break-all; outline: none;\">联发科能否走出低潮，恐怕还是要看OPPO、Vivo和<a href=\"http://bbs.16rd.com/forum-258-1.html\" target=\"_blank\" class=\"relatedlink\" style=\"word-wrap: break-word; word-break: break-all; outline: none; border-bottom: 1px solid blue; color: rgb(68, 68, 68) !important; text-decoration-line: none !important;\">高通</a>三家的脸色</strong></span>。<br/><br/>智能手机市场前五大品牌分别是三星、苹果、华为、OPPO及Vivo，虽然联发科去年底已开始出货给三星，但因为前三者都有自主开发手机芯片，贡献杯水车薪，对联发科来说，今年全年出货量可望破亿台的OPPO和Vivo才是最重要的客户。<br/><br/>联发科下半年主推重新设计基带的曦力「P23」，支持Cat7规范，预定第4季量产，并采用台积电的16nm制程。 因规格符合市场需求，且订价低于15美元，被内部视为重新抢回OPPO、Vivo等大客户的杀手级产品。<br/><br/>大陆开始传出联发科有机会以「P23」重新拿下OPPO、Vivo的新机订单，藉此重新拉回已经下滑三季的市场份额；不过，高通也积极防御，正向OPPO、Vivo重谈价格和订单。</span></p><p><br/></p>', '1502173775', 'ss', null, '1');
INSERT INTO `article` VALUES ('3', '二维码有“毒” 手机端病毒传播不容乐观', '二维码', '腾讯安全日前发布的《2017年上半年互联网安全报告》显示，今年上半年，针对PC端的病毒攻击环比增加30%，恶意程序数量逐年攀升；超过1亿的手机用户感染过手机病毒，二维码已成为主流病毒渠道来源。', 'uploads/20170808063811835.jpg', '<p style=\"word-wrap: break-word; word-break: break-all; outline: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(89, 89, 89); font-family: &quot;Microsoft yahei&quot;, 寰蒋闆呴粦, Arial, Helvetica, sans-serif, 瀹嬩綋; white-space: normal; background-color: rgb(255, 255, 255);\"><a href=\"http://www.16rd.com/data/attachment/portal/201708/08/101650pi90iu0j8j8v500e.jpg\" target=\"_blank\" style=\"word-wrap: break-word; word-break: break-all; outline: none; color: rgb(51, 51, 51); text-decoration-line: none;\"><img src=\"/ueditor/php/upload/image/20170808/1502174257210597.jpg\" alt=\"二维码有“毒”  手机端病毒传播不容乐观\"/></a></p><p><span style=\"\"><strong style=\"word-wrap: break-word; word-break: break-all; outline: none;\"><br/>病毒感染用户数在下降 病毒传播渠道却越来越多样化</strong><br/><br/>从国内的“暗云Ⅲ”病毒，到席卷全球的“WannaCry”敲诈勒索病毒，再到“Petya”恶性破坏性病毒，层出不穷的网络病毒正在不断刺激互联网用户的神经。腾讯安全日前发布的《2017年上半年互联网安全报告》显示，今年上半年，针对PC端的病毒攻击环比增加30%，恶意程序数量逐年攀升；<span style=\"color:#F00000\"><strong style=\"word-wrap: break-word; word-break: break-all; outline: none;\">超过1亿的手机用户感染过手机病毒，二维码已成为主流病毒渠道来源。</strong></span><br/><br/><strong style=\"word-wrap: break-word; word-break: break-all; outline: none;\">PC端木马病毒逐年攀升</strong><br/><br/>2017年上半年，腾讯安全反病毒实验室的统计数据显示，PC端总计拦截病毒10亿次，病毒总体数量环比2016年下半年腾讯安全反病毒实验室拦截的病毒数量增长30%；相较于2016年第二季度的病毒拦截量增长23.7%。从2014年到2017年第二季度的病毒拦截量来看，恶意程序的数量在逐年攀升。<br/><br/>腾讯安全的统计显示，PC端每天中毒的高峰时间为上午10点到11点之间，比较符合企业及普通用户在上午9点至11点开启电脑处理工作的规律。在这段时间，用户中毒的病毒类型大多为利用邮件、共享等方式传播的Office文档类宏病毒，这说明企业办公安全的防护形势依旧严峻。<br/><br/>从城市分布来看，互联网较发达的城市用户中毒情况比较重。全国拦截病毒排名第一的城市为深圳市，占全部拦截量的3.76%；第二名为成都市，占全部拦截量的3.57%；第三名为广州市，占全部拦截量的3.39%。<br/><br/><strong style=\"word-wrap: break-word; word-break: break-all; outline: none;\">勒索病毒呈爆发式增长<br/><br/></strong></span></p><p style=\"word-wrap: break-word; word-break: break-all; outline: none; margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(89, 89, 89); font-family: &quot;Microsoft yahei&quot;, 寰蒋闆呴粦, Arial, Helvetica, sans-serif, 瀹嬩綋; white-space: normal; background-color: rgb(255, 255, 255);\"><a href=\"http://www.16rd.com/data/attachment/portal/201708/08/101650sizuiuusraissiau.jpg\" target=\"_blank\" style=\"word-wrap: break-word; word-break: break-all; outline: none; color: rgb(51, 51, 51); text-decoration-line: none;\"><img src=\"/ueditor/php/upload/image/20170808/1502174258134173.jpg\" alt=\"二维码有“毒”  手机端病毒传播不容乐观\"/></a></p><p><span style=\"\"><br/>从病毒种类上看，2017年上半年，木马类病毒占病毒总量的53.80%，依然是第一大种类病毒。Adware类（广告软件、强制安装、收集用户隐私、弹垃圾信息等）为第二大类病毒，占总量的39.02%。后门类为第三大类病毒，占总量的5.13%。<br/><br/>相比2017年第一季度，病毒种类并没有发生太大变化，但敲诈勒索类病毒却呈爆发式增长。敲诈勒索病毒是以敲诈勒索钱财为目的，感染该木马的计算机用户系统中的指定数据文件会被恶意加密，造成用户数据丢失。<br/><br/>腾讯安全的数据显示，<span style=\"color:#F00000\"><strong style=\"word-wrap: break-word; word-break: break-all; outline: none;\">2017年上半年，共计发现敲诈勒索类病毒样本数量在300万左右，平均每月检测到敲诈勒索病毒数量近50万个，第二季度勒索病毒样本数量较一季度新增13.39%。5月和6月为拦截病毒的高峰，分别为57万个和53万个。</strong></span><br/><br/>今年5月12日爆发的“WannaCry”敲诈勒索病毒是第二季度最活跃、影响最大的病毒。由于使用了windows系统漏洞，导致该病毒能够在全球范围内传播。6月27日，一种名为“Petya”的新型勒索病毒开始在世界各地传播，其敲诈手段与“WannaCry”相似，但更具破坏性，直接加密了用户硬盘的MFT并修改了MBR，导致用户无法进入Windows系统。<br/><strong style=\"word-wrap: break-word; word-break: break-all; outline: none;\"><br/>制毒者加大二维码病毒投放</strong><br/><br/>移动端的病毒情况同样严峻。<span style=\"color:#F00000\"><strong style=\"word-wrap: break-word; word-break: break-all; outline: none;\">腾讯安全数据显示，2017年上半年手机病毒感染用户数为1.09亿，同比减少45.67%，与2015年和2016年上半年相比均有所下降。在病毒感染用户数大幅下降的情况下，2017年上半年腾讯手机管家查杀的病毒次数却达到6.93亿次，同比增长124.24%，比2016年上半年多了1倍多。这说明，恶意程序和木马病毒的制作成本越来越低，病毒的传播渠道也越来越多样化。</strong></span><br/><br/><strong style=\"word-wrap: break-word; word-break: break-all; outline: none;\"><span style=\"color:#008080\">2017年上半年的手机病毒类型比例中，流氓行为和资费消耗类病毒占比最高，以44.59%和44.44%的比例分列前两位。排名第三的是隐私获取类病毒，占比为5.85%。此外，诱骗欺诈、恶意扣费、远程控制、系统破坏和恶意传播类病毒的占比分别为1.94%、1.55%、0.80%、0.74%和0.08%。</span></strong><br/><br/>二维码成为今年上半年主流病毒的渠道来源，占比高达20.80%。由于二维码在各大领域逐渐普及，让越来越多的用户养成了随手扫码的习惯，制毒者也加大了针对二维码渠道的病毒投放比例。部分被嵌入病毒的二维码，只要一扫就会自动下载恶意病毒，轻则造成手机中毒，重则导致个人隐私信息泄露，造成财产损失。<br/><br/>扫码有风险，扫码需谨慎！</span></p><p><br/></p>', '1502174295', 'ss', null, '1');
INSERT INTO `article` VALUES ('5', '速读法22', '速读法2', '速读法2', null, '<p>速读法速读法速读法速读法速读法222222</p>', '1502177359', '速读法2', null, '5');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cate_name` varchar(50) NOT NULL COMMENT '栏目名称',
  `cate_title` varchar(255) DEFAULT NULL COMMENT '栏目标题',
  `cate_keywords` varchar(255) DEFAULT NULL COMMENT '关键词',
  `cate_description` varchar(255) DEFAULT NULL COMMENT '描述',
  `cate_view` int(11) DEFAULT NULL COMMENT '查看次数',
  `cate_order` int(10) NOT NULL COMMENT '排序',
  `cate_pid` int(10) NOT NULL COMMENT '父Id',
  PRIMARY KEY (`cate_id`),
  UNIQUE KEY `cate_id` (`cate_id`) USING BTREE,
  KEY `cate_pid` (`cate_pid`) USING BTREE,
  KEY `cate_order` (`cate_order`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='文章分类';

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '新闻', '标题', '关键字', '描述', '0', '0', '0');
INSERT INTO `category` VALUES ('2', '体育', '', '', '', '0', '0', '0');
INSERT INTO `category` VALUES ('3', '金融', '', '', '', '0', '0', '0');
INSERT INTO `category` VALUES ('4', '热点新闻', '热点新闻', '', '', '0', '0', '1');
INSERT INTO `category` VALUES ('5', '军事新闻', '军事新闻', '军事新闻', '军事新闻军事新闻', '0', '0', '1');
INSERT INTO `category` VALUES ('6', '腾讯体育', '腾讯体育', '', '', '0', '0', '2');
INSERT INTO `category` VALUES ('7', '虎扑体育', '虎扑体育', '', '', '0', '0', '2');
INSERT INTO `category` VALUES ('8', '深圳金融', '深圳金融', '', '', '0', '0', '3');
INSERT INTO `category` VALUES ('9', '香港金融', '香港金融', '', '', '0', '0', '3');

-- ----------------------------
-- Table structure for `links`
-- ----------------------------
DROP TABLE IF EXISTS `links`;
CREATE TABLE `links` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '名称',
  `link_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '标题',
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '链接',
  `link_order` int(11) NOT NULL DEFAULT '0' COMMENT '名称',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of links
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2017_08_08_085201_create_links_table', '1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='管理员用户表';

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'lzx', '2911012668@qq.com', '$2y$10$loY7F4vesaxZvmeWIGi1OeKp03fLmAzcZ6grPcSfRyRTCpQd1BAAy', 'OOjl4AhyVxflNh1oLhCa2s00VroSTnB2Ai50IdvnjVQ763NkEjSWI4WKMFKB', '2017-07-26 06:20:26', '2017-07-26 06:20:26');
