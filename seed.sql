--
-- Database: `stellar`
--
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `userlogins` (
  `id` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `reset_password_token` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=2019;

--
-- Dumping data for table `userlogins`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `created`, `reset_password_token`) VALUES
(2020, 'milky@way.com', '$P$BduBeREPM9RBTcw6PyGaVzdQCgZWQ1', 'Milky Way', '2019-10-09 13:14:53', NULL);

-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(12) NOT NULL,
  `search_id` int(255) DEFAULT NULL,
  `image_url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `media_type` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `nasa_id` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`id`, `search_id`, `image_url`, `title`, `description`, `media_type`, `keywords`, `nasa_id`, `date_created`) VALUES
(1492, 0, 'https://images-assets.nasa.gov/image/hubble-observes-one-of-a-kind-star-nicknamed-nasty_17754652960_o/hubble-observes-one-of-a-kind-star-nicknamed-nasty_17754652960_o~orig.jpg',
 'Hubble Observes One-of-a-Kind Star Nicknamed ‘Nasty’', 'Astronomers using NASA’s Hubble Space Telescope have uncovered surprising new clues about a hefty, rapidly aging star whose behavior has never been seen before in our Milky Way galaxy. In fact, the star is so weird that astronomers have nicknamed it “Nasty 1,” a play on its catalog name of NaSt1. The star may represent a brief transitory stage in the evolution of extremely massive stars.  First discovered several decades ago, Nasty 1 was identified as a Wolf-Rayet star, a rapidly evolving star that is much more massive than our sun. The star loses its hydrogen-filled outer layers quickly, exposing its super-hot and extremely bright helium-burning core.  But Nasty 1 doesn’t look like a typical Wolf-Rayet star. The astronomers using Hubble had expected to see twin lobes of gas flowing from opposite sides of the star, perhaps similar to those emanating from the massive star Eta Carinae, which is a Wolf-Rayet candidate.   Instead, Hubble revealed a pancake-shaped disk of gas encircling the star. The vast disk is nearly 2 trillion miles wide, and may have formed from an unseen companion star that snacked on the outer envelope of the newly formed Wolf-Rayet.  Based on current estimates, the nebula surrounding the stars is just a few thousand years old, and as close as 3,000 light-years from Earth.  Credits: NASA/Hubble',
 'image', '["Hubble", "Milky Way", "star"]', 'hubble-observes-one-of-a-kind-star-nicknamed-nasty_17754652960_o', '2015-03-21T00:00:00Z');
(1848, 2, 'https://images-assets.nasa.gov/image/PIA22081/PIA22081~orig.jpg',
 'Tabbys Star (Illustration)', 'This illustration depicts a hypothetical uneven ring of dust orbiting KIC 8462852, also known as Boyajians Star or Tabbys Star. Astronomers have found the dimming of the star over long periods appears to be weaker at longer infrared wavelengths of light and stronger at shorter ultraviolet wavelengths. Such reddening is characteristic of dust particles and inconsistent with more fanciful "alien megastructure" concepts, which would evenly dim all wavelengths of light.  By studying observations from NASAs Spitzer and Swift telescopes, as well as the Belgian AstroLAB IRIS observatory, the researchers have been able to better constrain the size of the dust particles. This places them within the range found in dust disks orbiting stars, and larger than the particles typically found in interstellar dust.  The system is portrayed with a couple of comets, consistent with previous studies that have found evidence for cometary activity within the system.',
 'image', '["Spitzer Space Telescope", "KIC 8462852", "Boyajians Star"]', 'PIA22081', '2017-10-04T00:00:00Z');


-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(12) NOT NULL,
  `userlogin_id` int(12) NOT NULL,
  `star_id` varchar(12) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `userlogin_id`, `star_id`) VALUES
(1492, 2020, 1492);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;