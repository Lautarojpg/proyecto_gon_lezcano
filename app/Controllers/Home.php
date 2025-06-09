<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'principal';
        echo view('front/head_view', $data);
        echo view('front/nav_view', $data);
        echo view('front/inicio', $data);
        echo view('front/footer_view', $data); 
    }
<<<<<<< HEAD
=======

    public function quienes_somos()
    {
        $data['titulo'] = '¿Quiénes Somos?';
        echo view('front/head_view',$data);
        echo view('front/nav_view', $data);
        echo view('front/quienes_somos', $data);
        echo view('front/footer_view', $data);
    }

<<<<<<< HEAD
    public function catalogo()
    {
        $data['titulo'] = 'catalogo';
        echo view('front/head_view',$data);
        echo view('front/nav_view', $data);
        echo view('front/catalogo', $data);
        echo view('front/footer_view', $data);
    }
<<<<<<< HEAD
>>>>>>> 499cbfe (Primera version del catalogo)
=======

=======
>>>>>>> 091a9b4 (catalogo y carrito (problema con el modulo cart))
    public function contacto()
    {
        $data['titulo'] = 'contacto';
        echo view('front/head_view',$data);
        echo view('front/nav_view', $data);
        echo view('front/contacto', $data);
        echo view('front/footer_view', $data);
    }

    public function comercializacion()
    {
        $data['titulo'] = 'comercializacion';
        echo view('front/head_view',$data);
        echo view('front/nav_view', $data);
        echo view('front/comercializacion', $data);
        echo view('front/footer_view', $data);
    }
<<<<<<< HEAD
>>>>>>> 563ba3a (Se agrego la pagina comercializacion, y se quito)
=======

    public function terminos()
    {
        $data['titulo'] = 'terminos';
        echo view('front/head_view',$data);
        echo view('front/nav_view', $data);
        echo view('front/terminos', $data);
        echo view('front/footer_view', $data);
    }
<<<<<<< HEAD
>>>>>>> 8f0bf29 (agregado de la pagina terminos y condiciones)
=======

    public function privacidad()
    {
        $data['titulo'] = 'privacidad';
        echo view('front/head_view',$data);
        echo view('front/nav_view', $data);
        echo view('front/privacidad', $data);
        echo view('front/footer_view', $data);
    }
<<<<<<< HEAD
>>>>>>> c725c85 (parte del formulario)
}
=======

    public function preguntas_frecuentes()
    {
        $data['titulo'] = 'Preguntas Frecuentes';
        echo view('front/head_view',$data);
        echo view('front/nav_view', $data);
        echo view('front/preguntas_frecuentes', $data);
        echo view('front/footer_view', $data);
    }

    public function formulario()
    {
        $data['titulo'] = 'formulario';
        echo view('front/head_view',$data);
        echo view('front/nav_view', $data);
        echo view('back/formulario.php', $data);
        echo view('front/footer_view', $data);
    }
<<<<<<< HEAD
}
>>>>>>> dd6fd9f (parte del formulario)
=======

}
>>>>>>> a189e9c (logica del crud de productos)
