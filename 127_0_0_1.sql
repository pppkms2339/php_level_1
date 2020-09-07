-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Сен 06 2020 г., 14:04
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `surf`
--
CREATE DATABASE IF NOT EXISTS `surf` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `surf`;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_product` tinyint(1) NOT NULL DEFAULT 0,
  `hot_product` tinyint(1) NOT NULL DEFAULT 0,
  `price` float NOT NULL,
  `old_price` float NOT NULL DEFAULT 0,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_product_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `new_product`, `hot_product`, `price`, `old_price`, `image`, `description`, `fk_product_type`) VALUES
(1, 'Name of product', 1, 0, 1000, 1500, 's1.jpg', 'Sed magna justo, molestie fringilla finibus sit amet, porttitor quis sem. Quisque lacinia dictum eros, eu pulvinar nibh hendrerit quis. Vivamus efficitur tincidunt tortor, vitae molestie sem pharetra sit amet. Phasellus sed pulvinar libero. Vivamus sit amet aliquam lacus, quis dapibus elit. Fusce a lorem ac mi lacinia interdum. Nam dapibus turpis urna, sit amet feugiat neque mollis a.', 1),
(6, 'Long name of product', 0, 1, 1500, 2000, 's2.jpg', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin imperdiet arcu ex, sit amet malesuada est vehicula eget. Duis gravida cursus augue, at consectetur sem suscipit ac. Phasellus eget convallis urna. Nam pharetra viverra nisi eget mollis. Nulla eu metus a ante posuere pretium. Vestibulum ornare aliquet purus eget viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 1),
(7, 'Very long name of product', 0, 0, 1000, 0, 's3.jpg', 'Nulla enim ante, porta et consectetur sollicitudin, consequat consequat ex. Integer posuere posuere tellus, non dictum felis vehicula a. Integer at consequat purus. Donec placerat ullamcorper dui, id dignissim tellus. Vivamus a libero mi. Vivamus feugiat tortor a turpis accumsan, at pharetra metus blandit. Fusce blandit elementum orci ultricies vestibulum. Fusce et congue nisi, sit amet rhoncus sapien. Proin et magna ex. Phasellus enim purus, tempus sed sapien sed, blandit viverra nibh. Vivamus eu mauris ac erat commodo faucibus eu vel sapien. Duis gravida quam mauris, vel mattis dui pulvinar vel. Etiam tincidunt ante eget tempor faucibus. Proin a mauris faucibus, gravida eros quis, varius massa.', 1),
(8, 'Very-very long name of product', 0, 0, 1001, 0, 's4.jpg', 'Etiam in est convallis felis sagittis malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed nec interdum tellus. Proin viverra at leo sit amet sollicitudin. Phasellus felis est, congue sit amet diam ullamcorper, semper mollis erat. Integer non suscipit lectus. Pellentesque vitae metus enim. Fusce a convallis justo, non maximus nunc. Nam placerat mauris ac nunc fringilla blandit. Maecenas eu elit at velit tempor elementum. Fusce volutpat, magna in convallis aliquet, dolor arcu rutrum mi, at ornare nibh velit a nibh. Vestibulum sed egestas felis.', 1),
(9, 'Very very-very long name of product', 0, 0, 1002.01, 0, 's5.jpg', 'Donec at pretium mauris. Donec efficitur pharetra massa id accumsan. Pellentesque vel auctor sapien, sed viverra erat. Nullam lacinia auctor massa, lacinia sodales sapien pharetra ac. Praesent egestas orci et sagittis facilisis. Vivamus libero mauris, fermentum at dignissim sit amet, blandit in est. Nunc condimentum nec lacus eget elementum. Integer vel gravida nisl. Nullam dapibus risus sed turpis ullamcorper tempor. Aliquam suscipit leo velit, sit amet venenatis nisi faucibus at. Cras semper blandit convallis. Phasellus condimentum, nulla imperdiet consequat imperdiet, urna ex vulputate mauris, a fermentum metus lacus id neque. Mauris consequat neque et leo dapibus porta.', 1),
(10, 'Very very very very long name of product', 0, 0, 1003.5, 0, 's6.jpg', 'Sed magna justo, molestie fringilla finibus sit amet, porttitor quis sem. Quisque lacinia dictum eros, eu pulvinar nibh hendrerit quis. Vivamus efficitur tincidunt tortor, vitae molestie sem pharetra sit amet. Phasellus sed pulvinar libero. Vivamus sit amet aliquam lacus, quis dapibus elit. Fusce a lorem ac mi lacinia interdum. Nam dapibus turpis urna, sit amet feugiat neque mollis a.', 1),
(11, 'Very very very very very long name of product', 0, 0, 1003, 0, 's6.jpg', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin imperdiet arcu ex, sit amet malesuada est vehicula eget. Duis gravida cursus augue, at consectetur sem suscipit ac. Phasellus eget convallis urna. Nam pharetra viverra nisi eget mollis. Nulla eu metus a ante posuere pretium. Vestibulum ornare aliquet purus eget viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 1),
(12, 'Very very very very very very long name of product', 0, 0, 2000, 2500, 's7.jpg', 'Nulla enim ante, porta et consectetur sollicitudin, consequat consequat ex. Integer posuere posuere tellus, non dictum felis vehicula a. Integer at consequat purus. Donec placerat ullamcorper dui, id dignissim tellus. Vivamus a libero mi. Vivamus feugiat tortor a turpis accumsan, at pharetra metus blandit. Fusce blandit elementum orci ultricies vestibulum. Fusce et congue nisi, sit amet rhoncus sapien. Proin et magna ex. Phasellus enim purus, tempus sed sapien sed, blandit viverra nibh. Vivamus eu mauris ac erat commodo faucibus eu vel sapien. Duis gravida quam mauris, vel mattis dui pulvinar vel. Etiam tincidunt ante eget tempor faucibus. Proin a mauris faucibus, gravida eros quis, varius massa.', 2),
(13, 'Name of product', 0, 0, 500, 1000, 's8.jpg', 'Etiam in est convallis felis sagittis malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed nec interdum tellus. Proin viverra at leo sit amet sollicitudin. Phasellus felis est, congue sit amet diam ullamcorper, semper mollis erat. Integer non suscipit lectus. Pellentesque vitae metus enim. Fusce a convallis justo, non maximus nunc. Nam placerat mauris ac nunc fringilla blandit. Maecenas eu elit at velit tempor elementum. Fusce volutpat, magna in convallis aliquet, dolor arcu rutrum mi, at ornare nibh velit a nibh. Vestibulum sed egestas felis.', 2),
(14, 'Name of product', 0, 0, 600, 700, 's9.jpg', 'Donec at pretium mauris. Donec efficitur pharetra massa id accumsan. Pellentesque vel auctor sapien, sed viverra erat. Nullam lacinia auctor massa, lacinia sodales sapien pharetra ac. Praesent egestas orci et sagittis facilisis. Vivamus libero mauris, fermentum at dignissim sit amet, blandit in est. Nunc condimentum nec lacus eget elementum. Integer vel gravida nisl. Nullam dapibus risus sed turpis ullamcorper tempor. Aliquam suscipit leo velit, sit amet venenatis nisi faucibus at. Cras semper blandit convallis. Phasellus condimentum, nulla imperdiet consequat imperdiet, urna ex vulputate mauris, a fermentum metus lacus id neque. Mauris consequat neque et leo dapibus porta.', 2),
(15, 'Name of product', 0, 0, 600, 700, 's9.jpg', 'Sed magna justo, molestie fringilla finibus sit amet, porttitor quis sem. Quisque lacinia dictum eros, eu pulvinar nibh hendrerit quis. Vivamus efficitur tincidunt tortor, vitae molestie sem pharetra sit amet. Phasellus sed pulvinar libero. Vivamus sit amet aliquam lacus, quis dapibus elit. Fusce a lorem ac mi lacinia interdum. Nam dapibus turpis urna, sit amet feugiat neque mollis a.', 2),
(16, 'Name of product', 0, 0, 1000, 0, 's10.jpg', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin imperdiet arcu ex, sit amet malesuada est vehicula eget. Duis gravida cursus augue, at consectetur sem suscipit ac. Phasellus eget convallis urna. Nam pharetra viverra nisi eget mollis. Nulla eu metus a ante posuere pretium. Vestibulum ornare aliquet purus eget viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 3),
(17, 'Name of product', 0, 0, 1000, 0, 's11.jpg', 'Nulla enim ante, porta et consectetur sollicitudin, consequat consequat ex. Integer posuere posuere tellus, non dictum felis vehicula a. Integer at consequat purus. Donec placerat ullamcorper dui, id dignissim tellus. Vivamus a libero mi. Vivamus feugiat tortor a turpis accumsan, at pharetra metus blandit. Fusce blandit elementum orci ultricies vestibulum. Fusce et congue nisi, sit amet rhoncus sapien. Proin et magna ex. Phasellus enim purus, tempus sed sapien sed, blandit viverra nibh. Vivamus eu mauris ac erat commodo faucibus eu vel sapien. Duis gravida quam mauris, vel mattis dui pulvinar vel. Etiam tincidunt ante eget tempor faucibus. Proin a mauris faucibus, gravida eros quis, varius massa.', 3),
(18, 'Name of product', 0, 0, 1000, 1500, 's12.jpg', 'Etiam in est convallis felis sagittis malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed nec interdum tellus. Proin viverra at leo sit amet sollicitudin. Phasellus felis est, congue sit amet diam ullamcorper, semper mollis erat. Integer non suscipit lectus. Pellentesque vitae metus enim. Fusce a convallis justo, non maximus nunc. Nam placerat mauris ac nunc fringilla blandit. Maecenas eu elit at velit tempor elementum. Fusce volutpat, magna in convallis aliquet, dolor arcu rutrum mi, at ornare nibh velit a nibh. Vestibulum sed egestas felis.', 3),
(19, 'Name of product', 0, 0, 123.45, 678.9, 's12.jpg', 'Donec at pretium mauris. Donec efficitur pharetra massa id accumsan. Pellentesque vel auctor sapien, sed viverra erat. Nullam lacinia auctor massa, lacinia sodales sapien pharetra ac. Praesent egestas orci et sagittis facilisis. Vivamus libero mauris, fermentum at dignissim sit amet, blandit in est. Nunc condimentum nec lacus eget elementum. Integer vel gravida nisl. Nullam dapibus risus sed turpis ullamcorper tempor. Aliquam suscipit leo velit, sit amet venenatis nisi faucibus at. Cras semper blandit convallis. Phasellus condimentum, nulla imperdiet consequat imperdiet, urna ex vulputate mauris, a fermentum metus lacus id neque. Mauris consequat neque et leo dapibus porta.', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_type`
--

INSERT INTO `product_type` (`id`, `name`) VALUES
(1, 'New products'),
(2, 'Top products'),
(3, 'Sale products');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_type` (`fk_product_type`);

--
-- Индексы таблицы `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`fk_product_type`) REFERENCES `product_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
