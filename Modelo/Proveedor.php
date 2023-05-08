<?php
class Proveedor
{
	private $codigo;
	private $nit;
	private $nombres;
	private $telefono;
	private $direccion;
	private $correo;
	private $Conexion;
	
		public function setCodigo($codigo)
	{
		$this->codigo=$codigo;
	}
	
	public function getCodigo()
	{
		return ($this->codigo);
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
	
	public function setTelefono($telefono)
	{
		$this->telefono=$telefono;
	}
	
	public function getTelefono()
	{
		return ($this->telefono);
	}
	
	public function setDireccion($direccion)
	{
		$this->direccion=$direccion;
	}
	
	public function getDireccion()
	{
		return ($this->direccion);
	}
	
	public function setCorreo($correo)
	{
		$this->correo=$correo;
	}
	
	public function getCorreo()
	{
		return ($this->correo);
	}
	
	public function Proveedor()
	{
	}
	public function crearProveedor($codigo,$nit,$nombres,$telefono,$direccion,$correo)
	{
		$this->codigo=$codigo;
		$this->nit=$nit;
		$this->nombres=$nombres;
		$this->telefono=$telefono;
		$this->direccion=$direccion;
		$this->correo=$correo;
	}
	
	public function agregarProveedor()
	{
		$this->Conexion=Conectarse();
		$sql="insert into proveedor(proIdentificacion,proNit,proNombre,proTel,proDirec,proEmail) values ('$this->codigo','$this->nit','$this->nombres','$this->telefono','$this->direccion','$this->correo')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarProveedores()
	{
		$this->Conexion=Conectarse();
		$sql="select * from proveedor";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	
	
	public function consultarProveedor($codigo)
	{
		$this->Conexion=Conectarse();
		$sql="select * from proveedor where proIdentificacion='$codigo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
}
?>