

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
				(
					Itinerario_fk_recom,
					Itinerario_fk_cliente
		
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

	public function MenuLista2()
	{
		try
		{

			$result = array();
			$stm = $this->pdo->prepare("SELECT 
				clie.id_interes_atracciones ,
				atra.nombre_interes ,
				cat.Categoria_nombre, 
				rec.Recomendacion_titulo ,
				neu.Neurona_Entrada_1_FK AS PERSONA ,  pes.Peso_01  as peso1,
				neu.Neurona_Entrada_2_FK AS COMP,  pes.Peso_02 as peso2,
				neu.Neurona_Entrada_3_FK AS HORARIO,  pes.Peso_03 as peso3, 
				neu.Neurona_Entrada_4_FK AS EDAD,  pes.Peso_04 as peso4 ,
				neu.Neurona_Entrada_5_FK AS GASTO,  pes.Peso_05 as peso5, 
				neu.Neurona_Entrada_6_FK AS SEXO, pes.Peso_06 as peso6,
							CASE  
								WHEN cli.Cliente_Edad >= 18 AND cli.Cliente_Edad <= 21 THEN '1'
								WHEN cli.Cliente_Edad >= 22 AND cli.Cliente_Edad <= 24 THEN '2'
								WHEN cli.Cliente_Edad >= 25 AND cli.Cliente_Edad <= 29 THEN '3'
								WHEN cli.Cliente_Edad >= 30 AND cli.Cliente_Edad <= 34 THEN '4'
								WHEN cli.Cliente_Edad >= 35 AND cli.Cliente_Edad <= 39 THEN '5'
								WHEN cli.Cliente_Edad >= 40 AND cli.Cliente_Edad <= 44 THEN '6'
								WHEN cli.Cliente_Edad >= 45 AND cli.Cliente_Edad <= 49 THEN '7'
								WHEN cli.Cliente_Edad >= 50 AND cli.Cliente_Edad <= 59 THEN '8'
								WHEN cli.Cliente_Edad >= 60 AND cli.Cliente_Edad <= 90 THEN '9'
								
							END AS Edad
				
				FROM
					clientes cli
					INNER JOIN interes_cliente clie ON clie.id_InteresCliente = cli.Cliente_Id
					INNER JOIN interes_atracciones atra ON atra.id_interes = clie.id_interes_atracciones
					INNER JOIN categoria cat ON cat.Categoria_interes = atra.id_interes
					INNER JOIN recomendacion rec ON rec.Recomendacion_categoria = cat.Categoria_id
					INNER JOIN neurona neu ON neu.Neurona_Id_Recomendacion_FK = rec.Recomendacion_id
					INNER JOIN pesos pes ON pes.Pesos_Fk_Neurona = neu.Neurona_Id
					

					where cli.Cliente_Id = 2 AND neu.Neurona_Entrada_1_FK=1 AND cli.Cliente_Sexo=neu.Neurona_Entrada_6_FK");
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
