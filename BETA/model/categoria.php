<?php
require_once 'model/database.php';
class categoria
{

	private $pdo;

    public $idProducto;
    public $NeuronaNombre;
    public $NeuronaPesosIdFk;
    public $NeuronaEntrada_1;
	public $NeuronaEntrada_2;
    public $NeuronaEntrada_3;
	public $NeuronaEntrada_4;
	public $NeuronaEntrada_5;
	public $NeuronaEntrada_6;
	public $NeuronaSalida_1;
	public $NeuronaSalida_2;
	public $NeuronaEstado;
	

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function MenuLista()
	{
		try
		{

			$result = array();
			$stm = $this->pdo->prepare("SELECT recomendacion
			FROM recomendacion 
			WHERE Recomendacion_categoria = 5");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function MenuLista1()
	{
		try
		{

			$result = array();
			$stm = $this->pdo->prepare("SELECT
			a.Recomendacion_id AS ID,
			a.Recomendacion_titulo AS TITULO,
			b.Categoria_nombre AS categorias,
			a.Recomendacion_costo AS COSTO,
			a.Recomendacion_estado AS ESTADO,
			a.Recomendacion_descripcion AS DESCRIPCION,
			c.Recomendacion_Img1 AS CARGA1,
			a.Recomendacion_fecha_creacion AS FECHA
		FROM
			recomendacion a
			INNER JOIN categoria b ON a.Recomendacion_categoria = b.Categoria_id
			INNER JOIN recomendacion_img c ON a.Recomendacion_id = c.Recomendacion_FK
		ORDER BY
			a.Recomendacion_id DESC;
			");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
	  try
	  {
		$stm = $this->pdo->prepare("SELECT 
									  Categoria_id,
									  Categoria_nombre,
									  Categoria_descripcion,
									  Categoria_estado,
									  CASE 
										WHEN Categoria_estado = 1 THEN 'ACTIVO'
										WHEN Categoria_estado <> 1 THEN 'INACTIVO'
									  END estado
									FROM categoria
									WHERE Categoria_id = ?");
		$stm->execute(array($id));
		return $stm->fetch(PDO::FETCH_OBJ);
	  } catch (Exception $e)
	  {
		die($e->getMessage());
	  }
	}

	
	
    public function ListarEntrenamiento()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM pesos");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    
    
}
