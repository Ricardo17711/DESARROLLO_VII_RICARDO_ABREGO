<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIMER_ENUNCIADO</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        .destacado { color: blue; font-weight: bold; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid color#f2f2f2; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
<?php require("utilidades_texto.php");
  $claves = ["Mañana es otro día", "tengo 21 años", "no como carne"];

?>

 <h1>Primer_Enunciado</h1>
    <table>
        <tr>
            <th>PALABRAS</th>
            <th>NUMERO DE PALABRAS</th>
            <th>NUMERO DE VOCALES</th>
            <th>FRASE INVERTIDA</th>
        </tr>
        <?php foreach($claves as $clave => $claves): ?>
            <tr>
                <td> <?= $claves  ?></td>
                    <td><?= contar_palabras($claves) ?></td>
                    <td><?= contar_vocales($claves) ?></td>
                    <td><?= invertir_palabras($claves) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

