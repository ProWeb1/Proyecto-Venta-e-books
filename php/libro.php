<?php
	require_once 'conection.php';
	
	class libro {

		private $codigo;
		private $editorial;
		private $producto;
		private $idioma;
		private $titulo;
		private $isbn;
		private $paginas;
		
		const TABLA = 'libro';

//Constructor

		function __construct($codigo, $editorial, $producto, $idioma, $titulo, $isbn ,$paginas){
			$this->codigo = $codigo;
			$this->editorial = $editorial;
			$this->producto = $producto;
			$this->idioma = $idioma;
			$this->titulo = $titulo;
			$this->isbn = $isbn;
			$this->paginas = $paginas;
		}
		
//metodos GET

		function getCodigo(){
			return $this->codigo;
		}

		function getEditorial(){
			return $this->editorial;
		}

		function getProducto(){
			return $this->producto;
		}

		function getIdioma(){
			return $this->idioma;
		}

		function getTitulo(){
			return $this->titulo;
		}

		function getIsbn(){
			return $this->isbn;
		}

		function getPaginas(){
			return $this->paginas;
		}

//metodos SET

		function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		function setEditorial($editorial){
			$this->editorial = $editorial;
		}

		function setProducto($producto){
			$this->producto = $producto;
		}

		function setIdioma($idioma){
			$this->idioma = $idioma;
		}

		function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		function setIsbn($isbn){
			$this->isbn = $isbn;
		}

		function setPaginas($paginas){
			$this->paginas = $paginas;
		}



		public static function buscarPorId($iddemo){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT nombre FROM ' . self::TABLA . ' WHERE iddemo = :iddemo');
       $consulta->bindParam(':iddemo', $iddemo);
       $consulta->execute();
       $registro = $consulta->fetch();
       if($registro){
					echo 'su nombre es ' .$registro['nombre'];
          return new self($registro['nombre'], $iddemo);
       }else{
          return false;
       }
    }

		public static function buscarPorNombre($nombre){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT iddemo FROM ' . self::TABLA . ' WHERE nombre = :nombre');
       $consulta->bindParam(':nombre', $nombre);
       $consulta->execute();
       $registro = $consulta->fetch();
       if($registro){
					echo 'su id es';
          return new self($registro['iddemo'], $nombre);					
       }else{
          return false;
       }
    }

	}

?>
