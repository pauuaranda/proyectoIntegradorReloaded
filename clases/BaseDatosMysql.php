<?php 

    class BaseDatosMysql extends BaseDeDatos{
        static public function conexion($host,$db,$user,$pass,$puerto){
            try{
                $dsn="mysql:host=".$host.";"."dbname=".$db.";"."port=".$puerto;
                $mdb=new PDO($dsn,$user,$pass);
                $mdb->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
                return $mdb;
            }catch(PDOException $e){
                echo "Ocurrio un error en la apertura de la base de datos.  ".$e->getmessage();
                exit;
            }
        }
        
        static public function guardar($pdo,$usuario,$tabla){
            $sql = "insert into $tabla (first_name,last_name,email,password,profile,avatar) values (:first_name,:last_name,:email,:password,:profile,:avatar )";
            $query = $pdo->prepare($sql);
            $query->bindValue(':first_name',$usuario["nombre"]);
            $query->bindValue(':last_name',$usuario["apellido"]);
            $query->bindValue(':email',$usuario["email"]);
            $query->bindValue(':password',password_hash($usuario["password"],PASSWORD_DEFAULT));
            $query->bindValue(':profile',$usuario["perfil"]);
            $query->bindValue(':avatar',$usuario["avatar"]);
            $query->execute();
        
        }
        
        static public function leer(){
            //
        }
        static public function borrar(){
            //
        }
        
        static public function actualizar(){
            //
        }
    }