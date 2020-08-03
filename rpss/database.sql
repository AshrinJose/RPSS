-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.8 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table rps.tbl_bank: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_bank` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_bank` ENABLE KEYS */;

-- Dumping data for table rps.tbl_cash_memo: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_cash_memo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cash_memo` ENABLE KEYS */;

-- Dumping data for table rps.tbl_feedback: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_feedback` DISABLE KEYS */;
INSERT INTO `tbl_feedback` (`id`, `name`, `email`, `feedback`) VALUES
	(1, 'Jose K M', 'ash@g.com', 'asdfghjkertyujkl\r\nasdfgh');
/*!40000 ALTER TABLE `tbl_feedback` ENABLE KEYS */;

-- Dumping data for table rps.tbl_login: ~8 rows (approximately)
/*!40000 ALTER TABLE `tbl_login` DISABLE KEYS */;
INSERT INTO `tbl_login` (`username`, `code_no`, `type`, `password`, `status`) VALUES
	('aaron', 1104, 2, '123', 0),
	('admin', 1, 1, '123', 1),
	('cmp2', 1202, 3, '123', 1),
	('drc', 1201, 3, '123', 1),
	('john', 1102, 2, '123', 1),
	('jose', 1101, 2, '123', 1),
	('ligy', 1103, 2, '123', 0),
	('pala', 1203, 3, '123', 1);
/*!40000 ALTER TABLE `tbl_login` ENABLE KEYS */;

-- Dumping data for table rps.tbl_personaldetails: ~8 rows (approximately)
/*!40000 ALTER TABLE `tbl_personaldetails` DISABLE KEYS */;
INSERT INTO `tbl_personaldetails` (`code_no`, `name`, `address`, `place`, `district`, `acc_no`, `res_no`, `mob_no`, `email`, `type`) VALUES
	(1, 'admin', 'a', 'a', 'a', NULL, 0, 0, 'a@a.com', 1),
	(1101, 'Jose K M', 'vhjkhkl', 'hkhkj', 'hhkj', 678, 876, 786, 'ash@g.com', 2),
	(1102, 'John', 'bhbujik', 'hjk', 'jkhbjk', 7899, 2147483647, 1234567891, 'j@gmail.com', 2),
	(1103, 'Ligy', 'fghjkl', 'fghjkl', 'fghjkl;', 123456, 2147483647, 1234567891, 'l@gmail.com', 2),
	(1104, 'aaron', 'wertyuio', 'qwertyui', 'wertyui', 1234567, 2147483647, 1234567891, 'a@gmail.com', 2),
	(1201, 'vggv', 'gjjn', 'hu', 'yioklm', 78987, 567, 567, 'vggv@g.com', 3),
	(1202, 'kavanar', 'fghjkl', 'dfghjkl;', 'fghjkl', 1234, 2147483647, 1234567891, 'k@gmail.com', 3),
	(1203, 'pala marketing', 'wer', 'ertyui', 'ertyuio', 234567, 2147483647, 1234567891, 'pala@gam.com', 3);
/*!40000 ALTER TABLE `tbl_personaldetails` ENABLE KEYS */;

-- Dumping data for table rps.tbl_plantation: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_plantation` DISABLE KEYS */;
INSERT INTO `tbl_plantation` (`pid`, `code_no`, `area`, `location`, `place`, `district`, `clone`, `tapping_yr`, `tapping_panel`, `tapping_system`, `rain_guard`) VALUES
	(2, 1101, '30-40', 'ftdsdc', 'jiokl', 'mklj', 'RRIM 800', '1995', 'hgts', 'ttyuik', 1),
	(3, 1102, '25-30', 'bfghj', 'fghjkl', 'fghjk', 'RRIM 700', '2001', 'sdfghjk', 'dfghj', 0),
	(4, 1103, '25-30', 'fghjkl', 'wertyui', 'qwertyu', 'RRIM 800', '1997', 'wertyu', 'qwertyu', 1),
	(5, 1104, '1-25', 'erfghjkl', 'cvbnm,.', 'cvbnm,', 'RRIM 700', '1998', 'fghjk', 'ghjk', 1);
/*!40000 ALTER TABLE `tbl_plantation` ENABLE KEYS */;

-- Dumping data for table rps.tbl_salary: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_salary` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_salary` ENABLE KEYS */;

-- Dumping data for table rps.tbl_stock: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_stock` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_stock` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
