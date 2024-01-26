-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        10.4.28-MariaDB - mariadb.org binary distribution
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- daily-art 데이터베이스 구조 내보내기
CREATE DATABASE IF NOT EXISTS `daily-art`;
USE `daily-art`;

-- 테이블 daily-art.address 구조 내보내기
CREATE TABLE IF NOT EXISTS `address` (
  `Userid` varchar(45) NOT NULL,
  `zip_code` int(10) NOT NULL,
  `user_address1` varchar(30) NOT NULL,
  `user_address2` varchar(30) NOT NULL,
  PRIMARY KEY (`Userid`),
  CONSTRAINT `FK_User_TO_address_1` FOREIGN KEY (`Userid`) REFERENCES `User` (`Userid`)
);

-- 테이블 daily-art.Art 구조 내보내기
CREATE TABLE IF NOT EXISTS `Art` (
  `artId` varchar(30) NOT NULL,
  `art_img_id` varchar(50) NOT NULL,
  `artist_code` varchar(30) NOT NULL,
  `art_type` varchar(50) NOT NULL COMMENT '실물/디지털/오브제',
  `name` varchar(30) NOT NULL,
  `descript` varchar(300) DEFAULT NULL,
  `w_intro` varchar(500) DEFAULT NULL,
  `material` varchar(300) DEFAULT NULL,
  `start_price` int(10) NOT NULL,
  `current_price` int(10) NOT NULL,
  `registration_date` datetime NOT NULL,
  `bid_start_time` datetime NOT NULL,
  `closing_time` datetime NOT NULL,
  `art_status` int(1) NOT NULL COMMENT '경매 전,(0) 경매 중(1), 경매종료(2)',
  PRIMARY KEY (`artId`,`art_img_id`,`artist_code`) USING BTREE,
  KEY `FK_image_TO_Art_1` (`art_img_id`),
  KEY `FK_artist_TO_Art_1` (`artist_code`),
  CONSTRAINT `FK_artist_TO_Art_1` FOREIGN KEY (`artist_code`) REFERENCES `artist` (`artist_code`),
  CONSTRAINT `FK_image_TO_Art_1` FOREIGN KEY (`art_img_id`) REFERENCES `image` (`art_img_id`)
);

-- 테이블 daily-art.art-category 구조 내보내기
CREATE TABLE IF NOT EXISTS `art-category` (
  `artId` varchar(30) NOT NULL,
  `category_Id` int(5) NOT NULL,
  PRIMARY KEY (`artId`,`category_Id`),
  KEY `FK_Category_TO_art-category_1` (`category_Id`),
  CONSTRAINT `FK_Art_TO_art-category_1` FOREIGN KEY (`artId`) REFERENCES `Art` (`artId`),
  CONSTRAINT `FK_Category_TO_art-category_1` FOREIGN KEY (`category_Id`) REFERENCES `Category` (`category_Id`)
) ;

-- 내보낼 데이터가 선택되어 있지 않습니다.

-- 테이블 daily-art.artist 구조 내보내기
CREATE TABLE IF NOT EXISTS `artist` (
  `artist_code` varchar(30) NOT NULL,
  `Userid` varchar(45) NOT NULL,
  `artist_name` varchar(10) NOT NULL,
  `artist_intro` varchar(300) DEFAULT NULL,
  `homepage` varchar(100) DEFAULT NULL,
  `artist_sns` varchar(100) DEFAULT NULL,
  `artist_status` int(1) NOT NULL COMMENT '작가 계정인지 아닌지/정지당한 계정인지',
  PRIMARY KEY (`artist_code`,`Userid`),
  KEY `FK_User_TO_artist_1` (`Userid`),
  CONSTRAINT `FK_User_TO_artist_1` FOREIGN KEY (`Userid`) REFERENCES `User` (`Userid`)
) ;

-- 내보낼 데이터가 선택되어 있지 않습니다.

-- 테이블 daily-art.artist-image 구조 내보내기
CREATE TABLE IF NOT EXISTS `artist-image` (
  `artist_code` varchar(30) NOT NULL,
  `art_img_id` varchar(50) NOT NULL,
  PRIMARY KEY (`artist_code`,`art_img_id`),
  KEY `FK_image_TO_artist-image_1` (`art_img_id`),
  CONSTRAINT `FK_artist_TO_artist-image_1` FOREIGN KEY (`artist_code`) REFERENCES `artist` (`artist_code`),
  CONSTRAINT `FK_image_TO_artist-image_1` FOREIGN KEY (`art_img_id`) REFERENCES `image` (`art_img_id`)
) ;

-- 내보낼 데이터가 선택되어 있지 않습니다.

-- 테이블 daily-art.bid 구조 내보내기
CREATE TABLE IF NOT EXISTS `bid` (
  `bidid` varchar(30) NOT NULL,
  `Userid` varchar(45) NOT NULL,
  `artId` varchar(35) NOT NULL,
  `bid_price` int(20) NOT NULL,
  `bid_time` datetime NOT NULL,
  PRIMARY KEY (`bidid`)
);

-- 테이블 daily-art.Category 구조 내보내기
CREATE TABLE IF NOT EXISTS `Category` (
  `category_Id` int(5) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  PRIMARY KEY (`category_Id`)
);

-- 테이블 daily-art.image 구조 내보내기
CREATE TABLE IF NOT EXISTS `image` (
  `art_img_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img_path` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`art_img_id`)
);

-- 테이블 daily-art.Likes 구조 내보내기
CREATE TABLE IF NOT EXISTS `Likes` (
  `artId` varchar(30) NOT NULL,
  `Userid` varchar(45) NOT NULL,
  PRIMARY KEY (`artId`,`Userid`),
  KEY `FK_User_TO_Likes_1` (`Userid`),
  CONSTRAINT `FK_Art_TO_Likes_1` FOREIGN KEY (`artId`) REFERENCES `Art` (`artId`),
  CONSTRAINT `FK_User_TO_Likes_1` FOREIGN KEY (`Userid`) REFERENCES `User` (`Userid`)
);


-- 테이블 daily-art.payment 구조 내보내기
CREATE TABLE IF NOT EXISTS `payment` (
  `Userid` varchar(45) NOT NULL,
  `bank_name` varchar(10) NOT NULL,
  `account_holder` varchar(10) NOT NULL,
  `account_number` int(20) NOT NULL,
  PRIMARY KEY (`Userid`),
  CONSTRAINT `FK_User_TO_payment_1` FOREIGN KEY (`Userid`) REFERENCES `User` (`Userid`)
);

-- 테이블 daily-art.q_write 구조 내보내기
CREATE TABLE IF NOT EXISTS `q_write` (
  `Q_write_id` varchar(30) NOT NULL,
  `art_img_id` varchar(50) NOT NULL,
  `Q_write_select` varchar(5) NOT NULL,
  `Q_write_title` varchar(50) NOT NULL,
  `Q_write_content` text NOT NULL,
  `Q_write_time` date NOT NULL DEFAULT current_timestamp(),
  `user_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Q_write_id`,`art_img_id`) USING BTREE,
  KEY `FK_User_QWrite` (`user_id`) USING BTREE,
  CONSTRAINT `FK_User_QWrite` FOREIGN KEY (`user_id`) REFERENCES `user` (`Userid`)
);

-- 테이블 daily-art.review 구조 내보내기
CREATE TABLE IF NOT EXISTS `review` (
  `review_id` varchar(30) NOT NULL,
  `artId` varchar(30) NOT NULL,
  `Userid` varchar(45) NOT NULL,
  `Review_descript` varchar(300) NOT NULL,
  `Review_number` datetime NOT NULL,
  `star_ratings` decimal(2,1) NOT NULL COMMENT '10점이 최대',
  PRIMARY KEY (`review_id`)
);

-- 테이블 daily-art.User 구조 내보내기
CREATE TABLE IF NOT EXISTS `User` (
  `Userid` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `birth` date NOT NULL,
  `join_date` datetime NOT NULL,
  `reserve` int(30) NOT NULL,
  `user_status` int(1) NOT NULL,
  PRIMARY KEY (`Userid`)
);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
