<?php
class Cliente
{
	private $codigo;
	private $nombres;
	private $nit;
	private $telefono;
	private $direccion;
	private $correo;
	private $tipocliente;
	private $tipocompra;
	private $Conexion;
	
		public function setCodigo($codigo)
	{
		$this->codigo=$codigo;
	}
	
	public function getCodigo()
	{
		return ($this->codigo);
	}
	
	public function setNombres($nombres)
	{
		$this->nombres=$nombres;
	}
	
	public function getNombres()
	{
		return ($this->nombres);
	}
	
	public function setNit($nit)
	{
		$this->nit=$nit;
	}
	
	public function getNit()
	{
		return ($this->nit);
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
	
		public function setTipocliente($tipocliente)
	{
		$this->tipocliente=$tipocliente;
	}
	
	public function getTipocliente()
	{
		return ($this->tipocliente);
	}
	
	public function setTipocompra($tipocompra)
	{
		$this->tipocompra=$tipocompra;
	}
	
	public function getTipocompra()
	{
		return ($this->tipocompra);
	}
	public function Cliente()
	
	{
		
	}
	
	public function crearCliente($codigo,$nombres,$nit,$telefono,$direccion,$correo,$tipocliente,$tipocompra)
	{
		$this->codigo=$codigo;
		$this->nombres=$nombres;
		$this->nit=$nit;
		$this->telefono=$telefono;
		$this->direccion=$direccion;
		$this->correo=$correo;
		$this->tipocliente=$tipocliente;
		$this->tipocompra=$tipocompra;
	}
	
	public function agregarCliente()
	{
		$this->Conexion=Conectarse();
		$sql="insert into cliente(idCliente,nomCliente,nitCliente,telCliente,dirCliente,correoCliente,tipCliente,tipCompra) values ('$this->codigo','$this->nombres','$this->nit','$this->telefono','$this->direccion','$this->correo','$this->tipocliente','$this->tipocompra')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarClientes()
	{
		$this->Conexion=Conectarse();
		$sql="select * from cliente";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	
	
	public function consultarCliente($codigo)
	{
		$this->Conexion=Conectarse();
		$sql="select * from cliente where idCliente='$codigo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
}
?>