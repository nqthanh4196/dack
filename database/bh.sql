-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 201 at 07:46 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bh`
--

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `mahd` varchar(45) NOT NULL,
  `masp` varchar(45) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `dongia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`mahd`, `masp`, `soluong`, `dongia`) VALUES
('1', '1', 2, 333),
('2', '2', 3, 333),
('3', '3', 10, 44);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(45) NOT NULL,
  `ngaylap` datetime DEFAULT NULL,
  `makh` varchar(45) DEFAULT NULL,
  `manv` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `ngaylap`, `makh`, `manv`) VALUES
('1', '0000-00-00 00:00:00', '1', '2'),
('2', '0000-00-00 00:00:00', '2', '1'),
('3', '0000-00-00 00:00:00', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `khachang`
--

CREATE TABLE `khachang` (
  `makh` varchar(45) NOT NULL,
  `hoten` varchar(45) DEFAULT NULL,
  `diachi` varchar(45) DEFAULT NULL,
  `dienthoai` varchar(45) DEFAULT NULL,
  `namsinh` varchar(45) DEFAULT NULL,
  `gioitinh` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachang`
--

INSERT INTO `khachang` (`makh`, `hoten`, `diachi`, `dienthoai`, `namsinh`, `gioitinh`) VALUES
('1', 'Huy', 'Chợ Lớn', '911', '1996', 'Nứ'),
('2', 'Bò', 'Quận 8 ', '119', '1965', 'Nữ'),
('3', 'Phúc', 'Thủ Dức', '114', '1969', 'Nam');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloai` varchar(45) NOT NULL,
  `tenloai` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloai`, `tenloai`) VALUES
('1', 'Laptop'),
('2', 'Bàn Phím'),
('3', 'Chuột');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` varchar(45) NOT NULL,
  `hoten` varchar(45) DEFAULT NULL,
  `namsinh` varchar(45) DEFAULT NULL,
  `gioitinh` varchar(45) DEFAULT NULL,
  `cmnd` varchar(45) DEFAULT NULL,
  `nvql` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `hoten`, `namsinh`, `gioitinh`, `cmnd`, `nvql`) VALUES
('1', 'Đức', '1996', 'nam', '1235', '2'),
('2', 'Thanh', '1996', 'Nam', '5432', '1'),
('3', 'Bình', '1996', 'Nam', '5342', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(45) NOT NULL,
  `ten` varchar(45) DEFAULT NULL,
  `giatien` int(11) DEFAULT NULL,
  `slton` int(11) DEFAULT NULL,
  `donvitinh` varchar(45) DEFAULT NULL,
  `maloai` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `ten`, `giatien`, `slton`, `donvitinh`, `maloai`) VALUES
('1', 'Bàn phím Ducky One PBT Grey Blue/ Blue', 2550000, 33, 'VND', '2'),
('2', 'Chuột SteelSeries Rival 300 Hyper Beast', 159000, 565, 'VND', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`mahd`,`masp`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Indexes for table `khachang`
--
ALTER TABLE `khachang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
