<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCar()
    {
        $car = new Car();
        $car->make = 'Honda';
        $car->model = 'Accord';
        $car->year = '2000';

        $this->assertTrue($car->save());
    }
}
