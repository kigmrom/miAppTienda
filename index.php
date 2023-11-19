<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pineapple - Productos Apple</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Pineapple</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="cartDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      Carrito
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="cartDropdown">
                      <!-- Modificación para sugerir al usuario crear una cuenta -->
                      <p class="px-4 py-3">¡Hola! Para disfrutar de todas las funcionalidades del carrito, considera
                          crear una cuenta o iniciar sesión.</p>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">¿Ya tienes una cuenta? Inicia sesión aquí</a>
                      <a class="dropdown-item" href="#">¿No tienes cuenta? Crea una cuenta</a>
                  </div>
              </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Iniciar Sesión
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">
                    <form class="px-4 py-3" action="validarSesion.php" method="post">
                            <div class="form-group">
                                <label for="usuario">Usuario:</label>
                                <input type="text" class="form-control" id="usuario" placeholder="Ingrese su usuario">
                            </div>
                            <div class="form-group">
                                <label for="contrasena">Contraseña:</label>
                                <input type="password" class="form-control" id="contrasena"
                                    placeholder="Ingrese su contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <!-- Encabezado (Jumbotron) -->
    <div class="jumbotron">
        <h2>Descubre lo último en tecnología móvil</h2>
        <p>Explora nuestra selección de productos Apple</p>
    </div>

    <!-- Sección de Productos -->
    <div class="container container-products">
        <h2>Nuestros Productos</h2>
        <div class="row">
            <!-- Aquí van las tarjetas de productos (similar al ejemplo anterior) -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://via.placeholder.com/300" alt="Producto 1">
                    <h3>iPhone 13 Pro</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://via.placeholder.com/300" alt="Producto 2">
                    <h3>iPad Pro</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://via.placeholder.com/300" alt="Producto 3">
                    <h3>MacBook Air</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Carrito de Compras -->
    <div class="container cart-section">
        <h2>Carrito de Compras</h2>
        <!-- Aquí va la información del carrito (puede ser una tabla, por ejemplo) -->
    </div>

    <!-- Lista de Deseos -->
    <div class="container wishlist-section">
        <h2>Lista de Deseos</h2>
        <!-- Aquí va la información de la lista de deseos -->
    </div>

    <!-- Pie de Página -->
    <footer>
        &copy; 2023 CelularShop. Todos los derechos reservados.
    </footer>

    <!-- Bootstrap JS y Popper.js (Requeridos para los componentes de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    

</body>

</html>