<?php

require_once './php/consola.View.php';
require_once './models/consola.model.php';

class consolaControler{

    private $consolaview;
    private $consolamodel;

    public function __construct(){
        $this->consolaview = new consolaView();
        $this->consolamodel = new consolaModel();
    }

    function showHome(){
        $this-> consolaview->showHomePage();
    }

    function contenido(){
        $this-> consolaview->showcontenidoPage();
    }

    function añadircategorias(){
        $this-> consolaview-> MostarElAñadirCategorias();
    }

    function añadircategoria(){
        $fabricante = $_POST['categoria_fabricante'];
        $generacion = $_POST['categoria_generacion'];
        $this -> consolamodel -> AñadirLaCategiria($fabricante, $generacion);
        header("Location: " . BASE_URL . 'home');
    }

    function editar($id){
        $ModelosEditar=$this->consolamodel->obtenermodelo($id);
        $fabricante = $ModelosEditar -> modelos_fabricante;
        $modelo = $ModelosEditar -> modelos_modelo;
        $especificaciones = $ModelosEditar -> modelos_especificaciones;
        $imagen = $ModelosEditar -> modelos_imagen;
        $historia = $ModelosEditar -> modelos_historia;
        $juegos = $ModelosEditar -> modelos_juegos;
        $this -> consolaview -> EditarContenido($id, $fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos);
    }

    function actualizar($id){
        $fabricante = $_POST['modelo_fabricante'];
        $modelo = $_POST['modelo_modelo'];
        $especificaciones = nl2br($_POST['modelo_especificaciones'],false);
        $imagen = $_POST['modelo_imagen'];
        $historia = nl2br($_POST['modelo_historia'],false); 
        $juegos = nl2br($_POST['modelo_juegos'],false); 
        $categoria = $_POST['categoria_id']; 
        $this -> consolamodel -> ActualizarModelo($fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos, $categoria, $id);
            header("Location:".BASE_URL. 'modelos' );
    }

    public function serveAllmodelos(){
        $modelos=$this->consolamodel->obtenermodelos();
        if(!empty($modelos)){
            $this->consolaview->showmodelos($modelos);
        }
    }

    public function obtenermodelo($id){
        $elmodelo=$this->consolamodel->obtenermodelo($id);
        if(!empty($elmodelo)){
            $this->consolaview->MostarElModelo($elmodelo);
        }
    }

    public function borrar($id){
        if(isset($id)&&!empty($id)){
        $this->consolamodel->eliminar($id);
        header("Location: " . BASE_URL . 'modelos');
        }
    }

    public function addcontenido(){
        $fabricante = $_POST['modelo_fabricante'];
        $modelo = $_POST['modelo_modelo'];
        $especificaciones = nl2br($_POST['modelo_especificaciones'],false);
        $imagen = $_POST['modelo_imagen'];
        $historia = nl2br($_POST['modelo_historia'],false); 
        $juegos = nl2br($_POST['modelo_juegos'],false); 
        $categoria = $_POST['categoria_id']; 
            $this -> consolamodel -> addcontenido($fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos, $categoria);
            header("Location:".BASE_URL. 'modelos' );
    }
    
}

