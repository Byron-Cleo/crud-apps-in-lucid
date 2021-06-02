<?php

namespace App\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;

class ShowCreateTourFormFeature extends Feature
{
    public function handle(Request $request)
    {
        return view('tours.create');
    }
}
