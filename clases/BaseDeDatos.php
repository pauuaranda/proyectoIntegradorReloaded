<?php
    abstract class BaseDeDatos{
    abstract static public function guardar($pdo,$usuario=[],$tabla);

        abstract static public function leer();

        abstract static function borrar();

        abstract static function actualizar();
    }