<?php
    class Usuario{
        private $nombre;
        private $email;
        private $password;

        public function __construct($email,$password,$nombre=null){

            $this->nombre = $nombre;

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
    }