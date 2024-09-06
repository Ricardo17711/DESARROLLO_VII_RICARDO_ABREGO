
<?php 
  function  calcular_descuento($total_compra){
      if($total_compra < 100){
        return $total_compra;

      }elseif($total_compra > 100 && $total_compra < 500){
        return $total_compra - ($total_compra * 0.05);

      }elseif($total_compra > 501 && $total_compra < 1000){
        return $total_compra - ($total_compra * 0.10);
        
      }elseif($total_compra > 1000){
        return $total_compra - ($total_compra * 0.15);
      }
  }

  function aplicar_impuesto($subtotal){
    $subtotal_impuesto = $subtotal + ($subtotal * 0.07); 
    return $subtotal_impuesto;
  }

  function calcular_total($subtotal, $descuento, $impuesto){
    $total = $subtotal - $descuento + $impuesto;
    return $total;
  }
?>
