-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2023 a las 22:11:04
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'televisores', 'toda clase de televisores', NULL, NULL),
(2, 'zapatillas', 'zapatillas hombre mujer', NULL, NULL),
(3, 'celulares', 'celular gama alta baja y mediana', NULL, NULL),
(4, 'ropa', 'ropas modas en general', NULL, NULL),
(5, 'hogar', 'sillas mesas hogar en general', NULL, NULL),
(6, 'tecnologia', 'laptos ,comptutadoras etc', NULL, NULL),
(7, 'Linea blanca', 'lavadoras refrigeradoras etc', NULL, NULL),
(8, 'cocina', 'arroceras ollas etc', NULL, NULL),
(9, 'navidad', 'Arboles, panetones etc', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_pedidos`
--

CREATE TABLE `detalles_pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_11_09_043634_create_users_table', 1),
(5, '2023_11_16_004830_create_productos_table', 2),
(6, '2023_11_16_011821_create_categorias_table', 2),
(7, '2023_11_16_012009_create_pedidos_table', 2),
(8, '2023_11_16_012014_create_detalles_pedidos_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `fecha_pedido` datetime NOT NULL,
  `estado` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `categoria_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `stock`, `categoria_id`, `created_at`, `updated_at`) VALUES
(1, 'SAMSUMG SMART TV ', ' pulgadas oled full hd 40 pulgadas ', 1500.00, 20, 1, NULL, NULL),
(2, 'LG SMART TV 5TA GENERACION', 'smart tv 50 pulgadas pantalla curva', 1200.00, 50, 1, NULL, NULL),
(3, 'Zapatilla Deportiva A', 'Zapatilla deportiva de alta calidad para entrenamiento', 69.99, 100, 2, NULL, NULL),
(4, 'Zapatilla Casual B', 'Zapatilla casual con diseño moderno y cómodo', 49.99, 80, 2, NULL, NULL),
(5, 'Zapatilla Running C', 'Zapatilla especializada para correr largas distancias', 79.99, 60, 2, NULL, NULL),
(6, 'Zapatilla Infantil D', 'Zapatilla colorida y resistente para niños', 29.99, 120, 2, NULL, NULL),
(7, 'Zapatilla de Moda E', 'Última tendencia en zapatillas de moda urbana', 89.99, 40, 2, NULL, NULL),
(8, 'Zapatilla Skate F', 'Zapatilla diseñada para la práctica de skateboarding', 59.99, 50, 2, NULL, NULL),
(9, 'Zapatilla de Cuero G', 'Elegante zapatilla de cuero para ocasiones formales', 99.99, 30, 2, NULL, NULL),
(10, 'Zapatilla de Senderismo H', 'Zapatilla resistente para actividades al aire libre', 74.99, 70, 2, NULL, NULL),
(11, 'Zapatilla Retro I', 'Zapatilla con estilo retro inspirada en los años 80', 54.99, 45, 2, NULL, NULL),
(12, 'Zapatilla Fitness J', 'Zapatilla ideal para entrenamientos de fitness', 64.99, 55, 2, NULL, NULL),
(13, 'Zapatilla de Verano K', 'Zapatilla ligera y transpirable perfecta para el verano', 39.99, 90, 2, NULL, NULL),
(14, 'Zapatilla de Baloncesto L', 'Zapatilla diseñada para jugadores de baloncesto', 79.99, 35, 2, NULL, NULL),
(15, 'Zapatilla Elegante M', 'Zapatilla elegante y confortable para ocasiones especiales', 89.99, 25, 2, NULL, NULL),
(16, 'Zapatilla Unisex N', 'Zapatilla versátil y unisex para cualquier ocasión', 49.99, 65, 2, NULL, NULL),
(17, 'Zapatilla de Entrenamiento O', 'Zapatilla para entrenamientos intensos y variados', 69.99, 60, 2, NULL, NULL),
(18, 'Zapatilla Urbana P', 'Zapatilla urbana con diseño urbano y juvenil', 44.99, 75, 2, NULL, NULL),
(19, 'Zapatilla de Piel Q', 'Zapatilla con acabado en piel de alta calidad', 79.99, 40, 2, NULL, NULL),
(20, 'Zapatilla de Running R', 'Zapatilla diseñada para corredores profesionales', 89.99, 30, 2, NULL, NULL),
(21, 'Zapatilla Estampada S', 'Zapatilla con estampados llamativos y modernos', 54.99, 50, 2, NULL, NULL),
(22, 'Zapatilla de Montaña T', 'Zapatilla resistente para rutas de montaña y senderismo', 74.99, 35, 2, NULL, NULL),
(23, 'Smartphone Modelo A', 'Teléfono inteligente con características avanzadas', 499.99, 50, 3, NULL, NULL),
(24, 'Celular de Gama Media B', 'Teléfono celular con rendimiento equilibrado', 299.99, 80, 3, NULL, NULL),
(25, 'Teléfono Plegable C', 'Innovador teléfono plegable con pantalla flexible', 799.99, 30, 3, NULL, NULL),
(26, 'Smartphone Resistente al Agua D', 'Teléfono resistente al agua y polvo', 599.99, 40, 3, NULL, NULL),
(27, 'Celular con Cámara Dual E', 'Teléfono con sistema de cámara dual de alta resolución', 449.99, 60, 3, NULL, NULL),
(28, 'Teléfono Gaming F', 'Teléfono diseñado para experiencias de juego inmersivas', 699.99, 35, 3, NULL, NULL),
(29, 'Celular Compacto G', 'Teléfono compacto y ligero ideal para uso diario', 199.99, 100, 3, NULL, NULL),
(30, 'Smartphone de Gama Alta H', 'Teléfono de gama alta con tecnología de vanguardia', 999.99, 25, 3, NULL, NULL),
(31, 'Celular con Batería de Larga Duración I', 'Teléfono con una batería que dura todo el día', 349.99, 75, 3, NULL, NULL),
(32, 'Teléfono 5G J', 'Dispositivo compatible con redes de quinta generación', 499.99, 50, 3, NULL, NULL),
(33, 'Celular con Reconocimiento Facial K', 'Teléfono con tecnología de reconocimiento facial avanzada', 449.99, 45, 3, NULL, NULL),
(34, 'Smartphone con Pantalla Curva L', 'Teléfono con pantalla curva para una experiencia inmersiva', 599.99, 40, 3, NULL, NULL),
(35, 'Celular de Diseño Elegante M', 'Teléfono con diseño elegante y materiales premium', 379.99, 70, 3, NULL, NULL),
(36, 'Teléfono con Carga Rápida N', 'Teléfono con tecnología de carga rápida', 299.99, 90, 3, NULL, NULL),
(37, 'Smartphone Dual SIM O', 'Teléfono con capacidad para dos tarjetas SIM', 329.99, 65, 3, NULL, NULL),
(38, 'Celular con Pantalla Grande P', 'Teléfono con pantalla grande para una mejor visualización', 449.99, 55, 3, NULL, NULL),
(39, 'Teléfono con Sistema Operativo Avanzado Q', 'Dispositivo con sistema operativo de última generación', 549.99, 50, 3, NULL, NULL),
(40, 'Smartphone con Almacenamiento Ampliable R', 'Teléfono con opción de almacenamiento ampliable', 449.99, 60, 3, NULL, NULL),
(41, 'Celular con Tecnología de Carga Inalámbrica S', 'Teléfono con capacidad de carga inalámbrica', 499.99, 40, 3, NULL, NULL),
(42, 'Teléfono con Triple Cámara T', 'Teléfono con sistema de triple cámara trasera', 699.99, 30, 3, NULL, NULL),
(43, 'Camiseta Casual A', 'Camiseta de algodón para uso diario', 19.99, 100, 4, NULL, NULL),
(44, 'Jeans Modernos B', 'Jeans ajustados con diseño moderno', 39.99, 80, 4, NULL, NULL),
(45, 'Vestido Elegante C', 'Vestido elegante para ocasiones especiales', 59.99, 30, 4, NULL, NULL),
(46, 'Chaqueta de Cuero D', 'Chaqueta de cuero para un look urbano', 89.99, 40, 4, NULL, NULL),
(47, 'Sudadera con Capucha E', 'Sudadera con capucha y estampado atractivo', 29.99, 60, 4, NULL, NULL),
(48, 'Camisa Formal F', 'Camisa de vestir para ocasiones formales', 49.99, 35, 4, NULL, NULL),
(49, 'Falda Estampada G', 'Falda con estampado floral y diseño moderno', 34.99, 100, 4, NULL, NULL),
(50, 'Traje de Baño H', 'Traje de baño de dos piezas para mujeres', 39.99, 25, 4, NULL, NULL),
(51, 'Jersey de Punto I', 'Jersey de punto para mantenerse abrigado', 44.99, 75, 4, NULL, NULL),
(52, 'Pantalones Deportivos J', 'Pantalones deportivos ideales para entrenamiento', 24.99, 50, 4, NULL, NULL),
(53, 'Vestido de Verano K', 'Vestido ligero y fresco para el verano', 29.99, 45, 4, NULL, NULL),
(54, 'Camiseta Estampada L', 'Camiseta con estampados llamativos y modernos', 19.99, 40, 4, NULL, NULL),
(55, 'Chaleco de Lana M', 'Chaleco de lana para un estilo casual', 39.99, 70, 4, NULL, NULL),
(56, 'Blusa de Fiesta N', 'Blusa elegante para eventos festivos', 49.99, 90, 4, NULL, NULL),
(57, 'Pantalones Cortos O', 'Pantalones cortos cómodos para actividades al aire libre', 29.99, 65, 4, NULL, NULL),
(58, 'Abrigo de Invierno P', 'Abrigo acolchado para mantenerse abrigado en invierno', 79.99, 50, 4, NULL, NULL),
(59, 'Conjunto Deportivo Q', 'Conjunto deportivo para un look activo', 54.99, 60, 4, NULL, NULL),
(60, 'Sombrero de Moda R', 'Sombrero de moda para completar tu look', 14.99, 40, 4, NULL, NULL),
(61, 'Vestido de Noche S', 'Vestido elegante para eventos nocturnos', 69.99, 30, 4, NULL, NULL),
(62, 'Calcetines Estampados T', 'Calcetines con diseños divertidos y coloridos', 9.99, 50, 4, NULL, NULL),
(63, 'Juego de Sábanas Suaves', 'Sábanas de alta calidad para una experiencia de sueño confortable', 49.99, 100, 5, NULL, NULL),
(64, 'Almohadas de Plumas', 'Almohadas rellenas de plumas para un soporte suave', 29.99, 80, 5, NULL, NULL),
(65, 'Set de Ollas y Sartenes', 'Juego completo de ollas y sartenes antiadherentes', 99.99, 30, 5, NULL, NULL),
(66, 'Cortinas Opacas', 'Cortinas que bloquean la luz para mayor privacidad', 39.99, 40, 5, NULL, NULL),
(67, 'Lámpara de Pie Moderna', 'Lámpara de pie con diseño moderno para iluminación ambiental', 79.99, 60, 5, NULL, NULL),
(68, 'Juego de Toallas de Lujo', 'Toallas suaves y absorbentes para el baño', 29.99, 35, 5, NULL, NULL),
(69, 'Cojines Decorativos', 'Cojines con diseños decorativos para el sofá', 24.99, 100, 5, NULL, NULL),
(70, 'Vajilla Elegante de Porcelana', 'Juego de vajilla elegante para ocasiones especiales', 69.99, 25, 5, NULL, NULL),
(71, 'Cubiertos de Acero Inoxidable', 'Set de cubiertos duraderos y resistentes', 34.99, 75, 5, NULL, NULL),
(72, 'Espejo de Pared', 'Espejo grande y decorativo para el dormitorio o el pasillo', 59.99, 50, 5, NULL, NULL),
(73, 'Candelabro de Cristal', 'Candelabro con detalles de cristal para la mesa de comedor', 49.99, 45, 5, NULL, NULL),
(74, 'Organizador de Zapatos', 'Estantería para organizar y mostrar tus zapatos', 29.99, 40, 5, NULL, NULL),
(75, 'Set de Tazas de Café', 'Tazas de café de cerámica con diseños modernos', 19.99, 70, 5, NULL, NULL),
(76, 'Escurridor de Platos', 'Escurridor de platos plegable para ahorrar espacio', 19.99, 90, 5, NULL, NULL),
(77, 'Manta de Lana para Sofá', 'Manta cálida y suave para las noches frías', 44.99, 65, 5, NULL, NULL),
(78, 'Cesto de Ropa Plegable', 'Cesto de ropa plegable para facilitar el almacenamiento', 29.99, 50, 5, NULL, NULL),
(79, 'Tapete Antideslizante para Baño', 'Tapete suave y antideslizante para el baño', 14.99, 60, 5, NULL, NULL),
(80, 'Reloj de Pared Moderno', 'Reloj de pared con diseño moderno para la sala de estar', 39.99, 40, 5, NULL, NULL),
(81, 'Caja de Almacenamiento de Joyas', 'Caja elegante para organizar y almacenar joyas', 49.99, 30, 5, NULL, NULL),
(82, 'Cubierta de Sofá', 'Cubierta protectora para el sofá con estilo moderno', 69.99, 50, 5, NULL, NULL),
(83, 'Laptop Ultradelgada A', 'Laptop ultradelgada con procesador de última generación', 999.99, 50, 6, NULL, NULL),
(84, 'Tableta Táctil B', 'Tableta táctil con pantalla de alta resolución', 349.99, 80, 6, NULL, NULL),
(85, 'Laptop para Juegos C', 'Potente laptop diseñada para juegos de alto rendimiento', 1499.99, 30, 6, NULL, NULL),
(86, 'Cámara Mirrorless D', 'Cámara sin espejo con capacidad de grabación en 4K', 799.99, 40, 6, NULL, NULL),
(87, 'Smartwatch con Monitor de Salud E', 'Smartwatch con monitor de ritmo cardíaco y seguimiento de actividad', 199.99, 60, 6, NULL, NULL),
(88, 'Auriculares Inalámbricos F', 'Auriculares inalámbricos con cancelación de ruido', 129.99, 35, 6, NULL, NULL),
(89, 'Impresora Multifuncional G', 'Impresora multifuncional para hogar y oficina', 179.99, 100, 6, NULL, NULL),
(90, 'Altavoz Bluetooth Resistente al Agua H', 'Altavoz portátil resistente al agua con conectividad Bluetooth', 69.99, 25, 6, NULL, NULL),
(91, 'Laptop Convertible con Pantalla Táctil I', 'Laptop convertible con pantalla táctil y teclado retroiluminado', 1199.99, 75, 6, NULL, NULL),
(92, 'Mouse Gaming J', 'Mouse ergonómico diseñado para jugadores', 49.99, 50, 6, NULL, NULL),
(93, 'Teclado Mecánico RGB K', 'Teclado mecánico con retroiluminación RGB personalizable', 89.99, 45, 6, NULL, NULL),
(94, 'Monitor Curvo de Alta Resolución L', 'Monitor curvo de alta resolución para una experiencia inmersiva', 599.99, 40, 6, NULL, NULL),
(95, 'Disco Duro Externo de Gran Capacidad M', 'Disco duro externo con gran capacidad de almacenamiento', 129.99, 70, 6, NULL, NULL),
(96, 'Router Wi-Fi de Última Generación N', 'Router Wi-Fi con tecnología de última generación', 99.99, 90, 6, NULL, NULL),
(97, 'Laptop para Diseño Gráfico O', 'Laptop potente diseñada para aplicaciones de diseño gráfico', 1399.99, 65, 6, NULL, NULL),
(98, 'Cargador Inalámbrico Rápido P', 'Cargador inalámbrico rápido compatible con varios dispositivos', 34.99, 50, 6, NULL, NULL),
(99, 'Lápiz Digital para Tabletas Q', 'Lápiz digital sensible a la presión para tabletas', 59.99, 60, 6, NULL, NULL),
(100, 'Laptop Empresarial R', 'Laptop diseñada para necesidades empresariales y productividad', 899.99, 40, 6, NULL, NULL),
(101, 'Cámara de Seguridad para el Hogar S', 'Cámara de seguridad para el hogar con visión nocturna', 129.99, 30, 6, NULL, NULL),
(102, 'Mochila para Laptop T', 'Mochila resistente con compartimento acolchado para laptop', 49.99, 50, 6, NULL, NULL),
(103, 'Refrigerador de Doble Puerta A', 'Refrigerador de doble puerta con dispensador de agua y hielo', 999.99, 50, 7, NULL, NULL),
(104, 'Lavadora de Carga Frontal B', 'Lavadora de carga frontal con capacidad para grandes cargas', 649.99, 80, 7, NULL, NULL),
(105, 'Secadora de Ropa a Gas C', 'Secadora de ropa a gas con múltiples programas de secado', 799.99, 30, 7, NULL, NULL),
(106, 'Cocina de Inducción D', 'Cocina de inducción con superficie de vidrio y controles táctiles', 899.99, 40, 7, NULL, NULL),
(107, 'Lavavajillas Empotrable E', 'Lavavajillas empotrable con capacidad para cubiertos y utensilios', 549.99, 60, 7, NULL, NULL),
(108, 'Horno Eléctrico de Pared F', 'Horno eléctrico de pared con tecnología de convección', 699.99, 35, 7, NULL, NULL),
(109, 'Campana Extractora de Acero Inoxidable G', 'Campana extractora de acero inoxidable para cocina', 199.99, 100, 7, NULL, NULL),
(110, 'Microondas con Grill H', 'Microondas con función de grill para asar alimentos', 129.99, 25, 7, NULL, NULL),
(111, 'Congelador Vertical I', 'Congelador vertical con múltiples compartimentos', 499.99, 75, 7, NULL, NULL),
(112, 'Estufa a Gas de 5 Quemadores J', 'Estufa a gas con 5 quemadores y horno incorporado', 749.99, 50, 7, NULL, NULL),
(113, 'Refrigerador Compacto K', 'Refrigerador compacto ideal para espacios pequeños', 299.99, 45, 7, NULL, NULL),
(114, 'Lavadora-Secadora Combo L', 'Lavadora-secadora combo para ahorrar espacio', 899.99, 40, 7, NULL, NULL),
(115, 'Aire Acondicionado Split M', 'Aire acondicionado split con control remoto', 799.99, 70, 7, NULL, NULL),
(116, 'Calentador de Agua a Gas N', 'Calentador de agua a gas para baños y cocinas', 449.99, 90, 7, NULL, NULL),
(117, 'Aspiradora Robótica O', 'Aspiradora robótica con tecnología de mapeo inteligente', 299.99, 65, 7, NULL, NULL),
(118, 'Licuadora de Alta Potencia P', 'Licuadora de alta potencia con funciones programables', 79.99, 50, 7, NULL, NULL),
(119, 'Dispensador de Agua Fría y Caliente Q', 'Dispensador de agua con opciones de fría y caliente', 129.99, 60, 7, NULL, NULL),
(120, 'Batidora de Pie con Tazón R', 'Batidora de pie con tazón para mezclar y amasar', 89.99, 40, 7, NULL, NULL),
(121, 'Ventilador de Torre S', 'Ventilador de torre con control remoto y temporizador', 49.99, 30, 7, NULL, NULL),
(122, 'Plancha de Vapor T', 'Plancha de vapor para ropa con suela antiadherente', 29.99, 50, 7, NULL, NULL),
(123, 'Juego de Cuchillos de Chef A', 'Set de cuchillos de alta calidad para cocina profesional', 79.99, 50, 8, NULL, NULL),
(124, 'Olla a Presión de Acero Inoxidable B', 'Olla a presión duradera y segura para cocinar rápido', 89.99, 80, 8, NULL, NULL),
(125, 'Batidora de Mano C', 'Batidora de mano con múltiples accesorios para mezclar y triturar', 49.99, 30, 8, NULL, NULL),
(126, 'Molinillo de Café Eléctrico D', 'Molinillo de café eléctrico para moler granos frescos', 39.99, 40, 8, NULL, NULL),
(127, 'Batería de Cocina Antiadherente E', 'Set de sartenes y ollas antiadherentes para cocina sin problemas', 129.99, 60, 8, NULL, NULL),
(128, 'Máquina de Hacer Pan F', 'Máquina automática para hacer pan casero', 99.99, 35, 8, NULL, NULL),
(129, 'Cafetera de Goteo Programable G', 'Cafetera de goteo con temporizador programable', 69.99, 100, 8, NULL, NULL),
(130, 'Escurridor de Platos de Acero H', 'Escurridor de platos de acero inoxidable para cocina organizada', 29.99, 25, 8, NULL, NULL),
(131, 'Tablas de Cortar de Bambú I', 'Set de tablas de cortar resistentes y ecológicas', 24.99, 75, 8, NULL, NULL),
(132, 'Exprimidor de Cítricos J', 'Exprimidor manual para obtener jugo fresco de cítricos', 19.99, 50, 8, NULL, NULL),
(133, 'Set de Boles de Vidrio K', 'Set de boles de vidrio para preparar y servir alimentos', 34.99, 45, 8, NULL, NULL),
(134, 'Báscula Digital de Cocina L', 'Báscula precisa para medir ingredientes con precisión', 14.99, 40, 8, NULL, NULL),
(135, 'Licuadora de Alta Velocidad M', 'Licuadora potente para preparar batidos y smoothies', 79.99, 70, 8, NULL, NULL),
(136, 'Termo para Alimentos N', 'Termo para alimentos con doble pared para mantener la temperatura', 29.99, 90, 8, NULL, NULL),
(137, 'Tostadora de Pan O', 'Tostadora de pan con múltiples ajustes de tostado', 39.99, 65, 8, NULL, NULL),
(138, 'Molde para Pasteles en Forma de Corazón P', 'Molde para pasteles con forma de corazón para ocasiones especiales', 9.99, 50, 8, NULL, NULL),
(139, 'Rallador de Queso Q', 'Rallador de queso con diferentes cuchillas para distintos cortes', 19.99, 60, 8, NULL, NULL),
(140, 'Cuchara de Silicona Resistente al Calor R', 'Cuchara de cocina resistente al calor y fácil de limpiar', 7.99, 40, 8, NULL, NULL),
(141, 'Cocina de Gas de Acero Inoxidable S', 'Cocina de gas con horno y quemadores de alta potencia', 499.99, 30, 8, NULL, NULL),
(142, 'Set de Utensilios de Cocina de Nylon T', 'Set de utensilios de cocina de nylon para utensilios antiadherentes', 29.99, 50, 8, NULL, NULL),
(143, 'Árbol de Navidad Artificial A', 'Árbol de Navidad artificial de 6 pies con luces LED', 69.99, 50, 9, NULL, NULL),
(144, 'Guirnalda Decorativa B', 'Guirnalda decorativa con piñas y luces para la puerta', 29.99, 80, 9, NULL, NULL),
(145, 'Adornos Navideños de Vidrio C', 'Set de 12 adornos navideños de vidrio para el árbol', 19.99, 30, 9, NULL, NULL),
(146, 'Luces LED para Exterior D', 'Luces LED de colores para decoración exterior', 49.99, 40, 9, NULL, NULL),
(147, 'Calcetines Navideños E', 'Calcetines decorativos para colgar en la chimenea', 9.99, 60, 9, NULL, NULL),
(148, 'Corona Navideña F', 'Corona navideña con lazo y adornos festivos', 39.99, 35, 9, NULL, NULL),
(149, 'Centro de Mesa Decorativo G', 'Centro de mesa con velas y detalles navideños', 24.99, 100, 9, NULL, NULL),
(150, 'Papá Noel Hinchable para Jardín H', 'Figura hinchable de Papá Noel para decoración en el jardín', 89.99, 25, 9, NULL, NULL),
(151, 'Mantel Navideño I', 'Mantel con diseño navideño para la mesa de comedor', 14.99, 75, 9, NULL, NULL),
(152, 'Set de Velas Perfumadas J', 'Set de velas perfumadas con aromas festivos', 19.99, 50, 9, NULL, NULL),
(153, 'Calendario de Adviento K', 'Calendario de adviento con sorpresas diarias', 9.99, 45, 9, NULL, NULL),
(154, 'Ángeles Decorativos L', 'Figuras de ángeles decorativos para el belén', 29.99, 40, 9, NULL, NULL),
(155, 'Reno Luminoso de Jardín M', 'Reno luminoso de jardín para iluminar el exterior', 59.99, 70, 9, NULL, NULL),
(156, 'Bolas de Nieve Musical N', 'Bolas de nieve con música para decorar la sala', 34.99, 90, 9, NULL, NULL),
(157, 'Árbol de Navidad de Mesa O', 'Mini árbol de Navidad de mesa con luces LED', 12.99, 65, 9, NULL, NULL),
(158, 'Estrella para la Punta del Árbol P', 'Estrella dorada para colocar en la punta del árbol', 8.99, 50, 9, NULL, NULL),
(159, 'Figuras de Belén Q', 'Conjunto de figuras para el belén navideño', 24.99, 60, 9, NULL, NULL),
(160, 'Camino de Mesa con Motivos Navideños R', 'Camino de mesa con motivos navideños', 17.99, 40, 9, NULL, NULL),
(161, 'Caja de Almacenamiento para Adornos S', 'Caja de almacenamiento para guardar de forma segura los adornos', 14.99, 30, 9, NULL, NULL),
(162, 'Proyector de Luces Navideñas T', 'Proyector de luces con patrones navideños para exteriores', 39.99, 50, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalles_pedidos_pedido_id_foreign` (`pedido_id`),
  ADD KEY `detalles_pedidos_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_usuario_id_foreign` (`usuario_id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  ADD CONSTRAINT `detalles_pedidos_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `detalles_pedidos_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
