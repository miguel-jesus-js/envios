<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Testing\Fluent\AssertableJson;

class CalcularEnvioTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $data = ['estado' => 'chiapas', 'municipio' => 'ocosingo', 'colonia' => 'bonampack', 'calle' => 'yachilan', 'n_casa' => 18];
        $response = $this->post('api/calcularEnvio?calle=yaxchilan&n_casa=18&colonia=bonampack&municipio=ocosingo&estado=chiapas');
        $response->assertStatus(200);
        $response->assertJson(fn(AssertableJson $json) => 
            $json->whereType('origen', 'string')->etc()
        );
        $response->dump();
    }
}
