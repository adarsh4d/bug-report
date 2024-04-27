<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Cargo;
use App\Models\Flight;

class FlightTest extends TestCase
{

    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     */
    public function test_factory_observer(): void
    {
        Flight::factory()->create();

        $action = Cargo::factory()->create();

        /** 
        * By default $action return only its own fields
        * But if Observer is attached in which the flight is updated (See CargoObserver.php)
        * it returns the flight relation as well
        */
        dd($action->toArray());
    }
}
