<?php

namespace App\Features;

// use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Tour\Requests\UpdateTourRequest;
use App\Domains\Tour\Jobs\UpdateTourDetailsJob;

class EditTourFeature extends Feature
{
    public function __construct(int $id)
    {
        //
        $this->id = $id;
    }

    public function handle(UpdateTourRequest $request)
    {
        $this->run(UpdateTourDetailsJob::class, [
            'id' => $this->id,
            'tour_name' => $request->input('tour_name'),
            'location' => $request->input('location')]);

            return redirect('/tours')->with('message', 'The Form Was Succesfully Updated');;
    }
}
