-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 06:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_explorer_db`
--
CREATE DATABASE IF NOT EXISTS `travel_explorer_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `travel_explorer_db`;

-- --------------------------------------------------------

--
-- Table structure for table `contacts_form`
--

DROP TABLE IF EXISTS `contacts_form`;
CREATE TABLE `contacts_form` (
  `id` int(6) UNSIGNED NOT NULL,
  `contact_name` varchar(30) NOT NULL,
  `contact_country` varchar(30) NOT NULL,
  `contact_email` varchar(60) NOT NULL,
  `contact_feadback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts_form`
--

INSERT INTO `contacts_form` (`id`, `contact_name`, `contact_country`, `contact_email`, `contact_feadback`) VALUES
(1, 'Maryann ', 'canada', 'maryann@yahoo.com', 'Good'),
(2, 'Mark', 'india', 'Mark@gmail.com', 'very good'),
(3, 'Smith', 'paris', 'smith@yahoo.com', ''),
(4, 'Meilika', 'canada', 'meilika@yahoo.com', 'so far so good'),
(5, 'Bill', 'canada', 'bill@yahoo.com', ''),
(6, 'John', 'rome', 'john@yahoo.com', 'good'),
(7, 'Sara', 'hong kong', 'sara@gmail.com', 'so far so good'),
(8, 'martin', 'paris', 'martin@yahoo.com', 'good'),
(9, 'mary', 'canada', 'mary@yahoo.com', 'so far so good'),
(10, 'Jay', 'india', 'jay@gmail.com', 'very good'),
(11, 'George', 'usa', 'george@yahoo.com', 'good'),
(12, 'Ida', 'hong kong', 'ida@yahoo.com', 'good'),
(13, 'Marly', 'usa', 'marly@yahoo.com', 'good'),
(0, 'KHYATI HIRALAL DHIVER', 'canada', 'jinnydhiver@gmail.com', 'asdsadsdasdsadsadsaa'),
(0, 'Khyati Dhiver', 'india', 'jinnydhiver@gmail.com', 'edftbgyhumjkl;');

-- --------------------------------------------------------

--
-- Table structure for table `custom_trips`
--

DROP TABLE IF EXISTS `custom_trips`;
CREATE TABLE `custom_trips` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `des_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `custom_trips_sites`
--

DROP TABLE IF EXISTS `custom_trips_sites`;
CREATE TABLE `custom_trips_sites` (
  `trip_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `des_name` varchar(20) NOT NULL,
  `des_distance` decimal(6,2) NOT NULL,
  `des_rating` decimal(2,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `des_name`, `des_distance`, `des_rating`) VALUES
(1, 'Vancouver', '4361.90', '4.1'),
(2, 'Calgary', '3394.90', '3.8'),
(3, 'Niagara Falls', '128.20', '4.7'),
(4, 'Toronto', '0.00', '4.5'),
(5, 'Montreal', '540.50', '4.3'),
(14, 'vapi', '600.00', '4.5');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `hotel_rating` decimal(5,2) NOT NULL,
  `hotel_price` int(11) NOT NULL,
  `des_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `hotel_name`, `hotel_rating`, `hotel_price`, `des_id`) VALUES
(1, 'Hilton Vancouver Downtown', '4.50', 318, 1),
(2, 'Windsor Guest House', '4.40', 157, 1),
(3, 'River Rock Casino Resort', '4.00', 251, 1),
(4, 'Droplet Teardrop Trailer', '4.50', 114, 1),
(5, 'Hyatt Regency Vancouver', '4.40', 297, 1),
(6, 'Residence Inn by Marriott Calgary Downtown', '4.30', 106, 2),
(7, 'Sandman Signature Calgary Downtown Hotel', '3.60', 114, 2),
(8, 'Radisson Hotel', '4.00', 122, 2),
(9, 'Hotel Clique', '4.50', 119, 2),
(10, 'Hotel Fairmont Palliser', '4.50', 205, 2),
(11, 'Embassy suits by Hilton', '3.80', 289, 3),
(12, 'Double tree Resort', '4.20', 215, 3),
(13, 'Sheraton Fallsview Hotel ', '4.10', 236, 3),
(14, 'Niagara Falls Marriott on the falls', '4.30', 224, 3),
(15, 'Sterling Inn & spa', '4.60', 254, 3),
(16, 'Embassy suits by Hilton Toronto', '4.30', 188, 4),
(17, 'Hilton Toronto', '4.30', 252, 4),
(18, 'Sheraton Toronto Hotel', '4.30', 218, 4),
(19, 'Fairmont Royal york', '4.50', 205, 4),
(20, 'King Blue Hotel Toronto', '4.50', 204, 4),
(21, 'Hampton Inn by hilton Montreal Downtown', '4.60', 200, 5),
(22, 'Auberge de la Fontaine', '4.40', 133, 5),
(23, 'Hotel Faubourg Montreal', '3.90', 95, 5),
(24, 'David Hotel', '5.00', 152, 5),
(25, 'Empire Suites', '3.70', 71, 5);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `login_username` varchar(50) NOT NULL,
  `login_password` varchar(50) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `login_username`, `login_password`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'khyati_17', 'khyati1797', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

DROP TABLE IF EXISTS `login_form`;
CREATE TABLE `login_form` (
  `id` int(6) UNSIGNED NOT NULL,
  `login_username` varchar(30) NOT NULL,
  `login_password` varchar(30) NOT NULL,
  `remember_me` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

DROP TABLE IF EXISTS `sites`;
CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `site_description` varchar(1000) NOT NULL,
  `site_rating` decimal(5,1) NOT NULL,
  `site_price` int(11) NOT NULL,
  `des_id` int(11) NOT NULL,
  `img_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `site_name`, `site_description`, `site_rating`, `site_price`, `des_id`, `img_url`) VALUES
(1, 'Stanley Park', 'Stanley Park is a 405-hectare public park in British Columbia, Canada that makes up the northwestern half of Vancouver\'s Downtown Peninsula, surrounded by waters of Burrard Inlet and English Bay. The park borders the neighbourhoods of West End and Coal Harbour to its southeast, and is connected to the North Shore via the Lions Gate Bridge. The historic lighthouse on Brockton Point marks the park\'s easternmost point. While it is not the largest of its kind, Stanley Park is about one-fifth larger than New York City\'s 340-hectare Central Park and almost half the size of London\'s 960-hectare Richmond Park. Stanley Park has a long history. The land was originally used by Indigenous peoples for thousands of years before British Columbia was colonized by the British during the 1858 Fraser Canyon Gold Rush and was one of the first areas to be explored in the city. For many years after colonization, the future park with its abundant resources would also be home to non-Indigenous settlers. The l', '4.8', 139, 1, 'images/1_StanleyPark/Image_1.jpg'),
(2, 'Vancouver Aquarium', 'The Vancouver Aquarium is a public aquarium located in Stanley Park in Vancouver, British Columbia, Canada. In addition to being a major tourist attraction for Vancouver, the aquarium is a centre for marine research, ocean literacy education, conservation and marine animal rehabilitation. The Vancouver Aquarium was one of the first facilities to incorporate professional naturalists into the galleries to interpret animal behaviours. Prior to this, at the London Zoo Fish House, naturalists James S. Bowerbank, Ray Lankester, David W. Mitchell and Philip H. Gosse had regularly held open house events, but the Vancouver Aquarium was the first to employ educational naturalists on a full-time basis. Aquarium research projects extend worldwide, and include marine mammal rescue and rehabilitation. On August 9, 2010 Prime Minister Stephen Harper and B.C. Premier Gordon Campbell announced capital funding of up to $15 million. The province would donate $10 million in funding over the next three yea', '4.5', 42, 1, 'images/Vancouver/aquarium.jpg'),
(3, 'Kitsilano Beach', 'Kitsilano Beach is one of the most popular beaches in Vancouver, especially in the warm summer months. Located at the north edge of the Kitsilano neighbourhood, the beach faces out onto English Bay. The beach is home to the longest swimming pool in Canada, the salt-water outdoor Kitsilano Pool, operated by the Vancouver Park Board and open annually from May to September. Toward the northern edge of the beach is a playground and a number of beach volleyball courts. In the Squamish language, it is called Xwupxpayʼem, which translates to having red cedar. In 1901, the beach was being transformed for future inclusion in a city park system. The whole approach to the beach will be cleared, graded and seeded, and the beach itself cleared of what rocks and driftwood there is to annoy bathers, and the magnificent property will be made available for the people. Vancouver residents knew the area as Greer\'s Beach, after settler Sam Greer who pre-empted 160 acres on the waterfront in 1882 to farm t', '4.6', 0, 1, 'images/Kitsilano/kitsilano.jpg'),
(4, 'Contempory Art Gallery', 'The Contemporary Art Gallery is a non-profit public contemporary art gallery in downtown Vancouver. The CAG exhibits local, national, and international artists, primarily featuring emerging local artists producing Canadian contemporary art. It has exhibited work by many of Vancouver\'s most acclaimed artists, including Stan Douglas, Ian Wallace, Rodney Graham, Liz Magor, and Brian Jungen, and it continues to feature local artists such as Damian Moppett, Shannon Oksanen, Elspeth Pratt, Myfanwy MacLeod, Krista Belle Stewart and many others. International artists who have had exhibitions at the CAG include Dan Graham, Christopher Williams, Rachel Harrison, Hans-Peter Feldmann and Ceal Floyer. Other notable people that have curated or written for the CAG include Douglas Coupland, Beatriz Colomina, Roy Arden, and John Welchman. The gallery offers free admission to all visitors.', '3.9', 0, 1, 'images/Contempory/contempory.jpg'),
(5, 'Granville Island', 'Granville Island is a peninsula and shopping district in Vancouver, British Columbia, Canada. It is located across False Creek from Downtown Vancouver under the south end of the Granville Street Bridge. The peninsula was once an industrial manufacturing area, but today it is a hotspot for Vancouver tourism and entertainment. Some Vancouver based tour companies, such as Discover Vancouver Tours and Vancity Tours, offer stops at Granville Island. The area was named after Granville Leveson-Gower, 2nd Earl Granville. The peninsula is home to 275 businesses and facilities that employ more than 2,500 people and generates more than $215 million in economic activity each year. Granville Island provides amenities such as a large public market, an extensive marina, a hotel, Arts Umbrella, False Creek Community Centre, various performing arts theatres including Vancouver\'s only professional improvisational theatre company Vancouver Theatresports League, the Arts Club Theatre Company and Carousel ', '4.6', 323, 1, 'images/Granville/granville.jpg'),
(6, 'Calgary Zoo', 'The Calgary Zoo is located in Bridgeland, Calgary, Alberta, Canada, just east of the city\'s downtown and adjacent to the Inglewood and East Village neighborhoods. It is accessible via Calgary\'s C-Train light rail system, by car via Memorial Drive, and by bicycle and footpath via the Bow River pathway. A large portion of the zoo is located on St. George\'s Island in the Bow River. The zoo is operated by the Calgary Zoological Society, an independent not-for-profit organization that is Alberta\'s oldest registered charity. The AZA, WAZA, and CAZA accredited zoo was among the first in Canada to be accredited by all three associations. It is home to over 1,000 animals, excluding individual fish and insects, and 272 different species. The 120-acre zoo is organized by into seven distinct zones: Destination Africa, Canadian Wilds, Penguin Plunge, Dorothy Harvie Botanical Gardens and ENMAX Conservatory, TransAlta Rainforest, Eurasia, and Prehistoric Park. The zoo is open every day except for Chr', '4.6', 30, 2, 'images/Calgary/calgary.jpeg'),
(7, 'Banff National Park', 'Banff National Park is Canada\'s oldest national park, established in 1885. Located in Alberta\'s Rocky Mountains, 110–180 kilometres west of Calgary, Banff encompasses 6,641 square kilometres of mountainous terrain, with many glaciers and ice fields, dense coniferous forest, and alpine landscapes. The Icefields Parkway extends from Lake Louise, connecting to Jasper National Park in the north. Provincial forests and Yoho National Park are neighbours to the west, while Kootenay National Park is located to the south and Kananaskis Country to the southeast. The main commercial centre of the park is the town of Banff, in the Bow River valley. The Canadian Pacific Railway was instrumental in Banff\'s early years, building the Banff Springs Hotel and Chateau Lake Louise, and attracting tourists through extensive advertising. In the early 20th century, roads were built in Banff, at times by war internees from World War I, and through Great Depression-era public works projects. Since the 1960s, p', '4.8', 11, 2, 'images/Calgary/banff.jpg'),
(8, 'Calgary Tower', 'The Calgary Tower is a 190.8-meter free standing observation tower in the downtown core of Calgary, Alberta, Canada. Originally called the Husky Tower, it was conceived as a joint venture between Marathon Realty Company Limited and Husky Oil as part of an urban renewal plan and to celebrate Canada\'s centennial of 1967. The tower was built at a cost of CA$3,500,000 and weighs approximately 10,884 tonnes, of which 60% is below ground. It opened to the public on June 30, 1968 as the tallest structure in Calgary, and the tallest in Canada outside Toronto. It was renamed the Calgary Tower in 1971. The building was a founding member of the World Federation of Great Towers.', '4.4', 19, 2, 'images/Calgary/tower.jpg'),
(9, 'Fort Calgary', 'Fort Calgary was a North-West Mounted Police outpost at the confluence of the Bow and Elbow rivers in present day Calgary, Alberta, Canada. Initially named Fort Brisebois, after the outpost\'s first commander, the outpost was renamed Fort Calgary in June 1876. The outpost was built in 1875 as a part of the force\'s larger effort to curtail American rum and whisky runners in the region, and to create \'good relations\' with the Indigenous peoples of the territory. The fort was designated as a district post in 1882, resulting in the fort\'s expansion. The North-West Mounted Police continued to use the fort until 1914, when the site was sold to Grand Trunk Pacific Railway. The fort was demolished to make way for a rail terminal. The site was later purchased by the municipal government of Calgary in 1973, with work on an interpretive centre taking place in 1977. The site was reopened as a historic site and museum in 1978, with the museum initially documenting the NWMP and its role in the area. ', '4.3', 0, 2, 'images/Calgary/fort.jpg'),
(10, 'Glenbow Museum', 'The Glenbow Museum is an art and history regional museum in the city of Calgary, Alberta, Canada. The museum focuses on Western Canadian history and culture, including Indigenous perspectives. The Glenbow was established as a private non-profit foundation in 1955 by lawyer, businessman and philanthropist Eric Lafferty Harvie with materials from his personal collection. The museum moved to its current facility in downtown Calgary in 1976, and is funded by the governments of Calgary, Alberta and Canada, private donors, as well as an endowment provided by Harvie. In 2019, the Glenbow had a total of 148,668 visitors. The museum closed temporarily for renovations in 2021, and will re-open in 2024. Admission to the museum is free as of February 2022, due to a $25 million donation by the Shaw Family Foundation. $15 million of the donation will be placed in an endowment fund for admissions, and $10 million is earmarked for the new JR Shaw Institute for Canadian Art.', '4.5', 0, 2, 'images/Calgary/museum.jpg'),
(11, 'Niagara Falls', 'Niagara Falls : waterfalls on the Niagara River that consist of two principal parts separated by Goat Island: the Horseshoe Falls adjoin the western (Canadian) bank and fall 158 feet (47 m); the American Falls adjoin the eastern (US) bank and fall 167 feet (50 m)', '4.8', 0, 3, 'images/Niagara/falls.jpg'),
(12, 'Cave of the winds', 'The Cave of the Winds was a natural cave behind Bridal Veil Falls at the Niagara Falls. The cave was some 130 feet high, 100 feet wide and 30 feet in depth. It was discovered in 1834, and originally dubbed Aeolus\'s Cave, after the Greek god of winds. Guided tours began officially in 1841, through Goat Island and descending down a staircase closer to the falls, into the cave. A rock fall closed the tour in 1920. It officially reopened in 1924, bringing visitors to the front of the Bridal Veil instead of behind it, on a series of decks and walkways. Tropical storm-like conditions can be experienced, as winds can reach up to 68 mph underneath the falls. The cave was obliterated in a massive 1954 rockfall and subsequent dynamiting of a dangerous overhang.', '4.8', 16, 3, 'images/Niagara/cave.jpg'),
(13, 'Niagara Sky Wheel', 'Niagara SkyWheel is a 175-foot tall Ferris wheel in the middle of Clifton Hill, Niagara Falls, Ontario, Canada. Niagara SkyWheel is a Ronald Bussink Professional Rides designed R60 Giant Wheel, manufactured by Chance Rides and supplied by Chance Morgan. It opened on 17 June 2006, at a cost of $10 million. Its 42 Swiss-manufactured fully enclosed passenger cars can each carry nine people and are heated in the winter and air conditioned in the warmer months. The ride is approximately 12 to 15 minutes long, giving passengers views of the Niagara River, and the Horseshoe Falls and American Falls, and is open all year, from 9:00 am to 1:00 am.', '4.6', 14, 3, 'images/Niagara/wheel.jpg'),
(14, 'Journey behind the falls', 'Journey Behind the Falls is an attraction in Niagara Falls, Ontario, Canada located in the Table Rock Centre beside the Canadian Horseshoe Falls. It is open year round and run by the Niagara Parks Commission.', '4.4', 16, 3, 'images/Niagara/walls.jpg'),
(15, 'Skylon Tower', 'The Skylon Tower, in Niagara Falls, Ontario, is an observation tower that overlooks both the American Falls, New York, and the larger Horseshoe Falls, Ontario, from the Canadian side of the Niagara River.', '4.4', 15, 3, 'images/Niagara/skylon.jpg'),
(16, 'CN Tower', 'The CN Tower is a 553.3 m-high concrete communications and observation tower located in the downtown core of Toronto, Ontario, Canada. Built on the former Railway Lands, it was completed in 1976. Its name CN originally referred to Canadian National, the railway company that built the tower. Following the railway\'s decision to divest non-core freight railway assets prior to the company\'s privatization in 1995, it transferred the tower to the Canada Lands Company, a federal Crown corporation responsible for real estate development. The CN Tower held the record for the world\'s tallest free-standing structure for 32 years, from 1975 until 2007, when it was surpassed by the Burj Khalifa, and was the world\'s tallest tower until 2009 when it was surpassed by the Canton Tower. It is currently the ninth tallest free-standing structure in the world and remains the tallest free-standing structure on land in the Western Hemisphere. In 1995, the CN Tower was declared one of the modern Seven Wonders', '4.6', 15, 4, 'images/Toronto/cn.jpg'),
(17, 'Royal Ontario Museum', 'The Royal Ontario Museum is a museum of art, world culture and natural history in Toronto, Ontario, Canada. It is one of the largest museums in North America and the largest in Canada. It attracts more than one million visitors every year, making the ROM the most-visited museum in Canada. The museum is north of Queen\'s Park, in the University of Toronto district, with its main entrance on Bloor Street West. Museum subway station is named after the ROM and, since a 2008 renovation, is decorated to resemble the institution\'s collection. Established on 16 April 1912 and opened on 19 March 1914, the museum has maintained close relations with the University of Toronto throughout its history, often sharing expertise and resources. The museum was under the direct control and management of the University of Toronto until 1968, when it became an independent Crown agency of the Government of Ontario. Today, the museum is Canada\'s largest field-research institution, with research and conservation', '4.7', 23, 4, 'images/Toronto/museum.jpg'),
(18, 'High Park', 'High Park is a municipal park in Toronto, Ontario, Canada. High Park is a mixed recreational and natural park, with sporting facilities, cultural facilities, educational facilities, gardens, playgrounds and a zoo. One-third of the park remains in a natural state, with a rare oak savannah ecology. High Park was opened to the public in 1876 and is based on a bequest of land from John George Howard to the City of Toronto. It spans 161 hectares and is the second-largest municipal park in Toronto, after Centennial Park. High Park is located to the west of downtown Toronto, north of Humber Bay, and is maintained by the City of Toronto Parks Department. It stretches south from Bloor Street West to The Queensway, just north of Lake Ontario. It is bounded on the west by Ellis Park Road and Grenadier Pond and on the east by Parkside Drive.', '4.7', 0, 4, 'images/Toronto/highpark.jpg'),
(19, 'Toronto Island', 'The Toronto Islands —are a chain of 15 small islands in Lake Ontario, south of mainland Toronto, Ontario, Canada. Comprising the only group of islands in the western part of Lake Ontario, the Toronto Islands are located just offshore from the city\'s downtown area, provide shelter for Toronto Harbour, and separate Toronto from the rest of Lake Ontario. The islands are home to the Toronto Island Park, the Billy Bishop Toronto City Airport, several private yacht clubs, a public marina, Centreville Amusement Park, a year round residential neighbourhood, and several public beaches. The island community is the largest urban car-free community in North America. All access to the Islands is by water, by City of Toronto ferries operating all year from Jack Layton Ferry Terminal at the foot of Bay Street or privately operated water taxis during the months of May to September. The Toronto Islands are a popular tourist and recreational destination. Bicycles are accommodated on the ferries at no ch', '4.8', 20, 4, 'images/Toronto/tisland.jpg'),
(20, 'St. Lawrence Market', 'The St. Lawrence Market South building is a major public market building in Toronto, Ontario, Canada. It is located on the southwest corner of Front and Lower Jarvis Streets. Along with the St. Lawrence Market North and St. Lawrence Hall, it comprises the St. Lawrence Market complex. The current building was opened in 1902, incorporating the 1845 Toronto City Hall building into the structure. The building was restored during the 1970s.', '4.6', 0, 4, 'images/Toronto/market.jpg'),
(21, 'The montreal museum of fine arts', 'The Montreal Museum of Fine Arts is an art museum in Montreal, Quebec, Canada. It is the largest art museum in Canada by gallery space. The museum is located on the historic Golden Square Mile stretch of Sherbrooke Street. The MMFA is spread across five pavilions, and occupies a total floor area of 53,095 square metres, 13,000 of which are exhibition space. With the 2016 inauguration of the Michal and Renata Hornstein Pavilion for Peace, the museum campus was expected to become the eighteenth largest art museum in North America. The permanent collection included approximately 44,000 works in 2013. The original \"reading room\" of the Art Association of Montreal was the precursor of the museum\'s current library, the oldest art library in Canada. The Montreal Museum of Fine Arts is a member of the International Group of Organizers of Large-scale Exhibitions, also known as the Bizot Group, a forum which allows the leaders of the largest museums in the world to exchange works and exhibitions', '4.7', 24, 5, 'images/Montreal/mmuseum.jpg'),
(22, 'Mount Royal', 'Mount Royal is a large intrusive rock hill or small mountain in the city of Montreal, immediately west of Downtown Montreal, Quebec, Canada. The best-known hypothesis for the origin of the name Montreal is that the name is taken from Mount Royal. The hill is part of the Monteregian Hills situated between the Laurentians and the Appalachian Mountains. It gave its Latin name, Mons Regius, to the Monteregian chain. The hill consists of three peaks: Colline de la Croix at 233 m, Colline d\'Outremont at 211 m, and Westmount Summit at 201 m elevation above mean sea level.', '4.7', 0, 5, 'images/Montreal/Mount_Royal.jpg'),
(23, 'La Ronde', 'La Ronde is an amusement park in Montreal, Quebec, Canada, built as the entertainment complex for Expo 67, the 1967 World Fair. Today, it is operated by Six Flags under an emphyteutic lease with the City of Montreal, which expires in 2065. It is the largest amusement park in Quebec and second largest in Canada. It is on 59 hectares located on the Northern tip of Saint Helen\'s Island. This is a man-made extension to the island in the space where the small Ronde Island had been. The park hosts L\'International des Feux Loto-Québec, an international fireworks competition. La Ronde is one of three Six Flags parks not to be officially branded as a Six Flags park, Great Escape in Queensbury, New York, and Frontier City in Oklahoma City, Oklahoma being the other two.', '4.1', 42, 5, 'images/Montreal/laronde.jpg'),
(24, 'Montreal Underground City', 'RÉSO, commonly referred to as the Underground City, is the name applied to a series of interconnected office towers, hotels, shopping centres, residential and commercial complexes, convention halls, universities and performing arts venues that form the heart of Montreal\'s central business district, colloquially referred to as Downtown Montreal. The name refers to the underground connections between the buildings that compose the network, in addition to the network\'s complete integration with the city\'s entirely underground rapid transit system, the Montreal Metro. Moreover, the first iteration of the Underground City was developed out of the open pit at the southern entrance to the Mount Royal Tunnel, where Place Ville Marie and Central Station stand today. Though most of the connecting tunnels pass underground, many of the key passageways and principal access points are located at ground level, and there is also one skybridge. In this regard, the Underground City is more of an indoor ', '4.3', 0, 5, 'images/Montreal/underground.jpg'),
(25, 'Montreal Science Centre', 'The Montreal Science Centre is a science museum in Montreal, Quebec, Canada. It is located on the King Edward Pier in the Old Port of Montreal. Established in 2000 and originally known as the iSci Centre, the museum changed its name to the Montreal Science Centre in 2002. The museum is managed by the Old Port of Montreal Corporation. The museum is home to interactive exhibitions on science and technology as well as an IMAX theatre.', '4.4', 35, 5, 'images/Montreal/science.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_name`
--

DROP TABLE IF EXISTS `table_name`;
CREATE TABLE `table_name` (
  `id` double DEFAULT NULL,
  `des_id` double DEFAULT NULL,
  `hotel_id` double DEFAULT NULL,
  `t_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_name`
--

INSERT INTO `table_name` (`id`, `des_id`, `hotel_id`, `t_id`) VALUES
(1, 1, 1, ''),
(2, 1, 2, ''),
(3, 1, 3, ''),
(4, 1, 4, ''),
(5, 1, 5, ''),
(6, 1, 1, ''),
(7, 1, 2, ''),
(8, 1, 3, ''),
(9, 1, 4, ''),
(0, 0, 0, ''),
(0, 0, 0, ''),
(0, 0, 0, ''),
(0, 0, 0, ''),
(0, 0, 0, ''),
(0, 0, 0, ''),
(0, 0, 0, ''),
(0, 0, 0, ''),
(0, 0, 0, ''),
(0, 0, 0, ''),
(0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `transports`
--

DROP TABLE IF EXISTS `transports`;
CREATE TABLE `transports` (
  `id` int(11) NOT NULL,
  `t_name` varchar(10) NOT NULL,
  `t_price` int(11) NOT NULL,
  `t_rating` int(11) NOT NULL,
  `t_description` varchar(300) NOT NULL,
  `t_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transports`
--

INSERT INTO `transports` (`id`, `t_name`, `t_price`, `t_rating`, `t_description`, `t_capacity`) VALUES
(1, 'Basic', 700, 4, 'Get a car for your trip to the destination of your choice with comfortable seats.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `des_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `des_id`, `hotel_id`, `t_id`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(6, 1, 1, 1),
(7, 1, 2, 1),
(8, 1, 3, 1),
(9, 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trip_sites`
--

DROP TABLE IF EXISTS `trip_sites`;
CREATE TABLE `trip_sites` (
  `trip_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip_sites`
--

INSERT INTO `trip_sites` (`trip_id`, `site_id`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 5),
(3, 1),
(3, 3),
(3, 5),
(4, 1),
(4, 2),
(4, 3),
(5, 4),
(5, 5),
(6, 5),
(7, 2),
(7, 5),
(8, 3),
(8, 4),
(8, 1),
(9, 4),
(9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `u_fname` varchar(20) NOT NULL,
  `u_lname` varchar(20) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_phone` varchar(10) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_gender` varchar(10) NOT NULL,
  `u_dob` date NOT NULL,
  `u_marital` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

DROP TABLE IF EXISTS `user_feedback`;
CREATE TABLE `user_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`id`, `name`, `email`, `feedback`) VALUES
(1, 'Khyati', 'kh@gmail.com', 'very good'),
(3, 'Jinnie', 'jinnydhiver@gmail.com', 'Very good response'),
(4, 'Dinky', 'j_singh@gmail.com', 'Very good response');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom_trips`
--
ALTER TABLE `custom_trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_user_fk` (`user_id`),
  ADD KEY `custom_des_fk` (`des_id`),
  ADD KEY `custom_hotel_fk` (`hotel_id`),
  ADD KEY `custom_t_fk` (`t_id`);

--
-- Indexes for table `custom_trips_sites`
--
ALTER TABLE `custom_trips_sites`
  ADD KEY `custom_trip_site_trip_fk` (`trip_id`),
  ADD KEY `custom_trip_site_user_fk` (`user_id`),
  ADD KEY `custom_trip_site_site_fk` (`site_id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `des_hotel_fk` (`des_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `des_site_fk` (`des_id`);

--
-- Indexes for table `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_des_fk` (`des_id`),
  ADD KEY `trip_hotel_fk` (`hotel_id`),
  ADD KEY `trip_t_fk` (`t_id`);

--
-- Indexes for table `trip_sites`
--
ALTER TABLE `trip_sites`
  ADD KEY `trip_trip_site_fk` (`trip_id`),
  ADD KEY `trip_site_fk` (`site_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `transports`
--
ALTER TABLE `transports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `custom_trips`
--
ALTER TABLE `custom_trips`
  ADD CONSTRAINT `custom_des_fk` FOREIGN KEY (`des_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `custom_hotel_fk` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `custom_t_fk` FOREIGN KEY (`t_id`) REFERENCES `transports` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `custom_trip_fk` FOREIGN KEY (`id`) REFERENCES `trips` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `custom_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `custom_trips_sites`
--
ALTER TABLE `custom_trips_sites`
  ADD CONSTRAINT `custom_trip_site_site_fk` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `custom_trip_site_trip_fk` FOREIGN KEY (`trip_id`) REFERENCES `custom_trips` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `custom_trip_site_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `des_hotel_fk` FOREIGN KEY (`des_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sites`
--
ALTER TABLE `sites`
  ADD CONSTRAINT `des_site_fk` FOREIGN KEY (`des_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trip_des_fk` FOREIGN KEY (`des_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trip_hotel_fk` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trip_t_fk` FOREIGN KEY (`t_id`) REFERENCES `transports` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trip_sites`
--
ALTER TABLE `trip_sites`
  ADD CONSTRAINT `trip_site_fk` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trip_trip_site_fk` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
