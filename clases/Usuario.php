<?php
    class Usuario{
        private $nombre;
        private $apellido;
        private $email;
        private $password;

        public function __construct($email,$password,$nombre=null,$apellido=null){

            $this->nombre = $nombre;

            $this->apellido= $apellido;

            $this->email = $email;

            $this->password = $password;
        }


        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email=$email;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password=$password;
        }
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getApellido(){
            return $this->apellido;
        }

        public function setApellido($apellido){
            $this->apellido=$apellido;
        }
    }