<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pineapple - Productos Apple</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">Pineapple</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#inicio">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">Productos</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#13">iPhone 13</a></li>
                        <li><a class="dropdown-item" href="#14">iPhone 14</a></li>
                        <li><a class="dropdown-item" href="#15">iPhone 15</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="cartDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Iniciar Sesión
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">
                        <form class="px-4 py-3" action="validarSesion.php" method="post">
                            <div class="form-group">
                                <label for="usuario">Usuario:</label>
                                <input type="text" class="form-control" id="usuario" name="usuario"
                                    placeholder="Ingrese su usuario">
                            </div>
                            <div class="form-group">
                                <label for="contrasena">Contraseña:</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena"
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

    <!-- Encabezado Carrusel -->
    <div id="inicio" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/iPhone13.png" class="d-block w-100" alt="iPhone13">
            </div>
            <div class="carousel-item">
                <img src="img/iPhone14.png" class="d-block w-100" alt="iPhone14">
            </div>
            <div class="carousel-item">
                <img src="img/iPhone15.png" class="d-block w-100" alt="iPhone15">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Sección de iPhone 13 -->
    <div class="container container-products" id="13">
        <h2>iPhone 13</h2>
        <div class="row">
            <!-- Aquí van las tarjetas de productos (similar al ejemplo anterior) -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="img/iPhone13Black.webp" alt="Foto iPhone13 Negro">
                    <h3>iPhone 13 Negro</h3>
                    <p class="product-price">Precio: $999.99</p>
                    <!-- Botón de "Añadir al carrito" -->
                    <button class="btn btn-primary btn-add-to-cart" data-product="iPhone 13 Negro">Añadir al
                        carrito</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="img/iPhone13Gold.webp" alt="Foto iPhone13 Dorado">
                    <h3>iPhone 13 Dorado</h3>
                    <p class="product-price">Precio: $999.99</p>
                    <!-- Botón de "Añadir al carrito" -->
                    <button class="btn btn-primary btn-add-to-cart" data-product="iPhone 13 Dorado">Añadir al
                        carrito</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="img/iPhone13Plata.webp" alt="foto iPhone13 Plata">
                    <h3>iPhone 13 Plata</h3>
                    <p class="product-price">Precio: $999.99</p>
                    <!-- Botón de "Añadir al carrito" -->
                    <button class="btn btn-primary btn-add-to-cart" data-product="iPhone 13 Plata">Añadir al
                        carrito</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de iPhone 14 -->
    <div class="container container-products" id="14">
        <h2>iPhone 14</h2>
        <div class="row">
            <!-- Aquí van las tarjetas de productos (similar al ejemplo anterior) -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="img/iPhone14Black.webp" alt="Foto iPhone14 Negro">
                    <h3>iPhone 14 Negro</h3>
                    <p class="product-price">Precio: $999.99</p>
                    <!-- Botón de "Añadir al carrito" -->
                    <button class="btn btn-primary btn-add-to-cart" data-product="iPhone 14 Negro">Añadir al
                        carrito</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="img/iPhone14Gold.webp" alt="Foto iPhone14 Dorado">
                    <h3>iPhone 14 Dorado</h3>
                    <p class="product-price">Precio: $999.99</p>
                    <!-- Botón de "Añadir al carrito" -->
                    <button class="btn btn-primary btn-add-to-cart" data-product="iPhone 14 Dorado">Añadir al
                        carrito</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="img/iPhone14Plata.webp" alt="Foto iPhone14 Plata">
                    <h3>iPhone 14 Plata</h3>
                    <p class="product-price">Precio: $999.99</p>
                    <!-- Botón de "Añadir al carrito" -->
                    <button class="btn btn-primary btn-add-to-cart" data-product="iPhone 14 Plata">Añadir al
                        carrito</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de iPhone 15 -->
    <div class="container container-products" id="15">
        <h2>iPhone 15</h2>
        <div class="row">
            <!-- Aquí van las tarjetas de productos (similar al ejemplo anterior) -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://www.apple.com/v/iphone-15/c/images/overview/contrast/iphone_15__dozjxuchowcy_large.jpg"
                        alt="foto iPhone 15">
                    <h3>iPhone 15</h3>
                    <p class="product-price">Precio: $999.99</p>
                    <!-- Botón de "Añadir al carrito" -->
                    <button class="btn btn-primary btn-add-to-cart" data-product="iPhone 15">Añadir al
                        carrito</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://www.apple.com/v/iphone-15/c/images/overview/contrast/iphone_15pro__ezc4eofw13yq_large.jpg"
                        alt="foto iPhone 15 PRO">
                    <h3>iPhone 15 PRO</h3>
                    <p class="product-price">Precio: $999.99</p>
                    <!-- Botón de "Añadir al carrito" -->
                    <button class="btn btn-primary btn-add-to-cart" data-product="iPhone 15 Pro">Añadir al
                        carrito</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de Página -->
    <footer>
        &copy; 2023 CelularShop. Todos los derechos reservados.
    </footer>

    <!-- Bootstrap JS y Popper.js (Requeridos para los componentes de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!--Deslizador -->

</body>

</html>