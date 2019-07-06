CREATE DATABASE simplecrud;

USE simplecrud;

CREATE TABLE `simplecrud` (
  `nik` bigint(16) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `salary` int(8) NOT NULL,
  PRIMARY KEY  (`nik`)
);

INSERT INTO `simplecrud` (`nik`, `name`, `birthdate`, `gender`, `address`, `telp`, `email`, `position`, `salary`) VALUES
(3514111802950001, 'Faris Febrianto', '2019-06-01', 'M', 'Pasuruan', '+62891111111', 'farisfeb@gmail.com', 'Programmer', 4500000),
(3514111802950002, 'Alfian Himawan', '2019-06-02', 'M', 'Nganjuk', '+62891111112', 'alfianhimawan@gmail.com', 'UI/UX Developer', 4300000),
(3514111802950003, 'Sigit Pangestu', '2019-06-03', 'M', 'Kediri', '+62891111113', 'sigitpangestu@gmail.com', 'Vise Manager', 5500000),
(3514111802950004, 'Faris Abdi El Hakim', '2019-06-05', 'M', 'Lamongan', '+62891111113', 'farisabdi@gmail.com', 'User Requirement Collector', 4400000),
(3514111802950005, 'Bayu Septyo Adi', '2019-06-05', 'M', 'Nganjuk', '+62891111115', 'bayuseptyo@gmail.com', 'ERP Programmer', 4500000),
(3514111802950006, 'Achmad Syarifudin', '2019-06-06', 'M', 'Mojokerto', '+62891111116', 'achmadsyarifudin@gmail.com', 'Manager', 6000000),
(3514111802950007, 'Jefri Hendra Prasetyo', '2019-06-07', 'M', 'Mojokerto', '+62891111117', 'jefrihendra@gmail.com', 'Senior Programmer', 4700000),
(3514111802950008, 'Fajar Pangestu', '2019-07-08', 'M', 'Madiun', '+62891111118', 'fajarpangestu@gmail.com', 'User Installer', 4400000),
(3514111802950009, 'Renaldy Senna Hutapea', '2019-06-09', 'M', 'Lamongan', '+62891111119', 'renaldysenna@gmail.com', 'Database Programmer', 4200000),
(3514111802950010, 'Novianto Donna Prayoga', '2019-06-10', 'M', 'Wonogiri', '+62891111120', 'noviantodonna@gmail.com', 'Software Documentation', 4400000);
