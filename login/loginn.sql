

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `loginn`
--

-- --------------------------------------------------------

--
-- Table structure for table `lo`
--

CREATE TABLE `lo` (
  `id` int(100) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lo`
--

INSERT INTO `lo` (`id`, `username`, `email`, `password`) VALUES
(1, 'test', 'test@gmail.com', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lo`
--
ALTER TABLE `lo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lo`
--
ALTER TABLE `lo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

