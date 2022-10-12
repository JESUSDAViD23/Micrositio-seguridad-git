-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2022 a las 11:15:08
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `micrositio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aes`
--

CREATE TABLE `aes` (
  `id` int(45) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `correo` varchar(250) DEFAULT NULL,
  `telefono` varchar(250) DEFAULT NULL,
  `domicilio` varchar(250) DEFAULT NULL,
  `identificacion` varchar(250) DEFAULT NULL,
  `passencript` varchar(250) DEFAULT NULL,
  `contra` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aes`
--

INSERT INTO `aes` (`id`, `nombre`, `correo`, `telefono`, `domicilio`, `identificacion`, `passencript`, `contra`) VALUES
(1, 'david', 'da@gmail.com', '771234567894', 'WEhVbVZqNmJESE1vNWVha1MzbUJTUT09OjoRs16EoAeXcPdlUsRlEP7H', 'SjJtMEJBUHJIOU1zQXN4Qy9DS1VIQT09OjoKXTdJB2MAmjYEBMJ37j+8', 'S3VUODZIZWNvU3lMaDRwdzRuUWQwdz09OjqHqN/kv7XwnzWQd+1uZLIu', 'pato'),
(2, 'david', 'da@gmail.com', '771234567894', 'dk1qdlhYZU1QbzVCdDExSHBKVS9DQT09Ojrep0fbtOeCGwHgBAj0be6/', 'b0ZCUHBlRXNFUzdJMUd6cmJYTTZxdz09Ojo9FN7DVRL7uVzkoyAbJ3Nl', 'ZzI3ZU1ZVHRjU1pPOUFoMDdjWUxUUT09Ojo7uGARafS/ne7wqcXWb8yV', 'pato'),
(3, 'david', 'da@gmail.com', '771234567894', 'ZzFvOUljUXBaOFZtbVJFK2Q4U3ZDdz09OjpI8jtBBryrqfLHXmIM4gfl', 'czNNdUlsci9SdFo3OXVqR29McmxGZz09Ojpyb9eD5PgLXyQcAsHaxZx2', 'QkUwSnVuUUcrbzJCSXR0TndsUVNRUT09OjrA46su5IYqT8ymBKgfJtUJ', 'pato'),
(4, 'Jose', 'da@gmail.com', '771234567894', 'dGNjNlpTTU1rc1BjaXliYTY2ajBwdz09OjoVb7LZGDDw6As5Fueb8osT', 'MWRWNFpKZEhFa3dvYzZKem5NVjJldz09OjoGreZeIcdHJMq/RGkDs4do', 'dDBGYTd1cWRzS2t6YnRWS3llM0dvQT09Ojq8JkpPfAdV5VT98HCRLwwt', 'pato'),
(5, 'Ayuni', 'da@gmail.com', '7722336644', 'UVVISTc0bURlVWJ0aGFqTDI5OU9xQT09Ojps6GUqkrUil8jaW49dfTIn', 'MWlVMGk1NTJzOTgzaE9FeTNTS1Zqdz09OjoMdUXpBCLHYr/LFTkWJIg7', 'YkV0VGhkdHNvR3RSMVhpWGx2Ym5HUT09Ojq+6FvF3xuOckVQgaAKm309', 'aina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsa`
--

CREATE TABLE `rsa` (
  `id` int(45) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `domicilio` varchar(600) DEFAULT NULL,
  `identificacion` varchar(600) DEFAULT NULL,
  `passencript` varchar(255) DEFAULT NULL,
  `contra` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rsa`
--

INSERT INTO `rsa` (`id`, `nombre`, `correo`, `telefono`, `domicilio`, `identificacion`, `passencript`, `contra`) VALUES
(5, 'david', 'da@gmail.com', '771234567894', 'Q2qbkTzWhup+dSwF0zzyEFS8bxTYN1LX/sRdQ9wyt1tkShAenKyMZv5vT5ped5qV9AGp3K1DtaVQtINkF6E5yuQ4mL4mW7MbSM++sjXO4mdv57G7tggtqoI/h2FxRzP58PcNpnFsRr6mJZb/CkR/LUfDLsjPjz/p2KJbzb85ctrTCKNswzhvdHJvd0fnKUQj3gPWZSa7KpXPF9bWekfmRo3aD71f5Nik18oe48fWiYewcL1n/oo/xxbOaJsGFpm6pJRqZcqs8p2WLw8TDNm26DbHbVGRgVkd8j60hkiloIqkfXAySwsTGZp8Z/WfvZyF5gWh9UltAJBTrVQbT71jaQ==', 'mEFJRAr6LsoyDLzfMjgpyuy5hPdKn31lJxV8d4vQSmcUzaIth2IEVaClomRqCXYWW9IsuZ8f1Sse4apbcRt1TfIglBbGuHDT4w1EWE6S0WleiSL0go5KVyxsaV2ZzW+bygSW+UysoeWqgiCS/JEu+jbL+c/UXmkwtGg+jTXIOHb19dyCKXmch9iRJTH0VrSyTjLK2ZqUhNos/IyfL3WegxIGGW7XIYnj/h8+Rxg6n7wB5Xk7t9Wm658NAvZ1UGo4VeZ4AZm3Sy0PuAA3ncM2BAYh7+hTLHO4hPfWZdZDJcC1JpDynTNPrUF2e8PzeVWxOttoD9HrIEsx9TPEr+VdyQ==', 'qvu+ILajzQ9NEtsESCE/rkh8y4XupzK6unL0REImv+izus75LfriR8wAbTwVluwZ9/TIdabTvG1YE8qHEKIBwzUf1Ol7BWzQQ8eNk5EbLlt4Ivs0eBQD3rkAz6yn9s07MeFTavyflYXYON8YSPlpC9HD/6DOngk6JwJYux3OaFNpi4/HVdkDP+hAYbJbM2Xs3hWheHZ28m2vaY9VjVYs6R89RgunPKN6QaJoJueZ49yKLASmbazICWFyFcoj4Xb', 'momo'),
(6, 'Ayuni', 'da@gmail.com', '771234567894', 'otkuQeJby9pnk2wMnmJJOtTtgPhsrRk3CQcxI3DGqwiOIUiKlrnD5vjOqaYrhSB7IAtDVrCzSB0jSX34GaE9aLGuZne4tjDpNqh62op/xwUDB44MRILE/Oja5Xy8GyWGEF06BIBeA0jMZk1E+VaLaLoZJieUPHUh+Z+ld3WOUXDzTe+ZHr8zwL14wPRrEWsJhXZEBnsS33rlN6Xb9jxMKScdbRB8Pkj+I3K3Fjh3jtF0L7QTW2RnMZtgQQEb19t2dCJjFqfohs8LEGJSsk/zbGCttR9q59gni0Z4FEAMUA0D5e/BWKw055AgBkRv2j5NDWF8a63OyeetoXmLnh//Qg==', 'oPSMVeWgKBo9iIweqtyYEWCIOFONRt85g5P6SPOMeu7j4e/Nae0tCPWBYvI3ZdY2EcQmbvcK4rhqgUOFvwtE9ojQx8JravMZGCjjnm+Vx/dkP9stNtgJ7AuCe8JXoAPHD9vloR2X8CQkCTk5mQUsVB7n+M+ZKJABwiLvHF6vWBAYMHh3L/RXa8pWqHY/n5D3ZiJ+v42i9b8glSSxzup/rmcq4q0XZGusMjxX6lKQ7xezZj8bnImZoXhQ8suyjHk5SYru73SS6yQWtre98HZAq5zjGMkZWA7nePC4nEnroDDq3OUmCuNOP58+ZHmCSkJD13ZfvDFEp5IzoyY90xfKVQ==', 'tJbQvfpTVr4V6CzLUICQk+gSejQ+0T2LTAF5Yo9Oj3aiCckJbGTBtCxMN5e21QpYYaRphEdhv/z2MGRGAp7QK+tDkXlXvkQeJTrqcbVTqDXsX6s9zn70I6so6VcJuzOu3sitBsLdNSYau7RQ9fZ3GARsr8ZrpCElxb3g7qS/Vo7XvZHNk7FXkMu0nM2g6E67dkK/N1ucJZpRS7Ac3x/XBhtmCaQNjj2gWwS5FzoJt/t6NPNZ7+W/Rvem8p8rvFa', 'momo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aes`
--
ALTER TABLE `aes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rsa`
--
ALTER TABLE `rsa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aes`
--
ALTER TABLE `aes`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rsa`
--
ALTER TABLE `rsa`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
