<?php

namespace App\Services\Tour\Features;

// use Illuminate\Http\Request;
use App\Domains\Tour\Requests\TourRequest;
use App\Domains\Tour\Jobs\UpdateTourDetailsJob;

use Lucid\Units\Feature;

class EditTourFeature extends Feature
{
    public function __construct(int $id)
    {
        //
        $this->id = $id;
    }

    public function handle(TourRequest $request)
    {
        $this->run(UpdateTourDetailsJob::class, [
            'id' => $this->id,
            'tour_name' => $request->input('tour_name'),
            'location' => $request->input('location')]);

            return redirect('/tours')->with('message', 'The Form Was Succesfully Updated');;
    }
}
