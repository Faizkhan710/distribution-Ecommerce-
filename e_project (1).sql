-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 04:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `passw` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `email`, `passw`) VALUES
(1, 'moosani', 'Zohaibmoosani184@gmail.con', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `p_idfk` int(11) DEFAULT NULL,
  `c_idfk` int(11) DEFAULT NULL,
  `c_qty` int(11) DEFAULT NULL,
  `c_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'jeans');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(30) DEFAULT NULL,
  `c_phone` int(11) DEFAULT NULL,
  `c_email` varchar(30) DEFAULT NULL,
  `c_pass` int(11) DEFAULT NULL,
  `c_address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `desination`
--

CREATE TABLE `desination` (
  `desig_id` int(11) NOT NULL,
  `desig_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desination`
--

INSERT INTO `desination` (`desig_id`, `desig_name`) VALUES
(1, 'maneger');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(30) DEFAULT NULL,
  `desi_idfk` int(11) DEFAULT NULL,
  `emp_joiningdate` date DEFAULT NULL,
  `emp_phone` int(11) DEFAULT NULL,
  `emp_email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_name`, `desi_idfk`, `emp_joiningdate`, `emp_phone`, `emp_email`) VALUES
(1, '[name]', 0, '0000-00-00', 0, '[email]'),
(2, '[name]', 0, '0000-00-00', 0, '[email]'),
(3, 'ali', 1, '2022-11-25', 767657, 'zo@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `p_idfk` int(11) DEFAULT NULL,
  `c_idfk` int(11) DEFAULT NULL,
  `o_qty` int(11) DEFAULT NULL,
  `o_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `p_id` int(11) NOT NULL,
  `o_idfk` int(11) DEFAULT NULL,
  `p_total` int(11) DEFAULT NULL,
  `p_status` varchar(30) DEFAULT NULL,
  `creditcard` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(30) DEFAULT NULL,
  `cat_idfk` int(11) DEFAULT NULL,
  `p_price` int(11) DEFAULT NULL,
  `p_qty` int(11) DEFAULT NULL,
  `p_image` text DEFAULT NULL,
  `p_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `cat_idfk`, `p_price`, `p_qty`, `p_image`, `p_desc`) VALUES
(1, 'Zohaib ', 1, 1250, 450, '????\0JFIF\0\0\0\0\0\0??\0?\0	( \Z%!1!%)+...383-7(-.+\n\n\n\r\Z---/---++----++7--------------++---+--+----+---+-77??\0\0?>\"\0??\0\0\0\0\0\0\0\0\0\0\0\0\0??\0B\0	\0\0\0\0\0!1AQa??Rq????\"b??B???#r??23Scs???????\0\0\0\0\0\0\0\0\0\0\0\0\0??\0\0\0\0\0\0\0\0\0!1Aaq2??\0\0\0?\0?\r??1?D???(x?8???!?-?r?(??S ?5?L?E\n&??H?ELd?\r??D?42??5? ( ?k\Z???0L?`\0@`\\?p1[{?L@S(?#4,,8H	??*??#*leU?xaD?A??E.k?\n+*)???Cc_?QHe2J#(?YH8?$2???2b?2@?Ld?Hd?a?14=??K0????N? ????k????0??(\"??`????#????btD???H?EXT???R??\r?b+???L?SL???X?SLD??a???:??uE!?E1??.:sX???Bt29??R$AD?R?\nd1HD???RZ?a?a?B?bX??k??x?????0????60*????T??dk??D??5?b ?[???H???q1?!.??q?R5???l)??9Wr??g??d?XWj?:?p?-??K`?]??EQ??e9l??QmUG??[U%?\'\'OF3H?:YuFUe??=51??/????ylc????G????a?????????g?g???y????c???l2?k????2s?X?n?9e??w?e??t???s?yd???????:??s\\?~?=???????:??p??>?.??.?Tq?X?n5?5e????|???W?zW\r?7??????/?Y8??z75???.@^??V\\???X?.k??+?.??\0??wy?t?????o???|???X???p?h?z?????1??X???r)??Ld?&2eL*D?0??2?$??j,?\"I?HQe!????E??R\"??@W?D?\Z?R6\"H7*??8??2b????K?\Z5????4??a?Y;?Sk?[O???D??I?M8??dz%?\02?????8?X(QLa?L??b\"iY7f?-??GR%?ld?`?)???? ? ?#?lB??5???U30??0>b?)?????T???!??????cQ=E?\Z?T??RH?a?T??J?R? ??UWYsC*?c?`??b=\'g?e0*?n|?T?????????1????????zM?q???q??\\???~???z?R??RqM?l*m%??#?\'7?K????????%?f????|?}<?k??|?|?(R????i+AJ??v???YVR???????k\r?N^??Z?I??b*?\0.??$?U????\0?OO?????????U*?W??U???[????\'?????nc????g}??W????/????????%wy?nWR?????G>?q??oR????Oi?????????{bQj?I];*rn??F???a?vk>?e??<?)?????G\r???????_???<???Jr?W}\"??????t??v?>N??yO??%?]?N?????u?\\???7\\}??:S????9?G?.???W:????V9???????~L?]*[??r????fs???]^???W9?Sw???tc?2??s???S?\n????cK??w??lV?.???\'w???7?Z?????i7????*;?1QH????a???????-????G??}??????`??(9?r??{?{??x?@?a?2?????}J???vC????????(???}????H,?z???7g?p?????????????g\'??~g?EEs???0_??g?\'?n?q??h?B???\03???????QUSn?\'?????}?-????????T*??F?a??n?[4BN?F?c??\01|????QQBj3??z???+4?KR?.S\'9??XV?????????y?vI%,3??W]0?%uy?z5?????????<???\n[?Z?7?~T?Y?Zrw?<???7?5???n?????$??~?5a??Y?5???-??rIo?;??????B??m?}\n?????_2??{y==????Gl???5??O??.[\Z??E^9???7?2Z?m=???????Y?K??W}???????R~\'???g?w&B?k_??{??B?????\0????]???[??6\'?~??WFo?3????9\\???t?{\"??X????9zO???5???>}W[P??N?-?h???1[4???/?U????????Uz???lB???}?,?C?/?*5?x???;T[?X*{???????.B?{\r???<f??o?!??_? ?[?nB?????A?-IsG%??~@r{Yj:?9?+???NF?_??2??-?|?2???}??????????^?J???[??2??nR?kF?Z?#(??u????W???G<?cR?W?i????f??*???J?(?)6?????>?>????J??u?RJ???????wY?zT}i???m??O?\'??W??????\0???8??zo??;I<?aw?5[?9??G-?T|?Z????y???(Y??[????]k=?B?^&????og?????u?QVW\\??(??K?W????????nW????J-?????[??????O?rz?(??????c_7?g?????/?????g?.%?????j??V!??y???<n?)o_??2{?????????*?o???y????AEV?\0??????|,G???u?|,Ex????=???5Wf????[S?????r??.??HS[,*8?ld??e0-?n+j?Z???=???]f2?V??PT??????????r\n??\\??????4`?z?\'???n???\0??7???.??y?V???\\?????r?????Z\r?q??QY?--?im??d?Yo^?????1Qn??\Z?????/?s@s?4?????N????v????????/3??5mM???w???M????v<J??????w?R???>?Od?&<[???Y?z????Y$??7???*-6???????????GE????+??_??Tzcm???	R2???C?H?-???>5)???)??????3q?(=?p!:{???ui????3???y??\0Q|?ig?S??{~????Fy??\Z??????a?;=k?????m?5?????????\r??/?T???<?fe??m,?ZV?~%o]?n/Wg?=\\yw&?]???/H?x??5????????=???????>DuV???%?s&????6?????0??j9?h??r???;?????F?!Z???Un?`yF?*?=n??[??_S?YN?t??4gJ?w??????S??]????sF?E??y?	??{?F1?*(?B?[??????QH??-?d?E1???????X?\r[?QE%???]???????^?1%?Z??N???p2??y~???;f??vZs\'g??????#??j9M?????Y?}vc??.?\"????M:????4^???hUI???wV?Q?67?le?;?J???lo?y?,??\Z\\$?E??QY???\0#??z4?SZR_??\0k4?fw?????s?/???_??3???\'??o??\ZD\n????6????y????8??\r_k?W??O?|p??<???;~H???UR?	~??%J?b?l????M=Mr??	:?w?(?O?????RW???Vy??9V?EI<???|?7??;?$???jYT?????iF???\'?o???=???}:{???:??%???ZGR;W?????11n\0?o0bz?? ?^?????', 'ZOPHAOIB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `p_idfk` (`p_idfk`),
  ADD KEY `c_idfk` (`c_idfk`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `desination`
--
ALTER TABLE `desination`
  ADD PRIMARY KEY (`desig_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `p_idfk` (`p_idfk`),
  ADD KEY `c_idfk` (`c_idfk`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `o_idfk` (`o_idfk`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `c_idfk` (`cat_idfk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `desination`
--
ALTER TABLE `desination`
  MODIFY `desig_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_idfk`) REFERENCES `products` (`p_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`c_idfk`) REFERENCES `customers` (`c_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`p_idfk`) REFERENCES `products` (`p_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`c_idfk`) REFERENCES `customers` (`c_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`o_idfk`) REFERENCES `orders` (`o_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
