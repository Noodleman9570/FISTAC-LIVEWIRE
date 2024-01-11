<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contribuyente>
 */
class ContribuyenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function cedula() 
    {
      $nro = (string) mt_rand(10000000,99999999);
      
      $ci = substr($nro, 0, -1);
      $suma = 0;
      for ($i=0; $i<strlen($nro); $i++) {
        $digito = $nro[$i];
        $suma += ((($nro[$i] - '0') + ($i+2)) % 10) * (9 - $i);
      }
    
      $verif = $suma % 10 ? 10 - $suma % 10 : 0;
    
      return $ci.$verif;
    }

    function generarTelefonoVenezolano() {

        $codigos_area = ['04','02','03','0241','0242','0243','0244','0245','0246','0247'];
        
        $prefijos = ['', '0414', '0412', '0424', '0416', '0426'];
      
        // Generar código de área
        $codigo_area = $codigos_area[array_rand($codigos_area)]; 
        
        // Generar número aleatorio
        $numero = mt_rand(10000000,99999999);
      
        // Generar prefijo opcional
        $prefijo = $prefijos[array_rand($prefijos)];
      
        // Formatear número completo
        $telefono = $prefijo . $codigo_area . $numero;
      
        return $telefono;
      
      }

    public function definition(): array
    {
        return [
            'cedula' => $this->cedula(),
            'nombre' => fake()->name(),
            'apellido' => fake()->name(),
            'direccion' => fake()->text,
            'telefono' => $this->generarTelefonoVenezolano()
        ];
    }
}
