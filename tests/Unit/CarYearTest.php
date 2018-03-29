<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYear()
    {
        $car = Car::find(40);
        $car_year = (int) $car->year;
        $this->assertInternalType('int', $car_year);
    }
}
