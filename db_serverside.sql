-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 06:17 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_serverside`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `product_id`) VALUES
(2, 10),
(0, 13);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `feature_1` varchar(100) DEFAULT NULL,
  `feature_2` varchar(100) DEFAULT NULL,
  `feature_3` varchar(100) DEFAULT NULL,
  `feature_4` varchar(100) DEFAULT NULL,
  `image_1` varchar(100) DEFAULT NULL,
  `image_2` varchar(100) DEFAULT NULL,
  `image_3` varchar(100) DEFAULT NULL,
  `image_4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `description`, `type`, `feature_1`, `feature_2`, `feature_3`, `feature_4`, `image_1`, `image_2`, `image_3`, `image_4`) VALUES
(1, 'GeForce RTX 2080 Ti', 102500, 'Powered by GeForce RTX™ 2080 Ti\r\nIntegrated with 11GB GDDR6 352-bit memory interface\r\nWINDFORCE 3X Cooling System with alternate spinning fans\r\nRGB Fusion 2.0 – synchronize with other AORUS devices\r\nMetal Back Plate\r\n4 Years Warranty (Online registration required).The WINDFORCE 3X cooling system features 3x 82mm unique blade fans, alternate spinning fan, 6 composite copper heat pipes, heat-pipe direct touch and 3D active fan functionality.', 'graphiccard', '1665 MHz in OC mode', '11 GB GDDR6 Memory', 'L=286.5 W=114.5 H=50.2 mm', '2-way NVIDIA NVLINKTM', '1_product_1.png', '1_product_2.png', '1_product_3.png', '1_product_4.png'),
(2, 'AMD Radeon VII', 53000, 'With 16GB of fast HBM2 memory operating at 1TB/s and 13.8 teraflops of computing horsepower on board compared to lesser amounts on the RTX 2080, the Radeon 7 certainly looks like a top performer. However, looking at specifications like these in isolation aren\'t a great predictor of actual performance, as everything from driver overhead to thermal consistency and power delivery will affect the final results. With that in mind, the best thing to do is actually test this new card in as many games.', 'graphiccard', 'Peak Frequency\r\nUp to 1800 MHz', 'Peak Pixel Fill-Rate\r\nUp to 115.26 GP/s', 'Peak Half Precision Compute Performance\r\n27.7 TFLOPs', 'Transistor Count\r\n13.2 B', '2_product_1.png', '2_product_2.jpeg', '2_product_3.png', '2_product_4.jpg'),
(3, 'Radeon RX 590 GAMING 8G', 38000, 'The WINDFORCE 2X cooling system features 3 pure copper composite heat-pipes, heat-pipe direct touch GPU, 90mm unique blade fan design, 3D active fan with LED indicators, stylish metal back plate, together delivering an effective heat dissipation capacity for higher performance at lower temperatures.The cutting edge intuitive interface allows you to tune the clock speeds, voltage, fan performance, and power target in real-time according to your own gaming requirement.', 'graphiccard', 'Core Clock mode 1560 MHz', 'Memory Clock 8000 MHz', 'Memory Size 8 GB', 'I/O Dual-link DVI-D *1 HDMI *1 Display port *3', '3_product_1.png', '3_product_2.png', '3_product_3.png', '3_product_4.png'),
(4, 'GeForce RTX 2060 ', 35000, 'Powered by GeForce RTX™ 2060\r\nIntegrated with 6GB GDDR6 192-bit memory interface\r\nWINDFORCE Stack 3X 100mm Cooling System\r\nAdvanced Copper Back Plate Cooling\r\nRGB Fusion 2.0 – synchronize with other AORUS devices\r\nMetal Back Plate with RGB AORUS LOGO Illumination\r\nBuilt for Extreme Overclocking 8+2 Power Phases\r\n4 Years Warranty (Online registration required). We take care not only GPU but also VRAM and MOSFET, to ensure a stable overclock operation and longer life.', 'graphiccard', 'Core Clock 1845 MHz (Reference card: 1680 MHz)', 'CUDA Cores 1920', 'Memory Bandwidth (GB/sec) 336 GB/s', 'Digital max resolution 7680x4320@60Hz', '4_product_1.png', '4_product_2.png', '4_product_3.png', '4_product_4.png'),
(5, 'Intel Core i9-9900K', 46000, 'This feature may not be available on all computing systems. Please check with the system vendor to determine if your system delivers this feature, or reference the system specifications (motherboard, processor, chipset, power supply, HDD, graphics controller, memory, BIOS, drivers, virtual machine monitor-VMM, platform software, and/or operating system) for feature compatibility. Functionality, performance, and other benefits of this feature may vary depending on system configuration.', 'processor', '8 Cores / 16 Threads', '3.60 GHz up to 5.00 GHz / 16 MB Cache', 'Compatible only with Motherboards based on Intel 300 Series Chipsets', 'Intel UHD Graphics 630', '5_product_1.jpg', '5_product_2.jpg', '5_product_3.jpg', '5_product_4.jpg'),
(6, 'Intel Core i7 9700K', 42000, 'I have my 9700k overclocked at a stable 4.9Ghz across all cores with 1.250 volts on the vcore, but have not had luck being able to hit 5Ghz even at 1.4 volts. I\'m not going to go higher for temperature reasons. Maybe it\'s my chip and the silicon lottery was not in my favor.Temperatures are fairly good for the packaged power. With my H150i Pro 360mm AIO and Thermal Grizzly Kryonaut my CPU will idle around 30 C with a room temp of 23 C.', 'processor', '8 Cores / 8 Threads', '3.60 GHz up to 4.90 GHz / 12 MB Cache', 'Compatible only with Motherboards based on Intel 300 Series Chipsets', 'Intel Optane Memory Supported', '6_product_1.jpg', '6_product_2.jpg', '6_product_3.jpg', '6_product_4.jpg'),
(7, 'AMD Ryzen 2700X', 24000, 'Ryzen is a brand of x64 and x86 microprocessors designed and marketed by AMD (Advanced Micro Devices) for desktop, mobile and embedded platform based on Zen and Zen+ microarchitectures. It consists of central processing units marketed for mainstream, enthusiast and workstation segments and accelerated processing units (APUs) which is marketed for mainstream and entry-level segments and embedded applications.Ryzen was introduced in February 2017 with the first products officially announced during AMD\'s New Horizon summit on December 13, 2016, feature the Zen microarchitecture. The second generation of Ryzen CPUs feature the Zen+ microarchitecture, built with 12 nm process technology and were released on April 19, 2018.', 'processor', 'Processor Speed	4.3 GHz', 'Processor Count	8', 'Computer Memory Type DDR4 SDRAM', 'RAM Size 16 GB', '7_product_1.jpg', '7_product_2.jpg', '7_product_3.jpg', '7_product_4.jpg'),
(8, 'AMD Ryzen 2600X', 22000, 'Ryzen is a brand of x64 and x86 microprocessors designed and marketed by AMD (Advanced Micro Devices) for desktop, mobile and embedded platform based on Zen and Zen+ microarchitectures. It consists of central processing units marketed for mainstream, enthusiast and workstation segments and accelerated processing units (APUs) which is marketed for mainstream and entry-level segments and embedded applications.Ryzen was introduced in February 2017 with the first products officially announced during AMD\'s New Horizon summit on December 13, 2016, feature the Zen microarchitecture. The second generation of Ryzen CPUs feature the Zen+ microarchitecture, built with 12 nm process technology and were released on April 19, 2018.', 'processor', 'Processor Speed	4.2 GHz', 'Processor Count	6', 'Computer Memory Type DDR4 SDRAM', 'Wireless Type 802.11 b/n/ac', '8_product_1.jpg', '8_product_2.jpg', '8_product_3.jpg', '8_product_4.jpg'),
(9, 'Intel Z390 AORUS', 18000, 'The AORUS Core is inspired by the falcon\'s aggressive nature and hunting prowess. The falcon uses its razor sharp talons to swiftly strike down its prey with exceptional efficiency and precision, qualities that are exemplified in the fine details of AORUS design.Z390 AORUS PRO motherboard uses an 12+1 phases digital CPU power design which includes both digital PWM Controller and DrMOS. These 100% digital controller and additional 8+4 Solid-pin CPU Power Connectors offer incredible precision in delivering power to the motherboard\'s most power-hungry and energy-sensitive components, allowing enthusiasts to get the absolute maximum performance from the new 8-core 9th Gen Intel® Core™ processors.', 'motherboard', 'Dual Channel Non-ECC Unbuffered DDR4, 4 DIMMs', 'Intel Optane Memory Ready', '12+1 Phases Digital VRM Solution with DrMOS', 'Advanced Thermal Design with Multi-cuts Heatsinks and Heatpipe', '9_product_1.png', '9_product_2.png', '9_product_3.png', '9_product_4.png'),
(10, 'AMD B450 AORUS', 15000, 'AMD introduces the latest Ryzen™ 2000 series processors to provide the computing power for gaming need. GIGABYTE\'s 400-series motherboards perfectly fit the latest AMD Ryzen™ 2000 series processors\' computing performance with more features and more control. Users can enjoy the benefits brought by AMD Ryzen™ 2000 series processors.GIGABYTE 400-series maximize your PC\'s potential with AMD StoreMI technology. StoreMI accelerates traditional storage devices to reduce boot times and enhance the overall user experience. This easy-to-use utility combines the speed of SSDs with the high capacity of HDDs into a single drive, enhances the read/write speeds of the device to match that of SSDs, bolsters data performance for incredible value, and transforms the everyday PC to a performance driven system.', 'motherboard', 'Supports AMD Ryzen 2nd Generation', 'Dual Channel Non-ECC Unbuffered DDR4', 'HDMI, DVI-D Ports for Multiple Display', 'High Quality Audio Capacitors and Audio Noise Guard with LED Trace Path Lighting', '10_product_1.png', '10_product_2.png', '10_product_3.png', '10_product_4.png'),
(11, 'Intel Z390 GAMING', 14000, 'GIGABYTE GAMING series motherboards use a 10*+2 phase PWM + Lower RDS(on) MOSFETs design to support the latest 8-Core Intel® Core™ CPUs by offering incredible precision in delivering power to the motherboard\'s most power- hungry and energy-sensitive components as well as delivering enhanced system performance and ultimate hardware scalability.Multi-graphics configuration offers better graphics performance for gaming enthusiasts who demand the highest frame rates without compromising on resolution.To create a seamless VR experience GIGABYTE GAMING Motherboards offer the best features to make your virtual reality feel like your actual reality. With technologies such as NVMe support via M.2 or U.2 and a one piece metal shielding to brace for heavier discrete graphics cards it\'s obvious that GIGABYTE GAMING has the tools you need to start your journey in VR.', 'motherboard', 'Supports 9th and 8th Gen Intel Core Processors', 'Dual Channel Non-ECC Unbuffered DDR4', 'New 10+2 Phases Digital PWM Design', 'Ultra Durable 25KV ESD and 15KV Surge LAN Protection', '11_product_1.png', '11_product_2.png', '11_product_3.png', '11_product_4.png'),
(12, 'Intel Z390 M', 11000, 'With Smart Fan 5 users can ensure that their gaming PC can maintain its performance while staying cool. Smart Fan 5 allows users to interchange their fan headers to reflect different thermal sensors at different locations on the motherboard. Not only that, with Smart Fan 5 more hybrid fan headers that support both PWM and Voltage mode fans have been introduced to make the motherboard more liquid cooling friendly.Achieve fan silence. With Fan Stop, map any fan to stop completely when temperatures drop below a specified threshold. Which fan stops, based on readings from which sensor, and at what temperature—all of it can be customized to your liking.A network traffic management application which helps to improve network latency and maintain low ping times to deliver better responsiveness in crowded LAN environments.', 'motherboard', 'Supports 9th and 8th Gen Intel Core Processors', 'Dual Channel Non-ECC Unbuffered DDR4', 'Advanced Thermal Design', 'Dual NVMe PCIe Gen3 x4 22110/2280 M.2 Connectors', '12_product_1.png', '12_product_2.png', '12_product_3.png', '12_product_4.png'),
(13, 'Alienware 17', 224999, 'Stay in the game: Built with premium materials and the latest components, the Alienware 17 is the ultimate evolution in portable gaming technology. Utilizing magnesium alloy for rigidity, copper for better performance and steel for tactile comfort, it features a high-quality design for high-performance gaming and with support from NVIDIA GeForce GTX 1060. Designed For VR. Dive into mind-bending virtual reality experiences with a VR-ready system that passes the Oculus Ready and Vive Optimized certifications. Powered by NVIDIA VR Works technology, a new level of presence is achieved by bringing physically realistic visuals, sound, touch interactions, and simulated environments to virtual reality. And with NVIDIA GeForce 10-series graphics, the Alienware 17 goes beyond what\'s expected.Tech that gamers need: The Alienware 17 has been upgraded to give gamers the tools they need to be the best. Killer Wireless', 'laptop', '7th Generation Intel Core i7-7700HQ', '8GB DDR4 at 2400MHz included', '1TB 7200RPM SATA HDD', '17.3 inch FHD (1920 x 1080) IPS Anti-Glare 300-nits Display', '13_product_1.jpg', '13_product_2.jpg', '13_product_3.jpg', '13_product_4.jpg'),
(14, 'Aorus X7 DT v8', 200000, 'The flowing sculpted lines and quality matte black are scented with understated luxury without losing its original aggression. The aerodynamic streamlines connect expanded vents, giving the ultimate gaming flagship a breath of speed.Squeezing such smashing performance into a slim chassis takes tremendous expertise and the best thermal know-how. Own this ultimate gaming flagship to find out the top-tier craftsmanship.The next upgrade is here, introducing the all new Intel® Core™ i7-8850H . Moving up from the previous Kaby Lake architecture CPU’s, the all new Coffee Lake architecture increases the performance with a whopping additional 40% in multitasking performance, with better energy efficiency and processing power that lets you steam, record and play at the same time without worries. The wait is over. Introducing the Intel® Core™ i7-8850H with AORUS v8. The greatest meets the greatest.It is mind blowing to know that the insanity does not stop here.', 'laptop', '8th Gen. Intel Core i7-8850H', 'NVIDIA GeForce GTX 1080 GDDR5X 8GB', 'DDR4 2666Hz: Up to 64GB', 'USB 3.1 Type-C: 10Gbps', '14_product_1.png', '14_product_2.png', '14_product_3.png', '14_product_4.png'),
(15, 'Asus ROG Zephyrus', 409999, 'ROG Zephyrus is a revolutionary gaming laptop born from ROG’s persistent dedication to innovation. Despite being thinner than all previous ROG laptops, it has the hardware to rival high-end gaming desktops: NVIDIA® GeForce® GTX 1080 graphics with Max-Q design, an 8th Gen Intel® Core™ i7 processor, a 144Hz IPS panel with an ultra-fast 3ms response time, and Windows 10. ROG slimmed the body to a mere 16.9-17.9mm while maintaining powerful cooling and unbeatable acoustic efficiency thanks to a clever new air-flow design: Active Aerodynamic System. The sleek chassis also includes an RGB keyboard that will feel familiar to gamers who typically play on desktop PCs.ROG Zephyrus takes thin-and-light gaming laptops to a whole new level. It has a slim profile just 16.9-17.9mm thin and weighs only 2.2kg, but that doesn’t stop it from packing the latest 8th Gen Intel® Core™ i7 processor and NVIDIA® GeForce® GTX 1080 graphics with Max-Q design', 'laptop', 'Processor type Core i7', 'Processor speed 2.80 GHz', 'Processor count 4', 'Computer memory type: DDR4 SDRAM 16GB, Ultra-portable gaming laptop', '15_product_1.jpg', '15_product_2.jpg', '15_product_3.jpg', '15_product_4.jpg'),
(16, 'Acer Predator Helios 300', 139999, 'This is a Brand New, Unopened Retail Package. The outer box contains the Laptop and accessories. The Laptop is protected inside an inner box which you see pictured from a separate unit (not sold in this listing) that was opened for inspection. The product and accessories have never been used or touched since factory assembly. The laptop is well protected by it\'s box and only the outer box has been damaged. Take advantage of the savings and buy it from us to get the greatest savings!\r\nStyle:Laptop Acer Predator Helios 300 PH315-51-78NP Gaming Laptop comes with these high level specs: 8th Generation Intel Core i7-8750H Processor 2.2GHz with Turbo Boost Technology up to 4.1GHz (9MB Smart cache), Windows 10 Home, 15.6\" Full HD (1920 x 1080) widescreen LED-backlit IPS display, 144Hz Refresh Rate, 300nit Brightness, 16:9 aspect ratio, 72% NTSC, NVIDIA GeForce GTX 1060 Overclockable Graphics with 6 GB.', 'laptop', 'NVIDIA GeForce GTX 1060 Overclockable ', '15.6\" Full HD LED-backlit IPS display ', '16GB DDR4 2666MHz DRAM Memory & 256GB PCIe NVMe SSD', 'PredatorSense gaming control panel, providing customization', '16_product_1.jpg', '16_product_2.jpg', '16_product_3.jpg', '16_product_4.jpg'),
(17, 'Razer BlackWidow', 6999, 'Protective housing to keep dirt and debris away from sensitive parts.Keys with optimized tactile feel.Gold plated contact points to ensure you never miss a key stroke and high quality spring with an operating force of 50 G.80 million keystroke life span.Individually backlit keys with dynamic lighting effects.Razer Synapse enabled.10 key roll-over anti-ghosting.Fully programmable keys with on-the-fly macro recording.Gaming mode option.Audio-out/mic-in jacks.', 'accessories', 'Protective housing to keep dirt ', 'Keys with optimized tactile feel', 'Gold plated contact points to ensure you never miss', '80 million keystroke life span', '17_product_1.jpg', '17_product_2.jpg', '17_product_3.jpg', '17_product_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review` varchar(500) NOT NULL,
  `rating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`user_id`, `product_id`, `review`, `rating`) VALUES
(1, 1, 'very noice', '4'),
(2, 1, 'my review', '4'),
(2, 2, 'Nice', '4'),
(2, 2, 'Nice', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `gender`, `contact`, `type`, `password`, `created_at`) VALUES
(1, 'Admin', 'admin@email.com', 'MALE', '9876543210', 'admin', '3ce767854c5ef46dce6692817d2b4761', '2019-04-24'),
(2, 'Demo', 'user@email.com', 'FEMALE', '9876543210', 'user', '2d441d342037a2131b4a79768509bab2', '2019-04-24'),
(3, 'Suraj', 'suraj@email.com', 'MALE', '9876543210', 'user', '8dcd3f54f9943c49d24e831fadf177d3', '2019-04-24'),
(4, 'Rahul', 'rahul@email.com', 'MALE', '9876543210', 'user', '0a19010bd972c3146e399dba9c1fa8f6', '2019-04-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
