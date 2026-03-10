# Robotics Management System - Tarea 6

## 📝 Descripción del Proyecto
Este sistema está diseñado para gestionar los procesos de una academia de robótica, permitiendo el control de usuarios (administrativos, profesores y alumnos), la organización de grupos de estudio y el catálogo de cursos con su respectivo material didáctico.

## 📊 Diagrama de Clases (ER)
A continuación se muestra la estructura lógica de la base de datos y cómo se relacionan las entidades principales:

![Diagrama de Clases](./Diagrama%20ER.png)

### Relaciones del Sistema:
* **Grupo → Usuario (1:N):** Los usuarios pertenecen a un grupo específico.
* **Grupo → Curso (1:N):** Cada grupo puede tener asignados múltiples cursos.
* **Curso → Material didáctico (1:1):** Cada curso está vinculado a un kit de robótica específico.

## 🚀 Automatización de Datos (Seeders y Factories)
Para facilitar las pruebas de desarrollo, se implementó un sistema de poblado automático:

1.  **Seeders Manuales:**
    * `UserSeeder`: Registra los accesos de Admon, Tecmilenio y Student.
    * `MaterialSeeder`: Carga los Kits (Starter, Educational y Pro).
2.  **Factories:**
    * `CourseFactory`: Genera automáticamente **100 cursos** de prueba con claves únicas y contenido aleatorio.

## 🛠️ Instalación y Configuración rápida
Para reconstruir la base de datos y cargar todos los datos de prueba anteriores, ejecuta:

```bash
php artisan migrate:fresh --seed
