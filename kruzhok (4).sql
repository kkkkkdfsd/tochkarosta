-- --------------------------------------------------------
-- База данных: `kruzhok`
-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `kruzhok` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `kruzhok`;

-- --------------------------------------------------------
-- Таблица: `admin`
-- --------------------------------------------------------

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL, -- Теперь безопасный хэш
  `name` varchar(100) DEFAULT NULL,
  `role` ENUM('user', 'admin') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Таблица: `students`
-- --------------------------------------------------------

CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `class` varchar(3) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL, -- Увеличено
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Таблица: `zayavki` (заявки)
-- --------------------------------------------------------

CREATE TABLE `zayavki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `class` varchar(3) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Таблица: `courses` (объединённая)
-- --------------------------------------------------------

CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_type` ENUM('it', 'himbio', 'phis') NOT NULL,
  `name_course` varchar(500) NOT NULL,
  `name_topic` varchar(200) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Таблица: `attendance` (посещаемость)
-- --------------------------------------------------------

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_type` ENUM('it', 'himbio', 'phis') NOT NULL,
  `lesson_date` date NOT NULL,
  `present` BOOLEAN DEFAULT TRUE,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`student_id`) REFERENCES `students` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;