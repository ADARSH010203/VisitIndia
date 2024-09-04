--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_id` int(100) NOT NULL,
  `Cat_name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_id`, `Cat_name`) VALUES
(1, 'Family Tours'),
(2, 'Religious Tours'),
(3, 'Adventure Tours'),
(4, 'Special Event Tours'),
(5, 'National Parks'),
(6, 'Themed Vacations'),
(7, 'Small Group Tours');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phno` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Enquiryid` int(50) NOT NULL,
  `Packageid` int(50) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Mobileno` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoofDays` int(50) NOT NULL,
  `Child` int(50) NOT NULL,
  `Adults` int(50) NOT NULL,
  `Message` varchar(900) NOT NULL,
  `Statusfield` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Packid` int(200) NOT NULL,
  `Packname` varchar(1000) NOT NULL,
  `Category` int(200) NOT NULL,
  `Subcategory` int(200) NOT NULL,
  `Packprice` int(200) NOT NULL,
  `Pic1` varchar(8000) NOT NULL,
  `Pic2` varchar(8000) NOT NULL,
  `Pic3` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Packid`, `Packname`, `Category`, `Subcategory`, `Packprice`, `Pic1`, `Pic2`, `Pic3`, `Detail`) VALUES
(1, 'tourism place in Goa', 1, 1, 20000, '24.jpeg', '26.jpeg', '25.jpeg', 'Goa is known for its beautiful beaches, vibrant nightlife, and Portuguese heritage. Families can enjoy sunbathing, water sports, and exploring the historic churches and forts.'),
(2,'kerala',1, 2, 10000, '26.jpeg', '27.jpeg', '28.jpeg', 'Kerala  backwaters offer a tranquil experience amidst serene landscapes. Families can enjoy houseboat rides, visit quaint villages, and indulge in authentic Kerala cuisine.'),
(3, 'Simla  ', 1, 5, 20000, '29.jpeg', '30.jpeg', '31.jpeg', ' Shimla is a charming hill station known for its colonial architecture, toy train rides, and panoramic views of the Himalayas. Families can explore the Mall Road, visit Jakhu Temple, and enjoy horse riding'),
(4, 'Jaipur', 1, 4, 400000, '32.jpeg', '33.jpeg', '34.jpeg', 'Jaipur, the capital of Rajasthan, is famous for its vibrant culture, majestic forts, and colorful bazaars. Families can visit attractions like Amer Fort, City Palace, and Hawa Mahal.'),
(5, 'daljeering', 1, 3, 400000, '35.jpeg', '36.jpeg', '37.jpeg', '  Darjeeling is renowned for its tea plantations, Himalayan views, and toy train rides. Families can visit Tiger Hill for sunrise views, enjoy a ride on the Darjeeling Himalayan Railway, and explore the local markets.'),
(6, 'Varansi', 2, 6, 3000, '38.jpeg', '39.jpeg', '40.jpeg', 'Varanasi is one of the oldest cities in the world and a major religious hub for Hindus. Visitors can experience Ganga Aarti, take a boat ride on the Ganges, and explore ancient temples'),
(7, 'rishikesh', 2, 7, 500000, '41.jpeg', '42.jpeg', '43.jpeg', 'Rishikesh is renowned for its ashrams, yoga retreats, and spiritual vibe. Visitors can practice yoga, meditate by the Ganges, and indulge in adventure activities like river rafting.'),
(8, 'Tirupati', 2, 8, 300000, '46.jpeg', '45.jpeg', '44.jpeg', ' Tirupati is home to the famous Venkateswara Temple, a major pilgrimage destination for Hindus. Visitors can participate in temple rituals, seek blessings, and explore the surrounding hills.'),
(9, 'Haridwar', 2, 9, 700000, '47.jpeg', '48.jpeg', '49.jpeg', 'Haridwar is known for its sacred ghats and Ganga Aarti ceremonies. Visitors can take a dip in the holy Ganges, attend evening aarti at Har Ki Pauri, and visit nearby temples.'),
(10, 'Amritsar', 2, 10, 1200000, '50.jpeg', '51.jpeg', '52.jpeg', 'Amritsar is home to the iconic Golden Temple, a spiritual and cultural landmark for Sikhs. Visitors can explore the temple complex, partake in langar (community kitchen), and visit Jallianwala Bagh.'),
(11, 'Bodh Gaya', 2, 11, 500000, '53.jpeg', '54.jpeg', '55.jpeg', 'Bodh Gaya is where Buddha attained enlightenment under the Bodhi Tree. Visitors can visit the Mahabodhi Temple, meditate at the Bodhi Tree, and explore Buddhist monasteries.'),
(12, ' Hampi', 7, 12, 10000, '56.jpeg', '57.jpeg', '58.jpeg', ' Hampi is a UNESCO World Heritage Site known for its ancient ruins, temples, and boulder-strewn landscapes. Visitors can explore the Vijayanagara ruins, visit the Virupaksha Temple, and enjoy sunset views from Hemakuta Hill.'),
(13, 'Udaipur', 7, 13, 900000, '59.jpeg', '60.jpeg', '61.jpeg', 'Udaipur, often called the "Venice of the East," is famous for its picturesque lakes, palaces, and colorful streets. Visitors can explore the City Palace, take a boat ride on Lake Pichola, and visit the Jag Mandir Palace.'),
(14, 'Ranthambore National park', 7, 14, 700000, '62.jpeg', '63.jpeg', '64.jpeg', 'Ranthambore National Park is one of the largest national parks in India and is known for its tiger population. Visitors can go on wildlife safaris to spot tigers, leopards, and other wildlife species. '),
(15, 'Manali', 3, 16, 12000, '65.jpeg', '66.jpeg', '67.jpeg', 'Manali is a popular hill station in Himachal Pradesh known for its adventure sports. Visitors can go paragliding, trekking, river rafting, and skiing (in winter) in the Solang Valley.'),
(16, 'Leh-Ladakh', 3, 17, 400000, '68.jpeg', '69.jpeg', '70.jpeg', 'Leh-Ladakh is a high-altitude region known for its stunning landscapes and trekking trails. Visitors can trek to remote Himalayan villages, explore monasteries, and marvel at the surreal beauty of Pangong Lake.'),
(17, ' Rishikesh', 4, 20, 80000, '73.jpeg', '71.jpeg', '72.jpeg', 'Rishikesh offers thrilling river rafting experiences on the Ganges River. Visitors can enjoy rafting through rapids of varying difficulty levels, surrounded by scenic views of the Himalayas.'),
(18, 'Pushkar Camel Fair', 4, 19, 600000, '75.jpeg', '74.jpeg','76', 'The Pushkar Camel Fair is an annual event held in the town of Pushkar, Rajasthan. It is one of the largest camel fairs in the world, featuring camel trading, cultural performances, competitions, and religious rituals.'),
(19, 'Holi Festival in Mathura and Vrindavan', 4, 18, 600000, '78.jpeg', '77.jpeg', '79.jpeg', 'Mathura and Vrindavan are renowned for their vibrant Holi celebrations, attracting visitors from all over the world. The festival is marked by colorful processions, traditional music, dance, and the throwing of colored powders'),
(20, 'Diwali in Ayodhya', 6, 23, 20000, '82.jpeg', '81.jpeg', '80.jpeg', 'Diwali, the festival of lights, is celebrated with great fervor in Jaipur, Rajasthan. The city dazzles with illuminated buildings, fireworks, and cultural events. Visitors can witness the lighting of diyas (lamps), exchange sweets, and enjoy the festive atmosphere.'),
(21, 'Dharamshala  ', 6, 22, 100000, '85.jpeg', '84.jpeg', '83.jpeg', 'Dharamshala, located in the Indian state of Himachal Pradesh, is a popular destination for meditation retreats and spiritual exploration. Visitors can participate in yoga sessions, meditation classes, and mindfulness retreats amidst the serene Himalayan surroundings.'),
(22, 'Munar', 6, 21, 100000, '86.jpeg', '87.jpeg', '88.jpeg', ' Munnar is a hill station in Kerala known for its sprawling tea plantations, scenic landscapes, and cool climate. Visitors can explore tea estates, trek through lush greenery, visit waterfalls, and enjoy panoramic views of the Western Ghats.'),
(23, 'Jaisalmer', 5, 26, 3000, '91.jpeg', '90.jpeg', '89.jpeg', 'Jaisalmer, known as the "Golden City," offers desert safari experiences amidst the vast Thar Desert. Visitors can ride camels, camp under the stars, and experience the nomadic lifestyle of the desert communities.'),
(24, 'Best parks in kolkata', 5, 25, 4000, '92.jpeg', '93.jpeg', '94.jpeg', 'Jim Corbett National Park is India  oldest national park and is located in Uttarakhand. It is known for its diverse wildlife, including Bengal tigers, elephants, and leopards. Visitors can enjoy wildlife safaris, birdwatching, and nature walks.'),
(25, 'Best parks in Rajasthan', 5, 24, 2000, '95.jpeg', '96.jpeg', '97.jpeg', 'This tiger reserve, situated in the Palakkad district, is known for its rich biodiversity and conservation efforts. Its an excellent place to spot tigers, leopards, elephants, and other wildlife species.'),
(26, 'Rajasthan National parks', 3, 15, 100000, '100.png', '99.jpeg', '98.jpeg', 'Kaziranga National Park is a UNESCO World Heritage Site located in Assam. It is famous for its population of Indian one-horned rhinoceroses, along with tigers, elephants, and other wildlife species. Visitors can go on elephant safaris, jeep safaris, and birdwatching tours.');
-- --------------------------------------------------------
--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `Subcatid` int(200) NOT NULL,
  `Subcatname` varchar(1000) NOT NULL,
  `Catid` int(200) NOT NULL,
  `Pic` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Subcatid`, `Subcatname`, `Catid`, `Pic`, `Detail`) VALUES
(1, 'Family holiday in Goa ', 1, '1.jpeg', 'Known for its pristine beaches, vibrant nightlife, and Portuguese heritage architecture.'),
(2, 'Family holiday to Kerala   ', 1, '4.jpg', 'Famous for its tranquil backwaters, lush greenery, and Ayurvedic treatments.'),
(3, 'Canada family  to simpla', 1, '6.jpg', 'A charming hill station offering panoramic views, colonial architecture, and adventure activities'),
(4, 'Family holiday in jaipur ', 1, '131.jpeg', 'Rich in history and culture, with majestic forts, palaces, and bustling markets.'),
(5, 'Family holiday in daljeeling ', 1, '8.jpeg', 'Renowned for its tea plantations, stunning views of the Himalayas, and the Darjeeling Himalayan Railway.'),
(6, 'Religious Tours in Varanasi (Ganges River) ', 2, '9.jpg', 'One of the oldest cities in the world, known for its ghats, temples, and spiritual significance along the Ganges River.'),
(7, 'Religious Tours in Rishikesh (Yoga Capital)', 2, '10.jpeg', ' A spiritual hub offering yoga, meditation, and adventure activities on the banks of the Ganges.'),
(8, 'Religious Tours in Tirupati (Balaji Temple)', 2, '11.jpg', 'Home to the sacred Sri Venkateswara Temple, visited by millions of pilgrims each year.'),
(9, 'Religious tours in Haridwar (Ganga Aarti)', 2, '14.jpg', 'A holy city where the Ganges River exits the Himalayas, known for its Ganga Aarti ceremonies.'),
(10, 'Religious Tours in Amritsar (Golden Temple)', 2, '15.jpg', 'The holiest Sikh pilgrimage site, famous for its Golden Temple and rich Sikh heritage.'),
(11, 'Religious Tours in Bodh Gaya (Mahabodhi Temple)', 2, '16.jpg', '  Where Buddha attained enlightenment, featuring the Mahabodhi Temple and other significant Buddhist sites.'),
(12, 'Small Group Tours in hampi(historians place)', 7, '17.jpg', 'UNESCO World Heritage Site, showcasing ancient ruins of the Vijayanagara Empire.'),
(13, 'Small Group Tours in Udaipur (City of Lakes)', 7, '18.jpg', 'Known for its picturesque lakes, palaces, and vibrant culture.'),
(14, 'Small Group Tours in Ranthambore National Park (Wildlife Safari)', 7, '19.jpg', 'Famous for its tiger population and diverse wildlife, offering thrilling safari experiences.'),
(15, 'Adventure Tours in Manali (Paragliding)', 3, '20.jpg', 'A hub for adventure sports, offering paragliding, skiing, and trekking amidst stunning landscapes.'),
(16, 'Adventure Tours in Leh-Ladakh (Trekking)', 3, '71.jpg', 'Known for its rugged terrain, high altitude treks, and Buddhist monasteries.'),
(17, 'Adventure Tours in Rishikesh (River Rafting)', 3, '74.jpeg', 'Offers exhilarating white-water rafting experiences on the Ganges River.'),
(18, 'Special Event Tours in  Pushkar Camel Fair', 4, '78.jpg', 'Annual camel and livestock fair, featuring cultural events, competitions, and religious rituals.'),
(19, 'Special Event Tours in Holi Festival in Mathura and Vrindavan', 4, '79.jpeg', 'Celebrated with vibrant colors and traditions in the birthplaces of Lord Krishna.'),
(20, 'Special Event Tours in Diwali in Jaipur (Lantern Festival)', 4, '80.jpg', 'Jaipur is streets come alive with lights, fireworks, and cultural festivities during Diwali.'),
(21, 'Themed Vacations for Meditation Retreat in Dharamshala', 6, '90.jpg', ' Offers serene surroundings, meditation sessions, and spiritual teachings amidst the Himalayas.'),
(22, 'solo vacation Munnar(Tea Gardens)', 6, '91.jpg', 'Known for its lush tea estates, scenic beauty, and trekking opportunities in the Western Ghats.'),
(23, 'Star Wars Themed Jaisalmer (Desert Safari)', 6, '92.jpg', 'Offers desert safaris, camel rides, and a glimpse into the desert lifestyle amidst the golden sands.'),
(24, 'National Parks in kolkata', 5, '103.jpg', 'India is oldest national park, known for its Bengal tigers and diverse flora and fauna.'),
(25, 'National Parks in Kerala', 5, '104.jpg', ' UNESCO World Heritage Site, famed for its population of Indian rhinoceroses and other wildlife species.'),
(26, 'National Parks in Rajasthan', 5, '105.jpeg', 'Rajasthan is renowned for its diverse wildlife, including Bengal tigers, amidst ancient ruins, offering a captivating safari experience.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Pwd`, `Typeofuser`) VALUES
('xiroza','xiroza','Admin'),
('priyanka','priyanka','Admin'),
('adarsh', '1234', 'Admin');
--
-- Indexes for dumped tables
--
CREATE table register(
  Username varchar(200),
  email varchar (22),
  password varchar(20)
);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`Enquiryid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Packid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`Subcatid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `Enquiryid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Packid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `Subcatid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
