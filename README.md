```markdown
# 📋 Gestor de Tareas Personal

Aplicación web desarrollada con **Laravel** que permite gestionar tareas pendientes mediante un CRUD completo (Crear, Leer, Actualizar, Eliminar).

## ✨ Funcionalidades

- ✅ Crear nuevas tareas con título, descripción y fecha límite
- 📖 Visualizar listado de tareas ordenadas por fecha
- ✏️ Editar tareas existentes
- 🗑️ Eliminar tareas con confirmación previa
- 🛡️ Protección CSRF en todos los formularios
- 📋 Validación de datos en servidor
- 💾 Persistencia de datos cuando falla la validación

## 🛠️ Tecnologías utilizadas

- Laravel 12.59.0
- PHP 8.2.12
- MySQL
- Blade
- HTML5/CSS3

## 🔧 Instalación

```bash
cd gestor-tareas
composer install
cp .env.example .env
php artisan key:generate
```

Configurar base de datos en `.env`:

```env
DB_DATABASE=laravel_9
DB_USERNAME=root
DB_PASSWORD=
```

```bash
php artisan migrate
php artisan serve
```

Abrir en navegador: `http://127.0.0.1:8000/tasks`

## 📁 Estructura principal

```
resources/views/
├── layouts/
│   └── app.blade.php
└── tasks/
    ├── index.blade.php
    ├── create.blade.php
    └── edit.blade.php
```


---

⭐ ¡Si te gustó este proyecto, dale una estrella!
```

---

## ✅ Pasos rápidos para usarlo:

1. **Crea el archivo** `README.md` dentro de la carpeta `gestor-tareas`
2. **Abre el archivo** con el bloc de notas o cualquier editor
3. **Copia TODO el código** de arriba y pégalo
4. **Cambia** `TU-USUARIO` por tu usuario de GitHub (dos veces)
5. **Cambia** `Tu Nombre` por tu nombre
6. **Guarda el archivo**

## 📤 Subirlo a GitHub:

```bash
git add README.md
git commit -m "Agregar README"
git push origin main
```
