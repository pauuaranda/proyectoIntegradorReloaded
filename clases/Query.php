<?php 
    class Query{
<<<<<<< HEAD
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
=======
        static public function buscarEmail(){
        $sql = "select * from $tabla where email = :email";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        return $usuario;
>>>>>>> cambiosPau
        }
    }