-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 12:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayush`
--

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `CertificationKey` int(11) NOT NULL,
  `CertificationName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companycertifications`
--

CREATE TABLE `companycertifications` (
  `CompanyCertificationKey` int(11) NOT NULL,
  `Company` int(11) NOT NULL,
  `Certification` int(11) NOT NULL,
  `ValidityDate` date NOT NULL,
  `IsValid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companylicenses`
--

CREATE TABLE `companylicenses` (
  `CompanyLicenseKey` int(11) NOT NULL,
  `LicenseNumber` varchar(50) NOT NULL,
  `ValidityDate` date NOT NULL,
  `IsValid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `CompanyKey` int(11) NOT NULL,
  `CompanyName` varchar(200) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Location` varchar(250) NOT NULL,
  `LicenseKey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`CertificationKey`),
  ADD UNIQUE KEY `CertificationName` (`CertificationName`);

--
-- Indexes for table `companycertifications`
--
ALTER TABLE `companycertifications`
  ADD KEY `fk_companycertifications_company` (`Company`),
  ADD KEY `fk_companycertifications_certification` (`Certification`);

--
-- Indexes for table `companylicenses`
--
ALTER TABLE `companylicenses`
  ADD PRIMARY KEY (`CompanyLicenseKey`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`CompanyKey`),
  ADD UNIQUE KEY `CompanyName` (`CompanyName`),
  ADD KEY `fk_company_license` (`LicenseKey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `CertificationKey` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `companylicenses`
--
ALTER TABLE `companylicenses`
  MODIFY `CompanyLicenseKey` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `CompanyKey` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `companycertifications`
--
ALTER TABLE `companycertifications`
  ADD CONSTRAINT `fk_companycertifications_certification` FOREIGN KEY (`Certification`) REFERENCES `certifications` (`CertificationKey`),
  ADD CONSTRAINT `fk_companycertifications_company` FOREIGN KEY (`Company`) REFERENCES `company_details` (`CompanyKey`);

--
-- Constraints for table `company_details`
--
ALTER TABLE `company_details`
  ADD CONSTRAINT `fk_company_license` FOREIGN KEY (`LicenseKey`) REFERENCES `companylicenses` (`CompanyLicenseKey`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
