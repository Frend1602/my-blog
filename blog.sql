-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-5.7
-- Время создания: Фев 14 2025 г., 14:47
-- Версия сервера: 5.7.44
-- Версия PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `preview` varchar(70) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `img` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `preview`, `text`, `img`, `user_id`) VALUES
(1, 'Некая статья', 'Анонс статьи', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam commodi consequuntur cupiditate ipsam labore libero numquam odit ratione rerum sed? Adipisci eum fugit maxime nostrum quibusdam quod ratione soluta voluptas?', 'img/194a3b18-2f2d-4f09-89a5-fbeca660b53b.jpg', 2),
(2, 'Вторая статья', 'Будет еще круче', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci corporis cum doloremque, ducimus eius enim hic inventore ipsum laborum omnis pariatur praesentium quisquam quos repudiandae sapiente sed similique sint sunt, tenetur vitae! Ad consequuntur corporis facilis maxime molestiae nihil officia ratione sequi. Accusantium cupiditate esse explicabo, harum, ipsa labore minima modi, nam neque officia quaerat saepe soluta vel. Architecto aut commodi consequatur corporis culpa deleniti deserunt dicta dignissimos earum explicabo fuga ipsa ipsam ipsum itaque labore laboriosam libero, modi molestiae molestias neque nulla numquam officia, optio praesentium provident quidem quo recusandae repellat, soluta tempore totam ullam veritatis vero? Adipisci architecto, autem eaque enim eos et ex fuga id ipsum molestias pariatur perferendis quo soluta temporibus, voluptas! Alias architecto eos exercitationem nemo nulla. Aliquam asperiores assumenda autem debitis dolore error explicabo fugit, hic officia possimus quidem quod suscipit voluptas voluptates voluptatibus! Animi architecto assumenda at autem blanditiis consequuntur culpa dignissimos distinctio dolorem est et exercitationem explicabo facilis fuga harum in iure maxime, minus modi nam, neque nulla odio omnis, placeat qui recusandae rem repudiandae saepe similique soluta temporibus tenetur totam unde velit vitae voluptate voluptatem? Amet, atque commodi cum dolor eius, excepturi explicabo illo ipsam ipsum laborum laudantium magnam maiores modi molestias nam natus, neque nihil nobis odio odit officiis reprehenderit sapiente sed sit veritatis voluptas voluptatibus voluptatum. Ab autem cum, delectus eligendi facere nemo pariatur quibusdam quisquam saepe soluta temporibus ut veritatis! Ab ad amet assumenda at commodi dolorem dolorum earum eligendi est, explicabo facilis, illum libero nesciunt perspiciatis porro quia quis recusandae reiciendis ut voluptatibus! Animi doloremque enim eum ipsam itaque neque quasi tenetur. Ab accusamus adipisci aliquam architecto assumenda, cupiditate delectus distinctio dolores ea eius est et ex facere illo illum iure laboriosam laudantium magnam minima molestias nam nemo nobis nulla numquam odit possimus quo reiciendis rem repudiandae saepe vel vitae voluptatibus voluptatum? A accusantium assumenda blanditiis dignissimos distinctio dolor dolores eaque eos eveniet exercitationem facere ipsa, ipsum iste iure laudantium maiores maxime molestiae nam natus necessitatibus nihil nisi non nostrum obcaecati officia perspiciatis porro quam quia recusandae reprehenderit rerum soluta tempora tenetur velit voluptas voluptates voluptatum! Asperiores cupiditate dolorum error et fuga modi necessitatibus officiis quia quis quos. Accusamus ad autem deserunt dolor ea et explicabo fuga iste iusto, nobis quidem quos veniam veritatis. Magni nam possimus ut. Aliquid error iste iure odit perferendis suscipit velit. Accusantium adipisci alias aliquam autem blanditiis cum cupiditate dignissimos, dolorem earum enim esse et ex expedita facere fugit hic id illo impedit in ipsa libero mollitia nostrum omnis optio quae quibusdam quis quod saepe suscipit vel veritatis vero voluptas voluptatem! A, ad aperiam architecto aspernatur aut beatae commodi consequatur consequuntur distinctio dolorum error illum odio odit officiis perferendis placeat praesentium quas quidem quos reprehenderit similique sit totam ut velit vitae. Atque debitis eaque eveniet excepturi quas qui! Fugit incidunt nobis qui! A asperiores aut, consequatur consequuntur deserunt dolor dolores eos explicabo harum incidunt, iure iusto laborum libero magni maiores mollitia nam nesciunt porro quibusdam quidem quos rem tenetur voluptates! Culpa cupiditate dolorem eveniet exercitationem facilis fuga, fugit impedit labore minima molestias natus nihil pariatur praesentium quam qui repellat rerum sapiente. Culpa cum cumque delectus distinctio dolorem doloribus enim eos et eum facere fuga fugit libero minima minus molestias, nesciunt nobis quidem quisquam rem rerum similique sint vitae! Architecto delectus fugiat laboriosam modi perspiciatis. Ab adipisci aliquid aspernatur beatae blanditiis consectetur consequuntur debitis dolores enim eum fugiat hic in incidunt iste, labore laudantium magni molestias, nostrum odit perferendis, praesentium quia repellat saepe sapiente veritatis! Animi consectetur, consequuntur facilis in laborum quidem quis quisquam reiciendis sed voluptates. Consectetur dolorum ducimus eligendi expedita itaque magnam mollitia neque nisi quam vero. Consectetur corporis cumque ea, et eum incidunt laudantium numquam porro quasi quod vel veritatis voluptas voluptatum? Alias, aperiam aspernatur autem consequatur cum cumque cupiditate ea eveniet facilis inventore laborum odit quaerat quas qui rem, saepe veniam. Doloremque eius nisi provident, recusandae sapiente unde vel! Ab accusantium, animi consequuntur error facere illum iste laborum minima, natus quia rerum vitae. Cumque eum excepturi explicabo impedit incidunt laboriosam natus nihil quas quasi ratione. At debitis dolorem enim, esse ex itaque non numquam qui quis, quo sint sit totam! Aspernatur beatae dolores incidunt, libero maiores pariatur placeat quas soluta voluptatibus. Alias atque autem dolorem eaque eos est et eum expedita labore laboriosam maiores, natus nesciunt officiis omnis porro possimus quia quibusdam quidem ratione repellat reprehenderit saepe similique sit soluta sunt tempora, tempore temporibus velit voluptas voluptate. Asperiores cupiditate ea inventore iste repudiandae, rerum soluta. Deleniti dignissimos fuga illo, maiores minus neque nobis provident totam! Animi dolore dolorum facilis fuga, illo in inventore ipsam magnam, natus nesciunt nulla odio praesentium provident qui quia quis quod rerum totam vel vero. Aperiam beatae culpa debitis dolorem dolores eius eligendi et exercitationem expedita in iste itaque iure libero maxime minus molestiae nisi odio perspiciatis porro provident quae qui, quia quis quisquam ratione sed soluta totam vel, voluptatibus voluptatum. A consequuntur cum cumque, deleniti dicta dolorem eum incidunt ipsam laboriosam laborum libero maxime minus necessitatibus pariatur quidem quod reprehenderit, sed, velit vitae voluptates! Ab aspernatur aut culpa, et exercitationem laboriosam mollitia, nulla omnis optio quas, quis quod ratione rem. Adipisci alias aliquam consectetur cumque dicta dignissimos, eos incidunt nesciunt officiis omnis praesentium quae ratione rerum? Accusantium asperiores cum, cumque deserunt dignissimos distinctio, dolores dolorum earum ex exercitationem expedita hic ipsa maiores modi mollitia nisi nostrum nulla odio officiis omnis optio placeat quaerat qui quisquam rem sit totam voluptates! Accusamus blanditiis laboriosam, minima natus necessitatibus non pariatur repellat? Amet architecto aut commodi consequuntur corporis culpa cumque dignissimos ea fugit harum hic impedit ipsa, laborum nam neque nihil nisi pariatur possimus quas repellendus reprehenderit saepe sed, sint, temporibus velit! Aliquid animi aspernatur assumenda aut autem consequuntur cum dolor eos esse explicabo, facere id in modi molestias natus necessitatibus nesciunt provident quo quos rem vel voluptatem voluptatum! Atque cumque eos fugit iure magni maiores quos reiciendis sequi sint sit. Animi at deleniti, dicta ea ex excepturi itaque laudantium modi, numquam odit repudiandae sapiente similique, ullam voluptatum.', '', 2),
(3, 'Third article', 'Best of the best', '&#39;;.c,flrvdntjkbyttemeyo5  [4m ui89hжлкрщмо щзоекщзрм е4щшр&#13;&#10;еркуе жоенло5&#13;&#10;', '', 1),
(4, '547', '436vf', '346bv 3', 'img/41eb6f2a-50f9-4f05-b1d2-707a548b4234.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Pavel', 'Pavel@mail.com', '6016df885813cf8e587757a8d4fe7b57'),
(2, 'Semen', 'Semen@mail.com', '6016df885813cf8e587757a8d4fe7b57');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
