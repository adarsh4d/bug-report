<?php

namespace App\Observers;

use App\Models\Cargo;

class CargoObserver
{
    public function created(Cargo $cargo): void
    {
        // If the below line is commented out, it works
        $cargo->flight->update([ 'name' => $cargo->name ]);
    }
}
