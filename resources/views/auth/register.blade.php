<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            background: #1e1e1e;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        }
        .login-container h1 {
            margin-bottom: 20px;
            font-size: 1.8rem;
            text-align: center;
        }
        .form-control {
            background-color: #2c2c2c;
            color: #e0e0e0;
            border: 1px solid #424242;
        }
        .form-control:focus {
            background-color: #2c2c2c;
            color: #e0e0e0;
            border-color: #64b5f6;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #111e29;
            border-color: #101214;
        }
        .btn-primary:hover {
            background-color: #003b6b;
            border-color: #42a5f5;
        }
        .text-decoration-none {
            color: #64b5f6;
        }
        .text-decoration-none:hover {
            color: #42a5f5;
        }
        input:placeholder{
            color:white;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Registrarse</h1>

        <form method="POST" action="{{route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Ingresa tu nombre" required>
            </div>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="username" class="form-label" minlength="4" required>Nombre de usuario</label>
                <input type="text"name="username" class="form-control" id="username" placeholder="Ingresa tu nombre de usuario" required>
            </div>
            @error('username')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="email" class="form-label" required>Correo Electrónico</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Ingresa tu correo" required>
            </div>

            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="password"  class="form-label" required>Contraseña</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
            </div>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="password_confirmation" class="form-label" required>Repite contraseña</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirma tu contraseña" required>
            </div>
            @error('password_confirmation')
                <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary w-100">Ingresar</button>
        </form>
        <div class="text-center mt-3">
            <a href="#" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
