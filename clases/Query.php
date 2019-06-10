<?php 
    class Query{
        static public function buscarEmail($email,$pdo,$tabla){
            $sql = "select * from $tabla where email = :email";
            $query = $pdo->prepare($sql);
            $query->bindValue(':email',$email);
            $query->execute();
            $usuario = $query->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        }
        static public function cambioPass($email,$newpass,$pdo,$tabla){
            $sql="update $tabla set password=:newpass where email = :email";
            $query = $pdo->prepare($sql);
            $query->bindValue(':email',$email);
            $query->bindValue(':newpass',password_hash($newpass,PASSWORD_DEFAULT));
            $query->execute();
        }
        static public function listar($pdo,$tabla){
            $sql="select * from $tabla";
            $query=$pdo->prepare($sql);
            $query->execute();
            $listado=$query->fetchAll(PDO::FETCH_ASSOC);
            return $listado;
        }
        static public function borrarUser($pdo,$tabla,$idUser){
            $sql="delete from $tabla where $tabla.id=:id";
            $query=$pdo->prepare($sql);
            $query->bindValue(':id',$idUser);
            $query->execute();
        }
        static public function modificarUser($pdo,$tabla,$idUser){
            $sql = "select $tabla.id, $tabla.first_name,$tabla.last_name, $tabla.email, $tabla.profile from $tabla where $tabla.id = '$idUser'";
            $query = $pdo->prepare($sql);
            $query->execute();
            $modificarUser=$query->fetch(PDO::FETCH_ASSOC);
            return $modificarUser;
        }
    }
    