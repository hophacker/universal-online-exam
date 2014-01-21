-- MySQL dump 10.13  Distrib 5.5.22, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: dxks
-- ------------------------------------------------------
-- Server version	5.5.22-0ubuntu1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ans_histories`
--

DROP TABLE IF EXISTS `ans_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ans_histories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `answer` varchar(2000) DEFAULT NULL,
  `try_history_id` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5042 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(100) DEFAULT NULL,
  `enrol_year` int(11) DEFAULT NULL,
  `class_type` smallint(6) DEFAULT NULL,
  `major_id` int(11) DEFAULT NULL,
  `state` smallint(6) DEFAULT '1',
  `total_students` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `major_id` (`major_id`),
  KEY `major_id_2` (`major_id`),
  CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1627 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(60) NOT NULL,
  `paper_id` int(11) DEFAULT '-1',
  `state` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `educations`
--

DROP TABLE IF EXISTS `educations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `educations` (
  `edu_id` int(11) NOT NULL AUTO_INCREMENT,
  `edu_name` varchar(100) NOT NULL,
  `state` int(11) DEFAULT '1',
  PRIMARY KEY (`edu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `information`
--

DROP TABLE IF EXISTS `information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `information` (
  `title` varchar(1000) DEFAULT NULL,
  `info` varchar(2000) DEFAULT NULL,
  `info_date` date DEFAULT NULL,
  `state` smallint(6) DEFAULT '1',
  `department_id` int(11) NOT NULL DEFAULT '-1',
  `information_type_id` int(11) DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `info_manager_fk` (`department_id`),
  KEY `fk_information_manager` (`department_id`),
  KEY `fk_information_infomationtype` (`information_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `information_types`
--

DROP TABLE IF EXISTS `information_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `information_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `majors`
--

DROP TABLE IF EXISTS `majors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `majors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `major_name` varchar(100) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `state` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `dept_id` (`department_id`),
  CONSTRAINT `majors_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=328 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `managers`
--

DROP TABLE IF EXISTS `managers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `managers` (
  `m_user` varchar(25) DEFAULT NULL,
  `m_pwd` varchar(32) DEFAULT NULL,
  `m_name` varchar(25) NOT NULL,
  `department_id` int(11) DEFAULT NULL COMMENT '0：超级管理员 >0:校管理员',
  `state` smallint(6) DEFAULT '1',
  `type` smallint(6) DEFAULT '2',
  `last_login` datetime DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `m_user` (`m_user`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `numclass`
--

DROP TABLE IF EXISTS `numclass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `numclass` (
  `cla` varchar(20) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `state` smallint(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `parameters`
--

DROP TABLE IF EXISTS `parameters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parameters` (
  `name` varchar(200) DEFAULT NULL,
  `value` int(11) DEFAULT '0',
  `comment` varchar(800) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `times` int(11) DEFAULT NULL,
  `highest` int(11) DEFAULT NULL,
  `test_type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `promotion_ref_test_type` (`test_type_id`),
  CONSTRAINT `promotions_ibfk_1` FOREIGN KEY (`test_type_id`) REFERENCES `test_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `test_type_id` int(11) DEFAULT NULL,
  `q_text` varchar(2000) DEFAULT NULL,
  `q_cho` char(1) DEFAULT NULL,
  `q_a` varchar(1000) DEFAULT NULL,
  `q_b` varchar(400) DEFAULT NULL,
  `q_c` varchar(400) DEFAULT NULL,
  `q_d` varchar(400) DEFAULT NULL,
  `q_type` tinyint(4) DEFAULT '0' COMMENT '0:选择题,1:判断题,2解答题 ',
  `state` smallint(6) DEFAULT '1',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usage_scope` int(11) DEFAULT '0' COMMENT '0:考试加练习\n1:只可以考试\n暂时使用前两种\n2:只可以练习',
  PRIMARY KEY (`id`),
  KEY `ttid_foreign` (`test_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1624 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_user` varchar(25) NOT NULL,
  `s_num` varchar(25) DEFAULT NULL,
  `s_pwd` varchar(32) DEFAULT NULL,
  `s_name` varchar(25) NOT NULL,
  `s_class` varchar(100) DEFAULT NULL,
  `s_mail` varchar(40) DEFAULT NULL,
  `score_1` int(11) DEFAULT '-1',
  `score_2` int(11) DEFAULT '-1',
  `score_3` int(11) DEFAULT '-1',
  `score_ans` int(11) DEFAULT '-1',
  `score_type` int(11) DEFAULT '0',
  `end_sec` int(11) DEFAULT '-1',
  `state` smallint(6) DEFAULT '1',
  `s_date` date DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  `edu_id` int(11) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `s_phone` varchar(25) DEFAULT NULL,
  `s_grade` int(11) DEFAULT NULL,
  `read_message_id` varchar(1000) NOT NULL DEFAULT ',',
  `test_type_id` int(11) DEFAULT '2',
  `times` int(11) DEFAULT '0' COMMENT '该生总共参加的练习次数，如果test_type_id变换（初级-》高级），则需清0；\n',
  `highest` int(11) DEFAULT '0' COMMENT '该生参加考试的最高分，需清0（见times）;',
  `s_role` smallint(6) DEFAULT '0' COMMENT '用户角色，暂时废弃不用',
  `test_id` int(11) DEFAULT '0',
  `test_type_changed` tinyint(4) NOT NULL COMMENT '是否被管理员改变过考试等级,0:没有,1:有',
  PRIMARY KEY (`id`),
  UNIQUE KEY `s_user` (`s_user`),
  UNIQUE KEY `s_num` (`s_num`),
  KEY `class_id` (`class_id`),
  CONSTRAINT `students_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13802 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `suggestion_replies`
--

DROP TABLE IF EXISTS `suggestion_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suggestion_replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suggestion_id` int(11) NOT NULL COMMENT '回复主题的id',
  `content` varchar(2000) DEFAULT NULL COMMENT '回复的内容',
  `date` date NOT NULL COMMENT '回复的日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COMMENT='建议回复表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `suggestions`
--

DROP TABLE IF EXISTS `suggestions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(2000) NOT NULL,
  `target` int(11) NOT NULL DEFAULT '0' COMMENT '１表示给党校，０表示给开发者',
  `student_id` varchar(45) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `test_papers`
--

DROP TABLE IF EXISTS `test_papers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_papers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `comment` varchar(400) DEFAULT NULL,
  `using_department_ids` varchar(800) DEFAULT ',',
  `state` smallint(6) DEFAULT '1',
  `suffix` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `test_types`
--

DROP TABLE IF EXISTS `test_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sel_num` smallint(6) DEFAULT NULL,
  `sel_score` smallint(6) DEFAULT NULL,
  `jud_num` smallint(6) DEFAULT NULL,
  `jud_score` smallint(6) DEFAULT NULL,
  `ans_num` smallint(6) DEFAULT NULL,
  `ans_score` smallint(6) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL COMMENT '名称:初级，中级，高级...',
  `comment` varchar(1000) DEFAULT NULL,
  `style` tinyint(4) DEFAULT '0' COMMENT '0---抽取题库，１----抽取试卷',
  `grad_test_type_id` int(11) DEFAULT '-1' COMMENT '毕业可参加考试,-1:完全毕业',
  `pass_score` smallint(6) DEFAULT NULL,
  `exam_duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `begin_time` datetime DEFAULT '0000-00-00 00:00:00',
  `comment` varchar(1000) DEFAULT NULL,
  `second_begin_time` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '[有无]null:没有补考,其他：补考时间',
  `test_type_id` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `paper_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `active` tinyint(4) DEFAULT '1',
  `available` int(11) DEFAULT NULL COMMENT '有效时长，即在考试开始多长时间内登录考试可参加考试',
  PRIMARY KEY (`id`),
  KEY `fk_tests_1` (`test_type_id`),
  KEY `fk_tests_2` (`department_id`),
  KEY `to_department` (`id`),
  KEY `fr_departments` (`department_id`),
  CONSTRAINT `fr_departments` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `try_histories`
--

DROP TABLE IF EXISTS `try_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `try_histories` (
  `test_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sel_score` int(11) DEFAULT '0',
  `jud_score` int(11) DEFAULT '0',
  `ans_score` int(11) DEFAULT '0',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `test_type_id` int(11) DEFAULT NULL,
  `try_type` int(11) DEFAULT NULL COMMENT '0:练习\n1:考试',
  `test_id` int(11) DEFAULT NULL COMMENT '参加的考试批次',
  `has_checked` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81048 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-21  2:26:42
