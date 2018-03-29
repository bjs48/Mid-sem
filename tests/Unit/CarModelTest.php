<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModel()
    {
        $car = Car::find(12);
        $model = (string) $car->Model;
        $this->assertInternalType("string",$model);
    }
}
