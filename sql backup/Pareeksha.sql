-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.86-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema paper
--

CREATE DATABASE IF NOT EXISTS paper;
USE paper;

--
-- Definition of table `admin4070`
--

DROP TABLE IF EXISTS `admin4070`;
CREATE TABLE `admin4070` (
  `no` int(11) NOT NULL default '0',
  `ques` varchar(40) default NULL,
  `a` varchar(40) default NULL,
  `b` varchar(40) default NULL,
  `c` varchar(40) default NULL,
  `d` varchar(40) default NULL,
  `ans` varchar(40) default NULL,
  PRIMARY KEY  (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin4070`
--

/*!40000 ALTER TABLE `admin4070` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin4070` ENABLE KEYS */;


--
-- Definition of table `givtest`
--

DROP TABLE IF EXISTS `givtest`;
CREATE TABLE `givtest` (
  `tid` int(10) unsigned NOT NULL default '0',
  `sid` int(10) unsigned NOT NULL default '0',
  `code` int(10) unsigned NOT NULL default '0',
  `marks` int(10) unsigned default NULL,
  PRIMARY KEY  (`tid`,`sid`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `givtest`
--

/*!40000 ALTER TABLE `givtest` DISABLE KEYS */;
INSERT INTO `givtest` (`tid`,`sid`,`code`,`marks`) VALUES 
 (1,1,4066,0),
 (1,3,4066,3),
 (1,4,4066,3),
 (1,5,4066,2),
 (1,6,4066,3),
 (1,7,4066,3),
 (1,8,4066,3),
 (1,9,4066,3),
 (1,10,4066,3),
 (3,4,4068,2);
/*!40000 ALTER TABLE `givtest` ENABLE KEYS */;


--
-- Definition of table `md4068`
--

DROP TABLE IF EXISTS `md4068`;
CREATE TABLE `md4068` (
  `no` int(11) NOT NULL default '0',
  `ques` varchar(40) default NULL,
  `a` varchar(40) default NULL,
  `b` varchar(40) default NULL,
  `c` varchar(40) default NULL,
  `d` varchar(40) default NULL,
  `ans` varchar(40) default NULL,
  PRIMARY KEY  (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md4068`
--

/*!40000 ALTER TABLE `md4068` DISABLE KEYS */;
/*!40000 ALTER TABLE `md4068` ENABLE KEYS */;


--
-- Definition of table `md4069`
--

DROP TABLE IF EXISTS `md4069`;
CREATE TABLE `md4069` (
  `no` int(11) NOT NULL default '0',
  `ques` varchar(40) default NULL,
  `a` varchar(40) default NULL,
  `b` varchar(40) default NULL,
  `c` varchar(40) default NULL,
  `d` varchar(40) default NULL,
  `ans` varchar(40) default NULL,
  PRIMARY KEY  (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md4069`
--

/*!40000 ALTER TABLE `md4069` DISABLE KEYS */;
INSERT INTO `md4069` (`no`,`ques`,`a`,`b`,`c`,`d`,`ans`) VALUES 
 (1,'C language is','procedural','object oriented','non procedural','none','A'),
 (2,'Android programming is done in','Java','C','.NET','HTML','A');
/*!40000 ALTER TABLE `md4069` ENABLE KEYS */;


--
-- Definition of table `paper`
--

DROP TABLE IF EXISTS `paper`;
CREATE TABLE `paper` (
  `no` int(10) unsigned NOT NULL default '0',
  `ques` varchar(100) default NULL,
  `a` varchar(45) default NULL,
  `b` varchar(45) default NULL,
  `c` varchar(45) default NULL,
  `d` varchar(45) default NULL,
  `ans` varchar(45) default NULL,
  PRIMARY KEY  (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

/*!40000 ALTER TABLE `paper` DISABLE KEYS */;
INSERT INTO `paper` (`no`,`ques`,`a`,`b`,`c`,`d`,`ans`) VALUES 
 (1,'Who is the creator of C language','Dennis Ritchie','Alan Turing','Larry Page','Mark Zuckerberg','A'),
 (2,'What is the syntax of clear screen function in C language','clrscr()','scanf()','printf()','getch()','A'),
 (3,'What is the syntax of function for character input from user in C language','getchar()','putch()','scanf()','printf()','A');
/*!40000 ALTER TABLE `paper` ENABLE KEYS */;


--
-- Definition of table `paperid`
--

DROP TABLE IF EXISTS `paperid`;
CREATE TABLE `paperid` (
  `id` int(10) unsigned NOT NULL,
  `code` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `tname` varchar(45) NOT NULL,
  PRIMARY KEY  (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=4071 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paperid`
--

/*!40000 ALTER TABLE `paperid` DISABLE KEYS */;
INSERT INTO `paperid` (`id`,`code`,`name`,`tname`) VALUES 
 (1,4066,'admin','paper'),
 (2,4067,'md','paper'),
 (3,4068,'md','md4068'),
 (4,4069,'md','md4069'),
 (5,4070,'admin','admin4070');
/*!40000 ALTER TABLE `paperid` ENABLE KEYS */;


--
-- Definition of table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(45) default NULL,
  `password` varchar(45) default NULL,
  `marks` int(10) unsigned default NULL,
  `sequence` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` (`id`,`name`,`password`,`marks`,`sequence`) VALUES 
 (1,'md','md',0,0),
 (2,'gp','gp',0,0),
 (3,'vaibhav','1',0,0),
 (4,'pranav','1',0,0),
 (5,'anurag','1',0,0),
 (6,'lakshya','1',0,0),
 (7,'suraj','1',0,0),
 (8,'shubham','1',0,0),
 (9,'pankaj','123',0,0),
 (10,'gaurav','23',0,0),
 (11,'shivam','123',0,0);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;


--
-- Definition of table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` (`id`,`name`,`password`) VALUES 
 (1,'md','md'),
 (2,'gp','gp'),
 (3,'kal','kal'),
 (4,'hi','w'),
 (5,'admin','w'),
 (6,'sds','sds'),
 (7,'himank','123');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
