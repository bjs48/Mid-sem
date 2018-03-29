<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCar()
    {
        $car = new Car();
        $car->Make = 'Honda';
        $car->Model = 'Accord';
        $car->Year = '2000';
        $car->save();
        $this->assertTrue($car->delete());
    }
}
