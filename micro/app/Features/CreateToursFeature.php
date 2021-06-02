<?php

namespace App\Features;

//this is the default request object which is the tool that has all the input from the form
// use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Tour\Requests\CreateTour;
use App\Domains\Tour\Jobs\SaveTourJob;

class CreateToursFeature extends Feature
{
    public function handle(CreateTour $request)
    {
        $this->run(SaveTourJob::class, [
            'tour_name' => $request->input('tour_name'),
            'location' => $request->input('location'),
        ]);

        return redirect('/tours')->with('message', 'A New Tour has been Created');
    }
}
