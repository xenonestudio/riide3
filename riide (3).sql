-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-02-2021 a las 11:42:48
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `riide`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carteleras`
--

CREATE TABLE `carteleras` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pantalla_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carteleras`
--

INSERT INTO `carteleras` (`id`, `titulo`, `pantalla_id`, `created_at`, `updated_at`) VALUES
(1, 'Panel categoria', 1, '2021-02-27 06:11:00', '2021-02-27 06:15:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartelera_pancartas`
--

CREATE TABLE `cartelera_pancartas` (
  `id` int(10) UNSIGNED NOT NULL,
  `cartelera_id` int(11) DEFAULT NULL,
  `pancarta_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cartelera_pancartas`
--

INSERT INTO `cartelera_pancartas` (`id`, `cartelera_id`, `pancarta_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `imagen`, `categoria_id`, `created_at`, `updated_at`) VALUES
(1, 'Restaurantes', 'categorias/February2021/Om8jSXy7w9wLQ1dbmO3D.jpg', NULL, '2021-02-27 05:12:00', '2021-02-27 05:13:58'),
(2, 'Licorerias', 'categorias/February2021/C4rq2blHRM5EeMRO7VG4.jpg', 1, '2021-02-27 05:15:01', '2021-02-27 05:15:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_productos`
--

CREATE TABLE `categoria_productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria_productos`
--

INSERT INTO `categoria_productos` (`id`, `categoria_id`, `producto_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 1, 2, NULL, NULL),
(4, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_tiendas`
--

CREATE TABLE `categoria_tiendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `tienda_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria_tiendas`
--

INSERT INTO `categoria_tiendas` (`id`, `categoria_id`, `tienda_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2021-02-27 04:47:33', '2021-02-27 04:47:33'),
(2, NULL, 1, 'Category 2', 'category-2', '2021-02-27 04:47:33', '2021-02-27 04:47:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'categoria', 'text', 'Categoria', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'imagen', 'image', 'Imagen', 0, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'categoria_id', 'select_dropdown', 'Categoria Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(60, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(61, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(62, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(63, 8, 'categoria_id', 'text', 'Categoria Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(64, 8, 'tienda_id', 'text', 'Tienda Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(65, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(66, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(67, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(68, 9, 'tienda', 'text', 'Tienda', 0, 1, 1, 1, 1, 1, '{}', 2),
(69, 9, 'imagen', 'image', 'Imagen', 0, 1, 1, 1, 1, 1, '{}', 3),
(70, 9, 'panel', 'image', 'Panel', 0, 1, 1, 1, 1, 1, '{}', 4),
(71, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(72, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(73, 9, 'tienda_belongstomany_categoria_relationship', 'relationship', 'categorias', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Categoria\",\"table\":\"categorias\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"categoria\",\"pivot_table\":\"categoria_tiendas\",\"pivot\":\"1\",\"taggable\":\"0\"}', 7),
(74, 7, 'categoria_belongsto_categoria_relationship', 'relationship', 'categorias', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Categoria\",\"table\":\"categorias\",\"type\":\"belongsTo\",\"column\":\"categoria_id\",\"key\":\"id\",\"label\":\"categoria\",\"pivot_table\":\"categoria_tiendas\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(75, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(76, 10, 'producto', 'text', 'Producto', 0, 1, 1, 1, 1, 1, '{}', 2),
(77, 10, 'descripcion', 'text_area', 'Descripcion', 0, 1, 1, 1, 1, 1, '{}', 3),
(78, 10, 'precio_a', 'number', 'Precio A', 0, 1, 1, 1, 1, 1, '{}', 4),
(79, 10, 'precio_b', 'number', 'Precio B', 0, 1, 1, 1, 1, 1, '{}', 5),
(80, 10, 'cantidad', 'number', 'Cantidad', 0, 1, 1, 1, 1, 1, '{}', 6),
(81, 10, 'imagen', 'image', 'Imagen', 0, 1, 1, 1, 1, 1, '{}', 7),
(82, 10, 'tienda_id', 'select_dropdown', 'Tienda Id', 0, 1, 1, 1, 1, 1, '{}', 8),
(83, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 9),
(84, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(85, 10, 'producto_belongsto_tienda_relationship', 'relationship', 'tiendas', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Tienda\",\"table\":\"tiendas\",\"type\":\"belongsTo\",\"column\":\"tienda_id\",\"key\":\"id\",\"label\":\"tienda\",\"pivot_table\":\"categoria_tiendas\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(86, 9, 'tienda_hasmany_producto_relationship', 'relationship', 'productos', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Producto\",\"table\":\"productos\",\"type\":\"hasMany\",\"column\":\"tienda_id\",\"key\":\"id\",\"label\":\"producto\",\"pivot_table\":\"categoria_tiendas\",\"pivot\":\"0\",\"taggable\":null}', 8),
(87, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(88, 11, 'categoria_id', 'text', 'Categoria Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(89, 11, 'producto_id', 'text', 'Producto Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(90, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(91, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(92, 10, 'producto_belongstomany_categoria_relationship', 'relationship', 'categorias', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Categoria\",\"table\":\"categorias\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"categoria\",\"pivot_table\":\"categoria_productos\",\"pivot\":\"1\",\"taggable\":null}', 12),
(93, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(94, 12, 'titulo', 'text', 'Titulo', 0, 1, 1, 1, 1, 1, '{}', 2),
(95, 12, 'enlace', 'text', 'Enlace', 0, 1, 1, 1, 1, 1, '{}', 3),
(97, 12, 'tienda_id', 'text', 'Tienda Id', 0, 1, 1, 1, 1, 1, '{}', 5),
(98, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(99, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(100, 12, 'pancarta_belongsto_tienda_relationship', 'relationship', 'tiendas', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Tienda\",\"table\":\"tiendas\",\"type\":\"belongsTo\",\"column\":\"tienda_id\",\"key\":\"id\",\"label\":\"tienda\",\"pivot_table\":\"categoria_productos\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(101, 9, 'tienda_hasmany_pancarta_relationship', 'relationship', 'pancartas', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Pancarta\",\"table\":\"pancartas\",\"type\":\"hasMany\",\"column\":\"tienda_id\",\"key\":\"id\",\"label\":\"titulo\",\"pivot_table\":\"categoria_productos\",\"pivot\":\"0\",\"taggable\":null}', 9),
(102, 12, 'pancarta', 'image', 'Pancarta', 0, 1, 1, 1, 1, 1, '{}', 4),
(103, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(104, 13, 'titulo', 'text', 'Titulo', 0, 1, 1, 1, 1, 1, '{}', 2),
(105, 13, 'pantalla_id', 'text', 'Pantalla Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(106, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(107, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(108, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(109, 14, 'pantalla', 'text', 'Pantalla', 0, 1, 1, 1, 1, 1, '{}', 2),
(110, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(111, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(112, 13, 'cartelera_belongsto_pantalla_relationship', 'relationship', 'pantallas', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Pantalla\",\"table\":\"pantallas\",\"type\":\"belongsTo\",\"column\":\"pantalla_id\",\"key\":\"id\",\"label\":\"pantalla\",\"pivot_table\":\"carteleras\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(113, 13, 'cartelera_belongstomany_pancarta_relationship', 'relationship', 'pancartas', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Pancarta\",\"table\":\"pancartas\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"titulo\",\"pivot_table\":\"cartelera_pancartas\",\"pivot\":\"1\",\"taggable\":null}', 7),
(114, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(115, 15, 'cartelera_id', 'text', 'Cartelera Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(116, 15, 'pancarta_id', 'text', 'Pancarta Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(117, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(118, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(119, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(120, 16, 'dia', 'text', 'Dia', 0, 1, 1, 1, 1, 1, '{}', 2),
(121, 16, 'numero', 'number', 'Numero', 0, 1, 1, 1, 1, 1, '{}', 3),
(122, 16, 'inicio', 'time', 'Inicio', 0, 1, 1, 1, 1, 1, '{}', 4),
(123, 16, 'fin', 'time', 'Fin', 0, 1, 1, 1, 1, 1, '{}', 5),
(124, 16, 'tienda_id', 'select_dropdown', 'Tienda Id', 0, 1, 1, 1, 1, 1, '{}', 6),
(125, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(126, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(127, 16, 'horario_belongsto_tienda_relationship', 'relationship', 'tiendas', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Tienda\",\"table\":\"tiendas\",\"type\":\"belongsTo\",\"column\":\"tienda_id\",\"key\":\"id\",\"label\":\"tienda\",\"pivot_table\":\"cartelera_pancartas\",\"pivot\":\"0\",\"taggable\":null}', 9),
(128, 9, 'tienda_hasmany_horario_relationship', 'relationship', 'horarios', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Horario\",\"table\":\"horarios\",\"type\":\"hasMany\",\"column\":\"tienda_id\",\"key\":\"id\",\"label\":\"dia\",\"pivot_table\":\"cartelera_pancartas\",\"pivot\":\"0\",\"taggable\":null}', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2021-02-27 04:47:11', '2021-02-27 04:47:11'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-02-27 04:47:11', '2021-02-27 04:47:11'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2021-02-27 04:47:11', '2021-02-27 04:47:11'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2021-02-27 04:47:31', '2021-02-27 04:47:31'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2021-02-27 04:47:34', '2021-02-27 04:47:34'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2021-02-27 04:47:37', '2021-02-27 04:47:37'),
(7, 'categorias', 'categorias', 'Categoria', 'Categorias', NULL, 'App\\Categoria', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-02-27 04:58:39', '2021-02-27 05:11:30'),
(8, 'categoria_tiendas', 'categoria-tiendas', 'Categoria Tienda', 'Categoria Tiendas', NULL, 'App\\CategoriaTienda', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-02-27 05:04:41', '2021-02-27 05:04:41'),
(9, 'tiendas', 'tiendas', 'Tienda', 'Tiendas', NULL, 'App\\Tienda', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-02-27 05:05:03', '2021-02-27 05:16:46'),
(10, 'productos', 'productos', 'Producto', 'Productos', NULL, 'App\\Producto', NULL, NULL, NULL, 0, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-02-27 05:26:41', '2021-02-27 05:31:43'),
(11, 'categoria_productos', 'categoria-productos', 'Categoria Producto', 'Categoria Productos', NULL, 'App\\CategoriaProducto', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-02-27 05:38:27', '2021-02-27 05:38:27'),
(12, 'pancartas', 'pancartas', 'Pancarta', 'Pancartas', NULL, 'App\\Pancarta', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-02-27 05:46:08', '2021-02-27 05:51:15'),
(13, 'carteleras', 'carteleras', 'Cartelera', 'Carteleras', NULL, 'App\\Cartelera', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-02-27 06:02:28', '2021-02-27 06:11:25'),
(14, 'pantallas', 'pantallas', 'Pantalla', 'Pantallas', NULL, 'App\\Pantalla', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-02-27 06:03:58', '2021-02-27 06:03:58'),
(15, 'cartelera_pancartas', 'cartelera-pancartas', 'Cartelera Pancarta', 'Cartelera Pancartas', NULL, 'App\\CarteleraPancarta', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-02-27 06:21:04', '2021-02-27 06:21:04'),
(16, 'horarios', 'horarios', 'Horario', 'Horarios', NULL, 'App\\Horario', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-02-27 06:21:20', '2021-02-27 06:24:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `dia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `inicio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tienda_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `dia`, `numero`, `inicio`, `fin`, `tienda_id`, `created_at`, `updated_at`) VALUES
(1, 'Lunes', 1, '23:26', '03:26', 1, '2021-02-27 06:26:31', '2021-02-27 06:26:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-02-27 04:47:14', '2021-02-27 04:47:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2021-02-27 04:47:15', '2021-02-27 04:47:15', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2021-02-27 04:47:15', '2021-02-27 04:47:15', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2021-02-27 04:47:15', '2021-02-27 04:47:15', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2021-02-27 04:47:15', '2021-02-27 04:47:15', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2021-02-27 04:47:15', '2021-02-27 04:47:15', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2021-02-27 04:47:15', '2021-02-27 04:47:15', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2021-02-27 04:47:15', '2021-02-27 04:47:15', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2021-02-27 04:47:15', '2021-02-27 04:47:15', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2021-02-27 04:47:16', '2021-02-27 04:47:16', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2021-02-27 04:47:16', '2021-02-27 04:47:16', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2021-02-27 04:47:32', '2021-02-27 04:47:32', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2021-02-27 04:47:36', '2021-02-27 04:47:36', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2021-02-27 04:47:38', '2021-02-27 04:47:38', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2021-02-27 04:47:44', '2021-02-27 04:47:44', 'voyager.hooks', NULL),
(15, 1, 'Categorias', '', '_self', NULL, NULL, NULL, 15, '2021-02-27 04:58:40', '2021-02-27 04:58:40', 'voyager.categorias.index', NULL),
(16, 1, 'Categoria Tiendas', '', '_self', NULL, NULL, NULL, 16, '2021-02-27 05:04:42', '2021-02-27 05:04:42', 'voyager.categoria-tiendas.index', NULL),
(17, 1, 'Tiendas', '', '_self', NULL, NULL, NULL, 17, '2021-02-27 05:05:04', '2021-02-27 05:05:04', 'voyager.tiendas.index', NULL),
(18, 1, 'Productos', '', '_self', NULL, NULL, NULL, 18, '2021-02-27 05:26:42', '2021-02-27 05:26:42', 'voyager.productos.index', NULL),
(19, 1, 'Categoria Productos', '', '_self', NULL, NULL, NULL, 19, '2021-02-27 05:38:27', '2021-02-27 05:38:27', 'voyager.categoria-productos.index', NULL),
(20, 1, 'Pancartas', '', '_self', NULL, NULL, NULL, 20, '2021-02-27 05:46:09', '2021-02-27 05:46:09', 'voyager.pancartas.index', NULL),
(21, 1, 'Carteleras', '', '_self', NULL, NULL, NULL, 21, '2021-02-27 06:02:29', '2021-02-27 06:02:29', 'voyager.carteleras.index', NULL),
(22, 1, 'Pantallas', '', '_self', NULL, NULL, NULL, 22, '2021-02-27 06:03:58', '2021-02-27 06:03:58', 'voyager.pantallas.index', NULL),
(23, 1, 'Cartelera Pancartas', '', '_self', NULL, NULL, NULL, 23, '2021-02-27 06:21:05', '2021-02-27 06:21:05', 'voyager.cartelera-pancartas.index', NULL),
(24, 1, 'Horarios', '', '_self', NULL, NULL, NULL, 24, '2021-02-27 06:21:20', '2021-02-27 06:21:20', 'voyager.horarios.index', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2021-02-27 04:47:39', '2021-02-27 04:47:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pancartas`
--

CREATE TABLE `pancartas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enlace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pancarta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tienda_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pancartas`
--

INSERT INTO `pancartas` (`id`, `titulo`, `enlace`, `pancarta`, `tienda_id`, `created_at`, `updated_at`) VALUES
(1, 'fdgf gdh h', 'http://localhost:8000/admin/pancartas/create', 'pancartas/February2021/Cp4xghbUViv2JdlatHUH.png', 1, '2021-02-27 05:55:01', '2021-02-27 05:55:01'),
(2, 'rrrr', 'http://localhost:8000/admin/pancartas/create', 'pancartas/February2021/L3iuiTJrrRAAtSu4MLDM.jpg', 1, '2021-02-27 06:16:47', '2021-02-27 06:16:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pantallas`
--

CREATE TABLE `pantallas` (
  `id` int(10) UNSIGNED NOT NULL,
  `pantalla` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pantallas`
--

INSERT INTO `pantallas` (`id`, `pantalla`, `created_at`, `updated_at`) VALUES
(1, 'Categorias', '2021-02-27 06:05:24', '2021-02-27 06:05:24'),
(2, 'Subcategorias', '2021-02-27 06:06:06', '2021-02-27 06:06:06'),
(3, 'Promociones', '2021-02-27 06:06:22', '2021-02-27 06:06:22'),
(4, 'Lo mas hot', '2021-02-27 06:06:39', '2021-02-27 06:06:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2021-02-27 04:47:16', '2021-02-27 04:47:16'),
(2, 'browse_bread', NULL, '2021-02-27 04:47:16', '2021-02-27 04:47:16'),
(3, 'browse_database', NULL, '2021-02-27 04:47:16', '2021-02-27 04:47:16'),
(4, 'browse_media', NULL, '2021-02-27 04:47:16', '2021-02-27 04:47:16'),
(5, 'browse_compass', NULL, '2021-02-27 04:47:17', '2021-02-27 04:47:17'),
(6, 'browse_menus', 'menus', '2021-02-27 04:47:17', '2021-02-27 04:47:17'),
(7, 'read_menus', 'menus', '2021-02-27 04:47:17', '2021-02-27 04:47:17'),
(8, 'edit_menus', 'menus', '2021-02-27 04:47:17', '2021-02-27 04:47:17'),
(9, 'add_menus', 'menus', '2021-02-27 04:47:17', '2021-02-27 04:47:17'),
(10, 'delete_menus', 'menus', '2021-02-27 04:47:17', '2021-02-27 04:47:17'),
(11, 'browse_roles', 'roles', '2021-02-27 04:47:17', '2021-02-27 04:47:17'),
(12, 'read_roles', 'roles', '2021-02-27 04:47:17', '2021-02-27 04:47:17'),
(13, 'edit_roles', 'roles', '2021-02-27 04:47:17', '2021-02-27 04:47:17'),
(14, 'add_roles', 'roles', '2021-02-27 04:47:17', '2021-02-27 04:47:17'),
(15, 'delete_roles', 'roles', '2021-02-27 04:47:18', '2021-02-27 04:47:18'),
(16, 'browse_users', 'users', '2021-02-27 04:47:18', '2021-02-27 04:47:18'),
(17, 'read_users', 'users', '2021-02-27 04:47:18', '2021-02-27 04:47:18'),
(18, 'edit_users', 'users', '2021-02-27 04:47:18', '2021-02-27 04:47:18'),
(19, 'add_users', 'users', '2021-02-27 04:47:18', '2021-02-27 04:47:18'),
(20, 'delete_users', 'users', '2021-02-27 04:47:18', '2021-02-27 04:47:18'),
(21, 'browse_settings', 'settings', '2021-02-27 04:47:18', '2021-02-27 04:47:18'),
(22, 'read_settings', 'settings', '2021-02-27 04:47:18', '2021-02-27 04:47:18'),
(23, 'edit_settings', 'settings', '2021-02-27 04:47:19', '2021-02-27 04:47:19'),
(24, 'add_settings', 'settings', '2021-02-27 04:47:19', '2021-02-27 04:47:19'),
(25, 'delete_settings', 'settings', '2021-02-27 04:47:19', '2021-02-27 04:47:19'),
(26, 'browse_categories', 'categories', '2021-02-27 04:47:32', '2021-02-27 04:47:32'),
(27, 'read_categories', 'categories', '2021-02-27 04:47:32', '2021-02-27 04:47:32'),
(28, 'edit_categories', 'categories', '2021-02-27 04:47:32', '2021-02-27 04:47:32'),
(29, 'add_categories', 'categories', '2021-02-27 04:47:33', '2021-02-27 04:47:33'),
(30, 'delete_categories', 'categories', '2021-02-27 04:47:33', '2021-02-27 04:47:33'),
(31, 'browse_posts', 'posts', '2021-02-27 04:47:36', '2021-02-27 04:47:36'),
(32, 'read_posts', 'posts', '2021-02-27 04:47:36', '2021-02-27 04:47:36'),
(33, 'edit_posts', 'posts', '2021-02-27 04:47:36', '2021-02-27 04:47:36'),
(34, 'add_posts', 'posts', '2021-02-27 04:47:36', '2021-02-27 04:47:36'),
(35, 'delete_posts', 'posts', '2021-02-27 04:47:36', '2021-02-27 04:47:36'),
(36, 'browse_pages', 'pages', '2021-02-27 04:47:38', '2021-02-27 04:47:38'),
(37, 'read_pages', 'pages', '2021-02-27 04:47:38', '2021-02-27 04:47:38'),
(38, 'edit_pages', 'pages', '2021-02-27 04:47:39', '2021-02-27 04:47:39'),
(39, 'add_pages', 'pages', '2021-02-27 04:47:39', '2021-02-27 04:47:39'),
(40, 'delete_pages', 'pages', '2021-02-27 04:47:39', '2021-02-27 04:47:39'),
(41, 'browse_hooks', NULL, '2021-02-27 04:47:44', '2021-02-27 04:47:44'),
(42, 'browse_categorias', 'categorias', '2021-02-27 04:58:40', '2021-02-27 04:58:40'),
(43, 'read_categorias', 'categorias', '2021-02-27 04:58:40', '2021-02-27 04:58:40'),
(44, 'edit_categorias', 'categorias', '2021-02-27 04:58:40', '2021-02-27 04:58:40'),
(45, 'add_categorias', 'categorias', '2021-02-27 04:58:40', '2021-02-27 04:58:40'),
(46, 'delete_categorias', 'categorias', '2021-02-27 04:58:40', '2021-02-27 04:58:40'),
(47, 'browse_categoria_tiendas', 'categoria_tiendas', '2021-02-27 05:04:42', '2021-02-27 05:04:42'),
(48, 'read_categoria_tiendas', 'categoria_tiendas', '2021-02-27 05:04:42', '2021-02-27 05:04:42'),
(49, 'edit_categoria_tiendas', 'categoria_tiendas', '2021-02-27 05:04:42', '2021-02-27 05:04:42'),
(50, 'add_categoria_tiendas', 'categoria_tiendas', '2021-02-27 05:04:42', '2021-02-27 05:04:42'),
(51, 'delete_categoria_tiendas', 'categoria_tiendas', '2021-02-27 05:04:42', '2021-02-27 05:04:42'),
(52, 'browse_tiendas', 'tiendas', '2021-02-27 05:05:04', '2021-02-27 05:05:04'),
(53, 'read_tiendas', 'tiendas', '2021-02-27 05:05:04', '2021-02-27 05:05:04'),
(54, 'edit_tiendas', 'tiendas', '2021-02-27 05:05:04', '2021-02-27 05:05:04'),
(55, 'add_tiendas', 'tiendas', '2021-02-27 05:05:04', '2021-02-27 05:05:04'),
(56, 'delete_tiendas', 'tiendas', '2021-02-27 05:05:04', '2021-02-27 05:05:04'),
(57, 'browse_productos', 'productos', '2021-02-27 05:26:42', '2021-02-27 05:26:42'),
(58, 'read_productos', 'productos', '2021-02-27 05:26:42', '2021-02-27 05:26:42'),
(59, 'edit_productos', 'productos', '2021-02-27 05:26:42', '2021-02-27 05:26:42'),
(60, 'add_productos', 'productos', '2021-02-27 05:26:42', '2021-02-27 05:26:42'),
(61, 'delete_productos', 'productos', '2021-02-27 05:26:42', '2021-02-27 05:26:42'),
(62, 'browse_categoria_productos', 'categoria_productos', '2021-02-27 05:38:27', '2021-02-27 05:38:27'),
(63, 'read_categoria_productos', 'categoria_productos', '2021-02-27 05:38:27', '2021-02-27 05:38:27'),
(64, 'edit_categoria_productos', 'categoria_productos', '2021-02-27 05:38:27', '2021-02-27 05:38:27'),
(65, 'add_categoria_productos', 'categoria_productos', '2021-02-27 05:38:27', '2021-02-27 05:38:27'),
(66, 'delete_categoria_productos', 'categoria_productos', '2021-02-27 05:38:27', '2021-02-27 05:38:27'),
(67, 'browse_pancartas', 'pancartas', '2021-02-27 05:46:09', '2021-02-27 05:46:09'),
(68, 'read_pancartas', 'pancartas', '2021-02-27 05:46:09', '2021-02-27 05:46:09'),
(69, 'edit_pancartas', 'pancartas', '2021-02-27 05:46:09', '2021-02-27 05:46:09'),
(70, 'add_pancartas', 'pancartas', '2021-02-27 05:46:09', '2021-02-27 05:46:09'),
(71, 'delete_pancartas', 'pancartas', '2021-02-27 05:46:09', '2021-02-27 05:46:09'),
(72, 'browse_carteleras', 'carteleras', '2021-02-27 06:02:29', '2021-02-27 06:02:29'),
(73, 'read_carteleras', 'carteleras', '2021-02-27 06:02:29', '2021-02-27 06:02:29'),
(74, 'edit_carteleras', 'carteleras', '2021-02-27 06:02:29', '2021-02-27 06:02:29'),
(75, 'add_carteleras', 'carteleras', '2021-02-27 06:02:29', '2021-02-27 06:02:29'),
(76, 'delete_carteleras', 'carteleras', '2021-02-27 06:02:29', '2021-02-27 06:02:29'),
(77, 'browse_pantallas', 'pantallas', '2021-02-27 06:03:58', '2021-02-27 06:03:58'),
(78, 'read_pantallas', 'pantallas', '2021-02-27 06:03:58', '2021-02-27 06:03:58'),
(79, 'edit_pantallas', 'pantallas', '2021-02-27 06:03:58', '2021-02-27 06:03:58'),
(80, 'add_pantallas', 'pantallas', '2021-02-27 06:03:58', '2021-02-27 06:03:58'),
(81, 'delete_pantallas', 'pantallas', '2021-02-27 06:03:58', '2021-02-27 06:03:58'),
(82, 'browse_cartelera_pancartas', 'cartelera_pancartas', '2021-02-27 06:21:05', '2021-02-27 06:21:05'),
(83, 'read_cartelera_pancartas', 'cartelera_pancartas', '2021-02-27 06:21:05', '2021-02-27 06:21:05'),
(84, 'edit_cartelera_pancartas', 'cartelera_pancartas', '2021-02-27 06:21:05', '2021-02-27 06:21:05'),
(85, 'add_cartelera_pancartas', 'cartelera_pancartas', '2021-02-27 06:21:05', '2021-02-27 06:21:05'),
(86, 'delete_cartelera_pancartas', 'cartelera_pancartas', '2021-02-27 06:21:05', '2021-02-27 06:21:05'),
(87, 'browse_horarios', 'horarios', '2021-02-27 06:21:20', '2021-02-27 06:21:20'),
(88, 'read_horarios', 'horarios', '2021-02-27 06:21:20', '2021-02-27 06:21:20'),
(89, 'edit_horarios', 'horarios', '2021-02-27 06:21:20', '2021-02-27 06:21:20'),
(90, 'add_horarios', 'horarios', '2021-02-27 06:21:20', '2021-02-27 06:21:20'),
(91, 'delete_horarios', 'horarios', '2021-02-27 06:21:20', '2021-02-27 06:21:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(60, 2),
(61, 1),
(61, 2),
(62, 1),
(62, 2),
(63, 1),
(63, 2),
(64, 1),
(64, 2),
(65, 1),
(65, 2),
(66, 1),
(66, 2),
(67, 1),
(67, 2),
(68, 1),
(68, 2),
(69, 1),
(69, 2),
(70, 1),
(70, 2),
(71, 1),
(71, 2),
(72, 1),
(72, 2),
(73, 1),
(73, 2),
(74, 1),
(74, 2),
(75, 1),
(75, 2),
(76, 1),
(76, 2),
(77, 1),
(77, 2),
(78, 1),
(78, 2),
(79, 1),
(79, 2),
(80, 1),
(80, 2),
(81, 1),
(81, 2),
(82, 1),
(82, 2),
(83, 1),
(83, 2),
(84, 1),
(84, 2),
(85, 1),
(85, 2),
(86, 1),
(86, 2),
(87, 1),
(87, 2),
(88, 1),
(88, 2),
(89, 1),
(89, 2),
(90, 1),
(90, 2),
(91, 1),
(91, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-02-27 04:47:36', '2021-02-27 04:47:36'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-02-27 04:47:36', '2021-02-27 04:47:36'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-02-27 04:47:37', '2021-02-27 04:47:37'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-02-27 04:47:37', '2021-02-27 04:47:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_a` float DEFAULT NULL,
  `precio_b` float DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tienda_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `descripcion`, `precio_a`, `precio_b`, `cantidad`, `imagen`, `tienda_id`, `created_at`, `updated_at`) VALUES
(1, 'Memorias', 'USB', 10, 8, 33, 'productos/February2021/Vw2Ak5BZzvIUqZT4WLAF.png', 1, '2021-02-27 05:33:00', '2021-02-27 05:40:15'),
(2, 'ddddrgfrg', 'vfvf', 2, 3, 5, 'productos/February2021/qyoHeVODkvmqT353IYzk.png', 1, '2021-02-27 06:34:00', '2021-02-27 06:34:50'),
(3, 'thtgh', 'fgbftg', NULL, NULL, NULL, NULL, 1, '2021-02-27 06:35:18', '2021-02-27 06:35:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'Developer', 'Developer', '2021-02-27 04:47:16', '2021-02-27 05:17:58'),
(2, 'Admin', 'Admin', '2021-02-27 04:47:16', '2021-02-27 05:18:21'),
(3, 'Asociado', 'Asociado', '2021-02-27 05:18:58', '2021-02-27 05:18:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings/February2021/nMxzyBlORRFfO293KoGu.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `tienda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `panel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tiendas`
--

INSERT INTO `tiendas` (`id`, `tienda`, `imagen`, `panel`, `created_at`, `updated_at`) VALUES
(1, 'Developer Store', 'tiendas/February2021/sJrDdR52IPyuLTCIanUc.png', 'tiendas/February2021/CFSep8olCWifMpd6hgri.png', '2021-02-27 05:20:00', '2021-02-27 05:21:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2021-02-27 04:47:39', '2021-02-27 04:47:39'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2021-02-27 04:47:39', '2021-02-27 04:47:39'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2021-02-27 04:47:39', '2021-02-27 04:47:39'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2021-02-27 04:47:39', '2021-02-27 04:47:39'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2021-02-27 04:47:39', '2021-02-27 04:47:39'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2021-02-27 04:47:40', '2021-02-27 04:47:40'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2021-02-27 04:47:40', '2021-02-27 04:47:40'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2021-02-27 04:47:40', '2021-02-27 04:47:40'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2021-02-27 04:47:40', '2021-02-27 04:47:40'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2021-02-27 04:47:40', '2021-02-27 04:47:40'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2021-02-27 04:47:40', '2021-02-27 04:47:40'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2021-02-27 04:47:40', '2021-02-27 04:47:40'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2021-02-27 04:47:40', '2021-02-27 04:47:40'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2021-02-27 04:47:40', '2021-02-27 04:47:40'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2021-02-27 04:47:41', '2021-02-27 04:47:41'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2021-02-27 04:47:41', '2021-02-27 04:47:41'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2021-02-27 04:47:41', '2021-02-27 04:47:41'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2021-02-27 04:47:41', '2021-02-27 04:47:41'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2021-02-27 04:47:41', '2021-02-27 04:47:41'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2021-02-27 04:47:41', '2021-02-27 04:47:41'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2021-02-27 04:47:41', '2021-02-27 04:47:41'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2021-02-27 04:47:41', '2021-02-27 04:47:41'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2021-02-27 04:47:42', '2021-02-27 04:47:42'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2021-02-27 04:47:42', '2021-02-27 04:47:42'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2021-02-27 04:47:42', '2021-02-27 04:47:42'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2021-02-27 04:47:42', '2021-02-27 04:47:42'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2021-02-27 04:47:42', '2021-02-27 04:47:42'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2021-02-27 04:47:42', '2021-02-27 04:47:42'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2021-02-27 04:47:42', '2021-02-27 04:47:42'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2021-02-27 04:47:42', '2021-02-27 04:47:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$Wqj.ShhhjFq4wLNUgvoYR.zQCwVQNievK6BKXDWiUczwsclLo9aMK', 'ikS1RxUV4JaGwNYHq5UJXKZS9fL8eIPeWs6aAk0UEXaj3jxy0k5tG65mJRjq', '{\"locale\":\"es\"}', '2021-02-27 04:47:34', '2021-02-27 06:30:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carteleras`
--
ALTER TABLE `carteleras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cartelera_pancartas`
--
ALTER TABLE `cartelera_pancartas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_productos`
--
ALTER TABLE `categoria_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_tiendas`
--
ALTER TABLE `categoria_tiendas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indices de la tabla `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indices de la tabla `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indices de la tabla `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indices de la tabla `pancartas`
--
ALTER TABLE `pancartas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pantallas`
--
ALTER TABLE `pantallas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indices de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carteleras`
--
ALTER TABLE `carteleras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cartelera_pancartas`
--
ALTER TABLE `cartelera_pancartas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria_productos`
--
ALTER TABLE `categoria_productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categoria_tiendas`
--
ALTER TABLE `categoria_tiendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT de la tabla `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pancartas`
--
ALTER TABLE `pancartas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pantallas`
--
ALTER TABLE `pantallas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
