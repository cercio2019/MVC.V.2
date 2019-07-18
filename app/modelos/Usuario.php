<?php 
class Usuario
{
	
	function __construct()
	{
		$this->db = new Base;
	}

	public function obtenerUsuario()
	{
		$this->db->query('SELECT * FROM usuarios');
		$resultados = $this->db->registros();
		return $resultados;
	}

	public function agregarUsuario($datos)
	{
		$this->db->query("INSERT INTO usuarios (nombre, email, telefono) VALUES (:nombre, :email, :telefono)");

		//vincular valore
		$this->db->bind(':nombre', $datos['nombre']);
		$this->db->bind(':email', $datos['email']);
		$this->db->bind(':telefono', $datos['telefono']);

		//ejecutar
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function obtenerUsuarioId($id)
	{
		$this->db->query('SELECT * FROM usuarios WHERE id = :id');
		$this->db->bind(':id', $id);

		$fila= $this->db->registro();
		return $fila;
	}

	public function actualizarUsuario($datos)
	{
		$this->db->query('UPDATE usuarios SET nombre= :nombre, email= :email, telefono= :telefono  WHERE id = :id');
     
     // vincular datos
		$this->db->bind(':id', $datos['id']);
       $this->db->bind(':nombre', $datos['nombre']);
	   $this->db->bind(':email', $datos['email']);
	   $this->db->bind(':telefono', $datos['telefono']);
     
     //ejecutar
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function borrarUsuario($datos)
	{
		$this->db->query('DELETE FROM usuarios  WHERE id = :id');    
     // vincular datos
		$this->db->bind(':id', $datos['id']);      
     //ejecutar
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
 ?>