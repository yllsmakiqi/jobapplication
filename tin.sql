CREATE TABLE `klientat` (
  `id` int(20) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `mbiemri` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `passwordi` varchar(30) NOT NULL,
  `role` smallint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data for table `klientat`
--

INSERT INTO `klientat` (`id`, `emri`, `mbiemri`, `username`, `passwordi`, `role`) VALUES
(31, 'Admin', 'Admin', 'admin99', '000000', 1),
(33, 'Ramiz', 'Hoxha', 'ramizhoxha1', '123456', 0),
(34, 'Artan', 'Osmani', 'artan11', '222222', 0),
(35, 'Yll', 'Smakiqi', 'yllsmakiqi2', '444444', 0);

-- --------------------------------------------------------

--
-- Table structure for table `produktet`
--

CREATE TABLE `puna` (
  `puna_id` int(255) NOT NULL,
  `emripuna` varchar(255) NOT NULL,
  `pershkrimi` varchar(255) NOT NULL,
  `fotoprod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puna`
--

INSERT INTO `puna` (`puna_id`, `emripuna`, `pershkrimi`, `fotoprod`) VALUES
(1, 'Web developer','kerkojm inxhinier te webit me pervoje', 'images/webdeveloper.jpg'),
(2, 'Data Scientist', 'Kerkojme nje Data Scientist per analize te te dhenave.', 'images/datascience.jpg'),
(3, 'UX/UI Designer', 'Dizajner i eksperiencave te perdoruesit dhe ndertues i user interface.', 'images/uiuxdesigner.jpg'),
(4, 'Full Stack Developer', 'Zhvillues i aplikacioneve web me njohuri te thelle ne front-end dhe back-end.', 'images/fullstack.jpg'),
(5, 'Financial Planner', 'Planifikues financiar qe ofron keshilla dhe udhezime per menaxhimin e financave.', 'images/financialplanner.jpg'),
(6, 'Online Marketing Specialist', 'Specialist i marketingut online per te rritur prezencen dhe shitjet ne internet.', 'images/onlinemarketing.jpg'),
(7, 'Cybersecurity Analyst', 'Analist i sigurise se informacionit per te mbrojtur sistemet nga rreziqet kibernetike.', 'images/cyber.jpg');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `klientat`
--
ALTER TABLE `klientat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produktet`
--
ALTER TABLE `puna`
  ADD PRIMARY KEY (`puna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klientat`
--
ALTER TABLE `klientat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `produktet`
--
ALTER TABLE `puna`
  MODIFY `puna_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;