<?php
namespace App\Models;
use CodeIgniter\Model;

class Productos_Model extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $allowedFields = ['nombre_prod','imagen','categoria_id','precio','precio_vta','stock','stock_min','eliminado'];

<<<<<<< HEAD
    public function getProductoAll(){
        return $this->findAll();
=======

    public function getBuilderProductos(){
        $db = \Config\Database::connect();
        $builder = $db->table('productos');
        $builder->select('*');
        $builder->join('categorias', 'categorias.id = productos.categoria_id');
        return $builder;
    }  

    public function getProducto($id = null){
        $builder = $this->getBuilderProductos();
<<<<<<< HEAD
        $builder->where('productos.id', $id);
=======
        if($id !== null){
            $builder->where('productos.id_producto', $id);
            $query = $builder->get();
            return $query->getRowArray();
        }
>>>>>>> bdbdc41 (arreglo 2)
        $query = $builder->get();
        return $query->getRowArray();
>>>>>>> a27b359 (modelos de ventas)
    }

    public function updateStock($id = null, $stock_actual = null){
        $builder = $this->getBuilderProductos();
        $builder->where('productos.id_producto', $id);
        $builder->set('productos.stock', $stock_actual);
        $builder->update();
    }
}