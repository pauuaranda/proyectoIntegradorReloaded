<?php
    abstract class BaseDeDatos{
<<<<<<< HEAD
    abstract static public function guardar($pdo,$usuario=[],$tabla);
=======
    abstract static public function guardar($pdo,$usuario,$tabla);
>>>>>>> cambiosPau

        abstract static public function leer();

        abstract static function borrar();

        abstract static function actualizar();
    }