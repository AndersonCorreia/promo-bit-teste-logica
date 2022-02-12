<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $productsStandardized  = [];

        foreach( self::products as $productString ) {
            $product = explode("-", $productString);
            $productColor = $product[0];
            $productSize = $product[1];
            if( !isset($productsStandardized[$productColor]) ) {
                $productsStandardized[$productColor] = [];
            }
            // increment by 1 if the size has already been defined or initialize it to 1
            if( isset($productsStandardized[$productColor][$productSize]) ) {
                $productsStandardized[$productColor][$productSize]++;
            }
            else {
                $productsStandardized[$productColor][$productSize] = 1;
            }
        }
        return $productsStandardized;
    }
}