-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: localhost
-- Čas generovania: So 03.Dec 2022, 18:27
-- Verzia serveru: 10.4.21-MariaDB
-- Verzia PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `character`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `content`
--

INSERT INTO `content` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '  <div class=\"item tm-bg-secondary tm-text-white tm-block tm-block-wider tm-block-pad tm-block-left-2\" data-desktop-seq-no=\"3\"\r\n            data-mobile-seq-no=\"5\">\r\n            <i class=\"fas fa-award fa-4x tm-block-icon\"></i>\r\n            <p>Maecenas scelerisque ex neque, vel ultrices purus pharetra sit amet. Donec consectetur ipsum in elit eleifend\r\n                porta. Morbi bibendum porttitor dui. Proin molestie purus non nisi blandit rutrum.</p>\r\n            <div class=\"tm-text-right\">\r\n                <a href=\"admin.php\" class=\"tm-btn tm-btn-small tm-btn-primary tm-mt\">Admin</a>\r\n            </div>\r\n        </div>', '2022-11-30 20:31:21', '2022-11-30 20:31:21'),
(2, ' <div class=\"item tm-block-right\" data-desktop-seq-no=\"7\" data-mobile-seq-no=\"3\">\r\n            <div class=\"tm-block-right-inner tm-bg-primary-light tm-text-white tm-block tm-block-wider tm-block-pad\">\r\n                <header>\r\n                    <h2 class=\"tm-text-uppercase\">\r\n                        Proin Molestie Purus Non\r\n                    </h2>\r\n                </header>\r\n                <p>You can freely use this Character HTML Template for your site. Please <a href=\"https://www.facebook.com/tooplate\">follow us</a> on Facebook page for updates. Don\'t forget to tell your friends about Tooplate. Thank you. :)</p>\r\n                <p class=\"tm-mt tm-mb-small\">Aenean gravida augue luctus, egestas massa ac, hendrerit ipsum. Vestibulum et\r\n                    ex sollicitudin, commodo liqula suscipit, laoreet lacus.\r\n                </p>\r\n                <!-- -->\r\n            </div>\r\n        </div>\r\n', '2022-11-30 20:31:21', '2022-11-30 20:31:21'),
(3, ' <div class=\"item tm-bg-white tm-block tm-form-section\" data-desktop-seq-no=\"9\" data-mobile-seq-no=\"7\">\r\n            \r\n            <div class=\"tm-form-container tm-block-pad tm-pb-0\">\r\n                <header>\r\n                    <h2 class=\"tm-text-uppercase tm-text-gray-light tm-mb\">\r\n                        Contact Us\r\n                    </h2>\r\n                </header>\r\n                <form action=\"email.php\" class=\"tm-contact-form\" method=\"POST\">\r\n                    <div class=\"tm-form-group\">\r\n                        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Name\" required/>\r\n                    </div>\r\n                    <div class=\"tm-form-group\">\r\n                        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required/>\r\n                    </div>\r\n                    <div class=\"tm-form-group\">\r\n                        <textarea rows=\"5\" id=\"message\" name=\"message\" class=\"form-control\" placeholder=\"Message\" required></textarea>\r\n                    </div>\r\n                    <div class=\"tm-text-right\">\r\n                        <button type=\"submit\" name=\"submit\" class=\"tm-btn tm-btn-secondary tm-btn-pad-big\">Send</button>\r\n                    </div>\r\n                </form>\r\n            </div>\r\n\r\n            <div class=\"tm-form-section-tag\">\r\n                <div class=\"tm-bg-secondary tm-text-white tm-block-pad tm-form-section-tag-inner\">\r\n                    <header>\r\n                        <h2>Proin imperdiet commodo nisi</h2>\r\n                    </header>\r\n                    <p>Mauris sodales vulputate ante a dapibus Donec vitae maximus dolor, pharetra imperdiet lectus. Praesent\r\n                        pharetra elit ac est congue volutpat.</p>\r\n                </div>\r\n            </div>\r\n\r\n        </div>', '2022-11-30 20:32:19', '2022-11-30 20:32:19'),
(4, '       <div class=\"tm-footer\" id=\"tmFooter\" data-desktop-seq-no=\"5\" data-mobile-seq-no=\"9\">\r\n            <img src=\"img/qr-link-tooplate.png\" alt=\"QR Code\" class=\"tm-img-qr\">\r\n            <div>\r\n                <p class=\"tm-mb-small\">Copyright &copy; 2018 Company Name</p>\r\n                <p>Designed by <a rel=\"nofollow\" href=\"https://www.facebook.com/tooplate\">Tooplate</a></p>\r\n            </div>\r\n        </div>', '2022-11-30 20:32:19', '2022-11-30 20:32:19');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `image_item`
--

CREATE TABLE `image_item` (
  `id` int(11) NOT NULL,
  `desktop_no` int(11) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `alt` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `image_item`
--

INSERT INTO `image_item` (`id`, `desktop_no`, `mobile_no`, `src`, `alt`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'img/image-01.jpg', 'Image', '2022-11-30 20:10:31', '2022-11-30 20:10:31'),
(2, 4, 8, 'img/image-04.jpg', 'Image', '2022-11-30 20:10:31', '2022-11-30 20:10:31'),
(3, 6, 2, 'img/image-02.jpg', 'Image', '2022-11-30 20:12:07', '2022-11-30 20:12:07'),
(4, 8, 6, 'img/image-03.jpg', 'Image', '2022-11-30 20:12:07', '2022-11-30 20:12:07');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `image_item`
--
ALTER TABLE `image_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pre tabuľku `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pre tabuľku `image_item`
--
ALTER TABLE `image_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
