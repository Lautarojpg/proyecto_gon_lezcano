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
$routes->get('borrar_producto/(:num)', 'Productos_controller::deleteproducto/$1', ['filter' => 'auth']);
$routes->get('/eliminados', 'Productos_controller::eliminados', ['filter' => 'auth']);
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> e86a2d7 (crud de productos terminado (falta mejora estetica))
<<<<<<< HEAD
>>>>>>> 7c5ebb4 (crud de productos terminado (falta mejora estetica))
=======
=======
=======
$routes->get('/activar_pro/(:num)', 'Productos_controller::activarproducto/$1', ['filter' => 'auth']);

//Rutas para el carrito*/
//muestra todos los productos del catalogo
$routes->get('/todos_p','carrito_controller::catalogo',['filter' => 'auth']);

//carga la vista carrito_parte_view
$routes->get('/muestro','carrito_controller::muestra',['filter' => 'auth']);

//actualiza los datos del carrito
$routes->get('/carrito_actualiza','carrito_controller::actualiza_carrito',['filter' => 'auth']);

//agregar los items seleccionados
$routes->post('carrito/add','Carrito_controller::add',['filter' => 'auth']);

//elimina un item del carrito
$routes->get('carrito_elimina/(:any)','carrito_controller::remove/$1',['filter' => 'auth']);

//elimar todo el carrito
$routes->get('/borrar','carrito_controller::borrar_carrito',['filter' => 'auth']);

//Registrar la venta en las tablas
<<<<<<< HEAD
$routes->get('/carrito-comprar','Ventascontroller::registrar_venta',['filter' => 'auth']);
=======
$routes->get('/carrito-comprar','Ventas_controller::registrar_venta',['filter' => 'auth']);
>>>>>>> a27b359 (modelos de ventas)

//botones de sumar y restar en la vista del carrito
$routes->get('carrito_suma/(:any)','carrito_controller::suma/$1');
$routes->get('carrito_resta/(:any)','carrito_controller::resta/$1');
<<<<<<< HEAD
>>>>>>> 240cc88 (carrito segunda parte)
<<<<<<< HEAD
>>>>>>> 2e12d49 (carrito segunda parte)
<<<<<<< HEAD
>>>>>>> 444d7d8 (carrito segunda parte)
=======
=======
=======

$routes->get('vista_compras/(:num)', 'Ventas_controller::ver_facturas/$1', ['filter' => 'auth']);
$routes->get('ver_factura_usuario/(:num)', 'Ventas_controller::ver_facturas_usuario/$1', ['filter' => 'auth']);
$routes->get('ventas', 'Ventas_controller::ventas');
>>>>>>> 8708807 (logica de carrito terminada)
>>>>>>> 85d809a (logica de carrito terminada)
>>>>>>> 0b95671 (logica de carrito terminada)
