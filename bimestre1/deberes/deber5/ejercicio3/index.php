<?php
echo '<html>';
echo '<head>';
	echo '<title>Deber 5</title>';
	echo '<meta charset="utf-8">';
echo '</head>';
echo '<body>';
	 echo '<form action="" method="post">';
	 	echo '<select name="provincia" onchage="submit">';
	 		
		 		if ($_POST) {
		 			$provincia=$_POST['provincia'];
		 			require("provincias_cantones_parroquias.php"); 	 			
		 			foreach ($provincias_cantones_parroquias as $codigop=>$nombrep) 
		 			{
		 				if ($provincia==$codigop) 
		 				{
		 					echo '<option selected value='.$codigop.'>'. 
		 					$provincias_cantones_parroquias[$provincia]['provincia'].'</option>';	 	
		 				}
		 				else
		 				{					
		 					echo '<option value='.$codigop.'>'.$nombrep["provincia"].'</option>';	
		 				}		
		 			}	 
		 		}
		 		else
		 		{		 			
		 			echo '<option selected>Seleccione...</option>';
		 			require("provincias_cantones_parroquias.php"); 
		 			foreach ($provincias_cantones_parroquias as $codigop=>$nombrep) 
		 			{
		 				echo '<option value='.$codigop.'>'.$nombrep["provincia"].'</option>';
		 			}

		 		}
			
	 	echo '</select>';

	 	echo '<select name="canton" onchange="submit">';
	 		echo '<option selected>Seleccione...</option>';
	 		
		 		if ($_POST) {
	 				$provincia=$_POST['provincia'];
	 				$canton=$_POST['canton'];
	 				require("provincias_cantones_parroquias.php"); 	 			
	 				foreach ($provincias_cantones_parroquias[$provincia]['cantones'] as $codigop=>$nombrep) 
	 				{
		 				if ($canton==$codigop) 
		 				{
		 						echo '<option selected value='.$codigop.'>'. 
		 						$provincias_cantones_parroquias[$provincia]['cantones'][$canton]['canton'].'</option>';	 	
		 				}
		 				else
			 			{
			 				echo '<option value='.$codigop.'>'.$nombrep['canton'].'</option>';	
			 			}		
	 				}	 
		 		}
		 		else
			 		{
			 			if($_POST)
						{
							$provincia=$_POST['provincia'];

							require("provincias_cantones_parroquias.php"); 
							foreach ($provincias_cantones_parroquias[$provincia]["cantones"] as $codigoc=>$nombrec) 
							{
						 		echo '<option value='.$codigoc.'>'.$nombrec["canton"].'</option>';	 				
						 	}	
						}
			 		}
		
	 	echo '</select>';

	 	echo '<select name="parroquias">';
	 		echo '<option selected>Seleccione...</option>';
	 		
				if ($_POST) 
				{
					$provincia=$_POST['provincia'];
					$canton=$_POST['canton'];
					$parroquia=$_POST['parroquias'];
					
					require("provincias_cantones_parroquias.php"); 	 			
					foreach ($provincias_cantones_parroquias[$provincia]['cantones'][$canton]["parroquias"] as $codigop=>$nombrep) 
					{
						if ($parroquia==$codigop) 
						{
							echo '<option selected value='.$codigop.'>'.
							$provincias_cantones_parroquias[$provincia]['cantones'][$canton]['parroquias'][$codigop].'</option>';	 	
						}
						else
						{
							echo '<option value='.$codigop.'>'.$nombrep.'</option>';	
						}		
					}	 
				}
				else
					{
						if($_POST)
							{
								$provincia=$_POST['provincia'];
								$canton=$_POST['canton'];
								require("provincias_cantones_parroquias.php"); 
								foreach ($provincias_cantones_parroquias[$provincia]['cantones'][$canton]["parroquias"] as $codigoc=>$nombrec) 
								{
							 		echo '<option value='.$codigoc.'>'.$nombrec.'</option>';	 				
							 	}	
							}
					}
	
	 	echo '</select>';

	 	echo '<input type="submit" value="Enviar">';
	 echo '</form>';
echo '</body>';
echo '</html>';
?>