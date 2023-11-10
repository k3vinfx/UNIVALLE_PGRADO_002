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
	
	public function IdGetEmail($valor)
	{
		try
		{
			
			$result = array();
			$stm = $this->pdo->prepare("SELECT Cliente_Id FROM clientes WHERE Cliente_Email=?");

		$stm->execute(array($valor));
		return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}

	}

	public function VerificarEmail($email) {
        try {
            // Preparar la consulta SQL
            $sql = "SELECT Cliente_Id FROM clientes WHERE Cliente_Email=?";
            $stmt = $this->pdo->prepare($sql);
            
            // Ejecutar la consulta con el correo electrónico como parámetro
            $stmt->execute([$email]);
            
            // Obtener el resultado de la consulta
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Verificar si se encontró un resultado
            if ($resultado) {
                // Devolver el hash de la contraseña
                return $resultado['Cliente_Id'];
            } 
        } catch (Exception $e) {
            // Manejar cualquier excepción que pueda ocurrir durante la consulta
            die($e->getMessage());
        }
    }

	public function RegistrarItinerario(categoria $data)
	{
		try
		{
			 	$sql = "INSERT INTO itinerario_cliente 
				(Itinerario_fk_cliente,
				Itinerario_fk_recom
 				)
		        VALUES (?, ?)";
				$this->pdo->prepare($sql)
				->execute([
    				$data->dato1,
					$data->dato2
				]);			
			
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

	public function Obtener($id)
	{
	  try
	  {
		$stm = $this->pdo->prepare("SELECT a.Recomendacion_FK as idFK,	
		a.Recomendacion_Img1 as img1,	
		a.Recomendacion_Img2 as img2,				
		a.Recomendacion_Img3 as img3,					
		a.Recomendacion_Img4 as img4,				
		a.Recomendacion_Img5 as img5,	
		b.Recomendacion_ubicacion_tour as nombre,
		b.Recomendacion_titulo as titulo,
		b.Recomendacion_descripcion as descrip,
		b.Recomendacion_costo as costo,
		b.Recomendacion_latlong as latlong
		FROM recomendacion_img a
		INNER JOIN recomendacion b ON b.Recomendacion_id = a.Recomendacion_FK
		WHERE a.Recomendacion_FK =?");
		$stm->execute(array($id));
		return $stm->fetch(PDO::FETCH_OBJ);
	  } catch (Exception $e)
	  {
		die($e->getMessage());
	  }
	}



    
    
}
