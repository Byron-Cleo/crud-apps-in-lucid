<?php

namespace App\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Tour\Jobs\DeleteTourJob;

class DeleteTourFeature extends Feature
{
    public function __construct(int $id)
    {
        //
        $this->id = $id;
    }

    public function handle(Request $request)
    {
        $this->run(DeleteTourJob::class, ['id' => $this->id ]);

            return redirect('/tours')->with('message', 'The Tour has been Deleted');

    }
}
