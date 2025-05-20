<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
<<<<<<< HEAD
=======
$routes->get('inicio', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('catalogo', 'Home::catalogo');
$routes->get('contacto', 'Home::contacto');
$routes->get('comercializacion', 'Home::comercializacion');
<<<<<<< HEAD
>>>>>>> 563ba3a (Se agrego la pagina comercializacion, y se quito)
=======
$routes->get('terminos', 'Home::terminos');
<<<<<<< HEAD
>>>>>>> 8f0bf29 (agregado de la pagina terminos y condiciones)
=======
<<<<<<< HEAD
$routes->get('privacidad', 'Home::privacidad');
=======
$routes->get('privacidad', 'Home::privacidad');
<<<<<<< HEAD
$routes->get('preguntas_frecuentes', 'Home::preguntas_frecuentes');
=======
$routes->get('formulario', 'Home::formulario');
$routes->get('preguntas_frecuentes', 'Home::preguntas_frecuentes');

$routes->get('/login', 'Home::login');
$routes->post('/enviarlogin', 'Login_controller::auth');
$routes->get('/login', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');

>>>>>>> 7cf4eae (parte del formulario)
>>>>>>> dd6fd9f (parte del formulario)
>>>>>>> c725c85 (parte del formulario)
