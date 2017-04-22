<?php

class Horario
{
    protected $entrada, $saida;

    public function __construct($entrada, $saida)
    {
        $this->entrada = $entrada;
        $this->saida = $saida;
    }

    public function calcula()
    {
        $entrada = new DateTime($this->entrada);
        $saida = new DateTime($this->saida);

        $horas_trabalhadas = $saida->diff($entrada);

        return [
            'entrada' => $this->entrada,
            'saida' => $this->saida,
            'trabalhadas' => $horas_trabalhadas->format('%h horas trabalhadas')
        ];
    }
}

if ($_POST) {
    $horario = new Horario($_POST['hr_entrada'], $_POST['hr_saida']);
    $horario = $horario->calcula();
}


?>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Capítulo 1 - Laboratório 1</title>
</head>
<body>
	<form action="" method="post">
		<table cellpadding="5" border="1">
			<tr>
				<th>Horario Entrada :</th>
				<td><input type="text" name="hr_entrada" /></td>
			</tr>
			<tr>
				<th>Horario Saída :</th>
				<td><input type="text" name="hr_saida" /></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="Calcular" /></td>
			</tr>
		</table>
	</form>
<?php
if (isset($horario)) {?>

    <hr>
    	<h4>Resultado</h4>
    	<table cellpadding="5" border="1">
    		<tr>
    			<th>Entrada :</th>
    			<td><?php echo $horario['entrada']?></td>
    		</tr>
    		<tr>
    			<th>Saída :</th>
    			<td><?php echo $horario['saida']?></td>
    		</tr>
    		<tr>
    			<th>Horas Trabalhadas:</th>
    			<td><?php echo $horario['trabalhadas']?></td>
    		</tr>
    	</table>
<?php
}
?>
</body>
</html>
