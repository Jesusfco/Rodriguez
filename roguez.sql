-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2018 a las 02:20:33
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `roguez`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `creator_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `creator_id`, `title`, `resume`, `description`, `img`, `date`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 1, 'CHIAPAS Diario de Viaje: 52 Inolvidables Días por Chiapas', 'Cuando tomamos la decisión de viajar a Chiapas no sabía lo que iba a descubrir en este hermoso lugar y la pregunta que se me vino a la cabeza fue la siguiente ¿Qué se puede conocer en Chiapas con tan sólo cinco días?, bueno, lo que hicimos fue armarnos la siguiente ruta para poder conocer los lugares iconos de este maravilloso estado.', '<h3><em><strong>Bit&aacute;cora de viaje por Chiapas</strong></em></h3>\r\n\r\n<h3>D&iacute;a 1:&nbsp;<a href=\"https://www.mexicodestinos.com/chiapas/tours/canon-del-sumidero.html?utm_source=Blog-MD&amp;utm_medium=Post-Chiapas5d%C3%ADas&amp;utm_campaign=Chiapas\">Explorando el Ca&ntilde;&oacute;n del Sumidero</a></h3>\r\n\r\n<p>El viaje inicia desde la bell&iacute;sima ciudad de Canc&uacute;n en direcci&oacute;n a la capital del estado de Chiapas, que es Tuxtla Gutierrez. La oferta de vuelos es amplia gracias a las aerol&iacute;neas low cost donde podr&aacute;s encontrar un n&uacute;mero importante de ofertas para que no te quedes sin descubrir las bellezas de este pa&iacute;s.</p>\r\n\r\n<p>El vuelo tiene una duraci&oacute;n de una hora y media, es un trayecto muy corto. &nbsp;En el aeropuerto tomamos la decisi&oacute;n de rentar un coche para aprovechar muy bien el tiempo en los cinco d&iacute;as que &iacute;bamos a estar.</p>\r\n\r\n<p>El primer destino fue el&nbsp;<a href=\"https://www.mexicodestinos.com/lugares/canon-del-sumidero?utm_source=Blog-MD&amp;utm_medium=Blog-LinkBuilding&amp;utm_campaign=Lugares\" target=\"_blank\">ca&ntilde;&oacute;n del Sumidero</a>&nbsp;que se encuentra en el pueblo m&aacute;gico de&nbsp;<a href=\"https://www.mexicodestinos.com/lugares/chapa-de-corzo?utm_source=Blog-MD&amp;utm_medium=Blog-LinkBuilding&amp;utm_campaign=Lugares\" target=\"_blank\">Chiapa de Corzo</a>. Aqu&iacute; tomamos una lanchita para descubrir esta belleza de la naturaleza que se impone con dos enormes murallas de roca envuelta con su verde vegetaci&oacute;n, es un deleite a la vista. El valor de la lancha es de $200 pesos por persona.</p>\r\n\r\n<p><img alt=\"Cañon del sumidero\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/10/Ca%C3%B1on-del-sumidero.jpg\" style=\"height:544px; width:817px\" /></p>\r\n\r\n<p>Al terminar el recorrido fuimos a explorar el pueblo de Chiapa de Corzo, donde sus colores y tradiciones te deleitan a cada paso que das. Las indigenas ofrecen su bell&iacute;simo arte del bordado a muy buen precio.</p>\r\n\r\n<p>El viaje continu&oacute; en direcci&oacute;n a&nbsp;<a href=\"https://www.mexicodestinos.com/lugares/san-cristobal-de-las-casas?utm_source=Blog-MD&amp;utm_medium=Blog-LinkBuilding&amp;utm_campaign=Lugares\" target=\"_blank\">San Crist&oacute;bal de las Casas</a>. Al llegar a este Pueblo M&aacute;gico te envuelve en el fr&iacute;o de la sierra chiapaneca mientras los &uacute;ltimos rayos de sol se presentaban en la plaza central, donde observas la cotidianidad del lugar. Con este maravilloso cierre termin&oacute; el d&iacute;a uno de exploraci&oacute;n.</p>\r\n\r\n<h3>D&iacute;a 2: Descubriendo el Pueblo M&aacute;gico de San Cristobal de las Casas</h3>\r\n\r\n<p>Nos levantamos muy temprano en San Crist&oacute;bal de las Casas para disfrutar de un rico chocolate caliente y para los cafeteros, este es el lugar ideal para deleitar con un exquisito caf&eacute;. Despu&eacute;s de tomar fuerzas partimos a conocer San Juan Chamula, que se encuentra ubicado a 10 kil&oacute;metros de San Crist&oacute;bal de las Casas. Al llegar te recibe una larga calle principal donde encontrar&aacute;s un n&uacute;mero importante de tiendas de comida y tejidos, ver&aacute;s como los ni&ntilde;os corren de un lugar a otro mientras hablan en su lengua nativa que es el maya-tsotsil, es como estar en otro pa&iacute;s. Al llegar a la plaza central te recibir&aacute; un gran tianguis que cubre la entrada de la iglesia de San Juan Chamula. Al entrar te prohiben tomar fotograf&iacute;as por respeto a sus tradiciones. El momento en el que pisas la iglesia, quedas impactado de como viven su culto, no hay bancas, est&aacute;n en el piso orando, donde pueden comer y convivir con sus vecinos, todo esto envuelto en humo de copal haciendo este momento &uacute;nico y m&aacute;gico.</p>\r\n\r\n<p>Tras salir de la iglesia tomamos rumbo a San Crist&oacute;bal para recorrer sus calles y arquitectura colonial. San Crist&oacute;bal tiene esa cosa que te atrapa y enamora, el cual te hace dudar en regresar a casa. Es un destino que tienes que vivir y sentir por lo menos dos d&iacute;as, lo s&uacute;per recomiendo.</p>\r\n\r\n<p><strong>&iquest;Hospedaje? &gt;&gt;</strong>&nbsp;<em><strong><a href=\"https://www.mexicodestinos.com/chiapas/hoteles?utm_source=Blog-MD&amp;utm_medium=Post-Chiapas5d%C3%ADas&amp;utm_campaign=Chiapas\">Checa estos hoteles en Chiapas</a></strong></em></p>\r\n\r\n<p><img alt=\"¿Cómo se llega a San Cristóbal de las Casas?\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/09/Como-es-San-Cristobal-de-las-Casas.jpg\" style=\"height:534px; width:800px\" /></p>\r\n\r\n<p><img alt=\"San Cristobal de las Casas, el mas magico de los Pueblos Magicos\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/09/San-Cristobal-de-las-Casas-el-mas-magico-de-los-Pueblos-Magicos-300x157.jpg\" style=\"height:419px; width:800px\" /></p>\r\n\r\n<h3>D&iacute;a 3: Un encuentro con las maravillas naturales de Chiapas</h3>\r\n\r\n<p>Partimos muy temprano de San Crist&oacute;bal de las Casas en direcci&oacute;n a la&nbsp;<a href=\"https://www.mexicodestinos.com/lugares/palenque?utm_source=Blog-MD&amp;utm_medium=Blog-LinkBuilding&amp;utm_campaign=Lugares\" target=\"_blank\">zona arqueol&oacute;gica de Palenque</a>.&nbsp;<strong>El paisaje es una oda a la belleza</strong>, la frondosa Selva Lacandona te recibe con majestuosidad llegando as&iacute; a la cascada de Misol H&aacute;, que es una peque&ntilde;a ca&iacute;da de agua envuelta en un hermoso paisaje. Luego est&aacute;n las Cascadas&nbsp; de Agua Azul pero la suerte no nos acompa&ntilde;&oacute;, debido a que hab&iacute;an algunos peque&ntilde;os problemas pol&iacute;ticos por los que no se pod&iacute;a acceder al lugar, pero nada terrible, nada iba a desanimarnos a conocer la magia de Chiapas.</p>\r\n\r\n<p><em><strong>Ver tambi&eacute;n:&nbsp;<a href=\"https://www.mexicodestinos.com/chiapas/tours/tour-agua-azul-misol-ha-y-ruinas-de-palenque.html?utm_source=Blog-MD&amp;utm_medium=Post-Chiapas5d%C3%ADas&amp;utm_campaign=Chiapas\">tour a Palenque y cascadas.</a></strong></em></p>\r\n\r\n<p><img alt=\"misol ha\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/10/misol-ha.jpg\" style=\"height:449px; width:800px\" /></p>\r\n\r\n<p>Despu&eacute;s de 8 horas de viaje desde San Crist&oacute;bal llegamos a la Zona Arqueol&oacute;gica de Palenque. El lugar esta envuelto por un intenso color verde muy caracter&iacute;stico de la selva. Los templos son de una gran belleza que me dejaron hipnotizada. El valor de la entrada es de $51 pesos mexicanos.</p>\r\n\r\n<p><img alt=\"palenque\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/10/palenque.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p><img alt=\"Z.A Palenque\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/10/Z.A-Palenque.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>Tras tan hermosa experiencia partimos a Frontera Corozal a pasar la noche para ir al d&iacute;a siguiente&nbsp;a conocer la zona Arqueol&oacute;gica de&nbsp;<a href=\"https://www.mexicodestinos.com/lugares/yaxchilan?utm_source=Blog-MD&amp;utm_medium=Blog-LinkBuilding&amp;utm_campaign=Lugares\" target=\"_blank\">Yaxchil&aacute;n</a>.</p>\r\n\r\n<h3>D&iacute;a 4:&nbsp;<a href=\"https://www.mexicodestinos.com/chiapas/tours/tour-a-bonampak-y-yaxchilan.html?utm_source=Blog-MD&amp;utm_medium=Post-Chiapas5d%C3%ADas&amp;utm_campaign=Chiapas\">Un viaje en lancha hasta Yaxchil&aacute;n</a></h3>\r\n\r\n<p>Frontera de Corozal es un peque&ntilde;o pueblo que se encuentra ubicado en la rivera del r&iacute;o Usumacinta que es la frontera natural con Guatemala. Para llegar a Yaxchil&aacute;n debes tomar una lancha que tiene un costo de alrededor de $500 pesos mexicanos por persona. El recorrido dura alrededor de 20 minutos, donde de un lado se encuentra M&eacute;xico y del otro Guatemala, donde se respira una maravillosa tranquilidad. A unos pocos metros aparece entre la selva las primeras ruinas d&aacute;ndonos la bienvenida al lugar. El valor de la entrada es de alrededor de $50 pesos mexicanos. No pod&iacute;a creer lo que estaban viendo mis ojos, la selva junto a las ruinas creaban una experiencia visual envolvente, haci&eacute;ndote parte del lugar y en cada paso que das vas reconstruyendo la historia de Yaxchil&aacute;n.</p>\r\n\r\n<p><img alt=\"usumacinta Yaxchilan\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/10/usumacinta.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p><img alt=\"templo yaxchilan\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/10/templo-yaxchilan.jpg\" style=\"height:449px; width:800px\" /></p>\r\n\r\n<p>Despu&eacute;s de tan m&aacute;gico momento tomamos camino hacia Las Nubes. La carretera es de una gran tranquilidad siendo que exist&iacute;an ciertos mitos que era peligroso y les debo decir que es una gran mentira, a veces los prejuicios nos pueden alejar de bellos lugares.</p>\r\n\r\n<p>Al llegar a Las Nubes, literal era como estar flotando, sus cascadas de aguas turquesas no pod&iacute;a dejar de mirar y el sonido te envolv&iacute;a de tal manera que al cerrar los ojos te llevaba a un estado de paz que no puedo explicar. El paisaje es una sinfon&iacute;a de colores que ninguna fotograf&iacute;a ser&aacute; capaz de captarlo.</p>\r\n\r\n<p>Al terminar el recorrido que es de alrededor de dos horas nos quedamos en las caba&ntilde;as del lugar, que ten&iacute;an un precio de alrededor de $1000 pesos mexicanos.</p>\r\n\r\n<p><strong>No dejes de ver:</strong><em><strong>&nbsp;<a href=\"https://www.mexicodestinos.com/chiapas/tours/cascada-las-nubes.html?utm_source=Blog-MD&amp;utm_medium=Post-Chiapas5d%C3%ADas&amp;utm_campaign=Chiapas\">Tour a Cascadas las Nubes</a></strong></em></p>\r\n\r\n<p><img alt=\"Las Nubes, Chiapas\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/07/Las-Nubes-Chiapas.jpg\" style=\"height:545px; width:800px\" /></p>\r\n\r\n<p><img alt=\"Cascadas las Nubes\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/07/Cascadas-las-Nubes.jpg\" style=\"height:534px; width:800px\" /></p>\r\n\r\n<h3>D&iacute;a 5: La magia de la naturaleza en Chiapas</h3>\r\n\r\n<p>&Uacute;ltimo d&iacute;a de exploraci&oacute;n y nos levantamos bien temprano para ver el amanecer que es un espect&aacute;culo que vale la pena vivir. Ya con toda la energ&iacute;a partimos a conocer las&nbsp;<a href=\"https://www.mexicodestinos.com/chiapas/tours/lagos-de-montebello-cascadas-el-chiflon.html?utm_source=Blog-MD&amp;utm_medium=Post-Chiapas5d%C3%ADas&amp;utm_campaign=Chiapas\">Lagunas de Montebello</a>, que son una maravilla natural por donde la veas, aqu&iacute; podr&aacute;s disfrutar de diferentes colores de azul en sus distintas lagunas que conforman el parque nacional. Les recomiendo tomarse un caf&eacute; en la orilla de la laguna y conversar con la gente local que siempre est&aacute;n dispuesto a contar sus bellas tradiciones.</p>\r\n\r\n<p><strong>Ver tambi&eacute;n:</strong>&nbsp;<em><strong><a href=\"https://www.mexicodestinos.com/chiapas/tours?utm_source=Blog-MD&amp;utm_medium=Post-Chiapas5d%C3%ADas&amp;utm_campaign=Chiapas\">Tours en Chiapas</a></strong></em></p>\r\n\r\n<p><img alt=\"mirador lagunas de montebello\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/09/mirador-lagunas-de-montebello.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Aprovechando el poco tiempo que ten&iacute;amos partimos en direcci&oacute;n al Chifl&oacute;n. Es un conjunto de cascadas que se encuentran en el municipio de Tzimol muy cerca del pueblo m&aacute;gico de&nbsp;<a href=\"https://www.mexicodestinos.com/lugares/comitan-de-dominguez?utm_source=Blog-MD&amp;utm_medium=Blog-LinkBuilding&amp;utm_campaign=Lugares\" target=\"_blank\">Comit&aacute;n</a>&nbsp;de Dominguez. La cascada m&aacute;s ic&oacute;nica del lugar es la de velo de novia que tiene una altura de 120 metros, es imponente ver de tan cerca esa maravilla de la naturaleza. Sus aguas turquesas te invitan a darte un chapuz&oacute;n para calmar el calor despu&eacute;s de subir miles de escaleras para llegar al velo.&nbsp; El valor de la entrada es de $70 pesos mexicanos</p>\r\n\r\n<p><img alt=\"Chiapas El Chiflon Velo\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/09/Chiapas-El-Chiflon-Velo.jpg\" style=\"height:533px; width:800px\" /></p>\r\n\r\n<p><img alt=\"Chiapas El Chiflon sendero\" src=\"https://cdnblog.mexicodestinos.com/blog/wp-content/uploads/2016/09/Chiapas-El-Chiflon-sendero.jpg\" style=\"height:449px; width:800px\" /></p>\r\n\r\n<p>Despu&eacute;s de tan hermoso viaje nos dirigimos al aeropuerto el cual estaba bastante lejos de donde nos encontr&aacute;bamos pero vali&oacute; la pena. Algo que se debe destacar para los mochileros es que el aeropuerto cierra a la medianoche y tienes que esperar a las afueras, lugar donde dormimos hasta tomar nuestro vuelo que part&iacute;a a las ocho de la ma&ntilde;ana.</p>\r\n\r\n<p>Este viaje de cinco d&iacute;as por Chiapas ha sido uno de los viajes m&aacute;s hermoso que he realizado por M&eacute;xico y donde s&oacute;lo aument&oacute; las ganas de seguir descubriendo este bello pa&iacute;s.&nbsp;<strong>&iexcl;Chiapas es el para&iacute;so!</strong></p>', '1538942677_quien[1].jpg', '2018-10-07', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/G9KDqfpCgws\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '2018-10-08 01:00:20', '2018-10-08 01:04:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_answers`
--

CREATE TABLE `blog_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_comment_id` int(11) NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_photos`
--

CREATE TABLE `event_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `creator_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_cost` double(8,2) NOT NULL,
  `photo_print_cost` double(8,2) DEFAULT NULL,
  `now` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_photo_images`
--

CREATE TABLE `event_photo_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_photo_id` int(11) NOT NULL,
  `event_photo_section_id` int(11) NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) DEFAULT NULL,
  `selects` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_photo_receipts`
--

CREATE TABLE `event_photo_receipts` (
  `id` int(10) UNSIGNED NOT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `event_photo_images_id` text COLLATE utf8mb4_unicode_ci,
  `event_photo_images_print_id` text COLLATE utf8mb4_unicode_ci,
  `quantity` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_photo_sections`
--

CREATE TABLE `event_photo_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_photo_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_12_221206_create_works_table', 1),
(4, '2018_03_12_221223_create_work_status_table', 1),
(5, '2018_03_12_221243_create_payments_table', 1),
(6, '2018_10_04_175226_create_works_parts_table', 1),
(7, '2018_10_04_175357_create_services_table', 1),
(8, '2018_10_04_180111_create_photos_table', 1),
(9, '2018_10_04_185613_create_blogs_table', 1),
(10, '2018_10_04_202812_create_blog_comments_table', 1),
(11, '2018_10_04_202831_create_blog_answers_table', 1),
(12, '2018_10_06_174822_create_event_photos_table', 2),
(13, '2018_10_06_174842_create_event_photo_sections_table', 2),
(14, '2018_10_06_174906_create_event_photo_images_table', 2),
(15, '2018_10_06_174919_create_event_photo_receipts_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `work_id` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `payments`
--

INSERT INTO `payments` (`id`, `work_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 2, 10000.00, '2018-10-09 19:47:24', '2018-10-09 19:47:24'),
(2, 2, 1200.00, '2018-10-09 21:32:19', '2018-10-09 21:32:19'),
(3, 4, 2500.00, '2018-10-09 21:41:56', '2018-10-09 21:41:56'),
(4, 3, 1500.00, '2018-10-09 21:45:26', '2018-10-09 21:45:26'),
(5, 5, 2000.00, '2018-10-09 22:09:47', '2018-10-09 22:09:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foreign_id` int(11) NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `select` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `name`, `resume`, `description`, `img`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'SOFTWARE', 'Los servicios de software se divide en diversas ramas como la creación de páginas web (estáticas/ dinámicas), aplicaciones de escritorio, aplicaciones móviles o aplicaciones web', NULL, '1.jpg', NULL, '2018-10-08 21:23:09', '2018-10-08 21:23:10'),
(2, 'MULTIMEDIA', 'Los servicios de multimedia contiene diferentes variante como la creación de comerciales, creación de animaciones o coberturas de eventos.', NULL, '2.jpg', NULL, '2018-10-08 21:28:26', '2018-10-08 21:28:26'),
(3, 'FOTOGRAFÍA', 'Los servicios de fotografía abarcan distintos aspectos como cobertura de eventos ( XV, BODAS, CUMPLEAÑOS, CONFERENCIAS, ETC )', NULL, '3.jpg', NULL, '2018-10-08 21:29:58', '2018-10-08 21:29:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `enterprise` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `creator_id`, `name`, `phone`, `email`, `gender`, `type`, `img`, `status`, `enterprise`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Francisco Rodríguez', '9611221222', 'jfcr@live.com', NULL, 10, NULL, 1, NULL, '$2y$10$N5rk1wUISLCIIiL31G4Qu.iEkaKFYyOsTqcKRC.4zQD2zl7bJVhqC', '8pUO0vOYzornyhNo1FE3nyFg8c27aq68FtmKO41JqFhI7vS7sWZgiwqu6iJB', NULL, NULL),
(2, NULL, 'REBECA WOLOSKY', '961 593 6833', 'woloskyrebe@gmail.com', 2, 1, '2.jpg', 1, 'WOLOSKY GYM', NULL, NULL, '2018-10-08 18:44:04', '2018-10-08 20:18:41'),
(3, NULL, 'ADRIANA SANCHEZ', '961 277 9424', 'adrianadelrosario.sl@gmail.com', 2, 1, '3.jpg', 1, 'Grupasa', NULL, NULL, '2018-10-08 18:55:55', '2018-10-08 18:55:56'),
(4, NULL, 'LUIS GUILLEN', '9611123427', 'mentecambiante@gmail.com', 1, 1, '4.jpg', 1, 'COAH MENTAL', '$2y$10$.YaZVxLxbIAHrs8Xl6ab1.3sAoKVRm0oRh1q.Egg5Fn3D9quka2/e', NULL, '2018-10-08 20:23:12', '2018-10-08 20:23:12'),
(5, NULL, 'SERGIO RUIZ', NULL, 'sergioru25@gmail.com', 1, 1, '5.jpg', 1, 'ChulaVista Amerigas RosaritoEnergy', NULL, NULL, '2018-10-08 20:28:55', '2018-10-08 20:28:55'),
(6, NULL, 'LILILIANA PINEDA', '967 128 3595', 'liliana.pineda@live.com.mx', 2, 1, '6.jpg', 1, 'Lililiana Pineda Fotografía', '$2y$10$N9z8HmS2NnUAhs6HhNaTX.UwAFRMXjU34/.Z91J3kdOQ5GTIWbdNa', NULL, '2018-10-09 22:05:53', '2018-10-09 22:05:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `work_status_id` int(11) NOT NULL DEFAULT '1',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `cost` double(8,2) NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '0',
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `photos_quantity` int(11) DEFAULT NULL,
  `comentary_client` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `works`
--

INSERT INTO `works` (`id`, `user_id`, `creator_id`, `service_id`, `work_status_id`, `title`, `resume`, `description`, `cost`, `img`, `public`, `youtube`, `photos_quantity`, `comentary_client`, `link`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 1, 1, 'Sistema biometrico Wolosky Gym', 'El sistema biometrico propone solucionar el control de los pagos mensuales de los alumnos asi como tener el control de entrada y salida de los empleados. Tambien asiste a la parte administrativa del gimnasio en gastos, la tienda y el manejo de horarios', '<p>Wolosky Gimnasia despues de 20 a&ntilde;os nos brinda la confianza para dise&ntilde;ar y elaborar sus sistema administrativo. Una de las necesidades principales es mejorar el control que se lleva de todos los pagos que realizan los alumnos mes con mes, asi como&nbsp;</p>\r\n\r\n<p>El sistema biometrico propone solucionar el control de los pagos mensuales de los alumnos asi como tener el control de entrada y salida de los empleados. Tambien asiste a la parte administrativa del gimnasio en gastos, la tienda y el manejo de horarios.</p>', 15000.00, '2.jpg', 1, NULL, NULL, NULL, 'www.woloskygimnasia.com', '2018-10-09 01:05:42', '2018-10-10 00:19:08'),
(3, 3, 1, 1, 2, 'Desarrollo de pagina web Grupasa', 'El diseño de la pagina ya fue planteado por un diseñador, mi trabajo es llevar dicho diseño a código', NULL, 2000.00, '3.jpg', 1, NULL, NULL, NULL, 'http://grupasa.com.mx/', '2018-10-09 21:34:06', '2018-10-09 23:25:56'),
(4, 5, 1, 1, 3, 'Pagina/Aplicación Residencial ChulaVista', 'Desarrollo de página y aplicación web Residencial Chulavista enfocada a la administración de contratos de venta y pagos de casa de un fraccionamiento.', NULL, 1500.00, '4.jpg', 1, NULL, NULL, NULL, 'www.residencialchulavista.com', '2018-10-09 21:36:54', '2018-10-09 23:16:01'),
(5, 6, 1, 1, 1, 'Aplicación/Pagina Fotografía Liliana Pineda', 'Aplicacion enfocada al servicio al cliente, donde el cliente pueda seleccionar sus fotografías después de la sesiona o evento', NULL, 8000.00, '5.jpg', 1, NULL, NULL, NULL, 'www.lilianapineda.com', '2018-10-09 22:08:00', '2018-10-09 23:23:28'),
(6, 4, 1, 1, 1, 'Aplicación Web Luis Guillen | Coach Mental', 'Aplicación enfocada a la venta de boletos de eventos, así como venta de audio-libros y sesiones webinar', NULL, 520.00, '6.jpg', 1, NULL, NULL, NULL, 'www.luisguillen.mx', '2018-10-09 22:26:08', '2018-10-09 23:17:12'),
(7, 5, 1, 1, 3, 'Amerigas Aplicación/Pagina Web', 'Desarrollo de página y aplicación web Amerigas enfocada a la administración de ventas y proveedores de productos químicos.', NULL, 12000.00, '7.jpg', 1, NULL, NULL, NULL, NULL, '2018-10-09 22:49:59', '2018-10-09 23:14:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `works_parts`
--

CREATE TABLE `works_parts` (
  `id` int(10) UNSIGNED NOT NULL,
  `work_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `cost` double(8,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `works_parts`
--

INSERT INTO `works_parts` (`id`, `work_id`, `title`, `description`, `cost`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'PROPUESTA INICIAL', NULL, 15000.00, 2, '2018-10-09 01:05:42', '2018-10-09 10:48:07'),
(3, 2, 'Punto de venta', 'Tipos de venta con diferentes precios y sistema venta para pago en quincena', 2500.00, 3, '2018-10-09 05:02:51', '2018-10-09 20:57:08'),
(5, 2, 'Mas tipos de usuarios', 'Contador y sub admin\nPueden realizar cambios sobre usuarios y tener acceso a los recibos del dia actual', 2500.00, 1, '2018-10-09 21:00:25', '2018-10-09 21:00:25'),
(6, 2, 'Renovacion del dominio', NULL, 400.00, 3, '2018-10-09 21:31:34', '2018-10-09 21:31:34'),
(7, 2, 'Lector de huella digital', NULL, 800.00, 1, '2018-10-09 21:31:54', '2018-10-09 21:31:54'),
(8, 3, 'PROPUESTA INICIAL', 'null', 1500.00, 3, '2018-10-09 21:34:06', '2018-10-09 21:34:55'),
(9, 3, 'Ampliación de la pagina web', NULL, 500.00, 1, '2018-10-09 21:34:35', '2018-10-09 21:34:35'),
(10, 4, 'Mantenimiento/Reahabilitacion de sistema', 'El sistema sufrio de una averia, en consecuencia de la forma en que estaba programada, un script que provenia de otra pagina fue borrado por lo que todas las autosugerencias y calendarios entre otros han dejado de funcionar. Se requiere codificar de nuevo en el front-ent', 1500.00, 1, '2018-10-09 21:36:54', '2018-10-09 21:39:21'),
(11, 4, 'Mantenimiento/Ampliación Contratos y Respaldo Excel', 'Se solicita que en al editar un contrato se pueda cambiar de terreno sin perder los recibos ya generados integrandose al otro terreno elegido asi como reestructurar la fechas de pago si hay una diferencia de costos asi surgiere.', 1000.00, 1, '2018-10-09 21:41:27', '2018-10-09 21:41:27'),
(12, 5, 'PROPUESTA INICIAL', 'null', 8000.00, 3, '2018-10-09 22:08:00', '2018-10-09 22:08:54'),
(13, 5, 'Transferencia de la pagina', NULL, 350.00, 3, '2018-10-09 22:08:37', '2018-10-09 22:08:37'),
(14, 5, 'Renovacion del Dominio 2018', NULL, 450.00, 1, '2018-10-09 22:09:20', '2018-10-09 22:09:20'),
(15, 6, 'PROPUESTA INICIAL', NULL, 520.00, 1, '2018-10-09 22:26:08', '2018-10-09 22:26:08'),
(16, 7, 'PROPUESTA INICIAL', NULL, 12000.00, 3, '2018-10-09 22:49:59', '2018-10-09 22:49:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `work_status`
--

CREATE TABLE `work_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`);

--
-- Indices de la tabla `blog_answers`
--
ALTER TABLE `blog_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `event_photos`
--
ALTER TABLE `event_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `event_photo_images`
--
ALTER TABLE `event_photo_images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `event_photo_receipts`
--
ALTER TABLE `event_photo_receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `event_photo_sections`
--
ALTER TABLE `event_photo_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_name_unique` (`name`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indices de la tabla `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `works_title_unique` (`title`);

--
-- Indices de la tabla `works_parts`
--
ALTER TABLE `works_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `work_status`
--
ALTER TABLE `work_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `blog_answers`
--
ALTER TABLE `blog_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `event_photos`
--
ALTER TABLE `event_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `event_photo_images`
--
ALTER TABLE `event_photo_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `event_photo_receipts`
--
ALTER TABLE `event_photo_receipts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `event_photo_sections`
--
ALTER TABLE `event_photo_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `works_parts`
--
ALTER TABLE `works_parts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `work_status`
--
ALTER TABLE `work_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
