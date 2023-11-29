CREATE DATABASE stylehub;
use stylehub;

CREATE TABLE `usuarios` (
  `id` int(9) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido_usuario` varchar(50) NOT NULL,
  `edad_usuario` int(3) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `password_usuario` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
COMMIT;