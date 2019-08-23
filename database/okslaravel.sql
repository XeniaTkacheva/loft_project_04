-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.25-log - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп данных таблицы okslaravel.categories: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT IGNORE INTO `categories` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Розы кустовые', 'Пышноцветущие кустарники', '2019-08-22 17:57:18', '2019-08-22 17:57:28'),
	(2, 'Розы кремовые', 'Цветы нежно кремовые до насыщено розового оттенка', '2019-08-22 17:57:21', '2019-08-22 17:57:29'),
	(3, 'Крупноцветковые', 'Розы с крупными одиночными цветами, отличаются яркой окраской и длительным периодом цветения', '2019-08-22 17:57:23', '2019-08-22 17:57:31'),
	(4, 'Розы чайные', 'Розы с насыщенным пьянящим ароматом', '2019-08-22 17:57:24', '2019-08-22 17:57:32'),
	(5, 'Плетистые розы', 'Стебли плетистых роз крепятся к шпалерам и создают неповторимое убранство беседок и арок', '2019-08-22 17:57:25', '2019-08-22 17:57:33');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Дамп данных таблицы okslaravel.migrations: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2014_10_12_000000_create_users_table', 1),
	(6, '2014_10_12_100000_create_password_resets_table', 1),
	(7, '2019_08_19_041410_add_votes_to_users_table', 1),
	(8, '2019_08_22_081232_create_sessions_table', 1),
	(9, '2019_08_22_155947_create_plants_table', 2),
	(10, '2019_08_22_174036_create_categories_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп данных таблицы okslaravel.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Дамп данных таблицы okslaravel.plants: ~20 rows (приблизительно)
/*!40000 ALTER TABLE `plants` DISABLE KEYS */;
INSERT IGNORE INTO `plants` (`id`, `title`, `category_id`, `about`, `price`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 'Роза Adipisci.', 4, 'Explicabo nihil nisi quod dolores nulla. Atque nulla facere iusto voluptate nisi natus. Repellat tempore dolor voluptas. Et dolor qui sit et quo delectus.', 520, '/img/cover/plant-6.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(2, 'Роза Quasi.', 4, 'Unde molestiae omnis ut necessitatibus ut adipisci dolore. Sit consequatur magni pariatur numquam.', 800, '/img/cover/plant-5.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(3, 'Роза Numquam.', 5, 'Neque quia quisquam ipsam doloremque et. Eum cum commodi in beatae non asperiores.', 390, '/img/cover/plant-3.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(4, 'Роза Sint natus.', 5, 'Rerum dolor ipsam saepe aliquid harum. Accusantium mollitia quidem numquam ex aut et aspernatur et. Sapiente maiores dolorem deleniti iusto enim. Sed quis et doloribus voluptatem quis ut autem.', 770, '/img/cover/plant-7.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(5, 'Роза Nemo sint.', 3, 'Exercitationem saepe ut tenetur animi inventore. Mollitia atque voluptas et. Sed mollitia suscipit amet aut consectetur.', 240, '/img/cover/plant-8.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(6, 'Роза Labore.', 3, 'Quis cumque vitae error quidem. Et id beatae dolor sed sit qui reiciendis. Itaque vero nobis quisquam dolores architecto qui eveniet.', 100, '/img/cover/plant-9.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(7, 'Роза Omnis vitae.', 5, 'Ex magni voluptatem doloremque provident et quo et. Et magnam quia est natus. Commodi neque voluptate animi nesciunt maxime.', 140, '/img/cover/plant-1.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(8, 'Роза Quo omnis.', 1, 'Facere velit ut consequatur. Accusantium labore temporibus ut officia quos reprehenderit. Consectetur ducimus voluptatem voluptatem nostrum. Maxime eum enim dolorem.', 300, '/img/cover/plant-9.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(9, 'Роза Omnis velit.', 1, 'Repudiandae non veniam provident qui. Qui eum est molestiae. Quisquam similique sed ut enim quos corporis et.', 710, '/img/cover/plant-3.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(10, 'Роза Et incidunt.', 2, 'Aut sint enim quaerat. Nisi laboriosam molestiae ullam praesentium. Voluptas qui qui nulla.', 740, '/img/cover/plant-2.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(11, 'Роза Officia.', 1, 'Cupiditate qui et expedita sed ipsum voluptatem autem. Excepturi ea assumenda perferendis non nesciunt ad ut. Eos delectus at rem aut.', 550, '/img/cover/plant-3.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(12, 'Роза Quis sed.', 5, 'Animi placeat debitis quasi. Explicabo libero tenetur qui. Itaque sit consequatur ea tempore unde officiis ut. Odit repellat delectus cupiditate provident et nam eveniet qui.', 780, '/img/cover/plant-2.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(13, 'Роза Delectus.', 5, 'Nam aut sit impedit sit. Saepe alias dolorem facilis aut delectus animi rem saepe. Ipsam iusto provident error. Atque sit ullam architecto necessitatibus reprehenderit recusandae.', 740, '/img/cover/plant-7.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(14, 'Роза At.', 3, 'Suscipit quia ullam laborum impedit ratione nihil. Illo aut iste nihil ut. Nemo hic sit iusto placeat voluptas repudiandae non. Molestias minima aut aliquam doloremque nisi reiciendis rerum.', 130, '/img/cover/plant-5.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(15, 'Роза Magni.', 3, 'In qui suscipit quae et. Aliquam aperiam unde id neque quae qui. Dolor debitis ea aut nihil veniam voluptatem.', 150, '/img/cover/plant-3.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(16, 'Роза Perferendis.', 5, 'Eum nihil minima maiores atque. Blanditiis nemo cum omnis corrupti reprehenderit laudantium.', 180, '/img/cover/plant-9.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(17, 'Роза Facilis.', 3, 'Ut corrupti error impedit corrupti modi enim. Incidunt tempore laudantium et velit. Et eius provident voluptas in. Et quo vel quis odio tempore consectetur sed optio.', 590, '/img/cover/plant-8.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(18, 'Роза Ut.', 5, 'Voluptatem reiciendis sint aspernatur repudiandae dolor nisi. Aliquam rem iure aliquid et. Magni voluptas consequatur porro vitae rerum voluptas.', 720, '/img/cover/plant-7.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(19, 'Роза Et odit.', 2, 'Quos eum esse earum. Nesciunt voluptas animi sequi alias est qui. Dolor sint sed nihil saepe consectetur.', 280, '/img/cover/plant-1.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03'),
	(20, 'Роза Qui odio.', 5, 'Officiis architecto eos architecto sint. Tenetur nisi dolor quidem impedit vitae. Et necessitatibus distinctio libero voluptas iusto sed. Aliquam fugit eum facilis sunt fuga quis.', 630, '/img/cover/plant-5.jpg', '2019-08-22 19:58:03', '2019-08-22 19:58:03');
/*!40000 ALTER TABLE `plants` ENABLE KEYS */;

-- Дамп данных таблицы okslaravel.sessions: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT IGNORE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('AWe67aEYpj0JFjSPGsCJwja7SPdqdPjG0Jq3dD0m', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'YTo1OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoibjFMbFpvOHE3QXRKeWZSVWJzOVRXMVhkSnptSDl6NzBhTk03enFjdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2Z0LXByb2plY3QtMDQvcGxhbnQvc2hvdy8xIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1566490007);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Дамп данных таблицы okslaravel.users: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Xenia', 'xenia1898@gmail.com', NULL, '$2y$10$6atWbBL/Bfi1euG4zzydNuEdY5n/vo/hP9F6nigHhQonmpc0SIiiy', 0, 'pgZqSfPXKC3lX73esnb105MTSw7RqR742XamS0ra5TN3X0SQfr3femkKHPOA', '2019-08-22 08:34:03', '2019-08-22 08:34:03'),
	(2, 'Lalii', 'laliiy@rambler.ru', NULL, '$2y$10$iAv3Zqs4qVN4TxITg1trEOlrF22XOzR3rfb7Xz3gYq6nse0em5UTK', 0, 'baCv9NZfGqexw3XTdJQpqzmojOzmPcT5nPl7xfb6LHuLUNwzzOQX3oILIJu7', '2019-08-22 08:34:30', '2019-08-22 08:34:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
