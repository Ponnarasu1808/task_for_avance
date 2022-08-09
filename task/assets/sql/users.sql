
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `users` (
  `id` int(16) NOT NULL,
  `user_name` varchar(111) NOT NULL,
  `user_pass` varchar(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);


ALTER TABLE `users`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;
COMMIT;
