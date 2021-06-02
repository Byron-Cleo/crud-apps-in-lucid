<?php

namespace App\Services\Tour\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;

class ShowCreateTourFormFeature extends Feature
{
    public function handle(Request $request)
    {
        return view('tour::create');
    }
}
