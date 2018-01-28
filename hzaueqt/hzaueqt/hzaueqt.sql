-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-02-22 13:56:48
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hzaueqt`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_about`
--

CREATE TABLE `tp_about` (
  `aboutcnt` text NOT NULL,
  `aboutname` varchar(100) NOT NULL,
  `aboutid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_about`
--

INSERT INTO `tp_about` (`aboutcnt`, `aboutname`, `aboutid`) VALUES
('<p><span style="color: rgb(68, 68, 68); font-family: " times="" new="" font-size:="" letter-spacing:="">作物学实验教学中心成立于2002年，2007年批准为湖北省实验教学示范中心，2008年批准为国家级实验教学示范中心建设单位。拥有作物学国家一级重点学科和植物保护学湖北省重点学科，作物学和植物保护学两个一级学科博士后科研流动站；依托平台有作物遗传改良国家重点实验室、国家农作物分子技术育种中心、国家植物基因研究中心、国家油菜工程技术研究中心和国家油菜武汉改良分中心等5个国家级重点实验室与工程中心，7个省部级重点实验室和研发中心，8个校级研发中心。 中心有实验及基地用房7560平米，温室、网室群3880平米，校内本科实习用地40多亩，形成了植物生理生化、通用显微观察、多功能化学分析、生态与信息4个大类教学功能实验室，1个大学生创新实验室，1个中心共享平台，1个校内实践创新基地和3个校外大型综合实习基地的实践教学平台，仪器设备总数7860台/件，总值7852万元，可同时开出15个班次不同类型的课程实验、实习。面向全校17个专业的本科生，开设52门实验课程。</span></p>', '中心简介', 1),
('<p><span style="color: rgb(68, 68, 68); font-family: &quot;Times New Roman&quot;, Times, serif; font-size: 13px; letter-spacing: 1px;">中国高等农业教育起点之一。学校前身是清朝光绪年间湖广总督张之洞1898年创办的湖北农务学堂。几经演变，1952年，武汉大学农学院和湖北农学院的全部系科以及中山大学等6所综合性大学农学院的部分系科组建成立华中农学院。1979年，经国务院批准列为全国重点大学，直属农业部。1985年，更名为华中农业大学。2000年，由农业部划转教育部直属领导。2005年，进入国家“211工程”建设行列。党和国家领导亲切关怀。董必武、李先念等先后为学校题词和题写校名。1998年，时任中共中央总书记、国家主席江泽民为学校百年校庆亲笔题词。2011年，时任中共中央总书记、国家主席胡锦涛听取我校关于生物产业的汇报。2013年，中共中央总书记、国家主席习近平为我校“本禹志愿服务队”亲笔回信。校园环境得天独厚。校园位于湖北省武汉市武昌南湖狮子山,占地面积495万㎡（7425亩），三面环湖，风景秀丽，环境幽雅，建筑楼群鳞次栉比，自然园林风貌引人入胜。学科优势特色明显。在2012年全国第三轮一级学科评估中，6个学科名列同类学科前三位。其中，园艺学第1，畜牧学、兽医学第2，作物学、水产、农林经济管理第3，农业资源与环境第5，植物保护第7，生物学第8（排名率进入前10%），食品科学与工程第10（排名率进入前20%）。农业科学、植物与动物学、化学、生物学与生物化学、分子生物学与遗传学五个学科领域进入ESI国际同类学科领域前1%。教育体系完整。现有学院（部）18个，本科专业57个，硕士学位授权一级学科19个，二级学科102个，博士学位授权一级学科13个，二级学科65个，博士后科研流动站13个。全日制在校学生26196人，其中本科生18763人，研究生7433人。硕彦俊秀荟萃。现有教职工2600多人，其中教师1569人，教授340人。有中国科学院院士1人，中国工程院院士4人，美国科学院外籍院士1人，第三世界科学院院士2人，千人计划专家20人，万人计划专家4人，长江学者23人，国家杰青19人，973计划首席科学家6人，现代农业产业技术体系首席科学家1人、岗位科学家39人。国家自然科学基金创新研究群体3个，省部级优秀创新团队38个。国家级教学名师4人，国家教学团队7个。教育教学改革卓有成效。累计获国家级教学成果奖22项，其中特等奖1项、一等奖3项、二等奖18项。“十二五”期间，获批国家教育体制改革项目1项、国家专业综合改革试点专业2个、国家“卓越工程师教育培训计划”专业2个、国家“卓越农林人才教育培养计划”专业8个、国家级实验教学示范中心4个、国家级大学生校外实践基地10个、教育部农业部农科教合作人才培养基地6个、国家级精品资源共享课32门、国家级精品视频公开课10门、国家级“十二五”规划教材18种。科技实力雄厚。有国家重点实验室2个，国家地方联合工程实验室1个，国家专业实验室4个，部省级重点（工程）实验室21个，国际科技合作基地5个，国家工程（技术）研究中心4个，部省级工程（技术）研究中心24个，校企共建实验室（研发中心）28个，省级人文社科重点研究基地2个。“十二五”期间，获批科研项目5388项，经费31.29亿元。在杂交油菜、绿色水稻、优质种猪、动物疫苗、优质柑橘、试管种薯等研究领域，取得一批享誉国内外的标志性成果。精神文明建设成绩优异。1996年以来，学校连续十次被评为湖北省最佳文明单位，2005年获全国精神文明建设先进单位，2008年以来，三度荣膺全国文明单位。</span></p>', '机构设置', 2),
('<p><span style="color: rgb(68, 68, 68); font-family: " times="" new="" font-size:="" letter-spacing:="">中国高等农业教育起点之一。学校前身是清朝光绪年间湖广总督张之洞1898年创办的湖北农务学堂。几经演变，1952年，武汉大学农学院和湖北农学院的全部系科以及中山大学等6所综合性大学农学院的部分系科组建成立华中农学院。1979年，经国务院批准列为全国重点大学，直属农业部。1985年，更名为华中农业大学。2000年，由农业部划转教育部直属领导。2005年，进入国家“211工程”建设行列。党和国家领导亲切关怀。董必武、李先念等先后为学校题词和题写校名。1998年，时任中共中央总书记、国家主席江泽民为学校百年校庆亲笔题词。2011年，时任中共中央总书记、国家主席胡锦涛听取我校关于生物产业的汇报。2013年，中共中央总书记、国家主席习近平为我校“本禹志愿服务队”亲笔回信。校园环境得天独厚。校园位于湖北省武汉市武昌南湖狮子山,占地面积495万㎡（7425亩），三面环湖，风景秀丽，环境幽雅，建筑楼群鳞次栉比，自然园林风貌引人入胜。学科优势特色明显。在2012年全国第三轮一级学科评估中，6个学科名列同类学科前三位。其中，园艺学第1，畜牧学、兽医学第2，作物学、水产、农林经济管理第3，农业资源与环境第5，植物保护第7，生物学第8（排名率进入前10%），食品科学与工程第10（排名率进入前20%）。农业科学、植物与动物学、化学、生物学与生物化学、分子生物学与遗传学五个学科领域进入ESI国际同类学科领域前1%。教育体系完整。现有学院（部）18个，本科专业57个，硕士学位授权一级学科19个，二级学科102个，博士学位授权一级学科13个，二级学科65个，博士后科研流动站13个。全日制在校学生26196人，其中本科生18763人，研究生7433人。硕彦俊秀荟萃。现有教职工2600多人，其中教师1569人，教授340人。有中国科学院院士1人，中国工程院院士4人，美国科学院外籍院士1人，第三世界科学院院士2人，千人计划专家20人，万人计划专家4人，长江学者23人，国家杰青19人，973计划首席科学家6人，现代农业产业技术体系首席科学家1人、岗位科学家39人。国家自然科学基金创新研究群体3个，省部级优秀创新团队38个。国家级教学名师4人，国家教学团队7个。教育教学改革卓有成效。累计获国家级教学成果奖22项，其中特等奖1项、一等奖3项、二等奖18项。“十二五”期间，获批国家教育体制改革项目1项、国家专业综合改革试点专业2个、国家“卓越工程师教育培训计划”专业2个、国家“卓越农林人才教育培养计划”专业8个、国家级实验教学示范中心4个、国家级大学生校外实践基地10个、教育部农业部农科教合作人才培养基地6个、国家级精品资源共享课32门、国家级精品视频公开课10门、国家级“十二五”规划教材18种。科技实力雄厚。有国家重点实验室2个，国家地方联合工程实验室1个，国家专业实验室4个，部省级重点（工程）实验室21个，国际科技合作基地5个，国家工程（技术）研究中心4个，部省级工程（技术）研究中心24个，校企共建实验室（研发中心）28个，省级人文社科重点研究基地2个。“十二五”期间，获批科研项目5388项，经费31.29亿元。在杂交油菜、绿色水稻、优质种猪、动物疫苗、优质柑橘、试管种薯等研究领域，取得一批享誉国内外的标志性成果。精神文明建设成绩优异。1996年以来，学校连续十次被评为湖北省最佳文明单位，2005年获全国精神文明建设先进单位，2008年以来，三度荣膺全国文明单位。</span></p>', '团队建设', 3),
('<p><span style="color: rgb(68, 68, 68); font-family: &quot;Times New Roman&quot;, Times, serif; font-size: 13px; letter-spacing: 1px;">中国高等农业教育起点之一。学校前身是清朝光绪年间湖广总督张之洞1898年创办的湖北农务学堂。几经演变，1952年，武汉大学农学院和湖北农学院的全部系科以及中山大学等6所综合性大学农学院的部分系科组建成立华中农学院。1979年，经国务院批准列为全国重点大学，直属农业部。1985年，更名为华中农业大学。2000年，由农业部划转教育部直属领导。2005年，进入国家“211工程”建设行列。党和国家领导亲切关怀。董必武、李先念等先后为学校题词和题写校名。1998年，时任中共中央总书记、国家主席江泽民为学校百年校庆亲笔题词。2011年，时任中共中央总书记、国家主席胡锦涛听取我校关于生物产业的汇报。2013年，中共中央总书记、国家主席习近平为我校“本禹志愿服务队”亲笔回信。校园环境得天独厚。校园位于湖北省武汉市武昌南湖狮子山,占地面积495万㎡（7425亩），三面环湖，风景秀丽，环境幽雅，建筑楼群鳞次栉比，自然园林风貌引人入胜。学科优势特色明显。在2012年全国第三轮一级学科评估中，6个学科名列同类学科前三位。其中，园艺学第1，畜牧学、兽医学第2，作物学、水产、农林经济管理第3，农业资源与环境第5，植物保护第7，生物学第8（排名率进入前10%），食品科学与工程第10（排名率进入前20%）。农业科学、植物与动物学、化学、生物学与生物化学、分子生物学与遗传学五个学科领域进入ESI国际同类学科领域前1%。教育体系完整。现有学院（部）18个，本科专业57个，硕士学位授权一级学科19个，二级学科102个，博士学位授权一级学科13个，二级学科65个，博士后科研流动站13个。全日制在校学生26196人，其中本科生18763人，研究生7433人。硕彦俊秀荟萃。现有教职工2600多人，其中教师1569人，教授340人。有中国科学院院士1人，中国工程院院士4人，美国科学院外籍院士1人，第三世界科学院院士2人，千人计划专家20人，万人计划专家4人，长江学者23人，国家杰青19人，973计划首席科学家6人，现代农业产业技术体系首席科学家1人、岗位科学家39人。国家自然科学基金创新研究群体3个，省部级优秀创新团队38个。国家级教学名师4人，国家教学团队7个。教育教学改革卓有成效。累计获国家级教学成果奖22项，其中特等奖1项、一等奖3项、二等奖18项。“十二五”期间，获批国家教育体制改革项目1项、国家专业综合改革试点专业2个、国家“卓越工程师教育培训计划”专业2个、国家“卓越农林人才教育培养计划”专业8个、国家级实验教学示范中心4个、国家级大学生校外实践基地10个、教育部农业部农科教合作人才培养基地6个、国家级精品资源共享课32门、国家级精品视频公开课10门、国家级“十二五”规划教材18种。科技实力雄厚。有国家重点实验室2个，国家地方联合工程实验室1个，国家专业实验室4个，部省级重点（工程）实验室21个，国际科技合作基地5个，国家工程（技术）研究中心4个，部省级工程（技术）研究中心24个，校企共建实验室（研发中心）28个，省级人文社科重点研究基地2个。“十二五”期间，获批科研项目5388项，经费31.29亿元。在杂交油菜、绿色水稻、优质种猪、动物疫苗、优质柑橘、试管种薯等研究领域，取得一批享誉国内外的标志性成果。精神文明建设成绩优异。1996年以来，学校连续十次被评为湖北省最佳文明单位，2005年获全国精神文明建设先进单位，2008年以来，三度荣膺全国文明单位。</span></p>', '管理模式', 4);

-- --------------------------------------------------------

--
-- 表的结构 `tp_equipment`
--

CREATE TABLE `tp_equipment` (
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `ecase` smallint(6) NOT NULL DEFAULT '0',
  `stime` int(11) NOT NULL DEFAULT '0',
  `etime` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tp_header`
--

CREATE TABLE `tp_header` (
  `id` int(11) NOT NULL,
  `hdname` varchar(100) NOT NULL,
  `hdlink` varchar(100) NOT NULL,
  `oid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tp_imagics`
--

CREATE TABLE `tp_imagics` (
  `id` int(12) NOT NULL,
  `imgname` varchar(100) NOT NULL,
  `imgintro` text NOT NULL,
  `imgadd` varchar(100) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_imagics`
--

INSERT INTO `tp_imagics` (`id`, `imgname`, `imgintro`, `imgadd`, `type`) VALUES
(4, '中心基地', '校内实习基地坐落于学校西南角，占地面积达到xx平方米，设施设备齐全', './File/2017-02-22/1487752897.jpg', 0),
(5, '种子挂藏室', '种子挂藏室坐落于学校西南角，修建于1990年，面积达到xx平方米，含n间功能房，相关配套设备齐全 ', './File/2017-02-22/1487752933.jpg', 0),
(6, '校外实习基地', '鄂州基地地处湖北省鄂州市zz县xx镇，占地nnnn平面，为华农师生提供了丰富的教学资源 ', './File/2017-02-22/1487752960.jpg', 0),
(7, '气象观测场', '华中农业大学气象观测场位于学校东面，毗邻南湖，环境优美，设施设备条件完善，能最大程度满足本科生的教学工作及研究生的科研业务需要。', './File/2017-02-22/1487752991.jpg', 0),
(8, '植保三田实习基地', '植保三田实习基地坐落于学校东边，占地面积达到xx平方米，设施设备齐全，田间布局规划科学。 ', './File/2017-02-22/1487753016.jpg', 0),
(9, '', '华中农业大学作物学实验教学中心始建于2002年7月, 是在原植物生理生化实验室、遗传学实验室、作物学实验室、气象学实验室、农业信息与生态学实验室、植物病理实验室、昆虫实验室、农药实验室、真菌实验室等9个实验室的基础上合并整合形成植物生理生化、通用显微观察、多功能化学分析、生态与信息4个大类教学功能实验室，1个大学生创新实验室，1个中心共享平台，1个校内实践创新基地和3个大型校外综合实习基地。 ', './File/2017-02-22/1487753060.jpg', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_information`
--

CREATE TABLE `tp_information` (
  `id` int(12) NOT NULL,
  `inforname` varchar(100) NOT NULL,
  `inforcnt` text NOT NULL,
  `infortime` varchar(100) NOT NULL,
  `uid` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_information`
--

INSERT INTO `tp_information` (`id`, `inforname`, `inforcnt`, `infortime`, `uid`) VALUES
(4, '华中农业大学', '<p style="text-align: center;">这里是华中农业大学信息学院沸点工作室</p>', '2017-02-19', 5),
(5, '我院学子喜获湖北省第六届“挑战杯”特等奖', '<p>在6月7日结束的<a href="http://www.doc88.com/p-7788316126238.html" target="_blank" title="挑战杯">湖北省第六届“挑战杯”大学生课外学术科技作品竞赛</a>中，我院李国庆教授指导的2003级植物保护4班吴明德同学一举获得湖北省“挑战杯”大学生课外学术科技作品竞赛特等奖。&nbsp;</p>', '2017-02-22', 5),
(6, '油菜抗根肿病新品种选育取得突破进展', '<p><span style="margin: 0px; padding: 0px; color: rgb(85, 85, 85); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; font-size: 14px; text-indent: 28px;">核心提示：</span><span style="color: rgb(85, 85, 85); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑; font-size: 14px; text-indent: 28px; background-color: rgb(255, 255, 255);">&nbsp;我校育成的我国首批具有应用价值的两个抗根肿病品种，对根肿病4号生理小种具有免疫抗性，对保证我国油菜安全生产具有重要意义，也为油菜抗根肿病育种提供了宝贵资源。</span></p>', '2017-02-22', 5);

-- --------------------------------------------------------

--
-- 表的结构 `tp_link`
--

CREATE TABLE `tp_link` (
  `id` int(11) NOT NULL,
  `linkname` varchar(100) NOT NULL,
  `linkadd` varchar(1000) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_link`
--

INSERT INTO `tp_link` (`id`, `linkname`, `linkadd`, `type`) VALUES
(4, '植物科学技术学院', 'http://cpst.hzau.edu.cn/', 0),
(5, 'Undergraduate Courses', 'http://www.undergraduate.study.cam.ac.uk/courses', 0),
(6, 'Graduate Courses', 'http://www.ox.ac.uk/admissions/graduate/courses', 0),
(7, 'Postgraduate Research', 'http://www.surrey.ac.uk/postgraduate/research', 0),
(8, 'Lifelong Learning', 'https://www.skillsyouneed.com/learn/lifelong-learning.html', 0),
(9, '百度', 'http://www.baidu.com', 1),
(10, '亚马逊', 'http://www.amazon.cn', 1),
(11, '谷歌', 'http://www.google.com', 1),
(12, '搜狗', 'http://www.sogou.com', 1),
(13, '华中农业大学', 'http://www.hzau.edu.cn/2014/ch/', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_news`
--

CREATE TABLE `tp_news` (
  `id` int(12) NOT NULL,
  `newtitle` varchar(100) NOT NULL,
  `newcontent` text NOT NULL,
  `oldauthor` varchar(100) NOT NULL,
  `newauthor` varchar(100) NOT NULL,
  `clicknum` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_news`
--

INSERT INTO `tp_news` (`id`, `newtitle`, `newcontent`, `oldauthor`, `newauthor`, `clicknum`) VALUES
(1, '华中农业大学', '<p>我是朱传波</p>', '朱传波', '朱传波', 9),
(4, '我院学子喜获湖北省第六届“挑战杯”特等奖', '&lt;p&gt;在6月7日结束的湖北省第六届“挑战杯”大学生课外学术科技作品竞赛中，我院李国庆教授指导的2003级植物保护4班吴明德同学一举获得湖北省“挑战杯”大学生课外学术科技作品竞赛特等奖。 &amp;nbsp;&lt;/p&gt;', '逗比波波', '哈哈波', 5);

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE `tp_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `usertype` smallint(6) NOT NULL DEFAULT '0',
  `userid` bigint(64) NOT NULL,
  `userpass` varchar(100) NOT NULL,
  `userblack` smallint(6) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `username`, `usertype`, `userid`, `userpass`, `userblack`) VALUES
(1, '朱传波', 0, 2015317200402, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_about`
--
ALTER TABLE `tp_about`
  ADD PRIMARY KEY (`aboutid`);

--
-- Indexes for table `tp_equipment`
--
ALTER TABLE `tp_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_header`
--
ALTER TABLE `tp_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_imagics`
--
ALTER TABLE `tp_imagics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_information`
--
ALTER TABLE `tp_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_link`
--
ALTER TABLE `tp_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_news`
--
ALTER TABLE `tp_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_user`
--
ALTER TABLE `tp_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tp_about`
--
ALTER TABLE `tp_about`
  MODIFY `aboutid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `tp_equipment`
--
ALTER TABLE `tp_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tp_header`
--
ALTER TABLE `tp_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `tp_imagics`
--
ALTER TABLE `tp_imagics`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `tp_information`
--
ALTER TABLE `tp_information`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `tp_link`
--
ALTER TABLE `tp_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `tp_news`
--
ALTER TABLE `tp_news`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `tp_user`
--
ALTER TABLE `tp_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
