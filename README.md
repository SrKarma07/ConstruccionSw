# ConstruccionSw
Proyecto Construcción y Evolución de Software

Comentario de prueba

## Scrips de la base de datos
CREATE TABLE acciones (
idAccion int(11) NOT NULL,
NombreAccion varchar(5) NOT NULL,
FechaCompra date NOT NULL,
PrecioCompraAccion int(3) NOT NULL,
CantidadAcciones int(3) NOT NULL,
CostoTotalCompra int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

## Scrips de TRIGGERS
DELIMITER $$
CREATE TRIGGER resultado2 BEFORE UPDATE ON acciones FOR EACH ROW BEGIN
SET NEW.CostoTotalCompra = NEW.PrecioCompraAccion * NEW.CantidadAcciones;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER resultado3 BEFORE INSERT ON acciones FOR EACH ROW BEGIN
SET new.CostoTotalCompra = new.PrecioCompraAccion * new.CantidadAcciones;
END
$$
DELIMITER ;


ALTER TABLE acciones
ADD PRIMARY KEY (idAccion);

ALTER TABLE acciones
MODIFY idAccion int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;