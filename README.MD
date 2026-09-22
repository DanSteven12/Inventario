# ¿Qué hace el proyecto?
Sistema web para la gestión y control de inventario de una tienda. Sus funciones principales son:
Registrar productos: Formulario para ingresar nombre y cantidad con validación de campos.
Visualizar inventario: Tabla con el listado de productos registrados, fecha, cantidad y estado automático (`Disponible` o `Sin existencia`).
Mensajes de estado: Alertas visuales de registro exitoso o errores en los datos.

# ¿Qué tecnologías utiliza?
PHP: Versión 8.1+ (conexión mediante PDO y sentencias preparadas).
MySQL / MariaDB: Versión 8.0+ / 10.4+
Apache:Versión 2.4+ (servidor web local).
Frontend: HTML5 y CSS3.

# ¿Qué se necesita instalar?
Servidor local: Laragon o XAMPp (incluye Apache, PHP y MySQL).
Navegador web: Chrome, Edge, Firefox o cualquier navegador moderno.

# ¿Cómo se configura e instala?
Ubicar el proyecto: Colocar la carpeta `inventario` dentro de `C:\laragon\www\` (o `C:\xampp\htdocs\` en XAMPP).Iniciar servicios: Abrir Laragon / XAMPP e iniciar Apache y MySQL.
Crear base de datos: Crear una base de datos llamada `inventario` e importar el archivo `base_datos.sql`.
Configurar conexión: Verificar que las credenciales en `config/conexion.php` coincidan con tu servidor local.
Ejecutar: Abrir el navegador e ingresar a `http://localhost/inventario/` o `http://inventario.test`.
