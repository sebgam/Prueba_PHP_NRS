-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2017 a las 04:28:24
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `rank_pelis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`titulo`, `categoria`, `imagen`, `created_at`, `updated_at`) VALUES
('Aliados', 'Accion', 'aliados.jpg', '2017-03-31 22:10:02', '2017-03-31 22:10:02'),
('Atentado en paris', 'Accion', 'atentado-en-paris.jpg', '2017-03-31 22:10:02', '2017-03-31 22:10:02'),
('El contador', 'Accion', 'el-contador.jpg', '2017-03-31 22:11:07', '2017-03-31 22:11:07'),
('El especialista resurreccion', 'Accion', 'el-especialista-resurreccion.jpg', '2017-03-31 22:11:07', '2017-03-31 22:11:07'),
('Jack reacher sin regreso', 'Accion', 'jack-reacher-sin-regreso.jpg', '2017-03-31 22:12:10', '2017-03-31 22:12:10'),
('Jason bourne', 'Accion', 'jason-bourne.jpg', '2017-03-31 22:12:10', '2017-03-31 22:12:10'),
('Assassing creed', 'Aventura', 'assassins-creed.jpg', '2017-03-31 22:13:19', '2017-03-31 22:13:19'),
('La leyenda de tarzan', 'Aventura', 'la-leyenda-de-tarzan.jpg', '2017-03-31 22:13:19', '2017-03-31 22:13:19'),
('La serie divergente leal', 'Aventura', 'la-serie-divergente-leal.jpg', '2017-03-31 22:14:11', '2017-03-31 22:14:11'),
('Los ilucioniustas 2', 'Aventura', 'los-ilusionistas-2.jpg', '2017-03-31 22:14:11', '2017-03-31 22:14:11'),
('Nerve juego sin reglas', 'Aventura', 'nerve-un-juego-sin-reglas.jpg', '2017-03-31 22:15:01', '2017-03-31 22:15:01'),
('Pasajeros', 'Aventura', 'pasajeros.jpg', '2017-03-31 22:15:01', '2017-03-31 22:15:01'),
('Batman vs superman', 'ciencia ficcion', 'batman-vs-superman-el-origen-de-la-justicia.jpg', '2017-03-31 22:16:22', '2017-03-31 22:16:22'),
('Capitan america civil war', 'Ciencia ficcion', 'capitan-america-civil-war.jpg', '2017-03-31 22:16:22', '2017-03-31 22:16:22'),
('Dia de la independencia contraataque', 'Ciencia ficcion', 'dia-de-la-independencia-contraataque.jpg', '2017-03-31 22:17:33', '2017-03-31 22:17:33'),
('Rogue one a star wars story', 'Ciencia ficcion', 'rogue-one-a-star-wars-story.jpg', '2017-03-31 22:17:33', '2017-03-31 22:17:33'),
('Star trek sin limites', 'Ciencia ficcion', 'star-trek-sin-limites.jpg', '2017-03-31 22:18:29', '2017-03-31 22:18:29'),
('X men apocalipsis', 'Ciencia ficcion', 'x-men-apocalipsis.jpg', '2017-03-31 22:18:29', '2017-03-31 22:18:29'),
('El club de las mamas rebeldes', 'Comedia', 'el-club-de-las-madres-rebeldes.jpg', '2017-03-31 22:19:37', '2017-03-31 22:19:37'),
('Espiando a los vecinos', 'Comedia', 'espiando-a-los-vecinos.jpg', '2017-03-31 22:19:37', '2017-03-31 22:19:37'),
('Fiesta de navidad en la oficina', 'Comedia', 'fiesta-de-navidad-en-la-oficina.jpg', '2017-03-31 22:20:19', '2017-03-31 22:20:19'),
('La fiesta de las sanchichas', 'Comedia', 'la-fiesta-de-las-salchichas.jpg', '2017-03-31 22:20:19', '2017-03-31 22:20:19'),
('Moana', 'Comedia', 'moana.jpg', '2017-03-31 22:21:04', '2017-03-31 22:21:04'),
('Sing ven y canta', 'Comedia', 'sing-ven-y-canta.jpg', '2017-03-31 22:21:04', '2017-03-31 22:21:04'),
('El conjuro 2', 'Terror', 'el-conjuro-2.jpg', '2017-03-31 22:21:46', '2017-03-31 22:21:46'),
('El niño', 'Terror', 'el-nino.jpg', '2017-03-31 22:22:48', '2017-03-31 22:22:48'),
('Inframundo guerras de sangre', 'Terror', 'inframundo-guerras-de-sangre.jpg', '2017-03-31 22:22:48', '2017-03-31 22:22:48'),
('La bruja de blair', 'Terror', 'la-bruja-de-blair.jpg', '2017-03-31 22:23:07', '2017-03-31 22:23:07'),
('Ouija el origen del mal', 'Terror', 'ouija-el-origen-del-mal.jpg', '2017-03-31 22:23:33', '2017-03-31 22:23:33'),
('Cuando las luces se apagan', 'Terror', 'cuando-las-luces-se-apagan.jpg', '2017-03-31 22:25:04', '2017-03-31 22:25:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2017_03_31_202939_add_peliculas', 1),
(3, '2017_03_31_203014_add_valoracion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_cliente` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_cliente`, `nombre`, `apellido`, `created_at`, `updated_at`) VALUES
('1234', 'sebastian', 'gamboa', '2017-04-03 07:22:02', '2017-04-03 07:22:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valoracion` int(11) NOT NULL,
  `nombre` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`titulo`, `valoracion`, `nombre`, `imagen`, `created_at`, `updated_at`) VALUES
('Aliados', 3, 'juan', 'aliados.jpg', '2017-04-03 06:21:51', '2017-04-03 06:21:51'),
('El contador', 4, 'juan', 'el-contador.jpg', '2017-04-03 06:54:43', '2017-04-03 06:54:43'),
('El especialista resurreccion', 4, 'juan', 'el-especialista-resurreccion.jpg', '2017-04-03 07:21:08', '2017-04-03 07:21:08'),
('Atentado en paris', 8, 'juan', 'atentado-en-paris.jpg', '2017-04-03 07:21:14', '2017-04-03 07:21:14'),
('La leyenda de tarzan', 6, 'juan', 'la-leyenda-de-tarzan.jpg', '2017-04-03 07:21:20', '2017-04-03 07:21:20'),
('Espiando a los vecinos', 4, 'juan', 'espiando-a-los-vecinos.jpg', '2017-04-03 07:21:28', '2017-04-03 07:21:28'),
('El club de las mamas rebeldes', 5, 'juan', 'el-club-de-las-madres-rebeldes.jpg', '2017-04-03 07:21:32', '2017-04-03 07:21:32'),
('El club de las mamas rebeldes', 6, 'sebastian', 'el-club-de-las-madres-rebeldes.jpg', '2017-04-03 07:22:13', '2017-04-03 07:22:13'),
('Aliados', 10, 'sebastian', 'aliados.jpg', '2017-04-03 07:22:22', '2017-04-03 07:22:22'),
('Jason bourne', 6, 'sebastian', 'jason-bourne.jpg', '2017-04-03 07:22:31', '2017-04-03 07:22:31'),
('Atentado en paris', 5, 'sebastian', 'atentado-en-paris.jpg', '2017-04-03 07:22:45', '2017-04-03 07:22:45'),
('El especialista resurreccion', 10, 'sebastian', 'el-especialista-resurreccion.jpg', '2017-04-03 07:23:02', '2017-04-03 07:23:02'),
('Capitan america civil war', 10, 'sebastian', 'capitan-america-civil-war.jpg', '2017-04-03 07:23:15', '2017-04-03 07:23:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
