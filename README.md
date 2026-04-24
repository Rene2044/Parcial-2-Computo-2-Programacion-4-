# Rene Oswaldo Orellana de la O SMSS018422
# Allisson Lourdes Guevara Palma SMIS038421

Preguntas
.¿Como manejan la conexion a la BD y que pasa si algunos de los datos son incorrectos? Justifique la manera de validacion de la conexion.
Estrategia: Utilizamos el enfoque "fail-fast" (fallar rápido). Si la conexión no se establece correctamente, usamos die() para detener la ejecución y evitar errores de lógica en la base de datos.

Validación: Verificamos el estado de $conexionsql antes de procesar cualquier consulta, lo cual nos ayuda a prevenir los errores fatales que veíamos al inicio

.¿Cual es la diferencia entre $_GET y $_POST en PHP? ¿Cuándo es más apropiado usar cada uno? Da un ejemplo real de tu proyecto.
El método $_GET
Este método envía los datos a través de la URL, lo que significa que la información es visible para cualquier persona que vea la barra de direcciones del navegador.

El método $_POST
Por el contrario, $_POST envía los datos dentro del cuerpo de la petición HTTP, manteniéndolos ocultos de la URL.

.Tu app va a usarse en una empresa de la zona oriental. ¿Qué riesgos de seguridad identificas en una app web con BD que maneja datos de los usuarios? ¿Cómo los mitigarían?
Inyección SQL: Es el riesgo de insertar código malicioso en los inputs.

Solución: Usamos Prepared Statements (prepare() y bind_param()), que separan el comando SQL de los datos enviados por el usuario.

Errores del Servidor: Mostrar errores como "Fatal error" revela la estructura de tus archivos.

Solución: Desactivar la visualización de errores (display_errors = Off) en el entorno de producción.

Tabla: usuarios
| Columna | Tipo de dato || Límite | Descripción |
| :--- | :--- || :--- | :--- |
| id | INT || N/A | Identificador único |
| email | VARCHAR || 100 | Correo de acceso |
| password | VARCHAR || 255 | Clave cifrada |

Tabla: productos
| Columna | Tipo de dato || Límite | Descripción |
| :--- | :--- || :--- | :--- |
| id | INT || N/A | Identificador único |
| nombre | VARCHAR || 100 | Nombre del producto |
| categoria | VARCHAR || 100 | Clasificación |
| cantidad | INT || N/A | Stock actual |
| precio | DECIMAL || (10,2) | Valor unitario |

CREATE DATABASE IF NOT EXISTS despensa_donjuan;
USE despensa_donjuan;


CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);


INSERT INTO usuarios (email, password) VALUES ('admin@donjuan.com', '12345678');


CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    cantidad INT NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

USUARIO: admin@donjuan.com
Contraseña: 12345678
