# 📦 Sistema de Inventario / Inventory Management System (Laravel + Livewire)

Una aplicación web para la gestión de productos, categorías y ventas en tiempo real utilizando **Laravel**, **Livewire** y **PostgreSQL**.  
Incluye autenticación de usuarios, operaciones CRUD, navegación dinámica y una interfaz moderna y responsiva.

A web application for managing products, categories, and sales in real time using **Laravel**, **Livewire**, and **PostgreSQL**.  
Includes user authentication, CRUD operations, dynamic navigation, and a modern responsive interface.

---

## 🧩 Características / Features

✔️ Gestión de productos y categorías  
✔️ Actualizaciones en tiempo real con **Livewire**  
✔️ Sistema de autenticación por defecto de Laravel  
✔️ Base de datos **PostgreSQL**  
✔️ Navegación lateral dinámica con componentes  
✔️ Interfaz adaptable para administradores y usuarios estándar  
✔️ Arquitectura limpia y escalable  

✔️ Product and category management  
✔️ Real-time updates with **Livewire**  
✔️ Laravel’s default authentication system  
✔️ **PostgreSQL** database  
✔️ Dynamic sidebar navigation  
✔️ Role-based interface for admin and standard users  
✔️ Clean and scalable architecture  

---

## 🛠️ Tecnologías utilizadas / Technologies Used

| Categoría / Category | Tecnologías / Technologies |
|----------------------|----------------------------|
| **Backend** | Laravel 11 (PHP 8.3) |
| **Frontend** | Livewire, Blade Templates|
| **Base de datos / Database** | PostgreSQL |
| **Estilos / Styling** |  CSS |
| **Autenticación / Auth** | Laravel Breeze (default) |
| **Herramientas / Tools** | Composer, Artisan CLI, Git |

---

## 🧱 Arquitectura / Architecture Overview

El proyecto sigue el patrón **MVC (Modelo–Vista–Controlador)** característico de Laravel.  

The project follows the **MVC (Model–View–Controller)** pattern used by Laravel.

app/
├── Http/
│ ├── Controllers/ # Lógica y controladores / Controllers and logic
│ └── Middleware/
├── Livewire/ # Componentes Livewire / Livewire components
├── Models/ # Modelos Eloquent / Eloquent models
├── Views/ # Vistas Blade / Blade templates
└── Providers/
database/
├── migrations/ # Estructura de la base / Database schema
└── seeders/ # Datos iniciales / Seed data
routes/
├── web.php # Rutas principales / Main routes
└── api.php # (Opcional / Optional)


---

## ⚙️ Configuración / Setup & Configuration

### 🔧 Requisitos / Requirements

- PHP 8.3+
- Composer
- PostgreSQL
- Node.js
- Git

### ⚙️ Pasos de instalación / Setup Steps

1. **Clonar el repositorio / Clone the repository**
   ```bash
   git clone https://github.com/tuusuario/inventario-livewire.git
   cd inventario-livewire
2. **Instalar dependencias / Install dependencies**
composer install
npm install && npm run dev
3. **Configurar entorno / Set environment variables**
cp .env.example .env
Ejemplo de configuración de base de datos / Example database configuration:

	DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=inventory_db
DB_USERNAME=postgres
DB_PASSWORD=yourpassword

4. **Generar clave de aplicación / Generate app key**
php artisan key:generate
5. **Ejecutar migraciones y seeders / Run migrations and seeders**
php artisan migrate --seed

6. **Iniciar servidor local / Start the development server**
npm run dev
php artisan serve
🔗 Abre en tu navegador / Open in browser:
👉 http://localhost:8000

## 👨‍💻 Autor

**José Silva**  
Backend Developer — Laravel | Java | Spring Boot 
[LinkedIn](https://www.linkedin.com/in/tu-perfil) | [GitHub](https://github.com/tu-usuario)
