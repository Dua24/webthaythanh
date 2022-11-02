-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 02, 2022 lúc 03:57 PM
-- Phiên bản máy phục vụ: 10.5.16-MariaDB
-- Phiên bản PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id19779923_hfwthsql`
--
CREATE DATABASE IF NOT EXISTS `id19779923_hfwthsql` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id19779923_hfwthsql`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `dm_id` int(11) NOT NULL,
  `dm_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`dm_id`, `dm_ten`) VALUES
(1, 'Other'),
(2, 'NEW Stuff'),
(3, 'Accessories'),
(4, 'Hoodie'),
(5, 'Jacket'),
(6, 'Long Sleeve'),
(7, 'Pullover'),
(8, 'Sweater'),
(9, 'T-shirt'),
(10, 'Shirt'),
(11, 'Boxer'),
(12, 'Pants'),
(13, 'Shorts'),
(14, 'Shoes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia_sp` double NOT NULL,
  `img_sp` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `dm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `ten_sp`, `gia_sp`, `img_sp`, `dm_id`) VALUES
(1, '2020 Travel Jacket', 550, 'https://cf.shopee.vn/file/0699dbf7a1cd4f2863e7df73ffdaa4e3', 5),
(2, '13 Long Sleeve', 500, 'https://cf.shopee.vn/file/cd058188f51a1e93387bedf718c6b244_tn', 6),
(3, '2021 Travel Jacket', 550, 'https://cf.shopee.vn/file/be4500077fefdbff1f1a358ffb5ed9a6_tn', 5),
(4, '2021 Hoodie', 500, 'https://cf.shopee.vn/file/ad1318cc500a34ad6ea370782cb27add_tn', 4),
(5, '2022 Hoodie', 500, 'https://cf.shopee.vn/file/fff2c605d5020e51db0c40f5ea79e3b5_tn', 4),
(6, '420 Long Sleeve', 500, 'https://cf.shopee.vn/file/7e956cfa0af0e914b0c8a365da6f958e_tn', 6),
(7, '4×4 Sweater', 500, 'https://cf.shopee.vn/file/cf0e4bae459ef72f232aa5eb41cd5665_tn', 8),
(8, 'All Black backpack', 500, 'https://cf.shopee.vn/file/87f49aeaa9a9ea97ccf4ebfa6c6d0f5c_tn', 1),
(9, 'White Signature Shoes', 890, 'https://cf.shopee.vn/file/8ddd22eeb2473f1799bbf94680f17596', 14),
(10, 'Travel Sweat Pants', 450, 'https://cdn.shopify.com/s/files/1/0381/8153/5876/products/primeflex-coachs-jogger-rc-5340-black-s-reigning-champ-danali-mens-pants-368865_256x.jpg?v=1664341881', 12),
(11, 'All Black Jacket', 550, 'https://cf.shopee.vn/file/a0b693799499ab956bc128f02a4b0487_tn', 5),
(12, 'Tee Shoes', 300, 'https://cdn.shopify.com/s/files/1/0209/9894/products/001055-BKWH-S-01-F-LITE-FLY-G-295-cardio-training-shoe-black-white-womens-angle_256x.jpg?v=1650380110', 10),
(13, 'B/W Jacket', 500, 'https://cf.shopee.vn/file/93ca64858a424eaf7003d784c998629e_tn', 5),
(14, 'B/W long sleeve', 550, 'https://cf.shopee.vn/file/b87261b3a63ab24da2d13006d2c891ea_tn', 6),
(15, 'Bag Summer', 350, 'https://cf.shopee.vn/file/45d68c430462ca07b666475badd18ea6_tn', 1),
(16, 'Baseball Logo Jacket', 650, 'https://cf.shopee.vn/file/d3321f3b7408db643005837bbf93e788_tn', 5),
(17, 'Basketball Jacket', 550, 'https://cf.shopee.vn/file/3695522a6ee9f9d48252c26f6c3ca8fe_tn', 5),
(18, 'Bee Hoodie', 500, 'https://cf.shopee.vn/file/4cd09340ec879a3b8c47d15f95e13652_tn', 4),
(19, 'Bee Sweater', 350, 'https://cf.shopee.vn/file/db7cfca188303b4fd3fc16a9e04bfbf3_tn', 8),
(20, 'Bee Tee', 300, 'https://cf.shopee.vn/file/db7cfca188303b4fd3fc16a9e04bfbf3_tn', 10),
(21, 'Best Friends For Life tee', 350, 'https://cf.shopee.vn/file/sg-11134201-22100-z9o4vym0w8ivbc_tn', 10),
(22, 'Black Down Vest', 500, 'https://cf.shopee.vn/file/sg-11134201-22100-pj0c69ka5siv75_tn', 1),
(23, 'Black Hoodie', 500, 'https://cf.shopee.vn/file/c7c69d863135c63ee7cab4fbd86fa17b_tn', 4),
(24, '16 Long sleeve', 600, 'https://cf.shopee.vn/file/4d819e25676dba93789b091998b49d76_tn', 6),
(25, 'BB/W2 sleeve', 450, 'https://cf.shopee.vn/file/f347a01bdaceb172f8db6eef99c1ae71_tn', 6),
(26, 'Black Shirt', 390, 'https://cf.shopee.vn/file/f1fd6d75855cbe802935da6258a6a4a0_tn', 9),
(27, 'Black Signature Shoes', 890, 'https://cf.shopee.vn/file/2328de6438adb6b9aba03a8861d851a4_tn', 14),
(28, 'Black White Shorts', 420, 'https://cf.shopee.vn/file/9ffcd2767c82d5d74199875162456e2a_tn', 13),
(29, 'Black Windbearker Logo', 550, 'https://cf.shopee.vn/file/c1c1da6e8cd428dec691ba733db9b850_tn', 1),
(30, 'White Shorts', 420, 'https://cdn.shopify.com/s/files/1/0461/1755/2291/products/whiteshorts2_256x.jpg?v=1617170451', 13),
(31, 'Bracelet', 500, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRAQcvC7ftOo91ghD_aET2g8oa9BpjFih69ohIt3s37jlIY0mCkKLthe1TW8w10lyP61N5f_e8turyXU_925MFet2TUBXqfeUvoLWG4hfuaogRo3xcWNdvw&usqp=CAE', 3),
(32, 'Bum Bag', 350, 'https://cf.shopee.vn/file/42f696e7b138e1a1d9602fc626822e8a_tn', 3),
(33, 'Camp Table', 600, 'data:image/jpeg;base64,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', 1),
(34, 'Car Long Sleeve', 420, 'https://cf.shopee.vn/file/f347a01bdaceb172f8db6eef99c1ae71_tn', 6),
(35, 'Card Holder', 300, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcS9IbXtDXkSYJfEbdtdzWYH2cA6r9koc1EzfKQ12hiLK5SvGXPlrE5eh9Vl3ELqq0tUvAnttPG91IEfErRrArfdgO_hH-rw046KYspdc0xnupq7YRZngF6-nQ&usqp=CAE', 3),
(36, 'Collabration long sleeve', 500, 'https://cdn.shopify.com/s/files/1/0034/3388/9861/products/44_40433ead-ec9a-4127-9d69-117359e096f7.jpg?v=1629002265&width=1445', 6),
(37, 'Crop Top', 350, 'https://www.hawkersco.com/dw/image/v2/BDSZ_PRD/on/demandware.static/-/Sites-Master-Catalog-Apparel/default/dw0b99c51b/images/master/hawkers-apparel-dxb-crop-top-black-HCDXB21T_040-mf1.jpg?sw=860&q=100', 2),
(38, 'Cropped Pants', 390, 'https://dosi-in.com/file/detailed/49/dosiin-thebrothers-crop-pants-49575.jpg?w=1000&h=1000&fit=fill&fm=webp', 12),
(39, 'Diamonds Tee', 300, 'https://images.stockx.com/images/Supreme-Diamonds-Tee-Black.jpg?fit=fill&bg=FFFFFF&w=1200&h=857&fm=webp&auto=compress&dpr=2&trim=color&updated_at=1614202013&q=75', 10),
(40, 'Dirt Bike long sleeve', 500, 'https://cf.shopee.vn/file/f347a01bdaceb172f8db6eef99c1ae71', 6),
(41, 'Dirtbike Sweatpants', 500, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlMS_lXJxGbi3mUAvVYGzKXsSaPMeGEDpzjA&usqp=CAU', 12),
(42, 'Duffel bag', 800, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/aec6551fcff44a6baf86ae76017e150d_9366/Go-To_Duffel_Bag_Black_HG3271_01_standard.jpg', 1),
(43, 'Friends Diamonds Moisanite chain', 37, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb9j2btRf9DKcO6NHYWffN9ofJbxI86b6Row&usqp=CAU', 3),
(44, 'Gang tee', 300, 'https://dosi-in.com/file/detailed/140/dosiin-hades-wolf-gang-tee-140095140095.jpg?w=1000&h=1000&fit=fill&fm=webp', 10),
(45, 'HFWTH Boxer', 150, 'https://scontent.fsgn2-8.fna.fbcdn.net/v/t1.6435-9/66431665_2299559276825236_1890253701545721856_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=LW2ZVzF0pvoAX9fC9un&_nc_ht=scontent.fsgn2-8.fna&oh=00_AfAT8dFEaUbTHaMDUkl1Ied5qv2Idy18wyDsTd6n2m5jeA&oe=6380B096', 11),
(46, 'HFWTH Logo Kaki Pants 22', 500, 'https://cf.shopee.vn/file/dd8f4cffc5e0f808dd7e5911637451be', 12),
(47, 'Holiday 2020 Jacket', 550, 'data:image/jpeg;base64,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', 5),
(48, 'Holiday Pants', 450, 'https://cdn.shopify.com/s/files/1/0515/9056/1978/collections/CollectionImage_Holiday_Pants.jpg?v=1608087437', 12),
(49, 'Jacket Nón Nỉ Trắng', 550, 'https://nonson.vn/vnt_upload/product/NON_JACKET/MC243B/TR1/thumbs/600_crop_nonson_website3_1.png', 1),
(50, 'Khaki Pants', 390, 'https://smsh-14-140934-juc1ugur1qwqqqo4.stackpathdns.com/953582/wp-content/uploads/2014/10/chinos.jpg?lossy=0&strip=1&webp=1', 12),
(51, 'Life A Beach jacket', 550, 'https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2018%2F09%2Flifes-a-beach-fall-winter-2018-collection-lookbook-9-1.jpg?q=75&w=800&cbr=1&fit=max', 5),
(52, 'Life A Beach Sweater', 550, 'https://res.cloudinary.com/teepublic/image/private/s--gJqoSSz2--/t_Resized%20Artwork/c_crop,x_10,y_10/c_fit,w_437/c_crop,g_north_west,h_620,w_465,x_-14,y_0/g_north_west,u_upload:v1446840653:production:blanks:f6q1psnlmvhpoighmph1,x_-405,y_-276/b_rgb:eeeeee/c_limit,f_auto,h_630,q_90,w_630/v1462866576/production/designs/507929_1.jpg', 8),
(53, 'Logo backpack', 550, 'https://cms.cloudinary.vpsvc.com/image/fetch/c_scale,w_235,f_auto/https%3A%2F%2Flogo-rendering.large-assortment.vpsvc.com%2Fapi%2Fv2%2Fplatform-products%2Fvistaprint%2Fen-us%2FPRD-P7QCWE3RN%2Fsample-image%3FproductVersion%3D6%26selectedOptions%255BSubstrate%2520Color%255D%3D%2523000000%26size%3D1400%26purpose%3Dlat.product.main%26requestor%3Dpdp', 3),
(54, 'Logo Jacket', 600, 'https://cms.cloudinary.vpsvc.com/images/c_scale,dpr_auto,f_auto,q_60,w_235/legacy_dam/en-us/S001482490/MVPSPPAG-618-NA-Elevate-Maxon-Men-Softshell-Jacket-Default-Tile-001?cb=62309b9f6a25f2f7af022d0d16d7c592bb3aaa14', 5),
(55, 'Logo shorts', 450, 'https://dosi-in.com/file/detailed/472/dosiin-highclub-quan-shorts-logo-wordmark-den-du-highclub-brand-chinh-hang-472243472243.jpg?w=670&h=670&fit=fill&fm=webp', 13),
(56, 'Love Weed Tee', 300, 'https://www.rastaempire.com/images/menucalloutimages/c-15-75d1f4dc-f78b-47d3-a563-64a7e6244ca7.jpg', 10),
(57, 'Nike Socks', 80, 'https://static.nike.com/a/images/t_default/f4a2b5b8-425b-4b48-a89d-7de3bef124a9/everyday-cushioned-training-ankle-socks-jlm914.png', 1),
(58, 'Pocket jacket', 600, 'data:image/jpeg;base64,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', 5),
(59, 'Puffer jacket', 600, 'https://assets.adidas.com/images/w_383,h_383,f_auto,q_auto,fl_lossy,c_fill,g_auto/2f7d002505ec4deabb6cad940108ab4d_9366/itavic-3-stripes-midweight-hooded-jacket.jpg', 5),
(60, 'Pullover Logo', 500, 'https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/02/ao-ni-sweatshirt-mlb-tay-dai-co-tron-simple-logo-mau-den-size-s-6209c53731b90-14022022095759.jpg', 7),
(61, 'Robot Hoodie', 550, 'https://cf.shopee.vn/file/1fb6432b41f813e4433130abe36455f8_tn', 4),
(62, 'Shoulder Bag', 350, 'https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/k/a/karl-lagerfeld-kids-girls-black-shoulder-bag-18cm-468172-ad2730ba7d6a742b3df9dd8d6bc94c41556f465e.jpg', 2),
(63, 'Skull shorts', 450, 'https://cdn.shopify.com/s/files/1/0063/0757/7971/products/Death-As-A-Strangler-Shorts-2_256x.jpg?v=1662586674', 13),
(64, 'Summer 22 Sunglasses', 300, 'https://m.media-amazon.com/images/I/71PUMCJVIeL._CR0,559,961,961_UX256.jpg', 3),
(65, 'Summer Tank Top', 290, 'https://image-cdn.bikebiz.com.au/cdn-cgi/imagedelivery/C79CwLlFC0JqxVSzS8SNAw/f30cb24bb5as1752017013/Alpinestars-Black-Red-Tech-Tank-Summer/medium', 3),
(66, 'Surf Jacket', 550, 'https://m.media-amazon.com/images/I/71K93gN4LUL._CR113,0,1305,1305_UX256.jpg', 5),
(67, 'Sweater 2021', 550, 'https://cdn.shopify.com/s/files/1/0025/2021/9746/products/CrossoverCulture-VarsityHoodie-Black-Back_256x.png?v=1624167754', 8),
(68, 'Tank Top', 200, 'https://dodo.ac/np/images/8/82/Dynamic_Tank_Top_%28Black%29_NH_Icon.png', 1),
(69, 'Tee 13', 300, 'https://cdn.shopify.com/s/files/1/0217/2888/6848/products/T13NY-back_256x.jpg?v=1624872174', 10),
(70, 'Tee Police', 300, 'https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/b/o/boss-blue-slim-fit-logo-t-shirt-467625-711150508824b9b9068e4c4c04d67fecd99c3645.jpg', 10),
(71, 'Tee robot', 450, 'https://dodo.ac/np/images/1/13/Fired-Up_Kanji_Tee_%28Tamashii_%28Soul%29%29_NH_Icon.png', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_password`, `role`) VALUES
(1, 'toiladuynguyen', '25f9e794323b453885f5181f1b624d0b', '0'),
(2, 'toiladuynguyen1', '25f9e794323b453885f5181f1b624d0b', '0'),
(3, 'toiladuynguyen12', '25f9e794323b453885f5181f1b624d0b', '0'),
(4, 'taikhoanadmin', '25f9e794323b453885f5181f1b624d0b', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`dm_id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `dm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
