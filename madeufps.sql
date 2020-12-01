-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2020 a las 04:50:05
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `madeufps`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_actividad` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `id_docente` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificar_estudiante`
--

CREATE TABLE `calificar_estudiante` (
  `id_calificacion` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargar_actividad`
--

CREATE TABLE `cargar_actividad` (
  `id_cargar` int(11) NOT NULL,
  `ruta_actividad` varchar(50) NOT NULL,
  `id_grupo_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargar_actividad`
--

INSERT INTO `cargar_actividad` (`id_cargar`, `ruta_actividad`, `id_grupo_alumno`) VALUES
(9, 'practicas_soft_practicas.sql', 9638);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargar_microcurriculo`
--

CREATE TABLE `cargar_microcurriculo` (
  `id_carga` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `ruta_archivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `docente` int(11) NOT NULL,
  `num_estudiantes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `nombre`, `docente`, `num_estudiantes`) VALUES
(123, 'bases de datos', 1151464, 3),
(987, 'seguridad', 1151464, 10),
(8888, 'movil', 1151464, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargar_actividad`
--

CREATE TABLE `descargar_actividad` (
  `id_descarga` int(11) NOT NULL,
  `id_actividad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluar_actividad`
--

CREATE TABLE `evaluar_actividad` (
  `id_evaluar` int(11) NOT NULL,
  `id_actividad` int(11) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_alumno`
--

CREATE TABLE `grupo_alumno` (
  `idgrupo` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `nota` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo_alumno`
--

INSERT INTO `grupo_alumno` (`idgrupo`, `id_alumno`, `id_curso`, `nota`) VALUES
(1157, 9638, 987, 4),
(1158, 9638, 123, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`documento`, `nombre`, `codigo`, `direccion`, `telefono`, `correo`, `rol`) VALUES
(1090, 'adriana quijano', 1151464, 'avenida 8 ', 2147483647, 'edysonleal@gmail.com', 2),
(1234, 'edyson', 1234, 'cucuta', 3154871, 'edysonleal3@gmail.com', 1),
(9638, 'duvan leal', 9638, 'avenida 8 ', 2147483647, 'adriana@gmail.com', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`) VALUES
(1, 'Director'),
(2, 'Docente'),
(3, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_actividad`
--

CREATE TABLE `tipo_actividad` (
  `id` int(11) NOT NULL,
  `id_actividad` int(11) DEFAULT NULL,
  `nombre_tipoAct` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `id_docente` (`id_docente`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `calificar_estudiante`
--
ALTER TABLE `calificar_estudiante`
  ADD PRIMARY KEY (`id_calificacion`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `cargar_actividad`
--
ALTER TABLE `cargar_actividad`
  ADD PRIMARY KEY (`id_cargar`),
  ADD KEY `id_actividad` (`ruta_actividad`),
  ADD KEY `id_grupo_alumno` (`id_grupo_alumno`);

--
-- Indices de la tabla `cargar_microcurriculo`
--
ALTER TABLE `cargar_microcurriculo`
  ADD PRIMARY KEY (`id_carga`),
  ADD KEY `documento` (`ruta_archivo`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `docente` (`docente`);

--
-- Indices de la tabla `descargar_actividad`
--
ALTER TABLE `descargar_actividad`
  ADD PRIMARY KEY (`id_descarga`),
  ADD KEY `id_actividad` (`id_actividad`);

--
-- Indices de la tabla `evaluar_actividad`
--
ALTER TABLE `evaluar_actividad`
  ADD PRIMARY KEY (`id_evaluar`),
  ADD KEY `id_actividad` (`id_actividad`);

--
-- Indices de la tabla `grupo_alumno`
--
ALTER TABLE `grupo_alumno`
  ADD PRIMARY KEY (`idgrupo`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`documento`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_actividad` (`id_actividad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calificar_estudiante`
--
ALTER TABLE `calificar_estudiante`
  MODIFY `id_calificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cargar_actividad`
--
ALTER TABLE `cargar_actividad`
  MODIFY `id_cargar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cargar_microcurriculo`
--
ALTER TABLE `cargar_microcurriculo`
  MODIFY `id_carga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `descargar_actividad`
--
ALTER TABLE `descargar_actividad`
  MODIFY `id_descarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluar_actividad`
--
ALTER TABLE `evaluar_actividad`
  MODIFY `id_evaluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo_alumno`
--
ALTER TABLE `grupo_alumno`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1159;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargar_actividad`
--
ALTER TABLE `cargar_actividad`
  ADD CONSTRAINT `cargar_actividad_ibfk_1` FOREIGN KEY (`id_grupo_alumno`) REFERENCES `grupo_alumno` (`id_alumno`);

--
-- Filtros para la tabla `cargar_microcurriculo`
--
ALTER TABLE `cargar_microcurriculo`
  ADD CONSTRAINT `cargar_microcurriculo_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `grupo_alumno` (`id_curso`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`docente`) REFERENCES `persona` (`codigo`);

--
-- Filtros para la tabla `grupo_alumno`
--
ALTER TABLE `grupo_alumno`
  ADD CONSTRAINT `grupo_alumno_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `persona` (`codigo`),
  ADD CONSTRAINT `grupo_alumno_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
