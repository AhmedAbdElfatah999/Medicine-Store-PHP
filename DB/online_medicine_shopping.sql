-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 10:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_medicine_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `products_number` int(11) NOT NULL,
  `product_1` varchar(20) NOT NULL,
  `product_2` varchar(20) NOT NULL,
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(15) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `address`) VALUES
(2, 'newyork199');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ord_id` int(15) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ord_id`, `order_date`, `address`, `customer_id`, `product_id`) VALUES
(1, '11/11/2011', 'SETR', 1, 14),
(2, '11/5/2017', 'setAr', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `type_id` int(11) NOT NULL,
  `permission` varchar(20) NOT NULL,
  `permission_name` varchar(20) NOT NULL,
  `per_number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`type_id`, `permission`, `permission_name`, `per_number`) VALUES
(1, 'enter_product.php', 'enter Product', 1),
(1, 'view_order.php', 'view Order', 2),
(1, 'view_user_details.ph', 'View Users', 3),
(2, 'view_order_Customer.', 'View order', 4),
(2, 'view_all_medicines.p', 'View Medicines', 5),
(2, 'view_categories.php', 'View_Categories', 6);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `pro_desc` text NOT NULL,
  `sup_id` varchar(50) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `name`, `price`, `quantity`, `cat_name`, `pro_desc`, `sup_id`, `image`) VALUES
(1, ' Walgreens Ephrine Nose Drops', 6.29, 10, 'Flu', '.Relieves nasal congestion\r\n.Helps decongest sinus passages\r\n.Fast acting', 'Walgreens  Limited', 0x433a5c55736572735c64656c6c5c4465736b746f705c53575f50726f6a6563745c50726f647563745f696d6167655c70726f5f312e6a7067),
(2, 'Walgreens Wal-Tussin Chest Con', 0.87, 20, 'Flu', '•Loosens and thins bronchial secretions\r\n•Helps make coughs more productive\r\n•Non-drowsy and alcohol-free\r\n', 'Walgreens  Limited', 0x433a5c55736572735c64656c6c5c4465736b746f705c53575f50726f6a6563745c50726f647563745f696d616765735c70726f5f322e6a7067),
(3, 'Walgreens Mucus Relief Chest C', 20.99, 10, 'Flu', '• Helps loosen phlegm\r\n• Makes coughs more productive\r\n• Easy to swallow\r\n', 'Walgreens  Limited', 0x433a5c55736572735c64656c6c5c4465736b746f705c53575f50726f6a6563745c50726f647563745f696d616765735c70726f5f332e6a7067),
(4, 'Walgreens Wal-Phed PE Nasal De', 6.49, 15, 'Flu', '• Relieves sinus congestion & pressure\r\n• For nasal congestion\r\n• Non-drowsy\r\n', 'Walgreens  Limited', 0x433a5c55736572735c64656c6c5c4465736b746f705c53575f50726f6a6563745c50726f647563745f696d616765735c70726f5f342e6a7067),
(5, 'Walgreens Wal-Four Nasal Decon', 7.29, 20, 'Flu', '• For dry nasal membranes\r\n• Pharmacist recommended\r\n• Gluten free\r\n', 'Veeks Comp.', ''),
(6, 'Dermarest Eczema Medicated Lot', 10.9, 10, 'Eczema Treatment', '• Temporary relieves itching\r\n• For rashes due to eczema\r\n• Non-greasy & dermatologist tested\r\n', 'Veeks Comp.', ''),
(7, 'Aveeno Active Naturals Eczema ', 4.99, 20, 'Eczema Treatment', 'This breakthrough hand cream helps to improve the 4 symptoms of eczema - itch, the appearance of redness, dryness', 'Veeks Comp.', ''),
(8, 'Natralia Eczema & Psoriasis Cr', 11.99, 15, 'Eczema Treatment', '• Relief of skin irritation\r\n• Aids itching, redness, flaking & scaling\r\n• Fortified with traditional herbs\r\n', 'Veeks Comp.', ''),
(9, 'Aveeno Eczema Care Itch Relief', 19.99, 20, 'Eczema Treatment', '11 ounces of eczema therapy relief itch relief balm\r\nProvides immediate and long-lasting itch\r\n', 'Omron limited', ''),
(10, 'Gold Bond Medicated Eczema Rel', 9.49, 10, 'Eczema Treatment', '• Relieves skin irritation & itching\r\n• For eczema & rashes\r\n• Steroid & fragrance free\r\n', 'Omron limited', ''),
(11, 'BIOFREEZE Classic Pain Relievi', 14.99, 20, 'Joint & Muscle Pain Relief', '•Penetrates quickly to relieve aches and pains\r\n•Proprietary formula made with USP-grade ingredients\r\n.Free of propylene glycol, dyes and parabens\r\n', 'Nature bounty', ''),
(12, 'Boiron Arnicare Pain Relieving', 10.49, 20, 'Joint & Muscle Pain Relief', '•Arnicare pain relieving arnica gel\r\n•For relief of muscle pain & stiffness\r\n•Homeopathic\r\n', 'Nature bounty', ''),
(13, 'Salonpas Pain Relieving Patche', 5.99, 10, 'Joint & Muscle Pain Relief', '•Use for backache, sore shoulder, stiff neck, joint pain\r\n•More medicine\r\n•Better flexibility\r\n', 'Nature bounty', ''),
(14, 'Aspercreme Creme with Lidocain', 11.79, 20, 'Joint & Muscle Pain Relief', '•neck & shoulder\r\n•knee & elbow\r\n•Hand & wrist\r\n', 'Omron limited', ''),
(15, 'coloverin', 10, 0, 'ABSD for', '200', 'amD', 0xffd8ffe2021c4943435f50524f46494c450001010000020c6c636d73021000006d6e74725247422058595a2007dc00010019000300290039616373704150504c0000000000000000000000000000000000000000000000000000f6d6000100000000d32d6c636d7300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000a64657363000000fc0000005e637072740000015c0000000b777470740000016800000014626b70740000017c000000147258595a00000190000000146758595a000001a4000000146258595a000001b80000001472545243000001cc0000004067545243000001cc0000004062545243000001cc0000004064657363000000000000000363320000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000074657874000000004642000058595a20000000000000f6d6000100000000d32d58595a20000000000000031600000333000002a458595a200000000000006fa2000038f50000039058595a2000000000000062990000b785000018da58595a2000000000000024a000000f840000b6cf63757276000000000000001a000000cb01c903630592086b0bf6103f15511b3421f1299032183b92460551775ded6b707a0589b19a7cac69bf7dd3c3e930ffffffe000104a46494600010100000100010000ffdb008310000a000a000a000a000b000a000c000d000d000c00100011000f001100100018001600140014001600180024001a001c001a001c001a0024003600220028002200220028002200360030003a002f002c002f003a003000560044003c003c0044005600640054004f005400640079006c006c007900980091009800c700c7010cffdb008311000a000a000a000a000b000a000c000d000d000c00100011000f001100100018001600140014001600180024001a001c001a001c001a0024003600220028002200220028002200360030003a002f002c002f003a003000560044003c003c0044005600640054004f005400640079006c006c007900980091009800c700c7010cffc2001108010900bf03012200021101031101ffc4001b00000203010101000000000000000000000203000104050607ffc4001801010101010100000000000000000000000001020304ffda000c03010002100310000001cb0efdbc16577a9d017061cea60f1e8e7299d31cfa392cf45c2efdb5e53d6794c9e3478a10e4b64b9d3293970ea60fa31452eba89d09c30518f0e9a183b759c7bf2df9bbecbcba4bf2feb395d31cf07aba60484f340cc7a654c53a084abd18975675008396b089af96f4e8c9a65525a7e7f40ec3155e8c8171822cfbf0977419a66e03062325cef9a92acea0dd72d61598f2d9b957cfa8ecc25c7b7466392ebcd15be6916abd3e6a303cd9775bc83f3e9a58cadc2a95d33d2a95cb58c0c396daad238e96d5e9e1e85353a8e54ea7277c8086fbf0977507633701a31167b75cd715bd75ea2d7a6f378d342f374610f3f1eca60e8f9fd5983502de4760d72dcaabf47084065d18ef22e4383d2ad3d7189b74b9b1f37279baf7f8d68e5b8c474e5d2fd5939f5b52793a9b1555be4fd9cbb3a3ab89a2ced0e3dddf9815da68d189de8c5f96ecf9ef3f42a62f874aab103a5cd197de3f98ce5db279a1be9c5e32f52e8c4590b89d9e1f4f53a0d433b736b073f4cf239ecbf2f6d191eacd00650b16843bafc1d1359e155cbaee1440742c0a2b6617576e43edc8b97d0e4dd6160cf3ec98a78aab85a1a98162ecba90718348b62c810ca32aaddb395ec7ae3cff00219971ab354cd2764686424025aa96aead24906eacbb1735d58968158c1a84eef0fa7a9c8a1bcd80ecf11a96d1954143572c9212ea044112ed70645b06d4aa774b8bd78e4c25e8564c8ca2f545daeca94c509625d48421b4a908a3966852dc67ecf2fad5cecc5442022e5044d59bd04d4e827467b2b97d5ce797aea60df05598a14a20c44421211be9fccfb8ae1f03db60ebcfcadec9cba640dcb867a2e276f3d60a6f3d0b5656aebc5a9779f9ee6f7f81be424312e5425d34eafa3e52ebd4536d5134519ab5431aba317873b559d70d9d7b3967d1ab38593d3aee7c9e4f6c27cfd5f44cd1e0cfd473136e262353da3249a101a0e048b7e2d54e92896365080876a32c609630483045f0fbc84fffc400281000020103030304030101000000000000000102031011122131042041132230321433422340ffda0008010100010502eca456e6d4f9afcda1fb18fe82ec44a36e2cec8a456e6d0e6b7261908bf5192fd7dbbe5e4c1bf62e6054bd3e6baf7469213322dc9af6096dd92dfb9102ade9732fb64d4ed1b57a5baba112c591e5d914cadcda9f2cc9a88eb4f26bddbf6e7b112c5fcbb22995b9b4444889e09444de3b10d1830fb114cadcd91e3ca5d927edc76b173cd9d914cad758c27ede0f59119649cb4b84a2c97d55d089595bcb114cad78e47cadcd0cc61ce22a6a4e7cf6224c56d5a8564532b736a7f6ab1d328f3a9898dac65353fb7621ab344738b4704708aa6adca7f6ab5d4aba381c61234e12c92fb2e3b18ad17035d23fc8d34f2e111d344e96fa512aca9907ef84f68bc8e0cd2d0ea24a15351ad2765662114d65ca08d22a64bda3ea113ab2494d8d94a1a84999687598eb649c9333814b2fd5714aa0a684c6c4648f32b54a8a953a937266adadd22ccb4a649491a66c967523fae1be32464b4d1992e55972ed52a3a8eec67493d3570b2751d568ee42e08cb5256f2d15a7a6167db42afab0ad3f4e9b15bc7811e0a4210b999d44b2cfe7cf653a92a72ea6a29d2b2e45c220b23e4a4f7b79ab3d2a5ce3dadfb7c3b78b69783cae7faf1c4b2e12d568ec262372b3783f963e6568fd5d95d732fb787f59f65396d93257e6cb9fea43e571da89913c32235bf984b44d2a6c6d2272d4c627be7764b9f1db126b68727889e7c942a3d1393d567d93e65dd12524479f32d88d93173479c9b5b3d8f9ee437644a59133c11c1d36f56cd6d65f3e076e93f699b60c597c2ef833676e8bf64b9b67676f365194869af830edbc458634744bfd2b7dfb336a34bd59ae92998513542457a108c7b93bf9c9d2434d396f2ee853d11c2cec684c9d0d69f4b550e2e2ecb9323336a71d73d92abd2e53cabf8284755434c5b7cea9a1356a896669c95fc2bf490f764dcadd3fa87e3d73f1eb9e8563d0aa74f2519b918933814d1192323e6b4b4aee8ad4d7b54aae9b60c5f0684c7450e84b3f8e7e3c8546a1e933d127d1c64df4111f4331f495d0e9d48df8b54f9f060c18304a8d3912e8a993e92aa239c4c8c949694619b99351ad9abbb267e092522b52713cf747fe09fd3fffc40023110001040201040301000000000000000001000210111220410330314021226171ffda0008010301013f0181a8d440802ca0208424a1021bca0d549c3710d6fd44bfc1424a2204749dc4f53c6a45f2b158aa4d1467a9f2a8c9804a0207982695c9960d3844de851802b4bd4c0edbbf880ed9f71a2d001387e2ad9997265905523d8b599599591f4bffc400261100020103020602030000000000000000000102101141213103122030325122614071c1ffda0008010201013f0179304b61ee60647fa31d30f4a4bc9d2591ee86ec86db35f6467ec962986225e4e931ee713037443a628f77491926f5758792258a60441dcf6487b9c459a58e1f90e98faa465cb81f13e8e6dcb939695e1bb0e49db5a604586a2894fd2d2922e2d4b52e2f1af165b2ab2c25d11117d19277d7a2dd2a937f1edc15f2395ff5db83f9775f7dd175cf95ecaafbbca7296fc2ffc40029100001020503040202030000000000000001001110202130310240811232417151613391225282ffda0008010100063f02b0108e981db0a1819eb702ac8773d436bf513b820de168de13336a306590b9db3ac26da5165676611d3e34c5c16d4bf96b7d8661945b3278e555a15b35932b2be627ea14554c4b04da71008d6d3fe91834757a4c5617699dd7499dcf137b0d1e8d39bdee962b90898846631106f8b0e168e9f26430221aa6266120fb797940d8e66167520848d11068087138411f48ca0c5e6e2c9f4b8804f16f8b0789cc389f8b1cdfaae371fe64c6d0fab540eaa1aeeaf5619d9649544c575e9fd58a48ff00d91f73fdf9555887715462988ac8651a7e60fa7330faac2a2188bb234a8b1d7f1171dcbf195d857e32bb0a20d1e152d33d1dd8ce0261630a94595810c8595dcaa4aa6b2a9ac2c3aae923735d215090a9541e0fb6aa7f08edcaffc40026100100020202010305010101000000000001001121311041516171812091a1b1f0d1c1f1ffda0008010100013f210cc6ee10dc19870e1e167c9f993527e14331d0cdf14f02019dc4b620660061369b4d1c3344d5c0da161edfb53acc3d884cf150b2106e04f0371dc20814439e186ccb0616b7f4801820d2204444f1352ce199a948c6021948d4ee3b84de6930ae19a657285165af50594b60d4441fbcd23cb6998a9dca3c369d4da759a3866062558d548d9c5cd8102a82ed2ef6a141e6ae7495843644a7108da75369b935463316601336500962260b8091fd040e31c0b63108421b88cea6d3af118c412d141b8a258cc4752989873b80c775344da1b8958ea6d3726fc1972b80b3bbee342e68173b0ff62230fccd325be6f662cae349be30984b2c371dc2c66e349b4d89b118ca351b7600cb0dcc48ca0f11259bf3a988f1838fa116436a2a658372d94da2f0d896a463354bef5cc5422d8927d5dcb0d2171dccd4ac7d02d95b006a65e01718146db8c52208bbe20b3c17ebdc22115c6b1dc7d1f93502d57ce583e264e53919816cbde660c2fb81a842df88b42ea2c22bc1819924f18b57100c720062346be19406fe12a7b78961fcfd22a1bf0f994a70aa10a32cb14382fe38d8398ab9ac0a5365b0c3cc0dcb9676fd20921938fa4b2455f5445d04f5f705a6c8888141db8f32937afcc4d66511962466d313c0dc58f7a1e665eb8c33b8cea50641b05d2cfacacfe89a9dc1751a3f082ca8a858960b70ecf66108a2cab6698f32c2e3dd1d3c1c30e0a153e48dc9454bc8fa9f10d7bc1a08e89b9d4d18817ac3afbcab7bd336862168884bd21d3115262cd545a18e78a97c26283bd12d7966432ed87312953a268caa1f79798f1f0993154c609b2089ff00d47100a336a78f68961291b9a60af9cf2469f23ed370cdc18437180833f34b0f1b04cdf585915b86042fb3fbcaa2bc4cdbe25026bdf0d5fda77157095c06be343f11d07f661a4b24f054d29a51f2d50a0f0d452a1db1dc4d3ef0b705acb198e24188e9ef532a82c1ec4da3b8a5bde6c70311dbc68988957f0332fb110faea1dcaaa86a5be87ea0c2644d1f4b816c6c18cc706d311c072bf4eb0688764341e2684a513009b8ef70d9e900b0292e0aaf0e30c7847aee54264e64cfd48e07dfead3e662ff006a7e663b7d7f48e929036a0ca8ed88806bf51db5199d4f10dcee65fd3517f7b7d4c2187f77283f742910644cc6599954c9434cf37fcc6eb0b752e963666d213b266ff988efea54b1109a8a923226085226a54b0adf7ca85cd8783715c36474fcc5cb30fd26c8e89e78da4a2548a9ee08798f2f7718ccb959ac2ee698b31d715f4e787980b3185370baf24aaf197bd98298583a98c6530c7025e1999b8fd845f27b8a9997cef80782af7051a99f323321d7fb94157173a9415e634996059aeae01cfa4944c6bc44a98fa2452b55fcafa4a49b2503f9988cb05031bd4f51e5f11abf54cd3c5d4322f3575bed0417fcc4611950e8a38c175e4226cae1846833419852403b8ee379340001831011fdbe6044d4ee3b8e071e9e85662450b006d5ed1a9d7cc73311f65f1f69e2cb823c5e782d934f0cddad3de5654564abf69922cf6b82266799169728d130fe110a6e7ef2f3b886e13987b96f4f28d915578ea753c4d93d508ebd447842e5a5a54a9465ec9fb442392247fccafa930b490467e021ff009e5ded2c97fde7fd26768fbe2751f633f53d3a84150f8ccb1095fa71313b8f144ae58e3cf6e1b9ff00117feccbdc7db29208d773384e95d2784e04bb9625a589ea40b37c5f0a1378dd97f45cb8b06c2e114b6d3f6c751e5d71afd3df3d7d6cfd5fdcffda000c03010002000300000010789e6cfac637ede4a9d84a605aec6ed67d452491a423513a69ddadc07c18770db69e22e4f854902a80abf340b77b151c7703e3318c608acd423a6603f0371730527900bef5471ac4db58497d2cc706d3091132450ffafb0ebc4f6cd041cbb5fe89177b783a756b2ba3ac707f5316d7cbc8191ef3d14a50d7c7946bfef0edeb77d30fe16116b4edaa6e100a2e4852ecc5200ca20288b2708a33ffc4001d110003000301010101000000000000000000011110213120413051ffda0008010301013f104c67787d10f0433ee381e5a112b834256d0c53acd3673e2bb0a94822a8b0fb85cf1553fa71106c4f87dc204d1d63e910fa6b9be9abb12090eb4541d56266a1a2097d19f70a32e11e8f1a507a0d9ba51a4c48e6213de538e953b19e0baa6c4ac82784e94f2951c177f9b410fcd2a17e8bc4bf9d423c10d06cbbe510d53310fa26874a091cf15784cb22c9bc420ff467ffc4001e11000300020301010100000000000000000001111021203141305161ffda0008010201013f1048c43e5856070fb19bd084d6e1d212609982df8fb6269d063d04136744b7588ced85b49828f58d4426cdfc36278b2d87e1dbc25051ee0a76ca3ae1f3701fd085437e0e064d0b6918d2d10e51d31b10d59aa05d8ff38a5105651f40dfa3446c250a1420990d688df4585a194aa0b68217078e1a09158af81a5bc5e3a4a574e0f9221fe0703f94725f15f35c375e5a0db1b626b92ee967be538e89de11f06a8d19049084c7995f147fffc400271001000202010403010002030100000000010011213141105161917181a1b1c1f020d1e1f1ffda0008010100013f1081c041d0fd14a821f793d4b122431980f6a0e132895090d84fd4e54b0233da76e836882081d90faa5410fbc83d6c49f8382c6d297b50431ec70f681d048d1381b988b7c740d3b904181d666f44827dae56e5a8812c175ba4a1186a8026008bd8995108fb6f440d399b495c43840e10b0e6529be62a12ec1020c0ea8b044e9532b5a857c5cbe198ff00f08cf89de2cadb47a9c8f897012b10fde8095d26341cf3083a204080e8147e78f4bb71d2f6ad4c03ae7e2628a7bc77a6c815303eb2dfd9df895081cc61c11690d0543ba64f4ea01d401cfc7557a22a10f26dcc34847b83a0bd1bf0d4e03297d8e804080fa9c84dafb9ed867437ba8de07a9eaee10bc17de39075684971e49470cb8f9be83c420684d826fb1516c81f1f4ab1d050e4ff0068f4810de9fa2296c2ca14d115aa09df11c873a2817e934a574d292660ee85540098520e054667f15c4ee1d058a8a3922d0a8f84bde60c8c4603a072fcfd55933416bb92f56f3dab65cad4c45cfe90a415077de6645c757a61867ee990f78f336677dee6941e95328d4c026e23568644a628e38a382fa7d53ef95a1b083c54f1449888be5e0267689685e6e56b3991d4ccf55dc169ec43774b95318cc54a0733409c887b1e8d839999194b372a0c25fbe56bd5f307a20c6da728cb6cede186d7e462224668cb1e214323c9f73eaea083086359b8e17f2436bda64d53b5233ad854c19263c7b99d9e859c5dbe89b491c85653719cadd8bcb72b0bad7c4b931bddb34a7d80444a0a6ea04cad37cd0422b8644dcd29a586413214d77ac751e3b99c41812c6995bd2022458272153bac34cc55f04abe2987c4b0dedb5e732c99fb6e64704a3cdac0441ff24d8dddc2600c19a1accc71672bca4efa30b28991695a335273ad02c51c345b4066e295aaada53b7aba9b9d35608ee8e65d0ca0b72694c5358682f8826f94e330458e1db0fa60a149a4d8c2c90e19b22f073bcf73ab54eca98c39981e29f49df44481795a9f3989626ea15c944e535a179a984474388e311f4b661c00afc1108c71c1049ddd0a707104b68fbcd93c4b0e0118f5265712f66d6f6bb964f809b1d98bca1fd27b2387787122d2e96fca5ef7532773a06d3069b05941eee254290ec4d0e8583cce4955adee542042a77e6671710f2ea0b5b95b5daacc07657d90acf8a8becac3dd02cf24bd1ab20895b5907ed583f67378fcff00d98df9430b14c315409a9dbdbdd4f4254f896578c4797ce54bbb0d55392243551ae083a76627c62c1f93fea61c1d5c1863b1f5ea7c1b095ceece3981afa86d7e7e66dbc6713a8472982be4d4483bc55e6d869b9892b5e207cf77ea603e3d089fac3d849fd9080fa71d72232be1dbf6a7ecaf72c5acf6f102b3d889f091ee2df68dbe1276def1dc610f9bd773ec0fd65af91f69f12972c9092e7d378b462cfc5d7cc58a7ca70ff33ee0f4acd9192f343b1fac59b06ef434e49f3231e6ee115fee47fd1b2477fb5c5ef99bfa62db96f3d88703e08b94c837ac6b51c48b7f4e31d1da1ab1cf243f6e71795e8884f5ee84562317a3065f925a7e2507fd53ff00b2bcbc7dc5e9fe37380b7ce89badd657cc4c04b68b67916e0c78c1ee315bc05f9c4c48a28039a238731baf297ee2364741f98fb27a67db1d1e8f45af62fb9ebbfa8b1ffa58f419fd57347edf82585cb44f808e0677bd1f0c62bb2a95aa7860c9af6e4e8593b85fc92e1c2c3f49ea388ee15f08c6103a790d09f4cb91abbce34b625bc3ec8b2fcd7b2a65bc2907d0afa8e47060f9e80def0c2ecafa468222bbed160c7c8b1a81bf926f21d44ff4fc23e8611833e4024cc117f12d1db32c4aed89a5a8291d5d92b8459453c1b65b68aa038023023879c0e963170ea02cbddf65e817d4a95d44bfc41fe41a109191af331cfdaf73ca25b88ad1f6461c25afa2265cf03fe08f70f96d9c0540f89fecd28bf4b02315097121ca08318186c19a1ef0e52a2691c4a9f43fd882bbdd9781a313ec71390e74116967c731387ee0c4b8c0461be4865592ec8a0f4063162a71108770fb86a3e2cd4b436693c4cd56775350546b661fdc00b9d2f8581c742ec6f8f98506dee6900e3718621d6d87dae7648ea2780054e38222667bb96db1e8a810f241840c0c861d3d99684bac0636caf51fb3fb0d38664899499bd1a9fecf06540f687e11d9eeb1084a39d6ec4f13313dc7059781f09899adf9accd0f3217647747b8d4f0c0198d75d9123328c5cfe99f53e674f920ed6ff6693f66e72108d8a4f836fa254b8c076026363cc51228c225230238bc3d209594c4afad4fca2609c8a593006bb7f912ad75a59c84c03708cd5020e1b589b8f396914d2b9e75550461f845d3ccd8e98982115e9d1775181d87d32c06829e3a35b5a98ea53f64b354f0407110515f5365d52abbdc6f903a5a7dc4225fd4d6087298650a50fd4ec4342d1d3b9b12e42b4147c91c1db98b1fe3a3b3ee3b26660b85f698d81d04da67e26923d89e08f8c65e07e47353e43082a6e93cf89c71ed6060193cd72fec683c7b549fb4c13967dd8ec7d4044adf7c7097c061ff0004c6a49e39a6aeeb8f21b820af983e460d3b83efa97d2a54576103c20f32e3d004ae8ee3cc7ca3e51ef11f326d8bbb5667dff0d20ea99df4fa621e92204448a91997650538091e0b3e19a4fdd47717dc3bcfb8f21e838860f64bff00811fa3a030b162c61e82803fd1296edbb971ff007f83a821d23a046118c31874318c63d1f97f84ffd9);

-- --------------------------------------------------------

--
-- Table structure for table `product_in_order`
--

CREATE TABLE `product_in_order` (
  `product_id` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type_lookup`
--

CREATE TABLE `type_lookup` (
  `type_id` int(11) NOT NULL,
  `permission` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_lookup`
--

INSERT INTO `type_lookup` (`type_id`, `permission`) VALUES
(1, 'Admin'),
(2, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `username`, `phone`, `type`, `fullname`) VALUES
(1, '789', 'Admin', 123456789, 1, 'Admin'),
(2, '456', 'Customer', 147852, 2, 'CustomerName');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ord_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`customer_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`per_number`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cat_id` (`cat_name`),
  ADD KEY `sup_id` (`sup_id`);

--
-- Indexes for table `product_in_order`
--
ALTER TABLE `product_in_order`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `type_lookup`
--
ALTER TABLE `type_lookup`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ord_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `per_number` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `type_lookup`
--
ALTER TABLE `type_lookup`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`pro_id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `permission`
--
ALTER TABLE `permission`
  ADD CONSTRAINT `permission_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type_lookup` (`type_id`);

--
-- Constraints for table `product_in_order`
--
ALTER TABLE `product_in_order`
  ADD CONSTRAINT `product_in_order_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`ord_id`),
  ADD CONSTRAINT `product_in_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`pro_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`type`) REFERENCES `type_lookup` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
