-- MySQL dump 10.13  Distrib 5.7.32, for Linux (x86_64)
--
-- Host: localhost    Database: hitkhea1_sg
-- ------------------------------------------------------
-- Server version	5.7.32-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `hitkhea1_sg`
--


--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `met` float(255,0) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity`
--

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
INSERT INTO `activity` (`id`, `nama`, `met`, `keterangan`) VALUES (1,'Panahan',5,'sport'),(2,'Badminton',5,'sport'),(3,'Basket',6,'sport'),(4,'Billiard',2,'sport'),(5,'Bowling',4,'sport'),(6,'Boxing',8,'sport'),(7,'Coaching',4,'sport'),(8,'Chealeading',6,'sport'),(9,'Baseball',2,'sport'),(10,'Futsal',8,'sport'),(11,'Golf',5,'sport'),(12,'Gymnastic',4,'sport'),(13,'Karate',6,'sport'),(14,'Berkuda ( Berlari )',6,'sport'),(15,'Berkuda (Berjalan)',4,'sport'),(16,'Taekwondo',10,'sport'),(17,'Judo',11,'sport'),(18,'Sepak Bola',10,'sport'),(19,'Pingpong',4,'sport'),(20,'Tennis',7,'sport'),(21,'Volly',4,'sport'),(22,'Menyapu Lantai',3,'home'),(23,'Mencuci Mobil ',3,'home'),(24,'Mengepel Lantai',3,'home'),(25,'Membersihkan Debu',2,'home'),(26,'Memasak',3,'home'),(27,'Mencuci Piring',3,'home'),(28,'Belanja Pangan',3,'home'),(29,'Menggosok',2,'home'),(30,'Menjahit Baju',3,'home'),(31,'Mencuci Baju (Mesin)',2,'home'),(32,'Mencuci Baju (Tangan)',3,'home'),(33,'Menjemur Baju',5,'home'),(34,'Mengangkat Pakaian',2,'home'),(35,'Merapihkan Tempat Tidur',2,'home'),(36,'Merapihkan Ruangan',5,'home'),(37,'Memindahkan Furniture',5,'home'),(38,'Menyikat Lantai',4,'home'),(39,'Menyapu Halaman',6,'home'),(41,'Bermain Dengan Anak (Duduk)',2,'home'),(42,'Bermain Dengan Anak (Berdiri)',3,'home'),(43,'Berbaring Sambil Menonton TV',1,'inactive'),(44,'Duduk Tanpa Aktivitas Lain',1,'inactive'),(45,'Duduk Sambil Menonton Film di Bioskop',1,'inactive'),(46,'Tidur',1,'inactive'),(47,'Berdiri Tanpa Aktivitas Lain',1,'inactive'),(48,'Menulis',1,'inactive'),(49,'Bermeditasi',1,'inactive'),(50,'Berbicara',1,'inactive'),(51,'Duduk Sambil Merokok',1,'inactive'),(52,'Duduk Sambil Menonton TV',1,'inactive'),(53,'Duduk Sambil Mendengarkan Musik/Radio',1,'inactive'),(54,'Berbaring Sambil Mendengarkan Musik',1,'inactive'),(55,'Duduk Dengan Kaki Gelisah',2,'inactive'),(56,'Membaca',1,'inactive'),(57,'Berbaring Tanpa Aktivitas',1,'inactive'),(58,'Memotong Kayu Bakar',5,'berkebun'),(59,'Membawa Kayu',5,'berkebun'),(60,'Menggali',4,'berkebun'),(61,'Menggali Untuk Irigasi',4,'berkebun'),(62,'Menggali Tanah Untuk Tanaman',4,'berkebun'),(63,'Mengendarai Tractor',3,'berkebun'),(64,'Menanam Tumbuhan',4,'berkebun'),(65,'Menanam Pohon',4,'berkebun'),(66,'Menyapu Daun',4,'berkebun'),(67,'Menyiram Taman',1,'berkebun'),(68,'Berkebun',4,'berkebun'),(69,'Panen Buah',3,'berkebun'),(70,'Memangkas Semak',4,'berkebun'),(71,'Memotong Rumput',5,'berkebun'),(72,'Menebang Pohon Besar',8,'berkebun'),(73,'Ballet (Rehearsel atau Kelas)',5,'menari'),(74,'Aerobic',7,'menari'),(75,'Ballet (Perfomace)',7,'menari'),(76,'Berdansa',5,'menari'),(77,'Modern Dance Class (Man)',6,'menari'),(78,'Aerobic Dance',5,'menari'),(79,'Menari (Waltz)',4,'menari'),(80,'Tarian Rakyat',10,'menari'),(81,'Tarian Budaya',4,'menari'),(82,'Modern Dance Class (Women)',5,'menari'),(83,'Mengendarai Mobil',3,'berkendara'),(84,'Mengendarai BUS',1,'berkendara'),(85,'Mengendarai Kereta',1,'berkendara'),(86,'Menerbangkan Pesawat',2,'berkendara'),(87,'Menerbangkan Helicopter',1,'berkendara'),(88,'Mengendarai Motor',3,'berkendara'),(89,'Mengendarai Becak ',6,'berkendara'),(90,'Mengendarai Tank',2,'berkendara'),(91,'Mengendarai Truck Tentara',3,'berkendara'),(92,'Mendorong Pesawat Masuk dan Keluar Hangar',6,'berkendara'),(93,'Meeting/Terlibat Pembicaraan',1,'volunteer'),(94,'Bermain Dengan Anak',3,'volunteer'),(95,'Mengetik (Manual/Komputer)',1,'volunteer'),(96,'Duduk Sambil Mengurus Anak',2,'volunteer'),(97,'Mengepack Box',3,'volunteer'),(98,'Menata Kursi',3,'volunteer'),(99,'Berjalan/Berdiri Untuk Tujuan Sukarela',3,'volunteer'),(100,'Duduk, Pekerjaan Kantor Ringan',1,'volunteer'),(101,'Melakukan Pekerjaan Berat',4,'volunteer'),(102,'Membenarkan Barang Rusak',3,'volunteer'),(103,'Duduk Mengikuti Acara Keagamaan',1,'agama'),(104,'Duduk Sambil Membaca kitab',1,'agama'),(105,'Sholat',1,'agama'),(106,'Menyanyi di Gereja (Berdiri)',2,'agama'),(107,'Membersihkan Rumah Ibadah',3,'agama'),(108,'Baris Berbaris Dalam Militer (Tanpa Kelompok)',8,'berjalan'),(109,'Backpacking',7,'berjalan'),(110,'Mendaki Gunung Dengan Membawa Tas',8,'berjalan'),(111,'Mendorong Stroller Anak',4,'berjalan'),(112,'Gerak Jalan',6,'berjalan'),(113,'Berjalan Membawa Peliharaan',3,'berjalan'),(114,'Menonton Pertunjukan Burung Sambil Berjalan',2,'berjalan'),(115,'Membawa Barang (7kg) Ke Lantai Bawa',5,'berjalan'),(116,'Membawa Barang Ke Lantai Atas',8,'berjalan'),(117,'Berjalan Sambil Menggendong Anak(4kg)',2,'berjalan'),(118,'Jogging',7,'berlari'),(119,'erlari 4mph (13 min/mile)',6,'berlari'),(120,'Berlari 5mph (12 min/mile)',8,'berlari'),(121,'Berlari 6mph (10 min/mile)',10,'berlari'),(122,'Berlari 7mph (8.5 min/mile)',11,'berlari'),(123,'Berlari 8mph (7.5 min/mile)',12,'berlari'),(124,'Berlari 9mph (6.5 min/mile)',13,'berlari'),(125,'Berlari 10mph (6 min/mile)',14,'berlari'),(126,'Berlari 11mph (5.5 min/mile)',16,'berlari'),(127,'Berlari 12mph (5 min/mile)',19,'berlari'),(128,'Berlari 13mph (4.6 min/mile)',20,'berlari'),(129,'Berlari 14mph (4.3 min/mile)',23,'berlari'),(130,'Berlari Menaiki Tangga',15,'berlari'),(131,'Marathon',13,'berlari'),(132,'Berlari Pada Track',10,'berlari'),(133,'Melakukan Orchestra (Berdiri)',2,'music'),(134,'Bermain Drum',4,'music'),(135,'Bermain Piano (Duduk)',2,'music'),(136,'Bermain Organ (Duduk)',2,'music'),(137,'Bermain Violin (Duduk)',2,'music'),(138,'Bermain Trompet (Duduk)',2,'music'),(139,'Bermain Flute (Duduk)',2,'music'),(140,'Marching Band',5,'music'),(141,'Bermain Gitar (Duduk)',2,'music'),(142,'Bermain Gitar (Berdiri)',3,'music'),(143,'Pramugari Maskapai Penerbangan',3,'bekerja'),(144,'Polisi (Mengatur Lalu Lintas)',2,'bekerja'),(145,'Membuat Roti',4,'bekerja'),(146,'Tukang Kayu',4,'bekerja'),(147,'Petugas Pembersih Kamar Hotel',4,'bekerja'),(148,'Chef',2,'bekerja'),(149,'Petani',8,'bekerja'),(150,'Engineer',2,'bekerja'),(151,'Pemadam Kebakaran',8,'bekerja'),(152,'Hairstylist',2,'bekerja'),(153,'Sekretaris',2,'bekerja'),(154,'Bekerja Didepan Komputer',1,'bekerja'),(155,'Pelukis',4,'bekerja'),(156,'Petugas Perpustakaan',2,'bekerja'),(157,'Petugas Laundry',3,'bekerja'),(158,'Penjahit',2,'bekerja'),(159,'Tukang Pijat',4,'bekerja'),(160,'Tukang Sampah',4,'bekerja'),(161,'Petugas LAB (Men)',2,'bekerja'),(162,'Petugas LAB (Women)',1,'bekerja'),(163,'Petugas POS',2,'bekerja'),(164,'Mandi',2,'self'),(165,'Memakai Baju',3,'self'),(166,'Makan (Duduk)',2,'self'),(167,'Menyikat Gigi',2,'self'),(168,'Menata Rambut (Berdiri)',3,'self'),(169,'Minum Obat',2,'self'),(170,'Makan Sambil Berbicara',2,'self'),(171,'Memakai Make Up',2,'self'),(172,'Bercukur',2,'self'),(173,'Bersiap Untuk Tidur',3,'self'),(174,'Diving',3,'water'),(175,'Perlombaan Berlayar',4,'water'),(176,'Surfing',5,'water'),(177,'Snorkeling',5,'water'),(178,'Berenang Gaya Punggung',7,'water'),(179,'Berenang Gaya Bebas',8,'water'),(180,'Bermain Bola Volly di Air',3,'water'),(181,'Jet Skiing Driving',7,'water'),(182,'Mendayung Perahu',4,'water'),(183,'Menyelam',12,'water'),(184,'Skatting',7,'winter'),(185,'Skiing',4,'winter'),(186,'Bermain Kereta Luncur',5,'winter'),(187,'Memindahkan Rumah Es',5,'winter'),(188,'Memancing Ikan di Es',7,'winter'),(189,'Bersepeda di Gunung',14,'sepeda'),(190,'Balapan Sepeda di Gunung',16,'sepeda'),(191,'Bersepeda dari/ke Kantor',7,'sepeda'),(192,'Bersepeda',7,'sepeda'),(193,'Bersepeda, BMX',8,'sepeda'),(194,'Yoga',2,'latihan'),(195,'Bersepeda Menggunakan Spinning Bike',7,'latihan'),(196,'Push Up',4,'latihan'),(197,'Pull Up',8,'latihan'),(198,'Stair Treadmill',9,'latihan'),(199,'Lompat Tali',111,'latihan'),(200,'Sit Up',8,'latihan'),(201,'Bermain Dace Revolution (Arcade Games)',7,'latihan'),(202,'Aerobic',3,'latihan'),(203,'Mendayung',7,'latihan'),(204,'Memancing',3,'fishhunt'),(205,'Menangkap Ikan Dengan Tangan',4,'fishhunt'),(206,'Menangkap Ikan Dari Kapal (Duduk)',2,'fishhunt'),(207,'Berburu',5,'fishhunt'),(208,'Beburu Rusa',6,'fishhunt'),(209,'Berburu Burung',3,'fishhunt'),(210,'Menembak',2,'fishhunt'),(211,'Berburu Kelinci',5,'fishhunt'),(212,'Mencari Cacing',4,'fishhunt'),(213,'Berburu Hewan Laut Berukuran Besar',4,'fishhunt'),(214,'Bermain Kartu (Duduk)',1,'lainnya'),(215,'Bermain Catur (Duduk)',1,'lainnya'),(216,'Menggambar (Duduk)',2,'lainnya'),(217,'Membaca Buku/Koran (Duduk)',1,'lainnya'),(218,'Mengcopy Dokumen (Berdiri)',1,'lainnya'),(219,'Bermain Komputer',1,'lainnya'),(220,'Duduk Didalam Kelas Sambil Mencatat',2,'lainnya'),(221,'Menjahit Baju',2,'lainnya'),(222,'Membaca (Berdiri)',2,'lainnya'),(223,'Berbicara Di Telepone (Duduk)',1,'lainnya');
/*!40000 ALTER TABLE `activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer_content` varchar(2000) NOT NULL,
  `username` varchar(10) NOT NULL,
  `time_entry` date NOT NULL,
  `hour` time NOT NULL,
  PRIMARY KEY (`answer_id`),
  KEY `FK_ConstAnswerUSer` (`username`),
  KEY `FK_answerkonsultasi` (`question_id`),
  CONSTRAINT `FK_ConstAnswerUSer` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_answerkonsultasi` FOREIGN KEY (`question_id`) REFERENCES `konsultasi` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer`
--

LOCK TABLES `answer` WRITE;
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;
INSERT INTO `answer` (`answer_id`, `question_id`, `answer_content`, `username`, `time_entry`, `hour`) VALUES (43,40,'hai ! coba test','hanzeld','2020-12-14','11:48:02'),(44,41,'bismillah','hanzeld','2020-12-14','12:39:31'),(45,42,'bismillah','hanzeld','2020-12-14','13:04:46');
/*!40000 ALTER TABLE `answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `comment_content` varchar(2000) NOT NULL,
  `comment_date` int(11) NOT NULL,
  `hour` time NOT NULL,
  `time_entry` date NOT NULL,
  `comunity_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `FK_COMMENTUSER` (`username`),
  KEY `FK_CONSTRAINCOMMENTKOMUNITAS` (`comunity_id`),
  CONSTRAINT `FK_COMMENTUSER` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_CONSTRAINCOMMENTKOMUNITAS` FOREIGN KEY (`comunity_id`) REFERENCES `komunitas` (`comunity_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` (`comment_id`, `username`, `comment_content`, `comment_date`, `hour`, `time_entry`, `comunity_id`) VALUES (6,'rezx','coba jawab doang',0,'11:24:21','2020-12-09',2),(7,'drzw','coba jawb',0,'11:27:36','2020-12-09',3),(8,'drzw','hyy\r\n',0,'11:31:52','2020-12-09',3),(10,'drzw','halo lgi',0,'11:32:04','2020-12-09',3),(14,'rezx','ikut jawab',0,'00:40:09','2020-12-10',2),(15,'rezx','coba lagi',0,'00:41:34','2020-12-10',2),(16,'rezx','lagi coba',0,'00:41:52','2020-12-10',2),(17,'rezx','coba jam',0,'06:59:57','2020-12-10',2),(18,'rezx','skrng di komputer harusnya jam 7 pagi',0,'07:00:13','2020-12-10',2),(19,'rezx','mau jawab jam skrn 7:03',0,'07:03:43','2020-12-10',5),(21,'hanzeld','skrng jam 12:33 loh',0,'12:23:10','2020-12-11',5),(22,'hanzeld','eh iya salah lihat 23 wkwkwk',0,'12:23:31','2020-12-11',5),(23,'rezx','lets see',0,'22:56:04','2020-12-13',6),(24,'rezx','hi there !',0,'22:56:27','2020-12-13',6),(25,'hanzeld','hi too',0,'11:25:29','2020-12-14',6),(26,'drzw','Perkenalkan nama sayaa rezky',0,'12:26:47','2020-12-14',8),(27,'hanzeld','halo siang juga',0,'12:40:02','2020-12-14',8),(28,'drzw','Perkenalkan nama sayaa rezky',0,'12:53:23','2020-12-14',8),(29,'drzw','Perkenalkan nama sayaa rezky',0,'12:56:55','2020-12-14',8),(30,'drzw','Perkenalkan nama sayaa rezky',0,'12:59:34','2020-12-14',8),(31,'hanzeld','halo siang juga',0,'13:04:59','2020-12-14',8),(32,'doctor','hi',0,'15:55:10','2020-12-14',11);
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dokter`
--

DROP TABLE IF EXISTS `dokter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dokter` (
  `username` varchar(10) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `nip` int(30) NOT NULL,
  `nik` int(30) NOT NULL,
  PRIMARY KEY (`username`),
  CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokter`
--

LOCK TABLES `dokter` WRITE;
/*!40000 ALTER TABLE `dokter` DISABLE KEYS */;
INSERT INTO `dokter` (`username`, `bagian`, `nip`, `nik`) VALUES ('cobayaa','34',345,3453),('doctor','operasi',2911,2911),('halo','Yeah dude',131231,111111111),('hanzeld','456',456,546);
/*!40000 ALTER TABLE `dokter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `komunitas`
--

DROP TABLE IF EXISTS `komunitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komunitas` (
  `comunity_id` int(11) NOT NULL AUTO_INCREMENT,
  `Judul` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `post_content` varchar(2000) NOT NULL,
  `post_excerpt` varchar(100) NOT NULL,
  `time_entry` date NOT NULL,
  `hour` time NOT NULL,
  PRIMARY KEY (`comunity_id`),
  KEY `FK_CONSTRAINKOMUNITASUSER` (`username`),
  CONSTRAINT `FK_CONSTRAINKOMUNITASUSER` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `komunitas`
--

LOCK TABLES `komunitas` WRITE;
/*!40000 ALTER TABLE `komunitas` DISABLE KEYS */;
INSERT INTO `komunitas` (`comunity_id`, `Judul`, `username`, `post_content`, `post_excerpt`, `time_entry`, `hour`) VALUES (2,'tes','doctor','tess','tess','2020-12-07','13:12:00'),(3,'halo','rezx','apa aja boleh gatau isinya apa haha','apa aja boleh gatau ','2020-12-09','11:16:00'),(4,'ini buat tes jam dan waktu','rezx','di laptop skrng jam 7:01','di laptop skrng jam ','2020-12-10','07:01:00'),(5,'coba jam ke 2','rezx','di laptop jam 7:02','di laptop jam 7:02','2020-12-10','07:02:25'),(6,'Halo All','dianr','Test','Test','2020-12-13','21:45:42'),(7,'Batuk tak Kunjung Sembuh','drzw','Kita coba','Kita coba','2020-12-13','21:51:27'),(8,'Selamat Siang','drzw','Hallo salam kenal','Hallo salam kenal','2020-12-14','12:26:13'),(9,'Selamat Siang','drzw','Hallo salam kenal','Hallo salam kenal','2020-12-14','12:53:17'),(10,'Selamat Siang','drzw','Hallo salam kenal','Hallo salam kenal','2020-12-14','12:56:50'),(11,'Selamat Siang','drzw','Hallo salam kenal','Hallo salam kenal','2020-12-14','12:59:29');
/*!40000 ALTER TABLE `komunitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `konsultasi`
--

DROP TABLE IF EXISTS `konsultasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `konsultasi` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `time_entry` date NOT NULL,
  `post_content` varchar(2000) NOT NULL,
  `post_excerpt` varchar(40) NOT NULL,
  `hour` time NOT NULL,
  `counter` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`question_id`),
  KEY `FK_CONSTRAINKOnsultasiSUSER` (`username`),
  CONSTRAINT `FK_CONSTRAINKOnsultasiSUSER` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `konsultasi`
--

LOCK TABLES `konsultasi` WRITE;
/*!40000 ALTER TABLE `konsultasi` DISABLE KEYS */;
INSERT INTO `konsultasi` (`question_id`, `judul`, `kategori`, `username`, `time_entry`, `post_content`, `post_excerpt`, `hour`, `counter`, `nama`) VALUES (40,'Batuk tak Kunjung Sembuh','NONE','drzw','2020-12-13','Kita bisa?','Kita bisa?','21:52:42',1,'DR'),(41,'halo mau tanya','NONE','drzw','2020-12-14','coba websit ini','coba websit ini','12:37:31',1,'Rezky'),(42,'halo mau tanya','NONE','drzw','2020-12-14','coba websit ini','coba websit ini','13:04:28',1,'Rezky');
/*!40000 ALTER TABLE `konsultasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `makanan`
--

DROP TABLE IF EXISTS `makanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `makanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food` varchar(255) NOT NULL,
  `berat` int(255) NOT NULL,
  `kalori` float(255,0) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `makanan`
--

LOCK TABLES `makanan` WRITE;
/*!40000 ALTER TABLE `makanan` DISABLE KEYS */;
INSERT INTO `makanan` (`id`, `food`, `berat`, `kalori`, `satuan`, `jenis`) VALUES (1,'Jagung Rebus',250,90,'gram','makanan'),(3,'Roti Gandum',100,265,'gram','makanan'),(4,'Mentega',20,143,'gram','makanan'),(7,'Telur Mata Sapi',60,110,'gram','makanan'),(8,'Susu',250,185,'ml','makanan'),(9,'Nasi Putih',200,350,'gram','makanan'),(10,'Ayam Bakar',100,129,'gram','makanan'),(12,'Telur Dadar',70,153,'gram','makanan'),(14,'Ikan Lele Goreng',90,122,'gram','makanan'),(15,'Buah Alpukat',100,160,'gram','makanan'),(16,'Teh',75,30,'gram','minuman'),(17,'Selai Cokelat Kacang',28,180,'gram','makanan'),(18,'Salad Buah',285,192,'gram','makanan'),(19,'Mayonaise',3,171,'sdm','makanan'),(20,'Keju Cheddar',50,201,'gram','makanan'),(21,'Perkedel Kentang',50,123,'gram','makanan'),(22,'Ati Ayam',50,98,'gram','makanan'),(23,'Buah Salak',150,63,'gram','makanan'),(24,'Kopi',75,58,'gram','minuman'),(25,'Ikan Salmon',200,416,'gram','makanan'),(26,'Tempe Oreg',100,175,'gram','makanan'),(27,'Telur Rebus',100,155,'gram','makanan'),(28,'Sayur Bening Bayam',100,36,'gram','makanan'),(29,'Roti Cokelat',100,293,'gram','makanan'),(30,'Omelete',100,153,'gram','makanan'),(31,'Roti Cokelat',100,293,'gram','makanan'),(33,'Rendang Daging',200,571,'gram','makanan'),(34,'Tumis Kantung',100,98,'gram','makanan'),(35,'Rendang Daging',200,571,'gram','makanan'),(36,'Tumis Kangkung',100,98,'gram','makanan'),(37,'Kentang Goreng',100,311,'gram','makanan'),(38,'Jus Jambu Biji',250,130,'gram','minuman'),(39,'Sayur Lodeh',200,136,'gram','makanan'),(40,'Tahu',100,147,'gram','makanan'),(41,'Sayur Bayam',100,23,'gram','makanan'),(42,'Ayam Panggang',100,164,'gram','makanan'),(43,'Perkedel Jagung',50,108,'gram','makanan'),(44,'Sup Telur Puyuh',100,116,'gram','makanan'),(45,'Buah Pisang',125,120,'gram','makanan'),(46,'Kacang Hijau',100,102,'gram','makanan'),(47,'Buah Apel',160,92,'gram','makanan'),(48,'Ikan Kembung',80,87,'gram','makanan'),(49,'Ayam Pop',120,265,'gram','makanan'),(50,'Tempe',50,118,'gram','makanan'),(51,'Buah Semangka',100,30,'gram','makanan'),(52,'Nasi Merah',200,222,'gram','makanan'),(53,'Tumis Daun Singkong',120,151,'gram','makanan'),(54,'Daging Empal',70,147,'gram','makanan'),(55,'Buah Pir',100,57,'gram','makanan'),(56,'Madu',1,62,'sdm','minuman'),(57,'Selai Kacang',20,117,'gram','makanan'),(58,'Sambal Kentang',100,102,'gram','makanan'),(59,'Buah Jeruk',150,47,'gram','makanan'),(60,'Soup Sapi',260,227,'gram','makanan'),(61,'Gulai Tunjang',160,502,'gram','makanan'),(62,'Ayam Goreng Kecap',75,358,'gram','makanan'),(63,'Tahu Goreng',100,111,'gram','makanan'),(64,'Soup Oyong Telur Puyuh',150,201,'gram','makanan'),(65,'Smoothie',100,210,'ml','minuman'),(66,'Soup Mutiara Jagung',150,169,'gram','makanan'),(67,'Pizza Sayur Panggang',128,360,'gram','makanan'),(68,'Vegetarian Stew',300,369,'gram','makanan'),(69,'Soup Jagung',165,180,'gram','makanan'),(70,'Pancake Kentang',150,403,'gram','makanan'),(71,'Yoghurt',150,88,'gram','minuman'),(72,'Telur Dadar Sayur',145,180,'gram','makanan'),(73,'Toge Goreng',250,243,'gram','makanan'),(74,'ketoprak',400,244,'gram','makanan'),(75,'Oseng Buncis Tempe',110,100,'gram','makanan'),(76,'Tempe Paprika',150,200,'gram','makanan'),(77,'Oatmeal',250,160,'gram','makanan'),(78,'Sayur Daun Kelor',100,60,'gram','makanan'),(79,'Sayur Campur Matang',200,162,'gram','makanan'),(80,'Tahu Tempe Orak - Arik',150,200,'gram','makanan'),(81,'Tahu Rebus',100,78,'gram','makanan'),(83,'Teh Hijau',180,2,'ml','minuman'),(84,'Buah Anggur',150,103,'gram','makanan'),(87,'Telur',60,110,'gram','makanan'),(88,'Soup Krim Jagung',1,50,'porsi','makanan'),(89,'Es Teh',200,30,'ml','minuman'),(90,'Air Putih',100,0,'ml','minuman'),(91,'Es Teh',200,30,'ml','minuman'),(92,'Air Putih',100,0,'ml','minuman'),(93,'Oseng Buncis',110,100,'gram','makanan'),(94,'Jus Anggur',250,154,'ml','minuman'),(95,'Oseng Buncis',110,100,'gram','makanan'),(97,'Salad Kubis / Salada Kol',184,268,'gram','makanan'),(98,'Jus Tomat',250,70,'ml','minuman'),(99,'Teh Panas',250,150,'ml','minuman'),(100,'Pecel',100,230,'gram','makanan'),(101,'Tempe Goreng',50,108,'gram','makanan'),(102,'Soup Kentang',200,162,'gram','makanan'),(103,'Keju',30,90,'gram','makanan'),(104,'Lemon Tea',200,90,'ml','minuman'),(105,'Gado - Gado',200,393,'gram','makanan'),(106,'Pepes Tahu',100,126,'gram','makanan'),(107,'Roti Tawar',74,200,'gram','makanan'),(108,'Buah Semangka',100,30,'gram','makanan'),(109,'Daging Ayam',100,245,'gram','makanan'),(112,'Buah Melon',120,46,'gram','makanan'),(113,'Daging Sapi',100,180,'gram','makanan'),(114,'Selai Strawberry',14,90,'gram','makanan'),(115,'Soup Jagung Rebus',100,113,'gram','makanan'),(116,'Soup Bayam',100,156,'gram','makanan'),(117,'Udang Rebus',100,91,'gram','makanan'),(118,'Soup Ayam Kombinasi',100,95,'gram','makanan'),(119,'Ikan Tuna',120,220,'gram','makanan'),(120,'Mayonaise',1,57,'sdm','makanan'),(121,'Mayonaise',2,114,'sdm','makanan'),(122,'Urap',100,112,'gram','makanan');
/*!40000 ALTER TABLE `makanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obat`
--

DROP TABLE IF EXISTS `obat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `konsumsi` varchar(255) NOT NULL,
  `bentuk` varchar(255) NOT NULL,
  `manfaat` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obat`
--

LOCK TABLES `obat` WRITE;
/*!40000 ALTER TABLE `obat` DISABLE KEYS */;
INSERT INTO `obat` (`id`, `nama`, `golongan`, `konsumsi`, `bentuk`, `manfaat`, `kategori`) VALUES (1,'Acarbose','Antidiabetes','Dewasa','Tablet','Mengontrol Kadar Gula Dalam Darah Pada Penderita Diabetes Tipe 2','obat resep'),(2,'Adapalene','Retinoid','Dewasa dan Anak- Anak (Diatas 12thn)','Krim dan Gel','Mencegah dan Mengatasi Jerawat Juga Komedo','obat resep'),(3,'Albumin','Cairan Infus','-','Infus','Menangani Hypoalbuminemia, Terapi Penunjang Pada Syok Hipovolemik dan sebelum Dilakukan Transfusi Tukar Pada Penyakit Kuning Bayi Baru Lahir','obat resep'),(4,'Ambroxol','Obat Batuk Pengencer Dahak (Mukolitik)','Dewasa dan Anak-Anak','Tablet dan Sirup','Mengencerkan Dahak','obat resep'),(5,'Amoxillin','Antibiotik Penisilin','Dewasa dan Anak-Anak','Kapsul','Mengatasi Infeksi Bakteri','obat resep'),(6,'Asam Azaleat  ','Asam Dikarboksilat','Dewasa dan Anak Usia ≥ 12 Tahun','Krim dan Gel','Mengatasi Jerawat Dan Rosacea','obat resep'),(7,'Clonidine','Antihipertensi','Dewasa dan Anak-Anak','Tablet dan Suntik','Menurunkan Tekanan Darah','obat resep'),(8,'Formalin','Obat Oles','Dewasa','Obat Oles','Mengatasi Kutil','obat resep'),(9,'Magnesium Sulfat (MgSO4)','Antikonvulsan, Elektrolit Tambahan','Dewasa dan Anak-Anak','Cairan Suntik Atau Infus','Mengobati Hipomagnesemia, Mencegah dan Mengatasi Kejang Pada Eklamsia, Serta Mengobati Torsades De Pointes.','obat resep'),(10,'Tramadol','Obat Pereda Nyeri Golongan Opioid','Dewasa dan Anak Usia ≥ 12 Tahun','Kapsul, Tablet, dan Suntikan (Injeksi)','Meredakan Nyeri','obat resep'),(11,'Antasida','Antasida','Dewasa dan Anak-Anak','Suspensi, Tablet dan Kaplet Kunyah','Menetralkan Asam Lambung','obat bebas'),(12,'Betadine','Antiseptik','Dewasa dan Anak-Anak','Cairan, Semprot, Salep, dan Stik.','Mencegah dan Mengobati Infeksi','obat bebas'),(13,'Dextromethorphan','Obat Antitusif Atau Penekan Batuk','Dewasa dan Anak Usia ≥ 4 Tahun','Tablet, Sirop, Permen Pelega Tenggorokan (Lozenges).','Meredakan Batuk Kering','obat bebas'),(14,'Paracetamol','Obat Penurun Panas Dan Pereda Nyeri (Analgesik Dan Antipiretik)','Dewasa dan Anak-Anak','Tablet, Kaplet, Sirup, Drop, Infus, dan Suppositoria.','Meredakan Rasa Sakit dan Demam','obat bebas'),(15,'Probiotik','Nutrisi Makanan dan Minuman (Suplemen)','Dewasa dan Anak-Anak','Bubuk, Kapsul','Melindungi dan Memelihara Kesehatan Saluran Pencernaan','obat bebas'),(16,'Redoxon','Suplemen Vitamin','Dewasa','Tablet Larut (Effervescent)','Suplemen Vitamin Untuk Membantu Menjaga Daya Tahan Tubuh','obat bebas'),(18,'Zat Besi','Mineral','Dewasa dan Anak-Anak','Tablet, Kapsul, Sirop, Injeksi','Mencegah dan Mengobati Defisiensi Besi','obat bebas'),(19,'Alprazolam','Antiansietas','Dewasa dan Lansia','Tablet','Penanganan Jangka Pendek Untuk Gangguan Kecemasan dan Gangguan Panik','antiansietas'),(20,'Clobazam','Antiansietas','Dewasa dan Lansia','Tablet','Gangguan Kecemasan Berat','antiansietas'),(21,'Diazepam','Antiansietas','Anak - Anak, Dewasa dan Lansia','Tablet, Cairan Suntik, Sediaan Untuk Masuk Dari Dubur (Suppositoria)','Gangguan Kecemasan Berat, Penenang Sebelum Tindakan Medis, dan Insomnia\r\n','antiansietas'),(22,'Lorazepam','Antiansietas','Dewasa dan Lansia','Tablet','Gangguan Kecemasan, Penenang Sebelum Tindakan Medis, dan Insomnia','antiansietas'),(23,'Chlordiazepoxide','Antiansietas','Dewasa','Tablet','Gangguan Kecemasan, dan Insomnia','antiansietas'),(24,'Midazolam','Antiansietas','Anak - Anak(1-15 tahun), Dewasa dan Lansia','Cairan Suntik','Penenang Sebelum Tindakan Medis','antiansietas'),(25,'Phenobarbital','Antiansietas','Anak - Anak, dan Dewasa','Cairan Suntik dan Tablet ','Penenang Sebelum Tindakan Medis dan Insomnia','antiansietas'),(26,'Penisilin','Antibiotik','Konsultasikan Dengan Dokter ','Kaplet, Sirop Kering, dan Suntikan','Mengobati Banyak Kondisi Akibat Adanya Infeksi Bakteri','antibiotik'),(27,'Sefalosporin','Antibiotik','Konsultasikan Dengan Dokter ','Suntik, Tablet, dan Sirop Kering','Mengobati Infeksi Tulang, Otitis Media, Infeksi Kulit, dan Infeksi Saluran Kemih','antibiotik'),(28,'Aminoglikosida','Antibiotik','Konsultasikan Dengan Dokter ','Mengatasi Banyak Penyakit Infeksi Bakteri','Salep, Tetes Mata, dan Suntik','antibiotik'),(29,'Tetrasiklin','Antibiotik','Konsultasikan Dengan Dokter ','Salep, Salep Mata, Kapsul, dan Suntik','Mengobati Berbagai Macam Kondisi Yang Muncul Akibat Adanya Infeksi Bakteri','antibiotik'),(30,'Makrolid','Antibiotik','Konsultasikan Dengan Dokter ','Yakni Tablet, Kaplet, Sirop Kering, dan Suntik','Mengobati Bronkitis, Servisitis, Penyakit Lyme, Pemfigus, dan Sinusitis. ','antibiotik'),(31,'Sulfa atau Sulfonamida','Antibiotik','Konsultasikan Dengan Dokter ','Tablet dan Sirop','Menangani Berbagai Penyakit Akibat Infeksi Bakteri, Seperti Infeksi Saluran Kemih, Bronkitis, Meningitis Bakterial, Pneumonia, Serta Infeksi Mata Atau Telinga','antibiotik'),(32,'Quinolone','Antibiotik','Konsultasikan Dengan Dokter ','Tablet, Suntik, dan Kaplet','Mengatasi Banyak Kondisi Yang Disebabkan Oleh Infeksi Bakteri','antibiotik'),(33,'Azole','Anti Jamur','-','-','Bekerja Dengan Cara Merusak Membran Sel Jamur','antijamur'),(34,'Echinocandin','Anti Jamur','-','-','Bekerja Dengan Cara Merusak Dinding Sel Jamur','antijamur'),(35,'Polyene','Anti Jamur','-','-','Bekerja Dengan Cara Merusak Membran Sel Jamur, Sehingga Sel Tersebut Akan Mati','antijamur'),(36,'Antipsikotik Tipikal','Antipsikotik','-','-','Mampu Menghambat Dopamin Dengan Sangat Kuat','antipsikotik'),(37,'Antipsikotik Atipikal','Antipsikotik','-','-','Mampu Menghambat Dopamin Dengan Sangat Kuat','antipsikotik'),(38,'Imunisasi Dasar','Imunisasi','1. Usia 0 bulan: 1 dosis hepatitis B || 2. Usia 1 bulan: 1 dosis BCG dan polio','3. Usia 2 bulan: 1 dosis DPT, hepatitis B, HiB, dan polio || 4. Usia 3 bulan: 1 dosis DPT, hepatitis B, HiB, dan polio','5. Usia 4 bulan: 1 dosis DPT, hepatitis B, HiB, dan polio || 6. Usia 9 bulan: 1 dosis campak/MR','imunisasi'),(39,'Imunisasi Lanjutan','Imunisasi','Usia 18-24 bulan: 1 dosis DPT, hepatitis B, HiB, dan campak/MR','Kelas 1 SD/sederajat: 1 dosis campak dan DT','Kelas 2 dan 5 SD/sederajat: 1 dosis Td','imunisasi'),(41,'aaa','aaa','a','aa','aa','obat resep');
/*!40000 ALTER TABLE `obat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penyakit`
--

DROP TABLE IF EXISTS `penyakit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `pencegahan` varchar(255) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `sebab` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `penanganan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penyakit`
--

LOCK TABLES `penyakit` WRITE;
/*!40000 ALTER TABLE `penyakit` DISABLE KEYS */;
INSERT INTO `penyakit` (`id`, `nama`, `deskripsi`, `pencegahan`, `gejala`, `sebab`, `diagnosis`, `penanganan`) VALUES (1,'Absans (Lena)','Salah Satu Kondisi Kejang Epilepsi Yang Termasuk Dalam Golongan Kejang Umum (Generalized Seizures)','Dapat Dicegah Dengan Mengonsumsi Obat-Obatan Yang Diresepkan Secara Teratur.','Absans Tipikal. Mulai Secara Tiba-Tiba Dan Bertahan Antara 10-30 Detik, Kemudian Berakhir Tanpa Komplikasi.','Terjadi Karena Adanya Aktivitas Abnormal Pada Otak Penderita','ilakukan Dengan Melakukan Observasi Serta Pertanyaan Seputar Kondisi Dan Gejala Yang Muncul, Baik Kepada Penderita Ataupun Keluarga Penderita.','Dilakukan Dengan Pemberian Obat-Obatan Yang Secara Khusus Bekerja Untuk Mencegah Kekambuhan Serangan. '),(2,'Abses Gigi','Suatu Keadaan Ketika Terdapat Nanah Yang Disebabkan Oleh Infeksi Bakteri Pada Bagian Dalam Gigi.','Dengan Merawat Gigi','Sakit Gigi Berdenyut, Parah, Dan Persisten.','Terjadi Ketika Bakteri Menyerang Pulpa Gigi, Bagian Paling Dalam Dari Gigi Yang Terasa Lembut Dan Berisi Pembuluh Darah, Saraf, Serta Jaringan Ikat.','Memeriksa Kondisi Gigi, Gusi, Lidah, Rahang, Sinus, Hidung, Tenggorokan, Hingga Leher. Jika Memang Dibutuhkan, Pemeriksaan Dengan X-Ray Juga Akan Dilakukan. Selain Menanyakan Soal Gejala, Dokter Pun Biasanya Akan Meninjau Riwayat Kesehatan','Dengan Mengeringkan Nanah Atau Sekaligus Mencabut Gigi Yang Terinfeksi. Jika Rasa Sakit Tidak Tertahankan, Konsumsi Obat Pereda Nyeri, Seperti Parasetamol Ataupun Ibuprofen, Yang Dapat Dibeli Bebas.'),(3,'Abses Telinga (Abses Bezold)','Kondisi Terjadinya Penumpukan Nanah Di Jaringan Dalam Leher Tepatnya Di Bagian Sternomastoid Yang Terletak Di Belakang Telinga.','Menjaga Kesehatan Dan Kebersihan Telinga Dengan Baik Juga Akan Membantu Meminimalisasi Terjadinya Infeksi Di Sekitar Telinga Yang Dapat Memicu Terjadinya Abses Bezold','Demam, Nyeri Pada Bagian Telinga','Infeksi Yang Menyebar Ke Area Sternomastoid Pada Saat Terjadi Mastoiditis Adalah Penyebab Tersering Dari Abses Bezold','Pemeriksaan Fisik Akan Dilakukan Untuk Mengamati Gejala-Gejala Yang Muncul. Selain Itu Pemeriksaan Riwayat Kesehatan Yang Menunjukkan Adanya Riwayat Mastoiditis Juga Berperan Penting Dalam Mengarahkan Diagnosis.','Tindakan Operasi Umumnya Diperlukan Jika Memang Penumpukan Nanah Telah Terkonfirmasi'),(4,'Acne Vulgaris (Jerawat)','Salah Satu Masalah Kulit, Yaitu Ketika Kondisi Pori-Pori Kulit Tersumbat Minyak Dan Sel Kulit Mati, Sehingga Menimbulkan Radang.','Cuci Muka Dan Rawat Kulit Setiap Hari. Hindari Menggosok Wajah Terlalu Kencang Atau Mencuci Muka Terlalu Sering.','Jika Hanya Tumbuh Beberapa Bintik Kecil Kemerahan, Dapat Berisi Nanah, Itu Termasuk Ke Dalam Kategori Jerawat Ringan.','Diakibatkan Oleh Perubahan Hormon, Misalnya Saat Menstruasi, Kehamilan, Pemakaian Pil Kontrasepsi, Dan Stres. ','Menanyakan Riwayat Kesehatan Serta Melakukan Pemeriksaan Fisik. Jika Pasiennya Wanita, Dokter Juga Akan Menanyakan Siklus Menstruasinya','Tipe Jerawat Yang Ringan Dapat Ditangani Dengan Rajin Mencuci Muka Secara Lembut Menggunakan Air Hangat Dan Sabun Cuci Muka. Untuk Jerawat Dengan Kategori Sedang Dan Parah, Maka Dibutuhkan Obat Yang Lebih Kuat Atau Kombinasi Beberapa Terapi. '),(5,'Acquired Imunodeficiency Syndrome (AIDS/HIV)','Kondisi Infeksi Kronis Dan Berpotensi Mengancam Jiwa.','Dapat Mengurangi Risiko Terkena AIDS Dengan Melakukan Tindakan Preventif Dini','Berkeringat Berlebihan Di Malam Hari, Demam Berulang.\r\n','Virus Human Immunodeficiency (HIV) Adalah Virus Penyebab Infeksi AIDS','Melakukan Serangkaian Tes Untuk Mengetahui Apakah Orang Tersebut Mengidap HIV/AIDS.','Tidak Ada Obat Untuk Menyembuhkan Hiv/Aids. Namun, Ada Pengobatan Yang Secara Signifikan Dapat Memperlambat Perkembangan Penyakit Serta Mencegah Infeksi Ditularkan Kepada Orang Lain. '),(6,'Adenoiditis (Radang Kelenjar Adenoid)','Jaringan Limfatik Di Area Tenggorokan Dan Mirip Amandel','Mengonsumsi Makanan Bergizi, Banyak Minum Air Putih Untuk Membersihkan Dan Melembapkan Tenggorokan.','Demam','Ada Beberapa Virus Yang Dapat Menyebabkan Terjadinya Adenoiditis, Seperti Virus Epstein-Barr, Adenovirus, Dan Rhinovirus. Beberapa Bakteri Juga Dapat Mengakibatkan Masalah Ini','Melakukan Pemeriksaan Fisik Untuk Mengecek Di Mana Lokasi Infeks','Diobati Dengan Antibiotik, Analgesik Dan Antipiretik. Namun, Ada Kalanya Diperlukan Pembedahan (Adenoidektomi) Pada Kasus Yang Sering Kambuh Atau Ada Gangguan Napas Yang Kronis.'),(7,'Alergi','Terjadi Karena Sistem Kekebalan Tubuh Anda Bereaksi Pada Pemicu Yang Dianggap Bahaya','Jika Anda Mengalami Anafilaksis, Penyempitan Saluran Pernapasan Atau Sangat Sulit Bernapas Anda Membutuhkan Injeksi Epinefrin Via Alat Epipen Atau Twinject Injeksi Otomatis','Untuk Mata ( Mata Merah, Mata Terasa Gatal, dan Mata Berair )','Pemicu Alergi Sering Disebut Alergen. Hal Ini Hanya Berpengaruh Pada Orang Yang Memiliki Alergi Tersebut.','Detail Gejala, Frekuensi Muncul Gejala, Periode Waktu Gejala Dari Muncul Hingga Hilang, Dan Pemicu Alergi. Bagian Tubuh Yang Dipengaruhi Gejala Juga Akan Diperiksa Untuk Melihat Dampak Alergi.','Konsumsi Makanan Yang Mengandung Beta Karoten, Temukan Penyebab, dll'),(8,'Alzheimer Disease (Penyakit Alzheimer)','Penyakit Progresif Yang Mengakibatkan Penurunan Memori Dan Fungsi Mental Penting Lainnya','Memperbaiki Gaya Hidup','Sering Pikun, Termasuk Lupa Namanya Sendiri Dan Di Mana Menaruh Barang','Sel Otak Yang Menyimpan Dan Memproses Informasi Mulai Melemah Dan Mati. Selain Itu, Protein Abnormal Dihasilkan, Yang Menciptakan Plak Dan Penumpukan Di Sekitar Dan Di Dalam Sel Sehingga Dapat Mengganggu Komunikasi','Dengan Memeriksa Kesehatan Secara Menyeluruh, Riwayat Pengobatan, Dan Kepintaran Anda. Dokter Juga Akan Memeriksa Kemampuan Bernalar, Koordinasi Tangan-Mata, Keseimbangan, Dan Sensasi Penciuman, Serta Tanda Depresi Di Saat Yang Bersamaan.','Karena Tidak Adanya Obat Untuk Menyembuhkan Penyakit Alzheimer, Pasien Alzheimer Penting Untuk Mendapatkan Dukungan Dan Pengobatan Sedini Mungkin'),(9,'Anal Abscess (Abses Anal)','Kondisi Penumpukan Nanah Di Sekitar Anus Yang Menyakitkan. Abses Anal Terjadi Ketika Rongga Rektum Terisi Dengan Nanah Dan Nanah Tersebut Muncul Di Sekitar Anus. ','Mengurangi Makanan Manis dan Penggunaan Obat Kortikosteroid, Meningkatkan Sistem Kekebalan Tubuh','Nyeri Yang Biasanya Konstan, Berdenyut, Dan Lebih Buruk Ketika Duduk','Penyebab Umum Penyakit Ini Adalah Bakteri Dari Anus Yang Menyebar Ke Bagian Sekitar Rektum Dan Menyebabkan Peradangan','Anamnesis, Pemeriksaan Fisik. Dokter Anda Akan Mendiagnosis Abses Anal Berdasarkan Riwayat Medis Dan Gejala Anda','Pembedahan Untuk Mengeluarkan Nanah Dan Mempercepat Penyembuhan, Antibiotik Dan Analgetik'),(10,'Aneurisma Aorta (Pelebaran Abnormal Aorta)','Kondisi Terjadinya Penggelembungan Atau Pembengkakan Pada Salah Satu Bagian Pembuluh Darah.','Menjaga Kesehatan Jantung Dan Pembuluh Darah Menjadi Faktor Penting Untuk Mencegah Terjadinya Penyakit Ini.','Nyeri Dada.','Disebabkan Oleh Pelemahan Dinding Pembuluh Darah.','Dokter Akan Melakukan Pemeriksaan Fisik, Riwayat Kesehatan, Keluhan Pasien, Serta Diikuti Dengan Pemeriksaan Lain, Seperti Elektrokardiogram, USG, Rontgen, CT Scan, Angiogram, Atau MRI.','Tergantung Pada Status Kesehatan Pasien Secara Keseluruhan, Ukuran, Serta Letak Penggelembungan Pembuluh Darah. Beberapa Jenis Obat Dapat Diberikan Untuk Mengurangi Tekanan Darah, Sehingga Gejala Dapat Berkurang. Namun Pada Beberapa Kasus, Diperlukan Tind'),(11,'Angina Pectoris (Serangan Jantung)','Istilah Yang Digunakan Untuk Nyeri Dada Yang Disebabkan Oleh Berkurangnya Aliran Darah Ke Otot Jantung','Terapkan Pola Hidup Sehat Dengan Rajin Berolahraga Dan Menjaga Pola Makan','Nyeri Dada Atau Ketidaknyamanan Pada Daerah Sekitar Dada','Adanya  Gumpalan  Darah  Yang  Membentuk  Plak  Di  Dalam  Arteri , Sehingga Membuatnya Tersumbat','Dokter Akan  Mengambil  Riwayat  Medis,  Melakukan  Pemeriksaan,  Dan  Tes  Darah. Elektrokardiografi (EKG) Dan  Sinar‐X Dapat Digunakan Untuk Mengevaluasi  Cedera  Sel Jantung',' Perubahan Gaya Hidup, Obat-Obatan, Angioplasty Dan Stenting, Atau Operasi Bypass Koroner.'),(12,'Autisme (Autism)','Autisme Berasal Dari Kata Auto Yang Berarti Diri, Dan Isme Yang Berarti Paham Atau Aliran. Autisme Sendiri Berasal Dari Bahasa Yunani Yang Berarti \'Sendiri\'.','Tindakan Pencegahan Tidak Bisa Dilakukan Secara Optimal. Pada Kasus Autisme, Definisi Pencegahan Lebih Kepada Mencegah Keparahan Perilaku Penderita Autisme. Namun Demikian, Upaya Pencegahan Agar Anak Lahir Tidak Mengalami Autisme Bisa Dimulai Dari Awal Ke','Gangguan Kualitatif Dalam Interaksi Sosial','Autisme Tidak Diketahui. Namun, Autisme Dapat Terjadi Dari Kombinasi Berbagai Faktor, Termasuk Faktor Genetik Yang Dipicu Faktor Lingkungan.','Dalam Proses Penegakkan Diagnosis, Biasanya Akan Dibantu Dengan Berbagai Alat Evaluasi Yang Perlu Dikerjakan, Baik Oleh Orangtua Atau Para Profesional Medis. Diagnosis Harus Dilakukan Oleh Ahli Yang Berpengalaman Terhadap Kasus Ini','Penanganan Pada Autisme Harus Secara Terpadu, Meliputi Semua Disiplin Ilmu Terkait: Tenaga Medis (Psikiater, Dokter Anak, Neurolog, Dokter Rehabilitasi Medik) Dan Nonmedis (Tenaga Pendidik, Psikolog, Ahli Terapi Bicara/Okupasi/Fisik, Pekerja Sosial)'),(13,'Bronkitis','Merupakan Penyakit Pernapasan Akibat Infeksi Pada Saluran Napas, Dengan Manifestasi Peradangan Pada Bronkus,','Melakukan Vaksinasi, Tidak Merokok, Perkuat Sistem Imun Tubuh Dengan Cara Menerapkan Pola Hidup Sehat, Makan Makanan Bergizi Dan Seimbang, Dan Jika Perlu, Konsumsi Suplemen Kesehatan','Sesak Napas, Sakit Tenggorokan.\r\n','Bronkitis Sering Kali Disebabkan Oleh Infeksi Virus','Dokter Akan Melakukan Mencari Informasi Terlebih Dahulu, Dengan Menanyakan Pasien Gejala Apa Saja Yang Dirasakan. Mengecek Letak Dan Kondisi Lendir Juga Akan Dilakukan Oleh Dokter','. Peningkatan Kekebalan Tubuh Bisa Dicapai Dengan Pola Hidup Sehat, Seperti Makan Makanan Bergizi Dengan Jumlah Yang Seimbang, Banyak Minum Air, Serta Berhenti Merokok Dan Menghindari Asap Rokok Berikut Dengan Sumber Polusi Lainnya'),(14,'Cacar Air (Varicella / Chickenpox)','Merupakan Penyakit Yang Umum Diderita Anak-Anak Di Bawah Usia 10 Tahun. Meski Begitu, Penyakit Ini Bisa Menyerang Orang Dewasa Dengan Gejala Yang Lebih Berat Dibanding Anak-Anak','Cara Terbaik Untuk Mencegah Infeksi Cacar Air Adalah Dengan Vaksinasi','Bercak Kemerahan Yang Kemudian Berubah Menjadi Vesikel Atau Lepuhan Berisi Air Yang Terasa Gatal','Disebabkan Oleh Infeksi Varicella-Zoster Virus (VZV)','Dapat Dilakukan Berdasarkan Pemeriksaan Klinis Oleh Dokter. Namun Apabila Terdapat Keraguan Untuk Menentukan Diagnosis, Maka Dapat Dilakukan Beberapa Pemeriksaan Laboratorium Untuk Mengkonfirmasi Diagnosis Cacar Air.','Pengobatan Cacar Air Bersifat Simtomatik Atau Menangani Gejala Yang Muncul. Obat Yang Diberikan Umumnya Golongan Antipiretik (Penurun Demam) Dan Analgesik (Pereda Nyeri) Seperti Parasetamol.'),(15,'Dehidrasi/Kurang Cairan','Setiap Harinya, Air Dan Cairan Lain Di Dalam Tubuh Akan Hilang Melalui Napas, Keringat, Urine, Dan Feses. Ketika Tubuh Kehilangan Cairan, Terutama Air, Lebih Dari Yang Anda Minum, Maka Tubuh Pun Akan Mengalami Dehidrasi Dan Tidak Dapat Melaksanakan Fungsi','Minum Air Lebih Banyak, Hindari Mengkonsumsi Alkohol, Hindari Berolahraga atau Beraktivitas Ketika Cuaca Sedang Panas','Merasa Haus Yang Ekstrem, Mulut Terasa Kering Dan Lidah Membengkak','Penyebab Paling Umum Dari Dehidrasi Pada Anak-Anak Adalah Diare Berat Dan Muntah. Orang Yang Lebih Tua Secara Alami Memiliki Volume Air Yang Lebih Rendah Dalam Tubuh Mereka, Dan Mungkin Mengonsumsi Obat-Obatan Tertentu Yang Meningkatkan Risiko Dehidrasi','Dokter Akan Melakukan Anamnesis, Pemeriksaan Fisik, Serta Serangkaian Tes Sederhana','Satu-Satunya Pengobatan Yang Efektif Untuk Dehidrasi Adalah Menggantikan Cairan Dan Elektrolit Yang Hilang.'),(16,'Demam Berdarah Dengue (DBD / DHF)','Penyakit Yang Sangat Umum Di Indonesia Dan Negara Tropis Lainnya','Menjaga Lingkungan Tetap Bersih','Pusing, Sakit Di Belakang Mata','Disebabkan Oleh Infeksi Virus Dengue Yang Dibawa Oleh Nyamuk Betina Aedes Aegypti Dan Ae. Albopictus','Diagnosa DBD Dilaksanakan Berdasarkan Gejala Klinis, Pemeriksaan Serta Tes Laboratorium. Tes Darah Akan Dilaksanakan Untuk Memeriksa Leukosit Dan Trombosit','Tidak Bisa Diatasi Dengan Cara Khusus, Melainkan Anda Perlu Terus Terhidrasi Dengan Meminum Air'),(17,'Migrain','Salah Satu Tipe Dari Sakit Kepala','Adalah Dengan Cara Mengidentifikasi Dan Mencegah Pemicunya.','Titik-Titik Buta Sementara Atau Titik-Titik Berwarna, Penglihatan Kabur','Terjadi Karena Adanya Aktivitas Otak Yang Abnormal. Aktivitas Ini Dapat Dipicu Oleh Banyak Hal','Biasanya Dilakukan Dengan Menanyakan Gejala Dan Riwayat Migrain Pada Keluarga. Pemeriksaan Fisik','Untuk Penanganan Migrain, Obat Penghilang Rasa Nyeri Yang Umum Seperti Acetaminophen, Ibuprofen, Atau Aspirin Sering Kali Dapat Membantu Apabila Migrain Yang Dirasakan Masuk Kategori Ringan. '),(18,'Tidur Berlebihan (Hipersomnia)','Salah Satu Bentuk Dari Gangguan Tidur','Belum Ada Pencegahan Khusus Terkait Dengan Kondisi Ini','Tidur Pada Siang Hari Yang Berlebih, Tidur Nokturnal','Obesitas, Narkolepsi, Penyalahgunaan Minuman Keras Atau Narkoba, Kurang Tidur Di Malam Hari, Cedera Atau Kelainan Di Kepala, Depresi Dan Faktor Keturunan, Obat-Obatan','Pemeriksaan Fisik Dan Status Mental Mungkin Diperlukan Untuk Penyakit Ini','Pemberian Stimulan Untuk Mengatasi Tidur Berlebih Dengan Narkolepsi. Selain Itu Dokter Pun Dapat Meresepkan Neuroleptik Dan Antidepresan'),(19,'Tuberkulosis Paru (TBC)','Penyakit Menular Yang Menyebabkan Masalah Kesehatan Terbesar Kedua Di Dunia Setelah HIV','Langkah Utama Dalam Pencegahan TBC Adalah Dengan Menerima Vaksin BCG (Bacillus Calmette-Guerin)','Batuk Yang Mengeluarkan Darah, Dada Terasa Sakit Saat Bernapas Atau Batuk.','Penyebab TBC Adalah Bakteri Yang Tersebar Di Udara Melalui Semburan Air Liur Dari Batuk Atau Bersin Pengidap Tuberkulosis.','Anamnesis, Rontgen Dada, Tes Mantoux, Tes Darah, Tes Dahak','Mengonsumsi Beberapa Jenis Antibiotik Yang Harus Diminum Selama Jangka Waktu Tertentu'),(20,'Tumor (Benjolan)','Massa Jaringan Yang Abnormal, Tumbuh Berlebihan, Tidak Terkoordinasi Dengan Jaringan Normal, Dan Tumbuh Terus Meskipun Rangsangan Yang Memulainya Sudah Tidak Ada','Menjaga Pola Hidup Sehat','Terdapat Benjolan Yang Tidak Menimbulkan Nyeri, Berbatas Tegas, Dapat Bergerak Dari Dasarnya','Namun Terdapat Beberapa Faktor Risiko Tumor Dapat Muncul, Antara Lain Berasal Dari Lingkungan (Paparan Radiasi), Genetik, Pola Makan, Traumagian Besar Atau Cedera Lokal, Serta Inflamasi Atau Infeksi','Dokter Akan Menanyakan Riwayat Penyakit Anda, Gejala Yang Dialami, Dan Memeriksa Kondisi Fisik','Dokter Akan Menyarankan Untuk Melakukan Observasi Massa Tumor Yang Anda Miliki. Sedangkan Langkah Penanganan Berikutnya Tergantung Pada Jenis, Lokasi Tumbuh, Dan Tingkat Keganasan Tumor'),(21,'Urtikaria (Biduran)','Reaksi Kulit Berupa Bercak Atau Ruam Merah, Merah Pucat, Atau Putih, Yang Disertai Rasa Gatal','Hindari Faktor Penyebab Yang Sudah Diketahui, Seperti Makanan Atau Obat-Obatan Tertentu','Bercak Merah Atau Putih Yang Umumnya Terjadi Di Wajah, Tubuh, Lengan, Atau Tungkai Bawah','Bercak Atau Ruam Yang Disertai Gatal Muncul Ketika Sel-Sel Tertentu Melepaskan Histamin Dan Bahan Kimia Lainnya Ke Dalam Aliran Darah','Dokter Akan Melakukan Pemeriksaan Fisik Dan Mengajukan Sejumlah Pertanyaan Untuk Mencoba Menemukan Penyebab Urtikaria','Dokter Mungkin Akan Merekomendasikan Penggunaan Antihistamin, Seperti Loratadin, Cetirizine, Dan Lain-Lain Yang Dijual Bebas'),(24,'srgtsr','egags','aeg','aeg','aeg','aeg','aeg');
/*!40000 ALTER TABLE `penyakit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `sandi` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `umur` int(30) NOT NULL,
  `beratbadan` int(30) NOT NULL,
  `tinggibadan` int(30) NOT NULL,
  `privilege` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`username`, `sandi`, `Nama`, `email`, `umur`, `beratbadan`, `tinggibadan`, `privilege`) VALUES ('admin','admin123','admin_','admin@gmail.com',0,0,0,'admin'),('cobayaa','coba','cobain','cobain@gmail.com',111,111,111,'doctor'),('dianr','dianr','Rezky','daaa@gmail.com',20,11,162,'user'),('doctor','user','hey hey','coba@coba1.com',30,80,179,'doctor'),('doktertest','doktertest','dokter tamvan','daaa@gmail.com',17,200,900,'doctor'),('drzw','drz','Rezky','daaa@gmail.com',11,11,11,'user'),('halo','hal123','Halo','halo@gmail.com',19,78,180,'user'),('haloya','haloya','coba','daaa@gmail.com',20,11,11,'user'),('hanzeld','hanzel','Hanzel','daaa@gmail.com',11,11,11,'doctor'),('rezx','rezx','Dian','daaa@gmail.com',11,11,11,'user'),('testdoc','coba','hayoolo','daaa@gmail.com',11,11,11,'user');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'hitkhea1_sg'
--

--
-- Dumping routines for database 'hitkhea1_sg'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-15 11:52:00
