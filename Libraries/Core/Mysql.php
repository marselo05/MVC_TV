<?php

/**
* 
*/
class Mysql extends Conexion
{
	private $conexion;
	private $strquery;
	private $arrvalues;

	public function __construct()
	{
		$this->conexion = new Conexion();
		$this->conexion = $this->conexion->conect();
	}

	// Inserta un registro
	public function insert(string $query, array $arrvalues)
	{
		$this->strquery  = $query;
		$this->arrvalues = $arrvalues;
		$insert    = $this->conexion->prepare($this->strquery);
		$resInsert = $insert->execute( $this->arrvalues );
		if ($resInsert) {
			$lastInsert = $this->conexion->lastInsertId();
		}
		else{
			$lastInsert = 0;
		}
		return $lastInsert;
	}

	// Buscar un registro
	public function select(string $query) 
	{
		$this->strquery = $query;
		$result = $this->conexion->prepare($this->strquery);
		$result->execute();
		$data = $result->fetch(PDO::FETCH_ASSOC);
		return $data;
	}

	// Devuelve todos los registros
	public function selectAll(string $query) 
	{
		$this->strquery = $query;
		$result = $this->conexion->prepare($this->strquery);
		$result->execute();
		$data = $result->fetchall(PDO::FETCH_ASSOC);
		return $data;
	}

	// Actuealiza registros
	public function update(string $query, array $arrvalues) 
	{
		$this->strquery  = $query;
		$this->arrvalues = $arrvalues;
		$update     = $this->conexion->prepare($this->strquery);
		$resExecute = $update->execute($this->arrvalues);
		return $resExecute;
	}

	// Eliminar un registro
	public function delete(string $query) 
	{
		$this->strquery = $query;
		$result = $this->conexion->prepare($this->strquery);
		$del = $result->execute();
		return $del;
	}
}