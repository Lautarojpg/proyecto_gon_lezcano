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

<<<<<<< HEAD
>>>>>>> 7cf4eae (parte del formulario)
<<<<<<< HEAD
>>>>>>> dd6fd9f (parte del formulario)
<<<<<<< HEAD
>>>>>>> c725c85 (parte del formulario)
=======
=======
=======

$routes->get('/crear', 'Productos_controller::index', ['filter' => 'auth']);
$routes->get('/agregar', 'Productos_controller::index', ['filter' => 'auth']);
$routes->get('/produ-form', 'Productos_controller::crearproducto', ['filter' => 'auth']);
$routes->post('/enviar-produ', 'Productos_controller::store', ['filter' => 'auth']);
$routes->get('/editar/(:num)', 'Productos_controller::singleproducto/$1', ['filter' => 'auth']);
$routes->post('modifica/(:num)', 'Productos_controller::modifica/$1', ['filter' => 'auth']);
$routes->get('borrar/(:num)', 'Productos_controller::deleteproducto/$1', ['filter' => 'auth']);
$routes->get('/eliminados', 'Productos_controller::eliminados', ['filter' => 'auth']);
<<<<<<< HEAD
$routes->get('activar_pro/(:num)', 'Productos_controller::activarproducto/$1', ['filter' => 'auth']);
>>>>>>> 8051494 (logica del crud de productos)
<<<<<<< HEAD
>>>>>>> a189e9c (logica del crud de productos)
<<<<<<< HEAD
>>>>>>> 711ab97 (logica del crud de productos)
=======
=======
=======
$routes->get('/activar_pro/(:num)', 'Productos_controller::activarproducto/$1', ['filter' => 'auth']);
>>>>>>> 139f245 (crud de productos terminado (falta mejora estetica))
>>>>>>> e86a2d7 (crud de productos terminado (falta mejora estetica))
>>>>>>> 7c5ebb4 (crud de productos terminado (falta mejora estetica))
