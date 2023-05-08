<?php
class Garantia
{
	private $codigo;
	private $fecha;
	private $nit;
	private $nombres;
	private $observacion;
	private $Conexion;
	
		public function setCodigo($codigo)
	{
		$this->codigo=$codigo;
	}
	
	public function getCodigo()
	{
		return ($this->codigo);
	}
		public function setFecha($fecha)
	{
		$this->fecha=$fecha;
	}
	
	public function getFecha()
	{
		return ($this->fecha);
	}
	
	public function setNit($nit)
	{
		$this->nit=$nit;
	}
	
	public function getNit()
	{
		return ($this->nit);
	}
	
	public function setNombres($nombres)
	{
		$this->nombres=$nombres;
	}
	
	public function getNombres()
	{
		return ($this->nombres);
	}
	
	public function setObservacion($observacion)
	{
		$this->observacion=$observacion;
	}
	
	public function getObservacion()
	{
		return ($this->observacion);
	}
	
	public function Garantia()
	{
	}
	public function crearGarantia($codigo,$fecha,$nit,$nombres,$observacion)
	{
		$this->codigo=$codigo;
		$this->fecha=$fecha;
		$this->nit=$nit;
		$this->nombres=$nombres;
		$this->observacion=$observacion;
	}
	
	public function agregarGarantia()
	{
		$this->Conexion=Conectarse();
		$sql="insert into garantia(idGarantia,fechaGarantia,identClienteGarantia,merMaterGarantia,garObservacion) values ('$this->codigo','$this->fecha','$this->nit','$this->nombres','$this->observacion')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarGarantias()
	{
		$this->Conexion=Conectarse();
		$sql="select * from garantia";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	
	
	public function consultarGarantia($codigo)
	{
		$this->Conexion=Conectarse();
		$sql="select * from garantia where idGarantia='$codigo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
}
?>