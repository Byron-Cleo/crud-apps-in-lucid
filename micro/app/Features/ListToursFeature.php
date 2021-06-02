<?php

namespace App\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Tour\Jobs\ListToursJob;

class ListToursFeature extends Feature
{
    public function handle(Request $request)
    {
        $tours = $this->run(new ListToursJob);

        return view('tours/index', ['tours' => $tours]);
    }
}
