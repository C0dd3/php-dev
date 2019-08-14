<?php 

	# Função recursiva: uma função que chama ela mesma.

	$hieraquia = array (
		array(
			'nome_cargo' => 'CEO',
			'subordinados' => array(
				// Inicio: Diretor.
				array(
					'nome_cargo' => 'Diretor Comercial',
					'subordinados' => array(
						// Genrente de Vendas
						array(
							'nome_cargo'=>'Gerente de Vendas'
						)
						//Término: Gerente de Vendas.
					)	
				),

			)
				
		),

	);

	function exibe($cargos) {

		$html = '<ul>';

		foreach ($cargos as $cargo) {
			

			$html .= "<li>";

			$html .= $cargo['nome_cargo'];

			if (isset($cargo['subordinados']) && count($cargo['subordinados'])> 0) { # count  veririca quantidade de itens dentro de uma array.

				$html .= exibe($cargo['subordinados']);

			}

			$html .= "</ul>";

		}

		$html .= "</ul>";

		return $html;

	}

	echo exibe($hieraquia);
 ?>