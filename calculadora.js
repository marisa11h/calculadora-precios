/**
 * Calcula el importe del IVA para un precio base dado.
 * 
 * @param {number} precio - El precio original del producto sin impuestos.
 * @param {number} [porcentajeIva=21] - El porcentaje de IVA a aplicar.
 * @returns {number} El precio con el IVA ya sumado.
 */
function calcularIva(precio, porcentajeIva = 21) {
    return precio * (1 + porcentajeIva / 100);
}

/**
 * Resta un porcentaje de descuento a un precio base.
 * 
 * @param {number} precio - El precio sobre el cual se aplicará la rebaja.
 * @param {number} porcentajeDescuento - El porcentaje a descontar (0-100).
 * @returns {number} El precio final tras restar el descuento.
 */
function aplicarDescuento(precio, porcentajeDescuento) {
    return precio * (1 - porcentajeDescuento / 100);
}

/**
 * Calcula el precio final aplicando primero el descuento y luego el IVA.
 * 
 * @param {number} precio - El precio base inicial.
 * @param {number} descuento - El porcentaje de descuento a aplicar.
 * @param {number} [iva=21] - El porcentaje de IVA a aplicar.
 * @returns {number} El precio final neto para el consumidor.
 */
function calcularPrecioFinal(precio, descuento, iva = 21) {
    const precioRebajado = aplicarDescuento(precio, descuento);
    return calcularIva(precioRebajado, iva);
}
