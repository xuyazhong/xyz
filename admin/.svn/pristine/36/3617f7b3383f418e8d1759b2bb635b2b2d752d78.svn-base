-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2011 at 05:24 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `librarian_svn`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `author_or_editor` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isbn` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publisher` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `copyright_year` year(4) DEFAULT NULL,
  `categories` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `audience` enum('General','Children','Teen','Youth') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'General',
  `media` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reference_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reference_no` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `status` enum('new request','acknowledged','on order','in stock','cancelled') COLLATE utf8_unicode_ci DEFAULT NULL,
  `borrower_id` int(11) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `created_by` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_by` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`book_id`),
  KEY `title` (`title`,`author_or_editor`),
  KEY `isbn` (`isbn`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=233 ;

--
-- Dumping data for table `books`
--


-- --------------------------------------------------------

--
-- Table structure for table `books_categories`
--

CREATE TABLE IF NOT EXISTS `books_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `books_categories`
--

INSERT INTO `books_categories` (`category_id`, `category_name`) VALUES
(1, 'Bible Study'),
(2, 'Old Testament'),
(3, 'New Testament'),
(4, 'Christian Ministries'),
(5, 'Counseling'),
(6, 'Christian Faith'),
(7, 'Doctrine'),
(8, 'Music'),
(9, 'Testamonies'),
(10, 'Missions'),
(11, 'Biography'),
(12, 'Studd, C. T.'),
(13, 'Discipleship'),
(14, 'The Church'),
(15, 'History'),
(16, 'Theology'),
(17, 'Instruction'),
(18, 'Crosby, Fanny'),
(19, 'Biblical Characters'),
(20, 'Christian Education'),
(21, 'Homiletics'),
(22, 'Social Issues'),
(23, 'Women'),
(24, 'Wesley, Susanna'),
(25, 'Christian Living'),
(26, 'Prayer'),
(27, 'Fiction'),
(28, 'Apologetics'),
(29, 'Testimonies'),
(30, 'Family'),
(31, 'Children'),
(32, 'Spiritual Warfare'),
(33, 'Bible Texts'),
(34, 'The Message'),
(35, 'Reference'),
(36, 'Communion with God'),
(37, 'Counsellng?'),
(38, 'Listening to God'),
(39, 'Bible Story'),
(40, 'Thankfulness'),
(41, 'Chistian Living'),
(42, 'Devotion'),
(43, 'James');

-- --------------------------------------------------------

--
-- Table structure for table `books_media`
--

CREATE TABLE IF NOT EXISTS `books_media` (
  `medium_id` int(11) NOT NULL AUTO_INCREMENT,
  `medium_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`medium_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `books_media`
--

INSERT INTO `books_media` (`medium_id`, `medium_name`) VALUES
(1, 'Book'),
(2, 'CD'),
(3, 'MP3'),
(4, 'VHS'),
(5, 'Book/CD');

-- --------------------------------------------------------

--
-- Table structure for table `dataface__version`
--

CREATE TABLE IF NOT EXISTS `dataface__version` (
  `version` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dataface__version`
--

INSERT INTO `dataface__version` (`version`) VALUES
(1690);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('READ ONLY','ADMIN') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'READ ONLY',
  PRIMARY KEY (`userid`),
  KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `role`) VALUES
(4, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'ADMIN');
