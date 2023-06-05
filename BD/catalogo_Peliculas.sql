-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-06-2023 a las 23:32:03
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
-- Base de datos: `catalogo_Peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Peliculas`
--

CREATE TABLE `Peliculas` (
  `idPelicula` int(11) NOT NULL,
  `poster` varchar(200) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `reseña` varchar(300) NOT NULL,
  `director` varchar(50) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `fecha_de_estreno` date NOT NULL,
  `mostrar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Peliculas`
--

INSERT INTO `Peliculas` (`idPelicula`, `poster`, `titulo`, `reseña`, `director`, `genero`, `fecha_de_estreno`, `mostrar`) VALUES
(1, '../posters/sonic.jpg', 'Sonic La Pelicula', 'Sonic es un erizo de otro mundo que posee velocidad supersónica. Perseguido por otros que desean su poder, escapa y termina en nuestra realidad. Años después y harto de esconderse, sus poderes lo ponen en la mira del Dr. Robotnik (Jim Carrey), quien buscará atraparlo a toda costa.', 'Jeff Fowler', 'Aventura', '2020-02-14', 1),
(2, '../posters/titanic.jpg', 'Titanic', 'Un joven artista se enamora de una pasajera adinerada a bordo del famoso transatlántico.', 'James Cameron', 'Drama', '1997-12-19', 1),
(3, '../posters/avatar.jpg', 'Avatar', 'Un exmarine es reclutado para viajar a Pandora y participar en un programa científico.', 'James Cameron', 'Ciencia Ficcion', '2009-12-18', 1),
(4, '../posters/HP.jpg', 'Harry Potter y la piedra filosofal', 'Un joven mago descubre su verdadera identidad en el Colegio Hogwarts de Magia y Hechicería.', 'Chris Columbus', 'Fantasia', '2001-12-11', 1),
(5, '../posters/jurassicPark.jpg', 'Jurassic Park', 'Un parque temático de dinosaurios se convierte en una pesadilla cuando los dinosaurios escapan.', 'Steven Spielberg', 'Aventura', '1993-11-06', 1),
(8, '../posters/reyLeon.jpg', 'El Rey Leon', 'Un joven león debe enfrentar la responsabilidad de convertirse en rey después de la muerte de su padre.', 'Roger Allers y Rob Minkoff', 'Animación', '1994-12-06', 1),
(9, '../posters/Forrest_Gump.jpg', 'Forrest Gump', 'Un hombre con un coeficiente intelectual bajo experimenta una vida llena de aventuras y se cruza con eventos históricos.', 'Robert Zemeckis', 'Drama', '1994-07-06', 1),
(10, '../posters/lalaland.jpg', 'La La Land', 'Dos soñadores luchan por perseguir sus sueños mientras se enamoran en la ciudad de Los Ángeles.', 'Damien Chazelle', 'Musical', '2016-12-09', 1),
(11, '../posters/batman.jpg', 'El caballero de la noche', 'Batman se enfrenta a su enemigo más peligroso, el Joker, en una batalla por la ciudad de Gotham.', 'Christopher Nolan', 'Accion', '2008-07-18', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Peliculas`
--
ALTER TABLE `Peliculas`
  ADD PRIMARY KEY (`idPelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Peliculas`
--
ALTER TABLE `Peliculas`
  MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
