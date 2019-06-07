<?php 
<<<<<<< HEAD

    class BaseDatosMysql extends BaseDeDatos{
        static public function conexion($host,$db,$user,$pass,$puerto){
            try{
                $dsn="mysql:host=".$host.";"."dbname=".$db.";"."port=".$puerto;
                $mdb=new PDO($dsn,$user,$pass);
                $mdb->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
                return $mdb;
            }catch(PDOException $e){
                echo "Ocurrio un error en la apertura de la base de datos.  ".$e->getmessage();
=======
    class BaseDatosMysql extends BaseDeDatos{
        static public function conexion($host,$db,$user,$pass,$puerto,$charset){
            try{
                $dsn="mysql:host=".$host.";"."dbname=".$db.";"."port=".$puerto.";"."charset=".$charset;
                $baseDatos=new PDO($dsn,$user,$pass);
                $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  
                return $baseDatos;
            }catch(PDOException $e){
                "Ocurrio un error en la apertura de la base de datos. Salu2".$e->getmessage();
>>>>>>> cambiosPau
                exit;
            }
        }
        
        static public function guardar($pdo,$usuario,$tabla){
            $sql = "insert into $tabla (first_name,last_name,email,password,profile,avatar) values (:first_name,:last_name,:email,:password,:profile,:avatar )";
            $query = $pdo->prepare($sql);
<<<<<<< HEAD
            $query->bindValue(':first_name',$usuario["nombre"]);
            $query->bindValue(':last_name',$usuario["apellido"]);
            $query->bindValue(':email',$usuario["email"]);
            $query->bindValue(':password',password_hash($usuario["password"],PASSWORD_DEFAULT));
            $query->bindValue(':profile',$usuario["perfil"]);
            $query->bindValue(':avatar',$usuario["avatar"]);
=======
            $query->bindValue(':first_name',$usuario->getNombre());
            $query->bindValue(':last_name',$usuario->getApelldo());
            $query->bindValue(':email',$usuario->getEmail());
            $query->bindValue(':password',password_hash($user->getPassword(),PASSWORD_DEFAULT));
            $query->bindValue(':profile',1);
            $query->bindValue(':avatar',$avatar);
>>>>>>> cambiosPau
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