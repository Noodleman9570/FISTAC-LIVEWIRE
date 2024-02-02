<?php

namespace App\Helpers;

class Helpers
{
    public static function generarCodigo($longitud)
    {
        $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $longitud_caracteres = strlen($caracteres);
        $codigo = '';

        for ($i = 0; $i < $longitud; $i++) {
            $index = rand(0, $longitud_caracteres - 1);
            $codigo .= $caracteres[$index];
        }

        return $codigo;
    }

    public static function nameSanitize($name)
    {
        $name = preg_replace('/\s+/','',$name);
        $splitNames = explode(' ', $name);
        $sanitizedNames = [];
        
        foreach($splitNames as $slice){
            array_push($sanitizedNames, ucfirst(strtolower(trim($slice))));
        }

        $name = implode('', $sanitizedNames);
        return $name;
    }

    public static function splitNames($names){
        $splitNames = explode(' ', $names);
        $arrayName = [];
        $count = 0;

        foreach($splitNames as $name){
            if($count < 1){
                $arrayName[0] = $name;
                $arrayName[1] = '';
            }else{
                $arrayName[1] .= $name.' ';
            }

            $count++;
        }

        $arrayName[1] = preg_replace('/\s+/','',$arrayName[1]);

        return $arrayName;
    }
}
