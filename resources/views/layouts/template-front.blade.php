<!-- Plantilla creada por Neocenter. 
Licencia: Uso libre con restricciones. No modificar o eliminar los elemeentos del footer que hace referencia al creador.  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="overlay">
            <nav class="navbar">
                <a href="#" class="logo">BABYLUUU</a>
                <ul class="menu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
                <div class="socials">
                    <a href="https://www.facebook.com/bradd.lopezterrones" target="_blank">
                        <i class="fa-brands fa-facebook fa-2x"></i>
                    </a>
                    <a href="#"><i class="fa-brands fa-instagram fa-2x "></i></a>
                </div>
            </nav>
            <div class="header-content">
                <h1>Bienvenido a MiTienda</h1>
                <p>Encuentra los mejores productos al mejor precio</p>
            </div>
        </div>
    </header>

    
    @yield('contenido')
    
    
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 MiTienda. Todos los derechos reservados. Desing by <a href="https://neocenter.shop">Neocenter</a> </p>
            <p>Contacto: info@neocenter.shop</p>
        </div>
    </footer>
</body>
</html>
