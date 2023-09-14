<?php
    namespace App\Models;
    
    use CodeIgniter\Model;

    class ProductosModel extends Model{
        protected $table = 'productos';
        protected $alowedFields = ['nombre', 'precio', 'stock', 'codigo'];
    }
?>