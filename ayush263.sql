-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 10:31 AM
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
  `LicenseNumber` varchar(11) NOT NULL,
  `ValidityDate` date NOT NULL,
  `IsValid` tinyint(1) NOT NULL,
  `Approved` tinyint(1) NOT NULL,
  `ApprovalDate` date NOT NULL,
  `ApprovedBy` varchar(255) NOT NULL,
  `ApprovalDesc` varchar(255) NOT NULL,
  `OnsiteApprovalBy` varchar(255) NOT NULL,
  `OnsiteApprovalStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companylicenses`
--

INSERT INTO `companylicenses` (`CompanyLicenseKey`, `LicenseNumber`, `ValidityDate`, `IsValid`, `Approved`, `ApprovalDate`, `ApprovedBy`, `ApprovalDesc`, `OnsiteApprovalBy`, `OnsiteApprovalStatus`) VALUES
(1, 'a1234567', '2017-03-27', 0, 0, '0000-00-00', '0', '', '', 0),
(2, 'a2222222222', '2017-04-25', 1, 0, '0000-00-00', '0', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `CompanyKey` int(11) NOT NULL,
  `CompanyName` varchar(200) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Location` varchar(250) NOT NULL,
  `LicenseKey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`CompanyKey`, `CompanyName`, `PhoneNumber`, `EmailAddress`, `Password`, `Location`, `LicenseKey`) VALUES
(1, 'abc', '04425502946', 'abc@gmail.com', '22119974', 'chennai', 1),
(2, 'aaa', '01125502946', 'aaa@gmail.com', '2211997', 'Ooty', 2);

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `DrugKey` int(11) NOT NULL,
  `DrugType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`DrugKey`, `DrugType`) VALUES
(1, 'Ayurveda'),
(2, 'Yoga'),
(3, 'Unani'),
(4, 'Siddha '),
(5, 'Homoeopathy');

-- --------------------------------------------------------

--
-- Table structure for table `drug_details`
--

CREATE TABLE `drug_details` (
  `DrugId` int(11) NOT NULL,
  `DrugName` varchar(250) NOT NULL,
  `Company` int(11) NOT NULL,
  `Ingredients` varchar(255) NOT NULL,
  `DrugUsage` varchar(255) NOT NULL,
  `Drug` int(11) NOT NULL,
  `Price` double NOT NULL,
  `ApprovedBy` varchar(255) NOT NULL,
  `ApprovalDesc` varchar(255) NOT NULL,
  `Approved` tinyint(1) NOT NULL,
  `Dosage` varchar(255) NOT NULL,
  `ApprovalDate` date NOT NULL,
  `OnsiteApprovalStatus` tinyint(1) NOT NULL,
  `OnsiteApprovalBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug_details`
--

INSERT INTO `drug_details` (`DrugId`, `DrugName`, `Company`, `Ingredients`, `DrugUsage`, `Drug`, `Price`, `ApprovedBy`, `ApprovalDesc`, `Approved`, `Dosage`, `ApprovalDate`, `OnsiteApprovalStatus`, `OnsiteApprovalBy`) VALUES
(123, 'abc', 1, 'aaa,bbb', 'aaa,bbb', 2, 45.89, '', '', 0, '', '0000-00-00', 0, '');

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
  ADD UNIQUE KEY `EmailAddress` (`EmailAddress`),
  ADD KEY `fk_company_license` (`LicenseKey`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`DrugKey`);

--
-- Indexes for table `drug_details`
--
ALTER TABLE `drug_details`
  ADD KEY `fk_companydetails_drugdetails` (`Company`),
  ADD KEY `fk_drugs_drugdetails` (`Drug`);

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
  MODIFY `CompanyLicenseKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `CompanyKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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

--
-- Constraints for table `drug_details`
--
ALTER TABLE `drug_details`
  ADD CONSTRAINT `fk_companydetails_drugdetails` FOREIGN KEY (`Company`) REFERENCES `company_details` (`CompanyKey`),
  ADD CONSTRAINT `fk_drugs_drugdetails` FOREIGN KEY (`Drug`) REFERENCES `drugs` (`DrugKey`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
