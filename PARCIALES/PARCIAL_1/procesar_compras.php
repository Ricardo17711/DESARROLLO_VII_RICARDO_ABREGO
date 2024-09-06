<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEGUNDO_ENUNCIADO</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        .destacado { color: blue; font-weight: bold; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid color#f2f2f2; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
<h1>SEGUNDO_ENUNCIADO</h1>
    <table>
        <tr>
            <th>LISTA DE PRODUCTOS</th>
            <th>SUBTOTAL</th>
            <th>DESCUENTO</th>
            <th>IMPUESTO</th>
            <th>TOTAL A PAGAR</th>
        </tr>

    </table>
</body>
</html>

<?php 
   require ("funciones_tienda.php");

   $consultarprecio = ['camisa' => 20, 'pantalon' => 30, 'zapatos' => 70, 'calcetines' => 1, 'gorra' => 15];
   $carrito = [
                
                'PANTALON' => 30,
                'GORRA' => 15,
                'ZAPATOS' => 70,
                'CALCETINES' => 1,
                'CAMISA' => 20,
                
            ];
?>
