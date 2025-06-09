<<<<<<< HEAD
<html>
    <head>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
        <title>Proyecto</title>
    </head>
    <body>
<<<<<<< HEAD
    <h1 class="display-1">Pepepelis</h1> <!-- titulo -->
        <section class="conteiner-fluid"> <!-- barra de nav -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
=======
=======
<body>
>>>>>>> 795032f (arreglo de estructura html)
    <section class="w-100 m-0 p-0">    <!-- barra de nav -->
        <nav class="navbar navbar-expand-lg custom-navbar navbar-dark">
>>>>>>> acdb222 (arreglo de estructura html)
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
<<<<<<< HEAD
<<<<<<< HEAD
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
=======
                    <a class="nav-link active" href="<?= base_url('quienes_somos') ?>">Nosotros</a>
>>>>>>> d3879e4 (cambio de imagenes de comercializacion y arreglo)
=======
                    <a class="nav-link active nav_color" href="<?= base_url('quienes_somos') ?>">Nosotros</a>
>>>>>>> e3c7283 (detalles de diseño)
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= base_url('catalogo') ?>" id="catalogoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catálogo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="catalogoDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('catalogo#terror') ?>">Terror</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('catalogo#ciencia') ?>">Ciencia Ficción</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('catalogo#comedia') ?>">Comedia</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('comercializacion') ?>">Comercializacion</a>
                    </li>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('contacto') ?>">Contacto</a>
                    </li>
<<<<<<< HEAD
=======
                    <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('formulario') ?>">Formulario</a>
                    </li>
                     <li>
<<<<<<< HEAD
=======
=======
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php if (session('perfil_id') != 1): ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url('comercializacion') ?>">Comercializacion</a>
                            </li>
                        <?php endif; ?>
                        <?php if (session('perfil_id') != 1): ?>
                            <li class="nav-item">
                                <a class="nav-link active nav_color" href="<?= base_url('quienes_somos') ?>">Nosotros</a>
                            </li>
                        <?php endif; ?>
                        <?php if (session('perfil_id') == 2): ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url('contacto') ?>">Contacto</a>
                            </li>
                        <?php endif; ?>
<<<<<<< HEAD
<<<<<<< HEAD
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url('registro') ?>">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url('login') ?>">Login</a>
                        </li>
>>>>>>> e090184 (Consultas)
=======
=======
                        <?php if (session('perfil_id') == 2): ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url('/todos_p') ?>">Catalogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url('/muestro') ?>">Carrito</a>
                            </li>
                        <?php endif; ?>
>>>>>>> 83fcc73 (catalogo y carrito (problema con el modulo cart))
                        <?php if (session('perfil_id') != 1): ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url('registro') ?>">Registro</a>
                            </li>
                        <?php endif; ?>
                        <?php if (session('perfil_id') != 1): ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url('login') ?>">Login</a>
                            </li>
                        <?php endif; ?>
>>>>>>> 744ebcd (usuarios y cierre de sesion)
>>>>>>> 091a9b4 (catalogo y carrito (problema con el modulo cart))
                        <?php if (session('perfil_id') == 1): ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url('/crear') ?>">CRUD Productos</a>
                            </li>
                        <?php endif; ?>
                     </li>
                    <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle active" id="ayudaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ayuda
                    </span>
                        <ul class="dropdown-menu" aria-labelledby="Ayuda">
                            <li><a class="dropdown-item" href="<?= base_url('preguntas_frecuentes') ?>">Preguntas Frecuentes</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('terminos') ?>">Términos y Condiciones</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('privacidad') ?>">Politica de Privacidad</a></li>
                        </ul>
                    </li>
<<<<<<< HEAD
>>>>>>> 7cf4eae (parte del formulario)
                </ul>
<<<<<<< HEAD
<<<<<<< HEAD
                <form class="d-flex" role="search">
=======
=======
=======
                    </ul>
>>>>>>> 8051494 (logica del crud de productos)
>>>>>>> 711ab97 (logica del crud de productos)
                 <!-- <form class="d-flex" role="search">
>>>>>>> acdb222 (arreglo de estructura html)
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
    </section>