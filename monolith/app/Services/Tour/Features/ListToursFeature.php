<?php

namespace App\Services\Tour\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Tour\Jobs\ListToursJob;

class ListToursFeature extends Feature
{
    public function handle(Request $request)
    {
        $tours = $this->run(new ListToursJob);
        return view('tour::index', ['tours' => $tours]);

    }
}
