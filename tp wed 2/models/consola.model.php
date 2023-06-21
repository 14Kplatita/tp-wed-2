<?php
    
Class consolamodel{

        private $db; 
    

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=database', 'root', '');
            
        }

        public function obtenermodelos(){
            $query = $this->db->prepare('SELECT * FROM modelos');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function obtenermodelo($id){
            $query = $this->db->prepare("SELECT * FROM modelos WHERE modelos_id = ?");
            $query->execute(array($id));
            return $query->fetch(PDO::FETCH_OBJ);
        }

        public function eliminar($id){
            $query=$this->db->prepare("DELETE from `modelos` WHERE modelos_id = ? ");
            $query->execute(array($id));
        }
        
        public function ActualizarModelo($fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos, $categoria, $id=' '){
            $query = $this->db->prepare("UPDATE modelos SET modelos_fabricante = :fabicante, modelos_modelo = :modelo, modelos_especificaciones = :espesificaciones, modelos_imagen = :imagen, modelos_historia = :historia, modelos_juegos = :juegos, categoria_id = :categoria WHERE modelos_id = :id");
            $query->execute([":fabicante" => $fabricante,
                             ":modelo" => $modelo,
                             ":espesificaciones" => $especificaciones,
                             ":imagen" => $imagen,
                             ":historia" => $historia,
                             ":juegos" => $juegos,
                             ":categoria" => $categoria,
                             ":id" => $id]);
            return $this -> db ->lastInsertId();
        }

        public function addcontenido($fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos, $categoria=' '){
            $query = $this->db->prepare("INSERT INTO `modelos` (`modelos_fabricante`, `modelos_modelo`, `modelos_especificaciones`, `modelos_imagen`, `modelos_historia`, `modelos_juegos`, `categoria_id`) VALUES (?,?,?,?,?,?,?)");
            $query->execute(array($fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos, $categoria));
            return $this -> db ->lastInsertId();
        }

        public function AñadirLaCategiria($fabricante, $generacion=' '){
            $query = $this->db->prepare("INSERT INTO `consolas` (`categoria_fabricante`, `categoria_generacion`) VALUES (?,?)");
            $query->execute(array($fabricante, $generacion));
            return $this -> db ->lastInsertId();
        }
}