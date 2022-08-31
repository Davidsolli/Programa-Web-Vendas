<?php
class vendas
{
    public $morango, $maca, $resultado;

    function validar($morango, $maca)
    {
        if($morango <= 5)
        {
            $MorangoEmD = $morango * 2.5;
        }else
        {
            $MorangoEmD = $morango * 2.20;
        }
        
        if($maca <= 5)
        {
            $MacaEmD = $maca * 1.8;
        }else
        {
            $MacaEmD = $maca * 1.5;
        }

        $SomaDasFrutas = $morango + $maca;

        $SomaDasCompras = $MorangoEmD + $MacaEmD;
        
        if($SomaDasCompras >= 25 || $SomaDasFrutas >= 8)
        {
            $Desconto = ($SomaDasCompras * 10) / 100;
            return $ValorFinal = $SomaDasCompras - $Desconto;
        }else
        {
            return $ValorFinal = $SomaDasCompras; 
        }
    }

    function imprimir($resultado)
    {
        echo "Valor a ser pago: \n" . $resultado;
    }
}

$cliente = new vendas;
$resultado = $cliente -> validar($_GET['morango'],
                                 $_GET['maca']);
$cliente -> imprimir($resultado);
?>