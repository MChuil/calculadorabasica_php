<?php
  if(isset($_POST["submit"]))
  {
    switch ($_POST["operador"])
    {
	    case "suma":
		    $resultado = $_POST["operador1"] + $_POST["operador2"];
			break;
        case "resta":
		    $resultado = $_POST["operador1"] - $_POST["operador2"];
			break;	
        case "multiplicacion":
		    $resultado = $_POST["operador1"] * $_POST["operador2"];
			break;
        case "division":
        	if($_POST["operador2"]==0){
        		$resultado ="No se puede dividir entre cero(0)";
        	}else{
        		$resultado = $_POST["operador1"] / $_POST["operador2"];
        	}
			break;
	}	
   }
?>

<html>
<head><title>calculadora</title><head>
<body>
<form action="index.php" method="post">
<table border="1">
<tr><td>Numero 1</td><td></td><td>Numero 2</td><td><td></tr>
<tr><td><input type="text" name="operador1"/></td>
<td>
<select name="operador">
    <option value="suma">+</option>
	<option value="resta">-</option>
	<option value="division">/</option>
	<option value="multiplicacion">*</option>
</select>	
</td>
<td><input type="text" name="operador2"/></td>
<td><input type="submit" name="submit" value="Calcular"/></td>
</tr>
</table>
</form>
<?php
if(isset($resultado))
{	
echo "El resultado es: {$resultado}";
}
?>
</body>
</html>