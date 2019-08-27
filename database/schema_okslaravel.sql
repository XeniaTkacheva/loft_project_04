CREATE DATABASE okslaravel
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE okslaravel;

CREATE TABLE `categories` (
                              `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                              `title` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
                              `description` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
                              `created_at` TIMESTAMP NULL DEFAULT NULL,
                              `updated_at` TIMESTAMP NULL DEFAULT NULL,
                              PRIMARY KEY (`id`)
)
    COLLATE='utf8mb4_unicode_ci'
    ENGINE=InnoDB
    AUTO_INCREMENT=6
;


CREATE TABLE `migrations` (
                              `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                              `migration` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
                              `batch` INT(11) NOT NULL,
                              PRIMARY KEY (`id`)
)
    COLLATE='utf8mb4_unicode_ci'
    ENGINE=InnoDB
    AUTO_INCREMENT=11
;

CREATE TABLE `password_resets` (
                                   `email` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
                                   `token` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
                                   `created_at` TIMESTAMP NULL DEFAULT NULL,
                                   INDEX `password_resets_email_index` (`email`)
)
    COLLATE='utf8mb4_unicode_ci'
    ENGINE=InnoDB
;

CREATE TABLE `plants` (
                          `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                          `title` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
                          `category_id` BIGINT(20) NOT NULL,
                          `about` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
                          `price` INT(11) NOT NULL,
                          `photo` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
                          `created_at` TIMESTAMP NULL DEFAULT NULL,
                          `updated_at` TIMESTAMP NULL DEFAULT NULL,
                          PRIMARY KEY (`id`)
)
    COLLATE='utf8mb4_unicode_ci'
    ENGINE=InnoDB
    AUTO_INCREMENT=21
;

CREATE TABLE `sessions` (
                            `id` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
                            `user_id` BIGINT(20) UNSIGNED NULL DEFAULT NULL,
                            `ip_address` VARCHAR(45) NULL DEFAULT NULL COLLATE 'utf8mb4_unicode_ci',
                            `user_agent` TEXT NULL COLLATE 'utf8mb4_unicode_ci',
                            `payload` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
                            `last_activity` INT(11) NOT NULL,
                            UNIQUE INDEX `sessions_id_unique` (`id`)
)
    COLLATE='utf8mb4_unicode_ci'
    ENGINE=InnoDB
;

CREATE TABLE `users` (
                         `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                         `name` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
                         `email` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
                         `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
                         `password` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
                         `is_admin` TINYINT(4) NOT NULL DEFAULT '0',
                         `remember_token` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8mb4_unicode_ci',
                         `created_at` TIMESTAMP NULL DEFAULT NULL,
                         `updated_at` TIMESTAMP NULL DEFAULT NULL,
                         PRIMARY KEY (`id`),
                         UNIQUE INDEX `users_email_unique` (`email`)
)
    COLLATE='utf8mb4_unicode_ci'
    ENGINE=InnoDB
    AUTO_INCREMENT=3
;

INSERT INTO `categories` ( `title`, `description`, `created_at`, `updated_at`) VALUES
( 'Розы кустовые', 'Пышноцветущие кустарники', '2019-08-22 14:57:18', '2019-08-22 14:57:28'),
( 'Розы кремовые', 'Цветы нежно кремовые до насыщено розового оттенка', '2019-08-22 14:57:21', '2019-08-22 14:57:29'),
( 'Крупноцветковые', 'Розы с крупными одиночными цветами, отличаются яркой окраской и длительным периодом цветения', '2019-08-22 14:57:23', '2019-08-22 14:57:31'),
( 'Розы чайные', 'Розы с насыщенным пьянящим ароматом', '2019-08-22 14:57:24', '2019-08-22 14:57:32'),
( 'Плетистые розы', 'Стебли плетистых роз крепятся к шпалерам и создают неповторимое убранство беседок и арок', '2019-08-22 14:57:25', '2019-08-22 14:57:33');

INSERT IGNORE INTO `users` ( `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
( 'Xenia', 'xenia1898@gmail.com', NULL, '$2y$10$6atWbBL/Bfi1euG4zzydNuEdY5n/vo/hP9F6nigHhQonmpc0SIiiy', 0, 'pgZqSfPXKC3lX73esnb105MTSw7RqR742XamS0ra5TN3X0SQfr3femkKHPOA', '2019-08-22 08:34:03', '2019-08-22 08:34:03'),
( 'Lalii', 'laliiy@rambler.ru', NULL, '$2y$10$iAv3Zqs4qVN4TxITg1trEOlrF22XOzR3rfb7Xz3gYq6nse0em5UTK', 0, 'baCv9NZfGqexw3XTdJQpqzmojOzmPcT5nPl7xfb6LHuLUNwzzOQX3oILIJu7', '2019-08-22 08:34:30', '2019-08-22 08:34:30');
