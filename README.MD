<div align="center">

# 📦 Sistema de Inventario

<p align="center">
  <strong>Sistema web para la gestión y control de inventario de una tienda.</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/MySQL-8.0%2B-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />
  <img src="https://img.shields.io/badge/Apache-2.4%2B-D22128?style=for-the-badge&logo=apache&logoColor=white" alt="Apache" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />
</p>

---

</div>

## 📋 ¿Qué hace el proyecto?

Sistema web para la gestión y control de inventario de una tienda. Sus funciones principales son:

- 📝 **Registrar productos:** Formulario para ingresar nombre y cantidad con validación de campos.
- 📊 **Visualizar inventario:** Tabla con el listado de productos registrados, fecha, cantidad y estado automático (`Disponible` o `Sin existencia`).
- 🔔 **Mensajes de estado:** Alertas visuales de registro exitoso o errores en los datos.

---

## 🛠️ ¿Qué tecnologías utiliza?

| Tecnología | Detalle / Versión |
| :--- | :--- |
| **PHP** | Versión 8.1+ (conexión mediante PDO y sentencias preparadas) |
| **MySQL / MariaDB** | Versión 8.0+ / 10.4+ |
| **Apache** | Versión 2.4+ (servidor web local) |
| **Frontend** | HTML5 y CSS3 |

---

## 💻 ¿Qué se necesita instalar?

* **Servidor local:** Laragon o XAMPP (incluye Apache, PHP y MySQL).
* **Navegador web:** Chrome, Edge, Firefox o cualquier navegador moderno.

---

## 🚀 ¿Cómo se configura e instala?

1. **Ubicar el proyecto:**  
   Colocar la carpeta `inventario` dentro de `C:\laragon\www\` (o `C:\xampp\htdocs\` en XAMPP).

2. **Iniciar servicios:**  
   Abrir Laragon / XAMPP e iniciar Apache y MySQL.

3. **Crear base de datos:**  
   Crear una base de datos llamada `inventario` e importar el archivo `base_datos.sql`.

4. **Configurar conexión:**  
   Verificar que las credenciales en `config/conexion.php` coincidan con tu servidor local.

5. **Ejecutar:**  
   Abrir el navegador e ingresar a `http://localhost/inventario/` o `http://inventario.test`.

---
<div align="center">
  <sub>Desarrollado para la gestión eficiente de inventarios</sub>
</div>
