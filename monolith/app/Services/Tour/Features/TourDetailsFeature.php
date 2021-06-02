<?php

namespace App\Services\Tour\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Tour\Jobs\GetTourDetailsJob;


class TourDetailsFeature extends Feature
{
    public function __construct(int $id)
    {
        //
        $this->id = $id;
    }

    public function handle(Request $request)
    {
        $tour = $this->run(new GetTourDetailsJob($this->id));

        return view('tour::details', ['tour' => $tour]);

    }
}
