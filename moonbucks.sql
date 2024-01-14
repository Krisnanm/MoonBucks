-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2024 pada 07.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moonbucks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(9, 'Coffee', 'coffee', '2023-12-10 01:54:56', '2023-12-10 01:54:56'),
(10, 'Non Coffee', 'non-coffee', '2023-12-10 01:54:56', '2023-12-10 01:54:56'),
(11, 'Snacks', 'snacks', '2023-12-10 01:54:56', '2023-12-10 01:54:56'),
(12, 'Main Course', 'main-course', '2023-12-10 01:54:56', '2023-12-10 01:54:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2023_12_10_085218_add_slug_to_categories_table', 2),
(23, '2023_12_24_031825_create_products_table', 3),
(31, '2014_10_12_000000_create_users_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(225) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `image`, `name`, `description`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(73, 'coffee1.png', 'Ice Americano', 'Ice Americano: pure espresso, mineral water, and ice cubes, provides a bitter and refreshing sensation without other mixtures, strong caffeine.\r\n\r\n\r\n', '2', 9, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(74, 'coffee2.png', 'Vanilla Latte', 'Vanilla Latte: espresso, milk and vanilla syrup, creating a creamy drink with a touch of sweetness and bitterness of espresso combined.', '2', 9, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(75, 'coffee3.png', 'Mochaccino', 'Mochaccino: espresso, milk and chocolate, presenting the harmony of “mocha” and the smoothness of “cappuccino” in one coffee drink.', '2', 9, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(76, 'coffee4.png', 'Dalgona Coffee', 'Dalgona Coffee: fresh milk, coffee powder, warm water, stirred until the foam thickens, then poured over milk and ice cubes beautifully.', '3', 9, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(77, 'coffee5.png', 'Blisspresso', 'Blisspresso Delightful: iced milk coffee, palm sugar, a blend of bitter espresso, creamy milk, and stunning sweet deliciousness.', '4', 9, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(78, 'coffee6.png', 'Affogato', 'Affogato: espresso poured over ice cream, creating a combination of strong and sweet coffee that is enticing, delicious and refreshing.', '3', 9, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(79, 'noncoffee1.png', 'Ice Lychee Tea', 'Ice Lychee Tea: a refreshing drink with lychee juice, tea, and ice, often garnished with refreshing lychee.\r\n\r\n\r\n', '2', 10, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(80, 'noncoffee2.png', 'Matcha Latte', 'Matcha Latte: a drink made from matcha powder, milk and hot water. This drink has a creamy texture and a slightly sweet taste.', '4', 10, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(81, 'noncoffee3.png', 'Midnight Currant', 'Midnight Currant: fresh mocktail dominated by black currant, juice/syrup mixture and Sprite, giving a fizzy touch.', '3', 10, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(82, 'noncoffee4.png', 'Strawberry Splash', 'Strawberry Splash: fresh mocktail with strawberry flavor and a touch of sunrise freshness, syrup and sparkling water.', '3', 10, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(83, 'noncoffee5.png', 'Chocolate Blended', 'Chocolate Blended: a milkshake made from chocolate ice cream, milk and chocolate syrup. This is a rich and delicious drink.', '4', 10, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(84, 'noncoffee6.png', 'Berry Dream', 'Berry Dream: a mixture of fresh strawberries and milk, blended with ice, served with sliced ​​strawberries and whipped cream.', '4', 10, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(85, 'snacks1.png', 'French Fries', 'Fried frice sprinkled with salted parsley and Parmesan cheese which has a salty savory taste and is also accompanied by cheesy sauce.', '7', 11, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(86, 'snacks2.png', 'Tiramisu', 'Tiramisu is an Italian dessert with layers of ladyfinger biscuits, creamy mascarpone and coffee, finished with cocoa powder on top.', '5', 11, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(87, 'snacks3.png', 'Tahu Cabe', 'Fried Tofu with Chili Flakes is a dish of tofu cubes cooked with chili spices. Tofu mixed with chili + salt for a spicy and savory taste.', '5', 11, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(88, 'snacks4.png', 'Blueberry Cake', 'Blueberry Cake is made from butter biscuit crumbs, soft cheesecake, covered with blueberry compote.', '6', 11, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(89, 'snacks5.png', 'Garlic Bread', 'Garlic Bread: delicious bread with butter and garlic, baked until golden brown, bringing an appetizing taste.', '5', 11, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(90, 'snacks6.png', 'Croffle', 'Croffle is a combination of croissant and waffle. Croissants are cooked in a waffle maker, resulting in soft croissants with browned waffles.', '4', 11, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(91, 'maincourse1.png', 'Pasta Carbonara', 'Spaghetti Carbonara: a typical Italian pasta dish made from spaghetti, eggs, parmesan cheese and bacon.', '7', 12, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(92, 'maincourse2.png', 'Curry Katsu Bowl', 'Curry Katsu Bowl: a Japanese dish consisting of rice, curry, and chicken pieces coated in breadcrumbs and fried in oil.\r\n\r\n\r\n', '5', 12, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(93, 'maincourse3.png', 'Yakiniku Donburi', 'Yakiniku Donburi: Japanese dish consisting of rice with pieces of grilled beef, served in Indonesia.', '4', 12, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(94, 'maincourse4.png', 'Indomie Kuah', 'Indomie is an Indonesian instant noodle brand that is popular throughout the world. Available in various Indomie soup flavors.', '2', 12, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(95, 'maincourse5.png', 'Fried Rice', 'Nasi Goreng: rice fried with vegetables, eggs and meat, creating a uniquely delicious dish.', '3', 12, '2023-12-25 00:25:13', '2023-12-25 00:25:13'),
(96, 'maincourse6.png', 'Mie Ayam Bakso', 'Fried noodle with meatball is an Indonesian noodle dish made from chicken stock, chicken meat, meatballs and yellow noodles.', '8', 12, '2023-12-25 00:25:13', '2023-12-25 00:25:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `name`, `phone_number`, `password`, `created_at`, `updated_at`) VALUES
(4, 'Noer', '0811808054', '$2y$12$W7.tYPvJ.Bcc9kz8ZEQPCumSwI8AjeszxkK9TPh.SsRaGWv0o4VJS', '2024-01-05 16:24:42', '2024-01-05 16:24:42'),
(5, 'krisna', '085717650421', '$2y$12$N.fpcymR0QgyBJPjWiDB5et2vj3vMG6HD.2qhRRTZhN4TuIfokGfW', '2024-01-05 17:52:41', '2024-01-05 17:52:41'),
(7, 'Krisna Gusdio Fadri', '0811808085', '$2y$12$m/8CkpRTi2cMEYYRaQA5bO9i9nVX7JPYwBy6v4L.F8pu6lM1Q5MlK', '2024-01-05 19:34:06', '2024-01-05 19:34:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
