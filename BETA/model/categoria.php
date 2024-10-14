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

	public function VerificarEdad($email) {
       try {
            // Preparar la consulta SQL

     		$stm = $this->pdo->prepare("SELECT CASE  
			 WHEN Cliente_Edad >= 18 AND Cliente_Edad <= 21 THEN '1'
			 WHEN Cliente_Edad >= 22 AND Cliente_Edad <= 24 THEN '2'
			 WHEN Cliente_Edad >= 25 AND Cliente_Edad <= 29 THEN '3'
			 WHEN Cliente_Edad >= 30 AND Cliente_Edad <= 34 THEN '4'
			 WHEN Cliente_Edad >= 35 AND Cliente_Edad <= 39 THEN '5'
			 WHEN Cliente_Edad >= 40 AND Cliente_Edad <= 44 THEN '6'
			 WHEN Cliente_Edad >= 45 AND Cliente_Edad <= 49 THEN '7'
			 WHEN Cliente_Edad >= 50 AND Cliente_Edad <= 59 THEN '8'
			 WHEN Cliente_Edad >= 60 AND Cliente_Edad <= 90 THEN '9' 
		     END AS Edad			
			 FROM clientes WHERE Cliente_Email=?");
              // Ejecutar la consulta con el correo electrónico como parámetro
			  $stm->execute(array($email));

			  // Obtener el valor de la columna "Edad" como resultado único
			  $edad = $stm->fetchColumn();
	  
			  // Devolver la edad como un solo valor
			  return $edad;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
	public function VerificarSexo($email) {
        try {
            // Preparar la consulta SQL

     		$stm = $this->pdo->prepare("SELECT Cliente_Sexo FROM clientes WHERE Cliente_Email=?");
              // Ejecutar la consulta con el correo electrónico como parámetro
			$stm->execute(array($email));
            
            // Obtener el resultado de la consulta
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }

	public function VerificarEmail($email) {
		try {
			$sql = "SELECT Cliente_Id FROM clientes WHERE Cliente_Email = ?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$email]);
	
			$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
			return $resultado ? $resultado['Cliente_Id'] : null;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	public function VerificarEmailx($email) {
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

	public function VerificarSexo2($email) {
        try {
            // Preparar la consulta SQL
            $sql = "SELECT Cliente_Sexo FROM clientes WHERE Cliente_Email=?";
            $stmt = $this->pdo->prepare($sql);
            
            // Ejecutar la consulta con el correo electrónico como parámetro
            $stmt->execute([$email]);
            
            // Obtener el resultado de la consulta
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Verificar si se encontró un resultado
            if ($resultado) {
                // Devolver el hash de la contraseña
                return $resultado['Cliente_Sexo'];
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

	public function MenuListaNeurona()
	{
		try
		{

			$result = array();
			$stm = $this->pdo->prepare("SELECT    
			neu.Neurona_Entrada_1_FK AS PERSONA ,  pes.Peso_01  as peso1,
			neu.Neurona_Entrada_2_FK AS COMP,  pes.Peso_02 as peso2,
			neu.Neurona_Entrada_3_FK AS HORARIO,  pes.Peso_03 as peso3, 
			neu.Neurona_Entrada_4_FK AS EDAD,  pes.Peso_04 as peso4 ,
			neu.Neurona_Entrada_5_FK AS GASTO,  pes.Peso_05 as peso5, 
			neu.Neurona_Entrada_6_FK AS SEXO, pes.Peso_06 as peso6 ,pes.Peso_7_out as peso7
			FROM
			neurona neu
			INNER JOIN pesos pes ON pes.Pesos_Fk_Neurona= neu.Neurona_Id");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
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




	public function MenuLista_1()
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
					a.Recomendacion_fecha_creacion AS FECHA,
					ROUND(COALESCE(AVG(pe.Peso_7_out), 0), 2) AS Peso_7_out_comprimido  -- Redondea a 2 decimales
				FROM
					recomendacion a
					INNER JOIN categoria b ON a.Recomendacion_categoria = b.Categoria_id
					INNER JOIN recomendacion_img c ON a.Recomendacion_id = c.Recomendacion_FK
					LEFT JOIN pesos pe ON a.Recomendacion_id = pe.Pesos_Fk_Neurona -- Vincula la tabla de pesos
				WHERE
					a.Recomendacion_estado = 1 
					AND a.Recomendacion_categoria = 1
				GROUP BY
					a.Recomendacion_id, 
					a.Recomendacion_titulo, 
					b.Categoria_nombre, 
					a.Recomendacion_costo, 
					a.Recomendacion_estado, 
					a.Recomendacion_descripcion, 
					c.Recomendacion_Img1, 
					a.Recomendacion_fecha_creacion
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
	public function MenuLista_2()
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
		WHERE a.Recomendacion_estado= 1 AND a.Recomendacion_categoria = 2
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

	public function MenuLista_3()
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
		WHERE a.Recomendacion_estado= 1 AND a.Recomendacion_categoria = 3
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
	public function MenuLista_4()
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
		WHERE a.Recomendacion_estado= 1 AND a.Recomendacion_categoria = 4
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
	public function MenuLista_5()
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
		WHERE a.Recomendacion_estado= 1 AND a.Recomendacion_categoria = 5
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
	public function MenuLista_6()
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
		WHERE a.Recomendacion_estado= 1 AND a.Recomendacion_categoria = 6
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
	public function MenuLista_7()
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
		WHERE a.Recomendacion_estado= 1 AND a.Recomendacion_categoria = 7
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
	public function MenuLista_8()
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
		WHERE a.Recomendacion_estado= 1 AND a.Recomendacion_categoria = 8
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
	public function MenuLista_9()
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
		WHERE a.Recomendacion_estado= 1 AND a.Recomendacion_categoria = 9
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
	public function MenuListaBusqueda()
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

	public function ObtenerRecomendacionPorID($id) {
		// Realiza la consulta SQL para obtener la recomendación por ID
		$consulta = "SELECT a.Recomendacion_id AS ID,
		a.Recomendacion_titulo AS TITULO,
		a.Recomendacion_costo AS COSTO,
		a.Recomendacion_estado AS ESTADO,
		a.Recomendacion_descripcion AS DESCRIB,
		c.Recomendacion_Img1 AS CARGA1,
		a.Recomendacion_fecha_creacion AS FECHA
	    FROM
		recomendacion a
		     INNER JOIN recomendacion_img c ON a.Recomendacion_id = c.Recomendacion_FK
	    WHERE a.Recomendacion_id = :recomendacion_id";
	
		try {
			// Preparar la consulta SQL
			$stm = $this->pdo->prepare($consulta);
	
			// Bind del valor del ID
			$stm->bindParam(':recomendacion_id', $id, PDO::PARAM_INT);
	
			// Ejecutar la consulta
			$stm->execute();
	
			// Obtener el resultado como un objeto
			$resultado = $stm->fetch(PDO::FETCH_OBJ);
	
			// Devolver la respuesta como JSON
			echo json_encode($resultado);
		} catch (Exception $e) {
			// Manejo de excepciones
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

	public function Buscar_solicitud_cliente($data)
	{
		try
		{ 
			$valor=1;
			$valor_edad=$data->edad;
			if ($data->sexo=1){
				$valor=1;
			}else {
				$valor=2;
			}
			
			$stm = $this->pdo->prepare("SELECT 
			 Neurona_Id_Recomendacion_FK AS id_recomen,
			 Neurona_Entrada_1_FK AS persona,
			 Neurona_Entrada_2_FK as comp,
			 Neurona_Entrada_3_FK as sexo, 
			 Neurona_Entrada_4_FK as horario,
			 Neurona_Entrada_5_FK as edad,
			 Neurona_Entrada_6_FK as costo
			FROM neurona 
			WHERE  Neurona_Entrada_2_FK = :compania
			AND Neurona_Entrada_3_FK = :sexo
			AND Neurona_Entrada_4_FK = :horario
			AND Neurona_Entrada_5_FK = :edad
			AND Neurona_Entrada_6_FK = :costo
			AND Neurona_Categoria_id_FK = :cat;


			");
			$stm->execute(array(
				':compania' => $data->compania,
				':sexo' => $valor,
				':horario' => $data->horario,
				':edad' => $data->edad,
				':costo' => $data->precio,
				':cat' => $data->categoria
			));
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} 
		catch (Exception $e)
		{
			// Manejo de la excepción
			die($e->getMessage());
		}
	}
  
   


    
    
}
