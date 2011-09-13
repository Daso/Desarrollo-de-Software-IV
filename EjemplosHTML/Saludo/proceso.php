<?php 
		abstract class Proceso{
				
			public static function run(){
			
				$nombre = $_POST['nombre'];
				$nivel = $_POST['ingreso'];
				$chocolate = $_POST['chk01'];
				$vainilla = $_POST['chk02'];
				$menta = $_POST['chk03'];
				$password = $_POST['password'];

				echo 'Hola, '.$nombre.'<br />'; 
				echo 'y eres de nivel económico '.'<strong>'.$nivel.'</strong> <br />';
				echo 'y te gusta: '.$chocolate.' '.$vainilla.' '.$menta.'<br />';
				echo 'Y tu password es: '.$password. ' muahahaha';

			}								
		}
Proceso::run();
