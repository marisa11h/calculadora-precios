<?php

/**
 * Calcula el importe del IVA para un precio base dado.
 *
 * @param float $precio El precio original del producto sin impuestos.
 * @param float $porcentajeIva El porcentaje de IVA a aplicar (por defecto 21).
 * @return float El precio con el IVA ya sumado.
 */
function calcularIva(float $precio, float $porcentajeIva = 21.0): float {
    return $precio * (1 + $porcentajeIva / 100);
}

/**
 * Resta un porcentaje de descuento a un precio base.
 *
 * @param float $precio El precio sobre el cual se aplicará la rebaja.
 * @param float $porcentajeDescuento El porcentaje a aplicar (ej. 15 para 15%).
 * @return float El precio final tras restar el descuento.
 */
function aplicarDescuento(float $precio, float $porcentajeDescuento): float {
    return $precio * (1 - $porcentajeDescuento / 100);
}

/**
 * Calcula el precio final aplicando primero el descuento y luego el IVA.
 *
 * @param float $precio El precio base inicial.
 * @param float $descuento El porcentaje de descuento a aplicar.
 * @param float $iva El porcentaje de IVA a aplicar.
 * @return float El precio final neto para el consumidor.
 */
function calcularPrecioFinal(float $precio, float $descuento, float $iva = 21.0): float {
    $precioRebajado = aplicarDescuento($precio, $descuento);
    return calcularIva($precioRebajado, $iva);
}
