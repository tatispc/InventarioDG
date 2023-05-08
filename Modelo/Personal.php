<?php
class Personal
{
	private $codigo;
	private $area;
	private $identificacion;
	private $nombres;
	private $apellidos;
	private $telefono;
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
	
		public function setArea($area)
	{
		$this->area=$area;
	}
	
	public function getArea()
	{
		return ($this->area);
	}
	
	public function setIdentificacion($identificacion)
	{
		$this->identificacion=$identificacion;
	}
	
	public function getIdentificacion()
	{
		return ($this->identificacion);
	}
	
	public function setNombres($nombres)
	{
		$this->nombres=$nombres;
	}
	
	public function getNombres()
	{
		return ($this->nombres);
	}
	
	public function setApellidos($apellidos)
	{
		$this->apellidos=$apellidos;
	}
	
	public function getApellidos()
	{
		return ($this->apellidos);
	}
	
	public function setTelefono($telefono)
	{
		$this->telefono=$telefono;
	}
	
	public function getTelefono()
	{
		return ($this->telefono);
	}
	
	public function setCorreo($correo)
	{
		$this->correo=$correo;
	}
	
	public function getCorreo()
	{
		return ($this->correo);
	}
	
	public function Personal()
	
	{
		//$objConexion = Conectarse();
	}
	
	public function crearPersonal($codigo,$area,$identificacion,$nombres,$apellidos,$telefono,$correo)
	{
		$this->codigo=$codigo;
		$this->area=$area;
		$this->identificacion=$identificacion;
		$this->nombres=$nombres;
		$this->apellidos=$apellidos;
		$this->telefono=$telefono;
		$this->correo=$correo;
	}
	
	public function agregarPersonal()
	{
		$this->Conexion=Conectarse();
		$sql="insert into personal(idUsuario,userArea,userCodIdent,userNom,userApell,userTel,userCorreo) values ('$this->codigo','$this->area','$this->identificacion','$this->nombres','$this->apellidos','$this->telefono','$this->correo')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarPersonales()
	{
		$this->Conexion=Conectarse();
		$sql="select * from personal";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	
	
	public function consultarPersonal($codigo)
	{
		$this->Conexion=Conectarse();
		$sql="select * from personal where idUsuario='$codigo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
}
?>