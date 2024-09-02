<?php 

echo 'Escolha uma das seguintes:<br><br>1 - Adição<br>2 - Subtração<br>3 - Multiplicação<br>4 - Divisão<br><br><br>Seu cálculo:<br><br>';

$n1=30; // Defina o primeiro valor
$n2=50; // Defina o segundo valor

// 1 - Adição
// 2 - Subtração
// 3 - Multiplicação
// 4 - Divisão

$escolha=2;

switch ($escolha) {
	case 1: // Adição
		function adicao($n1, $n2){

			return($n1+$n2);

		}

		echo "$n1 + $n2 = " . adicao($n1, $n2);
		break;

	case 2: // Subtração
		function subtracao($n1, $n2){

			return($n1-$n2);

		}

		echo "$n1 - $n2 = " . subtracao($n1, $n2);
		break;

	case 3: // Multiplicação
		function multiplicacao($n1, $n2){

			return($n1*$n2);

		}

		echo "$n1 * $n2 = " . multiplicacao($n1, $n2);
		break;

	case 4: // Divisão
		function divisao($n1, $n2){

			return($n1/$n2);

		}

		echo "$n1 / $n2 = " . divisao($n1, $n2);
		break;
	
	default:

		echo 'Você selecionou uma opção inválida, escolha uma das seguintes:<br><br>1 - Adição<br>2 - Subtração<br>3 - Multiplicação<br>4 - Divisão';
		
		break;
}


?>