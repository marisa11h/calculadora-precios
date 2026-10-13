def calcular_iva(precio: float, porcentaje_iva: float = 21.0) -> float:
    """
    Calcula el importe del IVA para un precio base dado.

    :param precio: El precio original del producto sin impuestos.
    :param porcentaje_iva: El porcentaje de IVA a aplicar (por defecto 21.0).
    :return: El precio con el IVA ya sumado.
    """
    return precio * (1 + porcentaje_iva / 100)

def aplicar_descuento(precio: float, porcentaje_descuento: float) -> float:
    """
    Resta un porcentaje de descuento a un precio base.

    :param precio: El precio sobre el cual se aplicará la rebaja.
    :param porcentaje_descuento: El porcentaje a descontar (ej. 10 para 10%).
    :return: El precio final tras restar el descuento.
    """
    return precio * (1 - porcentaje_descuento / 100)

def calcular_precio_final(precio: float, descuento: float, iva: float = 21.0) -> float:
    """
    Calcula el precio final aplicando primero el descuento y luego el IVA.

    :param precio: El precio base inicial.
    :param descuento: El porcentaje de descuento a aplicar.
    :param iva: El porcentaje de IVA a aplicar.
    :return: El precio final neto para el consumidor.
    """
    precio_rebajado = aplicar_descuento(precio, descuento)
    return calcular_iva(precio_rebajado, iva)
