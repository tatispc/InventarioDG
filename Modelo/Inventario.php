<?php
class Inventario
{
	
	private $codigo;
	private $nombre;
	private $cantidad;
	private $medida;
	//private $canAnterior;
	//private $canRestar;
	private $Conexion;
	
		public function setcodigo($codigo)
	{
		$this->codigo=$codigo;
	}
	
	public function getcodigo()
	{
		return ($this->codigo);
	}
	
	public function setnombre($nombre)
	{
		$this->nombre=$nombre;
	}
	
	public function getnombre()
	{
		return ($this->nombre);
	}
	
	public function setcantidad($cantidad)
	{
		$this->cantidad=$cantidad;
	}
	
	public function getcantidad()
	{
		return ($this->cantidad);
	}
	
	public function setunidad($unidad)
	{
		$this->unidad=$unidad;
	}
	
	public function getunidad()
	{
		return ($this->unidad);
	}
	
	public function Inventario()
	
	{
		
	}
	
	public function crearInventario($codigo, $nombre, $cantidad, $medida)
	{
		$this->codigo=$codigo;
		$this->nombre=$nombre;
		$this->cantidad=$cantidad;
		$this->medida=$medida;
	}
	
	public function agregarInventario()
	{
		$this->Conexion=Conectarse();
		$sql="insert into mercanciamaterialconstruccion(idMercancia, merMater, merCant, merUnidad) values ('$this->codigo', '$this->nombre', '$this->cantidad', '$this->medida')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function restarInventario($id, $cantidadRestada)
	{
		$this->Conexion=Conectarse();
		$this->resultadoResta=$cantidad-$cantidadRestada;
		$this->idMerc=$id;
		if ($resultadoResta>=0)
		{
			$sql="UPDATE mercanciamaterialconstruccion SET merCant = " . $resultadoResta ."WHERE idMercancia= " . $idMerc;
			$resultado=$this->Conexion->query($sql);
		}
		else
		{
			$resultado=false;
		}
		
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function debitarInventario()
	{
		$this->Conexion=Conectarse();
		$sql="UPDATE inventario SET cantidad = cantidad - cantidad" . $_REQUEST["cantidad"] . " WHERE merCant = " . $_REQUEST["merCant"];
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarInventarios()
	{
		$this->Conexion=Conectarse();
		$sql="select * from mercanciamaterialconstruccion";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	
	
	public function consultarInventario($codigo)
	{
		$this->Conexion=Conectarse();
		$sql="select * from mercanciamaterialconstruccion where idMercancia='$codigo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
}
?>