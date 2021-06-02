<?php

namespace App\Services\Tour\Features;

// use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Tour\Requests\TourRequest;
use App\Domains\Tour\Jobs\SaveTourJob;

class CreateToursFeature extends Feature
{
    public function handle(TourRequest $request)
    {
        $this->run(SaveTourJob::class, [
            'tour_name' => $request->input('tour_name'),
            'location' => $request->input('location'),
        ]);

        return redirect('/tours')->with('message', 'A New Tour has been Created');

    }
}
