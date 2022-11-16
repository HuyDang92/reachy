-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 03:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reachy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `address` varchar(500) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id_bill`, `id_user`, `date`, `address`, `payment`, `status`) VALUES
(1, 14, '2022-11-14', 'Ben Tre', 'Momo', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id_billdetail` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id_billdetail`, `id_bill`, `id_product`, `amount`) VALUES
(1, 1, 1, 5),
(2, 1, 1, 5),
(3, 1, 2, 5),
(4, 1, 1, 5),
(5, 1, 86, 55);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id_brand`, `id_category`, `name`) VALUES
(1, 1, 'Nike'),
(2, 1, 'Adidas'),
(3, 1, 'Puma'),
(4, 1, 'Fila'),
(5, 1, 'Gucci'),
(6, 1, 'Mlb'),
(7, 1, 'Vans');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'Giày Sneaker'),
(2, 'Giày Thể thao  '),
(3, 'Giày Sandals '),
(4, 'Giày Lười '),
(5, 'Giày Boots '),
(6, 'Giày tây '),
(7, 'Giày nữ '),
(8, 'Dép'),
(9, 'Phụ kiện ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `sale_off` int(100) NOT NULL,
  `in_stock` tinyint(1) NOT NULL DEFAULT 1,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `views` int(11) NOT NULL,
  `feature` varchar(2000) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `special` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_category`, `id_brand`, `name`, `price`, `sale_off`, `in_stock`, `date`, `views`, `feature`, `description`, `special`) VALUES
(1, 1, 1, 'Air Jordan 1 Zoom CMFT', 4109000, 15, 1, '2022-11-04', 0, 'Làm cho phong cách mang tính biểu tượng trở nên thoải mái hơn. Air Jordan 1 Zoom Cmft làm lại Air Jordan 1 với lớp đệm nhẹ, cấu hình thấp và các yếu tố cải thiện khả năng đeo. Da và vải dệt ở phía trên có cảm giác đứt quãng. Cổ áo có lót, đệm lót ở gót chân để tạo sự vừa vặn an toàn.', 'MỘT CUỘC THI CỔ ĐIỂN ĐƯỢC QUAY LẠI CHO SỰ THOẢI MÁI.\r\n\r\n\r\nLàm cho phong cách mang tính biểu tượng trở nên thoải mái hơn. Air Jordan 1 Zoom Cmft làm lại Air Jordan 1 với lớp đệm nhẹ, cấu hình thấp và các yếu tố cải thiện khả năng đeo. Da và vải dệt ở phía trên có cảm giác đứt quãng. Cổ áo có lót, đệm lót ở gót chân để tạo sự vừa vặn an toàn.', b'0'),
(2, 1, 1, 'Air Jordan 1 Low SE\r\n', 2300000, 20, 1, '2022-11-04', 0, 'Những chiếc AJ1 sáng sủa này đã sẵn sàng cho một lễ kỷ niệm — hoặc tủ trưng bày. Da bằng sáng chế sang trọng tỏa sáng trong khi ánh vàng cho mọi người biết bạn là một ngôi sao.\r\n', 'Da mang lại độ bền và cấu trúc.\r\nBộ phận Air-Sole được đóng gói trong gót chân cung cấp đệm nhẹ.\r\nĐế ngoài bằng cao su đặc cho bạn lực kéo trên nhiều bề mặt khác nhau.', b'0'),
(3, 1, 1, 'Air Jordan 1 Mid SE\r\n', 3300000, 20, 1, '2022-11-04', 0, 'Làm cho phong cách mang tính biểu tượng trở nên thoải mái hơn. Air Jordan 1 Zoom Cmft làm lại Air Jordan 1 với lớp đệm nhẹ, cấu hình thấp và các yếu tố cải thiện khả năng đeo. Da và vải dệt ở phía trên có cảm giác đứt quãng. Cổ áo có lót, đệm lót ở gót chân để tạo sự vừa vặn an toàn.', 'MỘT CUỘC THI CỔ ĐIỂN ĐƯỢC QUAY LẠI CHO SỰ THOẢI MÁI.\r\n\r\nLàm cho phong cách mang tính biểu tượng trở nên thoải mái hơn. Air Jordan 1 Zoom Cmft làm lại Air Jordan 1 với lớp đệm nhẹ, cấu hình thấp và các yếu tố cải thiện khả năng đeo. Da và vải dệt ở phía trên có cảm giác đứt quãng.', b'0'),
(4, 1, 1, 'Air Jordan 1 Low OG\r\n', 3480000, 20, 1, '2022-11-04', 0, 'Air Jordan 1 Low OG làm lại kiểu giày sneaker cổ điển với màu sắc và kết cấu mới. Chất liệu cao cấp và điểm nhấn mang đến sự thể hiện mới mẻ cho một chiếc đồng hồ được yêu thích nhất mọi thời đại.', 'Da mang lại độ bền và cấu trúc.\r\nBộ phận Air-Sole được đóng gói trong gót chân cung cấp đệm nhẹ.\r\nĐế ngoài bằng cao su đặc cho bạn lực kéo trên nhiều bề mặt khác nhau.', b'0'),
(5, 1, 1, 'Air Jordan 1 Element\r\n', 4230000, 20, 1, '2022-11-04', 0, 'Chuyển sang chế độ bình thường với Air Jordan 1 Element. Phong phú với di sản vòng hoa mang tính biểu tượng, tủ quần áo chủ lực nâng tầm trò chơi của nó với chất liệu GORE-TEX và lớp phủ bằng da nubuck bằng bơ. Một dấu Swoosh phản chiếu sáng dọc hai bên.', 'Bootie bên trong GORE-TEX được thiết kế để giúp bạn luôn khô thoáng.\r\nLớp phủ da Nubuck cung cấp cấu trúc và hỗ trợ.\r\nĐế lót ly cao su cung cấp lực kéo trên nhiều loại bề mặt.', b'0'),
(6, 1, 1, 'Air Jordan 1 Mid SE\r\n', 3350000, 20, 1, '2022-11-04', 0, 'Đây là mùa dành cho J\'s lấy cảm hứng từ kỳ nghỉ và cặp này lấy tín hiệu từ một cây Giáng sinh cổ điển — Blue Spruce. Da hạt phong phú và các loại vải dệt sẽ nâng cao độ vừa vặn của bất kỳ thời trang dạo phố nào, trong khi nội thất mềm như bơ và Air in the gót tăng thêm sự thoải mái.', 'Chuyển sang chế độ bình thường với Air Jordan 1 Element. Phong phú với di sản vòng hoa mang tính biểu tượng, tủ quần áo chủ lực nâng tầm trò chơi của nó với chất liệu GORE-TEX và lớp phủ bằng da nubuck bằng bơ. Một dấu Swoosh phản chiếu sáng dọc hai bên.\r\n', b'0'),
(7, 1, 2, 'ADIZERO ADIOS PRO 3 SHOES', 6500000, 15, 1, '2022-11-04', 0, 'Hai lớp foam đàn hồi nhất của chúng tôi. Mang lại trải nghiệm tốt nhất dành cho runner khi thi đấu và tập luyện.\r\nThiết kế nguyên khối kết hợp hài hòa giữa độ cứng cáp và khả năng hoàn trả năng lượng.\r\nĐế ngoài cao cấp tạo độ bám.', 'ADIZERO ADIOS PRO 3 là mẫu giày chạy đua đường trường đỉnh cao, dành cho những runner tốc độ muốn nâng cao phong độ và chinh phục những kỷ lục mới. Đế giữa gồm 2 lớp mút foam Lightstrike Pro dẻo dai và êm ái. Với các thanh ENERGYRODS 2.0 tối ưu trang bị ở đế giữa, giày ADIZERO ADIOS PRO 3 mang lại cho runner cảm giác cứng cáp và khả năng hoàn trả năng lượng tối ưu. Thân giày kiểu mới siêu nhẹ cho độ nâng đỡ tập trung tại những vị trí cần thiết nhất cho vận động viên, kết hợp với đế ngoài bằng cao su Continental siêu bám giúp bạn chinh phục các khúc ngoặt đầy tốc độ.\r\n*60% trong số những chiến thắng của giải World Major Marathon 2021 thuộc về các vận động viên mang giày Adizero Adios Pro 2.', b'0'),
(8, 1, 2, 'ULTRABOOST 22 SHOES\r\n', 5200000, 15, 1, '2022-11-04', 0, 'Hàng trăm hạt BOOST hợp nhất và hoàn trả năng lượng tuyệt vời.\r\nBước tiến mới của hệ thống Torsion huyền thoại. Vừa khít đế ngoài cho sải bước đàn hồi.\r\n\r\nĐế ngoài bằng cao su tự nhiên Continental và thân giày làm từ sợi dệt có chứa 50% Parley Ocean Plastic.\r\n\r\n\r\n', 'Đôi giày chạy bộ Ultraboost này đem lại sự thoải mái và đàn hồi. Đế giữa BOOST mang đến nguồn năng lượng bất tận, cùng hệ thống Linear Energy Push và đế ngoài bằng cao su Continental™ Rubber. Thân giày làm từ loại sợi hiệu năng cao có chứa tối thiểu 50% chất liệu Parley Ocean Plastic —  rác thải nhựa tái chế thu gom từ các vùng đảo xa, bãi biển, khu dân cư ven biển và đường bờ biển, nhằm ngăn chặn ô nhiễm đại dương', b'0'),
(9, 1, 2, 'ADIDAS FORUM LOW SHOES\r\n', 1750000, 15, 1, '2022-11-04', 0, 'Hệ thống đan chéo với móc và quai rời ở cổ chân tăng cường khả năng nâng đỡ.\r\nChi tiết lưới đan dellinger web bằng vải nylon kinh điển tạo điểm nhấn.\r\nĐế giày bọc cao su bền bỉ giúp cải thiện độ bám và tăng cường khả năng di chuyển.\r\n\r\n\r\n', 'Không chỉ là một đôi giày, mà chính là một tuyên ngôn. Dòng adidas Forum ra mắt năm 1984 và cực kỳ được ưa chuộng cả trên sân bóng rổ lẫn trong giới âm nhạc. Mẫu mới của dòng giày kinh điển này tái hiện tinh thần thập niên 80, nguồn năng lượng bùng nổ trên sân đấu cũng như thiết kế quai cổ chân chữ X đặc trưng, kết tinh thành phiên bản cổ thấp đậm chất đường phố.', b'0'),
(10, 1, 2, 'STAN SMITH', 2500000, 15, 1, '2022-11-04', 0, 'Trung thành với thiết kế nguyên bản, kiểu dáng kinh điển của dòng Stan Smith đã mang phong cách sneaker suốt hơn bốn thập kỷ.\r\nThân giày may bằng chất vải Primegreen, làm từ dòng chất liệu tái chế hiệu năng cao\r\nLogo Stan Smith trên lưỡi gà và viền gót giày kết hợp với Ba Sọc đục lỗ.', 'Vẻ đẹp kinh điển. Phong cách vốn dĩ. Đa năng hàng ngày. Suốt hơn 50 năm qua và chưa dừng ở đó, giày adidas Stan Smith luôn giữ vững vị trí là một biểu tượng. Đôi giày này là phiên bản cải biên mới mẻ, là một phần cam kết của adidas hướng tới chỉ sử dụng polyester tái chế bắt đầu từ năm 2024. Với thân giày vegan và đế ngoài làm từ cao su phế liệu, đôi giày này vẫn mang phong cách đầy tính biểu tượng, đồng thời thân thiện với môi trường.', b'0'),
(11, 1, 2, 'OZWEEGO CELOX', 1650000, 15, 1, '2022-11-04', 0, 'Sản phẩm này có sử dụng chất liệu tái chế, là một phần quyết tâm của chúng tôi hướng tới chấm dứt rác thải nhựa. 20% thân giày làm từ chất liệu có chứa tối thiểu 50% thành phần tái chế.', 'OZWEEGO luôn là một biểu tượng đầy táo bạo. Khởi đầu là một mẫu giày chạy bộ thập niên 90 rồi biến hóa thành một thiết kế đầy cá tính, dòng giày này luôn đề cao tinh thần đổi mới. Đôi giày adidas này thúc đẩy mạnh mẽ tinh thần ấy, kết hợp giữa công nghệ hiện đại và phong cách thanh thoát, đậm chất tương lai. Hãy xỏ giày và tự tin sải bước nhờ lớp đệm Adiprene mềm mạ', b'0'),
(12, 1, 2, 'SKATEBOARDING VULC RAID3R', 1360000, 15, 1, '2022-11-04', 0, 'Làm từ một nhóm chất liệu tái chế và có chứa ít nhất 50% thành phần tái chế, sản phẩm này đại diện cho một trong số rất nhiều các giải pháp của chúng tôi hướng tới chấm dứt rác thải nhựa', 'Hồi tưởng những tháng ngày mê mải với kickflip và ollie. Đôi giày sneaker adidas phong cách skateboarding này chắt lọc những gì tinh túy nhất của văn hóa trượt ván để mang đến cho bạn phong cách thật chill trong mọi hoạt động. Một biểu tượng phù hợp để diện mọi lúc mọi nơi.', b'0'),
(13, 1, 3, 'PUMA x COCA-COLA Suede Sneakers', 1600000, 15, 1, '2022-11-04', 0, 'Khởi động thấp\r\nVải polyester phía trên với mô hình đồ họa\r\nLớp phủ da lộn trên mũi giày, gót chân và mắt kính\r\nHình bóng chai Coca-Cola được in nổi và in trên gót chân\r\nLogo Coca-Cola in màn hình trong quý\r\nThẻ Coca-Cola bằng cao su ở trên cùng', 'PUMA x COCA-COLA là sự kết hợp của hai thương hiệu mang tính biểu tượng có chung lịch sử sâu sắc, ý thức tích cực và khả năng phát triển văn hóa về phía trước. Các bộ sưu tập, như PUMA Suede cổ điển này, kết hợp DNA của cả hai thương hiệu với ngôn ngữ thiết kế tương lai-hoài cổ, nhắc nhở chúng ta tự hào về quá khứ của mình đồng thời nhắc nhở chúng ta luôn nhìn về phía trước với sự tích cực', b'0'),
(14, 1, 3, 'Extent Nitro Ultraviolet Sneakers', 3100000, 15, 1, '2022-11-04', 0, 'Bọt NITRO: Bọt phun nitơ tiên tiến được thiết kế để cung cấp khả năng đáp ứng vượt trội trong một gói cực kỳ nhẹ', 'Giải thích của chúng tôi về nơi công nghệ đáp ứng thời trang và hiệu suất đáp ứng thiết kế, Extent Nitro có đế giữa được bơm nitơ nhẹ, có chiều dài đầy đủ được bao bọc bởi một lớp bọt ổn định gót chân để tạo ra sự cân bằng về mặt thẩm mỹ và kỹ thuật. Trong quá trình lặp lại Tia cực tím, phần trên bằng vải dệt có các chi tiết ánh kim và hiệu ứng mờ dần trên đế giữa, và đôi giày được thiết kế và xây dựng dựa trên ý tưởng về caging, nhờ vào một cấu trúc hỗ trợ ẩn giữ được vải nhẹ.', b'0'),
(15, 1, 3, 'MB.02 Basketball Shoes', 2750000, 20, 1, '2022-11-04', 0, 'ĐỆM: Đế giữa được làm bằng bọt NITRO cho khả năng phản hồi và thoải mái vượt trội trong khi vẫn nhẹ - hoàn hảo cho những lối chơi bùng nổ, năng lượng cao.\r\nGRIP: Hợp chất cao su chống trượt được thiết kế toàn phần với lớp lông vũ (điểm nhấn cho đôi cánh đặc trưng của Melo) để nâng cao độ bền và độ bám đường. Lý tưởng cho việc cắt nhanh và phát hiện jumper.\r\nPHÙ HỢP: Cấu trúc bên trên đột phá được làm bằng lưới dệt được thiết kế và vật liệu hỗn hợp đa vùng để hỗ trợ mục tiêu, thoải mái và dễ thở trong một gói nhẹ', 'MB.02 — mẫu giày mới nhất trong dòng sản phẩm Vòng đeo cổ PUMA thế giới khác của LaMelo Ball — đang bùng nổ tại hiện trường. Đặt nền móng cho hình bóng mới này là đế giữa được làm bằng bọt NITRO mô phỏng đôi cánh đặc trưng của Melo. Chủ đề mở rộng trên lưới dệt được thiết kế kỹ thuật phía trên theo tỷ lệ hoành tráng, tạo nên một tuyên bố phong cách mở rộng. Các điểm nhấn kim loại màu sắc thêm một chút bóng bẩy cho những cú đá chuẩn bị ra sân này, trong khi thương hiệu “1 trong 1” có thể nhận ra ngay lập tức nhắc lại rằng không có thứ gì khác thậm chí có thể xuất hiện.\r\n', b'0'),
(16, 1, 3, 'H.ST.20 KIT 2 Men\'s Sneakers', 175000, 15, 1, '2022-11-04', 0, 'LQDCELL cung cấp đệm ổn định\r\nHỖ TRỢ: Bọc cao su đế ngoài động vào đế giữa để có hình ảnh bên hông táo bạo', 'Chúng tôi đã truy cập vào kho lưu trữ cho cái này. Đánh vào những con phố vào đầu những năm 2000 như một hình bóng thấp bé với nguồn gốc trở lại mức tăng đột biến về khoảng cách tối giản, H.ST.20 đang tiến thẳng đến tương lai. Được phát triển với đế ngoài bằng cao su năng động, hình ảnh bên hông táo bạo và đệm ổn định LQDCELL, cú đá lấy cảm hứng từ đường chạy này đã trở lại trong một vòng lịch sử khác.\r\n', b'0'),
(17, 1, 3, 'Suede Classic XXI Men\'s Sneakers', 1450000, 15, 1, '2022-11-04', 0, 'VẬT LIỆU TỐT HƠN: Da có nguồn gốc trong sản phẩm này đến từ quá trình sản xuất da có trách nhiệm với môi trường và được kiểm tra và chứng nhận thông qua giao thức của Nhóm công tác về da\r\n', 'Suede xuất hiện vào năm 1968 và đã thay đổi trò chơi kể từ đó. Nó đã được mặc bởi các biểu tượng của mọi thế hệ và nó vẫn cổ điển qua tất cả. Có thể nhận biết ngay lập tức và liên tục được sáng tạo lại, di sản của Suede tiếp tục phát triển và được hợp pháp hóa bởi những cá nhân chân thực và biểu cảm nắm lấy chiếc giày mang tính biểu tượng. Hãy nằm ngoài lịch sử của Suede, mọi thời đại.\r\n', b'0'),
(18, 1, 3, 'PUMA x JOSHUA VIDES TRC Blaze Sneakers', 2680000, 15, 1, '2022-11-04', 0, 'CMEVA: Vật liệu EVA đúc nén của PUMA cho hiệu suất nhẹ', 'Gặp gỡ Joshua Vides. Nghệ sĩ dựa trên SoCal này đang định nghĩa lại phong cách nghệ thuật đại chúng với tác phẩm kết hợp các đường vẽ tay và hình ảnh minh họa đậm, sống động. Đối với sự ra mắt của PUMA x JOSHUA VIDES, anh ấy đã đặt vòng quay đặc trưng của mình trên bóng Hoops, với các đường nét năng động và thẩm mỹ đen trắng. TRC Blaze cũng không ngoại lệ với quy tắc này với các đường vẽ tay và đường khâu hở đậm.\r\n', b'0'),
(19, 1, 4, 'Grant Hill 2 Low X 2Pac \'96 Reissue', 2950000, 15, 1, '2022-11-04', 0, 'da / dệt / tổng hợp\r\nlogo thêu trên lưỡi, quý và mặt sau\r\nlưỡi lưới và cổ giày có đệm\r\nda lộn nhẹ phía trên với các chi tiết bằng sáng chế\r\nFILA x 2Pac bandana in sockliner', 'Một câu chuyện về hai biểu tượng.\r\n\r\nMột đôi giày Grant Hill cổ điển với lớp lót thiết kế Tupac.\r\n\r\nMang tính biểu tượng ở mọi nơi. #FILAstyle', b'0'),
(20, 1, 4, 'Men\'s Mb', 3000000, 15, 1, '2022-11-04', 0, 'da / dệt may\r\nthêu logo FILA trên quý, lưỡi, hộp giày và gót chân\r\nthiết kế đế giữa mang tính biểu tượng\r\nchi tiết da trên\r\nđệm cổ và lưỡi\r\nkéo tab trên gót chân\r\nlưỡi lưới', 'Một trong những đôi giày đáng nhớ nhất của tất cả những đôi giày bóng rổ những năm 1990 giờ đây là BACK.\r\n\r\nNhững đôi giày bóng rổ màu đen và trắng này là cơ bản, sạch sẽ và phong cách.\r\n\r\nMang tính biểu tượng ở mọi nơi. #FILAstyle', b'0'),
(21, 1, 4, 'Men\'s Oakmont Tr Mid', 2750000, 15, 1, '2022-11-04', 0, 'da / dệt / tổng hợp\r\nlogo thêu trên lưỡi, quý và mặt sau\r\ndây buộc tròn với hệ thống viền vòng d\r\ntab lưỡi và gót dệt\r\nđệm lưỡi và cổ áo\r\nĐế giữa EVA', 'Một trong những đôi giày đáng nhớ nhất của tất cả những đôi giày bóng rổ những năm 1990 giờ đây là BACK.\r\n\r\nNhững đôi giày bóng rổ màu đen và trắng này là cơ bản, sạch sẽ và phong cách.\r\n\r\nMang tính biểu tượng ở mọi nơi. #FILAstyle', b'0'),
(22, 1, 4, 'Men\'s Grant Hill 2', 3150000, 15, 1, '2022-11-04', 0, 'da / dệt / tổng hợp\r\nlogo thêu trên lưỡi, quý và mặt sau\r\ndây buộc tròn với hệ thống viền vòng d\r\ntab lưỡi và gót dệt\r\nđệm lưỡi và cổ áo\r\nĐế giữa EVA', 'Một trong những đôi giày đáng nhớ nhất của tất cả những đôi giày bóng rổ những năm 1990 giờ đây là BACK.\r\n\r\nNhững đôi giày bóng rổ màu đen và trắng này là cơ bản, sạch sẽ và phong cách.\r\n\r\nMang tính biểu tượng ở mọi nơi. #FILAstyle', b'0'),
(23, 1, 4, 'Men\'s Fila Ace', 1850000, 15, 1, '2022-11-04', 0, '\r\nda / tổng hợp / dệt may\r\nLogo F-Box trên lưỡi và mặt sau\r\nLogo FILA trên đế ngoài và đế giữa\r\nChi tiết cờ FILA vào quý\r\nđệm lưỡi và cổ áo\r\nhộp ngón chân đục lỗ\r\nlông mày grommet kim loại', 'Một trong những đôi giày đáng nhớ nhất của tất cả những đôi giày bóng rổ những năm 1990 giờ đây là BACK.\r\n\r\nNhững đôi giày bóng rổ màu đen và trắng này là cơ bản, sạch sẽ và phong cách.\r\n\r\nMang tính biểu tượng ở mọi nơi. #FILAstyle', b'0'),
(24, 1, 4, 'Men\'s Ray Tracer Apex', 1650000, 15, 1, '2022-11-04', 0, '\r\nda / lưới / dệt\r\nlogo thêu trên lưỡi, quý và mặt sau\r\nkéo các tab trên lưỡi và gót chân\r\nđệm lưỡi và cổ áo\r\nĐế giữa EVA nhẹ\r\ndây buộc tròn', '\r\nMột trong những đôi giày đáng nhớ nhất của tất cả những đôi giày bóng rổ những năm 1990 giờ đây là BACK.\r\n\r\nNhững đôi giày bóng rổ màu đen và trắng này là cơ bản, sạch sẽ và phong cách.\r\n\r\nMang tính biểu tượng ở mọi nơi. #FILAstyle', b'0'),
(25, 1, 5, 'Men\'s GG embossed sneaker', 19290000, 15, 1, '2022-11-04', 0, '\r\nHình dáng chunky của đôi giày thể thao này mang lại cho nó một cảm giác retro, vui tươi. Các bộ sưu tập của Gucci tiếp tục hướng đến các thời đại khác, tìm kiếm cảm hứng trong cuộc sống hàng ngày và đưa chúng đến hiện tại. Được chế tác từ da dập nổi GG, chi tiết Gucci thêm vào logo.\r\n', 'Da nổi GG màu trắng với chi tiết đục lỗ\r\nCủa nam\r\nCác chi tiết da đen mịn\r\nBản in G lồng vào nhau\r\nChi tiết \'Gucci\' trên gót chân\r\nĐế cao su\r\nĐôi dây buộc bổ sung bao gồm\r\nĐóng ren\r\nGót giữa\r\nChiều cao 2,2 \"\r\nSản xuất tại Ý', b'0'),
(26, 1, 5, 'Men\'s Rhyton sneaker\r\n', 21530000, 15, 1, '2022-11-04', 0, 'Được thiết kế với đế dày và kết cấu cồng kềnh, đôi giày thể thao Rhyton này được làm thủ công bằng da đen và trắng và nó được xác định bởi phần đế màu trắng tương phản. Một phiên bản mới của đôi giày được giới thiệu cho bộ sưu tập mới Tinh tế Gucci.', 'Chữ \'Gucci\' tông vàng ở gót giày\r\nĐế cao su trắng\r\nĐôi dây buộc bổ sung bao gồm\r\nĐóng ren\r\nGót thấp\r\nChiều cao 50mm\r\nSản xuất tại Ý\r\nMade in Italy', b'0'),
(27, 1, 5, 'Men\'s Gucci Basket sneaker', 23500000, 15, 1, '2022-11-04', 0, 'Mang phong cách thể thao đồng nghĩa với giày thể thao bóng rổ từ những năm 90, House giới thiệu những cách giải thích mới về giày thể thao Gucci Basket. Phong cách này mô phỏng sự tự thể hiện của thẩm mỹ trên sân với các tính năng và chi tiết đặc biệt. Mỗi đôi được chế tác chủ yếu từ Demetra, được tạo ra với cùng quy trình được sử dụng để thuộc da, chất liệu mới mang lại hiệu suất mềm dẻo và đàn hồi với lớp hoàn thiện mềm mại. Vật liệu thân thiện với môi trường kết hợp các nguyên liệu thô không có nguồn gốc động vật chủ yếu từ các nguồn bền vững, có thể tái tạo và dựa trên sinh học.', 'Demetra đen và trắng — được chế tác từ nguyên liệu không có động vật, chủ yếu từ các nguồn bền vững, có thể tái tạo và dựa trên sinh học với các chi tiết cao su màu xanh lá cây\r\nCủa nam\r\nCác chi tiết vải và đục lỗ màu trắng\r\nCao su lồng vào nhau G ở bên\r\nĐế cao su\r\nĐôi dây buộc bổ sung bao gồm\r\nĐóng ren\r\nBằng phẳng\r\nSản xuất tại Ý', b'0'),
(28, 1, 5, 'Men\'s GG sneaker', 19000000, 15, 1, '2022-11-04', 0, 'Hình dáng chunky của đôi giày thể thao này mang lại cho nó một cảm giác retro, vui tươi. Các bộ sưu tập của Gucci tiếp tục hướng đến các thời đại khác, tìm kiếm cảm hứng trong cuộc sống hàng ngày và đưa chúng đến hiện tại. Được chế tác từ da GG đục lỗ, họa tiết monogram thêm vào logo.', 'Da GG đục lỗ màu nâu\r\nCủa nam\r\nLogo G lồng vào nhau được in ở mặt sau\r\nĐế cao su\r\nĐôi dây buộc bổ sung bao gồm\r\nĐóng ren\r\nBằng phẳng\r\nSản xuất tại Ý', b'0'),
(29, 1, 5, 'adidas x Gucci men\'s Gazelle sneaker', 17500000, 15, 1, '2022-11-04', 0, 'Các họa tiết của Emblematic House kết hợp với họa tiết của thương hiệu đồ thể thao lịch sử adidas. Bộ sưu tập cho thấy cả hai di sản được mã hóa trong một bộ ba dòng, nơi adidas và Gucci kết hợp các biểu tượng lưu trữ. Giám đốc Sáng tạo, Alessandro Michele lấy cảm hứng từ những ký ức của ông về những năm 80 và 90 cho một bộ sưu tập mang hơi hướng hoài cổ và đương đại. Đôi giày thể thao Gazelle này có in hình Trefoil và các đường sọc.', 'Da nổi GG màu trắng với chi tiết đục lỗ\r\nCủa nam\r\nCác chi tiết da đen mịn\r\nBản in G lồng vào nhau\r\nChi tiết \'Gucci\' trên gót chân\r\nĐế cao su\r\nĐôi dây buộc bổ sung bao gồm\r\nĐóng ren\r\nGót giữa\r\nChiều cao 2,2 \"\r\nSản xuất tại Ý', b'0'),
(30, 1, 5, 'Men\'s Ace embroidered sneaker', 16800000, 15, 1, '2022-11-04', 0, 'Giày sneaker Ace cổ thấp bằng da được tô điểm bằng hình con ong thêu vàng trên nền sọc Web. Con ong là một mã lưu trữ lần đầu tiên được giới thiệu trong trang phục may sẵn của Gucci vào những năm 1970.', 'Da trắng với chi tiết da đỏ ở gót giày và màu xanh lá cây ở gót giày khác\r\nWeb xanh và đỏ\r\nCon ong thêu chỉ vàng\r\nĐế cao su\r\nBằng phẳng\r\n.6 \"chiều cao\r\nSản xuất tại Ý\r\nNhững đôi giày này chạy lớn, chúng tôi khuyên bạn nên giảm kích thước xuống một cỡ', b'0'),
(31, 1, 6, 'MLB Chunky Low\r\n', 2590000, 15, 1, '2022-11-04', 0, 'Chất liệu giày tốt, tạo cảm giác thoải mái khi vận động', 'Chất liệu: 100% Cotton. Lớp lót: 100% Cotton\r\nKiểu dáng giày sneakers đế cao thời trang\r\nThiết kế lấy cảm hứng từ hiệp hội bóng chày MLB\r\nPhối chữ in nổi bật\r\nLớp lót êm ái, nâng dáng bước chân\r\nGam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện\r\nXuất xứ thương hiệu: Hàn Quốc', b'0'),
(32, 1, 6, 'MLB Chunky Jogger', 2790000, 15, 1, '2022-11-05', 0, 'Chất liệu giày tốt, tạo cảm giác thoải mái khi vận động', 'Chất liệu: 100% Polyester, Lớp lót: 100% Da tổng hợp\r\nKiểu dáng giày thể thao đế cao chunky thời trang\r\nDây thắt mảnh đơn giản\r\nPhối chi tiết chữ logo bóng chày in sắc nét\r\nThiết kế lấy cảm hứng từ hiệp hội bóng chày MLB\r\nLớp lót êm ái, nâng dáng bước chân\r\nĐế cao su với độ bền cao, chắc chắn mang lại độ ma sát tốt\r\nGam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện\r\nXuất xứ thương hiệu: Hàn Quốc', b'0'),
(33, 1, 6, 'MLB Bigball Chunky Monogram New York Yankees', 3790000, 15, 1, '2022-11-04', 0, 'Chất liệu giày tốt, tạo cảm giác thoải mái khi vận động', 'Chất liệu: Synthetic Leather \r\nKiểu dáng giày sneaker đế cao thời trang\r\nThiết kế lấy cảm hứng từ hiệp hội bóng chày MLB\r\nCộng hưởng cùng chi tiết chữ logo bóng chày in nổi bật\r\nLớp lót êm ái, nâng dáng bước chân\r\nĐế cao su với độ bền cao, chắc chắn mang lại độ ma sát tốt\r\nGam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện\r\nXuất xứ thương hiệu: Hàn Quốc', b'0'),
(34, 1, 6, 'MLB Monogram', 2090000, 15, 1, '2022-11-04', 0, 'Chất liệu giày tốt, tạo cảm giác thoải mái khi vận động', 'Chất liệu: Vải denim\r\nKiểu dáng giày sneaker cổ thấp thời trang\r\nHọa tiết monogram hiện đại\r\nThiết kế lấy cảm hứng từ hiệp hội bóng chày MLB\r\nĐế cao su chống trơn trượt\r\nGam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện\r\nXuất xứ thương hiệu: Hàn quốc', b'0'),
(35, 1, 6, 'MLB Big Ball Chunky A Line', 3490000, 15, 1, '2022-11-04', 0, 'Chất liệu giày tốt, tạo cảm giác thoải mái khi vận động', 'Chất liệu: Da tổng hợp \r\nKiểu dáng giày sneaker đế cao thời trang\r\nThiết kế lấy cảm hứng từ hiệp hội bóng chày MLB\r\nCộng hưởng cùng chi tiết chữ logo bóng chày với họa tiết monogram sắc nét\r\nLớp lót êm ái, nâng dáng bước chân\r\nĐế cao su với độ bền cao, chắc chắn mang lại độ ma sát tốt\r\nGam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện\r\nXuất xứ thương hiệu: Hàn Quố', b'0'),
(36, 1, 6, 'MLB Bigball Chunky Monogram', 3490000, 15, 1, '2022-11-04', 0, 'Dáng đẹp, chất liệu giày tốt tạo cảm giác thoải mái khi sử dụng', 'Chất liệu: Da tổng hợp \r\nKiểu dáng giày sneaker đế cao thời trang\r\nThiết kế lấy cảm hứng từ hiệp hội bóng chày MLB\r\nCộng hưởng cùng chi tiết chữ logo bóng chày với họa tiết monogram sắc nét\r\nLớp lót êm ái, nâng dáng bước chân\r\nĐế cao su với độ bền cao, chắc chắn mang lại độ ma sát tốt\r\nGam màu hiện đại dễ dàng phối với nhiều trang phục và phụ kiện\r\nXuất xứ thương hiệu: Hàn Quốc', b'0'),
(37, 1, 7, 'OLD SKOOL SHOE', 12345000, 15, 1, '2022-11-04', 0, '• Giày trượt mang tính biểu tượng của Vans\r\n\r\n• Mũ vải bạt cấu hình thấp\r\n\r\n• In một phần bàn cờ\r\n\r\n• Cổ áo có đệm hỗ trợ\r\n\r\n• Điểm nhấn bên hông co giãn\r\n\r\n• Bề ngoài bánh quế cao su đặc trưng', 'Bộ sưu tập Lý thuyết màu sắc cho phép bạn tạo ra một câu chuyện màu sắc độc đáo bằng cách kết hợp các màu sắc rực rỡ, bất ngờ với hình bóng giày dép mang tính biểu tượng của chúng tôi. Được làm bằng chất liệu da lộn và mũ vải chắc chắn, Color Theory Old Skool tôn vinh mẫu giày đế thấp, cổ điển đặc trưng của chúng tôi với những đường màu bắt mắt, lý tưởng cho mùa giải. Phong cách ren vượt thời gian này cũng bao gồm mũ ngón chân được gia cố, vòng cổ có đệm hỗ trợ và đế ngoài bánh quế cao su đặc trưng. ', b'0'),
(38, 1, 7, 'CHECKERBOARD CLASSIC SLIP-ON WIDE SHOE', 1300000, 15, 1, '2022-11-04', 0, '• Giày trượt mang tính biểu tượng của Vans\r\n\r\n• Mũ vải bạt cấu hình thấp\r\n\r\n• In một phần bàn cờ\r\n\r\n• Cổ áo có đệm hỗ trợ', 'Bộ sưu tập Lý thuyết màu sắc cho phép bạn tạo ra một câu chuyện màu sắc độc đáo bằng cách kết hợp các màu sắc rực rỡ, bất ngờ với hình bóng giày dép mang tính biểu tượng của chúng tôi. Với hình in kẻ caro đặc trưng của chúng tôi, Color Theory Classic Slip-On tôn vinh đôi giày slip-on huyền thoại của chúng tôi với những đường màu bắt mắt lý tưởng cho mùa giải. Phong cách vượt thời gian này cũng bao gồm mũ vải bố thấp, cổ áo có đệm hỗ trợ, điểm nhấn bên hông đàn hồi và đế ngoài bánh quế cao su đặc trưng.', b'0'),
(39, 1, 7, 'AUTHENTIC SHOE', 1200000, 15, 1, '2022-11-04', 0, '• Giày trượt mang tính biểu tượng của Vans\r\n\r\n• Mũ vải bạt cấu hình thấp\r\n\r\n• In một phần bàn cờ\r\n\r\n• Cổ áo có đệm hỗ trợ', 'Bộ sưu tập Lý thuyết màu sắc cho phép bạn tạo ra một câu chuyện màu sắc độc đáo bằng cách kết hợp các màu sắc rực rỡ, bất ngờ với hình bóng giày dép mang tính biểu tượng của chúng tôi. Được làm bằng mũ vải chắc chắn, Color Theory Authentic tôn vinh mẫu giày cổ thấp, có ren nguyên bản của chúng tôi với các đường màu bắt mắt, lý tưởng cho mùa', b'0'),
(40, 1, 7, 'TEAM WELLNESS SK8-HI SHOE', 1650000, 15, 1, '2022-11-05', 0, '• Giày trượt mang tính biểu tượng của Vans\r\n\r\n• Mũ vải bạt cấu hình thấp\r\n\r\n• In một phần bàn cờ\r\n\r\n• Cổ áo có đệm hỗ trợ', 'Sk8-Hi, ban đầu được gọi là Style 38, được giới thiệu vào năm 1978 với tư cách là giày trượt băng cao cấp đầu tiên. Giới thiệu với cổ áo đệm cao sáng tạo để hỗ trợ mắt cá chân và hộp ngón chân được gia cố, nó là đôi giày thứ hai có tính năng biểu tượng của Vans sidestripe đồng thời mang lại một cái nhìn hoàn toàn mới cho gia đình Vans. Nó đã và vẫn là một biểu tượng của văn hóa “Off The Wall”. Được xây dựng trên đỉnh cao huyền thoại đầu tiên đó, Team Wellness Sk8-Hi có phần mũ bằng vải và da lộn chắc chắn có thêu ở gót chân', b'0'),
(41, 1, 7, 'CLASSIC SLIP-ON SHOE', 1350000, 15, 1, '2022-11-05', 0, '• Giày trượt mang tính biểu tượng của Vans\r\n\r\n• Mũ vải bạt cấu hình thấp\r\n\r\n• In một phần bàn cờ\r\n\r\n• Cổ áo có đệm hỗ trợ', 'Được giới thiệu lần đầu tiên vào năm 1977, Vans # 98 - hiện được gọi là Classic Slip-On - ngay lập tức trở thành một biểu tượng ở Nam California. Ngày nay, Classic Slip-On được biết đến trên toàn thế giới với hình dáng thoải mái, dễ đeo và thiết kế được yêu thích. Được làm bằng mũ dệt có cấu hình thấp chắc chắn, Desert Twill Classic Slip-On là vật dụng thiết yếu hàng ngày với phong cách \'\' Off The Wall \'\' thực sự', b'0'),
(42, 1, 7, 'SK8-HI DEL PATO MTE-2 SHOE', 1780000, 15, 1, '2022-11-05', 0, '• Giày trượt mang tính biểu tượng của Vans\r\n\r\n• Mũ vải bạt cấu hình thấp\r\n\r\n• In một phần bàn cờ\r\n\r\n• Cổ áo có đệm hỗ trợ', 'Bạn được tạo ra cho các yếu tố ™. Đây là những chiếc Vans của bạn.\r\n\r\nĐể nói rằng SK8-Hi Del Pato đã trở lại bởi nhu cầu phổ biến sẽ là một cách nói quá. Mẫu xe được yêu thích này quay trở lại với phong cách nâng cấp và cung cấp công nghệ MTE-2 cấp độ được xây dựng lại hoàn toàn. Giờ đây đã đạt tiêu chuẩn với Gói chống thấm MTE-2 HydroGuard® 360o và Gói nhiệt thời tiết lạnh MTE-2 PrimaLoft®, ấm hơn và khô hơn bao giờ hết. Thêm đế ngoài MTE-2 và hợp chất thời tiết All-Trac độc quyền suốt mùa của Vans, và bạn đã có SK8-Hi Del Pato mang đến những hứa hẹn mới của MTE. Nó được làm bằng da và mũ tổng hợp.', b'0'),
(43, 1, 1, 'Converse Run Star Hike Twisted', 2500000, 15, 1, '2022-11-08', 0, '', '', b'1'),
(44, 1, 1, 'NORRIS SNEAKER', 1200000, 10, 1, '2022-11-08', 0, '', '', b'1'),
(45, 1, 1, 'FRESH FOAM X', 3500000, 15, 1, '2022-11-08', 0, '', '', b'1'),
(46, 9, 1, 'Nike Racing', 430000, 15, 1, '2022-11-10', 0, 'Nike Racing Socks mang đến sự thoải mái khi thi đấu để bạn có thể tập trung vào vạch đích. Tiến thêm một bước so với nguồn gốc của nó tại Breaking2, những đôi tất này mang lại cảm giác vừa vặn và chống trơn trượt để giúp bạn an toàn khi chạy.', 'Thông tin chi tiết sản phẩm\r\n\r\n80% polyester / 11% nylon / 9% spandex\r\nMáy giặt\r\nĐã nhập khẩu\r\nKhông nhằm mục đích sử dụng làm Thiết bị Bảo vệ Cá nhân (PPE)\r\nĐược hiển thị: Laser Blue / Hyper Pink\r\nPhong cách: SK0122-446', b'0'),
(47, 9, 1, 'Nike Elemental Premium', 900000, 15, 1, '2022-11-10', 0, 'Ngăn chính có khóa kéo kép giúp lưu trữ rộng rãi và an toàn.\r\nNhiều túi dễ tiếp cận bao gồm cả tay áo đựng chai nước mang lại sự thuận tiện cho việc tổ chức.\r\nDây đeo vai có đệm và mặt sau hỗ trợ.\r\nVòng lặp cung cấp một tùy chọn mang theo thuận tiện.\r\nKhóa kéo hình chữ U mang lại khả năng truy cập nhanh chóng, dễ dàng..', 'Kiểu dáng đẹp, hiện đại và được làm từ polyester bền bỉ, Balo Nike Elemental là một vật dụng lưu trữ. Ngăn lớn có khóa kéo của nó thoải mái đựng giày hoặc quần áo thể dục cùng với sách và máy tính xách tay của bạn khi đi học. Hai túi bên ngoài giúp giữ các vật dụng nhỏ cần thiết của bạn được ngăn nắp và dễ tiếp cận.', b'0'),
(48, 9, 1, 'Nike Dri-FIT Aerobill Featherlight', 630000, 15, 1, '2022-11-10', 0, 'Công nghệ Nike Aerobill tích hợp cấu trúc nhẹ độc quyền với vải thoáng khí, thấm mồ hôi để tăng cường sự thoải mái và giảm sự phân tâm.\r\nCác lỗ trên nắp giúp giữ mát cho bạn.\r\nDây đeo sau có thể điều chỉnh giúp bạn tùy chỉnh sự phù hợp.', 'Luôn được bảo vệ khi bạn chạy với Nắp lông vũ Nike Dri-FIT Aerobill. Thiết kế thông thoáng của nó giúp làm mát, trong khi dây đeo sau có thể điều chỉnh cho phép bạn lựa chọn phù hợp với mình. Sản phẩm này được làm với ít nhất 50% sợi polyester tái chế.', b'0'),
(49, 9, 1, 'Nike Heritage', 370000, 15, 1, '2022-11-10', 0, 'Khóa cài vào nhau ở giữa dây đeo tạo cảm giác thoải mái, dễ điều chỉnh vừa vặn. Túi có thể được đeo ngang lưng, ngang người hoặc qua vai.\r\nKhóa kéo kép trên túi trước giúp bạn dễ dàng lấy các vật dụng lớn hơn.\r\nKhóa kéo kép ở mặt sau giúp lưu trữ các vật phẩm nhỏ hơn một cách an toàn', 'Dây đeo thoải mái và dễ dàng điều chỉnh khiến Nike Heritage Waistpack trở thành lựa chọn không cần bàn cãi cho những chuyến đi hàng ngày. Ngăn chính cung cấp khả năng lưu trữ an toàn cho điện thoại, đồ ăn nhẹ hoặc ví của bạn trong khi túi phụ kiện nhỏ hơn ở mặt sau giúp giữ an toàn và đóng những thứ như chìa khóa, thông tin du lịch của bạn trong tầm tay. Sản phẩm này được làm với ít nhất 65% polyester tái chế.\r\n', b'0'),
(50, 9, 1, 'Nike Performance Cart', 3500000, 15, 1, '2022-11-10', 0, '\r\nTận hưởng màu xanh lá cây trong cảm giác thoải mái tuyệt đối với Túi chơi gôn Nike Performance Cart. Thiết kế bền, nhẹ này có thiết kế dây đeo giúp bạn dễ dàng cố định vào giỏ hàng của mình. Một dải phân cách đủ chiều dài 14 chiều giúp bạn luôn có tổ chức, trong khi mũ che mưa chống nước giúp bảo vệ câu lạc bộ của bạn trong điều kiện thời tiết ẩm ướt.', 'Tận hưởng màu xanh lá cây trong cảm giác thoải mái tuyệt đối với Túi chơi gôn Nike Performance Cart. Thiết kế bền, nhẹ này có thiết kế dây đeo giúp bạn dễ dàng cố định vào giỏ hàng của mình. Một dải phân cách đủ chiều dài 14 chiều giúp bạn luôn có tổ chức, trong khi mũ che mưa chống nước giúp bảo vệ câu lạc bộ của bạn trong điều kiện thời tiết ẩm ướt.\r\n', b'0'),
(51, 9, 1, 'Nike College Classic99 (Michigan)', 600000, 15, 1, '2022-11-10', 0, 'Tấm lưng dạng lưới giúp giữ mát đầu.\r\nNắp sau có thể điều chỉnh cho phép bạn quay số vừa vặn nhất.', 'Hoàn thiện vẻ ngoài của bạn với đội yêu thích của bạn trong Mũ Michigan, có các chi tiết biểu tượng của Wolverines. Hình dáng của một người lái xe tải đã được kiểm chứng qua thời gian giúp giữ cho đầu của bạn mát mẻ, trong khi nắp lưng có thể điều chỉnh được cho phép bạn đeo nó theo cách bạn thích.\r\n', b'0'),
(52, 9, 2, 'BA LÔ 3 QUE BADGE OF SPORT CLASSIC', 6500000, 15, 1, '2022-11-10', 0, 'Sản phẩm này có sử dụng thành phần tái chế từ rác thải sản xuất, chẳng hạn như vật liệu cắt bỏ, cũng như rác thải sinh hoạt sau tiêu dùng, nhằm giảm thiểu tác động môi trường do sử dụng thành phần nguyên sinh trong sản xuất.', 'Hãy ngắm nhìn chiếc ba lô adidas này. Chất vải polyester dệt trơn cứng cáp giúp ba lô luôn trông như mới kể cả khi bạn đeo liên tục. Ngăn khóa kéo có đủ chỗ chứa đồ cho một ngày làm việc bận rộn hoặc khi đi tập gym. Ngăn khóa kéo phía trước đựng vừa điện thoại và ví đựng thẻ, còn chai nước có thể cất vào một trong các ngăn mở hai bên.', b'0'),
(53, 9, 2, 'MŨ BUCKET BA LÁ ADICOLOR', 700000, 15, 1, '2022-11-10', 0, 'Các sản phẩm cotton của chúng tôi hỗ trợ ngành trồng bông bền vững. Đây là một phần quyết tâm của chúng tôi hướng tới chấm dứt rác thải nhựa.', 'Trào lưu đội mũ bucket vẫn chưa hạ nhiệt kể từ thập niên 80 là có lý do. Đơn giản là đẹp. Chiếc mũ bucket adidas này có thiết kế đơn giản, đứng dáng mà thoải mái cùng logo adidas Ba Lá tương phản.', b'0'),
(54, 9, 2, 'CUSHIONED ANKLE SOCKS\r\n', 150000, 15, 1, '2022-11-10', 0, 'Đôi tất dài tới mắt cá này có lớp đệm từ mũi tới gót chân mang đến cảm giác siêu thoải mái. Thiết kế nâng đỡ vòm bàn chân và đường may mượt mà ở phần mũi chân mang lại cảm giác vừa vặn thoải mái. Chất liệu chủ yếu làm từ cotton với logo adidas đậm chất thể thao.', 'Độ dài đến mắt cá chân\r\nVải làm từ 57% cotton / 41% polyester / 2% elastane\r\nLớp đệm từ mũi tới gót chân\r\nĐường may liền ở ngón chân cho cảm giác mềm mại\r\nNâng đỡ vòm bàn chân\r\nMàu sản phẩm: Black / Black / White', b'0'),
(55, 9, 2, 'ADICOLOR 70S BASEBALL CAP', 850000, 15, 1, '2022-11-10', 0, 'Vải jacquard phủ hoa văn monogram của chiếc mũ bóng chày adidas này chính là điểm nhấn. Quả thật, rất khó bỏ qua vì logo Ba Lá phủ khắp mọi cm bên ngoài. Rồi bạn lại có thêm sắc xanh lam kinh điển của adidas lấp ló từ trong ra ngoài, mang tới vẻ ngoài thực sự ấn tượng và nổi bật.\r\n\r\nLàm từ một nhóm chất liệu tái chế và có chứa tối thiểu 60% thành phần tái chế, sản phẩm này đại diện cho một trong số rất nhiều các giải pháp của chúng tôi hướng tới chấm dứt rác thải nhựa.', 'Lớp ngoài: Vải jacquard làm từ 100% polyester tái chế\r\nViền thấm mồ hôi: Vải twill làm từ 100% cotton\r\nQuai tùy chỉnh phía sau có móc chữ D\r\nMàu sản phẩm: Super Pop\r\nMã sản phẩm: HY8533', b'0'),
(56, 9, 2, '4ATHLTS ID WAIST BAG\r\n', 800000, 15, 1, '2022-11-10', 0, 'Đừng lo lắng những chuyện cỏn con. Thay vào đó, hãy mang theo mình chiếc túi đeo hông adidas này. Cất ví tiền, điện thoại và chìa khóa vào túi để đảm bảo an toàn. Điều chỉnh quai cài cho độ ôm thoải mái, vậy là bạn đã sẵn sàng.\r\n\r\nSản phẩm này có sử dụng thành phần tái chế từ rác thải sản xuất, chẳng hạn như vật liệu cắt bỏ, cũng như rác thải sinh hoạt sau tiêu dùng, nhằm giảm thiểu tác động môi trường do sử dụng thành phần nguyên sinh trong sản xuất.', 'Kích thước: 28 cm x 14 cm x 4 cm\r\nVải oxford làm từ 100% polyester tái chế\r\nNgăn khóa kéo phía trước\r\nQuai đeo hông tùy chỉnh và có khóa cài\r\nMàu sản phẩm: Black', b'0'),
(57, 9, 2, '4ATHLTS CAMPER BACKPACK', 1050000, 15, 1, '2022-11-10', 0, 'Mỗi ngày mới đều là một hành trình phiêu lưu, và bạn sẽ luôn sẵn sàng với chiếc ba lô adidas này. Lấy cảm hứng từ trang phục ngoài trời, chiếc ba lô này có một ngăn khóa kéo phía trên để bạn tiện lấy chìa khóa, ví tiền hoặc điện thoại. Ngăn bên ngoài đựng máy tính xách tay chắc chắn nhưng cũng dễ lấy và cất.', 'Kích thước: 50 cm x 30 cm x 16,5 cm\r\nDung tích: 27,5 L\r\nChất liệu chính: Lớp ngoài bằng vải dệt trơn làm từ 100% nylon và lớp trong bằng vải dệt trơn làm từ 100% TPE\r\nĐáy: 100% polyester tái chế và lớp phủ laminate làm từ 100% TPE\r\nCác ngăn mở hai bên\r\nNgăn khóa kéo phía trên và ngăn khóa kéo phía trước\r\nNắp lật có các khóa cài\r\nNgăn bên ngoài đựng laptop\r\nĐáy có lớp phủ bền chắc\r\nChứa ít nhất 25% thành phần tái chế\r\nMàu sản phẩm: Green Oxide / Black / Green Oxide', b'0'),
(58, 9, 3, 'PUMA Flow Adjustable Men\'s Running Cap', 298000, 15, 1, '0000-00-00', 0, 'Chạy dài. Chạy ngắn. Và bất cứ thứ gì ở giữa. THE PUMA có thể điều chỉnh lưu lượng PUMA linh hoạt với bất cứ điều gì bạn có trong ngày.', 'Color: Black/Silver', b'0'),
(59, 9, 3, 'Archive Mid Fit Beanie', 360000, 15, 1, '2022-11-10', 0, 'Cảm thấy thoải mái trong không gian cổ điển và ấm cúng của Archive Beanie của chúng tôi. Kết cấu đan waffle và thương hiệu Archive PUMA mang lại cảm giác cổ điển đậm nét.\r\n', 'Classic knit beanie\r\nWaffle knit all-over textured fabric\r\nFold-up brim\r\nSatin embroidered PUMA Archive No.1 Logo at front brim\r\nWoven PUMA label at back right side\r\n100% Acrylic, knitted', b'0'),
(61, 9, 3, 'Bucket Hat', 280000, 15, 1, '2022-11-10', 0, 'Chứa vật liệu tái chế: Được làm bằng sợi tái chế. Một trong những câu trả lời của PUMA để giảm tác động đến môi trường của chúng ta.', 'Bucket đã trở lại kinh doanh và phiên bản basic-đáp ứng-táo bạo này cũng không phải là ngoại lệ. Kiểu dáng đẹp và thời trang, với trọng lượng nhẹ, vừa vặn thoáng khí và đường ống PUMA hoàn hảo, bạn sẽ cảm thấy thời trang hơn hẳn. Kết hợp nó với quần áo thể thao để có vẻ ngoài sang trọng và thể thao, hoặc với quần jean để tạo phong cách retro hợp xu hướng.', b'0'),
(62, 9, 3, 'PUMA Puma Street Three-Hand Black Silicone Watch', 2000000, 15, 1, '2022-11-10', 0, 'Năng động, thể thao', 'Đồng hồ PUMA Street 48mm của PUMA có mặt số mờ màu trắng, bộ chuyển động ba kim và dây đeo silicone màu đen.', b'0'),
(63, 9, 3, 'Accelerator Duffel Bag', 900000, 15, 1, '2022-11-10', 0, 'Chiếc duffel sẵn sáng theo chân bạn đến khắp mọi nơi, là người đồng hành với bạn trên nhiều cung đường với thiết kế sáng tạo, khả năng chứa cao. Là sự lựa chọn hoàn hảo cho bạn', 'Chiếc duffel sẵn sàng hàng ngày này đã sẵn sàng để theo kịp phong cách sống của bạn. Với sức chứa rộng rãi 24 inch và cấu trúc cổ điển, bạn có thể tập trung vào ngày của mình và phó mặc công việc nặng nhọc cho chúng tôi.', b'0'),
(64, 9, 4, 'Pickleball Visor', 400000, 15, 1, '2022-11-10', 0, '100% polyester\r\nthêu logo FILA Pickleball\r\ndây đeo có thể điều chỉnh', '\r\nPickleball không chỉ là một mốt đại dịch.\r\n\r\nHãy bình tĩnh, mát mẻ và thoải mái trong tấm che này.', b'0'),
(65, 9, 4, 'Tie Dye PIckleball Hat', 440000, 15, 1, '2022-11-10', 0, 'Pickleball không chỉ là mốt đại dịch.\r\n\r\nGiữ bình tĩnh, mát mẻ và thoải mái trong chiếc mũ nhuộm cà vạt này.', '100% polyester\r\nthêu logo FILA Pickleball\r\ndây đeo có thể điều chỉnh', b'0'),
(66, 9, 4, 'Tie Dye Pickleball Visor', 440000, 15, 1, '2022-11-10', 0, 'Pickleball không chỉ là mốt đại dịch.\r\n\r\nGiữ bình tĩnh, mát mẻ và thoải mái trong tấm che mặt nhuộm cà vạt này.', '100% polyester\r\nthêu logo FILA Pickleball\r\ndây đeo có thể điều chỉnh', b'0'),
(67, 9, 4, 'Pickleball Hat\r\n', 440000, 15, 1, '2022-11-10', 0, 'Pickleball không chỉ là mốt đại dịch.\r\n\r\nCảm thấy bình tĩnh, mát mẻ và thoải mái trong chiếc mũ này.\r\n\r\nFILA + Pickleball = VUI VẺ', '100% polyester\r\nthêu logo FILA Pickleball\r\ndây đeo có thể điều chỉnh', b'0'),
(68, 9, 4, 'Pickleball Visor', 440000, 15, 1, '2022-11-10', 0, 'Pickleball không chỉ là mốt đại dịch.\r\n\r\nHãy bình tĩnh, điềm tĩnh và thoải mái trong tấm che này.', '100% polyester\r\nthêu logo FILA Pickleball\r\ndây đeo có thể điều chỉnh', b'0'),
(69, 9, 5, 'Belt with squared Interlocking G buckle', 11000000, 15, 1, '2022-11-10', 0, 'Các phiên bản mới của mã Nhà chữ ký tiếp tục làm phong phú thêm các bộ sưu tập mới nhất với các yếu tố thiết kế độc đáo. Ở đây, thắt lưng da này được xác định bởi khóa G Square Interlocking.', 'Palladium và phần cứng tông vàng\r\nKhóa G hình vuông lồng vào nhau\r\nChiều rộng 1,2 \"\r\nSản xuất tại Ý\r\nCó thể được đeo như một chiếc thắt lưng hông hoặc thắt lưng. Kích thước sẽ khác nhau tùy thuộc vào nơi thắt lưng được đeo, vui lòng tham khảo hướng dẫn kích thước để tìm kích thước của bạn.', b'0'),
(70, 9, 5, 'Icon 18k stardust ring', 120000000, 15, 1, '2022-11-10', 0, 'Chiếc nhẫn quý giá này được làm bằng vàng 18k với dây đeo tinh tế có họa tiết GG cắt ra. Tâm điểm của tác phẩm là một cụm kim cương lấp lánh, gợi nhớ đến buổi trình diễn thời trang Gucci Cosmogonie. Diễn ra bên dưới bầu trời đêm tại Castel del Monte của Ý, bộ sưu tập lấy cảm hứng từ các chòm sao.', 'Vàng vàng 18k\r\nGG cut-out\r\n65 viên kim cương, tổng cộng khoảng 0,49 carat\r\nSản phẩm này có thể được cá nhân hóa với một bản khắc đặt làm riêng tại cửa hàng Gucci gần nhất của bạn.\r\nChiều rộng: .2 \"\r\nSản xuất tại Ý\r\nGucci đảm bảo, trong nội bộ và trong chuỗi cung ứng của mình, tôn trọng các tiêu chuẩn về Trách nhiệm Xã hội & Môi trường phù hợp với chiến lược phát triển bền vững của mình. Vàng, bạch kim và kim cương của Gucci được chứng nhận bởi Hội đồng trang sức có trách nhiệm với nhiệm vụ thúc đẩy các hoạt động có trách nhiệm, đạo đức, xã hội và môi trường nhằm đảm bảo quyền con người trong suốt chuỗi cung ứng vàng và kim cương, từ mỏ đến bán lẻ.', b'0'),
(71, 9, 5, 'Square-frame sunglasses\r\n', 120000000, 15, 1, '2022-11-10', 0, 'Một cặp kính râm gọng vuông được chế tác từ kim loại tông vàng có họa tiết. Thấu kính màu vàng nhạt hoàn thiện thiết kế tinh tế, trong khi chữ Gucci trang trí các ngôi đền. Những bộ trang phục với cách mặc và phong cách linh hoạt sẽ ôm trọn mỗi người, trở thành một phần tinh thần riêng của House.', 'Kết cấu khung kim loại tông vàng\r\nKết cấu ngôi đền kim loại tông vàng với chữ viết Gucci và khuyên acetate màu be\r\nĐệm mũi cao su có thể điều chỉnh\r\nThấu kính màu vàng nhạt\r\nBảo vệ 100% tia UVA / UVB\r\nGG0788S\r\nChiều dài đền: 5.5 \"; Chiều cao thấu kính: 2\"; Chiều dài cầu mũi: .7 \"\r\nChiều cao khung: 2 \"; Chiều rộng khung: 5,5\"\r\nSản xuất tại Nhật Bản\r\nKính sẽ được đựng trong một chiếc hộp bằng nhung, có sẵn với sáu màu sắc trang sức và được kết hợp với một lớp lót satin phối hợp. Màu vỏ sẽ được lựa chọn riêng cho từng cặp kính và đi kèm với một túi vải flannel satin phù hợp và vải sợi nhỏ màu trắng ngà.', b'0'),
(72, 9, 5, 'Silk crêpe bow tie', 4400000, 15, 1, '2022-11-10', 0, 'Một chiếc nơ được làm thủ công từ lụa đen với chi tiết Double G tinh tế. Các yếu tố cắt may cổ điển tiếp tục nâng tầm các bộ sưu tập mới nhất của Gucci.', 'Silk crêpe bow tie\r\nChi tiết Double G\r\nShips pre-tied được buộc sẵn với đóng sau có thể điều chỉnh được\r\nSản xuất tại Ý\r\n100% lụa', b'0'),
(74, 9, 5, 'Stud earrings', 16000000, 15, 1, '2022-11-10', 0, 'Một phần của câu chuyện được chiếu trên Runway, một loạt các đồ trang sức có cảm giác rock n\'roll. Đôi bông tai tông màu palladium này được xác định bởi hai đinh tán.', 'Kim loại với lớp hoàn thiện palladium\r\nKhắc chi tiết chữ Gucci\r\nĐối với lỗ tai\r\nChiều dài: 1.1 \"\r\nSản xuất tại Ý\r\nGucci đảm bảo, trong nội bộ và trong chuỗi cung ứng của mình, tôn trọng các tiêu chuẩn về Trách nhiệm xã hội và môi trường phù hợp với chiến lược bền vững của mình', b'0'),
(75, 9, 6, 'New York Yankees Navy Logo Silicone Apple Watch Band', 680000, 15, 1, '2022-11-10', 0, 'Đồ họa in\r\nChốt khóa chốt kép bằng thép không gỉ để tăng cường bảo mật\r\nTương thích với Apple Watch (không bao gồm đồng hồ)\r\nChất liệu: 100% silicone\r\nĐược cấp phép chính thức\r\nĐã nhập khẩu\r\nThương hiệu: Artinian', 'Thêm một số nét tinh tế của New York Yankees vào Apple Watch của bạn với Dây đeo Apple Watch Silicone có Logo này. Dây đeo bằng silicone thoải mái để sử dụng cả ngày và nó sẽ nằm chắc chắn trên cổ tay của bạn. Với biểu tượng New York Yankees được in trên màn hình trên ban nhạc, bạn có thể đại diện cho đội của mình bất cứ lúc nào bạn muốn.\r\n', b'0'),
(76, 9, 6, 'Houston Astros WinCraft 2022 World Series Champions 24\'\' Lanyard', 160000, 15, 1, '2022-11-10', 0, 'Đồ họa hai mặt\r\nĐồ họa thăng hoa\r\nChốt xoay kim loại\r\nDây buộc có thể đảo ngược\r\nCác phép đo xấp xỉ. Dài 24 \'\'\r\nChất liệu: 100% Polyester\r\nĐược cấp phép chính thức\r\nSản xuất tại Mỹ', 'Với mọi cú ném, đánh và chơi, Houston Astros đã thực hiện tất cả các bước đi đúng đắn để trở thành Nhà vô địch World Series 2022! Kỷ niệm khoảnh khắc chiến thắng này trong lịch sử Houston Astros bằng cách lấy Dây buộc 24 \'\' này từ WinCraft. Nó có đồ họa sắc nét để kỷ niệm lần chạy sau mùa giải đáng kinh ngạc này và cho mọi người biết rằng nhóm của bạn thống trị tối cao.', b'0'),
(77, 9, 6, 'Los Angeles Dodgers tokidoki Vinyl Tote Bag', 310000, 15, 1, '2022-11-10', 0, 'Thiết kế hai mặt\r\nXử lý độ dài rơi khoảng. 9 \'\'\r\nCác biện pháp túi khoảng. 14,8 \'\' x 15,2 \'\' x 5,6 \'\'\r\nKhoang nội thất chính\r\nMột túi nhỏ bên trong\r\nChất liệu: 100% Vinyl\r\nLau sạch bằng vải ẩm\r\nĐược cấp phép chính thức\r\nĐã nhập khẩu\r\nThương hiệu: tokidoki', 'This Los Angeles Dodgers Viny này rất lý tưởng để đựng hàng tạp hóa, đóng gói đồ ăn trưa hoặc bất cứ thứ gì khác mà bạn có thể cần trong cuộc sống hàng ngày. Đồ họa táo bạo có thiết kế toàn bộ của một số nhân vật tokidoki lớn hơn ngoài đời thực đang vận động bộ đồ của Dodgers Los Angeles. Ngoài ra, hai quai xách giúp bạn dễ dàng vận chuyển, có thể gập lại và cất giữ dễ dàng khi không sử dụng.', b'0'),
(78, 9, 6, 'Houston Astros Gold 2022 World Series Champions Polarized Aviator Sunglasses', 950000, 15, 1, '2022-11-10', 0, 'Cỡ phổ thông\r\nChi tiết khắc\r\nBao gồm túi dây rút với đồ họa tuyệt đẹp\r\nThấu kính phân cực cắt lóa\r\nUnisex, phù hợp với kích thước khuôn mặt từ trung bình đến rộng\r\nCác phép đo xấp xỉ. Chiều rộng 6 \'\'\r\nChiều dài đền đo khoảng. 5,25 \'\'\r\nChất liệu: 100% hợp kim niken\r\nĐược cấp phép chính thức\r\nĐã nhập khẩu', 'Với mọi cú ném, đánh và chơi, Houston Astros đã thực hiện tất cả các bước đi đúng đắn để trở thành Nhà vô địch World Series 2022! Hãy kỷ niệm khoảnh khắc chiến thắng này trong lịch sử Houston Astros bằng cách nắm lấy những chiếc Kính râm Aviator phân cực này. Chúng có đồ họa sắc nét để kỷ niệm lần chạy sau mùa giải đáng kinh ngạc này và cho mọi người biết rằng nhóm của bạn thống trị tối cao.', b'0'),
(79, 9, 6, 'Women\'s Houston Astros Dooney & Bourke Pebble Lexington Shopper Purse', 3300000, 15, 1, '2022-11-10', 0, 'Một túi trượt bên trong\r\nMóc chìa khóa bên trong\r\nChân kim loại\r\nMột túi khóa kéo bên trong\r\nĐồ họa in nổi\r\nBên trong túi điện thoại di động\r\nXử lý độ dài thả đo khoảng 11,5 \"\r\nTúi chính có khóa kéo\r\nTúi khe trước và sau\r\nCác biện pháp xấp xỉ 10,5 \"x 3,5\" x 11,75 \"\r\nChất liệu: Da 100%\r\nCó thể giặt bề mặt\r\nĐược cấp phép chính thức\r\nĐã nhập khẩu\r\nThương hiệu: Dooney & Bourke', 'Bạn luôn di chuyển và bạn cần những phụ kiện làm nổi bật phong cách cá nhân của mình đồng thời hỗ trợ lối sống nhịp độ nhanh của bạn. Hãy nắm lấy mẫu ví dành cho người mua sắm hàng đầu ở Houston Astros Pebble Lexington này của Dooney & Bourke và bạn sẽ trông giống như một người hâm mộ tận tụy nhất dù bạn đến bất cứ đâu. Không có cách nào thuận tiện và thời trang hơn để kỷ niệm Houston Astros hơn là với chiếc ví đáng nhớ này.', b'0'),
(80, 9, 6, 'Men\'s Houston Astros Timex Acclaim Watch', 1600000, 15, 1, '2022-11-10', 0, 'Chống nước lên đến 50 mét\r\nĐồ họa in với mái vòm acrylic\r\nKim giây màu đồng đội\r\nKính khoáng chống xước\r\nMặt đồng hồ INDIGLO Light-Up\r\nDải mở rộng bằng thép không gỉ\r\nGhi nhanh ngày dễ dàng\r\nChất liệu: 100% thép không gỉ - Vỏ và dây đeo; 100% tinh thể khoáng - Ống kính\r\nĐược cấp phép chính thức', 'Chiếc đồng hồ Houston Astros Acclaim đen tuyền này của Timex mang đến một ánh hào quang quyến rũ cho người đeo.', b'0'),
(81, 9, 7, 'Vans M AP MID LIGHT BACKPACK - VN0A4UPZBLK', 880000, 15, 1, '2022-11-10', 0, 'Balo Vans Mid Light Backpack nổi bật với họa tiết chữ “Vans Off The Wall” đặc trưng thương hiệu đầy quen thuộc, được sắp xếp ở vị trí trung tâm với cỡ chữ lớn tạo điểm nhấn thu hút cho sản phẩm. Được làm từ chất liệu 100% polyester mềm nhẹ, thoáng khí cùng sức chứa lớn có thể chứa đựng nhiều vật dụng và mang đi bất cứ đâu. Balo gồm một ngăn chính lớn với túi zip phía trước, hơn nữa quai đeo được đệm lớp lót dày dặn êm ái hơn.', 'THÔNG TIN SẢN PHẨM\r\nNHÃN HIỆU Vans\r\nTÊN Vans M AP MID LIGHT BACKPACK\r\nDÒNG SẢN PHẨM Backpack\r\nNƠI SẢN XUẤT Indonesia', b'0'),
(82, 9, 7, 'Vans M Ward Cross Body Pack - VN0A2ZXXRND', 600000, 15, 1, '2022-11-10', 0, 'Túi đeo chéo thời trang với tone màu carô đỏ nổi bật, vừa mang xu thế hiện đại, vừa tiện lợi khi bỏ được nhiều vật dụng cần thiết thường ngày', 'NHÃN HIỆU Vans\r\nTÊN Vans M Ward Cross Body Pack\r\nMÃ SẢN PHẨM VN0A2ZXXRN\r\nDDÒNG SẢN PHẨM Vans Cross Body Pack\r\nMÀU SẮCCheckerboard Đỏ/Trắng', b'0'),
(83, 9, 7, 'Vans AP THE ULTRASAKE CROSSBODY', 520000, 15, 1, '2022-11-10', 0, 'Vans AP THE ULTRASAKE CROSSBODY thiết kế túi đeo chéo siêu nhỏ gọn được mix tone màu xanh dạ quang sành điệu. Với thiết kế tiện dụng, cá tính có thể sử dụng chúng để chứa những vật dụng làm đẹp cần thiết như son, kem chống nắng ví tiền hay điện thoại. Đây hứa hẹn là một items tuyệt vời đảm bảo đầy đủ sự tiện ích cũng như tính thời trang khi diện xuống phố.', 'NHÃN HIỆU Vans\r\nTÊNnVans AP THE ULTRASAKE CROSSBODY\r\nMÃ SẢN PHẨMVN0A4BP3ZUD\r\nDÒNG SẢN PHẨM Vans AP THE ULTRASAKE CROSSBODY', b'0'),
(84, 9, 7, 'Vans Men Ward Cross Body Pack Bag', 560000, 15, 1, '2022-11-10', 0, 'Túi Vans Ward Cross Body Pack Bag sở hữu kiểu dáng linh hoạt, thiết kế dây đeo vừa có thể đeo chéo hoặc đeo hông tiện lợi. Thân túi rộng rãi với hai ngăn kéo lớn nhỏ, đặc biệt điểm nhấn chính từ gam màu Hi Grade được nhấn nhá với chiếc túi zip phía trước với Logo Vans được bọc bởi lớp nylon tạo nên dấu ấn riêng cho sản phẩm. Hoàn thiện với chất vải polyester hạn chế thấm nước \"cực xịn\" giúp người đeo bảo vệ được những vật dụng giá trị như điện thoại, ví, đồng hồ, …', 'THÔNG TIN SẢN PHẨM\r\nNHÃN HIỆU Vans\r\nTÊN Vans Men Ward Cross Body Pack Bag\r\nMÃ SẢN PHẨM VN0A2ZXXYSV\r\nDÒNG SẢN PHẨM Vans Men Ward Cross Body Pack Bag\r\nNƠI SẢN XUẤT Indonesia', b'0'),
(85, 9, 7, 'Vans League Bench Bag', 280000, 15, 1, '2022-11-10', 0, 'Thiết kế dạng dây rút tiện lợi bằng chất liệu Poly chống nước cao cấp để bạn có thể mang đi bất kì đâu. Mặt trước của túi được tạo điểm nhấn bằng họa tiết Vans Off The Wall với hai tông màu trắng - vàng bắt mắt và logo hình chữ V in chìm', 'NHÃN HIỆU Vans\r\nTÊN Vans League Bench Bag\r\nMÃ SẢN PHẨMVN0002W6TNK\r\nDÒNG SẢN PHẨM Vans League Bench Bag\r\nNƠI SẢN XUẤT Việt Nam', b'0'),
(86, 9, 7, 'Vans Ap Tape Off Backpack', 840000, 15, 1, '2022-11-10', 0, 'Thiết kế khoác lên mình tone đỏ rực rỡ được bố trí 2 ngăn cặp lớn cùng 1 ngăn nhỏ tiện dụng. Chất vải Poly chống thấm nước tốt cùng với họa tiết chữ Vans biến tấu cách điệu bằng những đường viền xung quanh lạ mắt dường như đây sẽ là item \"must have\" giúp bạn luôn có được sự nổi bật ở bất kì nơi đâu.', 'THÔNG TIN SẢN PHẨM\r\nNHÃN HIỆU Vans\r\nMÃ SẢN PHẨMVN0A48C60HI\r\nDÒNG SẢN PHẨM Vans Ap Tape Off Backpack\r\nNƠI SẢN XUẤT Indonesia', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `id_img` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `contain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`id_img`, `id_product`, `contain`) VALUES
(1, 1, 'e6c6f74c-0b6e-4e87-a715-482e971bce34.webp'),
(2, 1, 'f6464910-ffa4-4029-b313-2b154b7245ab.webp'),
(3, 1, 'c98cd73e-6bbf-4f5e-b4f7-4eb59d72d957.webp'),
(4, 1, 'victori-one-printed-slide-2ZsMWk.jpg'),
(5, 1, 'victori-one-printed-slide-2ZsMWk (1).jpg'),
(6, 2, 'lowse1.webp'),
(7, 2, 'lowse2.webp'),
(8, 2, 'lowse3.webp'),
(9, 2, 'lowse4.webp'),
(10, 2, 'lowse5.webp'),
(11, 3, 'aj1z1.webp'),
(12, 3, 'aj1z2.webp'),
(13, 3, 'aj1z3.webp'),
(14, 3, 'aj1z4.webp'),
(15, 3, 'aj1z5.webp'),
(16, 4, 'aj1log1.webp'),
(17, 4, 'aj1log2.webp'),
(18, 4, 'aj1log3.webp'),
(19, 4, 'aj1log4.webp'),
(20, 4, 'aj1log5.webp'),
(21, 5, 'aj1e1.webp'),
(22, 5, 'aj1e2.webp'),
(23, 5, 'aj1e3.webp'),
(24, 5, 'aj1e4.webp'),
(25, 5, 'aj1e5.webp'),
(26, 6, 'aj1mse1.webp'),
(27, 6, 'aj1mse2.webp'),
(28, 6, 'aj1mse3.webp'),
(29, 6, 'aj1mse4.webp'),
(30, 6, 'aj1mse5.webp'),
(31, 7, 'adizeropro1.webp'),
(32, 7, 'adizeropro2.webp'),
(33, 7, 'adizeropro3.webp'),
(34, 7, 'adizeropro4.webp'),
(35, 7, 'adizeropro5.webp'),
(36, 9, 'forum1.webp'),
(37, 9, 'forum2.webp'),
(38, 9, 'forum3.webp'),
(39, 9, 'forum4.webp'),
(40, 9, 'forum5.webp'),
(41, 11, 'ozweego1.webp'),
(42, 11, 'ozweego2.webp'),
(43, 11, 'ozweego3.webp'),
(44, 11, 'ozweego4.webp'),
(45, 11, 'ozweego5.webp'),
(46, 8, 'ultraboost1.webp'),
(47, 8, 'ultraboost2.webp'),
(48, 8, 'ultraboost3.webp'),
(49, 8, 'ultraboost4.webp'),
(50, 8, 'ultraboost5.webp'),
(51, 10, 'stansmith1.webp'),
(52, 10, 'stansmith2.webp'),
(53, 10, 'stansmith3.webp'),
(54, 10, 'stansmith4.webp'),
(55, 10, 'stansmith5.webp'),
(56, 12, 'skate1.webp'),
(57, 12, 'skate2.webp'),
(58, 12, 'skate3.webp'),
(59, 12, 'skate4.webp'),
(60, 12, 'skate5.webp'),
(61, 13, 'pumacoca1.webp'),
(62, 13, 'pumacoca2.webp'),
(63, 13, 'pumacoca3.webp'),
(64, 13, 'pumacoca4.webp'),
(65, 13, 'pumacoca5.webp'),
(66, 14, 'pumanitro1.webp'),
(67, 14, 'pumanitro2.webp'),
(68, 14, 'pumanitro3.webp'),
(69, 14, 'pumanitro4.webp'),
(70, 14, 'pumanitro5.webp'),
(71, 15, 'pumabasketball1.webp'),
(72, 15, 'pumabasketball2.webp'),
(73, 15, 'pumabasketball3.webp'),
(74, 15, 'pumabasketball4.webp'),
(75, 15, 'pumabasketball5.webp'),
(76, 16, 'pumahst1.webp'),
(77, 16, 'pumahst2.webp'),
(78, 16, 'pumahst3.webp'),
(79, 16, 'pumahst4.webp'),
(80, 16, 'pumahst5.webp'),
(81, 17, 'pumasuede1.webp'),
(82, 17, 'pumasuede1.webp'),
(83, 17, 'pumasuede3.webp'),
(84, 17, 'pumasuede4.webp'),
(85, 17, 'pumasuede5.webp'),
(86, 18, 'pumajoshua1.webp'),
(87, 18, 'pumajoshua1.webp'),
(88, 18, 'pumajoshua3.webp'),
(89, 18, 'pumajoshua4.webp'),
(90, 18, 'pumajoshua5.webp'),
(91, 19, 'filagranthill1.jpg'),
(92, 19, 'filagranthill2.jpg'),
(93, 19, 'filagranthill3.jpg'),
(94, 19, 'filagranthill4.jpg'),
(95, 19, 'filagranthill5.jpg'),
(96, 20, 'filamenmb1.jpg'),
(97, 20, 'filamenmb1.jpg'),
(98, 20, 'filamenmb3.jpg'),
(99, 20, 'filamenmb4.jpg'),
(100, 20, 'filamenmb1.jpg'),
(101, 21, 'oakmont1.jpg'),
(102, 21, 'oakmont2.jpg'),
(103, 21, 'oakmont3.jpg'),
(104, 21, 'oakmont4.jpg'),
(105, 21, 'oakmont5.jpg'),
(106, 22, 'mengrant1.jpg'),
(107, 22, 'mengrant2.jpg'),
(108, 22, 'mengrant3.jpg'),
(109, 22, 'mengrant4.jpg'),
(110, 22, 'mengrant5.jpg'),
(111, 23, 'menfilaace1.jpg'),
(112, 23, 'menfilaace2.jpg'),
(113, 23, 'menfilaace3.jpg'),
(114, 23, 'menfilaace4.jpg'),
(115, 23, 'menfilaace5.jpg'),
(116, 24, 'menraytracer1.jpg'),
(117, 24, 'menraytracer2.jpg'),
(118, 24, 'menraytracer3.jpg'),
(119, 24, 'menraytracer5.jpg'),
(120, 24, 'menraytracer5.jpg'),
(121, 25, 'mengg1.avif'),
(122, 25, 'mengg2.avif'),
(123, 25, 'mengg3.avif'),
(124, 25, 'mengg4.avif'),
(125, 25, 'mengg5.avif'),
(126, 26, 'menrhyton1.avif'),
(127, 26, 'menrhyton2.avif'),
(128, 26, 'menrhyton3.avif'),
(129, 26, 'menrhyton4.avif'),
(130, 26, 'menrhyton5.avif'),
(131, 27, 'guccibasket1.avif'),
(132, 27, 'guccibasket2.avif'),
(133, 27, 'guccibasket3.avif'),
(134, 27, 'guccibasket4.avif'),
(135, 27, 'guccibasket5.avif'),
(136, 28, 'menggsneaker1.avif'),
(137, 28, 'menggsneaker2.avif'),
(138, 28, 'menggsneaker3.avif'),
(139, 28, 'menggsneaker4.avif'),
(140, 28, 'menggsneaker5.avif'),
(141, 29, 'adidasxgucci1.avif'),
(142, 29, 'adidasxgucci2.avif'),
(143, 29, 'adidasxgucci3.avif'),
(144, 29, 'adidasxgucci4.avif'),
(145, 29, 'adidasxgucci5.avif'),
(146, 30, 'menace1.avif'),
(147, 30, 'menace2.avif'),
(148, 30, 'menace3.avif'),
(149, 30, 'menace4.avif'),
(150, 30, 'menace5.avif'),
(151, 31, 'chuckylow1.webp'),
(152, 31, 'chuckylow2.webp'),
(153, 31, 'chuckylow3.webp'),
(154, 31, 'chuckylow4.webp'),
(155, 31, 'chuckylow5.webp'),
(156, 32, 'chunkyjogger1.webp'),
(157, 32, 'chunkyjogger2.webp'),
(158, 32, 'chunkyjogger3.webp'),
(159, 32, 'chunkyjogger4.webp'),
(160, 32, 'chunkyjogger5.webp'),
(161, 33, 'yankees1.webp'),
(162, 33, 'yankees2.webp'),
(163, 33, 'yankees3.webp'),
(164, 33, 'yankees4.webp'),
(165, 33, 'yankees5.webp'),
(166, 34, 'monogram1.webp'),
(167, 34, 'monogram2.webp'),
(168, 34, 'monogram3.webp'),
(169, 34, 'monogram4.webp'),
(170, 34, 'monogram5.jpg'),
(171, 35, 'chunkyline1.webp'),
(172, 35, 'chunkyline2.webp'),
(173, 35, 'chunkyline3.webp'),
(174, 35, 'chunkyline4.webp'),
(175, 35, 'chunkyline5.webp'),
(176, 36, 'chunkymonogram1.webp'),
(177, 36, 'chunkymonogram2.webp'),
(178, 36, 'chunkymonogram3.webp'),
(179, 36, 'chunkymonogram4.webp'),
(180, 36, 'chunkymonogram5.webp'),
(237, 37, 'oldskool1.webp'),
(238, 37, 'oldskool2.webp'),
(239, 37, 'oldskool3.webp'),
(240, 37, 'oldskool4.webp'),
(241, 37, 'oldskool5.webp'),
(242, 38, 'slipon1.webp'),
(243, 38, 'slipon2.webp'),
(244, 38, 'slipon3.webp'),
(245, 38, 'slipon4.jpg'),
(246, 38, 'slipon5.webp'),
(247, 39, 'authentic1.jpg'),
(248, 39, 'authentic2.jpg'),
(249, 39, 'authentic3.webp'),
(250, 39, 'authentic4.webp'),
(251, 39, 'authentic5.webp'),
(252, 40, 'wellness1.webp'),
(253, 40, 'wellness2.webp'),
(254, 40, 'wellness3.webp'),
(255, 40, 'wellness4.webp'),
(256, 40, 'wellness5.webp'),
(257, 41, 'classicslip1.webp'),
(258, 41, 'classicslip2.webp'),
(259, 41, 'classicslip3.webp'),
(260, 41, 'classicslip4.webp'),
(261, 41, 'classicslip5.webp'),
(262, 42, 'sk81.webp'),
(263, 42, 'sk82.webp'),
(264, 42, 'sk83.webp'),
(265, 42, 'sk84.webp'),
(266, 42, 'sk85.webp'),
(267, 43, 'exclusive_product1.webp'),
(268, 44, 'lD29T9Aj4i9l.png'),
(269, 45, 'new-balance-shoes.png'),
(270, 46, 'PKnikeracing1.jpg'),
(271, 46, 'PKnikeracing2.jpg'),
(272, 46, 'PKnikeracing3.jpg'),
(273, 46, 'PKnikeracing4.jpg'),
(274, 46, 'PKnikeracing5.jpg'),
(275, 47, 'PKnikeelemetal1.webp'),
(276, 47, 'PKnikeelemetal2.webp'),
(277, 47, 'PKnikeelemetal3.webp'),
(278, 47, 'PKnikeelemetal4.webp'),
(279, 47, 'PKnikeelemetal5.webp'),
(280, 48, 'PKnikedri1.webp'),
(281, 48, 'PKnikedri2.webp'),
(282, 48, 'PKnikedri4.webp'),
(283, 48, 'PKnikedri4.webp'),
(284, 49, 'PKnikeheritage1.webp'),
(285, 49, 'PKnikeheritage2.webp'),
(286, 49, 'PKnikeheritage3.webp'),
(287, 49, 'PKnikeheritage4.webp'),
(288, 49, 'PKnikeheritage5.jpg'),
(289, 50, 'PKnikeperformance1.webp'),
(290, 50, 'PKnikeperformance2.webp'),
(291, 50, 'PKnikeperformance3.webp'),
(292, 50, 'PKnikeperformance4.jpg'),
(293, 50, 'PKnikeperformance5.jpg'),
(294, 51, 'PKnikecollege1.jpg'),
(295, 51, 'PKnikecollege2.jpg'),
(296, 52, 'PKbalo3que1.webp'),
(297, 52, 'PKbalo3que2.jpg'),
(298, 52, 'PKbalo3que3.jpg'),
(299, 52, 'PKbalo3que4.webp'),
(300, 52, 'PKbalo3que5.jpg'),
(301, 53, 'PKmubucket1.jpg'),
(302, 53, 'PKmubucket2.jpg'),
(303, 53, 'PKmubucket3.webp'),
(304, 53, 'PKmubucket4.webp'),
(305, 53, 'PKmubucket5.jpg'),
(306, 54, 'PKcuskion1.webp'),
(307, 54, 'PKcuskion2.webp'),
(308, 54, 'PKcuskion3.webp'),
(309, 55, 'PKadicolor1.webp'),
(310, 55, 'PKadicolor2.webp'),
(311, 55, 'PKadicolor3.jpg'),
(312, 55, 'PKadicolor4.jpg'),
(313, 56, 'PK4athlts1.jpg'),
(314, 56, 'PK4athlts2.jpb'),
(315, 56, 'PK4athlts3.jpg'),
(316, 56, 'PK4athlts4.jpg'),
(317, 56, 'PK4athlts5.webp'),
(318, 57, 'PKbalocamper1.webp'),
(319, 57, 'PKbalocamper2.jpg'),
(320, 57, 'PKbalocamper3.webp'),
(321, 57, 'PKbalocamper4.webp'),
(322, 57, 'PKbalocamper5.webp'),
(323, 58, 'PKpumaflowcap1.webp'),
(324, 58, 'PKpumaflowcap2.webp'),
(325, 59, 'PKpumaarchivemid1.jpg'),
(326, 59, 'PKpumaarchivemid2.jpg'),
(327, 59, 'PKpumaarchivemid3.webp'),
(328, 59, 'PKpumaarchivemid4.webp'),
(329, 61, 'PKpumabuckethat1.jpg'),
(330, 61, 'PKpumabuckethat2.jpg'),
(331, 62, 'PKpumawatch1.webp'),
(332, 62, 'PKpumawatch2.webp'),
(333, 62, 'PKpumawatch3.webp'),
(334, 62, 'PKpumawatch4.webp'),
(335, 63, 'PKAccelerator.webp'),
(336, 63, 'PKAccelerator2.webp'),
(337, 63, 'PKAccelerator3.webp'),
(338, 64, 'PKpickleball1.jpg'),
(339, 64, 'PKpickleball2.jpg'),
(340, 64, 'PKpickleball3.jpg'),
(341, 64, 'PKpickleball4.jpg'),
(346, 65, 'PKtiedyehat1.jpg'),
(347, 65, 'PKtiedyehat2.jpg'),
(348, 65, 'PKtiedyehat3.jpg'),
(349, 65, 'PKtiedyehat4.jpg'),
(350, 66, 'PKtiedyevisor1.jpg'),
(351, 66, 'PKtiedyevisor2.jpg'),
(352, 65, 'PKtiedyevisor3.jpg'),
(353, 66, 'PKtiedyevisor4.jpg'),
(354, 67, 'PKpicklehat1.jpg'),
(355, 67, 'PKpicklehat2.jpg'),
(356, 67, 'PKpicklehat3.jpg'),
(357, 67, 'PKpicklehat4.jpg'),
(358, 68, 'PKpickleballvisor1.jpg'),
(359, 68, 'PKpickleballvisor2.jpg'),
(360, 68, 'PKpickleballvisor3.jpg'),
(361, 68, 'PKpickleballvisor4.jpg'),
(362, 69, 'PKguccibelt1.avif'),
(363, 69, 'PKguccibelt2.avif'),
(364, 69, 'PKguccibelt3.avif'),
(365, 69, 'PKguccibelt4.avif'),
(366, 70, 'PKgucciring18k1.avif'),
(367, 70, 'PKgucciring18k2.avif'),
(368, 70, 'PKgucciring18k3.avif'),
(369, 70, 'PKgucciring18k4.avif'),
(370, 71, 'PKguccisquarefram1.avif'),
(371, 71, 'PKguccisquarefram2.avif'),
(372, 71, 'PKguccisquarefram3.avif'),
(373, 72, 'PKsilkbowtie1.avif'),
(374, 72, 'PKsilkbowtie2.avif'),
(375, 72, 'PKsilkbowtie3.avif'),
(376, 74, 'PKstudring1.avif'),
(377, 74, 'PKstudring2.avif'),
(378, 74, 'PKstudring3.avif'),
(379, 75, 'PKmlbwatch1.webp'),
(380, 75, 'PKmlbwatch2.webp'),
(381, 76, 'PKmlbcubsgear1.webp'),
(382, 76, 'PKmlbcubsgear2.jpg'),
(383, 76, 'PKmlbcubsgear3.jpg'),
(384, 77, 'PKmlbdodgers1.jpg'),
(385, 77, 'PKmlbdodgers2.webp'),
(386, 78, 'PKmlbgiantgear1.webp'),
(387, 78, 'PKmlbgiantgear2.webp'),
(388, 78, 'PKmlbgiantgear3.webp'),
(389, 79, 'PKmlbhoustongear1.webp'),
(390, 79, 'PKmlbhoustongear2.webp'),
(391, 79, 'PKmlbhoustongear3.webp'),
(392, 79, 'PKmlbhoustongear4.webp'),
(393, 80, 'PKmlbpridewatch1.webp'),
(394, 80, 'PKmlbpridewatch2.webp'),
(395, 81, 'PKvansbackpack1.jpg'),
(396, 81, 'PKvansbackpack2.jpg'),
(397, 81, 'PKvansbackpack3.jpg'),
(398, 82, 'PKvansbodypack1.jpg'),
(399, 82, 'PKvansbodypack2.jpg'),
(400, 82, 'PKvansbodypack3.jpg'),
(401, 82, 'PKvansbodypack4.jpg'),
(402, 83, 'PKvanscrossbody1.jpg'),
(403, 83, 'PKvanscrossbody2.jpg'),
(404, 83, 'PKvanscrossbody3.jpg'),
(405, 84, 'PKvansbodybackbag1.jpg'),
(406, 84, 'PKvansbodybackbag2.jpg'),
(407, 84, 'PKvansbodybackbag3.jpg'),
(408, 85, 'PKvansbenchbag1.jpg'),
(409, 85, 'PKvansbenchbag2.jpg'),
(410, 85, 'PKvansbenchbag3.jpg'),
(411, 86, 'PKvansbagofbackpack1.jpg'),
(412, 86, 'PKvansbagofbackpack2.jpg'),
(413, 86, 'PKvansbagofbackpack3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` float(5,1) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slide` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slide`, `title`, `content`, `img`, `id_category`, `id_brand`) VALUES
(11, 'Bộ sưu tập mới của Nike !', 'Giày chính hãng với lịch sử hình thành và phát triển hơn 100 năm để ngày nay trở thành “Thương hiệu giày thể thao được giới trẻ yêu thích”', 'banner2.png', 1, 1),
(12, 'Bộ sưu tập mới của Nike !', 'Giày chính hãng với lịch sử hình thành và phát triển hơn 100 năm để ngày nay trở thành “Thương hiệu giày thể thao được giới trẻ yêu thích”', 'banner3.webp.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `id_specification` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `dept` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `quality_checking` bit(1) NOT NULL,
  `box_contain` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `img` varchar(500) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `active` bit(1) NOT NULL,
  `role` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `img`, `phone_number`, `active`, `role`) VALUES
(14, 'Nguyễn Thanh Tài', 'taintps24909@fpt.edu.vn', '123', 'download.jpg', '0818617077', b'0', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `id_wishlist` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`id_wishlist`, `id_product`, `id_user`) VALUES
(2, 46, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id_billdetail`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slide`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`id_specification`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id_billdetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=414;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `specification`
--
ALTER TABLE `specification`
  MODIFY `id_specification` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id_wishlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id_bill`);

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Constraints for table `product_img`
--
ALTER TABLE `product_img`
  ADD CONSTRAINT `product_img_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `slider_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
  ADD CONSTRAINT `slider_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`);

--
-- Constraints for table `specification`
--
ALTER TABLE `specification`
  ADD CONSTRAINT `specification_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `wish_list_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `wish_list_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
